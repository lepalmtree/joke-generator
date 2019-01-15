<?php
function pickLineNumber(&$excluded, $tailleFichier) {
        $lineNumber = rand(0, $tailleFichier);
        if (in_array($lineNumber, $excluded)) {
                $lineNumber = pickLineNumber($excluded, $tailleFichier);
        }

        return $lineNumber;
}

$intro = file('intro.txt');
$milieu = file('milieu.txt');
$chute = file('chute.txt');
$longueurCorps = rand(3,5);
$tailleIntro = count($intro) - 1;
$tailleMilieu = count($milieu) - 1;
$tailleChute = count($chute) - 1;
$blague = [];
$excluded = [];
//intro
$blague[] = $intro[rand(0, $tailleIntro)];
//corps
for ($i=0; $i < $longueurCorps; $i++) {
        $lineNumber = pickLineNumber($excluded, $tailleMilieu);
        $excluded[] = $lineNumber;
        $blague[] = $milieu[$lineNumber];
}
//chute
$blague[] = $chute[rand(0, $tailleChute)];
?>

<!DOCTYPE html>
<html>
        <head>
        	<meta charset="UTF-8" />
        	<link rel="stylesheet" href="style.css" />
        	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
        </head>
        <body>
                <section id="content">
                        <div id="blague">
				<?= implode('<br/>', $blague) ?>
                        </div>
                        <a href="/" id="button">Iliass, raconte-moi encore une blague</a> 
                </section>
        </body> 
</html>

