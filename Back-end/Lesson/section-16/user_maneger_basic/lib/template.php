<?php

function get_header() {
    $path_header = 'inc/header.php';
    if (file_exists($path_header)) {
        require $path_header;
    }else{
        echo"Không tồn tại đường dẫn ($path_header) ";
    }
}

function get_footer() {
    $path_footer = 'inc/footer.php';
    if (file_exists($path_footer)) {
        require $path_footer;
    }else{
        echo"Không tồn tại đường dẫn ($path_footer) ";
    }
}

function get_sidebar() {
    $path_sidebar = 'inc/sidebar.php';
    if (file_exists($path_sidebar)) {
        require $path_sidebar;
    }else{
        echo"Không tồn tại đường dẫn ($path_sidebar) ";
    }
}
function is_username($username) {
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten, $username))
        return false;
    return true;
}

function is_password($password) {
    $partten = "/^([A-Z]){1}([\w_.!@#$%^&*()]+){5,31}$/";
    if (!preg_match($partten, $password))
        return false;
    return true;
}