<?php 
   session_start();
    require_once($_SERVER['DOCUMENT_ROOT'] . '/trans/assets/database/dbconfig.php');
     if (!isset($_SESSION['general'])){
      // header(string:"Location:login.php");
      header("location:index.php");
      exit();
     }else{
      $id= $_SESSION['general'];
    
     } 
  
   // to retrieve data from table
    $sql = "SELECT * FROM user where id='$id'";
      $result= mysqli_query($conn,$sql);
                $res_fetch = mysqli_fetch_assoc($result);
                $bus_id=$res_fetch['bus_id'];
                
              
    ?>
<head>
<title>Operator Controller</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script type="text/javascript" src="F:\Programming Language Projects\Css-Bootstrap\VisitNepal2020\travelix\js\jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
</script>


</head>
<body style="background-image:url(images/visit2020/busc.jpg)">

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<!-- <div class="phone">+45 345 3324 56789</div> -->
						<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<!-- <li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li> -->
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="logout.php">Logout</a>
								<!-- <a href="#" class="btn btn-info" role="button"></a> -->
							</div>
							<div class="user_box_register user_box_link"><a href="#">Register</a>
								<!-- <div class="user_box_login user_box_link"><a href="register.html">register</a> -->
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
						<div class="logo_container">
							<div class="logo"><a href="#"><img src="" alt="">Operator</a></div>
						</div>
						<div class="main_nav_container ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index1.php">Home</a></li>
								<li class="main_nav_item"><a href="about.php">About us</a></li>
								<li class="main_nav_item"><a href="#">Operator</a></li>
								
								<li class="main_nav_item"><a href="Routes.php">Routes</a></li>
							</ul>
						</div>
						<div class="content_search ml-lg-0 ml-auto">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="17px" height="17px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
								<g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
											s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
											C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
											M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
											c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z"/>
										</g>
									</g>
									<g>
										<g>
											<path class="mag_glass" fill="#FFFFFF" d="M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
											c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
											C-2.019,484.77-2.019,497.865,6.057,505.942z"/>
										</g>
									</g>
								</g>
							</svg>
						</div>

						<form id="search_form" class="search_form bez_1">
							<input type="search" class="search_content_input bez_1">
						</form>
						
						<div class="hamburger">
							<i class="fa fa-bars trans_200"></i>
						</div>
					</div>
				</div>
			</div>	
		</nav>

	</header>
	<br><br><br><br>
	<div class="intro">
		<div class="container">
			<button class="btn btn-rounded btn-brown btn-lg btn-#4CAF50">Total Number of Seats<i class="fas  pl-1"></i></button>
			<button class="btn btn-rounded btn-brown btn-lg btn-#4CAF50">40<i class="fas  pl-1"></i></button>
			<br>
			<br>
		</div>
		<div class="container">
			<button class="btn btn-rounded btn-brown btn-lg btn-#4CAF50">Number Of Passengers<i class="fas  pl-1"></i></button>
			<br>
			<br>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				    <form  action="api.php" method="post">
					  <div class="form-group" >
					    <input style="width: 67.5%;height:45px" class="textview" name="noOfSeats" placeholder="No Of Passengers"  height="300px">
					    <button class="btn" type="submit">Submit</button>
					  </div>
					    <table  style="width: 140%; align-items: center;">
								<tr>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="1" style="height:60px;width:250px" onclick="insert(1)"/>
								    </td>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="2" style="height:60px;width:250px" onclick="insert(2)"/>
								    </td>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="3" style="height:60px;width:250px"  onclick="insert(3)"/>
								    </td>

								</tr>

								<tr>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="4" style="height:60px;width:250px"  onclick="insert(4)"/>
								    </td>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="5" style="height:60px;width:250px"  onclick="insert(5)"/>
								    </td>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="6" style="height:60px;width:250px"  onclick="insert(6)"/>
								    </td>

									<td>
									    <input type="radio" class="submit" id="flag"
									     name="add" value="1" checked="checked" style="height:35px; width:35px; vertical-align: middle;">
									    <label for="add"  style="color: yellow">Add</label>
								    </td>

								</tr>

								<tr>

								     <td style="width:280px;height:60px">
								        <input  type="button" value="7" style="height:60px;width:250px"  onclick="insert(7)"/>
								    </td>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="8" style="height:60px;width:250px"  onclick="insert(8)"/>
								    </td>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="9" style="height:60px;width:250px"  onclick="insert(9)"/>
								    </td>

								    <td>
									    <input type="radio" class="submit" id="flag"
									     name="add" value="0" style="height:35px; width:35px; vertical-align: middle;">
									    <label for="minus" style="color: yellow">Minus</label>
									</td>

								</tr>


								<tr>
								    <td style="width:280px;height:60px">
								        <input  type="button" value="0" style="height:60px;width:250px"  onclick="insert(0)"/>
								    </td>

								    <td style="width:280px;height:60px">
								        <input  type="button" value="<<" style="height:60px;width:250px"  onclick="back()"/>
								    </td>

								    <td style="width:20px;height:60px">
								        <input  type="button" value="Reached" style="height:60px;width:250px"  onclick="Reached()"/>
								    </td>

								</tr>

								<tr>

									<td>
									    <input type="radio" class="position" id="status"
									     name="status" value="0" checked="checked" style="height:35px; width:35px; vertical-align: middle;">
									    <label for="add"  style="color: yellow">Start</label>
								    </td>

								    <td>
									    <input type="radio" class="position" id="status"
									     name="status" value="2" checked="checked" style="height:35px; width:35px; vertical-align: middle;">
									    <label for="add"  style="color: yellow">Moving</label>
								    </td>

								    <td>
									    <input type="radio" class="position" id="status"
									     name="status" value="1" checked="checked" style="height:35px; width:35px; vertical-align: middle;">
									    <label for="add"  style="color: yellow">End</label>
								    </td>

								</tr>
					    </table>
					</form>    
				</div>
				
			</div>
		<!-- </div> -->
		</div>
		</div>
	</div>
</body>

<script type="text/javascript">
	$("input[value=0]").prop("checked", false);

	function insert(num){
		document.getElementsByClassName("textview").value = document.getElementsByClassName("textview").value

	}
	function back()
	{
		var exp=document.form.textview.value;
		document.form.textview.value=exp.substring(0,exp.length-1);
	}
	function Reached(){
		
	}
	function submit(){
	
	}

	
</script>
