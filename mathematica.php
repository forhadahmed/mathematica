<?php 

// Globals ====================================================================

$mathematica = 'C:/mathematica8/math.exe'; // Location of the 'math kernel' 

$www_root = 'Z:/web/mathematica/';         // WWW root

$tmpdir = 'temp/';                         // Temp directory (under WWW root)
 
// ============================================================================

$math = $_GET['math'];

$hash = sha1($math);

$ifile  = $hash.'.m';
$ofile = $hash.'.png';
 

if (file_exists($tmpdir.$ofile)) {
    die($tmpdir.$ofile);	
}

$expr = 'Export["'.$www_root.$tmpdir.$ofile.'", '.$math.']';

file_put_contents($tmpdir.$ifile, $expr);

$res = exec($mathematica.' -script '.$tmpdir.$ifile);

if (file_exists($tmpdir.$ofile)) {
    echo($tmpdir.$ofile);
} else {
    echo(str_replace('png', '', $res));	
}

unlink($tmpdir.$ifile);

?>


