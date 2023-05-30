<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <table>
            <ul type="none">
                <li><input type="text" name="txNama" id="" placeholder="Masukan nama anda" required></li> 
            </ul>
            <ul type="none">
                <li><input type="number" name="txUmur" id="" placeholder="Masukan umur anda" required></li>
            </ul>
            <ul type="none">
                <li><input type="text" name="txAlamat" id="" placeholder="Masukan alamat anda" required></li>
            </ul>
            <ul type="none">
                <li><input type="text" name="txJenisKelamin" id="" placeholder="Masukan jenis kelamin anda" required></li>
            </ul>
            <ul type="none">
                <li><input type="submit" value="simpan" name="btSimpan"></li>
            </ul>

        </table>


    </form>

    <?php
    class Biodata
    {
        public $nama;
        public $umur;
        public $alamat;
        public $jenisKelamin;

        public function setNama($nama)
        {
            $this->nama = $nama;
            return $nama;
        }
        public function setUmur($umur)
        {
            $this->umur = $umur;
            return $umur;
        }
        public function setAlamat($alamat)
        {
            $this->alamat = $alamat;
            return $alamat;
        }
        public function setKelamin($jenisKelamin)
        {
            $this->jenisKelamin = $jenisKelamin;
            return $jenisKelamin;
        }
    }

    $biodata = new Biodata();
    if (isset($_POST["btSimpan"])) {
        if ($_POST["txNama"] == "") {
            echo "Data masih kosong";
        } else {
            echo "Nama anda adalah: ".$biodata->setNama($_POST["txNama"]);
        }
    } echo "<br>";

    if (isset($_POST["btSimpan"])) {
        if ($_POST["txUmur"] == "") {
            echo "Data masih kosong";
        } else {
            echo "Anda berusia adalah: ".$biodata->setUmur($_POST["txUmur"]);
        }
    } echo "<br>";

    if (isset($_POST["btSimpan"])) {
        if ($_POST["txAlamat"] == "") {
            echo "Data masih kosong";
        } else {
            echo "Anda tinggal di: ".$biodata->setAlamat($_POST["txAlamat"]);
        }
    } echo "<br>";

    if (isset($_POST["btSimpan"])) {
        if ($_POST["txJenisKelamin"] == "") {
            echo "Data masih kosong";
        } else {
            echo "Jenis kelamin anda: ".$biodata->setKelamin($_POST["txJenisKelamin"]);
        }
    } echo "<br>";

    ?>

</body>

</html>