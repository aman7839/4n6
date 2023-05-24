<?php

use App\Http\Controllers\CoachesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AwardsController;
use App\Http\Controllers\UsersGuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\RandomController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\statesController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\PlayCategoty;
use App\Http\Controllers\DataController;
use App\Http\Controllers\VaultController;
use App\Http\Controllers\Admin\CoachController;

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ISGController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\TopicRoles;
use App\Http\Controllers\ExtempController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\Paypal\PayPalController;
use App\Http\Controllers\cheque\ChequeController;
use App\Http\Controllers\Admin\UserController as AdminUsers;
use App\Http\Controllers\Admin\MembershipController;
// Route::get('/', function () {
//     return view('frontendviews.login');
// });





Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


// admin protected routes

Route::prefix('admin')->group(function () {
Route::get('/login', [DashboardController::class, 'login'])->name('login')->middleware('login');

Route::post('/login', [DashboardController::class, 'loginAdmin']);


Route::middleware(['auth', 'admin'])->group(function () {

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/', [DashboardController::class, 'dashboard']);


Route::get('/editProfile/{id}', [DashboardController::class, 'editProfile']);
Route::put('/updateProfile/{id}', [DashboardController::class, 'updateprofile']);

Route::get('/changePassword',[DashboardController::class, 'showChangePasswordGet'])->name('changePasswordGet');

Route::post('/changePassword',[DashboardController::class, 'changePasswordPost'])->name('changePasswordPost');

Route::get('/users', [DashboardController::class, 'users'])->name('users.index');
Route::get('/viewstudentlist/{id}', [DashboardController::class, 'users']);

Route::get('/addusers', [DashboardController::class, 'addusers']);

Route::post('/saveUsers', [DashboardController::class, 'saveUsers'])->name('users.save');

Route::get('/editUsers/{id}', [DashboardController::class, 'editUsers']);
Route::get('/viewUsers/{id}', [DashboardController::class, 'viewUser']);


Route::put('/updateUsers/{id}', [DashboardController::class, 'updateUsers'])->name('update.users');

Route::get('deleteuser/{id}', [DashboardController::class, 'destroy']);

Route::get('/awards', [AwardsController::class,'index']);

Route::get('/editAwards/{id}', [AwardsController::class, 'editAwards']);

Route::put('/updateAwards/{id}', [AwardsController::class, 'updateAwards']);

Route::get('/deleteAwards/{id}', [AwardsController::class, 'deleteAwards']);

Route::get('/logout', [DashboardController::class, 'logout']);

Route::get('/documents', [UsersGuideController::class,'index']);

Route::get('/adddocuments', [UsersGuideController::class,'adddocuments']);

Route::post('/savedocuments', [UsersGuideController::class,'savedocuments']);

Route::get('/editdocuments/{id}', [UsersGuideController::class, 'editDocuments']);

Route::put('/updatedocuments/{id}', [UsersGuideController::class, 'updateDocuments']);

Route::get('/deletedocuments/{id}', [UsersGuideController::class, 'deleteDocuments']);
Route::get('/download/{file}', [UsersGuideController::class, 'download']);
Route::get('/awards', [AwardsController::class,'index']);
Route::get('/addawards', [AwardsController::class,'addawards']);

Route::post('/saveawards', [AwardsController::class,'saveawards'])->name('awards.save');
Route::get('/topics', [RandomController::class,'index']);
Route::get('/addtopics', [RandomController::class,'addTopics']);
Route::post('/savetopics', [RandomController::class,'saveTopics']);
Route::get('/edittopics/{id}', [RandomController::class,'editTopics']);
Route::put('/updatetopics/{id}', [RandomController::class,'updateTopics']);
Route::get('/deletetopics/{id}', [RandomController::class, 'deleteTopics']);
Route::get('/states', [statesController::class, 'getStates']);
Route::get('/addstates', [statesController::class, 'addStates']);
Route::post('/savestates', [statesController::class, 'saveStates']);
Route::get('/editstate/{id}', [statesController::class, 'editState']);
Route::put('/updatestate/{id}', [statesController::class,'updateState']);
Route::get('/view/{file}', [statesController::class, 'view']);
Route::get('/deletestate/{id}', [statesController::class, 'deleteState']);
Route::get('/category', [LinksController::class, 'getCategory']);
Route::get('/addcategory', [LinksController::class, 'addCategory']);
Route::post('/savecategory', [LinksController::class, 'saveCategory']);
Route::get('/editlinks/{id}', [LinksController::class, 'editCategory']);
Route::put('/updatelinks/{id}', [LinksController::class,'updateCategory']);
Route::get('/deletelinks/{id}', [LinksController::class, 'deleteCategory']);
Route::get('/links', [LinksController::class, 'viewLinks']);
Route::get('/addlinks', [LinksController::class, 'addLinks']);
Route::post('/savelinks', [LinksController::class, 'saveLinks']);
Route::get('/editcategorylinks/{id}', [LinksController::class, 'editCategoryLinks']);
Route::put('/updatecategorylinks/{id}', [LinksController::class,'updateCategoryLinks']);
Route::get('/deletecategory/{id}', [LinksController::class, 'deleteLinks']);
Route::get('/theme', [ThemeController::class, 'index']);
Route::get('/addtheme', [ThemeController::class, 'addTheme']);
Route::post('/savetheme', [ThemeController::class, 'saveTheme']);
Route::get('/edittheme/{id}', [ThemeController::class, 'editTheme']);
Route::put('/updatetheme/{id}', [ThemeController::class, 'updateTheme']);
Route::get('/deletetheme/{id}', [ThemeController::class, 'deleteTheme']);
Route::get('/playcategory', [PlayCategoty::class, 'index']);
Route::get('/addplaycategory', [PlayCategoty::class, 'addCategory']);
Route::post('/saveplaycategory', [PlayCategoty::class, 'saveCategory']);
Route::get('/editplaycategory/{id}', [PlayCategoty::class, 'editCategory']);
Route::put('/updateplaycategory/{id}', [PlayCategoty::class, 'updateCategory']);
Route::get('/deleteplaycategory/{id}', [PlayCategoty::class, 'delete']);
Route::get('/data', [DataController::class, 'index']);
Route::get('/adddata', [DataController::class, 'adddata']);
Route::post('/savedata', [DataController::class, 'saveData']);
Route::get('/editdata/{id}', [DataController::class, 'editData']);
Route::put('/updatedata/{id}', [DataController::class, 'updateData']);

Route::get('/deletedata/{id}', [DataController::class, 'delete']);
Route::get('/addtopicroles', [TopicRoles::class, 'TopicRole']);
Route::post('/savetopicroles', [TopicRoles::class, 'saveTopicRole']);
Route::get('/topicroles', [TopicRoles::class, 'viewTopicRole']);

Route::post('/importisgdata', [TopicRoles::class,'importData']);

Route::get('/edittopicroles/{id}', [TopicRoles::class, 'editTopicRole']);
Route::put('/updatetopicroles/{id}', [TopicRoles::class, 'updateTopicRole']);
Route::get('/deletetopicroles/{id}', [TopicRoles::class, 'deleteTopicRole']);
Route::get('/viewisg', [ISGController::class, 'index']);
Route::get('/addisg', [ISGController::class, 'addIsg']);
Route::post('/importidadata', [ISGController::class, 'importData']);

Route::post('/saveisg', [ISGController::class, 'saveIsg']);
Route::get('/editisg/{id}', [ISGController::class, 'editIsg']);
Route::put('/updateisg/{id}', [ISGController::class, 'updateIsg']);
Route::get('/deleteisg/{id}', [ISGController::class, 'deleteIsg']);
Route::get('/extemptopics', [ExtempController::class, 'index']);
Route::get('/addextemptopics', [ExtempController::class, 'addExtempTopics']);
Route::post('/saveextemptopics', [ExtempController::class, 'saveExtempTopics']);
Route::get('/editextemptopics/{id}', [ExtempController::class, 'editExtempTopics']);
Route::put('/updateextemptopics/{id}', [ExtempController::class, 'updateExtempTopics']);
Route::get('/extemp', [ExtempController::class, 'viewEXtemp']);
Route::post('/extemp', [ExtempController::class, 'viewEXtempPost']);

Route::post('/importextempdata', [ExtempController::class, 'importData']);

Route::get('/addextemp', [ExtempController::class, 'addEXtemp']);
Route::post('/saveextemp', [ExtempController::class, 'saveEXtemp']);
Route::get('/editextemp/{id}', [ExtempController::class, 'editExtemp']);
Route::put('/updateextemp/{id}', [ExtempController::class, 'updateExtemp']);
Route::get('/messages', [contactusController::class, 'index']);
Route::get('/viewmessages/{id}', [contactusController::class, 'viewMessages']);
Route::get('/replymessages/{id}', [contactusController::class, 'replyMessages']);
Route::post('/replymessages/{id}', [contactusController::class, 'replyMessagestoUser']);

Route::get('/deletemessages/{id}', [contactusController::class, 'deleteMessages']);
Route::get('/offerprice', [HomeController::class,'offerPrice']);
Route::get('/addofferprice', [HomeController::class,'addofferPrice']);
Route::post('/saveofferprice', [HomeController::class,'saveofferPrice']);
Route::get('/editofferprice/{id}', [HomeController::class,'editofferPrice']);
Route::put('/updateofferprice/{id}', [HomeController::class,'updateofferPrice']);
Route::get('/deleteofferprice/{id}', [HomeController::class,'deleteoffer']);
Route::get('/vault', [VaultController::class,'addFolder']);

Route::get('/folder-data/{id}', [VaultController::class, 'getFolderData'])->name('folderData');
Route::post('/savefolder', [VaultController::class, 'storeFolder']);
Route::post('/editfolder/{id}', [VaultController::class, 'editFolder']);
Route::post('/deletefolder/{id}', [VaultController::class, 'deleteFolder']);
Route::post('/deletefile/{id}', [VaultController::class, 'deleteFile']);
Route::post('/uploadfile',[VaultController::class, 'fileUpload'])->name('uploadfile');
Route::get('/reviews',[HomeController::class, 'adminViewReviews']);
Route::post('/addscreenshot',[HomeController::class, 'addScreenshot']);

Route::get('/approveview/{id}', [HomeController::class, 'approveReview']);
Route::get('/deletereview/{id}', [HomeController::class, 'deleteReview']);

Route::post('/importdata', [userController::class,'importData']);
Route::get('/exporttdata', [userController::class,'exportData']);

Route::post('/changeuserpassword', [AdminUsers::class,'updatePassword'])->name('changeuser');
Route::post('/addstudentbycoach', [AdminUsers::class,'addstudentbycoach'])->name('addstudentbycoach');

Route::get('/activemembership',[MembershipController::class, 'adminActiveMemberships'])->name('admin.activeMembership');
Route::get('/pastmembership',[MembershipController::class, 'adminPastMembership'])->name('admin.pastMembership');
Route::get('/viewmembership/{id}',[MembershipController::class, 'adminViewMembership'])->name('admin.viewMembership');
Route::get('/editmembership/{id}',[MembershipController::class, 'adminEditMembership'])->name('admin.editMembership');
Route::post('/updatemembership',[MembershipController::class, 'updateMembership'])->name('admin.updateMembership');
// Route::post('/sendemail/{id}', [contactusController::class,'replyMessagestoUser']);
// search database
Route::get('/search', [CoachesController::class,'demoSearch']);
Route::post('/search', [CoachesController::class,'demoSearchPost']);
Route::post('/searchprints', [CoachesController::class,'demoSearchPrint']);
Route::get('/searchprint', [CoachesController::class,'demoSearchPrint']);
//  extemp topic route
Route::get('/extemp', [HomeController::class,'extempTopicGenerator']);
Route::post('/extemp', [HomeController::class,'extempTopicGeneratorPost']);
Route::get('/printdomestic', [CoachesController::class,'printDomesticTopic']);
Route::get('/printforiegn', [CoachesController::class,'printForiegnTopic']);




});

});

