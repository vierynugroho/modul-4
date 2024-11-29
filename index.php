<!DOCTYPE html>
<html>
<!-- Viery Nugroho - 21104410049 - 29 November 2024 -->
<!-- Pemrograman Web - Kelas Karyawan 2023 -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <title>Pemrograman Web</title>
    <meta name="description"
        content="">
    <meta name="viewport"
        content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="">
</head>

<body>
    <?php echo "<h1>TES ECHO 1</h1>" ?>
    <?= '<h1>TES ECHO 2</h1>' ?>

    <?php
    echo "<hr><h1>For Loop</h1><br/>";
    //TODO: for loop

    for ($i = 1; $i <= 10; $i++) {
        echo "Iterasi ke-$i <br>";
    }
    ?>

    <?php
    echo "<hr><h1>While Loop</h1><br/>";
    //TODO: while loop 
    $i = 1;

    while ($i <= 5) {
        echo "Counter: $i<br>";
        $i++;
    }
    ?>

    <?php
    echo "<hr><h1>Do While Loop</h1><br/>";
    //TODO: do while loop
    $j = 1;

    do {
        echo "Counter: $j<br>";
        $j++;
    } while ($j <= 5);
    ?>


    <?php
    echo "<hr><h1>Indexed Array</h1><br/>";
    //TODO: Indexed Array
    $indexed = [10, "Budi", 30, true, 50];

    //? HOW TO USE?
    echo $indexed[3];

    foreach ($indexed as $index => $value) {
        echo "<br> Index $index: $value";
    }
    ?>

    <?php
    echo "<hr><h1>Array Associative</h1><br/>";
    //TODO: Associative Array
    $asosiatif = ['nama' => 'Budi', 'umur' => 25, 'kota' => 'Jakarta'];

    //? HOW TO USE?
    echo $asosiatif['nama'];
    echo "<br/>";

    foreach ($asosiatif as $key => $value) {
        echo "$key: $value";
    }
    ?>

    <?php
    echo "<hr><h1>Array 2 Dimensi</h1><br/>";
    //TODO: Array 2 dimensi
    $matrix = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    //? HOW TO USE?
    foreach ($matrix as $row) {
        foreach ($row as $element) {
            echo $element . " ";
        }
        echo "<br>";
    }
    echo "<br/>";
    echo "Element di baris 2 kolom 3: " . $matrix[1][2];
    ?>

    <?php
    echo "<hr><h1>Array Methods</h1><br/>";
    //TODO: Array Methds
    $numbers = [10, 20, 30, 40, 50];

    //* Menambahkan elemen
    echo "<br/>Menambah Elemen<br/>";
    array_push($numbers, 60);
    print_r($numbers);


    //* Menghapus elemen terakhir
    echo "<br/>Menghapus Elemen Terakhir<br/>";
    array_pop($numbers);
    print_r($numbers);

    //* Mencari elemen di dalam array
    echo "<br/>Mencari Elemen<br/>";
    $search = in_array(30, $numbers) ? "Ada" : "Tidak ada";
    echo "Apakah angka 30 ada? <strong>$search</strong>";

    //* Mengurutkan array
    echo "<br/>Mengurutkan Elemen<br/>";
    sort($numbers); // asc
    // rsort($numbers); // desc
    print_r($numbers);
    ?>

    <?php
    echo "<hr/> <h1>Array Map</h1><br/>";
    //TODO: Array Map & In_Array
    $data = [
        ["id" => 1, "name" => "Alice", "roles" => ["admin", "editor"]],
        ["id" => 2, "name" => "Bob", "roles" => ["editor"]],
        ["id" => 3, "name" => "Charlie", "roles" => ["viewer", "editor"]],
    ];

    $roleToCheck = "editor";

    $result = array_map(function ($item) use ($roleToCheck) {
        return in_array($roleToCheck, $item['roles']);
    }, $data);

    print_r($result);
    ?>

</body>

</html>