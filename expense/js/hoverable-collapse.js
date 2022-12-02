/*------------------------------------------------------------------
Project Name: 	Cyber Cafe Management System in PHP and MySql
Theme URI: 	https://phpstartup.com/
Description: 	Best PHP project for Cyber Cafe Management System
Version: 	1
Author: 	Nitin Kumar
Text Domain:    phpstartup.com
Tags: Cyber Cafe Management System in PHP and MySql
-------------------------------------------------------------------*/


(function($) {
    'use strict';
    //Open submenu on hover in compact sidebar mode 
    $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function(ev) {
      var body = $('body');
      var sidebarIconOnly = body.hasClass("sidebar-icon-only");
      var sidebarFixed = body.hasClass("sidebar-fixed");
      if (!('ontouchstart' in document.documentElement)) {
        if (sidebarIconOnly) {
          if (sidebarFixed) {
            if (ev.type === 'mouseenter') {
              body.removeClass('sidebar-icon-only');
            }
          } else {
            var $menuItem = $(this);
            if (ev.type === 'mouseenter') {
              $menuItem.addClass('hover-open')
            } else {
              $menuItem.removeClass('hover-open')
            }
          }
        }
      }
    });
  })(jQuery);