<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $Poneys->getCount());
    }

    public function testAddPoneyToField() 
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->addPoneyToField('nina');

        // Assert
        $this->assertEquals(9, $Poneys->getCount());
    }


    public function testRemovePoneyFromField2() 
    {
        // Setup
        $Poneys = new Poneys();

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Cannot remove more poneys than there are!");
        $Poneys->removePoneyFromField(9);
    }   

    public function testGetNames()
    {
        $names = [
            'toto','titi','caca','escape'
        ];

        $this->poneys = $this->getMockBuilder('Poneys')->getMock();
        $this->poneys
            ->expects($this->exactly(1))
            ->method('getNames')
            ->willReturn($names);
        $this->assertEquals(
            $names,
            $this->poneys->getNames()
        );
    }


    public function testRemovePoneyFromField3() : array
    {
        // Setup
        $Poneys = new Poneys();

        $resultat= array([]);
        return $resultat;
    }   
}
?>
