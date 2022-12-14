<?php
    header("Access-Control-Allow-Origin: *");

    require_once "./public/package/Classes/PHPExcel.php";
    
    class KetQua extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("KetQuaModel");
        }

        public function show()
        {
            $warning = $this->checkWarning();

            $this->view("KetQua", ["warning" => $warning]);
            
        }

        public function loadResult()
        {
            $MaSV = isset($_SESSION["MaSV"]) ? $_SESSION["MaSV"] : null;
            $NamHoc = isset($_POST["namHoc"]) ? $_POST["namHoc"] : null;
            $HocKy = isset($_POST["hocKy"]) ? $_POST["hocKy"] : null;
            $diem10 = isset($_POST["diem10"]) ? $_POST["diem10"] : null;

            $result = $this->model->loadResult(2,$NamHoc,$HocKy,$diem10);

            echo $result;
        }

        public function loadPoint()
        {
            $MaSV = isset($_SESSION["MaSV"]) ? $_SESSION["MaSV"] : null;
            $NamHoc = isset($_POST["namHocChanged"]) ? $_POST["namHocChanged"] : null;
            $HocKy = isset($_POST["hocKyChanged"]) ? $_POST["hocKyChanged"] : null;
            $diem10 = isset($_POST["diem10"]) ? $_POST["diem10"] : null;

            $result = $this->model->loadPoint(2,$NamHoc,$HocKy,$diem10);

            echo $result;
        }

        public function loadNamHoc()
        {
            $KhoaHoc = isset($_SESSION["KhoaHoc"]) ? $_SESSION["KhoaHoc"] : null;

            $result = $this->model->loadNamHoc('K43');

            echo $result;
        }

        public function loadHocKy()
        {
            $result = $this->model->loadHocKy();

            echo $result;
        }

        public function loadDetail()
        {
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;

            $result = $this->model->loadDetail($ID);

            echo $result;
        }

        public function checkWarning()
        {
            $MaSV = isset($_SESSION["MaSV"]) ? $_SESSION["MaSV"] : null;

            $result = $this->model->checkWarning(2);

            return $result;
        }

        function printResultPoint()
        {
            $arr = array();
            $arr = isset($_POST["arrResult"]) ? $_POST["arrResult"] : null;

            $arrYear = array();
            $arrYear = isset($_POST["arrYear"]) ? $_POST["arrYear"] : null;

            $arrRL = array();
            $arrRL = isset($_POST["arrRL"]) ? $_POST["arrRL"] : null;

            $excel = new \PHPExcel();
            $excel->setActiveSheetIndex(0);

            $excel->getActiveSheet()->setTitle("Kết Quả Học Phần");

            //Tạo cột excel
            $excel->getActiveSheet()->setCellValue('A1',"STT");
            $excel->getActiveSheet()->setCellValue('B1',"Mã học phần");
            $excel->getActiveSheet()->setCellValue('C1',"Tên học phần");
            $excel->getActiveSheet()->setCellValue('D1',"Tín chỉ");
            $excel->getActiveSheet()->setCellValue('E1',"Điểm 10");
            $excel->getActiveSheet()->setCellValue('F1',"Điểm 4");
            $excel->getActiveSheet()->setCellValue('G1',"Điểm chữ");
            $excel->getActiveSheet()->setCellValue('H1',"Kết quả");

            //Xét in đậm cho khoảng cột
            $excel->getActiveSheet()->getStyle("A1:I1")->getFont()->setBold(true);

            //thêm độ dài cột
            $excel->getActiveSheet()->getColumnDimension("B")->setWidth(20);
            $excel->getActiveSheet()->getColumnDimension("C")->setWidth(30);


            //thêm dữ liệu vào từng ô bắt đầu dòng 2
            $row = 2;
            $index = 0;
            
            foreach($arrYear as $itemYear)
            {
                $average = 0;
                $sum = 0;
                $total = 0;

                $average4 = 0;
                $sum4 = 0;
                $total4 = 0;
                
                $excel->getActiveSheet()->setCellValue("A" . $row, "Năm học: ". $itemYear["namBD"]."-".$itemYear["namKT"]." Học kỳ: ". $itemYear["hocky"]);
                $excel->getActiveSheet()->getStyle("A".$row.":I".$row."")->getFont()->setBold(true);
                $row++;

                foreach($arr as $item)
                {
                    if($itemYear["namBD"] === $item["namBD"] && $itemYear["namKT"] === $item["namKT"] && $itemYear["hocky"] === $item["hocky"])
                    {
                        $excel->getActiveSheet()->setCellValue("A" . $row, $item["ID"]);
                        $excel->getActiveSheet()->setCellValue('B' . $row, $item["MaHocPhan"]);
                        $excel->getActiveSheet()->setCellValue('C' . $row, $item["TenHP"]);
                        $excel->getActiveSheet()->setCellValue('D' . $row, $item["TinChi"]);
                        $excel->getActiveSheet()->setCellValue('E' . $row, $item["Diem10"]);
                        $excel->getActiveSheet()->setCellValue('F' . $row, $item["Diem4"]);
                        $excel->getActiveSheet()->setCellValue('G' . $row, $item["DiemChu"]);
                        $excel->getActiveSheet()->setCellValue('H' . $row, $item["KetQua"]);
        
                        $row++;
                        $sum += $item["Diem10"];
                        $total++;

                        $sum4 += $item["Diem4"];
                        $total4++;
                    }
                }   
                
                $average = $sum / $total;
                $excel->getActiveSheet()->setCellValue('A' . $row, "Điểm trung bình hệ 10: " . $average);
                $row++;

                $average4 = $sum4 / $total4;
                $excel->getActiveSheet()->setCellValue('A' . $row, "Điểm trung bình hệ 4: " . $average4);
                $row++;

                $excel->getActiveSheet()->setCellValue('A' . $row, "Điểm rèn luyện: " . $arrRL[$index] . " Xếp loại: " . $arrRL[++$index]);
                $index++;
                $row++;
            }

            header("Content-type: application/vnd.ms-excel");

            header('Content-Disposition: attachment; filename="KetQuaHocTap.xlsx"');
            
            PHPExcel_IOFactory::createWriter($excel, "Excel2007")->save("KetQuaHocTap_".time().".xlsx");
        }
    }
?>