<?php
    class LoaddsmondkModel extends Database
    {
        function loadmonDKHP()
        {
            $query = "SELECT dkhp.MaLHP, hp.TenHP, dkhp.STC, COUNT(lhp.MaHP) as 'slHP'
            from dangkyhocphan as dkhp 
            JOIN lophocphan as lhp ON lhp.MaLHP = dkhp.MaLHP
            JOIN hocphan as hp ON hp.MaHP = lhp.MaHP 
            GROUP BY(hp.TenHP)";
            
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