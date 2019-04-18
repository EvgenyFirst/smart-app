<?php

    $recepient = " "; // почта получателя писм с формы
    $siteName = "SmartApp";

    $email = trim($_POST["email"]); // Почта

    $message = "
        <!DOCTYPE HTML>
            <html>
                <head>
                    <title>
                        Заказ с сайта '$siteName'.
                    </title>
                </head>
                <body>
                    <ul style='border: 1px solid #ccc'>
                        <li style='
                        list-style: circle;
                        font-weight: bold;'> Почта: <p style='font-style: italic;'>$email;</p>
                        </li>                                                                                                                                     
                    </ul>
                </body>
            </html>";

    $pagetitle = "Заявка с сайта \"$siteName\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

    $redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'index.html';
    header("Location: $redirect#submit");
    exit();
?>


<!--

$recepient = "";
$siteName = "HTML-шаблон";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name \nТелефон: $phone";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

-->