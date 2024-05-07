
<?php include 'db.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'?>
</head>
<body class="bg-theme bg-theme1">

    
<?php include 'header.php'?>

<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Users</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add User</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->
				
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 border-bottom">
								<h5 class="mb-0">Add User Profile</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" method="post" novalidate enctype="multipart/form-data">
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label">First Name</label>
										<input type="text" class="form-control" id="bsValidation1" placeholder="First Name"  required name="firstname">
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									<div class="col-md-6">
										<label for="bsValidation2" class="form-label">Last Name</label>
										<input type="text" class="form-control" id="bsValidation2" placeholder="Last Name"  required name="lastname">
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
								
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label">Email</label>
										<input type="email" class="form-control" id="bsValidation4" placeholder="Email" required name="email">
										<div class="invalid-feedback">
											Please provide a valid email.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation5" class="form-label">Password</label>
										<input type="password" class="form-control" id="bsValidation5" placeholder="Password" required name="password">
										<div class="invalid-feedback">
											Please choose a password.
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-flex align-items-center gap-3">
											<div class="form-check">
												<input type="radio" class="form-check-input" id="bsValidation6" name="gender" required value="male">
												<label class="form-check-label" for="bsValidation6">Male</label>
											  </div>
											  <div class="form-check">
												<input type="radio" class="form-check-input" id="bsValidation7" name="gender" required value="female">
												<label class="form-check-label" for="bsValidation7">Female</label>
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation8" class="form-label">DOB</label>
										<input type="date" class="form-control" id="bsValidation8" placeholder="Date of Birth" required name="dob">
										<div class="invalid-feedback">
											Please select date.
										</div>
									</div>
								
									
									
									<div class="col-md-12">
										<label for="bsValidation12" class="form-label">User Profile</label>
										<input type="file" class="form-control" id="bsValidation12" placeholder="Zip" required name="image">
										<div class="invalid-feedback">
											Please enter a valid Zip code.
										</div>
									</div>

                                    


									<div class="col-md-12">
										<label for="bsValidation13" class="form-label">Address</label>
										<textarea class="form-control" id="bsValidation13" placeholder="Address ..." rows="3" required name="address"></textarea>
										<div class="invalid-feedback">
											Please enter a valid address.
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="bsValidation14" required>
											<label class="form-check-label" for="bsValidation14">Agree to terms and conditions</label>
											<div class="invalid-feedback">
												You must agree before submitting.
											  </div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-white px-4" name="submit">Submit</button>
											<button type="reset" class="btn btn-light px-4">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->

			
                <?php  

                    if(isset($_POST['submit'])){
                        $firtsname= $_POST['firstname'];
                        $lastname= $_POST['lastname'];
                        $email= $_POST['email'];
                        $password= $_POST['password'];
                        $gender= $_POST['gender'];
                        $dob= $_POST['dob'];
                        $profile= $_FILES['image']['name'];
                        $address= $_POST['address'];
                      
                        $sql="INSERT INTO `user` (`first_name`,`last_name`,`email`,`password`,`gender`,`dob`,`profile`,`address`) VALUES ('$firtsname','$lastname','$email','$password','$gender','$dob','$profile','$address')";

                        $result = mysqli_query($con, $sql);

                        if($result){
                            echo "<script>alert('User inserted successfully')</script>";
                            echo "<script>location.href='add-user.php'</script>";
                        }
                        else{
                            echo "<script>alert('Somthing wrong')";
                        }

                        $target="assets/profileimage/";

                        $file= $target.basename($_FILES['image']['name']);
                        $move= move_uploaded_file($_FILES['image']['tmp_name'],$file);
                    }
                

                ?>


			</div>
		</div>





<?php include 'footer.php'?>
<?php include 'foot.php'?>



</body>
</html>