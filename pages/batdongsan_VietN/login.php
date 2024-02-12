<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('layouts/head.php') ?>
</head>

<body>

    <div class="page page-center">
        <div class="container container-tight py-4">
            <form class="card card-md" action="./" method="get" autocomplete="off" novalidate="">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Đăng nhập</h2>
                    <div class="mb-3">
                        <label class="form-label">Tên đăng nhập</label>
                        <input type="text" class="form-control shadow-none" placeholder="Tên đăng nhập">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" placeholder="Mật khẩu" autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vai trò</label>
                        <select name="" id="" class="form-select shadow-none">
                            <option value="Vai trò" disabled selected>Vai trò</option>
                            <option value="Đại lí">Đại lí</option>
                            <option value="Khách hàng">Khách hàng</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Ghi nhớ đăng nhập.</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-brown w-100">Đăng nhập</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Quên mật khẩu? <a href="./forgot-password.php" tabindex="-1" class="text-decoration-none text-brown">Nhấn vào đây</a>
            </div>
            <div class="text-center text-muted mt-3">
                Chưa có tài khoản? <a href="./register.php" tabindex="-1" class="text-decoration-none text-brown">Đăng kí ngay</a>
            </div>
            <div class="text-center text-muted mt-3">
                <a href="./" tabindex="-1" class="text-decoration-none text-brown">
                    <i class="fa-solid fa-arrow-left-long px-2"></i> Trở về trang chủ
                </a>
            </div>
        </div>
    </div>


    <?php include('layouts/script.php') ?>
</body>

</html>