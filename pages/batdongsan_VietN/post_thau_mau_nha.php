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
                <li class="breadcrumb-item active"><a href="#">Thầu mẫu nhà</a></li>
            </ol>
        </div>
    </div>

    <section class="bg-white">
        <div class="container">
            <div class="row py-3 justify-content-between align-items-start">

                <div class="col-md-8">
                    <?php include('layouts/component/filter.php') ?>

                    <h2 class="title-post">Thầu mẫu nhà</h2>
                    <?php
                    for ($i = 0; $i < 8; $i++) {
                        echo (
                            '
                            <div class="card mb-3">
                            <div class="row row-0">
                                <div class="col-lg-3 col-12">
                                    <img src="./assets/images/feature_post_3.jpg" class="w-100 h-100 object-fit-contain card-img-start" alt="image_post">
                                </div>
                                <div class="col-lg-9 col-12 d-flex align-items-center">
                                    <div class="card-body">
                                        <a href="./post-detail.php" class="fs-2 fw-bold text-brown text-decoration-none">Cần thiết kế thi công trọn gói homestay tại Bình Thuận</a>
                                        <p class="text-muted py-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto at consectetur culpa ducimus eum fuga fugiat, ipsa iusto, modi nostrum recusandae reiciendis saepe.</p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <h3 class="mb-0 text-brown">Nguyễn Văn A</h3>
                                                <span class="pe-1 ps-1">|</span>
                                                <p class="text-muted mb-0"><strong>Ngày đăng:</strong> 01/02/2024</p>
                                            </div>
                                            <a href="./post-detail.php" class="text-decoration-none text-brown">Xem thêm <i class="fa-solid fa-arrow-right-long px-2"></i></a>
                                        </div>
    
                                    </div>
                                </div>
                            </div>
                        </div>


                                '
                        );
                    }

                    ?>

                    <ul class="pagination ">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">

                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M15 6l-6 6l6 6"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link shadow-none" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link shadow-none" href="#">2</a></li>
                        <li class="page-item"><a class="page-link shadow-none" href="#">3</a></li>
                        <li class="page-item"><a class="page-link shadow-none" href="#">4</a></li>
                        <li class="page-item"><a class="page-link shadow-none" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M9 6l6 6l-6 6"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <?php include('layouts/component/sidebar.php') ?>
            </div>

        </div>
        </div>
    </section>
    <?php include('layouts/script.php') ?>
    <?php include('layouts/footer.php') ?>

</body>

</html>