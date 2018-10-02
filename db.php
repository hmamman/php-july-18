<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
    table {
        border: 1px solid #0ed;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #0ed;
        border-collapse: collapse;
    }
    </style>
</head>
<body>
<?php
$connection = mysqli_connect(
    'localhost',
    'root',
    'Zhuauth+',
    'schoolify'
); 

$query = mysqli_query($connection, 
'select * from 	courses limit 99,20');

$num_rows = mysqli_num_rows($query);

/*while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

print_r($data);*/

if ($_POST) {
    $code = $_POST['code'];
    $title = $_POST['title'];

    // $sql = sprintf("insert into courses(code, title, institution_id) values('{$code}', '{$title}', 1)");
    $sql = sprintf("insert into courses(code, title, institution_id) 
    values(%s, %s, %d)", 
    escape($code), escape($title), escape(1));
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
}

function escape($data) 
{
    if (!is_numeric($data)) {
        return "'{$data}'";
    }

    return $data;
}
?>
<table border=1>
<thead>
<tr>
    <th>id</th>
    <th>Code</th>
    <th>Title</th>
</tr>
</thead>
<?php while ($row = mysqli_fetch_assoc($query)): ?>
<tr>
    <td><?=$row['id'];?></td>
    <td><?=$row['code'];?></td>
    <td><?=$row['title'];?></td>
</tr>
<?php endwhile?>
</table>

<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<div>
  <label for="">Code</label>
  <input type="text" name="code" id="">
</div>
<div>
  <label for="">Title</label>
  <input type="text" name="title" id="">
</div>
<input type="submit" value="Add">
</form>
</body>
</html>