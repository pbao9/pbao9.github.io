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
                <li class="breadcrumb-item"><a href="./report-price.php" class="text-decoration-none text-brown">Danh sách báo giá</a></li>
                <li class="breadcrumb-item active"><a href="#">KH01</a></li>
            </ol>
        </div>
    </div>

    <section class="bg-white">
        <div class="container-xl py-3">
            <div class="d-flex justify-content-between py-2 border-bottom mb-2 align-items-center flex-md-row flex-column">
                <h2 class="mb-0">Chi tiết yêu cầu</h2>
                <div class="d-flex align-items-center gap-2 py-3">
                    <div class="d-flex gap-2 align-items-center">
                        <label for="#" class="text-nowrap">Tình trạng:</label>
                        <select name="" id="" class="form-select shadow-none">
                            <option value="Trạng thái" selected disabled>Trạng thái</option>
                            <option value="Đã liên hệ">Đã liên hệ</option>
                            <option value="Từ chối">Từ chối</option>
                            <option value="Chưa liên hệ">Chưa liên hệ</option>
                        </select>
                    </div>

                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-contact">Liên hệ</button>

                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Giá tối thiểu</label>
                        <input type="price-min" class="form-control shadow-none" name="example-text-input" placeholder="Giá tối thiểu" value="100.000.000" disabled>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Giá tối đa</label>
                        <input type="price-max" class="form-control shadow-none" name="example-text-input" placeholder="Giá tối đa" value="200.000.000" disabled>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="mb-3">
                        <label class="form-label">Đơn vị</label>
                        <select class="form-select shadow-none" disabled>
                            <option value="1">Ngàn</option>
                            <option value="2" selected>Triệu</option>
                            <option value="3">Tỉ</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Lịch hẹn</label>
                        <input type="date" class="form-control shadow-none" disabled>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Thời gian triển khai</label>
                        <input type="date" class="form-control shadow-none" disabled>
                    </div>
                </div>

                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Tỉnh thành</label>
                        <select class="form-select shadow-none" disabled>
                            <option value="34" select>Hà Nội</option>
                            <option value="39">TP. Hồ Chí Minh</option>
                            <option value="44">Đà Nẵng</option>
                            <option value="50">Bà Rịa - Vũng Tàu</option>
                            <option value="55">Bình Dương</option>
                            <option value="79">Long An</option>
                            <option value="63">Đồng Nai</option>
                            <option value="49">An Giang</option>
                            <option value="46">Bắc Giang</option>
                            <option value="51">Bắc Kạn</option>
                            <option value="52">Bạc Liêu</option>
                            <option value="35">Bắc Ninh</option>
                            <option value="53">Bến Tre</option>
                            <option value="56">Bình Phước</option>
                            <option value="57">Bình Thuận</option>
                            <option value="54">Bình Định</option>
                            <option value="58">Cà Mau</option>
                            <option value="111">Cần Thơ</option>
                            <option value="59">Cao Bằng</option>
                            <option value="65">Gia Lai</option>
                            <option value="66">Hà Giang</option>
                            <option value="67">Hà Nam</option>
                            <option value="68">Hà Tĩnh</option>
                            <option value="47">Hải Dương</option>
                            <option value="45">Hải Phòng</option>
                            <option value="69">Hậu Giang</option>
                            <option value="70">Hòa Bình</option>
                            <option value="71">Hưng Yên</option>
                            <option value="72">Khánh Hòa</option>
                            <option value="73">Kiên Giang</option>
                            <option value="74">Kon Tum</option>
                            <option value="75">Lai Châu</option>
                            <option value="107">Làm online</option>
                            <option value="76">Lâm Đồng</option>
                            <option value="77">Lạng Sơn</option>
                            <option value="78">Lào Cai</option>
                            <option value="80">Nam Định</option>
                            <option value="81">Nghệ An</option>
                            <option value="82">Ninh Bình</option>
                            <option value="83">Ninh Thuận</option>
                            <option value="108">Nước ngoài</option>
                            <option value="109">Phú Quốc</option>
                            <option value="84">Phú Thọ</option>
                            <option value="102">Phú Yên</option>
                            <option value="85">Quảng Bình</option>
                            <option value="86">Quảng Nam</option>
                            <option value="87">Quảng Ngãi</option>
                            <option value="88">Quảng Ninh</option>
                            <option value="89">Quảng Trị</option>
                            <option value="90">Sóc Trăng</option>
                            <option value="91">Sơn La</option>
                            <option value="92">Tây Ninh</option>
                            <option value="93">Thái Bình</option>
                            <option value="48">Thái Nguyên</option>
                            <option value="94">Thanh Hóa</option>
                            <option value="95">Thừa Thiên Huế</option>
                            <option value="96">Tiền Giang</option>
                            <option value="106">tỉnh Tottori</option>
                            <option value="97">Trà Vinh</option>
                            <option value="98">Tuyên Quang</option>
                            <option value="99">Vĩnh Long</option>
                            <option value="100">Vĩnh Phúc</option>
                            <option value="101">Yên Bái</option>
                            <option value="110">Đà Nẵng</option>
                            <option value="60">Đắk Lắk</option>
                            <option value="61">Đắk Nông</option>
                            <option value="62">Điện Biên</option>
                            <option value="64">Đồng Tháp</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Quận</label>
                        <select class="form-select shadow-none" disabled>
                            <option select>Quận 1</option>
                            <option>Quận 2</option>
                            <option>Quận 3</option>
                            <option>Quận 4</option>
                            <option>Quận 5</option>
                            <option>Quận 6</option>
                            <option>Quận 7</option>
                            <option>Quận 8</option>
                            <option>Quận 9</option>
                            <option>Quận 10</option>
                            <option>Quận 11</option>
                            <option>Quận 12</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Phường</label>
                        <select class="form-select shadow-none" disabled>
                            <option select>Phường 1</option>
                            <option>Phường 2</option>
                            <option>Phường 3</option>
                            <option>Phường 4</option>
                            <option>Phường 5</option>
                            <option>Phường 6</option>
                            <option>Phường 7</option>
                            <option>Phường 8</option>
                            <option>Phường 9</option>
                            <option>Phường 10</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Lĩnh vực</label>
                        <select class="form-select shadow-none" disabled>
                            <option select>Lĩnh vực 1</option>
                            <option>Lĩnh vực 1</option>
                            <option>Lĩnh vực 2</option>
                            <option>Lĩnh vực 3</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Hạng mục</label>
                        <select class="form-select shadow-none" disabled>
                            <option select>Hạng mục 1</option>
                            <option>Hạng mục 2</option>
                            <option>Hạng mục 3</option>
                            <option>Hạng mục 4</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-4 col-6">
                    <div class="mb-3">
                        <label class="form-label">Diện tích: <span>m<sup>2</sup></span></label>
                        <input type="text" placeholder="Diện tích: m2" class="form-control shadow-none" value="50" disabled>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="#" class="form-label">Hình ảnh</label>
                        <div class="row row-cols-5">
                            <div class="col">
                                <a href="./assets/images/default-image.png" data-fancybox="report-price-detail-image">
                                    <img src="./assets/images/default-image.png" alt="" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col">
                                <a href="./assets/images/default-image.png" data-fancybox="report-price-detail-image">
                                    <img src="./assets/images/default-image.png" alt="" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col">
                                <a href="./assets/images/default-image.png" data-fancybox="report-price-detail-image">
                                    <img src="./assets/images/default-image.png" alt="" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col">
                                <a href="./assets/images/default-image.png" data-fancybox="report-price-detail-image">
                                    <img src="./assets/images/default-image.png" alt="" class="img-fluid img-thumbnail">
                                </a>
                            </div>
                            <div class="col">
                                <a href="./assets/images/default-image.png" data-fancybox="report-price-detail-image">
                                    <img src="./assets/images/default-image.png" alt="" class="img-fluid img-thumbnail">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-md-end justify-content-center">
                    <button class="btn btn-primary">Lưu thay đổi</button>
                </div>
            </div>
        </div>

    </section>


    <?php include('layouts/footer.php') ?>

    <?php include('layouts/script.php') ?>

    <?php include('layouts/modal/modal-contact.php') ?>
    <script>

    </script>

</body>

</html>