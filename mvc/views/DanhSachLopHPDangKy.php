<?php require_once 'pages/importLoginPage.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Đăng Ký Lớp Học Phần</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/dangkyhocphan.css">
    <link rel="stylesheet" href="./public/css/danhSachLopHPDangKy.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
</head>

<body>
</body>
<?php require_once './mvc/views/Pages/Header.php' ?>

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
                            <span class="container__content-title-history">Đăng Ký Học Phần
                                <span>HK02,</span><span>2022-2023</span></span>
                        </div>
                        <div class="container__content-header-filter">
                            <div
                                class="container__content-header-filter-item container__content-header-filter-item-department">
                                <p class="container__content-header-filter-text">Chương trình đào tạo: </p>
                                <select name="" id="" class="container__content-header-dropdown">
                                    <option>Công nghệ thông tin</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="container__content-bottom">
                        <div class="container__content-registration-method">
                            <div class="container__content-registration-method-item">
                                <input type="radio" name="Method" id="inPlan" value="inPlan">
                                <label for="inPlan">Đăng ký theo kế hoạch</label>
                            </div>
                            <div class="container__content-registration-method-item">
                                <input type="radio" name="Method" id="outPlan" value="outPlan">
                                <label for="outPlan">Đăng ký ngoài kế hoạch</label>
                            </div>
                        </div>

                        <div class="ontainer__content-default-method">
                            <input type="checkbox" name="" id="default" value="default">
                            <label for="default">Theo lớp sinh viên</label>
                        </div>

                        <!-- Bảng đăng ký học phần -->
                        <div
                            class="container__content-bottom--table-frames container__content-bottom--table-frames--course-register">
                            <lable class="table-frame-title">Tên môn học</lable>

                            <form class="container__content-bottom--table-frames-search">
                                <input type="text" name="" id="" placeholder="Mã LHP...">
                                <input type="text" name="" id="" placeholder="Giảng Viên...">
                                <input type="text" name="" id="" placeholder="Nội dung lịch học...">
                                <input type="submit" value="Tìm kiếm">
                            </form>

                            <div style="overflow: hidden; overflow-y: scroll; ;max-height: 300px;">
                                <table class="container__content-table">
                                    <thead class="container__content-thead" style="position: sticky; top: 0;">
                                        <tr class="container__content-thead-tr">
                                            <th class="container__content-thead-title" style="width:50px;">Chọn</th>
                                            <th class="container__content-thead-title" style="width:70px;">Mã LHP</th>
                                            <th class="container__content-thead-title" style="width:50px;">Giới hạn</th>
                                            <th class="container__content-thead-title" style="width:70px;">Số lượng ĐK
                                            </th>
                                            <th class="container__content-thead-title" style="width:100px;">GV</th>
                                            <th class="container__content-thead-title" style="width:200px;">Lịch học
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="Result__Contain-lsdk-class">

                                    </tbody>
                                </table>
                            </div>

                            <div class="container__content-bottom--table-frames--back-btn">
                                <a href="dangky"><button>Quay Lại</button></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="./public/js/dslophoc.js"></script>
</div>

<?php require_once './mvc/views/pages/footer.php' ?>

</html>