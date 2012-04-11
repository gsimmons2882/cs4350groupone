<?php
/*
 * Class: ParseFLL
 * Purpose: Parses the FFL file and stores the data in an array.
 *
 * Author: Stephen Westbroek
 * Modified: Danny Barker
 */

class ParseFFL {
	private $ffl = array();

	function __construct($file) {
		$lines = file($file);
		$i = 0;
		foreach($lines as $line) 
		{
			$lineData = $this->parse($line);
			$this->ffl[] = $lineData;
			$i += 1;
			if($i > 100)
			{
				save($this->ffl);
				unset($this->ffl);
				$i = 0;
			}
		}
		save($this->ffl);
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
		$month = array('A'=>"01",'B'=>"02",'C'=>"03",'D'=>"04",'E'=>"05",'F'=>"06",'G'=>"07",'H'=>"08",'J'=>"09",'K'=>"10",'L'=>"11",'M'=>"12");
		preg_match("{(\d)([A-N])}", $id, $exp);

		if(substr(date('Y',strtotime("now")),-1,1) <= $exp[1]) {
			$year = substr_replace(date('Y',strtotime("now")),$exp[1],-1,1);
		} else {
			$year = substr_replace(date('Y',strtotime("+10 years")),$exp[1],-1,1);
		}
		$year = (substr(date('Y',strtotime("now")),-1,1) <= $exp[1]) ? substr_replace(date('Y',strtotime("now")),$exp[1],-1,1) : substr_replace(date('Y',strtotime("+10 years")),$exp[1],-1,1);
		
		echo $month[$exp[2]] . "<br />";
		
		return date("Y-m-d", strtotime($year . $month[$exp[2]] . "01"));
		
	}
}

for($i = 0; $i < 1; $i += 1)
{
	$file = "Final".$i.".txt";
	$data = new ParseFFL($file);
}

function save($data)
{
	$link = mysql_connect('localhost', 'W00006074', 'Stephencs!');

	if(!$link)
		echo 'Did not Insert Data';
	if(!is_null($data))
	{
			
		foreach($data as $dataValue)
		{
			$stmt = "INSERT INTO final_dealers(License_Number, Region, District, County, Type,
						Expiration, Sequence_Num, License_Name, Business_Name, Premise_Address,
						Premise_City, Premise_State, Premise_Zip, Mail_Street, Mail_City, 
						Mail_State, Mail_Zip, Phone, Issue_Date, Expire_Date)";
			$stmt .= "VALUES('{$dataValue['LicenseNumber']}', '{$dataValue['LicenseRegion']}',
						'{$dataValue['LicenseDistrict']}', '{$dataValue['LicenseCounty']}', 
						'{$dataValue['LicenseType']}', '{$dataValue['LicenseExpDt']}', 
						'{$dataValue['LicenseSeqNum']}', '{$dataValue['Name']}', 
						'{$dataValue['Business']}',  '{$dataValue['PremiseAddress']}', 
						'{$dataValue['PremiseCity']}', '{$dataValue['PremiseState']}', 
						'{$dataValue['PremiseZip']}', '{$dataValue['MailStreet']}', 
						'{$dataValue['MailCity']}', '{$dataValue['MailState']}', 
						'{$dataValue['MailZip']}', '{$dataValue['Phone']}', 
						'{$dataValue['IssueDate']}', '{$dataValue['ExpirationDate']}');";
				 
				mysql_query($stmt, $link);
			echo mysql_affected_rows($link) . "<br />";
			//echo $dataValue['Phone'] . "<br />";
			//echo $dataValue['ExpirationDate'] . "<br />";
		}
	}
}

?>