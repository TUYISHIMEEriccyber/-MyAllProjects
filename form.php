<?php
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$registration = $_POST['registration'];
$college = $_POST['college'];
$gender = $_POST['gender'];
$sponsor = $_POST['sponsor'];
if (!empty($name) || !empty($username) || !empty($password) || !empty($registration) || !empty($college) || !empty($gender) || !empty($sponsor)){
$host = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbname = "form";
$conn = new mysqli($host, $dbUsername, $dbpassword, $dbname);
if (mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
	
}
else{
	$SELECT = "SELECT myform.name, myform.username, myform.password, myform.registration, myform.college, myform.gender, myform.sponsor From myform Where myform.name = ? OR myform.username = ? OR myform.password = ? OR myform.registration = ? OR myform.college = ? OR myform.gender = ? OR myform.sponsor = ?";
	$INSERT = "INSERT Into myform (name,username,password,registration,college,gender,sponsor) values(?,?,?,?,?,?,?)";
	$stmt = $conn->prepare($SELECT);
	
	$stmt->bind_param("sssisss",$name, $username, $password, $registration, $college, $gender, $sponsor);
	$stmt->execute();
	$stmt->bind_result($name, $username, $password, $registration, $college, $gender, $sponsor);
	$stmt->store_result();
	$rnum = $stmt->num_rows;
	
	
	if ($rnum==0){
		$stmt->close();
		
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sssisss",$name, $username, $password, $registration, $college, $gender, $sponsor);
		$stmt->execute();
		echo "Thank You for Your Registration!!";
		
	}
	else{
				$stmt->close();
		
		$stmt = $conn->prepare($INSERT);
		$stmt->bind_param("sssisss",$name, $username, $password, $registration, $college, $gender, $sponsor);
		$stmt->execute();
		echo "Thank You for Your Registration";
	}
	$stmt->close();
	$conn->close();
}
	
}
else{
	echo "All fields are arequired";
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body bgcolor="lime">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        .button{
            width: 100px;
            height: 38px;
            border-radius:35px;
            font-size: 25px;
            font-family: sans-serif;
            background-color: darkgrey;
        }
        .button:hover{
            background-color: blueviolet;
            cursor: pointer;
        }
        .search{
            width: 490px;
            background-color: azure;
            height: 38px;
            border-radius: 35px;
            font-size: 25px;
            text-align: left;
        }
        li{
            float: left;
        }
        li a{
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 24px;
        }
        li a img{
            background-color: lime;
        }
        li a:hover,.dropdown:hover .dropbtn{
            background-color: red;
        }
        li.dropdown{
            display: inline-block;
        }
        .dropdown-content{
            display: none;
            position: absolute;
            background-color: coral;
            min-width: 160px;
            box-shadow: 0px 8px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover{
            background-color: yellowgreen;
        }
        .dropdown:hover .dropdown-content{
            display: block;
        }



        li a:hover,.dropdown2:hover .dropbtn2{
            background-color: red;
        }
        li.dropdown2{
            display: inline-block;
        }
        .dropdown-content2{
            display: none;
            position: absolute;
            background-color: lightcoral;
            min-width: 160px;
            box-shadow: 0px 8px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content2 a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content2 a:hover{
            background-color: #f1f1f1;
        }
        .dropdown2:hover .dropdown-content2{
            display: block;
        }


        li a:hover,.dropdown2:hover .dropbtn2{
            background-color: red;
        }
        li.dropdown2{
            display: inline-block;
        }
        .dropdown-content2{
            display: none;
            position: absolute;
            background-color: lightcoral;
            min-width: 160px;
            box-shadow: 0px 8px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content2 a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content2 a:hover{
            background-color: #f1f1f1;
        }
        .dropdown2:hover .dropdown-content2{
            display: block;
        }



        li a:hover,.dropdown3:hover .dropbtn3{
            background-color: red;
        }
        li.dropdown3{
            display: inline-block;
        }
        .dropdown-content3{
            display: none;
            position: absolute;
            background-color: yellow;
            min-width: 160px;
            box-shadow: 0px 8px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content3 a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content3 a:hover{
            background-color: #f1f1f1;
        }
        .dropdown3:hover .dropdown-content3{
            display: block;
        }


        li a:hover,.dropdown3:hover .dropbtn3{
            background-color: red;
        }
        li.dropdown3{
            display: inline-block;
        }
        .dropdown-content3{
            display: none;
            position: absolute;
            background-color: blueviolet;
            min-width: 160px;
            box-shadow: 0px 8px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content3 a{
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content3 a:hover{
            background-color: #f1f1f1;
        }
        .dropdown3:hover .dropdown-content3{
            display: block;
        }
    </style>
</head>
<body>
<ul>
    <li class="dropdown2"> <a class="dropbtn2" href="#Home">Proofs</a>
        <div class="dropdown-content2">
            <a href="#">Testimonial</a>
            <a href="#">Our Sites</a>
            <a href="#">Visit Us</a>
        </div>
    </li>
    <li class="dropdown"><a class="dropbtn">News</a>
        <div class="dropdown-content">
            <a href="#">Updated News</a>
            <a href="#">Books</a>
            <a href="#">Courses</a>
        </div> </li>
    <li class="dropdown3"><a class="dropbtn3" href="#Contact">Contact</a>
        <div class="dropdown-content3">
            <a href="#">Telephone</a>
            <a href="mailto:erictuyishime574@gmail.com">E-mail</a>
            <a href="#">Other Way</a>
        </div>
    </li>
    <li class="dropdown3"><a class="dropbtn3" href="#About">About</a>
        <div class="dropdown-content3">
            <a href="#">Our Services</a>
            <a href="#">Who We Are</a>
            <a href="#">Find Us</a>
        </div>
    </li>
    <li><a href="home.html">Home</a> </li>
    <input type="text" name="search" size="40" placeholder="Search for training type" height="80" class="search" oninput="openMenu()"><input type="submit" class="button" name="search" value="Search">
</ul>

</body>
</html>
<form action="form.php" method="post">
    <center>
        <h1><b>Please fill Registration form</b></h1>
        <p>Student name:  <input type="text" name="name" size="20" placeholder="Your full names" required></p>
        <p>Username : <input type="text" name="username" size="20" placeholder="your username" required></p>
        <p>Password : <input type="password" name="password" size="20" placeholder="your password" required></p>
        <p> Registration No : <input type="text" name="registration" size="20" placeholder="your reg number" required> </p>
        <p> College : <input type="text" name="college" size="20" placeholder="your college" required></p>
        <p>Gender : <input type="radio" name="gender" value="Male" required>MALE &nbsp;&nbsp;<input type="radio" name="gender" value="Female" required>FEMALE</p>
        <p> Select Sponsor(s) <input type="radio" name="sponsor" value="SFRA" required>SFRA &nbsp;&nbsp; <input type="radio" name="sponsor" value="PRIVATE" required>PRIVATE &nbsp;&nbsp;<input type="radio" name="sponsor" value="FARG" required> FARG</p>

        <p> <input type="submit" name="submit" value="Sign Up"></p>
        <p>Already have an account? <a href="third.html">login</a> </p>
        <p><a href="home.html"> BACK HOME</a>  </p>
    </center>
</form>

</body>
</html>