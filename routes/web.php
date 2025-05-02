<?php

use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', function () {
    return view('home');
})->name('home');

// Основные разделы
Route::get('/biography', function () {
    return view('pages.biography');
})->name('biography');

Route::get('/articles', function () {
    return view('pages.articles');
})->name('articles');

Route::get('/sangha', function () {
    return view('pages.sangha');
})->name('sangha');

Route::get('/memories', function () {
    return view('pages.memories');
})->name('memories');

Route::get('/media', function () {
    return view('pages.media');
})->name('media');

Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');

// Новая страница: История семьи
Route::get('/family-history', function () {
    return view('pages.family_history');
})->name('family_history');

// Статьи Владимира Михайловича
Route::get('/articles/ethics_of_buddhism', function () {
    return view('pages.articles.ethics_of_buddhism');
})->name('articles.ethics_of_buddhism');

Route::get('/articles/siddhis_and_society', function () {
    return view('pages.articles.siddhis_and_society');
})->name('articles.siddhis_and_society');

Route::get('/articles/principles_of_symbolism', function () {
    return view('pages.articles.principles_of_symbolism');
})->name('articles.principles_of_symbolism');

Route::get('/articles/sandalwood_buddha', function () {
    return view('pages.articles.sandalwood_buddha');
})->name('articles.sandalwood_buddha');

Route::get('/articles/mahabhutas', function () {
    return view('pages.articles.mahabhutas');
})->name('articles.mahabhutas');

Route::get('/articles/sangha_and_dharma_centers', function () {
    return view('pages.articles.sangha_and_dharma_centers');
})->name('articles.sangha_and_dharma_centers');

Route::get('/articles/vows_and_shunya', function () {
    return view('pages.articles.vows_and_shunya');
})->name('articles.vows_and_shunya');

Route::get('/articles/budon_preface', function () {
    return view('pages.articles.budon_preface');
})->name('articles.budon_preface');

Route::get('/articles/departure_of_teacher', function () {
    return view('pages.articles.departure_of_teacher');
})->name('articles.departure_of_teacher');

Route::get('/articles/garuda_journal', function () {
    return view('pages.articles.garuda_journal');
})->name('articles.garuda_journal');

Route::get('/articles/golden_horse', function () {
    return view('pages.articles.golden_horse');
})->name('articles.golden_horse');

Route::get('/articles/we', function () {
    return view('pages.articles.we');
})->name('articles.we');

Route::get('/articles/fullness_of_sermon', function () {
    return view('pages.articles.fullness_of_sermon');
})->name('articles.fullness_of_sermon');

Route::get('/articles/neobuddhism_hermeneutics', function () {
    return view('pages.articles.neobuddhism_hermeneutics');
})->name('articles.neobuddhism_hermeneutics');

Route::get('/articles/vajrabhairava_mandala', function () {
    return view('pages.articles.vajrabhairava_mandala');
})->name('articles.vajrabhairava_mandala');

Route::get('/articles/dandaron_tsogshin', function () {
    return view('pages.articles.dandaron_tsogshin');
})->name('articles.dandaron_tsogshin');

Route::get('/articles/mind_and_akasha', function () {
    return view('pages.articles.mind_and_akasha');
})->name('articles.mind_and_akasha');

Route::get('/articles/russia_vajrasattva', function () {
    return view('pages.articles.russia_vajrasattva');
})->name('articles.russia_vajrasattva');

Route::get('/articles/vajrasattva_method', function () {
    return view('pages.articles.vajrasattva_method');
})->name('articles.vajrasattva_method');

Route::get('/articles/vajrasattvayana', function () {
    return view('pages.articles.vajrasattvayana');
})->name('articles.vajrasattvayana');

Route::get('/articles/stupa_construction', function () {
    return view('pages.articles.stupa_construction');
})->name('articles.stupa_construction');

Route::get('/articles/chakra_of_rays', function () {
    return view('pages.articles.chakra_of_rays');
})->name('articles.chakra_of_rays');

Route::get('/articles/on_paramitas', function () {
    return view('pages.articles.on_paramitas');
})->name('articles.on_paramitas');

