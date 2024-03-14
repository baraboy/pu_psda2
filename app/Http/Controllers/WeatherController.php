<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function getWeather()
    {
        // Replace 'YOUR_API_KEY' with your OpenWeather API key
        $apiKey = '544982e7a20845d3bde54718240703';
        
        // Create a new Guzzle client instance
        $client = new Client();

        // API endpoint URL with your desired location and units (e.g., London, Metric units)
        //$apiUrl = "http://api.weatherapi.com/v1/current.json?key={$apiKey}&q=Mataram&aqi=yes";
        $apiUrl = "https://api.weatherapi.com/v1/forecast.json?q=Mataram&days=5&hour=24&aqi=yes&key={$apiKey}";
        
        try {
            // Make a GET request to the OpenWeather API
            $response = $client->get($apiUrl);

            // Get the response body as an array
            $data = json_decode($response->getBody(), true);

            // Handle the retrieved weather data as needed (e.g., pass it to a view)
            return view('home', ['weatherData' => $data]);
        } catch (\Exception $e) {
            // Handle any errors that occur during the API request
            return view('api_error', ['error' => $e->getMessage()]);
        }
    }
}
