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
                <li class="breadcrumb-item active"><a href="#">Thông tin cá nhân</a></li>
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
                            <div class="d-flex align-items-center flex-row mb-3 gap-2">
                                <img class="avatar avatar-xl mb-3 avatar-image" src="./assets/images/default-image.png" />
                                <div class="d-flex flex-column align-items-start gap-2 px-3">
                                    <input type="file" id="upload-file" style="display: none;">
                                    <label for="#">Thay đổi ảnh đại diện</label>
                                    <div class="d-flex gap-2">
                                        <button id="upload-image" class="btn btn-brown">Tải ảnh lên</button>
                                        <button id="remove-image" class="btn btn-danger">Xoá ảnh</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-12 d-flex flex-column mb-3">
                                    <label for="name" class="mb-2">Họ tên</label>
                                    <input type="text" name="name" id="name" class="form-control shadow-none" placeholder="Họ tên">
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column mb-3">
                                    <label for="email" class="mb-2">Email</label>
                                    <input type="text" name="email" id="email" class="form-control shadow-none" placeholder="Email">
                                </div>
                                <div class="col-md-4 col-12 d-flex flex-column mb-3">
                                    <label for="name" class="mb-2">Số điện thoại</label>
                                    <input type="tel" name="name" id="name" class="form-control shadow-none" placeholder="Số điện thoại">
                                </div>
                                <div class="col-md-12 d-flex flex-column mb-3">
                                    <label for="name" class="mb-2">Giới thiệu</label>
                                    <textarea name="" id="" cols="20" rows="5" class="form-control shadow-none" placeholder="Giới thiệu cá nhân"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="fw-bold">Lĩnh vực (Đại lí)</span>
                            <a href="#" class="btn btn-light">Lưu thay đổi</a>
                        </div>
                        <div class="card-body">
                            <select autocomplete="off" multiple class="form-select field-checkbox-options-profile" placeholder="Lĩnh vực">
                                <option>Lĩnh vực 1</option>
                                <option>Lĩnh vực 2</option>
                                <option>Lĩnh vực 3</option>
                                <option>Lĩnh vực 4</option>
                            </select>

                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header d-flex justify-content-between align-items-center flex-md-row flex-column">
                            <span class="fw-bold mb-3">Ảnh tiêu biểu <em>(Tối đa 5 hình ảnh)</em> </span>
                            <div class="d-flex gap-2 align-items-center">
                                <button id="upload-btn" class="btn btn-brown">Tải ảnh lên</button>
                                <button id="clear-btn" class="btn btn-danger">Xóa tất cả</button>
                                <button id="save-btn" class="btn btn-light">Lưu thay đổi</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row row-cols-5" id="image-container">
                                <!-- Hình ảnh hiển thị sau khi add -->
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