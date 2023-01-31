<?php
session_start();  //initialiser une session avec la fonction "session_start()"
//put my link to the validator file => include '';
include('connexion.php');
include('error.php');

/*if(isset($_POST['submit']) && empty($_POST['name']) && empty($_POST['email'])){    
*    $comm = new Commentvalidator(['fullName','fullFirstame', 'fullEmail', 'fullComment'], $_POST);
*    $com = $com->validate();
*}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/css">
    <link rel="stylesheet" href="../assets/style/scss">
    <title>Hackers Poulette ™ - Contact us</title>
</head>

<body>
    <h1>Contact us!</h1>
    <span class="error">* required field</span>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> >
        <!-- Vérifier si c'est bon action = ""-->

        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name"
            title="Please enter your name with at least 2 characters and maximum 255 characters." />
        <span class="error">* <br><?php echo $nameErr;?></span>
        <br><br>

        <label for="firstname">Your firstname:</label><br>
        <input type="text" name="firstname" id="firstname"
            title="Please enter a valid first name address with at least 2 characters and maximum 255 characters." />
        <span class="error">* <br><?php echo $firstnameErr;?></span>
        <br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" name="email" id="email"
            title="Please enter a valid email address with at least 2 characters and maximum 255 characters." />
        <span class="error">* <br><?php echo $emailErr;?></span>
        <br><br>

        <label for="comment">Comment:</label><br>
        <textarea name="comment" id="comment" rows="10" cols="55" name="comment" id="comment"
            title="Please enter your comment with at least 250 characters and maximum 1000 characters."></textarea>
        <span class="error">* <br><?php echo $commentErr;?></span>
        <br><br>
        <label for="submit">
            <input type="submit" name="submit" id="submit">
        </label>
    </form>
</body>

</html>
