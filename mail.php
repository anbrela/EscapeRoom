<?php

// if the url field is empty
if (isset($_POST['url']) && $_POST['url'] == '') {

    // put your email address here
    $youremail = 'pablonaveiralopez@gmail.com, anne.gurt88@gmail.com';

    // prepare message
    $body = "Nuevo mensaje desde el formulariio de contacto Hype:

	Nombre:  $_POST[name]
	Email:  $_POST[email]
	Mensaje:  $_POST[message]";

    if ($_POST['email'] && !preg_match("/[\r\n]/", $_POST['email'])) {
        $headers = "From: $_POST[email]";
    } else {
        $headers = "From: $youremail";
    }

    mail($youremail, 'Mensaje desde la web', $body, $headers);

}