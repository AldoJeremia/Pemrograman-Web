<?php
$koneksi = mysqli_connect("localhost", "root", "", "sebelas");
$statistik = query("SELECT * FROM praks");

function query($data)
{
    global $koneksi;

    $hasil = mysqli_query($koneksi, $data);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
        $rows[] = $row;
    }
    return $rows;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Inputan</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: rgb(80, 205, 164);
        }

        .judul {
            font-family: Verdana, Arial, Helvetica, sans-serif;
            font-size: 35px;
            color: aliceblue;
        }

        .data {
            font-size: 21px;
            font-family: Verdana, Arial, Helvetica, sans-serif;
        }

        .link {
            font-size: 22px;
            font-family: 'Times New Roman', Times, serif
        }
    </style>
</head>

<body>
    <h1 class="judul">Hasil Inputan Data </h1>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Status</th>
        </tr>

        <?php $no = 1 ?>
        <?php foreach ($statistik as $data) : ?>
            <tr>
                <div class="tampil">
                    <th style="width: 50px;"><?php echo $no; ?></th>
                    <td style="width: 100px;"><?php echo $data["name"]; ?></td>
                    <td style="width: 150px;"><?php echo $data["email"]; ?></td>
                    <td style="width: 150px;"><?php echo $data["address"]; ?></td>
                    <td style="width: 150px;"><?php echo $data["gender"]; ?></td>
                    <td style="width: 150px;"><?php echo $data["position"]; ?></td>
                    <td style="width: 150px;"><?php echo $data["status"]; ?></td>
                </div>
            </tr>

            <?php $no++; ?>
        <?php endforeach; ?>
    </table>
    <table>
        <tr>
            <td>
                <p class="data">Banyaknya DATA = <?php echo ($no - 1); ?> Inputan</p>
            </td>
        </tr>
        <tr>
            <td>
                <div class="link"><a href="index.php">Input Data (Update) </a></div>
            </td>
        </tr>
    </table>

</body>

</html>