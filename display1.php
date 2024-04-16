<?php
/*include 'connect.php';*/
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
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top justify-content-end"> <a class="navbar-brand ml-5"
      href="index.html" style="padding-left: 38rem;">Chatbot for mental health conversation</a>
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
            <a class="text-white" href="signin.php">
                <h2 class="d-sm-inline-flex" style="margin-right: 30px;">Sign up</h2>
            </a>
        </nav>
        <div class="progress-bar" id="progressbar">
        </div>

        <div class="post" style="margin-top: 70px;">
            <h1 class="one">Our Milestones</h1><br>
            <div class="row">
                <div class="col">
                    <div class="card shadow-lg p-4 mb-4" style="width:380px">
                        <div class="card-body shadow-lg p-4 mb-4 bg-white">
                            <h3 class="card-title">Success Rate</h3><br>
                            <p class="card-text">89%<br><br>
                                Satisfied Clients
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg p-4 mb-4" style="width:380px">
                        <div class="card-body shadow-lg p-4 mb-4 bg-white">
                            <h3 class="card-title">Case Solved</h3><br>
                            <p class="card-text">250+<br><br>
                                Satisfied Clients
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-lg p-4 mb-4" style="width:380px">
                        <div class="card-body shadow-lg p-4 mb-4 bg-white">
                            <h3 class="card-title">Happy faces</h3><br>
                            <p class="card-text">
                            <p>About 90% People Are Happy Today Due To ChatBot <i class="fas fa-heart"></i></p>
                            </p>
                        </div>
                    </div>
                </div>
            </div><br><br>
        </div>

        <!--chat bot preview-->
  <div id="body">
    <div id="chat-circle" class="btn btn-raised">
      <div id="chat-overlay"></div>
      <i class="large comment outline icon"></i>
    </div>

    <div class="chat-box">
      <div class="chat-box-header">
        ChatBot
        <span class="chat-box-toggle"><i class="close icon"></i></span>
      </div>
      <div class="chat-box-body">
        <div class="chat-box-overlay">
        </div>
        <div class="chat-logs">

        </div><!--chat-log -->
      </div>
      <div class="chat-input">
        <form>
          <input type="text" id="chat-input" placeholder="Send a message..." />
          <button type="submit" class="chat-submit" id="chat-submit"><i
              class="large blue paper plane icon"></i></button>
        </form>
      </div>
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