<?php include "include/header.php";
if (isset($_GET["type"])) {

} else {
  echo "<script>window.location.href = 'index.php'</script>";
}
?>
<style>
  h1 {
    text-transform: uppercase;
  }

  .course li {
    padding:10px;
    width: 100%;
    list-style-type: none;
  }

  .course li:nth-child(even) {
    background-color: #c5c0db;
  }

  .course li:nth-child(odd) {
    background-color: #837aab;
  }
</style>

<main class="container">

  <?php if ($_GET["type"] === "COMPUTER_COURSES") { ?>
    <section class="course" id="computer-course">
      <h1>computer courses</h1>
      <li>DIPLOMA IN 3D MODEL AND ANIMATION (AUTODESK MAYA) 1 YEAR</li>
      <li>BUSY WIN ACCOUNTING SOFTWARE (2 MONTHS)</li>
      <li>C++ PROGRAMMING (2 MONTHS)</li>
      <li>CERTIFICATE IN HINDI TYPING (3 MONTHS)</li>
      <li>HINDI AND ENGLISH TYPING COURSE (3 MONTHS)</li>
      <li>BASIC COMPUTER ENGLISH AND HINDI TYPING (3 MONTHS)</li>
      <li>CERTIFICATE IN PYTHON (3 MONTHS)</li>
      <li>TALLY PRIME WITH GST (3 MONTHS)</li>
      <li>OFFICE MANAGEMENT COURSE (3 MONTHS)</li>
      <li>CERTIFICATE IN HARDWARE TECHNOLOGY (CHT) (3 MONTHS)</li>
      <li>CERTIFICATE IN COMPUTER APPLICATION (CCA) (3 MONTHS)</li>
      <li>CERTIFICATE IN ACCOUNTING (TALLY WITH GST) (3 MONTHS)</li>
      <li>CERTIFICATE IN FINANCIAL ACCOUNTING (CFA) (3 MONTHS)</li>
      <li>CERTIFICATE COURSE FOR KIDS (THE KIDS ZONE) (3 MONTHS)</li>
      <li>CERTIFICATE IN DESKTOP PUBLICATION (DTP) (3 MONTHS)</li>
      <li>CERTIFICATE IN ENGLISH TYPING (3 MONTHS)</li>
      <li>ENGLISH SPEAKING COURSE (3 MONTHS)</li>
      <li>BASIC COMPUTER APPLICATION (BCA) (3 MONTHS)</li>
      <li>CERTIFICATE OF COMPUTER COURSE (CCC)(3 MONTHS)</li>
      <li>BASIC COURSE IN COMPUTER (BCC) (3 MONTHS)</li>
      <li>CERTIFICATE IN ADVANCE EXCEL (3 MONTHS)</li>
      <li>CERTIFICATE IN DATA ENTRY OPERATOR (CDEO) (3 MONTHS)</li>
      <li>CISCO CERTIFIED NETWORK ASSOCIATE (CCNA) (3 MONTHS)</li>
      <li>PC HARDWARE AND NETWORKING (3 MONTHS)</li>
      <li>CERTIFICATE IN GRAPHIC DESIGNING (CGD) (3 MONTHS)</li>
      <li>CERTIFICATE IN GRAPHIC DESIGNING (CGD) (3 MONTHS)</li>
      <li>CERTIFICATE IN ENGLISH TYPING (6 MONTHS)</li>
      <li>TALLY PRIME WITH GST (6 MONTHS)</li>
      <li>CERTIFICATE OF TALLY WITH GST AND EXCEL (6 MONTHS)</li>
      <li>DIPLOMA IN GRAPHIC DESIGNING (DGD) (6 MONTHS)</li>
      <li>DIPLOMA IN COMPUTER APPLICATION AND ACCOUNTING (DCAA) 6 MONTHS</li>
      <li>DIPLOMA IN HARDWARE TECHNOLOGY (DHT) (6 MONTHS)</li>
      <li>BASIC + TALLY AND GST (6 MONTHS)</li>
      <li>CERTIFICATE IN INFORMATION TECHNOLOGY APPLICATION (CITA) (6 MONTHS)</li>
      <li>CERTIFICATE IN COMPUTER ACCOUNTING (CCA) ( 6 MONTHS)</li>
      <li>CERTIFICATE IN OFFICE AUTOMATION (COA) (6 MONTHS)</li>
      <li>DIPLOMA IN COMPUTER SCIENCE (DCS) ( 6 MONTHS)</li>
      <li>CERTIFICATE IN AUTOCAD (6 MONTHS)</li>
      <li>DIPLOMA IN COMPUTER FINANCIAL ACCOUNTING (DCFA) (6 MONTHS)</li>
      <li>DIPLOMA IN HARDWARE AND NETWORKING TECHNOLOGY (DHNT) (6 MONTHS)</li>
      <li>BASIC AND LANGUAGE COURSE (6 MONTHS)</li>
      <li>CERTIFICATE IN ACCOUNTING (TALLY WITH GST) (6 MONTHS)</li>
      <li>CERTIFICATE IN ADVANCE COMPUTER SOFTWARE (CACS) (6 MONTHS)</li>
      <li>BASIC & TYPING (6 MONTHS)</li>
      <li>CERTIFICATE IN DATA ENTRY OPERATOR (CDEO) (6 MONTHS)</li>
      <li>BASIC COMPUTER AND ADVANCE EXCEL (6 MONTHS)</li>
      <li>ENGLISH SPEAKING COURSE (6 MONTHS)</li>
      <li>DIPLOMA IN OFFICE AUTOMATION (DOA) (6 MONTHS)</li>
      <li>DIPLOMA IN FINANCIAL ACCOUNTING (DFA) (6 MONTHS)</li>
      <li>DIPLOMA IN BASIC PROGRAMMING (DBP) (6 MONTHS)</li>
      <li>DIPLOMA IN COMPUTER APPLICATION (DCA) (6 MONTHS)</li>
      <li>CERTIFICATE IN COMPUTER APPLICATION (CCA)(6 MONTHS)</li>
      <li>CERTIFICATE IN DESKTOP PUBLISHING (CDTP)(06 MONTHS)</li>
      <li>CERTIFICATE IN FINANCIAL ACCOUNTING (CFA) (6 MONTHS)</li>
      <li>ADVANCE DIPLOMA IN COMPUTER APPLICATION(ADCA) (1 YEAR)</li>
      <li>DIPLOMA IN COMPUTER APPLICATION AND FINANCIAL ACCOUNTING WITH GST (1 YEAR)</li>
      <li>SMART TALLY EXPERT (1 YEAR)</li>
      <li>ACCOUNT MANAGER (1 YEAR)</li>
      <li>DIPLOMA IN COMPUTER APPLICATION (DCA) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN WEB DESIGNING (ADWD) (1 YEAR)</li>
      <li>DIPLOMA IN INFORMATION TECHNOLOGY (DIT) (1 YEAR)</li>
      <li>MASTER DIPLOMA IN INFORMATION TECHNOLOGY (MD-IT) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN HARDWARE AND NETWORKING TECHNOLOGY (ADHNT) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN OFFICE AUTOMATION AND PUBLISHING (ADOAP) (1 YEAR)</li>
      <li>MANAGEMENT INFORMATION SYSTEM (MIS) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN MULTIMEDIA AND GRAPHICS DESIGNING (ADMG) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN OFFICE MANAGEMENT (ADOM) (1 YEAR)</li>
      <li>DIPLOMA IN OFFICE AUTOMATION AND PUBLISHING (DOAP) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN FINANCIAL ACCOUNTING (ADFA) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN COMPUTER PROGRAMMING (ADCP) (1 YEAR)</li>
      <li>.NET COURSE</li>
      <li>DIPLOMA IN COMPUTER SCIENCE (DCS) (1 YEAR)</li>
      <li>DIPLOMA IN COMPUTER FINANCIAL ACCOUNTING (DCFA) 1 YEAR</li>
      <li>DIPLOMA IN DESKTOP PUBLISHING (DDTP)(12MONTH)</li>
      <li>ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY (ADIT) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN GRAPHIC DESIGNING (ADGD) (1 YEAR)</li>
      <li>ADVANCE DIPLOMA IN DESKTOP PUBLISHING (ADDTP)(14 MONTHS)</li>
      <li>MASTER DIPLOMA IN COMPUTER APPLICATION (MDCA) (15 MONTHS)</li>
      <li>DIPLOMA IN OFFICE MANAGEMENT (DOM) (15 MONTHS)</li>
      <li>MASTER DIPLOMA IN IT AND SYSTEM MANAGEMENT (MDITSM) (16 MONTHS)</li>
      <li>ADVANCE DIPLOMA IN COMPUTER APPLICATION (ADCA) (18 MONTHS)</li>
      <li>ADVANCE DIPLOMA IN COMPUTER APPLICATION AND FINANCIAL ACCOUNTING WITH ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY
        AND SYSTEM MANAGEMENT (ADITSM) (18 MONTHS)</li>
      <li>GST (ADFA) (18 MONTHS)</li>
      <li>ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY AND SYSTEM MANAGEMENT (ADITSM) (18 MONTHS)</li>
      <li>ADVANCE DIPLOMA IN INFORMATION TECHNOLOGY (ADIT) (2 YEAR)</li>
      <li>MASTER DIPLOMA IN COMPUTER INFROMATION SYSTEM MANAGEMENT (MDCISM) (2 YEARS)</li>
    </section>
  <?php } ?>


  <?php if ($_GET["type"] === "TEACHER_TRAINING_COURSE") { ?>
    <section class="course" id="teacher-training-course">
      <h1>teacher training course</h1>
      <li>COMPUTER TEACHER TRAINING COURSE (CTTC) (1 YEAR)</li>
      <li>PRIMARY TEACHER TRAINING (PTT) (1 YEAR)</li>
      <li>NURSERY AND PRIMARY TEACHER TRAINING (NPTT) (1 YEAR)</li>
      <li>NURSERY TEACHER TRAINING (NTT) (1 YEAR)</li>
      <li>NURSERY TEACHER TRAINING (NTT) (2 YEARS)</li>
      <li>NURSERY AND PRIMARY TEACHER TRAINING (NPTT) (2 YEARS)</li>
      <li>PRIMARY TEACHER TRAINING (PTT) (2 YEARS)</li>
    </section>
  <?php } ?>

  <?php if ($_GET["type"] === "NIELIT_COURSES") { ?>
    <section class="course" id="nielit-course">
      <h1>NIELIT COURSES</h1>
    </section>
  <?php } ?>

  <?php if ($_GET["type"] === "BOUTIQUE_COURSES") { ?>
    <section class="course" id="botique-course">
      <h1>BOUTIQUE COURSES</h1>
      <li>DIPLOMA IN FASHION DESIGNING (DFD) (6 MONTHS)</li>
      <li>DIPLOMA IN CUTTING AND TAILORING (DCT) (6 MONTHS)</li>
      <li>DIPLOMA IN FASHION DESIGNING (DFD)</li>
      <li>ADVANCE DIPLOMA IN CUTTING AND TAILORING (ADCT) (1 YEAR)</li>
    </section>
  <?php } ?>

  <?php if ($_GET["type"] === "BEAUTICIAN_COURSES") { ?>
    <section class="course" id="beautician-course">
      <h1>BEAUTICIAN COURSES</h1>
      <li>DIPLOMA IN BEAUTICIAN (DIB) (6 MONTHS)</li>
      <li>ADVANCE DIPLOMA IN BEAUTICIAN (ADB) (1 YEAR)</li>
    </section>
  <?php } ?>

  <?php if ($_GET["type"] === "UG_PG_COURSE") { ?>
    <section class="course" id="ug-pg-course">
      <h1>UG PG COURSE</h1>
    </section>
  <?php } ?>

  <?php if ($_GET["type"] === "YOGA_COURSES") { ?>
    <section class="course" id="yoga-course">
      <h1>YOGA COURSES</h1>
      <li>DIPLOMA IN YOGA EDUCATION (1 YEAR)</li>
      <li>DIPLOMA IN YOGA TEACHER TRAINING (DYTT) (1 YEAR)</li>
      <li>PG DIPLOMA IN YOGA (1 YEAR)</li>
      <li>PG DIPLOMA IN YOGA (2 YEARS)</li>
    </section>
  <?php } ?>

  <?php if ($_GET["type"] === "NDLM_COURSES") { ?>
    <section class="course" id="ndlm-course">
      <h1>NDLM COURSES</h1>
    </section>
  <?php } ?>

  <?php if ($_GET["type"] === "ADVANCE_COURSES") { ?>
    <section class="course" id="advance-course">
      <h1>ADVANCE COURSES</h1>
      <li>DIPLOMA IN SHORTHAND (1 YEAR)</li>
      <li>CERTIFICATE IN ELECTRICIAN (2 YEARS)</li>
      <li>CERTIFICATE OF SHORTHAND (3 MONTHS)</li>
      <li>CERTIFICATE IN DIGITAL MARKETING (DDM) (3 MONTHS)</li>
      <li>DIPLOMA IN MOBILE MAINTENANCE (DMM) (6 MONTHS)</li>
      <li>CERTIFICATE IN PLUMBER COURSE (CPC) (6 MONTHS)</li>
      <li>CERTIFICATE OF CARPET DESIGNING (CCD) (6 MONTHS)</li>
      <li>DIPLOMA OF LIBRARIAN COURSE (1 YEAR)</li>
      <li>DIPLOMA IN HOTEL MANAGEMENT (DHM) (1 YEAR)</li>
      <li>DIPLOMA IN MOBILE HARDWARE AND SOFTWARE (1 YEAR)</li>
      <li>DIPLOMA IN FIRE AND SAFETY MANAGEMENT (DIFSM) (1 YEAR)</li>
      <li>DIPLOMA IN REFRIGERATION AND AIR CONDITIONER COURSE (DRACC) (1 YEAR)</li>
      <li>POST GRADUATE DIPLOMA IN COMPUTER APPLICATION (PGDCA) (1 YEAR)</li>
      <li>CERTIFICATE IN ELECTRICIAN (1 YEAR)</li>
      <li>DIPLOMA IN SOFTWARE DEVELOPMENT (DSD) (1 YEAR)</li>
      <li>CCTV INSTALLATION AND MAINTENANCE COURSE (1 YEAR)</li>
    </section>
  <?php } ?>

</main>

<?php include "include/footer.php"; ?>