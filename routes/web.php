<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
        $results = \App\Models\Mosque::all();
    return view('welcome',[
        'posts'=>$results
    ]);
});

Route::get('insert', function () {
         
         $mosq = array(
            "جامع الشبيبات",
            "جمعية المرأة العمانية بصحار(فرع وادي حيبي)",
            " جمعية المرأة العمانية بصحار(فرع وادي حيبي)",
            "مسجد بن رمضون",
            "جامع عوتب",
            "مجلس الجفرة العام",
            "جامع الشيخ راشد بن حمدان",
            "جامع الشيخ خليفة",
            "جامع الشرجة",
            "مسجد الأرقم بن أبي الأرقم",
            "جامع صلان الشمالي",
            "جامع فلج القبائل",
            "مسجد المكرمة",
            "جامع سيح البرير",
            "مسجد التقوى",
            "مسجد عثمان بن عفان",
            "مسجد الرحمة",
            "جامع الرحمن"
            );
            foreach ($mosq as $i) {
                $results = new \App\Models\Mosque;
                $results->mosque=$i;
                $results->save();
            }
        
        
        return ("HERE");
});
