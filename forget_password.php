<?php
include 'config.php';
error_reporting(0);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $new_password = md5($_POST['new_password']); // Enkripsi password baru dengan md5 (gunakan metode lebih aman di produksi)

    // Periksa apakah email terdaftar
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        // Update password baru
        $updateSql = "UPDATE users SET password='$new_password' WHERE email='$email'";
        if (mysqli_query($conn, $updateSql)) {
            echo "<script>alert('Password Anda telah berhasil diperbarui!');</script>";
            echo "<script>window.location.href = 'index.php';</script>"; // Redirect ke index.php
        } else {
            echo "<script>alert('Terjadi kesalahan, silakan coba lagi!');</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan. Periksa kembali email Anda.');</script>";
    }
}
?>

<?php include 'header.php'; ?>

<!-- Forgot Password Section -->
<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="text-center mb-4">Forgot Password</h3>
                    <p class="text-center">Enter your email address and new password below to reset your password.</p>
                    <form action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <input type="password" name="new_password" class="form-control" id="new_password" required>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary w-100">Reset Password</button>
                    </form>
                    <p class="text-center mt-3">
                        <a href="index.php" class="text-decoration-none">Back to Login</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
