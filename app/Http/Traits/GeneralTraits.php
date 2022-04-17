<?php

namespace App\Http\Traits;

trait GeneralTraits {
    public function moneyFormat($value) {
        return number_format($value, 0, ',', '.');
    }

    public function dateFormat($date)
    {
        return date('d M Y', strtotime($date));
    }

    public function timestampsFormat($timestamps)
    {
        return date('d M Y H:i:s', strtotime($timestamps));
    }

    public function dateDiff($startDate, $endDate)
    {
        $start  = date_create($startDate);
        $end = date_create($endDate);
        $diff  = date_diff( $start, $end );

        $formattedDate = '';
        $formattedDate .= $diff->y . ' tahun, ';
        $formattedDate .= $diff->m . ' bulan, ';
        $formattedDate .= $diff->d . ' hari, ';
        $formattedDate .= $diff->h . ' jam, ';
        $formattedDate .= $diff->i . ' menit, ';
        $formattedDate .= $diff->s . ' detik. ';

        return $formattedDate;
    }
}
