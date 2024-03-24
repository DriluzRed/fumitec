<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $presupuesto = $_POST["Presupuesto"];

    $to = "arturorafa74@gmail.com";
    $subject = "Solicitud de presupuesto";
    $message = "Correo electrónico: " . $email . "\n\nPresupuesto: " . $presupuesto;
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        header("Location: index.html");
        exit;
    } else {
        echo "Error al enviar el correo electrónico";
    }
}
?>