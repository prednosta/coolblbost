<?php
include "./inc/head.php" ;

include "./lng/lang.php";

?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body"> <!-- registrace se -->
					<div class="row">
						<div class="col">
							<h5 class="card-title text-left bold"><a href="../" ><?php echo $APP_NAME ?></a></h5>
						</div>
						<div class="col">
							<h5 class="card-title text-right"><?php echo $NEW_USER_REG ?></h5>
						</div>
					</div>
				<!--                           formulář                          -->
				<form class="form-signin" action="./inc/cReg.php" method="post">
					<div class="form-label-group">
						<input type="text" name="jmeno" id="name" class="form-control" placeholder="Jméno" required autofocus>
						<label for="name"><?php echo $JMENO ?></label>
					</div>

					<div class="form-label-group">
						<input type="text" name="prijmeni" id="surname" class="form-control" placeholder="Příjmení" required >
						<label for="surname"><?php echo $PRIJMENI ?></label>
					</div>
			  
					<div class="form-label-group">
						<input type="phoneNum" name="telefon" id="phoneNum" class="form-control" placeholder="Telefon" required>
						<label for="phoneNum"><?php echo $TELEFON ?></label>
					</div>
			  
					<div class="form-label-group">
						<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required >
						<label for="email"><?php echo $EMAIL ?></label>
					</div>

					<div class="form-label-group">
						<input type="password" name="heslo0" id="password" class="form-control" placeholder="Heslo" required >
						<input type="password" name="heslo1" id="password1" class="form-control" placeholder="Heslo znovu" required >
						<label for="password"><?php echo $HESLO ?></label>
					</div>

					<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"><?php echo $REGISTRACE ?></button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php

include "./inc/foot.php" ; ?>
