<?php include "./includes/header.php" ?>

<div id="pageWrapper" class="aboutPage">

    <!-- Inner Banner Section  -->
    <section id="InnerBanner">
        <div class="BannerImg">
            <img src="assets/images/about-banner.jpg" alt="Team Banner" width="1920" height="635" class="lazy"
                loading="lazy" data-src="assets/images/about-banner.jpg">
        </div>
        <div class="bannerCnt">
            <div class="container">
                <div class="bannertitle">ABOUT US</div>
            </div>
        </div>
    </section>
    <!-- Inner Banner Section  -->


    <!-- About Contents Section  -->
    <section id="aboutContentSec">
        <div class="container">
            <div class="MainHead">
                <div class="Head">WHY EMPORIA</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quo modo autem optimum, si bonum praeterea
                    nullum est? Tum ille: Tu autem cum ipse tantum librorum habeas, quos hic tandem requiris? Quo studio
                    Aristophanem putamus aetatem in litteris duxisse? Quod mihi quidem visus est, cum sciret, velle
                    tamen confitentem audire Torquatum.
                </p>
                <p>Qui-vere falsone, quaerere mittimus-dicitur oculis se privasse; Hoc est dicere: Non reprehenderem
                    asotos, si non essent asoti. Atque haec coniunctio confusioque virtutum tamen a philosophis ratione
                    quadam distinguitur. Mihi vero, inquit, placet agi subtilius et, ut ipse dixisti, pressius. Est
                    autem officium, quod ita factum est, ut eius facti probabilis ratio reddi possit.</p>
            </div>
        </div>
    </section>
    <!-- About Contents Section  -->



    <!-- About Section  -->
    <section id="aboutusSec">
        <div class="knowEmporiaSec">
            <div class="custom_container">
                <div class="abtContents">
                    <div class="abtConLft">
                        <img src="assets/images/whySec.jpg" alt="Person" width="960" height="862" class="lazy"
                            loading="lazy" data-src="assets/images/whySec.jpg">
                    </div>
                    <div class="abtConRit">
                        <div class="MainHead">
                            <div class="Head">KNOW EMPORIA</div>
                            <p>Emporia is one of leading companies in the luxury hospitality sector with operations
                                across
                                GCC, Qatar, Maldives & Seychelles. Our esteemed clients range from luxury 5 – star
                                hotels to
                                exotic villa resorts, who</p>
                            <p>The success of the hospitality opened gates to retail distribution and we skilfully have
                                crafted our collection
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Igitur neque stultorum quisquam
                                beatus neque sapientium
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="CEOSec">
            <div class="container">
                <div class="CeoContent">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ceoConLft">
                                <div class="MainHead">
                                    <div class="Head">MESSAGE fROM CEO</div>
                                    <p>“We aim to achieve absolute
                                        customer satisfaction by providing the best quality products and meeting the
                                        everchanging market needs”</p>
                                    <div class="name">NAVIN MOOLCHANDANI</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ceoConRit">
                                <img src="assets/images/person.jpg" alt="Person" width="960" height="862" class="lazy"
                                    loading="lazy" data-src="assets/images/person.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section  -->



    <!-- Global Section  -->
    <section id="globalSec">
        <div class="container">
            <div class="MainHead center">
                <div class="Head">OUR GLOBAL PRESENCE</div>
            </div>
            <div class="countListing">
                <div class="itm">
                    <div class="countBx">
                        <div class="count">15</div>
                        <div class="txt">Years of Experience</div>
                    </div>
                </div>
                <div class="itm">
                    <div class="countBx">
                        <div class="count">128</div>
                        <div class="txt">Hotels</div>
                    </div>
                </div>
                <div class="itm">
                    <div class="countBx">
                        <div class="count">286</div>
                        <div class="txt">Retail</div>
                    </div>
                </div>
                <div class="itm">
                    <div class="countBx">
                        <div class="count">273</div>
                        <div class="txt">Wholesale</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Global Section  -->


    <!-- SCROLL_MAGIC -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js"
        integrity="sha512-8E3KZoPoZCD+1dgfqhPbejQBnQfBXe8FuwL4z/c8sTrgeDMFEnoyTlH3obB4/fV+6Sg0a0XF+L/6xS4Xx1fUEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // Counter 
        $(document).ready(function () {
            var controller = new ScrollMagic.Controller();

            var scene = new ScrollMagic.Scene({
                triggerElement: '#globalSec',
                triggerHook: 0.9
            })
                .setClassToggle('#globalSec', 'isVisible')
                .on("enter", function () {
                    $('#globalSec .countListing .countBx .count').each(function () {
                        $(this).prop('Counter', 0).animate({
                            Counter: $(this).text()
                        }, {
                            duration: 4200,
                            easing: 'swing',
                            step: function (now) {
                                $(this).text(Math.ceil(now));
                                $(this).text(Math.ceil(now).toString().replace(
                                    /(\d)(?=(\d\d\d)+(?!\d))/g, "$1"));
                            }
                        });
                    });
                })
                .reverse(false)
                .addTo(controller);
        });
        // Counter
    </script>


</div>


<?php include "./includes/footer.php" ?>