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
}