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
    $(function() {
      $('.file-upload-browse').on('click', function() {
        var file = $(this).parent().parent().parent().find('.file-upload-default');
        file.trigger('click');
      });
      $('.file-upload-default').on('change', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
      });
    });
  })(jQuery);