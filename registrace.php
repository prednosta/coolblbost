<?php
include "./inc/head.php" ;

?>

<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body"> <!-- registrace se -->
					<h5 class="card-title text-center">Registrace nového uživatele</h5>
				<!--                           formulář                          -->
				<form class="form-signin" action="./inc/conn.php" method="post">
					<div class="form-label-group">
						<label for="name">Jméno</label>
						<input type="text" name="jmeno" id="name" class="form-control" placeholder="Jméno" required autofocus>
					</div>

					<div class="form-label-group">
						<label for="surname">Příjmení</label>
						<input type="text" name="prijmeni" id="surname" class="form-control" placeholder="Příjmení" required >
					</div>
			  
					<div class="form-label-group">
						<label for="phoneNum">Telefon</label>
						<input type="phoneNum" name="telefon" id="phoneNum" class="form-control" placeholder="Telefon" required>
					</div>
			  
					<div class="form-label-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="Email address" required >
					</div>

					<div class="form-label-group">
						<label for="password">Heslo</label>
						<input type="password" name="heslo0" id="password" class="form-control" placeholder="Heslo" required >
						<input type="password" name="heslo1" id="password1" class="form-control" placeholder="Heslo znovu" required >
					
					</div>

					<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registruj</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php

include "./inc/foot.php" ; ?>
