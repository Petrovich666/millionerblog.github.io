<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

    

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
          rel="stylesheet">

    <title>Контакты</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>

<body>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php"><h2>Кризис<em>.</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse right" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Главная
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Статьи</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="contact.php">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="heading-page header-text">
    <section class="page-heading" style="background-image: url('./assets/images/precondo-ca-olsgcrlsykw-unsplash.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Контакты</h4>
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
                <div class="down-contact">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>Оставьте комментарий</h2>
                                </div>
                                <div class="content">
                                    <form id="contact" action="thanks.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="name" type="text" id="name"
                                                           placeholder="Имя" required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input name="email" type="text" id="email" placeholder="Email"
                                                           required="">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-12 col-sm-12">
                                                <fieldset>
                                                    <input name="phone" type="phone" id="phone"
                                                           placeholder="Номер телефона">
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <textarea name="message" rows="6" id="message"
                                                              placeholder="Текст комментария" required=""></textarea>
                                                </fieldset>
                                                <label class="terms-field">
                                                    <input type="checkbox" name="terms" value="check" required=""/>
                                                    <a href="terms.php" target="_blank">
                                                        Я прочитал и согласен с условиями пользовательского соглашения
                                                    </a>
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <fieldset>
                                                    <button type="submit" id="form-submit" class="main-button">
                                                        Отправить
                                                    </button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar-item contact-information">
                                <div class="sidebar-heading">
                                    <h2>Информация</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li>
                                            <h5>+1528610224038</h5>
                                            <span>Номер телефона</span>
                                        </li>
                                        <li>
                                            <h5>ily.sukina@inbox.ru<span class="server-name"></span></h5>
                                            <span>Email</span>
                                        </li>
                                        <li>
                                            <h5>500363, Орловская область, город Подольск, проезд Косиора, 18</h5>
                                            <span>Адрес</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 map-wrapper bottom">
                <div id="map">
                    <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
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
                    <p>Copyright Кризис</p>
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