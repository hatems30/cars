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
        
      	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/mycss.css" media="print">
    
        

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>    
        
        

       </head>

<body>

    <div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->
<!---------------------------------------------------------------------------------------------------------------->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <a class="navbar-brand" href="#"><b>Abo Hetta</b></a>
    </div>
    <div>
        <ul class="nav navbar-nav">
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">Home</a></li>
        
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>File</b><span class="caret"></span></a>            
            <ul class="dropdown-menu" alig="center">
            <li ><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=brands/admin&view=admin"><b>الماركات</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=carmodel/admin&view=admin"><b>الموديلات</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=carcode/admin&view=admin"><b>الاكـــواد</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=colors/admin&view=admin"><b>الالـــوان</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=branchs/admin&view=admin"><b>الفـــروع</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=stores/admin&view=admin"><b>المخـــازن</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=suppliers/admin&view=admin"><b>المــوردين</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=employees/admin&view=admin"><b>الموظفين</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=inscomps/admin&view=admin"><b>شركات التأمين</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=banks/admin&view=admin"><b>البنـــوك</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=customers/admin&view=admin"><b>عملاء البيع المباشر</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Companiestbl/admin&view=admin"><b>عملاء الشركات</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=dealerstbl/admin&view=admin"><b>الموزعين</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=traffictbl/admin&view=admin"><b>وحدات المرور</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=mcenterstbl/admin&view=admin"><b>مراكز الصيانة</b></a></li>
          </ul>            
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Data</b><span class="caret"></span></a>            
          <ul class="dropdown-menu" alig="center">
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=carstbl/admin&view=admin"><b>اضافة سيارة جديدة</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=innersaletbl/admin&view=admin"><b>التحويل بين الفروع</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=holdtbl/admin&view=admin"><b>حجز سيارة</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=salestbl/admin&view=admin"><b>البيع المباشر</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=companysalestbl/admin&view=admin"><b>مبيعات الشركات</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=dealersalestbl/admin&view=admin"><b>مبيعات الموزعين</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=bankofferstbl/admin&view=admin"><b>عروض البنوك</b></a></li>            
          </ul>            
        </li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>After Sale</b><span class="caret"></span></a>            
          <ul class="dropdown-menu" alig="center">
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=paperstbl/admin&view=admin"><b>تبليغ الاوراق</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Licensetbl/admin&view=admin"><b>التراخيص</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Maintenancetbl/admin&view=admin"><b>حجز صيانة</b></a></li>            
          </ul>            
        </li>  
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Reports</b><span class="caret"></span></a>            
          <ul class="dropdown-menu" alig="center">
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=salesreport/view"><b>تقرير البيع النقدي</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Banksalesreport/view"><b>تقرير مبيعات البنوك</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Premiumsalesreport/view"><b>تقرير مبيعات التقسيط</b></a></li>            
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Dealersalesreport/view"><b>تقرير مبيعات التجاري</b></a></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=Companysalesreport/view"><b>تقرير مبيعات الشركات</b></a></li>
          </ul>            
        </li>            
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=carstock/view">Car Stock</a></li>        
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=callstbl/admin&view=admin">CALLS</a></li>
        <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/logout">Logout</a></li>
        <li><a href="#"><?php echo 'welcome '.Yii::app()->user->username?></a></li>
      </ul>      
    </div>
  </div>
</nav>

<!---------------------------------------------------------------------------------------------------------------->        

        
     
	<?php if(isset($this->breadcrumbs)):?>
		<?php //$this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?><!-- breadcrumbs -->
	<?php endif?>
                
                
        <div id="main-content">
	<?php echo $content; ?>
        </div>
                

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
