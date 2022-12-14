<?php require_once 'pages/importLoginPage.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xếp Hạng</title>
    <link rel="icon" href="public/images/logo-qnu.png" type="image/x-icon" sizes="32*32">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/ranking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>

<body>
    <div class="app">
        <?php require_once './mvc/views/pages/header.php' ?>
        <div class="category">
            <div class="grid">
                <div class="grid-2">
                    <div class="container">
                        <div class="container__sidebar">
                            <?php require_once './mvc/views/Pages/Sidebar.php' ?>
                        </div>
                        <div class="container__content">
                            <div class="container__content-header">
                                <div class="container__content-title">
                                    <i class="container__content-icon fa-solid fa-tag"></i>
                                    <span class="container__content-title-history">Xếp Hạng</span>
                                </div>
                                <div class="container__content-header-filter">

                                    <div
                                        class="container__content-header-filter-item container__content-header-filter-item-department">
                                        <p class="container__content-header-filter-text">Khoa: </p>
                                        <select name="" id="" class="container__content-header-dropdown">
                                            <option>Công nghệ thông tin</option>
                                        </select>
                                    </div>

                                    <div class="container__content-header-filter-item">
                                        <p class="container__content-header-filter-text">Năm: </p>
                                        <select id="" class="container__content-header-dropdown year-contain"
                                            onchange="yearChange(this)">

                                        </select>
                                    </div>

                                    <div class="container__content-header-filter-item">
                                        <p class="container__content-header-filter-text">Học Kì: </p>
                                        <select name="" id=""
                                            class="container__content-header-dropdown semester-contain"
                                            onchange="semesterChange(this)">

                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="container__content-own-rank">
                            <i class="fa-solid fa-graduation-cap"></i><p class="container__content-own-rank-user">Xếp hạng của bạn: <span class="desc" data="<?php echo $_SESSION['masinhvien'][0]['MaSV'];?>"></span></p>
                            </div>

                            <div class="grid-3" style="position: relative">
                                <table class="container__content-table container__content-table-ranking">
                                    <thead class="container__content-thead">
                                        <tr class="container__content-thead-tr">
                                            <th class="container__content-thead-title" style="width:50px;">STT</th>
                                            <th class="container__content-thead-title" style="width:70px;">Mã SV</th>
                                            <th class="container__content-thead-title" style="width:150px;">Họ Tên</th>
                                            <th class="container__content-thead-title" style="width:50px;">Lớp</th>
                                            <th class="container__content-thead-title" style="width:100px;">Điểm trung bình (Hệ 10)</th>
                                            <th class="container__content-thead-title" style="width:100px;">Điểm rèn luyện</th>
                                            <th class="container__content-thead-title container__content-thead-title-priortized" style="width:150px;">Mức độ ưu tiên<i class="fa-solid fa-angles-right"></i></th>
                                        </tr>
                                    </thead>

                                    <tbody class="container__content-tbody">
                                    </tbody>
                                </table>
                                <div class="desc-priortized">
                                    <p class="desc-priortized-title">Chi tiết</p>
                                    <ul class="desc-priortized-list"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./public/js/Ranking.js"></script>
    <script>
        const menu = document.querySelectorAll('.container__sidebar-item-hover');

        for(const item of menu){
        if(item.getAttribute('data') == "ranking"){
            item.classList.add('active')
        }
        else item.classList.remove('active')
        }
    </script>
    <?php require_once './mvc/views/pages/footer.php' ?>
</body>

</html>