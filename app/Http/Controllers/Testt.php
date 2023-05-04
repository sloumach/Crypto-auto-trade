<?php

namespace App\Http\Controllers;

use DB;

class Testt extends Controller
{
    //
    public function testt()
    {

        // DD(Hash::make('test'));
        $usersWithTrades = DB::table('users')
            ->join('trades', function ($join) {
                $join->on('users.id', '=', 'trades.id_client')->where('trades.status', '=', 0);
            })
            ->select('users.*')
            ->distinct()
            ->get();

        foreach ($usersWithTrades as $x) {
            // $prorfit = ($somme * 100) / $trd->range_trade;
            $randomFloat = 1.75 + (mt_rand() / mt_getrandmax()) * (3.21 - 1.85);
            $randomFloat = mt_rand(175, 321) / 100;
            $formattedFloat = number_format($randomFloat, 2, '.', '');
            $rate = floatval($formattedFloat);

            $id = $x->id;
            $somme = $x->somme;

            $trrd = DB::table('trades')
                ->where('id_client', $id)
                ->where('status', 0)
                ->first();

            $conftrade = DB::table('trades')
                ->where('id_client', $id)
                ->where('status', 0)

                ->update([
                    'status' => '1',
                    'income' => $rate,
                ]);
            if ($conftrade) {
                echo ('<br>update trade status et income done');
            } else {
                echo ('<br>update status et income done');
            }

            $prof = $somme + $trrd->range_trade;
            $tst = ($trrd->range_trade * $rate) / 100;
            $profit = $prof + $tst;

            $trd = DB::table('users')
                ->where('id', $id)

                ->update([
                    'somme' => $profit,
                    'daily_trade' => '1',

                ]);


            $conftrade2 = DB::table('trades')
                ->where('id_client', $id)
                ->latest()->first();
                $conftrade3 = DB::table('trades')
                ->where('id', $conftrade2->id)
                ->update(['profit' => $tst]);

            // if ($trd) {
            //     echo ('<br>client somme done');
            // } else {
            //     echo ('<br>client somme not done yet');
            // }
        }

        // DD($data);
    }
}
