<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100;1,200;1,300;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="discover.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src=""></script>
        <link rel="icon" href="icon.svg">
        <title>NyariDana</title>
    </head>

    <body>
        <div class="container">
            <header class="header">
                <div class="gambar"><img src="nyari_dana4.svg" alt="NyariDanaIcon"></div>
                <div class="logout">
                    <form action="logout.php" method="post" id="logout" onsubmit="">
                        <input type="submit" href="logout.php" value="🚪LOGOUT">
                    </form>
                </div>
            </header>
            
            <nav class="menu">
                <ul class="menu-items">
                    <li class="home"><a  href="index.php">Beranda</a></li>
                    <li class="discover"><a  href="discover.php">Jelajah</a></li>
                    <li class="myproyek"><a  href="myProyek.php">Proyek Saya</a></li>
                </ul>
            </nav>

            <section class="inti">

                <div class="search">
                        <form action="" method="post" id="cari" onsubmit="">
                            <input type="text" name="cari" placeholder="Apa yang kamu cari?">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                </div>

                <div class="collection">
                        <h2>Koleksi</h2>
                        <ul>
                            <li>proyek yang kamu sukai</li>
                            <li>proyek yang sedang trending</li>
                            <li>proyek pilihan editor</li>
                            <li>proyek yang mungkin cocok buatmu</li>
                        </ul>
                </div>
                    

                <div class="category">
                    <h2>Kategori</h2>
                    <center>
                        <ul class="category-items">
                            <li>seni</li>
                            <li>film</li>
                            <li>teknologi</li>
                            <li>komik dan ilustrasi</li>
                            <li>musik</li>
                            <li>seni</li>
                            <li>film</li>
                            <li>teknologi</li>
                            <li>komik dan ilustrasi</li>
                            <li>musik</li>
                            <li>seni</li>
                            <li>film</li>
                            <li>teknologi</li>
                            <li>komik dan ilustrasi</li>
                            <li>musik</li>
                            <li>seni</li>
                            <li>film</li>
                            <li>teknologi</li>
                            <li>komik dan ilustrasi</li>
                            <li>musik</li>
                        </ul>
                    </center>
                </div>
            </section>
        