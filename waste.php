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

    <style class="two_critical_css" type="text/css">
        :root {
            --space: 6rem
        }

        html {
            font-size: 16px
        }

        header {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            padding: 0;
            height: 120px;
            position: fixed;
            z-index: 10;
            -webkit-transition: all ease-in-out 0.5s;
            transition: all ease-in-out 0.5s;
            background-color: rgba(255, 255, 255, .8)
        }

        @media (max-width:768px) {
            header {
                width: 100%;
                position: fixed;
                z-index: 99;
                top: -1px;
                background: #fff;
                height: 80px;
                -webkit-box-shadow: 0 0 20px 0 rgba(166, 166, 166, .75);
                box-shadow: 0 0 20px 0 rgba(166, 166, 166, .75)
            }
        }

        .progress-bar {
            background: #05f;
            background: -webkit-linear-gradient(to right, #0055ff 0%, #CF4FC2 100%) !important;
            background: -moz-linear-gradient(to right, #0055ff 0%, #CF4FC2 100%) !important;
            background: linear-gradient(to right, #0055ff 0%, #CF4FC2 100%) !important
        }

        @media (max-width:768px) {
            .milestone h2 {
                margin-bottom: 0
            }

            footer .grid-item:nth-child(1) img {
                width: 250px;
                max-width: 100%
            }

            footer .grid-item:last-child {
                margin-top: 0
            }

            footer ul {
                margin-top: 10px
            }
        }

        .progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(127.39deg, rgba(255, 161, 33, 1) 15.16%, rgba(88, 144, 255, 1) 82.61%);
            width: 0%
        }

        header::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            background: url(https://espirittech.com/wp-content/themes/espirittech/assets/images/bg/bg1.svg) top center no-repeat;
            background-size: contain
        }

        a {
            font-size: 1rem;
            color: #262f5a;
            line-height: 1.9;
            text-decoration: none
        }

        p {
            font-size: 1rem;
            color: #262f5a;
            line-height: 1.9
        }

        nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            display: flex
        }



        nav button.navbar-toggler {
            display: block;
            min-width: 30px;
            width: 30px;
            height: 20px;
            border: 0;
            background: 0 0;
            display: none;
            position: relative;
            z-index: 99
        }

        nav .navbar-container {
            display: block
        }

        nav .navbar-container>ul {
            display: block;
            margin: 0;
            padding: 0
        }

        nav .navbar-container ul li {
            list-style: none;
            display: inline-block;
            transform-origin: center;
            text-align: center
        }

        nav .navbar-container ul li a {
            display: block;
            padding: 25px 20px;
            font-weight: 600
        }

        a,
        button {
            position: relative;
            z-index: 9
        }

        .btn-primary {
            background: #05f;
            background: -webkit-linear-gradient(to right, #05f 0, #cf4fc2 100%);
            background: -moz-linear-gradient(to right, #05f 0, #cf4fc2 100%);
            background: linear-gradient(to right, #05f 0, #cf4fc2 100%)
        }


        .progress-bar {
            background: #05f;
            background: -webkit-linear-gradient(to right, #05f 0, #cf4fc2 100%) !important;
            background: -moz-linear-gradient(to right, #05f 0, #cf4fc2 100%) !important;
            background: linear-gradient(to right, #05f 0, #cf4fc2 100%) !important
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        nav .navbar-container ul.contact-btn {
            position: relative;
            left: 0;
            top: 14px;
            margin-left: 10px
        }

        nav .navbar-container ul.contact-btn li a {
            border-radius: 50px;
            width: auto;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #05f;
            color: #fff;
            border: solid 1px #05f;
            box-shadow: rgb(149 157 165/20%) 0 8px 24px;
            white-space: nowrap
        }

        @media (min-width:768px) {
            .mobile {
                display: none
            }
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Poppins
        }

        html {
            scroll-behavior: smooth
        }

        .progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            background: linear-gradient(127.39deg, #ffa121 15.16%, #5890ff 82.61%);
            width: 0%
        }
    </style>
</head>

<body style="height: 1100px;">
    <header id="myHeader">
        <div class="container">
            <!-- navigation menu start-->
            <nav>
                <a href="https://espirittech.com" class="logo" data-aos="fade-up" data-aos-offset="0"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="false"
                    data-aos-once="false" data-aos-anchor-placement="top-center"><noscript><img decoding="async"
                            src="https://espirittech.com/wp-content/uploads/2021/10/espirit-logo.svg"
                            alt="Espirit technologies" width="200" height="55"></noscript><img class="lazy"
                        decoding="async"
                        src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20200%2055%22%3E%3C/svg%3E'
                        data-src="https://espirittech.com/wp-content/uploads/2021/10/espirit-logo.svg"
                        alt="Espirit technologies" width="200" height="55"></a>
                <button class="navbar-toggler" id="navbar-btn" aria-label="Menu Button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="navbar-container" id="navbar-container" data-aos="fade-up" data-aos-offset="0"
                    data-aos-delay="50" data-aos-duration="1000" data-aos-easing="ease-in-out" data-aos-mirror="false"
                    data-aos-once="false" data-aos-anchor-placement="top-center" style="display:flex;">
                    <ul class="navbar-menu" id="navbar-menu">
                        <li id="menu-item-119"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-93 current_page_item menu-item-119">
                            <a href="display.php" aria-current="page">Home</a>
                        </li>
                        <li id="menu-item-130"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-130"><a
                                href="about.php">About Us</a>
                        </li>
                        <li id="menu-item-146"
                            class="drop-down menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-146">
                            <a href="services.php">Services</a>
                        </li>
                        <li id="menu-item-151"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151"><a
                                href="lost.php">Lost</a>
                        </li>
                        <li id="menu-item-1430"
                            class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1430"><a
                                href="https://espirittech.com/category/blog/">Found</a>
                        </li>
                        <li id="menu-item-133"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a
                                href="https://espirittech.com/contact-us/">Contact Us</a>
                        </li>
                        <li id="menu-item-133"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-133"><a
                                href="https://espirittech.com/contact-us/">logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="progress-bar" id="progressbar"></div>
    </header>
    <section class="header1">
        <div class="container">
            <div class="img" style="background-image: url(t1.png);">
                <div class="search">
                    <form class="form-inline" action="/action_page.php" method="GET">
                        <input class="form-control form-control-lg mr-sm-3" type="text" name="search"
                            placeholder="Search">
                        <button class="btn btn-success btn-lg" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="about" style="margin-top: 80px;">
        <div class="row">
            <div class="col">
                <div class="container">
                    <h2>Image</h2>
                    <img class="rounded" src="paris.jpg" alt="Chania" width="430px" height="345px">
                </div>
            </div>
            <div class="col">
                <h1 class="mb-3">About Us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, doloremque exercitationem
                    facere consequuntur voluptatibus inventore eveniet mollitia? Iusto suscipit, obcaecati quis
                    quia aspernatur at inventore ut totam, architecto vitae fuga?<br>

                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi laudantium ad minima
                    facere rem reprehenderit! Cum ea dicta magni nisi excepturi in distinctio modi labore, error
                    iure veritatis optio velit.<br>

                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis culpa, tempora earum
                    magnam dolore repellendus atque quibusdam accusamus deleniti, vel inventore saepe quos
                    excepturi similique officiis nihil voluptate. Totam, adipisci.
                </p>
            </div>
        </div>
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

    <!-- JavaScript libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Your custom JavaScript code -->
    <script>
        // Your JavaScript code here
    </script>
</body>

</html>