Route::get('/articles/roots', function () {
    return view('pages.articles.roots');
})->name('articles.roots');

Route::get('/articles/karma_earth', function () {
    return view('pages.articles.karma_earth');
})->name('articles.karma_earth');

Route::get('/articles/uncountability', function () {
    return view('pages.articles.uncountability');
})->name('articles.uncountability');

Route::get('/articles/new_order', function () {
    return view('pages.articles.new_order');
})->name('articles.new_order');

Route::get('/articles/open_horizon', function () {
    return view('pages.articles.open_horizon');
})->name('articles.open_horizon');

Route::get('/articles/secular_sangha', function () {
    return view('pages.articles.secular_sangha');
})->name('articles.secular_sangha');

Route::get('/articles/contemplation_of_stupa', function () {
    return view('pages.articles.contemplation_of_stupa');
})->name('articles.contemplation_of_stupa');

Route::get('/articles/struggle_for_datsan', function () {
    return view('pages.articles.struggle_for_datsan');
})->name('articles.struggle_for_datsan');

Route::get('/articles/bon_teachers', function () {
    return view('pages.articles.bon_teachers');
})->name('articles.bon_teachers');

Route::get('/articles/analytical_note', function () {
    return view('pages.articles.analytical_note');
})->name('articles.analytical_note');

Route::get('/articles/note_addendum', function () {
    return view('pages.articles.note_addendum');
})->name('articles.note_addendum');

Route::get('/articles/alphabet_desecration', function () {
    return view('pages.articles.alphabet_desecration');
})->name('articles.alphabet_desecration');

Route::get('/articles/vajrabhairava_mandala_table', function () {
    return view('pages.articles.vajrabhairava_mandala_table');
})->name('articles.vajrabhairava_mandala_table');

Route::get('/articles/secret_the_same', function () {
    return view('pages.articles.secret_the_same');
})->name('articles.secret_the_same');

Route::get('/articles/home', function () {
    return view('pages.articles.home');
})->name('articles.home');

Route::get('/articles/preface_letters', function () {
    return view('pages.articles.preface_letters');
})->name('articles.preface_letters');

Route::get('/articles/five-dhyanibuddhas', function () {
    return view('pages.articles.five_dhyanibuddhas');
})->name('articles.five_dhyanibuddhas');

Route::get('/articles/mahabhutas_table', function () {
    return view('pages.articles.mahabhutas_table');
})->name('articles.mahabhutas_table');

Route::get('/articles/self-liberation', function () {
    return view('pages.articles.self-liberation');
})->name('articles.self-liberation');

Route::get('/articles/prayer-for-peace', function () {
    return view('pages.articles.prayer-for-peace');
})->name('articles.prayer-for-peace');

Route::get('/articles/dharma-bodhichitta', function () {
    return view('pages.articles.dharma-bodhichitta');
})->name('articles.dharma-bodhichitta');

Route::get('/articles/prejudice-of-earth', function () {
    return view('pages.articles.prejudice-of-earth');
})->name('articles.prejudice-of-earth');

Route::get('/articles/sangha-and-internet', function () {
    return view('pages.articles.sangha-and-internet');
})->name('articles.sangha-and-internet');

Route::get('/articles/swastika-in-temple', function () {
    return view('pages.articles.swastika-in-temple');
})->name('articles.swastika-in-temple');

Route::get('/articles/akasha', function () {
    return view('pages.articles.akasha');
})->name('articles.akasha');

Route::get('/articles/nondual-vajrasattva', function () {
    return view('pages.articles.nondual-vajrasattva');
})->name('articles.nondual-vajrasattva');

Route::get('/articles/renormalization-i', function () {
    return view('pages.articles.renormalization-i');
})->name('articles.renormalization-i');

Route::get('/articles/omniscience', function () {
    return view('pages.articles.omniscience');
})->name('articles.omniscience');

Route::get('/articles/key-matrix', function () {
    return view('pages.articles.key-matrix');
})->name('articles.key-matrix');

Route::get('/articles/netroystvennost', function () {
    return view('pages.articles.netroystvennost');
})->name('articles.netroystvennost');

