<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Price;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * PriceController constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $prices = Price::query()->select('id', 'metal', 'price')->get();
        return view('admin.prices')->with(['prices' => $prices]);
    }

    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     */
    public function store(Request $request, $id): JsonResponse
    {
        $data_array = [
            'price' => str_replace(' ', '', $request['price']),
        ];

        $price = Price::query()->find($id);

        $price->price = $data_array['price'];
        $price->save();
        return response()->json($price);
    }

}
