<?php

namespace App\Http\Controllers;

use App\Investment;
use App\InvestmentPackage;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class InvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index()
    {
        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        $investments = Investment::where('user_id', Auth::user()->id)->get();

        return view('users.investments.index', compact('investments', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        // Check if users is logged in
        if(Auth::check()){
            $user = Auth::user();
        }else{
            return redirect()->route('login');
        }

        $packages = InvestmentPackage::all();
        return view('users.investments.create', compact('packages', 'user'));
    }

    public function submitInvestment(Request $request){

        $input = $request->all();

        $package = InvestmentPackage::where('id', $input['package'])->get()->first();

//        if($input['amount'] < $package->min || $input['amount'] > $package->max){
//            //session notification
//            Session::flash('warning', 'Enter an amount that falls within your package');
//            return redirect()->back();
//        }

        //Generate Tracking Number
        function InvestmentId($length = 5){
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = 'DMI-';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }

        $investment = Investment::create([
            'invest_id' => InvestmentId(),
            'investment_package_id' => $package->id,
            'user_id' => Auth::user()->id,
            'amount' => $input['amount'],
            'is_approved' => 0,
        ]);

        Transaction::addTransaction($investment->user_id, $investment->amount, 0, 'You made an investment request');

        $data = [
            'investment_id' => $investment->invest_id,
            'investment_package' => $investment->investmentPackage->name,
            'amount' => $investment->amount,
            'status' => $investment->is_approved,
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
        ];

        // Send Email to registered User
        Mail::send('emails.investments.add-new-investment', $data, static function ($message) use ($data) {
            $message->from('info@digitaltradingoptions.com', 'Digital Trading Options');
            $message->to($data['email'], $data['name'])->cc('info@digitaltradingoptions.com');
            $message->replyTo('info@digitaltradingoptions.com', 'Digital Trading Options');
            $message->subject('Investment Complete');
        });

        Session::flash('success', 'Investment Submitted,  your wallet would be funded once payment is approved');
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function show(Investment $investment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function edit(Investment $investment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Investment $investment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Investment  $investment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Investment $investment)
    {
        //
    }
}
