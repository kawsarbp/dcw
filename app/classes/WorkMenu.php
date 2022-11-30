<?php

namespace App\Classes;

class WorkMenu extends Dbcon
{
    public function save_work_menu($name, $status)
    {
        session_start();
        $user_id = $_SESSION['user_id'];
        $slug = strtolower(str_replace(' ', '-', $name));
        return $this->con->query("INSERT INTO `works_menu`(`name`, `slug`, `status`, `create_by`) VALUES ('$name','$slug','$status','$user_id')");
    }

    //show work menu
    public function works_menu()
    {
        return $this->con->query("SELECT * FROM `works_menu` ORDER BY `id` DESC  ");
    }

    //active category
    public function activeCategory()
    {
        return $this->con->query("SELECT `id`,`name` FROM `works_menu` WHERE `status` = 1 ORDER BY `name` ASC ");
    }


    //save work item
    public function save_work_item($menu_id, $title, $photo, $status)
    {
        session_start();
        $user_id = $_SESSION['user_id'];
        return $this->con->query("INSERT INTO `works_items`( `menu_id`, `title`, `photo`, `status`, `create_by`) VALUES ('$menu_id','$title','$photo','$status','$user_id')");
    }

    //show work menu
    public function works_items()
    {
        return $this->con->query("SELECT `works_items`.`id`,`works_items`.`title`, `works_items`.`photo`,`works_items`.`status`,`works_menu`.`name` FROM `works_items` INNER JOIN `works_menu` ON `works_menu`.`id` = `works_items`.`menu_id` ORDER BY `name` ASC ");
    }
}