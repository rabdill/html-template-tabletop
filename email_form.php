<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="robots" content="noindex">  <!--    no need to submit an email processing page to a search engine   -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="These words show up when you appear in search results. They make you sound WONDERFUL.">
    <meta name="author" content="Your Name Here, Friend!">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Your Name | Amateur Genius, Professional Lover</title>

    <link href="http://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css"> <!--    subhead -->
    <link href='http://fonts.googleapis.com/css?family=Allan' rel='stylesheet' type='text/css'> <!--    body font   -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
<div class="container" >


<?php
     if(isset($_POST['message']) == false) {     //  If there's no message
        echo "Uh oh. Looks like you didn't actually include a message, friend.<br><br>";
        die();   
    }
    
    
    $destination = "your@email.com";       //  Put your email address here
    $subject = "Message from your baller website!";   //  Fill in the subject line you want your messages to have
    $fromAddress = "example@example.com";   //  Fill in the email address that you want the messages to appear to be from
                                                                    //  Use a real address to reduce the odds of getting spam-filtered.
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = str_replace("\n.", "\n..", $_POST['message']);   //  Prevents a new line starting with a period from being omitted

    $message = "Name: ". $name ."\nEmail: ". $email . "\nMessage: ".$message."\n";

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: " . $fromAddress;
$headers[] = "Subject: " . $subject;
$headers[] = "X-Mailer: PHP/".phpversion();

mail($destination, $subject, $message, implode("\r\n", $headers));
 
?>

<p>It worked! Thanks for your message:<br>
<?php echo $message; ?>
 
<br>
<a class="btn btn-primary" href="/">Back home</a>

</div>

  </body>
</html>