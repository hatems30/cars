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
                    array('label'=>'Product' , 'url'=>array('/product/index','view'=>'index')),
                    array('label'=>'Category' ,'url'=>array('/category/index','view'=>'index')),
                    array('label'=>'Customer' ,'url'=>array('/customer/index','view'=>'index')),
                  ),
                ),
                
                array('label'=>'data',
                  'items'=>array(
                    array('label'=>'Sales', 'url'=>array('/invhdr/index','view'=>'index')),
                    array('label'=>'dtl', 'url'=>array('/invdtl/index','view'=>'index')),
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
    )); ?>
           
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
