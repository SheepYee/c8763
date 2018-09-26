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
                            <img src="images/news-banner.jpg" alt="Slide 1">
                            <div class="slider-caption">
                                <!--<div class="templatemo_homewrapper">
                                    <h1 class="wow fadeInDown" data-wow-delay="2000" style="color: black;"><strong>最新消息</strong></h1>
                                    <h2 class="wow fadeInDown" data-wow-delay="2000" style="color: black;">
                                        <span>第十一屆台灣金印獎 &AMP; 數位印刷應用類 第二名</span>
                                    </h2>
                                   <!-- <a href="#service" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">印刷服務</a>-->
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end home -->
    <!-- start service -->
    <div id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="media">
                        <div class="media-object media-left wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div class="media-body wow fadeIn">
                            <h3 class="media-heading">最新消息</h3>
                            <?php while($row = mysqli_fetch_array($post)):?>
                            <div class="col-md-8 col-sm-8" style="margin-top: 20px;">
                                <?php echo $row['post_title'];?>
                            </div>

                            <div class="col-md-4 col-sm-4" style="margin-top: 20px;">
                                <?php echo $row['post_uptime'];?>
                            </div>

                            <?php endwhile;?>

                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="media-object media-left wow fadeIn" data-wow-delay="0.1s">
                            <i class="fa fa-copy"></i>
                        </div>
                        <div class="media-body wow fadeIn">
                            <h3 class="media-heading">G7印刷認證</h3>
                            <p><img src="images/idealliance%20g7.jpg" style="width: 450px;" alt="g7印刷認證"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="media-object media-left wow fadeIn" data-wow-delay="0.3s">
                            <i class="fa fa-tint"></i>
                        </div>
                        <div class="media-body wow fadeIn">
                            <h3 class="media-heading">大豆油墨印刷</h3>
                            <p><img src="images/soy%20lnk-certificate.jpg" style="width: 450px;" alt="大豆油墨印刷"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
                            <i class="fa fa-laptop"></i>
                        </div>
                        <div class="media-body wow fadeIn" data-wow-delay="0.3s">
                            <h3 class="media-heading">電腦配色系統</h3>
                            <p style="font-size: 20px;"> • 本公司特別色皆使用最新電腦配色調墨系統，藉由電腦資料庫，挑選配方，精準實驗測試，避免人為調色的不準率及印刷機待機時間。完整的色彩品質管理記錄，確保每一次出貨(再版)品質一致。
                                <br> • 美國最大零售商Walmart及Target指定使用</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="media-object media-left wow fadeIn" data-wow-delay="0.8s">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        <div class="media-body wow fadeIn" data-wow-delay="0.6s">
                            <h3 class="media-heading">RFID感應卡</h3>
                            <p style="font-size: 20px;"> • 彩卡200張即可生產，不須製版，降低成本，交貨迅速!
                                <br> • 可做個人化可變印紋印刷。
                                <br> • 表面的印刷，不會像單卡印刷機會剝落。
                                <br> • 解析度高達700dpi以上，品質媲美平版印刷。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="media-object media-left wow fadeIn" data-wow-delay="0.9s">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="media-body wow fadeIn" data-wow-delay="0.6s">
                            <h3 class="media-heading">國際標準打蠟</h3>
                            <p style="font-size: 20px;"> 本公司EPSON 10600高階數位打樣機，不惜成本採用ISO12647國際標準打樣校色(ISO12647 international standard printing proof)以及標準紙張，提供客戶最接近的色樣。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="media">
                        <div class="media-object media-left wow fadeIn" data-wow-delay="0.4s">
                            <i class="fa fa-edit"></i>
                        </div>
                        <div class="media-body wow fadeIn" data-wow-delay="0.3s">
                            <h3 class="media-heading">分色與掃描機</h3>
                            <p style="font-size: 20px;">印刷圖片色彩的好壞，80%決定在製前準備
                                <br>印前製作色彩的好壞，80%決定在分色及掃描機
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end service -->
    <!-- start divider -->
    <div id="divider">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-1"></div>
                <div class="col-md-8 col-sm-8">
                    <h2 class="wow bounce">榮獲2016年第十屆台灣金印獎 <br>數位印刷應用類 第一名</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.9s" style="font-size: 20px;">藉由近乎原作的複製技術，藝術家不僅能保存其原畫作，藝術家的作品更能透過此一複製技術推廣到世界各個角落，這不僅是一種文化遺產的傳承與保護，更能充份達到藝術生活化、生活藝術化，讓藝術更有價值，也讓生活品質更加美好。</p>
                </div>
                <div class="col-md-2 col-sm-2"></div>
            </div>
        </div>
    </div>
    <!-- end divider -->
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
