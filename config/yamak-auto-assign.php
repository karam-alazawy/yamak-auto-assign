<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Radius
    |--------------------------------------------------------------------------
    |
    | The maximum distance (in kilometers) within which a driver should be
    | considered for assignment.
    |
    */
    'radius' => 10, // Example value, adjust as needed

    /*
    |--------------------------------------------------------------------------
    | Rating Threshold
    |--------------------------------------------------------------------------
    |
    | The minimum driver rating required for assignment.
    |
    */
    'rating_threshold' => 4.0, // Example value, adjust as needed

    /*
    |--------------------------------------------------------------------------
    | Availability Window
    |--------------------------------------------------------------------------
    |
    | The time window (in minutes) during which drivers are considered available
    | for assignments.
    |
    */
    'availability_window' => 60, // Example value, adjust as needed
];
