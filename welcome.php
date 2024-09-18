<html>
<body>

Welcome <?php echo $_GET["fname"]; ?><br>
KINDLY INPUT THE NAME OF THE FILE THAT YOU ARE LOOKING FOR. <br>

<form action="File.php" method="POST">
Input File Name: <input type="text" name="name"><br>
<input type="submit">
</form>


</body>
</html>