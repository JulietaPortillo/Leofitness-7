<?php

namespace App\Http\Controllers;

use Auth;
use App\Member;
use App\SmsLog;
use JavaScript;
use App\Expense;
use App\Setting;
use App\Followup;
use App\ChequeDetail;
use App\Subscription;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        JavaScript::put([
            'jsRegistraionsCount' => \Utilities::registrationsTrend(),
            'jsMembersPerPlan' => \Utilities::membersPerPlan(),
        ]);

        $expirings = Subscription::dashboardExpiring()->paginate(5);
        $expiringCount = $expirings->total();
        $allExpired = Subscription::dashboardExpired()->paginate(5);
        $expiredCount = $allExpired->total();
        $birthdays = Member::birthday()->get();
        $birthdayCount = $birthdays->count();
        $recents = Member::recent()->get();
        $recievedCheques = ChequeDetail::where('status', \constChequeStatus::Recieved)->get();
        $recievedChequesCount = $recievedCheques->count();
        $depositedCheques = ChequeDetail::where('status', \constChequeStatus::Deposited)->get();
        $depositedChequesCount = $depositedCheques->count();
        $bouncedCheques = ChequeDetail::where('status', \constChequeStatus::Bounced)->get();
        $bouncedChequesCount = $bouncedCheques->count();
        $membersPerPlan = json_decode(\Utilities::membersPerPlan());

        return view('dashboard.index', compact('expirings', 'allExpired', 'birthdays', 'recents', 'expiringCount', 'expiredCount', 'birthdayCount',  'recievedCheques', 'recievedChequesCount', 'depositedCheques', 'depositedChequesCount', 'bouncedCheques', 'bouncedChequesCount', 'membersPerPlan'));
    }
}
