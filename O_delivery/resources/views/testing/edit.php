<?php ob_start(); ?>
<?php include "include\db.php"?>
<!DOCTYPE html>
<html lang="en">

<?php include "include\head.php"?>


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
                            ADD
                            <small>approved data</small>
                        </h1>
						
						<div class = "col-xs-12">
                                <form action = "<?php echo $_SERVER['PHP_SELF'] ?>" method = "post" enctype="multipart/form-data">
                                <div class = "form-group">
                                <lable for ="cat-title">Product Name</lable>
                                <input type = "text" class = "form-control" name = "Product_Name">
                                </div>
								<div class = "form-group">
                                <lable for ="cat-title">Product price</lable>
                                <input type = "text" class = "form-control" name = "Product_Price">
                                </div>
								<div class = "form-group">
                                <lable for ="cat-title">Add Category ID</lable>
                                <input type = "text" class = "form-control" name = "Product_Category">
                                </div>
								<div class = "form-group">
                                <lable for ="cat-title">Product image</lable>
                                <input type = "file" name = "Product_image">
                                </div>
                                <div class = "form-group">
                                <input class = "btn btn-primary" type = "submit" name = "Approve" value = "Approve">
                                </div>
								</form>
																						
                            
                 </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	
	<?php 

	if(isset($_POST['Approve']))
	{
		$file = $_FILES["Product_image"]["name"];
		$file_temp = $_FILES["Product_image"]["tmp_name"];
		$Product_Name = $_POST['Product_Name'];
		$Product_Price = $_POST['Product_Price'];
		$Product_Category = $_POST['Product_Category'];
		
		move_uploaded_file($file_temp,"image/$file");
		

		$query = "INSERT INTO approved_item(category_ID,product_name,market_price,poduct_image) VALUE('{$Product_Category}','{$Product_Name}','{$Product_Price}','{$file}')";

		$query_run = mysqli_query($con,$query);

		if($query_run)
		{
			echo '<script type="text/javascript"> alert("Request Successfully") </script>';
		}
		else
		{
			echo '<script type="text/javascript"> alert("Request Failed") </script>';
		}
	}

?>
	
	
	
	
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    </body>
	</html>