// globalviews routes

Route::get('/aboutUs', [HomeController::class,'aboutUs']);
Route::get('/home', [HomeController::class,'Home']);
Route::get('/', [HomeController::class,'Home']);


Route::get('/contactUs', [HomeController::class,'contactUs']);
Route::get('/reviews', [HomeController::class,'reviews']);
Route::post('/addreview', [HomeController::class,'addreview']);
Route::get('/faq', [HomeController::class,'faq']);



Route::get('/documents', [HomeController::class,'documents']);
Route::get('/download/{file}', [HomeController::class, 'download']);

Route::get('/register', [HomeController::class,'register'])->middleware('login');
Route::get('/school', [HomeController::class,'school']);
Route::get('/view/{file}', [statesController::class, 'view']);

Route::get('/tutorial', [HomeController::class,'tutorial']);
Route::get('/regeneratetopics', [HomeController::class,'RandomTopics']);
Route::get('/isg', [HomeController::class,'IsgTopicGenerator']);
Route::get('/extemp', [HomeController::class,'extempTopicGenerator']);
// Route::post('/extemp', [HomeController::class,'extempTopicGeneratorPost']);

Route::get('/freeresources', [HomeController::class,'freeResources']);
Route::get('/links', [HomeController::class,'getResources']);





Route::get('/services', [HomeController::class,'services'])->name('user.services');
Route::get('/login', [HomeController::class,'login'])->middleware('login');
Route::post('/contactUS', [contactusController::class,'saveContactUs']);


