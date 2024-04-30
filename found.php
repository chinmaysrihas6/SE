<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            align-items: center;
            justify-content: center;
            padding: auto;
        }

        .navbar {
            height: 70px;
            width: 1365px;
            background-color: #abdbe3;
            background: linear-gradient(to right, #f32170,
                    #ff6b08, #cf23cf, #eedd44);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            text-align: center;
            justify-content: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-link {
            font-size: 26px;
            color: white;
        }

        .img {
            width: auto;
            height: 520px;
            margin-top: 70px;
        }

        .post {
            margin-left: 50px;
        }

        .about {
            margin-left: 50px;
            margin-right: 100px;
            font-size: 21px;
        }

        .img1 {
            height: 400px;
            width: auto;
        }

        .one {
            background: linear-gradient(to right, #f32170,
                    #ff6b08, #cf23cf, #eedd44);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
            text-align: center;
        }


        .card {
            background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(70, 252, 226, 0.700717787114846) 100%);
            text-align: center;
            font-size: 20px;
            /*color: black;*/
        }

        .header1 {
            background-size: cover;
            text-align: center;
            position: relative;
            padding: 30px 190px 50px 0px;
        }

        .img2 {
            width: 1300px;
            height: 420px;
        }

        .breadcrumb {
            background: transparent;
            font-size: 20px;
        }

        .mb-3 {
            font-size: 50px;
            background: linear-gradient(to right, #f32170,
                    #ff6b08, #cf23cf, #eedd44);
            -webkit-text-fill-color: transparent;
            -webkit-background-clip: text;
        }

        /*.cc_link {
            text-decoration: none;
            color: black;
            opacity: .7;
            padding: 0;
            margin: 0;
        }

        .cc_link:hover {
            color: #0CF025;
        }

        #copyright {
            color: white;
            opacity: .7;
            padding: 0rem 1rem 1rem;
            text-align: center;
        }
        .mainbody {
            background-color: aliceblue;
        }*/
    </style>

    <!-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <!-- <link rel="stylesheet" href="css/index.css"> -->

    <!-- <link rel="stylesheet" href="css/fontstyle1.css"> Select fontstyle(.css) -->
    <link rel="stylesheet" href="ChatUI.css">
    <!-- <link rel="stylesheet" href="css/semantic.min.css"> -->

    <!-- chat preview CSS -->
    <link rel="stylesheet" href="chat.css" type="text/css">
    <!-- Scripts -->
    <script src="jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> -->

    <script src="chat.js" type="text/javascript"></script>

</head>

<body style="height: 1100px;">
    <div class="mainbody">

        <!-- Top NavBar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top justify-content-end"> <a
                class="navbar-brand ml-5" href="index.html" style="padding-left: 38rem;">Product Exchange System</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <span
                    class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mr-auto">
                </ul>
            </div>
        </nav>


        <nav class="navbar navbar-expand-lg navbar-dark position-fixed" id="navbar">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="display.php">Home</a>
                </ul>
            </div>
            <a class="text-white" href="lost.php">
                <h2 class="d-sm-inline-flex" style="margin-right: 30px;">Lost</h2>
            </a>
            <a class="text-white" href="found.php">
                <h2 class="d-sm-inline-flex" style="margin-right: 30px;">Found</h2>
            </a>
            <a class="text-white" href="exchange.php">
                <h2 class="d-sm-inline-flex" style="margin-right: 30px;">Exchange</h2>
            </a>
            <a class="text-white" href="login.php">
                <h2 class="d-sm-inline-flex" style="margin-right: 30px;">Sign up</h2>
            </a>
        </nav>
        <div class="progress-bar" id="progressbar">
        </div>
        <section class="header1">
            <div class="container">
                <div class="img2"
                    style="background-image: url(p3.jpeg); display: flex; justify-content: center; align-items: center;">
                    <div class="row">
                        <div class="col-mod-12">
                            <h1 class="mb-3">Found</h1>
                            <div class="breadcrumb header-breadcrumb justify-content-center">
                                <div class="breadcrumb-item"><a href="admin.php">
                                        <h3>Home</h3>
                                    </a>
                                </div>
                                <div class="breadcrumb-item active text-dark" aria-current="page">
                                    <h3>Found</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <a href="found1.php" class="btn btn-primary float-sm-right" role="button">Add Data</a><br><br>
            <h2>ALL Found Items</h2>
            <table class="table" style="width:100%">
                <!--<TABLE BORDER=”6″ CELLPADDING=”30″>-->
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">content</th>
                        <th scope="col">image</th>
                        <th scope="col">mobile number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select * from found";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row["name"];
                            $content = $row["content"];
                            $number = $row["number"];
                            $image = $row["image"];
                            echo '<tr>
                  <th scope="row">' . $id . '</th>
                  <td>' . $name . '</td>
                  <td>' . $content . '</td>
                  <td>' . $number . '</td>
                  <td><img src="' . $image . '" alt="Image"></td>
                  <td>
                  </td>
                  </tr>';
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div><br><br>
    <footer class="f1">
        <div class="img1"
            style="background-image: url(f2.jpg); display: flex; justify-content: center; align-items: center;">
            <div class="text-center mt-5">
                <div class="row">
                    <div class="col">
                        <div class="ig-section">
                            <div class="facebook-logo-align">
                                <a class="facebook" href="https://www.instagram.com/vitap.vitopia/#">
                                    <img src="face.png" height="40" width="40" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ig-section">
                            <div class="insta-logo-align">
                                <a class="insta" href="https://www.instagram.com/vitap.vitopia/#">
                                    <img src="insta.jpeg" height="40" width="40" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ig-section">
                            <div class="twitter-logo-align">
                                <a class="twitter" href="https://www.instagram.com/vitap.vitopia/#">
                                    <img src="t1.png" height="40" width="40" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div id="copyright">
                    All Rights Reserved | Copyright &copy; 2022 |&ensp;<a class="cc_link"
                        href="https://www.instagram.com/srihas56/">SRIHAS</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>

</html>