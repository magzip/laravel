<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use function Composer\Autoload\includeFile;

class Page extends Controller
{
    public function showOne($id)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];
        if(array_key_exists($id,$pages)){
        $str1 = $pages[$id];
        return $str1;
        }
        else{
            return 'нет такого элемента';
        }
    }
    public function showAll()
    {
        return 'ShowAll';
    }
}
