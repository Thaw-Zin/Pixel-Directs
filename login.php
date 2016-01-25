<?php 
	if (!empty($_POST))
	{
		$email = $_POST['email'];
		$pwd = $_POST['password'];
		if($email=="admin@gmail.com" && $pwd=="admin123")
		{
			echo "hi";
			header("Location: home.php");
		}
		else
		{
			echo "error";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login</title> 
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script> 
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
	*{margin:0;padding:0;}

	body{
	  background:#567;
	  font-family:'Open Sans',sans-serif;
	}
	#login{
	  width:400px;
	  margin:60px auto;
	  margin-bottom:2%;
	  transition:opacity 1s;
	  -webkit-transition:opacity 1s;
	}
	#login h1{
	  background:#3399cc;
	  padding:20px 0;
	  font-size:180%;
	  font-weight:400;
	  text-align:center;
	  color:#fff;
	  margin-bottom:0;
	}
	form{
	  background:#f0f0f0;
	  padding:6% 4%;
	}
	input[type="email"],input[type="password"]{
	  width:100%;
	  background:#fff;
	  margin-bottom:4%;
	  border:1px solid #ccc;
	  padding:3.5%;
	  font-family:'Open Sans',sans-serif;
	  font-size:95%;
	  color:#555;
	}
	input[type="submit"]{
	  width:100%;
	  background:#3399cc;
	  border:0;
	  padding:3.5%;
	  font-family:'Open Sans',sans-serif;
	  font-size:100%;
	  color:#fff;
	  cursor:pointer;
	  transition:background .3s;
	  -webkit-transition:background .3s;
	}
	input[type="submit"]:hover{
	  background:#2288bb;
	}
    </style>
</head>

<body>
    <div class="container">
        <div id="login">
            <h1>PIXEL DIRECTS</h1>
            <form action="index.php" method="post">
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <input type="submit" value="Log In" />
            </form>
        </div>
    </div>
</body>

</html>
