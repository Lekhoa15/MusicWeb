<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" type="image/png" href="./assets/image/ac.png" />
    <title>Music Home</title>
    <style>
    header .song_side::before {
        background: url('../../mu.png') no-repeat;
        background-position: center;
        z-index: -1;
    }
    </style>
</head>

<body>
    <header>
        <div class="menu_side">
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Last Listening</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>

            </div>
            <div class="menu-song">
                <li class="songItem">
                    <span>01</span>
                    <img src="assets/image/image_playlist/1.jpg" alt="">
                    <h5>Cưới thôi <br>
                        <div class="subtitle">Masiu x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="1"></i>

                </li>
                <li class="songItem">
                    <span>02</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="2"></i>

                </li>
                <li class="songItem">
                    <span>03</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="3"></i>

                </li>
                <li class="songItem">
                    <span>04</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="4"></i>

                </li>
                <li class="songItem">
                    <span>05</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="5"></i>

                </li>
                <li class="songItem">
                    <span>06</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="6"></i>

                </li>
                <li class="songItem">
                    <span>07</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="7"></i>

                </li>
                <li class="songItem">
                    <span>08</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="8"></i>

                </li>
                <li class="songItem">
                    <span>09</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="9"></i>

                </li>
                <li class="songItem">
                    <span>10</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="10"></i>

                </li>
                <li class="songItem">
                    <span>11</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="11"></i>

                </li>
                <li class="songItem">
                    <span>12</span>
                    <img src="assets/image/song20.jpg" alt="">
                    <h5>Nhất Thân <br>
                        <div class="subtitle">Khôi Vũ x Masew</div>
                    </h5>
                    <i class="bi playListPlay bi-play-circle-fill" id="12"></i>

                </li>


            </div>
        </div>
        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover <span></span> </li>
                    <li>My Library</li>
                    <li>Radio</li>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                </div>
                <div class="user">
                    <img src="assets/image/user.jpg" alt="">
                </div>
            </nav>
            <div class="content">
                <h1>PlayList Song</h1>

                <p>Ngày hôm nay trời trong xanh đẹp như tranh mình cùng dạo vòng quanh cả thế giới đừng vội nhanh
                    <br>Một hành trình nhật ký yêu thương đời mình hát vu vơ về tình đầu em ơi</p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>
            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="assets/image/song20.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>Nhất Thân <br>
                            <div class="subtitle">Khôi Vũ x Masew</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="assets/image/song20.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>Nhất Thân <br>
                            <div class="subtitle">Khôi Vũ x Masew</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="assets/image/song20.jpg" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>Nhất Thân <br>
                            <div class="subtitle">Khôi Vũ x Masew</div>
                        </h5>
                    </li>


                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item Artists_bx ">

                    <li>
                        <a href="home.html"> <img src="assets/image/image_playlist/11.jpg" alt=""></a>
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>
                    <li>
                        <img src="assets/image/image_playlist/11.jpg" alt="">
                    </li>

                </div>
            </div>
        </div>


        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="assets/image/image_playlist/1.jpg" alt="" id="poster_master_play">
            <h5 id="title">
                Ú òa
                <div class="subtitle">Mono</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next"></i>
                <a href="" download id="download_music"><i class="bi bi-download"></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>


            </div>
        </div>



    </header>
    <script src="assets/js/playlist.js"></script>
</body>

</html>