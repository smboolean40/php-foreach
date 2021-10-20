<?php
$lista = [
	"vino",
	"birra",
	"piadine"
];

$persona = [
	"nome" => 'Samuele',
	"cognome" => "Madrigali"
];

$animali = [
	"mammiferi" => [
		"mucca",
		"maiale",
		"cavallo",
		"cane"
	],
	"uccelli" => [
		"anatra",
		"pollo"
	]
];
?>

<ul>
	<?php foreach($lista as $prodotto): ?>
	<li><?= $prodotto; ?></li>
	<?php endforeach; ?>
</ul>

<hr>

<ul>
	<?php foreach($persona as $chiave => $valore) { ?>
	<li><?php echo "{$chiave} : {$valore}"; ?></li>
	<?php } ?>
</ul>

<hr>

<h2>Fattoria</h2>
<ul>
	<?php foreach($animali as $classiAnimali => $listaAnimali) { ?>
		<li>
			<h3><?php echo $classiAnimali; ?></h3>
			<ul>
				<?php foreach($listaAnimali as $animale) { ?>
				<li><?php echo $animale; ?></li>
				<?php } ?>
			</ul>
		</li>
	<?php } ?> 
</ul>