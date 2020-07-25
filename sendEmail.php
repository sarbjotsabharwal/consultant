<?php
  
    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message= $_POST['body'];

    

        // $name = "Sarbjot";
        // $message = "hello this is sarbjot";


        $to = "info@charthillconsultants.com";
        $subject = "From: Charthill - Contact Us";
        $body = "This is an email from $name \n\n $subject \n\n $message";
        $headers = "from: sarbjot sabhawral";

        if(mail($to, $subject, $body, $headers)){
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }
        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
