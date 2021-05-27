<?php
/**
 * Author
 * 
 * @author Cindy
 */
class Author {

    private $lastname = 'Lucas';
    private $firstname = 'George';
    private $birthdate = '1944-05-14';
    
    /**
     * Method displayLastname affiche le nom de l'auteur
     *
     * @return void
     */
    public function displayLastname(){
        echo $this->lastname;
    }

        
    /**
     * Method displayFirstname affiche le prénom de l'auteur
     *
     * @return void
     */
    public function displayFirstname(){
        echo $this->firstname;
    }


    /**
     * Affiche la date de naissance de l'auteur au format dd/MM/YYY
     * 
     * @return void
     */
    public function displayBirthdate(){
  
        //1. on convertit la date en timestamp
        $timestamp = strtotime($this->birthdate); //YYYY-MM-dd => timestamp

        //2. on construit notre date au format souhaité à partir du timestamp
        $dateFR = date("d/m/Y", $timestamp);

        echo $dateFR;
    }

}