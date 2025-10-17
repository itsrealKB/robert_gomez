<?php
namespace App\Helpers;

class Haversine
{
    /**
 * Calculate the distance between two lat/long points using the Haversine formula.
 *
 * @param float $lat1 Latitude of the first point
 * @param float $lon1 Longitude of the first point
 * @param float $lat2 Latitude of the second point
 * @param float $lon2 Longitude of the second point
 *
 * @return float Distance in kilometers
 */

    public static function calculate($lat1, $lon1, $lat2, $lon2)
    {
        $R = 6371; // Radius of the earth in km
        $dLat = deg2rad($lat2 - $lat1);
        $dLon = deg2rad($lon2 - $lon1);
        $a = sin($dLat / 2) * sin($dLat / 2) +
        cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
        sin($dLon / 2) * sin($dLon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $R * $c; // Distance in km
        return $distance;
    }
}
