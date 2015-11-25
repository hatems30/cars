<?php
/* @var $this OutstocktblController */
/* @var $model Outstocktbl */

$this->breadcrumbs=array(
	'Outstocktbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Outstocktbl', 'url'=>array('index')),
	array('label'=>'Create Outstocktbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#outstocktbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-7"><b><font size="5" color="blue">Stock خارجي</font></b></div>           
             <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=outstocktbl/create&section_id=<?php echo $_REQUEST['section_id'] ?>">اضافة سيارة خارجي</a>
           </div>
           </div>           
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'outstocktbl-grid',
	'dataProvider'=>$model->search($_REQUEST['section_id']),
	'filter'=>$model,
	'columns'=>array(
		'car_id',
		 array('name' => 'section_id','value' => '$data->section->section_name'),
		'car_name',
		'car_color',
		'car_price',			
		'notes',	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
       </div>
