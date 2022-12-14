<?php
    class DanhSachLopHPDangKyModel extends Database
    {
        function loadlopDKHP($maHP)
        {
            $query = "SELECT dkhp.MaLHP, dkhp.gioiHan,dkhp.dangKy, lhp.TenGV, tgb.thoigianhoc
            from dangkyhocphan as dkhp 
            JOIN lophocphan as lhp ON lhp.ID = dkhp.MaLHP
            JOIN thoigianbieu as tgb ON tgb.malichhoc = dkhp.maLich
            Where dkhp.MaLHP = '".$maHP."'";
           
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