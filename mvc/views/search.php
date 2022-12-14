<?php require_once 'pages/importLoginPage.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="./public/css/reset.css"> -->
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/search.css">
    <title>Lịch sử đăng ký học phần</title>
</head>

<body>
    <?php require_once './mvc/views/Pages/Header.php' ?>
    <div class="category">
        <div class="grid">
            <div class="grid-2">
                <div class="container">
                    <div class="container__sidebar">
                        <?php require_once './mvc/views/Pages/Sidebar.php' ?>
                    </div>
                    <div class="container__content">
                        <div class="search">
                            <div class="search__Title">
                                <i class="container__content-icon fa-solid fa-tag"></i>
                                <span class="container__content-title-history">Tra cứu học phần</span>
                            </div>
                            <div class="grid-3">
                                <div class="search__container">
                                    <div class="search__Option">
                                        <span style="font-weight: bold;">Tìm theo: </span>
                                        <select class="search__Option-item">
                                            <option name="" id="" value="">--Chọn--</option>
                                            <option name="" id="" value="MaHP">Mã HP</option>
                                            <option name="" id="" value="TenHP">Tên HP</option>
                                            <option name="" id="" value="TenKhoa">Tên Khoa</option>
                                            <option name="" id="" value="TenGiangVien">Tên Giảng viên</option>
                                        </select>
                                        <input class="keywords" type="text" placeholder="Nhập từ khóa...">
                                        <button class="search__btn" onclick="loadSearch()">Tìm kiếm</button>
                                    </div>
                                    <div class="search__pillar">
                                        <table class="search__title">
                                            <div>
                                                <tr>
                                                    <td>Mã HP</td>
                                                    <td>Mã LHP</td>
                                                    <td>Tên HP</td>
                                                    <td>STC</td>
                                                    <td>Loại</td>
                                                    <td>Thông tin</td>
                                                    <td>Giảng viên</td>
                                                    <td>Giới hạn</td>
                                                    <td>Từ ngày</td>
                                                    <td>Đến ngày</td>
                                                </tr>
                                            </div>
                                            <tbody class="search__details">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./public/js/ajax.js"></script>
    <?php require_once './mvc/views/Pages/Footer.php' ?>
</body>

</html>