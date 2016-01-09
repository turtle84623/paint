<!DOCTYPE html><?php session_start(); ?>
<html lang="en">

<head>
<?php
include_once 'db.php';
?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>賀新油漆行</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">賀新 油漆行</div>
    <div class="address-bar"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">賀新 油漆行</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php">首頁</a>
                    </li>
                    <li>
                        <a href="about.php">商品</a>
                    </li>
                    <li>
                        <a href="blog.php">帳號<?php echo $_SESSION['two'] ?></a>
                    </li>
                    <li>
                        <a href="contact.php">購物車</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">關於
                        <strong>油漆</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/1.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <p>第一步:去買油漆；第二步:打開油漆</p>
                    <p>第三步:攪拌油漆；第四步:刷子沾油漆</p>
                    <p>第五步:刷牆面一下；第六步:收拾,打掃，開窗</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">我們的
                        <strong>商品</strong>
                    </h2>
                    <hr>
                </div>
               
                <?php
                
                for($i=2;$i<=4;$i++){
                    $sql = "SELECT * FROM 商品 WHERE 商品代號='".$i."'";
                    $record=mysql_query($sql);
                    $row = mysql_fetch_assoc($record);
                    ?>
                
                     <div class="col-sm-4 text-center">
                         <img class="img-responsive" src="img/<?php echo $i; ?>.jpg" alt="">
                         <h3><?php echo $row["商品名稱"];?>                                                        			                       
                    </h3>
                         <span>價格:<?php echo $row["單價"]; ?>NT</span>
                            <a href="checkout.php" class="btn-cart"> 加到購物車</a>
                </div>
                <?php } ?>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>版權所有</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
