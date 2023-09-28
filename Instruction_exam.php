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
                        <div class="col-md-5 pull-right">
                            <div class="navbar-collapse">
                                <ul class="nav navbar-nav pull-right exam-paper ">
                                    <li class="user-profile">
                                        <table>
                                            <tr>
                                                <td style="padding: 5px 15px; border: 2px solid #666"><i class="fa fa-user fa-4x"></i></td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td style="padding: 5px 5px;">Candidate Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold"><?php //echo $_SESSION["STUDENT_NAME"] ;?></span></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="padding: 5px 5px;">Subject Name</td>
                                                            <td> : <span style="color: #f7931e; font-weight: bold"><?php echo base64_decode($_GET['type']) ;?></span></td>
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
                                        <option value="hi">Hindi</option>
                                        <!-- <option value="gj">Gujarati</option> -->
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
                                                <li>
                                                    <ul>
                                                        <li>Total duration of JEE Main Paper- 1 &amp; JEE Main Paper- 2 is 180 min.</li>
                                                        <li>JEE Paper- 2 is for Mathematics, Aptitude Test & Drawing. The Drawing test is required to be done on separate drawing sheet, which is not part of the current mock test.</li>
                                                    </ul>
                                                </li>
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
                                                <li>You can click on <img src="exam_assets/img/QuizIcons/down.png" /> to navigate to the bottom and <img src="exam_assets/img/QuizIcons/up.png" /> to navigate to top of the question are, without scrolling.</li>
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

                                        <div class="col-md-12" id="hi" style="display: none">
                                            <h4 class="text-center">कृपया निम्नलिखित निर्देशों को ध्यान से पढ़ें</h4>
                                            <h4><strong><u>सामान्य अनुदेश:</u></strong></h4>
                                            <ol>
                                                <li>
                                                    <ul>
                                                        <li>सभी प्रश्नों को हल करने की कुल अवधि JEE Main Paper-1 &amp; Paper-2 के लिए 180 मिनट है।</li>
                                                        <li>JEE Paper-2 गणित, योग्यता परीक्षण और ड्राइंग के लिए है। ड्राइंग टेस्ट अलग ड्राइंग शीट पर किया जाना है, जो वर्तमान मॉक टेस्ट का हिस्सा नहीं है।</li>
                                                    </ul>
                                                </li>
                                                <li>सर्वर पर घड़ी लगाई गई है तथा आपकी स्क्रीन के दाहिने कोने में शीर्ष पर काउंटडाउन टाइमर में आपके लिए परीक्षा समाप्त करने के लिए शेष समय प्रदर्शित होगा। परीक्षा समय समाप्त होने पर, आपको अपनी परीक्षा बंद या
                                                    जमा करने की जरूरत नहीं है । यह स्वतः बंद या जमा हो जाएगी।</li>
                                                <li>
                                                    स्क्रीन के दाहिने कोने पर प्रश्न पैलेट, प्रत्येक प्रश्न के लिए निम्न में से कोई एक स्थिति प्रकट करता है:
                                                    <ol>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo1.png" /> आप अभी तक प्रश्न पर नहीं गए हैं।<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo2.png" /> आपने प्रश्न का उत्तर नहीं दिया है।<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo3.png" /> आप प्रश्न का उत्तर दे चुके हैं।<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo4.png" /> आपने प्रश्न का उत्तर नहीं दिया है पर प्रश्न को पुनर्विचार के लिए चिन्हित किया है।<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo5.png" /> प्रश्न जिसका उत्तर दिया गया है और समीक्षा के लिए भी चिन्हित है , उसका मूल्यांकन किया जायेगा ।<br/><br/></li>
                                                    </ol>
                                                    कृप्या ध्यान दे प्रश्न "समीक्षा के लिए चिह्नित" की जांच नहीं की जाएगी, इसलिए अंक आवंटित नहीं किए जाएंगे।<br /><br />
                                                </li>
                                                <li>आप प्रश्न पैलेट को छुपाने के लिए "&gt;" चिन्ह पर क्लिक कर सकते है, जो प्रश्न पैलेट के बाईं ओर दिखाई देता है, जिससे प्रश्न विंडो सामने आ जाएगा. प्रश्न पैलेट को फिर से देखने के लिए, "&lt;" चिन्ह पर क्लिक कीजिए
                                                    जो प्रश्न विंडो के दाईं ओर दिखाई देता है।</li>
                                                <li>सम्पूर्ण प्रश्नपत्र की भाषा को परिवर्तित करने के लिए आपको अपने स्क्रीन के ऊपरी दाहिने सिरे पर स्थित प्रोफाइल इमेज पर क्लिक करना होगा। प्रोफाइल इमेज को क्लिक करने पर आपको प्रश्न के अंतर्वस्तु को इच्छित भाषा
                                                    में परिवर्तित करने के लिए ड्राप-डाउन मिलेगा ।</li>
                                                <li>आपको अपने स्क्रीन के निचले हिस्से को स्क्रॉलिंग के बिना नेविगेट करने के लिए <img src="exam_assets/img/QuizIcons/down.png" /> और ऊपरी हिस्से को नेविगेट करने के लिए <img src="exam_assets/img/QuizIcons/up.png" /> पर क्लिक करना होगा
                                                    ।
                                                </li>
                                            </ol>
                                            <h4><strong><u>किसी प्रश्न पर जाना :</u></strong></h4>
                                            <ol start="7">
                                                <li>
                                                    उत्तर देने हेतु कोई प्रश्न चुनने के लिए, आप निम्न में से कोई एक कार्य कर सकते हैं:
                                                    <ol type="a">
                                                        <li>स्क्रीन के दाईं ओर प्रश्न पैलेट में प्रश्न पर सीधे जाने के लिए प्रश्न संख्या पर क्लिक करें। ध्यान दें कि इस विकल्प का प्रयोग करने से मौजूदा प्रश्न के लिए आपका उत्तर सुरक्षित नहीं होता है।</li>
                                                        <li>वर्तमान प्रश्न का उत्तर सुरक्षित करने के लिए और क्रम में अगले प्रश्न पर जाने के लिए <strong>Save & Next</strong> पर क्लिक करें।</li>
                                                        <li>वर्तमान प्रश्न का उत्तर सुरक्षित करने के लिए, पुनर्विचार के लिए चिह्नित करने और क्रम में अगले प्रश्न पर जाने के लिए <strong>Mark for Review & Next</strong> पर क्लिक करें।</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                            <h4><strong><u>प्रश्नों का उत्तर देना :</u></strong></h4>
                                            <ol start="8">
                                                <li>
                                                    बहुविकल्पीय प्रकार के प्रश्न के लिए
                                                    <ol type="a">
                                                        <li>अपना उत्तर चुनने के लिए, विकल्प के बटनों में से किसी एक पर क्लिक करें।</li>
                                                        <li>चयनित उत्तर को अचयनित करने के लिए, चयनित विकल्प पर दुबारा क्लिक करें या <strong>Clear Response</strong> बटन पर क्लिक करें।</li>
                                                        <li>अपना उत्तर बदलने के लिए, अन्य वांछित विकल्प बटन पर क्लिक करें।</li>
                                                        <li>अपना उत्तर सुरक्षित करने के लिए, आपको <strong>Save & Next</strong> पर क्लिक करना जरूरी है। </li>
                                                        <li>किसी प्रश्न को पुनर्विचार के लिए चिह्नित करने हेतु <strong>Mark for Review & Next</strong> बटन पर क्लिक करें।</li>
                                                    </ol>
                                                </li>
                                                <li>किसी प्रश्न का उत्तर बदलने के लिए, पहले प्रश्न का चयन करें, फिर नए उत्तर के विकल्प पर क्लिक करने के बाद <strong>Save & Next</strong> बटन पर क्लिक करें।</li>
                                            </ol>
                                            <h4><strong><u>अनुभागों द्वारा प्रश्न पर जाना:</u></strong></h4>
                                            <ol start="10">
                                                <li>इस प्रश्नपत्र में स्क्रीन के शीर्ष बार पर अनुभाग (Sections) प्रदर्शित हैं। किसी अनुभाग के प्रश्न, उस अनुभाग के नाम पर क्लिक करके देखे जा सकते हैं। आप वर्तमान में जिस अनुभाग का उत्तर दे रहे हैं, वह अनुभाग
                                                    हाईलाइट होगा।</li>
                                                <li>किसी अनुभाग के लिए अंतिम प्रश्न के <strong>Save & Next</strong> बटन पर क्लिक करने के बाद, आप स्वचालित रूप से अगले अनुभाग के प्रथम प्रश्न पर पहुंच जाएंगे।</li>
                                                <li>आप परीक्षा में निर्धारित समय के दौरान किसी भी समय प्रश्नावलियों और प्रश्नों के बीच अपनी सुविधा के अनुसार आ-जा (शफल कर) सकते हैं।</li>
                                                <li>परीक्षार्थी संबंधित सेक्शन की समीक्षा को लीजेन्ड के भाग के रूप में देख सकते हैं ।</li>
                                            </ol>

                                            <hr>

                                            <span class="text-danger">कृपया ध्यान दें कि सभी प्रश्न आपकी चयनित डिफ़ॉल्ट भाषा में दिखाई देंगे। इस भाषा को बाद में किसी विशेष प्रश्न के लिए बदला जा सकता है ।</span>
                                            <hr>
                                            <label>
                                                    <input type="checkbox" id="hi_ch">&nbsp;&nbsp;मैंने उपरोक्त सभी निर्देशों को पढ़ और समझ लिया है। मेरे लिए आवंटित सभी कंप्यूटर हार्डवेयर उचित काम करने की स्थिति में हैं। मैं घोषणा करता हूं कि मैं किसी भी प्रकार के निषिद्ध गैजेट जैसे मोबाइल फोन, ब्लूटूथ डिवाइस इत्यादि / परीक्षा हॉल में मेरे साथ किसी भी प्रकार की निषिद्ध सामग्री नहीं  हैं । मैं सहमत हूं कि निर्देशों का पालन न करने के मामले में, मैं इस टेस्ट और अनुशासनात्मक कार्रवाई के लिए उत्तरदायी होऊँगा, जिसमें भविष्य मे होने वाले टेस्ट / परीक्षाओं से प्रतिबंध भी शामिल हो सकता है ।</label>
                                            <hr>
                                            <div class="col-md-4 col-md-offset-4 text-center">
                                                <a onClick="check_instruction('hi')" class="btn btn-primary btn-block">Proceed</a>
                                            </div>
                                        </div>

                                        <div class="col-md-12" id="gj" style="display: none">
                                            <h4 class="text-center">કૃપા કરીને સૂચનાઓને કાળજીપૂર્વક વાંચો</h4>
                                            <h4><strong><u>સામાન્ય સૂચનાઓ:</u></strong></h4>
                                            <ol>
                                                <li>
                                                    <ul>
                                                        <li>JEE Main Paper - 1 &amp; JEE Main Paper - 2 નની કુલ સમયગાળો 180 મિનિટ છે.</li>
                                                        <li>JEE Main Paper - 2 ગણિતશાસ્ત્ર, એપ્પ્ટીએટ ટેસ્ટ અને ડ્રોઇંગ માટે છે, આખરી પરીક્ષામાં ડ્રોઈંગ ટેસ્ટ કરવામાં આવશે.</li>
                                                    </ul>
                                                </li>
                                                <li>ઘડિયાળ સર્વર પર સેટ કરવામાં આવશે. સ્ક્રીનની ઉપર જમણા ખૂણે કાઉન્ટડાઉન ટાઈમર પરીક્ષા પૂર્ણ કરવા તમારા માટે ઉપલબ્ધ બાકી સમય પ્રદર્શિત કરશે. જ્યારે ટાઈમર શૂન્ય સુધી પહોંચે છે, પરીક્ષા પોતે જ અંત લાવશે. તમારે
                                                    તમારી પરીક્ષા સમાપ્ત કરવી અથવા સબમિટ કરવાની જરૂર નથી.</li>
                                                <li>

                                                    નીચેનાં પ્રતીકોમાંથી કોઇ એક પ્રતીકનો ઉપયોગ કરીને સ્ક્રીનની જમણી બાજુએ દર્શાવવામાં આવેલા પ્રશ્નોની પેલેટ દરેક પ્રશ્નની સ્થિતિ દર્શાવશે:

                                                    <ol>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo1.png" /> તમે હજી સુધી પ્રશ્નની મુલાકાત લીધી નથી.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo2.png" /> તમે પ્રશ્નનો જવાબ આપ્યો નથી.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo3.png" /> તમે પ્રશ્નનો જવાબ આપ્યો છે.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo4.png" /> તમે પ્રશ્નનો જવાબ આપ્યો નથી, પરંતુ સમીક્ષા માટે પ્રશ્ન ચિહ્નિત કર્યો છે.<br/><br/></li>
                                                        <li><img src="exam_assets/img/QuizIcons/Logo5.png" /> મૂલ્યાંકન માટે પ્રશ્ન (ઓ) "જવાબ આપ્યો અને ચિહ્નિત થયેલ છે" માટે મૂલ્યાંકન કરવામાં આવશે.<br/><br/></li>

                                                        પ્રશ્ન પર સમીક્ષાની સ્થિતિ માટે ચિહ્નિત થયેલું ફક્ત એ સૂચવે છે કે તમે ફરીથી તે પ્રશ્નને જોવા માંગો છો.<br /><br />
                                                    </ol>
                                                </li>
                                                <li>પ્રશ્ન પૅલેટને વિસ્તૃત જોવા માટે પ્રશ્ન પૅલેટની ડાબી બાજુએ જે "&gt;" તીર દેખાય છે તેના પર ક્લિક કરી શકો છો, જેનાથી પ્રશ્ન વિન્ડો વિસ્તૃત થાય છે. પ્રશ્ન પેલેટને ફરી જોવા માટે, તમે "&lt;" પર ક્લિક કરી શકો
                                                    છો જે પ્રશ્ન વિંડોની જમણી બાજુ પર દેખાય છે.</li>
                                                <li>સમગ્ર પરીક્ષા દરમિયાન ભાષા બદલવા માટે તમે તમારી સ્ક્રીનની ઉપર જમણા ખૂણે તમારી "પ્રોફાઇલ" Image પર ક્લિક કરી શકો છો. પ્રોફાઇલ Image ને ક્લિક કરવા પર તમને પ્રશ્ન સામગ્રીને ઇચ્છિત ભાષામાં બદલવા માટે ડ્રોપ-ડાઉન
                                                    મળશે.
                                                </li>
                                                <li>તમે <img src="exam_assets/img/QuizIcons/down.png" /> ઉપર ક્લિક કરી શકો છો જે પ્રશ્નની નીચે લઈ જાય છે અને <img src="exam_assets/img/QuizIcons/up.png" /> જે સ્ક્રોલિંગ વગર, પ્રશ્નની ટોચ પર લઈ જાય છે.</li>
                                            </ol>
                                            <h4><strong><u>પ્રશ્ન પર જવુ:</u></strong></h4>
                                            <ol start="7">
                                                <li>
                                                    કોઈ પ્રશ્નનો જવાબ આપવા માટે, નીચે પ્રમાણે કરો:
                                                    <ol type="a">
                                                        <li>ક્રમાંકિત પ્રશ્ન પર સીધા જ જવા માટે, તમારી સ્ક્રીનની જમણી બાજુએ આપેલ પેલેટના પ્રશ્ન નંબર પર પર ક્લિક કરો. નોંધ કરો કે આ વિકલ્પનો ઉપયોગ તમારા વર્તમાન પ્રશ્નનો જવાબ સાચવતો નથી.</li>
                                                        <li>વર્તમાન પ્રશ્નનો જવાબ સાચવવા માટે <strong>Save & Next</strong> ઉપર ક્લિક કરો અને પછી આગળના પ્રશ્ન પર જાઓ.</li>
                                                        <li>વર્તમાન પ્રશ્નનો તમારો જવાબ બચાવવા માટે <strong>Mark for Review & Next</strong> ઉપર ક્લિક કરો, તેની સમીક્ષા માટે ચિહ્નિત કરો, અને પછી આગલા પ્રશ્ન પર જાઓ.</li>
                                                    </ol>
                                                </li>
                                            </ol>
                                            <h4><strong><u>પ્રશ્નનો જવાબ આપવો:</u></strong></h4>
                                            <ol start="8">
                                                <li>
                                                    વૈકલ્પિક પ્રશ્નના જવાબની કાર્યવાહી:
                                                    <ol type="a">
                                                        <li>તમરો જવાબ આપવા માટે, વિકલ્પો પૈકી કોઇ એક બટન પર ક્લિક કરો.</li>
                                                        <li>તમારા પસંદ કરેલા જવાબને નાપસંદ કરવા માટે, પસંદ કરેલ વિકલ્પના બટન પર ફરીથી ક્લિક કરો અથવા <strong>Clear Response</strong> બટન પર ક્લિક કરો.</li>
                                                        <li>તમારા પસંદ કરેલા જવાબને બદલવા માટે, બીજા વિકલ્પના બટન પર ક્લિક કરો.</li>
                                                        <li>તમારો જવાબ બચાવવા માટે, તમારે <strong> Save & Next </strong> બટન પર ક્લિક કરવું પડશે.</li>
                                                        <li>સમીક્ષા કરવા માટે પ્રશ્નને ચિંહિત કરવ, <strong> Mark for Review & Next </strong>>બટન પર ક્લિક કરો.</li>
                                                    </ol>
                                                </li>
                                                <li>તમારા અગાઉથી આપવામાં આવેલા પ્રશ્નનોના જવાબ બદલવા માટે, સૌપ્રથમ જેતે પ્રશ્ન પસંદ કરો અને પછી તે પ્રકારના પ્રશ્નનો જવાબ આપવા માટેની પ્રક્રિયાને અનુસરો.</li>
                                            </ol>
                                            <h4><strong><u>વિભાગો દ્વારા આગળ જવુ:</u></strong></h4>
                                            <ol start="10">
                                                <li>આ પ્રશ્નપત્રોમાં વિભાગો સ્ક્રીનની ટોચની પટ્ટી પર દર્શાવવામાં આવે છે. એક વિભાગમાં પ્રશ્નો વિભાગ નામ પર ક્લિક કરીને જોઈ શકાય છે. તમે હાલમાં જોઈ રહ્યાં છો તે વિભાગ હાઇલાઇટ થયેલ છે.</li>
                                                <li>એક વિભાગ માટે છેલ્લા પ્રશ્ન પર બટન <strong> Save & Next </strong> પર ક્લિક કરો પછી , તમને આપોઆપ આગામી વિભાગના પ્રથમ પ્રશ્ન પર લઈ જવામાં આવશે.</li>
                                                <li>પરીક્ષા દરમ્યાન નક્કી કરેલ સમય દરમ્યાન તમારી સગવડ પ્રમાણે વિભાગો અને પ્રશ્નો વચ્ચે કોઈ ફેરબદલ કરી શકો છો.</li>
                                                <li>પ્રશ્ન પૅલેટની ઉપરના પ્રત્યેક વિભાગમાં દેખાતી નોંધના ભાગ રૂપે ઉમેદવાર અનુરૂપ વિભાગનો સારાંશ જોઈ શકે છે</li>
                                            </ol>

                                            <hr>

                                            <span class="text-danger">કૃપા કરીને નોંધો કે બધા પ્રશ્નો તમારી ડિફોલ્ટ ભાષામાં દેખાશે. આ ભાષાને પછીથી કોઈ ચોક્કસ પ્રશ્ન માટે બદલી શકાય છે.</span>
                                            <hr>
                                            <label>
                                                    <input type="checkbox" id="gj_ch">&nbsp;&nbsp;મેં સૂચનાઓ વાંચી છે અને સમજી છે. મને ફાળવેલ તમામ કમ્પ્યુટર હાર્ડવેર યોગ્ય કામ કરવાની સ્થિતિમાં છે હું જાહેર કરું છું કે હું મારી સાથે પરીક્ષા હોલમાં મોબાઇલ ફોન, બ્લુટુથ ડિવાઇસ વગેરે જેવા કોઈ પ્રતિબંધિત સાધન/ સમગ્રી ચાલુ નથી રાખી, પહેરી નથી,  લાવ્યો નથી. હું સંમત છું કે સૂચનાઓનું પાલન ન કરવાના કિસ્સામાં,  હું આ ટેસ્ટ અને / અથવા શિસ્તભંગની કાર્યવાહીમાંથી બાકાત થઈ શકું છું, જેમાં ભવિષ્યની ટેસ્ટ / પરીક્ષાઓ પર પ્રતિબંધ શામેલ હોઈ શકે છે.</label>
                                            <hr>
                                            <div class="col-md-4 col-md-offset-4 text-center">
                                                <a onClick="check_instruction('gj')" class="btn btn-primary btn-block">Proceed</a>
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
                window.location.href = pageName+"?id="+code;

            }
        }
    </script>

</body>

</html>