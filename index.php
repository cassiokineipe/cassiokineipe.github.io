<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="./css/efeito.scss" rel="stylesheet">
    <link rel="shortcut icon" href="./img/image2.png">

    <title>Metais Capixaba</title>

    <style>
        html {
            scroll-behavior: smooth;
        }


        .fixedbox {

            box-sizing: border-box;
            display: block;
            font-size: 4em;
            padding: 1em;
            width: 6em;
            height: 3em;


            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
        }

        .content {



            text-align: center;

            background-repeat: no-repeat;


            background-image: url("./img/image2.png");
            max-width: 308px;
            margin: auto;

            background-repeat: no-repeat;

            mix-blend-mode: normal;
        }

        section {

            background-repeat: no-repeat;
            background-size: cover;


            height: 100vh;
            padding: 1em;
        }

        .wrapper {

            top: 0;
            right: 0;
            bottom: 0;
            left: 0;


        }

        .one {
            background-image: url("./img/20210112_1058245.jpg");



        }

        .two {
            background-image: linear-gradient(to top, #000000, #434343);


        }

        .three {
            background-image: linear-gradient(to right, #33ccff, #003399);
        }

        .blast {
            background-image: linear-gradient(to right, #33ccff, #003399);


        }

        .four {
            background-image: linear-gradient(to right, #33ccff, #003399);
            height: 480vh;

        }

        .five {
            background-image: linear-gradient(to right, #33ccff, #003399);
            height: 150vh;
        }

        .sex {
            background-image: linear-gradient(to right, #33ccff, #003399);
            height: 150vh;
        }
        .seven {
            background-image: linear-gradient(to right, #33ccff, #003399);
            height: 100vh;
        }
        .eight {
            background-image: linear-gradient(to right, #33ccff, #003399);
            height: 130vh;
        }


        .last {
            background-image: linear-gradient(to right, #33ccff, #003399);
            height: 100vh;


        }

        .header-overlay {
            position: absolute;
            top: 10;
            left: 0;
            width: 100%;
            height: 100%;


            opacity: 1;
        }



        .header-overlayx {




            top: 0;
            left: 5;

            width: 100%;
            height: 100%;

            opacity: -400;
        }




        html,
        body {
            font-family: 'Raleway', sans-serif;

            font-size: 18px;
            background: #222;
            color: #fff
        }



        .float {
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 20px;
            right: 30px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 3px #999;
            z-index: 100;
        }

        .my-float {
            margin-top: 16px;
        }


        .bounce {
            animation-name: bounce-animation;
            animation-duration: 2s;
        }

        .hoverable {

            backface-visibility: hidden;

            position: relative;
            box-shadow: 0 0 1px rgba(0, 0, 0, 0);

            transition-duration: .3s;
            transition-property: transform;
        }

        .hoverable:before {

            position: absolute;
            pointer-events: none;

            z-index: -1;
            content: '';
            top: 100%;
            left: 5%;
            height: 10px;
            width: 90%;
            opacity: 0;
            background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
            background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%);
            /* W3C */
            transition-duration: 0.3s;
            transition-property: transform, opacity;
        }

        .hoverable:hover,
        .hoverable:active,
        .hoverable:focus {
            transform: translateY(-5px);
        }

        .hoverable:hover:before,
        .hoverable:active:before,
        .hoverable:focus:before {
            opacity: 1;
            transform: translateY(-5px);
        }



        body {
            margin: 0;
            padding: 0;
            font-size: 16px;
            line-height: 1.5;
            text-rendering: optimizeLegibility;
            font-variant-ligatures: none;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
            background-color: #fafafa;
        }

        body::before,
        body::after {
            content: "";
            display: table;
            clear: both;
        }

        body * {
            box-sizing: inherit;
        }

        p,
        h1 {
            margin: 0;
            padding: 0;
        }

        body,
        .text-light-black {
            color: rgba(0, 0, 0, 0.6);
        }

        .text-black {
            color: rgba(0, 0, 0, 0.9);
        }

        .text-muted {
            color: rgba(0, 0, 0, 0.3);
        }



        .text-uppercase {
            text-transform: uppercase;
        }

        .ff-serif {
            font-family: 'Lora', serif;
        }

        .font-weight-normal {
            font-weight: normal;
        }

        .font-weight-medium {
            font-weight: 500;
        }

        .lts-1px {
            letter-spacing: 1px;
        }

        .lts-2px {
            letter-spacing: 2px;
        }


        .w-full {
            width: 70%;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }

        .d-block {
            display: block;
        }

        .d-inline-block {
            display: inline-block;
        }

        .p-relative {
            position: relative;
        }

        .p-absolute {
            position: absolute
        }



        .bg-white {
            background-color: #fff;
        }






        .small {
            font-size: 0.75rem;
        }

        .card-heading {
            font-size: 1.25rem;
        }

        .styled-link {
            text-decoration: none;
            outline: none;
            color: #2196fe;
            transition: all 0.25s ease-in;
        }

        .styled-link:hover,
        .styled-link:focus,
        .styled-link:active {
            color: #536dfe;
        }

        .shadow-1 {
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.15);
        }

        .blue-hover {
            transition: all 0.25s ease-in;
            border-bottom: 2px solid transparent;
        }

        .blue-hover:hover {
            transform: translateY(-5px);

            border: none;
            border-bottom: 5px solid #2196fe;
        }




        .clearfix::before,
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
        }






        /**Margin and padding utilities*/
        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .ml-auto {
            margin-left: auto;
        }

        .mr-auto {
            margin-right: auto;
        }

        .mx-0 {
            margin-left: 0;
            margin-right: 0;
        }

        .mx-1 {
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .mx-2 {
            margin-left: 2rem;
            margin-right: 2rem;
        }

        .mx-3 {
            margin-left: 3rem;
            margin-right: 3rem;
        }


        .my-0 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .my-1 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .my-2 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .my-3 {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }

        .mt-0 {
            margin-top: 0;
        }

        .mt-1 {
            margin-top: 1rem;
        }

        .mt-2 {
            margin-top: 2rem;
        }

        .mt-3 {
            margin-top: 3rem;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .mb-1 {
            margin-bottom: 1rem;
        }

        .mb-2 {
            margin-bottom: 2rem;
        }

        .mb-3 {
            margin-bottom: 3rem;
        }

        .ml-0 {
            margin-left: 0;
        }

        .ml-1 {
            margin-left: 1rem;
        }

        .ml-2 {
            margin-left: 2rem;
        }

        .ml-3 {
            margin-left: 3rem;
        }




        .px-0 {
            padding-left: 0;
            padding-right: 0;
        }

        .px-1 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .px-2 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .px-3 {
            padding-left: 3rem;
            padding-right: 3rem;
        }


        .py-0 {
            padding-top: 0;
            padding-bottom: 0;
        }

        .py-1 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .py-2 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .py-3 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .pt-0 {
            padding-top: 0;
        }

        .pt-1 {
            padding-top: 1rem;
        }

        .pt-2 {
            padding-top: 2rem;
        }

        .pt-3 {
            padding-top: 3rem;
        }

        .pb-0 {
            padding-bottom: 0;
        }

        .pb-1 {
            padding-bottom: 1rem;
        }

        .pb-2 {
            padding-bottom: 2rem;
        }

        .pb-3 {
            padding-bottom: 3rem;
        }

        /*
!!!!
This pen is being refactored
!!!!
*/

        /*
=====
DEPENDENCES
=====
*/

        .r-title {
            margin-top: var(--rTitleMarginTop, 0) !important;
            margin-bottom: var(--rTitleMarginBottom, 0) !important;
        }


        p:not([class]) {
            line-height: var(--cssTypographyLineHeight, 1.78);
            margin-top: var(--cssTypographyBasicMargin, 1em);
            margin-bottom: 0;
        }

        p:not([class]):first-child {
            margin-top: 0;
        }

        /*
text component
*/

        .text {
            display: var(--textDisplay, inline-flex);
            font-size: var(--textFontSize, 1rem);
        }

        /*
time component
*/

        /*
core styles
*/

        .time {
            display: var(--timeDisplay, inline-flex);
        }

        /*
extensions
*/

        .time__month {
            margin-left: var(--timelineMounthMarginLeft, .25em);
        }

        /*
skin
*/

        .time {
            padding: var(--timePadding, .25rem 1.25rem .25rem);
            background-color: var(--timeBackgroundColor, #f0f0f0);

            font-size: var(--timeFontSize, .75rem);
            font-weight: var(--timeFontWeight, 700);
            text-transform: var(--timeTextTransform, uppercase);
            color: var(--timeColor, currentColor);
        }

        /*
card component
*/

        /*
core styles
*/

        .card {
            padding: var(--timelineCardPadding, 1.5rem 1.5rem 1.25rem);
        }

        .card__content {
            margin-top: var(--cardContentMarginTop, .5rem);
        }

        /*
skin
*/

        .card {
            border-radius: var(--timelineCardBorderRadius, 2px);
            border-left: var(--timelineCardBorderLeftWidth, 3px) solid var(--timelineCardBorderLeftColor, var(--uiTimelineMainColor));
            box-shadow: var(--timelineCardBoxShadow, 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24));
            background-color: var(--timelineCardBackgroundColor, #fff);
        }

        /*
extensions
*/

        .card__title {
            --rTitleMarginTop: var(--cardTitleMarginTop, 1rem);
            font-size: var(--cardTitleFontSize, 1.25rem);
        }

        /*
=====
CORE STYLES
=====
*/

        .timeline {
            display: var(--timelineDisplay, grid);
            grid-row-gap: var(--timelineGroupsGap, 2rem);
        }

        /*
1. If timeline__year isn't displaed the gap between it and timeline__cards isn't displayed too
*/

        .timeline__year {
            margin-bottom: 1.25rem;
            /* 1 */
        }

        .timeline__cards {
            display: var(--timeloneCardsDisplay, grid);
            grid-row-gap: var(--timeloneCardsGap, 1.5rem);
        }


        /*
=====
SKIN
=====
*/

        .timeline {
            --uiTimelineMainColor: var(--timelineMainColor, #222);
            --uiTimelineSecondaryColor: var(--timelineSecondaryColor, #fff);

            border-left: var(--timelineLineWidth, 3px) solid var(--timelineLineBackgroundColor, var(--uiTimelineMainColor));
            padding-top: 1rem;
            padding-bottom: 1.5rem;
        }

        .timeline__year {
            --timePadding: var(--timelineYearPadding, .5rem 1.5rem);
            --timeColor: var(--uiTimelineSecondaryColor);
            --timeBackgroundColor: var(--uiTimelineMainColor);
            --timeFontWeight: var(--timelineYearFontWeight, 400);
        }

        .timeline__card {
            position: relative;
            margin-left: var(--timelineCardLineGap, 1rem);
        }

        /*
1. Stoping cut box shadow
*/

        .timeline__cards {
            overflow: hidden;
            padding-top: .25rem;
            /* 1 */
            padding-bottom: .25rem;
            /* 1 */
        }

        .timeline__card::before {
            content: "";
            width: 100%;
            height: var(--timelineCardLineWidth, 2px);
            background-color: var(--timelineCardLineBackgroundColor, var(--uiTimelineMainColor));

            position: absolute;
            top: var(--timelineCardLineTop, 1rem);
            left: -50%;
            z-index: -1;
        }

        /*
=====
SETTINGS
=====
*/
        /**/
        .timeline {
            --timelineMainColor: #4557bb;
        }

        /*
=====
DEMO
=====
*/



        p {
            margin-top: 0;
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        p:last-child {
            margin-bottom: 0;
        }

        .page {
            max-width: 47rem;
            padding: 5rem 2rem 3rem;
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <script language="JavaScript">
        function protegercodigo() {
            if (event.button == 2 || event.button == 3) {
                alert('HA, Boa sorte!');
            }
        }
        document.onmousedown = protegercodigo
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
                (code == 83 || code == 85 || code == 67) //83 = S, 85 = U
            ) {
                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                return false;
            }
            if (
                e.ctrlKey && e.shiftKey &&
                (code == 67) //83 = c
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

        $(window).scroll(function() {
            var scrollTop = $(this).scrollTop();

            $('.header-overlayx').css({
                opacity: function() {
                    var elementHeight = $(this).height(),
                        opacity = ((scrollTop - 100) / 650);
                    if (opacity > 0.8) {
                        opacity = 0.8;
                    }
                    return opacity;
                }
            });
        });





        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 300 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
            document.body.appendChild(css);
        };
        $(function() {
            var str = '#len'; //increment by 1 up to 1-nelemnts
            $(document).ready(function() {
                var i, stop;
                i = 1;
                stop = 4; //num elements
                setInterval(function() {
                    if (i > stop) {
                        return;
                    }
                    $('#len' + (i++)).toggleClass('bounce');
                }, 700)
            });
        });
    </script>




</head>

<body>









    <nav class="navbar sticky-top nav navbar-expand-md bg-dark navbar-dark ">
        <img src="./img/image2.png" width="60" height="40">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
            <center>
                <li class="nav-item">
                    <a class="nav-link hoverable active" aria-current="page" style="color:white;" href="#Inicio">Início</a>
                </li>
            </center>
            <center>
                <li class="nav-item">
                    <a class="nav-link hoverable active" aria-current="page" style="color:white;" href="#Principal">Principal</a>
                </li>
            </center>
            <center>
                <li class="nav-item">
                    <a class="nav-link hoverable" style="color:white;" href="#Empresa">Empresa</a>
                </li>
            </center>
            <center>
                <li class="nav-item">
                    <a class="nav-link hoverable" style="color:white;" href="#Produtos">Produtos</a>
                </li>
            </center>
            <center>
                <li class="nav-item">
                    <a class="nav-link  hoverable" style="color:white;" href="#Qualidade">Qualidade</a>
                </li>
            </center>
            <center>
                <li class="nav-item">
                    <a class="nav-link hoverable" style="color:white;" href="#Sustentabilidade">Sustentabilidade</a>
                </li>
            </center>
            <center>

                <li class="nav-item">
                    <a class="nav-link hoverable" style="color:white;" href="#Certificacao">Certificação</a>

                </li>
            </center>
            <center>
                <li class="nav-item">
                    <a class="nav-link hoverable" style="color:white;" href="#Contato">Contato</a>
                </li>
            </center>
       



            </ul>
        </div>
    </nav>


    <div class='header-overlay'>
        <div class="content fixedbox">
        </div>

    </div>

    </div>
    </nav>




    <section class="one" id="Inicio">
        <div class="wrapper"></div>
    </section>

    <div class='header-overlayx'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://wa.me/message/ND54P6UJKN4UK1" class="float" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>


    </div>



    <section class="two" id="Principal">
        <div class="wrapper">
            <br> <br> <br>


        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img style="max-width:900px;margin:auto;" src="./img/slide2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item  ">
                    <img style="max-width:900px;margin:auto;" src="./img/slide1.png" class="d-block w-100" alt="...">



                </div>
            </div>
        </div>

        <br>


        <center>

            <hr style="color: white;">
            <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
            <h6 style="color: white;">A Capixaba é fabricante de lingotes de alumínio, no mercado desde 1991. Fornece para empresas de ponta em diversos seguimentos,
                <span class="txt-rotate" data-period="2000" data-rotate='[ "Automotivo.", "Eletrodomésticos.", "Lingotes", "Produto34", "Produto5" ]'></span>
            </h6><br>
            <h7 style="color: white;" class="fw-bold">Certificado ISO9001:2008.</h7>
            <hr style="color: white;">





    </section>

    <section class="three">
        <div class="wrapper"></div>
        </center>

        <center>
            <div class="form-row">

            <div class="form-group col-md-4">

<div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
    <br>
    <img src="./img/img-bndes.png" alt="Man with backpack" class="d-block w-full">

    <div class="px-2 py-2">
    
    <BR>
        <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
        VENDA PELO BNDES
        </h1>

        <BR> <BR> <BR> <BR> <BR>

    </div>





</div>
</div>

                <div class="form-group col-md-4">
                    <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                        <br><br> <br>
                        <img src="./img/image1.png" alt="Man with backpack" class="d-block w-full">
                        <br>
                        <div class="px-2 py-2">
                            <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                                Lingotes
                            </p>

                            <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                                NOSSOS PRODUTOS
                            </h1>

                            <p class="mb-1">
                                A Metais Capixaba é fabricante de ligas de alumínio, no mercado desde 1991. Fornece para empresas de ponta em diversos seguimentos.

                            </p>

                        </div>

                        <a href="#0" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                            Ver Mais
                        </a>



                    </div>
                </div>
             

                <div class="form-group col-md-4">
                    <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                        <br>
                        <img src="./img/img-sustentavel.png" alt="Man with backpack" class="d-block w-full">

                        <div class="px-2 py-2">
                         <BR>

                            <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                            SER SUSTENTÁVEL
                            </h1>
                            <BR> <BR> <BR> <BR> <BR>

                        </div>


                    </div>
                </div>
            </div>
        </center>
    </section>



    <section class="four" id="Empresa" style="position:relative">
        <div class="wrapper"></div>
        <center>

            <div id="Empresa" class="my-2 mx-auto  p-relative bg-white shadow-1 blue-hover" style="width: 90%; overflow: hidden; border-radius: 1px;">
                <div id="carouselExampleCaptions" class="carousel slide  " data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"></li>
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center>
                                <img src="./img/img1.png" class="d-block" width="60%" height="40%" alt="...">
                            </center>
                            <div class="carousel-caption d-none d-md-block">
                                <h5>1991</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img2.png" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>1991</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img3.png" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>1993</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/14.jpg" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2001</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img5.png" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2006</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img10.png" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2007</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img7.jpg" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2009</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img8.jpg" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2015</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img11.png" class="d-block" alt="..." width="60%" height="40%">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>2016</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                        <span style="background-color: #034f84;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                        <span style="background-color: #034f84;" class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="px-2 py-2">

                    <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                        TIMELINE
                    </h1>

                </div>
            </div>
        </center>




        <div class="page">
            <div class="timeline">
                <div class="timeline__group">
                    <span class="timeline__year time" aria-hidden="true">1991</span>
                    <div class="timeline__cards">
                        <div class="timeline__card card">
                            <header class="card__header">


                                <h3 class="card__title r-title">Nossa Historia</h3>
                                </time>
                            </header>
                            <div class="card__content">
                                <p>A Metais Capixaba foi fundada em 1991, com a missão de produzir lingotes de alumínio para pequenas empresas fabricantes de peças.</p>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">1993</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">


                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Em 1993, almejando crescimento e alcançar novos clientes, adquiriu o primeiro espectrômetro para análise da composição química do alumínio, nasce então a METAIS CAPIXABA fabricante de ligas de alumínio.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">2001</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">


                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Em 2001, com o crescimento da empresa no mercado, adquiriu seu segundo galpão, que foi incorporado à primeira planta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">2006</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">

                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Em 2006, com árduo trabalho, conquistou a primeira certificação ISO9001:2000, iniciando assim a melhoria do sistema de qualidade.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">2009</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">

                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>
                                            Em 2009, com o aumento da demanda e necessidade de espaço, incorporou o terceiro galpão, triplicando a área construída.
                                            Neste mesmo ano, conquistou a certificação ISO9001:2008.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">2010</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">

                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Em 2010, com grandes melhorias e modernização do processo produtivo, somado a um trabalho de qualidade, dobrou a capacidade produtiva. Houve assim, a inclusão de clientes de sucesso e o ingresso em novos seguimentos.
                                            Almejando mais clientes e atendendo aos requisitos da indústria de auto-peças, a METAIS CAPIXABA vem implantando, desde 2015, novas ferramentas e procedimentos de qualidade, tais como:

                                            - Controle de radioproteção em toda extensão de recebimento, produção e expedição;
                                            - Análise Metalográfica;
                                            - Medição de IACS - condutividade elétrica;
                                            - CEP;
                                            - PPAP;
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">2016</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">

                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Em 2016 a METAIS CAPIXABA comemorou seu aniversário de 25 Anos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">2018</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">

                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>
                                            Para 2018, já está sendo implantada a versão ISO9001:2015, tendo como foco o planejamento estratégico.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline__group">
                            <span class="timeline__year time" aria-hidden="true">2021</span>
                            <div class="timeline__cards">
                                <div class="timeline__card card">
                                    <header class="card__header">

                                        </time>
                                    </header>
                                    <div class="card__content">
                                        <p>Para o futuro, a METAIS CAPIXABA pretende se perpetuar no mercado, sempre mantendo a mesma seriedade, compromisso com o cliente e melhoria contínua.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


    </section>



    <section class="five">
        <div id="Produtos"></div>
        <div class="wrapper"></div>

        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 90%; overflow: hidden; border-radius: 1px;">
            <br>

          
                <div class="px-2 py-2">


                    <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                        O QUE NÓS OFERECEMOS
                    </h1><hr>
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        Matéria Prima
                    </p>

                    <p class="mb-1">
                        A Metais Capixaba produz ligas de alumínio de acordo com normas internacionais, tais como: SAE, DIN e também de acordo a especificação do cliente. Nosso alumínio é filtrado e desgaseificado, garantindo o mínimo de gases e inclusões.
                        <br>
                        Todos os fardos são embalados com filme plástico, impedindo a oxidação e exposição à poeira e à umidade. Nossa ligas são aplicadas em diversos seguimentos, tais como:
                    </p>

                </div>
                <center>
                <a href="#fotos_produtos" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                    Ver Fotos
                </a>
            </center>


        </div>

        <br>

        <center>

            <div id="fotos_produtos" class="my-2 mx-auto  p-relative bg-white shadow-1 blue-hover" style="width: 70%; overflow: hidden; border-radius: 1px;">
                <div id="carouselExampleCaptions2" class="carousel slide  " data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="2"></li>
                        <li data-bs-target="#carouselExampleCaptions2" data-bs-slide-to="3"></li>



                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center>
                                <img src="./img/20170727_092624.jpg" class="d-block" width="60%" height="430px" alt="...">
                            </center>
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="./img/20171011_151058.jpg" class="d-block" alt="..." width="60%" height="430px">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img-produtos3.png" class="d-block" alt="..." width="60%" height="420px">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./img/img-produtos4.jpg" class="d-block" alt="..." width="60%" height="430px">
                            <div class="carousel-caption d-none d-md-block">

                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions2" role="button" data-bs-slide="prev">
                        <span style="background-color: #034f84;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions2" role="button" data-bs-slide="next">
                        <span style="background-color: #034f84;" class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
                <div class="px-2 py-2">

                    <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                        PRODUTOS
                    </h1>

                </div>
            </div>
        </center>


    </section>



    <section class="sex">
        <div id="Certificacao"></div>
        <div class="wrapper"></div>

        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 90%; overflow: hidden; border-radius: 1px;">
            <br>

           
                <div class="px-2 py-2">


                    <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                        NOSSA CERTIFICAÇÃO
                    </h1><hr>
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        Qualidade
                    </p>

                    <p class="mb-1">
                        A Metais Capixaba possui a certificação ISO9001:2008 internacional, acreditada pela DNV-GL e RVA. Conquistamos a primeira certificação ISO9001 em 2006. Para 2018, já está sendo implantada a versão ISO9001:2015.
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        POLÍTICA DA QUALIDADE
                    </p>

                    A Metais Capixaba atua na fabricação de ligas de alumínio, buscando permanentemente a melhoria contínua dos seus processos, através do atendimento aos requisitos previstos em seu Sistema de Gestão da Qualidade. Para isso, tem como princípios:
                    </p>
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        SATISFAÇÃO DO CLIENTE
                    </p>

                    Fornecer Ligas de Alumínio que atendam as expectativas e as necessidades de seus clientes.
                    </p>
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        TREINAMENTO E CONSCIENTIZAÇÃO
                    </p>

                    Investir na conscientização e treinamento de seus funcionários em busca da melhoria contínua.
                    </p>

                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        REMUNERAR O CAPITAL INVESTIDO
                    </p>

                    Buscar e manter posição financeira confortável para poder cumprir sua Política da Qualidade e remunerar o capital investido.
                    </p>
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        MISSÃO
                    </p>

                    Atuar na fabricação de ligas de alumínio reciclado, buscando atender às necessidades de nossos clientes.
                    </p>
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        VISÃO
                    </p>

                    Ser referência em qualidade e ter crescimento sustentável se perpetuando no mercado nacional.
                    </p>
                    <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        VALORES
                    </p>


                    Foco no Cliente;
                    Melhoria Contínua;
                    Responsabilidade Ambiental;
                    Sustentabilidade;
                    Ética;
                    Profissionalismo.
                    </p>


                </div>
                <center>
                <a href="./certificado.pdf" class="text-uppercase d-inline-block font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                Download do Certificado
                </a>
            </center>


        </div>


        
    </section>













    
    <section class="eight">
        <div id="Qualidade"></div>
        <div class="wrapper"></div>
        
        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 90%; overflow: hidden; border-radius: 1px;">
                       
        <center>

<div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./img/img8.jpg"style="width: 500px;" >
    </div>
    <div class="carousel-item">
      <img src="./img/img9.jpg"style="width: 500px;"  >
    </div>
    <div class="carousel-item">
      <img src="./img/img14.jpg"style="width: 500px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-bs-slide="prev">
    <span style="background-color:black"class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-bs-slide="next">
    <span style="background-color:black"class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>            
                        <div class="px-2 py-2">
                            <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                             TECNOLOGIA
                            </p>

                            <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                            NOSSA QUALIDADE
                            </h1>
                            
                            <p class="mb-1">
                            Contamos com um moderno laboratório equipado com dois espectrômetros de emissão óptica, sendo um Spectro e um Thermo-ARL. Essa versatilidade nos permite fazer todas as análises de composição química com precisão, durante todo o processo de fusão e solidificação.
<BR>
Além de garantir a composição de nossas ligas com alto grau de confiabilidade. Nosso laboratório também está equipado com um microscópio óptico para análises metalográficas, visando garantir a qualidade das propriedades físicas de nossas ligas.
<BR>
Todo nosso processo produtivo possui controle de radioproteção, garantindo que nosso produto está totalmente isento de materiais radioativos, atendendo assim às exigências dos setores de auto-peças e montadoras.
<BR>
Efetuamos a medição de condutividade elétrica, IACS, para as empresas do setor elétrico. Aplicamos as ferramentas CEP, PPAP, quando solicitadas pelo cliente.          </p>

                        </div>

                    
                        </center>
                       

                    </div>
    </section>












    <section class="seven">
        <div id="Sustentabilidade"></div>
        <div class="wrapper"></div>
        <center>
        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 90%; overflow: hidden; border-radius: 1px;">
                       
                        <img src="./img/14.jpg"style="width: 500px; alt="Man with backpack" class="d-block w-full">
                     
                        <div class="px-2 py-2">
                            <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                             ECOLOGIA
                            </p>

                            <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                            PREZANDO PELA SUSTENTABILIDADE
                            </h1>

                            <p class="mb-1">
                            A sustentabilidade faz parte da nossa missão. Produzimos nossa ligas de alumínio através da reciclagem dos desperdícios de alumínio.
<BR>
Nosso processo conta com equipamentos antipoluentes de ponta, que nos permite trabalhar sem agredir o meio ambiente e garantir a saúde o nosso planeta.
                            </p>

                        </div>

                    

                        </center>

                    </div>
    </section>



















    <section class="blast">
        <div class="wrapper"></div>


        <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 80%; overflow: hidden; border-radius: 1px;">

            <div id="transcroller-body" class="aos-all">
                <div class="aos-item" data-aos="fade-left" style="height:70%;">
                    <div class="aos-item__inner">

                        <div class="content-contato-dentro-dir">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6156.244959427137!2d-46.340350683253035!3d-23.441514385039245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7d1c3d408cdf%3A0x60712316a6b780d!2sR.+Bronze%2C+155+-+Parque+Sao+Pedro%2C+Itaquaquecetuba+-+SP%2C+08586-180!5e0!3m2!1spt-BR!2sbr!4v1507136265195" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

                        </div>
                        <!--content-contato-dentro-dir!-->

                    </div>
                </div>
            </div>

            <center>
                <div class="px-2 py-2">

                    <h1 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1.25;">
                        ONDE ESTAMOS
                    </h1>


                </div>





        </div>
        </center>
    </section>



    <section class="last" id="Contato">
        <div class="wrapper"></div>

        <center>
            <div class="form-row">


                <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                    <br>
                    <img src="./img/img-central-home.png" alt="Man with backpack" class="d-block w-full">

                    <div class="px-2 py-2">
                        <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                            Telefones
                        </p>

                        <h2 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1;">
                            CENTRAL DE ATENDIMENTO
                        </h2>

                        <p class="mb-1">
                            (11) 4648-6514<BR>
                            (11) 4646-2410<BR><BR>
                            

                        </p>

                    </div>

                   



                </div>



                <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                    <br>
                    <img src="./img/WhatsApp.jpeg" alt="Man with backpack" class="d-block w-full">

                    <div class="px-2 py-2">
                        <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                        MENSSAGENS 
                        </p>

                        <h2 class="ff-serif text-success font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1;">
                        WHATSAPP 
                        </h2>

                        <p class="mb-1">
                           <BR> (11) 94702-5863
                            <BR>
                           <BR>

                        </p>

                    </div>

                    <a href="https://wa.me/message/ND54P6UJKN4UK1" class="text-uppercase d-inline-block  font-weight-medium lts-2px ml-2 mb-2 text-center styled-link">
                        whatsapp
                    </a>



                </div>



                <div class="my-2 mx-auto p-relative bg-white shadow-1 blue-hover" style="width: 360px; overflow: hidden; border-radius: 1px;">
                    <br>
                    <img src="./img/img-parceiros-home.png" alt="Man with backpack" class="d-block w-full">

                    <div class="px-2 py-2">
                        <p class="mb-0 small font-weight-medium text-uppercase mb-1 text-muted lts-2px">
                            FORNECEDORES
                        </p>

                        <h2 class="ff-serif font-weight-normal text-black card-heading mt-0 mb-1" style="line-height: 1;">
                        SEJA NOSSO PARCEIRO
                        </h2>

                        <p class="mb-1">
                        Compramos a sua sucata ou
resíduos de alumínio. Ligue
para o nosso departamento de
compras e bons negócios.
                        </p>

                    </div>



                </div>



            </div>
        </center>


    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>


<footer>
    <center>
        © Copyright Metais Capixaba 2020 <article>
    </center>
</footer>


</html>