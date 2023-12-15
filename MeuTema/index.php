<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> <!--Design Responsivo-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e1a87c0c98.js" crossorigin="anonymous"></script>
    <link href="style2.css" rel="stylesheet">
    <link href="style3.css" rel="stylesheet">
    <title>Tema do Rafael</title>
</head>
<body>
    <section class="topo"> 
        <div class="center">
            <header>
                <div class="logo"><img src="images/logo-suportepress-negativa.png"> </div><!--logo-->
            </header>
            <ul class="menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul><!--menu-desktop-->

            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div><!--menu-mobile-->

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
        <div style="max-width: 700px; margin: 0 auto; overflow: hidden;" class="slider-container">
            <img src="images/amazon.png">
            <img src="images/costco.png">
            <img src="images/uber.png">
            <img src="images/walmart.png">
            <img src="images/amazon.png">
            <img src="images/costco.png">
            <img src="images/uber.png">
            <img src="images/walmart.png">
        </div><!--slider-container-->
        </div><!--center-->
    </section><!--clientes-slider>-->

    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/home.js"></script>

    <section class="diferenciais">
			
			<div class="center">
				<h2>Contribuímos de ponta a ponta</h2>

				<div class="icons-diferenciais">

					<div class="box-single-diferenciais">
						<img src="images/icons1.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icons2.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

					<div class="box-single-diferenciais">
						<img src="images/icons3.png" />
						<h3>Ambientes Mobile</h3>
						<p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
					</div><!--box-single-diferenciais-->

				</div><!--icons-diferenciais-->

			</div><!--center-->

    <section class="sobre-time2">
        <div class="center">
            <div class="w50 time-descricao2">
                    <h2>Um time experiente,<br/>comunicador e coeso.</h2>
                    <p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
                    <br /><br/>
                    Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajudar.</p>
                </div><!--w50-->
                <div class="w50 img-time">
                    <img src="images/time.png" />
                </div><!--w50 time-descricao2-->
			<div class="clear"></div>
        </div><!--center-->
    </section><!--sobre-time2-->

    <section class="depoimentos">
        <div class="center">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimentos-single">
                    <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
                    <p>Rafael Della Giustina</p>
                    <img src="images/autor.jpg">
                </div>
            </div><!--depoimentos-box-->

            <div class="depoimentos-box">
                <div class="depoimentos-single">
                    <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
                    <p>Rafael Della Giustina</p>
                    <img src="images/autor.jpg">
                </div>
            </div><!--depoimentos-box-->

            <div class="depoimentos-box">
                <div class="depoimentos-single">
                    <p>"Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."</p>
                    <p>Rafael Della Giustina</p>
                    <img src="images/autor.jpg">
                </div>
            </div><!--depoimentos-box-->
        </div><!--center-->
    </section><!--depoimentos-->

    <script>
        //Depoimentos slider
        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false,
        });
    </script>

</body>
</html>