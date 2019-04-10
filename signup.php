<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "project327");
?>


<!doctype html>
<html lang="en">
  <head>




    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Signup</title>
  </head>
  <body>

    <div class="modal-dialog modal-dialog-centered text-center">
        <div class="col-sm-8 modal-container">
            <div class="modal-content">

                <div class="col-12 user-img">
                    <img src="image/avatar/smoke.png" width="100" height="100">
                </div>

                <div class="modal-body">
                    <form method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username"  placeholder="Enter username" name="username">
                            <p>Username must be between 6 - 12 charecters</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email"  placeholder="Enter email" name="email">
                            <p>Provide a proper email (EX:username@domain.example)</p>

                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="pass">
                            <p>Password must be between 6 - 12 charecters</p>
                            <!-- For php generated warning -->


                        </div>
						<div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="CPassword">

                        </div>

                        <button type="submit" class="btn btn-outline-danger" name="submit">Signup</button>
                        </div class="form-group">
                            <a href="index.php">Already have an account? Login</a>
                        </div>
                    </form>
                </div>

 <?php
if (isset($_POST['email']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pass =$_POST['pass'];
	$CPassword =$_POST['CPassword'];

	if($pass== $CPassword)
	{

		$query="INSERT INTO user VALUES ('$username','$email','$pass')";
		$result= mysqli_query($connect,$query);
		//$row = mysqli_fetch_array($result);

    if($result)
      {

         header('location:index.php');
         echo '<script type= "text/javascript"> alert ("You have registered successfully") </script>';
      }
			else
				echo '<script type= "text/javascript"> alert ("Check Again!") </script>';
	}
	else
		echo '<script type= "text/javascript"> alert ("password didn not match") </script>';
}


?>
            </div>
        </div>
    </div>



    <!--My JavaScript-->
    <script type="text/JavaScript" src="js/validation.js"></script>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
