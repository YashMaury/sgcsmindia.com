<?php include "include/header.php"; ?>


<div class="achivements" style="background: url(assets/images/slide/breadcrumb.jpg);padding: 50px;">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0" style="color:#fff;text-transform:uppercase;">STUDENT details</h2>
        <p style="color:#fff;text-transform:uppercase;">Home / Student details</p>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
</div>

<form action="" method="post" accept-charset="utf-8">
    <div class="container content">
        <div class="sec-title mb-3 text-center">
            <h2 class="mb-0" style="text-transform:uppercase;">STUDENT details</h2>
        </div>
        <div class="mb-4" align="justify">
            <p>
                <strong>Registration No :</strong> <br />
                <input type="text" name="registration_no" value="" class="form-control" />
            </p>
            <p>
                <strong>Center Code :</strong> <br />
                <input type="text" name="center_code" value="" class="form-control" />
            </p>
            <p>
                <button class="btn btn-primary">Get Details</button>
            </p>
        </div>
        <!-- <table class="table">
            <tr>
                <td scope="row" class="alert alert-danger">No result found.</td>
            </tr>
        </table> -->
    </div>
</form>


<?php include "include/footer.php"; ?>