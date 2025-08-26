<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?=$title?></title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="/assets/styles.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" href="/assets/images/favicon.png" type="image/x-icon">
	</head>
	<body>
        <header>
            <h1>All About Coffee</h1>
            <?=$this->fetch('navbar.phtml')?>
		</header>
        <?=$content?>
        <footer>
            <?=$this->fetch('navbar.phtml')?>
		</footer>
	</body>
</html>
