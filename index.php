<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<html>
<head>
<title>BLO | Home</title>
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

	.poza{
		display: block;
  margin-left: 70px;
  margin-right: auto;
  margin-top: 110px;
		width:29%
	}

	.dropbtn {
  background-color: #3e64ff;
  color: white;
  padding: 16px;
  font-size: 20px;
  border: none;
  cursor: pointer;
}


.dropdown {
  position: absolute;
  display: inline-block;
  right:5%;
  top:2%;
}
.dropdown2 {
  position: absolute;
  display: inline-block;
  left:10%;
  top:2%;
}
.dropdown3 {
  position: absolute;
  display: inline-block;
  right:75%;
  top:2%;
}
.dropdown4 {
  position: absolute;
  display: inline-block;
  right:65%;
  top:2%;
}

.dropdown5 {
  position: absolute;
  display: inline-block;
  right:50%;
  top:2%;
}

.dropdown6 {
  position: absolute;
  display: inline-block;
  right:35%;
  top:2%;
}

.customers {
	margin-top:40px;
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
  background-color: #ecfcff;
  border-radius: 15px;
  
}

.customers td, .customers th {
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #b2fcff;  border-radius: 15px;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3e64ff;
  color: white;
  
}


.button2{

		padding: 5px;
		width: 70px;
		color: white;
		background-color: #3e64ff;
		border: none;
		border-radius: 5px;
	}
	.text2{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 40%;
	}



	</style>
</head>

<body style="background-size:100%;background-image:url(om_bg.png)">

<div class="grid-container">
	<div class="container_logo"><img src="T.png"></a>
	</div>

	<div class="container">
</div>
</div>


<div class="dropdown">
<a href="logout.php"><button class="dropbtn">Logout</button></a>
</div>

<div class="dropdown2">
<a href="index.php"><button class="dropbtn">Home</button></a>
</div>

<div class="dropdown3">
<a href="Diagnostice.html"><button class="dropbtn">Diagnostice</button></a>
</div>

<div class="dropdown4">
<a href="Retete.php"><button class="dropbtn">Rețete</button></a>
</div>

<div class="dropdown5">
<a href="Analize.php"><button class="dropbtn">Analize de sânge</button></a>
</div>

<div class="dropdown6">
<a href="Investigatii.html"><button class="dropbtn">Alte investigații</button></a>
</div>


<table class="customers">
  <tr>
    <th>Informații vitale</th>
    <th></th>
	<th></th>
  </tr>
  <tr>
    <td>Vârsta</td>
    <td><form action= "conectare.php" method="post" style="margin-bottom:0px;">
			<input class="text2" type="text" name="user_name">
			<input class="button2" type="submit" value="Trimite">
		</form>
		</td>
	<td><?php
	$conn = mysqli_connect("localhost", "root", "", "useraccounts");
	$sql ="SELECT eritrocite from users";
	$result = $conn-> query($sql);
		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
				echo $row["eritrocite"];
			}
		
		}
	$conn-> close();
	?>
	
	</td>
  </tr>
  <tr>
    <td>Grupa sanguină</td>

    <td><form action= "conectare.php" method="post" style="margin-bottom:0px;">
			<input class="text2" type="text" name="user_name">
			<input class="button2" type="submit" value="Trimite">
		</form></td>
	<td><?php
	$conn = mysqli_connect("localhost", "root", "", "useraccounts");
	$sql ="SELECT eritrocite from users";
	$result = $conn-> query($sql);
		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
				echo $row["eritrocite"];
			}
		
		}
	$conn-> close();
	?></td>
  </tr>
  <tr>
    <td>Boli cronice</td>

    <td><form action= "conectare.php" method="post" style="margin-bottom:0px;">
			<input class="text2" type="text" name="user_name">
			<input class="button2" type="submit" value="Trimite">
		</form></td>
	<td><?php
	$conn = mysqli_connect("localhost", "root", "", "useraccounts");
	$sql ="SELECT eritrocite from users";
	$result = $conn-> query($sql);
		if($result-> num_rows > 0){
			while($row = $result-> fetch_assoc()){
				echo $row["eritrocite"];
			}
		
		}
	$conn-> close();
	?></td>
  </tr>


</table>




</body>

</html>
