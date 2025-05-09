@extends('layouts.app')
@section('title', 'Источник мудрецов. Раздел тантра. Часть пятая. Ануттарайогатантра (Часть 1)')
@push('styles')
    <style>
        .container {
            background-image: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
            url('{{ asset("backgrounds/salad_blue.webp") }}');
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
@endpush
@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Верхняя навигация -->
        @include('layouts.article-navigation', [
            'currentPart' => 5,
            'totalParts' => 7,
            'routeName' => 'pupishev_articles.source_of_sages',
            'articleTitle' => 'статьи'
        ])        <h1 class="text-center text-blue-900 font-bold text-2xl sm:text-3xl md:text-3xl mt-6 mb-6">
            ИСТОЧНИК МУДРЕЦОВ
        </h1>
        <h3 class="text-center text-blue-800 font-semibold text-xl sm:text-2xl md:text-2xl mb-6">
            Тибетско-монгольский терминологический словарь буддизма
        </h3>
        <h2 class="text-center text-blue-800 font-semibold text-lg sm:text-xl md:text-xl mb-6">
            ТАНТРА
        </h2>
        <h3 class="text-center text-gray-700 italic text-lg sm:text-xl md:text-xl mb-8">
            (DAG YIG MKHAS PA'I 'BYUNG GNAS ZHES BYA BA LAS
            SNGAGS KYI SKOR)
        </h3>
        <div class="text-justify text-base sm:text-lg leading-relaxed space-y-4">
            <h2 class="text-center text-xl font-semibold text-blue-800 mt-6 mb-4">IV.
                АНУТТАРАЙОГАТАНТРА<br>(rNal 'byor bla na med rgyud)</h2>
            <h3 class="text-center text-gray-700 italic text-lg sm:text-xl md:text-xl mb-8">
                (Часть первая)
            </h3>
            <p>В ней имеется:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Отцовские тантры (pha rgyud).</li>
                <li class="my-2">Материнские тантры (ma rgyud)<a href="#citation-56" id="ref-56"
                                                                 class="citation-mark"><sup>56</sup></a>.
                </li>
            </ol>

            <p>Термины "тантра йогина" (rnal 'byor gyi rgyud), "тантра метода" (thabs gyi rgyud) и
                "тантра Дака" (mkha' 'gro pha'i rgyud) суть синонимы.</p>

            <p>Термины "тантра йогини" (rnal 'byor ma'i rgyud), "тантра интуиции" (shes rab gyi
                rgyud) и "тантра Дакини" (mkha' 'gro ma'i rgyud)<a href="#citation-57" id="ref-57"
                                                                   class="citation-mark"><sup>57</sup></a>суть
                синонимы.</p>

            <p>В каждой из них имеется:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">тантра из слов проповеди (brjod byed tshig gi rgyud),</li>
                <li class="my-2">тантра разъяснения смысла проповеданного (brjod bya don gyi
                    rgyud).
                </li>
            </ol>

            <p>Первая состоит из:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">из коренной тантры (rtsa rgyud),</li>
                <li class="my-2">из тантры проповеди (bshad rgyud),</li>
                <li class="my-2">из тантры последующего разъяснения (rgyud phyi ma),</li>
                <li class="my-2">из тантры соответствия (cha mthun gyi rgyud).</li>
            </ol>

            <p>Вторая состоит из:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">из тантры основы (rgyu'i rgyud)<a href="#citation-58" id="ref-58"
                                                                   class="citation-mark"><sup>58</sup></a>,
                </li>
                <li class="my-2">из тантры метода (thabs kyi rgyud),</li>
                <li class="my-2">из тантры плода ('bras bu'i rgyud).</li>
            </ol>

            <p>Три указанных [иначе] называются:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">тантра опоры (gzgi'i rgyud),</li>
                <li class="my-2">тантра пути (lam gyi rgyud),</li>
                <li class="my-2">тантра неотъемлемости (mi 'phrogs pa'i rgyud)<a href="#citation-59"
                                                                                 id="ref-59"
                                                                                 class="citation-mark"><sup>59</sup></a>.
                </li>
            </ol>

            <p>Что касается <em>тантры метода</em>, она включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">тантру правомощности (dbang), не включающую посвящения в практику
                    разжигания внутреннего огня (ma smin par byed pa dbang gi rgyud)<a
                        href="#citation-60" id="ref-60" class="citation-mark"><sup>60</sup></a>;
                </li>
                <li class="my-2">тантру обетов и нравственных обязательств с неубывающим созреванием
                    (smin pa mi nyams par byed pa dam tshig dang sdom pa'i rgyud)<a
                        href="#citation-61" id="ref-61" class="citation-mark"><sup>61</sup></a>;
                </li>
                <li class="my-2">тантру [степени] рождения и [степени] завершения сущности
                    практикуемого (nyams su blang bya'i ngo bo ba skyed rdzogs kyi rgyud)<a
                        href="#citation-62" id="ref-62" class="citation-mark"><sup>62</sup></a>;
                </li>
                <li class="my-2">тантру движения к конечной реализации (nye rgyu spyod pa'i
                    rgyud)<a
                        href="#citation-63" id="ref-63" class="citation-mark"><sup>63</sup></a>.
                </li>
            </ol>

            <p>Имеется <em>семь</em> <em>украшений</em><a href="#citation-64" id="ref-64"
                                                          class="citation-mark"><sup> 64</sup></a>
                метода проповеди тантры (rgyud bshad thabs kyi rgyan bdun).</p>

            <p><em>Первое</em> - <em>украшение собрания сказанного</em> (gleng bslang ba'i rgyan) -
                включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">особенность различения (mtshan gyi khyad par; mtshan - saṃjñāna);
                </li>
                <li class="my-2">особенность подчинения [себя] целенаправленным действиям (chen du
                    bya ba'i gdul bya'i khyad par);
                </li>
                <li class="my-2">особенность исполнителя (mdzad pa po'i khyad par);</li>
                <li class="my-2">особенность меры воздействия слов (tshig don gyi tshad kyi khyad
                    par)<a href="#citation-65" id="ref-65" class="citation-mark"><sup>65</sup></a>;
                </li>
                <li class="my-2">особенность необходимости (dgos pa'i khyad par).</li>
            </ol>

            <p><em>Второе - украшение метода очищения</em> ('tshang rgya tshul gyi rgyan) -
                включает:
            </p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">корень (rgyud),</li>
                <li class="my-2">тетралемму (gleng bzhi),</li>
                <li class="my-2">истинные слова (ngos tshig),</li>
                <li class="my-2">основу (rgyu).</li>
            </ol>

            <p><em>Третье - украшение шести пределов</em> (mtha' drug gi rgyan, ṣaṭkoṭialaṅkara) -
                включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">прямой, буквальный, смысл [тантры] (drang don, neyārtha),</li>
                <li class="my-2">истинный смысл [тантры] (nges don, nītārtha),</li>
                <li class="my-2">проповедь с опорой на память, или с подразумеваемым смыслом (dgongs
                    pas bshad pa),
                </li>
                <li class="my-2">проповедь без опоры на память, или c открытым смыслом
                    (dgongs pa ma yin pas bshad pa),
                </li>
                <li class="my-2">употребление тех же слов, или [текст, понимаемый] буквально
                    (sgra ji bzhin yin pa),
                </li>
                <li class="my-2">употребление других слов, или [текст] со скрытым смыслом
                    (sgra ji bzhin ma yin pa).
                </li>
            </ol>

            <p><em>Четвертое - украшение четырех методов</em> (tshul bzhi'i rgyan) включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">буквальный смысл (yig don),</li>
                <li class="my-2">общий смысл (spyi don),</li>
                <li class="my-2">скрытый смысл (sbas don),</li>
                <li class="my-2">мистический смысл (mthar thug gi don).</li>
            </ol>

            <p><em>Пятое - украшение метода наставления</em> ('chad tshul gyi don) - включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">наставление многим (tshogs bshad),</li>
                <li class="my-2">наставление ученику (slob bshad).</li>
            </ol>

            <p><em>Шестое - украшение слушателя</em> (nyan pa po'i rgyan) включает людей, подобных:
            </p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">голубому лотосу [еще не раскрывшемуся] (utpala),</li>
                <li class="my-2">белому лотосу [распустившемуся] (pad dkar),</li>
                <li class="my-2">лотосу-падме [расцветшему] (padma),</li>
                <li class="my-2">сандаловому дереву [лучшему из растений] (tsan dan),</li>
                <li class="my-2">драгоценности (rin po che).</li>
            </ol>

            <p><em>Седьмое - украшение утверждения в двух истинах</em> (bden gnyis nges pa'i rgyan)
                - включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">утверждение в относительной истине (kun rdzob bden pa nges pa'i
                    rgyan),
                </li>
                <li class="my-2">утверждение в абсолютной истине (don dam bden pa nges pa'i rgyan).
                </li>
            </ol>

            <p>Если объединить вышеперечисленное, то получим двадцать восемь [украшений метода].</p>

            <p><em>О числе тантр:</em> в отцовских [тантрах] - шесть (bye ba phrag drug), в
                материнских - шестнадцать (bye ba phrag bcu drug)<a href="#citation-66" id="ref-66"
                                                                    class="citation-mark"><sup>66</sup></a>.
            </p>

            <p>Поскольку утверждается, что во всех тантрах [системы] <em>ануттара</em> основным
                является
                осуществление недвойственности блаженства и шуньи (bde stong gnyis su med pa), они
                также называются тантрами недвойственности (gnyis med kyi rgyud).</p>

            <p>Для создания подходящего сосуда (snod, то есть ученика) для созерцания метода (lam
                bsgom) [необходимо]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Посвящающий Учитель и посвящаемый ученик должны изучать [метод]
                    совместно (dbang bskur ba'i dpon slob phan tshun brtag pa).
                </li>
                <li class="my-2">Ученик должен обращаться с просьбой [о наставлении] (slob mas gsol
                    ba gtab pa).
                </li>
                <li class="my-2">Учитель должен охранять [метод и ученика] (slob dpon gyis bsrung ba
                    bya ba).
                </li>
                <li class="my-2">В начальной стадии посвящения следует практиковать служение (dbang
                    dskur ba'i sngon du bsnyen pa bya ba)<a href="#citation-67" id="ref-67"
                                                            class="citation-mark"><sup>67</sup></a>.
                </li>
                <li class="my-2">Тот, кто показал себя достойным в практике служения, должен
                    реализовать посвящение (bsnyen pa la las su rung nas dbang bskur bya ba)<a
                        href="#citation-68" id="ref-68" class="citation-mark"><sup>68</sup></a>.
                </li>
            </ol>

            <p><em>Служение состоит</em>:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">из cлужения [до появления] знаков (mtshan ma; nimitta)<a
                        href="#citation-69" id="ref-69" class="citation-mark"><sup>69</sup></a>,
                </li>
                <li class="my-2">из cлужения [состоящее в начитывании мантр в определенном]
                    количестве (grangs, saṃkhyā),
                </li>
                <li class="my-2">из cлужения [в течение строго определенного] времени (dus; kāla).
                </li>
            </ol>

            <p>Здесь появление даруемых божеством знаков равноценно завершению [начитывания мантр в
                необходимом] количестве.</p>

            <p><strong>I. В дарование правомощности</strong> (dbang bskur ba, abhiṣeka) входит:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">ритуал места (sa'i cho ga)<a href="#citation-70" id="ref-70"
                                                              class="citation-mark"><sup>70</sup></a>,
                </li>
                <li class="my-2">подготовительный ритуал (stag gin gyi cho ga),</li>
                <li class="my-2">ритуал реальной основы (dngos gzhi'i cho ga).</li>
            </ol>

            <p><strong>I.A. В <em>ритуал места</em> входят:</strong></p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">изучение места (sa brtag pa),</li>
                <li class="my-2">просьба о месте (sa bslang ba),</li>
                <li class="my-2">очищение места (sa sbyang ba),</li>
                <li class="my-2">удержание места (sa gzung ba),</li>
                <li class="my-2">охрана и благословление места (bsrung zhing byin gyis brlabs ba).
                </li>
            </ol>

            <p>В <em>очищение места</em> входят:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">перекопав, очистить (brkos nas sbyang ba);</li>
                <li class="my-2">очистить веществами, мантрой и созерцанием (rdzas
                    sngags ting 'dzin gsum gyis sbyang ba, здесь вещества —
                    это вода, пепел, семена горчицы и т.п.);
                </li>
                <li class="my-2">очистить всепревосходящим очищением (bla na med pa'i
                    dag pas sbyang ba).
                </li>
            </ol>

            <p>В <em>перекапывание</em> входят:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">для очищения от болезнетворности перекопать (zug rngu
                    dag pa'i ched rko ba);
                </li>
                <li class="my-2">обнаружив пресмыкающихся, перекопать (lto 'phye brtag
                    nas brko ba).
                </li>
            </ol>

            <p>В <em>удержание места</em> входят:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Испросив разрешения божества [методом] йоги, устроить
                    жинхор (lha'i rnal 'byor gyis gsol ba btab cing dkyil 'khor
                    gdegs pa).
                </li>
                <li class="my-2">Испросив, созерцать устранение помех (bslang ste bgegs la
                    bka' bsgom)<a href="#citation-71" id="ref-71"
                                  class="citation-mark"><sup>71</sup></a>.
                </li>
                <li class="my-2">Придерживаться соответствующего образа действий: исполнить позы
                    танца (stangs stabs bya ba).
                </li>
            </ol>

            <p>В [исполнение] поз танца входят:</p>

            <p>а) постановка ног в виде (rkang stabs):</p>

            <ol class="list-decimal list-outside ml-16 space-y-1 pl-5">
                <li class="my-2">одноконечного ваджра (rdo rje rtse gcig pa),</li>
                <li class="my-2">пятиконечного ваджра (rdo rje rtse lnga pa),</li>
                <li class="my-2">вселенского ваджра (sna tshogs rdo rje, viśvavajra)<a
                        href="#citation-72" id="ref-72" class="citation-mark"><sup>72</sup></a>.
                </li>
            </ol>

            <p>б) вытягивать вправо (gyas brkyang),</p>

            <p>в) вытягивать влево (gyon brkyang),</p>

            <p>г) в виде знака скорпиона (sa ga = sa ga skyes zla),</p>

            <p>д) [в виде] круга (zlum po),</p>

            <p>е) [в виде] плоскости (mnyam pa)<a href="#citation-73" id="ref-73"
                                                  class="citation-mark"><sup>73</sup></a>.
            </p>

            <p>В <em>охрану</em> и <em>благословление</em> входят:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Воплотившись в созерцаемое божество, [его силою] привлечь мар<a
                        href="#citation-74" id="ref-74" class="citation-mark"><sup>74</sup></a>
                    (lhar bskyed nas gegs dgugs).
                </li>
                <li class="my-2">Вбить в мар [ваджрные] гвозди (gegs la phur bus gdab pa)<a
                        href="#citation-75" id="ref-75" class="citation-mark"><sup>75</sup></a>.
                </li>
            </ol>

            <p><strong>I.B. В <em>подготовительный ритуал</em> входят:</strong></p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">подготовка [всего необходимого для встречи] богини места (sa'i lha
                    mo sta gon)<a href="#citation-76" id="ref-76"
                                  class="citation-mark"><sup>76</sup></a>,
                </li>
                <li class="my-2">подготовка [мандалы] для богов жинхора (dkyil 'khor gyi
                    lha sta gon),
                </li>
                <li class="my-2">подготовка кувшинов (bum pa, kumbha),</li>
                <li class="my-2">подготовка ученика (slob ma sta gon).</li>
            </ol>

            <p>Подготовка [мандалы] для божеств включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">разграфление [мандалы] (thig gdab pa),</li>
                <li class="my-2">подготовка культовых предметов [для подношения] божествам (lha sta
                    gon
                    bya ba dngos).
                </li>
            </ol>

            <p>В разграфлении имеется:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">линии кармы (las kyi thig),</li>
                <li class="my-2">линии мудрости (ye shes kyi thig) и</li>
                <li class="my-2">нанесение длинных линий (thig skud ring po'i phyogs),</li>
                <li class="my-2">нанесение коротких линий (thung du'i phyogs).</li>
            </ol>

            <p>Подготовка кувшинов включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">кувшин победы (rnam rgyal bum pa, vijayakumbha),</li>
                <li class="my-2">кувшин кармы (las kyi bum pa; karmakumbha)<a href="#citation-77"
                                                                              id="ref-77"
                                                                              class="citation-mark"><sup>77</sup></a>.
                </li>
            </ol>

            <p>Кувшин победы двух видов:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">кувшин правомощности в традиции Калачакры (dus 'khor lugs kyi dbang
                    bum)<a href="#citation-78" id="ref-78" class="citation-mark"><sup>78</sup></a>,
                </li>
                <li class="my-2">в традиции других тантр (rgyud gzhan gyi lugs).</li>
            </ol>

            <p>Их количество:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">по количеству божеств (lha grangs),</li>
                <li class="my-2">пять (lnga),</li>
                <li class="my-2">один (gcig) и т.п., как указано [для каждого данного ритуала].</li>
            </ol>

            <p>Подготовка ученика включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">обращение с просьбой (gsol ba gdab pa),</li>
                <li class="my-2">готовность стать всеисполняющим ваджром по отношению к Учителю
                    «дверей» (sgo'i slob dpon dang las kyi rdo
                    rjer lhag gnas bya ba)<a
                        href="#citation-79" id="ref-79" class="citation-mark"><sup>79</sup></a>,
                </li>
                <li class="my-2">готовность стать учеником (slob ma lhag gnas bya ba),</li>
                <li class="my-2">подношение мандала и обращение вспять дурных предзнаменований, если
                    таковые возникнут (dkyil
                    'khor bteg cing rmi ltas ngan na bzlog zabs bya ba)<a href="#citation-80"
                                                                          id="ref-80"
                                                                          class="citation-mark"><sup>80</sup></a>.
                </li>
            </ol>

            <p>Пять пунктов готовности ученика (slob ma lhag gnas dngos la lnga):</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Все собранное приготовив и создав правильную мотивацию, получить
                    посвящение (kun slong bzos shing nang
                    dbang bskur ba).
                </li>
                <li class="my-2">Обратившись с просьбой [о наставлении и т.п.], стараться
                    [получаемое] удержать (gsol ba btab cing 'dzin du gzhugs pa).
                </li>
                <li class="my-2">Приняв нравственные обязательства (обеты), получить
                    благословение (sdom pa gzung zhing byin gyis brlab pa).
                </li>
                <li class="my-2">Пригвоздив [мар], отбросив [помехи], поднести горсть
                    воды и другие [компоненты жертвоприношения], всего
                    три (so shing dor zhing khyor chu sogs gsum sbyin pa)<a href="#citation-81"
                                                                            id="ref-81"
                                                                            class="citation-mark"><sup>81</sup></a>.
                </li>
                <li class="my-2">Зародив состояние восторга и сохраняя его обучаться истолкованию
                    знамений, полученных во сне (spro ba
                    bskyed cing bsrungs te rmi lam brtag par gdams pa'o).
                </li>
            </ol>

            <p>[Ученик должен иметь при себе] горсть воды (khyor chu), траву куша (ku sha, лат. <em>poa
                    cynosuroides</em>), нить на плечо (dpung skud).</p>

            <p>Метод обращения вспять дурных снов включает (rmi lam ngan pa bzlog thabs ni):</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">[подношение] балина (gtor ma, balin)<a href="#citation-82"
                                                                        id="ref-82"
                                                                        class="citation-mark"><sup>82</sup></a>,
                </li>
                <li class="my-2">охранный круг (bsrung 'khor),</li>
                <li class="my-2">начитывание (bzlas pa),</li>
                <li class="my-2">cоздание божества щита (go сha'i lha dgod pa)<a href="#citation-83"
                                                                                 id="ref-83"
                                                                                 class="citation-mark"><sup>83</sup></a>,
                </li>
                <li class="my-2">обращение с просьбой (gsol ba gdab pa)<a href="#citation-84"
                                                                          id="ref-84"
                                                                          class="citation-mark"><sup>84</sup></a>,
                </li>
                <li class="my-2">надев шесть [ритуальных] украшений, практиковать гордость
                    [созерцаемого божества] (rgyan drug bgos nas lha'i nga rgyal bya ba)<a
                        href="#citation-85" id="ref-85" class="citation-mark"><sup>85</sup></a>,
                </li>
                <li class="my-2">[совершить ритуал] «сжигание накопленного», огненная пуджа (sbyin
                    sreg).
                </li>
            </ol>

            <p><em>Ритуал [расстановки] предметов</em> (часть подготовительного ритуала) включает:
            </p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">нанеся линию мудрости, рассыпать краски (ye thig gdab cing tshon
                    dbye ba);
                </li>
                <li class="my-2">установив кувшин /ы/, украсить <em>жинхор</em> (bum pa dgod cing
                    dkyil 'khor
                    brgyan pa);
                </li>
                <li class="my-2">завершив [это] и принеся жертву, получить правомощность (bsgrubs
                    shing mchod nas dbang bskur ba).
                </li>
            </ol>

            <p>Последнее включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">завершение <em>жинхора</em> (dkyil 'khor bsgrub pa),</li>
                <li class="my-2">поднесение <em>жинхора</em> (dkyil 'khor mchod pa),</li>
                <li class="my-2">ритуал дарования правомощности (dbang bskur ba'i cho ga).</li>
            </ol>

            <p>В завершение <em>жинхора</em> входят:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">правило [создания его отдельно], перед собою (bdag mdun tha dad),
                </li>
                <li class="my-2">правило неотделимости (tha mi dad kyi lugs).</li>
            </ol>

            <p>Затем, по материалу изготовления (bsgrub rgyu) <em>жинхор</em> подразделяется:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">на <em>жинхор</em> из порошковых красок (rdul tshon),</li>
                <li class="my-2">на <em>жинхор</em>, нарисованный на ткани (ras ris),</li>
                <li class="my-2">на <em>жинхор</em>, созданный созерцанием (bsam gtan; dhyāna),</li>
                <li class="my-2">на телесный <em>жинхор</em> (lus kyi dkyil 'khor).</li>
            </ol>

            <p>Жертвоприношение включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">основное жертвоприношение (mchod pa dngos),</li>
                <li class="my-2">очистив и обнеся по кругу остатки жертвоприношения, открыть дверь
                    (chad lhag zhi bar byas shing bskor nas sgo dbye ba).
                </li>
            </ol>

            <p>Основное жертвоприношение включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Жертвоприношение божеству <em>жинхора</em> внутри (nang du dkyil
                    'khor gyi
                    lha mchod pa),
                </li>
                <li class="my-2">подношение <em>балина</em> снаружи (phyi rol tu gtor ma'i mchod
                    pa).
                </li>
            </ol>

            <p>Жертвоприношение божеству включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">четыре воды (shu bzhi),</li>
                <li class="my-2">пять наслаждений (nyer spyod lnga)<a href="#citation-86"
                                                                      id="ref-86"
                                                                      class="citation-mark"><sup>86</sup></a>,
                </li>
                <li class="my-2">четыре знания (rig ma bzhi), либо пять, шесть, восемь,
                    шестнадцать<a href="#citation-87" id="ref-87"
                                  class="citation-mark"><sup>87</sup></a>,
                </li>
                <li class="my-2">пять наук желания ('dod yon lnga)<a href="#citation-88" id="ref-88"
                                                                     class="citation-mark"><sup>88</sup></a>(санскр.
                    pañca kāmaguṇa: форма, звук, вкус, запах, тактильные ощущения — прим. ред.) [3:
                    217],
                </li>
                <li class="my-2">семь драгоценностей (rgyal srid sna bdud)<a href="#citation-89"
                                                                             id="ref-89"
                                                                             class="citation-mark"><sup>89</sup></a>,
                </li>
                <li class="my-2">восемь счастливых примет (bkra shis rtags brgyad)<a
                        href="#citation-90" id="ref-90" class="citation-mark"><sup>90</sup></a>,
                </li>
                <li class="my-2">балдахин (bla re),</li>
                <li class="my-2">зонт (gdugs),</li>
                <li class="my-2">знак победы (rgyal mtshan, dhvaja — знамя) и другие внешние жертвы
                    (phyi mchod); внутренняя жертва (nang mchod); сокровенная жертва (gsang mchod);
                    жертва таковости (de kho na nyid kyi mchod); жертва мантры (sngags kyi mchod);
                    восхваления (bstod pa).
                </li>
            </ol>

            <p><strong>I.C. <em>Ритуал дарования правомощности:</em></strong></p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Самому войти [в <em>жинхор</em>], обрести правомочность и просить
                    разрешения (rang nyid zhugs shing dbang blangs nas
                    gnang ba nod pa).
                </li>
                <li class="my-2">Попросив сиддхи (dngos grub; siddhi)<a href="#citation-91"
                                                                        id="ref-91"
                                                                        class="citation-mark"><sup>91</sup></a>,
                    совершить истинное благословление (bden pa'i byin brlab bya ba).
                </li>
                <li class="my-2">Посвятить ученика (slob ma la dnang bskur ba).</li>
            </ol>

            <p>Последнее включает три [компонента]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">ввести в <em>жинхор</em> (dkyil 'khor du gzhug pa),</li>
                <li class="my-2">посвятить вошедшего (zhugs pa la dbang bskur ba),</li>
                <li class="my-2">ритуал конечной опоры правомочности (dbang gi mtha' brten gyi cho
                    ga).
                </li>
            </ol>

            <p><em>Во вхождении</em><a href="#citation-92" id="ref-92"
                                       class="citation-mark"><sup> 92</sup></a> <em>два
                    [компонента]:</em>
            </p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">войти с закрытым лицом (gdong gyogs dang bcas te gzhug),</li>
                <li class="my-2">войти в сущность зримого <em>жинхора</em> (dkyil 'khor mthong ba'i
                    bdag nyid
                    can du gzhug).
                </li>
            </ol>

            <p>В первом два [компонента]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">войти до занавеса [на двери дворца] (yol ba'i phyi 'dzhug),</li>
                <li class="my-2">войти внутрь (nang 'jug).</li>
            </ol>

            <p>Вхождение внутрь включает три [этапа]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">войдя внутрь, совершить <em>прадакшину</em> и поклонение (nang du
                    gzhug cing
                    bskor nas phyag bya ba)<a href="#citation-93" id="ref-93" class="citation-mark"><sup>93</sup></a>;
                </li>
                <li class="my-2">налагается обет (dam bzhag pa);</li>
                <li class="my-2"> ниспосылается мудрость и излагают истину (ye shes pa
                    phab nas bden pa brjod pa).
                </li>
            </ol>

            <p><em>Из четырех посвящений для вошедшего</em></p>

            <p><strong>I. В первом - <em>посвящении кувшина</em> (bum pa'i dbang) -
                    [имеется]:</strong></p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">обычный ваджр — ученическая правомочность (thun
                    mong ba rdo rje slob ma'i dbang),
                </li>
                <li class="my-2">высший ваджр — правомочность Учителя (thun mong
                    ma yin pa rdo rje slob dpon gyi dbang).
                </li>
            </ol>

            <p>Обычный [ваджр] включает пять посвящений:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Акшобхьи (Mi bskyod pa, Akṣobhya) — водное посвящение (chu'i
                    dbang),
                </li>
                <li class="my-2">Ратнасамбхавы (Rin chen 'byung ldan, Ratnasaṃbhava)—
                    посвящение диадемы (cod pan gyi dbang),
                </li>
                <li class="my-2">Амитабхи ('Od dpag med, Amitābhā) — ваджрное посвящение (rdo rje'i
                    dbang),
                </li>
                <li class="my-2">Амогхасиддхи (Don yod grub pa, Amoghasiddhi) — посвящение колокола
                    (dril bu'i dbang),
                </li>
                <li class="my-2">Вайрочаны (rNam par snang mdzad, Vairocana) —посвящение имени (ming
                    gi dbang).
                </li>
            </ol>

            <p>Для получения правомочности Учителя</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">Дается три обета (dam tshig, samaya):
                    <ol type="a">
                        <li>а) обет ваджра (rdo rdzhe, vajra),</li>
                        <li>б) обет колокола (dril bu, ghaṇṭā),</li>
                        <li>в) обет мудры (phyag rgya, mudrā).</li>
                    </ol>
                </li>
                <li class="my-2">При принятии этих трех, они должны быть разъяснены (bstan pa).</li>
                <li class="my-2">[Совершается] ритуал конечной опоры (mtha' brten gyi cho ga).</li>
            </ol>

            <p>Последний состоит из [четырех компонентов]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">ритуал передачи мантры (sngags gtad pa'i cho ga),</li>
                <li class="my-2">ритуал «лекарство для глаз» (mig sman gyi cho ga),</li>
                <li class="my-2">ритуал правомочности зерцала (me long gi dbang gi
                    cho ga),
                </li>
                <li class="my-2">ритуал пускания стрелы (mda' 'phang ba'i cho ga).</li>
            </ol>

            <p><strong>II. Во втором - <em>сокровенном посвящении</em> (gsang dbang) -
                    имеется:</strong></p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">поднеся мать-Видью, молиться (rig ma dbul zhing gsol ba gdab pa);
                </li>
                <li class="my-2">созерцать себя в виде Амитабхи ('Od dpag med du bskyed pa);</li>
                <li class="my-2">даровать правомочность двумя сокровенными веществами (gsang rdzas
                    gnyis kyis dbang bskur ba);
                </li>
                <li class="my-2">дать чистоту правомочности (dbang gi dga pa sbyin pa).</li>
            </ol>

            <p><strong>III. В третьем посвящении - <em>интуиции и мудрости</em> (shes rab
                    ye shes kyi dbang, prajñājñānābhiṣeka) — [имеется]:</strong></p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">передать знание (yon dbul ba),</li>
                <li class="my-2">дать просимое (gsol ba gdab pa),</li>
                <li class="my-2">дать Видью (rig ma gdad pa),</li>
                <li class="my-2">превратиться в [созерцаемое] божество (lhar bskyed pa),</li>
                <li class="my-2">благословить женщину (mkha' gsang brlab pa),</li>
                <li class="my-2">cовершив равное вхождение (войдя в состояние <em>самапатти</em> [3:
                    141]), породить вместерожденность (snyoms
                    par zhugs te lhan skyes bskyed pa),
                </li>
                <li class="my-2">пить просветленную мысль (byang sems, bodhicitta),</li>
                <li class="my-2">разъяснить смысл посвящения (dbang gi don bshad pa).</li>
            </ol>

            <p><strong>IV. Четвертое посвящение - это <em>правомочность слова</em> (tshig
                    gi dbang)</strong><a href="#citation-94" id="ref-94" class="citation-mark"><sup>94</sup></a>.
            </p>

            <p><em>Ритуал конечной опоры</em> включает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">преподать образ действий Видьи (rig ma'i brtul zhugs
                    sbyin pa),
                </li>
                <li class="my-2">преподать ваджрный образ действий (rdo rje'i brtul
                    zhugs sbyin pa),
                </li>
                <li class="my-2">преподать способ движения (spyod pa'i brtul zhugs
                    sbyin pa),
                </li>
                <li class="my-2">первоначальную практику (lung bstan rjes gnang),</li>
                <li class="my-2">дальнейшее разрешение (rjes gnang),</li>
                <li class="my-2">задержку дыхания (dbugs dbyung).</li>
            </ol>

            <p>Подготовка к этому и расстановка для этого предметов делается при посвятительном
                ритуале, проводимом в <em>жинхоре</em> из порошковых красок, а если правомочность
                даруется в
                других <em>жинхорах</em>, то перечисление терминов, описывающих необходимое
                сочетание соответствующих объектов отбрасывания и принятия,
                соответствует описанному выше.</p>

            <p>Семь посвящений (dbang) в традиции (lugs) <em>Калачакры</em> и большей части других
                [тантр] соответствуют ранее изложенному, их последовательность (byis ltar) такова:
            </p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">посвящение воды (chu),</li>
                <li class="my-2">посвящение диадемы (cod pan),</li>
                <li class="my-2">посвящение шелковой ленты (dar dbyangs, paṭṭa),</li>
                <li class="my-2">посвящение ваджра и колокола (rdo rje dril bu)<a
                        href="#citation-95"
                        id="ref-95" class="citation-mark"><sup>95</sup></a>,
                </li>
                <li class="my-2">посвящение образа действий (brtul zhugs, vrata)<a
                        href="#citation-96" id="ref-96"
                        class="citation-mark"><sup>96</sup></a>,
                </li>
                <li class="my-2">посвящение имени (ming, nāma),</li>
                <li class="my-2">последующее разрешение (rjes gnang) — все это вместе составляет
                    семь.
                </li>
            </ol>

            <p><em>Высшее посвящение включает два</em> [<em>компонента</em>]:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">относительное мирское высшее посвящение (kun rdzob 'jig
                    rten pa'i dbang gong ma dang),
                </li>
                <li class="my-2">абсолютное высшее посвящение выхода из Сансары (nges
                    don 'jig rten las 'das pa'i gong ma)<a href="#citation-97" id="ref-97"
                                                           class="citation-mark"><sup>97</sup></a>.
                </li>
            </ol>

            <p>В каждом из них по четыре посвящения - кувшина и других.</p>

            <p>Ваджрный Учитель в правомочности хозяина [генезиса], когда его попросили [о
                посвящении], располагается на троне правомочности (dbang gi stegs), дарует водное
                посвящение (chu dbang)
                и другие, каждое по отдельности. Истинно наставляет и дарует
                ваджрную правомочность тела, речи и мысли (sku gsung thugs).</p>

            <p>Кроме того, в посвятительном ритуале (dbang bskur ba'i cho ga) имеются:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">ритуал освящения (rab gnas) правомочности в божестве (lha),</li>
                <li class="my-2">ритуал приумножения правомочности (dbang gi yan lag gi
                    cho ga)<a href="#citation-98" id="ref-98"
                              class="citation-mark"><sup>98</sup></a>,
                </li>
                <li class="my-2">«сжигание накопленного» (sbyin sreg) — способ обрадовать
                    божество (lha),
                </li>
                <li class="my-2">«круг жертвоприношения» — способ обрадовать даков
                    (mkha' 'gro mnyes pa'i thabs tshogs 'khor)<a href="#citation-99" id="ref-99"
                                                                 class="citation-mark"><sup>99</sup></a>,
                </li>
                <li class="my-2">праздник подвижника (dpa' po'i ston mo)<a href="#citation-100"
                                                                           id="ref-100"
                                                                           class="citation-mark"><sup>100</sup></a>,
                </li>
                <li class="my-2">праздник подвижницы (dpa' mo'i ston mo),</li>
                <li class="my-2">жертва руки (lag pa'i mchod)<a href="#citation-101" id="ref-101"
                                                                class="citation-mark"><sup>101</sup></a>,
                </li>
                <li class="my-2">жертва в руке (lag pa la mchod) и другие правила исполнения (byed
                    tshul).
                </li>
            </ol>

            <p>Также:</p>

            <p><em>При неотступлении</em><a href="#citation-102" id="ref-102"
                                            class="citation-mark"><sup>102</sup></a> <em>от образа
                    действий</em> (cha
                lugs) Видьядхары, к принятым обетам (dam tshig) прибавляются:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">пук волос (gtsug tor),</li>
                <li class="my-2">пять генезисов (rigs lnga; pañcakula)<a href="#citation-103"
                                                                         id="ref-103"
                                                                         class="citation-mark"><sup>103</sup></a>,
                </li>
                <li class="my-2">лента подвижника (dpa' po'i dar dbyangs)<a href="#citation-104"
                                                                            id="ref-104"
                                                                            class="citation-mark"><sup>104</sup></a>,
                </li>
                <li class="my-2">накидка (stod gyogs),</li>
                <li class="my-2">штаны или юбка (smad gyogs),</li>
                <li class="my-2">барабанчик (cang te'u),</li>
                <li class="my-2">барабанчик дамару (da ma ru),</li>
                <li class="my-2">ваджр (rdo rje),</li>
                <li class="my-2">колокол (dril bu),</li>
                <li class="my-2">большой ритуальный ковш (dgang gzar)<a href="#citation-105"
                                                                        id="ref-105"
                                                                        class="citation-mark"><sup>105</sup></a>,
                </li>
                <li class="my-2">малый ритуальный ковш (blug gzar),</li>
                <li class="my-2">шесть украшений из костей (rus pai rgyan drug),</li>
                <li class="my-2">чаша из черепа (ka pā la),</li>
                <li class="my-2">жезл Херуки (kha twam ga, khaṭvāṅga),</li>
                <li class="my-2">передник из тигровой шкуры (stag lpags kyi sham thabs),</li>
                <li class="my-2">трон из трупа (ro gdan),</li>
                <li class="my-2">чистая нить (tshangs skud)<a href="#citation-106" id="ref-106"
                                                              class="citation-mark"><sup>106</sup></a>
                    и другие необходимые для этого метода (lugs) предметы (yo byad).
                </li>
            </ol>

            <p>По становлении сосудом, исполняют обеты и нравственные обязательства, из которых <em>обет
                    пяти генезисов</em> (rigs lnga'i dam tshig) означает:</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">придерживаясь трех [компонентов парамиты] нравственности (tshul
                    khrims)<a href="#citation-107" id="ref-107" class="citation-mark"><sup>107</sup></a>,
                    прийти к прибежищу [Трех Драгоценностей] — это обет Вайрочаны (rNam snang gi dam
                    tshig),
                </li>
                <li class="my-2">ваджр (rdo rje), колокол (dril bu), мудра (phyag rgya), контакт
                    с Учителем (slob dpon gzung ba) — это обет Акшобхьи (Mi bskyod pa'i dam tshig),
                </li>
                <li class="my-2">отдача собственных вещей (zang zing), проповедь Учения
                    (chos), проявление неустрашимости (mi 'jigs pa) и доброты (byams pa) — эти
                    четыре [компонента] отдачи, а также отдача богатства (nor), сердца богатства
                    (nor gyi snying po),
                    составных частей (yan lag), сердца составных частей (yan
                    lag gi snying po), исполняемые ежедневно в шесть периодов времени, составляют
                    обет Ратнасамбхавы (Rin 'byung
                    gi dam tshig)<a href="#citation-108" id="ref-108"
                                    class="citation-mark"><sup>108</sup></a>,
                </li>
                <li class="my-2">принятие учения (chos, dharma) внешнего (phyi), сокровенного (gsang
                    ba) и трех колесниц (theg pa gsum) —
                    это обет Акшобхьи ('Od dpag med kyi dam tshig),
                </li>
                <li class="my-2">усердие в деле жертвоприношения (mChod pa'i las la brtson
                    pa) — это обет Амогхасиддхи.
                </li>
            </ol>

            <p><em>Четырнадцать коренных падений</em> суть (rtsa ltung):</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">дурно отзываться о ваджрном Учителе (rdo rje slob dpon la brnyas
                    pa);
                </li>
                <li class="my-2">отойти от наставлений Сугаты (bde gshegs bka' las 'das pa);</li>
                <li class="my-2">рассердившись на ваджрного брата (сестру), сваливать вину
                    [на него] (rdo rje spun la khros nas nyes pa brjod pa)<a href="#citation-109"
                                                                             id="ref-109"
                                                                             class="citation-mark"><sup>109</sup></a>;
                </li>
                <li class="my-2">отказываться от чувства доброжелательности по отношению хотя бы к
                    одному живому существу (sems сan gang
                    yang rung ba la byams pa slong ba);
                </li>
                <li class="my-2">оставить благоговение (smon sems gtong ba);</li>
                <li class="my-2">порицать убеждения свои и других (rang gzhan gyi grub pa'i mtha' la
                    smod pa);
                </li>
                <li class="my-2">учить тайному тех, кто не является [достойным] сосудом (snod min la
                    gsang ba ston pa);
                </li>
                <li class="my-2">хулить свои <em>скандхи</em> (rang gi phung po la brnyas pa)<a
                        href="#citation-110" id="ref-110" class="citation-mark"><sup>110</sup></a>;
                </li>
                <li class="my-2">отказываться от постижения шуньи (stong nyid la yid mches
                    spong ba)<a
                        href="#citation-111" id="ref-111" class="citation-mark"><sup>111</sup></a>;
                </li>
                <li class="my-2">при исполнении суровых ритуалов жалеть соответствующие объекты
                    (mngon spyod bya bar 'os pa'i yul la
                    byams pa)<a href="#citation-112" id="ref-112"
                                class="citation-mark"><sup>112</sup></a>;
                </li>
                <li class="my-2">дхармы не имеют «Я» — не придерживаться этого взгляда, отойти [от
                    него] хотя бы раз (chos bdag med pa'i lta ba
                    yid bzhin du ma bskyangs par zhag gcig 'da' ba);
                <li class="my-2">хулить истинно чистую мысль (dag pa dang ldan pa'i sems sun 'byin
                    pa);
                </li>
                <li class="my-2">предметы обета, мать-Видью и пр. не принять в соответствии со своей
                    способностью понимания их в чистоте (dam tshig gi rdzas dang rigs sogs bsten nus
                    bzhin du dang du mi len pa) либо, как в <em>йогатантре</em>, принизив,
                    отказавшись
                    от [атрибутов] ваджра и колокола, от мудр рук, отбросить
                    [их] (rnal 'byor rgyud ltar na rdor dril lag pa'i phyag rgya sogs
                    smad nas 'dor ma gang rung) — это не равнозначно<a href="#citation-113"
                                                                       id="ref-113"
                                                                       class="citation-mark"><sup>113</sup></a>;
                </li>
                <li class="my-2">рассказывать обычной женщине об имеющихся [у нее] недостатках
                    грубыми словами (bud med spyi la smod tshig tu 'gro ba'i skyon brjod byed pa).
                </li>
            </ol>

            <p><em>Восемь грубых</em> [<em>падений</em>] суть (sbom po brgyad):</p>

            <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                <li class="my-2">взять интуицию силою (shes rab stobs kyis len pa);</li>
                <li class="my-2">cилою получить ее нектар (bdud rtsi);</li>
                <li class="my-2">не являющемуся сосудом демонстрировать сокровенные
                    атрибуты (gsang rdzas) и мудры (phyag rgya);
                </li>
                <li class="my-2">заводить споры среди собравшихся (tshogs kyi nang du rtsod
                    pa)<a href="#citation-114" id="ref-114" class="citation-mark"><sup>114</sup></a>;
                </li>
                <li class="my-2">обучать дхарме верующего не по смыслу [задаваемых им]
                    вопросов, а по-другому (dad ldan la dri ba'i don las gzhan du
                    chos ston pa);
                </li>
                <li class="my-2">находиться семь дней среди <em>шраваков</em> (nyan thos kyi nang du
                    zhag bdun gnas pa);
                </li>
                <li class="my-2">ложно возгордиться, что ты йог (rdzun gyis rnal 'byor nga
                    rgyal byed pa)<a href="#citation-115" id="ref-115" class="citation-mark"><sup>115</sup></a>,
                </li>
                <li class="my-2">обучать Дхарме того, кто в нее не верит (dad pa med pa la chos ston
                    pa).
                </li>
            </ol>

            <p>Количество же не вошедших в настоящий [перечень] грубых [падений] безгранично.
                [Однако] в [тантре] Калачакры проповедано, что эти [падения], некоторые не описанные
                (mi 'dri / mi 'bri)<a href="#citation-116" id="ref-116" class="citation-mark"><sup>116</sup></a>
                и перечень основных терминов, [описывающих грубые падения], в основном [могут быть]
                собраны в эти [восемь].</p>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            <!-- Примечания -->
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ</h4>

                <p class="my-2" id="citation-56"><sup>56</sup> В отцовских и материнских тантрах
                    целью является совпадение в единстве метода и интуиции, блаженства и шуньи. В
                    отцовских тантрах более пристальное внимание уделяется методу, в материнских
                    интуиции, но и там и там другой стороной совершенствующегося процесса не
                    пренебрегают; выбор ищущим той или иной тантры зависит от его психологического
                    типа, от того, преобладает в нем рациональная или эмоциональная сторона.<a
                        href="#ref-56" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-57"><sup>57</sup> Даки и Дакини хранители и
                    хранительницы тантрийского учения. Считается, что они пребывают в особом мире,
                    где практикуют йогическое созерцание.<a href="#ref-57"
                                                            class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-58"><sup>58</sup> Всеобщий закон причинности (rgyu)
                    служит основой совершенствующего движения.<a href="#ref-58"
                                                                 class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-59"><sup>59</sup> См. прим. 12.<a href="#ref-59"
                                                                               class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-60"><sup>60</sup> Здесь smin par byed pa = me [1: VII,
                    494]. Буквально этот термин
                    означает практику созревания плодов йоги, которая заключается в специальных
                    йогических упражнениях в <em>пранаяме</em> (srog stsol, prāṇayāma), третьей
                    ступени Шестичленной йоги. Она состоит из очистительных дыхательных
                    упражнений, из упражнений по насыщению организма праной (srog 'dzin,
                    prāṇa), из последующего разжигания с помощью этой праны внутреннего
                    огня (мистической теплоты йоги) и окончательной реализации плодов йоги
                    последующей практикой.<a href="#ref-60"
                                             class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-61"><sup>61</sup> В эту ступень метода вышеописанная
                    <em>пранаяма</em> уже входит,
                    но окончательная реализация плодов (smin pa) достигается лишь на следующих
                    ступенях.<a href="#ref-61"
                                class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-62"><sup>62</sup> С практикой степени рождения и
                    степени завершения тесно связана
                    практика Шестичленной буддийской йоги:<a href="#ref-62"
                                                             class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8">
                    <li class="my-2">1) so sor bsdud, pratyāhāra — удержание чувств от их
                        объектов;
                    </li>
                    <li class="my-2">2) bsam gtan, dhyāna — созерцание, состояние сосредоточения;
                    </li>
                    <li class="my-2">3) srog stsol, prāṇayāma — см. прим. 60;</li>
                    <li class="my-2">4) 'dzin pa, dharaṇa — созерцание мантры основного идама на
                        сердце;
                    </li>
                    <li class="my-2">5) rjes dran, anusmṛti — «воспоминание», постоянное возвращение
                        ума
                        на объект созерцания;
                    </li>
                    <li class="my-2">6) ting nge 'dzin, samādhi — объект созерцания занимает весь ум
                        целиком, вытесняя из него остальное содержание.
                    </li>
                </ul>
                <p>
                    Настоящее описание дано по 20: XVIII.
                </p>
                <p class="my-2" id="citation-63"><sup>63</sup> nye = nye bar = rnam par [1: VII,
                    752]. На этой ступени реализуется
                    необусловленное конечное тождество сансары и нирваны (srid zhi mnyam
                    nyid).<a href="#ref-63"
                             class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-64"><sup>64</sup> Украшение (rgyan, alaṃkāra) означает
                    деяние на благо живых существ [1: VI, 442 – 443].<a href="#ref-64"
                                                                        class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="my-2" id="citation-65"><sup>65</sup> tshig don — словесный смысл.<a
                        href="#ref-65" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-66"><sup>66</sup> Здесь (bye ba phrag = bye brag, а не
                    10 миллионов.<a href="#ref-66" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-67"><sup>67</sup> Служение (bsnyen pa, sevā) включает
                    практики:<a href="#ref-67" class="text-blue-500 hover:underline">↩</a></p>
                <ul class="list-none pl-5 space-y-1 ml-16">
                    <li class="my-2">а) обычную (sāmānya),</li>
                    <li class="my-2">б) высшую (uttama).</li>
                </ul>
                <p>
                    Первая состоит из четырех ваджров, которые суть:
                </p>
                <ol class="list-decimal list-outside ml-16 space-y-1 pl-5">
                    <li class="my-2">созерцание шуньяты (sbyangs, śucitā — очищение),</li>
                    <li class="my-2">появление из шуньевой сущности зародышевой буквы,</li>
                    <li class="my-2">ее развитие в форму созерцаемого божества,</li>
                    <li class="my-2">явление божества перед созерцающим.</li>
                </ol>
                <p>
                    Высшая практика состоит из нектара мудрости. На этой ступени практикуют
                    Шестичленную йогу (см. прим. 62).
                </p>
                <p class="my-2" id="citation-68"><sup>68</sup> Реализация посвящения включает три
                    ступени:<a href="#ref-68" class="text-blue-500 hover:underline">↩</a></p>
                <ol class="list-decimal list-outside ml-16 space-y-1 pl-5">
                    <li class="my-2">начальная степень реализации (bsnyen sgrub, upasādhana),</li>
                    <li class="my-2">путь достижения (sgrub pa, sādhana),</li>
                    <li class="my-2">путь великого йогического достижения (sgrub pa chen po,
                        mahāsādhana).
                    </li>
                </ol>
                <p>
                    Настоящее описание степени служения и степени реализации дано по <em>Гухьясамаджатантре</em>.
                </p>
                <p class="my-2" id="citation-69"><sup>69</sup> Эти знаки, указывающие на близость
                    просветления, появляются на
                    четвертой ступени Шестичленной йоги. Они бывают пяти видов и завершаются
                    появлением в уме йогина постоянного света подобно свету, излучаемому безоблачным
                    небом.<a href="#ref-69"
                             class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-70"><sup>70</sup> Термин «ритуал» (cho ga, kalpa)
                    означает движение к пониманию
                    [1: VI, 658]: cho ga'i skad dod | kalpa zhes pa rtogs pa la yang 'gro.<a
                        href="#ref-70" class="text-blue-500 hover:underline">↩</a></p>

                <p class="my-2" id="citation-71"><sup>71</sup> bgegs, vighna — посланники мары,
                    создающие помехи, препятствия
                    в созерцании. bka' — приказ, то есть приказ им удалиться и не мешать. Этот
                    приказ они исполняют в силу заслуг йогина, которым они не могут противостоять.<a
                        href="#ref-71"
                        class="text-blue-500 hover:underline">↩</a></p>
                <p class="mb-3" id="citation-72"><sup>72</sup> Различные типы <em>жинхоров</em>
                    строятся на разных основаниях.<a href="#ref-72"
                                                     class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-73"><sup>73</sup> В пунктах б – е указывается на
                    порядок построения и форму мандалы.<a href="#ref-73"
                                                          class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-74"><sup>74</sup> См. прим. 71.<a href="#ref-74"
                                                                               class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-75"><sup>75</sup> phur bu — особый ритуальный нож с
                    ручкой в виде ваджра, которым
                    мешающие созерцанию мары и пр. приколачиваются к земле. Преимущественный ритуал
                    системы gcod yul [21: 426].<a href="#ref-75"
                                                  class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-76"><sup>76</sup> Здесь lha mo — это не тантрийское
                    божество Лхамо, а та богиня,
                    которая охраняет место, где создается <em>жинхор</em>.<a href="#ref-76"
                                                                             class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-77"><sup>77</sup> Это технические термины для
                    обозначения двух видов ритуальных кувшинов:<a href="#ref-77"
                                                                  class="text-blue-500 hover:underline">↩</a>
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">vijayakumbha — иначе называется tshe bum, кувшин жизни; у него
                        имеется носик;
                    </li>
                    <li class="my-2">karmakumbha — кувшин без носика.</li>
                </ol>
                <p>Применяются в различных ритуалах.</p>
                <p class="mb-3" id="citation-78"><sup>78</sup> Подробно об этом см. текст [21].<a
                        href="#ref-78" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-79"><sup>79</sup> Учитель «дверей» (sgo'i slob dpon) —
                    Учитель, открывающий три
                    двери в тантру: обетов, мудрости и самадхи. Всеисполняющий (или кармовый) ваджр
                    (las kyi rdo rje; karmavajra) — ученик, исполняющий ритуальные
                    действия во время чтения Учителем ритуала.<a href="#ref-79"
                                                                 class="text-blue-500 hover:underline">↩</a>
                </p>
                <p>Lhag gnas ni sta gon: готовность, то есть подготовительный ритуал [1: VII,
                    1321].</p>
                <p class="mb-3" id="citation-80"><sup>80</sup> Цель этой практики — проснуться от
                    привязанности к сансарным объектам и направить мысль на реализацию истинности,
                    данной в образе тантрийского идама:<a href="#ref-80" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p>
                    rmi lam med lha | [1: VII, 482].
                </p>
                <p>
                    Здесь мандала — это ритуальный предмет. В этом случае, когда речь
                    идет о «дворце» созерцаемого идама, месте реализации тождества блаженства и
                    шуньи, в нашем переводе оставлено тибетское слово «жинхор», согласно
                    произношению моего Учителя.
                </p>

                <p class="mb-3" id="citation-81"><sup>81</sup> Здесь khyor chu — это не просто
                    «горсть воды», но определенное
                    по ритуалу ее количество.<a href="#ref-81"
                                                class="text-blue-500 hover:underline">↩</a>
                </p>
                <p>
                    Три компонента жертвоприношения суть:
                </p>
                <ol class="list-decimal list-outside ml-16 space-y-1 pl-5">
                    <li class="my-2">chu gnyis — «два вида воды»: для омовения ног и для омовения
                        лица,
                    </li>
                    <li class="my-2">nyer spyod lnga — «пять видов подношений»: цветы, благовония,
                        светильник, ароматические масла, пища,
                    </li>
                    <li class="my-2">rol mo — музыка — итого восемь. Это обычный жертвенник.</li>
                </ol>
                <p class="mb-3" id="citation-82"><sup>82</sup> Ритуальная пирамидка из муки с
                    добавлением различных компонентов и в различном исполнении.<a href="#ref-82"
                                                                                  class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-83"><sup>83</sup> Для защиты от действия мар.<a
                        href="#ref-83" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-84"><sup>84</sup> Вообще говоря, речь идет о гимнах,
                    обращенных к Учителям и идамам, под общим названием gsol 'debs.<a href="#ref-84"
                                                                                      class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-85"><sup>85</sup> Эта так называемая «гордость» не
                    имеет ничего общего с клешей
                    «гордость» и означает проникновение духовностью созерцаемого идама.<a
                        href="#ref-85" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-86"><sup>86</sup> Пять предметов, радующих пять органов
                    чувств, назначением которых является рождение исключительной мудрости тождества
                    блаженства
                    и шуньи в сфере деятельности этих органов чувств [23: 28б – 29а].<a
                        href="#ref-86" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-87"><sup>87</sup> Буквально четыре матери-Видьи. Их
                    появление в <em>жинхоре</em> символизирует появление у йогина особых видов
                    знания.<a href="#ref-87" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-88"><sup>88</sup> Пять компонентов очищения желаний,
                    рождающихся в сфере деятельности пяти органов чувств.<a href="#ref-88"
                                                                            class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-89"><sup>89</sup> Семь драгоценностей суть:<a
                        href="#ref-89" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ol class="list-decimal list-outside ml-16 space-y-1 pl-5">
                    <li class="my-2">колесо — 'khor lo, cakra,</li>
                    <li class="my-2">волшебный талисман — nor bu, cintāmaṇi,</li>
                    <li class="my-2">супруга — btsun mo, strī,</li>
                    <li class="my-2">советник — blon po, mantrin,</li>
                    <li class="my-2">слон — glang po, hastin,</li>
                    <li class="my-2">конь — rta mchog, aśva,</li>
                    <li class="my-2">военачальник — dmag dpon, senāpati.</li>
                </ol>
                <p>
                    Нет нужды говорить, что эти семь драгоценностей, как и восемь счастливых примет,
                    представляют собой символы определенных созерцательных
                    реалий.
                </p>
                <p class="mb-3" id="citation-90"><sup>90</sup> Восемь счастливых примет, согласно
                    преданию, Будда увидел в квашеном молоке с рисом, который поднесла ему женщина
                    по имени Суджата
                    (Legs skyes ma, Sujātа). Увидев их, он понял, что цель близка.<a href="#ref-90"
                                                                                     class="text-blue-500 hover:underline">↩</a>
                </p>
                <p>Они суть:</p>
                <ol class="list-decimal list-outside ml-16 space-y-1 pl-5">
                    <li class="my-2">зонт — gdugs, chatra,</li>
                    <li class="my-2">пара золотых рыбок — gser nya, suvarnamatsya,</li>
                    <li class="my-2">кувшин — bum pa, kalaśa,</li>
                    <li class="my-2">лотос — padma,</li>
                    <li class="my-2">раковина — dung dkar, śaṅkha,</li>
                    <li class="my-2">волшебный узел — dpal be'u; śrīvatsa,</li>
                    <li class="my-2">знамя — rgyal mtshan, dhvaja,</li>
                    <li class="my-2">колесо — 'khor lo, cakra.</li>
                </ol>
                <p class="mb-3" id="citation-91"><sup>91</sup> Сиддхи — достижения на пути
                    совершенствования. Они подразделяются на восемь обычных и два высших, которые
                    предполагают возможность непосредственного контакта с идамом. Здесь имеются в
                    виду именно
                    эти последние.<a href="#ref-91" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-92"><sup>92</sup> Основанием для такого перевода служит
                    дальнейшее изложение, а также монгольский текст.<a href="#ref-92"
                                                class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-93"><sup>93</sup> skor ba, pradakṣiṇa — обход посолонь
                    объекта почитания с почтительно сложенными руками.<a href="#ref-93"
                                                                         class="text-blue-500 hover:underline">↩</a>
                </p>
                <p>Phyag = phyag 'tshal, namas (от nam — кланяться).</p>
                <p class="my-3" id="citation-94"><sup>94</sup> Правомочность слова (тиб. tshig gi
                    dbang, санскр. vāg-adhiṣṭhāna) — четвертое посвящение (dbang bzhi pa) в традиции
                    Ануттарайога-тантры, завершающее полный цикл тантрических посвящений. Оно
                    передает способность реализовать природу ума через силу речи и прямое указание
                    Учителя (ngo sprod). Это высшее из четырех посвящений считается необходимым для
                    практики стадии завершения (rdzogs pai rim pa) и напрямую указывает на
                    недвойственную природу ума. Посвящение слова наделяет практикующего
                    правомочностью выражать просветленное состояние посредством мантры и священного
                    слова, что способствует полной интеграции тела, речи и ума. Оно является
                    наиболее тонким из всех посвящений, поскольку работает на уровне тончайшей
                    энергии и сознания.<a href="#ref-94"
                                          class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-95"><sup>95</sup> Или колокол с ручкой из ваджра
                    (vajraghaṇṭa).<a href="#ref-95" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-96"><sup>96</sup> Точнее говоря, обет придерживаться
                    определенного образа действий.<a href="#ref-96"
                                                     class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-97"><sup>97</sup> nges don = don dam pa.<a
                        href="#ref-97" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-98"><sup>98</sup> yan lag = sgro — увеличивать; термин
                    из тайного языка даков (mkha'
                    'gro gsang ba'i brda).<a href="#ref-98"
                                             class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-99"><sup>99</sup> Здесь tshogs означает «собранное», то
                    есть собранное для жертвоприношения. При этом жертвенные предметы расставляются
                    по кругу либо
                    подносится мандала. Tshogs означает также «собрание», так как этот ритуал
                    йогин совершает вместе с супругой.<a href="#ref-99"
                                                         class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-100"><sup>100</sup> Этот и следующий ритуалы
                    совершаются в уединении.<a href="#ref-100"
                                               class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-101"><sup>101</sup> lag pa... lha mtshams [1: VII,
                    965].<a href="#ref-101" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-102"><sup>102</sup> mi nyams — не ослабевание.<a
                        href="#ref-102" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-103"><sup>103</sup> В монгольском тексте добавлено
                    слово, переводимое как мистическая формула. Очевидно, имеются в виду мантры пяти
                    генезисов.<a href="#ref-103" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-104"><sup>104</sup> Широкая шелковая лента, носимая
                    через плечо. Во время созерцания йогин перекидывает нижнюю часть этой ленты
                    через колени для обретения устойчивости в сидячем положении, так как тело не
                    должно быть
                    напряжено.<a href="#ref-104" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-105"><sup>105</sup> Эти ковши используются в одной из
                    разновидностей ритуала sbyin
                    bsreg, homa. В большом содержится топленое масло, малым черпается
                    и льется в огонь.<a href="#ref-105" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-106"><sup>106</sup> Плетеная нить, носимая на плечах и
                    затем пропущенная подмышками. Имеет ритуальное значение как знак связи с
                    трансцендентными объектами.<a href="#ref-106"
                                                  class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-107"><sup>107</sup> Они суть:<a href="#ref-107"
                                                                             class="text-blue-500 hover:underline">↩</a>
                </p>
                <ol class="list-decimal list-outside ml-8 space-y-1 pl-5">
                    <li class="my-2">отказ от преступных деяний (nyes spyod sdom pa),</li>
                    <li class="my-2">освоение благого учения (dge ba chos sdad),</li>
                    <li class="my-2">деятельность во благо живых существ (sems can don byed).</li>
                </ol>
                <p class="my-3" id="citation-108"><sup>108</sup> Последние четыре компонента
                    парамиты отдачи реализуются
                    лишь через тантрийское созерцание и в других перечислениях компонентов
                    этой парамиты не встречаются. Здесь отдача богатства (nor) означает отдачу
                    богатства воспринятых наставлений делу тантрийского совершенствования. Отдача
                    сердца богатства — отдача плодов совершенствования делу
                    достижения блага живыми существами. Составная часть — составная часть
                    метода. Его сердце — проявление великого милосердия. Шесть периодов
                    времени — сутки, разделенные на 6 периодов по 4 часа<a href="#ref-108"
                                                                           class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-109"><sup>109</sup> То есть гневаться на человека, с
                    которым получал посвящение
                    от одного Учителя.<a href="#ref-109" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-110"><sup>110</sup> То есть считать, что «грязное» тело
                    не может совершенствоваться
                    до Нирваны.<a href="#ref-110" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-111"><sup>111</sup> yid mches = yid ches, pratīti —
                    постижение.<a href="#ref-111" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-112"><sup>112</sup> Например, при подавлении мар жалеть
                    их и тем самым не выполнять задачу. Считается, что тело и речь мар служат делу
                    нанесения вреда
                    живым существам и потому подлежат подавлению, сознание же их йогин
                    направляет в Нирвану.<a href="#ref-112"
                                            class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-113"><sup>113</sup> Видимо, речь идет о том, что в
                    йогатантре отказ от атрибутов <em>ваджр</em> и <em>дильбу</em> (колокол) и от
                    мудр рук в их предметности является падением,
                    в ануттарайогатантре упор делается на постижение внутреннего содержания символов
                    и, в конечном счете, выход за рамки предметности, распространение содержания
                    символов и действия атрибутов на любой конкретный объект, так как тридцать семь
                    направлений бодхисаттвовской мысли охватывают все познаваемое. Поэтому
                    признается необходимым принятие
                    предметов обета в их чистоте, то есть понимание их истинного смысла,
                    не ограниченного предметностью символа.<a href="#ref-113"
                                                              class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-114"><sup>114</sup> То есть собравшихся для проведения
                    ритуалов.<a href="#ref-114" class="text-blue-500 hover:underline">↩</a>
                </p>
                <p class="mb-3" id="citation-115"><sup>115</sup> В одном из текстов мне встречалась
                    следующая формулировка этого падения: гордо считать себя йогом, не будучи
                    таковым, а лишь едва посвятившись в начальные правила. Ср. «Царскую песнь»
                    Сарахи:<a href="#ref-115" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8">
                    <li class="my-2">«Некоторые люди, которые возбудили внутренний огонь...</li>
                    <li class="my-2">В гордости называют себя йогами.</li>
                    <li class="my-2">Введенные в заблуждение, они не отличают драгоценный</li>
                    <li class="my-2">Камень от того, каким, по их мнению, он должен быть». [24:
                        24–25]
                    </li>
                </ul>
                <p class="my-3" id="citation-116"><sup>116</sup> mi 'dri — не заданные ситуации, о
                    которых можно было бы сказать,
                    что они суть грубые падения. <a href="#ref-116"
                                                    class="text-blue-500 hover:underline">↩</a>
                </p>

            </div>
            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">
        </div>
        <!-- Нижняя навигация -->
        @include('layouts.article-navigation', [
            'currentPart' => 5,
            'totalParts' => 7,
            'routeName' => 'pupishev_articles.source_of_sages',
            'articleTitle' => 'статьи'
        ])    </div>
@endsection
