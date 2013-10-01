<?php
$this->breadcrumbs=array(
	'User Group References'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List UserGroupReference', 'url'=>array('index')),
	array('label'=>'Create UserGroupReference', 'url'=>array('create')),
	array('label'=>'Update UserGroupReference', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete UserGroupReference', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserGroupReference', 'url'=>array('admin')),
);
?>

<h1>View UserGroupReference #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'user_id',
		'user_status',
		'user_role',
	),
)); ?>
