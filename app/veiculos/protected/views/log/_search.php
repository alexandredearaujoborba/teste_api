<?php
/* @var $this LogController */
/* @var $model Log */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'logId'); ?>
		<?php echo $form->textField($model,'logId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'logDtHr'); ?>
		<?php echo $form->textField($model,'logDtHr'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userIdCad'); ?>
		<?php echo $form->textField($model,'userIdCad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'userTipo'); ?>
		<?php echo $form->textField($model,'userTipo',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->