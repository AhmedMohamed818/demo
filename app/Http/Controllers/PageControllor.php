<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageControllor extends Controller
{
    public function home () {
        return view('page.home');
    }
    public function model($brandname) {
        $modelNames=DB::table('car_info')->select('model')->groupBy('model')->where('man_name',$brandname)->get();
        return view('page.model',compact('modelNames'));
    }
    public function model2($brandname) {
        $modelNames=DB::table('car_info')->select('model')->groupBy('model')->where('man_name',$brandname)->get();
        return view('page.model2',compact('modelNames'));
    }

    public function Maintenance() {
        return view('page.Maintenance');
    }

    public function infotboa($brandname) {
        $brandnames=DB::table('car_info')->select('man_name')->groupBy('man_name')->where('man_name',$brandname)->get();
        return view('page.infotboa',compact('brandnames'));
    }

    public function infosparepart($brandname) {
        $brandnames=DB::table('car_info')->select('man_name')->groupBy('man_name')->where('man_name',$brandname)->get();
        return view('page.infosparepart',compact('brandnames'));
    }

    public function inforent ($modelName) {
        $modelNames=DB::table('car_info')->select('model')->groupBy('model')->where('model',$modelName)->get();
        $brandnames=DB::table('car_info')->select('man_name')->groupBy('man_name')->where('model',$modelName)->get();
        return view('page.inforent',compact('modelNames','brandnames'));
    }

    public function infooil () {
        return view('page.infooil');
    }

    public function infomaintenance () {
        return view('page.infomaintenance');
    }

    public function infocar ($modelName) {
        $modelNames=DB::table('car_info')->select('model')->groupBy('model')->where('model',$modelName)->get();
        $brandnames=DB::table('car_info')->select('man_name')->groupBy('man_name')->where('model',$modelName)->get();
        return view('page.infocar',compact('modelNames','brandnames'));
    }
    public function detailads ($username) {
        $detailads=DB::table('rent_ads')->latest() ->where('user_name',$username)->get();
        $detailads2=DB::table('sellcar_ads')->latest() ->where('user_name',$username)->get();
        $detailads3=DB::table('spareparts_ads')->latest() ->where('user_name',$username)->get();
        $detailads4=DB::table('tboa_ads')->latest() ->where('user_name',$username)->get();
        return view('page.detailads',compact('detailads','detailads2','detailads3','detailads4'));
    }

    public function categorysell () {
        return view('page.categorysell');
    }
    public function brand () {
        $brandNames=DB::table('car_info')->select('man_name')->groupBy('man_name')->get();;
        return view('page.brand',compact('brandNames'));
    }
    public function brand2 () {
        $brandNames=DB::table('car_info')->select('man_name')->groupBy('man_name')->get();;
        return view('page.brand2',compact('brandNames'));
    }
    public function brand3 () {
        $brandNames=DB::table('car_info')->select('man_name')->groupBy('man_name')->get();;
        return view('page.brand3',compact('brandNames'));
    }
    public function brand4 () {
        $brandNames=DB::table('car_info')->select('man_name')->groupBy('man_name')->get();;
        return view('page.brand4',compact('brandNames'));
    }
    public function newcarads () {
        $cfs=DB::table('sellcar_ads')->latest() ->where('condition','=','new')->get();
        return view('page.newcarads',compact('cfs'));
    }
    public function usedcarads () {
        $cfs=DB::table('sellcar_ads')->latest() ->where('condition','=','used')->get();
        return view('page.usedcarads',compact('cfs'));
    }
    public function rentcarads () {
        $cfr=DB::table('rent_ads')->latest()->get();
        return view('page.rentcarads',compact('cfr'));
    }
    public function sparepartads () {
        $csp=DB::table('spareparts_ads')->latest()->get();
        return view('page.sparepartads',compact('csp'));
    }
    public function tboaads () {
        $tboa=DB::table('tboa_ads')->latest()->get();
        return view('page.tboaads',compact('tboa'));
    }

    public function ads() {
        $cfs=DB::table('sellcar_ads')->latest()->get();
        $cfr=DB::table('rent_ads')->latest()->get();
        $tboa=DB::table('tboa_ads')->latest()->get();
        $csp=DB::table('spareparts_ads')->latest()->get();
        return view('page.ads',compact('cfs','cfr','tboa','csp'));
    }

    public function infousercar() {
        return view('page.infoCarMaintenance');
    }

    public function changeddetails() {
        return view('page.ichanged');
    }

    public function adsviews() {
        return view('page.viewer');
    }

    //this is rent page inserting code
    public function insertRentAds ($modelName,Request $request) {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'images/rentCarImages/';
        $last_image = $up_location.$img_name;
        $image->move($up_location,$img_name);

    $rent = array();
    $rent['brand'] = $request->brand;
    $rent['car_model'] = $request->car_model;
    $rent['body_type'] = $request->body_type;
    $rent['transmission_type'] = $request->transmission_type;
    $rent['year'] = $request->year;
    $rent['engine_capacity'] = $request->engine_capacity;
    $rent['fuel_type'] = $request->fuel_type;
    $rent['location'] = $request->location;
    $rent['color'] = $request->color;
    $rent['image'] = $last_image;
    $rent['rental_option'] = $request->rental_option;
    $rent['rental_period'] = $request->rental_period;
    $rent['price'] = $request->price;
    DB::table('rent_ads')->insert($rent);
    return Redirect()->back()->with('message','Operation Successful !');
    }

    //this is tboa page inserting code
    public function insertTboaAds ($brandname,Request $request) {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'images/tboaImages/';
        $last_image = $up_location.$img_name;
        $image->move($up_location,$img_name);

    $tboa = array();
    $tboa['type'] = $request->type;
    $tboa['brand'] = $request->brand;
    $tboa['condition'] = $request->condition;
    $tboa['location'] = $request->location;
    $tboa['image'] = $last_image;
    $tboa['price'] = $request->price;
    DB::table('tboa_ads')->insert($tboa);
    return Redirect()->back()->with('message','Operation Successful !');
    }

    //this is spareparts page inserting code
    public function insertSparepartsAds ($brandname,Request $request) {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'images/sparepartsImages/';
        $last_image = $up_location.$img_name;
        $image->move($up_location,$img_name);


        $spareparts = array();
        $spareparts['type'] = $request->type;
        $spareparts['brand'] = $request->brand;
        $spareparts['condition'] = $request->condition;
        $spareparts['location'] = $request->location;
        $spareparts['image'] = $last_image;
        $spareparts['price'] = $request->price;
        DB::table('spareparts_ads')->insert($spareparts);
        return Redirect()->back()->with('message','Operation Successful !');
        }

    //this is sell car page inserting code
    public function sellCarAds ($modelName,Request $request) {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'images/sellCarImages/';
        $last_image = $up_location.$img_name;
        $image->move($up_location,$img_name);

        $sellCar = array();
        $sellCar['ad_type'] = $request->ad_type;
        $sellCar['brand'] = $request->brand;
        $sellCar['car_model'] = $request->car_model;
        $sellCar['body_type'] = $request->body_type;
        $sellCar['transmission_type'] = $request->transmission_type;
        $sellCar['year'] = $request->year;
        $sellCar['engine_capacity'] = $request->engine_capacity;
        $sellCar['fuel_type'] = $request->fuel_type;
        $sellCar['condition'] = $request->condition;
        $sellCar['location'] = $request->location;
        $sellCar['color'] = $request->color;
        $sellCar['image'] = $last_image;
        $sellCar['price'] = $request->price;
        $sellCar['payment_method'] = $request->payment_method;
        DB::table('sellcar_ads')->insert($sellCar);
        return Redirect()->back()->with('message','Operation Successful !');
        }


    
    

}
