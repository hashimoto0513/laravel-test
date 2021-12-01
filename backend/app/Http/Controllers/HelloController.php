<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Person;

class HelloController extends Controller
{
    public function index(Request $request) {
        $sort = $request->sort;
        if (is_null($sort)) {
            $sort = 'id';
           }
        //$items = DB::table('people')->orderBy($sort, 'asc)
        //    ->simplePagenate(5);
        $items = Person::orderBy($sort, 'asc')
            ->simplePaginate(3);
        $param = ['items' => $items, 'sort' => $sort];
       return view('hello.index', $param);
    }
    public function post(HelloRequest $request) {
       return view('hello.index'. ['msg'=>'正しく入力されました！']);
    }
    public function rest(Request $request){
        return view('hello.rest');
    }
    public function ses_get(Request $request){
        $sesdata = $request->session()->get('msg');
        return view('hello.session', ['session_data' => $sesdata]);
    }
    public function ses_put(Request $request){
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('hello/session');
    }
}
