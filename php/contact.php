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
    <?php require "./navBar.php" ?>


    <form method="post">

        <h1>Contact</h1>

        <label><strong>Email :</strong></label><br><br>
        <input type="mail" name="email" class="form-control" /><br>
        <br />

        <label><strong>What is your Message :</strong></label><br><br>
        <input type="text" name="message" class="message" />
        <br /><br>

        <a href="../index.php"><input type="button" class="back" value="back"></a>

        <!-- <a href="../index.php">--><input type="button" class="send" value="Send"></a>

        <div class="container">

                <div class="starter-template">
                    <form action="postContact.php" method="POST">
                        <div class="form-group">
                            <label>Votre Nom </label> <input type="text" name="name" class="form-contraol">
                        </div>

                    </form>
                </div>

            </div>

    </body>

    </html>