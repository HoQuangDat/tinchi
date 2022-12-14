<?php require_once 'pages/importLoginPage.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="./public/css/reset.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/KetQuaHP.css">
    <title>Lịch sử đăng ký học phần</title>
</head>

<body>
    <?php require_once './mvc/views/Pages/Header.php' ?>

    <div class="detail-result-point">
        <i class="fa-solid fa-xmark close-detail"></i>
        <h1>Học phần: <span class="name-detail"></span></h1>
        <div class="detail">
            <table class="detail-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Điểm Chuyên cần</th>
                        <th>Điểm giữa kỳ</th>
                        <th>Điểm kết thúc học phần</th>
                    </tr>
                </thead>

                <tbody class="detail-point__contain">

                </tbody>
            </table>
        </div>
    </div>

    <?php
        if($data["warning"] > 0)
        {?>
    <div class="warning--result">
        <i class="fa-solid fa-circle-info"></i>
        <div>
            <h1>Cảnh báo (<span><?php echo $data["warning"] ?></span>)</h1>
            <p>Bạn đang rơi vào trường hợp cảnh báo kết quả học tập!. Cần cải thiện điểm nhanh chóng.</p>
        </div>
    </div>
    <?php } ?>


    <div class="category">
        <div class="grid">
            <div class="grid-2">
                <div class="container">
                    <div class="container__sidebar">
                        <?php require_once './mvc/views/Pages/Sidebar.php' ?>
                    </div>
                    <div class="container__content">
                        <div class="Result__Title">
                            <h4>Kết quả học tập</h4>
                        </div>
                        <div class="Result__Option">
                            <div class="Result__Option-Row1">
                                <a class="pagination pagination-kq" href="KetQua">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    Xem
                                    kết quả học tập</a>
                                <a class="pagination" href="HocPhanChuaTL">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                    Xem
                                    học phần chưa tích lũy</a>
                                <div class="Result__status">
                                    <p>Tình trạng học phần:</p>
                                    <div>
                                        <p class="total--past"></p>
                                        <i class='fa-solid fa-check dot--result dot--past'></i>
                                    </div>
                                    <span>/</span>
                                    <div>
                                        <p class="total--fail"></p>
                                        <i class='fa-solid fa-xmark dot--result dot--fail'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="Result__Option-Row2">
                                <div class="Otion-Col">
                                    <span>Chương trình đào tạo: </span>
                                    <select>
                                        <option name="" id="">Công nghệ thông tin
                                    </select>
                                    </select>
                                </div>
                                <div class="Otion-Col">
                                    <span>Năm học: </span>
                                    <select class="year-contain">

                                    </select>
                                </div>
                                <div class="Otion-Col option-semester">
                                    <span>Học kỳ: </span>
                                    <select class="semester-contain">

                                    </select>
                                </div>
                                <div class="option-result--contain">
                                    <button class="option--result option--past" data-value=4>
                                        <i class='fa-solid fa-check dot--result dot--past'></i>
                                        Tích lũy</button>
                                    <button class="option--result option--fail" data-value=3.9><i
                                            class='fa-solid fa-xmark dot--result dot--fail'></i>
                                        Chưa tích lũy</button>
                                </div>
                            </div>
                        </div>
                        <div class="Result__Infor">
                            <p><i><u><b>Ghi chú:</b></u></i></p>
                            <p>1. Những môn có dấu <b style="color: #C80000">(*)</b> sẽ không tính điểm trung bình mà
                                chỉ là môn điều kiện.</p>
                            <p>
                                2. <i class='fa-solid fa-check dot--result dot--past'></i> Học phần tích lũy
                            </p>
                            <p>3. <i style="padding-right: 5px" class='fa-solid fa-xmark dot--result dot--fail'></i>
                                Học phần chưa tích lũy</p>
                            <button class="option-result__print"><i class="fa-solid fa-print"></i>In
                                điểm</button>
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

                                    <tbody class="Result__Contain">
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