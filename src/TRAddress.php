<?php


namespace Mtigdemir\Address;


use Mtigdemir\Address\Models\City;

class TRAddress
{
    public function getCities()
    {
        return City::all();
    }

    public function getCityById($id)
    {
        return City::find($id);
    }

    public function searchByCity($text)
    {
        return City::where('adi', 'like', '%' . $text . '%')->get();
    }

    public function getTownByCity($cityId)
    {
        return District::where('il_id', $cityId)->get();
    }
}