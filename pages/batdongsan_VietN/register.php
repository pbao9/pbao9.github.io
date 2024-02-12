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
                    <h2 class="card-title text-center mb-4">Đăng ký tài khoản</h2>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Họ tên</label>
                                <input type="text" class="form-control shadow-none" placeholder="Họ tên">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control shadow-none" placeholder="Tên đăng nhập">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control shadow-none" placeholder="Email">
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Mật khẩu" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="mb-3">
                                <label class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" autocomplete="off">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input">
                            <span class="form-check-label">Đồng ý các điều khoản bảo mật,.</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-brown w-100">Tạo tài khoản</button>
                    </div>
                </div>
            </form>
            <div class="text-center text-muted mt-3">
                Đã có tài khoản? <a href="./login.php" tabindex="-1" class="text-decoration-none text-brown">Đăng nhập</a>
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