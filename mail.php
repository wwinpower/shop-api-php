

<?php

function sanitize_my_email($field)
{
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$username = $_POST['username'];
$phone = $_POST['phone'];
$productTitle = $_POST['productTitle'];

$to = $_POST['email'];
$from = ''; // Почта отправителя
$fromName = 'SenderName';

$subject = "Send HTML Email in PHP by CodexWorld";

$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to CodexWorld</title> 
    </head> 
    <body> 
        <h1 style="text-align: center;">Спасибо ' . $username . ', ваша заявка принята!</h1> 
        <h2 style="text-align: center;">Мы свяжемся с вами в ближайшее время</h2>
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Имя:</th><td>' . $username . '</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>' . $to . '</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
            <th>Называние продукта</th><td>' . $productTitle . '</td> 
            </tr> 
                <tr style="background-color: #e0e0e0;"> 
                <th>Телефон</th><td>' . $phone . '</td> 
            </tr> 
        </table> 
    </body> 
    </html>';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers 
$headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";



$secure_check = sanitize_my_email($to);
if ($secure_check == false) {
    echo "Invalid input";
} else {
    mail($to, $subject, $htmlContent, $headers);
    header('Location: ok.php');

    echo "This email is sent using PHP Mail";
}

?>