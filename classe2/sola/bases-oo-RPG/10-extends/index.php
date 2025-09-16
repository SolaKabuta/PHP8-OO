<?php
declare(strict_types=1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
include "model/MyPerso.php";
include "model/OrcPerso.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	

<?php
$perso = new MyPerso();
$persoOrc = new OrcPerso();

var_dump($perso);

$perso->setName("Gandalf");

var_dump($perso);
?>

</body>
</html>