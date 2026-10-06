<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TrainingCenterController extends Controller
{
    private function fetchDataFromApi($url)
    {
        $response = Http::get($url);

        return $response->json();
    }

    public function index()
    {
        $url = env('URL_SERVER_API');

        $trainingcenters = $this->fetchDataFromApi($url . '/trainingCenters');

        return view('trainingcenters.index', compact('trainingcenters'));
    }

    public function show($id)
    {
        $url = env('URL_SERVER_API');

        $trainingcenter = $this->fetchDataFromApi(
            $url . '/trainingCenters/' . $id
        );

        return view('trainingcenters.show', compact('trainingcenter'));
    }
}