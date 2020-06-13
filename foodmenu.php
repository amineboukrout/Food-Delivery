<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
{
    $foodid=$_POST['foodid'];
    $userid= $_SESSION['fosuid'];
    $query=mysqli_query($con,"insert into tblorders(UserId,FoodId) values('$userid','$foodid') ");
    if($query)
    {
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
    <title>Food Ordering System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>

<body style="background-color:black;">
<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <!--header starts-->
    <header id="header" class="header-scroll top-header headrom">
        <!-- .navbar -->
        <?php include_once('includes/header.php');?>
        <!-- /.navbar -->
    </header>
    <div class="page-wrapper">
        <!-- top Links -->
<!--        <div class="top-links"></div>-->
        <!-- end:Top links -->.

        <!-- start: Inner page hero -->
<!--        <div class="inner-page-hero bg-image" data-image-src="images/decouvrez-l-experience-food-d-airbnb.jpg">-->
<!--            <div class="container"> </div>-->
<!--<!--             end:Container -->
<!--        </div>-->

        <div class="restaurant-card__background">
            <div class="restaurant-card__wrapper">
                <div class="restaurant-card">
                    <span class="restaurant-card__title">Трактир «Пушкин»</span>
                    <div class="restaurant-card__footer">
                        <span class="restaurant-card__price">₴₴₴ • Европейская</span>
                        <span class="restaurant-card__time">40 - 50 Min</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="appetizer__wrapper">
            <div class="appetizers">
                <span class="appetizers__title">Закуски</span>
                <ul class="appetizers__menu">
                    <li class="appetizers__menu-card">
                        <a href="javascript:void(0)" class="appetizers__menu-link">
                            <div class="menu-card__left">
                                <span class="menu-card__title">Сельдь на бородинском хлебе</span>
                                <span class="menu-card__consist">С яйцом и огурцом</span>
                                <span class="menu-card__price">99 &#8372;</span>
                            </div>
                            <img src="img/appetizer_1.png" alt="">
                        </a>
                    </li>

                    <li class="appetizers__menu-card">
                        <a href="javascript:void(0)" class="appetizers__menu-link">
                            <div class="menu-card__left">
                                <span class="menu-card__title">Соленья ассорти</span>
                                <span class="menu-card__consist"></span>
                                <span class="menu-card__price">129 &#8372;</span>
                            </div>
                            <img src="img/appetizer_2.png" alt="">
                        </a>
                    </li>

                    <li class="appetizers__menu-card">
                        <a href="javascript:void(0)" class="appetizers__menu-link">
                            <div class="menu-card__left">
                                <span class="menu-card__title">Грибы маринованные</span>
                                <span class="menu-card__consist"></span>
                                <span class="menu-card__price">120 &#8372;</span>
                            </div>
                            <img src="img/appetizer_3.png" alt="">
                        </a>
                    </li>

                    <li class="appetizers__menu-card">
                        <a href="javascript:void(0)" class="appetizers__menu-link">
                            <div class="menu-card__left">
                                <span class="menu-card__title">Сало домашнее с горчицей</span>
                                <span class="menu-card__consist"></span>
                                <span class="menu-card__price">129 &#8372;</span>
                            </div>
                            <img src="img/appetizer_4.png" alt="">
                        </a>
                    </li>

                    <li class="appetizers__menu-card">
                        <a href="javascript:void(0)" class="appetizers__menu-link">
                            <div class="menu-card__left">
                                <span class="menu-card__title">Малосольная семга</span>
                                <span class="menu-card__consist"></span>
                                <span class="menu-card__price">155 &#8372;</span>
                            </div>
                            <img src="img/appetizer_5.png" alt="">
                        </a>
                    </li>

                    <li class="appetizers__menu-card">
                        <a href="javascript:void(0)" class="appetizers__menu-link">
                            <div class="menu-card__left">
                                <span class="menu-card__title">Язык говяжий с хреном</span>
                                <span class="menu-card__consist"></span>
                                <span class="menu-card__price">140 &#8372;</span>
                            </div>
                            <img src="img/appetizer_6.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- start: FOOTER -->
        <?php include_once('includes/footer.php');?>
        <!-- end:Footer -->
<!--        </div>-->
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
