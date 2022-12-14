<?php
    class LichSuDKHPModel extends Database
    {
        function loadResult($NamHoc,$HocKy,$MaTK)
        {
            $query = "SELECT  ls.ThaoTac, ls.MaLopHP, hp.TenHP, ls.MaTK, ls.VaoNgay, ls.status, nh.namBD, hk.hocky, nh.namKT
            FROM lichsudangkyhocphan as ls
			
            join hocphan as hp on ls.MaLopHP = hp.MaHP
            join hocky as hk on ls.MaHK = hk.ID
            join namhoc as nh on ls.MaNH = nh.ID
            WHERE nh.namBD = '".$NamHoc."' AND hk.hocky = '".$HocKy."' AND ls.MaTK = '".$MaTK."'";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }
        

        function loadHPDK($MaTK){
            $query = "SELECT  ls.ThaoTac, ls.MaLopHP, hp.TenHP, ls.MaTK, ls.VaoNgay, ls.status, nh.namBD, hk.hocky, nh.namKT
            FROM lichsudangkyhocphan as ls
			
            join hocphan as hp on ls.MaLopHP = hp.MaHP
            join hocky as hk on ls.MaHK = hk.ID
            join namhoc as nh on ls.MaNH = nh.ID
            WHERE ls.status = 1 AND ls.MaTK = '".$MaTK."'";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        function loadHPBiHuy($MaTK){
            $query = "SELECT  ls.ThaoTac, ls.MaLopHP, hp.TenHP, ls.MaTK, ls.VaoNgay, ls.status, nh.namBD, hk.hocky, nh.namKT
            FROM lichsudangkyhocphan as ls
			
            join hocphan as hp on ls.MaLopHP = hp.MaHP
            join hocky as hk on ls.MaHK = hk.ID
            join namhoc as nh on ls.MaNH = nh.ID
            WHERE ls.status = 0 AND ls.MaTK = '".$MaTK."'";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        // 9/11
        function loadDSSV($MaLopHP)
        {
        $query = "SELECT sv.MaSV, sv.HoDem, sv.Ten, sv.NgaySinh, sv.GioiTinh
        FROM sinhvien as sv
        JOIN lichsudangkyhocphan as lsdk ON sv.MaSV = lsdk.MaTK
        WHERE lsdk.MaLopHP = '".$MaLopHP."'
        GROUP BY sv.NgaySinh";
       
        $result = mysqli_query($this->con,$query);

        $arr = array();

        while($row = mysqli_fetch_assoc($result))
        {
        $arr[] = $row;
        }  

        return json_encode($arr);
        }
    }
?>