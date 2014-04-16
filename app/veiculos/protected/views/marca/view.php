<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->marcaId,
);

$this->menu=array(
	array('label'=>'List Marca', 'url'=>array('index')),
	array('label'=>'Create Marca', 'url'=>array('create')),
	array('label'=>'Update Marca', 'url'=>array('update', 'id'=>$model->marcaId)),
	array('label'=>'Delete Marca', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->marcaId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Marca', 'url'=>array('admin')),
);
?>

<h1>View Marca #<?php echo $model->marcaId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'marcaId',
		'marcaNm',
		'marcaDtHr',
		'userIdCad',
	),
)); ?>
