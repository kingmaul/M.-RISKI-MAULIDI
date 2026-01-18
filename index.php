<?php
    $conn = mysqli_connect("localhost","root","","mahasiswa");
    $result = mysqli_query($conn, "select * from mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>King maul</title>
     <link rel="stylesheet" href="style.css">
    

</head>
    <div class="container">
<body>

        <h1 class="judul">Daftar Mahasiswa</h1>

        <table border = '1' cellpadding='10' cellspacing=0'>
        <tr>
            <th>NO.</th>
            <th>aksi</th>
            <th>Nama</th>
            <th>ALamat</th>
            <th>TT_Lahir</th>
            <th>Jenis_kelamin</th>
            <th>NPM</th>
            <th>Fakultas</th>
        </tr>
         
        <?php $i=1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td> <?= $i; ?></td>
            <td>
                <a href="">edit/</a>
                <a href="">hapus.</a>
            </td>
            
            <td> <?= $row["Nama"];?></td>
            <td> <?= $row["Alamat"];?></td>
            <td> <?= $row["TT_Lahir"];?></td>
            <td> <?= $row["Jenis_kelamin"];?></td>
            <td> <?= $row["NPM"];?></td>
            <td> <?= $row["Fakultas"];?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
    </div>
</body>
</html>   