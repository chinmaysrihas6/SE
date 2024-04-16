<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espirit Technologies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="height: 1100px;">
    <div class="mainbody">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <a class="navbar-brand" href="admin.php">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="display.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="about.php">About Us</a>
                    </li>
                </ul>
            </div>
            <a class="text-white" href="login.php">
                <h2 class="d-sm-inline-flex" style="margin-right: 30px;">logout</h2>
            </a>
        </nav>
        <section class="header1" style="margin-top: -26px !important;">
            <div class="container">
                <div class="img2"
                    style="background-image: url(b2.jpeg); display: flex; justify-content: center; align-items: center;">
                    <div class="row">
                        <div class="col-mod-12">
                            <h1 class="mb-3">Posts</h1>
                            <div class="breadcrumb header-breadcrumb justify-content-center">
                                <div class="breadcrumb-item"><a href="admin.php">
                                        <h5>admin</h5>
                                    </a>
                                </div>
                                <div class="breadcrumb-item active text-dark" aria-current="page">
                                    <h5>Posts</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container" style="margin-top: 8px !important;">
            <a href="post.php" class="btn btn-primary float-sm-right" role="button">Add Post</a><br><br>
            <h2>ALL Posts</h2>
            <table class="table" style="width:100%">
                <!--<TABLE BORDER=”6″ CELLPADDING=”30″>-->
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Category</th>
                        <th scope="col">operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //$sql = "select * from posts";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $title = $row["title"];
                            $name = $row["name"];
                            echo '<tr>
                  <th scope="row">' . $id . '</th>
                  <td>' . $title . '</td>
                  <td>' . $name . '</td>
                  <td>
                  <button class="btn btn-primary"><a href="update1.php?updateid=' . $id . '" class="text-light">update</a></button>
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