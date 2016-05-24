<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 5/23/16
 * Time: 9:07 PM
 */

namespace BookIt\Service\Demo\Connection;


use BookIt\Service\Demo\Message\RequestInterface;
use BookIt\Service\Demo\Message\ResponseInterface;
use Zend\Soap\Client;

class Connection
{

    protected $username;
    protected $password;
    protected $url;
    protected $wsdl;
    protected $soapClient;

    public function __construct($config = null)
    {
        if ($config) {
            $this->setConfig($config);
        }
    }

    public function send(RequestInterface $request) {

        $connection = $this->getSoapClient();
        $connection->{$request->getMethodName()}($request->getParams());

        /** @var ResponseInterface $response */
        $response = new {$request->getResponseClass()}();
        $response->setFromRawResponse($raw);
    }

    public function setConfig($config)
    {
        $this->username = $config['username'];
        $this->password = $config['password'];
        $this->url = $config['url'];
        $this->wsdl = $config['wsdl'];
    }

    public function getSoapClient()
    {
        if (!$this->soapClient) {
            $client = new Client($this->wsdl);
            $client->setUri($this->url);
            $client->setHttpLogin($this->username);
            $this->soapClient = $client;
        }
        return $this->soapClient;
    }

}