Route::get('/articles/ogon', function () {
    return view('pages.articles.ogon');
})->name('articles.ogon');

Route::get('/articles/renormalization-ii', function () {
    return view('pages.articles.renormalization-ii');
})->name('articles.renormalization-ii');

Route::get('/articles/buddhism-north-russia', function () {
    return view('pages.articles.buddhism-north-russia');
})->name('articles.buddhism-north-russia');

Route::get('/articles/tantra-west', function () {
    return view('pages.articles.tantra-west');
})->name('articles.tantra-west');

Route::get('/articles/dharma-raja-dandar', function () {
    return view('pages.articles.dharma-raja-dandar');
})->name('articles.dharma-raja-dandar');

Route::get('/articles/lub-san-dan', function () {
    return view('pages.articles.lub-san-dan');
})->name('articles.lub-san-dan');

Route::get('/articles/buddhist_clay_plastic', function () {
    return view('pages.articles.buddhist_clay_plastic');
})->name('articles.buddhist_clay_plastic');

Route::get('/articles/memory-yuri-alekseev', function () {
    return view('pages.articles.memory_yuri_alekseev');
})->name('articles.memory_yuri_alekseev');

Route::get('/articles/memory_alexandr_zheleznov', function () {
    return view('pages.articles.memory_alexandr_zheleznov');
})->name('articles.memory_alexandr_zheleznov');

Route::get('/articles/jump_into_lion_mouth', function () {
    return view('pages.articles.jump_into_lion_mouth');
})->name('articles.jump_into_lion_mouth');

Route::get('/articles/dharma_wave', function () {
    return view('pages.articles.dharma_wave');
})->name('articles.dharma_wave');

Route::get('/articles/dzogchen', function () {
    return view('pages.articles.dzogchen');
})->name('articles.dzogchen');

Route::get('/articles/memory_vasiliy_repka', function () {
    return view('pages.articles.memory_vasiliy_repka');
})->name('articles.memory_vasiliy_repka');

Route::get('/articles/memory_yuriy_parfionovich', function () {
    return view('pages.articles.memory_yuriy_parfionovich');
})->name('articles.memory_yuriy_parfionovich');

Route::get('/articles/ivolga_datsan', function () {
    return view('pages.articles.ivolga_datsan');
})->name('articles.ivolga_datsan');

Route::get('/articles/dzogchen_on_east', function () {
    return view('pages.articles.dzogchen_on_east');
})->name('articles.dzogchen_on_east');

Route::get('/articles/two_stupas', function () {
    return view('pages.articles.two_stupas');
})->name('articles.two_stupas');

Route::get('/articles/stupa_dandaron', function () {
    return view('pages.articles.stupa_dandaron');
})->name('articles.stupa_dandaron');

Route::get('/articles/did_not_find', function () {
    return view('pages.articles.did_not_find');
})->name('articles.did_not_find');

Route::get('/articles/teacher_workship', function () {
    return view('pages.articles.teacher_workship');
})->name('articles.teacher_workship');

Route::get('/articles/trikaya_mantras', function () {
    return view('pages.articles.trikaya_mantras');
})->name('articles.trikaya_mantras');





// Статьи Железнова
Route::get('/zheleznov_articles/about_tibetan_tradition_buryat_buddhism', function () {
    return view('pages.zheleznov_articles.about_tibetan_tradition_buryat_buddhism');
})->name('zheleznov_articles.about_tibetan_tradition_buryat_buddhism');

Route::get('/zheleznov_articles/marys-image-popular-interpretation-and-tantric-literature', function () {
    return view('pages.zheleznov_articles.marys-image-popular-interpretation-and-tantric-literature');
})->name('zheleznov_articles.marys-image-popular-interpretation-and-tantric-literature');

Route::get('/zheleznov_articles/vajrayana-teaching-on-the-identity-of-samsara-and-nirvana', function () {
    return view('pages.zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana');
})->name('zheleznov_articles.vajrayana-teaching-on-the-identity-of-samsara-and-nirvana');


