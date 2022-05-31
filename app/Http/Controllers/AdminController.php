<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Page;
use App\Models\Link;


use App\Models\Flv;
use App\Models\Mer;
use App\Models\Pas;

class AdminController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['except'=>[
            'login',
            'loginAction',
            

            'flv',
            'flvRegister',
            
            'mer',
            'merRegister',

            'pas',
            'pasRegister',
            
            
        ]]);
    }
    public function login(request $request){
        return view('admin/login',[
            'error' => $request->session()->get('error')
        ]);
    }
   
    




   /**
     * COLETOR FLV
     */

   public function flv(Request $request){
    return view('admin/flv',[
        'error' => $request->session()->get('error')
    ]);  

}


public function mer(Request $request){
    return view('admin/mer',[
        'error' => $request->session()->get('error')
    ]);  

}

public function pas(Request $request){
    return view('admin/pas',[
        'error' => $request->session()->get('error')
    ]);  

} 
     /**
     * registrar flv
     */
      
  

   public function flvRegister(Request $request) {
    $creds = $request->only('codigo', 'descricao','quantidade'); 
        $newFlv = new Flv();
        $newFlv->codigo = $creds['codigo'];
        $newFlv->descricao = $creds['descricao'];
        $newFlv->quantidade = $creds['quantidade'];
        $newFlv->save();
        return redirect('/admin/flv');
   }

   /**
     * registrar mercearia
     */

   public function merRegister(Request $request) {
    $creds = $request->only('codigo', 'descricao','quantidade'); 
        $newMer = new Mer();
        $newMer->codigo = $creds['codigo'];
        $newMer->descricao = $creds['descricao'];
        $newMer->quantidade = $creds['quantidade'];
        $newMer->save();
        return redirect('/admin/mer');
   }

   public function pasRegister(Request $request) {
    $creds = $request->only('codigo', 'descricao','quantidade'); 
        $newPa = new Pas();
        $newPa->codigo = $creds['codigo'];
        $newPa->descricao = $creds['descricao'];
        $newPa->quantidade = $creds['quantidade'];
        $newPa->save();
        return redirect('/admin/pas');
   }


}
