<?php
$a=chown("C:\\OpenServer\\domains\\PravaDostupa290916\\Dostyp.txt","user");
echo($a);
$b=chgrp("Dostyp.txt","C:\\OpenServer\\domains\\PravaDostupa290916\\DlyaDostypa");
echo($b);
$c=chmod("Dostyp.txt",0700);
echo($c);
$d=stat("Dostyp.txt");
echo"<pre>";
print_r($d);
echo"</pre>";
$j=filetype("Dostyp.txt");
echo($j);
//$fileMy("C:\\OpenServer\\domains\\Prava290916\\Dostyp.txt");
//if is_dir(("Dostyp.txt"));
//echo "Ýעמ פאיכ";
//else
	//echo"Ýעמ םו פאיכ";
$g=filesize("Dostyp.txt");
echo($g);
echo '<br>';
$q=filemtime("Dostyp.txt");
echo($q);
echo '<br>';
$p=filectime ("Dostyp.txt");
echo ($p);
echo '<br>';
$t=fileatime("Dostyp.txt");
echo($t);
echo '<br>';
$b=is_readable("Dostyp.txt");
echo($b);
echo '<br>';
$m=is_writable("Dostyp.txt");
echo($m);
echo '<br>';
$k=file_exists("Dostyp.txt");
echo($k);
echo '<br>';
$l=is_executable("Dostyp.txt");
echo($l);
echo '<br>';
mkdir("C:\\OpenServer\\domains\\Prava290916\\DlyaDostypa", 0700);

?>

<?php
function printTree($level=1){
	$d=@opendir(".");
	if (!$d) return;
	while(($e=readdir($d)) !==false){
		if($e== '.'|| $e=='..') continue;
		if(!@is_dir($e)) continue;
		for($i=0;$i<$level;$i++) echo " ";
		echo"$e\n";
		if(!chdir($e)) continue;
		printTree($level+1);
		chdir ("..");
		flush();
		
	}
	closedir($d);
}
echo"<pre>";
echo"/\n";
chdir($_SERVER['DOCUMENT_ROOT']);
PrintTree();
echo"</pre>";
?>