<?php
    class DangNhapModel extends Database{
        function login ($MSV,$MK){
            $sql="SELECT tk.MaSV, tk.MaTK, tk.MatKhau, sv.HoDem, sv.Ten, sv.NgaySinh, sv.GioiTinh, sv.MaLop, sv.MaKhoa, sv.CanhBao 
                    FROM taikhoan as tk join sinhvien as sv on tk.MaTK=sv.MaSV  
                    WHERE tk.MaSV='$MSV' and tk.MatKhau = '$MK' ";

            $result = mysqli_query($this->con,$sql);
                        
            $arr = array();

            while($row = mysqli_fetch_array($result))
            {
                $arr[] = $row;
            }
            return json_encode($arr);
        }
    }
?>