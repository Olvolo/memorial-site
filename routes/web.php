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

// Статьи
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
