<?php

namespace Yamak\YamakAutoAssign;

use App\Models\Driver; // Adjust namespace as per your application's structure

class DriverAssignmentService
{
    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function findClosestAvailableDriver($destination)
    {
        // Query database for available drivers within a certain radius
        $availableDrivers = Driver::where('availability', true)->get();

        $closestDriver = null;
        $minDistance = PHP_INT_MAX;

        foreach ($availableDrivers as $driver) {
            // Calculate distance between driver location and destination
            $distance = $this->calculateDistance(
                $driver->latitude,
                $driver->longitude,
                $destination['latitude'],
                $destination['longitude']
            );

            // Update closest driver if distance is smaller
            if ($distance < $minDistance) {
                $closestDriver = $driver;
                $minDistance = $distance;
            }
        }

        return $closestDriver;
    }

    private function calculateDistance($lat1, $lon1, $lat2, $lon2)
    {
        // Implementation of Haversine formula to calculate distance between two points
        // Adjust this method according to your specific calculation logic
        // ...

        // For demonstration, let's assume a simple calculation
        $distance = sqrt(pow($lat2 - $lat1, 2) + pow($lon2 - $lon1, 2));

        return $distance;
    }
}
