<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TitleController;

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

Route::get('/', [PostController::class, 'index'])->name('index');
Route::get('/admin', [PostController::class, 'admin'])->name('admin');
// Title
Route::get('/back/titles', [TitleController::class, 'index'])->name('title.index');
Route::get('/back/titles/{id}/edit', [TitleController::class, 'edit'])->name('title.edit');
Route::post('/back/titles/{id}/update', [TitleController::class, 'update'])->name('title.update');
// About
Route::get('/back/abouts', [AboutController::class, 'index'])->name('about.index');
Route::get('/back/abouts/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::post('/back/abouts/{id}/update', [AboutController::class, 'update'])->name('about.update');
// Fact
Route::get('/back/facts', [FactController::class, 'index'])->name('fact.index');
Route::post('/back/facts/{id}/delete', [FactController::class, 'destroy'])->name('fact.destroy');
Route::get('/back/facts/{id}/edit', [FactController::class, 'edit'])->name('fact.edit');
Route::post('/back/facts/{id}/update', [FactController::class, 'update'])->name('fact.update');
Route::get('/back/facts/create', [FactController::class, 'create'])->name('fact.create');
Route::post('/back/facts/store', [FactController::class, 'store'])->name('fact.store');
// Skill
Route::get('/back/skills', [SkillController::class, 'index'])->name('skill.index');
Route::post('/back/skills/{id}/delete', [SkillController::class, 'destroy'])->name('skill.destroy');
Route::get('/back/skills/{id}/edit', [SkillController::class, 'edit'])->name('skill.edit');
Route::post('/back/skills/{id}/update', [SkillController::class, 'update'])->name('skill.update');
Route::get('/back/skills/create', [SkillController::class, 'create'])->name('skill.create');
Route::post('/back/skills/store', [SkillController::class, 'store'])->name('skill.store');
// Portfolio
Route::get('/back/portfolios', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::post('/back/portfolios/{id}/delete', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
Route::get('/back/portfolios/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::post('/back/portfolios/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
Route::get('/back/portfolios/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/back/portfolios/store', [PortfolioController::class, 'store'])->name('portfolio.store');
// Testimonial
Route::get('/back/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');
Route::post('/back/testimonials/{id}/delete', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
Route::get('/back/testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
Route::post('/back/testimonials/{id}/update', [TestimonialController::class, 'update'])->name('testimonial.update');
Route::get('/back/testimonials/create', [TestimonialController::class, 'create'])->name('testimonial.create');
Route::post('/back/testimonials/store', [TestimonialController::class, 'store'])->name('testimonial.store');
// Footer
Route::get('/back/footers', [FooterController::class, 'index'])->name('footer.index');
Route::get('/back/footers/{id}/edit', [FooterController::class, 'edit'])->name('footer.edit');
Route::post('/back/footers/{id}/update', [FooterController::class, 'update'])->name('footer.update');
// Banner
Route::get('/back/banners', [BannerController::class, 'index'])->name('banner.index');
Route::get('/back/banners/{id}/edit', [BannerController::class, 'edit'])->name('banner.edit');
Route::post('/back/banners/{id}/update', [BannerController::class, 'update'])->name('banner.update');
// Navbar
Route::get('/back/navbars', [NavbarController::class, 'index'])->name('navbar.index');
Route::get('/back/navbars/{id}/edit', [NavbarController::class, 'edit'])->name('navbar.edit');
Route::post('/back/navbars/{id}/update', [NavbarController::class, 'update'])->name('navbar.update');
