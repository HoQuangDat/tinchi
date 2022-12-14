<?php
    class SearchhocphanModel extends Database
    {
        function loadHP($keywords)
        {
            $query = "SELECT dkhp.MaLHP, lhp.TenGV, dkhp.gioiHan, dkhp.dangKy from dangkyhocphan as dkhp
            JOIN lophocphan as lhp ON lhp.ID= dkhp.MaLHP
            WHERE dkhp.MaLHP = '".$keywords."'
            OR lhp.TenGV like '".'%'.$keywords.'%'."'";

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