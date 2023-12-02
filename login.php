<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <header>
        <?php include "header.php" ?>
    </header>
    <main class="container mt-5 mb-5">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>

                </div>
                <div class="card-body">
                    <form method="post">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="username" name="user">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                            <input type="password" class="form-control" placeholder="password" name="pass">
                        </div>

                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-end login_btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center ">
                        Don't have an account?<a href="#" class="text-warning text-decoration-none">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <?php include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
<?php
ob_start();
if (isset($_POST['user']) && isset($_POST['pass'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    try {
        $conn = new PDO("mysql:host=localhost;dbname=BTTH01_CSE485", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Đặt chế độ báo lỗi cho PDO

        // Sử dụng Prepared Statements
        $sql = "SELECT * FROM users WHERE user = :user";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':user', $user);
        $stmt->execute();

        if ($stmt->rowCount()) {
            $row = $stmt->fetch();
            $pass_saved = $row['password'];
            // $hashed_password = password_hash($pass_saved, PASSWORD_DEFAULT);
            // echo $hashed_password;
            // So sánh mật khẩu bằng password_verify
            if (password_verify($pass, $pass_saved)) {
                header("Location: ./admin/index.php");
                exit();
                // echo 'Ket noi thanh cong';

            } else {
                header("Location: login.php");
                // echo 'K Ket noi thanh cong';
                exit(); // Dừng thực thi ngay tại đây sau khi chuyển hướng
            }
        }
    } catch (PDOException $e) {
        // Ghi lỗi vào file log hoặc xử lý một cách an toàn khác
        echo "Error: " . $e->getMessage();
    }
}

ob_end_flush();
?>