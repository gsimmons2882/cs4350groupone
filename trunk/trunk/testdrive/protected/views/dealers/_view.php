<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('License_Number')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->License_Number), array('view', 'id'=>$data->License_Number)); ?>
	<br />
	 
	<b><?php echo CHtml::encode($data->getAttributeLabel('License_Name')); ?>:</b>
	<?php echo CHtml::encode($data->License_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Business_Name')); ?>:</b>
	<?php echo CHtml::encode($data->Business_Name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Business_Bio')); ?>:</b>
	<?php echo CHtml::encode($data->Business_Bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Premise_Address')); ?>:<br /></b>
	<?php echo CHtml::encode($data->Premise_Address); ?>
	<br />
	<?php echo CHtml::encode($data->Premise_City); ?> 
	<?php echo CHtml::encode($data->Premise_State); ?>, 
	<?php echo CHtml::encode($data->Premise_Zip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Mail_Address')); ?>:<br /></b>
	<?php echo CHtml::encode($data->Mail_Street); ?>
	<br />
	<?php echo CHtml::encode($data->Mail_City); ?> 
	<?php echo CHtml::encode($data->Mail_State); ?>, 
	<?php echo CHtml::encode($data->Mail_Zip); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Phone')); ?>:</b>
	<?php echo CHtml::encode($data->Phone); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Issue_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Issue_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Expire_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Expire_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Accept_Transfers')); ?>:</b>
	<?php echo CHtml::encode($data->Accept_Transfers); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Transfer_Fee')); ?>:</b>
	<?php echo CHtml::encode($data->Transfer_Fee); ?>
	<br />
	 */ ?>

</div>
