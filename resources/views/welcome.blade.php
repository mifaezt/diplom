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

<div class="homeView">
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
</div>

</main>
@endsection