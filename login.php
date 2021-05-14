<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			$message = TRUE;
			
		}else
		{
			$message= TRUE;
		}
	}

?>
<html>
<head>
<title>BLO | Pagina Principala</title>
<link rel="icon" type="image/png" href="logo.png">
	<style>
	
	.grid-container{
	display:grid;
	grid-template-columns:140px auto;
	grid-gap: 5px !important;
	
	}
	
	.container{
	  border-radius: 10px;
  background: #3e64ff;
  padding:2%;

}
	.container_logo{
	  border-radius: 10px;
  background: #b2fcff;
  padding:2%;
  min-width:100px;
  
	}
	img{
	width:100%;
	}
	
	
	
	.dropbtn {
  background-color: #3e64ff;
  color: white;
  padding: 8px;
  font-size: 20px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: absolute;
  display: inline-block;
  right:10%;
  top:2.7%;
  
}

.dropdown2 {
  position: absolute;
  display: inline-block;
  right:5%;
  top:2.7%;
  
}


.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown2-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown2-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #3e64ff;}

.dropdown2-content a:hover {background-color: #3e64ff;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown2:hover .dropdown2-content {
  display: block;
}


.dropdown:hover .dropbtn {
  background-color: #3e64ff;
	}
	
	.dropdown2:hover .dropbtn2 {
  background-color: #3e64ff;
	}
	
	
	.text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		border-radius:15px;
	}
	
	.text2{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
		border-radius:15px;
	}

	.button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: #3e64ff;
		border: none;
		border-radius:15px;
	}
	
	.button2{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: #3e64ff;
		border: none;
		border-radius:15px;
	}

	.box{

		background-color: #ecfcff;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	
	.box2{

		background-color: #ecfcff;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
	
	.eroare{
		width:20%;
		margin-left:auto;
		margin-right:auto;
		
	}
	
	.poza{
	margin-left:35px;
	width:60%;
	margin-top:4.8%;
	position:absolute;
	}
	

	</style>
</head>

<body style="background-image:url(DOC.png)">

<div class="grid-container">
	<div class="container_logo"><img src="T.png">
	</div>

	<div class="container">
	
</div>

<div class="dropdown" style="float:right;">
  <button class="dropbtn">Login</button>
  <div class="dropdown-content" style="right:0;">
  <div class="box">
		
		<form action="login.php" method="post">
			<div style="font-size: 20px;color: #3e64ff;">CNP</div>
			<input class="text" type="text" name="user_name"><br><br>
			<div style="font-size: 20px;color: #3e64ff;">Parola</div>
			<input class="text" type="password" name="password"><br><br>

			<input class="button" type="submit" value="Login"><br><br>
		</form>
	</div>
  </div>
</div>


<div class="dropdown2" style="float:right;">
  <button class="dropbtn">Signup</button>
  <div class="dropdown2-content" style="right:0;">


<div class="box2">
		
		<form action= "signup.php"method="post">
			<div style="font-size: 20px;color: #3e64ff;">CNP</div>
			<input class="text2" type="text" name="user_name"><br><br>
			<div style="font-size: 20px;color: #3e64ff;">Parola</div>
			<input class="text2" type="password" name="password"><br><br>

			<input class="button2" type="submit" value="Signup"><br><br>

		</form>
	</div>
	</div>
</div>
</div>

<div class="poza"><img src="w.png" >
</div>



<section style="padding-top:20px;">

<?php 
$message = "OwO!";
if($message): FALSE ?>
<div class="eroare"><img src="eroare.png"></img>
</div>
<?php endif; ?>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>




</body>
</html>