<?php

namespace App;

class Helper
{
    /**
     * XXXする関数
     *
     * @param string $value
     * @return string
     */
    public static function getCategoryName($id)
    {
        // 処理
        switch ($id) {
            case 1:
                return "家電";
            case 2:
                return "生活用品";
            case 3:
                return "趣味";
            case 4:
                return "スポーツ";
            case 5:
                return "ファッション";
            case 6:
                return "その他";
            default:
                return "non-category";
        }
    }

    public static function countMinPrice($day, $week, $month, $days) {
        if ($days >= 1) {
            if (isset($week) && $days >= 7) {
                if (isset($month) && $days >= 30) {
                    $price1 = (floor($days/30) * $month);
                    if ($days % 30 >= 7) {
                        $price2 = (floor(($days % 30)/7) * $week) + (($days % 30) % 7 * $day);
                    } else {
                        $price2 = ($days % 30 * $day);
                    }
                    $price = $price1 + $price2;
                } else {
                    $price = (floor($days/7) * $week) + ($days % 7 * $day);
                }
            } else {
                $price = $days * $day;
            }
        } else {
            $price = $day;
        }

        return $price;
    }
}