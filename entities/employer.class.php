<?php
class employer
{
    private $nom_employer;
    private $prenom_employer;
    private $tel_employer;
    private $adresse_employer;
    private $date_naiss_employer;
    private $email_employer;

	public function getNom_employer() {
		return $this->nom_employer;
	}

	public function setNom_employer($nom_employer) {
		$this->nom_employer = $nom_employer;
	}

	public function getPrenom_employer() {
		return $this->prenom_employer = $prenom_employer;
	}

	public function  setPprenom_employer($prenom_employer) {
		$this->prenom_employer = $prenom_employer;
	}

	public function getTel_employer() {
		return $this->tel_employer = $tel_employer;
	}

	public function setTel_employer($tel_employer) {
		$this->tel_employer = $tel_employer;
	}

	public function getAdresse_employer() {
		return $this->$adresse_employer= $adresse_employer;
	}

	public function setAdresse_employer( $adresse_employer) {
		$this->adresse_employer = $adresse_employer;
	}

	public function getDate_naiss_employer() {
		return $this->date_naiss_employer = $date_naiss_employer;
	}

	public function setDate_naiss_employer( $date_naiss_employer) {
		$this->date_naiss_employer = $_date_naiss_employer;
	}

	public function getEmail_employer() {
		return $this->email_employer=$email_employer;
	}

	public function setEmail_employer( $email_employer) {
		$this->email_employer = $email_employer;
	}

  
}
   


?>