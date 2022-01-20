<!DOCTYPE html>
<html>
    <head>
        <title>KABA-STORE.com</title>
        <meta charset="utf 8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <form name="form1" method="post" action="#">
        <div align="center"></div>
        <div width="366" border="0" align="center">
        <tr><td colspan="2">
        <div align="center" class="judul"> <h2>- KABA-STORE -</h2><br>
            <h3 align="center">Top-up Aman, Murah, dan Terpercaya</h3>
        <div class="topnav">
            <a href="KABA-STORE.html">Home</a>
            <a href="Order.html">Order</a>
            <a href="#">Buku Tamu</a>
            <a href="About.html">About Us</a>
            </div>  
        <div class="border">
        <h1>Buku Tamu</h1>
            <hr>
            <p>
                Nama Lengkap<br>
                <input type="text" name="fnama" id="fnama" size="42" maxlength="25">
            </p>
            <p>
                Email<br>
                <input type="text" name="femail" id="femail" size="42" maxlength="30">
            </p>
            <p>
                No. Handphone<br>
                <input type="text" name="fnohp" id="fnohp" size="42" maxlength="25">
            </p>
            <p>
                Tanggal Lahir<br>
                <input type="date" name="ftl" id="ftl" size="42" maxlength="25">
            </p>
            <p>
                Pesan<br>
                <input type="text" name="fpesan" id="fpesan" size="42" maxlength="20">
            </p>
            <p>
                <button type="submit" id="submit" class="button-gambar">Print</button>
                <button type="reset" id="reset" class="button-gambar" size="30">Reset</button>
            </p>
            </div>
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $email = $_POST['femail'];
                    $nohp = $_POST['fnohp'];
                    $tanggal_lahir = $_POST['ftl'];
                    $pesan = $_POST['fpesan'];
                    echo "Nama: $nama <br>","Email: $email <br>","No. Handphone: $nohp <br>","Tanggal Lahir: $tanggal_lahir <br>","Pesan: $pesan <br>";
                }
            ?>
        </form>
    </div>
    <footer class="footer">
        <hr>
        <h2 align="center" style="font-family:'Courier New'">Copyright &copy2021 KABA-STORE</h2><br>
        </footer>
    </footer>
    </body>

</html>  