<?php

class CheckCredentialsResponse
{
    private  $ID_KORISNIK;
	private  $USERNAME;
	private  $EMAIL;
	private  $POSLEDNJE_LOGOVANJE;
	private  $ID_STATUS;
	private  $ID_ROLA;


	 public function __construct($ID_KORISNIK,$USERNAME,$EMAIL,$POSLEDNJE_LOGOVANJE,$ID_STATUS,$ID_ROLA)
	 {
		$this->ID_KORISNIK = $ID_KORISNIK;
		$this->USERNAME = $USERNAME;
		$this->EMAIL = $EMAIL;
		$this->POSLEDNJE_LOGOVANJE = $POSLEDNJE_LOGOVANJE;
		$this->ID_STATUS = $ID_STATUS;
		$this->ID_ROLA = $ID_ROLA;
	   
	 }
	 
	 public function GetID_KORISNIK()
	 {
	   return $this->ID_KORISNIK;
	 }
	 public function GetUSERNAME()
	 {
	   return $this->USERNAME;
	 }
	 public function GetEMAIL()
	 {
	   return $this->EMAIL;
	 }
	 public function GetPOSLEDNJE_LOGOVANJE()
	 {
	   return $this->POSLEDNJE_LOGOVANJE;
	 }
	 public function GetID_STATUS()
	 {
	   return $this->ID_STATUS;
	 }
	 public function GetID_ROLA()
	 {
	   return $this->ID_ROLA;
	 }
 
}