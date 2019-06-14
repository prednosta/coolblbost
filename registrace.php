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
                <input type="name" id="inputName" class="form-control" placeholder="Jméno" required autofocus>
                <label for="inputName">Jméno</label>
              </div>

              <div class="form-label-group">
                <input type="surname" id="inputSurname" class="form-control" placeholder="Příjmení" required >
                <label for="inputSurname">Příjmení</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >
                <label for="inputEmail">Email</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Telefon</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required >
                <label for="inputEmail">Heslo</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Registruj</button>
	      <hr/><br/>
	      <a href="index.php" alt="vrat se">hlavni</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php include "./inc/foot.php" ; ?>
