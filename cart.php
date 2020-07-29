<?php
use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
session_start();
error_reporting(0);
include_once('includes/dbconnection.php');
if (strlen($_SESSION['fosuid']==0)) {
  header('location:logout.php');
  } else{ 
//placing order

    $uidquery = mysqli_query($con, "select tblorders.UID from tblorders where tblorders.IsOrderPlaced is null");
    $theUID = mysqli_fetch_array($uidquery)['UID'];

if(isset($_POST['placeorder'])){
    $driver_available = mysqli_fetch_array(mysqli_query($con,"select tbldrivers.UID from tbldrivers where Available = 'Yes'"));
    $count_available = mysqli_fetch_array(mysqli_query($con, "select count(*) from tbldrivers where Available = 'Yes'"));
    $count_available = $count_available['count(*)'];
    $driver_select = rand(1,$count_available);
    //getting address
    $fnaobno=$_POST['flatbldgnumber'];
    $street=$_POST['streename'];
    $area=$_POST['area'];
    $lndmark=$_POST['landmark'];
    $city=$_POST['city'];
    $userid=$_SESSION['fosuid'];
    //genrating order number
    $orderno= mt_rand(100000000, 999999999);
    $query="update tblorders set OrderNumber='$orderno',IsOrderPlaced='1' where UserId='$userid' and IsOrderPlaced is null;";
    $query.="insert into tblorderaddresses(UserId,Ordernumber,Flatnobuldngno,StreetName,Area,Landmark,City,UID) values('$userid','$orderno','$fnaobno','$street','$area','$lndmark','$city','$theUID');";

    $result = mysqli_multi_query($con, $query);
    if ($result) {
        echo '<script>alert("Your order placed successfully. Order number is "+"'.$orderno.'")</script>';
        echo "<script>window.location.href='my-order.php'</script>";
    }
}   

//Code deletion
if(isset($_GET['delid'])) {
$rid=$_GET['delid'];
$query=mysqli_query($con,"delete from tblorders where ID='$rid'");
echo '<script>alert("Food item deleted")</script>';
echo "<script>window.location.href='cart.php'</script>";

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
    <link href="css/style.css" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>


<body>
<script src="https://www.paypal.com/sdk/js?client-id=AcrKa5by_qOjWh3qHpWXNlppqTNXQ4EXskK3v4-4DV_YT4cY3jUQiszuQxgzx7t6dzRstuZlCe_ndmAu"></script>
<?php
    $driver_available = mysqli_fetch_array(mysqli_query($con,"select UID from tbldrivers where Available = 'Yes'"));
    $count_available = mysqli_fetch_array(mysqli_query($con, "select count(*) from tbldrivers where Available = 'Yes'"));
    $count_available = $count_available['count(*)'];
    $driver_select = rand(1,$count_available);
    echo '<script type="text/javascript">alert("'.$driver_available[0].'");</script>';
    print_r($driver_available);
?>
   <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
          <?php include_once('includes/header.php');?>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper">
            <!-- top Links -->
            <div class="top-links"></div>
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <section class="inner-page-hero bg-image" data-image-src="images/decouvrez-l-experience-food-d-airbnb.jpg">
                <div class="profile">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div class="image-wrap">
                                    <figure><img src="images/decouvrez-l-experience-food-d-airbnb.jpg" alt="Profile Image"></figure>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- end:Inner page hero -->
            <div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li>Detail Cart</li>
                    </ul>
                </div>
            </div>
            <div class="container m-t-30">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="sidebar clearfix m-b-20">
                            <div class="main-block">
<!--                                <div class="sidebar-title white-txt">-->
<!--                                    <h6>Food Categories</h6> <i class="fa fa-cutlery pull-right"></i> </div>-->
<!--                                    --><?php
//                                        $query=mysqli_query($con,"select * from  tblcategory");
//                                            while($row=mysqli_fetch_array($query)){?>
<!--                                                <ul>-->
<!--                                            <li>-->
<!--                                                <label class="custom-control custom-checkbox">-->
<!--                                                    <span class="custom-control-description"><a href="viewfood-categorywise.php?catid=--><?php //echo $row['CategoryName'];?><!--">--><?php //echo $row['CategoryName'];?><!--</a></span> </label>-->
<!--                                            </li>-->
<!--                                        </ul>-->
<!--                                        --><?php //} ?>
                                <div class="clearfix"></div>
                            </div>
                            <!-- end:Sidebar nav -->
                            
                        </div>
                        <!-- end:Left Sidebar -->
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                        <div class="menu-widget m-b-30">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              Your ORDERS Delicious hot food! <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="collapse in" id="1">
                                <div class="food-item white">

                                    <?php
                                    $userid= $_SESSION['fosuid'];
                                    $query=mysqli_query($con,"select tblorders.ID as frid,tblfood.Image,tblfood.ItemName,tblfood.ItemDes,tblfood.ItemPrice,tblfood.ItemQty,tblorders.FoodId from tblorders join tblfood on tblfood.ID=tblorders.FoodId where tblorders.UserId='$userid' and tblorders.IsOrderPlaced is null");
                                    $num=mysqli_num_rows($query);
                                    if($num>0){
                                        while ($row=mysqli_fetch_array($query)) {?>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-8">
                                            <div class="rest-logo pull-left">
                                                <a class="restaurant-logo pull-left" href="#"><img src="admin/itemimages/<?php echo $row['Image']?>" width="100" height="80" alt="<?php echo $row['ItemName']?>"></a>
                                            </div>
                                            <!-- end:Logo -->
                                            <div class="rest-descr">
                                                <h6><a href="food-detail.php?fid=<?php echo $_SESSION['fid']=$row['FoodId'];?>"><?php echo $row['ItemName']?> (<?php echo $row['ItemQty']?>) </a></h6>
                                                <p> <?php echo $row['ItemDes']?></p>
                                            </div>
                                            <!-- end:Description -->
                                        </div>
                                        <!-- end:col -->
                                        <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">Rs. <?php echo $total=$row['ItemPrice']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="cart.php?delid=<?php echo $row['frid'];?>" onclick="return confirm('Do you really want to delete?');";><i class="fa fa-trash" aria-hidden="true" title="Delete this food item"></i></a></span>
                                        </div>
                                    </div>
                                    <!-- end:row -->

                                <?php $grandtotal+=$total;
                                        }
                                    } else {
                                        echo "You cart is empty.";} ?>
                                </div>
                            </div>
                            <!-- end:Collapse -->
                        </div>
                        <!-- end:Widget menu -->
                      
                        <!--/row -->
                    </div>
                    <!-- end:Bar -->
<?php
//use \PayPal\Api\Payer;
require 'start.php';
//$userid= $_GET['fosuid'];
$payer = new \PayPal\Api\Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName('orderfood')->setCurrency('USD')->setQuantity(1)->setPrice($grandtotal);
$details = new Details();
$details->setSubtotal($grandtotal);

?>
                    <?php if($num>0){?>
                        <form method="post">
                            <div class="col-xs-12 col-md-12 col-lg-3">
                                <div class="sidebar-wrap">
                                    <div class="widget widget-cart">
                                        <div class="widget-heading">
                                            <h3 class="widget-title text-dark">
                                         Your Shopping Cart
                                      </h3>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="order-row bg-white">
                                            <div class="widget-body">


                                                <div class="form-group row no-gutter">
                                                    <div class="col-lg-12">
                                                        <form id="form" action="checkout.php" method="get">
                                                        <input type="text" name="flatbldgnumber"  placeholder="Flat or Building Number" class="form-control" required="true">
                                                        <input type="text" name="streename" placeholder="Street Name" class="form-control" required="true">
                                                        <input type="text" name="area"  placeholder="Area" class="form-control" required="true">
                                                        <input type="text" name="landmark" placeholder="Landmark if any" class="form-control">
                                                        <input type="text" name="city" placeholder="City" class="form-control">
                                                        <input type="hidden" name="grandtotal" value="<?php echo $grandtotal;?>">
                                                        <input type="hidden" name="fosuid" value="<?php echo $userid?>">
<!--                                                        <button type="submit">CLK</button>-->
                                                        </form>
                                                        <input type="submit" form="form">
                                                    </div>
                                                </div>
                                            </div>
                                   <hr />
                          
                                <div class="widget-body">
                                    <div class="price-wrap text-xs-center">
                                        <p>TOTAL</p>
                                        <h3 class="value"><strong><?php echo $grandtotal;?></strong></h3>
<!--                                        <p>Free Shipping</p>-->
<!--                                        <button  type="submit" name="placeorder" class="btn theme-btn btn-lg">Place order</button>-->
                                        <div id="paypal-button-container" style="width: 120px; margin:0 auto;">

                                            <!-- Add the checkout buttons, set up the order and approve the order -->
                                            <script>
                                                paypal.Buttons({
                                                    style: {
                                                        color: 'blue',
                                                        shape: 'pill',
                                                        size: 'responsive',
                                                        height: 30,
                                                        label: 'pay'
                                                    },

                                                    createOrder: function(data, actions) {
                                                        return actions.order.create({
                                                            purchase_units: [{
                                                                amount: {
                                                                    value: '<?php echo $grandtotal; ?>'
                                                                }
                                                            }]
                                                        });
                                                    },
                                                    onApprove: function(data, actions) {
                                                        return actions.order.capture().then(function(details) {
                                                            alert('Transaction completed by ' + details.payer.name.given_name);
                                                        });
                                                    }
                                                }).render('#paypal-button-container'); // Display payment options on your web page
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- end:Right Sidebar -->
                </div>
            </form>
            <?php } ?>
                <!-- end:row -->
            </div>
            <!-- end:Container -->
          

        </div>

        <!-- end:page wrapper -->
            <!-- start: FOOTER -->
            <?php include('includes/footer.php');?>
            <!-- end:Footer -->
    </div>
    <!--/end:Site wrapper -->

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
<?php } ?>