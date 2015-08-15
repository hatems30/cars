
jQuery(window).load(function() {

    // Page Preloader
    jQuery('#status').fadeOut();
    jQuery('#preloader').delay(350).fadeOut(function() {
        jQuery('body').delay(350).css({'overflow': 'visible'});
    });
});

jQuery(document).ready(function() {




    // Toggle Left Menu
    jQuery(document).on('click', '#Job_job_status label', function() {
       
        if (jQuery(this).attr("for") == "Job_job_status_0") {
            jQuery(".employee-grid-dynamic").hide();
            jQuery("#Job_reserved_list").parent().parent().hide();
            jQuery("#Job_reserved_name").parent().parent().show();
            jQuery(".empty_date").show();
            jQuery(".form-control,.control-label").removeClass('error');
   
        } 
        if (jQuery(this).attr("for") == "Job_job_status_1") {
         
             jQuery(".employee-grid-dynamic").hide();
             jQuery("#Job_reserved_list").parent().parent().show();
            jQuery("#Job_reserved_name").parent().parent().hide();
            jQuery(".empty_date").show();
                        jQuery(".form-control,.control-label").removeClass('error');


        } 
        
        if (jQuery(this).attr("for") == "Job_job_status_2") {
             jQuery(".employee-grid-dynamic").show();
              jQuery("#Job_reserved_list").parent().parent().hide();
              jQuery("#Job_reserved_name").parent().parent().hide();
              jQuery(".empty_date").hide();
                          jQuery(".form-control,.control-label").removeClass('error');



        }
    })
    jQuery('.leftpanel .nav-parent > a').live('click', function() {

        var parent = jQuery(this).parent();
        var sub = parent.find('> ul');

        // Dropdown works only when leftpanel is not collapsed
        if (!jQuery('body').hasClass('leftpanel-collapsed')) {
            if (sub.is(':visible')) {
                sub.slideUp(200, function() {
                    parent.removeClass('nav-active');
                    jQuery('.mainpanel').css({height: ''});
                    adjustmainpanelheight();
                });

            }}})
   
   // Toggle Left Menu
   jQuery(document).on('click','#Employee_is_empty label', function() {
       
       if(jQuery(this).attr("for")=="Employee_is_empty_0"){
           jQuery("#employee-grid-1").hide();
           jQuery("#employee-grid-2").hide();
           jQuery("#employee-grid-4").hide();
           jQuery("#employee-grid-col").hide();
           jQuery(".empty_field").hide();
       }else{
           jQuery("#employee-grid-1").show(); 
           jQuery("#employee-grid-2").show(); 
           jQuery("#employee-grid-4").show(); 
                      jQuery("#employee-grid-col").show();
                      jQuery(".empty_field").show();

       }
   })
   jQuery('.leftpanel .nav-parent > a').live('click', function() {
      
      var parent = jQuery(this).parent();
      var sub = parent.find('> ul');
      
      // Dropdown works only when leftpanel is not collapsed
      if(!jQuery('body').hasClass('leftpanel-collapsed')) {
         if(sub.is(':visible')) {
            sub.slideUp(200, function(){
               parent.removeClass('nav-active');
               jQuery('.mainpanel').css({height: ''});
               adjustmainpanelheight();
            });
         } else {
            closeVisibleSubMenu();
            parent.addClass('nav-active');
            sub.slideDown(200, function(){
               adjustmainpanelheight();
            });
         }
      }
      return false;
   });
   
   function closeVisibleSubMenu() {
      jQuery('.leftpanel .nav-parent').each(function() {
         var t = jQuery(this);
         if(t.hasClass('nav-active')) {
            t.find('> ul').slideUp(200, function(){
               t.removeClass('nav-active');
            });
         }
      });
   }
   
   function adjustmainpanelheight() {
      // Adjust mainpanel height
      var docHeight = jQuery(document).height();
      if(docHeight > jQuery('.mainpanel').height())
         jQuery('.mainpanel').height(docHeight);
   }
   adjustmainpanelheight();
   
   
   // Tooltip
   jQuery('.tooltips').tooltip({ container: 'body'});
   
   // Popover
   jQuery('.popovers').popover();
   
   // Close Button in Panels
   jQuery('.panel .panel-close').click(function(){
      jQuery(this).closest('.panel').fadeOut(200);
      return false;
   });
   
   // Form Toggles
   jQuery('.toggle').toggles({on: true});
   
   jQuery('.toggle-chat1').toggles({on: false});
   
   // Sparkline
   jQuery('#sidebar-chart').sparkline([4,3,3,1,4,3,2,2,3,10,9,6], {
	  type: 'bar', 
	  height:'30px',
      barColor: '#428BCA'
   });
   
   jQuery('#sidebar-chart2').sparkline([1,3,4,5,4,10,8,5,7,6,9,3], {
	  type: 'bar', 
	  height:'30px',
      barColor: '#D9534F'
   });
   
   jQuery('#sidebar-chart3').sparkline([5,9,3,8,4,10,8,5,7,6,9,3], {
	  type: 'bar', 
	  height:'30px',
      barColor: '#1CAF9A'
   });
   
   jQuery('#sidebar-chart4').sparkline([4,3,3,1,4,3,2,2,3,10,9,6], {
	  type: 'bar', 
	  height:'30px',
      barColor: '#428BCA'
   });
   
   jQuery('#sidebar-chart5').sparkline([1,3,4,5,4,10,8,5,7,6,9,3], {
	  type: 'bar', 
	  height:'30px',
      barColor: '#F0AD4E'
   });
   
   
   // Minimize Button in Panels
   jQuery('.minimize').click(function(){
      var t = jQuery(this);
      var p = t.closest('.panel');
      if(!jQuery(this).hasClass('maximize')) {
         p.find('.panel-body, .panel-footer').slideUp(200);
         t.addClass('maximize');
         t.html('&plus;');
      } else {
         p.find('.panel-body, .panel-footer').slideDown(200);
         t.removeClass('maximize');
         t.html('&minus;');
      }
      return false;
   });
   
   
   // Add class everytime a mouse pointer hover over it
   jQuery('.nav-bracket > li').hover(function(){
      jQuery(this).addClass('nav-hover');
   }, function(){
      jQuery(this).removeClass('nav-hover');
   });
   
   
  

    function closeVisibleSubMenu() {
        jQuery('.leftpanel .nav-parent').each(function() {
            var t = jQuery(this);
            if (t.hasClass('nav-active')) {
                t.find('> ul').slideUp(200, function() {
                    t.removeClass('nav-active');
                });
            }
        });
    }

    function adjustmainpanelheight() {
        // Adjust mainpanel height
        var docHeight = jQuery(document).height();
        if (docHeight > jQuery('.mainpanel').height())
            jQuery('.mainpanel').height(docHeight);
    }
    adjustmainpanelheight();


    // Tooltip
    jQuery('.tooltips').tooltip({container: 'body'});

    // Popover
    jQuery('.popovers').popover();

    // Close Button in Panels
    jQuery('.panel .panel-close').click(function() {
        jQuery(this).closest('.panel').fadeOut(200);
        return false;
    });

    // Form Toggles
    jQuery('.toggle').toggles({on: true});

    jQuery('.toggle-chat1').toggles({on: false});

    // Sparkline
    jQuery('#sidebar-chart').sparkline([4, 3, 3, 1, 4, 3, 2, 2, 3, 10, 9, 6], {
        type: 'bar',
        height: '30px',
        barColor: '#428BCA'
    });

    jQuery('#sidebar-chart2').sparkline([1, 3, 4, 5, 4, 10, 8, 5, 7, 6, 9, 3], {
        type: 'bar',
        height: '30px',
        barColor: '#D9534F'
    });

    jQuery('#sidebar-chart3').sparkline([5, 9, 3, 8, 4, 10, 8, 5, 7, 6, 9, 3], {
        type: 'bar',
        height: '30px',
        barColor: '#1CAF9A'
    });

    jQuery('#sidebar-chart4').sparkline([4, 3, 3, 1, 4, 3, 2, 2, 3, 10, 9, 6], {
        type: 'bar',
        height: '30px',
        barColor: '#428BCA'
    });

    jQuery('#sidebar-chart5').sparkline([1, 3, 4, 5, 4, 10, 8, 5, 7, 6, 9, 3], {
        type: 'bar',
        height: '30px',
        barColor: '#F0AD4E'
    });


    // Minimize Button in Panels
    jQuery('.minimize').click(function() {
        var t = jQuery(this);
        var p = t.closest('.panel');
        if (!jQuery(this).hasClass('maximize')) {
            p.find('.panel-body, .panel-footer').slideUp(200);
            t.addClass('maximize');
            t.html('&plus;');
        } else {
            p.find('.panel-body, .panel-footer').slideDown(200);
            t.removeClass('maximize');
            t.html('&minus;');
        }
        return false;
    });


    // Add class everytime a mouse pointer hover over it
    jQuery('.nav-bracket > li').hover(function() {
        jQuery(this).addClass('nav-hover');
    }, function() {
        jQuery(this).removeClass('nav-hover');
    });


    // Menu Toggle
    jQuery('.menutoggle').click(function() {

        var body = jQuery('body');
        var bodypos = body.css('position');

        if (bodypos != 'relative') {

            if (!body.hasClass('leftpanel-collapsed')) {
                body.addClass('leftpanel-collapsed');
                jQuery('.nav-bracket ul').attr('style', '');

                jQuery(this).addClass('menu-collapsed');

            } else {
                body.removeClass('leftpanel-collapsed chat-view');
                jQuery('.nav-bracket li.active ul').css({display: 'block'});

                jQuery(this).removeClass('menu-collapsed');

            }
        } else {

            if (body.hasClass('leftpanel-show'))
                body.removeClass('leftpanel-show');
            else
                body.addClass('leftpanel-show');

            adjustmainpanelheight();
        }

    });

    // Chat View
    jQuery('#chatview').click(function() {

        var body = jQuery('body');
        var bodypos = body.css('position');

        if (bodypos != 'relative') {

            if (!body.hasClass('chat-view')) {
                body.addClass('leftpanel-collapsed chat-view');
                jQuery('.nav-bracket ul').attr('style', '');

            } else {

                body.removeClass('chat-view');

                if (!jQuery('.menutoggle').hasClass('menu-collapsed')) {
                    jQuery('body').removeClass('leftpanel-collapsed');
                    jQuery('.nav-bracket li.active ul').css({display: 'block'});
                } else {

                }
            }

        } else {

            if (!body.hasClass('chat-relative-view')) {

                body.addClass('chat-relative-view');
                body.css({left: ''});

            } else {
                body.removeClass('chat-relative-view');
            }
        }

    });

    reposition_topnav();
    reposition_searchform();

    jQuery(window).resize(function() {

        if (jQuery('body').css('position') == 'relative') {

            jQuery('body').removeClass('leftpanel-collapsed chat-view');

        } else {

            jQuery('body').removeClass('chat-relative-view');
            jQuery('body').css({left: '', marginRight: ''});
        }

        reposition_searchform();
        reposition_topnav();

    });



    /* This function will reposition search form to the left panel when viewed
     * in screens smaller than 767px and will return to top when viewed higher
     * than 767px
     */
    function reposition_searchform() {
        if (jQuery('.searchform').css('position') == 'relative') {
            jQuery('.searchform').insertBefore('.leftpanelinner .userlogged');
        } else {
            jQuery('.searchform').insertBefore('.header-right');
        }
    }



    /* This function allows top navigation menu to move to left navigation menu
     * when viewed in screens lower than 1024px and will move it back when viewed
     * higher than 1024px
     */
    function reposition_topnav() {
        if (jQuery('.nav-horizontal').length > 0) {

            // top navigation move to left nav
            // .nav-horizontal will set position to relative when viewed in screen below 1024
            if (jQuery('.nav-horizontal').css('position') == 'relative') {

                if (jQuery('.leftpanel .nav-bracket').length == 2) {
                    jQuery('.nav-horizontal').insertAfter('.nav-bracket:eq(1)');
                } else {
                    // only add to bottom if .nav-horizontal is not yet in the left panel
                    if (jQuery('.leftpanel .nav-horizontal').length == 0)
                        jQuery('.nav-horizontal').appendTo('.leftpanelinner');
                }

                jQuery('.nav-horizontal').css({display: 'block'})
                        .addClass('nav-pills nav-stacked nav-bracket');

                jQuery('.nav-horizontal .children').removeClass('dropdown-menu');
                jQuery('.nav-horizontal > li').each(function() {

                    jQuery(this).removeClass('open');
                    jQuery(this).find('a').removeAttr('class');
                    jQuery(this).find('a').removeAttr('data-toggle');

                });

                if (jQuery('.nav-horizontal li:last-child').has('form')) {
                    jQuery('.nav-horizontal li:last-child form').addClass('searchform').appendTo('.topnav');
                    jQuery('.nav-horizontal li:last-child').hide();
                }

            } else {
                // move nav only when .nav-horizontal is currently from leftpanel
                // that is viewed from screen size above 1024
                if (jQuery('.leftpanel .nav-horizontal').length > 0) {

                    jQuery('.nav-horizontal').removeClass('nav-pills nav-stacked nav-bracket')
                            .appendTo('.topnav');
                    jQuery('.nav-horizontal .children').addClass('dropdown-menu').removeAttr('style');
                    jQuery('.nav-horizontal li:last-child').show();
                    jQuery('.searchform').removeClass('searchform').appendTo('.nav-horizontal li:last-child .dropdown-menu');
                    jQuery('.nav-horizontal > li > a').each(function() {

                        jQuery(this).parent().removeClass('nav-active');

                        if (jQuery(this).parent().find('.dropdown-menu').length > 0) {
                            jQuery(this).attr('class', 'dropdown-toggle');
                            jQuery(this).attr('data-toggle', 'dropdown');
                        }

                    });
                }

            }

        }
    }


    // Sticky Header
    if (jQuery.cookie('sticky-header'))
        jQuery('body').addClass('stickyheader');

    // Sticky Left Panel
    if (jQuery.cookie('sticky-leftpanel')) {
        jQuery('body').addClass('stickyheader');
        jQuery('.leftpanel').addClass('sticky-leftpanel');
    }

    // Left Panel Collapsed
    if (jQuery.cookie('leftpanel-collapsed')) {
        jQuery('body').addClass('leftpanel-collapsed');
        jQuery('.menutoggle').addClass('menu-collapsed');
    }

    // Changing Skin
    var c = jQuery.cookie('change-skin');
    if (c) {
        jQuery('head').append('<link id="skinswitch" rel="stylesheet" href="css/style.' + c + '.css" />');
    }

    // Changing Font
    var fnt = jQuery.cookie('change-font');
    if (fnt) {
        jQuery('head').append('<link id="fontswitch" rel="stylesheet" href="css/font.' + fnt + '.css" />');
    }

    // Check if leftpanel is collapsed
    if (jQuery('body').hasClass('leftpanel-collapsed'))
        jQuery('.nav-bracket .children').css({display: ''});


    // Handles form inside of dropdown 
    jQuery('.dropdown-menu').find('form').click(function(e) {
        e.stopPropagation();
    });



    jQuery.ajax({
        'url': "/dashboard/data/getcalls",
        'type': 'POST',
        'data': {},
        beforeSend: function() {

        },
        success: function(response) {

            myCalendar.setEvents(jQuery.parseJSON(response));

        }
    });
    jQuery(document).on('click', '#addCalender', function(e) {

        if (jQuery('#addCalenderForm').find('#calender-hidden-input').val() == "") {
            alert("من فضلك اختر التاريخ");
        } else {
            jQuery.ajax({
                'url': jQuery('#addCalenderForm').attr("action"),
                'type': 'POST',
                'data': {date: jQuery('#addCalenderForm').find('#calender-hidden-input').val(), text: jQuery('#addCalenderForm').find("#calender-hidden-text").val()},
                beforeSend: function() {
                    loader("show");
                },
                success: function(response) {
                    jQuery('#addCalenderForm').find("#calender-hidden-text").val("");
                    jQuery('.days-container .events-list').html(response);


                    myCalendar.setEvents(jQuery.parseJSON(response));
                    loader("hide");



                }
            });
        }
    });  jQuery(document).on('click', '#updateCalender', function(e) {

     
            jQuery.ajax({
                'url': jQuery('#addCalenderForm').attr("action"),
                'type': 'POST',
                'data': {date: jQuery('#addCalenderForm').find('#calender-hidden-input').val(),id: jQuery('#addCalenderForm').find('#calender-hidden-input-id').val(), text: jQuery('#addCalenderForm').find("#calender-hidden-text").val()},
                beforeSend: function() {
                    loader("show");
                },
                success: function(response) {
                    jQuery('#addCalenderForm').find("#calender-hidden-text").val("");
                    jQuery('.days-container .events-list').html(response);

                   $('#addCalender').show();
                   $('#updateCalender').hide();
                    myCalendar.setEvents(jQuery.parseJSON(response));
                    loader("hide");



                }
            });
        
    });
    jQuery(document).on('click', '.deleteCalender', function(e) {

     
            jQuery.ajax({
                'url': "/dashboard/data/deletecall",
                'type': 'POST',
                'data': {id: jQuery(this).data("id")},
                beforeSend: function() {
                    loader("show");
                },
                success: function(response) {
                    jQuery('#addCalenderForm').find("#calender-hidden-text").val("");
                    jQuery('.days-container .events-list').html(response);

                   $('#addCalender').show();
                   $('#updateCalender').hide();
                    myCalendar.setEvents(jQuery.parseJSON(response));
                    loader("hide");



                }
            });
        
    });

    jQuery(document).on('mouseover', '.table tr', function(e) {
        jQuery(this).parent().find("tr td").removeClass("tr-hover");
        jQuery(this).find("td").addClass("tr-hover");
    });

    jQuery(document).on('click', '.table tr', function(e) {
        // jQuery(this).parent().find("tr td").removeClass("tr-click");
        if (jQuery(this).hasClass("tr-click")) {
            jQuery(this).removeClass("tr-click").find("td").removeClass("tr-click");
        } else {
            jQuery(this).addClass("tr-click").find("td").addClass("tr-click");
        }

    });

    jQuery(document).on('change', '.search-form-ajax select', function(e) {
        jQuery(this).parent().submit();
    });

    var hash = window.location.hash.substring(1);
    if (hash != "") {
        ajax(hash, {});
    }

    // Bind the event.

    $(window).on('hashchange', function() {

        var hash = window.location.hash.substring(1);
     //   ajax(hash, {});
    });
    jQuery(document).on('submit', 'form', function(e) {

        e.preventDefault();
        ajax(jQuery(this).attr("action"), jQuery(this).serialize(), function() {
            after_ajax();
        },null,jQuery(this).data("target"));
    });
});

