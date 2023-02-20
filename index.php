<?php 
$hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Hotel</title>
  


</head>
<body>
  <!-- Stampo in pagina i dati senza tabella-->

<!-- <?php foreach ($hotels as $hotel): ?>
		<h2><?= $hotel['name'] ?></h2>
		<p><?= $hotel['description'] ?></p>
		<p>Parcheggio: <?= $hotel['parking'] ? 'Si' : 'No' ?></p>
		<p>Voto: <?= $hotel['vote'] ?>/5</p>
		<p>Distanza dal centro: <?= $hotel['distance_to_center'] ?> km</p>
		<hr>
	<?php endforeach; ?> -->


<!-- ---------------------------------------------------- -->


<?php 
if(isset($_GET['parking']) && ($_GET['parking'] == 'yes' || $_GET['parking'] == 'no')) {
  $parkingFilter = ($_GET['parking'] == 'yes');
  $hotels = array_filter($hotels, function($hotel) use ($parkingFilter) {
      return $hotel['parking'] == $parkingFilter;
  });
}

?>

  <!-- Stampo in pagina i dati in una tabella -->
  <table>
  <thead>
    <tr>
      <th>Nome</th>
      <th>Descrizione</th>
      <th>Parcheggio</th>
      <th>Voto</th>
      <th>Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($hotels as $hotel) { ?>
      <tr>
        <td><?php echo $hotel['name']; ?></td>
        <td><?php echo $hotel['description']; ?></td>
        <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
        <td><?php echo $hotel['vote']; ?></td>
        <td><?php echo $hotel['distance_to_center']; ?> km</td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<!-- --------------------------  Bonus uno: aggiungo il filtraggio sul parcheggio  -------------------------- -->

<form method="GET">
  <label for="parking">Parcheggio:</label>
  <select name="parking" id="parking">
    <option value="">Tutti gli hotel</option>
    <option value="yes">Con parcheggio</option>
    <option value="no">Senza parcheggio</option>
  </select>
  <button type="submit">Filtra</button>

</form>
</body>
</html>

