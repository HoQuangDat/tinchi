<?php
    class DangKyModel extends Database{
        function getHistories($date,$MaTK)
        {
            $query = "SELECT ls.ID, ls.ThaoTac, hp.TenHP, ls.soTC , ls.status, ls.ngayBatDau, ls.ngayKetThuc,ls.maLich, lhp.TenGV, ls.MaLopHP, ls.lichHoc
            FROM lichsudangkyhocphan as ls
            join lophocphan as lhp on ls.MaLopHP = lhp.ID
            join hocphan as hp on lhp.MaHP = hp.MaHP
            WHERE date('".$date."') BETWEEN ls.ngayBatDau AND ls.ngayKetThuc AND ls.MaTK = '".$MaTK."' AND YEAR(ls.ngayBatDau) = YEAR('".$date."')";

            $result = mysqli_query($this->con,$query);

            $arr = array();

            while($row = mysqli_fetch_assoc($result))
            {
                $arr[] = $row;
            }

            return json_encode($arr);
        }

        
        function checkTotalTC($date,$MaTK)
        {
            $query = "SELECT sum(ls.soTC) as total
            FROM lichsudangkyhocphan as ls
            join lophocphan as lhp on ls.MaLopHP = lhp.ID
            join hocphan as hp on lhp.MaHP = hp.MaHP
            WHERE date('".$date."') BETWEEN ls.ngayBatDau AND ls.ngayKetThuc AND ls.MaTK = '".$MaTK."' AND YEAR(ls.ngayBatDau) = YEAR('".$date."')";

            $result = mysqli_query($this->con,$query);

            return mysqli_fetch_array($result);
        }

        function RegisterMH ($ID, $MaLHP, $MaTK, $maLich, $date){
            $query1 = "SELECT dkhp.MaHK, dkhp.STC, dkhp.MaNH, dkhp.LichHoc, dkhp.TuNgay, dkhp.DenNgay FROM dangkyhocphan as dkhp
            WHERE ID = '".$ID."'";
            $result = mysqli_query($this->con,$query1);
            $row = mysqli_fetch_assoc($result);

            $query = "INSERT INTO `lichsudangkyhocphan`(`ThaoTac`, `MaLopHP`, `MaTK`, `MaHK`, `soTC`, `MaNH`, `VaoNgay`, `lichHoc`, `ngayBatDau`, `ngayKetThuc`, `status`, `maLich`) 
                      VALUES ('Đăng ký','".$MaLHP."','".$MaTK."','".$row['MaHK']."','".$row['STC']."','".$row['MaNH']."','".$date."','".$row['LichHoc']."','".$row['TuNgay']."','".$row['DenNgay']."','1','".$maLich."')";
            

            mysqli_query($this->con,$query);
        }
        function cancelRegisted($MaTK, $ID)
        {
            $query = "UPDATE `lichsudangkyhocphan` SET `ThaoTac`='Hủy học phần', status = 0 WHERE ID = '".$ID."' AND MaTK = '".$MaTK."'";

            $result = mysqli_query($this->con,$query);
        }
    }
?>