<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function add_numbers($number1,$number2){
            // $sum=$number1+$number2;
            // return $sum;
            return $number1+$number2;
        }

        $result=add_numbers(11,2222);
        echo $result . "<br>";

        $result=add_numbers(10,$result);

        echo $result;




    ?>
    
</body>
</html>