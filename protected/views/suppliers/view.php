<?php
/** 
 * @var $this JourneyController 
 * 
 */


//$this->breadcrumbs = array(
//    'Backoffice' => array('/backoffice/default/index'),
//    $model->entityLabelPlural => array('/backoffice/journey/index'),
//    $this->pageTitle
//);

?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-btns">
                    <a href="" class="panel-close">×</a>
                    <a href="" class="minimize">−</a>
                </div>
                <h4 class="panel-title"><?php echo Yii::t('data', "GENERAL INFORMATION"); ?></h4>
            </div>
            <div class="panel-body">
                
         

<div class="the-box no-border">
    <div class="row" role="toolbar">
        <div class="col-sm-4 btn-toolbar top-table">
            <div class="btn-group">
                <?php // if (Yii::app()->user->checkAccess('Backoffice.Journey.Create')) : ?>
                <?php echo CHtml::link('<i class="fa fa-plus"></i> Create', array('create'), array(
                    'class' => 'btn btn-primary',
                )); ?>
                <?php // endif; ?>
                </div>
            
            <div class="btn-group">
                <?php // if (Yii::app()->user->checkAccess('Backoffice.Journey.Update')) : ?>
                <?php echo CHtml::link('<i class="fa fa-edit"></i> Update', array('update', 'id' => $model->primaryKey), array(
                    'class' => 'btn btn-success',
                )); ?>
                <?php //endif; ?>
            </div>
            
            <div class="btn-group">
                <?php //if (Yii::app()->user->checkAccess('Backoffice.Journey.Delete')) : ?>
                <?php echo CHtml::link('<i class="fa  fa-trash-o"></i> Delete', array('delete', 'id' => $model->primaryKey), array(
                    'class' => 'btn btn-danger',
                    'confirm' => 'Are you sure you want to delete this item?',
                )); ?>
                <?php //endif; ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 form-horizontal">
            <div class="the-box">
          
                <div class="row">
                    <div class="col-sm-4">
                        
                        <div class="form-group">
                            <?php echo CHtml::activeLabel($model, 'supplier_id', array(
                                'class' => 'col-sm-5 control-label',
                            )) ;?>
                            <p class="form-control-static col-sm-7"><?php echo $model->supplier_id ?></p>
                        </div>
                        <div class="form-group">
                            <?php echo CHtml::activeLabel($model, 'supplier_name', array(
                                'class' => 'col-sm-5 control-label',
                            )) ;?>
                            <p class="form-control-static col-sm-7"><?php echo $model->supplier_name ?></p>
                        </div>
                        
                    </div>
                    
                </div>   
            </div>
        </div>       
    </div>
</div>
                
                
                   </div>
        </div>