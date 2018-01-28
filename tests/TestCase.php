<?php

namespace Mtigdemir\Address\Test;

use Illuminate\Database\Capsule\Manager as Capsule;

abstract class TestCase extends \PHPUnit_Framework_TestCase {

    public function setUp()
    {
        $this->initCapsule();
        Capsule::unprepared(file_get_contents('tester.sql'));
//        $this->initMigrate();
//        $this->defaultRecords();
    }

    public function tearDown()
    {
        \Mockery::close();
    }

    function initCapsule()
    {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver' => 'sqlite',
            'host' => 'localhost',
            'database' => ':memory:', // sqlite in memory
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ]);

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
