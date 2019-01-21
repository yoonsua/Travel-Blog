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
    <style>
        /* main */

        .main {
            width: 100%;
            height: 758px;
            background-image: url(image/main.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.8;
        }

        h1 {
            color: white;
            text-align: center;
            font-size: 150px;
            padding-top: 200px;
        }

        .main>a {
            position: fixed;
            top: 5px;
            right: 5px;
        }

        .main a {
            text-decoration: none;
        }

        /* button */

        button {
            background: rgb(52, 174, 255);
            color: #fff;
            border: none;
            position: relative;
            height: 60px;
            font-size: 1.6em;
            padding: 0 2em;
            cursor: pointer;
            transition: 800ms ease all;
            outline: none;
            display: table;
            margin-left: auto;
            margin-right: auto;
        }

        button:hover {
            background: #fff;
            color: rgb(52, 174, 255);
        }

        button:before,
        button:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 2px;
            width: 0;
            background: rgb(52, 174, 255);
            transition: 400ms ease all;
        }

        button:after {
            right: inherit;
            top: inherit;
            left: 0;
            bottom: 0;
        }

        button:hover:before,
        button:hover:after {
            width: 100%;
            transition: 800ms ease all;
        }

        /* book */

        .book {
            width: 100%;
            height: 758px;
            background-color: #fff;
        }

        .portfolio-item {
            padding-top: 20px;
        }

        .far {
            float: right;
        }

        .pagination {
            padding-top: 15px;
        }
        .card-right {
            float: right;
        }
    </style>
</head>

<body>  
        <?php include("menu.php") ?>
        <div class="main">
            <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">=</a>
            <h1>Travel</h1>
            <button>
                <a href="share.php">Share</a>
            </button>
        </div>
        <div id="book" class="book">
            <div class="row">
                <?php
                    $sql = "SELECT id, title, contents, writer, file FROM posts WHERE file<>'' ORDER BY wdate DESC";
                    if($rs = $db->query($sql) ) {
                    if($data = $rs->fetchAll() ) {
                    foreach($data as $row) {
                        $src = "/image/" . $row['file'];
                        $title = mb_substr($row['title'], 0, 20);
                        $contents = mb_substr($row['contents'], 0, 20);
                        $writer = $row['writer'];
                        $id = $row['id'];
                ?>
                <div class="col-lg-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                        <a href="view.php?id=<?php echo $id;?>">
                            <img class="card-img-top" src="<?php echo $src;?>" alt="왜 안뜸 ?">
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="view.php?id=<?php echo $id;?>"><?php echo $title;?></a>
                                <i class="far fa-heart"></i>
                            </h4>
                            <p class="card-text"><?php echo $contents;?></p>
                            <p class="card-text card-right"><?php echo $writer;?></p>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }
                }
                ?>
            </div>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
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
        
        // 좋아요 클릭되었을 때
        $(document).on('click','.like_button', function(){
        var content_id = $(this).data('content_id');
        $(this).attr('disabled','disabled');

        $.ajax({
        url:"like.php",
        method:"POST",
        data:{content_id:content_id},
        success:function(data){
        if(data == 'done') {
            load_stuff();
        }
    }
});
});

    </script>
    <script src="js/index.js"></script>
</body>

</html>