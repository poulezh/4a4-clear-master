@extends('layouts.app')

@section('title', 'Печать документов по выгодный ценам для корпоративных клиентов по выгодным ценам')
@section('description', 'Экономьте на распечатывании документов своей компании до 70%. С нами Вы оптимизируйте свои затраты на обслуживание и рабочее время своих специалистов.')
@section('keywords', '')
@section('canonical', 'https://a4.click/pechat-dokumentov')
@section('og:url', 'https://a4.click/pechat-dokumentov')

@section('og:title', 'Печать документов по выгодный ценам для корпоративных клиентов по выгодным ценам')
@section('og:description', 'Экономьте на распечатывании документов своей компании до 70%. С нами Вы оптимизируйте свои затраты на обслуживание и рабочее время своих специалистов.')
@section('twitter:description', 'Экономьте на распечатывании документов своей компании до 70%. С нами Вы оптимизируйте свои затраты на обслуживание и рабочее время своих специалистов.')
@section('twitter:title', 'Печать документов по выгодный ценам для корпоративных клиентов по выгодным ценам')


@section('content')
    <div class="breadcamps-wrap bg-blue">
        <div class="container">
            <ul class="breadcamps">
                <li><a href="{{ url('/') }}" class="breadcamps__link">Главная</a></li>
                <li>-</li>
                <li class="breadcamps__link breadcamps__link_active">Печать документов</li>
            </ul>
        </div>
    </div>
    <section class="usluga bg-pechat">
        <div class="container">


            <div class="usluga__inner">
                <h1 class="usluga__title">Печать документов</h1>
                <p class="usluga__text">Распечатка больших объемов документов в Томске по низким ценам!</p>
                <div class="usluga_btn-block">

                    <a href="{{ url('#podrobnee') }}" class="btn btn__accent">Подробнее</a>
                    <a href="{{ url('#callback-form') }}" class="btn-white mleft popup-two">Заказать звонок</a>
                </div>
            </div>
        </div>
    </section>


    <section class="section-uslugi bg-blue" id="podrobnee">
        <div class="container">
            <div class="section-uslugi__inner">
                <div class="supline">
                <span>
                    <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
                </span>
                </div>
                <h2 class="section-uslugi__title">Печать документов в Томске или как сэкономить бюджет компании на печати документов?</h2>
                <p class="mb-20">
                    Чем крупнее компания, тем больше затраты на офисную печать, а цены на расходные материалы приравниваются к “золотым”.
                    Примерно 6% бюджета Вашей компании тратится на поддержание принтеров в пригодном для печати состоянии. Наиболее надежным способом
                    экономии на печати является печать документов в больших объемах в Компании <b><?= (config('app.company')) ?></b>.
                </p>
                <p class="mb-20">
                    В Компании <b><?= (config('app.company')) ?></b> Вы можете оперативно распечатать свои документы как с малым тиражом, так и большим.
                    Наш парк нового полиграфического оборудования может с легкостью выполнить распространенные виды работ: лазерная и струйная,
                    цветная или черно/белая печать документов, а также печать документов формата А3 и более крупных форматов,
                    большой тираж или разовая акция.
                </p>
                <p class="mb-20">
                    Большой выбор полиграфических услуг, быстрая печать документов, гибкая система индивидуального расчета цены, которая исходит
                    из объема печати, формата, цветности и качества - это лишь малая часть наших преимуществ. Что касается больших объемов, <b><?= (config('app.company')) ?></b> распечатает
                    документы в любом количестве на современных печатных машинах высокой четкости и производительности. Небольшой тираж мы напечатаем за несколько минут.

                </p>

            </div>
        </div>
    </section>

    <section class="section-uslugi">
        <div class="container">
            <div class="section-uslugi__inner">
                <div class="supline">
                <span>
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                </span>
                </div>
                <h2 class="section-uslugi__title">В чем выгода при печати документов в нашей компании:</h2>
                <ul>
                    <li>Оптимизация затрат. Вы не тратитесь на приобретение дорогого оборудования, не покупаете расходные материалы. Экономия может достигать до 70%</li>
                    <li>Полная прозрачность затрат. Мы рассчитаем наиболее оптимальную стоимость для печати документов</li>
                    <li>Разгрузка специалистов. Сохранение времени собственных сотрудников</li>
                    <li>Гарантированный сервис. Единая точка ответственности</li>
                    <li>Стоимость услуг зависит от тиража и сроков выполнения заказа</li>
                    <li>Одна из самых высоких в Томске скорость печати документов</li>
                    <li>Профессиональное оборудование</li>
                    <li>Печать документов любого тиража</li>
                    <li>Приемлемые цены</li>
                    <li>В наших офисах печати имеется специализированное оборудование, которое способно обеспечить скорость печати до нескольких десятков листов в минуту. Качественно, оперативно и недорого.</li>
                </ul>

                <p>

                    Условия партнерства выгодны и удобны как для корпоративных партнеров, так и для клиентов,
                    заинтересованных в больших разовых заказах. Надеемся, Вы найдете в лице компании <b><?= (config('app.company')) ?></b> надежного
                    исполнителя и советчика в области полиграфии. Если тираж печатного издания составляет более 1000
                    экземпляров, можно выбрать более экономичные виды распечатки.

                </p>


            </div>
        </div>
    </section>




    <section class="callback" id="callback-form">
        <div class="container">
            @include('form')
        </div>
    </section>





@endsection

