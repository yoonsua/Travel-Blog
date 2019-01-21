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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
        crossorigin="anonymous">
    <style>
        .main {
            height: 700px;
        }

        .main a {
            position: fixed;
            top: 5px;
            right: 5px;
        }

        .container {
            padding-top: 250px;
        }

        #custom-search-input {
            padding: 3px;
            border: solid 1px #E4E4E4;
            border-radius: 6px;
            background-color: #fff;
        }

        #custom-search-input input {
            border: 0;
            box-shadow: none;
        }

        #custom-search-input button {
            margin: 2px 0 0 0;
            background: none;
            box-shadow: none;
            border: 0;
            color: #666666;
            padding: 0 8px 0 10px;
            border-left: solid 1px #ccc;
        }

        #custom-search-input button:hover {
            border: 0;
            box-shadow: none;
            border-left: solid 1px #ccc;
        }

        #custom-search-input .glyphicon-search {
            font-size: 23px;
        }

        h1 {
            text-align: center;
            font-size: 100px;
            color: rgb(3, 117, 223);
        }
        .i {
            width: 36px;
            height: 36px;
        }
    </style>
</head>

<body>
<?php include("menu.php") ?>
    <div class="main">
        <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">=</a>
        <div class="container">
            <h1>Travel</h1>
            <form action="browse.php" method="get">
                <div class="col-md-12 input-group">
                    <input name="keywords" type="text" class="form-control input-lg" placeholder="Search" autocomplete="off">
                    <button class="btn btn-info btn-lg" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
<?php print("$output"); ?>


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