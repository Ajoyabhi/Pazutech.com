<?php 

    $fname = $_POST["f_name"];
    $lname = $_POST["l_name"];
    $email = $_POST["email"];
    $mobile = $_POST["phone"];
    $subject = $_POST["subject"];
    $enquiry = $_POST["enquiry"];
     

        $to = $email;
    

        $message = "
        <html>
        <head>
        <title>".$subject."</title>
        </head>
        <body>
        <p>Thank you for registering at Paydex Solutions. We will revert back soon!</p>
        <table>
        <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>User Enquiry</th>
        
        </tr>
        <tr>
        <td>".$fname."</td>
        <td>".$lname."</td>
        <td>".$email."</td>
        <td>".$mobile."</td>
        <td>".$enquiry."</td>

        </tr>
        </table>
        </body>
        </html>
        ";

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <webmaster@example.com>' . "\r\n";
        $headers .= 'Cc: sanjeev.acit@gmail.com' . "\r\n";

        mail($to,$subject,$message,$headers);
        header("Location:index.php");




?>