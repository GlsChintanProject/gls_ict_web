<?php
include "admin_config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<strong>Login</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="#" method="POST">
							<fieldset>
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Usuário" name="email" type="text"  required="" autofocus>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Senha" name="password" type="password" value=""  required="">
											</div>
										</div>
										<div class="form-group">
											<input type="submit"  name="sbt" class="btn btn-lg btn-primary btn-block" value="Entrar">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
                        
                        
                        <?php
                        if(isset($_REQUEST['sbt']))
                        {
                            $email = $_REQUEST['email'];
                            $password = $_REQUEST['password'];
                            
                            $qu = $sql->query("select * from login where email = '$email' and password = '$password'");
                            echo $count = mysqli_num_rows($qu);
                            
                            
                            if($count == 1)
                            {
                                $row = mysqli_fetch_assoc($qu);
                                
                                session_start();
                                
                                
                                $_SESSION['name'] = ucwords($row['name']);
                                $_SESSION['email'] = $row['email'];
                                $_SESSION['date'] = $row['date'];
                                
                                
                                header("location:index.php");
                            }
                            else{
                                echo "Invalid Login.";
                            }
                        }
                        
                        ?>
					</div>
					<div class="panel-footer ">
						Não é registrado? <a href="" onClick=""> Clique aqui </a>
					</div>
                </div>
			</div>
		</div>
	</div>