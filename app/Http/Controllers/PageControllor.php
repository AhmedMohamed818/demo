<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
