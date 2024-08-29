<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/main.css">
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <?php require('includes/navbar.php') ?>
        <!-- home -->
        <div class="home" id="home">
            <img src="asset/img/bg.jfif" alt="" class="bg-home">
            <div class="foto-home">
                <img class="foto-bruno" src="asset/img/bruno.png" alt="" srcset="">
            </div>
            <div class="content-home">
                <h2 class="subtitle">Coming Soon</h2>
                <h1 class="title">Bruno On Stage</h1>
                <h1 class="location">JAKARTA INTERNATIONAL STADIUM</h1>
                <div class="informasi">
                    <p>Tour for the Latest Album - '24K Magic'.</p>
                    <p>Sunday, September 15, 2024</p>
                </div>
            </div>
        </div>
        <div class="c" style="background-color: white; padding-top: 50px;">
            <div class="sub-home">
                <div class="content-1">
                    <div class="deskripsi">
                        <div class="">
                            <h1>THE BRUNOS CONCERT</h1>
                            <p>Get ready for an unforgettable night as the sensational
                                Bruno Mars takes the stage on his highly anticipated world
                                tour! Known for his electrifying performances and
                                chart-topping hits, Bruno Mars promises an evening filled
                                with energy, emotion, and extraordinary music. Join us for
                                an exhilarating journey through his greatest hits and
                                experience the magic of live music like never before.
                                This is a concert event you won’t want to miss!
                            </p>
                        </div>
                        <a class="button" href="">Get Ticket</a>
                    </div>
                    <div class="album">
                        <div class="judul-album">
                            <span>A</span>
                            <span>L</span>
                            <span>B</span>
                            <span>U</span>
                            <span>M</span>
                        </div>
                        <div class="foto-album">
                            <img src="asset/img/24K.jpg" alt="" class="satu">
                            <img src="asset/img/24K.jpg" alt="" class="dua">
                            <img src="asset/img/24K.jpg" alt="" class="tiga">
                            <img src="asset/img/24K.jpg" alt="" class="empat">
                        </div>
                    </div>
                </div>
                <div class="content-2">
                    <div class="foto-bruno">
                        <img src="asset/img/bruno-gitar.jpg" alt="">
                    </div>
                    <div class="deskripsi">
                        <h2>Bruno Mars</h2>
                        <p>is now back to entertain us with his beautiful songs on tour</p>
                        <h1>Get Your Own Ticket Now</h1>
                    </div>
                </div>
            </div>
            <!-- about -->

            <!-- ticket -->

            <!-- layour-->
            <?php require ('includes/layout.php')?>
            <!-- gallery -->
            <?php require ('includes/gallery.php')?>

            <!-- footer -->
        </div>
    </div>
</body>

</html>