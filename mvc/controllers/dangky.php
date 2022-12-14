<?php
    class dangky extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("DangKyModel");
        }

        function show()
        {
            $date = date("Y-m-d");
            $MaTK = isset($_SESSION['masinhvien']) ? $_SESSION['masinhvien'][0]["MaTK"] : null;
            
            $histories = $this->model->getHistories($date,$MaTK);
            $this->view("dangky", [
                "histories" => json_decode($histories,true),
            ]);
        }
        
        function registerMH()
        {
            $MaLHP = isset($_POST["MaLHP"]) ? $_POST["MaLHP"] : null;
            $ID = isset($_POST["ID"]) ? $_POST["ID"] : null;
            $maLich = isset($_POST["maLich"]) ? $_POST["maLich"] : null;
            $date = date("Y-m-d h-m-s");

            $MaTK = isset($_SESSION['masinhvien']) ? $_SESSION['masinhvien'][0]["MaTK"] : null;

            // $result = $this->model->RegisterMH ($ID, $MaLHP, $MaTK, $maLich, $date);
            // echo $result;
            
            if($this->checkTotalTC($date,$MaTK) == false)
            {
                echo "Số tín chỉ vượt quá quy định 15 tín chỉ. Bạn vui lòng hủy bớt học phần";
            }
            else if( $this->checkTotalTC($date,$MaTK))
            {
                $result = $this->model->RegisterMH ($ID, $MaLHP, $MaTK, $maLich, $date);
            }
            // else if($this->checkLich($maLich) == false)
            // {
            //     echo "Học phần bị trùng lịch. Vui lòng chọn lịch khác";
            // }

        //         $temp = $this->checkTotalTC($date, $MaTK);
        // echo $temp["total"];
        }

        function checkTotalTC($date,$MaTK)
        {
            $result = $this->model->checkTotalTC($date,$MaTK);

            if($result["total"] > 15)
            {
                return false;
            }

            return $result["total"];
        }

        function checkLich($maLich)
        {
            $date = date("Y-m-d");
            $MaTK = isset($_SESSION['masinhvien']) ? $_SESSION['masinhvien'][0]["MaTK"] : null;
            $histories = json_decode($this->model->getHistories($date,$MaTK,$maLich),true);

            if(count($histories) > 0)
            {
                return false;
            }

            return true;
        }

        function cancelRegisted()
        {
            $ID = isset($_GET["ID"]) ? $_GET["ID"] : null;
            $MaTK = isset($_SESSION['masinhvien']) ? $_SESSION['masinhvien'][0]["MaTK"] : null;
            $result = $this->model->cancelRegisted ($MaTK,$ID);
            
            header("location: http://localhost/tinchi/dangky");
        }
    }
?>