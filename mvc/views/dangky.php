<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="./public/css/base.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/dangkyhocphan.css">
    <!-- <link rel="stylesheet" href="./public/css/ranking.css"> -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.1.2-web/css/all.min.css">
    <link rel="stylesheet" href="./public/css/dangky.css">

</head>

<body>
    <?php require_once './mvc/views/Pages/importLoginPage.php'?>

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
                                    <lable class="table-frame-title">Đăng ký học phần: Học phần <span
                                            class="count-hocphan"> </span> Tín chỉ <span class="sum-tinchi">
                                        </span></lable>

                                    <div class="table-frames-note">
                                        <div class="table-frames-note-left">
                                            Ghi chú:
                                            <div class="table-frames-note-left-desc table-frames-note-left-overlap">
                                                <div style="background-color: #ffff00"></div>
                                                Trùng Lịch
                                            </div>
                                            <div class="table-frames-note-left-desc table-frames-note-left-cancel">
                                                <div style="background-color: #f00"></div>
                                                LHP Hủy
                                            </div>
                                        </div>
                                        <div class="table-frames-note-right">
                                            [Lọc dữ liệu]
                                        </div>
                                    </div>

                                    <table class="container__content-table">
                                        <thead class="container__content-thead">
                                            <tr class="container__content-thead-tr">
                                                <th class="container__content-thead-title" style="width:50px;">STT</th>
                                                <th class="container__content-thead-title" style="width:70px;">Mã HP
                                                </th>
                                                <th class="container__content-thead-title" style="width:150px;">Tên HP
                                                </th>
                                                <th class="container__content-thead-title" style="width:50px;">STC</th>
                                                <th class="container__content-thead-title" style="width:100px;">Số Lượng
                                                    LHP</th>
                                                <th class="container__content-thead-title" style="width:100px;"></th>
                                            </tr>
                                        </thead>
                                        <tbody class="Result__Contain-lsdk-subject">

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Bảng Kết quả đăng ký học phần -->
                                <div
                                    class="container__content-bottom--table-frames container__content-bottom--table-frames--result-register">
                                    <lable class="table-frame-title">Kết quả đăng ký: <span> Học phần</span> <span>
                                            Tín chỉ</span></lable>

                                    <div class="table-frames-note">
                                        <div class="table-frames-note-left">
                                            Ghi chú:
                                            <div class="table-frames-note-left-desc table-frames-note-left-overlap">
                                                <div style="background-color: #ffff00"></div>
                                                Trùng Lịch
                                            </div>
                                            <div class="table-frames-note-left-desc table-frames-note-left-cancel">
                                                <div style="background-color: #f00"></div>
                                                LHP Hủy
                                            </div>
                                        </div>
                                        <div class="table-frames-note-right">
                                            [Lọc dữ liệu]
                                        </div>
                                    </div>

                                    <table class="container__content-table">
                                        <thead class="container__content-thead">
                                            <tr class="container__content-thead-tr table-frames--result-register-th">
                                                <th style="width: 10%" class="container__content-thead-title"
                                                    style="width:50px;">Loại</th>
                                                <th class="container__content-thead-title" style="width:70px;">Mã LHP
                                                </th>
                                                <th class="container__content-thead-title" style="width:150px;">Tên LHP
                                                </th>
                                                <th class="container__content-thead-title" style="width:50px;">STC</th>
                                                <th class="container__content-thead-title" style="width:150px;">GV</th>
                                                <th class="container__content-thead-title" style="width:200px;">Lịch học
                                                </th>
                                                <th class="container__content-thead-title" style="width:100px;">Từ ngày
                                                </th>
                                                <th class="container__content-thead-title" style="width:100px;">Đến Ngày
                                                </th>
                                                <th class="container__content-thead-title" style="width:100px;"></th>
                                            </tr>
                                        </thead>

                                        <tbody class="Result__Contain-lsdk">
                                            <?php
                                            foreach ($data["histories"] as $item)
                                                { 
                                                    if(isset($item["status"]) && $item["status"] == 0)
                                                        { ?>
                                            <tr style="background: red; color: #fff"
                                                class="Result__Contain-lsdk-tr table-frames--result-register-tr overlap">
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["ThaoTac"] ?></td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["MaLopHP"] ?></td>
                                                <td class="container__content-thead-title"><?php echo $item["TenHP"] ?>
                                                </td>
                                                <td class="container__content-thead-title"><?php echo $item["soTC"] ?>
                                                </td>
                                                <td class="container__content-thead-title"><?php echo $item["TenGV"] ?>
                                                </td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["lichHoc"] ?>
                                                </td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["ngayBatDau"] ?></td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["ngayKetThuc"] ?></td>
                                                <td
                                                    class="container__content-thead-title container__content-thead-title-cancel">
                                                    <a style="color: #fff"
                                                        href="./dangky/cancelRegisted&ID=<?php echo $item["ID"] ?>">[Chuyển
                                                        nhóm]</a>

                                                    <a style="color: #fff"
                                                        onclick="return confirm('Bạn có chắc muốn hủy học phần này không ?')"
                                                        href="./dangky/cancelRegisted&ID=<?php echo $item["ID"] ?>">[Hủy]</a>
                                                </td>
                                            </tr>

                                            <?php }
                                            else
                                            {?>
                                            <tr style="background-color: #fff"
                                                class="Result__Contain-lsdk-tr table-frames--result-register-tr overlap">
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["ThaoTac"] ?></td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["MaLopHP"] ?></td>
                                                <td class="container__content-thead-title"><?php echo $item["TenHP"] ?>
                                                </td>
                                                <td class="container__content-thead-title"><?php echo $item["soTC"] ?>
                                                </td>
                                                <td class="container__content-thead-title"><?php echo $item["TenGV"] ?>
                                                </td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["lichHoc"] ?>
                                                </td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["ngayBatDau"] ?></td>
                                                <td class="container__content-thead-title">
                                                    <?php echo $item["ngayKetThuc"] ?></td>
                                                <td
                                                    class="container__content-thead-title container__content-thead-title-cancel">
                                                    <a
                                                        href="./DanhSachLopHPDangKy&MaLHP=<?php echo $item["MaLopHP"] ?>&MaLich=<?php echo $item["maLich"] ?>">[Chuyển
                                                        nhóm]</a>

                                                    <a onclick="return confirm()" class='cancel'
                                                        href="./dangky/cancelRegisted&ID=<?php echo $item["ID"] ?>">[Hủy]</a>
                                                </td>
                                            </tr>
                                            <?php }}?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="./public/js/dsmonhoc.js"></script>

        <?php require_once './mvc/views/pages/footer.php' ?>

    </div>
</body>

</html>