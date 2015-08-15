
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
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/css/jquery.datatables.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/jquery/themes/smoothness/jquery-ui.css" rel="stylesheet">
  <link href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/jquery/themes/smoothness/jquery.ui.autocomplete.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/calender/jquery.calendars.picker.css">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/html5shiv.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/respond.min.js"></script>
  <![endif]-->
  <style>
 
#mini-clndr {
  margin: 0 auto;
}
#mini-clndr .clndr {
  overflow: hidden;
  margin-bottom: 20px;
  -webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
  -moz-box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
  box-shadow: 0 2px 1px rgba(0, 0, 0, 0.08);
}
#mini-clndr .clndr .controls {
  color: #222;
  border: 1px solid #ddd;
  background: #f0f0f0;
}
#mini-clndr .clndr .controls .clndr-previous-button,
#mini-clndr .clndr .controls .clndr-next-button {
  width: 15%;
  padding-top: 5px;
  padding-bottom: 5px;
  display: inline-block;
  text-align: center;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
#mini-clndr .clndr .controls .month {
  width: 70%;
  padding-top: 5px;
  padding-bottom: 5px;
  display: inline-block;
  text-align: center;
  font: 400 20px / 32px "Source Sans Pro", Arial, sans-serif;
}
#mini-clndr .clndr .days-container {
  position: relative;
  display: block;
  height: auto;
}
#mini-clndr .clndr .days-container .days {
  width: 100%;
  height: auto;
  background-color: #fff;
  border-left: 1px solid #ddd;
}
#mini-clndr .clndr .days-container .days .day,
#mini-clndr .clndr .days-container .days .empty {
  width: 14.285714%;
  display: inline-block;
  padding-top: 8px;
  padding-bottom: 8px;
  font: 400 16px / 32px "Source Sans Pro", Arial, sans-serif;
  text-align: center;
  color: #222222;
  border-right: 1px solid #ddd;
  border-bottom: 1px solid #ddd;
  line-height: 32px;
}
#mini-clndr .clndr .days-container .days .day.event,
#mini-clndr .clndr .days-container .days .empty.event {
  cursor: pointer;
  color: #222222;
  position: relative;
}
#mini-clndr .clndr .days-container .days .day.event:after,
#mini-clndr .clndr .days-container .days .empty.event:after {
  position: absolute;
  right: 25%;
  bottom: 8px;
  content: '';
  display: block;
  width: 50%;
  height: 0px;
  border-style: solid;
  border-width: 0 0 3px;
  border-color: #64b92a;
}
#mini-clndr .clndr .days-container .days .day .adjacent-month,
#mini-clndr .clndr .days-container .days .empty .adjacent-month {
  color: #aaa;
  background: #ebebeb;
}
#mini-clndr .clndr .days-container .days .today {
  background: #fcf3d0;
}
#mini-clndr .clndr .days-container .days .empty {
  height: 31px;
  vertical-align: bottom;
}
#mini-clndr .clndr .days-container .days .headers {
  padding-top: 5px;
  padding-bottom: 5px;
  border-bottom: 1px solid #ddd;
  border-right: 1px solid #ddd;
}
#mini-clndr .clndr .days-container .days .headers .day-header {
  width: 14.285714%;
  display: inline-block;
  text-align: center;
}
#mini-clndr .clndr .days-container .events {
  position: absolute;
  left: 100%;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transition: left 0.5s;
  transition: left 0.5s;
  background-color: #ebebeb;
  background: rgba(0, 0, 0, 0.75);
}
#mini-clndr .clndr .days-container .events .headers {
  position: relative;
}
#mini-clndr .clndr .days-container .events .event-header {
  width: 100%;
  background-color: #fff;
  border-left: 1px solid #ddd;
  border-right: 1px solid #ddd;
  padding-top: 5px;
  padding-bottom: 5px;
  text-align: center;
  color: #222222;
}
#mini-clndr .clndr .days-container .events .x-button {
  position: absolute;
  font-size: 80%;
  top: 8px;
  right: 12px;
  cursor: pointer;
}
#mini-clndr .clndr .days-container .events .events-list-wrapper {
  overflow: auto;
  position: absolute;
  left: 0;
  right: 0;
  top: 30px;
  bottom: 0;
}
#mini-clndr .clndr .days-container .events .events-list {
  padding: 10px;
}
#mini-clndr .clndr .days-container .events .events-list .event {
 padding: 4px 10px;
