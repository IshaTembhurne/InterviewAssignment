
<!-- Write a program that takes array elements as input and then adds all the elements of that array. -->


<!DOCTYPE html>
<html>
<head> 
  <title>Assignment 4 </title>
 
</head>
<body>

    Enter Number or Name using Comma: <br><br>
    <form method = "POST">
    <input type="text" name="numbers" placeholder="Enter value"/>
    <input type="submit" name="Submit" /><br><br>

 </body>
</html>
<?php
    if (isset($_POST['numbers'])) {

        $strings = $_POST['numbers'];
        $str = explode(",", $strings);
       	$uStr=array_unique($str);
       	echo 'The array is : '.implode(",", $str);
        
    }
    ?>