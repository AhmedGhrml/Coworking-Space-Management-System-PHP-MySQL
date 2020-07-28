<?php
include('includes/config.php');
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$profession=$_POST['profession'];




$notitype='Open Space';
$reciver='Admin';
$sender=$email;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
$status='1';
$sql ="INSERT INTO privatedesk(name,profession,email,mobile,status) VALUES(:name, :profession, :email, :mobileno,'0')";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':profession', $profession, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobileno', $mobileno, PDO::PARAM_STR);




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
                        <img src="hsorigine.png"style="height:250px;width:200px; margin-left:310px"/>
						<h1 class="text-center text-bold mt-2x">Reservation Private Desks</h1>
                        <div class="hr-dashed"></div>
						<div class="well row pt-2x pb-3x bk-light text-center">
                         <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
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
                            <label class="col-sm-1 control-label">profession<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="text" name="profession" class="form-control" required>

                            </div>

                            <label class="col-sm-1 control-label">Phone<span style="color:red">*</span></label>
                            <div class="col-sm-5">
                            <input type="number" name="mobileno" class="form-control" maxlength="8" required >
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
<?php