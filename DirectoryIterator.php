<?php 
var_dump(getcwd());
$dir = new DirectoryIterator(getcwd());
echo "<br/>";
// var_dump($dir);
$dir->rewind();
while($dir->valid()){
	echo $dir->current()."<br/>";
	$dir->next();
}
echo "<br/>";
foreach ($dir as $key => $value) {
	echo "<pre>".$key."=>".$value."</pre>";
}
echo "<br/>";
$dir = new RecursiveDirectoryIterator(getcwd());

foreach ($dir as $key => $value) {
	echo "<pre>".$key."=>".$value."</pre>";
}