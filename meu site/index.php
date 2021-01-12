<!DOCTYPE html>
<html class="no-js" lang="en">

<head>


   <meta charset="utf-8">
   <title>Cássio Kineipe</title>
   <meta name="description" content="">
   <meta name="author" content="">


   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


   <link rel="stylesheet" href="css/default.css">
   <link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="./881.css">
   <link rel="stylesheet" href="./882.css">


   <script src="js/modernizr.js"></script>

   <link rel="shortcut icon" href="img.ico">

</head>


<script language="JavaScript">
    function protegercodigo() {
    if (event.button==2||event.button==3){
        alert('HA, Boa sorte!');}
    }
    document.onmousedown=protegercodigo
        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();

            $('.header-overlay').css({
                opacity: function() {
                    var elementHeight = $(this).height(),
                        opacity = ((elementHeight - scrollTop) / elementHeight);
                    return opacity;
                }
            });
        });



        if (document.addEventListener) {
    document.addEventListener("keydown", bloquearSource);
} else { //Versões antigas do IE
    document.attachEvent("onkeydown", bloquearSource);
}

function bloquearSource(e) {
    e = e || window.event;

    var code = e.which || e.keyCode;

    if (
        e.ctrlKey &&
        (code == 83 || code == 85 ||code == 67 ) //83 = S, 85 = U
    ) {
        if (e.preventDefault) {
            e.preventDefault();
        } else {
            e.returnValue = false;
        }

        return false;
    }
    if (
        e.ctrlKey &&e.shiftKey &&
        (code == 67  ) //83 = c
    ) {
        if (e.preventDefault) {
            e.preventDefault();
        } else {
            e.returnValue = false;
        }

        return false;
    }
    if (
        
        (code == 123) //83 = S, 85 = U
    ) {
        if (e.preventDefault) {
            e.preventDefault();
        } else {
            e.returnValue = false;
        }

        return false;
    }
}

/////////////////////// bloqueio pika
   var cont = 0;

   function musica() {
      if (cont == 0) {

         var audio = new Audio('ACDC - Highway To Hell.mp3');
         audio.play();
         cont = 1;
      }
   }


</script>


