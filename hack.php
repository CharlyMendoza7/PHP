<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Carlos David Mendoza Robles</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>
      MD5 cracker
    </h1>
    <p>
      This application takes an MD5 hash of a four digit pin and check all
      10,000 possible four digit PINs to determine the PIN.
    </p>
    <pre>
Debug Output:
<?php
        $goodtext = "Not found";

        if(isset($_GET['md5'])){
          $md = $_GET['md5'];

          $start_time = microtime(true);
          $numbers = "0123456789";
          $show = 15;

          for($i = 0;$i < strlen($numbers);$i++){
            $ch1 = $numbers[$i];

            for($j = 0;$j < strlen($numbers);$j++){
              $ch2 = $numbers[$j];

              for($k = 0;$k < strlen($numbers);$k++){
                $ch3 = $numbers[$k];

                for($l = 0;$l < strlen($numbers);$l++){
                  $ch4 = $numbers[$l];

                  $comb = $ch1.$ch2.$ch3.$ch4;
                  $check = hash('md5',$comb);

                  if($check == $md){
                    $goodtext = $comb;
                    break;
                  }

                  if($show > 0){
                    print "$check $comb\n";
                    $show--;
                  }

                }
              }
            }
          }
          $end_time = microtime(true);
          print "Elapsed time: ";
          print $end_time-$start_time;
          print "\n";
        }
?>
    </pre>
    <p>
      <p>PIN: <?= htmlentities($goodtext); ?></p>
      <form>
      <input type="text" name="md5" size="60" />
      <input type="submit" value="Crack MD5" />
      </form>
    </p>
    <p><a href="md5.php">MD5 Encoder</a></p>
    <p><a href="hack.php">Reset</a></p>
  </body>
</html>
