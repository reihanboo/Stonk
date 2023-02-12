<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\CryptoHelper;
use App\Helpers\UserInfoHelper;

class ProductController extends Controller
{
    public static $information = [
        "title" => "Products Index",
        "route" => "/",
        // "view" => "pages.masters.products."
    ];


    // ======================
    // Line View - START
    // ======================


    // Menampilkan halaman index
    public function index() {
        $user = User::find(UserInfoHelper::user_id());

        return view('masters.products.index', [
            'products' => Product::all(),
            'user' => $user,
        ]);
    }

    
    // Menampilkan form input data
    public function create()
    {
        $products = Product::select('id', 'name')->get();
        return view(self::$information['view'] . 'add', [
            "information" => self::$information,
            "products" => $products
        ]);
    }

    
    // Menampilkan form edit data
    public function edit($id, Request $request)
    {
        $decrypt = CryptoHelper::decrypt($id);
        if (!$decrypt->success) return $decrypt->error_response;

        $product = Product::find($decrypt->id);

        return view(self::$information['view'] . 'edit', [
            "information" => self::$information,
            "product" => $product,
        ]);
    }




    // ======================
    // Line Proses - START
    // ======================


    // Proses input data yang diinput user di view ke model
    public function store(Request $request)
    {
        $result = Product::do_store($request);
        return response()->json($result["client_response"], $result["code"]);
    }

    
    // Proses update data dari form edit ke model
    public function update($id, Request $request)
    {
        $decrypt = CryptoHelper::decrypt($id);
        if (!$decrypt->success) return $decrypt->error_response;
        
        $result = Product::do_update($decrypt->id, $request);
        return response()->json($result["client_response"], $result["code"]);
    }

    
    // Proses hapus data
    public function destroy($id)
    {
        $decrypt = CryptoHelper::decrypt($id);
        if (!$decrypt->success) return $decrypt->error_response;
        
        $result = Product::do_delete($decrypt->id);
        return response()->json($result["client_response"], $result["code"]);
    }
}
