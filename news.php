<?php 
error_reporting(0);
include "db_connection.php";

session_start();

function filterTable($query)
{
    $connect = mysqli_connect("localhost",  "root", "", "justshing_chinese");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}



$sql = "SELECT * FROM `post`";
$post = filterTable($sql);

if(isset($_POST['delbtn']))

{
    
    $del = $_POST['proid'];
    $sql="DELETE FROM `post` WHERE `post_id` = '".$del."'";
    $aa = filterTable($sql);
    
    $sq="DELETE FROM `img` WHERE `post_id` = '".$del."'";
    $bb = filterTable($sq);
     header('location:' . $_SERVER['HTTP_REFERER']);

    
}

if(isset($_POST['editbtn']))

{
   $_SESSION['editpid'] = $_POST['proid'];
 header("location:../justshing/edit_post.php");
    
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>哲興印刷後台 所有公告</title>

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <!-- magnific pop up -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
    <!-- custom -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
    <!-- start navigation -->
    <nav class="navbar navbar-light" style="background-color:   #0066FF;">
        <a class="navbar-brand" href="#" style="margin: 0 10% 0 10%;font-size: 30PX;color:white;">
        哲興印刷 JUST SHING PRINTING
      </a>
        <a href="#" style="margin: 0 5% 0 5%;font-size: 24PX;color:#fff;text-align: right;">登出</a>
    </nav>
    <!-- end navigation -->
    <div class="container">
        <div class="row" style="margin: 2% 0 2% 0;">
            <div class="col-md-10"></div>
            <div class="col-md-2">
                <a href="new_post.php"><button type="button" class="btn btn-success" style="font-size: 22px;">新增公告</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin: 4% 0 15% 0;">
            <div class="col-md-2">
                <div class="btn-group-vertical">
                    <a href="news.php"><button type="button" class="btn btn btn-outline-primary" style="font-size: 22px;">最新公告</button></a>
                    <a href="intro.php"><button type="button" class="btn btn btn-outline-info" style="font-size: 22px;">公司簡介</button></a>
                    <a href="product.php"><button type="button" class="btn btn btn-outline-primary" style="font-size: 22px;">行銷產品</button></a>
                    <a href="printing_service.php"><button type="button" class="btn btn btn-outline-primary" style="font-size: 22px;">印刷服務</button></a>
                </div>
            </div>
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead>
                        <tr style="text-align: center; font-size:20px;">
                            <th width="55%">公告標題</th>
                            <th width="25%">上傳時間</th>
                            <th width="20%">操作</th>
                        </tr>
                    </thead>
                    <?php 
                        while($row = mysqli_fetch_array($post)):?>
                    <tbody>
                        <tr>
                            <td>
                                <?php echo $row['post_title'];?>
                            </td>
                            <!-- 公告標題 -->

                            <td>
                                <?php echo $row['post_uptime'];?>
                            </td>
                            <!-- 公告時間 -->

                            <td>

                                <form method="POST" action="news.php">
                                    <input style="display:none" type="" name="proid" value="<?php echo $row[ 'post_id']; ?>">
                                    <button name="editbtn" class="btn btn-xs btn-info">編輯</button>
                                    <button name="delbtn" class="btn btn-xs btn-danger" id="delete">刪除</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>

                    <?php endwhile;?>
                </table>
            </div>
        </div>
    </div>






    <!-- start footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <p>Copyright &copy; 2018 JUST SHINE PRINTING</p>
                </div>
                <div class="col-md-4 col-sm-5">
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-google"></a></li>
                        <li><a href="#" class="fa fa-envelope"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- isotope -->
    <script src="js/isotope.js"></script>
    <!-- images loaded -->
    <script src="js/imagesloaded.min.js"></script>
    <!-- wow -->
    <script src="js/wow.min.js"></script>
    <!-- smoothScroll -->
    <script src="js/smoothscroll.js"></script>
    <!-- jquery flexslider -->
    <script src="js/jquery.flexslider.js"></script>
    <!-- Magnific Pop up -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- custom -->
    <script src="js/custom.js"></script>
</body>

</html>