function ajax(url, data, fn, searchOb, div) {
    // var datahash="?";
    //  $.each(data,function(i,v){
    // datahash+=i+"="+v+"&";
    // })
    window.location.hash = url;
    if (url) {
        if (searchOb) {
            $.each(searchOb, function(k, v) {
                data[k] = v;
            })
        }
        var str = "";
        loader("show");
        jQuery.ajax({
            'url': url,
            'type': 'POST',
            'data': data,
            beforeSend: function() {
          
            },
            success: function(response) {
                if (div) {
                    jQuery(div).html(response);
                } else {
                    jQuery('.contentpanel').html(response);
                }
                loader("hide");
                if (fn) {
                    fn(response);
                }
            }
        });
    }
}


function del(url, data, fn) {
    jQuery('#delete_item_confirm').attr("checked", false).parent().removeClass("red-class");
    $("#delete-dialog-confirm").dialog({
        resizable: false,
        height: 140,
        modal: true,
        title: "شاشة تاكيد الحذف",
        width: 300,
        height:200,
                buttons: {
                    "حذف": function() {
                        if (jQuery('#delete_item_confirm').is(":checked")) {
                            $(this).dialog("close");

                            if (url) {
                                var str = "";
                                loader("show");
                                jQuery.ajax({
                                    'url': url,
                                    'type': 'POST',
                                    'data': data,
                                    beforeSend: function() {
                                    },
                                    success: function(response) {
                                        jQuery('.contentpanel').html(response);
                                        loader("hide");
                                        if (fn) {
                                            fn(response);
                                        }


                                    }
                                });

                            }
                        } else {
                            jQuery('#delete_item_confirm').parent().addClass("red-class");
                        }


                    },
                    "الغاء": function() {
                        $(this).dialog("close");
                    }
                }
    });

}

function loader(action) {
    if (action == 'show') {
        jQuery('.contentpanel').fadeTo("fast", .5);
        jQuery('#loader_area').append('<img src="/cdn/template/images/loaders/loader10.gif" class="loader" style="z-index: 1000; position:absolute;top:0px;left:0px;"  >');



    } else if (action == 'hide') {

        jQuery('.loader').remove();
        jQuery('.contentpanel').fadeTo("fast", 1);

    }
}


function after_ajax() {
    $('select.error').next().find('.chosen-single').addClass("back-red");
}