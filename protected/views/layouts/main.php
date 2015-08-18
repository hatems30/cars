
<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Bracket Responsive Bootstrap3 Admin</title>
<style>
@import url(http://fonts.googleapis.com/earlyaccess/droidarabickufi.css);

body{
font-family: 'Droid Arabic Kufi';

}

</style>
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/css/style.default.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/jquery/themes/smoothness/jquery-ui.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/jquery/themes/smoothness/jquery.ui.autocomplete.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/html5shiv.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/respond.min.js"></script>
  <![endif]-->
  <style>
 
       .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
        float: right;
        }
        .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
float: right;
}
.form-horizontal .control-label {

text-align: left;
}
th {
text-align: right;
}
.mb30 {
margin-bottom: 30px;
direction: rtl;
font-size: 12px;

}
.panel-btns{
    float: left;
}
.panel-heading{
    text-align: right;
}

.nav-bracket .children {

text-align: right;
direction: rtl;
}

.nav-bracket .children > li .fa {
margin-left: 5px;


.nav-bracket .children > li > a {

padding: 5px 27px 5px 0px;

}
.nav-parent{
    
}

.panel-footer{
    padding: 0px;
}

  </style>
  <script>
      var myCalendar;
  </script>
</head>

<body>
    
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>[ </span>ابو حته موتورز<span>]</span></h1>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4>John Doe</h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle"></h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
      
          <li class="active" style="text-align: right;direction: rtl;font-weight:bold ; "><a href="<?php echo Yii::app()->request->baseUrl; ?>/dashboard"><i class="fa fa-home"></i> <span><?php echo Yii::t('data', 'Dashboard');  ?></span></a></li>
       <li class="nav-parent nav-active"><a href=""><i class="glyphicon   glyphicon-lock"></i> <span><?php echo Yii::t('data', 'Basic Data');  ?></span></a>
           <ul class="children" style="display: block;">
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/brands/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Brands');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/carmodel/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Models');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/colors/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Colors');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/branchs/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Branchs');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/stores/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Stores');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/suppliers/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Suppliers');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/banks/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Banks');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/customers/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Customers');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/salesmantbl/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Sales men');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/inscomps/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Insurance companies');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/stud/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Stud');  ?></a></li>
            <?php // endif ;?> 
          </ul>
        </li>
        
        <li class="nav-parent nav-active"><a href=""><i class="glyphicon   glyphicon-lock"></i> <span><?php echo Yii::t('data', 'Operations');  ?></span></a>
           <ul class="children" style="display: block;">
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/carstbl/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Add New Car');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/salestbl/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Sales Incoice');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Holdtbl/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Car Holding');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/Servicetbl/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Customer Service');  ?></a></li>
            <?php // endif ;?> 
          </ul>
        </li>
        <li class="nav-parent nav-active"><a href=""><i class="glyphicon   glyphicon-lock"></i> <span><?php echo Yii::t('data', 'Reports');  ?></span></a>
           <ul class="children" style="display: block;">
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/salesreport/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Sales Report');  ?></a></li>
            <?php // endif ;?> 
        <?php  // if(Yii::app()->user->checkAccess('permission')):?>
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/salestbl/admin"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Sales Incoice');  ?></a></li>
            <?php // endif ;?> 
   
          </ul>
        </li>
        
        
         
                                        <?php   if(Yii::app()->user->checkAccess('الادارة')):?>
        
          <li class="nav-parent"><a href=""><i class="fa  fa-cog"></i> <span><?php echo Yii::t('data', 'الإدارة');  ?></span></a>
          <ul class="children">
              <li><a href="javascript:;"  onclick="ajax('/dashboard/notification/edit',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Notification');  ?></a></li>
             
          </ul>
        </li>
        <?php endif; ?>
        
        </ul>
      
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   
      
      <div class="header-right">
        <ul class="headermenu"> <li id="notification_area" style="min-width:250px;margin: 7px;margin-right: 20px;border: 0px; color: #D9534F;">
             
            </li>
            <li id="loader_area" style="width: 30px;margin: 7px;margin-right: 20px;border: 0px;">
                <div class="btn-group">
                    
                </div>
            </li>
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-user"></i>
                <span class="badge">2</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title"><?php  echo Yii::t('data','المستخدمين الاونلاين');?></h5>
                <ul class="dropdown-list user-list">
                
               
                  <li>
                    <div class="thumb"><a href=""><img src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user5.png" alt="" /></a></div>
                    <div class="desc">
                      <h5><a href=""><?php  echo Yii::t('data','حاتم عطية');?></a></h5>
                    </div>
                  </li>
                  <li class="new"><a href=""><?php  echo Yii::t('data','مشاهدة جميع المشرفيين');?></a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-envelope"></i>
                <span class="badge">1</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title"><?php  echo Yii::t('data','الرسائل');?></h5>
                <ul class="dropdown-list gen-list">
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user1.png" alt="" /></span>
                    <span class="desc">
                      <span class="name"><?php  echo Yii::t('data','رسالة هامة');?> <span class="badge badge-success">جديد</span></span>
                      <span class="msg"><?php  echo Yii::t('data','تنفاصيل الرسالة');?></span>
                    </span>
                    </a>
                  </li>
                 
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user1.png" alt="" /></span>
                    <span class="desc">
                      <span class="name"><?php  echo Yii::t('data','رسالة هامة');?> <span class="badge badge-success">جديد</span></span>
                      <span class="msg"><?php  echo Yii::t('data','تنفاصيل الرسالة');?></span>
                    </span>
                    </a>
                  </li>
                 
                
                  <li class="new"><a href=""><?php  echo Yii::t('data','مشاهدةة جميع الرسائل');?></a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button class="btn btn-default dropdown-toggle tp-icon" data-toggle="dropdown">
                <i class="glyphicon glyphicon-globe"></i>
                <span class="badge">5</span>
              </button>
              <div class="dropdown-menu dropdown-menu-head pull-right">
                <h5 class="title"><?php  echo Yii::t('data','التنبيهات');?></h5>
                <ul class="dropdown-list gen-list">
                  <li class="new">
                    <a href="">
                    <span class="thumb"><img src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user4.png" alt="" /></span>
                    <span class="desc">
                      <span class="name"><?php  echo Yii::t('data','تنبيه هام');?><span class="badge badge-success"><?php  echo Yii::t('data','جديد');?></span></span>
                      <span class="msg"><?php  echo Yii::t('data','تنبيه هام');?></span>
                    </span>
                    </a>
                  </li>
                 
                  <li class="new"><a href=""><?php  echo Yii::t('data','مشاهدة جميع التنبيهات');?></a></li>
                </ul>
              </div>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/loggeduser.png" alt="" />
                <?php echo Yii::app()->user->getState("username");?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout"><i class="glyphicon glyphicon-log-out"></i> <?php echo Yii::t("data","Log Out");?></a></li>
              </ul>
            </div>
          </li>
          <li>
            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                <i class="glyphicon glyphicon-comment"></i>
            </button>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
