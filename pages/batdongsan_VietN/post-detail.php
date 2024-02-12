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
                <li class="breadcrumb-item"><a href="." class="text-decoration-none text-brown">Thầu mẫu nhà</a></li>
                <li class="breadcrumb-item active"><a href="#">Bài viết 1</a></li>
            </ol>
        </div>
    </div>

    <section class="bg-white">
        <div class="container">
            <div class="row justify-content-between py-3 align-items-start">
                <div class="col-md-8 col-12">
                    <div class="d-flex gap-2">
                        <span class="badge bg-secondary-lt">Danh mục 1</span>
                        <span class="badge bg-secondary-lt">Danh mục 2</span>
                        <span class="badge bg-secondary-lt">Hashtag #1</span>
                        <span class="badge bg-secondary-lt">Hashtag #1</span>
                    </div>
                    <h2 class="title-post py-3">Chi phí xây nhà 2 tầng ở nông thôn cùng những mẫu nhà đa dạng</h2>
                    <p>Ngôi nhà 2 tầng hiện nay đang trở thành xu hướng thiết kế được rất nhiều gia đình lựa chọn ở nông thôn. Bởi kiểu xây dựng hiện đại, vừa đảm bảo công năng sử dụng vừa tiết kiệm diện tích xây dựng tối đa. Trong bài viết chúng tôi sẽ cung cấp cách tính chi phí xây nhà 2 tầng ở nông thôn hiện nay để bạn có thể lập dự toán chi phí xây dựng chính xác để bắt tay triển thi công ngôi nhà của gia đình.</p>
                    <div class="gallery-post">
                        <?php include('layouts/component/gallery.php') ?>
                    </div>
                    <?php include('layouts/component/toc.php') ?>
                    <div class="content-post my-5">
                        <div id="title_1" class="d-flex align-items-center flex-column gap-2">
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">1. Nội dung mục lớn</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                                <img src="./assets/images/post_detail_1.jpg" alt="">
                            </div>

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">Lấy báo giá</a>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">1.1 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">1.2 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                        </div>
                        <div id="title_2" class="d-flex align-items-center flex-column gap-2">
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">2. Nội dung mục lớn</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                                <img src="./assets/images/post_detail_1.jpg" alt="">
                            </div>

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">Lấy báo giá</a>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">2.1 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">2.2 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                        </div>
                        <div id="title_3" class="d-flex align-items-center flex-column gap-2">
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">3. Nội dung mục lớn</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                                <img src="./assets/images/post_detail_1.jpg" alt="">
                            </div>

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">Lấy báo giá</a>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">3.1 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">3.2 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                        </div>
                        <div id="title_4" class="d-flex align-items-center flex-column gap-2">
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">4. Nội dung mục lớn</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                                <img src="./assets/images/post_detail_1.jpg" alt="">
                            </div>

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">Lấy báo giá</a>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">4.1 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                            <div class="d-flex flex-column">
                                <h2 class="fw-bold">4.2 Nội dung mục nhỏ</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ut ipsam debitis, esse aliquam quis. Similique itaque eos suscipit quas perspiciatis impedit hic odit dolor vero, quos iste rerum, eaque reiciendis labore cupiditate autem. Est reprehenderit veritatis eum quo accusantium harum fugit debitis qui blanditiis!</p>
                            </div>
                        </div>

                    </div>

                    <div class="related-post my-2">
                        <div class="hr-text">
                            <h2>Bài viết liên quan</h2>

                        </div>
                        <div class="d-flex">
                            <div class="owl-carousel owl-theme px-2">
                                <?php
                                for ($i = 1; $i < 6; $i++) {
                                    echo ('
                                    <div class="item">
                                    <a href="./post-detail.php" class="nav-link">
                                        <div class="card">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex flex-column p-2">
                                                    <img src="./assets/images/post_detail_' . $i . '.jpg" alt="" class="img-fluid">
                                                    <h2 class="mt-2">Bài viết ' . $i . '</h2>
                                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque, distinctio? Voluptatibus unde eius tempore exercitationem?</p>
                                                </div>

                                                <div class="d-flex flex-row justify-content-between p-2">
                                                    <span>01/02/2024</span>
                                                    <a href="#" class="nav-link">Xem thêm <i class="fa-solid fa-arrow-right-long px-2"></i></a>
                                                </div>
                                            </div>

                                        </div>
                                    </a>
                                </div>
                                        ');
                                }
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
                <?php include('layouts/component/sidebar.php') ?>

            </div>

        </div>
    </section>
    <?php include('layouts/script.php') ?>
    <?php include('layouts/footer.php') ?>

</body>

</html>