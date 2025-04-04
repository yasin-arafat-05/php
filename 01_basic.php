<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--_____________ print something in php ____________________--> 
    <?php echo "this is our first page." ; ?>
    <?php
     EcHo "this is our first page. <br> "; 
     print "output with print";
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>

    <!--_____________ Variable in php ____________________--> 
    <?php echo "----------------------Variable---------------- <br> ";?>
    <?php $food = "burger";?>
    <?php 
    $Food = "pizza";
    $prize = 10;
    $prize1 = 12
     ?>
    <?php 
    echo " <br> i love $food and $Food <br> total prize is:  $prize + $prize1; <br>";
    echo "total prize is: " . $prize + $prize1 . "T.K."  ."<br>";
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>


    <!--_____________ Comment in php ____________________--> 
    <?php echo "----------------------Comment---------------- <br>";?>
    <?php
    // single line comment.
    /*
      double line comment.
    */
    echo "this is single line comment <br>";
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>

    <!--_____________ Difference between print echo ____________________--> 
    <?php echo "--------------Difference between print echo ---------------- <br> ";?>
    <?php 
    //  echo is faster than print statement.
    // print add 1
    $var = print('Drinks');
    print "$var <br> ";
    print "$var <br> ";
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>


    <!--_____________ Data type in php ____________________--> 
    <?php echo "------------------ Data Type And print_r ---------------- <br> ";?>
    <?php
    $name1 = "Name1";
    $name2 = 'name2';

    // int data type
    $age1 = 34;
    echo "$age1";
    var_dump($age1);
    echo "<br>";

    // float data type 
    $age2 = 23.4;
    echo "$age2";
    var_dump($age2);
    echo "<br>";

    // null data type 
    $null = null;
    echo "$null";
    var_dump($null);
    echo "<br>";

    // array in php
    $namearray = array("yasin","arafat");
    print_r($namearray);
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>


    <!--__________________ Data type in php ____________________--> 
    <?php echo "------------------Making Function ---------------- <br> ";?>
    <?php 
     function add($a,$b){
        return $a+$b;
     }
     echo "sumation of 5,6 is = " . add(5,6);
    ?>
    <?php echo "<br>" ?>

    <?php
    function greetPerson($name="Guest"){
        echo "Hi! $name <br>";
    }
    greetPerson();
    greetPerson("Yasin");
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>

   <!--__________________ Math Function  ____________________--> 
   <?php echo "------------------ Working with Math function ---------------- <br> ";?>
   <?php echo "max,min,abs,sqrt,pi,round,rand <br>";?>

   <?php
    echo (max(1,2,3,4,5,56,7,6));
    
    echo "<br>";
    
    echo (min(1,2,3,4,6,6,7));

    echo "<br>";
    
    echo (abs(-345));
    
    echo "<br>";
    
    echo (sqrt(23));
    
    echo "<br>";
    
    echo (pi());
    
    echo "<br>";
    
    echo (round(23.3));
    
    echo "<br>";
    define('a',17);
    echo (rand(5,10));
    echo "<br>";
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>


    <!--__________________ Constant Vaule  ____________________--> 
    <?php echo "------------------ Constant Vaule ---------------- <br> ";?>
    <?php 
    define("A",23);
    define('a',25);
    define("cars",[
        'BMW',
        'Toyta',
        'Mazda'
    ]);

    echo (a);
    echo "<br>";
    echo (cars[1]);
    echo "<br>";
    echo (A);
    echo "<br>";
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>


    <!--__________________ IF_ELSE STATEMENT  ____________________--> 
    <?php echo "------------------ If-Else-Statement ---------------- <br> ";?>
    
    <?php 
    if(5<3){
        echo "a<b <br>";
    }else{
        echo "b>a <br> ";
    }
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>


   <!--__________________ IF_ELSE STATEMENT  ____________________--> 
   <?php echo "------------------ Switch_Statement ---------------- <br> ";?>
   <?php 
    switch("green"){
        case "red":
            echo "this is red";
            break;
        case "green":
            echo "this is green";
            break;
        default:
            echo "this is default";
    }
    ?>
    <?php
    echo "<br>";
    echo "<br>";
    ?>

   <!--__________________ Loop-Statement  ____________________--> 
   <?php echo "------------------ Loop in PHP ---------------- <br> ";?>
   
   <?php
      echo "<-------- while loop --------> <br> ";
      $x = 0;
      while($x <= 5){
        echo "$x <br>";
        $x += 1;
      }
      echo "<br>";
    ?>


    <?php
      echo "<-------- for loop --------> <br>";
      for($x = 0;$x <= 5;$x += 1){
        echo "$x <br>";
      }
      echo "<br>";
    ?>


    <?php
      echo "<-------- do while --------> <br>";
      $a = 5;
      do{
        echo "$a <br>";
        $a +=1;
      }while($a <= 10);
      echo "<br>";
    ?>



</body>
</html>

