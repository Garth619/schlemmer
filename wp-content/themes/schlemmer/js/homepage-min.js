function createWaypoint(e,t,a,n,o,r){var c=new Waypoint({element:document.getElementById(e),handler:function(e){"down"===e?(jQuery(t).addClass(a),"function"==typeof o&&o.call()):r&&(jQuery(t).removeClass(a),"function"==typeof o&&o.call())},offset:n})}createWaypoint("section_two",".sticky_get_started_tab_wrapper","active","300px",null,!0),createWaypoint("footer_trigger",".sticky_get_started_tab_wrapper","close","500px",null,!0);