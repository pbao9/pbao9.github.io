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
                <li class="breadcrumb-item active"><a href="#">Danh sách báo giá</a></li>
            </ol>
        </div>
    </div>

    <section class="bg-white">
        <div class="container-xl py-5">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                        <thead>
                            <tr>
                                <th>Mã YC</th>
                                <th>Ngày hẹn</th>
                                <th>Ngày triển khai</th>
                                <th>Trạng thái</th>
                                <th class="w-1">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#" class="text-decoration-none">#KH001</a></td>
                                <td class="text-muted">01/02/2025</td>
                                <td class="text-muted">01/03/2025</td>
                                <td>
                                    <span class="badge bg-green-lt">Đã liên hệ</span>
                                </td>
                                <td>
                                    <a href="./report-price-detail.php" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-decoration-none">#KH002</a></td>
                                <td class="text-muted">01/02/2025</td>
                                <td class="text-muted">01/03/2025</td>
                                <td>
                                    <span class="badge">Chưa liên hệ</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-decoration-none">#KH003</a></td>
                                <td class="text-muted">01/02/2025</td>
                                <td class="text-muted">01/03/2025</td>
                                <td>
                                    <span class="badge bg-danger-lt">Từ chối</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#" class="text-decoration-none">#KH004</a></td>
                                <td class="text-muted">01/02/2025</td>
                                <td class="text-muted">01/03/2025</td>
                                <td>
                                    <span class="badge bg-green-lt">Đã liên hệ</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php include('layouts/script.php') ?>
    <?php include('layouts/footer.php') ?>
    <script>

    </script>

</body>

</html>