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
                    <h2 class="card-title text-center mb-4">Quên mật khẩu</h2>
                    <div class="mb-3">
                        <label class="form-label">Email đăng ký</label>
                        <input type="text" class="form-control shadow-none" placeholder="Email đăng ký">
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-brown w-100">Gửi yêu cầu</button>
                    </div>
                </div>
            </form>
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