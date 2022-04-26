<style>
    h3{
        color: pink;
    }
</style>
<?php

function emailSent($message,$file,$response,$response1){
  
    $subject = "Someone laid a complaint";
    $sender = 'Support@swiftcourses.org';
    $recipient = 'Support@swiftcourses.org';

    $subject = "php mail test";

    $headers = 'From:' . $sender;
    $mail = mail($recipient, $subject, $message, $headers);
    if($mail){
        header("Location:./$file?$response");
    }else{
        header("Location:./$file?$response1");
    }
}


if(isset($_POST["submit"])){
    $POST = filter_var_array($_POST,FILTER_SANITIZE_STRING);
    extract($POST);
    
    $message="
    Name:
    $name
   
    Email:
    $email
    
    Number
    $number
    
    Reference Number
    $ref
    
    How you were scammed
    $sc
    ";
    
 
   emailSent($message,"index.php","success","failed");
  
}

function submit($address){
    $POST = filter_var_array($_POST,FILTER_SANITIZE_STRING);
    extract($POST);

    
 
   
    $message = "
    <h3 class='text-primary'>First Name:
    $f_name
    
    Last Name
    $l_name

    Email
    $email

    Amount Lost
    $aml

    Amount Scammed
    $amls

    Payment Method
    $paymentMethod

    How were you scammed?
    $lost

    Ref Number
    $ref
    ";
    emailSent($message,$address,"success","failed");
    
}
if(isset($_POST["submit_case"])){
   submit("case.php");
   
}

if(isset($_POST["submit_case2"])){
    submit("case-2.php");
}