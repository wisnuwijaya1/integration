<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sandbox.posindonesia.co.id:8245/token',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => array(
            "Authorization: Basic Q1lpX0dYdThMV2FmcUpGb25OZ3JtNGZiS3o0YTpzMG1iX1Y0YlR1NUVNNXpQczhfVnlkVVhCZklh",
            "content-type: application/x-www-form-urlencoded"
        ),
        CURLOPT_POSTFIELDS => "grant_type=client_credentials",
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $data = json_decode($response);

}
