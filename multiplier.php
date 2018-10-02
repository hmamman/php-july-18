<?php
require "functions2.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>$_POST['first_number']$_POST['first_number']$_POST['first_number']
</head>
<body>
<?php
if ($_POST) {
    $f = $_POST['first_number'];
    $s = $_POST['second_number'];

    echo adder($f, $s);
}

?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<div>
    <lebel>First Number</lebel>
    <input type="number" name="first_number">
</div>
<div>
    <lebel>Second Number</lebel>
    <input type="number" name="second_number">
</div>
<div>
    <button type="submit">Calculate</button>
</div>
</form>
</body>
</html>