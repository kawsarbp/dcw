<?php
require_once 'header.php';
require_once '../app/classes/autoload.php';

use App\Classes\WorkMenu;

$worksMenu = new WorkMenu();

$result = $worksMenu->works_menu();

?>

    <section class="p-3 main-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Manage Works Menu</h3>
                </div>
                <div class="col-6 text-end">
                    <a href="work-menu-create.php" class="btn btn-primary"> <i class="fa fa-add"></i> Add new menu</a>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table-work-menu" class="display">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sn = 1;
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
                            <td><?= $sn; ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['slug'] ?></td>
                            <td style="color: <?= $row['status'] == 1 ? 'green':'red' ?>;"><?= $row['status'] == 1 ? 'Active':'Inactive' ?></td>
                            <td>
                                <a href="javascript:" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="javascript:" class="btn btn-info" ><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <?php $sn++;
                    }
                    ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

<?php require_once 'footer.php'; ?>