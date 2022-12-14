<?php
    header("Access-Control-Allow-Origin: *");
    class Ranking extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("RankingModel");
        }

        public function show()
        {
            $this->view("Ranking");
        }

        public function loadXepHang()
        {
            $IDNamHoc = isset($_GET["IDNamHoc"]) ? $_GET["IDNamHoc"] : null;
            $ID = isset($_GET["ID"]) ? $_GET["ID"] : null;

            $result = $this->model->loadXepHang($IDNamHoc,$ID);

            echo $result;
        }

        public function loadUuTien()
        {
            $result = $this->model->loadUuTien();

            echo $result;
        }
    }
?>