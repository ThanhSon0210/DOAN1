
<?php
    function check_user($user, $pass) {
        $sql = "SELECT * FROM user WHERE username = '".$user."' AND pass = '".$pass."'";
        return get_one($sql);
    }
    function ql_user(){
        $sql= "SELECT * FROM user ";
        return get_all($sql);
     }
?>