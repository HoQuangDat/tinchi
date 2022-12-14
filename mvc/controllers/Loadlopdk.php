<?php
    class Loadlopdk extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("LoadlopdkModel");
        }

        public function show()
        {
            $this->view("DanhSachLopHPDangKyModel");
        }

        public function loadResult()
        {
         
            $MaLHP = isset($_GET["MaLHP"]) ? $_GET["MaLHP"] : null;
            $result = $this->model->loadlopDKHP($MaLHP);
            echo $result;
        }
    }
?>