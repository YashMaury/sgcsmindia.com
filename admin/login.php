<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>

<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        background-color: rgb(199, 222, 230);
    }

    .login {
        border-top: 4px solid blue;
        border-radius: 4px;
        box-sizing: border-box;
        box-shadow: 8px 8px 8px rgba(255, 160, 255, 0.2);
        background-color: white;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        width: 400px;

    }

    .login h1 {
        margin: 20px;
    }

    .login h1 b {
        font-weight: bolder;
    }

    .login p {
        margin: 20px;
    }

    .inp input {
        width: 300px;
        height: 40px;
        border-radius: 5px;
        border: 1px solid #999;
        margin: 10px 0px;
        padding-left: 10px;
    }

    .lg {
        display: flex;
        justify-content: space-between;
        padding: 20px 40px;
    }

    .lg a {
        text-decoration: none;
        padding-left: -50px;
        padding: 20px;
    }

    #Sign {
        padding: 20px;
        background-color: rgb(0, 79, 250);
        border: none;
        border-radius: 4px;
        color: white;
    }
</style>

<body>

    <div class="container">
        <form action="action/adm_login_post.php" method="post" accept-charset="utf-8">
            <h1 align="center">Admin Login</h1>
            <div class="inp">
                <strong>Email :</strong> <br />
                <input type="email" name="admin_email" value="" class="form-control" placeholder="Email" />
                <br />
                <strong>Password :</strong> <br />
                <input type="password" name="admin_password" value="" class="form-control" placeholder="Password" />
            </div>
            <div class="lg">
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