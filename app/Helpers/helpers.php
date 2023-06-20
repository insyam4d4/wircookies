<?php

function currencyFormat($value, $type = 'idr')
{
    $result = null;
    switch ($type) {
        case 'idr':
            $result = "Rp" . number_format($value, 0, ',', '.');
            break;

        default:
            $result = number_format($value, 0, ',', '.');
            break;
    }

    return $result;
}

function generateCode($string, $lastId = 0, $length)
{
    $lastId++;
    $result = $string . str_pad($lastId, $length, '0', STR_PAD_LEFT);

    return $result;
}
