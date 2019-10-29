<?php
class rv
{
    private $heure_rv;
    private $date_rv;
    private $lieu_rv;

	public function getHeure_rv() {
		return $this->$heure_rv;
	}

	public function setHeure_rv( $heure_rv) {
		$this->$heure_rv = $heure_rv;
	}

	public function getDate_rv() {
		return $this->$date_rv;
	}

	public function setDate_rv( $date_rv) {
		$this->$date_rv = $date_rv;
	}

	public function getLieu_rv() {
		return $this->$lieu_rv;
	}

	public function setLieu_rv( $lieu_rv) {
		$this->$lieu_rv = $lieu_rv;
	}


	

}
?>