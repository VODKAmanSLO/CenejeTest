<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::all();
        return view('file.index', compact('shops'));
    }

    public function store()
    {
        $files = scandir("./storage/");
//        TODO dodajmo še price modifier za country

        foreach ($files as $file) {
            $file_info = pathinfo($file);
            if ($file_info['extension'] == 'csv') {
                $countryShort = substr($file_info['filename'], -3);
                $country = Country::where('country', '=', $countryShort)->first();
                // TODO add unknown country??

                $handle = fopen('./storage/' . $file, 'r');
                $header = array();
                while (($csv = fgetcsv($handle, ',')) != false) {
                    if (empty($header)) {
                        $header = $csv;
                        continue;
                    }

                    // TODO zmešan vrstni red
                    $id = $csv[0];
                    $name = $csv[1];
                    $rating = $csv[2];
//                    TODO refactor
                    $rating = (float)str_replace(",", ".", $rating);
                    Shop::updateOrCreate(['id' => $id],
                        ['name' => $name, 'rating' => $rating, 'country_id' => $country->id]);
                }
            }
        }
    }
}
