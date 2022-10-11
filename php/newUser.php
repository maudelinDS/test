<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navBar.css">

    <title>Create User</title>
</head>

<body>
    <?php require "./navBar.php" ?>


    <form method="post">
        <h1>New User</h1>
        <label><strong>Username :</strong></label><br><br>
        <input type="text" name="nom_utilisateur" class="form-control" />
        <br /><br>
        <label><strong>Password :</strong></label><br><br>
        <input type="password" name="mot_de_passe" class="form-control" /><br>
        <br />
        <label><strong>Age :</strong></label><br><br>
        <input type="date" name="age" class="form-control" /><br>
        <br />
        <label><strong>Email :</strong></label><br><br>
        <input type="mail" name="email" class="form-control" /><br>
        <br />
        <label><strong>Number Phone :</strong></label><br><br>
        <input type="tel" name="phone_number" class="form-control" /><br>
        <br />
        <a href="newUser.php"><input type="button" class="newUser" value="New User"></a>
        <a href="../index.php"><input type="button" class="back" value="back"></a>


    </form>
</body>

</html>