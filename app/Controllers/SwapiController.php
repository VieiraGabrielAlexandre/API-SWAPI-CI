<?php


namespace App\Controllers;


use GuzzleHttp\Client;

class SwapiController extends BaseController
{
    public function index()
    {
        $uri = 'api/films';
        $response = $this->swapi($uri);
        $data['status'] = $response->getStatusCode();
        $data['body'] = \GuzzleHttp\json_decode($response->getBody(), 1);
        echo view('header', ['title' => 'API Para SWAPI']);
        echo view("swapi/index", $data);
        echo view('footer');
    }

    public function episode($id)
    {
        $uri = 'api/films/'.$id;
        $response = $this->swapi($uri);
        $data['body'] = json_decode($response->getBody(), 1);
        echo view('header', ['title' => 'Detalhes Para SWAPI']);
        echo view("swapi/episode", $data);
        echo view('footer');
    }

    public function swapi($uri)
    {
        $url = 'http://swapi.dev/';
        $client = new Client(['base_uri' => $url]);
        $response = $client->get($uri);
        return $response;
    }
}