<?php
session_start();
include('includes/config.php');


if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$mobileno=$_POST['mobileno'];
$heurea=$_POST['heurea'];
$heured=$_POST['heured'];



$notitype='Open Space';
$reciver='Admin';
$sender=$name;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
$status='1';
$sql ="INSERT INTO openspace(name,email,gender, mobile,heurea,heured,status) VALUES(:name, :email, :gender, :mobileno,:heurea,:heured,'0')";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':gender', $gender, PDO::PARAM_STR);
$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
$query-> bindParam(':heurea', $heurea, PDO::PARAM_STR);
$query-> bindParam(':heured', $heured, PDO::PARAM_STR);



$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Reservation fait avec succés!Veuillez nous faire rendez vous avant 30min de reservation ou vcette derniere sera annulée');</script>";
echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>

<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	
	<link rel="stylesheet" href="css2/font-awesome.min.css">
	<link rel="stylesheet" href="css2/bootstrap.min.css">
	<link rel="stylesheet" href="css2/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css2/bootstrap-social.css">
	<link rel="stylesheet" href="css2/bootstrap-select.css">
	<link rel="stylesheet" href="css2/fileinput.min.css">
	<link rel="stylesheet" href="css2/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css2/style.css">
    <script type="text/javascript">

	
        
</script>
</head>

<body>
	<div class="login-page bk-img">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>&emsp;<a href="index.php">Retour vers l'accueil</a>
                    <img src="hsorigine.png"style="height:200px;width:180px display: block; margin-left: 330px; margin-right: auto;"/>

						<h1 class="text-center text-bold mt-2x">Reservation Open Space</h1>
                        <div class="hr-dashed">
                        </div>
						<div class="well row pt-2x pb-3x bk-light text-center">
                        
                         <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                         <?php echo "places disponible : ". $_SESSION['places'] ." places" ?>
                         <br>
                         <br>
                         <br>
                         <br>
                         <br>
                         <br>
                            <div class="form-group">
                            <label class="col-sm-1 control-label">Nom et Prénom<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" required>
                            </div>
                            <label class="col-sm-1 control-label">Email<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="email" name="email" class="form-control" required>
                            </div>
                            </div>

                            

                             <div class="form-group">
                            <label class="col-sm-1 control-label">Type<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <select name="gender" class="form-control" required>
                            <option value="">Select</option>
                            <option value="Professional">Professional</option>
                            <option value="Student">Student</option>
                            </select>
                            </div>

                            <label class="col-sm-1 control-label">Phone<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="number" name="mobileno" class="form-control" required>
                            </div>
                            </div>

							<div class="form-group">
                            <label class="col-sm-1 control-label">Heure d'arrivée<span style="color:red">*</span></label>
                            <div class="col-sm-5">
							<div class="input-group date" id="datetimepicker3">
                            <input type="time" class="form-control" name="heured" />
                            </div>
							</div>
							
							<div class="form-group">
                            <label class="col-sm-1 control-label">Heure d'arrivée<span style="color:red">*</span></label>
                            <div class="col-sm-5">
							<div class="input-group date" id="datetimepicker3">
                            <input type="time" class="form-control" name="heurea" />
                            </div>
                            </div>
                            </div>

                            
                            

								<br>
                                <button class="btn btn-primary" name="submit" type="submit">Réserver</button>
                                </form>
                                <br>
                                <br>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
    <script src="https://use.fontawesome.com/cda09d27a1.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
            });
        </script>

</body>
</html>