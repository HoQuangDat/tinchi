<?php
    class KetQuaModel extends Database
    {
        function loadResult($MaSV,$NamHoc,$HocKy,$diem10)
        {
            $query = "SELECT  kq.ID,nh.namBD, nh.namKT, hp.TenHP,kq.ID,kq.MaHocPhan,kq.TinChi,kq.Diem10,kq.Diem4,kq.DiemChu,kq.KetQua,kq.IDChiTiet,hk.hocky
            FROM lichsudangkyhocphan as ls
            join lophocphan as lhp on ls.MaLopHP = lhp.ID
            join ketquahoctap as kq on ls.MaLopHP = kq.MaHocPhan
            join hocphan as hp on lhp.MaHP = hp.MaHP
            join hocky as hk on ls.MaHK = hk.ID
            join namhoc as nh on ls.MaNH = nh.ID
            WHERE MaSV = '".$MaSV."' AND nh.namBD = '".$NamHoc."' AND hk.hocky = '".$HocKy."'";

            if($diem10 != null && $diem10 >= 4)
            {
                $query .= " AND kq.diem10 >= '".$diem10."'";
            }
            else if($diem10 != null && $diem10 < 4)
            {
                $query .= " AND kq.diem10 < '".$diem10."'";
            }

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }  
            
            $queryRL = "SELECT diemSo, diemChu FROM `diemrenluyen` WHERE MaSV = '".$MaSV."' and namHoc = '".$NamHoc."' AND hocKy = '".$HocKy."'";

            $resultRL = mysqli_query($this->con,$queryRL);

            while($rowRL = mysqli_fetch_assoc($resultRL))
            {
                array_push($arr,$rowRL);
            }  

            return json_encode($arr);
        }

        function loadPoint($MaSV,$NamHoc,$HocKy,$diem10)
        {
            $query = "SELECT kq.TinChi, kq.Diem10, hk.hocky, nh.namBD, nh.namKT
            FROM lichsudangkyhocphan as ls
            join lophocphan as lhp on ls.MaLopHP = lhp.ID
            join ketquahoctap as kq on ls.MaLopHP = kq.MaHocPhan
            join hocphan as hp on lhp.MaHP = hp.MaHP
            join hocky as hk on ls.MaHK = hk.ID
            join namhoc as nh on ls.MaNH = nh.ID
            WHERE kq.MaSV = '".$MaSV."'";

            if($NamHoc != null && $NamHoc != 0)
            {
                $query .= " AND nh.namBD = '".$NamHoc."'";
            }

            if($HocKy != null && $HocKy != 0)
            {
                $query .= " AND hk.hocky = '".$HocKy."'";
            }

            if($diem10 != null && $diem10 >= 4)
            {
                $query .= " AND kq.diem10 >= '".$diem10."'";
            }
            else if($diem10 != null && $diem10 < 4)
            {
                $query .= " AND kq.diem10 < '".$diem10."'";
            }
            
            $query .= "GROUP BY ls.MaHK, ls.MaNH
                       ORDER BY nh.namBD,hk.hocky ASC";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function loadNamHoc($KhoaHoc)
        {
            $query = "SELECT `ID`, `namBD`, `namKT`, `khoaHoc` FROM `namhoc` WHERE khoaHoc = '".$KhoaHoc."'";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function loadHocKy()
        {
            $query = "SELECT `ID`, `hocky` FROM `hocky` LIMIT 3";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }
        function loadHocKyHPChuaTichLuy($MaKhoa,$maTK)
        {
            $query = "SELECT *,SUM(SoTC) as sumTC FROM `chuongtrinhdaotao` as dt 
            join namhoc as nh on dt.MaNH = nh.ID 
            join hocky as hk on dt.MaHK = hk.ID 
            WHERE MaKhoa = '".$MaKhoa."' and MaHocPhan 
            not in (select l.MaHP from lichsudangkyhocphan as ls join lophocphan as l on ls.MaLopHP = l.ID where MaTK = '".$maTK."') 
            group BY dt.MaNH, dt.MaHK";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }
        function loadHPChuaTichLuy($MaKhoa,$maTK,$maHK,$maNH)
        {
            $query = "SELECT dt.STT,dt.MaHocPhan,hp.TenHP,dt.SoTC,hk.hocky,nh.namBD,nh.namKT,dt.status 
            FROM `chuongtrinhdaotao` as dt 
            join namhoc as nh on dt.MaNH = nh.ID 
            join hocky as hk on dt.MaHK = hk.ID 
            join hocphan as hp on dt.MaHocPhan = hp.MaHP
            WHERE dt.MaKhoa = '".$MaKhoa."' and dt.MaHK = '".$maHK."' and dt.MaNH = '".$maNH."' and dt.MaHocPhan not in 
            (select ls.MaLopHP from lichsudangkyhocphan as ls join lophocphan as l on ls.MaLopHP = l.ID where ls.MaTK = '".$maTK."') order BY 
            hk.hocky,nh.namBD ASC";
            
            $result = mysqli_query($this->con,$query);

            $arr = array();
   
            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        public function loadDetail($ID)
        {
            $query = "SELECT ct.ID,hp.TenHP,ct.diemCC, ct.diemCK, ct.diemGK 
            FROM `ketquahoctap` as kq 
            join chitiethocphan as ct on kq.IDChiTiet = ct.ID 
            join hocphan as hp on kq.MaHocPhan = hp.MaHP
            WHERE kq.ID = '".$ID."'";

            $result = mysqli_query($this->con,$query);

            $arr = array();
   
            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        public function checkWarning($MaSV)
        {
            $query = "SELECT CanhBao FROM `sinhvien` WHERE MaSV = '".$MaSV."'";

            $result = mysqli_query($this->con,$query);

            $amount = mysqli_fetch_array($result)[0];

            return $amount;
        }
    }
?>