text-align: right;
direction: rtl;
}
#mini-clndr .clndr .days-container .events .events-list .event a {
  position: relative;
  font-size: 12px;
  letter-spacing: 1px;
  background-color: transparent;
  color: #fff;
  text-decoration: none;
}
#mini-clndr .clndr .days-container .events .events-list .event a:hover {
  text-decoration: underline;
}
#mini-clndr .clndr .days-container.show-events .days {
  left: -294px;
}
#mini-clndr .clndr .days-container.show-events .events {
  left: 0;
}
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
        <h1><span>[ </span>شئون الموظفين<span>]</span></h1>
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
       <li class="nav-parent"><a href=""><i class="glyphicon   glyphicon-lock"></i> <span><?php echo Yii::t('data', 'Users');  ?></span></a>
          <ul class="children">
       
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/brands/index"  ><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Add User');  ?></a></li>
         
          </ul>
        </li>
        
             <?php  // if(Yii::app()->user->checkAccess('المشرفين')):?>
          <li class="nav-parent"><a href=""><i class="glyphicon   glyphicon-lock"></i> <span><?php echo Yii::t('data', 'Users');  ?></span></a>
          <ul class="children">
            <?php   if(Yii::app()->user->checkAccess('/dashboard/user/add')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/user/add',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Add User');  ?></a></li>
              <?php endif ;?> 
               <?php   if(Yii::app()->user->checkAccess('/dashboard/user/manage')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/user/manage',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Manage Users');  ?></a></li>
              <?php endif ;?> 
              <?php   if(Yii::app()->user->checkAccess('/dashboard/user/managerole')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/user/managerole',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Users Roles');  ?></a></li>
              <?php endif ;?> 
