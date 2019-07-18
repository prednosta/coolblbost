<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#newCustomer">
    Nový zákazník</button>

<?php
include_once "./inc/conn.php";
/* $datum_registrace = date("j, n, Y");

$nazev_firmy = $_POST['nazev_firmy'];
$ico = $_POST['ico'];
$telefon = $_POST['telefon'];
$adresa = $_POST['adresa'];
$jednatel = $_POST['jednatel'];


$reg_zakaznika = "INSERT INTO zakaznik(nazev_firmy, ico, telefon, adresa, jednatel, datum_registrace) 
					VALUES ('$nazev_firmy', '$ico', '$telefon', '$adresa', '$jednatel', '$datum_registrace' )";
					
 */	
 
$id = isset($_GET['upravit']);
$uprava_zakaznik = "SELECT * FROM zakaznik WHERE id='$id'";
$dotaz_upr_zak = $conn->query($uprava_zakaznik);

if ( $dotaz_upr_zak -> num_rows > 0 ) {
	?> <div id='ex1' class='modal'> <?php
	while ( $radek = $dotaz_upr_zak -> fetch_assoc() ) {
		if ( $id != $radek['id'] ) {
			echo "neni co upravit!";
		} else {
			echo "<form>" ;
			echo 	"<input type='text' placeholder='" . $radek['id'] . "'></input>" ;
			echo 	"<input type='text' placeholder='" . $radek['nazev_firmy'] . "'></input>" ;
			echo 	"<input type='text' placeholder='" . $radek['ico'] . "'></input>" ;
			echo 	"<input type='text' placeholder='" . $radek['telefon'] . "'></input>" ;
			echo 	"<input type='text' placeholder='" . $radek['adresa'] . "'></input>" ;
			echo 	"<input type='text' placeholder='" . $radek['jednatel'] . "'></input>" ;
			echo 	"<input type='date' placeholder='" . $radek['datum_registrace'] . "'></input>" ;
			echo 	"<input type='submit'>" ;
			echo	"<a href='#' rel='modal:close'>zavrit</a>";
			echo "</form>";
		}
	}
	?></div><?php
}

$seznam_zakazniku = "SELECT * FROM zakaznik ORDER BY id";
$dotaz_sezn_zak = $conn->query($seznam_zakazniku);

if ( $dotaz_sezn_zak -> num_rows > 0 ) {
?>
	<div class="row">
		<div class="col col-auto">
			<b>ID</b>
		</div>
		<div class="col-2 col-auto">
			<b>Název firmy</b>	   
		</div>
		<div class="col col-auto">
			<b>IČO</b>
		</div>
		<div class="col-2 col-auto">
			<b>telefon</b>
		</div>
		<div class="col-2 col-auto">
			<b>adresa</b>
		</div>
		<div class="col col-auto">
			<b>jednatel</b>
		</div>
		<div class="col col-auto">
			<b>datum registrace</b>
		</div>
	</div>
<?php

	$suda = 0; // sudy/lichy radek
	while ( $radek = $dotaz_sezn_zak->fetch_assoc() ) { //vypis zakazniku

		echo "<div class='row '"?> <?php if ($radek['id'] % 2 ) echo "style='background-color: #dfdfdf'"; ?> <?php echo " >";
			echo "<div class='col col-auto'>" . $radek['id'] . "</div>";
			echo "<div class='col-2 col-auto'>" . $radek['nazev_firmy'] . "</div>";
			echo "<div class='col col-auto'>" . $radek['ico'] . "</div>";
			echo "<div class='col-2 col-auto'>" . $radek['telefon'] . "</div>";
			echo "<div class='col-2 col-auto'>" . $radek['adresa'] . "</div>";
			echo "<div class='col col-auto'>" . $radek['jednatel'] . "</div>";
			echo "<div class='col col-auto'>" . $radek['datum_registrace'] . "</div>";
			echo "<div class='col col-auto'><a href='zakaznici.php?upravit=" . $radek['id'] . "#editCustomer'  data-toggle='modal' data-target='#editCustomer'>upravit</a></div>";
		echo "</div>";
	}
} else {
	echo "přidej nějakého zákazníka";
	}

?>
<div class="modal fade" id="newCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nový zákazník</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editCustomer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upravit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
