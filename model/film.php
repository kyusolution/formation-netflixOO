<?php
/**
 * Film
 * 
 * @author Cindy
 */
class Film {
    
    //Definition de nos proprietes
    //avec des valeurs par defaut
    private $title = 'Star wars';
    private $startYear = 1977;
    private $runtimeMinutes = 150;
    
    /**
     * Method displayTitle qui affiche le titre du film
     *
     * @return void retourne rien 
     */
    public function displayTitle(){
        echo $this->title;
    }

    /**
     * Method displayStartYear
     *
     * @return void
     */
    public function displayStartYear(){
        echo $this->startYear;
    }

    /**
     * Method displayRuntimeMinutes
     *
     * @return void
     */
    public function displayRuntimeMinutes(){
        echo strftime( "%H Heures %M minutes", $this->runtimeMinutes * 60) ;
    }
}