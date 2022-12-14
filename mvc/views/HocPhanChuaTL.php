
<?php require_once 'pages/importLoginPage.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/KetQuaHP.css">
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
                        <div class="Result__Title">
                            <h4>Học phần chưa tích lũy</h4>
                        </div>
                        <div class="Result__Option">
                            <div class="Result__Option-Row1">
                                <a class="pagination pagination-kq" href="KetQua"><i
                                        class="fa-solid fa-right-to-bracket"></i> Xem
                                    kết quả học tập</a>
                                <a class="pagination" href="HocPhanChuaTL"><i class="fa-solid fa-right-to-bracket"></i>
                                    Xem
                                    học phần chưa tích lũy</a>
                            </div>
                        </div>
                        <div class="Result__Infor">
                            <p><i><u><b>Ghi chú:</b></u></i></p>
                            <p>1. Những môn có dấu <b style="color: #C80000">(*)</b> sẽ không tính điểm trung bình mà
                                chỉ là môn điều
                                kiện.</p>
                            <div class="Result__Infor-Table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Mã học phần</th>
                                            <th>Tên học phần</th>
                                            <th>Tín chỉ</th>
                                            <th>Điểm 10</th>
                                            <th>Điểm 4</th>
                                            <th>Điểm chữ</th>
                                            <th>Kết quả</th>
                                            <th>Chi tiết</th>
                                        </tr>
                                    </thead>

                                    <tbody class="course-contain">

                                    </tbody>
                                </table>
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