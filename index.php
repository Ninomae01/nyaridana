<?php 
 
session_start();

//cek udh login apa blom
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,700;0,800;1,100;1,200;1,300;1,400;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="index.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="index.js"></script>
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
                        <li class="myproyek"><a  href="myproyek.php">Proyek Saya</a></li>
                    </ul>
                </nav>
                
                <nav class="kategori">
                    <h2>Kategori Populer</h2>
                    <ul class="kategori-items">
                        <li><a  href=#>fotografer 📸</a></li>
                        <li><a  href=#>komik dan ilustrasi 🎨</a></li>
                        <li><a  href=#>cosplayer 👰</a></li>
                        <li><a  href=#>musik 🎵</a></li>
                        <li><a  href=#>game 🎮</a></li>
                        <li><a  href=#>tulisan 📚</a></li>
                        <li><a  href=#>cek kategori lain ></a></li>
                    </ul>
                </nav>

                <section class="section">
                    <div class="proyek">
                        <h3>Proyek Unggulan 🔥</h3>
                        <div class="isi">
                            <div class="main">
                                <img src="pap.png" alt="foto nyari" width="10%">
                                <h3>The Proyek</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit atque sed pariatur eveniet cum vitae quis harum! Eum alias distinctio qui possimus amet quia deserunt nobis aliquid laborum, cupiditate dolore.</p>
                                <br>
                                <p1>dari Kelompok The</p1>
                            </div>
                        </div>
                    </div>

                    <div class="kanan">
                    <div class="search">
                        <form action="" method="get" id="cari" onsubmit="">
                            <input type="text" name="cari" placeholder="Apa yang kamu cari?">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="rekomendasi">
                        <h4>Proyek Rekomendasi Untukmu 👍</h4>
                        <div class="c1">
                            <img src="Logo Coklat.png" alt="newer" width="10%">
                            <div class = "imba">
                                <h4>Proyek Alphaca</h4>
                                <p>Aku sayang kamu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo quaerat molestias quae tempora laudantium rem quam quibusdam beatae ab aut? Voluptatem, pariatur illo.</p>
                                <p1>dari Kelompok The</p1>
                            </div> 
                        </div>
                        <div class="c1">
                            <img src="Logo Coklat.png" alt="newer" width="10%">
                            <div class = "imba">
                                <h4>Proyek Alphaca</h4>
                                <p>Aku sayang kamu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo quaerat molestias quae tempora laudantium rem quam quibusdam beatae ab aut? Voluptatem, pariatur illo.</p>
                                <p1>dari Kelompok The</p1>
                            </div> 
                        </div>
                        <div class="c1">
                            <img src="Logo Coklat.png" alt="newer" width="10%">
                            <div class = "imba">
                                <h4>Proyek Alphaca</h4>
                                <p>Aku sayang kamu Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo quaerat molestias quae tempora laudantium rem quam quibusdam beatae ab aut? Voluptatem, pariatur illo.</p>
                                <p1>dari Kelompok The</p1>
                            </div> 
                        </div>
                    </div>

                    <div class="ingfo">
                        <h2>Terkini ⏳         <span style="background-color: #e6e6e6; border: none; border-radius: 10px; font-size: x-small; text-align: right; cursor: pointer;">cek lainnya</span></h2>
                        <p>Almed baru saja memberi es krim ke @Cahyono</p>
                        <p>Almed baru saja memberi coklat ke @Cahyono</p>  
                    </div>
                    </div>
                </section>

                <section class="section2">
                    <div class="creator">
                        <center>
                            <h2>kreator terfavorit 🥇</h2>
                            <ul>
                                <li>aku</li>
                                <li>kamu</li>
                                <li>dia</li>
                                <li>kita</li>
                                <li>kami</li>
                                <li>mereka</li>
                            </ul>
                        </center>
                    </div>
                </section>     
    </body>
</html>