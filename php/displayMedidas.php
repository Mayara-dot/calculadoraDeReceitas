<?php	

function ingredientesSolidos($ingredientesSolidos, $quantidade, $unidadeMedida) {
	foreach($ingredientesSolidos as $k => $v) {
		if($k == "sal" || $k == "bicarbonato" || $k == "fermento") {
			echo "<label for='$k'>$v</label>
					<select name='$k' id='$k-quantidade'>";
					for($i = 0; $i <= 4; $i++) {
						echo "<option value='$quantidade[$i]'>
						$quantidade[$i]</option>";
					};
			echo "</select>
				<select name='$k' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k => $v) {
						if($k == "xicara") continue;
						echo "<option valeu='$k'>
						$v</option>";
					};
			echo "</select>";
		}else {
			echo "<label for='$k'>$v</label>
				<select name='$k' id='$k-quantidade'>";
				for($i = 0; $i < count($quantidade); $i++) {
					echo "<option value='$quantidade[$i]'>
					$quantidade[$i]</option>";
				};
			echo "</select>
				<select name='$k' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k => $v) {
						echo "<option value='$k'>
						$v</option>";
					};
			echo "</select>";
		}	
	}
}

function ingredientesLiquidos($ingredientesLiquidos, $quantidade, $unidadeMedida) {
	foreach($ingredientesLiquidos as $k => $v) {
		if($k == "essenciaBaunilha" || $k == "vinagreMaca"){
			echo "<label for='$k'>$v</label>
				<select name='$k' id='$k-quantidade'>";
				for($i = 0; $i <= 4; $i++) {
					echo "<option value='$quantidade[$i]'>
					$quantidade[$i]</option>";
				};
			echo "</select>
				<select name='$k' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k=> $v) {
						if($k == "xicara") continue;
						echo "<option value='$k'>
						$v</option>";
					};
			echo "</select>";	
		} else {
			echo "<label for='$k'>$v</label>
				<select name='$k' id='$k-quantidade'>";
				for($i = 0; $i < count($quantidade); $i++) {
					echo "<option value='$quantidade[$i]'>
					$quantidade[$i]</option>";
				};
			echo "</select>
				<select name='$k' id='$k-unidadeMedida'>";
					foreach($unidadeMedida as $k => $v) {
						echo "<option value='$k'>
						$v</option>";
					}
			echo "</select>";
		}
	}

}


$ingredientesSolidos = [
  "farinhaDeTrigo" => "Farinha de Trigo",
  "cacauEmPo" => "Cacau em pó",
  "acucarCristalDemerara" => "Açúcar Cristal/Demerara",
  "acucarRefiando" => "Açúcar Refinado",
  "bicarbonato" => "Bicarbonato de sódio",
  "fermento" => "Fermento em pó",
  "sal" => "Sal"
];

$ingredientesLiquidos = [
  "oleoVegetal" => "Óleo vegetal",
  "agua" => "Água",
  "leiteVegetal" => "Leite vegetal",
  "essenciaBaunilha" => "Essência de Baunilha",
  "vinagreMaca" => "Vinagre de Maçã"
];

$quantidade = ['1', '2', '3', '4', '1/2', '1/3', '1/4', '3/4'];
$unidadeMedida = [
	"xicara" => "Xícara",
	"colCS" => "Colher de Sopa",
	"colCC" => "Colher de Chá"
];

ingredientesSolidos($ingredientesSolidos, $quantidade, $unidadeMedida);
ingredientesLiquidos($ingredientesLiquidos, $quantidade, $unidadeMedida);

?>