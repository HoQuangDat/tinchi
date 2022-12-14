<?php
    class DangNhap extends Controller
    {
        private $model;

        public function __construct()
        {
            $this->model = $this->model("DangNhapModel");
        }

        function show()
        {
            $this->view("DangNhap");
        }

        function checkLogin(){
            $masinhvien = isset($_POST['username']) ? $_POST['username'] : null;
            $password = isset ($_POST['password'])? $_POST['password'] : null;

            $num_rows = json_decode($this->model->login($masinhvien,$password), true);

            if (count($num_rows) <= 0) {
                $_SESSION['error'] = "Vui lòng nhập đúng thông tin";

                header('Location: http://localhost/tinchi/DangNhap');
            }else{
                //Kiểm tra tên đăng nhập có tồn tại không
            
                    //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                    $_SESSION['masinhvien'] = $num_rows;

                    // Thực thi hành động sau khi lưu thông tin vào session
                    header('Location: http://localhost/tinchi/KetQua');
                    //include_once('trangchu.php');
                
            }
        }

        function checkLogOut()
        {
            unset($_SESSION['masinhvien']);
            unset($_SESSION['error']);

            header('Location: http://localhost/tinchi/DangNhap');

        }
        
    }
?>