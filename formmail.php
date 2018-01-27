<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <META HTTP-EQUIV="refresh" content="0;URL=thankyou.html">
<title>Form submission</title>
</head>

<body>
<?php 
if(isset($_POST['submit'])){
    $to = "opetrillo92@gmail.com"; // this is your Email address
    $email = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "from oliviapetrillo.github.io";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($email,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>



</form>

</body>
</html> 