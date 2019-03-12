<?php


        $num1=$_GET['number1'];
        $num2=$_GET['number2'];
        $ope=$_GET['operator'];
        $result;
        if($ope=='+'){
        	$result=$num1+$num2;	
        }
        else if ($ope=='-'){
        	$result=$num1-$num2;	
        }
        else if($ope=='*'){
        	$result=$num1*$num2;	
        }
        else if ($ope=='/'){
        	$result=$num1/$num2;	
        }        
?>
<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
<?php
echo $result;
?>
<p>Back <a href="index.php">click here</a></p>
</body>
</html>