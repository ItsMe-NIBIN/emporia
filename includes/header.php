<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Emporia</title>
    <link rel="icon" href="assets/images/favicon.ico" sizes="any"><!-- 32×32 -->
    <link rel="manifest" href="assets/images/manifest.webmanifest">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#000">

    <!-- JQUERY --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- LAZY LOAD --->
    <script type="text/javascript"
        src="//cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.min.js">
        </script>
    <script src="//cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js"></script>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    <!-- INCLUDES -->
    <link rel="stylesheet preload" type="text/css" href="assets/css/app.min.css" as="style">

</head>

<body class="<?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'blogDetails' ? 'NOBanner' : '' ?> <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == '404' ? 'NOBanner' : '' ?>">
    <header id="Header">
        <section class="HeaderMenu">
            <div class="container1">
                <div class="FlexRow">
                    <a href="index1.php" class="LogoSec">
                        <img src="assets/images/logo.png" alt="Logo" width="179" height="111" class="lazy"
                            loading="lazy" data-src="assets/images/logo.png">
                    </a>
                    <div class="menuBx">
                        <div class="modal fade" id="HeaderPOP" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog mobile-menu" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="accordion" id="AccordMenu">
                                            <div class="accordion-item">
                                                <div class="accordion-header dropdown hasAccord">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Emporia
                                                        <div class="arrowIcon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="13.838"
                                                                height="7.961" viewBox="0 0 13.838 7.961">
                                                                <g id="next"
                                                                    transform="translate(0.5 7.401) rotate(-90)">
                                                                    <g id="Group_1877" data-name="Group 1877"
                                                                        transform="translate(0 0)">
                                                                        <path id="Path_459" data-name="Path 459"
                                                                            d="M6.755,6.739.845,12.633a.5.5,0,0,1-.7-.7L5.7,6.389.146.846a.5.5,0,0,1,.7-.7l5.91,5.894a.5.5,0,0,1,0,.7Z"
                                                                            fill="#fff" stroke="#fff"
                                                                            stroke-width="1" />
                                                                    </g>
                                                                </g>
                                                            </svg>
                                                        </div>
                                                    </button>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#AccordMenu">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">Who We Are</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">About Us</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">Our Team</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">Policies</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'Services' ? 'active' : '' ?>">
                                                        OS & E
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'PartnerServices' ? 'active' : '' ?>">
                                                        FF & E
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'career' ? 'active' : '' ?>">
                                                        F & B
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Projects
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="audit_Certification.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Products
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Retail
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Sustainability
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Contact
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="MenuIcon">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#HeaderPOP">
                            <svg xmlns="http://www.w3.org/2000/svg" width="62" height="26" viewBox="0 0 62 26">
                                <g id="Group_1785" data-name="Group 1785" transform="translate(-1815 -37)">
                                    <g id="Group_1784" data-name="Group 1784" transform="translate(-4 -66)">
                                        <g id="Rectangle_361" data-name="Rectangle 361" transform="translate(1819 103)"
                                            fill="#fff" stroke="#fff" stroke-width="1">
                                            <rect width="62" height="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="61" height="1" fill="none" />
                                        </g>
                                        <g id="Rectangle_362" data-name="Rectangle 362" transform="translate(1819 115)"
                                            fill="#fff" stroke="#fff" stroke-width="1">
                                            <rect width="62" height="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="61" height="1" fill="none" />
                                        </g>
                                        <g id="Rectangle_363" data-name="Rectangle 363" transform="translate(1819 127)"
                                            fill="#fff" stroke="#fff" stroke-width="1">
                                            <rect width="62" height="2" stroke="none" />
                                            <rect x="0.5" y="0.5" width="61" height="1" fill="none" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </section>

    </header>
    <!-- <div class="fixedRit">
        <ul>
            <li>
                <a class="whatsapp" href="tel:+97124444650">
                    <div class="align">
                        <svg version="1.1" id="Capa_1" viewBox="0 0 513.6 513.6">
                            <path d="M499.7,377L428,305.3c-25.6-25.6-69.1-15.4-79.4,17.9c-7.7,23-33.3,35.8-56.3,30.7c-51.2-12.8-120.3-79.4-133.1-133.1
                                c-7.7-23,7.7-48.6,30.7-56.3c33.3-10.2,43.5-53.8,17.9-79.4l-71.7-71.7C115.7-4.5,84.9-4.5,67,13.4L18.4,62.1
                                c-48.6,51.2,5.1,186.9,125.4,307.2s256,176.6,307.2,125.4l48.6-48.6C517.6,425.6,517.6,394.9,499.7,377z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a class="whatsapp" href="mailto:info@powersprayuae.com" target="_blank">
                    <div class="align">
                        <svg version="1.1" id="Layer_1" viewBox="0 0 512 512">
                            <path d="M10.7,95.2C81,154.7,204.3,259.4,240.5,292c4.9,4.4,10.1,6.6,15.5,6.6c5.4,0,10.6-2.2,15.5-6.6
                                C307.7,259.4,431,154.7,501.3,95.2c4.4-3.7,5-10.2,1.5-14.7C494.6,70,482.4,64,469.3,64H42.7c-13.1,0-25.3,6-33.5,16.4
                                C5.6,85,6.3,91.5,10.7,95.2z"/>
                            <path d="M505.8,127.4c-3.8-1.8-8.2-1.1-11.4,1.5C416.5,195,317.1,279.7,285.8,307.9c-17.6,15.9-41.9,15.9-59.5,0
                                c-33.4-30.1-145-125-208.7-178.9c-3.2-2.7-7.6-3.3-11.4-1.5c-3.8,1.8-6.2,5.5-6.2,9.7v268.2C0,428.9,19.1,448,42.7,448h426.7
                                c23.5,0,42.7-19.1,42.7-42.7V137.1C512,132.9,509.6,129.1,505.8,127.4z"/>
                        </svg>
                    </div>
                </a>
            </li>
            <li>
                <a class="whatsapp" href="https://api.whatsapp.com/send?phone=97124444650" target="_blank">
                    <div class="align">
                        <svg version="1.1" id="Layer_1" viewBox="0 0 318.74 319.09">
                            <path class="st0" d="M0,319.09l22.32-79.28C7.97,215.42,0.41,187.67,0.41,159.17C0.41,71.4,71.81,0,159.58,0
                                s159.17,71.4,159.17,159.17s-71.4,159.17-159.17,159.17c-27.35,0-54.12-7-77.81-20.29L0,319.09z M85.94,269.09l4.87,2.97
                                c20.65,12.61,44.43,19.27,68.76,19.27c72.88,0,132.17-59.29,132.17-132.17S232.45,27,159.58,27S27.41,86.29,27.41,159.17
                                c0,25.39,7.22,50.05,20.87,71.31l3.28,5.11L38.7,281.24L85.94,269.09z"/>
                            <path class="st0" d="M114.86,85.09l-10.33-0.56c-3.24-0.18-6.43,0.91-8.88,3.04c-5.01,4.35-13.01,12.75-15.47,23.71
                                c-3.67,16.33,2,36.33,16.67,56.33c14.67,20,42,52,90.33,65.67c15.58,4.4,27.83,1.43,37.28-4.61c7.49-4.79,12.65-12.48,14.51-21.17
                                l1.65-7.7c0.52-2.45-0.72-4.93-2.99-5.98l-34.9-16.09c-2.27-1.04-4.95-0.38-6.48,1.59l-13.7,17.76c-1.04,1.34-2.81,1.87-4.41,1.31
                                c-9.38-3.3-40.82-16.46-58.07-49.69c-0.75-1.44-0.56-3.19,0.5-4.42l13.1-15.15c1.34-1.55,1.68-3.72,0.87-5.6l-15.05-35.2
                                C118.69,86.45,116.9,85.2,114.86,85.09z"/>
                        </svg>
                    </div>
                </a>
            </li>
        </ul>
    </div> -->
    <div id="viewport">