<div class="fix_price hide" id="fix_price" style="display: none;">
    <div class="block animated shadow-lg">
        <div class="close"></div>
        <div class="fix_price-cont text-center">
            <div class="title">Ищите актуальные цены на металлолом?</div>
            <div class="pod_title row">
                <a href="tel:+74954141199" class="l-popup-nav-phone hover-orange-decor col-6">
                    +7(495)414-11-99
                </a>
                <span class="l-popup-nav-phone col-6 pl-0" style="margin-top: 4px;">
                    <p id="head-phones">
                        <span class="active-point text-white font-weight-bold p-0  text-uppercase" style="font-size: 9px;">
                            Есть операторы онлайн
                        </span>
                    </p>
                </span>

                {{--                <a href="tel:+74954141114" class="l-popup-nav-phone hover-orange-decor col-6">--}}
                {{--                    +7(495)414-11-14--}}
                {{--                </a>--}}
            </div>
            <table class="fix_price-table">
                <tbody>
                <tr class="ht">
                    <th>Вид металла</th>
                    <th>Цена</th>
                </tr>
                @foreach($colorMetal as $price)
                    <tr>
                        <td>
                            <a href="#" class="hover-orange-decor">
                                {{$price['metal']}}
                            </a>
                        </td>
                        <td>
                            {{--                            @if($price['direction'] == "up")--}}
                            {{--                                <i class="ion-arrow-up-a text-success"></i>--}}
                            {{--                            @else--}}
                            {{--                                <i class="ion-arrow-down-a text-danger"></i>--}}
                            {{--                            @endif--}}
                            <span>
                                 {{$price['price2']}}₽/кг
                            </span>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <button class="dedcription-btn open-popup-form" style="max-width: 350px">
                <span class="name-descripeion">Рассчитать стоимость</span>
                <span class="btn-icon brain">
                    <i class="fas fa-calculator"></i>
                </span>
            </button>
        </div>
    </div>
</div>
