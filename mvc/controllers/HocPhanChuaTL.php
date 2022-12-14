<?php
    class HocPhanChuaTL extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("KetQuaModel");
        }

        function show()
        {
            $this->view("HocPhanChuaTL");
        }

        function loadHocKyHPChuaTichLuy()
        {
            $maKhoa = isset($_POST["maKhoa"]) ? $_POST["maKhoa"] : null;
            $maTK = isset($_POST["maTK"]) ? $_POST["maTK"] : null;
            $result = $this->model->loadHocKyHPChuaTichLuy(1111,2);

            echo $result;
        }

        public function loadHPChuaTichLuy()
        {
            $maKhoa = isset($_POST["maKhoa"]) ? $_POST["maKhoa"] : null;
            $maTK = isset($_POST["maTK"]) ? $_POST["maTK"] : null;
            $maHK = isset($_POST["maHK"]) ? $_POST["maHK"] : null;
            $maNH = isset($_POST["maNH"]) ? $_POST["maNH"] : null;

            $result = $this->model->loadHPChuaTichLuy(1111,2,$maHK,$maNH);

            echo $result;
        }
    }
?>