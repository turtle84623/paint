<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Business Casual - Start Bootstrap Theme</title>

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
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Business Casual</a>
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
                        <a href="blog.php">登入</a>
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

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>新增帳號</strong>
                    </h2>
                    <hr>
                    <form action="" method="post" enctype="multipart/form-data" name="form2"　action="confirm.php">
                      <p>帳號:
                        <label for="admin2"></label>
                      <input type="text" name="admin2" id="admin2">
                      </p>
                      <p>密碼:
                        <label for="key2"></label>
                        <input type="password" name="key2" id="key2">
                      </p>
                      <p>電話:
                        <label for="numb"></label>
                        <input name="numb" type="text" id="numb" maxlength="10">
                      </p>
                      <p>地址:
                        <label for="add"></label>
                      </p>
                      <p>
                        <textarea name="add" id="add"></textarea>
                      </p>
                      <p>
                        <input type="submit" name="b2" id="b2" value="確定申請">
                        <input type="reset" name="r2" id="r2" value="重新輸入">
                      </p>

                    </form>
                </div>
               
            </div>
        </div>

        <div class="row">
            
       

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
<SCRIPT language=javascript>
    alert  ("帳號創建成功！"); 
</SCRIPT>
</html>
                       <?php
        include_once 'db.php';       
        $name = $_POST['admin2'];
        $key2 = $_POST['key2'];
        $numb= $_POST['numb'];
        $add= $_POST['add'];
        $sql = "INSERT INTO `panit`.`locks` "
                . "(`使用者`, `密碼`, `電話號碼`,`地址`)"
                . " VALUES ( '$name',"." $key2,"." $numb,"."'$add');";
       // echo "\n".$sql . "\n";
        $result = mysql_query($sql);
        //echo "\n".$sql . "\n";
        ?>
