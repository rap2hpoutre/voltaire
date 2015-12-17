<?php
namespace Rap2hpoutre\Voltaire\Test;

use Rap2hpoutre\Voltaire\Voltaire;

class VoltaireTest extends \PHPUnit_Framework_TestCase
{
    public function testNew()
    {
        $voltaire = new Voltaire('fr');
        $response = $voltaire->process('Bnojour tout le mnode.');
        $this->assertCount(2, $response->errors);
    }
}