<?php
include "connect.php";

$success = "";

if (isset($_POST['submit'])) {
    $product = $_POST["product"]; // Change $_POST["name"] to $_POST["title"]
    $content = $_POST["content"];
    $number = $_POST["mobile"]; // Change $_POST["mobile"] to $_POST["number"]
    $image = $_FILES["file"];

    $imagefilename = $image['name'];
    $imagefiletemp = $image['tmp_name'];

    $filename_separate = explode('.', $imagefilename);
    $file_extension = strtolower(end($filename_separate));

    $extension = array('jpeg', 'jpg', 'png');
    if (in_array($file_extension, $extension)) {
        $upload_image = 'images/' . $imagefilename;
        move_uploaded_file($imagefiletemp, $upload_image);
    }

    $price = $_POST["price"]; // Get the price from the form
    // Validate price
    if (!is_numeric($price) || $price < 0) {
        die("Error: Invalid price.");
    }

    $sql = "INSERT INTO found (name, content, number, image, price) VALUES ('$name','$content','$number','$upload_image','$price')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $success = "Post uploaded successfully";
    } else {
        die("Error: " . mysqli_error($conn));
    }
}
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

        .img1 {
            height: 400px;
            width: auto;
        }


        .card {
            background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(70, 252, 226, 0.700717787114846) 100%);
            text-align: center;
            font-size: 20px;
            background: transparent;
            /*color: black;*/
        }

        .breadcrumb {
            background: transparent;
            font-size: 20px;
        }


        .img2 {
            width: 1300px;
            height: 420px;
        }

        .figure {
            display: inline-block;
        }

        .figure-img {
            margin-bottom: 0.5rem;
            line-height: 1;
        }


        .img {
            background-size: cover;
            background-repeat: no-repeat;

            .ftco-section {
                padding: 7em 0;
            }

            background-position: center center;
        }

        .mb-3 {
            color: black;
            font-size: 50px;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .img-thumbnail {
            padding: 0.25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            max-width: 100%;
            height: auto;
        }


        .ftco-no-pt {
            padding-top: 0;
        }

        .ftco-no-pb {
            padding-bottom: 0;
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

<body class="img js-fullheight" style="background-image: url();">
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
        <div class="container">
            <form method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="card my-5 shadow-lg p-4 mb-4">
                            <div class="card-top text-center"><br>
                                <?php echo $success; ?>
                                <h1 class="text-black">Upload Exchange Item</h1>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="title">
                                        <h3>Product:</h3>
                                    </label>
                                    <input type="text" class="form-control" id="title" name="product" required>
                                </div><br>
                                <div class="mb-3">
                                    <label for="content">
                                        <h3>Content:</h3>
                                    </label>
                                    <textarea id="content" class="form-control" name="content" rows="4"
                                        required></textarea>
                                </div><br>
                                <div class="mb-3">
                                    <label for="text" class="form-label">
                                        <h3>Phone Number:</h3>
                                    </label>
                                    <input type="text" class="form-control" id="phoneno" name="mobile"
                                        placeholder="Enter your phone number">
                                </div>

                                <div class="mb-3">
                                    <label for="image">
                                        <h3>Upload Image:</h3>
                                    </label>
                                    <input type="file" class="form-control" id="image" name="file[]" accept="image/*"
                                        multiple>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price">
                                    <h3>Price:</h3>
                                </label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>

                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary mb-5 w-100" name="submit" value="submit">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
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