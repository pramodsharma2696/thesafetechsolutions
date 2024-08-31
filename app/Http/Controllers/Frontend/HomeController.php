<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function FinancialTechnologySetup(){
        return view('frontend.financialtechnologysetup');
    }
    public function Services(){
        return view('frontend.services');
    }
    public function ProductServices(){
        return view('frontend.productservices');
    }
    public function CmsWebsite(){
        return view('frontend.cmswebsite');
    }
    public function WebPortals(){
        return view('frontend.webportals');
    }
    public function EcommerceWebsite(){
        return view('frontend.ecommercewebsite');
    }
    public function InventoryBilling(){
        return view('frontend.inventorybilling');
    }
    public function EcommerceMobileApp(){
        return view('frontend.ecommercemobileapp');
    }
}
