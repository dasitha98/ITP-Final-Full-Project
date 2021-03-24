<?php ob_start(); 
?>


<?php session_start(); ?>
<?php require_once('inc/connection.php'); ?>
<?php require_once('inc/functions.php'); ?>
<?php 
	// checking if a user is logged in
	if (!isset($_SESSION['admin_id'])) {
		header('Location:admin-login.php');
	}

	$user_list = '';
		
	$query = "SELECT * FROM admin WHERE admin_id = {$_SESSION['admin_id']} LIMIT 1";
	
	$users = mysqli_query($connection, $query);

	verify_query($users);

	while ($user = mysqli_fetch_assoc($users)) {
		
	$ab1=	$user['first_name'];
	$ab2=	$user['last_name'];
	$ab3=	$user['contact_number'];
	$ab4=	$user['address'];
	$ab5=	$user['last_login'];
	$ab6=	$user['email'];
	}
 ?>


<!DOCTYPE html>
<html lang="en">

<?php include "include\head.php";?>



<body>
    <div id="wrapper">

        <!-- Navigation -->
        <?php include "include\Navigation.php"?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin Profile
                        </h1>
						<p align="right"><a href="../shareholderfront/login.php" class='btn btn-danger'>Shareholder Login</a></p>
						<div class="checkout__input">
							
							<p>Fist Name<span>*</span></p>
                                        
							<input type="text" name="first_name" <?php echo 'value="' . $ab1 . '"'; ?> disabled>
                             </div>
                                </div>
                             <div class="col-lg-6">
                                <div class="checkout__input">
                                <p>Last Name<span>*</span></p>
								<input type="text" name="last_name" <?php echo 'value="' . $ab2 . '"'; ?> disabled>
                                </div>
                               </div>

                            </div>
                            <div class="checkout__input">
                                <p>Email<span>*</span></p>
								<input type="text" name="email" <?php echo 'value="' . $ab6 . '"'; ?> disabled>
                            </div>
                            <div class="checkout__input">
                                <p>Address<span>*</span></p>
								<input type="text" name="address" <?php echo 'value="' . $ab4 . '"'; ?> disabled>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Contact Number<span>*</span></p>
                                        
										<input type="text" name="contact_number" <?php echo 'value="' . $ab3 . '"'; ?> disabled>
                                    </div>
                                </div>
                            
                            </div>
							
							<div class="checkout__input">
                                <p>Last Login<span>*</span></p>
								<input type="text" name="last_login" <?php echo 'value="' . $ab5 . '"'; ?> disabled>
                            </div>
                            
                            
                            <div class="checkout__input">
                                <p>Account Password<span>*</span></p>
                                <input type="password" name="password" value="********" disabled>
                            </div>
						
						</div>
						
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	

	
	
	
	


	
	
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    </body>
	</html>
	
	
	<script>
	
	$(document).ready(function(){
		$(".delete_link").on('click',function(){
			
			
			var id = $(this).attr("rel");
			var delete_url = "approved_post.php?delete="+ id +" ";
			
			$(".modal_delete_link").attr("href",delete_url);
			$("#myModal").modal('show');
		});
		
	});
	
	
	
	
	
	</script>
	