// image view
function imageView(myphoto) {
    if (myphoto.files && myphoto.files[0]) {
        let reader = new FileReader();
        reader.onload = function (event) {
            $(".image-view").attr('src', event.target.result);
        }
        reader.readAsDataURL(myphoto.files[0]);
    }
}

// image view
$(document).ready(function () {
    $('#data-table').DataTable();
    $('#table-work-menu').DataTable();
    $('#table-work-item').DataTable();
    // form submit
    $("#create-form").on('submit', function (event) {
        event.preventDefault();
        $(".loader").show();
        let formData = new FormData(this);
        formData.append('action', $(this).data('url'))

        if ($("#create-form")[0].checkValidity()) {
            $.ajax({
                url: site_url + 'admin/inc/action.php',
                method: 'POST',
                processData: false,
                contentType: false,
                dataType: 'json',
                data: formData,
                success: function (result) {
                    $(".loader").hide();
                    if (!result.error) {
                        $("#create-form")[0].reset();
                        $(".image-view").attr('src', 'https://via.placeholder.com/100');
                        toastr.success(result.message);
                    } else {
                        toastr.error(result.message);
                    }
                }
            })
        }
    });
    // delete sliders
    $(".remove-slider").on('click',function () {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $(".loader").show();
                let  id = $(this).data('id');

                $.ajax({
                    url: site_url + 'admin/inc/action.php',
                    method: 'POST',
                    dataType: 'json',
                    data: {id:id,action:'delete-slider'},
                    success: function (result) {
                        $(".loader").hide();
                        if (!result.error) {
                            $(".remove-row-"+id).hide();
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                        } else {
                            toastr.error(result.message);
                        }
                    }
                });

            }
        })

    });
//update slider
    $("#update-form").on('submit', function (event) {
        event.preventDefault();
        $(".loader").show();
        let formData = new FormData(this);
        formData.append('action', $(this).data('url'))

        if ($("#update-form")[0].checkValidity()) {
            $.ajax({
                url: site_url + 'admin/inc/action.php',
                method: 'POST',
                processData: false,
                contentType: false,
                dataType: 'json',
                data: formData,
                success: function (result) {
                    console.log(result)
                    $(".loader").hide();
                    if (!result.error) {
                        toastr.success(result.message);
                    } else {
                        toastr.error(result.message);
                    }
                }
            })
        }
    });
    //upadate status
    $(".change-status").on('click', function () {
        $(".loader").show();
        let id = $(this).data('id');
        // const status_color = status === 1 ? 'green' : 'red';

        $.ajax({
            url: site_url + 'admin/inc/action.php',
            method: 'POST',
            data: {id: id, action: 'change-status'},
            success: function (response) {
                $(".loader").hide();
                if (!response.error) {
                    if (response.status) {
                        $("#td-change-status-" + id).text('active').css('color', 'green');
                        $("#button-change-status-" + id).addClass('btn-info').removeClass('btn-warning').html('<i class="fa fa-angle-up"></i>');
                    } else {
                        $("#td-change-status-" + id).text('inactive').css('color', 'red');
                        $("#button-change-status-" + id).removeClass('btn-info').addClass('btn-warning').html('<i class="fa fa-angle-down"></i>');
                    }
                    toastr.success(response.message);
                } else {
                    toastr.error(response.message);
                }
            }
        });
    })




// datepiker
    $(".datepicker").datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true

    });
});