<?php 
    include 'db.php';

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css" rel="stylesheet" />
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">

</head>
<body class="bg-theme bg-theme1">

    
<?php include 'header.php'?>



<!--start page wrapper -->
<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">eCommerce</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add New Product</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-light">Settings</button>
							<button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split"
								data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a
									class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div> <a class="dropdown-item"
									href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body p-4">
						<h5 class="card-title">Add New Product</h5>
						<hr />
						<div class="form-body mt-4">
							<div class="row">
								<div class="col-lg-8">
									<div class="border border-3 p-4 rounded">
										<div class="mb-3">
											<label for="inputProductTitle" class="form-label">Product Title</label>
											<input type="email" class="form-control" id="inputProductTitle"
												placeholder="Enter product title">
										</div>
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Description</label>
											<textarea class="form-control" id="inputProductDescription"
												rows="3"></textarea>
										</div>
										<div class="mb-3">
											<label for="inputProductDescription" class="form-label">Product
												Images</label>
											<input id="image-uploadify" type="file"
												accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
												multiple>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="border border-3 p-4 rounded">
										<div class="row g-3">
											<div class="col-md-6">
												<label for="inputPrice" class="form-label">Price</label>
												<input type="email" class="form-control" id="inputPrice"
													placeholder="00.00">
											</div>
											<div class="col-md-6">
												<label for="inputCompareatprice" class="form-label">Compare at
													Price</label>
												<input type="password" class="form-control" id="inputCompareatprice"
													placeholder="00.00">
											</div>
											<div class="col-md-6">
												<label for="inputCostPerPrice" class="form-label">Cost Per Price</label>
												<input type="email" class="form-control" id="inputCostPerPrice"
													placeholder="00.00">
											</div>
											<div class="col-md-6">
												<label for="inputStarPoints" class="form-label">Star Points</label>
												<input type="password" class="form-control" id="inputStarPoints"
													placeholder="00.00">
											</div>
											<div class="col-12">
												<label for="inputProductType" class="form-label">Product Type</label>
												<select class="form-select" id="inputProductType">
													<option></option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-12">
												<label for="inputVendor" class="form-label">Vendor</label>
												<select class="form-select" id="inputVendor">
													<option></option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-12">
												<label for="inputCollection" class="form-label">Collection</label>
												<select class="form-select" id="inputCollection">
													<option></option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
											</div>
											<div class="col-12">
												<label for="inputProductTags" class="form-label">Product Tags</label>
												<input type="text" class="form-control" id="inputProductTags"
													placeholder="Enter Product Tags">
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="button" class="btn btn-light">Save Product</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!--end row-->
						</div>
					</div>
				</div>

			</div>
		</div>
		<!--end page wrapper -->




<?php include 'footer.php'?>

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>


</body>
</html>