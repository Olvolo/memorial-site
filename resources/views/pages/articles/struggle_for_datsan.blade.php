@extends('layouts.app')
@section('title', 'Борьба за Дацан')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.7), rgba(255, 255, 255, 0.9)),
            url('{{ asset("backgrounds/salad_blue.webp") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 py-8">
        <img src="{{ asset('images/sp_datsan.jpg') }}" alt="Борьба за Дацан" class="article-image my-4 rounded-lg shadow-md">
        <!-- Заголовок -->
        <h1 class="text-2xl font-bold text-center mt-8 mb-8">БОРЬБА ЗА
            ДАЦАН</h1>
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">

        <h2 class="text-xl font-semibold text-center mb-4">Обращение Попечительского совета буддийского Храма Санкт-Петербурга</h2>

        <p>23 июля 1998 г. Санкт-Петербургский буддийский Храм (Дацан Гунзэчойнэй) был захвачен с помощью наёмного охранного концерна “Защита” группой лиц, самозванно объявившей себя хозяевами Храма. Настоятель Храма Б.Б. Бадмаев и одиннадцать монахов были насильственно изгнаны из Храма. У входа в Храм выставлена охрана, ежедневные службы не ведутся, верующие в Храм не допускаются. Монахи были вынуждены проводить положенные ритуальные службы (хуралы) в летнем павильоне на территории, прилегающей к Храму. Таким образом, получивший известность во всём мире Санкт-Петербургский буддийский Храм почти месяц находится во власти захватчиков. До 19 августа буддийские монахи ютились рядом с Храмом на улице, но и оттуда их изгнали.</p>

        <p>Группа лиц, насильственно захватившая Храм, совершила с точки зрения буддийской религии множественный грех: изгнав из Храма монахов, они нанесли ущерб Общине; остановив процесс ежедневного духовного литургического служения, они нанесли ущерб Учению; не допуская верующих в Храм, они нанесли ущерб почитанию буддийских святых. Помимо названных духовных преступлений, эти люди нарушили уголовный и гражданский кодексы России. Их захватнические претензии, так же, как и необоснованный акт регистрации муниципальными органами юстиции этой группы в качестве буддийской общины при Храме, проверяются городской, районной и генеральной прокуратурой.</p>

        <p>История буддизма в России насчитывает уже почти 300 лет. Он получил распространение с XVII в. в Бурятии, Туве и Калмыкии в форме одной из своих ведущих школ – <em>гелуг</em>. Высшим иерархом буддистов России является Пандидо Хамбо-лама. Все священнослужители в буддизме имеют статус монахов. Важнейшие внутрицерковные дела, включая назначения административно-духовных лиц, совершаются Пандидо Хамбо-ламой.</p>

        <p>В начале XX в. буддизм дал мощный росток и в столице России. В 1915 г. было завершено строительство и проведено освящение первого в Европе и единственного в то время буддийского Храма. Храм был построен по инициативе Пандидо Хамбо-ламы Агвана Доржиева с благословения XIII Далай-ламы.</p>

        <p>Идея строительства Храма получила одобрение императора Николая II, министра иностранных дел А.И. Извольского и министра внутренних дел П.А. Столыпина. Знаменательна фраза императора:</p>

        <blockquote class="quote pl-6 border-l-4 border-gray-300 my-4">
            “Буддисты в России могут чувствовать себя как под крылом могучего орла”.
        </blockquote>

        <p>Храм строился при поддержке научной и политической элиты Санкт-Петербурга. В строительный комитет входили: архитектор Г.В. Барановский, выдающийся российский санскритолог и буддолог проф. Ф.И. Щербатской, дипломат и путешественник князь Э.Э. Ухтомский, академики В.В. Радлов и С.Ф. Ольденбург, художник Н.К. Рерих и другие. Русская академическая наука, востоковедение, всегда поддерживала профессиональные контакты с учеными-ламами Бурятии и буддийским Храмом Санкт-Петербурга. В тридцатые годы, в период незаконных репрессий, ламы были расстреляны, а Храм закрыт. Репрессиям подверглись и многие востоковеды-буддологи.</p>

        <p>В 1989 году Храм был возвращён верующим и вошёл, в силу исторической преемственности, в ведение и духовно-административное подчинение Центрального Духовного Управления буддистов (ЦДУБ, позднее переименовано в Буддийскую Традиционную Сангху России), возглавляемое Пандидо Хамбо-ламой. Он и назначил в Храм монаха-настоятеля. В 1995 году устав буддистов-мирян, объединившихся вокруг Храма, был изменён и приведён в соответствие с правилами буддийского вероисповедания: решающим и руководящим органом по этому уставу признаётся собрание духовенства и верующих, в отличие от устава 1991 г., где нет упоминания о священнослужителях.</p>
        <br><img src="{{ asset('images/dazan_spb_ru-1-hram-project.jpg') }}"
              alt="Борьба за Дацан" class="article-image my-4 rounded-lg
              shadow-md"><br>

        <p>В настоящее время в городе зарегистрированы около десяти буддийских общин разных толков и направлений. Однако только Храм-монастырь Дацан Гунзэчойнэй в силу исторической преемственности представляет прежнюю буддийскую школу <em>гелуг</em>, входящую, согласно новому закону о свободе совести и религиозных объединениях, в число четырёх традиционных конфессий России. Все эти годы двери Храма были открыты для всех буддистов, вне зависимости от их принадлежности к той или иной школе: в Храме проводили ритуалы, давали поучения знаменитые мастера дзен-буддизма, буддийских школ Кореи, Японии, Шри Ланки, известные иерархи буддийских школ Тибета. Буддисты города гордятся Храмом, поистине считая его своим. Именно такому стилю всебуддийского согласия следует и нынешний настоятель Храма лама Б.Б. Бадмаев.</p>

        <p>Здание Храма является памятником архитектуры и представляет уникальную историко-культурную ценность России.</p>

        <p>К сожалению, все эти годы, начиная с 1989 года, законные права монахов на обладание Храмом оспаривали люди модернистских убеждений, невежественно утверждавшие, что традиционная форма буддизма в России устарела и не подходит для нашего города и для Храма. Именно эта не достойная религии борьба и привела, в конце концов, к насильственному захвату Храма группой светских лиц и их платных вооружённых помощников. Однако, в религии насилие не может быть законным аргументом. Храм по праву должен принадлежать исторически сложившейся буддийской школе России, то есть школе <em>гелуг</em>, будучи в то же время интегрирующим центром буддийской жизни города.</p>

        <p>Интерес к Храму проявили и алчные коммерческие структуры, ибо земли, принадлежащие ему, расположены для них заманчиво – Приморское шоссе, выход из ЦПКиО. Корыстные, не имеющие отношения к буддизму устремления и лежат в основе той бесстыдной лжи, которую распространяют в средствах массовой информации захватчики Храма.</p>

        <p>Для того, чтобы содействовать восстановлению законного статуса Храма, 18 августа сего года был создан Попечительский совет Дацана Гунзэчойнэй в составе: кандидата исторических наук, научного сотрудника Института истории естествознания и техники РАН А.И. Андреева; доктора философских наук, профессора, действительного члена РАЕН А.О. Бороноева; архитектора, члена Союза Архитекторов РФ В.Б. Бухаева; доктора исторических наук, заведующей отделением Азиатских и Тихоокеанских исследований Института этологии и антропологии РАН Н.Л. Жуковской; главного редактора журнала “Гаруда” В.М. Монтлевича; доктора философских наук, ведущего научного сотрудника Санкт-Петербургского филиала Института востоковедения РАН Е.П. Островской; доктора философских наук, ведущего научного сотрудника Санкт-Петербургского филиала Института востоковедения РАН В.И. Рудого; доктора философских наук, профессора, и.о. зав. кафедрой философии, религии и религиоведения философского факультета СПбГУ Е.А. Торчинова; кандидата филологических наук, главного редактора альманаха “Orient” Е.А. Хамагановой.</p>

        <p>Попечительский совет, руководствуясь чувством гражданской справедливости и нравственными установками буддизма, обращается к губернатору Санкт-Петербурга В.А. Яковлеву, в органы прокуратуры, к общественности города:</p>

        <blockquote class="quote pl-6 border-l-4 border-gray-300 my-4">
            “Помогите восстановить законные права буддийских монахов отправлять религиозное служение в Храме, права верующих на свободное посещение Храма и общение с монахами и настоятелем. Помогите смыть скверну алчности, насилия и невежества с Санкт-Петербургской буддийской Святыни”.
        </blockquote>

        <ul class="list-none mb-4">
            <li><p class="text-right">Кандидат исторических наук, научный сотрудник Института истории естествознания и техники /А.И. Андреев/</p></li>
            <li><p class="text-right">Доктор философских наук, профессор, действительный член РАЕН /А.О. Бороноев/</p></li>
            <li><p class="text-right">Архитектор, член Союза Архитекторов РФ, лауреат Государственной премии РФ /В.Б. Бухаев/</p></li>
            <li><p class="text-right">Доктор исторических наук, заведующая отделением Азиатских и Тихоокеанских исследований Института этологии и антропологии РАН /Н.Л. Жуковская/</p></li>
            <li><p class="text-right">Главный редактор журнала “Гаруда” /В.М. Монтлевич/</p></li>
            <li><p class="text-right">Доктор философских наук, ведущий научный сотрудник СПб филиала Института востоковедения РАН /Е.П. Островская/</p></li>
            <li><p class="text-right">Доктор философских наук, ведущий научный сотрудник СПб филиала Института востоковедения РАН /В.И. Рудой/</p></li>
            <li><p class="text-right">Доктор философских наук, профессор, и.о. зав. кафедрой философии, религии и религиоведения философского факультета СПбГУ /Е.А. Торчинов/</p></li>
            <li><p class="text-right">Кандидат филологических наук, главный редактор альманаха “Orient” /Е.А. Хамаганова/</p></li>
        </ul>

        <p class="text-right"><em>24 августа 1998 г.</em></p>
        </div>
    </div>
@endsection

