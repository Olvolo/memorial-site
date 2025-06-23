@extends('layouts.app')
@section('title', 'Ответы на вопросы о Ваджрасаттве, данные наставником Пэльяном — Часть 5')

@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset("backgrounds/blue_ice.svg") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Верхняя навигация по статье --}}
        @include('layouts.article-navigation', [
            'currentPart' => 5,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])

        <div class="text-justify text-gray-800 text-base sm:text-lg leading-relaxed space-y-6">
            <h2 class="text-2xl font-bold text-center text-zinc-700 mb-8">Ответы на вопросы о
                Ваджрасаттве,<br>данные наставником Пэльяном<br>Часть 5</h2>

            {{-- Список вопросов, нумерация начинается с 41 --}}
            <ol class="space-y-8 list-decimal list-outside ml-6 pl-2 md:ml-8 md:pl-4" start="41">
                <!-- Вопрос 41 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Что служит мерой [успеха в] овладении йогой? Будет ли [такой мерой] острое зрение и т.д.?<a
                        href="#citation-64" id="ref-64" class="citation-mark"><sup> 64</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Когда через интуицию постиг нерождённость, обретаешь глаз Мудрости;</p>
                        <p>Через силу йоги обретаешь глаз бога;</p>
                        <p>Иные же<a href="#citation-65" id="ref-65" class="citation-mark"><sup> 65</sup></a>, которые не трудно найти в миру,</p>
                        <p>Острое зрение и т.д. не служат мерой [успеха в] йоге.</p>
                    </div>
                </li>

                <!-- Вопрос 42 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Что нужно делать, чтобы обрести большое могущество?<a href="#citation-66" id="ref-66" class="citation-mark"><sup> 66</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Постигнув через безошибочное воззрение две истины,</p>
                        <p>Ум, [постигший] нераздельность себя и Будды,</p>
                        <p>Владеющий тайной мантрой, мудрой, самадхи и ритуалом,</p>
                        <p>Через неотступное, настойчивое исполнение практики обретёт могущество.</p>
                    </div>
                </li>

                <!-- Вопрос 43 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Что имеют в виду, когда говорят, что за одну жизнь обретёшь [состояние] Будды?<a
                            href="#citation-67" id="ref-67" class="citation-mark"><sup> 67</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Через остаточное тело</p>
                        <p>Достигнешь [уровня] Видьядхары<a href="#citation-68" id="ref-68" class="citation-mark"><sup> 68</sup></a> – владыки жизни.</p>
                        <p>В этой [волшебно долгой] жизни Видьядхары [– владыки жизни]</p>
                        <p>Обретёшь непревзойдённую бодхичитту.</p>
                    </div>
                </li>

                <!-- Вопрос 44 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Почему называют Видьядхарой? В каком месте [он] пребывает?<a href="#citation-69" id="ref-69"
                                                                                                                   class="citation-mark"><sup> 69</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Праджня [, постигающая таковость] – определяющий признак ригпа (видья);</p>
                        <p>Когда постиг, стал обладать (-дхара) знанием (видья-) практики мантры.</p>
                        <p>[Когда через практику] божества и т.д. созрел как Ваджрадхара,</p>
                        <p>[То это и есть] обитель [, или уровень, созревшего] Видьядхары.</p>
                    </div>
                </li>

                <!-- Вопрос 45 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Каким образом добираются до места [пребывания] Видьядхары?<a href="#citation-70" id="ref-70"
                                                                                                                   class="citation-mark"><sup> 70</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>В каком бы «месте» ум не пребывал,</p>
                        <p class="pl-4">всё, что ни является,</p>
                        <p>[Всё это –] лишь аспекты твоего же ума;</p>
                        <p class="pl-4">поэтому нет [какого-то] «места»,</p>
                        <p class="pl-4">[про которое можно сказать, что] ум [там пребывает].</p>
                        <p>Этот нигде не пребывающий ум, куда бы не «пошёл» –</p>
                        <p class="pl-4">[«доберётся»] только лишь [до] явлений,</p>
                        <p class="pl-4">созревших в соответствии [с тем,</p>
                        <p class="pl-4">насколько высок уровень постижения</p>
                        <p class="pl-4">и насколько тонко омрачение].</p>
                    </div>
                </li>

                <!-- Вопрос 46 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Какова вершина созерцания согласно Махайоге? Как становятся Видьядхарой?<a href="#citation-71" id="ref-71"
                                                                                                                                 class="citation-mark"><sup> 71</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Собственное тело –</p>
                        <p class="pl-4">великая Махамудра Победоносцев<a href="#citation-72" id="ref-72" class="citation-mark"><sup> 72</sup></a>.</p>
                        <p>Когда созерцаешь так,</p>
                        <p class="pl-4">непосредственно видишь [его] как божество,</p>
                        <p>Обладающее знаками и признаками<a href="#citation-73" id="ref-73" class="citation-mark"><sup> 73</sup></a></p>
                        <p class="pl-4">и сверхъестественными способностями.</p>
                        <p>Это известно как Видьядхара Махамудры<a href="#citation-74" id="ref-74" class="citation-mark"><sup> 74</sup></a>.</p>
                    </div>
                </li>

                <!-- Вопрос 47 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Всякий другой корень блага созревает [плодом] лишь в следующих жизнях, почему же плод практики мантры, [состояние] Видьядхары, осуществляется уже в этой?<a
                            href="#citation-75" id="ref-75" class="citation-mark"><sup> 75</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Есть необычные благие и неблагие деяния,</p>
                        <p>И у обоих плод их созревает ещё в текущей жизни.</p>
                        <p>Поэтому [плод] практики Тайной мантры,</p>
                        <p class="pl-4">весьма необычного [благого деяния],</p>
                        <p>И созревает не в будущей [жизни],</p>
                        <p class="pl-4">a возникает уже в этой.</p>
                        <p>У других корней блага сила невелика,</p>
                        <p>Так что не могут они дать сильного плода;</p>
                        <p>Но собственная йога</p>
                        <p class="pl-4">[в сочетании с] благословением Победоносцев</p>
                        <p>Несравненный корень блага,</p>
                        <p class="pl-4">полностью осуществляющийся [в этой жизни].</p>
                    </div>
                </li>

                <!-- Вопрос 48 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Можно ли обрести сиддхи, не получив посвящение от наставника?<a
                            href="#citation-76" id="ref-76" class="citation-mark"><sup> 76</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>«Великую тайну, укрытую Победоносцами трёх времён,</p>
                        <p>Можно и самому обрести, нахрапом,» –</p>
                        <p>Как ни ищи такое утверждение во всём океане учений,</p>
                        <p>Никак не найдёшь, невозможно найти<a href="#citation-77" id="ref-77" class="citation-mark"><sup> 77</sup></a>.</p>
                    </div>
                </li>

                <!-- Вопрос 49 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Насколько велик риск действовать как наставник, не получив посвящения в наставники. Если кто получит от такого «наставника» посвящение, будет ли оно во благо?<a href="#citation-78" id="ref-78" class="citation-mark"><sup> 78</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Даже если бы преступник назначил кого-нибудь министром,</p>
                        <p>Это не имело бы силы, было бы в действительности лишь преступлением.</p>
                        <p>Когда [у «наставника»] нет посвящения благих качеств ваджрного царя,</p>
                        <p>[Но он сам] присвоил [себе это высокое] положение [наставника],</p>
                        <p class="pl-4">то и себя и других погубит.</p>
                    </div>
                </li>

                <!-- Вопрос 50 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Говорят, что когда просишь наставника о посвящении, надо поднести ему дары. Уж не сами ли [наставники] это придумали?<a href="#citation-79" id="ref-79" class="citation-mark"><sup> 79</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Ты кружил бессчётные кальпы в сансаре, потеряв путь,</p>
                        <p class="pl-4">а ныне обретаешь</p>
                        <p>Непревзойдённый путь просветления, ведущий к освобождению,</p>
                        <p class="pl-4">нетленное сокровище,</p>
                        <p>За которое не переплатишь и десятью миллионами жизней,</p>
                        <p>Что уж говорить о каких-то других [дарах].</p>
                        <p class="pl-4">Истинность этого можно проверить, заглянув в любую Тайную тантру.</p>
                    </div>
                </li>

                <!-- Вопрос 51 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Насколько велик грех ослушаться наставника?<a href="#citation-80" id="ref-80" class="citation-mark"><sup> 80</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Тяжесть греха [убийства всех живых существ в] трёх мирах,</p>
                        <p>Не сравнится и с толикой тяжести греха ослушания наставника.</p>
                        <p>Чем копить такую причину неизбежного [рождения в] адах,</p>
                        <p>Лучше было б никогда даже и не слышать [наставника],</p>
                        <p class="pl-4">[чтоб] не подвергаться опасности [совершить грех ослушания].</p>
                    </div>
                </li>
            </ol>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            {{-- Примечания к вопросам 41-51 --}}
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ
                </h4>

                <p class="mb-3" id="citation-64"><sup>64</sup> Тибетский текст сорок первого вопроса:<a href="#ref-64" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rnal 'byor rig pa can kyi tshad mar 'dzin pa gang lags /</li>
                    <li class="my-2">/ dmig rnon la sogs pa la bgyi 'am mi bgyi /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ skye med don rtogs shes rab ye shes spyan //</li>
                    <li class="my-2">rnal 'byor mthu las lha dmig rnam par dag //</li>
                    <li class="my-2">gzhan du 'jig rten phal las mi dkon ba'i /</li>
                    <li class="my-2">/ dmig rnon la sogs rnal 'byor tshad ma min /</li>
                </ul>

                <p class="mb-3" id="citation-65"><sup>65</sup> «Глаза».<a
                        href="#ref-65" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-66"><sup>66</sup> Тибетский текст сорок второго вопроса:<a
                   href="#ref-66" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ji ltar spyad na mthu che bar 'gyur /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ lta ba ma nor bden gnyis don rtogs shing //</li>
                    <li class="my-2">bdag dang sangs rgyas dbyer med mnyam pa'i blos //</li>
                    <li class="my-2">gsang sngags phyag rgya ting 'dzin cho gar ldan //</li>
                    <li class="my-2">bsgom bsgrub mi gtong yid ring mthu ldan 'gyur /</li>
                </ul>

                <p class="mb-3" id="citation-67"><sup>67</sup> Тибетский текст сорок третьего вопроса:<a
                   href="#ref-67" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ sangs rgyas tshe gcig gis 'grub pa'i don ji lta bu lags /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ lhag mar bcas pa'i lus nyid kyis //</li>
                    <li class="my-2">tshe la dbang ba'i rigs 'dzin 'thob /</li>
                    <li class="my-2">/ rig pa 'dzin pa'i tshe nyid kyis</li>
                    <li class="my-2">bla med byang chub thob par 'gyur /</li>
                </ul>

                <p class="mb-3" id="citation-68"><sup>68</sup> Есть матрика 4-х уровней видьядхар – rig 'dzin bzhi:<a
                   href="#ref-68" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5 mb-3">
                    <li class="my-2">rnam par smin pa'i rig 'dzin – полностью созревший,</li>
                    <li class="my-2">tshe la dbang ba'i rig 'dzin – владыка жизни,</li>
                    <li class="my-2">phyag rgya chen po'i rig 'dzin – видьядхара махамудры,</li>
                    <li class="my-2">lhun gyi grub pa'i rig 'dzin – самосовершенный видьядхара.</li>
                </ol>

                <p class="mb-3" id="citation-69"><sup>69</sup> Тибетский текст сорок четвертого вопроса:<a
                        href="#ref-69" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rigs 'dzin zhes bgyi ba ci lta bu la bgyi /</li>
                    <li class="my-2">/ gnas gang na mchis /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ shes rab rig pa'i mtshan nyid de //</li>
                    <li class="my-2">rtogs pas sngags spyod rig pa 'dzin //</li>
                    <li class="my-2">lha la sogs pa rdo rje 'chang //</li>
                    <li class="my-2">rigs mthun smin pa rigs 'dzin gnas /</li>
                </ul>

                <p class="mb-3" id="citation-70"><sup>70</sup> Тибетский текст сорок пятого вопроса:<a
                        href="#ref-70" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rigs 'dzin gyi gnas su tshul ci ltar bgrod cing mchi /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ sems kyi gnas su snang ba gang yang rung //</li>
                    <li class="my-2">rang sems rnam pa yin phyir sems gnas med /</li>
                    <li class="my-2">/ gang na mi gnas sems de gang tu 'gro //</li>
                    <li class="my-2">skal pa mthun bar smin cing snang bar zad /</li>
                </ul>

                <p class="mb-3" id="citation-71"><sup>71</sup> Тибетский текст сорок шестого вопроса:<a
                        href="#ref-71" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ma ha' yo ga'i tshul bzhin /</li>
                    <li class="my-2">/ ci ltar bsgoms pa'i mtha' /</li>
                    <li class="my-2">/ rigs 'dzin ci lta bu zhig du 'gyur bar bzhed /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rang lus rgyal ba'i phyag rgya che //</li>
                    <li class="my-2">bsgoms pas mngon sum gyur pa'i lha //</li>
                    <li class="my-2">mtshan dang dpe byad mngon shes ldan //</li>
                    <li class="my-2">phyag rgya chen po'i rigs 'dzin grags /</li>
                </ul>

                <p class="mb-3" id="citation-72"><sup>72</sup> Про «тело и махамудру» см. вопрос 34.<a
                        href="#ref-72" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-73"><sup>73</sup> Про «знаки и признаки» см. вопрос 21.<a
                        href="#ref-73" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-74"><sup>74</sup> Про классификацию видьядхар см. примечания к вопросу 43.<a
                        href="#ref-74" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-75"><sup>75</sup> Тибетский текст сорок седьмого вопроса:<a
                        href="#ref-75" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dge ba'i rtsa ba gzhan gyi rnam par smin pa ni tshe phyi ma la 'byung na /</li>
                    <li class="my-2">/ sngags spyad pa'i 'bras bu'i /</li>
                    <li class="my-2">/ rigs 'dzin tshe 'di la 'grub pa ci'i phyir /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dge ba dang ni sdig pa khyad par can //</li>
                    <li class="my-2">gnyi ga'i 'bras bu skye ba 'di la smin /</li>
                    <li class="my-2">/ de bas gsang sngags spyod pa'i khyad par che /</li>
                    <li class="my-2">/ rnam smin phyi mar mi sdod 'di la 'byung /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dge ba'i rtsa ba gzhan ni mthu chung phyir //</li>
                    <li class="my-2">'bras bu drag por 'byin par mi nus kyi //</li>
                    <li class="my-2">rang gi rnal 'byor rgyal pa'i byin kyi brlabs /</li>
                    <li class="my-2">/ dge rtsa dpe zla med pas mngon par 'grub /</li>
                </ul>

                <p class="mb-3" id="citation-76"><sup>76</sup> Тибетский текст сорок восьмого вопроса:<a
                        href="#ref-76" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ slob dpon la dbang ma mnos par dngos grub thob bam mi thob /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dus gsum rgyal bas sbas ba'i gsang chen la //</li>
                    <li class="my-2">gzu lums rang byan 'grub par bshad pa ni //</li>
                    <li class="my-2">gsung rab rgya mtsho ma lus kun btsal yang /</li>
                    <li class="my-2">/ mi rnyed rnyed par 'os pa ma yin no /</li>
                </ul>

                <p class="mb-3" id="citation-77"><sup>77</sup> Межстрочник в PT 837:<a
                        href="#ref-77" class="text-blue-500 hover:underline">↩</a>
                </p>
                <blockquote class="border-l-4 border-gray-500 pl-6 my-6 text-gray-800 text-lg">
                    <p>«Причина обретения сиддхи – посвящение, обет и устные</p>
                    <p>наставления.  Без опоры на наставника нет ни посвящения, ни</p>
                    <p>обета, ни слушанья устных наставлений – [так что и сиддхи] не</p>
                    <p>обретёшь.  Как ни практикуй – не будет плода сиддхи, всё понапрасну».</p>
                </blockquote>

                <p class="mb-3" id="citation-78"><sup>78</sup> Тибетский текст сорок девятого вопроса:<a
                        href="#ref-78" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ slob dpon gyi dbang ma thob par /</li>
                    <li class="my-2">/ slob dpon bgyid na nyen ci tsam /</li>
                    <li class="my-2">/ des dbang bskur pas dbang thob pa la sman nam mi sman /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ nong bus blon gral bskos pa gang yin te /</li>
                    <li class="my-2">/ btsan par mi 'gyur de nyid nyams par nges /</li>
                    <li class="my-2">/ rdo rje rgyal po yon tan dbang med pas /</li>
                    <li class="my-2">/ go 'phang bskos pas bdag gzhan brlag par bshad /</li>
                </ul>

                <p class="mb-3" id="citation-79"><sup>79</sup> Тибетский текст пятидесятого вопроса:<a
                        href="#ref-79" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ slob dpon la dbang nod pa'i dus su /</li>
                    <li class="my-2">/ yon dbul 'tshal lo zhes bgyi ba rang bzo ma lags // sam /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bskal pa grangs med 'khor bar lam stor gzod rnyed pa'i /</li>
                    <li class="my-2">/ bla med byang cub thar lam g.yung drung gter //</li>
                    <li class="my-2">des ni lus srog bye bas gcal kyang ma ches na /</li>
                    <li class="my-2">/ gzhan lta ci smos bden rdzun gsang ba'i rgyud kun ltos /</li>
                </ul>

                <p class="mb-3" id="citation-80"><sup>80</sup> Тибетский текст пятьдесят первого вопроса:<a
                        href="#ref-80" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ slob dpon kyi bka' bcag pa'i sdig ci tsam /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ srid gsum sdig par byas pa ci snyed gyis /</li>
                    <li class="my-2">/ slob dpon bka' bcag pa'i sdig pa'i char mi phod /</li>
                    <li class="my-2">/ dmyal pa'i nges rgyu la stsogs pa'i 'dra pas /</li>
                    <li class="my-2">/ gdod nas ma thos nyen med shin tu dge //</li>
                </ul>
            </div>
        </div>

        {{-- Нижняя навигация по статье --}}
        @include('layouts.article-navigation', [
            'currentPart' => 5,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])
    </div>
@endsection
