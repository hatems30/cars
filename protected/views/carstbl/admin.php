<?php
/* @var $this CarstblController */
/* @var $model Carstbl */

$this->breadcrumbs=array(
	'Carstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Carstbl', 'url'=>array('index')),
	array('label'=>'Create Carstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Carstbls</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'carstbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
           'filter'=> "CHtml::listData(Branchs::model()->findAll(), 'branch_id', 'branch_name')",
	'columns'=>array(
		'car_id',
                array('name' => 'brand_id','value' => '$data->Brand->brand_name'),
		array('name' => 'model_id','value' => '$data->carmodel->model_name'),
                array('name' => 'color_id','value' => '$data->colors->color_name'),		

		'chass_no',
	
            'motor_no',
			
		'off_price',
            /*
		'cost_price',
		'sale_price',
		'car_code',
		'car_spec',
		'branch_id',
		'store_id',
		'supplier_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
