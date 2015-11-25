<?php
/* @var $this SectionstblController */
/* @var $model Sectionstbl */

$this->breadcrumbs=array(
	'Sectionstbls'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sectionstbl', 'url'=>array('index')),
	array('label'=>'Create Sectionstbl', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sectionstbl-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

       <div class="panel panel-default">            
           <div class="panel-heading" dir =rtl>
               <div class="row">
               <div class="col-sm-6"><b><font size="5" color="blue">Sections</font></b></div>           
               <div class="col-sm-6" dir =rtl> <?php echo CHtml::link('<i class="fa fa-plus"></i> '.Yii::t('data','Create'),array('create'), array('class' => 'btn btn-default','href' => 'sss',)); ?></div>
           </div>
           </div>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sectionstbl-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		'section_id',
		'section_name',                
		array('class'=>'CButtonColumn',),
                array('name'=>'stock_خارجي','type' => 'raw','value'=>'CHtml::link($data[\'section_id\'],array("/outstocktbl/admin","section_id"=>$data[\'section_id\']))'), 
	),
)); ?>
       </div>