Route::get('/zheleznov_articles/skandhas_according_to_Abhidharma_and_Vajrayana_interpretation', function () {
    return view('pages.zheleznov_articles.skandhas_according_to_Abhidharma_and_Vajrayana_interpretation');
})->name('zheleznov_articles.skandhas_according_to_Abhidharma_and_Vajrayana_interpretation');

Route::get('/zheleznov_articles/philosophical_psychological_foundations_for_solving_environmental_problems_in_mahayana_buddhism', function () {
    return view('pages.zheleznov_articles.philosophical_psychological_foundations_for_solving_environmental_problems_in_mahayana_buddhism');
})->name('zheleznov_articles.philosophical_psychological_foundations_for_solving_environmental_problems_in_mahayana_buddhism');

Route::get('/zheleznov_articles/question_buddhist_methodology', function () {
    return view('pages.zheleznov_articles.question_buddhist_methodology');
})->name('zheleznov_articles.question_buddhist_methodology');

// Статьи Пупышева

Route::get('/pupishev_articles/not_i_in_buddhist_theory_and_practice', function () {
    return view('pages.pupishev_articles.not_i_in_buddhist_theory_and_practice');
})->name('pupishev_articles.not_i_in_buddhist_theory_and_practice');

Route::get('/pupishev_articles/about_term_pratiyaksha', function () {
    return view('pages.pupishev_articles.about_term_pratiyaksha');
})->name('pupishev_articles.about_term_pratiyaksha');

Route::get('/pupishev_articles/worldview_fundamentals', function () {
    return view('pages.pupishev_articles.worldview_fundamentals');
})->name('pupishev_articles.worldview_fundamentals');

Route::get('/pupishev_articles/about_samsara_nature', function () {
    return view('pages.pupishev_articles.about_samsara_nature');
})->name('pupishev_articles.about_samsara_nature');

Route::get('/pupishev_articles/general_scheme', function () {
    return view('pages.pupishev_articles.general_scheme');
})->name('pupishev_articles.general_scheme');

Route::get('/pupishev_articles/prayer_for_birth_in_sukhavati', function () {
    return view('pages.pupishev_articles.prayer_for_birth_in_sukhavati');
})->name('pupishev_articles.prayer_for_birth_in_sukhavati');

Route::get('/pupishev_articles/honoring_the_teacher_ritual', function () {
    return view('pages.pupishev_articles.honoring_the_teacher_ritual');
})->name('pupishev_articles.honoring_the_teacher_ritual');

Route::get('/pupishev_articles/honoring_the_teacher_ritual_part_two', function () {
    return view('pages.pupishev_articles.honoring_the_teacher_ritual_part_two');
})->name('pupishev_articles.honoring_the_teacher_ritual_part_two');

Route::get('/pupishev_articles/memories_of_bd_dandaron', function () {
    return view('pages.pupishev_articles.memories_of_bd_dandaron');
})->name('pupishev_articles.memories_of_bd_dandaron');

Route::get('/pupishev_articles/physical_analogues', function () {
    return view('pages.pupishev_articles.physical_analogues');
})->name('pupishev_articles.physical_analogues');

Route::get('/pupishev_articles/mahamudra', function () {
    return view('pages.pupishev_articles.mahamudra');
})->name('pupishev_articles.mahamudra');

Route::get('/pupishev_articles/source_of_sages_part{part}', function ($part) {
    if ($part < 1 || $part > 7) {
        abort(404);
    }
    return view("pages.pupishev_articles.source_of_sages_part{$part}");
})->where('part', '[1-7]')->name('pupishev_articles.source_of_sages');

Route::get('/pupishev_articles/ulan_ude_radio_interview', function () {
    return view('pages.pupishev_articles.ulan_ude_radio_interview');
})->name('pupishev_articles.ulan_ude_radio_interview');


Route::get('/pupishev_articles/victor_nikolaevich_pupychev', function () {
    return view('pages.pupishev_articles.victor_nikolaevich_pupychev');
})->name('pupishev_articles.victor_nikolaevich_pupychev');

// Дополнительные статьи

Route::get('/additional_articles/lubsan-samdan-tsydenov', function () {
    return view('pages.additional_articles.lubsan_samdan_tsydenov');
})->name('additional_articles.lubsan_samdan_tsydenov');

