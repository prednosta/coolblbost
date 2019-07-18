<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
    Nová zakázka</button>

<?php
include_once "./inc/conn.php";

$seznam_zakazek = "SELECT * FROM zakazky ORDER BY id";
$dotaz_sezn_zakakazek = $conn->query($seznam_zakazek);

if ( $dotaz_sezn_zakakazek -> num_rows > 0 ) {
?>

<div class="row">

    <div class="col-auto">
        <b>Číslo zakázky</b>
    </div>
    <div class="col col-auto">
        <b>Datum vytvoření</b>
    </div>
    <div class="col col-auto">
        <b>Maximální cena</b>
    </div>
    <div class="col col-auto">
        <b>Popis</b>
    </div>
</div>
<?php

	$suda = 0; // sudy/lichy radek
	while ( $radek = $dotaz_sezn_zakakazek->fetch_assoc() ) { //vypis zakazniku

		echo "<div class='row '"?> <?php if ($radek['id'] % 2 ) echo "style='background-color: #dfdfdf'"; ?> <?php echo " >";
			echo "<div class='col col-auto'>" . $radek['id'] . "</div>";
			echo "<div class='col-2 col-auto'>" . $radek['datum_vytvoreni'] . "</div>";
			echo "<div class='col col-auto'>" . $radek['max_cena'] . "</div>";
			echo "<div class='col col-auto'>" . $radek['popis'] . "</div>";
			echo "<div class='col float-right'><a href='zakazky.php?upravit=" . $radek['id'] . "#editCustomer'  data-toggle='modal' data-target='#editCustomer'>upravit</a></div>";
		echo "</div>";
	}
} else {
	echo "přidej nějakou zakázku";
	}

?>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nová zakázka</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<div class="form-group">
						<label for="cislo_zakazky">Číslo zakázky</label>
						<input type="text" class="form-control" id="cislo_zakazky" placeholder="1">
					</div>
                    <div class="form-group">
                        <label for="datum_vytvoreni">Datum vytvoření</label>
                        <input type="date" class="form-control" id="datum_vytvoreni" aria-describedby="datum_vytvoreni">
                    </div>
					<div class="form-group">
                        <label for="max_cena">Maximální cena</label>
                        <input type="text" class="form-control" id="max_cena" aria-describedby="max_cena">
                    </div>
                    <div class="form-group">
                        <label for="popis">Popis</label>
                        <textarea class="form-control" rows="7" id="popis" placeholder="popis"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Odeslat</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
                <button type="button" class="btn btn-primary">Uložit</button>
            </div>
        </div>
    </div>
</div>
