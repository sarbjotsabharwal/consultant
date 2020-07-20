<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];

        require "PHPMailer/PHPMailer.php";
        require "PHPMailer/SMTP.php";
        require "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "charthilllcontactus@gmail.com";
        $mail->Password = 'charthill@123';
        $mail->Port = 587; //587
        $mail->SMTPSecure = "tls"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("sarbjotsabharwal@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
