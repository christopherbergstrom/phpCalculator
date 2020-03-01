<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculatoe</title>
</head>
<body>
  <form action="">
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">
    <select name="operator">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <input type="submit" name="submit" value="Calculate">
  </form>
  <?php
    if (isset($_GET["submit"])) {
      $num1 = $_GET["num1"];
      $num2 = $_GET["num2"];
      $operator = $_GET["operator"];
    }
  ?>
</body>
</html>