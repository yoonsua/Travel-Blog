<?php include("config.php"); ?>
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
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .main>a {
            position: fixed;
            top: 5px;
            right: 5px;
        }

        h1 {
            padding-top: 10px;
            text-align: center;
        }

        form {
            padding-left: 50px;
            padding-right: 50px;
        }

        .wrap {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 20px;
        }
        .button {
            width: 140px;
            height: 45px;
            font-family: 'Roboto', sans-serif;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 2.5px;
            font-weight: 500;
            color: #000;
            background-color: #fff;
            border: none;
            border-radius: 45px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease 0s;
            cursor: pointer;
            outline: none;
        }
        .button:hover {
            background-color: rgb(87, 174, 255);
            box-shadow: 0px 15px 20px rgb(88, 155, 255);
            color: #fff;
            transform: translateY(-7px);
        }
        h5 {
            padding-top: 6px;
        }
    </style>
</head>

<body>
        <?php include("menu.php") ?>
        <div class="main">
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">=</a>
            <h1>Travel</h1>
            <hr>
            <form action="shareok.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">여행지</label>
                    <input type="text" name="title" id="title" required class="form-control" placeholder="travel place">
                    <input type="hidden" name="writer" id="writer" required class="form-control" value="<?php echo $loginname; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="contents">내용</label>
                    <textarea name="contents" id="contents" rows="10" required class="form-control" placeholder="contents"></textarea>
                </div>
                <div class="form-group">
                    <label for="upfile">사진</label>
                    <input type="file" name="upfile" id="upfile" class="form-control" accept="image/*" placeholder="photo">
                </div>
            </div>
            <div class="wrap">
                <button class="button" type="submit"><h5>완료</h5></button>
            </div>
        </form>

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