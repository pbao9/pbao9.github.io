<div class="col-md-3 col-12 pt-3 ps-lg-5 ps-2 position-sticky top-0 sidebar" style="border-left: 1px var(--tblr-border-style) rgba(97, 104, 118, .16)">
    <h2 class="title-sidebar">Danh mục</h2>
    <?php
    $data = array(
        array('Danh mục xây nhà', array('Bài viết 1.1', 'Bài viết 1.2', 'Bài viết 1.3', 'Bài viết 1.4', 'Bài viết 1.5')),
        array('Danh mục xây dựng', array('Bài viết 2.1', 'Bài viết 2.2', 'Bài viết 2.3', 'Bài viết 2.4', 'Bài viết 2.5')),
        array('Danh mục báo giá nhà', array('Bài viết 3.1', 'Bài viết 3.2', 'Bài viết 3.3', 'Bài viết 3.4', 'Bài viết 3.5'))
    );
    ?>

    <ol>
        <?php foreach ($data as $item) : ?>
            <li><a href="#" class="text-decoration-none"><?php echo $item[0]; ?></a></li>
            <ul>
                <?php foreach ($item[1] as $subItem) : ?>
                    <li><a href="#" class="text-decoration-none"><?php echo $subItem; ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php endforeach; ?>
    </ol>

    <h2 class="title-sidebar">Nhà thầu nổi bật</h2>


    <?php

    $posts = [
        ['./assets/images/feature_post.jpg', 'Công ty cổ phần đầu tư nhà Hà Nội (HN HOUSE)', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus adipisci eius aperiam numquam deleniti ducimus.'],
        ['./assets/images/feature_post_2.jpg', 'Công ty TNHH Đầu Tư Thương Mại Xây Dựng Nhà Bảo Khang', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus adipisci eius aperiam numquam deleniti ducimus.'],
        ['./assets/images/feature_post_3.jpg', 'Công ty TNHH tư vấn đầu tư xây dựng đầu tư Sông Ba', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus adipisci eius aperiam numquam deleniti ducimus.'],

    ];
    ?>

    <?php foreach ($posts as $post) : ?>
        <div class="d-flex flex-column border-bottom py-3">
            <img src="<?= $post[0]; ?>" alt="" class="img-fluid">
            <h3 class="title-post my-2"><a href="#" class="text-brown text-decoration-none"><?= $post[1]; ?></a></h3>
            <span class="title-desc"><?= $post[2]; ?></span>
        </div>
    <?php endforeach; ?>
</div>