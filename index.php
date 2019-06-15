<?php include "./inc/head.php" ; ?>


<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <!-- přihlásit se -->
                    <h5 class="card-title text-center">Coolblbost</h5>
                    <form class="form-signin" action="./inc/cLog.php" method="post">
                        <div class="form-label-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div>

                        <div class="form-label-group">
                            <label for="inputPassword">Heslo</label>
                            <input type="password" name="heslo" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Zapamatuj heslo</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Přihlaš se</button>
                        <hr/>
                        <br/>
                        <a href="registrace.php" alt="zaregistruj se" class="btn btn-lg btn-primary btn-block text-uppercase">Registruj se</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "./inc/foot.php" ; ?>
