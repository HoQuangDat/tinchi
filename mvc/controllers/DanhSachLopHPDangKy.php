<?php
    class DanhSachLopHPDangKy extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("DanhSachLopHPDangKyModel");
        }

        public function show()
        {
            $this->view("DanhSachLopHPDangKy");
        }

        public function loadResult()
        {
         
            $keywords = isset($_POST["maHP"]) ? $_POST["maHP"] : null;
            $result = $this->model->LoadlopDKHP();
            echo $result;
        }
    }
?>