Route::get('/demosearch', [HomeController::class,'demoSearch']);
Route::post('/demosearch', [HomeController::class,'demoSearchPost']);




Route::get('/logout', [userController::class, 'logout']);




// Route::get('/clear_view_cache', function(){
//     Artisan::call('route:cache');
//     Artisan::call('config:cache');
//     Artisan::call('cache:clear');
//     Artisan::call('view:clear');
// });


Route::prefix('coach')->group(function () {

Route::middleware(['auth', 'coach'])->group(function () {


Route::get('/dashboard', [CoachesController::class, 'Dashboard']);
Route::get('/logout', [CoachesController::class, 'logout']);
Route::get('/students', [CoachesController::class, 'Students']);
Route::get('/addstudent', [CoachesController::class, 'addStudent']);
Route::post('/savestudent', [CoachesController::class, 'saveStudent']);
Route::get('/editstudent/{id}', [CoachesController::class, 'editStudent']);
Route::put('/updatestudent/{id}', [CoachesController::class, 'updateStudent']);
Route::get('/deletestudent/{id}', [CoachesController::class, 'DeleteStudent']);
Route::get('/editProfile/{id}', [DashboardController::class, 'editProfile']);
Route::put('/updateProfile/{id}', [DashboardController::class, 'updateprofile']);

/// PAYPAL ROUTES
Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
/////
////CHEQUE ROUTES
Route::post('submitcheque', [ChequeController::class, 'submitcheque'])->name('submitcheque');

//////

///Membership Route//
Route::get('user-membership', [MembershipController::class, 'coachMemberships'])->name('coachmembership');

///VaultRoute//

Route::get('vault', [CoachController::class, 'getData']);
Route::get('coach_folder_data/{id}', [VaultController::class, 'getFolderData']);
// vault access
Route::get('/vaultaccess', [CoachesController::class,'vaultAccess']);
Route::post('/vaultaccess', [CoachesController::class,'vaultAccessToStudent']);

//  extemp topic route
Route::get('/extemp', [HomeController::class,'extempTopicGenerator']);
Route::post('/extemp', [HomeController::class,'extempTopicGeneratorPost']);
Route::get('/printdomestic', [CoachesController::class,'printDomesticTopic']);
Route::get('/printforiegn', [CoachesController::class,'printForiegnTopic']);

// search database 

Route::get('/search', [CoachesController::class,'demoSearch']);
Route::post('/search', [CoachesController::class,'demoSearchPost']);
Route::post('/searchprints', [CoachesController::class,'demoSearchPrint']);
Route::get('/searchprint', [CoachesController::class,'demoSearchPrint']);





});
});




