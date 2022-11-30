<?php
require_once 'header.php';
require_once '../app/classes/autoload.php';
use App\Classes\WorkMenu;

$workMenu = new WorkMenu();

$result = $workMenu->works_items();
?>

    <section class="p-3 main-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Manage Works item</h3>
                </div>
                <div class="col-6 text-end">
                    <a href="work-item-create.php" class="btn btn-primary"> <i class="fa fa-add"></i> Add New Work Item</a>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="table-work-item" class="display">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($result))
                    {
                        ?>
                    <tr>
                        <td>s</td>
                        <td><?= $row['title'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><img style="width: 150px; height: 100px;" src="<?= $workMenu->base_url.'uploads/'. $row['photo'] ?>" alt=""></td>
                        <td style="color: <?= $row['status'] == 1 ? 'green':'red' ?>"><?= $row['status'] == 1 ? 'active':'inactive' ?></td>
                        <td>
                            <a href="javascript:" class="btn btn-info"><i class="fa fa-edit"></i></a>
                            <a href="javascript:" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>

                        <?php
                    }

                    ?>
                    </tbody>
                </table>
            </div>

        </div>
    </section>

<?php require_once 'footer.php'; ?>