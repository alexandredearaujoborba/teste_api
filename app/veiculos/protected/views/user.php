<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userNm'); ?>
		<?php echo $form->textField($model,'userNm'); ?>
		<?php echo $form->error($model,'userNm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userPass'); ?>
		<?php echo $form->textField($model,'userPass'); ?>
		<?php echo $form->error($model,'userPass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userEmail'); ?>
		<?php echo $form->textField($model,'userEmail'); ?>
		<?php echo $form->error($model,'userEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userTipo'); ?>
		<?php echo $form->textField($model,'userTipo'); ?>
		<?php echo $form->error($model,'userTipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userDtHr'); ?>
		<?php echo $form->textField($model,'userDtHr'); ?>
		<?php echo $form->error($model,'userDtHr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userIdCad'); ?>
		<?php echo $form->textField($model,'userIdCad'); ?>
		<?php echo $form->error($model,'userIdCad'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->