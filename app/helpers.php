<?php

use App\Models\gallery;

function get_gallery()
{
    $data = gallery::all();
    return $data;
}