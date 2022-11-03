<?php
$barang = array("Tepung","Gula","Garam","kecup","Jambu");
$stok = array("20","15","12","22","10");
$berat = array("5","3","2","1","3");
?>
<body>
    <h1>KONVERSI BARANG</h1>
    <table border="1">
        <tr>
            <th>N0</th>
            <th>Nama Barang</th>
            <th>Berat(Kg)</th>
            <th>Berat(Gram)</th>
            <th>Berat(Mg)</th>
            <th>Stok</th>
        </tr>
</body>
<tbody>
<?php
$nomor = 1;
for($a = 0; $a <= 4;$a++) {
?>
<tr>
    <td> <?php echo $nomor++?>  </td>
    <td> <?php echo $barang[$a]?> </td>
    <td> <?php echo $berat[$a]?> </td>
    <?php
    $kg = $berat[$a] * 1000;
    $mg = $berat[$a] * 1000000;
    ?>
    <td> <?php echo $kg?> </td>
    <td> <?php echo $mg?> </td>
    <td> <?php echo $stok[$a]?> </td>
</tr>
<?php
}
?>
</tbody>