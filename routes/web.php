<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UpcomingCourseController;
use Illuminate\Support\Facades\Route;


// frontend Controller
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'show')->name('home');

    Route::get('/about-us', 'AboutUs')->name('about.us');

    Route::get('/course', [CourseController::class, 'Courses'])->name('courses');
    Route::get('/course/{slug}', [CourseController::class, 'DetailCourse'])->name('course.details');


    Route::get('/upcoming-course', 'UpcomingCourse')->name('upcoming.course');
    Route::get('/contact-us', 'ContactUs')->name('contact.us');
    Route::post('/store/contact', [ContactController::class, 'StoreContact'])->name('store.contact');


    Route::get('/event', 'EventPage')->name('event-page');
    Route::get('/event/reg/{slug}', [EventController::class, 'EventRegistration'])->name('event.registration');
    Route::post('/event/store/form', [EventController::class, 'EventStoreForm'])->name('store.event.form');


    Route::get('/blog', [BlogController::class, 'Blog'])->name('blog');
    Route::get('/blog/{slug}', [BlogController::class, 'BlogDetails'])->name('blog.details');
    Route::get('/blog/blog-category/{category}', [BlogController::class, 'CategoryWiseBlogs'])->name('category.wise.blog');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


// Admin Controller
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'ChangeAdminPassword'])->name('change.admin.password');
    Route::post('/update/change/password', [AdminController::class, 'UpdateAdminPassword'])->name('update.admin.password');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');



    // slider controller
    Route::controller(SliderController::class)->group(function () {
        Route::get('/add/slide', 'AddSlider')->name('add.slide');
        Route::get('/all/slide', 'AllSlider')->name('all.slide');
        Route::get('/edit/slide/{id}', 'EditSlider')->name('edit.slide');
        Route::post('/store/slide', 'StoreSlider')->name('store.slide');
        Route::post('/update/slide', 'UpdateSlider')->name('update.slide');
        Route::get('/delete/slide/{id}', 'DeleteSlider')->name('delete.slide');
    });


    // about  controller
    Route::controller(AboutController::class)->group(function () {
        Route::get('/add/about', 'AddAbout')->name('add.about');
        Route::get('/all/about', 'AllAbout')->name('all.about');
        Route::get('/edit/about/{id}', 'EditAbout')->name('edit.about');
        Route::post('/store/about', 'StoreAbout')->name('store.about');
        Route::post('/update/about', 'UpdateAbout')->name('update.about');
        Route::get('/delete/about/{id}', 'DeleteAbout')->name('delete.about');


        // choose us all route
        Route::get('/add/choose', 'AddChoose')->name('add.choose');
        Route::get('/all/choose', 'AllChoose')->name('all.choose');
        Route::get('/edit/choose/{id}', 'EditChoose')->name('edit.choose');
        Route::post('/store/choose', 'StoreChoose')->name('store.choose');
        Route::post('/update/choose', 'UpdateChoose')->name('update.choose');
        Route::get('/delete/choose/{id}', 'DeleteChoose')->name('delete.choose');
    });


    // about  controller
    Route::controller(EventController::class)->group(function () {
        Route::get('/add/event', 'AddEvent')->name('add.event');
        Route::get('/all/event', 'AllEvent')->name('all.event');
        Route::get('/edit/event/{id}', 'EditEvent')->name('edit.event');
        Route::post('/store/event', 'StoreEvent')->name('store.event');
        Route::post('/update/event', 'UpdateEvent')->name('update.event');
        Route::get('/delete/event/{id}', 'DeleteEvent')->name('delete.event');
        Route::get('event/register/student', 'EventRegisterStudent')->name('event.register.student');
    });


    // testimonial  controller
    Route::controller(TestimonialController::class)->group(function () {
        Route::get('/add/testimonial', 'AddTestimonial')->name('add.testimonial');
        Route::get('/all/testimonial', 'AllTestimonial')->name('all.testimonial');
        Route::get('/edit/testimonial/{id}', 'EditTestimonial')->name('edit.testimonial');
        Route::post('/store/testimonial', 'StoreTestimonial')->name('store.testimonial');
        Route::post('/update/testimonial', 'UpdateTestimonial')->name('update.testimonial');
        Route::get('/delete/testimonial/{id}', 'DeleteTestimonial')->name('delete.testimonial');
    });


    // testimonial  controller
    Route::controller(ContactController::class)->group(function () {
        Route::get('/all/contact', 'AllContact')->name('all.contact');
        Route::get('/delete/contact/{id}', 'DeleteContact')->name('delete.contact');
    });


    // upcoming course  controller
    Route::controller(CourseController::class)->group(function () {
        Route::get('/add/course', 'AddCourse')->name('add.course');
        Route::get('/all/course', 'AllCourse')->name('all.course');
        Route::get('/edit/course/{id}', 'EditCourse')->name('edit.course');
        Route::post('/store/course', 'StoreCourse')->name('store.course');
        Route::post('/update/course', 'UpdateCourse')->name('update.course');
        Route::get('/delete/course/{id}', 'DeleteCourse')->name('delete.course');
    });

    // upcoming course  controller
    Route::controller(UpcomingCourseController::class)->group(function () {
        Route::get('/add/upcoming-course', 'AddUpcomingCourse')->name('add.upcoming-course');
        Route::get('/all/upcoming-course', 'AllUpcomingCourse')->name('all.upcoming-course');
        Route::get('/edit/upcoming-course/{id}', 'EditUpcomingCourse')->name('edit.upcoming-course');
        Route::post('/store/upcoming-course', 'StoreUpcomingCourse')->name('store.upcoming-course');
        Route::post('/update/upcoming-course', 'UpdateUpcomingCourse')->name('update.upcoming-course');
        Route::get('/delete/upcoming-course/{id}', 'DeleteUpcomingCourse')->name('delete.upcoming-course');
    });


    // category  controller
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/store/category', 'StoreCategory')->name('store.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

    //blog content controller
    Route::controller(BlogController::class)->group(function () {
        Route::get('/add/blog', 'AddBlog')->name('add.blog');
        Route::get('/all/blog', 'AllBlog')->name('all.blog');
        Route::get('/edit/blog/{id}', 'EditBlog')->name('edit.blog');
        Route::post('/store/blog', 'StoreBlog')->name('store.blog');
        Route::post('/update/blog', 'UpdateBlog')->name('update.blog');
        Route::get('/delete/blog/{id}', 'DeleteBlog')->name('delete.blog');
    });
});


// Vendor Controller
Route::middleware('auth', 'role:vendor')->group(function () {
    Route::get('/vendor/dashboard', [VendorController::class, 'VendorDashboard'])->name('vendor.dashboard');
});




Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');
