<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
echo "while<br>";
$i = 1;
while ($i <= 5) {
    echo "The number is " . $i . "<br>";
    $i++;
}
?>
<?php
echo "do while<br>";
$i = 1;
do {
    echo "The number is " . $i . "<br>";
    $i++;
} while ($i <= 5);
?>
<?php
echo "for<br>";
for ($i = 1; $i <= 5; $i++) {
    echo "The number is " . $i . "<br>";
}
?>
<body>

</body>
</html>