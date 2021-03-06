<?php 
include "./inc/head.php" ;

if ( isset($_GET['lang']) ) {
	if ($_GET['lang'] == "de") {
		$_SESSION['lng'] = "de";
	} elseif ($_GET['lang'] == "eng") {
		$_SESSION['lng'] = "eng";
	} elseif ($_GET['lang'] == "cz") {
		$_SESSION['lng'] = "cz";
	}
} else {
	$_SESSION['lng'] = "cz";
}

include "./lng/lang.php";

?>


<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <!-- přihlásit se -->
					<div class="row">
						<div class="col">
							<h5 class="card-title text-left bold"><a href="../" ><?php echo $APP_NAME ?></a></h5>
						</div>
						<div class="col text-right ">
							<div class="btn-group " role="group">
								<button id="language" type="button" class="btn btn-outline-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expandable="false">
									<?php echo $JAZYK ?>
								</button>
								<div class="dropdown-menu" aria-labelledby="language">
									<a class="dropdown-item" href="index.php?lang=de">de</a> <!-- $lng = "de" ??? -->
									<a class="dropdown-item" href="index.php?lang=eng">eng</a>
									<a class="dropdown-item" href="index.php?lang=cz">cz</a>
								</div>
							</div>
						</div>
					</div>
                    <form class="form-signin" action="./inc/cLog.php" method="post">
                        <div class="form-label-group">
							<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                            <label for="inputEmail"><?php echo $EMAIL ?></label>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="heslo" id="inputPassword" class="form-control" placeholder="Password" required>
                            <label for="inputPassword"><?php echo $HESLO ?></label>
                        </div>

<!--                         <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Zapamatuj heslo</label>
                        </div>
 -->
						<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"><?php echo $PRIHLASIT ?></button>
                        <hr/>
                        <br/>
                        <a href="registrace.php" alt="zaregistruj se" class="btn btn-lg btn-primary btn-block text-uppercase"><?php echo $REGISTRACE ?></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 


include "./inc/foot.php" ; 

?>
