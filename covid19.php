<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid 19</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <div class="row">
            <label>Nama Wilayah</label>
            <select name="wilayah">
                <?php $options = array('DKI Jakarta', 'Jawa Barat', 'Banten', 'Jawa Tengah');
                foreach ($options as $area) {
                    $selected = @$_POST['area'] == $area ? ' selected="selected"' : '';
                    echo '<option value="' . $area . '"' . $selected . '>' . $area . '</option>';
                }?>
            </select>
        </div>
        <div class="row">
            <label>Jumlah Positif</label>
            <input type="text" name="jumlahPositif" value="<?=isset($_POST['jumlahPositif']) ? $_POST['jumlahPositif'] : ''?>"/>
        </div>
        <div class="row">
            <label>Jumlah Dirawat</label>
            <input type="text" name="jumlahDirawat" value="<?=isset($_POST['jumlahDirawat']) ? $_POST['jumlahDirawat'] : ''?>"/>
        </div>
        <div class="row">
            <label>Jumlah Sembuh</label>
            <input type="text" name="jumlahSembuh" value="<?=isset($_POST['jumlahSembuh']) ? $_POST['jumlahSembuh'] : ''?>"/>
        </div>
        <div class="row">
            <label>Jumlah Meninggal</label>
            <input type="text" name="jumlahMeninggal" value="<?=isset($_POST['jumlahMeninggal']) ? $_POST['jumlahMeninggal'] : ''?>"/>
        </div>
        <div class="row">
            <label>Nama Operator</label>
            <input type="text" name="namaOperator" value="<?=isset($_POST['namaOperator']) ? $_POST['namaOperator'] : ''?>"/>
        </div>
        <div class="row">
            <label>NIM Mahasiswa</label>
            <input type="text" name="nimMhs" value="<?=isset($_POST['nimMhs']) ? $_POST['nimMhs'] : ''?>"/>
        </div>
        <div class="row">
            <input type="submit" name="submit" value="Simpan"/>
        </div>
    </form>
    <br>
    <?php
    if (isset($_POST['submit'])) {
        $t = time();
        date_default_timezone_set("Asia/Jakarta");
        echo "<p>Data Pemantauan Covid19 wilayah ". $_POST['wilayah'] ."</p>";
        echo "<p>Per " . date("d F Y h:i:s",$t) . "</p>";
        echo "<p>". $_POST['namaOperator'] ."/". $_POST['nimMhs'] ."</p>";
        echo "<table>";
        echo "<tr>";
        echo "<th>Positif</th>";
        echo "<th>Dirawat</th>";
        echo "<th>Sembuh</th>";
        echo "<th>Meninggal</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>". $_POST['jumlahPositif'] ."</td>";
        echo "<td>". $_POST['jumlahDirawat'] ."</td>";
        echo "<td>". $_POST['jumlahSembuh'] ."</td>";
        echo "<td>". $_POST['jumlahMeninggal'] ."</td>";
        echo "</tr>";
        echo "</table>";

    }?>
</body>
</html>