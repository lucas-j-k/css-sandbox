<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Media Player | CSS Sandbox</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
    <link rel="stylesheet" href="../static/css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>

<div class="container">
    <div class="player">
        <div class="player-body">
            <!-- <div class="player-background"></div> -->
            <div class="player-overlay">
                <div class="player-thumbnail shadow"></div>
                <div class="player-text">
                    <span class="now-playing">Now Playing</span>
                    <span class="divider"></span>
                    <h1 class="player-title">Consectetur adipisicing elit</h1>
                    <h2 class="player-subtitle">Lorem ipsum dolor sit</h2>
                </div>
                <div class="player-control-widget">
                    <div class="player-timeline">
                        <span class="player-trackbar">
                            <span class="player-progress"></span>
                        </span>
                    </div>
                    <div class="player-controls">

                        <div class="player-icon player-icon--md player-icon--shuffle player-icon--active"><i class="im im-random"></i></div>
                        <div class="player-icon player-icon--md player-icon--previous"><i class="im im-previous"></i></div>
                        <div class="player-icon player-icon--lg player-icon--play"><i class="im im-play"></i></div>
                        <div class="player-icon player-icon--md player-icon--next"><i class="im im-next"></i></div>
                        <div class="player-icon player-icon--md player-icon--loop"><i class="im im-loop"></i></div>

                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
    

    <script src="js/scripts.js"></script>
</body>
</html>