Route::get('/additional_articles/family_history', function () {
    return view('pages.additional_articles.family_history');
})->name('additional_articles.family_history');

Route::get('/additional_articles/kudun_theocracy', function () {
    return view('pages.additional_articles.kudun_theocracy');
})->name('additional_articles.kudun_theocracy');

Route::get('/additional_articles/khori_buryats', function () {
    return view('pages.additional_articles.khori_buryats');
})->name('additional_articles.khori_buryats');

// Статьи А. М. Пятигорского
Route::get('/pyatigorsky_articles/mainly_interesting', function () {
    return view('pages.pyatigorsky_articles.mainly_interesting');
})->name('pyatigorsky_articles.mainly_interesting');

Route::get('/pyatigorsky_articles/dandaron_departure', function () {
    return view('pages.pyatigorsky_articles.dandaron_departure');
})->name('pyatigorsky_articles.dandaron_departure');

Route::get('/pyatigorsky-articles/metatheory-conversation-1', function () {
    return view('pages.pyatigorsky_articles.pyatigorsky_metatheory_conversation_1');
})->name('pyatigorsky_articles.metatheory_conversation_1');

Route::get('/pyatigorsky-articles/metatheory-conversation-2', function () {
    return view('pages.pyatigorsky_articles.pyatigorsky_metatheory_conversation_2');
})->name('pyatigorsky_articles.metatheory_conversation_2');

Route::get('/pyatigorsky-articles/metatheory-conversation-3', function () {
    return view('pages.pyatigorsky_articles.pyatigorsky_metatheory_conversation_3');
})->name('pyatigorsky_articles.metatheory_conversation_3');

Route::get('/pyatigorsky_articles/buddhist_philosophia_lectures_1', function () {
    return view('pages.pyatigorsky_articles.buddhist_philosophia_lectures_1');
})->name('pyatigorsky_articles.buddhist_philosophia_lectures_1');

Route::get('/pyatigorsky_articles/buddhist_philosophia_lectures_2', function () {
    return view('pages.pyatigorsky_articles.buddhist_philosophia_lectures_2');
})->name('pyatigorsky_articles.buddhist_philosophia_lectures_2');

Route::get('/pyatigorsky_articles/buddhist_philosophia_lectures_3', function () {
    return view('pages.pyatigorsky_articles.buddhist_philosophia_lectures_3');
})->name('pyatigorsky_articles.buddhist_philosophia_lectures_3');

Route::get('/pyatigorsky_articles/buddhist_philosophia_lectures_4', function () {
    return view('pages.pyatigorsky_articles.buddhist_philosophia_lectures_4');
})->name('pyatigorsky_articles.buddhist_philosophia_lectures_4');

Route::get('/pyatigorsky_articles/buddhist_philosophia_lectures_5', function () {
    return view('pages.pyatigorsky_articles.buddhist_philosophia_lectures_5');
})->name('pyatigorsky_articles.buddhist_philosophia_lectures_5');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_01', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_01');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_01');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_02', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_02');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_02');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_03', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_03');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_03');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_04', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_04');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_04');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_05', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_05');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_05');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_06', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_06');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_06');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_07', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_07');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_07');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_08', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_08');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_08');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_09', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_09');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_09');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_10', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_10');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_10');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_11', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_11');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_11');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_12', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_12');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_12');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_13', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_13');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_13');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_14', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_14');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_14');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_15', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_15');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_15');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_16', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_16');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_16');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_17', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_17');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_17');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_18', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_18');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_18');

Route::get('/pyatigorsky_articles/introduction_to_buddhist_philosophy_study_19', function () {
    return view('pages.pyatigorsky_articles.introduction_to_buddhist_philosophy_study_19');
})->name('pyatigorsky_articles.introduction_to_buddhist_philosophy_study_19');

// Статьи Данелюса
Route::get('/danelus_articles/about_antanas', function () {
    return view('pages.danelus_articles.about_antanas');
})->name('danelus_articles.about_antanas');

Route::get('/danelus_articles/beyond_space_time', function () {
    return view('pages.danelus_articles.beyond_space_time');
})->name('danelus_articles.beyond_space_time');



