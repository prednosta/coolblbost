<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#novaZakazka">
    Nová zakázka</button>

<?php
include_once "./inc/conn.php";

$seznam_zakazek = "SELECT * FROM zakazky ORDER BY id";
$dotaz_sezn_zakakazek = $conn->query($seznam_zakazek);

if ( $dotaz_sezn_zakakazek -> num_rows > 0 ) {
?>

<table>
	<tr>
		<td>
			<b>Číslo zakázky</b>
		</td>
		<td>
			<b>Datum vytvoření</b>
		</td>
		<td>
			<b>Maximální cena</b>
		</td>
		<td>
			<b>Popis</b>
		</td>
		<td>
			<b>upravit</b>
		</td>
	</tr>
<?php

	$suda = 0; // sudy/lichy radek
	while ( $radek = $dotaz_sezn_zakakazek->fetch_assoc() ) { //vypis zakazniku

		echo "<tr class=' '"?> <?php if ($radek['id'] % 2 ) echo "style='background-color: #dfdfdf'"; ?> <?php echo " >";
			echo "<td>" . $radek['id'] . "</td>";
			echo "<td>" . $radek['datum_vytvoreni'] . "</td>";
			echo "<td>" . $radek['max_cena'] . "</td>";
			echo "<td>" . $radek['popis'] . "</td>";
			echo "<td><a href='zakazky.php?upravit=" . $radek['id'] . "'  data-toggle='modal' data-target='#upravZakazku'>upravit</a></td>";
		echo "</tr>";
	}
} else {
	echo "přidej nějakou zakázku";
	}

?>
</table>


<div class="modal fade" id="novaZakazka" tabindex="-1" role="dialog" aria-labelledby="novaZakazkaLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nová zakázka</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/pridatZakazku.php" method="post">
                    <div class="form-group">
                        <label for="datum_vytvoreni">Datum vytvoření</label>
                        <input type="date" class="form-control" name="datum_vytvoreni" id="datum_vytvoreni" aria-describedby="datum_vytvoreni">
                    </div>
					<div class="form-group">
                        <label for="max_cena">Maximální cena</label>
                        <input type="text" class="form-control" name="max_cena" id="max_cena" aria-describedby="max_cena">
                    </div>
                    <div class="form-group">
                        <label for="popis">Popis</label>
                        <textarea class="form-control" rows="7" name="popis" id="popis" placeholder="popis"></textarea>
                    </div>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Zavřít</button>
                    <button type="submit" class="btn btn-primary float-right" >Odeslat</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
$upravitID = "";

if ( isset ($_GET['upravit']) ) {
	$upravitID = $_GET['upravit'];
	echo $upravitID;
}
?>
<div class="modal fade" id="upravZakazku" tabindex="-1" role="dialog" aria-labelledby="upravZakazkuLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Úprava zakázky</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<div class="form-group">
						<label for="cislo_zakazky">Číslo zakázky</label>
						<input type="text" class="form-control" id="cislo_zakazky" placeholder="<?php echo $upravitID; ?>">
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