<!--       <h2><i class="fa fa-home"></i> التوظيف </h2>
 -->     <!--  <div class="breadcrumb-wrapper">
<!--         <span class="label"></span>
       <ol class="breadcrumb">
          <li><a href="index.html">Bracket</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </div> -->
    </div>
    
    <div class="contentpanel">
        <?php echo $content; ?>
      <?php   //      $this->render('dashboard', array("counters" =>$counters,"notification"=>$notification)); ?>
   
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
  
  <div class="rightpanel">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a href="#rp-alluser" data-toggle="tab"><i class="fa fa-users"></i></a></li>
        <li><a href="#rp-favorites" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
        <li><a href="#rp-history" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
        <li><a href="#rp-settings" data-toggle="tab"><i class="fa fa-gear"></i></a></li>
    </ul>
        
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="rp-alluser">
            <h5 class="sidebartitle">Online Users</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/userprofile.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <span class="pull-right badge badge-danger">2</span>
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
            
            <div class="mb30"></div>
            
            <h5 class="sidebartitle">Offline Users</h5>
            <ul class="chatuserlist">
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-favorites">
            <h5 class="sidebartitle">Favorites</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Los Angeles, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user1.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>San Francisco, CA</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Bangkok, Thailand</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Renov Leongal</strong>
                            <small>Cebu City, Philippines</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user5.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Weno Carasbong</strong>
                            <small>Tokyo, Japan</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="rp-history">
            <h5 class="sidebartitle">History</h5>
            <ul class="chatuserlist">
                <li class="online">
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user4.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Eileen Sideways</strong>
                            <small>Hi hello, ctc?... would you mind if I go to your...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user2.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Zaham Sindilmaca</strong>
                            <small>This is to inform you that your product that we...</small>
                        </div>
                    </div><!-- media -->
                </li>
                <li>
                    <div class="media">
                        <a href="#" class="pull-left media-thumb">
                            <img alt="" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/images/photos/user3.png" class="media-object">
                        </a>
                        <div class="media-body">
                            <strong>Nusja Nawancali</strong>
                            <small>Are you willing to have a long term relat...</small>
                        </div>
                    </div><!-- media -->
                </li>
            </ul>
        </div>
        <div class="tab-pane pane-settings" id="rp-settings">
            
            <h5 class="sidebartitle mb20">Settings</h5>
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Offline Users</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Enable History</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Full Name</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle-chat1 toggle-success"></div>
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-xs-8 control-label">Show Location</label>
                <div class="col-xs-4 control-label">
                    <div class="toggle toggle-success"></div>
                </div>
            </div>
            
        </div><!-- tab-pane -->
        
    </div><!-- tab-content -->
  </div><!-- rightpanel -->
  
   
</section>
 <div id="delete-dialog-confirm" style="direction: rtl;display: none" >
      
      <p>
          <?php echo Yii::t("data","هل تريد بالتاكيد الحذف ؟"); ?>
      </p>
      <p>
          <label><input type="checkbox" id="delete_item_confirm" > <?php echo Yii::t("data","تاكيد الحذف"); ?></label>
      </p>
  </div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/bootstrap.min.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/modernizr.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/jquery.cookies.js"></script>




<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>




<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/custom.js"></script>

</body>
</html>

   