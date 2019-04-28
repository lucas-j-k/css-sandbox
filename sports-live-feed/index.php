<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sports Live Feed</title>

    <!-- Assets -->
    <link href="https://fonts.googleapis.com/css?family=Overpass" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.iconmonstr.com/1.3.0/css/iconmonstr-iconic-font.min.css">
</head>
<body>

<?php @include('partials/header.php')  ?>
<div class="container">
    <?php @include('partials/summary-panel.php')  ?>
    <?php @include('partials/feeds.php')  ?>
</div>
<?php @include('partials/footer.php')  ?>


<script src="js/scripts.js"></script>
</body>
</html>