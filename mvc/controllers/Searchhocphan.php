<?php
    class Searchhocphan extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("SearchhocphanModel");
        }

        public function show()
        {
            $this->view("search");
        }

        public function loadHP()
        {
            $keywords = isset($_POST["keywords"]) ? $_POST["keywords"] : null;

            $result = $this->model->loadHP($keywords);

            echo $result;
        }
    }
?>