<section id="form_2" class="container mb-5">
    <div class="container" v-if="!success">
        <h2><strong>Нужно порезать металл или сделать демонтаж?</strong></h2>
        <div class="wrap-action-three">
            <div class="box-form-container-two">
                <h3>
                    <strong class="text-white"><span class="base-color-i">Бесплатный</span> вывоз
                        металлолома.</strong><br>
                    <span class="h4 text-white">Цены выше рынка в любой день!</span>
                </h3>
                <form @submit="sendForm" role="form" id="form5">
                    <ul class="p-0">
                        <li>
                            <masked-input v-model="phone" :mask="mask" name="phone" type="tel"
                                          class="form-control text-center mb-3 input-gen-new" autocomplete="off"
                                          placeholder="+7(___)-___-__-__" required></masked-input>
                        </li>
                        <li>
                            <div class="row m-auto">
                                <div class="col-10 col-md-12 p-md-0 pl-0">
                                    <button class="btn-gen" type="submit"><span>Рассчитать стоимость</span></button>
                                </div>
                                <div class="col-2 d-block d-md-none p-0 pr-0">
                                    <a aria-label="WhatsApp" href="https://wa.me/74954141199" class="link-form1 rotate-ie"
                                       target="_blank" rel="noreferrer">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="d-none d-md-inline-block">
                            <a aria-label="WhatsApp" href="https://wa.me/74954141199" class="link-form1 rotate-i" target="_blank"
                               rel="noreferrer">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="wrap-image-action-three d-none d-md-block">
                <img loading="lazy" src="{{asset('assets/images/form/fftp2.png')}}" alt="форма" title="форма" class="w-100">
            </div>
        </div>
    </div>
    <div class="container" v-if="success">
        <div class="wrap-action-three">
            <div class="box-form-container-two">
                <div id="cf-success-wrapper" class="modal-body title_default_dark">
                    <div class="token_col w-100 order-4 p-0">
                        <div class="banner_token text-center animation" data-animation="fadeIn">
                            <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center row">
                                <div
                                    class="fadeInUp h4 m-auto pt-3 pt-md-0 col-12 text-white text-left font-weight-bold">
                                    Спасибо за заявку!<br> С вами скоро свяжутся.
                                </div>
                                <div class="d-flex token_col col-12 col-md-8 m-0">
                                    <div
                                        class="wizard_countdown_time border-0 p-0 counter_medium animation text-left w-100"
                                        data-animation="fadeInUp" data-time="">
                                            <span class="counter_box">
                                                <span id="mins" class="tk_counter minutes base-color"
                                                      v-text="minutes"></span>
                                            </span>
                                        <span class="counter_box">
                                                <span id="secs" class="tk_counter seconds base-color"
                                                      v-text="seconds"></span>
                                            </span>
                                        <span class="counter_box">
                                                <span id="secs" class="tk_counter seconds base-color"
                                                      v-text="milliseconds"></span>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrap-image-action-three">
                    <img loading="lazy" src="{{asset('assets/images/form/fftp2.png')}}" alt="Форма-2" title="Форма-2" class="w-100">
                </div>
            </div>
        </div>
    </div>
</section>
