<div class="row mx-1">
    <div class="bg-secondary-lt category-post p-2 col-md-6 col-12 rounded border ">
        <h2 class="text-center">Mục lục</h2>
        <ol>
            <?php
            for ($i = 1; $i < 5; $i++) {
                echo ('
                <li class="mb-2"><a href="#title_' . $i . '"  class="nav-link fw-bold">Nội dung mục lớn</a>
                    <ol>
                        <li><a href="#" class="nav-link">Nội dung mục nhỏ</a></li>
                        <li><a href="#" class="nav-link">Nội dung mục nhỏ</a></li>
                    </ol>
                </li>
                ');
            }
            ?>
        </ol>
    </div>
</div>