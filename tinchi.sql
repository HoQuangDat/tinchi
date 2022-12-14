-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 10, 2022 lúc 09:31 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tinchi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethocphan`
--

CREATE TABLE `chitiethocphan` (
  `ID` int(11) NOT NULL,
  `diemGK` float DEFAULT NULL,
  `diemCC` float DEFAULT NULL,
  `diemCK` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chitiethocphan`
--

INSERT INTO `chitiethocphan` (`ID`, `diemGK`, `diemCC`, `diemCK`) VALUES
(1, 5, 6, 9),
(2, 4, 3, 2),
(3, 10, 8, 6),
(4, 3, 3.5, 4.8),
(5, 3.5, 3.7, 5),
(6, 4, 4.2, 3.3),
(7, 2.5, 1.7, 3),
(8, 4.5, 3.2, 4),
(9, 2, 5.7, 5),
(10, 6, 7, 4),
(11, 6, 5, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuongtrinhdaotao`
--

CREATE TABLE `chuongtrinhdaotao` (
  `STT` int(11) NOT NULL,
  `MaHocPhan` int(11) DEFAULT NULL,
  `MaHK` int(11) NOT NULL,
  `MaNH` int(11) NOT NULL,
  `MaKhoa` int(11) DEFAULT NULL,
  `TenHocPhan` varchar(50) DEFAULT NULL,
  `SoTc` int(11) DEFAULT NULL,
  `SoTiet` varchar(50) DEFAULT NULL,
  `HocPhanHocTruoc` varchar(50) DEFAULT NULL,
  `HocPhanThayThe` varchar(50) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chuongtrinhdaotao`
--

INSERT INTO `chuongtrinhdaotao` (`STT`, `MaHocPhan`, `MaHK`, `MaNH`, `MaKhoa`, `TenHocPhan`, `SoTc`, `SoTiet`, `HocPhanHocTruoc`, `HocPhanThayThe`, `status`) VALUES
(1, 1, 1, 1, 1111, 'Mạng Máy Tính', 3, '40', ' ', '', 'Bắt buộc'),
(2, 2, 1, 1, 1111, 'Toán rời rạc', 3, '40', ' ', '', 'Bắt buộc'),
(3, 3, 2, 2, 1111, 'Kỹ Thuật Lập Trình', 3, '40', ' ', '', 'Bắt buộc'),
(4, 4, 2, 2, 1111, 'Xác suất thống kê', 3, '40', ' ', '', 'Bắt buộc'),
(6, 6, 1, 2, 1111, 'Thực hành máy tính', 3, '40', ' ', '', 'Tự chọn'),
(7, 7, 4, 3, 1111, 'Tiếng Anh', 3, '40', ' ', '', 'Tự chọn'),
(8, 8, 5, 1, 1111, 'Phương pháp tính', 3, '40', ' ', '', 'Bắt buộc'),
(9, 5, 2, 1, 1111, 'Giải tích', 3, '40', ' ', '', 'Bắt buộc'),
(10, 12, 1, 1, 1111, 'Lập trình desktop', 3, '25', '[value-9]', '[value-10]', 'Bắt buộc'),
(11, 13, 2, 1, 1111, 'Làm việc nhóm', 3, '45', '[value-9]', '[value-10]', 'Bắt buộc'),
(12, 14, 1, 3, 1111, 'Khởi nghiệp', 3, '39', '[value-9]', '[value-10]', 'Bắt buộc'),
(13, 15, 2, 2, 1111, 'Lập trình trí tuệ nhân tạo', 3, '25', '[value-9]', '[value-10]', 'Bắt buộc'),
(14, 16, 1, 1, 1111, 'Lập trình web', 3, '25', '[value-9]', '[value-10]', 'Bắt buộc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkyhocphan`
--

CREATE TABLE `dangkyhocphan` (
  `ID` int(11) NOT NULL,
  `Loai` varchar(50) DEFAULT NULL,
  `MaLHP` int(11) DEFAULT NULL,
  `MaKhoa` int(11) DEFAULT NULL,
  `MaNH` int(11) NOT NULL,
  `MaHK` int(11) NOT NULL,
  `STC` int(11) DEFAULT NULL,
  `gioiHan` int(11) NOT NULL,
  `dangKy` int(11) NOT NULL,
  `LichHoc` varchar(200) DEFAULT NULL,
  `TuNgay` date DEFAULT NULL,
  `DenNgay` date DEFAULT NULL,
  `maLich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangkyhocphan`
--

INSERT INTO `dangkyhocphan` (`ID`, `Loai`, `MaLHP`, `MaKhoa`, `MaNH`, `MaHK`, `STC`, `gioiHan`, `dangKy`, `LichHoc`, `TuNgay`, `DenNgay`, `maLich`) VALUES
(1, '', 1, 1111, 1, 2, 3, 25, 4, 'Thứ 2, Tiết: 3-5, Tuần: T3->T11, Phòng: A1.407', '2022-12-01', '2023-03-05', 1),
(2, '', 1, 1111, 1, 2, 3, 30, 22, 'Thứ 3, Tiết: 1-2, Tuần: T3->T11, Phòng: A5.09', '2022-12-01', '2023-03-05', 2),
(3, '', 3, 1111, 3, 1, 3, 15, 15, 'Thứ 4, Tiết: 1-1, Tuần: T10, Phòng: A5.09', '2022-12-01', '2023-03-05', 3),
(4, '', 4, 2222, 2, 1, 3, 30, 4, 'Thứ 6, Tiết: 3-5, Tuần: T3->T18, Phòng: A1.408', '2022-12-01', '2023-03-05', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemrenluyen`
--

CREATE TABLE `diemrenluyen` (
  `ID` int(11) NOT NULL,
  `MaSV` int(11) DEFAULT NULL,
  `namHoc` int(11) DEFAULT NULL,
  `hocKy` int(11) DEFAULT NULL,
  `diemSo` int(11) DEFAULT NULL,
  `diemChu` varchar(100) DEFAULT NULL,
  `idNamHoc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diemrenluyen`
--

INSERT INTO `diemrenluyen` (`ID`, `MaSV`, `namHoc`, `hocKy`, `diemSo`, `diemChu`, `idNamHoc`) VALUES
(1, 2, 2020, 1, 90, 'Xuất sắc', 1),
(2, 2, 2021, 1, 80, 'Giỏi', 2),
(3, 2, 2020, 3, 70, 'Khá', 1),
(4, 2, 2021, 2, 60, 'Trung bình', 2),
(5, 2, 2020, 2, 80, 'Giỏi', 1),
(6, 2, 2022, 2, 80, 'Giỏi', 3),
(7, 2, 2022, 1, 70, 'Khá', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemtrungbinh`
--

CREATE TABLE `diemtrungbinh` (
  `id` int(11) NOT NULL,
  `idnamhoc` int(11) NOT NULL,
  `idsv` int(11) NOT NULL,
  `idhk` int(11) NOT NULL,
  `dtb` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `diemtrungbinh`
--

INSERT INTO `diemtrungbinh` (`id`, `idnamhoc`, `idsv`, `idhk`, `dtb`) VALUES
(1, 1, 1, 1, 8.9),
(2, 1, 1, 2, 6.5),
(3, 1, 1, 3, 7.9),
(4, 1, 2, 1, 4.3),
(5, 1, 2, 2, 8.3),
(6, 1, 3, 1, 9.02),
(7, 1, 4, 1, 8.8),
(8, 1, 1, 1, 8.9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `ID` int(11) NOT NULL,
  `hocky` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`ID`, `hocky`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `MaHP` int(11) NOT NULL,
  `TenHP` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`MaHP`, `TenHP`) VALUES
(1, 'Mạng Máy Tính'),
(2, 'Toán rời rạc'),
(3, 'Kỹ thuật lập trình'),
(4, 'Xác suất thống kê'),
(5, 'Giải tích'),
(6, 'Thực hành máy tính'),
(7, 'Tiếng Anh'),
(8, 'Phương pháp tính'),
(9, 'Tuyến tính'),
(10, 'Nhập môn công nghệ phần mềm'),
(11, 'Toán cao cấp'),
(12, 'Lập trình desktop'),
(13, 'Làm việc nhóm'),
(14, 'Khởi nghiệp'),
(15, 'Lập trình trí tuệ nhân tạo'),
(16, 'Lập trình web');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphanthaythe`
--

CREATE TABLE `hocphanthaythe` (
  `STT` int(11) NOT NULL,
  `HPOrigin` int(11) DEFAULT NULL,
  `HPChange` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hocphanthaythe`
--

INSERT INTO `hocphanthaythe` (`STT`, `HPOrigin`, `HPChange`) VALUES
(1, 3, 0),
(2, 4, 0),
(3, 2, 0),
(4, 5, 0),
(5, 6, 0),
(6, 7, 0),
(7, 8, 0),
(8, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketquahoctap`
--

CREATE TABLE `ketquahoctap` (
  `ID` int(11) NOT NULL,
  `MaSV` int(11) DEFAULT NULL,
  `MaHocPhan` int(11) DEFAULT NULL,
  `MaKhoa` int(11) DEFAULT NULL,
  `TinChi` int(11) DEFAULT NULL,
  `Diem10` float DEFAULT NULL,
  `Diem4` float DEFAULT NULL,
  `DiemChu` varchar(50) DEFAULT NULL,
  `KetQua` varchar(50) DEFAULT NULL,
  `IDChiTiet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `ketquahoctap`
--

INSERT INTO `ketquahoctap` (`ID`, `MaSV`, `MaHocPhan`, `MaKhoa`, `TinChi`, `Diem10`, `Diem4`, `DiemChu`, `KetQua`, `IDChiTiet`) VALUES
(1, 2, 1, 1111, 3, 7, 3, 'C', '', 1),
(2, 2, 2, 1111, 3, 3, 4, 'F', '', 2),
(3, 2, 3, 1111, 3, 7.3, 3, 'B+', '', 3),
(4, 2, 4, 1111, 3, 3, 1, 'F', '', 4),
(6, 2, 5, 1111, 2, 3, 1.5, 'F', '[value-9]', 5),
(7, 2, 6, 1111, 4, 3, 2, 'F', '[value-9]', 6),
(8, 2, 7, 1111, 2, 4, 2, 'D', '[value-9]', 8),
(9, 2, 8, 1111, 5, 2, 2, 'F', '[value-9]', 8),
(10, 2, 9, 1111, 3, 7, 3, 'C', '[value-9]', 9),
(11, 2, 10, 1111, 1, 6, 2, 'C', '[value-9]', 10),
(12, 2, 11, 1111, 3, 4, 0, 'D', '[value-9]', 11);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` int(11) NOT NULL,
  `TenKhoa` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`) VALUES
(1111, 'Công Nghệ Thông Tin'),
(2222, 'Sư Phạm Tiểu Học'),
(3333, 'Sư Phạm Mầm Non');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsudangkyhocphan`
--

CREATE TABLE `lichsudangkyhocphan` (
  `ID` int(11) NOT NULL,
  `ThaoTac` varchar(50) DEFAULT NULL,
  `MaLopHP` int(11) DEFAULT NULL,
  `MaTK` int(11) DEFAULT NULL,
  `MaHK` int(11) NOT NULL,
  `soTC` int(11) NOT NULL,
  `MaNH` int(11) NOT NULL,
  `VaoNgay` datetime DEFAULT NULL,
  `lichHoc` text NOT NULL,
  `ngayBatDau` date DEFAULT NULL,
  `ngayKetThuc` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `maLich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lichsudangkyhocphan`
--

INSERT INTO `lichsudangkyhocphan` (`ID`, `ThaoTac`, `MaLopHP`, `MaTK`, `MaHK`, `soTC`, `MaNH`, `VaoNgay`, `lichHoc`, `ngayBatDau`, `ngayKetThuc`, `status`, `maLich`) VALUES
(1, 'Hủy học phần', 1, 2, 1, 3, 1, '2022-08-22 10:14:26', 'Thứ 2, Tiết: 3-5, Tuần: T3->T11, Phòng: A1.407', '2022-11-01', '2023-02-01', 1, 1),
(2, 'Hủy học phần', 2, 2, 1, 2, 1, '2022-08-22 10:14:26', 'Thứ 2, Tiết: 3-5, Tuần: T3->T11, Phòng: A1.407', '2022-11-01', '2023-03-10', 1, 2),
(3, 'Hủy học phần', 3, 2, 2, 2, 1, '2022-08-22 10:14:26', 'Thứ 2, Tiết: 3-5, Tuần: T3->T11, Phòng: A1.407', '2022-12-02', '2022-12-30', 0, 0),
(4, 'Hủy học phần', 4, 2, 3, 1, 1, '2022-08-22 10:14:26', '', '2022-12-01', '2022-12-30', 0, 2),
(5, 'Hủy học phần', 5, 2, 1, 3, 2, '2022-05-11 00:00:00', '', NULL, NULL, 0, 0),
(6, 'Hủy học phần', 6, 2, 1, 1, 2, '2022-05-11 00:00:00', '', NULL, NULL, 0, 0),
(7, 'Hủy học phần', 7, 2, 1, 3, 2, '2022-05-11 00:00:00', '', NULL, NULL, 0, 0),
(8, 'Hủy học phần', 8, 2, 1, 3, 3, '2022-05-11 00:00:00', '', NULL, NULL, 0, 0),
(9, 'Hủy học phần', 9, 2, 2, 4, 3, '2022-05-11 00:00:00', '', NULL, NULL, 0, 0),
(10, 'Hủy học phần', 10, 2, 2, 2, 3, '2022-05-11 00:00:00', '', NULL, NULL, 0, 0),
(11, 'Hủy học phần', 11, 2, 2, 1, 3, '2022-05-11 00:00:00', '', NULL, NULL, 0, 0),
(14, 'Đăng ký', 4, 2, 1, 3, 2, '2022-12-10 09:12:07', 'Thứ 6, Tiết: 3-5, Tuần: T3->T18, Phòng: A1.408', '2022-01-05', '2022-03-05', 1, 2),
(15, 'Đăng ký', 4, 2, 1, 3, 2, '2022-12-10 09:12:22', 'Thứ 6, Tiết: 3-5, Tuần: T3->T18, Phòng: A1.408', '2022-12-06', '2022-12-30', 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophocphan`
--

CREATE TABLE `lophocphan` (
  `ID` int(11) NOT NULL,
  `MaLHP` int(11) DEFAULT NULL,
  `MaHP` int(11) DEFAULT NULL,
  `TenGV` varchar(50) DEFAULT NULL,
  `maLich` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `lophocphan`
--

INSERT INTO `lophocphan` (`ID`, `MaLHP`, `MaHP`, `TenGV`, `maLich`) VALUES
(1, 1, 1, 'Nguyễn Ngọc Dũng', 1),
(2, 4, 2, 'Lê Xuân Việt', 3),
(3, 4, 3, 'Dương Hoàng Huyên', 2),
(4, 4, 4, 'Nguyễn Hữu Trọn', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `namhoc`
--

CREATE TABLE `namhoc` (
  `ID` int(11) NOT NULL,
  `namBD` int(11) DEFAULT NULL,
  `namKT` int(11) DEFAULT NULL,
  `khoaHoc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `namhoc`
--

INSERT INTO `namhoc` (`ID`, `namBD`, `namKT`, `khoaHoc`) VALUES
(1, 2020, 2021, 'k43'),
(2, 2021, 2022, 'k43'),
(3, 2022, 2023, 'k43'),
(4, 2023, 2024, 'k43'),
(5, 2024, 2025, 'k43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` int(11) NOT NULL,
  `HoDem` varchar(50) DEFAULT NULL,
  `Ten` varchar(50) DEFAULT NULL,
  `NgaySinh` varchar(50) DEFAULT NULL,
  `GioiTinh` varchar(50) DEFAULT NULL,
  `MaLop` int(11) DEFAULT NULL,
  `MaKhoa` int(11) NOT NULL,
  `CanhBao` int(11) NOT NULL,
  `UuTien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`MaSV`, `HoDem`, `Ten`, `NgaySinh`, `GioiTinh`, `MaLop`, `MaKhoa`, `CanhBao`, `UuTien`) VALUES
(1, 'Vũ', 'Tấn Thi', '10/06/2001', 'Nam', 101, 1111, 0, 1),
(2, 'Nguyễn', 'Xuân Hải', '11/06/2002', 'Nam', 102, 1111, 2, 2),
(3, 'Võ', 'Gia Huy', '12/06/2002', 'Nam', 103, 1111, 0, 3),
(4, 'Nguyễn', 'Quốc Đạt', '13/06/2002', 'Nam', 104, 1111, 0, 4),
(5, 'Đỗ Nguyễn', 'Tấn Lộc', '14/06/2002', 'Nam', 105, 1111, 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `MatKhau` varchar(50) DEFAULT NULL,
  `MaSV` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `MatKhau`, `MaSV`) VALUES
(1, '1234', '4351050956'),
(2, '1234', '4351050957'),
(3, '1234', '4351050958'),
(4, '1234', '4351050959');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianbieu`
--

CREATE TABLE `thoigianbieu` (
  `malichhoc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thoigianhoc` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thoigianbieu`
--

INSERT INTO `thoigianbieu` (`malichhoc`, `thoigianhoc`) VALUES
('1', 'Thứ 2, Tiết: 1-2, Tuần: T38->T40, Phòng: A4.402'),
('2', 'Thứ 2, Tiết: 3-5, Tuần: T38->T40, Phòng: A4.402'),
('3', 'Thứ 2, Tiết: 6-7, Tuần: T38->T40, Phòng: A4.402'),
('4', 'Thứ 2, Tiết: 8-10, Tuần: T38->T40, Phòng: A4.402'),
('5', 'Thứ 3, Tiết: 1-2, Tuần: T38->T40, Phòng: A4.402'),
('6', 'Thứ 3, Tiết: 3-5, Tuần: T38->T40, Phòng: A4.402'),
('7', 'Thứ 3, Tiết: 6-7, Tuần: T38->T40, Phòng: A4.402'),
('8', 'Thứ 3, Tiết: 8-10, Tuần: T38->T40, Phòng: A4.402'),
('9', 'Thứ 4, Tiết: 1-2, Tuần: T38->T40, Phòng: A4.402'),
('10', 'Thứ 4, Tiết: 3-5, Tuần: T38->T40, Phòng: A4.402'),
('11', 'Thứ 4, Tiết: 6-7, Tuần: T38->T40, Phòng: A4.402'),
('12', 'Thứ 4, Tiết: 8-10, Tuần: T38->T40, Phòng: A4.402');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoikhoabieu`
--

CREATE TABLE `thoikhoabieu` (
  `STT` int(11) NOT NULL,
  `MaLHP` int(11) DEFAULT NULL,
  `TenHocPhan` varchar(50) DEFAULT NULL,
  `STC` int(11) DEFAULT NULL,
  `ThongTin` varchar(50) DEFAULT NULL,
  `GiangVien` varchar(50) DEFAULT NULL,
  `NgayBatDau` varchar(50) DEFAULT NULL,
  `NgayKetThuc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thoikhoabieu`
--

INSERT INTO `thoikhoabieu` (`STT`, `MaLHP`, `TenHocPhan`, `STC`, `ThongTin`, `GiangVien`, `NgayBatDau`, `NgayKetThuc`) VALUES
(1, 1, 'Mạng Máy Tính', 3, 'Thứ 2, Tiết: 3-5, Tuần: T3->T11, Phòng: A1.407', 'Nguyễn Ngọc Dũng', '05/09/2022', '15/12/2022'),
(2, 2, 'Toán rời rạc', 3, 'Thứ 3, Tiết: 1-2, Tuần: T3->T11, Phòng: A5.09', 'Lê Xuân Việt', '05/09/2022', '1/12/2022'),
(3, 3, 'Xác suất thống kê', 3, 'Thứ 4, Tiết: 1-1, Tuần: T3->t8, Phòng: A5.09', 'Lê Xuân Việt', '05/09/2022', '	01/11/2022'),
(4, 4, 'Kỹ thuật lập trình', 3, 'Thứ 6, Tiết: 3-5, Tuần: T3->T18, Phòng: A1.408', 'Dương Hoàng Huyên', '05/09/2022', '01/11/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tracuu`
--

CREATE TABLE `tracuu` (
  `ID` int(11) NOT NULL,
  `MaHP` int(11) DEFAULT NULL,
  `TenHP` varchar(50) DEFAULT NULL,
  `MaKhoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tracuu`
--

INSERT INTO `tracuu` (`ID`, `MaHP`, `TenHP`, `MaKhoa`) VALUES
(1, 1, 'Mạng Máy Tính', 1111),
(2, 2, 'Toán rời rạc', 1111),
(3, 3, 'Kỹ thuật lập trình', 1111),
(4, 4, 'Xác suất thống kê', 1111);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tracuuhocphan`
--

CREATE TABLE `tracuuhocphan` (
  `ID` int(11) NOT NULL,
  `MaHP` int(11) DEFAULT NULL,
  `MaLHP` int(11) DEFAULT NULL,
  `TenKhoa` varchar(50) DEFAULT NULL,
  `TenHP` varchar(50) DEFAULT NULL,
  `STc` int(11) DEFAULT NULL,
  `Loai` varchar(50) DEFAULT NULL,
  `ThongTin` varchar(50) DEFAULT NULL,
  `GiangVien` varchar(50) DEFAULT NULL,
  `GioiHan` varchar(50) DEFAULT NULL,
  `TuNgay` varchar(50) DEFAULT NULL,
  `DenNgay` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tracuuhocphan`
--

INSERT INTO `tracuuhocphan` (`ID`, `MaHP`, `MaLHP`, `TenKhoa`, `TenHP`, `STc`, `Loai`, `ThongTin`, `GiangVien`, `GioiHan`, `TuNgay`, `DenNgay`) VALUES
(1, 1, 1, 'CNTT', 'Mạng Máy Tính', 3, ' ', '', 'Nguyễn Ngọc Dũng', NULL, '07/09/2021', '16/12/2021'),
(2, 2, 2, 'CNTT', 'Toán rời rạc', 3, ' ', '', 'Lê Xuân Việt', NULL, '10/09/2021', '26/11/2021'),
(3, 3, 3, 'CNTT', 'Kỹ thuật lập trình', 3, ' ', '', 'Dương Hoàng Huyên', NULL, '06/09/2021', '16/12/2021'),
(4, 4, 4, 'CNTT', 'Xác suất thống kê', 3, ' ', '', 'Nguyễn Hữu Trọn', NULL, '08/09/2021', '24/11/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uutien`
--

CREATE TABLE `uutien` (
  `id` int(11) NOT NULL,
  `mucdouutien` int(11) NOT NULL,
  `tenuutien` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `uutien`
--

INSERT INTO `uutien` (`id`, `mucdouutien`, `tenuutien`) VALUES
(1, 1, 'Tật Nguyền'),
(2, 2, 'Dân Tộc Thiểu Số'),
(3, 3, 'Hộ Nghèo'),
(4, 4, 'Con Thương Binh Liệt Sĩ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethocphan`
--
ALTER TABLE `chitiethocphan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `chuongtrinhdaotao`
--
ALTER TABLE `chuongtrinhdaotao`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `MaHocPhan` (`MaHocPhan`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `MaHK` (`MaHK`),
  ADD KEY `MaNH` (`MaNH`);

--
-- Chỉ mục cho bảng `dangkyhocphan`
--
ALTER TABLE `dangkyhocphan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaLHP` (`MaLHP`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `diemrenluyen`
--
ALTER TABLE `diemrenluyen`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`MaHP`);

--
-- Chỉ mục cho bảng `hocphanthaythe`
--
ALTER TABLE `hocphanthaythe`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `HPOrigin` (`HPOrigin`);

--
-- Chỉ mục cho bảng `ketquahoctap`
--
ALTER TABLE `ketquahoctap`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaSV` (`MaSV`),
  ADD KEY `MaHocPhan` (`MaHocPhan`),
  ADD KEY `MaKhoa` (`MaKhoa`),
  ADD KEY `IDChiTiet` (`IDChiTiet`);

--
-- Chỉ mục cho bảng `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Chỉ mục cho bảng `lichsudangkyhocphan`
--
ALTER TABLE `lichsudangkyhocphan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaHP` (`MaLopHP`),
  ADD KEY `MaTK` (`MaTK`),
  ADD KEY `MaHK` (`MaHK`),
  ADD KEY `MaNH` (`MaNH`);

--
-- Chỉ mục cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `namhoc`
--
ALTER TABLE `namhoc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`);

--
-- Chỉ mục cho bảng `thoigianbieu`
--
ALTER TABLE `thoigianbieu`
  ADD KEY `thoigianbieu` (`malichhoc`);

--
-- Chỉ mục cho bảng `thoikhoabieu`
--
ALTER TABLE `thoikhoabieu`
  ADD PRIMARY KEY (`STT`),
  ADD KEY `MaLHP` (`MaLHP`);

--
-- Chỉ mục cho bảng `tracuu`
--
ALTER TABLE `tracuu`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaKhoa` (`MaKhoa`);

--
-- Chỉ mục cho bảng `tracuuhocphan`
--
ALTER TABLE `tracuuhocphan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `MaHP` (`MaHP`),
  ADD KEY `MaLHP` (`MaLHP`);

--
-- Chỉ mục cho bảng `uutien`
--
ALTER TABLE `uutien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethocphan`
--
ALTER TABLE `chitiethocphan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `chuongtrinhdaotao`
--
ALTER TABLE `chuongtrinhdaotao`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `dangkyhocphan`
--
ALTER TABLE `dangkyhocphan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `diemrenluyen`
--
ALTER TABLE `diemrenluyen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hocky`
--
ALTER TABLE `hocky`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  MODIFY `MaHP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `hocphanthaythe`
--
ALTER TABLE `hocphanthaythe`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `ketquahoctap`
--
ALTER TABLE `ketquahoctap`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3334;

--
-- AUTO_INCREMENT cho bảng `lichsudangkyhocphan`
--
ALTER TABLE `lichsudangkyhocphan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `namhoc`
--
ALTER TABLE `namhoc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `MaSV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `thoikhoabieu`
--
ALTER TABLE `thoikhoabieu`
  MODIFY `STT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tracuu`
--
ALTER TABLE `tracuu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tracuuhocphan`
--
ALTER TABLE `tracuuhocphan`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `uutien`
--
ALTER TABLE `uutien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chuongtrinhdaotao`
--
ALTER TABLE `chuongtrinhdaotao`
  ADD CONSTRAINT `chuongtrinhdaotao_ibfk_1` FOREIGN KEY (`MaHocPhan`) REFERENCES `hocphan` (`MaHP`),
  ADD CONSTRAINT `chuongtrinhdaotao_ibfk_2` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`),
  ADD CONSTRAINT `chuongtrinhdaotao_ibfk_3` FOREIGN KEY (`MaHK`) REFERENCES `hocky` (`ID`),
  ADD CONSTRAINT `chuongtrinhdaotao_ibfk_4` FOREIGN KEY (`MaNH`) REFERENCES `namhoc` (`ID`);

--
-- Các ràng buộc cho bảng `dangkyhocphan`
--
ALTER TABLE `dangkyhocphan`
  ADD CONSTRAINT `dangkyhocphan_ibfk_1` FOREIGN KEY (`MaLHP`) REFERENCES `lophocphan` (`ID`),
  ADD CONSTRAINT `dangkyhocphan_ibfk_2` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `hocphanthaythe`
--
ALTER TABLE `hocphanthaythe`
  ADD CONSTRAINT `hocphanthaythe_ibfk_1` FOREIGN KEY (`HPOrigin`) REFERENCES `hocphan` (`MaHP`);

--
-- Các ràng buộc cho bảng `ketquahoctap`
--
ALTER TABLE `ketquahoctap`
  ADD CONSTRAINT `ketquahoctap_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `ketquahoctap_ibfk_2` FOREIGN KEY (`MaHocPhan`) REFERENCES `hocphan` (`MaHP`),
  ADD CONSTRAINT `ketquahoctap_ibfk_3` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`),
  ADD CONSTRAINT `ketquahoctap_ibfk_4` FOREIGN KEY (`IDChiTiet`) REFERENCES `chitiethocphan` (`ID`);

--
-- Các ràng buộc cho bảng `lichsudangkyhocphan`
--
ALTER TABLE `lichsudangkyhocphan`
  ADD CONSTRAINT `lichsudangkyhocphan_ibfk_1` FOREIGN KEY (`MaLopHP`) REFERENCES `hocphan` (`MaHP`),
  ADD CONSTRAINT `lichsudangkyhocphan_ibfk_2` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`),
  ADD CONSTRAINT `lichsudangkyhocphan_ibfk_3` FOREIGN KEY (`MaHK`) REFERENCES `hocky` (`ID`),
  ADD CONSTRAINT `lichsudangkyhocphan_ibfk_4` FOREIGN KEY (`MaNH`) REFERENCES `namhoc` (`ID`);

--
-- Các ràng buộc cho bảng `thoikhoabieu`
--
ALTER TABLE `thoikhoabieu`
  ADD CONSTRAINT `thoikhoabieu_ibfk_1` FOREIGN KEY (`MaLHP`) REFERENCES `lophocphan` (`ID`);

--
-- Các ràng buộc cho bảng `tracuu`
--
ALTER TABLE `tracuu`
  ADD CONSTRAINT `tracuu_ibfk_1` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`);

--
-- Các ràng buộc cho bảng `tracuuhocphan`
--
ALTER TABLE `tracuuhocphan`
  ADD CONSTRAINT `tracuuhocphan_ibfk_1` FOREIGN KEY (`MaHP`) REFERENCES `hocphan` (`MaHP`),
  ADD CONSTRAINT `tracuuhocphan_ibfk_2` FOREIGN KEY (`MaLHP`) REFERENCES `lophocphan` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
