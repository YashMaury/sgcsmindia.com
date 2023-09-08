<?php include "include/header.php"; ?>


<div class="achivements" style="background: url(assets/images/slide/breadcrumb.jpg);padding: 50px;">
    <div class="sec-title mb-3 text-center">
        <h2 class="mb-0" style="color:#fff;">STUDENT LOGIN</h2>
        <p style="color:#fff;">Home / Student Login</p>
    </div>
    <div class="container">
        <div class="row">

        </div>
    </div>
</div>

<form action="admin/action/student_login_post.php" method="post" accept-charset="utf-8">
    <div class="container content">
        <div class="sec-title mb-3 text-center">
            <h2 class="mb-0">STUDENT LOGIN
            </h2>
        </div>
        <?php echo $_SESSION["STUDENT_NAME"]; ?>
        <div class="mb-4" align="justify">
            <p>
                <strong>Student Email :</strong> <br />
                <input type="email" name="student_email" value="" class="form-control" placeholder="Student Email" />
            </p>
            <p>
                <strong>Password :</strong> <br />
                <input type="password" name="student_password" value="" class="form-control" placeholder="Password" />
            </p>
            <p>
                If not registered, click <a href="student_registration.php">here</a> to register.
            </p>
            <p>
                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
            </p>
        </div>
    </div>
</form>

<?php include "include/footer.php"; ?>