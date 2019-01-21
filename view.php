<?php 
include ("config.php");
$id = 0;
$title = "";
$contents = "";
$writer = "";
$wdate = "";
$hit = 0;
$love = 0;
$file = "";

if( isset($_GET['id']) ) {
    $id = (int)$_GET['id'];
}
if( $id ) {
    $db->query("UPDATE posts SET hit=hit+1 WHERE id={$id}");
    $sql = "SELECT * FROM posts WHERE id={$id}";
    $rs = $db->query($sql);
    if( $rs->rowCount() ) {
     $data = $rs->fetch();
     $title = $data['title'];
     $writer = $data['writer'];
     $contents = $data['contents'];
     $wdate = $data['wdate'];
     $hit = $data['hit'];
     $file = $data['file'];
    }
   }
?>
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
        .all {
            width: 960px;
            height: 1000px;
            margin: 0 auto;
        }
        .main {
            width: 100%;
            height: 80px;
            background-color: rgb(3, 117, 223);
        }
        .main>a {
            position: fixed;
            top: 5px;
            right: 5px;
        }
        .main a {
            text-decoration: none;
        }
        .main > h1 {
            color: white;
            text-align: center;
            line-height: 80px;
        }
        .User {
            width: 100%;
            height: 60px;
        }
        .User > h2 {
            color: rgb(3, 117, 223);
            float: left;
            line-height: 60px;
            padding-left: 20px;
            padding-right: 50px;
        }
        .User > p {
            line-height: 80px;
            float: left;
        }
        .photo {
            width: 100%;
            height: 500px;
            border-radius: 10px;
        }
        .photo img {
            width: 100%;
            height: 500px;
            border-radius: 10px;
            position: relative;
            top: -36px;
        }
        button {
            border: 0;
            background-color: white;
        }
        a > .fa-heart {
           font-size: 30px;
           color: #FE2E2E;
           padding: 15px;
        }
        .fa-comment {
           font-size: 30px;
           color: #464646;
           padding: 15px;
        }
        .menu {
            height: 60px;
        }
        .menu > p {
            float: right;
            line-height: 60px;
            font-size: 15px;
            color: #2E2E2E;
        }
        hr {
            margin: 0;
        }
        .fontawsome > .fa-heart{
            font-size: 22px;
            padding: 10px;
            float: left;
            color: #FE2E2E;
        }
        .fontawsome > .fa-comment{
            font-size: 22px;
            padding: 10px;
            float: left;
            color: #464646;
        }
        .commentview {
            width: 100%;
            height: 30px;
        }
        .commentview p:first-child {
            color: rgb(3, 117, 223);
            padding-right: 10px;
        }
        .commentview p {
            float: left;
        }
        .fontawsome  p {
            line-height: 42px;
            float: left;
        }
        .well {
            clear: both;
        }
        /* .commentInput {
            display: none;
        } */
        .oc {
            width: 860px;
            float: left;
        }
        .tc {
            width: 100px;
            float: left;
            background-color: #FD9813;
        }
    </style>
</head>

<body>
<?php include("menu.php") ?>
        <div class="all">
            <div class="main">
                <a href="#menu-toggle" class="btn btn-warning" id="menu-toggle">=</a>
                <h1>Travel</h1>
            </div>
            <div class="User">
                <!-- 제목 -->
                <h2><?php echo $title; ?></h2>
                <!-- 글쓴이 -->
                <p><?php echo $writer; ?></p>
            </div>
            <div class="photo">
            <?php if($file): ?>
            <p>
                <img src="./image/<?php echo $file;?>" alt="<?php echo $file;?>" >  
            </p>
            <?php endif; ?>
            </div>
            <div class="menu">
                <button action = "like.php"><a href="#" class="like" id="like103" title="Like" rel="Like" onclick="a();"><i id="heart" class="far fa-heart"></i></a></button>
                <button class="active" id="coIn"><i class="far fa-comment"></i></button>
                <!-- 날짜 -->
                <p><?php echo $wdate ?></p>
                <hr>
            </div>
            <div class="join">
                <div class="fontawsome">
                    <i class="fas fa-heart"></i>
                    <p>35개</p>
                    <i class="fas fa-comment"></i>
                    <p>35개</p>
                </div>
                <div class="well">
                    <p><?php echo $contents ?></p>
                    <div class="commentview">
                        <p><?php echo $writer ?></p>
                        <p>저도 정말 가고 싶어요 ~ ~</p>
                    </div>
                </div> 
            </div>
            <form accept-charset="UTF-8" role="form" method="post" action="comment.php">
                <input type="text" class="form-control oc" placeholder="댓글">
                <input type="submit" class="btn tc" value="댓글 달기">
            </form>
            
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

        function a() {
            $('a > i').removeClass("far");
            $('a > i').addClass("fas");
        }

        $("#coIn").click(function (e) {
            e.preventDefault();
            $('#commentInput').toggleClass("toggled");
        });
    </script>
    <script src="js/index.js"></script>
</body>

</html>