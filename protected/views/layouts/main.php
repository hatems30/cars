<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->


	<div id="mainMbMenu">
        
<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                
                array('label'=>'File', 
                  'items'=>array(
                    array('label'=>'Brands' , 'url'=>array('/brands/index','view'=>'index')),
                    array('label'=>'Models' ,'url'=>array('/carmodel/index','view'=>'index')),
                    array('label'=>'Colors' , 'url'=>array('/colors/index','view'=>'index')),
                    array('label'=>'Branchs' ,'url'=>array('/branchs/index','view'=>'index')),
                    array('label'=>'Stores' , 'url'=>array('/stores/index','view'=>'index')),
                    array('label'=>'Suppliers' ,'url'=>array('/suppliers/index','view'=>'index')),
                    array('label'=>'Banks' ,'url'=>array('/banks/index','view'=>'index')),
                    array('label'=>'Customers' ,'url'=>array('/customers/index','view'=>'index')),
                    array('label'=>'Sales men' ,'url'=>array('/salesmantbl/index','view'=>'index')),
                    array('label'=>'Insurance companies' ,'url'=>array('/inscomps/index','view'=>'index')),),),
                
                array('label'=>'data',
                  'items'=>array(
                    array('label'=>'Add New Car', 'url'=>array('/carstbl/index','view'=>'index')),
                    array('label'=>'Sales Incoice', 'url'=>array('/salestbl/index','view'=>'index')),
                    array('label'=>'Car Holding', 'url'=>array('/Holdtbl/index','view'=>'index')),
                    array('label'=>'Customer Service', 'url'=>array('/Servicetbl/index','view'=>'index')),
                      
                      
                      )),
                
                array('label'=>'Reports',
                  'items'=>array(
                    array('label'=>'Sales Report', 'url'=>array('/salesreport/view','view'=>'index')),
                    array('label'=>'Sales Incoice', 'url'=>array('/salestbl/index','view'=>'index')),))
                
                
                
                )));
                   /*
                      array('label'=>'suppers',
                      'items'=>array(
                        array('label'=>'Sub sub 1', 'url'=>array('/site/page','view'=>'subsub1')),
                        array('label'=>'Sub sub 2', 'url'=>array('/site/page','view'=>'subsub2')),
                      ),
                    ),
                      
                  ),                    
                ),

                  array('label'=>'Contact Us', 'url'=>array('/site/contact')),
            ),
    )); */?>
           
     </div><!-- mainmenu -->
     
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
