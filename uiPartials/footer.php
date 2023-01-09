<footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="aboutfooter wigdet_1">
                        <h4 class="titleFooter">About</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore.
                        </p>
                        <div class="social">
                            <a href="javascript:void(0);"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-google-plus-g"></i></a>
                            <a href="javascript:void(0);"><i class="fa-brands fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class=" wigdet_2  menu_3 menu">
                        <h4 class="titleFooter">Contact Info</h4>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="footer_content">
                                <h4>ADDRESS</h4>
                                <p>1853 Pearland Parkway, Suite 123 -300, Pearland, Texas 77581</p>
                            </div>
                        </div>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="footer_content">
                                <h4 class="">CALL US 24/7</h4>
                                <p>(281) 286-1861</p>
                            </div>
                        </div>
                        <div class="footer_detail">
                            <div class="footer_icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="footer_content">
                                <h4>EMAIL</h4>
                                <p>info@cs2inc.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class=" wigdet_3 menu_3 menu">
                        <h4 class="titleFooter">Quick Links</h4>
                        <ul>
                            <li><a href="javascript:void(0);">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="javascript:void(0);">Product</a></li>
                            <li><a href="javascript:void(0);">Reviews</a></li>
                            <li><a href="javascript:void(0);">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3  col-sm-6 col-xs-12">
                    <div class="wigdet_4 ">
                        <h4 class="titleFooter">Newsletters</h4>
                        <h5>Subscribe For Newsletters</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                        <div class="form-new">
                            <input type="text" placeholder="Email Address">
                            <button><i class="fa-solid fa-arrow-right-long"></i></button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <ul class="subFooter-menu">
                            <li><a href="javascript:void(0);">Privacy Policy </a></li>
                            <li><a href="javascript:void(0);">Cookies acceptance/policy </a></li>
                            <li><a href="javascript:void(0);">Spam Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <p class="copy-right">© 2021 , All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="videoPlayer">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body">
                    <video src="https://vimeo.com/51589652" width="100%" height="100%" controls></video>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> 
    <script>
        $(document).ready(function () {
            jQuery('.topSlide').slick({
                dots: false,
                infinite: true,
                arrows: true,
                prevArrow: "<i class='fa-solid fa-arrow-right'></i>",
                nextArrow: "<i class='fa-solid fa-arrow-left'></i>",
                centerMode: false,
                autoplay: false,
                speed: 300,
                loop: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
            jQuery('.sliderMain').slick({
                dots: false,
                infinite: true,
                arrows: true,
                prevArrow: "<i class='fa-solid fa-arrow-right'></i>",
                nextArrow: "<i class='fa-solid fa-arrow-left'></i>",
                centerMode: false,
                autoplay: true,
                speed: 300,
                loop: true,
                slidesToShow: 1,
                slidesToScroll: 1,
            });
        });
    </script>
    <script>
        AOS.init();
        $(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
    </script>
</body>

</html>