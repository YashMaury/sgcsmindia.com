<?php 
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
                                    <?php
                                    foreach ($result as $key => $value) {
                                    foreach ($value as $key1 => $value1) {
                                    ?>
                                    <li class="active" data-seq="1"><a class="test-ques que-not-answered" href="javascript:void(0);" data-href="page<?php echo ++$page_counter ?>"><?php echo $page_counter ?></a></li>
                                    <!-- <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page<?php //echo ++$page_counter ?>">02</a></li> -->
                                    <?php } } ?>
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