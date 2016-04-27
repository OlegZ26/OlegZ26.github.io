<?php

class Logger {
	
	private $logfilehandle=NULL;

    
	public function __construct($logfile) {
		if($this->logfilehandle==NULL)
			$this->openLogFile($logfile);
	}

	public function __destruct() {
		$this->closeLogFile();
	}

	public function log($message) {
        if ($this->logfilehandle)
            $this->writeToLogFile("[".$this->getTime()."] - ".$message);
	}
    
	public function dump($message, $array) {
        if ($this->logfilehandle == null)
            return;
        $this->writeToLogFile("[".$this->getTime()."] - ".$message);
        //$data = print_r($array, TRUE);
        $data = '';
        foreach ($array as $k => $v) {
            $data .= "\t$k: $v\r\n";
        }
        $this->writeToLogFile($data);
	}
	
	private function writeToLogFile($message) {
		flock($this->logfilehandle,LOCK_EX);
		fwrite($this->logfilehandle,$message."\n");
		flock($this->logfilehandle,LOCK_UN);
	}

	private function getTime() {
		return date("d.m.Y - H:i:s");
	}

	public function closeLogFile() {
		if($this->logfilehandle!=NULL) {
			fclose($this->logfilehandle);
			$this->logfilehandle=NULL;
		}
	}

	public function openLogFile($logfile) {
		
		$this->closeLogFile(); //close old logfile if opened;
		$this->logfilehandle=@fopen($logfile,"a");
	}
}
