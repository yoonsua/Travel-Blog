<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Travel</title>
    <link rel="shortcut icon" href="https://img10.androidappsapk.co/300/d/1/6/com.siriware.flightrealschedule.png">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <style>
        /* main */

        .main a {
            position: fixed;
            top: 5px;
            right: 5px;
        }

        h1 {
            text-align: center;
            padding-top: 100px;
        }
    </style>
</head>

<body>
<?php include("menu.php") ?>
        <div class="main">
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">=</a>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="login-box well">
                            <form accept-charset="UTF-8" role="form" method="post" action="loginaction.php">
                                <legend>
                                    <h1>Login</h1>
                                </legend>
                                <div class="form-group">
                                    <label for="username">아이디</label>
                                    <input name="userid" value='' id="username" placeholder="Username" type="text" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label for="password">비밀번호</label>
                                    <input name="password" id="password" value='' placeholder="Password" type="password" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-login-submit btn-block m-t-md" value="Login" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- Bootstrap JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>