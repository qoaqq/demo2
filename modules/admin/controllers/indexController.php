<?php

function construct() {
        load_model('index');
    }
function indexAction() {
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];

        $data = array(
            'name' => $name,
            'age' => $age,
            'email' => $email
        );

        insert_user($data);
        
    }
    var_dump($_POST);
}

function addAction() {
    echo "Thêm dữ liệu";
}


