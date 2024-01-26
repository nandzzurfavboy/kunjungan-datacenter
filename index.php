<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kunjungan Ke Data Center Diskominfo Provsu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>
<body>
    <?php require "./navbar.php" ?>
    <?php
		if(isset($_GET["reservasi"])){
			require "./form/reservasi.php";
		}elseif(isset($_GET["products"])){
			require "./pages/products.php";
		}elseif(isset($_GET["contact"])){
			require "./pages/contact.php";
		}
		else{
			require "./dashboard.php";
		}
	?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>