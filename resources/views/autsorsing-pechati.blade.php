@extends('layouts.app')

@section('title', 'Аренда принтера, сканера, аутсорсинг печати, прокат оргтехники в Томске недорого')
@section('description', 'Как сэкономить на печати документов в своей компании? Есть решение! Аутсорсинг печати или покопийная печать документов сэкономит до 70% Ваших расходов')
@section('keywords', 'аутсорсинг печати, аренда офисной техники')
@section('canonical', 'https://a4.click/autsorsing-pechati')
@section('og:url', 'https://a4.click/autsorsing-pechati')
@section('og:title', 'Аренда принтера, сканера, аутсорсинг печати, прокат оргтехники в Томске недорого')
@section('og:description', 'Как сэкономить на печати документов в своей компании? Есть решение! Аутсорсинг печати или покопийная печать документов сэкономит до 70% Ваших расходов')
@section('twitter:description', 'Как сэкономить на печати документов в своей компании? Есть решение! Аутсорсинг печати или покопийная печать документов сэкономит до 70% Ваших расходов')
@section('twitter:title', 'Аренда принтера, сканера, аутсорсинг печати, прокат оргтехники в Томске недорого')


@section('content')
    <div class="breadcamps-wrap bg-blue">
        <div class="container">
            <ul class="breadcamps">
                <li><a href="{{ url('/') }}" class="breadcamps__link">Главная</a></li>
                <li>-</li>
                <li class="breadcamps__link breadcamps__link_active">Аутсорсинг печати</li>
            </ul>
        </div>
    </div>
<section class="usluga bg-autsors">
    <div class="container">

        <div class="usluga__inner">
            <h1 class="usluga__title">Аутсорсинг печати</h1>
            <p class="usluga__text">Позволит вам непрерывно оптимизировать процессы печати внутри вашей компании в ответ на изменения задач бизнеса, а также сокращать расходы на печать, направляя усилия и время ваших сотрудников на достижение целей вашего бизнеса.</p>

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
            <h2 class="section-uslugi__title">Аренда офисной техники в Томске</h2>
            <p class="section-uslugi__text">
                В любой компании может возникнуть ситуация, когда остро встает вопрос печати документов.
                Для многих компаний, деятельность которых зависит от печатного документооборота, скорость
                и бесперебойность печати становятся одними из главных направлений. Иногда возникает вопрос:
                где купить дополнительную офисную оргтехнику, что является не рентабельно, если Вы будете
                использовать ее на протяжении непродолжительного времени. Наиболее рациональным решением будет
                являться аренда офисной техники для печати на определенный срок (сканер, принтер или МФУ - это
                зависит от Ваших целей и задач).

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
            <h2 class="section-uslugi__title">Аутсорсинг офисной печати</h2>
            <p>
                Если нет времени на печать собственной продукции, Вы можете обратиться в нашу компанию,
                цены Вас приятно удивят. Что такое аутсорсинг печати? Это в первую очередь экономия
                Ваших денежных средств (не нужно покупать принтер и бумагу), экономия времени, высокое
                качество печати (не надо заправлять картридж). Существенная выгода появляется тогда, когда
                возрастает объем необходимой печати. Как мы работаем:
            </p>
            <ul>
                <li>Выбираем качество печати и ее цвет</li>
                <li>Устанавливаем необходимый объем</li>
                <li>Устанавливаем срок завершения работы
                </li>
            </ul>
            <p class="mb-20">
                Компания <b><?= (config('app.company')) ?></b> не первый год занимается прокатом офисной техники, оргтехники и аутсорсингом офисной печати.
                Мы предлагаем Вам в аренду современное офисное оборудование, которое отвечает требованиям высокого
                качества и скорости печати: принтеры, МФУ, сканеры с гарантией их бесперебойной работы. Принтеры, сканеры,
                МФУ поставляются в аренду на сроки от одного дня до 5 лет.
            </p>
            <p class="mb-20">
                В указанную стоимость входит доставка до офиса на территории Томска, установка и сервисное
                обслуживание 24/7. Скорость реагирования на любое техническое обслуживание составляет менее 40 минут.
                Арендное оборудование может быть доставлено с запасом бумаги и заправленных картриджей на две недели или
                на 1 месяц вперед, что ускорит Ваш документооборот и бумажное делопроизводство не будет останавливаться.
                Цены указанные на оборудование достаточно гибкие, мы опираемся на индивидуальный подход к каждому клиенту.
                Аренда оргтехники позволяет экономить свои денежные средства и не тратится на приобретение дорогостоящего
                офисного оборудования в Томске. Если Вы желаете арендовать фотопринтер исключительно для печати фотографий
                и предъявляете к отпечаткам достаточно высокие требования, целесообразно обратить внимание на наши
                узкоспециализированные модели.
            </p>
            <p>
                Компания <b><?= (config('app.company')) ?></b> на территории Томска и области может предложить широкий выбор черно-белых и цветных
                принтеров (лазерные или струйные) и МФУ, обычные сканеры, поточные сканеры, различные копировальные
                аппараты с узким и широким функционалом, а так же другую крупную технику ведущих мировых брендов —
                HP (Hewlett-Packard), Kyocera, Ricoh, Lexmark, Oki, Brother, Xerox и многих других международных вендоров.
                Оргтехника этих брендов — надежный помощник для Вашего бизнеса в Томске.
            </p>
        </div>
    </div>
</section>


<section class="section-uslugi bg-blue">
    <div class="container">
        <div class="section-uslugi__inner">
            <div class="supline">
                <span>
                    <i class="fa fa-question-circle" aria-hidden="true"></i>
                </span>
            </div>
            <h2 class="section-uslugi__title">Зачем нужна аренда оргтехники?</h2>
            <ul>
                <li>Чтобы временно заменить технику, которая находится в ремонте. Срочная или разовая работа с печатью.</li>
                <li>Чтобы не тратить деньги на покупку нового устройства МФУ, принтера, сканера, если оно используется очень редко.</li>
                <li>Чтобы не тратить средства и время на ремонт и обслуживание офисной оргтехники.</li>
                <li>Если планируется большой объем печати.</li>
                <li>Если возникла потребность в печати формата А3 и фотопечати.</li>
                <li>Аутсорсинг печати больших и средних объемов.</li>
                <li>Низкая стоимость печати.</li>
                <li>Временное увеличение мощности собственного офиса.</li>
            </ul>

            <p class="mb-20">
                Парк принтеров для аренды в Томске у Компании <b><?= (config('app.company')) ?></b> составляет 97 единиц,
                среди которых компактные лазерные принтеры формата А4 (ч/б или цветные),
                мощные и быстрые сетевые принтеры, МФУ (ксерокс — сканер — принтер ) формата А4
                (лазерные/цветные), универсальные и мощные МФУ формата А3.
            </p>

            <p>
                Компания <b><?= (config('app.company')) ?></b> готова предоставить широкий выбор принтеров, МФУ и другого офисного оборудования,
                стоимость которого будет рассчитана исходя из:
            </p>
            <ul>
                <li>Длительности аренды офисного оборудования (от 1 дня до 5 лет)</li>
                <li>Функциональности устройств (принтер лазерный/струйный, черно-белый/цветной, МФУ с широким функционалом или
                    без такового)</li>
                <li>Количества единиц оргтехники техники (принтер + сканер, принтер + МФУ и так далее)</li>
                <li>Необходимости в установке специализированного программного обеспечения для управления печатью и
                    обеспечения безопасности.</li>
            </ul>


        </div>
    </div>
</section>

    <section class="callback" id="callback-form">
        <div class="container">
            @include('form')
        </div>
    </section>





@endsection
