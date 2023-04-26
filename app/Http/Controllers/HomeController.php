<?php

namespace App\Http\Controllers;

use App\Models\Trade;
use App\Models\Transaction;
use App\Models\User;
use DB;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function crypto()
    {
        $client = new Client();
        $response = $client->get('https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false');
        $currencies = json_decode($response->getBody());
        $currencies = collect(json_decode($response->getBody()));

        $perPage = 10;
        $page = request()->get('page', 1);
        $paginatedCurrencies = $currencies->slice(($page - 1) * $perPage, $perPage)->all();

        $paginatedData = new LengthAwarePaginator($paginatedCurrencies, count($currencies), $perPage, $page, [
            'path' => url()->current(),
            'query' => request()->query(),
        ]);
        $prf = Auth::User();
        $lasttrade = $this->getLastTrade($prf->id);
        return view('market', ['cry' => $paginatedData, 'prf' => $prf,'lasttrade'=>$lasttrade]);
    }
    public function index()
    {
        return view('home');
    }
    public function addfunds(request $request)
    {
        $id = $request->input('id');
        $user_id=$request->input('id_user');
    $amount = $request->input('amount');
    $action = $request->input('action');

    if ($action=='accept') {

        $x1 = DB::table('users')
                        ->where('id', $user_id)
                        ->get()->first();
        $x = DB::table('users')
                        ->where('id', $user_id)
                        ->update([
                            'daily_trade' => '1',
                            'somme' =>$x1->somme+$amount,
                        ]);
                        $y = DB::table('transactions')
                        ->where('id', $user_id)
                        ->update([
                            'status' => '1',

                        ]);

            if ($x) {

                            return response()->json(['success' => true]);
                            }
                            else{
                                return response()->json(['success' => false]);

                            }


    }

    if ($action=='decline') {



    return response()->json(['success' => true]);
    }
    else{
        return response()->json(['success' => false]);

    }

}
    public function adddmin()
    {   $data = DB::table('transactions')->where(
        'status','0')->get();
        // DD($data);

        return view('adddmin', compact('data'));

    }
    public function trade()
    {
        $prf = Auth::User();
        $lasttrade = $this->getLastTrade($prf->id);
        return view('trade', compact('prf','lasttrade'));
    }

    public function conftrade(Request $request)
    {
        $prf = Auth::User();

        if ($prf->daily_trade == '1') {
            $validatedData = $request->validate([
                'duration' => 'required',
                'range' => 'required',
                'crypto' => 'required',
                'pass' => 'required',
            ]);
            // $ppsw=Hash::check($prf->password,$request->pass);
            // DD($ppsw);
            if (!(Hash::check($request->pass,$prf->password))) {
                return redirect()
                        ->back()
                        ->with('failed', 'Wrong password');
            }


            $tradeamount = ($prf->somme * $request['range']) / 100;
            if ($tradeamount > '99.9') {
                $trade = Trade::create([
                    'id_client' => $prf->id,
                    'duration' => $request['duration'],
                    'range_trade' => $tradeamount,
                    'crypto' => $request['crypto'],
                ]);
                if ($trade) {
                    $x = DB::table('users')
                        ->where('id', $prf->id)
                        ->update([
                            'daily_trade' => '0',
                            'somme' => $prf->somme - $tradeamount,
                        ]);
                    return redirect()
                        ->back()
                        ->with('success', 'Trade confirmed');

                    // return redirect('settrade')->with('success', 'Trade confirmed');
                } else {
                    return redirect()
                        ->back()
                        ->with('failed', 'Trade not confirmed');
                    // return redirect('settrade')->with('success', 'Trade not confirmed');
                }
            } else {
                return redirect()
                    ->back()
                    ->with('failed', 'Minimum 100 USDT');
            }
        } else {
            return redirect()
                ->back()
                ->with('failed', 'can"t pass the trades limit per day');
            // return redirect('settrade')->with('limit', 'can"t pass the trades limit per day');
        }
    }

    public function recharge(Request $request)
    {
        $prf = Auth::User();
        $validatedData = $request->validate([
            'amount' => 'required |numeric',
            'txid' => 'required',
            'password' => 'required',
        ]);

        $recharge = Transaction::create([
            'id_user' => $prf->id,
            'montant' => $request['amount'],
            'txid' => $request['txid'],
            'status' => '0',
            'type' => '0',
        ]);
        if ($recharge) {
            return redirect()
                ->back()
                ->with('success', 'waiting for confirmation reception');
        } else {
            return redirect()
                ->back()
                ->with('failed', 'verify you informations');
        }
    }
    public function withdraw(Request $request)
    {
        $prf = Auth::User();
        $validatedData = $request->validate([
            'amount' => 'required |numeric',

            'password' => 'required',
        ]);

        $recharge = Transaction::create([
            'id_user' => $prf->id,
            'montant' => $request['amount'],
            'txid' => 'withdraw',
            'type' => '1',
        ]);
        if ($recharge) {
            return redirect()
                ->back()
                ->with('success', 'waiting for confirmation withdraw');
        } else {
            return redirect()
                ->back()
                ->with('failed', 'verify you informations');
        }
    }

    private function getLastTrade($userId) {
        return DB::table('trades')->where('id_client', $userId)->latest()->first();
    }

    public function tradeshist()
    {
        $prf = Auth::User();
        $data = DB::table('trades')
            ->where('id_client', $prf->id)
            ->get();

            $lasttrade = $this->getLastTrade($prf->id);

        return view('tradeshist', compact('data', 'prf','lasttrade'));
    }

    public function funds()
    {
        $prf = Auth::User();
        $hist = DB::table('transactions')
            ->where('id_user', $prf->id)
            ->get();
            $lasttrade = $this->getLastTrade($prf->id);
        return view('funds', compact('prf', 'hist','lasttrade'));
    }

    public function profile()
    {
        $prf = Auth::User();
        $data = DB::table('messages')
            ->where('id_user', $prf->id)
            ->paginate(5);
        $invited = DB::table('invitations')
            ->where('inv_parrain', $prf->inv_code)
            ->get();

        $count = $data->count();
        $lasttrade = $this->getLastTrade($prf->id);
        return view('profile', compact('data', 'count', 'prf', 'invited','lasttrade'));
    }

    public function verify(Request $request)
    {
        //     $validatedData = $request->validate([
        //     'wallet' => 'required|string',
        //     'file' => 'required|image|size:2048|mimes:jpg,jpeg,png'
        // ]);
        $validator = Validator::make($request->all(), [
            'wallet' => 'required|string',
            'file' => 'required|image|max:2048|mimes:jpg,jpeg,png',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = $request->file('file');
        $fileName = date('YmdHis') . '.' . $file->getClientOriginalExtension();
        $path = $file->move('uploads', $fileName);
        $t = 'uploads/' . $fileName;

        $x = User::find(Auth::User()->id);
        $x->url_img = $t;
        $x->wallet = $request->wallet;
        $x->status = '2';
        $x->save();

        // $x = DB::table('users')
        //     ->where('id', Auth::User()->id)
        //     ->update([
        //         'url_img' => $t,
        //         'wallet' => $request->wallet,
        //     ]);

        if ($x) {
            return redirect()
                ->back()
                ->with('success', 'File uploaded successfully');
        } else {
            return redirect()
                ->back()
                ->with('success', 'File error');
        }
    }

    public function update(request $request)
    {

        if (Auth::User()->status == 0) {
            if ($request->password == $request->passwordconfirm) {
                $user = DB::table('users')
                    ->where('id', Auth::User()->id)
                    ->update([
                        'nom' => $request->nom,
                        'prenom' => $request->prenom,
                        'email' => $request->email,
                        // 'password' => Hash::make($request->password),
                        'password' => $request->filled('password') ? Hash::make($request->password) : Auth::user()->password,
                    ]);

                if ($user) {
                    return redirect('profile')->with([
                        'update' => 'Updated successfully',
                    ]);
                } else {
                    return redirect('profile')->with('update', 'Update failed!');
                }
            } else {
                return redirect('profile')->with('update', 'Password not confirm!');
            }
        } else {
            if ($request->password == $request->passwordconfirm) {
                $user = DB::table('users')
                    ->where('id', Auth::User()->id)
                    ->update([
                        'password' => Hash::make($request->password),
                    ]);

                if ($user) {
                    return redirect('profile')->with([
                        'status' => 'updated successfuly',
                    ]);
                } else {
                    return redirect('profile')->with('status', 'Update failed!');
                }
            } else {
                return redirect('profile')->with('status', 'password not confirm!');
            }
        }
    }
}
