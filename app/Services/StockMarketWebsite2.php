<?php
namespace App\Services;

use App\Interfaces\StockMarketInterface;

class StockMarketWebsite2 implements StockMarketInterface
{
    public function getData(){
        return 'Getting data from website 2';
    }
}
