<?php include "./inc/head.php" ; ?>


<div class="container">
	<div class="row">
		<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
			<div class="card card-signin my-5">
				<div class="card-body"> <!-- registrace se -->
					<h5 class="card-title text-center">Registrace nového uživatele</h5>
				<!--                           formulář                          -->
				<form class="form-signin" action="registrace.php" method="post">
					<div class="form-label-group">
						<input type="name" id="name" class="form-control" placeholder="Jméno" required autofocus>
						<label for="name">Jméno</label>
					</div>

					<div class="form-label-group">
						<input type="surname" id="surname" class="form-control" placeholder="Příjmení" required >
						<label for="surname">Příjmení</label>
					</div>
			  
					<div class="form-label-group">
						<input type="phoneNum" id="phoneNum" class="form-control" placeholder="Telefon" required>
						<label for="phoneNum">Telefon</label>
					</div>
			  
					<div class="form-label-group">
						<input type="email" id="email" class="form-control" placeholder="Email address" required >
						<label for="email">Email</label>
					</div>

					<div class="form-label-group">
						<input type="password" id="password" class="form-control" placeholder="Heslo" required >
						<label for="password">Heslo</label>
					</div>

					<div class="form-label-group">
						<input type="password" id="password1" class="form-control" placeholder="Heslo znovu" required >
						<label for="password1">Heslo znovu</label>
					</div>

					<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registruj</button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include "./inc/foot.php" ; ?>
