<?php
/* @var $this InnersaletblController */
/* @var $model Innersaletbl */

$this->breadcrumbs=array(
	'Innersaletbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Innersaletbl', 'url'=>array('index')),
	array('label'=>'Create Innersaletbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#innersaletbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>




       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">التحويل بين الفروع</font></b></div>           
               
           </div>
           </div>
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'innersaletbl-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'trs_id',
		'trs_date',		
                 array('name' => 'from_branch_id','value' => '$data->fromBranch->branch_name'), 
		 array('name' => 'to_branch_id','value' => '$data->toBranch->branch_name'), 
                 array('name' => 'car_id','value' => '$data->car->chass_no'), 		
		'price',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
