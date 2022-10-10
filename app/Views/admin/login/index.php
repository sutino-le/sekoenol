<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sekoenol System</title>
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/upload/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <!-- untuk ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- untuk icon bootstrap 4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- icon fontawesome -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="<?= base_url() ?>/assets/sweetalert/sweetalert2.min.css">
    <script src="<?= base_url() ?>/assets/sweetalert/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.prinsh.com/NathanPrinsley-textstyle/nprinsh-stext.css" />
</head>

<body>

    <div class="container">

        <div class="container-fluid mt-5 mb-5">
            <div class="row justify-content-md-center">

                <div class="col">
                    <div class="container-fluid text-center">
                        <img src="<?= base_url() ?>/assets/upload/logo.png" width="100px" height="100px">
                    </div>
                    <div class="nprinsley-text-rainbowan">
                        <h2 class="text-center">Sekoenol System</h2>
                    </div>
                    <p align="center" class="mb-5">Common People App</p>


                    <form action="<?= base_url() ?>/adminmain/login" class="formlogin">
                        <div class="form-group">
                            <label for="userid">User ID:</label>
                            <input type="email" class="form-control" id="userid" placeholder="Enter User ID" name="userid" autocomplete="off">
                            <div class="invalid-feedback errorUserID"></div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" autocomplete="off">
                            <div class="invalid-feedback errorPassword"></div>
                        </div>
                        <div class="form-group form-check">
                            <label class="form-check-label">
                            </label>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block button">Login</button>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            // proses form login
            $('.formlogin').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "post",
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(response) {
                        if (response.error) {
                            let err = response.error;

                            if (err.errUserID) {
                                $('#userid').addClass('is-invalid');
                                $('.errorUserID').html(err.errUserID);
                            } else {
                                $('#userid').removeClass('is-invalid');
                                $('#userid').addClass('is-valid');
                            }

                            if (err.errPassword) {
                                $('#password').addClass('is-invalid');
                                $('.errorPassword').html(err.errPassword);
                            } else {
                                $('#password').removeClass('is-invalid');
                                $('#password').addClass('is-valid');
                            }
                        }

                        if (response.berhasil) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.berhasil
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.href = "<?= base_url() ?>/adminhome";
                                }
                            });
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        alert(xhr.status + '\n' + thrownError);
                    }
                });

            });

        });
    </script>

</body>

</html>