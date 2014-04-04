<?php
/* @var $this ArticlesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Articles',
);
if (Yii::app()->getModule('user')->isAdmin()) {
	$this->menu=array(
		array('label'=>'Create Articles', 'url'=>array('create')),
		array('label'=>'Manage Articles', 'url'=>array('admin')),
	);
}
?>

<h1>Articles</h1>
<?php if (!empty($_GET['tag'])) : ?>
<h2>List of Articles Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?>>/i></i><h2>
<?php endif; ?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
