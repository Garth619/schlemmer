jQuery(document).ready(function($){function e(e,n,t,o,c,u){var a=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(n).addClass(t),"function"==typeof c&&c.call()):u&&(jQuery(n).removeClass(t),"function"==typeof c&&c.call())},offset:o})}e("header_trigger",".second_sticky_menu","active","-100px",null,!0)});