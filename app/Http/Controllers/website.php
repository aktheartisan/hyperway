<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class website extends Controller
{
    public function __construct()
{
    $this->add = \DB::table('address')->pluck('address')->first();
    $this->phone = \DB::table('address')->pluck('phone')->first();
    $this->mail = \DB::table('address')->pluck('email')->first();
}

public function about(Request $d) {

    return view('about', ['address' => $this->add,'phone' => $this->phone,'email' => $this->mail]);
}
public function contact(Request $d){

    return view('contact', ['address' => $this->add,'phone' => $this->phone,'email' => $this->mail]);
}

    public function home(Request $e){
        $a = \DB::table('homes')->get();
        $b = \DB::table('resources')->get();

        return view('home',['dev'=>$a,'res'=>$b,'address' => $this->add,'phone' => $this->phone,'email' => $this->mail]);
    }
    public function gal(Request $e){
        $a = \DB::table('galleries')->get();
        $b = \DB::table('gallery1s')->get();
        return view('gallery',['gal'=>$a,'vid'=>$b,'address' => $this->add,'phone' => $this->phone,'email' => $this->mail]);
    }
    public function obg(Request $e){
         $a = \DB::table('obligations')->paginate(6);
        // $a = \DB::table('obligations')->get();
        // $b = \DB::table('gallery1s')->get();
        return view('obligation',['obg'=>$a,'address' => $this->add,'phone' => $this->phone,'email' => $this->mail]);
    }
    
    public function login(Request $e){
        $a = $e->input('username');
        $b = $e->input('password');

$c =  \DB::table('login')->where('name',$a)->where('password',$b)->count();
       if ($c>0) {
           return view('admin/index');
       }
       else{
        return redirect('/');
       }
    }
    public function cont(Request $e){
        $a = $e->input('name');
        $b = $e->input('phone');
        $c = $e->input('email');
        $d = $e->input('des');

         // $a = \DB::table('obligations')->paginate(6);
        $a = \DB::table('contacts')->insert(['name'=>$a,'phonenumber'=>$b,'email'=>$c,'description'=>$d]);
        // $b = \DB::table('gallery1s')->get();
        return redirect('contact');
    }
    public function address(Request $e){
        $id = $e->input('id');
        $a = $e->input('add');
        $b = $e->input('phone');
        $c = $e->input('email');

        $a = \DB::table('address')->where('id',$id)->update(['address'=>$a,'phone'=>$b,'email'=>$c]);
        return redirect('address');
    }
    public function get_add(Request $e){
        $a = \DB::table('address')->get();

        return view('admin/con_detail',['add'=>$a]);
    }

}
