<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function Ramsey\Uuid\v1;

class ChapterController extends Controller
{
    //start with the api Quran

    public function ViewjuzaInfo()
    {
       $chapters = Http::get('http://api.quran.com/api/v3/chapters')->json()['chapters'];
       $sheaks = Http::get('http://api.quran.com/api/v3/options/recitations')->json()['recitations'];
       $lang = Http::get('http://api.quran.com/api/v3/options/languages')->json()['languages'];
        return view('Front.main_desgin',compact('chapters','sheaks','lang'));
    }
    public function chapterinfo($id)
    {
        # get the detailes of the chpter
        $chapter=Http::get('http://api.quran.com/api/v3/chapters/'.$id)->json()['chapter'];
        $verses=Http::get('http://api.quran.com/api/v3/chapters/'.$chapter['chapter_number'].'/verses')->json()['verses'];
        $verses1=Http::get('http://api.quran.com/api/v3/chapters/'.$chapter['chapter_number'].'/verses?page=2')->json()['verses'];
        $meta_verses=Http::get('http://api.quran.com/api/v3/chapters/'.$chapter['chapter_number'].'/verses')->json()['meta'];

        return view('Front.single_verse' ,compact('verses','chapter','meta_verses'));
    }
    public function chaptervers($id,$page)
    {
        # get the detailes of the chpter
        $chapter=Http::get('http://api.quran.com/api/v3/chapters/'.$id)->json()['chapter'];
        $verses=Http::get('http://api.quran.com/api/v3/chapters/'.$chapter['chapter_number'].'/verses?recitation=1&page='.$page)->json()['verses'];
        $meta_verses=Http::get('http://api.quran.com/api/v3/chapters/'.$chapter['chapter_number'].'/verses?recitation=1&page='.$page)->json()['meta'];
        return view('Front.single_verse' ,compact('verses','chapter','meta_verses'));
    }
}
