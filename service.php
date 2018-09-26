<?php 
//error_reporting(0);
include "db_connection.php";

session_start();

function filterTable($query)
{
    $connect = mysqli_connect("localhost",  "root", "", "justshing_chinese");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

$sql = "SELECT * FROM `printing_service` JOIN `printing_service_img` where `printing_service`.`printing_id`=`printing_service_img`.`printing_id`";
$print = filterTable($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <title>哲興印刷</title>
    <!--

Template 2081 Solution

http://www.tooplate.com/view/2081-solution

-->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
                <a href="#" class="navbar-brand"><img src="images/logot.gif" style="width: 28%;" class="img-responsive" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" class="smoothScroll" style="font-size: 16px;">首頁</a></li>
                    <li><a href="about.html" class="smoothScroll" style="font-size: 16px;">公司簡介</a></li>
                    <li><a href="service.html" class="smoothScroll" style="font-size: 16px;">印刷服務</a></li>
                    <li><a href="product.html" class="smoothScroll" style="font-size: 16px;">行銷產品</a></li>
                    <li><a href="contact.html" class="smoothScroll" style="font-size: 16px;">聯絡我們</a></li>
                    <li><a href="#user" class="smoothScroll" style="font-size: 16px;">管理員登入</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end navigation -->

    <!-- start home -->
    <section id="home" class="text-center">
        <div class="container">
            <div class="templatemo_headerimage">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="images/banner3.jpg" alt="Slide 1">
                            <div class="slider-caption">
                                <div class="templatemo_homewrapper">

                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->


    <!-- start team -->

    <div id="team">
        <div class="container">
            <div class="col-md-12">
                <h2 class="wow bounce">印刷服務</h2>
            </div>

            <?php 
            $i = 1;
            while($row = mysqli_fetch_array($print)):
             if($i==1 or $i ==4) {echo '<div class="row">';}
                                ?>

            <div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">

                <?php echo "<img style='width:250px;' src='imgs/".$row['printing_img'].".jpg'>" ?>
                <h3>
                    <?php echo $row['printing_title'];?>
                </h3>
                <p>
                    <?php echo $row['printing_detail'];?>
                </p>

            </div>


            <?php if($i==3 or $i==6) {echo '</div>';} ?>


            <?php 
            $i++;
            endwhile; ?>

        </div>
    </div>

    <!-- end team -->
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
