<?php

namespace App\Http\Controllers;

use Illuminate\HTTP\Request;
use Illuminate\Support\Facades\DB;

class basicController extends Controller{
    public function index(Request $request)
    {
        #$data=DB::table('studentsmarks')->insert([   
                #$data=DB::table('studentsmarks')->where('age','<',24)->get();
                #$data=DB::table('studentsmarks')->where('age','=',24)->first();
                #$data=DB::table('studentsmarks')->where('age','=',24)->value("id");
                #$data=DB::table('studentsmarks')->where('age','<',22)->where("age",'>',24);
                #$data=DB::table('studentsmarks')->max('marks');
                #$data=DB::table('studentsmarks')->avg('marks');
                #$data=DB::table('studentsmarks')->where('age','=',24)->count();
                #$data=DB::table('studentsmarks')->find(24);
                #$data=DB::table('studentsmarks')->where('name','=','avani')->exists();
                #$data=DB::table('studentsmarks')->distinct()->get('age');
               /* $data=DB::table('studentsmarks')->where('name','=','ashna')->update(
                    [
                        "name"=>"aparna",
                        "age"=>24,
                        "marks"=>80
                    ]
                    );
                    */
                    /*$data=DB::table('studentsmarks')->updateOrInsert([
                        "id"=>3],
                        [
                        "name"=>"niveditha",
                        "age"=>22,
                        "marks"=>86
                        ]
                    );  */
                    $data=DB::table('studentsmarks')->where('name','=','aparna')->delete();
                dd($data);                          
            /*[
                "name"=>"avani",
                "age"=>24,
                "marks"=>80
            ],
            [
                "name"=>"ashna",
                "age"=>23,
                "marks"=>75
            ]
            ]); */
    }
}

  