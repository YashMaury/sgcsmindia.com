<?php 
include "constant.php";
$url = $URL . "question/read_question_by_exam_id.php";
$exam_id = base64_decode($_GET['id']);
$data = array("exam_id"=>$exam_id);
//print_r($data);
$postdata = json_encode($data);
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
//print_r($response);
$result = json_decode($response);
//print_r($result);

$student_url = $URL . "student/read_student_by_id.php";
$student_id = base64_decode($_GET['student']);
$data = array("id" => $student_id);
// print_r($data);
$student_postdata = json_encode($data);
$client = curl_init($student_url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($client, CURLOPT_POSTFIELDS, $student_postdata);
$response_student = curl_exec($client);
// print_r($response_student);
$result_student = json_decode($response_student);
// print_r($result_student);
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
        <!-- <header class="main-header">
            <div class="navbar" data-spy="affix" data-offset-top="200">
                <div class="navbar navbar-default yamm" role="navigation" id="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="navbar-brand home">
                                <img src="assets/images/logo1.png" alt="GICT logo" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-md-6 pull-right">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="user-profile">
                                        <table>
                                            <tr>
                                                <td style="padding: 5px 15px; border: 2px solid #666"><i class="fa fa-user fa-4x"></i></td>
                                                <td>
                                                    <table>

                                                        <?php 
                                                        foreach ($result_student as $key => $value) {
                                                        foreach ($value as $key1 => $value1) {
                                                        ?>

                                                        <tr>
                                                            <td style="padding: 0px 5px;">Candidate Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold"><?php echo $value1->student_name ;?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 0px 5px;">Subject Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold"><?php echo $value1->course ;?></span></td>
                                                        </tr>

                                                        <?php } } ?>

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header> 
        <div class="clear"></div> -->
        <div>
            <div id="heading-breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <a class="navbar-brand home">
                                <img src="web image/logo 1.png" alt="GICT logo" class="img-responsive">
                            </a>
                        </div>
                        <div class="clear-xs "></div>
                        <div class="col-md-6 col-sm-12 pull-right">
                            <table class="stream">

                                <tr>
                                    <!-- <td style="padding: 5px 15px; border: 2px solid #666">
                                        <i class="fa fa-user fa-4x"></i>
                                    </td> -->
                                </tr>
                                <tr class="full-width">
                                                            
                                    <?php 
                                    foreach ($result_student as $key => $value) {
                                    foreach ($value as $key1 => $value1) {
                                    ?>
                                    <td class="full-width">
                                        <tr>
                                            <td style="color: #ffffff; font-weight: bold">Candidate Name</td>
                                            <td> : <span style="color: #f7931e; font-weight: bold"><?php echo $value1->student_name ;?></span></td>
                                        </tr>
                                    </td>
                                    <td class="full-width">
                                        <tr>
                                            <td style="color: #ffffff; font-weight: bold">Subject Name</td>
                                            <td> : <span style="color: #f7931e; font-weight: bold"><?php echo $course = $value1->course ;?></span></td>
                                        </tr>
                                    </td>
                                    <td class="full-width">
                                        <tr>
                                            <td style="color: #ffffff; font-weight: bold">Remaining Time</td>
                                            <td>
                                                : <span class="timer-title time-started">00:00:00</span>
                                            </td>
                                        </tr>
                                    </td>
                                    <?php }}?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" id="hdfTestDuration" value="60" />
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

                                                    <div 
                                                    <?php 
                                                    if ($counter == 0) {
                                                        echo '';
                                                    } else {
                                                        echo 'style="display:none;"';
                                                    }
                                                    ?>
                                                     class="tab-content div-question mb0" id="page<?php echo ++$counter ;?>">
                                                        <input type="hidden" value="1" class="hdfQuestionID">
                                                        <input type="hidden" value="1" class="hdfPaperSetID">
                                                        <input type="hidden" value="<?php echo $value1->correct_option ;?>" class="hdfCurrectAns">
                                                        <div class="question-height">
                                                            <h4 class="question-title"> 
                                                                Question <?php echo ++$que_counter ;?>: 
                                                            </h4>
                                                            <p class="question-name"><?php echo $value1->question_name ;?></p>
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
                                    <li 
                                        <?php 
                                        if ($page_counter == 0) {
                                            echo 'class="active"';
                                        } else {
                                            echo "";
                                        }
                                        ?>
                                         data-seq="1">
                                        <a class="test-ques que-not-<?php 
                                        if ($page_counter == 0) {
                                            echo "answered";
                                        } else {
                                            echo "attempted";
                                        }
                                        ?>" href="javascript:void(0);" data-href="page<?php echo ++$page_counter; ?>">
                                            <?php echo $page_counter; ?>
                                        </a>
                                    </li>
                                    <!-- <li data-seq="1"><a class="test-ques que-not-attempted" href="javascript:void(0);" data-href="page<?php //echo ++$page_counter ?>"><?php //echo $page_counter ?></a></li> -->
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
                                            <th>Exam Name</th>
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
                                            <td class=""><?php echo $course ; ?></td>
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
                                                <th>Selected Option</th>
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