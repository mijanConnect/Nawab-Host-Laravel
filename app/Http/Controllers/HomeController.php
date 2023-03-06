<?php

namespace App\Http\Controllers;

use App\Services\WHMCS;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = WHMCS::GetProducts([
            'pid' => '3,4,5,27,28,29,31,43,45,48',
        ]);
        $products = collect(data_get($products, 'products.product'));

        $pricing = WHMCS::GetTLDPricing([
            'currencyid' => currency(),
        ]);

        return view('index', [
            'products' => $products,
            'pricing' => $pricing,
        ]);
    }

    public function domain(){
        $pricing = WHMCS::GetTLDPricing([
            'currencyid' => currency(),
        ]);

        return view('domain', [
            'pricing' => $pricing,
        ]);
    }

    public function cpanel(){
        $servers = WHMCS::GetProducts([
            'pid' => '3,4,5',
        ]);

        return view('cpanel', [
            'hosting' => data_get($servers, 'products.product'),
        ]);
    }

    public function cloudhosting(){
        $servers = WHMCS::GetProducts([
            'pid' => '3,4,5',
        ]);

        return view('cloud-hosting', [
            'hosting' => data_get($servers, 'products.product'),
        ]);
    }

    public function resellerhosting(){
        $products = WHMCS::GetProducts([
            'pid' => '48',
        ]);

        return view('reseller-hosting', [
            'product' => data_get($products, 'products.product.0'),
        ]);
    }

    public function ssdvps(){
        $servers = WHMCS::GetProducts([
            'pid' => '27,28,29,30,38,39',
        ]);

        return view('ssd-vps', [
            'vps' => data_get($servers, 'products.product'),
        ]);
    }

    public function dedicatedserver(){
        $servers = WHMCS::GetProducts([
            'gid' => 9,
        ]);

        return view('dedicated-server', [
            'servers' => data_get($servers, 'products.product'),
        ]);
    }

    public function helpsupport(){
        return view('help-support');
    }

    public function login(){
        return view('login');
    }

    public function signup(){
        return view('signup');
    }

    public function cart(){
        return view('cart');
    }

    public function search(){
        return view('search');
    }
}
