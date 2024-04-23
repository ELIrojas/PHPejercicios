<?php
// inicializamos una nueva sesion de CURL;cURL handle 
const API_URL="https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
//iniciar que queremos recibir el resultado de la petición y no mostrar en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//ejecutar la recepcion y guardar el resultado
//uan alteranativa seria usar file-get_contents
//$result =file_get_contents(APLI_URL); //si solo quieres hacer un GET de una API
$result = curl_exec($ch);
// Busca los datos 
$data =json_decode($result,true);//transformamos el json en resultado
//cerramos 

curl_close($ch);

var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie-dead pool </title>
    <!-- Centered viewport --> 
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"/>

</head>
<body>
    <pre style="font-size: 8px; overflow:scroll; height:250px;">
        <?php var_dump($data);?>
    </pre>
    <h1>Próximos estrenos de películas</h1>

    <section>
    <img src="<?= $data["poster_url"]; ?>" width="300" height="100px" alt="Poster de <?= $data["title"]; ?>" style="border-radius:16px">
    </section>

    <hgroup>
        <h3> <?= $data["title"]; ?> Se estrena en <?= $data["days_until"];?>  dias</h3>
        <p> Fecha de estreno: <?= $data["release_date"];?> </p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?> </p>
    </hgroup>

</body>
</html>

<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display:gird;
        place-content:center;
    }
    section{
        display:flex;
        place-content:center;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    h1,h3,p{
        text-align: center;
    }

</style>