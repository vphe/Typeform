<?php

namespace vphe\Typeform;

use vphe\Typeform\Models\Form;
use vphe\Typeform\Models\Image;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\Middleware;

class TypeformApiClient
{

    const API_URL = 'https://api.typeform.com/';

    /**
     * The Personal Token (API key)
     *
     * @var string
     */
    private $personal_token;

    /**
     * @var \GuzzleHttp\Client
     */
    public $http_client;

    /**
     * API constructor.
     * @param $personal_token
     */
    public function __construct($personal_token)
    {
        $this->personal_token = $personal_token;

        // prepare middleware as handle to attache the Auth header for each request.
        $http_client_handler_stack = new HandlerStack();
        $http_client_handler_stack->setHandler(new CurlHandler());
        $http_client_handler_stack->push(Middleware::mapRequest(function (RequestInterface $request) {
            return $request->withHeader('Authorization', 'Bearer ' . $this->personal_token)
                           ->withHeader('Accept', 'application/json');

        }));

        // set the HTTP client with params
        $this->http_client = new Client(array(
            'base_uri' => self::API_URL,
            'handler' => $http_client_handler_stack
        ));
    }

    /**
     * Get the Personal Token
     *
     * @return string
     */
    public function getPersonalToken()
    {
        return $this->personal_token;
    }

    /**
     * Create Form method.
     *
     * @param \vphe\Typeform\Models\Form $form
     * @return array|null
     */
    public function createForm(Form $form)
    {

        $response = $this->http_client->request('POST', '/forms', array(
            'json' => $form
        ));

        if ($response->getStatusCode() == 201) {

            $form = json_decode($response->getBody(), true);
            return $form;

        }

        return null;

    }

    /**
     * @param $form_id
     * @param Form $form
     * @return bool
     */
    public function updateForm($form_id, $form)
    {
        $response = $this->http_client->request('PUT', '/forms/' . $form_id, array(
            'json' => $form
        ));

        if ($response->getStatusCode() == 200) {
            return true;
        }

        return false;
    }

    /**
     * Retrieve Form method.
     *
     * @param $form_id
     * @return mixed|null
     */
    public function retrieveForm($form_id)
    {
        $response = $this->http_client->request('GET', '/forms/' . $form_id);

        if ($response->getStatusCode() == 200) {
            $form = json_decode($response->getBody(), true);

            return $form;
        }

        return null;
    }

    /**
     * @param $image
     * @param $file_name
     * @param $media_type
     *
     * @return \vphe\Typeform\Models\Image|null
     */
    public function createImage($image, $file_name, $media_type = '')
    {

        $request_json = array(
            'image' => $image,
            'media_type' => $media_type,
            'file_name' => $file_name,
        );

        $response = $this->http_client->request('POST', '/images', array(
            'json' => $request_json
        ));

        if ($response->getStatusCode() == 201) {
            $image = json_decode($response->getBody(), true);

            return new Image(
                $image['id'],
                $image['src'],
                $image['file_name'],
                $image['width'],
                $image['height'],
                $image['media_type'],
                $image['has_alpha'],
                $image['avg_color']
            );
        }

        return null;
    }

    /**
     * @param $file
     * @return \vphe\Typeform\Models\Image|null
     * @throws \vphe\Typeform\TypeformApiException
     */
    public function createImageFromFile($file)
    {

        $allowed_images_media_types = array(
            'image/gif',
            'image/jpeg',
            'image/png',
        );

        if (file_exists($file) && is_readable($file)) {

            $local_image_info = getimagesize($file);

            if (in_array($local_image_info['mime'], $allowed_images_media_types)) {

                $local_image_name = basename($file);
                $local_image_in_base_64 = base64_encode(file_get_contents($file));

                $image = $this->createImage($local_image_in_base_64, $local_image_name, $local_image_info['mime']);

                if ($image instanceof Image) {
                    return $image;
                }

            } else {
                throw new TypeformApiException('Invalid image type', 1302);
            }

        } else {
            throw new TypeformApiException('Image file not exists or not readable', 1301);
        }

        return null;
    }

    /**
     * @param string $image_id
     * @param bool $binary
     * @return \vphe\Typeform\Models\Image|string|null
     */
    public function retrieveImage($image_id, $binary = false)
    {

        if ($binary) {
            //@todo process headers updated for binary return
            //unset($request_headers['Accept']);
        }

        $response = $this->http_client->request('GET', '/images/' . $image_id);

        if ($response->getStatusCode() == 200) {

            if ($binary) {
                //@todo process binary return

            } else {
                $image = json_decode($response->getBody(), true);

                return new Image(
                    $image['id'],
                    $image['src'],
                    $image['file_name'],
                    $image['width'],
                    $image['height'],
                    $image['media_type'],
                    $image['has_alpha'],
                    $image['avg_color']
                );
            }
        }

        return null;

    }

    /**
     * @return mixed|null
     */
    public function retrieveImages()
    {
        $response = $this->http_client->request('GET', '/images');

        if ($response->getStatusCode() == 200) {
            $images = json_decode($response->getBody(), true);

            return $images;
        }

        return null;
    }

    /**
     * @return mixed|null
     */
    public function retrieveThemes()
    {

        $response = $this->http_client->request('GET', '/themes', array('query' => array('page_size' => 100)));

        if ($response->getStatusCode() == 200) {
            $themes = json_decode($response->getBody(), true);

            return $themes;
        }

        return null;
    }

}