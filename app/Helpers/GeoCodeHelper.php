<?php
namespace App\Helpers;
use Illuminate\Support\Facades\Http;
class GeoCodeHelper
{
 /**
 * Get latitude and longitude for a given zip code
 *
 * @param string $zipCode
 * @return array|null
 */
    public static function geocodeZipCode($zipCode)
    {
        $apiKey = env('GOOGLE_MAPS_API_KEY'); // Set your API Key in .env file
        $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$zipCode}&key={$apiKey}";

        // Send the request to the API
        $response = Http::get($url);
        // Check if the response was successful
        if ($response->successful()) {
            $data = $response->json();
                // Check if the data contains a result
            if (isset($data['results'][0])) {
                $geometry = $data['results'][0]['geometry']['location'];
                return [
                    'latitude' => $geometry['lat'],
                    'longitude' => $geometry['lng']
                ];
            }
        }

        return null; // Return null if no result is found or API fails
    }
}
