<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Form Basics</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />

	<style>
		.cluster {
			display: flex;
			flex-direction: row;
			gap: 0.5rem;
		}

		input[type=checkbox] {
			min-width: 1.5rem;
		}
	</style>
</head>

<body>
	<header></header>
	<main class="container">
		<h1>This is an Example for Forms</h1>
		<form id="my-form" action="main.php" method="post">
			<div class="grid">
				<div>
					<label for="name">Name:</label>
					<input id="name" name="name" type="text" placeholder="Max Mustermann" value="<?= $name ?>">
				</div>

				<div>
					<label for="age">Alter:</label>
					<input type="number" name="age" min="0" max="100" id="age" placeholder="20" inputmode="numeric"
						pattern="[0-9]">
				</div>
			</div>

			<div class="cluster">
				<input type="checkbox" name="" id="check">
				<label for="check">DSGVO: Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ea eius,
					impedit tenetur nihil saepe non, sed porro enim sequi veniam repellendus modi asperiores error
					explicabo natus a sunt perferendis?</label>
			</div>

			<button type="submit">Send</button>
		</form>
	</main>
	<footer></footer>
	<script src="main.js"></script>
</body>

</html>