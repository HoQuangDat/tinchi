<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/ranking.css">
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
                        <div class="container__content-title">
                            <i class="container__content-icon fa-solid fa-tag"></i>
                            <span class="container__content-title-history">Lịch sử đăng ký học phần</span>
                        </div>
                        <div class="grid-3">
                        <div class="container__content-option">
                                <span class="container__content-cancel">
                                <i class="fa-solid fa-circle-info"></i>
                                    Học phần bị hủy</span>
                                <span class="container__content-regis">
                                <i class="fa-solid fa-circle-info"></i>
                                    Học phần đăng kí</span>
                            </div>
                            <div class="container__content-fill">
                                <span>Năm học:</span>
                                <select class="container__content-item-year" >

                                </select>
                                <span>Học kỳ:</span>
                                <select class="container__content-item-semester">

                                </select>
                                
                            </div>
                            <div class="container__content-attention">
                                <p> <span>(*)</span> Lưu ý những hàng có nền màu <i class="fa-solid fa-square"></i> là những môn đã bị hủy.</p>
                            </div>
                            <table class="container__content-table">
                                <tr class="container__content-list">
                                    <td class="container__content-table-item">Thao tác</td>
                                    <td class="container__content-table-item">Mã HP</td>
                                    <td class="container__content-table-item container__content-table-item-subject">Tên
                                        HP</td>
                                    <td class="container__content-table-item">Thao tác bởi</td>
                                    <td class="container__content-table-item">Vào ngày</td>
                                    <td class="container__content-table-item">DSSV</td>
                                    
                                </tr>
                                <tbody class="Result__Contain-lsdk">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 9/11 -->
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">
            <div class="list__student">
                <div class="list__student-close">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="list__header">
                    DANH SÁCH SINH VIÊN
                </div>
                <table class="list__student-table">
                    <tr class="list__student-title">
                        <td class="list__student-title-item">Stt</td>
                        <td class="list__student-title-item">Mã sinh viên</td>
                        <td class="list__student-title-item">Họ</td>
                        <td class="list__student-title-item">Tên</td>
                        <td class="list__student-title-item">Ngày sinh</td>
                        <td class="list__student-title-item">Giới tính</td>
                    </tr>
                    <tbody class="list__student-details">
                       
                    </tbody>     
                    
                   
                </table>
            </div>
        </div>
    </div>

    <script src="./public/js/ajax.js"></script>

    <?php require_once './mvc/views/Pages/Footer.php' ?>
</body>

</html>