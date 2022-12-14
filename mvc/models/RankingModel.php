<?php
   class RankingModel extends Database
   {
      function loadXepHang($NamHoc,$HocKy)
      {
         $query = "SELECT DISTINCT tk.MaSV, sv.HoDem, sv.ten, sv.MaLop, dtb.dtb, drl.diemSo, ut.mucdouutien, ut.tenuutien
         FROM sinhvien as sv
         JOIN diemtrungbinh as dtb on sv.MaSV = dtb.idsv
         JOIN uutien as ut on sv.UuTien = ut.id
         JOIN diemrenluyen as drl on sv.MaSV = drl.MaSV 
         JOIN taikhoan as tk on tk.MaTK = sv.MaSV
         WHERE dtb.idnamhoc = '".$NamHoc."'
         AND dtb.idhk = '".$HocKy."'
         AND drl.idNamHoc = '".$NamHoc."' 
         AND drl.hocKy = '".$HocKy."'
         ORDER BY dtb.dtb DESC, ut.mucdouutien DESC
         LIMIT 100";

         $result = mysqli_query($this->con,$query);

         $arr = array();

         while($row = mysqli_fetch_assoc($result))
         {
            $arr[] = $row;
         }  

         return json_encode($arr);
      }

      function loadUuTien(){
         $query = "SELECT * FROM uutien";
         
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