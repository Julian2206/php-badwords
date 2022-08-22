<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) 
tutte le occorrenze della parola da censurare. -->


<?php 

$string = "They told that PHP in 2022 is dead";

$string_lenght = strlen($string);

$results = $string ."\r(". $string_lenght . "\rlenght" ."\r)" ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>

<body>

    <div>
        <h1 style="text-align: center;">PHP badwords:</h1>

        <h2 style="text-align: center; color: blue; "> <?php echo $results ?></h2>

    </div>

    <form style="text-align: center;" action = "index.php" method = "GET">
         badwords: <input type = "text" name = "string" />
         <input type = "submit" />
      </form>

    <?php  
    
    $user_input = $_GET["string"]; 

    $string_lenght = strlen($user_input);

    $badword = ["php", "laravel", "elephant"];

    $censor = "***";

    $censored_string = str_ireplace($badword, $censor, $user_input);
    
    ?>

    <div>

    <h3 style="text-align: center;"> <?php echo $censored_string; ?> </h3>

    </div>
    
    
</body>
</html>