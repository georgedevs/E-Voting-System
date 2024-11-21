<?php include('head.php'); ?>

<body>
    <div class="wrapper" style="width: 100%;">
        <?php include('view_banner.php'); ?>

        <div class="content" style="width: 100%;">
            <center>
                <div class="center-container" style="padding: 8vh 0 3vh; width: 100%;">
                    <img src="img/loll.png" />
                </div>
            </center>
        </div>

        <?php include('footer.php'); ?>
    </div>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }

        .wrapper {
            max-width: 100%;
            margin: 0 auto;
        }

        .center-container {
            padding: 8vh 0 3vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            width: 33vw; /* Adjust the width to occupy 33% of viewport width */
            height: 58vh; /* Maintain aspect ratio */
            max-height: 60vh; /* Ensure the image does not exceed 60% of viewport height */
        }

        /* Media Queries for Responsive Design */
        @media (max-width: 768px) {
            .center-container {
                padding: 10vh 0 5vh;
            }

            img {
                width: 50vw; /* Adjust width for smaller screens */
            }
        }

        @media (min-width: 769px) and (max-width: 1024px) {
            img {
                width: 40vw; /* Adjust width for medium screens */
            }
        }

        @media (min-width: 1025px) and (max-width: 1366px) {
            img {
                width: 35vw; /* Standard width for screens up to 1366px */
            }
        }

        @media (min-width: 1367px) and (max-height: 1050px) {
            img {
                width: 38vw; /* Adjust width for larger screens with a height <= 1050px */
            }
        }

        @media (min-width: 1367px) and (min-height: 1051px) and (max-width: 1680px) {
            img {
                width: 35vw; /* Adjust width for screens with a height > 1050px and width <= 1680px */
            }
        }

        @media (min-width: 1681px) and (max-height: 1050px) {
            img {
                width: 35vw; /* Adjust width for screens with height <= 1050px */
            }
        }

        @media (min-width: 1681px) and (min-height: 1051px) and (max-width: 1920px) {
            img {
                width: 35vw; /* Adjust width for screens with height > 1050px and width <= 1920px */
            }
        }

        @media (min-width: 1921px) and (min-height: 1051px) {
            img {
                width: 35vw; /* Adjust width for very large screens */
            }
        }
    </style>
</body>
</html>
