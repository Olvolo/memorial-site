@extends('layouts.app')
@section('title', 'Ответы на вопросы о Ваджрасаттве, данные наставником Пэльяном — Часть 4')

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
            'currentPart' => 4,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])

        <div class="text-justify text-gray-800 text-base sm:text-lg leading-relaxed space-y-6">
            <h2 class="text-2xl font-bold text-center text-zinc-700 mb-8">Ответы на вопросы о
                Ваджрасаттве,<br>данные наставником Пэльяном<br>Часть 4</h2>

            {{-- Список вопросов, нумерация начинается с 31 --}}
            <ol class="space-y-8 list-decimal list-outside ml-6 pl-2 md:ml-8 md:pl-4" start="31">
                <!-- Вопрос 31 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Это спонтанное самадхи – осуществляется ли оно
                        через усилие или же без усилия?<a
                            href="#citation-51" id="ref-51" class="citation-mark"><sup> 51</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Что до осуществляемого [самадхи],</p>
                        <p>То [поначалу] постепенно</p>
                        <p class="pl-4">[добивайся] медитативного сосредоточения (<em>samāhita</em>)
                        </p>
                        <p>через усилие.</p>
                        <p>Когда, навыкнув, втянешься в поток [практики],</p>
                        <p class="pl-4">то постепенно</p>
                        <p>[Самадхи] осуществится спонтанно, без приложения усилий<a
                                href="#citation-52" id="ref-52" class="citation-mark"><sup> 52</sup></a>.
                        </p>
                    </div>
                </li>

                <!-- Вопрос 32 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Не является ли противоречием утверждать, что
                        осуществляемое через усилие возникает без усилий?<a href="#citation-53"
                                                                            id="ref-53"
                                                                            class="citation-mark"><sup>
                                53</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Очевидно, что живым существам необходимо [прикладывать] усилия,</p>
                        <p>Но будет ли [от этого] ложным [утверждение,</p>
                        <p class="pl-4">что состояние] Победоносца спонтанно?</p>
                        <p>Так с изучением букв и т.д.,</p>
                        <p class="pl-4">когда, постепенно прилагая усилия,</p>
                        <p>Обретёшь навык, то будешь бегло читать уже без труда.</p>
                    </div>
                </li>

                <!-- Вопрос 33 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Говорят, что нет нужды хранить клятвы. Нет ли
                        тут противоречия?<a
                            href="#citation-54" id="ref-54" class="citation-mark"><sup> 54</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Как [чисты] помыслы и деяния Мудреца без «я»,</p>
                        <p>[Так и тот, кто] не цепляется за «я»,</p>
                        <p class="pl-4">не нарушает обетов тремя вратами</p>
                        <p class="pl-4">ни на толику;</p>
                        <p>Нет ему нужды беречь обеты.</p>
                        <p>Спроси[-ка лучше] себя, не нарушил ли ты обет,</p>
                        <p class="pl-4">цепляясь за своё «я»?</p>
                    </div>
                </li>

                <!-- Вопрос 34 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Каким образом следует смотреть на своё тело,
                        как на проявление Махамудры, своего самадхи – как мандала?<a
                            href="#citation-55" id="ref-55"
                            class="citation-mark"><sup>55</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>[Материальное] тело из великих элементов</p>
                        <p class="pl-4">и Махамудра [каи идама]</p>
                        <p>Суть лишь аспекты ума,</p>
                        <p class="pl-4">так что нет никакого «тела».</p>
                        <p>Явленность мандала</p>
                        <p class="pl-4">разворачивается и пребывает,</p>
                        <p>Но это лишь аспекты самадхи,</p>
                        <p class="pl-4">твой собственный ум.</p><br>
                        <p>Ум и [его] проявления,</p>
                        <p class="pl-4">наделённые конкретными признаками, нераздельны.</p>
                        <p>Явленные аспекты себя и другого</p>
                        <p class="pl-4">имеют один и тот же источник.</p>
                        <p>«Моё тело – владыка [мандалы]» – не думай так.</p>
                        <p>Все [дхармы] – твоё тело,</p>
                        <p>на всё смотри, как на Нирманакаю.</p>
                    </div>
                </li>

                <!-- Вопрос 35 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Каково поведение, сообразное с писаниями
                        Махайоги?<a href="#citation-56" id="ref-56"
                                    class="citation-mark"><sup> 56</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Постижение и самадхи – Ум и Тело Победоносца.</p>
                        <p>Всегда [практикуй] без уныния, без упования<a href="#citation-57"
                                                                         id="ref-57"
                                                                         class="citation-mark"><sup>
                                    57</sup></a>.</p>
                        <p>Так великий царь, покорив страну,</p>
                        <p>Повелевает и правит всей ею, без исключения.</p>
                    </div>
                </li>

                <!-- Вопрос 36 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Сообразно ли с писанием, если йогин делает
                        подношения местным тибетским божкам и демонам.<a href="#citation-58"
                                                                         id="ref-58"
                                                                         class="citation-mark"><sup>
                                58</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Если дал клятву Самантабхадра-Ваджрасаттвы,</p>
                        <p>То возносить жертвы мирским божкам да нагам –</p>
                        <p>Всё равно, что царю вести себя подобно простолюдину;</p>
                        <p>Это несообразно положению, противоречит смыслу йоги.</p>
                    </div>
                </li>

                <!-- Вопрос 37 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Не грешно ли созерцать, как гневные [идамы]
                        попирают ногами богов?<a
                            href="#citation-59" id="ref-59" class="citation-mark"><sup> 59</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>У абсолютной истины – один вкус,</p>
                        <p class="pl-4">нет в ней ни высокого, ни низкого.</p>
                        <p>Ум, оставивший одержимость понятиями «я» и «другое»,</p>
                        <p>Знает, что всё [это] – [искусный] метод,</p>
                        <p class="pl-4">так что нет тут никакого прегрешения;</p>
                        <p>При правильном понимании,</p>
                        <p class="pl-4">нет [тут] на самом деле [никакого] подавления.</p>
                    </div>
                </li>

                <!-- Вопрос 38 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Если исполнил служение одному Татхагате, будут
                        ли исполнены деяния всех [Татхагат]?<a
                            href="#citation-60" id="ref-60" class="citation-mark"><sup> 60</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Какому бы Сугате не исполнил служение,</p>
                        <p>Если через глубокое и обширное воззрение достиг понимания,</p>
                        <p>Хотя все деяния многих Победоносцев предприняты,</p>
                        <p class="pl-4">все будут исполнены – так учат мудрые.</p>
                    </div>
                </li>

                <!-- Вопрос 39 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Говорят, что когда весьма преуспел в
                        «подвигах» с предметами обета внутреннего [подношения]<a href="#citation-61"
                                                                                 id="ref-61"
                                                                                 class="citation-mark"><sup>
                                61</sup></a>, то даже если не [станешь] созерцать [идама], то [всё
                        равно] обретёшь [состояние Будды]. Не врут ли?<a href="#citation-62"
                                                                         id="ref-62"
                                                                         class="citation-mark"><sup>
                                62</sup></a>
                    </h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Что до этих так называемых «предметов для достижения»,</p>
                        <p>Через упражнение в праджне и самадхи достигается [состояние Будды],</p>
                        <p>Без них – не реализация будет, одно только скотство.</p>
                        <p>Потому запасись-ка [лучше тем], что [действительно] нужно для йоги.</p>
                    </div>
                </li>

                <!-- Вопрос 40 -->
                <li class="space-y-3">
                    <h3 class="text-lg font-semibold">Верно ли, что когда обрёл большую магическую
                        силу, то совершенствование познаний в Дхарме не так уж и важно?<a
                            href="#citation-63" id="ref-63"
                            class="citation-mark"><sup> 63</sup></a></h3>
                    <div class="italic pl-4 border-l-2 border-gray-300 space-y-2">
                        <p>Ничьё могущество в трёх мирах</p>
                        <p class="pl-4">не сравнится с могуществом Победоносца,</p>
                        <p>Что возникло от изучения и постижения</p>
                        <p class="pl-4">природы дхарм.</p>
                        <p>Поскольку без такого [постижения]</p>
                        <p class="pl-4">нет и просветлённой мысли,</p>
                        <p>Какой толк меряться могуществом</p>
                        <p class="pl-4">с якшами да ракшасами?</p>
                    </div>
                </li>
            </ol>

            <!-- Разделительная черта -->
            <hr class="my-8 border-t-4 border-gray-500">

            {{-- Примечания к вопросам 31-40 --}}
            <div class="citations mt-4 text-lg">
                <h4 class="text-center text-gray-800 font-bold text-xl sm:text-xl md:text-xl my-4">
                    ПРИМЕЧАНИЯ
                </h4>

                <p class="mb-3" id="citation-51"><sup>51</sup> Тибетский текст тридцать первого
                    вопроса:<a href="#ref-51" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ting nge 'dzin lhun kyis grub par 'gyur de /</li>
                    <li class="my-2">/ rtsol bas 'grub 'am / rtsol ba med pas 'grub /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bsgrub par bya ba gang yin de la ni //</li>
                    <li class="my-2">rtsol bas yang nas yang du mnyam bzhag ste //</li>
                    <li class="my-2">goms pas klung tu gyur nas khad kyis ni //</li>
                    <li class="my-2">rtsol ba med pas lhun gyis grub par 'gyur /</li>
                </ul>

                <p class="mb-3" id="citation-52"><sup>52</sup> В ДХ говорится, что это и есть смысл
                    атийоги.<a href="#ref-52" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-53"><sup>53</sup> Тибетский текст тридцать второго
                    вопроса:<a href="#ref-53" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rtsol ba med pa'i rgyu rtsol bas grub par bshad pa mi 'gal lam /
                    </li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ sems can rtsol ba dgos pa mngon sum na //</li>
                    <li class="my-2">rgyal ba lhun kyis grub pa brdzun nam ci //</li>
                    <li class="my-2">yi ge la sogs rtsol bas yang nas yang /</li>
                    <li class="my-2">/ goms pas 'bad pa med par 'byung ba bzhin /</li>
                </ul>

                <p class="mb-3" id="citation-54"><sup>54</sup> Тибетский текст тридцать третьего
                    вопроса:<a href="#ref-54" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ dam tshig bsrung mi dgos zhes mchi ba 'gal lam mi 'gal /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ nga med thub pa'i dgongs dang mdzad pa bzhin //</li>
                    <li class="my-2">bdag tu 'dzin med sgo gsum nyes pa'i cha //</li>
                    <li class="my-2">rdul tsam mi 'byung sdom srung mi dgos pas //</li>
                    <li class="my-2">ngar 'dzin 'gal ba yod med rang la dris /</li>
                </ul>

                <p class="mb-3" id="citation-55"><sup>55</sup> Тибетский текст тридцать четвертого
                    вопроса:<a href="#ref-55" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bdag gi lus phyag rgya chen por snang ba dang /</li>
                    <li class="my-2">/ bdag gi ting nge 'dzin kyi dkyil 'khor la ci ltar blta bar bgyi /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ 'byung ba'i lus dang phyag rgya chen po yang</li>
                    <li class="my-2">sems kyi rnam pa yin phyir lus nyid med /</li>
                    <li class="my-2">/ dkyil 'khor sprul pa 'gyed cing bkod pa yang //</li>
                    <li class="my-2">ting 'dzin rnam pa yin pas bdag gi sems /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ sems dang rnam pa'i mtshan nyid dbyer med la //</li>
                    <li class="my-2">bdag dang gzhan snang rnam par 'go mnyam na /</li>
                    <li class="my-2">/ bdag lus gtso bo 'di zhes gzhag tu med /</li>
                    <li class="my-2">/ kun kyang lus yin thams cad sprul par blta /</li>
                </ul>

                <p class="mb-3" id="citation-56"><sup>56</sup> Тибетский текст тридцать пятого
                    вопроса:<a href="#ref-56" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ ci ltar spyad na ma ha yo ga'i gzhung dang mthun /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rtogs dang ting 'dzin rgyal ba'i thugs dang sku //</li>
                    <li class="my-2">rtag tu zhum pa med pas smon pa med /</li>
                    <li class="my-2">/ rgyal po chen po lta bu'i sa mnan nas /</li>
                    <li class="my-2">/ ma lus kun la sgo zhing dbang du byed /</li>
                </ul>

                <p class="mb-3" id="citation-57"><sup>57</sup> «Без уныния и упования» – т.е. не
                    теряя веры в обретение плода, но и не питая надежд.<a href="#ref-57" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-58"><sup>58</sup> Тибетский текст тридцать шестого
                    вопроса:<a href="#ref-58" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ rnal 'byor pa dag bod khams kyi lha ma srin dag la mchod pa
                        bgyid pa mchis na /
                    </li>
                    <li class="my-2">/ gzhung dang mthun nam mi mthun /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ kun bzang rdo rje sems par khas 'ches la //</li>
                    <li class="my-2">'jig rten lha klu dag la yar mchod pa //</li>
                    <li class="my-2">rgyal po dmangs kyi spyod pa byed pa bzhin /</li>
                    <li class="my-2">/ rkyen du mi 'tsham rnal 'byor don dang 'gal /</li>
                </ul>

                <p class="mb-3" id="citation-59"><sup>59</sup> Тибетский текст тридцать седьмого
                    вопроса:<a href="#ref-59" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ khro bo rnams kyi zhabs 'og tu /</li>
                    <li class="my-2">/ 'phags pa'i sku brdzis par 'byung na /</li>
                    <li class="my-2">/ 'di ltar bsgoms pa 'gal ba mchis sam ma mchis /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ don dam ro gcig mthon dman med pa la //</li>
                    <li class="my-2">bdag dang gzhan du zhen rtog spangs pa'i blos /</li>
                    <li class="my-2">/ thams cad thabs su shes na mi 'gal te //</li>
                    <li class="my-2">rtogs pa'i khyad par brtsan pas nges pa med /</li>
                </ul>

                <p class="mb-3" id="citation-60"><sup>60</sup> Тибетский текст тридцать восьмого
                    вопроса:<a href="#ref-60" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ de bzhin gshegs pa gcig la bsnyen pa bgyis na /</li>
                    <li class="my-2">/ kun kyi 'phrin las kyi rgyud rnams / 'grub 'am mi 'grub /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ bde bar gshegs pa 'ga' zhig bsnyen byas la //</li>
                    <li class="my-2">lta ba zab cing yangs pas 'phang chod na /</li>
                    <li class="my-2">/ rgyal ba mang po'i las rgyud kun brtsams kyang //</li>
                    <li class="my-2">thams cad 'grub par 'gyur zhes mkhas pas bshad //</li>
                </ul>

                <p class="mb-3" id="citation-61"><sup>61</sup> Пять мяс: человечина, говядина,
                    собачатина, конина и мясо слона, и пять нектаров: экскременты, менструальная
                    кровь, семя, костный мозг, моча.<a href="#ref-61" class="text-blue-500 hover:underline">↩</a>
                </p>

                <p class="mb-3" id="citation-62"><sup>62</sup> Тибетский текст тридцать девятого
                    вопроса:<a href="#ref-62" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ nang pa'i dam rdzas la brtul zhugs che slan chad /</li>
                    <li class="my-2">/ ma bsgoms kyang 'grub pa ma lags sam /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ grub pa'i rdzas su gsungs pa rnams la ni /</li>
                    <li class="my-2">/ grub byed shes rab ting 'dzin bsgom pa ste //</li>
                    <li class="my-2">'di med grub par mi 'gyur dud 'gro bzhin //</li>
                    <li class="my-2">de phyir rnal 'byor yo byad ldan par bya /</li>
                </ul>

                <p class="mb-3" id="citation-63"><sup>63</sup> Тибетский текст сорокового вопроса:<a
                        href="#ref-63" class="text-blue-500 hover:underline">↩</a>
                </p>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ mthu che slan chad chos mi mkhas na yang mi rung, lags sam /</li>
                </ul>
                <ul class="list-none pl-5 space-y-1 ml-8 mb-4">
                    <li class="my-2">/ srid gsum 'gran zla med pa rgyal ba'i mthu //</li>
                    <li class="my-2">chos kyi rang bzhin mkhas shing rtogs las 'byung //</li>
                    <li class="my-2">de med byang cub sems dang mi ldan na /</li>
                    <li class="my-2">/ gnod sbyin srin po'i mthu 'dra ci ru rung /</li>
                </ul>
            </div>
        </div>

        {{-- Нижняя навигация по статье --}}
        @include('layouts.article-navigation', [
            'currentPart' => 4,
            'totalParts' => 5,
            'routeName' => 'ushakov_articles.answers_about_vajrasattva',
            'articleTitle' => 'частей'
        ])
    </div>
@endsection
