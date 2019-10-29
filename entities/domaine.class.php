<?php
class domaine
{
    private $nom_domaine;

	public function getNom_domaine() {
		return $this->$nom_domaine;
	}

	public function setNom_domaine($nom_domaine) {
		$this->nom_domaine = $nom_domaine;
	}


}