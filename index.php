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

        <?php

            // select * from Images ORDER BY upload_time DESC LIMIT 3;

            $recentimg1 = "";
            $recentimg2 = "";
            $recentimg3 = "";

        ?>

        <div id="recent-images" class="wrapper-box">

            <div class = "image">
                <img src = "src/resources/<?php echo "$recentimg1"?>"><br/>
                <span class="image-text">
                    Caption: <br/>
                    User: <br/>
                    Rating: <br/>
                    Date:
                </span>
            </div>
            <div class = "image">
                <img src = "src/resources/<?php echo "$recentimg2"?>"><br/>
                <span class="image-text">
                    Caption: <br/>
                    User: <br/>
                    Rating: <br/>
                    Date:
                </span>
            </div>
            <div class = "image">
                <img src = "src/resources/<?php echo "$recentimg3"?>"><br/>
                <span class="image-text">
                    Caption: <br/>
                    User: <br/>
                    Rating: <br/>
                    Date:
                </span>
            </div>

        </div>


        <h2>Popular Images</h2>

        <div id="popular-images" class="wrapper-box">

        </div>
    </div>
</body>
</html>