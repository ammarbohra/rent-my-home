<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/packages', function () {
    return view('pages.packages');
});
Route::get('/how-it-works', function () {
    return view('pages.how-it-works');
});
Route::get('/why-choose-us', function () {

    $greencards = [
        ['link' => './img/birgit-loit-sBjIRDC0H5Q-unsplash-1.jpg', 'icon' => './img/rent-icon-1.svg', 'heading' => 'UK\'s best-rated online agent', 'paragraph' => 'Our 9.9 service rating on Trustpilot is unbeaten in the entire online letting industry.'],
        ['link' => './img/birgit-loit-sBjIRDC0H5Q-unsplash-2.jpg', 'icon' => './img/rent-icon-2.svg', 'heading' => 'We are in your area', 'paragraph' => 'Our network of local agents stretches out across the entire UK.'],
        ['link' => './img/birgit-loit-sBjIRDC0H5Q-unsplash-3.jpg', 'icon' => './img/rent-icon-3.svg', 'heading' => 'Savings', 'paragraph' => 'No high-street shops, no fancy branded cars, no need to overcharge on our services.'],
        ['link' => './img/birgit-loit-sBjIRDC0H5Q-unsplash-4.jpg', 'icon' => './img/rent-icon-4.svg', 'heading' => 'We find tenants faster', 'paragraph' => 'Our landlords typically find their new tenants within days of going live.'],
        ['link' => './img/birgit-loit-sBjIRDC0H5Q-unsplash-5.jpg', 'icon' => './img/rent-icon-5.svg', 'heading' => 'Most value for your home', 'paragraph' => 'Our 9.9 service rating on Trustpilot is unbeaten in the entire online letting industry.'],
        ['link' => './img/birgit-loit-sBjIRDC0H5Q-unsplash-6.jpg', 'icon' => './img/rent-icon-6.svg', 'heading' => 'We have extensive experience', 'paragraph' => 'Our 9.9 service rating on Trustpilot is unbeaten in the entire online letting industry.']
    ];

    return view('pages.why-choose-us', ['greencards' => $greencards]);
});
Route::get('/customer-reviews', function () {
    return view('pages.customer-reviews');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/thinking-of-selling', function () {
    return view('pages.thinking-of-selling');
});
Route::get('/properties-for-rent', function () {
    return view('pages.properties-for-rent');
});
Route::get('/landlord-services', function () {

    $serviceaccordion = [
        ['name' => 'EPC (Legal Requirement)', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-secondary', 'button' => 'Remove', 'textcolor' => 'text-primary'],
        ['name' => 'Accompanied Viewings', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'comprehensive tenant reference report', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Arrange Gas Safety Certificate', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Rightmove Premium Listing', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-secondary', 'button' => 'Remove', 'textcolor' => 'text-primary'],
        ['name' => 'Zoopla Premium Listing', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Social media marketing booster', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Arrange Electrical Installation Condition Report', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Professional inventory', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Check in service', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Check out service', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Professional photos, floorplan, video & virtual walkthrough', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Manage and log deposits', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Tenancy renewal', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Rental Guarantee insurance', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
        ['name' => 'Landlord property insurance', 'price' => '99', 'description' => 'An Energy Performance Certificate (EPC) is a legal requirement when letting your property. We can arrange this for you.','color' => 'btn-primary', 'button' => 'Add to Cart', 'textcolor' => 'text-white'],
    ];

    return view('pages.landlord-services', ['serviceaccordion' => $serviceaccordion]);
});
Route::get('/landlord-advice', function () {

    $landlordadvice = [
        ['icon' => 'advice-icon-1.svg', 'heading' => '1st time landlords', 'text' => 'Do you live abroad but have a UK property that needs to be let out? We offer everything from 24/7 viewings, tenant finding-only to full property management for just 6%.'],
        ['icon' => 'advice-icon-2.svg', 'heading' => 'DIY landlords', 'text' => 'Prefer to take care of things yourself? That\'s fine, once we find you tenants, you can pick up and choose any extra services you require on top.'],
        ['icon' => 'advice-icon-3.svg', 'heading' => 'Portfolio landlords', 'text' => 'For seasoned landlords with a portfolio to manage, our experts are available to take care of the whole process. From tenant finding only, to full property management at 6%.'],
        ['icon' => 'advice-icon-4.svg', 'heading' => 'Overseas landlords', 'text' => 'Do you live abroad but have a UK property that needs to be let out? We offer everything from 24/7 viewings, tenant finding-only to full property management for just 6%.'],
    ];

    $sidebox = [
        ['text' => 'The no.1 rated online letting service in the UK!'],
        ['text' => 'We\'ll find your tenants, and take care of all your paperwork.'],
        ['text' => 'All our agents are ARLA-qualified and experienced property managers.'],
        ['text' => 'We advertise your property on Rightmove, Zoopla and hundreds of top marketing portals.'],
        ['text' => 'We\'ll find your tenants in 7 days.'],
        ['text' => 'And we can guarantee your monthly rent with property management for just 6%.'],
    ];

    return view('pages.landlord-advice', ['landlordadvice' => $landlordadvice], ['sidebox' => $sidebox]);
});
Route::get('/request-a-valuation', function () {
    return view('pages.request-a-valuation');
});
Route::get('/login-or-register', function () {
    return view('pages.login-or-register');
});
Route::get('/faqs', function () {
    return view('pages.faqs');
});
Route::get('/virtual-walkthrough', function () {
    return view('pages.virtual-walkthrough');
});
Route::get('/contact-us', function () {
    return view('pages.contact-us');
});
Route::get('/about-us', function () {
    return view('pages.about-us');
});


