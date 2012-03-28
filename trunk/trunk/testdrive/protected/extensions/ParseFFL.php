<?php
/*
 * Class: ParseFLL
 * Purpose: Parses the FFL file and stores the data in an array.
 *
 * Author: Stephen Westbroek
 */

class ParseFFL {
	private $ffl = array();

	function __construct($file) {
		$lines = file($file);

		foreach($lines as $line) {
			$lineData = $this->parse($line);
			$this->ffl[] = $lineData;
		}
	}

	function getFfl() {
		return $this->ffl;
	}
		
	function parse($ffl) {
		$record = array('LicenseRegion'=>substr($ffl,0,1),'LicenseDistrict'=>substr($ffl,1,2),'LicenseCounty'=>substr($ffl,3,3),'LicenseType'=>substr($ffl,6,2),'LicenseExpDt'=>substr($ffl,8,2),'LicenseSeqNum'=>substr($ffl,10,5),'LicenseNumber'=>substr($ffl,0,15),'Name'=>trim(substr($ffl,15,50)),'Business'=>trim(substr($ffl,65,50)),'PremiseAddress'=>trim(substr($ffl,115,50)),'PremiseCity'=>trim(substr($ffl,165,30)),'PremiseState'=>trim(substr($ffl,195,2)),'PremiseZip'=>trim(substr($ffl,197,9)),'MailStreet'=>trim(substr($ffl,206,50)),'MailCity'=>trim(substr($ffl,256,30)),'MailState'=>trim(substr($ffl, 286,2)),'MailZip'=>trim(substr($ffl,288,9)),'Phone'=>trim(substr($ffl,297,10)),'IssueDate'=>trim(substr($ffl,307,8)),'ExpirationDate'=>trim(substr($ffl,315,8)));
		$record['ExpirationDate'] = $this->getExpiration($record['LicenseNumber']);

		return $record;
	}

	function getExpiration($id) {
		$month = array('A'=>"January",'B'=>"February",'C'=>"March",'D'=>"April",'E'=>"May",'F'=>"June",'G'=>"July",'H'=>"August",'J'=>"September",'K'=>"October",'L'=>"November",'M'=>"December");
		preg_match("{(\d)([A-N])}", $id, $exp);

		if(substr(date('Y',strtotime("now")),-1,1) <= $exp[1]) {
			$year = substr_replace(date('Y',strtotime("now")),$exp[1],-1,1);
		} else {
			$year = substr_replace(date('Y',strtotime("+10 years")),$exp[1],-1,1);
		}
		//$year = (substr(date('Y',strtotime("now")),-1,1) <= $exp[1]) ? substr_replace(date('Y',strtotime("now")),$exp[1],-1,1) : substr_replace(date('Y',strtotime("+10 years")),$exp[1],-1,1);

		return date("mdY", strtotime("01 ".$month[$exp[2]]." ".$year));
	}
}

$data = new ParseFFL("final.txt");

print "<pre>";
print_r($data->getFfl());
print "</pre>";

?>