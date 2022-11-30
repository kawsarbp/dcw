<?php
namespace App\Classes;


class Slider extends Dbcon
{
    //add slider
    public function save_slider($title,$sub_title,$start_date,$end_date,$url,$photo,$status)
    {
        session_start();
        $user_id = $_SESSION['user_id'];
        return $this->con->query("INSERT INTO `sliders`(`title`, `sub_title`, `start_date`, `end_date`, `url`, `photo`, `status`, `create_by`) VALUES ('$title','$sub_title','$start_date','$end_date','$url','$photo','$status','$user_id')");
    }
    //update slider
    public function update_slider($id,$title,$sub_title,$start_date,$end_date,$url,$photo,$status)
    {
        session_start();
        $user_id = $_SESSION['user_id'];
        return $this->con->query("UPDATE `sliders` SET `title`='$title',`sub_title`='$sub_title',`start_date`='$start_date',`end_date`='$end_date',`url`='$url',`photo`='$photo',`status`='$status',`create_by`='$user_id' WHERE `id`='$id'");
    }
    //show slider
    public function sliders()
    {
        return $this->con->query("SELECT * FROM `sliders` ORDER  BY `id` DESC ");
    }
    //delete slider
    public function delete($id)
    {
        return $this->con->query("DELETE FROM `sliders` WHERE `id`='$id' ");
    }
    //slider edit part
    //select single row
    public function getSlider($id)
    {
        return $this->con->query("SELECT * FROM `sliders` WHERE `id`='$id' ");
    }
    //update status
    public function changeStatus($id,$status)
    {
        return $this->con->query("UPDATE `sliders` SET `status`='$status' WHERE `id`='$id' ");
    }

}