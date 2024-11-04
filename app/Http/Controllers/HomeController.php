<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Associate;
use App\Models\Company;
use App\Models\CarUnit;

class HomeController extends Controller
{
    protected $associates, $company, $car_units;

    public function __construct(Associate $associate, Company $company, CarUnit $car_units)
    {
        $this->associates = $associate;
        $this->company = $company;
        $this->car_units = $car_units;
    }

    public function index(Request $request)
    {
        $data = [
            'associates' => $this->getAssociates(),
            'company' => $this->getCompany(),
            'car_units' => $this->getManageCarUnits()
        ];

        return view('welcome', $data);
    }

    public function getAssociates()
    {
        $associates = $this->associates::all();

        return $associates;
    }

    public function getCompany()
    {
        $company = $this->company::where('id', '4576a792-6990-45fe-a993-d6c56c8b3c6d')->first();

        return $company;
    }

    public function getManageCarUnits()
    {
        $car_units = $this->car_units::with('location')->get();

        return $car_units;
    }
}
