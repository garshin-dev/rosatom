<?php
require_once('connection.php');
$array = array(
    array(
        'Аварийно-технический центр Минатома России, ФГУП'
    ),
    array(
        'АКМЭ-инжиниринг, АО'
    ),
    array(
        'Ангарский электролизный химический комбинат (АЭХК), АО '
    ),
    array(
        'Атом-охрана, Ведомственная охрана Росатома, АО'
    ),
    array(
        'Атомбезопасность, Координационный центр по созданию систем безопасности и управления (КЦ «Атомбезопасность»), ФГУП'
    ),
    array(
        'Атомзащитаинформ, Научно-технический и сертификационный центр по комплексной защите информации (Центр «Атомзащитаинформ»), АО'
    ),
    array(
        'Атомкомплект, АО '
    ),
    array(
        'Атомспецтранс, АО'
    ),
    array(
        'Атомстройэкспорт (Инжиниринговый дивизион Госкорпорации «Росатом»), АО'
    ),
    array(
        'Атомтехэкспорт (АО «АТЭК»), АО'
    ),
    array(
        'Атомтехэнерго, АО'
    ),
    array(
        'Атомтранс, АО'
    ),
    array(
        'Атомфлот, ФГУП'
    ),
    array(
        'Атомэнергомаш - Группа компаний (АО «Атомэнергомаш», АЭМ)'
    ),
    array(
        'Атомэнергопром, АО'
    ),
    array(
        'Атомэнергоремонт, АО'
    ),
    array(
        'АтомЭнергоСбыт, АО'
    ),
    array(
        'ВетроОГК, АО'
    ),
    array(
        'Всероссийский научно-исследовательский институт автоматики им. Н.Л. Духова (ВНИИА им. Н.Л. Духова), ФГУП'
    ),
    array(
        'ВНИИНМ, Всероссийский научно-исследовательский институт неорганических материалов имени академика А. А. Бочвара, АО '
    ),
    array(
        'ВНИПИПромтехнологии — Всероссийский проектно-изыскательский научно-исследовательский институт промышленной технологии, АО'
    ),
    array(
        'Всероссийский научно-исследовательский институт технической физики имени академика Е.И. Забабахина, Российский федеральный ядерный центр (РФЯЦ-ВНИИТФ им. Е.И. Забабахина), ФГУП'
    ),
    array(
        'Всероссийский научно-исследовательский институт экспериментальной физики, Российский федеральный ядерный центр (РФЯЦ-ВНИИЭФ), ФГУП'
    ),
    array(
        'Ведущий научно-исследовательский институт химической технологии (ВНИИХТ), АО'
    ),
    array(
        'Гидрографическое предприятие, ФГУП'
    ),
    array(
        'Гидропресс, Опытное конструкторское бюро, АО'
    ),
    array(
        'Гиредмет, Государственный научно-исследовательский и проектный институт редкометаллической промышленности, АО'
    ),
    array(
        'Горно-химический комбинат (ГХК), ФГУП'
    ),
    array(
        'Государственный специализированный проектный институт (ГСПИ), АО'
    ),
    array(
        'Гринатом, АО'
    ),
    array(
        ' «Далур», АО'
    ),
    array(
        'Дедал, Научно-производственный комплекс, АО'
    ),
    array(
        '«Дирекция единого заказа оборудования для АЭС» (АО «ДЕЗ»), АО'
    ),
    array(
        '«Машиностроительный завод «ЗиО-Подольск» («ЗиО-Подольск»), ПАО'
    ),
    array(
        'Зарубежатомэнергострой, Всероссийское производственное объединение (ВПО "ЗАЭС"), АО'
    ),
    array(
        'Изотоп, АО'
    ),
    array(
        'Изотоп, Всерегиональное объединение, АО'
    ),
    array(
        'Институт реакторных материалов, АО (АО "ИРМ")'
    ),
    array(
        'Корпоративная Академия Росатома, АНО'
    ),
    array(
        '«Лидер Консорциума «МЦИ МБИР», ООО'
    ),
    array(
        'Логистический центр ЯТЦ (АО «ЛЦ ЯТЦ»), АО'
    ),
    array(
        'Луч, Научно-исследовательский институт — Научно-производственное объединение (НИИ НПО «Луч»), ФГУП '
    ),
    array(
        'Машиностроительный завод, ПАО'
    ),
    array(
        'Маяк, Производственное объединение (ПО «Маяк»), ФГУП'
    ),
    array(
        'Международный центр по обогащению урана, АО'
    ),
    array(
        'Межотраслевой специальный учебный центр, Федеральное государственное учреждение (ФГУ МСУЦ)'
    ),
    array(
        'Наука и инновации, АО'
    ),
    array(
        'Научно-исследовательский институт атомных реакторов (НИИАР), государственный научный центр, АО'
    ),
    array(
        'Научно-исследовательский институт конструкционных материалов на основе графита (НИИграфит), АО'
    ),
    array(
        'Научно-исследовательский институт приборов (НИИП), АО'
    ),
    array(
        'Научно-исследовательский институт технической физики и автоматизации (НИИТФА), АО'
    ),
    array(
        'Научно-исследовательский институт электрофизической аппаратуры им. Д.В. Ефремова (НИИЭФА), АО'
    ),
    array(
        'Научно-исследовательский технологический институт им. А. П. Александрова (НИТИ), ФГУП'
    ),
    array(
        'Научно-исследовательский физико-химический институт им. Л.Я. Карпова (НИФХИ), АО'
    ),
    array(
        'Национальный оператор по обращению с радиоактивными отходами ("НО РАО"), ФГУП'
    ),
    array(
        'НИКИМТ Атомстрой, АО'
    ),
    array(
        'НИКИЭТ — Научно-исследовательский и конструкторский институт энерготехники имени Н. А. Доллежаля, АО'
    ),
    array(
        'НИЦ АЭС — Научно-испытательный центр оборудования атомных электростанций Всероссийского научно-исследовательского института по эксплуатации атомных электростанций, АО '
    ),
    array(
        'НоваВинд, АО'
    ),
    array(
        'Новосибирский завод химконцентратов (ПАО «НЗХК»), ПАО'
    ),
    array(
        'Новые композиционные материалы, ООО'
    ),
    array(
        'Обеспечение РФЯЦ-ВНИИЭФ, АО'
    ),
    array(
        'Объединённая теплоэнергетическая компания (ОТЭК), АО'
    ),
    array(
        'ОКБМ Африкантов — Опытное конструкторское бюро машиностроения им. И. И. Африкантова, АО'
    ),
    array(
        'Опытно-демонстрационный центр вывода из эксплуатации уран-графитовых ядерных реакторов, АО (АО «ОДЦ УГР»)'
    ),
    array(
        'Опытное конструкторско-технологическое бюро по разработке современных технологий и производству изделий из стекла, АО'
    ),
    array(
        'Отраслевой центр капитального строительства Росатома (ОЦКС Росатома), Частное учреждение'
    ),
    array(
        '«Приаргунское производственное горно-химическое объединение имени Е.П. Славского», ПАО'
    ),
    array(
        '«ПСР», АО'
    ),
    array(
        'Приборостроительный завод, ФГУП'
    ),
    array(
        'Прорыв (АО «Прорыв»), АО'
    ),
    array(
        'Радиевый институт имени В.Г. Хлопина, АО'
    ),
    array(
        'РАДОН, Объединенный эколого-технологический и научно-исследовательский центр по обезвреживанию РАО и охране окружающей среды, ФГУП'
    ),
    array(
        'РАСУ, АО'
    ),
    array(
        'Росэнергоатом, Концерн, АО (АО «Концерн Росэнергоатом»)'
    ),
    array(
        'РСК, Разделительно-сублиматный комплекс, Объединенная компания, АО'
    ),
    array(
        'Русатом Гринвэй (АО "РУСАТОМ ГРИНВЭЙ"), АО'
    ),
    array(
        'Русатом Инфраструктурные решения, АО'
    ),
    array(
        'Русатом Карго, ООО'
    ),
    array(
        'Русатом Международная Сеть, ЧУ'
    ),
    array(
        'Русатом Оверсиз (АО РАОС), АО'
    ),
    array(
        'Русатом растворные реакторы (АО "Русреактор"), АО'
    ),
    array(
        'Русатом Сервис, АО'
    ),
    array(
        'Русатом Хэлскеа, АО'
    ),
    array(
        'Русатом Энерго Интернешнл, АО'
    ),
    array(
        'Русская газовая центрифуга, АО'
    ),
    array(
        'Русский сверхпроводник, АО'
    ),
    array(
        'Сангтудинская ГЭС-1, ОАО'
    ),
    array(
        'Санкт-Петербургский "ИЗОТОП", АО'
    ),
    array(
        'СвердНИИхиммаш — Свердловский научно-исследовательский институт химического машиностроения, АО'
    ),
    array(
        'Север, Производственное объединение (ПО «Север»), ФГУП'
    ),
    array(
        'Сибирский химический комбинат (СХК), АО'
    ),
    array(
        'Системы мониторинга «Беркут» (ООО «СМБ»), ООО'
    ),
    array(
        'Ситуационно-кризисный центр Росатома, ЧУ'
    ),
    array(
        'Специализированный научно-исследовательский институт приборостроения (СНИИП), АО'
    ),
    array(
        'Старт, производственное объединение (ПО «Старт» им. М.В. Проценко), АО ФНПЦ'
    ),
    array(
        ' Техснабэкспорт, АО'
    ),
    array(
        'ТЕНЕКС-Сервис (АО "ТЕНЕКС-Сервис"), АО'
    ),
    array(
        'ТВЭЛ, АО '
    ),
    array(
        'Техническая академия Росатома, Автономная некоммерческая организация дополнительного профессионального образования (АНО ДПО)'
    ),
    array(
        'Технопарк-Технология, АО'
    ),
    array(
        'Техэнерго-Электрохимприбор (Техэнерго-ЭХП), ООО'
    ),
    array(
        'Точмаш, Владимирское производственное объединение (ВПО «Точмаш»), АО'
    ),
    array(
        'Троицкий институт инновационных и термоядерных исследований, Государственный научный центр Российской Федерации (ГНЦ РФ ТРИНИТИ), АО'
    ),
    array(
        'Турбинные технологии ААЭМ (ООО «ААЭМ»), ООО'
    ),
    array(
        'Управление административными зданиями (УАЗ), АО'
    ),
    array(
        'Уральский электромеханический завод, АО'
    ),
    array(
        'Уральский электрохимический комбинат (УЭХК), АО'
    ),
    array(
        'Урановый холдинг «АРМЗ» (АО «Атомредметзолото»), АО'
    ),
    array(
        '«Федеральный экологический оператор», ФГУП'
    ),
    array(
        'Физико-энергетический институт имени А.И. Лейпунского, Государственный научный центр Российской Федерации (ГНЦ РФ ФЭИ), АО'
    ),
    array(
        '«Хиагда», АО'
    ),
    array(
        'АО «НПО «ЦНИИТМАШ»'
    ),
    array(
        'Центр управления непрофильными активами атомной отрасли («ЦентрАтом»), АО'
    ),
    array(
        'Центр энергоэффективности ИНТЕР РАО ЕЭС, ООО'
    ),
    array(
        'Центральное конструкторское бюро машиностроения (ЦКБМ), АО '
    ),
    array(
        'Цифрум, ЧУ'
    ),
    array(
        'НПО «Центротех», ООО'
    ),
    array(
        'Чепецкий механический завод (АО «ЧМЗ»), АО'
    ),
    array(
        '«Экоальянс», ООО'
    ),
    array(
        'ЭГМК-Проект, АО'
    ),
    array(
        'Экспедиция №2, АО'
    ),
    array(
        'Электрохимический завод (ЭХЗ), ПО, АО'
    ),
    array(
        'Электрохимприбор, комбинат, ФГУП'
    ),
    array(
        'Элерон, Специальное научно-производственное объединение («ФЦНИВТ СНПО «Элерон»), АО '
    ),
    array(
        'Эльконский горно-металлургический комбинат, АО'
    ),
    array(
        'Энергоизыскания, Санкт-Петербургский научно-исследовательский институт (СПб НИИИ ЭИЗ), АО'
    ),
    array(
        'Энергоспецмонтаж, ПАО'
    ),
    array(
        'Ядерно-физические исследования (НТЦ «ЯФИ»), АО'
    ),
    array(
        'ARAKO spol. s r.o.'
    ),
    array(
        'Ganz EEG Kft'
    ),
    array(
        'UMATEX Group'
    ),
    array(
        'Uranium One'
    )
);
$array1 = array();
for($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        #echo $array[$i][$j];
        array_push($array1, $array[$i][$j]);
    }
}
/*
for($i = 0; $i < count($array); $i++){
$query = 'INSERT INTO enterprises(subdivision, id_sub) VALUES (?,?)';
$stmt = $connection->prepare($query);
$stmt->execute([$array1[$i],$i+1]);
}*/