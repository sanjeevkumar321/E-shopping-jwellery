<?php
require('connection.inc.php');
require('functions.inc.php');
require('add_to_cart.inc.php');
$wishlist_count=0;
$notequal="and categories <> 'Diamonds' and categories <> 'Stones'";
$cat_res=mysqli_query($con,"select * from categories where status=1 ".$notequal." order by categories asc ");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}

$obj=new add_to_cart();
$totalProduct=$obj->totalProduct();

if(isset($_SESSION['USER_LOGIN'])){
	$uid=$_SESSION['USER_ID'];
	
	if(isset($_GET['wishlist_id'])){
		$wid=get_safe_value($con,$_GET['wishlist_id']);
		mysqli_query($con,"delete from wishlist where id='$wid' and user_id='$uid'");
	}

	$wishlist_count=mysqli_num_rows(mysqli_query($con,"select product.name,product.image,product.price,product.mrp,wishlist.id from product,wishlist where wishlist.product_id=product.id and wishlist.user_id='$uid'"));
}

$script_name=$_SERVER['SCRIPT_NAME'];
$script_name_arr=explode('/',$script_name);
$mypage=$script_name_arr[count($script_name_arr)-1];

$meta_title="My Ecom Website";
$meta_desc="My Ecom Website";
$meta_keyword="My Ecom Website";
if($mypage=='product.php'){
	$product_id=get_safe_value($con,$_GET['id']);
	$product_meta=mysqli_fetch_assoc(mysqli_query($con,"select * from product where id='$product_id'"));
	$meta_title=$product_meta['meta_title'];
	$meta_desc=$product_meta['meta_desc'];
	$meta_keyword=$product_meta['meta_keyword'];
}if($mypage=='contact.php'){
	$meta_title='Contact Us';
}

if(isset($_POST['send_custom_wp']) && $_POST['cname']!="" && $_POST['cweight']!=""&& $_POST['cprice']!=""  )
{
    // print_r($_POST);
    $product=get_safe_value($con,$_POST['cname']);
    $weight=get_safe_value($con,$_POST['cweight']);
    $price=get_safe_value($con,$_POST['cprice']);
$link='https://api.whatsapp.com/send?text=Product Name- '.$product.' , Weight - '.$weight.' ,Price -'.$price.' &phone='.WHATAPP_NUMBER.' ';
         echo $link;
    header('Location: '.$link.'');
}

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $meta_title?></title>
    <meta name="description" content="<?php echo $meta_desc?>">
	<meta name="keywords" content="<?php echo $meta_keyword?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/core.css">
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
	<style>
	.htc__shopping__cart a span.htc__wishlist {
		background: #c43b68;
		border-radius: 100%;
		color: #fff;
		font-size: 9px;
		height: 17px;
		line-height: 19px;
		position: absolute;
		right: 18px;
		text-align: center;
		top: -4px;
		width: 17px;
	}

    .btn-them{
        background: #c29958 none repeat scroll 0 0;
    color: #fff;
    display: inline-block;
    font-family: Poppins;
    font-size: 12px;
    font-weight: 200;
    height: 45px;
    line-height: 40px;
    padding: 0 35px;
    text-transform: capitalize;
    transition: all 0.3s ease 0s;
    }
    
	</style>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <header id="htc__header" class="htc__header__area header--one">
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container-fluid">
                    <div class="row"><center><img src="images/logo/logo2.png" alt="logo images" width="70px"></center></div>
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                               <!--  <div class="logo">
                                     <a href="index.php"><img src="images/logo/logo.png" alt="logo images" width="30%"></a>
                                </div> -->
                                 
                            </div>
                            <div class="col-md-8 col-lg-7 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu" >
                                        
                                        <li class="drop"><a href="#">Find Jewelry</a>
                                            <ul class="dropdown">
                                                <?php
                                        foreach($cat_arr as $list){
                                            ?>
                                            <li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
                                            <?php
                                        }
                                        ?>
                                            </ul>
                                        </li>
                                        <li><a href="diamonds.php">Diamond</a></li>
                                         <li><a href="stones.php">Stones</a></li>
                                         <li><a href="astrologers.php">Astrologer</a></li>
                                             <li><a href="aboutus.php">About</a></li>
                                            <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                           <li><a href="#">Find Jewelry</a>
                                                <ul style="display: none;">
                                                   <?php
                                        foreach($cat_arr as $list){
                                            ?>
                                            <li><a href="categories.php?id=<?php echo $list['id']?>"><?php echo $list['categories']?></a></li>
                                            <?php
                                        }
                                        ?>
                                                </ul>
                                        
                                            <li><a href="diamonds.php">Diamond</a></li>
                                         <li><a href="stones.php">Stones</a></li>
                                         <li><a href="astrologers.php">Astrologer</a></li>
                                             <li><a href="aboutus.php">About</a></li>
                                            <li><a href="contact.php">contact</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-3 col-xs-4">
                                <div class="header__right">
									<div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                 <div class="header__account">
                                        <?php if(isset($_SESSION['USER_LOGIN'])){
                                            echo '<a href="logout.php">Logout</a> <a href="my_order.php">My Order</a>';
                                        }else{
                                            echo '<a href="login.php">Login/Register</a>';
                                        }
                                        ?>
                                        
                                    </div>
                                    <div class="htc__shopping__cart">
										<?php
										if(isset($_SESSION['USER_ID'])){
										?>
										<!-- <a href="wishlist.php"><i class="icon-heart icons"></i></a> -->
                                        <!-- <a href="wishlist.php"><span class="htc__wishlist"><?php echo $wishlist_count?></span></a> -->
										<?php } ?>
                                        <a href="cart.php"><i class="icon-handbag icons"></i></a>
                                        <a href="cart.php"><span class="htc__qua"><?php echo $totalProduct?></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
        </header>
		<div class="body__overlay"></div>
		<div class="offset__wrapper">
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search__inner">
                                <form action="search.php" method="get">
                                    <input placeholder="Search here... " type="text" name="str">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>