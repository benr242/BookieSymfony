<?php

namespace App\Service;

class Bookkie
{
    public function setOdds()
    {
        $favLine = 150;
        $dogLine = 130;

        $fImplOdds = $favLine/($favLine + 100) * 100;
        $dImplOdds = 100/($dogLine + 100) * 100;

        $fOdds = $fImplOdds / ($fImplOdds + $dImplOdds);
        $dOdds = $dImplOdds / ($dImplOdds + $fImplOdds);
    }

    public function americanPayout(int $odds, int $bet ): int
    {
        if (odds < 0)
        {
            $payout = 100/$odds*$bet + $bet;
        } else {
            $payout = odds/100*$bet + $bet;
        }
        
        return $payout;
    }
}