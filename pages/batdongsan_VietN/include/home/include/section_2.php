<section class="featured-post py-5 bg-white" id="featured_post">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Bài viết nổi bật</h1>
            <a href="./post_thau_mau_nha.php" class="text-decoration-none">Đọc thêm <i class="fa-solid fa-arrow-right-long px-2"></i></a>
        </div>
        <div class="row">
            <?php

            for ($i = 0; $i < 8; $i++) {
                echo '<div class="col-lg-3 mb-3 col-6">
                 <a href="./post-detail.php">
                    <div class="d-flex flex-column bg-white shadow rounded py-3">
                        <img src="./assets/images/example_img.jpg" alt="" class="p-0 m-0 mb-2 w-100">
                        <div class="d-flex flex-column px-2">
                            <a href="./post-detail.php" class="nav-link mb-2 fw-bold">Xây nhà trọ kết hợp với sử dụng ở gia đình tại Nghệ An</a>
                            <div class="d-flex justify-content-between align-items-center text-wrap">
                                <span class="text-muted m-0"><strong>Ngày đăng:</strong> 01/02/2024</span>
                                <a href="./post-detail.php" class="nav-link title-link">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </a>
             </div>';
            }
            ?>



        </div>
    </div>

</section>