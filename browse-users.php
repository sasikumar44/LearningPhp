
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"  prefix="og: http://ogp.me/ns#" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PHP CRUD in Bootstrap with search and pagination</title>
	
	<link rel="shortcut icon" href="https://demo.learncodeweb.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	
   	<div class="container">
		<div class="card">
			<div class="card-header"><i class="fa fa-fw fa-globe"></i> <strong>Browse User</strong> <a href="add-users.php" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a></div>
			<div class="card-body">
				
				<div class="col-sm-12">
					<h5 class="card-title"><i class="fa fa-fw fa-search"></i> Find User</h5>
					<form method="get">
						<div class="row">
							<div class="col-sm-2">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="username" id="username" class="form-control" value="" placeholder="Enter user name">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="useremail" id="useremail" class="form-control" value="<?php echo isset($_REQUEST['useremail'])?$_REQUEST['useremail']:''?>" placeholder="Enter user email">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>Phone</label>
									<input type="tel" name="userphone" id="userphone" class="form-control" value="" placeholder="Enter user phone">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<label>&nbsp;</label>
									<div>
										<button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><i class="fa fa-fw fa-search"></i> Search</button>
										<a href="" class="btn btn-danger"><i class="fa fa-fw fa-sync"></i> Clear</a>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<hr>
		
		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="bg-primary text-white">
						<th>Full Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>User Name</th>
						<th class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<td>Test</td>
						<td>Test</td>
						<td>Test</td>
						<td>Test</td>
						<td>Test</td>
						<td align="center">
							<a href="" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> | 
							<a href="" class="text-danger" onClick="return confirm('Are you sure to delete this user?');"><i class="fa fa-fw fa-trash"></i> Delete</a>
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>
		
	</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
</body>
</html>
