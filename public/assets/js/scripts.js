$(document).ready(function () {
    /*PRELOADER*/
    $(".loader").delay(1000).fadeOut(500);

    /*POPUP OPEN*/
    $(document).on('click', '.open-popup-form', function () {
        $('#priceModal').modal('show');

    });
    setTimeout(function () {
        $('#priceModal').modal('show');
    }, 60 * 1000);

    /*===================================*
    COOKIES
    /*===================================*/
    window.getCookie = function (name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }
    window.setCookie = function (name, value, time) {
        var date = new Date();
        date.setTime(date.getTime() + time);
        let expires = "; expires=" + date.toUTCString();
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    /*===================================*
    PWA
    /*===================================*/
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('https://demontazh-pro.ru/serviceworker.js').then(function (registration) {
            // console.log('PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            console.log('PWA: ServiceWorker registration failed: ', err);
        });
    } else {
        console.log('ServiceWorker Not Found');
    }

    /*===================================*
    Marquee Popup
    /*===================================*/
    // if ($(window).width() < 960) {
    //     time = 60 * 1000;
    // }

    // if (window.getCookie("sidePopupOpen") !== "1") {


    // }


});

/*===================================*
MAPPING
/*===================================*/
window.yaMapsShown = false;
window.map = undefined;
window.initMap = function () {
    window.map = new ymaps.Map("map", {
        center: [55.587041, 37.739923],
        zoom: 11,
        controls: []
    }, {
        searchControlProvider: 'yandex#search',
        suppressMapOpenBlock: true,
        suppressObsoleteBrowserNotifier: true,
    });

    window.map.controls.add(new ymaps.control.FullscreenControl());
    window.map.controls.add(new ymaps.control.ZoomControl({
        options: {
            size: "small"
        }
    }));

    this.map.geoObjects.add(new ymaps.Placemark([55.562999, 37.753946], {
        balloonContent: 'Проектируемый проезд № 5208\n' +
            'Видное, Ленинский городской округ, Московская область, Россия',
    }));
    this.map.geoObjects.add(new ymaps.Placemark([55.555560, 37.711096], {
        balloonContent: 'улица Павла Фёдоровича Гаевского, 3\n' +
            'Видное, Ленинский городской округ, Московская область, Россия, 142703',
    }));
    this.map.geoObjects.add(new ymaps.Placemark([55.544204, 37.720034], {
        balloonContent: 'Берёзовая улица\n' +
            'Видное, Ленинский городской округ, Московская область, Россия',
    }));
    this.map.geoObjects.add(new ymaps.Placemark([55.550366, 37.692878], {
        balloonContent: '1-й микрорайон\n' +
            'Видное, Ленинский городской округ, Московская область, Россия',
    }));
}
window.mountMap = function () {
    let target = $('#map');
    let el = target[0];
    var rect = el.getBoundingClientRect();

    if (rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */) {
        var elem = document.createElement('script');
        elem.type = 'text/javascript';
        elem.src = 'https://api-maps.yandex.ru/2.1/?load=package.standard&lang=ru_RU&amp;apikey=8c1ddd83-7c9c-4d9e-a532-9c67ea915ff8&onload=window.initMap';
        document.getElementsByTagName('body')[0].appendChild(elem);
        window.yaMapsShown = true;
    }
}
//
if ($('#map').is(":visible")) {
    $(window).scroll(function () {
        if (!window.yaMapsShown) {
            window.mountMap();
        }
    });
}

/*===================================*
OWL
/*===================================*/
let owlMetalCards = $('.owl-metal-cards');

if (owlMetalCards.length) {
    owlMetalCards.owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        dots: false,
        stagePadding: Number,
        //stagePadding: 50,

        pagination: false,
        responsive: {
            0: {items: 1},
            650: {items: 1},
            800: {items: 2},
            1200: {items: 3}
        }
    });

    $("#owl-metal-cards-wrapper .next").click(function () {
        owlMetalCards.trigger('next.owl.carousel');
    });

    $("#owl-metal-cards-wrapper .prev").click(function () {
        owlMetalCards.trigger('prev.owl.carousel');
    });

    owlMetalCards.trigger('owl.play', false);
}

/*===================================*
11. SCROLLUP JS
*===================================*/
$(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
        $('.scrollup').addClass('pptItemVisible');
    } else {
        $('.scrollup').removeClass('pptItemVisible');
    }
});

$(".scrollup").on('click', function (e) {
    e.preventDefault();
    window.smoothScroll(0)
    return false;
});

window.scrollToElement = function (element) {
    window.smoothScroll($(element).offset().top)
};

