<?php
    include_once('m_user.php');;
    class Validation{
        function checkUserName($userName){
        //check name
        if (empty($userName)){
            return "Vui lòng nhập tài khoản!";
        }else{
            $mUser = new M_User();
            $had = $mUser->queryUserName($userName);
            if($had == 1){
                return "Tài khoản đã tồn tại!";
            }
        }
        return null;
    }
    function checkName($name){
        if (empty($name)){
            return "Vui lòng nhập họ tên!";
        }
        return null;
    }
    function checkEmail($email){
        if (empty($email)){
            return "Vui lòng nhập email!";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return "Email không hợp lệ!";
        }
        return null;
    }
    function checkPass($pass){
        if (empty($pass)){
            return "Vui lòng nhập mật khẩu!";
        }
        return null;
    }
    function checkPass2($pass, $pass2){
        if (empty($pass2)){
            return "Vui lòng nhập lại mật khẩu!";
        }elseif((strcmp($pass, $pass2)) != 0){
            return "Nhập lại mật khẩu không chính xác!";
        }
        return null;
    }
    function test_input($data) {
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
    }
}?>