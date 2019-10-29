<?php
require_once'connexionn.php';
require_once'utilisateur.php';
require_once'utilisateur.class.php';
require_once'liste.php';
class patient
{
    private $nom_utilisateur;
    private $mot_de_passe;
    

	public function getNom_utilisateur() {
		return $this->$nom_utilisateur;
	}

	public function setNom_utilisateur( $nom_utilisateur) {
		$this->nom_utilisateur = $nom_utilisateur;
	}

	public function getMot_de_passe() {
		return $this->$mot_de_passe;
	}

	public function setMot_de_pass( $mot_de_passe) {
		$this->mot_de_passe = $prenom_patient;
	}

}

?>