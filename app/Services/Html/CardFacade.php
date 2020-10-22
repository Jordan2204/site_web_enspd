<?php

namespace App\Services\Html;
 
use Illuminate\Support\Facades\Facade;
 
class CardFacade extends Facade
{
 
    protected static function getFacadeAccessor() { return 'card'; }
 
}