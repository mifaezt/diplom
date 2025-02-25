<!-- Подключаем шаблон -->
@extends('layouts.main')
<!-- yeld реализация -->
@section('title', 'Jarviranta')

@section('content')
<div class="homeImage">
    <div class="homeSlogan">
        <h1>Отдохните от суеты в гостевом А-фрейм домике на берегу живописного озера в Карелии!</h1>
        <div class="button-link-container">
            <a href="#" class="button-link">ЗАБРОНИРОВАТЬ</a>
        </div>
    </div>
</div>
<main class="container">

<div class="serviceFirstBlock">
    <h2 class="blockInfo">Что входит</h2>

    <div class="serviceSecondBlock">
        <div class="serviceTripleBlock">
            <div class="serviceComponent">
                <div class="serviceIcon">
                    <img src="/icons/sauna.svg" alt="sauna">
                </div>
                <div class="serviceDesc">
                    <h3>Финская сауна</h3>
                    <p>Теплая сауна прямо в доме, банные принадлежности  и комфортный душ с туалетом</p>
                </div>
            </div>

            <div class="serviceComponent">
                <div class="serviceIcon">
                    <img src="/icons/wifi.svg" alt="wifi">
                </div>
                <div class="serviceDesc">
                    <h3>Бесплатный WiFi</h3>
                    <p>WiFi по всей территории и парковка рядом с домом</p>
                </div>
            </div>

            <div class="serviceComponent">
                <div class="serviceIcon">
                    <img src="/icons/kitchen.svg" alt="kitchen">
                </div>
                <div class="serviceDesc">
                    <h3>Кухня</h3>
                    <p>Варочная панель, микроволновка, электрочайник, холодильник, кофеварка, посуда, чай, кофе, сахар, крупы, масло, специи и соль</p>
                </div>
            </div>
        </div>

        <div class="serviceTripleBlock">
            <div class="serviceComponent">
                <div class="serviceIcon">
                    <img src="/icons/grill.svg" alt="grill">
                </div>
                <div class="serviceDesc">
                    <h3>Мангальная зона</h3>
                    <p>Большой мангал, шампуры, сетка, уголь, розжиг, спички, апохало, дрова. Стол и скамейки рядом</p>
                </div>
            </div>

            <div class="serviceComponent">
                <div class="serviceIcon">
                    <img src="/icons/bed.svg" alt="bed">
                </div>
                <div class="serviceDesc">
                    <h3>Спальня</h3>
                    <p>Два удобных двуспальных места, постельное белье, пледы</p>
                </div>
            </div>

            <div class="serviceComponent">
                <div class="serviceIcon">
                    <img src="/icons/badminton.svg" alt="badminton">
                </div>
                <div class="serviceDesc">
                    <h3>Досуг</h3>
                    <p>Рыбалка и прогулка по лесу в любое время года!
                    Лето: Бадминтон, фрисби, дартс, два сапборда
                    Зима: Тюбинг, ледянка, настольные игры</p>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="homeView">
    <div class="blockInfo">Наш гостевой дом</div>
    <div class="gallery-container">
        <div class="gallery-item" data-target="outside">
            <a href="{{ route('outside') }}">
            <img src="{{asset('images/outside.jpg')}}" alt="Домик снаружи">
            <div class="overlay">Снаружи</div>
            </a>
        </div>
        <div class="gallery-item" data-target="inside">
            <a href="{{ route('inside') }}">
            <img src="{{asset('images/inside.jpg')}}" alt="Домик внутри">
            <div class="overlay">Внутри</div>
            </a>
        </div>
    </div>
</section>


<section class="pricing-section">
    <div class="container">
        <div class="pricing-content">
            <div class="pricing-text">
                <h2>Цены</h2>
                <p>Наши афрейм домики предлагают комфорт и уют по доступным ценам. Выберите подходящий вариант и наслаждайтесь отдыхом в гармонии с природой.</p>
                <ul class="heart-list">
                    <li> Будние дни — 11 000 р./ сутки</li>
                    <li> Пятница — 12 000 р. / сутки</li>
                    <li> Суббота — 15 000 р. / сутки</li>
                    <li> Доп. гость — 1 500 р. с человека в сутки</li>
                    <li> Заезд с 14:00, выезд до 11:00</li>
                </ul>
                <a href="#" class="btnPricing">Забронировать</a>
                <p>*Цены динамические, могут меняться от сезона и спроса. Тарифы можно уточнить, нажав "Забронировать" или
                по нмоеру телефон +79535389063</p>
            </div>
            <div class="pricing-image">
                <img src="{{ asset('images/PricingImage.jpg') }}" alt="Афрейм домик">
            </div>
        </div>
    </div>
</section>

<section>
<swiper-container 
navigation="true" 
pagination="true"
slides-per-view="2"
  mousewheel-force-to-axis="true" >
  <swiper-slide>
  <div class="slider-block">
    <div class="slider-item">
        <img src="{{ asset('images/walkDog.jpg') }}" alt="Описание изображения" class="slider-image">
        <div class="slider-description">
            <h3>Заголовок слайда</h3>
            <p>Краткое описание слайда. Это может быть текст о предложении, услуге или продукте.</p>
        </div>
    </div>
</div>
  </swiper-slide>
  <swiper-slide>Slide 2</swiper-slide>
  <swiper-slide>Slide 3</swiper-slide>
</swiper-container>
</section>

</main>
@endsection