window.smoothScroll = function (to, id) {
    var smoothScrollFeature = 'scrollBehavior' in document.documentElement.style;
    var articles = document.querySelectorAll("ul#content > li"), i;
    if (to == 'elem') to = articles[id].offsetTop;
    var i = parseInt(window.pageYOffset);
    if (i != to) {
        if (!smoothScrollFeature) {
            to = parseInt(to);
            if (i < to) {
                var int = setInterval(function () {
                    if (i > (to - 20)) i += 1;
                    else if (i > (to - 40)) i += 3;
                    else if (i > (to - 80)) i += 8;
                    else if (i > (to - 160)) i += 18;
                    else if (i > (to - 200)) i += 24;
                    else if (i > (to - 300)) i += 40;
                    else i += 60;
                    window.scroll(0, i);
                    if (i >= to) clearInterval(int);
                }, 1);
            } else {
                var int = setInterval(function () {
                    if (i < (to + 20)) i -= 1;
                    else if (i < (to + 40)) i -= 3;
                    else if (i < (to + 80)) i -= 8;
                    else if (i < (to + 160)) i -= 18;
                    else if (i < (to + 200)) i -= 24;
                    else if (i < (to + 300)) i -= 40;
                    else i -= 60;
                    window.scroll(0, i);
                    if (i <= to) clearInterval(int);
                }, 15);
            }
        } else {
            window.scroll({
                top: to,
                left: 0,
                behavior: 'smooth'
            });
        }
    }
};

