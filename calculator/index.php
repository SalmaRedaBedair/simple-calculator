<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>calculator</title>
  </head>
  <body>
    <form action="" method="post">
      <input type='number' name="num1" />
      <input type='number' name="num2" />
      <select name="op">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
      </select>
      <input type="submit" value="submit"/>
    </form>
  </body>
</html>
<?php 
require('calc.php');
if(isset($_POST['num1']))
$calc=new Calc($_POST['num1'],$_POST['num2'],$_POST['op']);
?>
