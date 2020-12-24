<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
          rel="stylesheet">

    <title>Имя</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>Управление финансами<em>.</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse right" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Главная
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Статьи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="heading-page header-text">
    <section class="page-heading" style="background-image: url('./assets/images/annie-spratt-e9ne0qcq74k-unsplash.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Имя</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="contact-us">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                Thank you for your application!
            </div>

        </div>
    </div>
</section>


<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="social-icons">
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Behance</a></li>
                    <li><a href="">Linkedin</a></li>
                    <li><a href="">Dribbble</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <ul>
                    <li><a href="policy.php">Политика конфиденциальности</a></li>
                    <li><a href="terms.php">Условия и положения</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="copyright-text">
                    <p>Copyright Управление финансами</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>

<div class='cookie-banner'>
    <p>
        Сайт использует файлы cookie. Они позволяют узнавать вас и получать информацию о вашем пользовательском опыте.Продолжая просмотр сайта, я соглашаюсь с использованием файлов cookie владельцем сайта в соответствии с <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Политикой cookie</a>
    </p>
    <button class='close-cookie'>&times;</button>
</div>
<script>
    window.onload = function () {
        $('.close-cookie').click(function () {
            $('.cookie-banner').fadeOut();
        })
    }
</script>

<script>
    let elems = document.querySelectorAll('.server-name');
    elems.forEach((elem) => {
        elem.innerHTML = window.location.hostname
    })
</script>

<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>

</body>
</html>