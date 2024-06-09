<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        This is my first php webiste.<br>
        <?php

            define('PI', 3.14);
            echo "Hello Saurav(printed using PHP) ";
             $var1 = 32;
             $var2 = 45;
             echo $var1;
             echo $var2;
             echo"<br>";
             echo $var1+$var2;


             //Operators in PHP
             //Arithmetic Operators
            echo"<h1><br> Arithmetic Operator <br></h1>";
            echo"<br>var1 + var2=";
            echo $var1+$var2;
            echo"<br>var1 - var2=";
            echo $var1-$var2;
            echo"<br>var1 * var2=";
            echo $var1*$var2;
            echo"<br>var1 / var2=";
            echo $var1/$var2;

            //Assignment Operators
            echo"<h1><br><br>Assignment Operator<br></h1>";
            $newvar = $var1;
            $newvar += 1;
            echo "The value of new variable is ";
            echo $newvar;
            
            echo"<br>";

            //Comparison Operators
            echo "<h1> Comaprision Operators</h1>";
            echo "<br> the value of 1==4 is";
            echo var_dump(1==4);
            echo "<br>"; 
            echo "the value of 1<=4 is";
            echo var_dump(1<=4);
            echo "<br> the value of 1!=4 is";
            echo var_dump(1!=4);
            
            //Increment/Decrement Operator 
            echo"<h1><br>Increment/Decrement Operator<br></h1>";
            echo"<br>"; echo $var1++;
            echo"<br>"; echo $var1--;
            echo"<br>"; echo ++$var1;
            echo"<br>"; echo --$var1;



            //Logical Operators
            echo "<br><h1>Logical Operator (AND (&&), OR(||), XOR, NOT(!)</h1>";
            $myvar = (True and true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false and true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (False or true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false or False);
            echo var_dump($myvar);





            echo "<h1><br> Data Types </h1>";
            echo "<h3><br>1. String
                      <br>2. Integer
                      <br>3. Float
                      <br>4. Boolean
                      <br>5. Array
                      <br>6. Object
                      </h3>";
            echo "<h3><br>1. String</h3>";
            $var = "This is a string";
            echo var_dump($var);
            echo "<br>";
            $var = 69;
            echo var_dump($var);
            echo "<br>";
            $var = 69.69;
            echo var_dump($var);
            echo "<br>";
            $var = true;
            echo var_dump($var);
            echo "<br>";
            echo PI;
        ?>


    </div>
</body>
</html>