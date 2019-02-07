<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Core CSS -->
    <link href="./view/assets/css/bootstrap.css" rel="stylesheet">
    <link href="./view/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="./view/assets/css/login.css" rel="stylesheet">

    <!-- Checkboxes style -->
    <link href="./view/assets/css/bootstrap-checkbox.css" rel="stylesheet">
</head>

<body class="bg">


<div class="bg">
<div class="container mt-5">
	<div class="row pt-5 justify-content-center align-items-center">
				
						
		<div class="card">
			<h4 class="card-header">Login</h4>
           
			<div class="card-body">
                    	
                        <form data-toggle="validator" role="form" method="post" action="/admin/index.php">
								
								<div class="row">	
									<div class="col-md-12">    
									    <div class="form-group">
									        <label>User name</label>
									        <div class="input-group">
									        <div class="input-group-prepend">
										    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
										</div>
									  <input type="text" class="form-control" name="login"  value="">
									</div>								

									</div>
									</div>
                                </div>
								
								<div class="row">								
									<div class="col-md-12">
									<div class="form-group">
									<label>Password</label>
									<div class="input-group">
										<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock" aria-hidden="true"></i></span>
										</div>
										<input type="password" id="inputPassword"  name="password" class="form-control" >
									</div>	

									</div>
									</div>
								</div>
								

								
                                <div class="row">
									<div class="col-md-12">

									<input type="submit"  name="btnLogin" class="btn btn-primary btn-lg btn-block" value="Login" name="submit">
									</div>
								</div>
                        </form>

                        <div class="clear"></div>
            
			</div>	
			
		</div>	
		
	</div>	
</div>
</div>


	



</body></html>