<section id="head-section">
    <div class="container">
        <div id="contact-info" class="row pt-2 pt-md-4">
            <div class="col-6 col-md-4 pr-0">
                <a class="logo-text clearfix content-heading align-items-center" href="/">
                    <img class="d-block d-md-none" loading="lazy" src="{{asset('assets/images/base/logo-mobile.png')}}" alt="Лого" title="Лого">
                    <img class="d-none d-md-block" loading="lazy" src="{{asset('assets/images/base/logo.png')}}" alt="Лого" title="Лого">
                    <p class="m-0 font-weight-bold text-white">
                        Демонтаж металлоконструкций
                    </p>
                </a>
            </div>
            <div class="col-6 col-md-4 d-none d-md-block">
                <div id="address-head">
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="compass"
                         class="svg-inline--fa fa-compass fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg"
                         viewBox="0 0 496 512">
                        <path fill="currentColor"
                              d="M347.94 129.86L203.6 195.83a31.938 31.938 0 0 0-15.77 15.77l-65.97 144.34c-7.61 16.65 9.54 33.81 26.2 26.2l144.34-65.97a31.938 31.938 0 0 0 15.77-15.77l65.97-144.34c7.61-16.66-9.54-33.81-26.2-26.2zm-77.36 148.72c-12.47 12.47-32.69 12.47-45.16 0-12.47-12.47-12.47-32.69 0-45.16 12.47-12.47 32.69-12.47 45.16 0 12.47 12.47 12.47 32.69 0 45.16zM248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm0 448c-110.28 0-200-89.72-200-200S137.72 56 248 56s200 89.72 200 200-89.72 200-200 200z"></path>
                    </svg>
                    <a href="https://yandex.ru/maps/-/CCU5YYT0TA" class="address-text hover-base-color">
                        Москва, Видное, Проектируемый проезд №5208
                    </a>
                </div>
            </div>
            <div id="head-phones" class="col-6 col-md-4 pl-0">
                <p class="m-0">
                    <a class="hover-base-decor" href="tel:+74954141199">+7 (495) 414-11-99</a>
                </p>
                <p class="m-0">
                    <span class="active-point">Работаем круглосуточно</span>
                </p>
            </div>
        </div>
        <nav id="desctop-nav" class="mt-3">
            <div class="nav-wrapper">
                <ul class="p-0">
                    <li>
                        <a href="javascript:window.scrollToElement('#color-metal-prices')" class="active">
                            Цены
                        </a>
                    </li>
                    <li>
                        <a href="javascript:window.scrollToElement('#promotion')">
                            Акция
                        </a>
                    </li>
                    <li>
                        <a href="javascript:window.scrollToElement('.glav_priem')">
                            Как сдать
                        </a>
                    </li>
                    <li>
                        <a href="javascript:window.scrollToElement('#metal-cards')">
                            Наши услуги
                        </a>
                    </li>
                    <li>
                        <a href="javascript:window.scrollToElement('#about-us')">
                            О нас
                        </a>
                    </li>
                    <li>
                        <a href="javascript:window.scrollToElement('#footer')">
                            Контакты
                        </a>
                    </li>
                </ul>
                <div class="action-head position-absolute text-right">
                    {{--                <span class="btn-link">Узнай цену сейчас</span>--}}
                    <button class="dedcription-btn open-popup-form">
                        <span class="name-descripeion">Заказать звонок</span>
                        <span class="btn-icon brain">
                            <i class="fas fa-headset"></i>
                        </span>
                    </button>
                </div>
            </div>
        </nav>
        <div class="wrap-general-content pb-5">
            <div class="container row position-relative">
                <div class="wrap-offer-gen">
                    <h1>
                        <strong>
                            Демонтаж любой сложности и резка металла
                            <a href="javascript:window.scrollToElement('#color-metal-prices')"
                               class="base-color-i hover-base-decor">
                                бесплатно
                            </a>
                        </strong>
                    </h1>
                    <p class="description-gen h4">

                        <strong>Купим ваш металл за <span class="base-color-i main_price">{{$colorMetal->first()->price}} ₽/т.</span>  </strong>
                    </p>
                </div>
                <div class="box-form-general float-right">
                    <div class="inner-form-gen" v-if="!success">
                        <p class="title-form-gen">
                            <strong>
                                <a href="javascript:window.scrollToElement('#color-metal-prices')"
                                   class="base-color-i hover-base-decor">
                                    Закажите демонтаж
                                </a>
                                всего за 3 минуты
                            </strong>
                        </p>
                        <form @submit="sendForm" role="form" id="form2">
                            <ul class="list-unstyled">
                                <li>
                                    <input type="text" name="full_name" class="required" placeholder="Ваше имя">
                                </li>
                                <li>
                                    <masked-input v-model="phone" :mask="mask" name="phone" type="tel"
                                                  class="form-control text-left mb-3 input-gen-new" autocomplete="off"
                                                  placeholder="Ваш номер телефона" required></masked-input>
                                </li>
                                <li>
                                    <button type="submit" name="submit" value="Submit"
                                            class="col-12 btn-submit-new btn-gen">
                                        <span>Оставить заявку</span>
                                    </button>
                                    <p id="head-phones" class="d-flex">
                                        <span class="active-point base-color-i font-weight-bold p-0 m-auto pt-3 text-uppercase">
                                            Есть операторы онлайн
                                        </span>
                                    </p>
                                </li>
                            </ul>
                        </form>
                    </div>
                    <div class="inner-form-gen" v-if="success" style="padding: 80px 35px 200px;">
                        <div id="cf-success-wrapper" class="modal-body title_default_dark">
                            <div class="token_col w-100 order-4 p-0">
                                <div class="banner_token text-center animation" data-animation="fadeIn">
                                    <div class="tk_counter_inner p-0 mw-100 d-lg-flex align-items-center row">
                                        <div class="fadeInUp h4 m-auto pt-3 pt-md-0 col-12 text-black font-weight-bold">
                                            Спасибо за заявку!<br> С вами скоро свяжутся.
                                        </div>
                                        <div class="d-flex token_col col-12 m-auto mb-4 mt-4">
                                            <div
                                                class="wizard_countdown_time border-0 p-0 counter_medium animation text-center w-100"
                                                data-animation="fadeInUp" data-time="">
                                    <span class="counter_box">
                                        <span id="mins" class="tk_counter minutes base-color-i" v-text="minutes"></span>
                                    </span>
                                                <span class="counter_box">
                                        <span id="secs" class="tk_counter seconds base-color-i" v-text="seconds"></span>
                                    </span>
                                                <span class="counter_box">
                                        <span id="secs" class="tk_counter seconds base-color-i"
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
                <div class="wrap-reasons-general mt-3 mt-md-3">
                    <div class="inner-reasons-gen clearfix row">
                        <div class="col-reas-gen col-4">
                            <div class="advantage_handler">
                                <div class="back layer"></div>
                                <div class="front layer"></div>
                                <div class="icon">
                                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 199.027 199.027" style="enable-background:new 0 0 199.027 199.027;" xml:space="preserve">
                                        <g>
                                            <g>
                                                <g>
                                                    <path  d="M99.514,0.009C44.657,0.009,0,44.648,0,99.522c0,54.853,44.657,99.496,99.514,99.496
                                                        c54.871,0,99.514-44.643,99.514-99.496C199.027,44.648,154.384,0.009,99.514,0.009z M99.514,189.43
                                                        c-49.581,0-89.926-40.33-89.926-89.911S49.932,9.593,99.514,9.593s89.926,40.344,89.926,89.926S149.095,189.43,99.514,189.43z"/>
                                                </g>
                                                <g>
                                                    <path d="M104.288,92.54c-13.199-5.604-17.823-9.538-17.823-17.264c0-6.202,3.418-13.184,15.092-13.184
                                                        c9.699,0,15.901,3.5,19.086,5.307l3.783-9.999c-4.549-2.57-10.747-5.007-19.684-5.29V37.383H95.19v15.156
                                                        c-13.796,2.29-22.719,11.825-22.719,24.393c0,13.184,9.552,20.296,24.988,26.365c11.227,4.545,16.169,9.702,16.151,18.027
                                                        c0.018,8.654-6.302,14.856-17.046,14.856c-8.493,0-16.384-3.021-21.674-6.499l-3.633,10.132
                                                        c5.29,3.783,14.244,6.517,23.016,6.682v15.139h9.552v-15.751c15.6-2.423,23.943-13.646,23.943-25.753
                                                        C127.772,106.652,119.892,98.921,104.288,92.54z"/>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <p>Купим ваш металл <strong>дорого</strong></p>
                        </div>
                        <div class="col-reas-gen col-4 p-md-0">
                            <div class="advantage_handler">
                                <div class="back layer"></div>
                                <div class="front layer"></div>
                                <div class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 502 502" style="enable-background:new 0 0 502 502;" xml:space="preserve">
