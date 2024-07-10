<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/favicon.png" rel="touch-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style360.css">

    <title>SISMATIK | VIEW 3D</title>

    <!-- Script -->
    <script src="https://kit.fontawesome.com/6d94e77059.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="kotak">
        <iframe id="ps" src="https://www.google.com/maps/embed?pb=!4v1619767497716!6m8!1m7!1sPD6yZmN4GYPW4U5yPbugEA!2m2!1d-6.905621525779368!2d106.8734724375913!3f23.7228847892243!4f6.787622436806984!5f0.4000000000000002" allowfullscreen="" loading="lazy"></iframe></iframe>
    </div>
    <div class="tombol">
        <a href="<?= base_url('/'); ?>"><button><i class="fas fa-arrow-left"></i></button></a>
    </div>

    <!-- Disable Right -->
    <script>
        document.addEventListener("contextmenu", function(disableright) {
            disableright.preventDefault();
        })
    </script>

</body>

</html>