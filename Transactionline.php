<?php 
class Transactionline {
	public $TrId, $TrlId,$Quantity, $SubjectId, $TypeId;
	function setInformationOfTr($TrId, $TrlId,$Quantity, $SubjectId, $TypeId){
		$this->TrId = $TrId/*$TransactionID*/;
		$this->TrlId =$TrlId;
		$this->Quantity = $Quantity;
		$this->SubjectId = $SubjectId;
		$this->TypeId = $TypeId;
	}
	function getReport(){
		return "TrId: " . $this->TrId . "\n" . "TrlId: " . $this->TrlId . "\n" . "Quantity: " . $this->Quantity . "\n" . "SubjectId: " . $this->SubjectId . "\n" . "TypeId: " . $this->TypeId . "\n";
	}
}
$Transactionline1 = new Transactionline();
$Transactionline1->setInformationOfTr(1,2,900,8,3/*enter here*/);
echo $Transactionline1->getReport();
?>