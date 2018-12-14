<script src="assets/js/jquery-3.1.1.js"></script>
<script>

	$(document).on('click','#btn',(function(){
	//$(' tr input').prop('disabled',false);
	$(this).closest('tr').find('input').removeAttr('disabled');
	$(this).closest('tr').siblings('tr').each(function() {
     $ (this).find('input').prop('disabled', 'disabled');  
    })
		}));
		//$(document).on('click','#save',(function(){
		//l=#fn.val();	
		//}));
		$(function(){
			$('#save').click(function(){
				i=$('#id').val();
				f=$('#fn').val();
				l=$('#ln').val();
				e=$('#em').val();
				a=$('#ad').val();
				p=$('#ph').val();
				//$.post("edit1.php",{id:i, firstname:f, lastname:l, email:e,address:a, phone:p}); 
				})
		});

</script>
<?php
	include("conn.php");
	$select= mysqli_query($conn, "select * from admin_tb");
	if($select){
		
	?>
		<table border='1' align='center'>
		<tr><th>S/N</th><th>Firstname</th><th>Lastname</th><th>Email</th><th>Address</th><th>Phone</th><th>Edit</th></tr>
        <?php
		$f=0;
		while($r=mysqli_fetch_array($select)){
			$f++;
			$id=$r['admin_id'];
?>
			<tr>
            <td><?php echo $f; ?> <input type="text" value=" <?php echo $id ?>" hidden="hidden" name="id" id="id" /></td><td><input type'text' name='firstname' value='<?php echo $r['firstname'] ?>' disabled id="fn"></td><td><input type'text' name='lastname' value='<?php echo $r['lastname'] ?>' disabled id="ln"></td><td><input type'text' name='email' value='<?php echo $r['email'] ?>' disabled id="em"></td><td><input type'text' name='address' value='<?php echo $r['address']; ?>' disabled id="ad"></td><td><input type'text' name='phone' value='<?php echo $r['phone'] ?>' disabled id="ph"></td><td><!--<a href='edit.php?id='>Edit</a>--><input type="button" value="Save" id="save"  /></td><td><a href='delete.php?id=<?php echo $id ?>'>Delete</a></td><td><input type="button" id="btn" value="edit" /></td
            >
            	<img src= <?php echo $r['passport'] ?> >
            </tr> 	
<?php		
			}
			?>
			</table>
            <?php
		}
	
	
?>