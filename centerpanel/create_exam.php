<?php include "include/header.php"; ?>

<!-- main -->
<main class="main-content-wrapper">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row mb-8">
            <div class="col-md-12">
                <div class="d-md-flex justify-content-between align-items-center">
                    <!-- page header -->
                    <div>
                        <h2>Create Exam</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php" class="text-inherit">Dashboard</a></li>
                                <li class="breadcrumb-item active">Create Exam</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-12">
                <!-- card -->
                <div class="card mb-6 shadow border-0">
                    <div class="card-body p-6 ">
                        <form action="action/create_exam_post.php" method="post">
                            <div class="container content">
                                <div class="mb-4" align="justify">

                                    <!-- <p>
                                        <strong>Student Registration Id :</strong> <br />
                                        <input type="text" name="student_registration_id" value="" class="form-control" />
                                    </p> -->
                                    <p>
                                        <strong>Exam Name :</strong> <br />
                                        <input type="text" name="exam_name" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <strong>Exam Course :</strong> <br />
                                        <select name="exam_course" class=form-control required>
                                            <option value="Basic &amp; Typing (6 Months)">
                                                Basic &amp; Typing (6 Months)
                                            </option>
                                            <option value="Diploma In Basic Programming (DBP) (6 Months)">
                                                Diploma In Basic Programming (DBP) (6 Months)
                                            </option>
                                            <option value="Tally Prime With GST (3 Months)">
                                                Tally Prime With GST (3 Months)
                                            </option>
                                            <option value="Diploma In Mobile Maintenance (DMM) (6 Months)">
                                                Diploma In Mobile Maintenance (DMM) (6 Months)
                                            </option>
                                            <option value="Advance Diploma In Computer Application(ADCA) (1 Year)">
                                                Advance Diploma In Computer Application(ADCA) (1 Year)
                                            </option>
                                            <option value="Tally Prime With GST (6 Months)">
                                                Tally Prime With GST (6
                                                Months)</option>
                                            <option value="Office Management Course (3 Months)">
                                                Office Management Course
                                                (3 Months)</option>
                                            <option value="Certificate of Tally With GST And Excel (6 Months)">
                                                Certificate of Tally With GST And
                                                Excel (6 Months)</option>
                                            <option
                                                value="Diploma In Computer Application And Financial Accounting With GST (1 Year)">
                                                Diploma
                                                In Computer Application And Financial Accounting With GST (1 Year)
                                            </option>
                                            <option value="Smart Tally Expert (1 Year)">Smart Tally Expert (1 Year)
                                            </option>
                                            <option value="Diploma Of Librarian Course (1 Year)">Diploma Of Librarian
                                                Course (1 Year)</option>
                                            <option value="Diploma in Graphic Designing (DGD) (6 Months)">Diploma in
                                                Graphic Designing (DGD) (6
                                                Months)</option>
                                            <option value="Diploma in Hotel Management (DHM) (1 Year)">Diploma in Hotel
                                                Management (DHM) (1
                                                Year)</option>
                                            <option value="Certificate In Plumber Course (CPC) (6 Months)">Certificate
                                                In Plumber Course (CPC)
                                                (6 Months)</option>
                                            <option
                                                value="Diploma In Computer Application And Accounting (DCAA) 6 Months">
                                                Diploma In Computer
                                                Application And Accounting (DCAA) 6 Months</option>
                                            <option value="Certificate In Hardware Technology (CHT) (3 Months)">
                                                Certificate In Hardware
                                                Technology (CHT) (3 Months)</option>
                                            <option value="Certificate In Computer Application (CCA) (3 Months)">
                                                Certificate In Computer
                                                Application (CCA) (3 Months)</option>
                                            <option value="625">Account Manager (1 Year)</option>
                                            <option value="629">Certificate In Accounting (Tally with GST) (3 Months)
                                            </option>
                                            <option value="631">Diploma In Computer Application (DCA) (1 Year)</option>
                                            <option value="632">Diploma In Hardware Technology (DHT) (6 Months)</option>
                                            <option value="633">Advance Diploma In Web Designing (ADWD) (1 Year)
                                            </option>
                                            <option value="634">Diploma in Computer Programming And Application (DCPA)
                                                (1year)</option>
                                            <option value="635">Diploma In Information Technology (DIT) (1 Year)
                                            </option>
                                            <option value="637">Diploma In Mobile Hardware And Software (1 Year)
                                            </option>
                                            <option value="638">C-LANGUAGE ( 2 Months)</option>
                                            <option value="639">Diploma In Fire And Safety Management (DIFSM) (1 Year)
                                            </option>
                                            <option value="640">Diploma in Tally (1 year)</option>
                                            <option value="650">Basic + Tally And GST (6 Months)</option>
                                            <option value="652">Basic Computer Fundamental And Typing Course (6 Months)
                                            </option>
                                            <option value="654">Certificate In Financial Accounting (CFA) (3 Months)
                                            </option>
                                            <option value="655">Professional Diploma in Software Technology (PDST) (1
                                                Year)</option>
                                            <option value="656">Master Diploma In Information Technology (MD-IT) (1
                                                Year)</option>
                                            <option value="657">Certificate In Information Technology Application (CITA)
                                                (6 Months)</option>
                                            <option value="658">Certificate In Computer Accounting (CCA) ( 6 Months)
                                            </option>
                                            <option value="659">Advance Diploma In Hardware And Networking Technology
                                                (ADHNT) (1 Year)</option>
                                            <option value="661">Master Diploma In Computer Application (MDCA) (15
                                                Months)</option>
                                            <option value="662">Diploma In Refrigeration And Air Conditioner Course
                                                (DRACC) (1 Year)</option>
                                            <option value="663">Advance Diploma In Office Automation And Publishing
                                                (ADOAP) (1 Year)</option>
                                            <option value="665">Management Information System (MIS) (1 Year)</option>
                                            <option value="666">Certificate In Office Automation (COA) (6 Months)
                                            </option>
                                            <option value="667">Advance Diploma In Multimedia And Graphics Designing
                                                (ADMG) (1 Year)</option>
                                            <option value="668">Certificate Course For Kids (The Kids Zone) (3 Months)
                                            </option>
                                            <option value="669">Diploma In Yoga Education (1 Year)</option>
                                            <option value="670">Diploma In Yoga Teacher Training (DYTT) (1 Year)
                                            </option>
                                            <option value="671">PG Diploma In Yoga (1 Year)</option>
                                            <option value="673">Diploma In Computer Science (DCS) ( 6 Months)</option>
                                            <option value="674">Diploma In Beautician (DIB) (6 Months)</option>
                                            <option value="675">Certificate in Desktop Publication (DTP) (3 Months)
                                            </option>
                                            <option value="676">Post Graduate Diploma In Computer Application (PGDCA) (1
                                                Year)</option>
                                            <option value="677">Advance Diploma In Computer Application (ADCA) (18
                                                Months)</option>
                                            <option value="678">PG Diploma In Yoga (2 Years)</option>
                                            <option value="679">Certificate In AUTOCAD (6 Months)</option>
                                            <option value="680">Certificate in English Typing (3 Months)</option>
                                            <option value="681">Advance Diploma In Office Management (ADOM) (1 Year)
                                            </option>
                                            <option value="682">English Speaking Course (3 Months)</option>
                                            <option value="683">Diploma In Computer Financial Accounting (DCFA) (6
                                                Months)</option>
                                            <option value="684">Diploma In Hardware And Networking Technology (DHNT) (6
                                                Months)</option>
                                            <option value="685">Basic And Language Course (6 Months)</option>
                                            <option value="686">Certificate Of Shorthand (3 Months)</option>
                                            <option value="687">Computer Teacher Training Course (CTTC) (1 Year)
                                            </option>
                                            <option value="688">Nursery Teacher Training (NTT) (2 Years)</option>
                                            <option value="689">Nursery And Primary Teacher Training (NPTT) (2 Years)
                                            </option>
                                            <option value="690">Certificate In Accounting (Tally With GST) (6 Months)
                                            </option>
                                            <option value="691">JAVA (2 Months)</option>
                                            <option value="692">Diploma in Fashion Designing (DFD) (6 Months)</option>
                                            <option value="693">Diploma in Cutting and Tailoring (DCT) (6 Months)
                                            </option>
                                            <option value="694">Advance Diploma in Cutting and Tailoring (ADCT) (1 Year)
                                            </option>
                                            <option value="695">Certificate In Advance Computer Software (CACS) (6
                                                Months)</option>
                                            <option value="696">Diploma In Office Automation And Publishing (DOAP) (1
                                                Year)</option>
                                            <option value="697">Advance Diploma in Computer Application and Financial
                                                Accounting with GST (ADFA)
                                                (18 Months)</option>
                                            <option value="698">Master Diploma in IT And System Management (MDITSM) (16
                                                Months)</option>
                                            <option value="699">Certificate in Electrician (1 Year)</option>
                                            <option value="700">Certificate In Digital Marketing (DDM) (3 Months)
                                            </option>
                                            <option value="701">Busy Win Accounting Software (2 Months)</option>
                                            <option value="702">Certificate In Data Entry Operator (CDEO) (6 Months)
                                            </option>
                                            <option value="703">Diploma in Software Development (DSD) (1 Year)</option>
                                            <option value="704">C++ Programming (2 Months)</option>
                                            <option value="706">Diploma in Office Management (DOM) (15 Months)</option>
                                            <option value="707">Basic Computer And Advance Excel (6 Months)</option>
                                            <option value="708">Certificate of Carpet Designing (CCD) (6 Months)
                                            </option>
                                            <option value="709">Advance Diploma In Financial Accounting (ADFA) (1 Year)
                                            </option>
                                            <option value="711">Advance Diploma in Desktop Publishing (ADDTP)(14 MONTHS)
                                            </option>
                                            <option value="714">Basic Computer Application (BCA) (3 Months)</option>
                                            <option value="715">English Speaking Course (6 Months)</option>
                                            <option value="716">Advance diploma in information technology And system
                                                management (ADITSM) (18
                                                Months)</option>
                                            <option value="717">CCTV Installation And Maintenance Course (1 Year)
                                            </option>
                                            <option value="718">Diploma in Office Automation (DOA) (6 Months)</option>
                                            <option value="719">Advance Diploma In Computer Programming (ADCP) (1 year)
                                            </option>
                                            <option value="733">Advance Diploma in Information Technology (ADIT) (2
                                                Year)</option>
                                            <option value="735">Diploma In Financial Accounting (DFA) (6 Months)
                                            </option>
                                            <option value="738">Primary Teacher Training (PTT) (2 Years)</option>
                                            <option value="739">Primary Teacher Training (PTT) (1 Year)</option>
                                            <option value="740">Nursery And Primary Teacher Training (NPTT) (1 Year)
                                            </option>
                                            <option value="741">Nursery Teacher Training (NTT) (1 Year)</option>
                                            <option value="742">CERTIFICATE OF COMPUTER COURSE (CCC)(3 Months)</option>
                                            <option value="743">Basic Course In Computer (BCC) (3 Months)</option>
                                            <option value="744">Advance Diploma In Beautician (ADB) (1 Year)</option>
                                            <option value="745">DIPLOMA IN COMPUTER APPLICATION (DCA) (6 Months)
                                            </option>
                                            <option value="746">CERTIFICATE IN ADVANCE EXCEL (3 MONTHS)</option>
                                            <option value="751">Certificate In Data Entry Operator (CDEO) (3 Months)
                                            </option>
                                            <option value="752">DIPLOMA IN 3D MODEL And ANIMATION (AUTODESK MAYA) 1 Year
                                            </option>
                                            <option value="753">.NET COURSE</option>
                                            <option value="754">Cisco Certified Network Associate (CCNA) (3 Months)
                                            </option>
                                            <option value="755">DIPLOMA IN COMPUTER SCIENCE (DCS) (1 Year)</option>
                                            <option value="756">PC HARDWARE And NETWORKING (3 Months)</option>
                                            <option value="757">Diploma in Fashion Designing (DFD)</option>
                                            <option value="758">CERTIFICATE IN COMPUTER APPLICATION (CCA)(6 MONTHS)
                                            </option>
                                            <option value="759">Diploma in Computer Financial Accounting (DCFA) 1 YEAR
                                            </option>
                                            <option value="760">Diploma in Desktop Publishing (DDTP)(12Month)</option>
                                            <option value="761">Certificate in Desktop Publishing (CDTP)(06 Months)
                                            </option>
                                            <option value="762">Advance Diploma in Information Technology (ADIT) (1
                                                Year)</option>
                                            <option value="763">Certificate in Financial Accounting (CFA) (6 Months)
                                            </option>
                                            <option value="764">Certificate in Graphic Designing (CGD) (3 Months)
                                            </option>
                                            <option value="765">Advance Diploma in Graphic Designing (ADGD) (1 Year))
                                            </option>
                                            <option value="766">Master Diploma in Computer Infromation System Management
                                                (MDCISM) (2 Years)
                                            </option>
                                            <option value="767">Hindi And English Typing Course (6 Months)</option>
                                            <option value="768">Diploma in Shorthand (1 Year)</option>
                                            <option value="769">Certificate in Hindi Typing (3 Months)</option>
                                            <option value="770">Certificate in English Typing (6 Months)</option>
                                            <option value="771">Hindi And English Typing Course (3 Months)</option>
                                            <option value="772">Certificate in Electrician (2 Years)</option>
                                            <option value="773">Basic Computer English And Hindi Typing (3 Months)
                                            </option>
                                            <option value="774">Certificate in Python (3 Months)</option>
                                            <option value="775">Hardware Diploma in Computer Application ( HDCA) 1 Year
                                            </option>
                                        </select>

                                    </p>
                                    <p>
                                        <strong>No Of Questions :</strong> <br />
                                        <input type="text" name="no_question" value="" class="form-control" required />
                                    </p>
                                    <p>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </p>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</main>

</div>

<script src="assets/libs/quill/dist/quill.min.js"></script>
<script src="assets/js/vendors/editor.js"></script>
<script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>
<script src="assets/libs/flatpickr/dist/flatpickr.min.js"></script>

<?php include "include/footer.php"; ?>