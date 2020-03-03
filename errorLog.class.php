<?php

class ErrorLog
{
	private $file;
	private $fp;
	
	public function SetLog($errorMsg)
	{
		$fp = $this->getFilePointer();
		$fwrite($fp,$errorMsg);
		$this->closeFile($fp);
	}
	
	private function closeFile($fp)
	{
		fclose($fp);
	}
	
	private function getFilePointer()
	{
		$date = date("dd.mm.yyyy.");
		$fileName = sprintf("error.%s.log",$date);
		$fp = fopen($fileName,"w+";)
		return $fp;
	}
}

?>