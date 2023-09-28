﻿<?php 
include "constant.php";
if (isset($_GET['type']) || $_GET['type']!=="") {
    
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="exam_assets/img/favicon.ico">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link href="exam_assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="exam_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="exam_assets/css/style.default.css" rel="stylesheet" />
    <link href="exam_assets/css/custom.css" rel="stylesheet" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-125433287-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-125433287-1');
    </script>
</head>

<body>
    <div id="all">
        <div class="top-bar">
            <div class="container">
                <div class="col-md-12">
                    <div class="top-links"> </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <header class="main-header">
            <div class="navbar" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home"> <img src="assets/images/logo1.png" alt="GICT logo" class="img-responsive"> </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="clear"></div>
        <div>
            <div id="heading-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="pull-left">General Instructions</h1>
                            <div class="pull-right" style="padding: 0">
                                <label style="color: #fff;"> Choose Your Default Language</label>
                                <select class="form-control" onChange="changeIndtruct(this.value)">
                                        <option value="en">English</option>
                                    </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content">
                <div class="container">
                    <section>
                        <div class="row">
                            <div class="col-md-12 exam-confirm">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="col-md-12" id="en">
                                            <h4 class="text-center">Please read the instructions carefully</h4>
                                            <h4><strong><u>General Instructions:</u></strong></h4>
                                            <ol>
                                                <li>The clock will be set at the server. The countdown timer in the top right corner of screen will display the remaining time available for you to complete the examination. When the timer reaches zero, the
                                                    examination will end by itself. You will not be required to end or submit your examination.</li>
                                                <li>
                                                    The Questions Palette displayed on the right side of screen will show the status of each question using one of the following symbols:
                                                    <ol>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo1.png" /> You have not visited the question yet.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo2.png" /> You have not answered the question.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo3.png" /> You have answered the question.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo4.png" /> You have NOT answered the question, but have marked the question for review.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo5.png" /> The question(s) "Answered and Marked for Review" will be considered for evalution.<br/><br/></li>
                                                    </ol>
                                                </li>
                                                <li>You can click on the "&gt;" arrow which apperes to the left of question palette to collapse the question palette thereby maximizing the question window. To view the question palette again, you can click
                                                    on "&lt;" which appears on the right side of question window.</li>
                                                <li>You can click on your "Profile" image on top right corner of your screen to change the language during the exam for entire question paper. On clicking of Profile image you will get a drop-down to change
                                                    the question content to the desired language.</li>
                                            </ol>
                                            <h4><strong><u>Navigating to a Question:</u></strong></h4>
                                            <ol start="7">
                                                <li>
                                                    To answer a question, do the following:
                                                    <ol type="a">
                                                        <li>Click on the question number in the Question Palette at the right of your screen to go to that numbered question directly. Note that using this option does NOT save your answer to the current question.</li>
                                                        <li>Click on <strong>Save & Next</strong> to save your answer for the current question and then go to the next question.</li>
                                                        <li>Click on <strong>Mark for Review & Next</strong> to save your answer for the current question, mark it for review, and then go to the next question.</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                            <h4><strong><u>Answering a Question:</u></strong></h4>
                                            <ol start="8">
                                                <li>
                                                    Procedure for answering a multiple choice type question:
                                                    <ol type="a">
                                                        <li>To select you answer, click on the button of one of the options.</li>
                                                        <li>To deselect your chosen answer, click on the button of the chosen option again or click on the <strong>Clear Response</strong> button</li>
                                                        <li>To change your chosen answer, click on the button of another option</li>
                                                        <li>To save your answer, you MUST click on the Save & Next button.</li>
                                                        <li>To mark the question for review, click on the Mark for Review & Next button.</li>
                                                    </ol>
                                                </li>
                                                <li>To change your answer to a question that has already been answered, first select that question for answering and then follow the procedure for answering that type of question.</li>
                                            </ol>
                                            <h4><strong><u>Navigating through sections:</u></strong></h4>
                                            <ol start="10">
                                                <li>Sections in this question paper are displayed on the top bar of the screen. Questions in a section can be viewed by click on the section name. The section you are currently viewing is highlighted.</li>
                                                <li>After click the Save & Next button on the last question for a section, you will automatically be taken to the first question of the next section.</li>
                                                <li>You can shuffle between sections and questions anything during the examination as per your convenience only during the time stipulated.</li>
                                                <li>Candidate can view the corresponding section summery as part of the legend that appears in every section above the question palette.</li>
                                            </ol>
                                            <hr>

                                            <span class="text-danger">Please note all questions will appear in your default language. This language can be changed for a particular question later on.</span>
                                            <hr>
                                            <label>
                                                    <input type="checkbox" id="en_ch">&nbsp;&nbsp;I have read and understood the instructions. All computer hardware allotted to me are in proper working condition. I declare  that I am not in possession of / not wearing / not  carrying any prohibited gadget like mobile phone, bluetooth  devices  etc. /any prohibited material with me into the Examination Hall.I agree that in case of not adhering to the instructions, I shall be liable to be debarred from this Test and/or to disciplinary action, which may include ban from future Tests / Examinations</label>
                                            <hr>
                                            <div class="col-md-4 col-md-offset-4 text-center">
                                                <a onClick="check_instruction('en')" class="btn btn-primary btn-block">Proceed</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="exam_assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="exam_assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        function changeIndtruct(q) {
            $('#' + q).css("display", "block");
            if (q == 'hi') {
                $('#en').css("display", "none");
                $('#gj').css("display", "none");
            } else if (q == 'en') {
                $('#hi').css("display", "none");
                $('#gj').css("display", "none");
            } else {
                $('#hi').css("display", "none");
                $('#en').css("display", "none");
            }
        }

        function check_instruction(id) {
            var code = window.location.search.split("?")[1].split('=')[1];
            // alert(window.location.search.split("?")[1].split('&userId=')[1]);
            var student = window.location.search.split("?")[1].split('&userId=')[1];
            var pageName = "";
            if ($('#' + id + '_ch').prop("checked") == false) {
                if (id == 'en') {
                    alert('Please accept terms and conditions before proceeding.');
                } else if (id == 'hi') {
                    alert('आगे बढ़ने से पहले नियम और शर्तें स्वीकार करें।');
                } else {
                    alert('આગળ વધતા પહેલાં નિયમો અને શરતો સ્વીકારો');
                }
            } else {
                pageName = "test.php";
                window.location.href = pageName+"?id="+code+"&student="+student;

            }
        }
    </script>

</body>

</html>