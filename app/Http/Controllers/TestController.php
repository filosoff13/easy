<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;
// use Illuminate\Http\Controllers\Controller;

use DB;
use App\Secret;

class TestController extends Controller
{
    //
    public function add(Request $request)
    {
    	$this->validate($request, [
		
			'name' => 'required|max:250',
			'str' => 'required'
		
		]);
    		dump($request->all());
    	$data = $request->all();

    	// dump($data);

    	$article = new Secret;
    	$article->fill($data);

    	//для альтернативы функции PREG скорее всего нужно использовать рекурсию
    	$arr = $data->str;//массив расчета

    	
    	$numerals = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    	for ($i=0; $i < count($arr); $i++) { 
    		$str = '';
    		if ($arr[$i]="{") {
    			$a = $i;
    			$str =.$arr[$i];
    			$i++;
    			if (in_array($arr[$i], $numerals)&& ($arr[$i]="-") && ($arr[$i]="+") {
    				$str =.$arr[$i];
    				$i++;
    				//далее условия для 3го символа : в зависимости от второго(это может быть цыфра либо "}")
    			} else {
    				$i = $a;//для возврата цикла к тек. ел.
    				continue}
    		} else {
    			$i = $a;//для возврата цикла к тек. ел.
    			continue}
    	}

    	$article->save();

    	//return redirect('/test');

    	// $arr = DB::select("SELECT * FROM 'secret' WHERE 'secret_code'=?", []);


    	// $view = view('test', $tests)->render();
    	// return(new Response($view));

    	// //запишем данные заполнения в сессию
    	// $request->flash();
    	// $arr = $request->all();
    	// print_r($arr);
    	// return view('test', $tests);
    }

        public function test()
    {
    	// $tests = DB::table('secret')->get();
    	$tests = DB::table('secret')->whereBetween('secret_code', [1, 1000])->get();
    	 //dump($tests);

    	// $arr = DB::select("SELECT * FROM 'secret' WHERE 'secret_code'=?", []);


    	// $view = view('test', $tests)->render();
    	// return(new Response($view));

    	// //запишем данные заполнения в сессию
    	// $request->flash();
    	// $arr = $request->all();
    	// print_r($arr);
    	return view('test', ['tests'=>$tests]);
    }
}
