@extends('layouts.app')

@section('title', 'Техподдержка')

@section('content')
    <main>
        <div class="b-content__layout">
            <div class="b-content__container">
                <div class="b-content__container">
                    <div class="b-breadcrumbs">
                        <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                        <a class="b-breadcrumbs__item" href="{{ route('home.support') }}">Техподдержка</a>
                    </div>
                </div>
                <div class="b-content__wrapper b-content__wrapper--md">
                    <div class="b-tipography">
                        <div class="b-column">
                            <div class="b-column__item b-column__item--large">
                                <h1 class="text-center-mobile">Поддержка</h1>
                                <p>Несмотря на то, что наша поддержка работает круглосуточно и всегда готова
                                    предоставить вам ответ на любой вопрос касательно работы магазина, мы советуем
                                    сперва пробежаться взглядом по старому доброму списку часто задаваемых вопросов.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="b-accardeon b-accardeon--text js-accordeon-container">
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    При покупке в вашем магазине я покупаю игру или
                                    шанс её получения? И есть ли у вас рандом?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>При покупке любого товара в нашем магазине вы получаете именно ту игру или
                                    дополнение, которое покупаете. Рандома у нас на сайте больше нет. Мы отказались от
                                    такого азартного способа покупки, чтобы повысить доверие покупателей к нашему
                                    магазину. Если вы не знаете, в какую игру поиграть, то можете воспользоваться
                                    разделом рекомендаций.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я хочу игру бесплатно. У вас есть такие?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>Нет, никаких бесплатных ключей. К сожалению, мы вынуждены брать за них деньги. Ох уж
                                    этот капитализм… Но в наших соцсетях каждую неделю проходят конкурсы, в которых вы
                                    можете выиграть какую-нибудь игру!</p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я хотел бы предложить вам сотрудничество. Как это сделать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>Напишите на нашу почту для коммерческих предложений <a
                                        href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                        data-cfemail="650804170e00110c0b02250204070016110a17004b17104b">[email&nbsp;protected]</a>
                                    Учтите, что мы физически не можем ответить на каждое письмо, поэтому, если вы не
                                    получили ответ в течение нескольких дней, то, скорее всего, ваше предложение нас не
                                    заинтересовало.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Сколько длятся скидки в вашем магазине? Как это узнать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>Скидки в нашем магазине длятся круглый год. Меняется лишь цена, которая зависит от
                                    стоимости закупки ключей и спроса покупателей. Мы держим цены минимальными так
                                    долго, как можем. Заранее предсказать повышение стоимости невозможно.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Меня просят авторизоваться, но я не регистрировался у вас. Что делать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>Ранее на нашем сайте можно было совершить покупку без авторизации, а данные для входа
                                    приходили вместе с ключом на указанную почту. Если писем от нашего магазина вы не
                                    получали, то воспользуйтесь функцией восстановления пароля или зарегистрируйте новый
                                    аккаунт на другую почту.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я купил у вас игру, но ключ не получил. Что делать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>Если вы оформили не предзаказ, то при покупке ключ моментально приходит в <a
                                        href="https://gabestore.ru/profile/orders" target="_blank" class="b-definition">личный
                                        кабинет</a>. Если ключа в нем не окажется, обратитесь в нашу круглосуточную <a
                                        href="https://vk.me/gabestore" target="_blank">поддержку</a>. Мы обязательно
                                    разберемся в ситуации.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Мне надоела ваша рассылка на почту, как от нее отписаться?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>Очень жаль, что мы докучаем вам. Кнопка «Отписаться» находится на последней строке
                                    каждой рассылки. Нажмите её, и мы больше не будем присылать вам рекламу.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я оформил предзаказ, но не могу найти ключ. Где его искать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Вы приобретаете предзаказ, ключ приходит в день официального релиза игры. Чтобы его
                                    получить, зайдите в <a href="https://gabestore.ru/profile/orders" target="_blank"
                                                           class="b-definition">раздел заказов</a> в личном кабинете,
                                    выберите игру и нажмите «Получить ключ». Ключи до релиза мы не высылаем по причине
                                    того, что у нас самих их ещё нет. Мы делаем предварительный заказ у издателя, и он
                                    нам за несколько часов до релиза или в момент выхода игры присылает ключи из первой
                                    партии, которые и считаются предзаказом.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я оформил предзаказ. Получу ли я бонусы, если активирую ключ уже после релиза?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Разумеется, все заявленные бонусы предзаказа будут получены. При покупке вы получаете
                                    ключи «первого дня», и они будут с бонусами предзаказа независимо от даты
                                    активации.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я нашел сайт с названием, похожим на ваш магазин. Это тоже ваш сайт?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    У нас существует только один домен — GabeStore.ru. Все остальные сайты с похожими
                                    названиями не имеют к нам никакого отношения.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я купил ключ, а мне пришла совершенно другая игра. Что делать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    У нас на сайте такая ситуация практически невозможна. Поэтому зайдите в историю
                                    браузера и проверьте адрес магазина, в котором вы совершали покупку. У нас
                                    существует только один домен — GabeStore.ru. Все остальные сайты с похожими
                                    названиями не имеют к нам никакого отношения. Если же вы уверены, что покупка
                                    совершена именно у нас, то обратитесь в нашу круглосуточную <a
                                        href="https://vk.me/gabestore" target="_blank">поддержку</a>. Мы обязательно
                                    разберемся в ситуации.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я купил у вас игру, а при активации мне пишет, что ключ недействителен. Что делать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    На странице каждого товара, а также в письме с ключом есть инструкция по активации.
                                    Проверьте платформу, на которой вы активируете ключ. Также попробуйте ввести ключ
                                    вручную. Если проблема всё ещё актуальна, то обратитесь в нашу круглосуточную <a
                                        href="https://vk.me/gabestore" target="_blank">поддержку</a>. Мы обязательно
                                    разберемся в ситуации.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я купил у вас игру, но не могу активировать её
                                    из-за регионального ограничения. Что делать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Каждый ключ имеет своё региональное ограничение, которое указано на странице товара в
                                    пункте «Регион активации». Если вы приобрели ключ, который не подходит к вашему
                                    региону, то вы можете попробовать обойти данное ограничение через VPN-сервисы или
                                    попросить друга произвести активацию за вас. Однако ответственность за эти методы мы
                                    не несем, как и не гарантируем 100% успеха активации. Сейчас Steam, как и многие
                                    другие лаунчеры, ужесточают политику регионального ограничения, и есть большой шанс
                                    того, что даже после успешной активации ключа игра вне указанной страны попросту не
                                    запустится.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я купил игру с активацией в Ubisoft Connect, Social
                                    Club и др., смогу ли я играть с другом, который купил ее в Steam?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Да, играть вместе вы сможете, так как Steam технически продаёт не игру, а доступ к
                                    ней. При запуске игры через Steam ваши друзья точно так же, как и вы, будут играть
                                    через Ubisoft Connect, Origin или RockStar Launcher.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Где можно найти промокод на дополнительную скидку?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Мы ставим самые низкие цены из возможных, поэтому никаких промокодов на
                                    дополнительные скидки у нас нет. Вы можете купить любую игру у нас на сайте и быть
                                    уверенными, что приобрели игру по самой низкой в данный момент цене в нашем
                                    магазине.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я хочу вернуть или обменять купленную игру. Как мне это сделать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Мы возвращаем деньги только в том случае, если ключ нерабочий, что бывает крайне
                                    редко, или если это предзаказ, когда ключ ещё не был получен. Если игра не подошла,
                                    не запустилась по техническим причинам или просто куплена по ошибке, то возврат или
                                    обмен невозможен. Это указано в нашем <a href="https://gabestore.ru/documents/offer"
                                                                             target="_blank" class="b-definition">лицензионном
                                        договоре-оферте</a>.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я хочу вернуть средства за предзаказ купленного
                                    товара или переоформить заказ на другое издание. Как мне это сделать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Вернуть средства за предзаказ любой игры или дополнения можно в любой момент до
                                    релиза игры или получения ключа. Чтобы это сделать, напишите в нашу круглосуточную
                                    <a href="https://vk.me/gabestore" target="_blank">поддержку</a>, почему вы решили
                                    отменить предзаказ. После этого мы расскажем, что делать дальше.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Что вы продаете, и как я получу свою купленную игру?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Сразу отметим, что мы не продаем аккаунты других людей или физические копии. Мы
                                    магазин цифровых ключей от PC-игр, также у нас в продаже можно найти карточки
                                    пополнения и продления подписок для консолей PlayStation и Xbox. Покупая ключ, вы
                                    получаете его моментально на указанную в личном кабинете почту, а также в сам личный
                                    кабинет. Далее вы активируете ключ по инструкции, которая есть на странице каждого
                                    товара, она также приходит вам вместе с ключом. После активации загрузка игры
                                    происходит с лаунчера, в котором вы производили активацию.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я не могу найти нужную мне игру. Что делать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Воспользуйтесь поиском и проверьте правильное написание названия игры и отсутствия
                                    пробелов или других символов, которые могут помешать поисковику. Если вашей игры всё
                                    ещё нет в поиске, это значит, что такого товара в нашем магазине нет в наличии. К
                                    сожалению, у нас нет возможности добавить абсолютно все игры, т. к. некоторые ключи
                                    просто не продают независимым магазинам, и их можно приобрести только напрямую на
                                    платформе игры.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Как мне совершить покупку?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Выбираете товар, добавляете его в корзину и переходите к ней для проверки заказа и
                                    оформления. Далее заполняете информацию о своей карте или кошельке и нажимаете
                                    «Оформить заказ».
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Могу ли я купленный ключ подарить другу или активировать позднее?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Да, после покупки вы можете подарить или передать купленный ключ кому угодно. Если вы
                                    хотите оформить покупку именно в виде подарка, то можете создать поздравительную
                                    открытку с ключом в вашем личном кабинете. Купите нужную игру, перейдите в раздел <a
                                        href="https://gabestore.ru/profile/orders" target="_blank" class="b-definition">«Заказы»</a>
                                    и нажмите на кнопку «Подарить». Оформите открытку, скопируйте ссылку и отправьте её
                                    нужному человеку. Ключи не ограничены временем активации. Вы или ваш друг сможете
                                    активировать ключ в любой момент.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я хочу сделать покупку, но не знаю, во что хочу поиграть. Вы мне можете посоветовать хорошую игру?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Да, конечно, у нас на сайте есть подборки с отличными играми. Или вы можете написать
                                    в нашу круглосуточную <a href="https://vk.me/gabestore"
                                                             target="_blank">поддержку</a>, мы подберем вам хорошую игру
                                    с учетом ваших предпочтений и пожеланий.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Какие у вас гарантии?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Гарантии — это кодекс РФ, который защищает как вас, так и нас. В случае бракованных
                                    или нерабочих ключей мы заменяем ключ или возвращаем средства. Любая необходимая
                                    информация о нашей компании есть в <a href="https://gabestore.ru/documents"
                                                                          target="_blank" class="b-definition">соответствующем
                                        разделе</a>. Если вы сомневаетесь, то можете почитать отзывы о нас на <a
                                        href="https://market.yandex.ru/shop--geibstor/486046/reviews" target="_blank"
                                        class="b-definition">«Яндекс.Маркете»</a> или в качестве первой покупки выбрать
                                    игру с минимальной стоимостью.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Почему у вас такие низкие цены?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Дело в том, что мы закупаем ключи на акциях у партнеров и в большом количестве, т. е.
                                    оптом — это также снижает стоимость. Помимо этого, мы берем себе лишь 5-10% комиссии
                                    с проданного ключа. Всё это позволяет делать цены такими низкими и радовать наших
                                    покупателей высокими скидками круглый год.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я купил игру, но не понимаю, что делать дальше. Где её активировать?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Инструкция по активации есть на странице каждого товара, она также приходит на почту
                                    вместе с ключом. Ознакомьтесь с ней и следуйте её пунктам. Если возникли проблемы, в
                                    таком случае обратитесь в нашу круглосуточную <a href="https://vk.me/gabestore"
                                                                                     target="_blank">поддержку</a>, и мы
                                    вам поможем.
                                </p>
                            </div>
                        </div>
                        <div class="b-accardeon__item">
                            <div class="b-accardeon__item-head js-accordeon-open">
                                <div class="b-accardeon__item-title">
                                    Я совершил у вас покупку и мне понравился ваш магазин. Как мне оставить отзыв о вас?
                                </div>
                            </div>
                            <div class="b-accardeon__item-body" style="display:none;">
                                <p>
                                    Очень рады, что мы смогли вас порадовать. Оставить отзыв о нас можно на <a
                                        href="https://market.yandex.ru/shop--geibstor/486046/reviews" target="_blank"
                                        class="b-definition">«Яндекс.Маркете»</a> и <a
                                        href="https://otzovik.com/reviews/gabestore_ru-internet-magazin_licenzionnih_igr_i_klyuchey_aktivacii_dlya_steam_origin_i_uplay/"
                                        target="_blank" class="b-definition">«Отзовике»</a>. Также вы можете написать о
                                    своих впечатлениях в комментариях под купленным товаром. Будем рады любым словам о
                                    нашем магазине. Спасибо!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="b-column b-column">
                        <div class="b-column__item b-column__item--half">
                            <div class="b-tipography">
                                <div class="h4">Не нашли ответа?</div>
                                <p>Напишите нам на почту или во «ВКонтакте».<br> Мы обязательно вам поможем.</p>
                                <a href="https://vk.me/gabestore" target="_blank">
                                    <div class="btn btn--primary btn--small">Написать во «ВКонтакте»</div>
                                </a>
                            </div>
                        </div>
                        <div class="b-column__item b-column__item--half">
                            <div class="b-tipography">
                                <p>
                                    <a class="h4"
                                      href="/cdn-cgi/l/email-protection#b3c0c6c3c3dcc1c7f3d4d2d1d6c0c7dcc1d69dc1c6"
                                      target="_blank">
                                        <span class="__cf_email__"
                                              data-cfemail="f6a5a3a6a6b9a4a2b6b1b7b4b3a5a2b9a4b3d8a4a3">[email&nbsp;protected]</span>
                                    </a>
                                </p>
                                <p>Только техподдержка</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
