﻿<?php 
include "constant.php";
$url = $URL . "question/read_question_list.php";
$data = array();
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);
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
    <title>NTA</title>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link href="exam_assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="exam_assets/css/custom.css" rel="stylesheet" />
    <link href="exam_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="exam_assets/css/style.default.css" rel="stylesheet" />
    <link href="exam_assets/css/responsive.css" rel="stylesheet" />
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
                            <a class="navbar-brand home">
                                <img src="assets/images/logo1.png" alt="GICT logo" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-5 pull-right">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="user-profile">
                                        <table>
                                            <tr>
                                                <td style="padding: 5px 15px; border: 2px solid #666"><i class="fa fa-user fa-4x"></i></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Candidate Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold">[Your Name]</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Subject Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold">[Test Practice]</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Remaining Time</td>
                                                            <td>
                                                                : <span class="timer-title time-started">00:00:00</span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </li>

                                </ul>
                                <input type="hidden" id="hdfTestDuration" value="180" />
                            </div>
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
                        <div class="col-md-7 pull-left">
                            <table class="stream">
                                <tr class="full-width">
                                    <td class="full-width">
                                        <h1> <?php echo base64_decode($_GET['id']) ;?> </h1>
                                    </td>

                                    <!-- <td class="full-width"><a class="mb5 btn btn-primary stream_1 full-width" href="javascript:void(0);" data-href="page01">Physics</a>
                                        <div class="clear-xs"></div>
                                    </td>
                                    <td class="full-width"><a class="mb5 btn btn-primary stream_1 full-width" href="javascript:void(0);" data-href="page31">Chemistry</a></td>
                                    <td class="full-width"><a class="mb5 btn btn-primary stream_1 full-width" href="javascript:void(0);" data-href="page61">Mathematics</a></td> -->
                                </tr>
                            </table>
                        </div>


                        <div class="clear-xs "></div>
                        <div class="col-md-3 text-right">
                            <div style="padding: 15px 0 0 0">
                                <a class="btn btn-primary pull-left full-width" target="_blank" href="exam_assets/pdf/JEE-Main-2018.pdf"><i class="fa fa-download"></i> Download Question</a>
                            </div>
                        </div>
                        <div class="clear-xs"></div>
                        <div class="col-md-2 col-sm-12" id="divdrplngcng" @*style="margin: 15px 0 0 0" *@>
                            <text style="color:white; font-weight:bold">Paper Language:</text>
                            <select class="form-control drplanguage">
                                <option selected value="english">English</option>
                                <option value="hindi">Hindi</option>
                                <option value="gujarati">Gujarati</option>
                            </select>
                            <input type="hidden" id="hdfCurrentLng" value="English" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row exam-paper">
                    <div class="col-md-8" id="quest" style="padding: 0">
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <div class="panel panel-default">
                                        <div class="panel-body mb0">
                                            <div class="row">
                                                <div class="col-lg-12">

                                                <?php
                                                $counter = 0;
                                                $que_counter = 0;
                                                $page_counter = 0;
                                                foreach ($result as $key => $value) {
                                                foreach ($value as $key1 => $value1) {
                                                ?>

                                                    <div style="dislpay:none" class="tab-content div-question mb0" id="page<?php echo ++$counter ;?>">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="<?php echo $value1->correct_option ;?>" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question <?php echo ++$que_counter ;?>: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <!-- <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/1.png" class="img-responsive"> <br> -->
                                                            <p><?php echo $value1->question_name ;?></p>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage<?php echo $que_counter ;?>" id="rOption<?php echo $que_counter ;?>_1"> 1 ) <?php echo $value1->option_1 ;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input type="radio" value="2" name="radiospage<?php echo $que_counter ;?>" id="rOption<?php echo $que_counter ;?>_2"> 2 ) <?php echo $value1->option_2 ;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input type="radio" value="3" name="radiospage<?php echo $que_counter ;?>" id="rOption<?php echo $que_counter ;?>_3"> 3 ) <?php echo $value1->option_3 ;?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input type="radio" value="4" name="radiospage<?php echo $que_counter ;?>" id="rOption<?php echo $que_counter ;?>_4"> 4 ) <?php echo $value1->option_4 ;?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>

                                                    <?php } } ?>

                                                    <!-- <div style="display: none;" class="tab-content div-question mb0" id="page02">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 2: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/2.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage02" id="rOption2_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage02" id="rOption2_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage02" id="rOption2_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage02" id="rOption2_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page03">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 3: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/3.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage03" id="rOption3_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage03" id="rOption3_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage03" id="rOption3_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage03" id="rOption3_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div> -->
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page04">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 4: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/4.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage04" id="rOption4_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage04" id="rOption4_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage04" id="rOption4_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage04" id="rOption4_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page05">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 5: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/5.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage05" id="rOption5_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage05" id="rOption5_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage05" id="rOption5_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage05" id="rOption5_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page06">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 6: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/6.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage06" id="rOption6_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage06" id="rOption6_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage06" id="rOption6_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage06" id="rOption6_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page07">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 7: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/7.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage07" id="rOption7_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage07" id="rOption7_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage07" id="rOption7_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage07" id="rOption7_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page08">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 8: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/8.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage08" id="rOption8_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage08" id="rOption8_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage08" id="rOption8_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage08" id="rOption8_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page09">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 9: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/9.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage09" id="rOption9_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage09" id="rOption9_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage09" id="rOption9_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage09" id="rOption9_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page10">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 10: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/10.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage10" id="rOption10_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage10" id="rOption10_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage10" id="rOption10_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage10" id="rOption10_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page11">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 11: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/11.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage11" id="rOption11_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage11" id="rOption11_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage11" id="rOption11_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage11" id="rOption11_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page12">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 12: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/12.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage12" id="rOption12_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage12" id="rOption12_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage12" id="rOption12_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage12" id="rOption12_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page13">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 13: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/13.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage13" id="rOption13_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage13" id="rOption13_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage13" id="rOption13_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage13" id="rOption13_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page14">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 14: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/14.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage14" id="rOption14_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage14" id="rOption14_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage14" id="rOption14_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage14" id="rOption14_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page15">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 15: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/15.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage15" id="rOption15_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage15" id="rOption15_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage15" id="rOption15_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage15" id="rOption15_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page16">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 16: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/16.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage16" id="rOption16_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage16" id="rOption16_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage16" id="rOption16_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage16" id="rOption16_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page17">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 17: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/17.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage17" id="rOption17_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage17" id="rOption17_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage17" id="rOption17_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage17" id="rOption17_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page18">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 18: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/18.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage18" id="rOption18_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage18" id="rOption18_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage18" id="rOption18_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage18" id="rOption18_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page19">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 19: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/19.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage19" id="rOption19_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage19" id="rOption19_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage19" id="rOption19_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage19" id="rOption19_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page20">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 20: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/20.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage20" id="rOption20_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage20" id="rOption20_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage20" id="rOption20_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage20" id="rOption20_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page21">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 21: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/21.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage21" id="rOption21_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage21" id="rOption21_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage21" id="rOption21_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage21" id="rOption21_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page22">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 22: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/22.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage22" id="rOption22_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage22" id="rOption22_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage22" id="rOption22_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage22" id="rOption22_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page23">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 23: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/23.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage23" id="rOption23_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage23" id="rOption23_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage23" id="rOption23_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage23" id="rOption23_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page24">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 24: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/24.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage24" id="rOption24_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage24" id="rOption24_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage24" id="rOption24_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage24" id="rOption24_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page25">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 25: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/25.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage25" id="rOption25_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage25" id="rOption25_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage25" id="rOption25_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage25" id="rOption25_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page26">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 26: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/26.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage26" id="rOption26_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage26" id="rOption26_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage26" id="rOption26_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage26" id="rOption26_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page27">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 27: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/27.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage27" id="rOption27_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage27" id="rOption27_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage27" id="rOption27_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage27" id="rOption27_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page28">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 28: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/28.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage28" id="rOption28_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage28" id="rOption28_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage28" id="rOption28_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage28" id="rOption28_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page29">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 29: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/29.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage29" id="rOption29_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage29" id="rOption29_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage29" id="rOption29_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage29" id="rOption29_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page30">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 30: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/30.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage30" id="rOption30_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage30" id="rOption30_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage30" id="rOption30_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage30" id="rOption30_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page31">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 31: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/31.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage31" id="rOption31_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage31" id="rOption31_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage31" id="rOption31_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage31" id="rOption31_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page32">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 32: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/32.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage32" id="rOption32_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage32" id="rOption32_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage32" id="rOption32_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage32" id="rOption32_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page33">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 33: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/33.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage33" id="rOption33_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage33" id="rOption33_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage33" id="rOption33_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage33" id="rOption33_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page34">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 34: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/34.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage34" id="rOption34_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage34" id="rOption34_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage34" id="rOption34_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage34" id="rOption34_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page35">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 35: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/35.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage35" id="rOption35_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage35" id="rOption35_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage35" id="rOption35_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage35" id="rOption35_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page36">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 36: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/36.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage36" id="rOption36_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage36" id="rOption36_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage36" id="rOption36_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage36" id="rOption36_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page37">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 37: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/37.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage37" id="rOption37_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage37" id="rOption37_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage37" id="rOption37_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage37" id="rOption37_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page38">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 38: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/38.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage38" id="rOption38_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage38" id="rOption38_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage38" id="rOption38_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage38" id="rOption38_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page39">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 39: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/39.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage39" id="rOption39_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage39" id="rOption39_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage39" id="rOption39_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage39" id="rOption39_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page40">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 40: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/40.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage40" id="rOption40_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage40" id="rOption40_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage40" id="rOption40_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage40" id="rOption40_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page41">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 41: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/41.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage41" id="rOption41_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage41" id="rOption41_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage41" id="rOption41_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage41" id="rOption41_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page42">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 42: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/42.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage42" id="rOption42_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage42" id="rOption42_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage42" id="rOption42_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage42" id="rOption42_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page43">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 43: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/43.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage43" id="rOption43_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage43" id="rOption43_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage43" id="rOption43_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage43" id="rOption43_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page44">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 44: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/44.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage44" id="rOption44_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage44" id="rOption44_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage44" id="rOption44_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage44" id="rOption44_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page45">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 45: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/45.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage45" id="rOption45_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage45" id="rOption45_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage45" id="rOption45_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage45" id="rOption45_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page46">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 46: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/46.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage46" id="rOption46_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage46" id="rOption46_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage46" id="rOption46_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage46" id="rOption46_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page47">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 47: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/47.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage47" id="rOption47_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage47" id="rOption47_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage47" id="rOption47_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage47" id="rOption47_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page48">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 48: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/48.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage48" id="rOption48_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage48" id="rOption48_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage48" id="rOption48_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage48" id="rOption48_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page49">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 49: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/49.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage49" id="rOption49_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage49" id="rOption49_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage49" id="rOption49_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage49" id="rOption49_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page50">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 50: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/50.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage50" id="rOption50_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage50" id="rOption50_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage50" id="rOption50_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage50" id="rOption50_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page51">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 51: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/51.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage51" id="rOption51_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage51" id="rOption51_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage51" id="rOption51_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage51" id="rOption51_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page52">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 52: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/52.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage52" id="rOption52_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage52" id="rOption52_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage52" id="rOption52_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage52" id="rOption52_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page53">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 53: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/53.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage53" id="rOption53_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage53" id="rOption53_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage53" id="rOption53_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage53" id="rOption53_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page54">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 54: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/54.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage54" id="rOption54_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage54" id="rOption54_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage54" id="rOption54_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage54" id="rOption54_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page55">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 55: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/55.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage55" id="rOption55_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage55" id="rOption55_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage55" id="rOption55_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage55" id="rOption55_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page56">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 56: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/56.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage56" id="rOption56_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage56" id="rOption56_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage56" id="rOption56_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage56" id="rOption56_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page57">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 57: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/57.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage57" id="rOption57_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage57" id="rOption57_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage57" id="rOption57_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage57" id="rOption57_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page58">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 58: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/58.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage58" id="rOption58_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage58" id="rOption58_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage58" id="rOption58_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage58" id="rOption58_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page59">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 59: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/59.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage59" id="rOption59_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage59" id="rOption59_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage59" id="rOption59_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage59" id="rOption59_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page60">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 60: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/60.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage60" id="rOption60_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage60" id="rOption60_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage60" id="rOption60_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage60" id="rOption60_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page61">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 61: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/61.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage61" id="rOption61_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage61" id="rOption61_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage61" id="rOption61_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage61" id="rOption61_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page62">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 62: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/62.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage62" id="rOption62_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage62" id="rOption62_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage62" id="rOption62_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage62" id="rOption62_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page63">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 63: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/63.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage63" id="rOption63_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage63" id="rOption63_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage63" id="rOption63_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage63" id="rOption63_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page64">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 64: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/64.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage64" id="rOption64_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage64" id="rOption64_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage64" id="rOption64_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage64" id="rOption64_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page65">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 65: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/65.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage65" id="rOption65_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage65" id="rOption65_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage65" id="rOption65_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage65" id="rOption65_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page66">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 66: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/66.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage66" id="rOption66_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage66" id="rOption66_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage66" id="rOption66_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage66" id="rOption66_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page67">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 67: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/67.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage67" id="rOption67_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage67" id="rOption67_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage67" id="rOption67_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage67" id="rOption67_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page68">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 68: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/68.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage68" id="rOption68_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage68" id="rOption68_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage68" id="rOption68_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage68" id="rOption68_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page69">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 69: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/69.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage69" id="rOption69_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage69" id="rOption69_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage69" id="rOption69_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage69" id="rOption69_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page70">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 70: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/70.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage70" id="rOption70_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage70" id="rOption70_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage70" id="rOption70_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage70" id="rOption70_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page71">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 71: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/71.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage71" id="rOption71_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage71" id="rOption71_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage71" id="rOption71_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage71" id="rOption71_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page72">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 72: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/72.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage72" id="rOption72_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage72" id="rOption72_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage72" id="rOption72_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage72" id="rOption72_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page73">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 73: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/73.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage73" id="rOption73_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage73" id="rOption73_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage73" id="rOption73_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage73" id="rOption73_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page74">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 74: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/74.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage74" id="rOption74_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage74" id="rOption74_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage74" id="rOption74_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage74" id="rOption74_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page75">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 75: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/75.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage75" id="rOption75_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage75" id="rOption75_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage75" id="rOption75_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage75" id="rOption75_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page76">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 76: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/76.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage76" id="rOption76_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage76" id="rOption76_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage76" id="rOption76_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage76" id="rOption76_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page77">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 77: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/77.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage77" id="rOption77_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage77" id="rOption77_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage77" id="rOption77_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage77" id="rOption77_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page78">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 78: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/78.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage78" id="rOption78_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage78" id="rOption78_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage78" id="rOption78_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage78" id="rOption78_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page79">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 79: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/79.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage79" id="rOption79_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage79" id="rOption79_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage79" id="rOption79_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage79" id="rOption79_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page80">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 80: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/80.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage80" id="rOption80_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage80" id="rOption80_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage80" id="rOption80_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage80" id="rOption80_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page81">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 81: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/81.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage81" id="rOption81_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage81" id="rOption81_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage81" id="rOption81_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage81" id="rOption81_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page82">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="4" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 82: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/82.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage82" id="rOption82_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage82" id="rOption82_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage82" id="rOption82_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage82" id="rOption82_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page83">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 83: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/83.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage83" id="rOption83_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage83" id="rOption83_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage83" id="rOption83_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage83" id="rOption83_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page84">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 84: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/84.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage84" id="rOption84_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage84" id="rOption84_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage84" id="rOption84_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage84" id="rOption84_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page85">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 85: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/85.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage85" id="rOption85_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage85" id="rOption85_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage85" id="rOption85_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage85" id="rOption85_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page86">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 86: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/86.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage86" id="rOption86_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage86" id="rOption86_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage86" id="rOption86_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage86" id="rOption86_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page87">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="2" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 87: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/87.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage87" id="rOption87_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage87" id="rOption87_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage87" id="rOption87_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage87" id="rOption87_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page88">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 88: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/88.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage88" id="rOption88_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage88" id="rOption88_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage88" id="rOption88_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage88" id="rOption88_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page89">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="3" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 89: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/89.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage89" id="rOption89_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage89" id="rOption89_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage89" id="rOption89_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage89" id="rOption89_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                    <div style="display: none;" class="tab-content div-question mb0" id="page90">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="1" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> Question 90: <img src="exam_assets/img/QuizIcons/down.png" class="btndown pull-right"> </h4>
                                                            <img alt="Question" src="exam_assets/img/Question/JEEMAIN/Paper1/English/90.png" class="img-responsive"> <br>
                                                            <table class="table table-borderless mb0">
                                                                <tbody>
                                                                    <tr>
                                                                        <td> <input type="radio" value="1" name="radiospage90" id="rOption90_1"> 1 ) </td>
                                                                        <td> <input type="radio" value="2" name="radiospage90" id="rOption90_1"> 2 ) </td>
                                                                        <td> <input type="radio" value="3" name="radiospage90" id="rOption90_1"> 3 ) </td>
                                                                        <td> <input type="radio" value="4" name="radiospage90" id="rOption90_1"> 4 ) </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <h4 class="question-footer"> <img src="exam_assets/img/QuizIcons/up.png" class="btnup pull-right"> </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="mb5 full-width btn btn-success btn-block btn-save-answer">Save &amp; Next</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="mb5 full-width btn btn-warning btn-block btn-save-mark-answer">Save &amp; Mark For Review</button>
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="mb5 full-width btn btn-default btn-block btn-reset-answer">Clear Response</button>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <button class="mb5 full-width btn btn-primary btn-block btn-mark-answer">Mark For Review &amp; Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel-footer">
                                        <div class="row">
                                            <div class="col-md-12"> <button class="btn btn-success btn-submit-all-answers pull-right">Submit</button>&nbsp;&nbsp;
                                                <a href="javascript:void(0);" class="btn btn-default pull-left" id="btnPrevQue">
                                                    << Back </a>&nbsp;&nbsp; <a href="javascript:void(0);" class="btn btn-default pull-left" id="btnNextQue">Next >></a>&nbsp;&nbsp; </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="full_screen pull-right" style="cursor: pointer; background-color: #000; color: #fff; padding: 5px;">
                                        <i class="fa fa-angle-right fa-2x"></i>
                                    </div>
                                    <div class="collapse_screen hidden pull-right" style="cursor: pointer; background-color: #000; color: #fff; padding: 5px;">
                                        <i class="fa fa-angle-left fa-2x"></i>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4" id="pallette">
                        <div class="panel panel-default mb0">
                            <div class="panel-body">
                                <table class="table table-borderless mb0">
                                    <tr>
                                        <td class="full-width"> <a class="test-ques-stats que-not-attempted lblNotVisited">0</a> Not Visited </td>
                                        <td class="full-width"> <a class="test-ques-stats que-not-answered lblNotAttempted">0</a> Not Answered </td>
                                    </tr>
                                    <tr>
                                        <td class="full-width"> <a class="test-ques-stats que-save lblTotalSaved">0</a> Answered </td>
                                        <td class="full-width"> <a class="test-ques-stats que-mark lblTotalMarkForReview">0</a> Marked for Review </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2"> <a class="test-ques-stats que-save-mark lblTotalSaveMarkForReview">0</a> Answered &amp; Marked for Review (will be considered for evaluation) </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="panel panel-default ">
                            <div class="panel-body " style="height:320px;overflow-y:scroll;">
                                <ul class="pagination test-questions">
                                    <li class="active" data-seq="1"><a class="test-ques que-not-answered" href="javascript:void(0);" data-href="page<?php echo ++$page_counter ?>">01</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page<?php echo ++$page_counter ?>">02</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page<?php echo ++$page_counter ?>">03</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page04">04</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page05">05</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page06">06</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page07">07</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page08">08</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page09">09</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page10">10</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page11">11</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page12">12</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page13">13</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page14">14</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page15">15</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page16">16</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page17">17</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page18">18</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page19">19</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page20">20</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page21">21</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page22">22</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page23">23</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page24">24</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page25">25</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page26">26</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page27">27</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page28">28</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page29">29</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page30">30</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page31">31</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page32">32</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page33">33</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page34">34</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page35">35</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page36">36</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page37">37</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page38">38</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page39">39</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page40">40</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page41">41</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page42">42</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page43">43</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page44">44</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page45">45</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page46">46</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page47">47</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page48">48</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page49">49</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page50">50</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page51">51</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page52">52</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page53">53</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page54">54</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page55">55</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page56">56</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page57">57</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page58">58</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page59">59</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page60">60</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page61">61</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page62">62</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page63">63</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page64">64</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page65">65</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page66">66</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page67">67</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page68">68</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page69">69</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page70">70</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page71">71</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page72">72</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page73">73</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page74">74</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page75">75</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page76">76</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page77">77</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page78">78</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page79">79</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page80">80</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page81">81</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page82">82</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page83">83</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page84">84</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page85">85</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page86">86</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page87">87</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page88">88</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page89">89</a></li>
                                    <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page90">90</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 exam-summery" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h3 class="text-center">Exam Summary</h3>
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <tr>
                                            <th>Section Name</th>
                                            <th>No of Questions</th>
                                            <th>Answered</th>
                                            <th>Not Answered</th>
                                            <th>Marked for Review</th>
                                            <th>Answered & Marked for Review(will be considered for evaluation)</th>
                                            <th>Not Visited</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="">Paper 1</td>
                                            <td class="lblTotalQuestion"></td>
                                            <td class="lblTotalSaved"></td>
                                            <td class="lblNotAttempted"></td>
                                            <td class="lblTotalMarkForReview"></td>
                                            <td class="lblTotalSaveMarkForReview"></td>
                                            <td class="lblNotVisited"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr />
                                <div class="col-md-12 text-center">
                                    <h4> Are you sure you want to submit for final marking?<br />No changes will be allowed after submission. <br /> </h4>
                                    <a class="btn btn-default btn-lg" id="btnYesSubmit">Yes</a> <a class="btn btn-default btn-lg" id="btnNoSubmit">No</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 exam-confirm" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12 text-center">
                                    <h4> Thank You, your responses will be submitted for final marking - click OK to complete final submission. <br /> </h4>
                                    <a class="btn btn-default btn-lg" id="btnYesSubmitConfirm">Ok</a> <a class="btn btn-default btn-lg" id="btnNoSubmitConfirm">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 exam-thankyou" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12 text-center">
                                    <h4> Thank you, Submitted Successfully.</h4>
                                    <a class="btn btn-default btn-lg" id="btnViewResult">View Result</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 exam-result" style="display:none;">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="col-md-12 text-center">
                                    <h3>
                                        Result
                                        <a id="btnRBack" class="btn btn-info pull-right">Back</a>
                                    </h3>
                                    <h5>Score: <strong id="lblRScore"></strong></h5>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td>Total Question</td>
                                                <th id="lblRTotalQuestion"></th>
                                                <td>Total Attempted</td>
                                                <th id="lblRTotalAttempted"></th>
                                            </tr>
                                            <tr>
                                                <td>Correct Answers</td>
                                                <th id="lblRTotalCorrect"></th>
                                                <td>Incorrect Answers</td>
                                                <th id="lblRTotalWrong"></th>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Question No.</th>
                                                <th>selected Option</th>
                                                <th>Status</th>
                                                <th>Currect Option</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbodyResult"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="exam_assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="exam_assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="exam_assets/js/Begin.js"></script>
    <script>
        $('.full_screen').click(function() {
            //alert('ff');
            $('#quest').removeClass('col-md-8');
            $('#quest').addClass('col-md-12');
            //pallette
            $('#pallette').addClass('hidden');
            $('.full_screen').addClass('hidden');
            $('.collapse_screen').removeClass('hidden');
        });

        $('.collapse_screen').click(function() {
            $('#quest').removeClass('col-md-12');
            $('#quest').addClass('col-md-8');
            //pallette
            $('#pallette').removeClass('hidden');
            $('.full_screen').removeClass('hidden');
            $('.collapse_screen').addClass('hidden');

        });
    </script>
</body>

</html>