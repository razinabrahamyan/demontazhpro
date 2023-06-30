<section id="color-metal-prices" class="section glav_price container mt-5">
    <div class="container pl-1 pr-1 p-md-2">
        <h2 class="animation animated fadeInUp text-center mb-2 mt-0 mt-md-5 text-dark">
            <span class="d-none d-md-block font-weight-bold">
                Наши услуги
            </span>
            <span class="d-block d-md-none font-weight-bold">
                Наши услуги
            </span>
        </h2>
        <div class="price base-border base-brb m-0">
            <table class="prices-table table m-0 table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th class="text-center base-border-color table-item m-auto align-middle h-min-content">
                        услуга
                    </th>

                    <th class="text-center base-border-color table-item m-auto align-middle h-min-content d-none d-md-table-cell">
                        <span itemprop="weight">Бесплатно</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                    <td class="text-center table-item m-auto align-middle">
                        <div class="d-flex align-items-center w-max">
                            <img loading="lazy" class="lazy" alt="Пункт приема стали" title="Лом стали"
                                 src="{{asset("/assets/images/prices/".$colorMetal->first()->id.".webp")}}"
                                 style="display: block;">
                            <span>
                                    Демонтаж металлоконструкций
                            </span>
                        </div>
                    </td>
                    <td class="text-left table-item m-auto align-middle d-none d-md-table-cell text-center">
                        <span class="metal-desc free_check">
                          <i class="fa fa-check "></i>
                        </span>
                    </td>
                </tr>
                <tr itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                    <td class="text-center table-item m-auto align-middle">
                        <div class="d-flex align-items-center w-max">
                            <img loading="lazy" class="lazy" alt="Пункт приема стали" title="Лом стали"
                                 src="{{asset("/assets/images/prices/".$colorMetal->first()->id.".webp")}}"
                                 style="display: block;">
                            <span>
                                    Резка металла
                            </span>
                        </div>
                    </td>
                    <td class="text-left table-item m-auto align-middle d-none d-md-table-cell text-center">
                        <span class="metal-desc free_check">
                          <i class="fa fa-check "></i>
                        </span>
                    </td>
                </tr>
                <tr itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                    <td class="text-center table-item m-auto align-middle">
                        <div class="d-flex align-items-center w-max">
                            <img loading="lazy" class="lazy" alt="Пункт приема стали" title="Лом стали"
                                 src="{{asset("/assets/images/prices/".$colorMetal->first()->id.".webp")}}"
                                 style="display: block;">
                            <span>
                                    Вывоз металла
                            </span>
                        </div>
                    </td>
                    <td class="text-left table-item m-auto align-middle d-none d-md-table-cell text-center">
                        <span class="metal-desc free_check">
                          <i class="fa fa-check "></i>
                        </span>
                    </td>
                </tr>
<!--                @foreach($colorMetal as $metal)
                    <tr itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                        <td class="text-center table-item m-auto align-middle">
                            <div class="d-flex align-items-center w-max">
                                <img loading="lazy" class="lazy" alt="Пункт приема стали" title="Лом стали"
                                     src="{{asset("/assets/images/prices/".$metal->id.".webp")}}"
                                     style="display: block;">
                                <span>
                                   {{$metal->description}}
                                </span>
                            </div>
                        </td>

                        <td class="text-left table-item m-auto align-middle d-none d-md-table-cell text-center">
                        <span class="metal-desc ">
                          <i class="fa fa-check"></i>
                        </span>
                        </td>
                    </tr>
                @endforeach-->
                </tbody>
            </table>
        </div>
        <div class="justify-content-center align-items-center row mt-2">
            <button class="dedcription-btn open-popup-form" style="max-width: 350px">
                <span class="name-descripeion">Рассчитать стоимость</span>
                <span class="btn-icon brain">
                    <i class="fas fa-calculator"></i>
                </span>
            </button>
        </div>
    </div>
</section>
