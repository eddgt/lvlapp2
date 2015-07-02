<?php
$file = 'Manejo_envios_SACA_ver_2015-06-23.pdf' 
// check if the file exists
if (file_exists($file)) {
    // Get the file content to put into your response
    $content = file_get_contents($file);
    //Build your Laravel Response with your content, the HTTP code and the Header application/pdf
    return Response::make($content, 200, array('content-type'=>'application/pdf'));
}
?>