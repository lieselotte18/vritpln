<?php
include 'config.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
    exit;
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($_POST["remember"])) {
        setcookie('email', $email, time() + (3600 * 24 * 365), '/'); // Simpan 1 tahun
        setcookie('password', $password, time() + (3600 * 24 * 365), '/');
    } else {
        setcookie('email', '', time() - 3600, '/');
        setcookie('password', '', time() - 3600, '/');
    }

    $hashedPassword = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$hashedPassword'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
        exit;
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

$email = !empty($_COOKIE["email"]) ? $_COOKIE["email"] : '';
$password = !empty($_COOKIE["password"]) ? $_COOKIE["password"] : '';

?>
<?php include 'header.php'; ?>

<!-- Login Section -->
<section class="container my-5">
    <div class="row justify-content-center">
        <!-- Illustration -->
        <div class="col-md-5 d-none d-md-block">
            <img src="Assets/daftar.png" alt="Login Illustration" class="img-fluid">
        </div>
        <!-- Login Form -->
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required 
                                value="<?php echo htmlspecialchars($email); ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required 
                                value="<?php echo htmlspecialchars($password); ?>">
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember" 
                                    <?php echo !empty($_COOKIE["email"]) ? 'checked' : ''; ?>>
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <a href="forget_password.php" class="text-decoration-none">Forgot Password?</a>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Log In</button>
                    </form>
                    <p class="text-center mt-3">
                        Don't have an account? <a href="daftar.php">Register now</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
