<?php
/**
 * Gestion de poneys
 */
class Poneys
{
    private $count = 8;
    private $names = array();

    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        if ($number <= $this->count)
        {
            $this->count -= $number;
        }
        else {
            throw new Exception ("Cannot remove more poneys than there are!");
        }
        
        
               
    }

    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {
        return $names;
    }


    /**
     * Ajoute un poney au champ
     * 
     * @param string $name Nom du poney à ajouter
     * 
     * @return void
     */
    public function addPoneyToField(string $name) : void 
    {
        $this->count += 1;

    }


    /**
     * Donne la disponibilité des places dans le champs
     * 
     * 
     * @return bool 
     */
     public function getAvailability()
     {
        if ($this->count < 15) 
        {
            return true;
        }
        else {
            return false;
        }
         
     }


}
?>
