<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index($category = null, $service = null)
    {
        if (is_null($category)) {

            return view('services.index');

        } else {

            if (is_null($service)) {

                $current = Category::with('services')->where('slug', $category)->firstOrFail();

                return view('services.category', [
                    'current' => $current
                ]);

            } else {

                $current = Service::with('category')->where('slug', $service)->firstOrFail();

                return view('services.service', [
                    'current' => $current
                ]);

            }

        }
    }
}
