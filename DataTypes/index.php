<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <form method="POST" action="index.php">
        <h1>Enter two numbers</h1>
        <h2>First number</h2>
        <input type="number" name="number1"/><br>
        <h2>Second number</h2>
        <input type="number" name="number2"/><br>
        <input type="submit"value="swap"/>
        
    </form>


    <!-- <form action="index.php" method="POST">
        <label>Username</label><br>
        <input type="text" name="name"><br>
        <label>Password</label><br>
        <input type="password" name="pass"/><br>
        <input type="submit"/>

    </form> -->
    <?php 
    //this is a comment
    /*
daaaaaaaaaaaaaa
daaaaaaaaaaaa
    */
    #   variables
        // $string="Hellow world";
        // $number=1000;
        // $flnum=2.009;
        // $php=true;
        // $null=NULL;

        // echo var_dump($flnum);
        // $text="Hello world";
        // echo $text;
        // echo "<br>";
        // $text="hello india";
        // echo $text;
        # constant
        // define("PI",3.14);

        // echo PI;
        #arithmetic operators
        // $x=9;
        // $y=10;
        // echo $x + $y;
        // echo "<br>";
        // echo $x - $y;
        // echo "<br>";
        // echo $x / $y;
        // echo "<br>";
        // echo ++$x;
        // echo "br>";
        // echo ++$x;
        // echo "<br>";
        // echo --$x;
        // echo "<br>";
        // echo $x**2;
        #assignment oprators
        // $x=5;
        // $x+=4;
        // $x-=4;
        // $x/=4;
        // $x%=4;

        // echo $x;
        #Comparison oparators
            // $a=10;
            // $b="20";

            // $result = ($a >= $b);
            
            // echo var_dump($result);

        #logical operatoa
        // $a=10;
        //     $b="20";

            // $result = ($a==10 && $b===20 );
            // $result = ($a==10 || $b===20 );
            // $result = ($a !==10 );
            
            // echo var_dump($result);
            // $name=$_POST["name"];
            // $pass=$_POST["pass"];
            // echo "you have entered details";

            $number1=$_POST["number1"];
            $number2=$_POST["number2"];
            
            $tempnumber=$number1;
            $number1=$number2;
            $number2=$tempnumber;

            echo "<h1>The nos after swaping</h1>";
            echo "<h2>First Number: $number1 </h2>"; 
            echo "<h2>Second Number: $number2 </h2>"; 
            

        
    ?>
    
</body>
</html>