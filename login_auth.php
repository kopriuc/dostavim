
<?php include('connection.php');

if(isset($_POST['register'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Preveri, ali e-poštni naslov že obstaja
	$query = "SELECT * FROM register WHERE email='$email'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0) {
		echo "E-poštni naslov je že uporabljen. Izberite drugo e-pošto.";
		exit();
	}

	// Vstavi novega uporabnika v tabelo register
	$query = "INSERT INTO register (name, email, password) VALUES ('$name', '$email', '$password')";
	$result = mysqli_query($con, $query);
	if($result) {
		echo "Uspešno ste se registrirali. Sedaj se lahko prijavite.";
        header("location:home.php");
		exit();
	} else {
		echo "Napaka pri registraciji. Poskusite znova.";
		exit();
	}
}

if(isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Preveri, ali e-poštni naslov in geslo ujemata
	$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0) {
		echo "Uspešno ste se prijavili.";
        header("location:home.php");
		exit();
	} else {
		echo "Napačen e-poštni naslov ali geslo. Poskusite znova.";
		exit();
	}
}
?>
