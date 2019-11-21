<?php
/* @var $this AlbumController */
/* @var $model Album */

$this->breadcrumbs=array(
	'Albums'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Album', 'url'=>array('index')),
	array('label'=>'Create Album', 'url'=>array('create')),
	array('label'=>'View Album', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Album', 'url'=>array('admin')),
);
?>

<h1>Update Album <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>