<g>
    <g>
        <g>
            <path d="M420.5,0H148c-2.652,0-5.196,1.054-7.071,2.929l-66.5,66.5C72.554,71.305,71.5,73.848,71.5,76.5V492
				c0,5.522,4.477,10,10,10h339c5.523,0,10-4.478,10-10V10C430.5,4.478,426.023,0,420.5,0z M410.5,482h-319V80.643L152.142,20H410.5
				V482z"/>
            <path d="M132,121c0,5.522,4.477,10,10,10h150c5.523,0,10-4.478,10-10c0-5.522-4.477-10-10-10H142
				C136.477,111,132,115.478,132,121z"/>
            <path d="M360,181H142c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h218c5.523,0,10-4.478,10-10
				C370,185.478,365.523,181,360,181z"/>
            <path d="M360,251H142c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h218c5.523,0,10-4.478,10-10
				C370,255.478,365.523,251,360,251z"/>
            <path d="M360,321H142c-5.523,0-10,4.478-10,10c0,5.522,4.477,10,10,10h218c5.523,0,10-4.478,10-10
				C370,325.478,365.523,321,360,321z"/>
            <path d="M330,131h30c5.523,0,10-4.478,10-10c0-5.522-4.477-10-10-10h-30c-5.523,0-10,4.478-10,10
				C320,126.522,324.477,131,330,131z"/>
        </g>
    </g>
