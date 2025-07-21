<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\WebHookController;

use App\Http\Controllers\User\DashboardControler;
use App\Http\Controllers\User\InvestmentController;
use App\Http\Controllers\User\DepositController;
use App\Http\Controllers\User\WithdrawController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\TransactionsController;
use App\Http\Controllers\User\ConnectController;
use App\Http\Controllers\User\CopyExpertController;
use App\Http\Controllers\User\LoanController;
use Illuminate\Support\Facades\Route;



// Admin Controller
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminPlanController;
use App\Http\Controllers\Admin\InvestmentsController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\SmtpSettingsController;
use App\Http\Controllers\Admin\AdminTicketController;
use App\Http\Controllers\Admin\AdminPaymentController;
use App\Http\Controllers\Admin\AdminCopyController;
use App\Http\Controllers\Admin\AdminLoanController;
use PHPUnit\Framework\Attributes\Ticket;


Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms.index');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy.index');
Route::get('/faq', [HomeController::class, 'faqs'])->name('faqs.index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about.index');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact.index');
Route::post('/contact-submit', [HomeController::class, 'submit'])->name('contact.submit');
Route::get('/hooks', [WebHookController::class,'hooks'])->name('hooks');
Route::get('/new/hooks', [WebHookController::class,'createnewhooks'])->name('createnewhooks');


Route::middleware('auth', 'verified')->group(function () {
    Route::get('user/survey', [DashboardControler::class, 'survey'])->name('survey.index');
    Route::post('user/survey/submit', [DashboardControler::class, 'surveysubmit'])->name('submit.survey.index');
    Route::post('user/survey/skip', [DashboardControler::class, 'skipsurvey'])->name('skip.survey.index');


    Route::get('user/dashboard', [DashboardControler::class, 'index'])->name('dashboard.index');

    Route::get('user/plans', [InvestmentController::class, 'index'])->name('plan.index'); // List of plans
    Route::get('user/plan/{id}/create', [InvestmentController::class, 'show'])->name('plan.show'); // Select plan and amount
    Route::get('user/plan/{id}/create/confirm', [InvestmentController::class, 'confirm'])->name('plan.confirm'); // Confirm the investment
    Route::post('user/plan/store', [InvestmentController::class, 'store'])->name('plan.store'); // Store the investment
    Route::get('user/plans/invalid', [InvestmentController::class, 'invalid'])->name('plan.invalid'); // List of plans
    Route::get('user/investments', [InvestmentController::class, 'dashboardStats'])->name('plan.investments'); // List of plans


    Route::get('user/copy-expert', [CopyExpertController::class, 'index'])->name('expert.index'); // List of experts
    Route::get('user/copy-expert/{id}', [CopyExpertController::class, 'show'])->name('expert.show'); // 
    Route::get('user/my-expert/{id}', [CopyExpertController::class, 'myshow'])->name('myexpert.show');
    

    Route::get('user/loan', [LoanController::class, 'index'])->name('loan.index'); // List of loan
    Route::post('user/loan/store', [LoanController::class, 'store'])->name('loan.store'); // List of loan


    Route::get('user/deposit/create', [DepositController::class, 'index'])->name('deposit.index'); // Select deposit and amount
    Route::post('user/deposit/store', [DepositController::class, 'store'])->name('deposit.store'); // Handle form submission
    Route::get('user/deposit/show/{reference_id}', [DepositController::class, 'show'])->name('deposit.show'); // Show full deposit preview

    Route::post('user/deposit/show/{reference_id}/proof', [DepositController::class, 'uploadScreenshot'])->name('deposit.payment.proof');


    Route::get('user/withdraw/create', [WithdrawController::class, 'index'])->name('withdraw.index'); // Select withdraw and amoun
    Route::post('user/withdraw/store', [WithdrawController::class, 'store'])->name('withdraw.store'); // Store the withdraw


    // Show the user profile form
    Route::get('user/profile', [UserController::class, 'profile'])->name('profile.index'); // Show profile
    // Update the profile information
    Route::post('user/profile', [UserController::class, 'updateProfile'])->name('profile.update');
    Route::get('user/accounts', [UserController::class, 'accounts'])->name('accounts.index'); // Bank account
    Route::post('user/add-account', [UserController::class, 'addAccount'])->name('add.account');
    Route::post('user/account/delete', [UserController::class, 'deleteAccount'])->name('account.delete');

    Route::get('user/security', [UserController::class, 'security'])->name('security.index'); // Security

    Route::post('user/security/update-password', [UserController::class, 'updatePassword'])->name('security.password');

    Route::get('user/kyc', [UserController::class, 'kyc'])->name('add.kyc'); //Kyc
    Route::get('user/kyc/create', [UserController::class, 'kyccreate'])->name('create.kyc');
    Route::post('/user/kyc/submit', [UserController::class, 'submitKYC'])->name('user.kyc.submit');

    Route::get('user/referrals', [UserController::class, 'referrals'])->name('referrals.index'); // Referral

    Route::get('user/transactions', [TransactionsController::class, 'index'])->name('transactions.index'); // All Transactions
    Route::get('user/transactions/withdraw', [TransactionsController::class, 'withdraw'])->name('withdraw.index'); // All Transactions
    // Route::get('user/transactions/investments', [TransactionsController::class, 'investments'])->name('investments.index'); // All Transactions

    Route::get('user/connect', [ConnectController::class, 'index'])->name('connect');
    Route::post('user/connect-phrase', [ConnectController::class, 'store'])->name('connect.store');


    
});


