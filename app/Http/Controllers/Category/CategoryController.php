<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function bankIndex()
    {
        return view('category.subcategory');
    }
    public function subcategoryHospitality()
    {
        return view('category.hospitality');
    }
    public function subcategoryhr()
    {
        return view('category.hrservice');
    }
    public function subcategorypayroll()
    {
        return view('category.payroll');
    }
    public function subcategorytax()
    {
        return view('category.tax');
    }
    public function subcategorytravel()
    {
        return view('category.travel');
    }
    public function subcategoryvendor()
    {
        return view('category.vendor');
    }
    public function subcategoryhealth()
    {
        return view('category.health');
    }
    public function subcategorytraining()
    {
        return view('category.training');
    }
}
