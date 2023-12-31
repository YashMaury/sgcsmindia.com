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
                                            <option value="Account Manager (1 Year)">Account Manager (1 Year)</option>
                                            <option value="Certificate In Accounting (Tally with GST) (3 Months)">Certificate In Accounting (Tally with GST) (3 Months)
                                            </option>
                                            <option value="Diploma In Computer Application (DCA) (1 Year)">Diploma In Computer Application (DCA) (1 Year)</option>
                                            <option value="Diploma In Hardware Technology (DHT) (6 Months)">Diploma In Hardware Technology (DHT) (6 Months)</option>
                                            <option value="Advance Diploma In Web Designing (ADWD) (1 Year)">Advance Diploma In Web Designing (ADWD) (1 Year)
                                            </option>
                                            <option value="Diploma in Computer Programming And Application (DCPA) (1year)">Diploma in Computer Programming And Application (DCPA)
                                                (1year)</option>
                                            <option value="Diploma In Information Technology (DIT) (1 Year)">Diploma In Information Technology (DIT) (1 Year)
                                            </option>
                                            <option value="Diploma In Mobile Hardware And Software (1 Year)">Diploma In Mobile Hardware And Software (1 Year)
                                            </option>
                                            <option value="C-LANGUAGE ( 2 Months)">C-LANGUAGE ( 2 Months)</option>
                                            <option value="Diploma In Fire And Safety Management (DIFSM) (1 Year)">Diploma In Fire And Safety Management (DIFSM) (1 Year)
                                            </option>
                                            <option value="Diploma in Tally (1 year)">Diploma in Tally (1 year)</option>
                                            <option value="Basic + Tally And GST (6 Months)">Basic + Tally And GST (6 Months)</option>
                                            <option value="Basic Computer Fundamental And Typing Course (6 Months)">Basic Computer Fundamental And Typing Course (6 Months)
                                            </option>
                                            <option value="Certificate In Financial Accounting (CFA) (3 Months)">Certificate In Financial Accounting (CFA) (3 Months)
                                            </option>
                                            <option value="Professional Diploma in Software Technology (PDST)(1Year)">Professional Diploma in Software Technology (PDST) 
                                                (1Year)</option>
                                            <option value="Master Diploma In Information Technology (MD-IT) (1Year)">Master Diploma In Information Technology (MD-IT) (1Year)
                                                </option>
                                            <option value="Certificate In Information Technology Application (CITA) (6 Months)">Certificate In Information Technology Application (CITA) (6 Months)
                                               </option>
                                            <option value="Certificate In Computer Accounting (CCA) ( 6 Months)">Certificate In Computer Accounting (CCA) ( 6 Months)
                                            </option>
                                            <option value="Advance Diploma In Hardware And Networking Technology(ADHNT) (1 Year)">Advance Diploma In Hardware And Networking Technology(ADHNT) (1 Year)
                                                </option>
                                            <option value="Master Diploma In Computer Application (MDCA) (15 Months)">Master Diploma In Computer Application (MDCA) (15 Months)
                                               </option>
                                            <option value="Diploma In Refrigeration And Air Conditioner Course(DRACC) (1 Year)">Diploma In Refrigeration And Air Conditioner Course(DRACC) (1 Year)
                                                </option>
                                            <option value="Advance Diploma In Office Automation And Publishing (ADOAP) (1 Year)">Advance Diploma In Office Automation And Publishing (ADOAP) (1 Year)
                                                </option>
                                            <option value="Management Information System (MIS) (1 Year)">Management Information System (MIS) (1 Year)</option>
                                            <option value="Certificate In Office Automation (COA) (6 Months)">Certificate In Office Automation (COA) (6 Months)
                                            </option>
                                            <option value="Advance Diploma In Multimedia And Graphics Designing (ADMG) (1 Year)">Advance Diploma In Multimedia And Graphics Designing (ADMG) (1 Year)
                                                </option>
                                            <option value="Certificate Course For Kids (The Kids Zone) (3 Months)">Certificate Course For Kids (The Kids Zone) (3 Months)
                                            </option>
                                            <option value="Diploma In Yoga Education (1 Year)">Diploma In Yoga Education (1 Year)</option>
                                            <option value="Diploma In Yoga Teacher Training (DYTT) (1 Year)">Diploma In Yoga Teacher Training (DYTT) (1 Year)
                                            </option>
                                            <option value="PG Diploma In Yoga (1 Year)">PG Diploma In Yoga (1 Year)</option>
                                            <option value="Diploma In Computer Science (DCS) ( 6 Months)">Diploma In Computer Science (DCS) ( 6 Months)</option>
                                            <option value="Diploma In Beautician (DIB) (6 Months)">Diploma In Beautician (DIB) (6 Months)</option>
                                            <option value="Certificate in Desktop Publication (DTP) (3 Months)">Certificate in Desktop Publication (DTP) (3 Months)
                                            </option>
                                            <option value="Post Graduate Diploma In Computer Application (PGDCA) (1Year)">Post Graduate Diploma In Computer Application (PGDCA) (1Year)
                                                </option>
                                            <option value="Advance Diploma In Computer Application (ADCA) (18 Months)">Advance Diploma In Computer Application (ADCA) (18 Months)
                                               </option>
                                            <option value="PG Diploma In Yoga (2 Years)">PG Diploma In Yoga (2 Years)</option>
                                            <option value="Certificate In AUTOCAD (6 Months)">Certificate In AUTOCAD (6 Months)</option>
                                            <option value="Certificate in English Typing (3 Months)">Certificate in English Typing (3 Months)</option>
                                            <option value="Advance Diploma In Office Management (ADOM) (1 Year)">Advance Diploma In Office Management (ADOM) (1 Year)
                                            </option>
                                            <option value="English Speaking Course (3 Months)">English Speaking Course (3 Months)</option>
                                            <option value="Diploma In Computer Financial Accounting (DCFA) (6Months)">Diploma In Computer Financial Accounting (DCFA) (6Months)
                                                </option>
                                            <option value="Diploma In Hardware And Networking Technology (DHNT) (6Months)">Diploma In Hardware And Networking Technology (DHNT) (6Months)
                                                </option>
                                            <option value="Basic And Language Course (6 Months)">Basic And Language Course (6 Months)</option>
                                            <option value="Certificate Of Shorthand (3 Months)">Certificate Of Shorthand (3 Months)</option>
                                            <option value="Computer Teacher Training Course (CTTC) (1 Year)">Computer Teacher Training Course (CTTC) (1 Year)
                                            </option>
                                            <option value="Nursery Teacher Training (NTT) (2 Years)">Nursery Teacher Training (NTT) (2 Years)</option>
                                            <option value="Nursery And Primary Teacher Training (NPTT) (2 Years)">Nursery And Primary Teacher Training (NPTT) (2 Years)
                                            </option>
                                            <option value="Certificate In Accounting (Tally With GST) (6 Months)">Certificate In Accounting (Tally With GST) (6 Months)
                                            </option>
                                            <option value="JAVA (2 Months)">JAVA (2 Months)</option>
                                            <option value="Diploma in Fashion Designing (DFD) (6 Months)">Diploma in Fashion Designing (DFD) (6 Months)</option>
                                            <option value="Diploma in Cutting and Tailoring (DCT) (6 Months)">Diploma in Cutting and Tailoring (DCT) (6 Months)
                                            </option>
                                            <option value="Advance Diploma in Cutting and Tailoring (ADCT) (1 Year)">Advance Diploma in Cutting and Tailoring (ADCT) (1 Year)
                                            </option>
                                            <option value="Certificate In Advance Computer Software (CACS) (6Months)">Certificate In Advance Computer Software (CACS) (6Months)
                                                </option>
                                            <option value="Diploma In Office Automation And Publishing (DOAP) (1Year)">Diploma In Office Automation And Publishing (DOAP) (1Year)
                                                </option>
                                            <option value="Advance Diploma in Computer Application and Financial Accounting with GST (ADFA)  (18 Months)">Advance Diploma in Computer Application and Financial Accounting with GST (ADFA)  (18 Months)
                                               
                                              </option>
                                            <option value="Master Diploma in IT And System Management (MDITSM) (16 Months)">Master Diploma in IT And System Management (MDITSM) (16 Months)
                                               </option>
                                            <option value="Certificate in Electrician (1 Year)">Certificate in Electrician (1 Year)</option>
                                            <option value="Certificate In Digital Marketing (DDM) (3 Months)">Certificate In Digital Marketing (DDM) (3 Months)
                                            </option>
                                            <option value="Busy Win Accounting Software (2 Months)">Busy Win Accounting Software (2 Months)</option>
                                            <option value="Certificate In Data Entry Operator (CDEO) (6 Months)">Certificate In Data Entry Operator (CDEO) (6 Months)
                                            </option>
                                            <option value="Diploma in Software Development (DSD) (1 Year)">Diploma in Software Development (DSD) (1 Year)</option>
                                            <option value="C++ Programming (2 Months)">C++ Programming (2 Months)</option>
                                            <option value="Diploma in Office Management (DOM) (15 Months)">Diploma in Office Management (DOM) (15 Months)</option>
                                            <option value="Basic Computer And Advance Excel (6 Months)">Basic Computer And Advance Excel (6 Months)</option>
                                            <option value="Certificate of Carpet Designing (CCD) (6 Months)">Certificate of Carpet Designing (CCD) (6 Months)
                                            </option>
                                            <option value="Advance Diploma In Financial Accounting (ADFA) (1 Year)">Advance Diploma In Financial Accounting (ADFA) (1 Year)
                                            </option>
                                            <option value="Advance Diploma in Desktop Publishing (ADDTP)(14 MONTHS)">Advance Diploma in Desktop Publishing (ADDTP)(14 MONTHS)
                                            </option>
                                            <option value="Basic Computer Application (BCA) (3 Months)">Basic Computer Application (BCA) (3 Months)</option>
                                            <option value="English Speaking Course (6 Months)">English Speaking Course (6 Months)</option>
                                            <option value="Advance diploma in information technology And system management (ADITSM) (18 Months)">Advance diploma in information technology And system management (ADITSM) (18 Months)
                                                
                                               </option>
                                            <option value="CCTV Installation And Maintenance Course (1 Year)">CCTV Installation And Maintenance Course (1 Year)
                                            </option>
                                            <option value="Diploma in Office Automation (DOA) (6 Months)">Diploma in Office Automation (DOA) (6 Months)</option>
                                            <option value="Advance Diploma In Computer Programming (ADCP) (1 year)">Advance Diploma In Computer Programming (ADCP) (1 year)
                                            </option>
                                            <option value="Advance Diploma in Information Technology (ADIT) (2Year)">Advance Diploma in Information Technology (ADIT) (2Year)
                                                </option>
                                            <option value="Advance Diploma in Information Technology (ADIT) (2Year)">Advance Diploma in Information Technology (ADIT) (2Year)
                                            </option>
                                            <option value="Primary Teacher Training (PTT) (2 Years)">Primary Teacher Training (PTT) (2 Years)</option>
                                            <option value="Primary Teacher Training (PTT) (1 Year)">Primary Teacher Training (PTT) (1 Year)</option>
                                            <option value="Nursery And Primary Teacher Training (NPTT) (1 Year)">Nursery And Primary Teacher Training (NPTT) (1 Year)
                                            </option>
                                            <option value="Nursery Teacher Training (NTT) (1 Year)">Nursery Teacher Training (NTT) (1 Year)</option>
                                            <option value="CERTIFICATE OF COMPUTER COURSE (CCC)(3 Months)">CERTIFICATE OF COMPUTER COURSE (CCC)(3 Months)</option>
                                            <option value="Basic Course In Computer (BCC) (3 Months)">Basic Course In Computer (BCC) (3 Months)</option>
                                            <option value="Advance Diploma In Beautician (ADB) (1 Year)">Advance Diploma In Beautician (ADB) (1 Year)</option>
                                            <option value="DIPLOMA IN COMPUTER APPLICATION (DCA) (6 Months)">DIPLOMA IN COMPUTER APPLICATION (DCA) (6 Months)
                                            </option>
                                            <option value="CERTIFICATE IN ADVANCE EXCEL (3 MONTHS)">CERTIFICATE IN ADVANCE EXCEL (3 MONTHS)</option>
                                            <option value="Certificate In Data Entry Operator (CDEO) (3 Months)">Certificate In Data Entry Operator (CDEO) (3 Months)
                                            </option>
                                            <option value="DIPLOMA IN 3D MODEL And ANIMATION (AUTODESK MAYA) 1 Year">DIPLOMA IN 3D MODEL And ANIMATION (AUTODESK MAYA) 1 Year
                                            </option>
                                            <option value=".NET COURSE">.NET COURSE</option>
                                            <option value="Cisco Certified Network Associate (CCNA) (3 Months)">Cisco Certified Network Associate (CCNA) (3 Months)
                                            </option>
                                            <option value="DIPLOMA IN COMPUTER SCIENCE (DCS) (1 Year)">DIPLOMA IN COMPUTER SCIENCE (DCS) (1 Year)</option>
                                            <option value="PC HARDWARE And NETWORKING (3 Months)">PC HARDWARE And NETWORKING (3 Months)</option>
                                            <option value="Diploma in Fashion Designing (DFD)">Diploma in Fashion Designing (DFD)</option>
                                            <option value="CERTIFICATE IN COMPUTER APPLICATION (CCA)(6 MONTHS)">CERTIFICATE IN COMPUTER APPLICATION (CCA)(6 MONTHS)
                                            </option>
                                            <option value="Diploma in Computer Financial Accounting (DCFA) 1 YEAR">Diploma in Computer Financial Accounting (DCFA) 1 YEAR
                                            </option>
                                            <option value="Diploma in Desktop Publishing (DDTP)(12Month)">Diploma in Desktop Publishing (DDTP)(12Month)</option>
                                            <option value="Certificate in Desktop Publishing (CDTP)(06 Months)">Certificate in Desktop Publishing (CDTP)(06 Months)
                                            </option>
                                            <option value="Advance Diploma in Information Technology (ADIT) (1 Year)">Advance Diploma in Information Technology (ADIT) (1 Year)
                                                </option>
                                            <option value="Certificate in Financial Accounting (CFA) (6 Months)">Certificate in Financial Accounting (CFA) (6 Months)
                                            </option>
                                            <option value="Certificate in Graphic Designing (CGD) (3 Months)">Certificate in Graphic Designing (CGD) (3 Months)
                                            </option>
                                            <option value="Advance Diploma in Graphic Designing (ADGD) (1 Year)">Advance Diploma in Graphic Designing (ADGD) (1 Year)
                                            </option>
                                            <option value="Master Diploma in Computer Infromation System Management  (MDCISM) (2 Years)">Master Diploma in Computer Infromation System Management  (MDCISM) (2 Years)
                                               
                                            </option>
                                            <option value="Hindi And English Typing Course (6 Months)">Hindi And English Typing Course (6 Months)</option>
                                            <option value="Diploma in Shorthand (1 Year)">Diploma in Shorthand (1 Year)</option>
                                            <option value="Certificate in Hindi Typing (3 Months)">Certificate in Hindi Typing (3 Months)</option>
                                            <option value="Certificate in English Typing (6 Months)">Certificate in English Typing (6 Months)</option>
                                            <option value="Hindi And English Typing Course (3 Months)">Hindi And English Typing Course (3 Months)</option>
                                            <option value="Certificate in Electrician (2 Years)">Certificate in Electrician (2 Years)</option>
                                            <option value="Basic Computer English And Hindi Typing (3 Months)">Basic Computer English And Hindi Typing (3 Months)
                                            </option>
                                            <option value="Certificate in Python (3 Months)">Certificate in Python (3 Months)</option>
                                            <option value="Hardware Diploma in Computer Application ( HDCA) 1 Year">Hardware Diploma in Computer Application ( HDCA) 1 Year
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