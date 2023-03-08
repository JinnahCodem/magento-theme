define([
       'jquery',
       'jquery/ui',
       'mage/menu'],
   function($){
       $.widget('kiwicommerce.menu', $.mage.menu, {
           _init: function () {
               console.log("This message is from menu-custom.js");
           },
           toggle: function () {
               console.log("This message is from menu-custom.js");
           }
       });
       return $.kiwicommerce.menu;
   });
