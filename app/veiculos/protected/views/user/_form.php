<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jui/js/jquery-ui.min.js" ></script>
<script type="text/javascript" src="js/jquery.mask.js" ></script>
<script type="text/javascript" src="js/jquery.price_format.1.7.min.js" ></script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userNm'); ?>
		<?php echo $form->textField($model,'userNm',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'userNm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userPass'); ?>
		<?php echo $form->textField($model,'userPass',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'userPass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userEmail'); ?>
		<?php echo $form->textField($model,'userEmail',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'userEmail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userTipo'); ?>
		<?php echo $form->radioButtonList($model,'userTipo',User::model()->aUserTps, array('labelOptions'=>array('style'=>'display:inline'),'separator'=>'&nbsp;')); ?>
		<?php echo $form->error($model,'userTipo'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'userDtHr'); ?>
		<?php echo $form->hiddenField($model,'userDtHr'); ?>
		<?php #echo $form->error($model,'userDtHr'); ?>
	</div>

	<div class="row">
		<?php #echo $form->labelEx($model,'userIdCad'); ?>
		<?php echo $form->hiddenField($model,'userIdCad'); ?>
		<?php #echo $form->error($model,'userIdCad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->