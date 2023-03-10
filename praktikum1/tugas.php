<?php
$mahasiswa1 = [
    'id' =>1,
    'nim' =>112227,
    'uts' =>90,
    'uas' =>85,
    'tugas' =>95,
];
$mahasiswa2 = [
    'id' =>2,
    'nim' =>148973,
    'uts' =>80,
    'uas' =>83,
    'tugas' =>85,
];
$mahasiswa3 = [
    'id' =>3,
    'nim' =>117839,
    'uts' =>81,
    'uas' =>92,
    'tugas' =>87,
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Nilai Mahasiswa</h2>
        <table class="table table-stripped">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilaii){?>
            <tr>
                <td><?= $nilaii['id'];?></td>
                <td><?= $nilaii['nim'];?></td>
                <td><?= $nilaii['uts'];?></td>
                <td><?= $nilaii['uas'];?></td>
                <td><?= $nilaii['tugas'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>