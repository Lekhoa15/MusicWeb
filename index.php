<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="shortcut icon" type="image/png" href="./assets/image/favicon.png" />
</head>

<body>
    <div class="player">
        <!-- Dashboard -->
        <div class="dashboard">
            <!-- Header -->
            <header>
                <h4>Now playing:</h4>
                <h2>11/4/2024</h2>
            </header>

            <!-- CD -->
            <div class="cd">
                <div class="cd-thumb"
                    style="background-image: url('https://static-images.vnncdn.net/files/publish/2023/11/3/binz-thua-thang-xong-len-tung-toan-bo-6-ca-khuc-trong-ep-moi-600.png')">
                </div>
            </div>

            <!-- Control -->
            <div class="control">
                <div class="btn btn-repeat">
                    <i class="fas fa-redo"></i>
                </div>
                <div class="btn btn-prev">
                    <i class="fas fa-step-backward"></i>
                </div>
                <div class="btn btn-toggle-play">
                    <i class="fas fa-pause icon-pause"></i>
                    <i class="fas fa-play icon-play"></i>
                </div>
                <div class="btn btn-next">
                    <i class="fas fa-step-forward"></i>
                </div>
                <div class="btn btn-random">
                    <i class="fas fa-random"></i>
                </div>
            </div>

            <input id="progress" class="progress" type="range" value="0" step="1" min="0" max="100">

            <audio id="audio" src=""></audio>
        </div>

        <!-- Playlist -->
        <div class="playlist">


        </div>
    </div>
    </div>

    <script src="assets/js/danhmuc.js"></script>

</body>

</html>