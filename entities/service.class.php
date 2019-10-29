<?php
class service
{ 
    private $nom_service;
    private $adresse_service;
    private $tel_service;
    private $email_service;


	public function getNom_service() {
		return $this->$nom_service;
	}

	public function setNom_service( $nom_service) {
		$this->nom_service = $nom_service;
	}

	public function getAdresse_service() {
		return $this->$adresse_service;
	}

	public function setAdresse_service( $adresse_service) {
		$this->adresse_service = $adresse_service;
	}

	public function getTel_service() {
		return $this->$tel_service;
	}

	public function setTel_service( $tel_service) {
		$this->tel_service = $tel_service;
	}

	public function getEmail_service() {
		return $this->$email_service;
	}

	public function setEmail_service( $email_service) {
		$this->email_service = $email_service;
	}

}
?>