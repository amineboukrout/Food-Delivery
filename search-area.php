<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

////foreach ($_POST as $key => $value) {
////    echo '<p>'.$key.'</p>';
////    foreach($value as $k => $v)
////    {
////        echo '<p>'.'jjjjjjj'.$k.'</p>';
////        echo '<p>'.'jjjjjjjjj'.$v.'</p>';
////        echo '<hr />';
////    }
////    echo 'hetrw';
//}

if(isset($_POST['submit'])) {
$foodid=$_POST['foodid'];
$userid= $_SESSION['fosuid'];
$query=mysqli_query($con,"insert into tblorders(UserId,FoodId) values('$userid','$foodid') ");
if($query) {
 echo "<script>alert('Food has been added in to the cart');</script>";   
} else {
 echo "<script>alert('Something went wrong.');</script>";      
}
}

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>DeliveryJINI</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <?php include_once('includes/header.php');?>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links">
              
            </div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="images/decouvrez-l-experience-food-d-airbnb.jpg">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <div class="result-show">
    <div class="container">
         <div class="row">
            <div class="col-sm-3">
                <?php $sdata=$_POST['searchdata']; ?>
                <p style="text-align: center;"><span class="primary-color"><strong>Result against "<?php echo $sdata;?>" keyword</strong></span>
            </div>
            </p>
        </div>
    </div>
</div>
<!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3">
                            <div class="sidebar clearfix m-b-20">
                                 <form name="search" method="post" action="search-area.php">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Find Area</h6> <i class="fa fa-cutlery pull-right"></i> </div>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-field" placeholder="Search Area" name="searchdata" id="searchdata"> <span class="input-group-btn">
                                 <button class="btn btn-secondary search-btn" type="submit" name="search"><i class="fa fa-search"></i></button> 
                                 </span> </div>
                                     </div>
                                     </form>

                                    <div class="main-block" style="margin-top: 10%">
                                    <div class="sidebar-title white-txt">
                                        <h6>Areas</h6> <i class="fa fa-cutlery pull-right"></i>
                                    </div>

                               <?php
                               $query=mysqli_query($con,"select * from tbladmin where LENGTH(tbladmin.Area) > 0");
                               while($row=mysqli_fetch_array($query)) {?>
                                        <ul>
                                            <li>
                                                <label class="custom-control custom-checkbox">
                                                    <span class="custom-control-description">
                                                        <form method="post" action="food_results.php">
                                                            <button class="buttonUID" type="submit" name="area" value="<?php echo $row['Area'] ?>"><?php echo $row['Area']; ?></button>
                                                        </form>
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                              <?php } ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- end:Pricing widget -->
                     
                            <!-- end:Widget -->
                        </div>
                     <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">
                            <div class="row">
                                <!-- Each popular food item starts -->
                                <?php
                                    $searchdata=$_POST['searchdata'];
                                    $sql = "SELECT * FROM tbladmin where Area like '%$searchdata%' ";
                                    $res_data = mysqli_query($con,$sql);
                                    $cnt=1;
                                    while($row = mysqli_fetch_array($res_data)){?>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap">
                                        <form method="post" action="food_results.php" name="UID" value="<?php echo $row['UID'] ?>">
                                            <div class="figure-wrap bg-image">
                                                <button class="buttonUIDlogo" type="submit" name="UID" value="<?php echo $row['UID'] ?>">
                                                    <img src="admin/itemimages/<?php echo $row['Logo'];?>" width="400" height="180">
                                                </button>
                                            </div>
                                        </form>
                                        <div class="content">
                                            <!--                                        <h5><a href="food-detail.php?fid=--><?php //echo $row['ID'];?><!--">--><?php //echo $row['RestaurantName'];?><!--</a></h5>-->
                                            <form method="post" action="food_results.php">
                                                <!--                                            <input name="UID" type="submit" value="--><?php //echo $row['UID'] ?><!--">-->
                                                <button class="buttonUID" type="submit" name="UID" value="<?php echo $row['UID'] ?>"><?php echo $row['RestaurantName']; ?></button>
                                                <!--                                            <a value="--><?php //echo $row['UID'] ?><!--" name="UID" class="button"-->
                                                <div class="product-name"><?php echo substr($row['Category'],0,40);?></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                    <?php } ?>
                              
                                <!-- Each popular food item starts -->
                           
                            </div>
                            <!-- end:right row -->
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- start: FOOTER -->
            <?php include_once('includes/footer.php');?>
            <!-- end:Footer -->
        </div>
    </div>
    <!-- end:page wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>
</html>
