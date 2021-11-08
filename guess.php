<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carlos David Mendoza Robles</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>
      Welcome to my guessing game!
    </h1>
    <p>
      <?php
        print "hello\nmyfrend";
        $answer = 47;
        $guess = isset($_GET['guess']) ? $_GET['guess'] : false ;

        if ($guess === false){
          echo 'Missing guess parameter';
        } elseif ($guess === ''){
          echo 'Your guess is too short';
        } elseif ($guess == $answer){
          echo 'Congratulations-You are right';
        } elseif ($guess > $answer){
          echo 'Your guess is too high';
        } elseif (! is_numeric($_GET['guess'])){
          echo 'Your guess is not a number';
        } else{
          echo 'Your guess is too low';
        }

       ?>
    </p>
  </body>
</html>
