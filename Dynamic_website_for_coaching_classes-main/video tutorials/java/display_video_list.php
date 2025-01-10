<?php 

include 'conn.inc.php';
include "../../admin/includes/navbar.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.mycard
	{
		transition: all 0.9s ease;
	}

	.mycard:hover
	{
		transform: scale(1.05);
	}

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">Kale Coaching Classes</a>
  <a class="nav-link text-white" href="../..//index.php">Home</a>
  <a class="nav-link text-white" href="display_video_courses.php">Back<span class="sr-only">(current)</span></a>
</nav>


</head>
<body>

<br><br><br>
	<div class="container-fluid position-relative">
<center style="height: 50px; background-color: #2f86de; "><p class="text-white h3" style="" >Watch <?php echo $_GET['course_name']; ?> lectures online</p></center><br><br>

		<div class="row">
			

<?php 

		$course_name=$_GET['course_name'];
			$q="select * from videos where course_name='$course_name'";
			//echo $course_name;
			$query=mysqli_query($con,$q);
			while ($row=mysqli_fetch_array($query))
		 {

		 	?> 
		 	<div class="col-md-3">
				<div class="card shadow mycard" style="width: 15rem; height: 10rem; margin-left: 40px;">
		 	<div class="inner">                                                  <!--  to zoom in and zoom out effect -->
						<img class="card-img-top " style="height: 12rem; "   src=../../uploadimg/thumbnail/<?php echo $row['video_image']; ?> alt="Card image cap">
				</div>
  
				  <div class="card-body shadow" style="background-color: #f1f1f1;">
				   <!--  <h5 class="card-title"><?php echo $row['course_name']; ?></h5> -->
				    <p class="card-text"><?php echo $row['video_name']; ?></p> 
				    <a href="java_videos.php?video_id=<?php echo $row['video_id'] ?>&course_name=<?php echo $row['course_name'] ?>" class="btn btn-primary border-0 ">watch videos</a>
				  </div>
					</div><br><br><br><br><br><br><br><br><br>

				</div>

			
			<?php } ?>     <!--  while loop closed -->
			
		</div>
		

	</div>
</body>
</html>