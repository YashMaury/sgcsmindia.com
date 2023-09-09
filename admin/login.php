<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        padding: 10px;
        text-align: center;
    }

    input {
        width: 400px;
        height: 40px;
        border: 1px solid grey;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
    }

    .mb-3 {
        margin-bottom: 3px;
    }

    button {
        margin-top: 10px;
        padding: 10px;
        border-radius: 5px;
        color: #fff;
        background-color: green;
        width: 100%;
        border: none;
    }
</style>

<body>

    <div class="container">
        <form action="action/adm_login_post.php" method="post" accept-charset="utf-8">
            <div class="container content">
                <div class="sec-title mb-3 text-center">
                    <h2 class="mb-0">Admin Login</h2>
                    <?php echo $_SESSION["ADMIN_NAME"]; ?>
                </div>
                <div class="mb-4" align="justify">
                    <p>
                        <strong>Email :</strong> <br />
                        <input type="email" name="admin_email" value="" class="form-control" placeholder="Email" />
                    </p>
                    <p>
                        <strong>Password :</strong> <br />
                        <input type="password" name="admin_password" value="" class="form-control"
                            placeholder="Password" />
                    </p>
                    <p>
                        <b>
                            Forget Password ? Click <a href="#">here</a>
                        </b>
                    </p>
                    <p>
                        <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                    </p>
                </div>
            </div>
        </form>
    </div>


</body>

</html>