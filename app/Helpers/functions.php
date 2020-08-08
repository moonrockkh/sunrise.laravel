<?php

function hello()
{
    return 'Hello World!';
}

function my_encrypt($str)
{
    $output = false;
    $method = 'AES-256-CBC';
    $key = "6HftItTu0zFp3B1mqg6YVnnYZ4ALDEn2abfd73sd34234i";
    $iv = "6HftI8Tu0zFp3B14";
    $output = openssl_encrypt($str, $method, $key, 0, $iv);
    return base64_encode($output);
}
function my_decrypt($str)
{
    $output = false;
    $method = 'AES-256-CBC';
    $key = "6HftItTu0zFp3B1mqg6YVnnYZ4ALDEn2abfd73sd34234i";
    $iv = "6HftI8Tu0zFp3B14";
    $output = openssl_decrypt(base64_decode($str), $method, $key, 0, $iv);
    return $output;
}