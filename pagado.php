<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <div class="formulario">
        <h2>Pagos con Paypal</h2>

        <?php
        $resultado = $_GET['exito'];
        $paymentID = $_GET['paymentId'];


        if ($resultado == "true") {
            echo "El pago se realizó correctamente";
            echo "<br><br>";
            echo "El ID de transaccion es: " . $paymentID;
        } else {
            echo "El pago NO se realizo";
        }
        ?>

    </div>
</body>

</html>