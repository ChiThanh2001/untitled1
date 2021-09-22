<?php
//var_dump($_POST);
if (isset($_POST['fullname'])){
    $fullname = $_REQUEST['fullname'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    echo'Fullname: ';
    echo $fullname;
    echo '<br/>';

    echo 'Email: ';
    echo $email;
    echo '<br/>';

    echo 'Address: ';
    echo $address;
    echo '<br/>';

}