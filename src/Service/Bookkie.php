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

    public function americanPayout(int $aOdds, int $bet ): int
    {
        if ($aOdds < 0)
        {
            $impOdds = $aOdds / ($aOdds + 100) * 100;
        } else {
            $impOdds = 100 / ($aOdds + 100) * 100;
        }

        return $impOdds;
    }
}