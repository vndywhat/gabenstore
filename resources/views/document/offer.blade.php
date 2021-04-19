@extends('layouts.app')

@section('title', 'Правовая информация')

@section('content')
    <main>
        <div class="b-content__layout">
            <div class="b-content__container">
                <div class="b-content__container">
                    <div class="b-breadcrumbs">
                        <a class="b-breadcrumbs__item" href="{{ route('home.index') }}">Главная</a>
                        <a class="b-breadcrumbs__item" href="{{ route('document.index') }}">Правовая информация</a>
                        <a class="b-breadcrumbs__item" href="{{ route('document.offer') }}">Лицензионный договор-оферта</a>
                    </div>
                </div>
                <div class="b-content__wrapper b-content__wrapper--md">
                    <div class="b-tipography">
                        <div class="b-column">
                            <p></p>
                            <div class="b-tipography-">
                                <p class="b-tipography__subtitle">
                                    <b>ЛИЦЕНЗИОННЫЙ ДОГОВОР-ОФЕРТА</b>
                                </p>
                            </div>
                            <p></p>
                            <p></p>
                            <div class="b-tipography">
                                <p>Настоящий Договор является публичным лицензионным договором-офертой (предложением) Общества с ограниченной ответственностью «Гейбстор» (далее — Компания) с физическим лицом (далее — Пользователь), которое примет настоящее предложение на указанных ниже условиях.</p>
                                <p>Текст настоящего Лицензионного договора-оферты (далее по тексту — Договор/Оферта) расположен по адресу: <a href="{{ route('document.offer') }}">{{ route('document.offer') }}</a>.</p>
                                <p><b>1. Понятия и определения</b></p>
                                <p>1.1. <b>Компания</b> — общество с ограниченной ответственностью «Гейбстор», обладающее правами на распространение Лицензионных ключей среди Пользователей. Компания не обладает исключительным правом на результаты интеллектуальной деятельности и самостоятельно не предоставляет Пользователю никак лицензионных прав на распространяемые Компьютерные игры.</p>
                                <p>1.2. <b>Пользователь</b> — физическое лицо, имеющее Личный кабинет на Сайте, достигшее возраста 18 лет или 14 лет, получившее согласие своих законных представителей (родителей, опекунов, усыновителей) на принятие условий настоящей Оферты и/или на распоряжение личными денежными средствами в целях, установленных настоящей Офертой, совершившее акцепт настоящей Оферты.</p>
                                <p>1.3. <b>Сайт Gabestore</b> (далее — Сайт) — совокупность автоматизированных информационных данных, доступных в сети Интернет по сетевому адресу в домене: <a href="{{ route('home.index') }}">{{ route('home.index') }}</a>.</p>
                                <p>1.4. <b>Регистрация</b> — заполнение учетных данных (email, пароль) в регистрационной форме на Сайте. По результату регистрации автоматически создается личная учетная запись Пользователя (Личный кабинет) для осуществления доступа к услугам Сайта.</p>
                                <p>1.5. <b>Личный кабинет</b> — совокупность защищенных техническими средствами страниц Сайта, представляющих собой персональный раздел Пользователя на Сайте, к которому Пользователь получает доступ после прохождения регистрации и/или авторизации на Сайте. Личный кабинет предназначен для заключения, исполнения, прекращения гражданско-правовых сделок с Компанией, использования дополнительных функциональных возможностей Сайта, просмотра и управления доступными функциональными возможностями Сайта, получения скидок на сервис, направления в адрес Компании сообщений, уведомлений, а также осуществления иных действий, предусмотренных явными функциями Личного кабинета.</p>
                                <p>1.6. <b>Компьютерная игра</b> — программа для ЭВМ, служащая для организации игрового процесса и содержащая текстовую, цифровую, графическую, звуковую, музыкальную, видео, фото и иную информацию, включающую объекты авторского права и смежных прав. Описание Компьютерной игры, порядок и условия ее активации, а также системные требования, предъявляемые к ЭВМ, необходимые для ее Инсталляции и воспроизведения, содержатся на Сайте в разделе каждой конкретной выбранной Пользователем Компьютерной игры.</p>
                                <p>1.7. <b>Инсталляция</b> — установка Компьютерной игры (запись всех необходимых для ее функционирования файлов в соответствующих местах файловой системы ЭВМ), выполняемая особой программой (пакетным менеджером), присутствующей в операционной системе ЭВМ.</p>
                                <p>1.8. <b>Дистрибутив</b> — способ хранения и передачи Компьютерной игры, представляющий собой набор файлов и компонентов программной защиты для ее начальной установки.</p>
                                <p>1.9. <b>Загрузка</b> — запись Компьютерной игры в память ЭВМ Пользователя, осуществляемая в процессе передачи данных через компьютерную сеть Интернет.</p>
                                <p>1.10. <b>Лицензионный ключ</b> — уникальный набор символов, позволяющий правообладателю идентифицировать экземпляр Компьютерной игры и являющийся средством защиты Компьютерной игры от неправомерного использования.</p>
                                <p>1.11. <b>Сервис активации</b> — онлайн-сервис, расположенный в сети Интернет, на котором производится активация Лицензионного ключа с целью приобретения Компьютерной игры.</p>
                                <p>1.12. <b>Предзаказ</b> — изъявление намерения Пользователя, подтвержденное оплатой, приобрести Лицензионный ключ от Компьютерной игры до даты официального опубликования (выхода) Компьютерной игры ее правообладателем.</p>
                                <p><b>2. Предмет Договора</b></p>
                                <p>2.1. С момента акцепта Пользователем настоящей Оферты Компания предоставляет Пользователю неисключительную лицензию на воспроизведение каждой Компьютерной игры, выбранной Пользователем при Заказе, путем предоставления Лицензионного ключа.</p>
                                <p>2.2. Пользователь уведомлен, что для активации Лицензионного ключа может требоваться Инсталляция дополнительного программного обеспечения, регистрация на Сайте правообладателя (лицензиара) и/или принятие условий лицензионного соглашения правообладателя с конечным пользователем.</p>
                                <p>2.3. Пользователь не вправе передавать право использования Лицензионного ключа. Исключение установлено в пп. 5.4.2. Оферты.</p>
                                <p>2.4. По настоящему Договору Компания предоставляет Пользователю право использования Лицензионного ключа в соответствии с его прямым назначением.</p>
                                <p><b>3. Порядок регистрации</b></p>
                                <p>3.1. Регистрация на Сайте осуществляется Пользователем своими силами путем заполнения электронной формы, размещенной на Сайте.</p>
                                <p>3.2. Регистрируясь на Сайте, Пользователь подтверждает, что он ознакомлен с Политикой конфиденциальности Gabestore, а также с условиями настоящего Договора.</p>
                                <p>3.3. По итогу регистрации на Сайте Пользователь получает доступ к Личному кабинету, содержащему сведения о Пользователе, а также о совершенных им заказах и предзаказах.</p>
                                <p>3.4. Для доступа к Личному кабинету Пользователь должен ввести идентификатор пользователя (логин) и пароль. Пользователь обязан хранить данные от своего Личного кабинета в тайне. Запрещается передавать эту информацию третьим лицам. Пароль доступа к Личному кабинету является аналогом собственноручной подписи Пользователя и служит для идентификации Пользователя при исполнении Договора.</p>
                                <p><b>4. Порядок предоставления Лицензионного ключа</b></p>
                                <p>4.1. Приобретение Лицензионного ключа осуществляется Пользователем самостоятельно посредством акцепта Оферты. Акцепт настоящей Оферты представляет собой перечисления денежных средств на расчетный счет Компании.</p>
                                <p>4.2. После Акцепта Оферты Компания передает Пользователю Лицензионный ключ посредством его размещения в Личном кабинете Пользователя в разделе «Заказы» и направления на электронную почту Пользователя, на которую он зарегистрировал Личный кабинет на Сайте.</p>
                                <p>4.3. Предзаказ Лицензионного ключа осуществляется в соответствии п. 4.1. – 4.2. настоящего Договора.</p>
                                <p>4.3.1. Срок передачи Лицензионного ключа — в течение 3 рабочих дней с даты официального опубликования (выхода) Компьютерной игры ее правообладателем.</p>
                                <p>4.4. Возврат:</p>
                                <p>4.4.1. Пользователь вправе требовать возврата денежных средств за оплаченный Лицензионный ключ путем направления заявления на возврат в письменном виде на электронную почту Компании — <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="63101613130c1117230402010610170c11064d11164d">[email&nbsp;protected]</a> Электронное письмо должно содержать тему «Возврат» или «Заявление на возврат».</p>
                                <p>4.4.2. Пользователь не вправе требовать возврата денежных средств за заказанный и/или предзаказанный Лицензионный ключ после получения при условии, что он надлежащего качества.</p>
                                <p>4.4.3. Под Лицензионным ключом надлежащего качества понимается Лицензионный ключ, который возможно использовать по назначению, то есть для активации Компьютерной игры, защищенной от неправомерного использования третьими лицами.</p>
                                <p>4.4.4. Возврат денежных средств за Лицензионный ключ осуществляется Компанией в срок не позднее 10 (десяти) календарных дней с момента получения заявления Пользователя на возврат денежных средств. Моментом возврата считается момент списания денежных средств с расчетного счета Компании. Срок зачисления денежных средств на банковский счет Пользователя зависит от условий перевода, устанавливаемых платежной системой.</p>
                                <p><b>5. Права и обязанности сторон</b></p>
                                <p>5.1. Компания обязуется:</p>
                                <p>5.1.1. Предоставить Пользователю Лицензионный ключ в течение одного календарного дня с момента оплаты Пользователем Лицензионного ключа.</p>
                                <p>5.1.2. Предоставить Пользователю Лицензионный ключ, приобретенный по Предзаказу, в соответствии со сроком, указанным на Сайте. Срок предоставления Лицензионного ключа, приобретенного по Предзаказу, может быть отложен во времени до даты официального опубликования (выхода) Компьютерной игры ее правообладателем.</p>
                                <p>5.1.3. Соблюдать условия конфиденциальности.</p>
                                <p>5.2. Компания имеет право:</p>
                                <p>5.2.1. Временно приостановить доступ к Личному кабинету Пользователя по техническим, технологическим или иным причинам, препятствующим предоставлению доступа к Личному кабинету Пользователя, на время устранения таких причин.</p>
                                <p>5.2.2. Приостановить действие настоящего Договора и(или) расторгнуть Договор в одностороннем внесудебном порядке путем уведомления Пользователя в случаях нарушения Пользователем обязательств и(или) гарантий, принятых в соответствии с Договором, наличия у Компании информации, поступившей от третьих лиц и(или) государственных органов Российской Федерации о приобритении Пользователем Лицензионных ключей для целей, связанных с предпринимательской деятельностью, а также в случае нарушения Пользователем принципов деловой этики общения, в частности использования ненормативной лексики при общении с сотрудниками (представителями) Компании, а также в иных случаях по своему усмотрению.</p>
                                <p>5.3. Пользователь обязуется:</p>
                                <p>5.3.1. Самостоятельно изучить текст настоящей Оферты, размещенной по адресу: <a href="{{ route('document.offer') }}">{{ route('document.offer') }}</a>.</p>
                                <p>5.3.2. Оплачивать Лицензионное вознаграждение Компании в соответствии с условиями настоящего Договора.</p>
                                <p>5.3.3. Прежде, чем пробрести Лицензионный ключ, ознакомиться с описанием Компьютерной игры, для активации которой приобретается Лицензионный ключ, порядком его использования на Сервисе акцивации, а также системными требованиями, предъявляемыми к ЭВМ, необходимыми для Инсталляции и воспроизведения Компьютерной игры, содержащимся на Сайте в разделе каждой конкретной выбранной Пользователем Компьютерной игры.</p>
                                <p>5.3.4. Не передавать третьим лицам свой логин и пароль от Личного кабинета. Все действия, осуществленные на Сайте с использованием логина и пароля Пользователя, считаются осуществленными Пользователем. Компания не несет ответственности за несанкционированное использование регистрационных данных Пользователя третьими лицами.</p>
                                <p>5.3.5. Не лицензировать, сублицензировать, перепродавать, передавать, декомпилировать, дизассемблировать, отчуждать, распространять или использовать Сайт, а также Лицензионные ключи способами, не предусмотренными Офертой.</p>
                                <p>5.3.6. В случае неполучения Лицензионного ключа проинформировать об этом Компанию в срок не позднее 7 (семи) дней с момента оплаты Лицензионного вознаграждения. В случае, если в указанный срок Компания не получит от Пользователя уведомления о неполучении Лицензионного ключа, обязательства Компании по передаче Лицензионных ключей Пользователю считаются исполненными надлежащим образом и в полном объеме.</p>
                                <p>5.3.7. Ознакомиться с условиями активации Лицензионного ключа, указанными в Карточке Игры до момента оплаты Лицензионного вознаграждения, в том числе с условиями Лицензиара:</p>
                                <p>АО «Бука», размещенными на сайте: https://shop.buka.ru/lic.html;</p>
                                <p>OOО «Эназа Игры», размещенными на сайте: https://gama-gama.ru.</p>
                                <p>5.4. Пользователь имеет право:</p>
                                <p>5.4.1. Обращаться к Компании за получением дополнительной информацией о Компьютерной игре.</p>
                                <p>5.4.2. Подарить другому физическому лицу приобретенный и неактивированный Лицензионный ключ.</p>
                                <p><b>6. Цена Договора и порядок расчетов</b></p>
                                <p>6.1. Стоимость Лицензионного ключа определяется на Сайте. Компания вправе в одностороннем порядке изменять его стоимость путем размещения новых цен на Сайте.</p>
                                <p>6.2. Ценой Договора является лицензионное вознаграждение, которое оплачивается Пользователем на условиях предоплаты любым из способов, обозначенных на Сайте. Лицензионное вознаграждение не облагается НДС на основании пп. 26 п. 2 ст. 149 Налогового кодекса Российской Федерации.</p>
                                <p>6.3. Моментом оплаты Пользователем по Договору считается поступление денежных средств на расчетный счет Компании.</p>
                                <p>6.4. Все банковские либо иные комиссионные платежи, связанные с оплатой стоимости предоставления Лицензионных ключей Компьютерных игр, оплачиваются Пользователем.</p>
                                <p><b>7. Гарантии и ответственность Сторон</b></p>
                                <p>7.1. Компания гарантирует, что она обладает всеми законными основаниями для выполнения своих обязательств в рамках настоящей Оферты.</p>
                                <p>7.2. Пользователь гарантирует, что ни при каких обстоятельствах он не будет осуществлять обратное проектирование, декомпиляцию и прочие преобразования Лицензионных ключей, модифицировать Лицензионные ключи.</p>
                                <p>7.3. Пользователь гарантирует, что он приобретает Лицензионные ключи для использования в личных целях.</p>
                                <p>7.4. Компания не несет ответственности за прямой и/или косвенный ущерб, причиненный Пользователю, а также не возмещает Пользователю убытки (включая упущенную выгоду), понесенные Пользователем в результате ненадлежащего качества каналов связи общего пользования, политики обмена трафиком между провайдерами, ненадлежащего функционирования сети Интернет или за качество линий связи, не имеющих отношения к собственным ресурсам Компании, и за их доступность для Пользователя.</p>
                                <p>7.5. Компания не несет ответственности, а также не возмещает Пользователю убытки, понесенные Пользователем, в результате:</p>
                                <p>7.5.1. несанкционированного вмешательства Пользователя и/или третьих лиц по требованию Пользователя в исходный код или программные компоненты Компьютерной игры или Лицензионного ключа;</p>
                                <p>7.5.2. указания Пользователем недостоверных сведений при регистрации на Сайте;</p>
                                <p>7.5.3. блокировки Лицензионного ключа правообладателем и/или лицензиаром;</p>
                                <p>7.5.4. выявления недостатков в Компьютерных играх, выявленных после получения Пользователем Лицензионного ключа.</p>
                                <p>7.6. Стороны освобождаются от ответственности за частичное или полное неисполнение обязательств по настоящему Договору, если это неисполнение явилось следствием обстоятельств непреодолимой силы, возникших после заключения Договора в результате событий чрезвычайного характера, которые стороны не могли предвидеть и предотвратить ра­зумными мерами. К обстоятельствам непреодолимой силы относятся события, на которые стороны не могут оказывать влияние и за возникновение которых не несут ответственности: землетрясение, наводнение, пожар, забастовки, насильственные или военные действия любого характера, решения органов государственной власти, препятствующие выполнению настоящего Договора.</p>
                                <p>7.7. По всем вопросам, не урегулированным настоящей Офертой, а также при разрешении споров, возникших в процессе его исполнения, Стороны руководствуются действующим законодательством РФ. Досудебный порядок урегулирования споров является обязательным для Сторон:</p>
                                <p>7.7.1. Претензия направляется посредством электронной почты.</p>
                                <p>7.7.2. Сторона, получившая претензию, обязана направить мотивированный ответ на нее другой Стороне в срок не позднее 5 (пяти) дней с момента получения претензии.</p>
                                <p>7.7.3. В случае не достижения согласия спор передается на рассмотрение в судебные органы в соответствии с законодательством Российской Федерации.</p>
                                <p>7.8. Пользователь гарантирует, что до акцепта настоящей Оферты он ознакомился с описанием программы, требованиям к системно-аппаратной платформе, условиями доставки и иной информацией, относящейся к Лицензионным ключам и предоставлению прав на них, размещенной на Сайте.</p>
                                <p><b>8. Заключительные положения</b></p>
                                <p>8.1. Настоящий Договор является бессрочным.</p>
                                <p>8.2. Стороны признают, что уведомления и сообщения Пользователя в адрес Компании считаются направленными надлежащим образом только при составлении их в письменной форме с указанием всех данных, необходимых для идентификации Пользователя.</p>
                                <p>8.3. Каждая из Сторон обязуется действовать добросовестно, подписывать и вручать надлежащим образом документы и предпринимать иные действия, которые могут требоваться для исполнения Договора.</p>
                                <p>8.4. Настоящий Договор составлен в соответствии с действующим законодательством Российской Федерации.</p>
                                <p><b>9. Реквизиты Компании</b></p>
                                <p>ООО «Гейбстор»<br>ОГРН: 1177847196537<br>ИНН: 7842136365, КПП: 784001001<br>Адрес места нахождения: 191025, г. Санкт-Петербург, Невский пр-кт, д. 55, лит. А, пом. 3-Н, раб.м. № 01<br>Адрес эл. почты: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="61121411110e1315210600030412150e13044f1314">[email&nbsp;protected]</a><br>Р/с № 40702810970010094139<br>в банке Московский филиал АО КБ «Модуль-банк»<br>Корр.с. № 301018106452500000092<br>БИК: 044525092</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
