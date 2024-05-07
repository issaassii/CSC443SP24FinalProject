<?php
session_start();
  if (!isset($_SESSION["email"])) {
	header('Location: login.php');
	exit();
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	

	<!-- Bootstrap core CSS -->
	<link href="../fe/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<!-- Additional CSS Files -->
	<link rel="stylesheet" href="../fe/assets/css/fontawesome.css">
	<link rel="stylesheet" href="../fe/assets/css/templatemo-lugx-gaming.css">
	<link rel="stylesheet" href="../fe/assets/css/owl.css">
	<link rel="stylesheet" href="../fe/assets/css/animate.css">
	<link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
	<div class="preloader-inner">
	  <span class="dot"></span>
	  <div class="dots">
		<span></span>
		<span></span>
		<span></span>
	  </div>
	</div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include_once '../be/common/nav.php'?>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
	<div class="container">
	  <div class="row">
		<div class="col-lg-12 align-self-center">
		  <div class="caption header-text">
			<h6></h6>
			<h2>Manage Books</h2>
		  </div>
		  <div>
			<table class="table table-light">
				<thead>
				  <tr>
					<th scope="col">ID</th>
					<th scope="col">Book</th>
					<th scope="col">Description</th>
					<th scope="col">Active</th>
					<th scope="col">Actions</th>
				  </tr>
				</thead>
				<tbody>
				<?php 
					include '../be/dbconnect.php';

					$sql = "Select * from books"; 
					$result = mysqli_query($conn, $sql);
					while ($row = $result->fetch_assoc()) {
						echo '
						<tr>
							<th scope="row">'.$row['id'].'</th>
							<td>'.$row['book'].'</td>
							<td>'.$row['description'].'</td>
							<td>'.$row['is_active'].'</td>
							<td>';
							if($row['is_active']=="0") {
							  echo '<a href="../be/active.php?id='.$row['id'].'" class="btn btn-success btn-sm">Set Active</a>';
							} else {
							  echo '<a href="../be/inactive.php?id='.$row['id'].'" class="btn btn-danger btn-sm">Set Inactive</a>';
							}; 
						echo '
							</td>
						</tr>
						';
					}
				?>
				</tbody>
			</table>
		</div>
			<div>
			<div class="caption header-text">
				<h2>Add New Book</h2>
		  	</div>
			  <form id="contact-form" action="../be/addbook.php" method="post">
				<div class="container">
				  <div class="row">
					<div class="col">
					  <div class="form-group">
					  	<input class="form-control" type="surname" name="adminaddbook" id="surname" placeholder="Book Name" required>
                      </div>
					</div>
					<div class="col">
                    <div class="form-group">
					  <input class="form-control" type="text" name="adminadddesc" id="email" placeholder="Description" required>
                    </div>
					</div>
					<div class="col">
					  <button type="submit" id="form-submit" class="btn btn-light">Submit</button>
					</div>
				  </div>
				</div>
			  </form>
		  </div>
		</div>
	   
	  </div>
	</div>
  </div>
  
  <footer>
	<div class="container">
	  <div class="col-lg-12">
		<p>Copyright © 2048 Book Club Company. All rights reserved. &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
	  </div>
	</div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="../fe/vendor/jquery/jquery.min.js"></script>
  <script src="../fe/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../fe/assets/js/isotope.min.js"></script>
  <script src="../fe/assets/js/owl-carousel.js"></script>
  <script src="../fe/assets/js/counter.js"></script>
  <script src="../fe/assets/js/custom.js"></script>

  </body>
</html>