<?php
require_once'connexionn.php';
require_once'patient.php';
require_once'patient.class.php';
require_once'liste.php';
class patient
{
    private $nom_patient;
    private $prenom_patient;
    private $adresse_patient;
    private $tel_patient;
    private $email_patient;
    private $date_naissance_patient;
    private $poids_patient;

	public function getNom_patient() {
		return $this->$nom_patient;
	}

	public function setNom_patient( $nom_patient) {
		$this->nom_patient = $nom_patient;
	}

	public function getPrenom_patient() {
		return $this->$prenom_patient;
	}

	public function setPrenom_patient( $prenom_patient) {
		$this->prenom_patient = $prenom_patient;
	}

	public function getAdresse_patient() {
		return $this->$adresse_patient;
	}

	public function setAdresse_patient( $adresse_patient) {
		$this->adresse_patient = $adresse_patient;
	}

	public function getTel_patient() {
		return $this->$tel_patient;
	}

	public function setTel_patient( $tel_patient) {
		$this->tel_patient = $tel_patient;
	}

	public function getEmail_patient() {
		return $this->$email_patient;
	}

	public function setEmail_patient($email_patient) {
		$this->email_patient = $email_patient;
	}

	public function getDate_naissance_patient() {
		return $this->$date_naissance_patient;
	}

	public function setDate_naissance_patient( $date_naissance_patient) {
		$this->date_naissance_patient = $date_naissance_patient;
	}

	public function getPoids_patient() {
		return $this->$poids_patient;
	}

	public function setPoids_patient($poids_patient) {
		$this->poids_patient = $poids_patient;
	}
	public function getLieu_naissance() {
		return $this->$lieu_naissance;
	}

	public function setLieu_naissance($lieu_naissance) {
		$this->getLieu_naissance = $lieu_naissance;
	}

	
	}
?>