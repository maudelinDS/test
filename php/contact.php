<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navBar.css">
    <script src="https://kit.fontawesome.com/b75d74c466.js" crossorigin="anonymous"></script>

    <title>Contact</title>
</head>

<body>

        <?php 
        require "./navBar.php";
if(isset($_POST['submit'])){
    $to = "maudelin.delescaut@jobtrek.ch"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>

<!DOCTYPE html>
<head>
<title>Form submission</title>
</head>
<body>

<form action="" method="post"><br>

<h1>Contact</h1>
<label> Name: </label><br><br><input type="text" name="first_name"><br><br>
<label> Name: </label><br><br><input type="text" name="last_name"><br><br>
<label> Email:</label><br><br><input type="text" name="email" required><br><br>
<label> Message:</label><br><br><textarea rows="5" name="message" cols="30" required></textarea><br><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> 
</body>

</html>