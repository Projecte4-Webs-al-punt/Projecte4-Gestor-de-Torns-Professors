<?php


namespace App\Http\Services;


class TutoryApiService
{
    /**
     * @var string
     */


    public static function getNumber($numeromin,$numeromax) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://www.randomnumberapi.com/api/v1.0/random?min=$numeromin&max=$numeromax&count=1",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => array('name' => '200'),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return substr($response, 1, -1);
    }
}