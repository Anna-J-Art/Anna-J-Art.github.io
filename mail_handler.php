<?php 
header('Content-type: text/html; charset=windows-1251');
if(isset($_POST['submit'])){
    $to = "artem-feofilov@yandex.ru"; // this is your Email address
    $from = $_POST['email_sender']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = "������, �������� �� ����� Anna-J-Art.com";
    $subject2 = "����� ������ ���������";
    $message = $first_name . " �������(�):" . "\n\n" . $_POST['message'];
    $message2 = "��� ����� ������ ��������� " . $first_name . "\n\n" . $_POST['message'];

    $headers = "��:" . $from;
    $headers2 = "��:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "�������, " . $first_name . ", ���� ��������� ����������.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>