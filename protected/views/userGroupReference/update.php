<?php
$this->breadcrumbs=array(
	'User Group References'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List UserGroupReference', 'url'=>array('index')),
	array('label'=>'Create UserGroupReference', 'url'=>array('create')),
	array('label'=>'View UserGroupReference', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage UserGroupReference', 'url'=>array('admin')),
);
?>

<h1>Update UserGroupReference <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>