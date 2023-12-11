<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> <!--Design Responsivo-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e1a87c0c98.js" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet">
    <title>Tema do Rafael</title>
</head>
<body>
    <section class="topo"> 
        <div class="center">
            <header>
                <div class="logo"><img src="images/logo.png"> </div><!--logo-->
            </header>
            <ul class="menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul><!--menu-desktop-->
            <div class="clear"></div>
        <br>
        <br>
            <div class="w50 time-descricao">
                <h2>Melhore a sua comunicação</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas</p>
                <a target="_blank" href="www.google.com">Ver demonstração</a>
            </div><!--w50-->
            <div class="w50 time-imagem">
                <img src="images/ilustracao-equipe.png">
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--topo-->

    <div class="circle"><i class="fas fa-angle-down"></i></div><!--circle-->

    <section class="clientes-slider">
        <div class="center">
        <img src="images/amazon.png">
        <img src="images/costco.png">
        <img src="images/uber.png">
        <img src="images/walmart.png">
        </div><!--center-->
    </section><!--clientes-slider>-->

    <script src="js/jquery.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/slick.min.js"></script>
    <script type="text/javascipt">
        $('section.clientes-slider .center').slick({
            dots: true,
            arrows: false,
            infinite: true,
            centerMode: true,
            centerPadding: 0,
            speed: 1000,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: false
        });
    </script>

</body>
</html>