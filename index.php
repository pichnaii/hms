<?php  
    include "config.php";

    $conn = mysqli_connect(HOST, USER, PASS, DB) or die ("Cannot connect to db");

	$page = "home.php";
	$slider = true;
	if(isset($_GET['p']))
	{
		$p = $_GET['p'];
		switch($p)
		{
			case "shop":
				$page = "shop.php";
				$slider = false;
				break;
				
			case "shop-detail":
				$page = "shop-detail.php";
				$slider = false;
				break;	
				
			case "checkout":
				$page = "checkout.php";
				$slider = false;
				break;	
				
			case "cart":
				$page = "cart.php";
				$slider = false;
				break;

			case "contact":
				$page = "contact.php";
				$slider = false;
				break;		
		}
	}
	


?>
<!DOCTYPE html>
<html lang="en">
<?php include "includes/head.php"?>
<body>
<?php include "includes/navbar.php"?>
<?php include $page ?>
<?php include "includes/footer.php"?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
<?php
    mysqli_close($conn);
?>