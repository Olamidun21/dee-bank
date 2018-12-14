<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="admin/assets/js/jquery-3.1.1.js"></script>
<script src="admin/assets/js/bootstrap.js"></script>
</head>

<body>
<p id="demo" ></p>
<script>
var obj= JSON.parse('{"name":"Delight", "Age":30, "city":"ogbomoso"}');
document.getElementById("demo").innerHTML=obj.name+" ,"+obj.Age;
</script>
</body>
</html>