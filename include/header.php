<?php include "constant.php"; ?>
<!DOCTYPE html>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/mission.css">

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"
        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:wght@500&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap"
        rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-dark top-nav-bar" id="top-nav-menu">
        <div class="container-fluid">
            <div class="col-sm-">
                <ul>
                    <li><a href="#"><i class="bi bi-telephone-fill"></i> 8433377466</a></li>
                    <li><a href="#"><i class="bi bi-envelope-fill"></i> info@gictindia.org</a></li>
                </ul>
            </div>

            <div class="col-sm-">
                <ul>
                    <li><a href="center-login.php" target="_blank">Center Login</a></li>
                    <li><a target="_blank" href=""><i class="bi bi-facebook"></i></a></li>
                    <li><a target="_blank" href=""><i class="bi bi-twitter"></i></a></li>
                    <li><a target="_blank" href=""><i class="bi bi-instagram"></i></a></li>
                    <li><a target="_blank" href=""><i class="bi bi-linkedin"></i></a></li>
                    <li><a target="_blank" href=""><i class="bi bi-youtube"></i></a></li>
                    <li>
                        <a target="_blank" href="admin/login.php" target="_blank" class="login-top-link">
                            Admin Login <i style="background:#7297ff; color:#000;"
                                class="bi bi-caret-right-square-fill"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <header class="navbar navbar-dark px-5" id="header">
        <div class="container-fluid">

            <div class="col-sm-9">
                <div class="logo d-flex">
                    <a href="index.php">
                        <img class="img-fluid" src="web image/logo 1.png">
                    </a>
                    <div>
                        <h1 style="color: red; letter-spacing:20px;"><b>GICT COMPUTER</b></h1>
                        <p style="color:blue;text-align:center; letter-spacing:14px;">College of IT & Management</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-3 d-flex justify-content-end">
                <div id="google_translate_element"></div>
            </div>

        </div>
    </header>



    <menubar>
        <nav class="navbar navbar-expand-lg  top-nav-menu-bar">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="bi bi-list"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ABOUT US
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="about.php">About Us</a>
                                <a class="dropdown-item" href="mission-vision.php">Mission & Vision</a>
                                <a class="dropdown-item" href="our-dream.php">Our Dream</a>
                                <a class="dropdown-item" href="advantages.php">Advantages</a>
                                <a class="dropdown-item" href="director-message.php">Director's Message</a>
                                <a class="dropdown-item" href="our-team.php">Our Management Team</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                COURSES
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="course.php?type=COMPUTER_COURSES">COMPUTER COURSES</a>
                                <a class="dropdown-item" href="course.php?type=TEACHER_TRAINING_COURSE">TEACHER TRAINING
                                    COURSE</a>
                                <a class="dropdown-item" href="course.php?type=NIELIT_COURSES">NIELIT COURSES</a>
                                <a class="dropdown-item" href="course.php?type=BOUTIQUE_COURSES">BOUTIQUE COURSES</a>
                                <a class="dropdown-item" href="course.php?type=BEAUTICIAN_COURSES">BEAUTICIAN COURSES
                                </a>
                                <a class="dropdown-item" href="course.php?type=UG_PG_COURSE">UG & PG COURSEs </a>
                                <a class="dropdown-item" href="course.php?type=YOGA_COURSES">YOGA COURSES</a>
                                <a class="dropdown-item" href="course.php?type=NDLM_COURSES">NDLM COURSES</a>
                                <a class="dropdown-item" href="course.php?type=ADVANCE_COURSES">ADVANCE COURSES</a>
                            </div>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                GET IN TOUCH
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="download.php">Downloads</a>
                                <a class="dropdown-item" href="appriciation-letter.php">Appreciation Letters</a>
                                <a class="dropdown-item" href="linkage-affiliation.php">Linkage & Affiliation</a>
                                <a class="dropdown-item" href="how-to-get-affiliaction.php">How to Get Affiliation</a>
                                <a class="dropdown-item" href="authorized-studycenter.php">Authorized Study Center</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                STUDENT
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="studentlogin.php">Student Login</a>
                                <a class="dropdown-item" href="student_registration.php">Student Registration</a>
                                <a class="dropdown-item" href="exam-login.php">Exam Registration</a>
                                <a class="dropdown-item" href="student-details.php">Student Information</a>
                                <a class="dropdown-item" href="online-result.php">Online Result</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Center Section
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <!---<a class="dropdown-item" href="">Registration Process</a>--->
                                <a class="dropdown-item" href="centerpanel/center-login.php" target="_blank">ASC
                                    Login</a>
                                <a class="dropdown-item" href="bank-details.php">Our Account (Bank Details)</a>
                                <a class="dropdown-item" href="business-support-system.php">Business Support System</a>
                                <a class="dropdown-item" href="rules-regulation.php">SGCSM Rules & regulation</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Franchise
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="franchise-online-form.php">Online apply for Franchise</a>
                                <a target="_blank" class="dropdown-item"
                                    href="uploads/pdf/2018-12-09-11-03-20--5c0cf678528f4-_58d607d26ca53.pdf">Off Line
                                    Affiliation Form</a>
                                <a class="dropdown-item" href="public-notice.php">Public Notice</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                MORE
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="our-publication.php">Our Publication</a>
                                <a class="dropdown-item" href="our-gallery.php">Gallery</a>
                                <a class="dropdown-item" href="placement-cell.php">Placement Cell</a>
                                <a class="dropdown-item" href="news-events.php">News & Events</a>
                                <a class="dropdown-item" href="media-coverage.php">Media Coverage</a>
                                <a class="dropdown-item" href="study-material.php">Our Study Materials</a>
                            </div>

                        </li>

                        <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>

                    </ul>
                </div>
            </div>

        </nav>
    </menubar>