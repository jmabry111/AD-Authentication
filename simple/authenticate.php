<?php require './includes/dbconnect.php' ?>
<?php session_start(); ?>

		<?php
/**		if($_POST['uid'] == '' or $_POST['pass'] == ''){
			$_SESSION['msg']='Invalid login. Please try again or create an account.';
			header('Location: ./index.php');
		}
		
		$password = md5($_POST['pass']);

		$sql = "SELECT * FROM admin 
		where username = '$_POST[uid]' and password = '$password'";	
		$result = mysql_query($sql, $conn);
		$row = mysql_fetch_array($result);
		if (mysql_num_rows($result) == 0){
			$_SESSION['msg']='Invalid login. Please try again or create an account.';
			header('Location: ./index.php');	
		}
		else{
			$_SESSION['uid']=$_POST['uid'];
			$_SESSION['first']=$row['first'];
			$_SESSION['last']=$row['last'];
			$_SESSION['id']=$row['admin_id'];
			header('Location: ./main.php');
		}**/
		
		//echo $_POST['pass'] ;
		$adServer = "10.101.10.1";
		$ldapconn = ldap_connect($adServer) or $this->msg = "Could not connect to LDAP server.";
		$ldaprdn = $_POST['uid'] . "@hcps.local";
		$ldapbind = ldap_bind($ldapconn, $ldaprdn, $_POST['pass']);
		
		if ($ldapbind) {
		/*	echo "Successfully Authenticated";
			$_SESSION['uid'] = $uid;
			$_SESSION['pass'] = $pass;*/
			$sql = "SELECT * FROM users where username = '$_POST[uid]'";	
			$result = mysql_query($sql, $conn);
			$row = mysql_fetch_array($result);
			if (mysql_num_rows($result) == 0){
				$_SESSION['msg']='Although you are a HCPS User, you are not authorized to use this system.';
				header('Location: ./index.php');	
			}
			else{
				$_SESSION['uid']=$_POST['uid'];
				$_SESSION['id']=$row['user_id'];
				header('Location: ./main.php');
			}
			return true;
		} else {
			$_SESSION['msg']='You have entered an invalid username/password combination. Please try again.';
			header('Location: ./index.php');
			return true;
		}
		?>
