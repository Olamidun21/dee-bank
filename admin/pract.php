<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="assets/js/jquery-3.1.1.js"></script>
<script src="assets/js/bootstrap.js"></script>

</head>

<body>
<script>
bar =[];
var a ="";
var i;
$(document).ready(function() {
	var x="";
	$.post('json.php',{x:x}, function(data){
		//alert(data);
		var bar = JSON.parse(data);
		for(i=0,i<bar.length; i++;){
		a+="<tr><td>"+bar[i].customer_id+"</td><td>"+bar[i].firstname+"</td><td>"+bar[i].lastname+"</td></tr>"	
		}
		})
		alert(bar)
		$('tbody').html(a);
		
});

</script>
<table id="tab">
<thead>
<th>sn</th>
<th>firstname</th>
<th>lastname</th>
</thead>
<tbody>
</tbody>
</table>
<!--<script> 
$('#btn').click(function(){
var request = $.ajax({
	method:'POST',
	url:'json.php',
	data: serialize(),
	//success: function(response){
		//alert(response);
		//var tab = "<table border=1 id='dr'>";
		//var par = JSON.parse(response);
		//var i =0;
		//for(i=0,i<par.length; i++;){
			//document.getElementById('dr').innerHTML= "<tr><td>"+par[i].name+"</td><td>"+par[i].amount+"</td><td>"+par[i].transaction_id+"</td><td>"+par[i].transaction_type+"</td></tr>";
		//	};
		//document.write=tab;

});
request.done(function(response){
	alert(response);
	})
});
</script>-->

<button id="btn">button </button>
</body>
</html>