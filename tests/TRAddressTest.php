<?php


namespace Mtigdemir\Address\Test;

use Mtigdemir\Address\TRAddress;

class TRAddressTest extends TestCase
{

    /**
     * @var TRAddress
     */
    private $turkeyAddress;

    public function setUp()
    {
        parent::setUp();
        $this->turkeyAddress = new \Mtigdemir\Address\TRAddress();

    }

    public function testGetCities()
    {
        echo $this->turkeyAddress->getCities();
    }

    public function testGetCityById()
    {
        $city = $this->turkeyAddress->getCityById(1);

        $this->assertEquals(1, $city->id);
        $this->assertEquals('ADANA', $city->adi);
    }

    public function testSearchByCity()
    {
        // Expected Result only Antalya
        $result = $this->turkeyAddress->searchByCity('anta');
        $this->assertEquals(1, $result->count());
        $this->assertEquals($result->first()->adi,'ANTALYA');

        // Find cities like ANT (Expected Result ANTALYA and GAZIANTEP
        $result = $this->turkeyAddress->searchByCity('AnT');
        $this->assertArraySubset(['adi' => 'ANTALYA'], $result->toArray()[0]);
        $this->assertArraySubset(['adi' => 'GAZİANTEP'], $result->toArray()[1]);
    }
}
