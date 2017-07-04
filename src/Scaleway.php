<?php

namespace rpsimao\Scaleway;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Request;

class Scaleway  {

   
	protected $token;

	private $client = null;

	const PAR_CENTER = 'https://cp-par1.scaleway.com';
	const AMS_CENTER = 'https://cp-ams1.scaleway.com';

	protected $location;

   	public function __construct($token){

   		$this->token = $token;

   		$this->client = new Client();

   }


   public function setLocation($location)
   {
   	 $this->location = $location;
   }

   

   private function getLocation()
   {
   		switch ($this->location) {
   			case 'paris':
   				return self::PAR_CENTER;
   				break;

   			case 'amsterdam':
   				return self::AMS_CENTER;
   				break;	
   			
   			default:
   				return self::PAR_CENTER;
   				break;
   		}

   }

	public function StatusCodeHandling($e)
	{
		if ($e->getResponse()->getStatusCode() == '400')
			{
				$this->prepare_access_token();
			}
			elseif ($e->getResponse()->getStatusCode() == '422')
			{
				$response = json_decode($e->getResponse()->getBody(true)->getContents());
				return $response;
			}
			elseif ($e->getResponse()->getStatusCode() == '500')
			{
				$response = json_decode($e->getResponse()->getBody(true)->getContents());
				return $response;
			}
			elseif ($e->getResponse()->getStatusCode() == '401')
			{
				$response = json_decode($e->getResponse()->getBody(true)->getContents());
				return $response;
			}
			elseif ($e->getResponse()->getStatusCode() == '403')
			{
				$response = json_decode($e->getResponse()->getBody(true)->getContents());
				return $response;
			}
			else
			{
				$response = json_decode($e->getResponse()->getBody(true)->getContents());
				return $response;
			}
	}


   public function getServers()
   {
		try
		{
			$url = $this->getLocation() . '/server';
			
			$header = array('content-type'=>'application/json', 'x-auth-token' => $this->token);
			$response = $this->client->get($url, array('headers' => $header));
			$result = $response->getBody()->getContents();
			return $result;
		}
		catch (RequestException $e)
		{
			$response = $this->StatusCodeHandling($e);
			return $response;
		}



   }



}