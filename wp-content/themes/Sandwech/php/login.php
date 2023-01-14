<?php

function login()
{
    $url = "http://localhost/food-api/API/user/login.php";
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $data = '
    {
        "email": "$_POST["email"]",
        "password": "$_POST["password"]"
    }';

    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($curl);
    curl_close($curl);

    if (json_decode($response)->response == true) {
        $_SESSION['id'] = json_decode($response)->userID;
        return true;
    } else {
        return false;
    }
}
