<?php

namespace App\Http\Controllers;

use App\Interfaces\StockMarketInterface;
use Illuminate\Http\Request;

class StockMarketController extends Controller
{

    public function getData(Request $request, StockMarketInterface $stockMarketInterface){

        return $stockMarketInterface->getData();

    }

}
