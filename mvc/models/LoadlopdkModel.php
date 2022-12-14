<?php
    class LoadlopdkModel extends Database
    {
        function loadlopDKHP($MaLHP)
        {
            $query = "SELECT dkhp.MaLHP, dkhp.gioiHan,dkhp.dangKy, lhp.TenGV, tgb.thoigianhoc, dkhp.ID , lhp.maLich, 
            dkhp.MaHK, dkhp.STC, dkhp.MaNH, dkhp.LichHoc, dkhp.TuNgay, dkhp.DenNgay
            from dangkyhocphan as dkhp 
            JOIN lophocphan as lhp ON lhp.MaLHP = dkhp.ID
            JOIN thoigianbieu as tgb ON tgb.malichhoc = lhp.maLich
            Where lhp.MaLHP = '".$MaLHP."'";
           
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