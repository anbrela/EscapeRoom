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
/*         $headers = "From: $_POST[email]";
 */$headers = "From: pablonaveiralopez@gmail.com";
    } else {
        $headers = "From: $youremail";
    }

    $myfile = fopen("logs.txt", "a") or die("Unable to open file!");

    fwrite($myfile, "\n" . $body);
    fclose($myfile);

    mail($youremail, 'Mensaje desde la web', $body, $headers);
    var_dump("mensaje enviado:" . $_POST['name']+"sdasd");

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio formulario</title>
</head>

<body>
    <h2>Enviado correctamente</h2>
</body>

</html>