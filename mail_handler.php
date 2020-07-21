<?php 
header('Content-type: text/html; charset=windows-1251');
if(isset($_POST['submit'])){
    $to = "artem-feofilov@yandex.ru"; // this is your Email address
    $from = $_POST['email_sender']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "Вопрос, заданный на сайте Anna-J-Art.com";
    $subject2 = "Копия Вашего сообщения";
    $message = $first_name . " написал(а):" . "\n\n" . $_POST['message'];
    $message2 = "Это копия Вашего сообщения " . $first_name . "\n\n" . $_POST['message'];

    $headers = "От:" . $from;
    $headers2 = "От:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Спасибо, " . $first_name . ", Ваше сообшение отправлено.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>