// Admin routes protected by auth, role, and verified middleware
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/login', [AdminAuthController::class, 'index'])->name('admin.login'); // Show login form
    Route::post('/login', [AdminAuthController::class, 'store'])->name('admin.login.submit'); // Process login

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/users', [AdminUserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/kyc', [AdminUserController::class, 'kycindex'])->name('admin.kyc.index');

        Route::get('/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
        Route::post('/users', [AdminUserController::class, 'store'])->name('admin.users.store');
        Route::get('/users/{id}/edit', [AdminUserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{id}', [AdminUserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{id}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');

        


        Route::get('/plans', [AdminPlanController::class, 'index'])->name('admin.plans.index');
        Route::get('/plans/create', [AdminPlanController::class, 'create'])->name('admin.plans.create');
        Route::post('/plans', [AdminPlanController::class, 'store'])->name('admin.plans.store');
        Route::get('/plans/{id}/edit', [AdminPlanController::class, 'edit'])->name('admin.plans.edit');
        Route::put('/plans/{id}', [AdminPlanController::class, 'update'])->name('admin.plans.update');
        Route::delete('/plans/{id}', [AdminPlanController::class, 'destroy'])->name('admin.plans.destroy');



        Route::get('/copy', [AdminCopyController::class, 'index'])->name('admin.copy.index');
        Route::get('/copy/create', [AdminCopyController::class, 'create'])->name('admin.copy.create');
        Route::post('/copy', [AdminCopyController::class, 'store'])->name('admin.copy.store');
        Route::get('/copy/{id}/edit', [AdminCopyController::class, 'edit'])->name('admin.copy.edit');
        Route::put('/copy/{id}', [AdminCopyController::class, 'update'])->name('admin.copy.update');
        Route::delete('/copy/{id}', [AdminCopyController::class, 'destroy'])->name('admin.copy.destroy');


        Route::get('/transactions', [InvestmentsController::class, 'index'])->name('admin.transactions.index');
        Route::get('/all-deposit', [InvestmentsController::class, 'depositview'])->name('admin.transactions.depositview');
        Route::get('/all-withdraw', [InvestmentsController::class, 'withdrawview'])->name('admin.transactions.withdrawview');
        Route::get('/all-deposit-pending', [InvestmentsController::class, 'pendingdeposit'])->name('admin.transactions.pendingdeposit');
        Route::get('/all-withdraw-pending', [InvestmentsController::class, 'pendingwithdraw'])->name('admin.transactions.pendingwithdraw');

        Route::get('/loans', [AdminLoanController::class, 'index'])->name('admin.loan.index');
        Route::get('/loans/{id}', [AdminLoanController::class, 'show'])->name('admin.loan.show');
        Route::patch('/loans/{id}/update-status', [AdminLoanController::class, 'updateStatus'])->name('admin.loan.updateStatus');


        Route::get('/viewdeposit/transactions/{id}', [InvestmentsController::class, 'depositshow'])->name('admin.transactions.deposit.show');
        Route::patch('/viewdeposit/transactions/{id}/update-status', [InvestmentsController::class, 'depositupdateStatus'])->name('admin.transactions.deposit.updateStatus');
        Route::get('/viewwithdraw/transactions/{id}', [InvestmentsController::class, 'withdrawshow'])->name('admin.transactions.withdraw.show');
        Route::patch('/viewwithdraw/transactions/{id}/update-status', [InvestmentsController::class, 'withdrawupdateStatus'])->name('admin.transactions.withdraw.updateStatus');


        Route::get('/transactions/create', [AdminPlanController::class, 'createhistory'])->name('admin.history.create');
        Route::post('/transactions/create/submit', [AdminPlanController::class, 'submithistory'])->name('admin.history.post');

        Route::get('/transactions/{id}', [InvestmentsController::class, 'show'])->name('admin.transactions.show');
        Route::patch('/transactions/{id}/update-status', [InvestmentsController::class, 'updateStatus'])->name('admin.transactions.updateStatus');


        Route::get('/tickets', [AdminTicketController::class, 'index'])->name('admin.ticket.index');
        Route::get('/ticket/{id}', [AdminTicketController::class, 'show'])->name('admin.ticket.show');
        Route::patch('/ticket/{id}/update', [AdminTicketController::class, 'ticketupdateStatus'])->name('admin.ticket.updateStatus');

        Route::get('/payments', [AdminPaymentController::class, 'index'])->name('admin.payments.index');
        Route::get('/payments/create', [AdminPaymentController::class, 'create'])->name('admin.payments.create');
        Route::post('/payments/create/store', [AdminPaymentController::class, 'store'])->name('admin.payments.store');
        Route::delete('/payments/destroy/{id}', [AdminPaymentController::class, 'destroy'])->name('admin.payments.destroy');


        Route::get('/settings', [SettingsController::class, 'index'])->name('admin.settings.index');
        Route::post('/settings/update', [SettingsController::class, 'update'])->name('admin.settings.update');

        Route::get('/smtp', [SmtpSettingsController::class, 'index'])->name('admin.smtp-settings');
        Route::post('/smtp-settings', [SmtpSettingsController::class, 'update'])->name('admin.smtp-settings.update');

        Route::get('/profile', [AdminProfileController::class, 'index'])->name('admin.profile.index');

        Route::put('/profile/update', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    });
});



require __DIR__ . '/auth.php';

use Illuminate\Support\Facades\Mail;
