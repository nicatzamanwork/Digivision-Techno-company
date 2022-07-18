<?php include "header.php" ?>

        <!-- Contact Page Start -->
         <section class="contact-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">Bizimlə əlaqə saxlayın.</span>
                                <h2 class="section-title__title">Şirkətə Mesaj Yazın.</h2>
                            </div>
                            <p class="contact-page__text"></p>
                            <div class="contact-page__social-list">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="contact-page__right">
                            <form action="assets/inc/sendemail.php" class="comment-one__form contact-form-validated"
                                novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="text" placeholder="Adınız" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <input type="email" placeholder="Email " name="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="comment-form__input-box">
                                            <textarea name="message" placeholder="">Mesaj yazın</textarea>
                                        </div>
                                        <button type="submit" class="thm-btn comment-form__btn">Mesaj göndər</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div> 
                        </div>
                    </div>
                </div>
            </div>
        </section> 
        <!--Contact Page End-->

        <!--Contact Details End-->
        <section class="contact-details">
            <div class="container">
                <div class="contact-details__inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single">
                                <div class="contact-details__icon">
                                    <span class="icon-map"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Ofisimiz</p>
                                    <h5>Baku ,Əhməd Rəcəbli 1/4</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single contact-details__single-2">
                                <div class="contact-details__icon">
                                    <span class="icon-email-1"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">E-poçt göndər</p>
                                    <h4><a href="info@digivision.az">info@digivision.az 
                                    </a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="contact-details__single contact-details__single-3">
                                <div class="contact-details__icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="contact-details__content">
                                    <p class="contact-details__sub-title">Zəng edin</p>
                                    <h4><a href="tel:+994502800555">+994502800555</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Details End-->

        <!--Google Map Start-->
        <section class="contact-page-google-map">
            <iframe class="contact-page-google-map__one" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.966095107063!2d49.86021331536721!3d40.40960187936597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d5696e81d17%3A0x6f0ff0c4aa92814f!2s1%20Ahmad%20Rajabli%2C%20Baku%2C%20Azerbaijan!5e0!3m2!1sen!2s!4v1646806065264!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
               

        </section>
        <!--Google Map End-->
<?php include "footer.php" ?>