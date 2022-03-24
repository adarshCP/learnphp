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
        $array=[10,22,133131,"ddada"];
        echo max($array)."<br>";
        echo min($array)."<br>";
        print_r($array);
        echo "<br>";
        $result= in_array(101,$array);
        if($result){
            echo "we have found it";
        }else{
            echo "we are messed up";
        }
    
    ?>
    
</body>
</html>