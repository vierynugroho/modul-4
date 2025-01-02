<!-- TODO: php in html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    ?>
</body>



<?= "STRING" ?>
<?php
$angka = 10;
echo "TEST"; // print

if ($angka >= 0) {
    // statement
} else if ($angka = 5) {
    // statement
} else {
    // statement
}

if ($angka = 0) {
} else if ($angka = 1) {
}

if ($angka) {
}
if ($huruf) {
}

?>


<?php
$variable = true;
switch ($variable) {
    case true:
        # code...
        break;
    case false:
        # code...
    case 'true':
        # code...
    case 'false':
        # code...

    default:
        # code...
        break;
}

?>

<?php
// TODO: Ternary Operator
$result = $nilai == 80 ? true : false;
?>

</html>

<!--TODO: php ext -->
<?php echo "print" ?>
<?= "print" ?>