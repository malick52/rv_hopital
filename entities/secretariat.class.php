<?php
class secretariat
{
    private $nom_secretariat;
    private $tel_secretariat;
    private $adresse_secretariat;

	public function getNom_secretariat() {
		return $this->$nom_secretariat;
	}

	public function setNom_secretariat( $nom_secretariat) {
		$this->nom_secretariat = $nom_secretariat;
	}

	public function getTel_secretariat() {
		return $this->$tel_secretariat;
	}

	public function setTel_secretariat( $tel_secretariat) {
		$this->tel_secretariat = $tel_secretariat;
	}

	public function getAdresse_secretariat() {
		return $this->$adresse_secretariat;
	}

	public function setAdresse_secretariat( $adresse_secretariat) {
		$this->adresse_secretariat = $adresse_secretariat;
	}

    
}