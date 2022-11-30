<?php
require_once 'header.php';

use App\Classes\Slider;

$slider = new Slider();

$result = $slider->sliders();
?>

    <section class="p-3 main-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Manage Sliders</h3>
                </div>
                <div class="col-6 text-end">
                    <a href="add-slider.php" class="btn btn-primary"> <i class="fa fa-add"></i> Add new slider</a>
                </div>
            </div>
            <hr>
            <div class="table-responsive">
                <table id="data-table" class="display">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Photo</th>
                        <th>Time Limit</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sn = 1;
                    while ($row = $result->fetch_array()) { ?>
                        <tr class="remove-row-<?= $row['id'] ?>">
                            <td><?= $sn; ?></td>
                            <td><?= $row['title'] ?></td>
                            <td><?= $row['sub_title'] ?></td>
                            <td><img style="width: 100px;" src="<?= $slider->base_url . 'uploads/' . $row['photo'] ?>"
                                     alt=""></td>
                            <td><?= date('d-M-y', strtotime($row['start_date'])) . ' - ' . date('d-M-y', strtotime($row['end_date'])) ?></td>
                            <td id="td-change-status-<?= $row['id'] ?>"
                                style="color: <?= $row['status'] == 1 ? 'green' : 'red' ?>"><?= $row['status'] == 1 ? 'active' : 'inactive' ?></td>
                            <td>
                                <button id="button-change-status-<?= $row['id'] ?>" data-id="<?= $row['id'] ?>"
                                        class="change-status text-white btn btn-<?= $row['status'] == 1 ? 'info' : 'warning' ?>">
                                    <i class="fa fa-angle-<?= $row['status'] == 1 ? 'up' : 'down' ?>"></i>
                                </button>
                                <a href="edit-slider.php?edit=<?= base64_encode($row['id']) ?>"
                                   class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i> </a>
                                <button class="btn btn-sm btn-danger remove-slider" data-id="<?= $row['id'] ?>"><i
                                            class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php $sn++;
                    } ?>

                    </tbody>
                </table>
            </div>

        </div>
    </section>

<?php require_once 'footer.php'; ?>