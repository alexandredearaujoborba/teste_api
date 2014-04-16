<?php
/* @var $this LogController */
/* @var $model Log */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jui/js/jquery-ui.min.js" ></script>
<script type="text/javascript" src="js/jquery.mask.js" ></script>
<script type="text/javascript" src="js/jquery.price_format.1.7.min.js" ></script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'log-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'logDtHr'); ?>
		<?php echo $form->textField($model,'logDtHr'); ?>
		<?php echo $form->error($model,'logDtHr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userIdCad'); ?>
		<?php echo $form->textField($model,'userIdCad'); ?>
		<?php echo $form->error($model,'userIdCad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userTipo'); ?>
		<?php echo $form->textField($model,'userTipo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'userTipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->