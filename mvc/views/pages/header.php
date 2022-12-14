<div class="header">
    <div class="grid">
        <div class="grid-2">
            <div class="header__img">
                <img src="public/images/qnu-banner.png" style="width: 100%;max-height: 400px;"
                    class="header__img-banner">
            </div>
            <div class="header__navbar">
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <span class="header__navbar-item-home">Trang Chủ</span>
                    </li>
                </ul>
                <ul class="header__navbar-list">
                    <li class="header__navbar-item">
                        <span class="header__navbar-item-identify-number"><?php echo  $_SESSION['masinhvien'][0]["MaSV"] ?></span>
                    </li>
                    <li class="header__navbar-item">
                        <span class="header__navbar-item-line">|</span>
                    </li>
                    <li class="header__navbar-item">
                        <span class="header__navbar-item-name"><?php echo $_SESSION['masinhvien'][0]["HoDem"]. " " .$_SESSION['masinhvien'][0]["Ten"]?></span>
                    </li>
                    <a href="./DangNhap/checkLogOut" class="header__navbar-item logout">
                        <span class="header__navbar-item-logout">Đăng xuất</span>
                    </a>
                </ul>
            </div>
        </div>
    </div>
</div>