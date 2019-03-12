<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
<style type="text/css">
div{
	width:300px;
	height:200px;
	background-color: powderblue;
	text-align: center;
	position: center;
	margin-left: 500px;
	border:solid 2px black;
}
</style>
</head>
<body><div>
  <form action="calculator.php" method="GET">
  First number 	    <input type="number" placeholder="Enter first No" name="number1" required="" >
 Second number 	  	<input type="number" placeholder="Enter second No" name="number2" required="">
  	  	<br><br>
  	  	<input type="radio" name="operator" value="+" checked=""> Add<br>
  	  	<input type="radio" name="operator" value="-"> Subtract<br>
  	  	<input type="radio" name="operator" value="*">Multi<br>
  	  	<input type="radio" name="operator" value="/">Div<br>
  	  	<input type="submit" value="submit">
  	  	<input type="reset" name="reset">

  </form>
</div>
</body>
</html>