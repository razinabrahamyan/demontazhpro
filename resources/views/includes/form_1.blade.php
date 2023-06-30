<section id="call-to-action-one" class="wrapper">
    <div class="container">
        <div class="box-call-to-action" v-if="!success">
            <h2>
                <strong>Оставьте свой номер телефона</strong> и&nbsp;мы перезвоним вам через 3 минуты
            </h2>
            <form @submit="sendForm" role="form" id="form3">
                <ul>
                    <li>
                        <masked-input v-model="phone" :mask="mask" name="phone" type="tel"
                                      class="form-control text-center mb-3 input-gen-new" autocomplete="off"
                                      placeholder="+7(___)-___-__-__" required></masked-input>
                    </li>
                    <li>
                        <button class="btn-gen" type="submit"><span>Рассчитать стоимость</span></button>
                    </li>
                </ul>
            </form>
        </div>
        <div class="box-call-to-action" v-if="success">
            <div id="cf-success-wrapper" class="modal-body title_default_dark">
                <div class="token_col w-100 order-4 p-0">
                    <div class="banner_token text-center animation" data-animation="fadeIn">
                        <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center row">
                            <div class="fadeInUp h4 m-auto pt-3 pt-md-0 col-12 text-white font-weight-bold">
                                Спасибо за заявку!<br> С вами скоро свяжутся.
                            </div>
                            <div class="d-flex token_col col-12 col-md-8 m-auto mb-4 mt-4">
                                <div
                                    class="wizard_countdown_time border-0 p-0 counter_medium animation text-center w-100"
                                    data-animation="fadeInUp" data-time="">
                                    <span class="counter_box">
                                        <span id="mins" class="tk_counter minutes base-color" v-text="minutes"></span>
                                    </span>
                                    <span class="counter_box">
                                        <span id="secs" class="tk_counter seconds base-color" v-text="seconds"></span>
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
        </div>
    </div>
</section>