Route::prefix('student')->group(function () {
Route::middleware(['auth', 'student'])->group(function () {
Route::get('/dashboard', [StudentsController::class, 'Dashboard']);
Route::get('/logout', [StudentsController::class, 'logout']);
Route::get('/logout', [StudentsController::class, 'logout']);
Route::get('/extemp', [HomeController::class,'extempTopicGenerator']);
Route::post('/extemp', [HomeController::class,'extempTopicGeneratorPost']);
// Route::get('vault', [CoachController::class, 'getData']);
// search database
Route::get('/search', [CoachesController::class,'demoSearch']);
Route::post('/search', [CoachesController::class,'demoSearchPost']);
Route::post('/searchprints', [CoachesController::class,'demoSearchPrint']);
Route::get('/searchprint', [CoachesController::class,'demoSearchPrint']);
  
//  extemp topic route
Route::get('/extemp', [HomeController::class,'extempTopicGenerator']);
Route::post('/extemp', [HomeController::class,'extempTopicGeneratorPost']);
Route::get('/printdomestic', [CoachesController::class,'printDomesticTopic']);
Route::get('/printforiegn', [CoachesController::class,'printForiegnTopic']);

// vault routes

Route::get('vault', [StudentsController::class, 'getData']);
Route::get('coach_folder_data/{id}', [VaultController::class, 'getFolderData']);
    
});
    });
    



// users postLogin routes

Route::prefix('users')->group(function () {


    
    Route::post('/register', [userController::class,'registerUser'])->name('user.save');
    Route::post('/login', [userController::class, 'loginUser']);


});



















