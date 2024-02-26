<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulačka v PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Kalkulačka</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="number1" placeholder="Číslo 1" required>
    <select name="operation">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="text" name="number2" placeholder="Číslo 2" required>
    <input type="submit" value="Spočítat">
</form>

<?php 
    include("skript.php");
?>

</body>
</html>