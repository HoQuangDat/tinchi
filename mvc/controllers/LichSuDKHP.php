<?php
    class LichSuDKHP extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("LichSuDKHPModel");
        }

        public function show()
        {
            $this->view("LichSuDKHP");
        }

        public function loadResult()
        {

            $NamHoc = isset($_POST["namHocChanged"]) ? $_POST["namHocChanged"] : null;
            $HocKy = isset($_POST["hocKyChanged"]) ? $_POST["hocKyChanged"] : null;
            $MaTK= isset($_SESSION['masinhvien']) ? $_SESSION['masinhvien'][0]["MaTK"] : null;

            $result = $this->model->loadResult($NamHoc,$HocKy,$MaTK);

            echo $result;
        }

        public function loadHPDK()
        {
            $MaTK = isset($_SESSION['masinhvien']) ? $_SESSION['masinhvien'][0]["MaTK"] : null;
            $result = $this->model->loadHPDK($MaTK);

            echo $result;
        } 

        public function loadHPBiHuy()
        {
            $MaTK = isset($_SESSION['masinhvien']) ? $_SESSION['masinhvien'][0]["MaTK"] : null;
            $result = $this->model->loadHPBiHuy($MaTK);

            echo $result;
        }
        // 9/11
        public function loadDSSV()
        {
            $MaLopHP = isset($_POST["MaLopHP"]) ? $_POST["MaLopHP"] : null;
            // $MaHK = isset($_POST["MaHK"]) ? $_POST["MaHK"] : null;
            // $MaNH = isset($_POST["MaNH"]) ? $_POST["MaNH"] : null;

            $result = $this->model->loadDSSV($MaLopHP);

            echo $result;
        } 
        
        public function cancelHP(){
            $MaHP = isset($_POST["MaHP"])? $_POST["MaHP"] : null;
            $result = $this->model->cancelHP($MaHP);

        }

        public function changedHP(){
            $MaLopHP = isset($_POST["MaLopHP"])? $_POST["MaLopHP"] : null;
            $result = $this->model->changedHP($MaLopHP);
            return $result;
        }
    }
?>