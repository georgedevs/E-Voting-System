<?php
	require_once 'dbcon.php';
	if (isset ($_POST ['change'])){
		$user_id = $_GET['user_id'];
		$username =$_POST['username'];
		$password=$_POST['password'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];

	
		$conn->query("UPDATE users SET username = '$username', password = '$password', firstname = '$firstname', lastname = '$lastname', WHERE user_id = '$user_id'")or die($conn->error);
		?>
		<script type="text/javascript">
		alert('User updated')
		window.location = 'user.php';
		</script>
		<?php
	}
?>