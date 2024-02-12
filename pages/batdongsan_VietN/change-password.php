<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('layouts/head.php') ?>
</head>

<body>
    <?php include('layouts/header.php') ?>
    <div class="bg-secondary-lt py-3">
        <div class="container">
            <ol class="breadcrumb" aria-label="breadcrumbs">
                <li class="breadcrumb-item"><a href="." class="text-decoration-none text-brown">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="./profile.php" class="text-decoration-none text-brown">Thông tin cá nhân</a></li>
                <li class="breadcrumb-item active"><a href="#">Bảo mật</a></li>
            </ol>
        </div>
    </div>

    <section class="bg-white">
        <div class="container-xl py-3">
            <div class="row align-items-start">
                <div class="col-md-3 col-12">
                    <div class="card mb-3">
                        <div class="card-header fw-bold">Thông tin cá nhân</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <img class="avatar avatar-xl mb-3 avatar-image" src="./assets/images/avatar4.png" />
                                <div class="d-flex gap-2">
                                    <span>Tài khoản:</span>
                                    <span class="fw-bold">Đại lí</span>
                                </div>
                                <span class="fw-bold">Nguyễn Văn A</span>
                                <span>0987654321</span>
                                <span>nguyenvana@gmail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header fw-bold">Thống kê (Đại lí)</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h4 class="">Thực hiện trong ngân sách</h4>
                                <div class="rate_agency_1"></div>
                            </div>
                            <div class="mb-3">
                                <h4 class="">Hoàn thành đúng tiến độ</h4>
                                <div class="rate_agency_2"></div>
                            </div>
                            <div class="mb-3">
                                <h4 class="">Mức độ hài lòng dịch vụ</h4>
                                <div class="rate_agency_3"></div>
                            </div>
                            <div class="mb-3">
                                <h4 class="">Bảo hành bảo trì</h4>
                                <div class="rate_agency_4"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header fw-bold">Thống kê (Khách hàng)</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h4 class="">Yêu cầu đúng mô tả</h4>
                                <div class="rate_customer_1"></div>
                            </div>
                            <div class="mb-3">
                                <h4 class="">Thanh toán đúng hẹn</h4>
                                <div class="rate_customer_2"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-12 position-sticky" style="top: 20px;">
                    <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Quản lý tài khoản</span>
                            <a href="#" class="btn btn-light">Lưu thay đổi</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-12 d-flex flex-column mb-3">
                                    <label for="old-password" class="mb-2">Mật khẩu cũ</label>
                                    <input type="text" name="old-password" id="old-password" class="form-control shadow-none" placeholder="Mật khẩu cũ">
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column mb-3">
                                    <label for="new-password" class="mb-2">Mật khẩu mới</label>
                                    <input type="text" name="new-password" id="new-password" class="form-control shadow-none" placeholder="Mật khẩu mới">
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column mb-3">
                                    <label for="replace-new-password" class="mb-2">Nhập lại mật khẩu mới</label>
                                    <input type="tel" name="replace-new-password" id="replace-new-password" class="form-control shadow-none" placeholder="Nhập lại mật khẩu mới">
                                </div>
                            </div>
                        </div>
                    </div>

                    <input type="file" id="file-input" multiple style="display: none;">
                </div>
            </div>
        </div>
    </section>
    <?php include('layouts/script.php') ?>
    <?php include('layouts/footer.php') ?>
</body>

</html>