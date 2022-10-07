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
        <a class="navbar-brand" href="index.html"><img src="<?= base_url() ?>/assets/upload/logo.png" height="30px">
            <strong>Sekoenol</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Link</a>
                </li>
            </ul>

            <span class="float-right ml-4" id="logout"><i class='fas fa-sign-out-alt'></i></span>

        </div>

    </nav>


    <div class="sidebar" style="box-shadow: 0px 5px 15px #94b8b8;">
        <button class="dropdown-btn mt-3"><i class="fa fa-fw fa-home"></i>Master
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-container">
            <a class="dropdown-container" href="index.html"><i class="fa fa-fw fa-home"></i>Link 1</a>
            <a class="dropdown-container" href="index.html">Link 2</a>
            <a class="dropdown-container" href="index.html">Link 3</a>
        </div>
    </div>

    <br>

    <div class="container">
        <h3>Collapsible Navbar</h3>
        <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).</p>
        <p>Only when the button is clicked, the navigation bar will be displayed.</p>
        <p>Tip: You can also remove the .navbar-expand-md class to ALWAYS hide navbar links and display the toggler button.
        </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae ullam sint, numquam ex fugit totam aliquam cumque et repellendus, ipsa aliquid, dolore molestiae sit distinctio laborum ratione perferendis maiores. Aspernatur voluptate sapiente
            accusamus magnam veniam repudiandae quasi, quae, nobis temporibus autem, veritatis amet labore facilis doloribus cum? Ullam esse reiciendis a voluptate atque! Eligendi voluptatum cumque ipsam totam natus iste repudiandae fugiat pariatur praesentium
            voluptatem! Sed consectetur rem fugit quod. Temporibus in sequi voluptates placeat consectetur, delectus perferendis aspernatur cumque nam nemo quidem minus repellendus ex sit reprehenderit aperiam facilis numquam fuga, cupiditate laborum
            tenetur vero impedit, quod eos! Velit porro omnis ipsam laborum corrupti reprehenderit exercitationem dolor atque nemo necessitatibus sunt excepturi eveniet cum minima, assumenda debitis non animi aperiam veritatis placeat dignissimos, in
            sint accusamus modi. Exercitationem, quia eligendi? Inventore vel autem distinctio quae natus fugiat nulla, adipisci laboriosam excepturi doloremque ex illum alias quia sed laudantium, voluptas sint. Commodi modi temporibus porro accusamus
            pariatur minus magni obcaecati ipsa laboriosam sequi, quaerat vel, accusantium, omnis natus sint explicabo delectus sed laudantium illum. Non, molestias eos a dolorem sapiente iusto maiores eaque saepe perspiciatis quae nam iure modi harum
            praesentium laudantium repudiandae culpa asperiores. Error mollitia blanditiis provident ut!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt rerum quo nostrum esse dolorum delectus laudantium magni eligendi adipisci itaque, eum libero dicta, repudiandae sapiente qui laboriosam, reiciendis quod odio molestiae numquam
            nisi saepe tempore! Doloribus odio ad at dolore quaerat molestias modi neque soluta, sapiente magnam reprehenderit repellendus laborum placeat. Id quibusdam vitae perferendis recusandae ratione qui doloribus dicta obcaecati, nesciunt, reiciendis
            harum amet? Excepturi asperiores minima voluptatibus dicta exercitationem dolor ex sapiente voluptate minus impedit. Unde qui ratione ex sit ut, facere maxime molestiae quibusdam esse. Debitis tempore repellendus aperiam ea, laborum numquam
            ducimus unde maxime, quaerat libero nemo, assumenda voluptatem in totam ipsa ut! Ipsa nisi pariatur vero cumque nesciunt obcaecati quas perspiciatis, deserunt itaque sequi, dolorum aliquid error tempore recusandae dolore, tempora reprehenderit
            dignissimos quia veniam expedita! Sequi voluptates deserunt, recusandae cum porro aperiam distinctio eveniet eligendi? Rerum qui quaerat numquam odio officia. Voluptatum ea reiciendis ratione error eos sed similique quidem praesentium ipsum,
            architecto id illo accusantium, saepe perspiciatis libero perferendis numquam impedit minima ullam officiis neque ad veritatis veniam cupiditate? Quas ex cumque id at nulla provident ratione, omnis, eos dicta quam iure exercitationem suscipit
            laudantium architecto minima! Aspernatur porro voluptatem, possimus, repudiandae perferendis modi expedita ipsa culpa unde quae temporibus? Aliquam non quibusdam soluta nulla, tenetur facilis sapiente praesentium nisi doloribus, neque quia
            provident error, dignissimos quisquam reprehenderit suscipit quam. Possimus iusto iste aspernatur facilis incidunt reiciendis deserunt fugit perspiciatis fugiat aliquam hic ab impedit, tempora corrupti autem eveniet ad facere mollitia culpa.
            Quia numquam incidunt provident nemo, eos minima quidem ipsam! Voluptatem, hic ipsam? Commodi magni ipsam cumque maiores tempora similique nostrum, porro eum ipsa quisquam distinctio doloremque voluptas quaerat sunt, repudiandae laboriosam
            asperiores numquam. Adipisci dolorem tempore corporis tempora, voluptatem consequuntur blanditiis quos quibusdam. Ipsa dignissimos ex maxime unde veritatis ducimus at possimus nostrum corrupti eos debitis, voluptas distinctio amet laboriosam
            magni quaerat? Consequatur iusto sunt ducimus deserunt perspiciatis quo cupiditate quas expedita aliquam incidunt amet, ex sequi perferendis! Placeat non voluptate vero illo debitis architecto natus labore unde possimus quibusdam quidem eius
            iure illum, ullam neque quam alias aperiam laboriosam nesciunt maxime porro officiis. Enim beatae ipsum, quo cum dolore quam error, repellendus, vel molestias perspiciatis asperiores facilis quibusdam expedita? Voluptate quisquam, unde labore
            deleniti dolorem voluptas similique. Est, exercitationem repellat expedita eos iusto architecto aliquam quis dolorum laborum, magnam quod ipsam sequi soluta dolor animi dicta? Explicabo, beatae impedit!</p>
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

</body>

</html>