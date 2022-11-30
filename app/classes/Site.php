<?php
namespace App\Classes;


class Site extends Dbcon
{
    public function getSliders()
    {
        $today = date('Y-m-d');
        return $this->con->query("SELECT * FROM `sliders` WHERE `start_date` <='$today' AND `end_date` >= '$today' AND `status` = 1 ORDER BY `id` DESC ");
    }
    public function getWorkMenus()
    {
        return $this->con->query("SELECT * FROM `works_menu` WHERE `status`=1 ORDER BY `id` ASC ");
    }
    public function getWorkItems()
    {
        return $this->con->query("SELECT `works_items`.`title`,`works_items`.`photo`,`works_items`.`status`,`works_menu`.`name`,`works_menu`.`slug` FROM `works_items` INNER JOIN `works_menu` ON `works_menu`.`id` = `works_items`.`menu_id` WHERE `works_items`.`status` = 1 ORDER BY `works_items`.`id` DESC");
    }
}