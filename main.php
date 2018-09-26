<?php 

    include "db_connection.php";
    session_start();

    function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "justshing_chinese");
    mysqli_query($connect, "SET NAMES 'utf8'");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

if(isset($_POST['upbtn']))
{
    $title = $_POST['post_title'];
    
    $detail = $_POST['post_detail'];
    
    $type=$_FILES['upfile']['type'];
    

    $sql = "INSERT INTO `post` (`post_title`,`post_detail`) VALUES ('".$title."','".$detail."')";
    $result = filterTable($sql);

    
    foreach($dbh->query('SELECT MAX(`post_id`) FROM `post`') as $roow){};
    $pid =$roow['MAX(`post_id`)'];
    
    $i=0;
    
    while($i<count($_FILES['upfile']['name'])){

        $newname="post_".$pid."_".$i;

        move_uploaded_file($_FILES['upfile']['tmp_name'][$i],"imgs/".$newname.".jpg");

        $sqll = "INSERT INTO `img` (`post_id`,`post_image`) VALUES ('".$pid."','".$newname."')";
        $result = filterTable($sqll);
        $i++;

    }
    
    header("location:news.php");

}


if(isset($_POST['editbtn']))

{
    
    $name = $_POST['p_name'];
    $detail = $_POST['textarea'];
    

    $sql = "UPDATE `post` SET `post`.`post_title`='$name',`post`.`post_detail`='$detail' WHERE `post_id` = '".$_SESSION['editpid']."'";
    
        $result = filterTable($sql);
        $del = "DELETE FROM `img` WHERE `post_id`='".$_SESSION['editpid']."'"; 
        $delold = filterTable($del);
    
        $i=0;
        while($i<count($_FILES['upfile']['name'])){

        $newname="post_".$_SESSION['editpid']."_".$i;
 
        move_uploaded_file($_FILES['upfile']['tmp_name'][$i],"imgs/".$newname.".jpg");
            
        $sql = "INSERT INTO `img` (`post_id`,`post_image`) VALUES ('".$_SESSION['editpid']."','".$newname."')"; 
        $result = filterTable($sql); 
        $i++;

        }



   header("location:news.php");

}

if(isset($_POST['intro_up']))
{
    $title = $_POST['intro_title'];
    
    $detail = $_POST['intro_detail'];
    
    $type=$_FILES['upfile']['type'];
    $type=$_FILES['iconfile']['type'];
    


    $sql = "INSERT INTO `intro` (`intro_title`,`intro_detail`) VALUES ('".$title."','".$detail."')";
    $result = filterTable($sql);

    
    foreach($dbh->query('SELECT MAX(`intro_id`) FROM `intro`') as $roow){};
    $introid =$roow['MAX(`intro_id`)'];
    
    
    $i=0;
    
    while($i<count($_FILES['upfile']['name'])){

        $newname="intro_".$introid."_".$i;
        $iconname="intro_".$introid."_icon";

        move_uploaded_file($_FILES['upfile']['tmp_name'][$i],"imgs/".$newname.".jpg");
        
        move_uploaded_file($_FILES['iconfile']['tmp_name'],"imgs/".$iconname.".jpg");

        $sqll = "INSERT INTO `intro_img` (`intro_id`,`intro_image`,`intro_icon`) VALUES ('".$introid."','".$newname."','".$iconname."')";
        $result = filterTable($sqll);
        $i++;

    }
    


    
        header("location:intro.php");
}


if(isset($_POST['intro_edit']))