<!--              <?php   if(Yii::app()->user->checkAccess('/dashboard/user/manageoperations')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/user/manageoperations',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Operations');  ?></a></li>
              <?php endif ;?> -->
              <?php   if(Yii::app()->user->checkAccess('/dashboard/logs/manage')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/logs/manage',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Users Logs');  ?></a></li>
              <?php endif ;?> 
          </ul>
        </li>
        <?php // endif; ?>

             <?php   if(Yii::app()->user->checkAccess('التوظيف')):?>
      
        <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-user"></i> <span><?php echo Yii::t('data', 'التوظيف');  ?></span></a>
          <ul class="children">
             
              <?php   if(Yii::app()->user->checkAccess('/dashboard/employee/add')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/employee/add',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Add Employees');  ?></a></li>
              <?php endif ;?> 
              <?php   if(Yii::app()->user->checkAccess('/dashboard/user/manage')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/employee/manage',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Manage Employees');  ?></a></li>
           <?php endif ;?> 
              
          </ul>
        </li>
        <?php endif; ?>

          <?php   if(Yii::app()->user->checkAccess('التشكيلات الإدارية')):?>

        <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-list-alt"></i> <span><?php echo Yii::t('data', 'التشكيلات الإدارية');  ?></span></a>
          <ul class="children">
             
              <?php   if(Yii::app()->user->checkAccess('/dashboard/formations/manage')):?>
              <li><a href="javascript:;"  onclick="ajax('/dashboard/formations/manage',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'Manage Formations');  ?></a></li>
           <?php endif ;?> 
            
          </ul>
        </li>
        <?php endif; ?>
        
        <?php   if(Yii::app()->user->checkAccess('خدمات الموظيفين')):?>
         <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-user"></i> <span><?php echo Yii::t('data', 'خدمات الموظيفين');  ?></span></a>
          <ul class="children">
           
          </ul>
        </li>
        <?php endif; ?>
        
                <?php   if(Yii::app()->user->checkAccess('الرواتب')):?>

         <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-user"></i> <span><?php echo Yii::t('data', 'الرواتب');  ?></span></a>
          <ul class="children">
           
                     <li><a href="javascript:;"  onclick="ajax('/salary/salary/table',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'سلم الرواتب');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/salary/grid',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'رواتب الموظفين');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/deduct/grid',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'الحسومات');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/salary/branchFinal',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'خلاصة الفروع');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/salary/generalFinal',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'الخلاصة العامة');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/deduct/bankReport',{'action':'search',bank_id:3})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'بيان  باقساط البنك العقاري');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/deduct/bankReport',{'action':'search',bank_id:2})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'بيان باقساط بنك التسليف');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/deduct/bankReport',{'action':'search',bank_id:1})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'بيان باقساط البنك الزراعي');  ?></a></li>
                     <li><a href="javascript:;"  onclick="ajax('/salary/deduct/bankReportHistory',{'action':'search',bank_id:1})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'تقرير الحسومات');  ?></a></li>

          </ul>
        </li>
        <?php endif; ?>
                        <?php   if(Yii::app()->user->checkAccess('الإنتدابات')):?>

         <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-user"></i> <span><?php echo Yii::t('data', 'الإنتدابات');  ?></span></a>
          <ul class="children">
          
           
          </ul>
        </li>
        <?php endif; ?>
                                <?php   if(Yii::app()->user->checkAccess('التكليف')):?>

         <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-user"></i> <span><?php echo Yii::t('data', 'التكليف');  ?></span></a>
          <ul class="children">        
          </ul>
        </li>
        <?php endif; ?>
                                        <?php   if(Yii::app()->user->checkAccess('الترقيات')):?>

         <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-user"></i> <span><?php echo Yii::t('data', 'الترقيات');  ?></span></a>
          <ul class="children">           
          <li><a href="javascript:;"  onclick="ajax('/upgrade/course/grid',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'اضافة دورة');  ?></a></li>
          <li><a href="javascript:;"  onclick="ajax('/upgrade/qualified/grid',{'empty':'true'})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'الموظفين المؤهيلن للترقيه');  ?></a></li>

          </ul>
        </li>
        <?php endif; ?>
                                        <?php   if(Yii::app()->user->checkAccess('البيانات الأساسية')):?>
       
            <li class="nav-parent"><a href=""><i class="glyphicon  glyphicon-paperclip"></i> <span><?php echo Yii::t('data', 'البيانات الأساسية');  ?></span></a>
          <ul class="children">
              <li><a href="javascript:;"  onclick="ajax('/dashboard/default/basic',{})"><i class="fa fa-caret-left"></i><?php echo Yii::t('data', 'البيانات الأساسية');  ?></a></li>
             
          </ul>
        </li>
        <?php endif; ?>
        
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
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/jquery.sparkline.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/toggles.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/retina.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/jquery.cookies.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/flot/flot.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/flot/flot.resize.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/morris.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/raphael-2.1.0.min.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/jquery.datatables.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/chosen.jquery.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>

  <script src="http://tisa-admin.tzdthemes.com/assets/lib/CLNDR/src/clndr.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/clndr/example/moment-2.5.1.js"></script>


<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/calender/jquery.calendars.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/calender/jquery.calendars.plus.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/calender/jquery.calendars.picker.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/calender/jquery.calendars.islamic.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/calender/jquery.calendars.islamic-ar.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/calender/jquery.calendars.picker-ar-EG.js"></script>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/custom.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/dashboard.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/clock/assets/js/script.js"></script>
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/cdn/template/js/clock/assets/css/style.css" rel="stylesheet" />
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

</body>
</html>

   