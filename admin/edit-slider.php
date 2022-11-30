<?php
require_once 'header.php';

use App\Classes\Slider;

$slider = new Slider();
$id = base64_decode($_GET['edit']);
$result = $slider->getSlider($id);
if ($result->num_rows != 1) {
    header('location: sliders.php');
}
$row = $result->fetch_array();

?>

    <section class="p-3 main-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Update Sliders</h3>
                </div>
                <div class="col-6 text-end">
                    <a href="sliders.php" class="btn btn-primary"> <i class="fa fa-sliders"></i> Manage slider</a>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center mb-3">
                <div class="col-md-8">
                    <div class="card">
                        <h3 class="card-header">Update Slider</h3>
                        <div class="card-body">
                            <form action="" method="POST" data-url="update-slider" enctype="multipart/form-data"
                                  id="update-form">
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="title">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $row['title'] ?>" name="title" id="title"
                                               placeholder="Title"
                                               class="form-control" required="">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="sub_title">Sub Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $row['sub_title'] ?>" name="sub_title"
                                               id="sub_title" placeholder="Sub Title"
                                               class="form-control" required="">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="start_date">Start Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $row['start_date'] ?>" name="start_date"
                                               id="start_date" placeholder="Start Date"
                                               class="form-control datepicker" required="">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="end_date">End Date</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $row['end_date'] ?>" id="end_date" name="end_date"
                                               placeholder="End Date"
                                               class="form-control datepicker" required="">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="url">URL</label required="" >
                                    <div class="col-sm-10">
                                        <input type="text" value="<?= $row['url'] ?>" name="url" id="url"
                                               placeholder="URL" class="form-control"
                                               required="">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="photo">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="photo" id="photo" class="form-control"
                                               onchange="imageView(this)" >
                                        <br>
                                        <img class="image-view" style="width: 100px; height: 100px;"
                                             src="<?= $slider->base_url . 'uploads/' . $row['photo'] ?>" alt="photo">
                                        <input type="hidden" name="old_photo" value="<?= $row['photo'] ?>">
                                    </div>
                                </div>
                                <div class="my-3 row">
                                    <label class="col-sm-2">Status</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="active"
                                                   value="1" <?= $row['status'] == 1 ? 'checked=""' : '' ?>>
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inactive"
                                                   value="0" <?= $row['status'] == 0 ? 'checked=""' : '' ?> >
                                            <label class="form-check-label" for="inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-3 row justify-content-end">
                                    <div class="col-sm-10">
                                        <input type="submit" value="Update Slider" class="btn btn-primary">
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