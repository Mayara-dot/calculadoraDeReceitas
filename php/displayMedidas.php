<?php
require_once "data.php";

function ReceitaName()
{
	echo "<div>
        <label for='receita'>Nome da Receita: </label>
            <input type='text' name='receita' id='receita'>
        </div>";
}
function IngredientesSolidos($ingredientesSolidos, $quantidade, $unidadeMedida) {
	foreach($ingredientesSolidos as $k => $v) {
		if($k == "sal" || $k == "bicarbonato" || $k == "fermento") {
			echo "<label name='$k' for='$k'>$v</label>
					<select name='ingrediente[0][$k]' id='$k-quantidade'>";
					for($i = 0; $i <= 5; $i++) {
						echo "<option value='$quantidade[$i]'>
						$quantidade[$i]</option>";
					};
			echo "</select>
				<select name='ingrediente[1][$k]' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k => $v) {
						if($k == "xicara") continue;
						echo "<option value='$k'>
						$v</option>";
					};
			echo "</select>";
		}else {
			echo "<label name='$k' for='$k'>$v</label>
				<select name='ingrediente[0][$k]' id='$k-quantidade'>";
				for($i = 0; $i < count($quantidade); $i++) {
					echo "<option value='$quantidade[$i]'>
					$quantidade[$i]</option>";
				};
			echo "</select>
				<select name='ingrediente[1][$k]' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k => $v) {
						echo "<option value='$k'>
						$v</option>";
					};
			echo "</select>";
		}	
	}
}

function IngredientesLiquidos($ingredientesLiquidos, $quantidade, $unidadeMedida) {
	foreach($ingredientesLiquidos as $k => $v) {
		if($k == "essenciaBaunilha" || $k == "vinagreMaca"){
			echo "<label name='$k' for='$k'>$v</label>
				<select name='ingrediente[0][$k]' id='$k-quantidade'>";
				for($i = 0; $i <= 5; $i++) {
					echo "<option value='$quantidade[$i]'>
					$quantidade[$i]</option>";
				};
			echo "</select>
				<select name='ingrediente[1][$k]' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k => $v) {
						if($k == "xicara") continue;
						echo "<option value='$k'>
						$v</option>";
					};
			echo "</select>";	
		} else {
			echo "<label name='$k' for='$k'>$v</label>
				<select name='ingrediente[0][$k]' id='$k-quantidade'>";
				for($i = 0; $i < count($quantidade); $i++) {
					echo "<option value='$quantidade[$i]'>
					$quantidade[$i]</option>";
				};
			echo "</select>
				<select name='ingrediente[1][$k]' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k => $v) {
						echo "<option value='$k'>
						$v</option>";
					}
			echo "</select>";
		}
	}

}
ReceitaName();
IngredientesSolidos($ingredientesSolidos, $quantidade, $unidadeMedida);
IngredientesLiquidos($ingredientesLiquidos, $quantidade, $unidadeMedida);
?>