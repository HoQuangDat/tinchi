<?php
    header("Access-Control-Allow-Origin: *");
    class Main extends Controller
    {
        function show()
        {
            self::view("Main");
        }
    }
?>