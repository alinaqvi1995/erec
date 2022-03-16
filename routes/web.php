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
    return view('welcome');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/services', [App\Http\Controllers\FrontendController::class, 'services'])->name('services');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/recruiters', [App\Http\Controllers\FrontendController::class, 'recruiter'])->name('recruiter');
Route::get('/recruiters/list', [App\Http\Controllers\FrontendController::class, 'recruiterList'])->name('recruiter.list');
Route::get('/recruiters/details/{id}', [App\Http\Controllers\FrontendController::class, 'recruiterShow'])->name('recruiter.detail');
Route::get('/employer', [App\Http\Controllers\FrontendController::class, 'employer'])->name('employer');
Route::get('/employer/list', [App\Http\Controllers\FrontendController::class, 'employerList'])->name('employer.list');
Route::get('/candidates', [App\Http\Controllers\FrontendController::class, 'candidates'])->name('candidates');
Route::get('/candidates/list', [App\Http\Controllers\FrontendController::class, 'candidatesList'])->name('candidates.list');
Route::get('/candidates/details/{id}', [App\Http\Controllers\FrontendController::class, 'candidatesDetail'])->name('candidate.detail');
Route::get('/job', [App\Http\Controllers\FrontendController::class, 'job'])->name('job');
Route::get('/browse/jobs', [App\Http\Controllers\FrontendController::class, 'jobPost'])->name('job.browse');
// Route::get('/browse/jobs/search', [App\Http\Controllers\FrontendController::class, 'jobSearch'])->name('job.search');
Route::get('/employer/details/{id}', [App\Http\Controllers\FrontendController::class, 'jobDetails'])->name('job.details');
Route::get('/job/listing/details/{id}', [App\Http\Controllers\FrontendController::class, 'jobListingDetails'])->name('job.listing.details');
Route::post('/candidate/details/store', [App\Http\Controllers\CandidateController::class, 'storeDetails'])->name('store.candidate');
Route::post('/candidate/profession/store', [App\Http\Controllers\CandidateController::class, 'storeProfession'])->name('store.candidateProfession');
Route::post('/candidate/skills/store', [App\Http\Controllers\CandidateController::class, 'storeSkills'])->name('store.candidateSkill');
Route::post('/candidate/education/store', [App\Http\Controllers\CandidateController::class, 'storeEducation'])->name('store.candidateEducation');
Route::post('/company/details/store', [App\Http\Controllers\CompanyController::class, 'store'])->name('company.store');
Route::post('/recruiter/details/store', [App\Http\Controllers\RecruiterController::class, 'store'])->name('recruiter.store');

Route::get('/google', [App\Http\Controllers\GoogleController::class,'redirectToGoogle'])->name('google.login');
Route::get('/google/callback', [App\Http\Controllers\GoogleController::class,'handleGoogleCallback'])->name('google.callback');

Route::get('/linkedin', [App\Http\Controllers\GoogleController::class,'redirectToLinkedin'])->name('linkedin.login');
Route::get('/linkedin/callback', [App\Http\Controllers\GoogleController::class,'handleLinkedinCallback'])->name('linkedin.callback');

// Social Share
Route::get('social-share', [App\Http\Controllers\SocialShareController::class, 'index']);

