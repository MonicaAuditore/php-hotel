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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
<!-- <?php foreach ($hotels as $hotel): ?>
		<h2><?= $hotel['name'] ?></h2>
		<p><?= $hotel['description'] ?></p>
		<p>Parcheggio: <?= $hotel['parking'] ? 'Si' : 'No' ?></p>
		<p>Voto: <?= $hotel['vote'] ?>/5</p>
		<p>Distanza dal centro: <?= $hotel['distance_to_center'] ?> km</p>
		<hr>
	<?php endforeach; ?> -->

  <div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Descrizione</th>
					<th>Parcheggio</th>
					<th>Voto</th>
					<th>Distanza dal centro</th>
				</tr>
			</thead>
			<tbody class="table-striped">
				<?php foreach ($hotels as $hotel): ?>
					<tr>
						<td><?= $hotel['name'] ?></td>
						<td><?= $hotel['description'] ?></td>
						<td><?= $hotel['parking'] ? 'Si' : 'No' ?></td>
						<td><?= $hotel['vote'] ?>/5</td>
						<td><?= $hotel['distance_to_center'] ?> km</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>
</html>