</g>
</svg>
                                </div>
                            </div>
                            <p><strong>Мы работаем</strong> с Физ.<br> и Юр
                                лицами
                                </p>

                        </div>
                        <div class="col-reas-gen col-4 pl-md-0">
                            <div class="advantage_handler">
                                <div class="back layer"></div>
                                <div class="front layer"></div>
                                <div class="icon">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                         viewBox="0 0 508.007 508.007" style="enable-background:new 0 0 508.007 508.007;" xml:space="preserve">
<g>
    <g>
        <path d="M181.1,254.571H70.3c-7.8,0-14.1,6.3-14.1,14.1c0,7.8,6.4,14.1,14.1,14.1h110.8c7.8,0,14.1-6.3,14.1-14.1
			C195.2,260.871,188.9,254.571,181.1,254.571z"/>
    </g>
</g>
                                        <g>
                                            <g>
                                                <path d="M436.2,310.871H70.3c-7.7,0.1-14,6.4-14,14.1c0,7.8,6.3,14.1,14.1,14.1h365.8c7.8,0,14.1-6.3,14.1-14.1
			S444,310.871,436.2,310.871z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M436.2,367.271H70.3c-7.8,0-14.1,6.3-14.1,14.1s6.3,14.1,14.1,14.1h365.8c7.8,0,14.1-6.3,14.1-14.1
			C450.2,373.571,443.9,367.271,436.2,367.271z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M147.4,423.571H70.3c-7.8,0-14.1,6.3-14.1,14.1c0,7.8,6.3,14.1,14.1,14.1h77.1c7.8,0,14.1-6.3,14.1-14.1
			C161.5,429.871,155.2,423.571,147.4,423.571z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M436.2,423.571h-77.1c-7.8,0-14.1,6.3-14.1,14.1c0,7.8,6.3,14.1,14.1,14.1h77.1c7.8,0,14.1-6.3,14.1-14.1
			C450.2,429.871,443.9,423.571,436.2,423.571z"/>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path d="M492.4,198.371H380.2l111.7-111.7c16.3-16.3,26.1-44.6,0-70.7c-25.6-25.6-54.3-16.4-70.7,0l-170.5,170.5
			c-1.5,1.5-2.7,3.4-3.4,5.5l-2.1,6.3H14.1c-7.8,0-14.1,6.3-14.1,14.1v281.5c0,7.8,6.3,14.1,14.1,14.1h478.4
			c7.8,0,14.1-6.3,14.1-14.1v-281.5C506.5,204.671,500.2,198.371,492.4,198.371z M441.1,35.871c8.3-8.3,22.6-8.3,30.9,0
			c8.2,8.2,8.2,22.7,0,30.9l-8.2,8.2l-30.9-30.9L441.1,35.871z M413,63.971l30.9,30.9l-124.2,124.2l-30.9-30.9L413,63.971z
			 M270.9,210.071l26.9,27l-40.6,13.7L270.9,210.071z M28.1,479.871v-253.4h207.5l-14.2,42.1c-1.7,5.1-0.4,10.7,3.4,14.4
			c5,5,13,3.9,14.4,3.4l76.5-25.8c2.1-0.7,3.9-1.8,5.5-3.4l30.7-30.7h126.3v253.4H28.1z"/>
                                            </g>
                                        </g>
                        </svg>
                                </div>
                            </div>
                            <p><strong>Любая</strong> форма <br> оплаты</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