Route::prefix('/admin')->group(function (){
    Route::middleware(['checkadmin'])->group(function () {

        Route::get('/',[App\Http\Controllers\HomeController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/company',[App\Http\Controllers\AdminController::class, 'companyIndex'])->name('admin.companyIndex');
        Route::get('/recruiter',[App\Http\Controllers\AdminController::class, 'recruiterIndex'])->name('admin.recruiterIndex');
        Route::get('/candidate',[App\Http\Controllers\AdminController::class, 'candidateIndex'])->name('admin.candidateIndex');
        Route::get('/company/details/{id}',[App\Http\Controllers\AdminController::class, 'companyDetails'])->name('admin.companyDetails');
        Route::get('/recruiter/details/{id}',[App\Http\Controllers\AdminController::class, 'recruiterDetails'])->name('admin.recruiterDetails');
        Route::get('/candidate/details/{id}',[App\Http\Controllers\AdminController::class, 'candidateDetails'])->name('admin.candidateDetails');
        // Skills
        Route::get('/skills',[App\Http\Controllers\AdminController::class, 'skills'])->name('admin.skills');
        Route::get('/skills/new',[App\Http\Controllers\AdminController::class, 'addSkill'])->name('admin.addSkill');
        Route::post('/skills/store',[App\Http\Controllers\AdminController::class, 'storeSkill'])->name('admin.storeSkill');
        Route::get('/skills/edit/{id}',[App\Http\Controllers\AdminController::class, 'editSkill'])->name('admin.editSkill');
        Route::get('/skills/destroy/{id}',[App\Http\Controllers\AdminController::class, 'destroySkill'])->name('admin.destroySkill');
        // Category
        Route::get('/category',[App\Http\Controllers\AdminController::class, 'category'])->name('admin.category');
        Route::get('/category/new',[App\Http\Controllers\AdminController::class, 'addCategory'])->name('admin.addCategory');
        Route::post('/category/store',[App\Http\Controllers\AdminController::class, 'storeCategory'])->name('admin.storeCategory');
        Route::get('/category/edit/{id}',[App\Http\Controllers\AdminController::class, 'editCategory'])->name('admin.editCategory');
        Route::get('/category/destroy/{id}',[App\Http\Controllers\AdminController::class, 'destroyCategory'])->name('admin.destroyCategory');
        // All Users
        Route::get('/users',[App\Http\Controllers\AdminController::class, 'allUsers'])->name('admin.users');
        Route::get('/users/edit/{id}',[App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.editUser');
        Route::post('/user/update',[App\Http\Controllers\AdminController::class, 'approveUser'])->name('admin.approveUser');
        // Route::get('/user/status/{id}', [App\Http\Controllers\AdminController::class, 'status'])->name('change.user.status');

    });
});

Route::prefix('/user')->group(function (){
    Route::middleware(['checkuser'])->group(function () {

        Route::get('/',[App\Http\Controllers\HomeController::class,'dashboard'])->name('candidate.dashboard');
        Route::get('/CV/List', [App\Http\Controllers\CandidateDashboardController::class, 'cvList'])->name('candidates.cvList');
        Route::get('/change/visibility/{id}', [App\Http\Controllers\CandidateDashboardController::class, 'visibility'])->name('change.status');
        // Route::get('/details/next', [App\Http\Controllers\FrontendController::class, 'candidatesNext'])->name('candidates.details.next');
        // Route::get('/details/profile', [App\Http\Controllers\FrontendController::class, 'candidatesProfile'])->name('candidates.details.profile');

        Route::get('/profile/view', [App\Http\Controllers\CandidateDashboardController::class, 'candidatesProfile'])->name('candidates.details.view');
        Route::post('/profileupdate',[App\Http\Controllers\CandidateDashboardController::class,'profileUpdate'])->name('candidates.profile.update');
        Route::get('/educational/view', [App\Http\Controllers\CandidateDashboardController::class, 'candidatesEducation'])->name('candidates.education.view');
        Route::get('/educational/new', [App\Http\Controllers\CandidateDashboardController::class, 'newEducation'])->name('candidates.education.new');
        Route::post('/educationupdate',[App\Http\Controllers\CandidateDashboardController::class,'educationUpdate'])->name('candidates.education.update');
        Route::get('/profession/view', [App\Http\Controllers\CandidateDashboardController::class, 'candidatesProfession'])->name('candidates.profession.view');
        Route::get('/profession/new', [App\Http\Controllers\CandidateDashboardController::class, 'newProfession'])->name('candidates.profession.new');
        Route::post('/profession/update',[App\Http\Controllers\CandidateDashboardController::class,'professionUpdate'])->name('candidates.profession.update');
        Route::get('/profession/delete/"{id}',[App\Http\Controllers\CandidateDashboardController::class,'professionDelete'])->name('candidates.profession.delete');
        Route::get('/education/delete/"{id}',[App\Http\Controllers\CandidateDashboardController::class,'educationDelete'])->name('candidates.education.delete');
        Route::get('/candidates/details', [App\Http\Controllers\FrontendController::class, 'candidatesDetails'])->name('candidates.details');
        Route::get('/candidates/details/next', [App\Http\Controllers\FrontendController::class, 'candidatesNext'])->name('candidates.details.next');
        Route::get('/candidates/details/profile', [App\Http\Controllers\FrontendController::class, 'candidatesProfile'])->name('candidates.details.profile');
        Route::post('/candidates/details/profile/post', [App\Http\Controllers\FrontendController::class, 'cv'])->name('candidates.details.post');
        // Apply Now For Job
        // Route::get('/job/application', [App\Http\Controllers\FrontendController::class, 'jobApplications'])->name('job.application');
        // Route::get('/candidates/job/visibility', [App\Http\Controllers\FrontendController::class, 'visibilityindex'])->name('candidates.job.visibility');
        // Job Application
        Route::get('/candidates/job/application', [App\Http\Controllers\CandidateJobApplicationController::class, 'index'])->name('candidates.job.index');
        Route::get('/candidates/job/visibility', [App\Http\Controllers\CandidateJobApplicationController::class, 'visibilityindex'])->name('candidates.job.visibility');
        Route::get('/candidates/job/visibility/change/{id}', [App\Http\Controllers\CandidateJobApplicationController::class, 'visibility'])->name('candidates.job.visibility.change');
        Route::get('/candidates/job/application/create', [App\Http\Controllers\CandidateJobApplicationController::class, 'create'])->name('candidates.job.create');
        Route::post('/candidates/job/application/store', [App\Http\Controllers\CandidateJobApplicationController::class, 'store'])->name('candidates.job.store');

        Route::get('/candidates/upload/cv', [App\Http\Controllers\CandidateJobApplicationController::class, 'cvUpload'])->name('candidates.cv.upload');
        Route::post('/candidates/upload/cv/store', [App\Http\Controllers\CandidateJobApplicationController::class, 'storeCv'])->name('candidates.cv.store');
        Route::post('/candidates/apply', [App\Http\Controllers\JobApplicationController::class, 'applyNow'])->name('candidates.applyNow');




    });
});

Route::prefix('/company')->group(function (){
    Route::middleware(['checkcompany'])->group(function () {

        Route::get('/',[App\Http\Controllers\HomeController::class,'dashboard'])->name('company.dashboard');
        Route::get('/details',[App\Http\Controllers\FrontendController::class, 'companyDetails'])->name('company.details');
        Route::get('/profile',[App\Http\Controllers\CompanyDashboardController::class, 'profile'])->name('company.profile');
        Route::put('/profile/update',[App\Http\Controllers\CompanyDashboardController::class, 'profileUpdate'])->name('company.profile.update');
        Route::get('/jobs',[App\Http\Controllers\CompanyDashboardController::class, 'jobs'])->name('company.jobs');
        Route::get('/jobs/create',[App\Http\Controllers\CompanyDashboardController::class, 'createJobs'])->name('company.jobs.create');
        Route::post('/jobs/store',[App\Http\Controllers\CompanyDashboardController::class, 'StoreJob'])->name('company.jobs.store');
        Route::post('/jobs/update',[App\Http\Controllers\CompanyDashboardController::class, 'updateJob'])->name('company.jobs.update');

        Route::get('/all/applications',[App\Http\Controllers\CompanyDashboardController::class, 'jobApplications'])->name('company.jobApplications');
        Route::get('/jobs/edit/{id}',[App\Http\Controllers\CompanyDashboardController::class, 'editPost'])->name('company.job.edit');
        Route::get('/job/applications',[App\Http\Controllers\RequestController::class, 'recruiter'])->name('company.recruiters');
        Route::get('/recruiters/send/request/{id}',[App\Http\Controllers\RequestController::class, 'sendRequest'])->name('company.recruiters.send');
        Route::get('/job/status/{id}',[App\Http\Controllers\CompanyDashboardController::class, 'jobAppStatus'])->name('company.job.status');
        Route::get('/job/Status/{id}',[App\Http\Controllers\CompanyDashboardController::class, 'jobAppStatus2'])->name('company.job.status2');


    });
});

Route::prefix('/recruiter')->group(function (){
    Route::middleware(['checkrecruiter'])->group(function () {

        Route::get('/',[App\Http\Controllers\HomeController::class,'dashboard'])->name('dashboard');
        Route::get('/profile',[App\Http\Controllers\RecruiterDashboardController::class,'profileSetup'])->name('recruiter.profile');
        Route::post('/profileupdate',[App\Http\Controllers\RecruiterDashboardController::class,'profileUpdate'])->name('recruiter.profile.update');
        Route::get('/details',[App\Http\Controllers\FrontendController::class, 'recruiterDetails'])->name('recruiter.details');
        Route::get('/company',[App\Http\Controllers\RecruiterDashboardController::class, 'companyIndex'])->name('recruiter.companyIndex');
        Route::get('/company/accept/request/{id}',[App\Http\Controllers\RecruiterDashboardController::class, 'AcceptRequest'])->name('recruiters.accept');
        Route::get('/candidate',[App\Http\Controllers\RecruiterDashboardController::class, 'candidateIndex'])->name('recruiter.candidateIndex');
        Route::get('/company/details/{id}',[App\Http\Controllers\RecruiterDashboardController::class, 'companyDetails'])->name('recruiter.companyDetails');
        Route::get('/candidate/details/{id}',[App\Http\Controllers\RecruiterDashboardController::class, 'candidateDetails'])->name('recruiter.candidateDetails');

        Route::get('/jobs',[App\Http\Controllers\RecruiterDashboardController::class, 'jobs'])->name('recruiter.jobs');
        Route::get('/jobs/create',[App\Http\Controllers\RecruiterDashboardController::class, 'createJobs'])->name('recruiter.jobs.create');
        Route::post('/jobs/store',[App\Http\Controllers\RecruiterDashboardController::class, 'StoreJob'])->name('recruiter.jobs.store');
        Route::get('/all/applications',[App\Http\Controllers\RecruiterDashboardController::class, 'jobApplications'])->name('recruiter.jobApplications');
        Route::get('/job/status/{id}',[App\Http\Controllers\RecruiterDashboardController::class, 'jobAppStatus'])->name('recruiter.job.status');

        // Import csv
        Route::post('/jobs/import-csv', [App\Http\Controllers\RecruiterDashboardController::class, 'importCsv'])->name('recruiter.csv');

    });
});
