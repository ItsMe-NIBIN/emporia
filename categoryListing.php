<?php include "./includes/header.php" ?>

<div id="pageWrapper" class="productsPage">

    <!-- Inner Banner Section  -->
    <section id="InnerBanner">
        <div class="BannerImg">
            <img src="assets/images/furniture-banner.jpg" alt="Team Banner" width="1920" height="635" class="lazy"
                loading="lazy" data-src="assets/images/furniture-banner.jpg">
        </div>
        <div class="bannerCnt">
            <div class="container">
                <div class="bannertitle">Outdoor Furniture</div>
            </div>
        </div>
    </section>
    <!-- Inner Banner Section  -->


    <!-- Products Listing Section  -->
    <section id="productsListSec" class="prosecTwo">
        <div class="container">
            <div class="filterListing">
                <div class="txt">Filter By</div>
                <select class="form-select select" data-select2-id="select2-Color" aria-label="Default select example"
                    id="select2Color">
                    <option selected disabled="disabled">Packages</option>
                    <option value="1">Guest Room</option>
                    <option value="2">Public Area/Lobbies</option>
                    <option value="3">Corridors</option>
                    <option value="3">Restaurant/Cafe Furniture</option>
                    <option value="3">Outdoor Beach/Pool Furniture</option>
                    <option value="3">Soft Furnishings</option>
                    <option value="3">Work Space (Office Furniture)</option>
                    <option value="3">Casual Work Space Furniture</option>
                    <option value="3">Private Work Space</option>
                    <option value="3">Pantry Furniture & Electronics</option>
                </select>
            </div>
            <div class="productsListing">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#enquireModal"
                            class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro21.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro21.jpg">
                            </div>
                            <div class="Title">Wrought Iron Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro22.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro22.jpg">
                            </div>
                            <div class="Title">Aluminum Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro23.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro23.jpg">
                            </div>
                            <div class="Title">Polymer and
                                Plastic Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro24.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro24.jpg">
                            </div>
                            <div class="Title">Real Wood Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro25.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro25.jpg">
                            </div>
                            <div class="Title">Wicker Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro26.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro26.jpg">
                            </div>
                            <div class="Title">Cedar Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro27.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro27.jpg">
                            </div>
                            <div class="Title">Wrought Iron Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro28.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro28.jpg">
                            </div>
                            <div class="Title">Patio Furniture</div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="javascript:void(0);" class="productBox" data-aos="fade-up">
                            <div class="imgBx">
                                <img src="assets/images/pro29.jpg" alt="products" width="583" height="512" class="lazy"
                                    loading="lazy" data-src="assets/images/pro29.jpg">
                            </div>
                            <div class="Title">Wrought Iron Furniture</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Listing Section  -->



    <!-- SELECT2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


    <script>
        $(function () {
            $('.selectpicker').selectpicker();
        });

        $(".select").select2({
            minimumResultsForSearch: Infinity,
            theme: "bootstrap-5",
            containerCssClass: "select2--small",
            selectionCssClass: "select2--small",
            dropdownCssClass: "select2--small",
        });
    </script>


    <div class="modal fade enquirePopup" id="enquireModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btnClose" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title">Enquire Now</div>
                    <form action="javascript:void(0);">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                    <div class="help-block">Invalid input</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="sendBtn hoveranim" type="button"><span>SEND MESSAGE</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>


<?php include "./includes/footer.php" ?>