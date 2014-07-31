<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
		<title>SPL PlayGround!</title>
	</head>
	<body>
		
	</body>
</html>
<?php
$_declaredArr = get_declared_classes();
echo "可以支援的SPL類別如下:";
foreach ($_declaredArr as $key => $value) {
	echo "<pre>".$key."=>".$value."</prev>";
}
echo "<br/>";
$_declaredInterFaceArr = get_declared_interfaces();
echo "可以支援的SPL介面如下:";
foreach ($_declaredInterFaceArr as $key => $value) {
	echo "<pre>".$key."=>".$value."</prev>";
}
//var_dump($test);