<?php require_once 'header.php'; ?>

    <section class="p-3 main-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3>Add New Menu</h3>
                </div>
                <div class="col-6 text-end">
                    <a href="work-menu.php" class="btn btn-primary"> <i class="fa fa-tasks"></i> Manage works menu</a>
                </div>
            </div>
            <hr>

            <div class="row justify-content-center mb-3">
                <div class="col-md-8">
                    <div class="card">
                        <h3 class="card-header">Add New Menu</h3>
                        <div class="card-body">
                            <form action="" method="POST" data-url="save-work-menu" enctype="multipart/form-data" id="create-form">
                                <div class="my-3 row">
                                    <label class="col-sm-2" for="name">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" id="name" placeholder="Name" class="form-control" required="" >
                                    </div>
                                </div>

                                <div class="my-3 row">
                                    <label class="col-sm-2">Status</label>
                                    <div class="col-sm-8">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"  name="status" id="active" value="1"  checked >
                                            <label class="form-check-label" for="active">Active</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="status" id="inactive" value="0">
                                            <label class="form-check-label" for="inactive">Inactive</label>
                                        </div>
                                    </div>
                                </div>



                                <div class="my-3 row justify-content-end">
                                    <div class="col-sm-10">
                                        <input type="submit"  value="Add Slider" class="btn btn-primary">
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