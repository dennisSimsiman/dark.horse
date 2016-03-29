<html>
<head>
    <title>Image Rater</title>
    <link rel="stylesheet" href="src/styles/style.css" type="text/css" />
</head>
<body>
    <div id="wrapper">

        <h1>Image Rater [logo]</h1>

        <div id="header-links">
            <?php
                $connection = mysqli_connect
                ('localhost','guest','guest','DarkHorse')
                or die(mysqli_error($connection));
            ?>
            <a href="">SIGN IN</a>
             |
            <a href="">SIGN UP</a>
        </div>


        <h2>Recent Images</h2>

        <div id="recent-images" class="wrapper-box">

        </div>


        <h2>Popular Images</h2>

        <div id="popular-images" class="wrapper-box">

        </div>
    </div>
</body>
</html>