<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

    // Handle form values sent by new.php

    $name = $_POST['name'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $course = $_POST['course'] ?? '';
    $from_date = $_POST['from_date'] ?? '';
    $to_date = $_POST['to_date'] ?? '';

    $result = insert_visitor($name, $phone, $course, $from_date, $to_date);
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/pages/show_profile.php?id=' . $new_id));

} else {
    redirect_to(url_for('/pages/new.php'));
}

?>
