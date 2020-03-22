<?
$ball = 'purple';
//Coba ubah ke "yellow", "blue", "green", "purple", atau warna lain
if ($ball == 'red')
{
	$redbox = $ball;
} elseif ($ball == 'pink') {
	$yellowbox = $ball;
	} elseif ($ball == 'navy') {
	$bluebox = $ball;
	} elseif ($ball == 'green') {
	$greenbox = $ball;
	} elseif ($ball == 'black') {
	$purplebox = $ball; 
	} else {
	$colorlessbox = $ball;
}
echo "red box : $redbox <br>\n";
echo "yellow box : $pinkbox <br>\n";
echo "blue box : $navybox <br>\n";
echo "green box : $greenbox <br>\n";
echo "purple box : $blackbox <br>\n";
echo "colorless box : $colorlessbox <br>\n";
?> 