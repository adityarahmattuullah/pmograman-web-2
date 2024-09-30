<?php
include "orang.php";
include "visibility.php";
include "nilai.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pratikum 2</title>
</head>
<body>
    <h1>pratikum 2</h1>
    <div>
        <?php
            $james = new orang();
            $james->nama = " aditya rahmattullah";

            $james->ucapsalam();

            echo "<br>";

            $emely = new orang();
            $emely->nama = " emely walker";
            $emely->ucapsalam();

            echo "<br>";

            $visibility = new visibility();
            $visibility->tampilkanproperty();

            echo "ini akses aku diluar kelas";
            echo "public : " . $visibility->public . '<br>';
            //echo "protected : " . $visibility->protected . '<br>';
            //echo "private : " . $visibility->private . '<br>';

            echo "<br> <br>";

            echo "nilai MK pemrograman web: <br>";
            $nilai = new nilai();
            $nilai->setTugas(79);
            $nilai->setUts(90);
            $nilai->setUas(89);
            
            echo "nilai UTS : " . $nilai->getUts() . "<br>";
            echo "nilai UAS : " . $nilai->getUas() . "<br>";
            echo "nilai Tugas : " . $nilai->getTugas() . "<br>";
            echo "total nilai : " . $nilai->hitungtotal() . "<br>";
        ?>
    </div>
</body>
</html>