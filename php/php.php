<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    ECHO "<h2>welkom bij mijn php pagina</h2>";
    ?>

    <form action="calc.php" method="post">
      <input type="text" name="num1">
      <input type="text" name="num2">
      <select name="cal">
        <option value="add">add</option>
        <option value="sub">substract</option>
        <option value="mul">multiply</option>
      </select>
      <button type="submit">calculate</button>
    </form>
  </body>
</html>
