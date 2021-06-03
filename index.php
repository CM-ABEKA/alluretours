<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_SESSION['logged_in'])){
?>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="shortcut icon" href="./soundcloud/images/headphones-2104207_640.png" type="image/x-icon">
    <link rel="stylesheet" href="./soundcloud/css/corousel.css">
    <link rel="stylesheet" href="./soundcloud/css/effects.css">
    <link rel="stylesheet" href="./soundcloud/css/style.css">

    <title>Ampi | Musical</title>
</head>

<body>


    <div class="loader">
        <div></div>
    </div>

    <div class="content-all">
        <!-- Navigation -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar"
                style="background-color: #D9D9D9; box-shadow: 0 5px 5px hsl(0, 0%, 65%, 0.4); ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./soundcloud/images/headphones-2104207_640.png" alt="" width="30" height="30"
                            class="d-inline-block align-text-top">
                        LiveAmp
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="features.html">Buy Ticket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Upcoming Events</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Categories
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Music</a></li>
                                    <li><a class="dropdown-item" href="#">Movies</a></li>
                                    <li><a class="dropdown-item" href="#">Series</a></li>
                                    <li><a class="dropdown-item" href="#">Trending</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-sm btn-outline-secondary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
        </header>


        <main>
            <!-- corousel start-->
            <section class="my-corous">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonialBox">
                                <img src="https://cdn.pixabay.com/photo/2012/04/24/12/01/quotation-39627_960_720.png"
                                    width="30px" class="quote" alt="" />
                                <div class="content">
                                    Note this is a drive-in concert.
                                </div>
                                <div class="details">
                                    <div class="imgBx">
                                        <h3>Jazz Concert<br /><span>LiveAmp Music</span></h3>
                                        <img src="https://images.unsplash.com/photo-1536849249744-44e01e7a089d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YWxidW1zfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                            id="card_img" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonialBox">
                                <img src="https://cdn.pixabay.com/photo/2012/04/24/12/01/quotation-39627_960_720.png"
                                    width="30px" class="quote" alt="" />
                                <div class="content">
                                    Note this is a drive-in concert.
                                </div>
                                <div class="details">
                                    <div class="imgBx">
                                        <h3>Afro Concert<br /><span>LiveAmp Music</span></h3>
                                        <img src="https://images.unsplash.com/photo-1415201364774-f6f0bb35f28f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8YWxidW0lMjBtdXNpY3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonialBox">
                                <img src="https://cdn.pixabay.com/photo/2012/04/24/12/01/quotation-39627_960_720.png"
                                    width="30px" class="quote" alt="" />
                                <div class="content">
                                    Note this is a drive-in concert.
                                </div>
                                <div class="details">
                                    <div class="imgBx">
                                        <h3>Country Music Concert<br /><span>LiveAmp Music</span></h3>
                                        <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YWxidW0lMjBtdXNpY3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonialBox">
                                <img src="https://cdn.pixabay.com/photo/2012/04/24/12/01/quotation-39627_960_720.png"
                                    width="30px" class="quote" alt="" />
                                <div class="content">
                                    Note this is a drive-in concert.
                                </div>
                                <div class="details">
                                    <div class="imgBx">
                                        <h3>All Gospel Concert<br /><span>LiveAmp Music</span></h3>
                                        <img src="https://images.unsplash.com/photo-1511192336575-5a79af67a629?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTB8fG11c2ljJTIwZ2VucmV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonialBox">
                                <img src="https://cdn.pixabay.com/photo/2012/04/24/12/01/quotation-39627_960_720.png"
                                    width="30px" class="quote" alt="" />
                                <div class="content">
                                    Note this is a drive-in concert.
                                </div>
                                <div class="details">
                                    <div class="imgBx">
                                        <h3>Someone Famous<br /><span>LiveAmp Music</span></h3>
                                        <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bXVzaWMlMjBnZW5yZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </section>
            <!-- corousel end -->
            <section>
                <div class="jumbotron text-center">
                    <h1>The Best Music Streaming</h1>
                    <h2></h2>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="">
                                    <input id="artistName" class="form-control" type="text"
                                        placeholder="Enter artist name">
                                    <br>
                                    <a class="btn btn-primary"
                                        onclick="searchArtist(document.getElementById('artistName').value)"
                                        href="">Search</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col " id="spotify">
                <span><i class="fab fa-spotify fa-2x"></i></span>
                <b>Spotify</b>
                <iframe src="https://open.spotify.com/embed/album/1DFixLWuPkv3KT3TnV35m3" width="300" height="380"
                    frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
            </div>
            <div class="col " id="deezer">
                <img src="https://e-cdns-assets.dzcdn.net/widget/images/deezer-logo-no-bg.png" width="100px" alt="">
                <iframe title="deezer-widget" src="https://widget.deezer.com/widget/dark/playlist/1479458365"
                    width="100%" height="300" frameborder="0" allowtransparency="true"
                    allow="encrypted-media; clipboard-write"></iframe>
            </div>

            <div class="canvas">
                <canvas id="visualiser"></canvas>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 id="name"></h3>
                    <img src="" alt="" id="picture">
                    <p id="title"></p>
                </div>
            </div>
        </div>
    </section>

    <footer></footer>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./soundcloud/scripts/script.js"></script>
    <!-- <script src="about.js"></script> -->
    <script src="./soundcloud/scripts/effects.js"></script>
</body>
<?php
}else{
    include('login.php');
}?>

</html>