<header class="navbar navbar-expand-md d-print-none bg-white border-bottom top-0">
    <div class="d-flex flex-column w-100">
        <div class="container-fluid align-items-center d-flex justify-content-between">
            <button class="navbar-toggler d-lg-none d-block" type="button" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button" aria-controls="offcanvasStart" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-brand">
                <a href=".">
                    <img src="./assets/images/logo.png" width="60px" height="50px" alt="Tabler" class="img-fluid">
                </a>
            </div>
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center d-lg-block d-none">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item active">
                        <a class="nav-link" href="./post_thau_mau_nha.php">
                            <span class="nav-link-title title-link">
                                Thầu mẫu nhà
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./post-detail.php">
                            <span class="nav-link-title title-link">
                                Mẫu nhà
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./post-detail.php">
                            <span class="nav-link-title title-link">
                                Chi phí xây nhà
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./post-detail.php">
                            <span class="nav-link-title title-link">
                                Nội thất
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="navbar-nav flex-row order-md-last d-lg-flex">
                <div class="nav-item dropdown d-flex flex-row justify-content-center align-items-center">
                    <button href="#" class="btn btn-brown border-0 shadow-none rounded-0 d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#modal-report">Lấy báo giá</button>
                    <a href="./register.php" class="btn btn-outline-secondary border-0 shadow-none rounded-0 d-lg-block d-none">Đăng Ký</a>
                    <a href="./login.php" class="btn btn-outline-secondary border-0 shadow-none rounded-0 d-lg-block d-none">Đăng Nhập</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu" aria-expanded="false">
                            <span class="avatar avatar-sm" style="background-image: url(./assets/images/avatar4.png)"></span>
                            <div class="d-none d-xl-block ps-2">
                                <div>Nguyễn Văn A</div>
                                <div class="mt-1 small text-muted">Đại lí</div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <a href="./profile.php" class="dropdown-item">Thông tin</a>
                            <a href="./change-password.php" class="dropdown-item">Đổi mật khẩu</a>
                            <a href="./report-price.php" class="dropdown-item">Danh sách báo giá (Đại lí)</a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">Đăng nhập</a>
                            <a href="#" class="dropdown-item">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-md-none d-block border-top pt-2">
            <div class="row">
                <div class="col-12 d-flex gap-2">
                    <input type="text" class="form-control" placeholder="Tìm kiếm....">
                    <a href="#" class="btn btn-icon btn-brown" aria-label="Button">
                        <i class="fa-solid fa-magnifying-glass px-2"></i>
                    </a>
                </div>
                <div class="col-12 pt-2">
                    <div class="d-flex justify-content-start gap-2 position-relative" id="search-top">
                        <select autocomplete="off" multiple class="form-select checkbox-options_header_1" placeholder="Danh mục">
                            <option>Danh mục 1</option>
                            <option>Danh mục 2</option>
                            <option>Danh mục 3</option>
                            <option>Danh mục 4</option>
                        </select>
                        <select autocomplete="off" multiple class="form-select checkbox-options_header_2" placeholder="Hashtag">
                            <option>Hashtag #1</option>
                            <option>Hashtag #2</option>
                            <option>Hashtag #3</option>
                            <option>Hashtag #4</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>

<?php include('layouts/modal/modal-report.php') ?>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasStartLabel">Báo giá nhà</h2>
        <button type="button" class="btn-close text-reset shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="navbar-nav flex-column order-md-last">
            <div class="row flex-column flex-md-row flex-fill align-items-stretch align-items-md-center mb-3">
                <ul class="navbar-nav fw-bold">
                    <li class="nav-item active border-bottom">
                        <a class="nav-link" href=".">
                            <span class="nav-link-title title-link">
                                Thầu mẫu nhà
                            </span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="./post-detail.php">
                            <span class="nav-link-title title-link">
                                Mẫu nhà
                            </span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="./post-detail.php">
                            <span class="nav-link-title title-link">
                                Chi phí xây nhà
                            </span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="./post-detail.php">
                            <span class="nav-link-title title-link">
                                Nội thất
                            </span>
                        </a>
                    </li>
                    <li class="nav-item border-bottom">
                        <a class="nav-link" href="./#" data-bs-toggle="modal" data-bs-target="#modal-report">
                            <span class="nav-link-title title-link">
                                Lấy báo giá
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>