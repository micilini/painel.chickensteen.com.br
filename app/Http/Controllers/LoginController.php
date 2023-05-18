<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller{
    protected $ajaxURL_Login = '/data/newLogin';
    
    public function login(){
        return view('login/login', array('ajaxURL_Login' => $this->ajaxURL_Login));
    }

    /* POST FUNCTIONS */

    public function newLogin(Request $request){
        $allRequests = $request->all();
        if(isset($allRequests['email']) && !empty($allRequests['email']) && isset($allRequests['password']) && !empty($allRequests['password'])){
            if($allRequests['email'] == 'atendente01@chickensteen.com.br' && $allRequests['password'] == '123456789'){
                session(['auth.user' => 'chickensteen-e-dez']);
                return json_encode(array('success' => true, 'linkDashboard' => '/reservas'));
            }
        }
        return json_encode(array('errors' => true));
    }

}
