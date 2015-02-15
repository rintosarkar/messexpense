<!DOCTYPE html>
<html lang="en">
<head>
	<title>Our Mess Expense</title>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/me-custom.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<script src="js/jquery.js"></script>
	<script>
	$(document).ready(function(){
		if($('#meBTN').click(function(){
			var mmName = $('#mmName').val();
			var meDate = $('#meDate').val();
			var mepName = $('#mepName').val();
			var mepPrice = $('#mepPrice').val();
			var meSubmit =$('#meBTN').val();
			// alert(mmName + meDate + mepName + mepPrice);

			$.post('classes/valuesInsert.php',{
				mmName:mmName,
				meDate:meDate,
				mepName:mepName,
				mepPrice:mepPrice,
				meSubmit:meSubmit
			},
			function(result){
				alert(mepPrice);
				alert(result);

			})
		}));
		
	});
	</script>
</head>
<body>
	<div class="me-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>Our Mess Expenses</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="me-left">
					<h1>this is left side</h1>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="me-right">
					<h1>this is right side</h1>
					<form action="" class="form-horizontal" method="post">
						<div class="form-group">
							<label for="name" class="control-label col-xs-2">Name</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="mmName" id="mmName" placeholder="Mess Member Name">
							</div>
						</div>
						<div class="form-group">
							<label for="date" class="control-label col-xs-2">Date</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="meDate" id="meDate">
							</div>
						</div>
						<div class="form-group">
							<label for="product" class="control-label col-xs-2">Products Name</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="mepName" id="mepName" placeholder="Products Name">
							</div>
						</div>
						<div class="form-group">
							<label for="pp" class="control-label col-xs-2">Products Price</label>
							<div class="col-xs-10">
								<input type="text" class="form-control" name="mepPrice" id="mepPrice" placeholder="Products Price">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-offset-2 col-xs-10">
							<button type="button" name="meBTN" id="meBTN" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="me-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1>This is footer</h1>
				</div>
			</div>
		</div>
	</div>
	
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
</body>
</html>