<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf 8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <title>KABA-STORE.com</title>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" href="KABA-STORE.css">
    </head>
    <body>
        <!-- Header -->
        <div class="header">
                <h1 style="font-family:'Courier New'">꧁ KABA-STORE ꧂</h1>
                <h1 style="font-family:'Brush Script MT'" style="padding: 15px;">Top-up Aman, Murah, dan Terpercaya</h1>
        </div>
        <nav class="base">
            <label class="logo"><href=KABA-STORE.html" alt="Tirto Prawiro"></label>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
        <ul class="topnav">
            <a href="KABA-STORE.html">Home</a>
            <a href="$">Order</a>
            <a href="#">Buku Tamu</a>
            <a href="$">About Us</a>
        </ul>
        <nav>
        </nav>
        <div class="utama">
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div>
                <label>Nama</label>
                <input type="text" name="fname">
            </div>
            <div>
                <label>Email</label>
                <input type="text" name="femail">
            </div>
            <div>
                <label>No. Handphone</label>
                <input type="text" name="fhp">
            </div>
            <div>
                <label>Tempat, tanggal lahir</label>
                <input type="text" name="flife">
            </div>
            <div>
                <label>Pesan</label>
                <input type="text" name="fpesan">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </form>
        </div>
        <div>
            <?php
            
            $nama = isset($_POST['fnama']) ? $_POST['fnama'] : '';
            $email = isset($_POST['femail']) ? $_POST['femail'] : '';
            $hp = isset($_POST['fhp']) ? $_POST['fhp'] : '';
            $live = isset($_POST['flive']) ? $_POST['flive'] : '';
            $pesan = isset($_POST['fpesan']) ? $_POST['fpesan'] : '';
            
            $data ="<br><br>Nama: $nama<br>Email: $email<br>No. Handphone: $hp<br>Tempat, tanggal lahir: $live<br>Pesan: $pesan"
            
            $Tamu = fopen("Buku_Tamu.txt", "a");

            if(isset($POST['fnama']) || isset($POST['femail']) isset($POST['fhp']) isset($POST['flive']) isset($POST['fpesan'])){
                fwrite($Tamu, $data);
                fclose($Tamu);
            }

            if(isset($POST['fnama']) || isset($POST['femail']) isset($POST['fhp']) isset($POST['flive']) isset($POST['fpesan'])){
                $Tamu = fopen("Buku_Tamu.txt", "r");
                echo fread($Tamu, filesize("Buku_Tamu.txt"));
            }
            ?>
        </div>
        <footer>
            <h5 style="text-align:center;">Copyright &copy2021 KABA-STORE</h5>
            <a href="#"><i class="fas fa-arrow-up"></i></a>
        </footer>
    </body>
</html>