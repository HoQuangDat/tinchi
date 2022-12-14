<?php
    class search extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("SearchModel");
        }

        public function show()
        {
            $this->view("search");
        }

        public function loadResultMaHP()
        {
            $keywords = isset($_POST["keywords"]) ? $_POST["keywords"] : null;

            $result = $this->model->loadResultMaHP($keywords);

            echo $result;
        }

        public function loadResultTenHP()
        {
            $keywords = isset($_POST["keywords"]) ? $_POST["keywords"] : null;

            $result = $this->model->loadResultTenHP($keywords);

            echo $result;
        }

        public function loadResultTenKhoa()
        {
            $keywords = isset($_POST["keywords"]) ? $_POST["keywords"] : null;

            $result = $this->model->loadResultTenKhoa($keywords);

            echo $result;
        }

        public function loadResultTenGiangVien()
        {
            $keywords = isset($_POST["keywords"]) ? $_POST["keywords"] : null;

            $result = $this->model->loadResultTenGiangVien($keywords);

            echo $result;
        }
    }
?>