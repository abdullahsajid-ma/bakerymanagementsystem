<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bakeryitem;
use App\Models\User;
class maincontroller extends Controller
{

    function insert(Request $req){
        $cat = $req->get('itemcat');
        $itemname = $req->get('itemname');
        $itemprice = $req->get('itemprice');
        $itemdesc = $req->get('itemdesc');
        $image = $req->file('itemimage')->getClientOriginalName();

        $bakeryitem = new bakeryitem;
        $bakeryitem->itemcatgory = $cat;
        $bakeryitem->itemname = $itemname;
        $bakeryitem->itemprice = $itemprice;
        $bakeryitem->itemdescription = $itemdesc;
        if($req->hasFile('itemimage')){
            $req->validate([
                'image'=>'mimes:jpeg,png'
            ]);
        }
        $req->itemimage->move(public_path('gallery'),$image);
        $bakeryitem->image = $image;
        $bakeryitem->save();
        return redirect('/');
    }
    
    function retrieveData(){
        $bakery = bakeryitem::all();
        return view('showdata',['data' => $bakery]);
    }

    function getEachItems(Request $req){
        $id = $req->get('Id');
        $itemcat = $req->get('itemcat');
        $itemname = $req->get('itemname');
        $itemdesc = $req->get('itemdesc');
        $price = $req->get('itemprice');
        $image = $req->get('itemimage');
        if($req->get('contents') == 'Contents'){
           return view('layout.cart',['id'=>$id,'itemcat'=>$itemcat,'itemname'=>$itemname,'itemdesc'=>$itemdesc,'itemprice'=>$price,'image'=>$image]);
        }

        $bakery = bakeryitem::all();
        return view("layout.menu")->with("itemdata",$bakery);

        
    }

    function updateData(Request $req){
        $id = $req->get('Id');
        $itemcat = $req->get('itemcat');
        $itemname = $req->get('itemname');
        $itemdesc = $req->get('itemdesc');
        $price = $req->get('itemprice');
        if($req->get('update') == 'Update'){
           return view('update',['id'=>$id,'itemcat'=>$itemcat,'itemname'=>$itemname,'itemdesc'=>$itemdesc,'itemprice'=>$price]);
        }else{
           $dataa = bakeryitem::find($id);
           $dataa->delete();
        }
        return redirect('showdata');
   }

   function Updatee(Request $req){
    $id = $req->get('Id');
    $itemcatt = $req->get('itemcat');
    $itemname = $req->get('itemname');
    $itemdesc = $req->get('itemdesc');
    $price = $req->get('itemprice');

       $bakeryitem = bakeryitem::find($id);
       $bakeryitem->itemcatgory = $itemcatt;
        $bakeryitem->itemname = $itemname;
        $bakeryitem->itemprice = $price;
        $bakeryitem->itemdescription = $itemdesc;
       $bakeryitem->save();
       return redirect('showdata');
   }
   
    public function index(){
        return view('auth.login');
    }      

    public function register(){
        return view('auth.register');
    }

    public function login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(\Auth::attempt($req->only('email','password'))){
            return redirect('showdata');
        }

        return redirect('login')->withErrors('invalid data');
    }

    public function registered(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:users|email',
            'password'=>'required|confirmed'
        ],[
            'name.required' => 'Name field required',
            'email.required' => 'Email field required',
            'email.email' => 'Email must be email',
            'password.required' => 'Password must be required'
        ]);

        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=> \Hash::make($req->password)
        ]);

        return redirect('register')->withErrors('Error');
    }
    
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('');
    }
    public function welcome(){
        return view('welcome');
    }

}