<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sekoenol</title>
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
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top" style="box-shadow: 0px 5px 15px #94b8b8;">
        <div class="nprinsley-text-rainbowan">
            <a class="navbar-brand" href="<?= base_url() ?>/adminhome"><img src="<?= base_url() ?>/assets/upload/logo.png" height="30px">
                <strong>Sekoenol</strong>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Administrator
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= base_url() ?>/adminlevel/index">Levels</a>
                    </div>
                </li>
            </ul>

            <span class="float-right ml-4" id="logout"><?= session()->iduser ?> <i class='fas fa-sign-out-alt'></i></span>

        </div>

    </nav>

    <br>

    <div class="container-fluid">
        <?= $this->renderSection('isi'); ?>
    </div>

    <nav class="navbar navbar-expand-xl bg-light navbar-light fixed-bottom justify-content-center" style="box-shadow: 0px 5px 15px #94b8b8 inset;">
        <div id="marquee">
            <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                Copyright <i class="fa fa-copyright"></i> <a href="http://sekoenol.site/" target="_blank">Sutino
                    S.Kom</a> 2022.
            </marquee>
        </div>
    </nav>

    <script src="<?= base_url() ?>/assets/js/custom.js"></script>

    <script>
        $(document).ready(function() {

            // tombol logout
            $('#logout').click(function(e) {
                e.preventDefault();


                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "ingin logout dari halaman ini ?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, logout!',
                    cancelButtonText: 'Batal!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?= base_url() ?>/adminmain/logout",
                            dataType: "json",
                            success: function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: response.sukses
                                }).then((resul) => {
                                    if (resul.isConfirmed) {
                                        window.location.href = '<?= base_url() ?>/adminmain/index';
                                    }
                                });
                            }
                        });
                    }
                })

            });

        });
    </script>

</body>

</html>