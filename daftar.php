<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Selamat, registrasi berhasil!')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
		}
	} else {
		echo "<script>alert('Password Tidak Sesuai')</script>";
	}
}

?>
<?php include 'header.php'; ?>

<!-- Register Section -->
<section class="container my-5">
    <div class="row justify-content-center">
        <!-- Illustration -->
        <div class="col-md-5 d-none d-md-block">
            <img src="Assets/loginn.png" alt="Register Illustration" class="img-fluid">
        </div>
        <!-- Register Form -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Create an Account</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Name</label>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name" value="<?php echo $username; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" value="<?php echo $email; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" value="<?php echo $_POST['password']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="cpassword" class="form-label">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Confirm your password" value="<?php echo $_POST['cpassword']; ?>" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Register Now</button>
                    </form>
                    <p class="text-center mt-3">
                        Already have an account? <a href="index.php">Log in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'; ?>
