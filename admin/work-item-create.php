<?php
require_once 'header.php';
require_once '../app/classes/autoload.php';

use App\Classes\WorkMenu;

$workMenu = new WorkMenu();

$result = $workMenu->activeCategory();

?>

    <section class="p-3 main-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Add New Work Item</h3>
                </div>
                <div class="col-6 text-end">
                    <a href="work-item.php" class="btn btn-primary"> <i class="fa fa-tasks"></i> Manage works Item</a>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center mb-3">
                <div class="col-md-8">
                    <div class="card">
                        <h3 class="card-header">Add New Work Item</h3>
                        <div class="card-body">
                            <form action="" method="POST" data-url="save-work-item" enctype="multipart/form-data"
                                  id="create-form">
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="title">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" id="title" placeholder="Title"
                                               class="form-control" required="">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="menu_id">Category</label>
                                    <div class="col-sm-10">
                                        <select name="menu_id" class="form-control" id="menu_id">
                                            <option value="">Select</option>
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) { ?>
                                                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="photo">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="photo" id="photo" class="form-control"
                                               onchange="imageView(this)" required="">
                                        <br>
                                        <img class="image-view" style="width: 100px; height: 100px;"
                                             src="https://via.placeholder.com/100" alt="photo">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2">Status</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="active"
                                                   value="1" checked>
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                                   value="0">
                                            <label class="form-check-label" for="inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>


                                <div class="my-3 row justify-content-end">
                                    <div class="col-sm-10">
                                        <input type="submit" value="Add Slider" class="btn btn-primary">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>


<?php require_once 'footer.php'; ?>