{
    
    $name = $_POST['intro_title'];
    $detail = $_POST['textarea'];
    

    $sql = "UPDATE `intro` SET `intro`.`intro_title`='$name',`intro`.`intro_detail`='$detail' WHERE `intro_id` = '".$_SESSION['editpid']."'";
    
    $result = filterTable($sql);
    $del = "DELETE FROM `intro_img` WHERE `intro_id`='".$_SESSION['editpid']."'"; 
    $delold = filterTable($del);
    
     


    $i=0;
    while($i<count($_FILES['upfile']['name'])){
        
        $newname="intro_".$_SESSION['editpid']."_".$i;
        $iconname="intro_".$_SESSION['editpid']."_icon";
        
       

        move_uploaded_file($_FILES['upfile']['tmp_name'][$i],"imgs/".$newname.".jpg");
        move_uploaded_file($_FILES['iconfile']['tmp_name'],"imgs/".$iconname.".jpg");
        
        
        
        $sql = "INSERT INTO `intro_img` (`intro_id`,`intro_image`,`intro_icon`) VALUES ('".$_SESSION['editpid']."','".$newname."','".$iconname."')"; 
        $result = filterTable($sql); 
        $i++;

    }

   header("location:intro.php");

}

if(isset($_POST['product_up']))
{
    $title = $_POST['product_title'];
    
    $detail = $_POST['product_detail'];
    
    $category = $_POST['pro_category'];
    

    
    $sql = "INSERT INTO `product` (`product_title`,`product_detail`,`product_category`) VALUES ('".$title."','".$detail."','".$category."')";
    $result = filterTable($sql);

    
    foreach($dbh->query('SELECT MAX(`product_id`) FROM `product`') as $roow){};
    $productid =$roow['MAX(`product_id`)'];
    
    
    $i=0;
    
    while($i<count($_FILES['upfile']['name'])){

        $newname="product_".$productid."_".$i;
       
        move_uploaded_file($_FILES['upfile']['tmp_name'][$i],"imgs/".$newname.".jpg");
        

        $sqll = "INSERT INTO `product_img` (`product_id`,`product_image`) VALUES ('".$productid."','".$newname."')";
        $result = filterTable($sqll);
        $i++;

    }
    
    
        header("location:product.php");
}


if(isset($_POST['edit_product']))

{
    
    $title = $_POST['product_title'];
    
    $detail = $_POST['textarea'];
    
    $category = $_POST['pro_category'];
    
   
    

    $sql = "UPDATE `product` SET `product`.`product_title`='$title',`product`.`product_detail`='$detail' ,`product`.`product_category`='$category' WHERE `product_id` = '".$_SESSION['editpid']."'";
    
        $result = filterTable($sql);
        $del = "DELETE FROM `product_img` WHERE `product_id`='".$_SESSION['editpid']."'"; 
        $delold = filterTable($del);
    
        $i=0;
        while($i<count($_FILES['upfile']['name'])){

        $newname="product_".$_SESSION['editpid']."_".$i;
 
        move_uploaded_file($_FILES['upfile']['tmp_name'][$i],"imgs/".$newname.".jpg");
            
        $sql = "INSERT INTO `product_img` (`product_id`,`product_image`) VALUES ('".$_SESSION['editpid']."','".$newname."')"; 
        $result = filterTable($sql); 
        $i++;

        }



   header("location:product.php");

}


// 印刷服務 編輯
if(isset($_POST['editbtn_printing']))

{
    
    $name = $_POST['p_name'];
    $detail = $_POST['textarea'];
    

    $sql = "UPDATE `printing_service` SET `printing_service`.`printing_title`='$name',`printing_service`.`printing_detail`='$detail' WHERE `printing_id` = '".$_SESSION['editpid']."'";
    
        $result = filterTable($sql);
        $del = "DELETE FROM `printing_service_img` WHERE `printing_id`='".$_SESSION['editpid']."'"; 
        $delold = filterTable($del);
    
        
        $newname="printing_".$_SESSION['editpid'];
 
        move_uploaded_file($_FILES['upfile']['tmp_name'],"imgs/".$newname.".jpg");
            
        $sql = "INSERT INTO `printing_service_img` (`printing_id`,`printing_img`) VALUES ('".$_SESSION['editpid']."','".$newname."')"; 
        $result = filterTable($sql); 
     

     


   header("location:printing_service.php");

}

?>