<body>






   <canvas id="space">
   </canvas>


   <header id="home">



      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">INÍCIO</a></li>
            <li><a class="smoothscroll" href="#about">CURRÍCULO</a></li>
            <li><a class="smoothscroll" href="#resume">EXPERIÊNCIA</a></li>
            <li><a class="smoothscroll" href="#portfolio">HOBBIES</a></li>

         </ul>

      </nav>


      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">Cássio Kineipe</h1>
            <h3>Sou um estudante de <span>Ciência da computação no Mackenzie</span>, tenho 19 anos e apresento aqui um
               pouco sobre mim. </a>
            </h3>
            <hr style="background-color: #6959CD;" />

         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle" style="color: #6959CD;"></i></a>
      </p>


   </header>




   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic" src="images/eu.jpeg" alt="" />

         </div>

         <div class="nine columns main-col">


            <p style="color: #fff;">Gosto de usar a lógica para resolver problemas, prefiro trabalhar em equipe do que
               sozinho, dependendo da equipe claro. Sou mais focado no back end dos projetos.

            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2 style="color: #6959CD;">Contato</h2>
                  <p class="address">
                     <span>Cássio Kineipe</span><br>
                     <span>Arujá, SP<br>

                     </span>
                     <span>(11) 95185-2040</span><br>
                     <span>cassiokineipe@gmail.com</span>
                  </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="curriculo.pdf" class="button" download><i class="fa fa-download"></i>Baixar currículo</a>
                  </p>
               </div>

            </div>

         </div>

      </div>

   </section>


   <section id="resume">


      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Educação</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Wizard, Arujá </h3>
                  <p class="info" style="color: #6959CD;">TOEIC 595: Inglês <span>&bull;</span> <em class="date">2015 -
                        2020</em></p>


               </div>

            </div>

            <div class="row item">

               <div class="twelve columns">

                  <h3>Colégio Objetivo Arujá</h3>
                  <p class="info" style="color: #6959CD;"> Ensino fundamental / Médio <span>&bull;</span> <em
                        class="date">2018</em></p>



               </div>


            </div>

            <div class="row item">

               <div class="twelve columns">

                  <h3>Universidade Presbiteriana Mackenzie </h3>
                  <p class="info" style="color: #6959CD;">B.A Ciência da Computação <span>&bull;</span> <em
                        class="date">2022</em></p>



               </div>

            </div>



         </div>

      </div>



      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Trabalho</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>Indústria e Comércio de Metais Capixaba Ltda </h3>
                  <p class="info" style="color: #6959CD;">Auxiliar De Escritório   <span>&bull;</span> <em class="date">
                        04/2017 - 06/2019 </em></p>

                  <p>
                     Como auxiliar de escritório trabalhei dando suporte ao departamento de produção e qualidade das
                     ligas de alumínio elaborando análises do produto final e matéria prima.
                     Sou responsável por elaboração de relatórios e atualização de especificações de produto
                     com base nas solicitações dos clientes.
                  </p>

               </div>

            </div>

            <div class="row item">

               <div class="twelve columns">

                  <h3>Indústria e Comércio de Metais Capixaba Ltda </h3>
                  <p class="info" style="color: #6959CD;">Desenvolvedor De Software Junior   <span>&bull;</span> <em
                        class="date">07/2019 - Atual</em></p>

                  <p>
                     Atualmente trabalho no desenvolvimento de aplicações web utilizando as linguagens PHP, SQL, HTML e
                     CSS para a elaboração de programas para o gerenciamento de PCP (Planejamento de Controle e
                     Produção), ferramenta de gestão de pessoas, controle financeiro e estoque de peças/equipamentos.

                  </p>

               </div>

            </div>

         </div>

      </div>
   </section>


   <div class="row skill">

      <div class="three columns header-col">
         <h1><span>Skills</span></h1>
      </div>

      <div class="nine columns main-col">

         <p>
            Experiência profissional em desenvolver aplicações web.
         </p>

         <div class="bars">

            <ul class="skills">
               <li><span class="bar-expand python"></span><em style="color: #fff;">PYTHON</em></li>
               <li><span class="bar-expand illustrator"></span><em style="color: #fff;">PHP</em></li>
               <li><span class="bar-expand sql"></span><em style="color: #fff;">SQL</em></li>
               <li><span class="bar-expand c"></span><em style="color: #fff;">C/C++</em></li>
               <li><span class="bar-expand illustrator"></span><em style="color: #fff;">CSS</em></li>
               <li><span class="bar-expand html5"></span><em style="color: #fff;">HTML5</em></li>
               <li><span class="bar-expand jquery"></span><em style="color: #fff;">JAVASCRIPT</em></li>
            </ul>

         </div>

      </div>
   </div>






   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1 style="color: #fff;">Hobbies e Conhecimentos </h1>


            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">


               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-06" title="">
                        <img alt="" src="images/portfolio/quimica.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Metalurgia</h5>
                              <p>Química</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="images/portfolio/poker.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Jogos</h5>
                              <p>Baralho</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="images/portfolio/pc.JPG">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Tecnologia</h5>
                              <p>Pc Gamer</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-05" title="" onclick="musica()">
                        <img alt="" src="images/portfolio/show.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Música</h5>
                              <p>Show de Rock</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>
               <div class="columns portfolio-item">

                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="images/portfolio/rota.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Ride</h5>
                              <p>Route 66</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="images/portfolio/guitarhero.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Jogos</h5>
                              <p>Guitar Hero </p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>



                  </div>
               </div>








               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-07" title="">
                        <img alt="" src="images/portfolio/mecanica.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>Mecânica</h5>
                              <p>Motos</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-08" title="">
                        <img alt="" src="images/portfolio/onepiece.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
                              <h5>One Piece</h5>
                              <p>Animes</p>
                           </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
               </div>

            </div>

         </div>




         <div id="modal-01" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/moto.jpeg" alt="" />

            <div class="description-box">
               <h4>Adrenalina </h4>
               <p>Gosto de pilotar qualquer coisa com um motor, principalmente se for sobre duas rodas.
                  A meta é fazer a rota 66 um dia.
               </p>

            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>
         <div id="modal-02" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/guitar.jpg" alt="" />

            <div class="description-box">
               <h4>Games</h4>
               <p>Com certeza um dos melhores jogos já feitos, te desafio num X1.</p>
               <span class="categories"><i class="fa fa-tag"></i>Guitar Hero 3</span>
            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>

         <div id="modal-03" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/poker2.jpg" alt="" />

            <div class="description-box">
               <h4>Baralho</h4>
               <p>Aprendi a jogar baralho com meu avô quando tinha 6 anos, pode escolher qualquer jogo, eu fecho . </p>
               <span class="categories"><i class="fa fa-tag"></i>Poker, Truco, fodinha, Tranca, Rummikub, Presidente
               </span>
            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>

         <div id="modal-04" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/pc2.jpg" alt="" />

            <div class="description-box">
               <h4>hardware</h4>
               <p>Foi aí que decidi ir para a área de tecnologia, quando montei meu pc gamer e ele não explodiu.</p>
               <span class="categories"><i class="fa fa-tag"></i>T.I</span>
            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>

         <div id="modal-05" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/show2.jpg" alt="" />

            <div class="description-box">
               <h4>Música</h4>
               <p>Já fui em vários show de rock lendários, em respeito a eles não posso ouvir funk.</p>
               <span class="categories"><i class="fa fa-tag"></i>Rock , Rap </span>
            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>

         <div id="modal-06" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/quimica2.jpg" alt="" />

            <div class="description-box">
               <h4>Metalurgia </h4>
               <p>Tenho certo conhecimento prático em química metalúrgica por ter sido meu primeiro trabalho, bons
                  tempos.</p>
               <span class="categories"><i class="fa fa-tag"></i>Quimica, Alumínio</span>
            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>

         <div id="modal-07" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/mecanica2.jpg" alt="" />

            <div class="description-box">
               <h4>Mecânica</h4>
               <p>Quando algo dá problema e ninguém na casa manja, sobra pra mim e nessa aprendi algumas coisa sobre
                  mecânica.</p>
               <span class="categories"><i class="fa fa-tag"></i>Mecânica</span>
            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>

         <div id="modal-08" class="popup-modal mfp-hide">

            <img class="scale-with-grid" src="images/portfolio/modals/onepiece2.jpg" alt="" />

            <div class="description-box">
               <h4>One Piece (+900 eps)</h4>
               <p>Tenho orgulho em dizer que terminei one piece com todos os fillers. Melhor época da minha vida. </p>
               <span class="categories"><i class="fa fa-tag"></i>One piece, Naruto, Fullmetal, Hunter x Hunter </span>
            </div>

            <div class="link-box">

               <a class="popup-modal-dismiss">Fechar</a>
            </div>

         </div>


      </div>

   </section>



   <footer>

      <div class="row">

         <div class="twelve columns">


            <ul class="copyright">
               <li>&copy; Copyright Cássio Kineipe 2020</li>

            </ul>

         </div>


         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home" style="background-color: #6959CD;"><i
                  class="icon-up-open" style="background-color: #6959CD;"></i></a></div>

      </div>


   </footer>



   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
   <script src="88.js"></script>


</body>

</html>
