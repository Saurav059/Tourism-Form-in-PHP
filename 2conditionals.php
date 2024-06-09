<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP conditionals</title>
</head>
<style>
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
.container{
    max-width:80%;
    background-color : cyan;
    margin:auto;
}
.sec{
    max-width:80%;
    margin:auto;
}
</style>
<body>
    <div class="container"> 
    <h1>Conditionals Using PHP<h1>
        <?php
            $age = 21;
            if($age==18){
                echo "You can Vote";

            }
            else if($age == 21){
                echo " You can vote and drive heavy vehicle";
            }
            else{
                echo "You cannot vote";
            }
        ?>
    </div>
    <div class="sec">
    <?php
        if($age == 21){
            echo "<h1>You can drive a heavy vehicle</h1>";
        }

        echo "<h1><br>ARRAY</h1>";

        $languages = array("Python", "C++", "C", "Nodejs", "php");
        echo $languages[0];
        echo "<br>"; 
        echo count($languages);

        echo "<h1><br>Loops</h1>";


        $a = 0;
        while($a<=10){
            echo "The value of a is ";
            echo $a;
            echo"<br>";
            $a++;
        }

        
        
    ?>

       
    </div>
    
</body>
</html>