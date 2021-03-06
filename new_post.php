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


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>哲興印刷後台 新增公告</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel='stylesheet' type='text/css' />
    <!--[if lt IE 9]>

    <!-- jQueryUI -->
    <link href="assets/css/sprflat-theme/jquery.ui.all.css" rel="stylesheet" />
    <!-- Bootstrap stylesheets (included template modifications) -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- Plugins stylesheets (all plugin custom css) -->
    <link href="assets/css/plugins.css" rel="stylesheet" />
    <!-- Main stylesheets (template main css file) -->
    <link href="assets/css/main.css" rel="stylesheet" />
    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- Fav and touch icons -->

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




    <div class="container" style="margin-top:5%">
        <!-- Start .content-wrapper -->
        <div class="content-wrapper">
            <div class="row">
                <!-- Start .row -->
                <!-- Start .page-header -->
                <div class="col-lg-12 heading">
                    <h1 class="page-header"><i class="im-plus"></i> 新增公告</h1>
                    <!-- Start .bredcrumb -->

                    <!-- End .breadcrumb -->
                </div>
                <!-- End .page-header -->
            </div>
            <!-- End .row -->
            <!-- Page start here ( usual with .row ) -->
            <div class="outlet">
                <!-- Start .outlet -->
                <div class="outlet">
                    <!-- Start .outlet -->
                    <div class="row">
                        <!-- Start .row -->
                        <div class="col-lg-12">
                            <!-- Start col-lg-12 -->
                            <div class="panel panel-default">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h3 class="panel-title"></h3>
                                </div>
                                <!-- <form method = "POST" action="connect/bkmain.php"> -->
                                <div class="panel-body">
                                    <form method="POST" action="main.php" enctype="multipart/form-data" class="form-horizontal group-border hover-stripped" role="form" id="validate">
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">公告標題</label>
                                            <div class="col-lg-10">
                                                <input name="post_title" type="text" class="form-control required">
                                            </div>
                                        </div>

                                        <!-- End .form-group  -->

                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">公告詳細內容</label>
                                            <div class="col-lg-10">
                                                <textarea name="post_detail" id="texteditor1" class="form-control tinymce-box"></textarea>
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
                                        <div class="form-group">
                                            <label class="col-lg-2 control-label">上傳圖片</label>
                                            <div class="col-lg-10">
                                                <input name="upfile[]" type="file" multiple="multiple" id="file">
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
                                        <div class="form-group">
                                            <div class="col-lg-offset-2">
                                                <button name="upbtn" class="btn btn-default ml15" type="submit">新增公告</button>
                                            </div>
                                        </div>
                                        <!-- End .form-group  -->
                                    </form>
                                    <!-- </form> -->
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- End col-lg-12 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- Page End here -->
            </div>
            <!-- End .outlet -->
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
    <!-- Javascripts -->
    <!-- Load pace first -->
    <script src="assets/plugins/core/pace/pace.min.js"></script>
    <!-- Important javascript libs(put in all pages) -->
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/libs/jquery-2.1.1.min.js">\x3C/script>')

    </script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')

    </script>
    <!--[if lt IE 9]>
  <script type="text/javascript" src="assets/js/libs/excanvas.min.js"></script>
  <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <script type="text/javascript" src="assets/js/libs/respond.min.js"></script>
<![endif]-->
    <!-- Bootstrap plugins -->
    <script src="assets/js/bootstrap/bootstrap.js"></script>
    <!-- Core plugins ( not remove ever) -->
    <!-- Handle responsive view functions -->
    <script src="assets/js/jRespond.min.js"></script>
    <!-- Custom scroll for sidebars,tables and etc. -->
    <script src="assets/plugins/core/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
    <!-- Resize text area in most pages -->
    <script src="assets/plugins/forms/autosize/jquery.autosize.js"></script>
    <!-- Proivde quick search for many widgets -->
    <script src="assets/plugins/core/quicksearch/jquery.quicksearch.js"></script>
    <!-- Bootbox confirm dialog for reset postion on panels -->
    <script src="assets/plugins/ui/bootbox/bootbox.js"></script>
    <!-- Other plugins ( load only nessesary plugins for every page) -->
    <script src="assets/plugins/core/moment/moment.min.js"></script>
    <script src="assets/plugins/charts/sparklines/jquery.sparkline.js"></script>
    <script src="assets/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
    <script src="assets/plugins/forms/tags/jquery.tagsinput.min.js"></script>
    <script src="assets/plugins/forms/tinymce/tinymce.min.js"></script>
    <script src="assets/plugins/misc/highlight/highlight.pack.js"></script>
    <script src="assets/plugins/misc/countTo/jquery.countTo.js"></script>
    <script src="assets/js/jquery.sprFlat.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/pages/wysiwyg.js"></script>

    <script src="assets/js/pages/form-validation.js"></script>
    <script src="assets/plugins/forms/tags/jquery.tagsinput.min.js"></script>
    <script src="assets/plugins/forms/tags/jquery.tagsinput.min.js"></script>
    <script src="assets/plugins/forms/switch/jquery.onoff.min.js"></script>
    <script src="assets/plugins/forms/maxlength/bootstrap-maxlength.js"></script>
    <script src="assets/plugins/forms/bootstrap-filestyle/bootstrap-filestyle.js"></script>
    <script src="assets/plugins/forms/color-picker/spectrum.js"></script>
    <script src="assets/plugins/forms/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/forms/datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/plugins/forms/globalize/globalize.js"></script>
    <script src="assets/plugins/forms/maskedinput/jquery.maskedinput.js"></script>
    <script src="assets/plugins/forms/select2/select2.js"></script>
    <script src="assets/plugins/forms/dual-list-box/jquery.bootstrap-duallistbox.js"></script>
    <script src="assets/plugins/forms/password/jquery-passy.js"></script>
    <script src="assets/plugins/forms/checkall/jquery.checkAll.js"></script>
    <script src="assets/plugins/forms/validation/jquery.validate.js"></script>
    <script src="assets/plugins/forms/validation/additional-methods.min.js"></script>
</body>

</html>
