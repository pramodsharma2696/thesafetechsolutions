<?php

namespace App\Http\Controllers\Frontend;

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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
    public function ContactUs(Request $request){
        $data = $request->all();
        // Send the email
        Mail::to('admin456@yopmail.com')->send(new ContactUsMail($data));
        return back()->with('success', 'Your message has been sent successfully!');

    }
}
