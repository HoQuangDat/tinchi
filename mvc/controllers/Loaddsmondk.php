<?php
    class Loaddsmondk extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("LoaddsmondkModel");
        }

        public function show()
        {
            $this->view("");
        }

        public function loadResult()
        {
         

            $result = $this->model->LoadmonDKHP();

            echo $result;
        }
    }
?>