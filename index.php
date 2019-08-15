<?php // include QR_BarCode class 
session_start();
$_SESSION['text'] = "";
include "qr.php";
if (isset($_POST['text'])) {


    // QR_BarCode object 
    $qr = new QR_BarCode();

    $texto = $_POST['text'];
    $_SESSION['text'] = $texto;
    $file = "hola.png";
    // create text QR code 
    $qr->text($texto);

    // display QR code image
    $qr->qrCode(350, $file);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label for="text">Ingrese el texto del que desea generar el QR</label>
        <br>
        <input type="text" name="text" id="text">
        <br>
        <button type="submit">Generar</button>
        <br>
        <br>
        <?php
        echo $_SESSION['text'];
        ?>
        <br>
        <img id="img" src="" alt="Nada que mostrar">
    </form>

    <script>
        window.addEventListener('load', function() {
            document.getElementById('img').src = "hola.png"
        });
    </script>
</body>

</html>