/*VUE JS*/
const MaskedInput = window.vueTextMask.default;
window.popupForm = new Vue({
    el: "#priceModal",
    components: {MaskedInput},
    data: {
        formData: undefined,
        formSent: false,
        phone: '',
        full_name: '',
        mask: ['+', '7', '(', /\d/, /\d/, /\d/, ')', '-', /\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/],
        success: false,
        minutes: 0,
        seconds: 0,
        milliseconds: 0,
    },
    methods: {
        sendForm: function (e) {
            e.preventDefault();
            window.popupForm.success = true;
            window.popupForm.countdownTimer();

            if (window.getCookie("FORM_HAS_SENDED") !== "1") {
                const config = {
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                }

                let formData = new FormData(e.target);
                // formData.append('page', $('h1').text());
                formData.append('link', window.location.href);

                axios.post('/axios/send-form', formData, config).then(response => {
                    if (response.status !== 200) {
                    } else {
                        var date = new Date();
                        date.setTime(date.getTime() + (3 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                        document.cookie = 'FORM_HAS_SENDED' + "=1" + expires + "; path=/";
                    }
                }).catch(e => {
                    console.log(e);
                });
            }
        },
        countdownTimer: function Countdown() {
            var that = {};
            let seconds = 180;
            that.seconds = seconds;
            that.totalTime = seconds * 100;
            that.usedTime = 0;
            that.startTime = +new Date();
            that.timer = null;

            that.usedTime = Math.floor((+new Date() - that.startTime) / 10);

            that.count = function () {
                that.usedTime = Math.floor((+new Date() - that.startTime) / 10);
                let tt = that.totalTime - that.usedTime;

                if (tt > 0) {
                    window.popupForm.minutes = window.popupForm.fillZero(Math.floor(tt / (60 * 100)));
                    window.popupForm.seconds = window.popupForm.fillZero(Math.floor((tt - window.popupForm.minutes * 60 * 100) / 100));
                    window.popupForm.milliseconds = window.popupForm.fillZero(tt - Math.floor(tt / 100) * 100);
                }
            }

            setInterval(that.count, 1);
        },
        fillZero: function (num) {
            return num < 10 ? '0' + num : num;
        },
    },
});

window.form1 = new Vue({
    el: "#call-to-action-one",
    components: {MaskedInput},
    data: {
        formData: undefined,
        formSent: false,
        phone: '',
        full_name: '',
        mask: ['+', '7', '(', /\d/, /\d/, /\d/, ')', '-', /\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/],
        success: false,
        minutes: 0,
        seconds: 0,
        milliseconds: 0,
    },
    methods: {
        sendForm: function (e) {
            e.preventDefault();
            window.form1.success = true;
            window.form1.countdownTimer();

            if (window.getCookie("FORM_HAS_SENDED") !== "1") {
                const config = {
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                }

                let formData = new FormData(e.target);
                // formData.append('page', $('h1').text());
                formData.append('link', window.location.href);

                axios.post('/axios/send-form', formData, config).then(response => {
                    if (response.status !== 200) {
                    } else {
                        var date = new Date();
                        date.setTime(date.getTime() + (3 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                        document.cookie = 'FORM_HAS_SENDED' + "=1" + expires + "; path=/";
                    }
                }).catch(e => {
                    console.log(e);
                });
            }
        },
        countdownTimer: function Countdown() {
            var that = {};
            let seconds = 180;
            that.seconds = seconds;
            that.totalTime = seconds * 100;
            that.usedTime = 0;
            that.startTime = +new Date();
            that.timer = null;

            that.usedTime = Math.floor((+new Date() - that.startTime) / 10);

            that.count = function () {
                that.usedTime = Math.floor((+new Date() - that.startTime) / 10);
                let tt = that.totalTime - that.usedTime;

                if (tt > 0) {
                    window.form1.minutes = window.form1.fillZero(Math.floor(tt / (60 * 100)));
                    window.form1.seconds = window.form1.fillZero(Math.floor((tt - window.form1.minutes * 60 * 100) / 100));
                    window.form1.milliseconds = window.form1.fillZero(tt - Math.floor(tt / 100) * 100);
                }
            }

            setInterval(that.count, 1);
        },
        fillZero: function (num) {
            return num < 10 ? '0' + num : num;
        },
    },
});
window.form2 = new Vue({
    el: "#form_2",
    components: {MaskedInput},
    data: {
        formData: undefined,
        formSent: false,
        phone: '',
        full_name: '',
        mask: ['+', '7', '(', /\d/, /\d/, /\d/, ')', '-', /\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/],
        success: false,
        minutes: 0,
        seconds: 0,
        milliseconds: 0,
    },
    methods: {
        sendForm: function (e) {
            e.preventDefault();
            window.form2.success = true;
            window.form2.countdownTimer();

            if (window.getCookie("FORM_HAS_SENDED") !== "1") {
                const config = {
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                }

                let formData = new FormData(e.target);
                // formData.append('page', $('h1').text());
                formData.append('link', window.location.href);

                axios.post('/axios/send-form', formData, config).then(response => {
                    if (response.status !== 200) {
                    } else {
                        var date = new Date();
                        date.setTime(date.getTime() + (3 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                        document.cookie = 'FORM_HAS_SENDED' + "=1" + expires + "; path=/";
                    }
                }).catch(e => {
                    console.log(e);
                });
            }
        },
        countdownTimer: function Countdown() {
            var that = {};
            let seconds = 180;
            that.seconds = seconds;
            that.totalTime = seconds * 100;
            that.usedTime = 0;
            that.startTime = +new Date();
            that.timer = null;

            that.usedTime = Math.floor((+new Date() - that.startTime) / 10);

            that.count = function () {
                that.usedTime = Math.floor((+new Date() - that.startTime) / 10);
                let tt = that.totalTime - that.usedTime;

                if (tt > 0) {
                    window.form2.minutes = window.form2.fillZero(Math.floor(tt / (60 * 100)));
                    window.form2.seconds = window.form2.fillZero(Math.floor((tt - window.form2.minutes * 60 * 100) / 100));
                    window.form2.milliseconds = window.form2.fillZero(tt - Math.floor(tt / 100) * 100);
                }
            }

            setInterval(that.count, 1);
        },
        fillZero: function (num) {
            return num < 10 ? '0' + num : num;
        },
    },
});
window.headSection = new Vue({
    el: "#head-section",
    components: {MaskedInput},
    data: {
        formData: undefined,
        formSent: false,
        phone: '',
        full_name: '',
        mask: ['+', '7', '(', /\d/, /\d/, /\d/, ')', '-', /\d/, /\d/, /\d/, '-', /\d/, /\d/, '-', /\d/, /\d/],
        success: false,
        minutes: 0,
        seconds: 0,
        milliseconds: 0,
    },
    methods: {
        sendForm: function (e) {
            e.preventDefault();
            window.headSection.success = true;
            window.headSection.countdownTimer();

            if (window.getCookie("FORM_HAS_SENDED") !== "1") {
                const config = {
                    headers: {
                        Accept: 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                }

                let formData = new FormData(e.target);
                // formData.append('page', $('h1').text());
                formData.append('link', window.location.href);

                axios.post('/axios/send-form', formData, config).then(response => {
                    if (response.status !== 200) {
                    } else {
                        var date = new Date();
                        date.setTime(date.getTime() + (3 * 60 * 1000));
                        expires = "; expires=" + date.toUTCString();
                        document.cookie = 'FORM_HAS_SENDED' + "=1" + expires + "; path=/";
                    }
                }).catch(e => {
                    console.log(e);
                });
            }
        },
        countdownTimer: function Countdown() {
            var that = {};
            let seconds = 180;
            that.seconds = seconds;
            that.totalTime = seconds * 100;
            that.usedTime = 0;
            that.startTime = +new Date();
            that.timer = null;

            that.usedTime = Math.floor((+new Date() - that.startTime) / 10);

            that.count = function () {
                that.usedTime = Math.floor((+new Date() - that.startTime) / 10);
                let tt = that.totalTime - that.usedTime;

                if (tt > 0) {
                    window.headSection.minutes = window.headSection.fillZero(Math.floor(tt / (60 * 100)));
                    window.headSection.seconds = window.headSection.fillZero(Math.floor((tt - window.headSection.minutes * 60 * 100) / 100));
                    window.headSection.milliseconds = window.headSection.fillZero(tt - Math.floor(tt / 100) * 100);
                }
            }

            setInterval(that.count, 1);
        },
        fillZero: function (num) {
            return num < 10 ? '0' + num : num;
        },
    },
});

/*VUE JS*/
