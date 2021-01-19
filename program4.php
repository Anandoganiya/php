<!DOCTYPE html>
<html>
<body>

<form   method="post">
Enter a Number:<input type="number" name="num"></input>
<input type="submit" name="submit"></input>
</form>

<?php
  for($i=1;$i<=10;$i++)
  {
      echo $_POST['num']," * " , $i ," = ", $_POST['num']*$i, "<br>";
  }
?>

</body>
</html>
