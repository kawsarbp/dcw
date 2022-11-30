<?php
header('content-type:application/json');
require_once '../../app/classes/autoload.php';

use App\Classes\Slider;
use App\Classes\WorkMenu;

$slider = new Slider();
$workMenu = new WorkMenu();
$data = ['error' => false];

if (isset($_POST['action']) && ($_POST['action'] === 'save-slider')) {

    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $url = $_POST['url'];
    $status = $_POST['status'];

    $image = explode('.', $_FILES['photo']['name']);
    $image_ex = end($image);
    $photo = date('dmyhis.') . $image_ex;

    if ($slider->save_slider($title, $sub_title, $start_date, $end_date, $url, $photo, $status)) {
        move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/' . $photo);
        $data['message'] = 'Slider Save Success';
    } else {
        $data['error'] = true;
        $data['message'] = 'slider Not Save';
    }

    echo json_encode($data);
}
//delete slider

if (isset($_POST['action']) && ($_POST['action'] === 'delete-slider')) {
    $id = $_POST['id'];
    $result = $slider->getSlider($id);
    $row = $result->fetch_array();
    if ($slider->delete($id)) {
        if (file_exists('../../uploads/' . $row['photo'])) {
            unlink('../../uploads/' . $row['photo']);
        }
        $data['message'] = 'Slider Delete Success';
    } else {
        $data['error'] = true;
        $data['message'] = 'slider Not Delete';
    }

    echo json_encode($data);
}
//update slider


if (isset($_POST['action']) && ($_POST['action'] === 'update-slider')) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $url = $_POST['url'];
    $status = $_POST['status'];
    $old_photo = $_POST['old_photo'];
    if ($_FILES['photo']['name']) {
        $image = explode('.', $_FILES['photo']['name']);
        $image_ex = end($image);
        $photo = date('dmyhis.') . $image_ex;
    } else {
        $photo = $old_photo;
    }


    if ($slider->update_slider($id, $title, $sub_title, $start_date, $end_date, $url, $photo, $status)) {
        if ($old_photo !== $photo) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/' . $photo);
            if (file_exists('../../uploads/' . $old_photo)) {
                unlink('../../uploads/' . $old_photo);
            }
        }
        $data['message'] = 'Slider Update Success';
    } else {
        $data['error'] = true;
        $data['message'] = 'slider Not Update';
    }

    echo json_encode($data);
}
//update status

if (isset($_POST['action']) && ($_POST['action'] === 'change-status')) {
    $id = $_POST['id'];
    $result = $slider->getSlider($id);
    $row = $result->fetch_array();
    $status = $row['status'] == 1 ? 0:1;

    if ($slider->changeStatus($id, $status)) {
        $data['status'] = $status;
        $data['message'] = 'Status Update Success';
    } else {
        $data['error'] = true;
        $data['message'] = 'Status Not Update';
    }

    echo json_encode($data);
}
//save work menu

if (isset($_POST['action']) && ($_POST['action'] === 'save-work-menu')) {
    $name = $_POST['name'];
    $status = $_POST['status'];

    if ($workMenu->save_work_menu($name, $status)) {
        $data['message'] = 'Slider Save Success';
    } else {
        $data['error'] = true;
        $data['message'] = 'slider Not Save';
    }

    echo json_encode($data);
}
//save work item

if (isset($_POST['action']) && ($_POST['action'] === 'save-work-item')) {

    $title = $_POST['title'];
    $menu_id = $_POST['menu_id'];
    $status = $_POST['status'];

    $image = explode('.', $_FILES['photo']['name']);
    $image_ex = end($image);
    $photo = date('dmyhis.') . $image_ex;

    if ($workMenu->save_work_item($menu_id,$title,$photo,$status)) {
        move_uploaded_file($_FILES['photo']['tmp_name'], '../../uploads/' . $photo);
        $data['message'] = 'Work item save Success';
    } else {
        $data['error'] = true;
        $data['message'] = 'Work item Not Save';
    }

    echo json_encode($data);
}