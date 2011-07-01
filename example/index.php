<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>String to Military Alphabet - Live Preview</title>
        <meta name="description" content="">
        <meta name="author" content="Kyle King - Higher Ground Studio">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/style.css">

        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    </head>
    <body>
        <header>
            String to Military Alphabet - Live Preview
        </header>
        <?php
        require 'militaryAlphaClass.php';
		$mpa = new StringToMilitaryPhonetic();
        if (isset($_POST['string'])) {
                echo "<div class='container'><h1 class='center'>" . $mpa->convert($_POST['string']) . "</h1></div>";
        };
        ?>
        <div class="container">
            <div id="main" role="main">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="encode.decode" id="">
                    <label for='string'>String to convert to Military Alphabet</label>
                    <input type="text" name="string" value="<?php echo(isset($_POST['string']) ? $_POST['string'] : ""); ?>" />
                    <br><br>
                    <input type="submit" class="gbutton" value="Convert"  />
                    <br><br>
                </form>
            </div>

            <footer>

            </footer>
        </div>

    </body>
</html>