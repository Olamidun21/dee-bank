<?php
include("conn.php");
if(isset($_POST['subm']))
{ 

$id=$_POST['id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$Email=$_POST['email'];
$Addy=$_POST['address'];
$phone=$_POST['phone'];
$pwd=sha1($_POST['password']);
$update= mysqli_query($conn, "update admin_tb set firstname='$fname', lastname='$lname', email='$Email', address='$Addy', phone='$phone', password ='$pwd' where admin_id='$id'");
if($update){
	echo"<script>window.location='view.php';</script>";
	}	
}else{
	$id = $_GET['id'];
	$select=mysqli_query($conn, "select * from admin_tb where admin_id= '$id' ");
	if($select){  
	 	
		while($row = mysqli_fetch_array($select)){
			echo "welcome ". $row['firstname'];
			?>
            <html>  
			<head><title></title></head>
					<body>
					<form action="edit.php" method="post">
                    <input type="text" value="<?php echo $id; ?>" hidden="hidden" name="id">
                        	<label> Firstname</label>
                          <input type="text" name="firstname" class="form-control" value="<?php echo $row['firstname']; ?>"><br>
                          <label> Lastname</label>
                          <input type="text" name="lastname" class="form-control" value="<?php echo $row['lastname']; ?> "> <br>
                          <label> Email</label>
                          <input type="email" name="email" class="form-control" value="<?php echo $row['email']; ?>"> <br>
                          <label> Address</label>
                          <input type="text" name="address" class="form-control" value="<?php echo $row['address']; ?>" ><br>
                          <label> Phone number</label> 
                          <input type="text" name="phone" class="form-control" value="<?php echo $row['phone']; ?>" > <br>
                          <label> password</label>
                          <input type="password" name="password" class="form-control" value=" <?php echo $row['password']; ?>" ><br> 
                          <input type="submit" value="REGISTER" name="subm" class="btn btn-info">
                          </form>
</body>
</html>
<?php
			}
		
		}
	}


?>

