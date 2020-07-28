<?php
include('includes/config.php');
if(isset($_POST['submit']))
{


$name=$_POST['name'];
$type=$_POST['type'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$nbp=$_POST['nbp'];
$cafe=$_POST['cafe'];
$cmt=$_POST['cmt'];



$notitype='Reservation meeting/training';
$reciver='Admin';
$sender=$name;

$sqlnoti="insert into notification (notiuser,notireciver,notitype) values (:notiuser,:notireciver,:notitype)";
$querynoti = $dbh->prepare($sqlnoti);
$querynoti-> bindParam(':notiuser', $sender, PDO::PARAM_STR);
$querynoti-> bindParam(':notireciver',$reciver, PDO::PARAM_STR);
$querynoti-> bindParam(':notitype', $notitype, PDO::PARAM_STR);
$querynoti->execute();    
    
$sql ="INSERT INTO trainingmeeting(name,mobile,email,type,nbp,cafe,comt,status) VALUES(:name, :mobile, :email, :type, :nbp, :cafe, :cmt,'0')";
$query= $dbh -> prepare($sql);
$query-> bindParam(':name', $name, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':type', $type, PDO::PARAM_STR);
$query-> bindParam(':nbp', $nbp, PDO::PARAM_STR);
$query-> bindParam(':cafe', $cafe, PDO::PARAM_STR);
$query-> bindParam(':cmt', $cmt, PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script type='text/javascript'>alert('Registration Sucessfull!');</script>";
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
                        <img src="hsorigine.png"style="height:250px;width:200px; margin-left:300px"/>
						<h1 class="text-center text-bold mt-2x">Reservation : Meeting/Training</h1>
                        <div class="hr-dashed"></div>
						<div class="well row pt-2x pb-3x bk-light text-center">
                         <form method="post" class="form-horizontal" enctype="multipart/form-data" name="regform" onSubmit="return validate();">
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Nom résponsable / association<span style="color:red">*</span></label>
                            <div class="col-sm-3">
                            <input type="text" name="name" class="form-control" required>
                            </div>
                            
                            <label class="col-sm-3 control-label">Type<span style="color:red">*</span></label>
                            <div class="col-sm-3">
                            <select name="type" class="form-control" required>
                            <option value="">Choisir</option>
                            <option value="Reunion">Réunion</option>
                            <option value="Formation">Formation</option>
                            </select>
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-sm-2 control-label">Numero telephone<span style="color:red">*</span></label>
                            <div class="col-sm-3">
                            <input type="number" name="mobile" class="form-control"  required >
                            </div>

                            <label class="col-sm-3 control-label" style=>Nombre<span style="color:red">*</span></label>
                            <div class="col-sm-3">
                            <input type="number" name="nbp" class="form-control" required>
                            </div>
                            </div>
                            

                            
                            

                             <div class="form-group">
                            <label class="col-sm-2 control-label">Email<span style="color:red">*</span></label>
                            <div class="col-sm-3">
                            <input type="email" name="email" class="form-control" required>
                            </div>
                            
                           

                            <label class="col-sm-3 control-label">Café<span style="color:red">*</span></label>
                            <div class="col-sm-3">
                            <select name="cafe" class="form-control" required>
                            <option value="">Choisir</option>
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                            </select>                            
                            </div>
                            <br>
                            <div class="form-group">
                            <br>
                            <br>
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" rows="5" name="cmt" placeholder="Dans le cas de formation , veuillez indiquer le nature de formation et le prix de chaque participant"></textarea>
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

</body>
</html>