<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Kontak;

class loginController extends Controller
{
    public function loginproses(Request $req){
        $this->validate($req,[
            'username'=>'required',
            'password'=>'required'
     ]);
     $proses=Kontak::where('username',$req->username)->where('password',md5($req->password));
     if($proses->count()>0){
         $data= $proses->first();
         Session::put('id_kontak',$data->id);
         Session::put('username',$data->username);
         Session::put('password',$data->password);
         Session::put('nama',$data->nama);
         Session::put('email',$data->email);
         Session::put('id_kategori',$data->id_kategori);
         Session::put('login_status',true);
         if(Session('id_kategori') == 1){
            return redirect('/home'); 
        }
        elseif(Session('id_kategori') == 2){
            return redirect('/');
        }
        
              
     }
     else{
         Session::flash('alert_pesan','Username atau password salah');
         return redirect('/login');
     }
    }
    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
