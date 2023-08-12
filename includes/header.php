<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <title>Emporia</title>
    <link rel="icon" href="assets/images/favicon.ico" sizes="any"><!-- 32×32 -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml"><!-- 192×192 -->
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png"><!-- 180×180 -->
    <link rel="manifest" href="assets/images/manifest.webmanifest">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#8C7BFF">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

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

<body>
    <header id="Header">
        <section class="HeaderMenu">
            <div class="container">
                <div class="FlexRow">
                    <a href="index.php" class="LogoSec">
                        <img src="assets/images/logo.png" alt="Logo" width="179" height="111" class="lazy" loading="lazy" data-src="assets/images/logo.png">
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
                                                    <a href="about.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'about' ? 'active' : '' ?>">
                                                        Be A Business Owner
                                                    </a>
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 492.004 492.004">
                                                            <path
                                                                d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12
                                                                c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028
                                                                c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265
                                                                c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#AccordMenu">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            <li>
                                                                <a href="javascript:void(0);">Private Limited Co</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">LLP</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">Sole Proprietorship</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">OPC</a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0);">Partnership</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'Services' ? 'active' : '' ?>">
                                                        Registrations
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'PartnerServices' ? 'active' : '' ?>">
                                                        Returns
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'career' ? 'active' : '' ?>">
                                                        Other Compliances
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Loans
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="audit_Certification.php"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Audits
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Professional Certifications
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <div class="accordion-header">
                                                    <a href="javascript:void(0);"
                                                        class="accordion-button <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'KnowGermany' ? 'active' : '' ?>">
                                                        Trade Mark
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
                            <span></span>
                            <span></span>
                            <span></span>
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