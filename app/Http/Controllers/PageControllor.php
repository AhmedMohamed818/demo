<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageControllor extends Controller
{
    public function home () {
        return view('page.home');
    }
    public function model() {
        return view('page.model');
    }

    public function Maintenance() {
        return view('page.Maintenance');
    }

    public function infotboa() {
        return view('page.infotboa');
    }

    public function infosparepart() {
        return view('page.infosparepart');
    }

    public function inforent () {
        return view('page.inforent');
    }

    public function infooil () {
        return view('page.infooil');
    }

    public function infomaintenance () {
        return view('page.infomaintenance');
    }

    public function infocar () {
        return view('page.infocar');
    }
    public function detailads () {
        return view('page.detailads');
    }

    public function categorysell () {
        return view('page.categorysell');
    }
    public function brand () {
        return view('page.brand');
    }

    public function ads() {
        return view('page.ads');
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
    public function insertRentAds (Request $request) {

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
    $rent['rental_option'] = $request->rental_option;
    $rent['rental_period'] = $request->rental_period;
    $rent['price'] = $request->price;
    DB::table('rent_ads')->insert($rent);
    return Redirect()->back()->with('message','Operation Successful !');
    }

    //this is tboa page inserting code
    public function insertTboaAds (Request $request) {

    $tboa = array();
    $tboa['type'] = $request->type;
    $tboa['brand'] = $request->brand;
    $tboa['condition'] = $request->condition;
    $tboa['location'] = $request->location;
    $tboa['price'] = $request->price;
    DB::table('tboa_ads')->insert($tboa);
    return Redirect()->back()->with('message','Operation Successful !');
    }

    //this is spareparts page inserting code
    public function insertSparepartsAds (Request $request) {

        $spareparts = array();
        $spareparts['type'] = $request->type;
        $spareparts['brand'] = $request->brand;
        $spareparts['condition'] = $request->condition;
        $spareparts['location'] = $request->location;
        $spareparts['price'] = $request->price;
        DB::table('spareparts_ads')->insert($spareparts);
        return Redirect()->back()->with('message','Operation Successful !');
        }

    //this is sell car page inserting code
    public function sellCarAds (Request $request) {

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
        $sellCar['price'] = $request->price;
        $sellCar['payment_method'] = $request->payment_method;
        DB::table('sellcar_ads')->insert($sellCar);
        return Redirect()->back()->with('message','Operation Successful !');
        }
}
