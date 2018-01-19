 
 var createWaypoint = function(selector, offsetVal, customFunc, reverse) {
    reverse = typeof reverse !== 'undefined' ? reverse: true
    offsetVal = typeof offsetVal !== 'undefined' ? offsetVal: "50%"
    selector.waypoint({
        handler: function(direction) {
            if (reverse === true) {

                if ( direction === 'down' ) {
                    selector.addClass('visible')
                    if(typeof customFunc === 'function' && customFunc) {
                        customFunc.call(this);
                    }
                } else {
                    selector.removeClass('visible')
                }

            } else {

                if ( direction === 'down' ) {
                    selector.addClass('visible')
                    if(typeof customFunc === 'function' && customFunc) {
                        customFunc.call(this);
                    }
                    this.destroy()
                }

            }
        },
        offset: offsetVal
    })
}



// document ready




	  






jQuery(document).ready(function($){
	
	
	
	
	
	



var waypoint = window.createWaypoint

var sectiontwo = $('#section_two')

waypoint(sectiontwo, '300px')


var sectionfour = $('#section_four')

waypoint(sectionfour, '300px')


	











function createWaypoint (triggerElementId, animatedElement, className, offsetVal, functionName, reverse) {
                var waypoint = new Waypoint({
                    element: document.getElementById(triggerElementId),
                    handler: function(direction) {
                        if (direction === 'down') {
                            jQuery(animatedElement).addClass(className);

                            if(typeof functionName === 'function') {
                                functionName.call();
                            }
                        }

                        else {

                            if(reverse) {
                                jQuery(animatedElement).removeClass(className);

                                if(typeof functionName === 'function') {
                                    functionName.call();
                                }
                            }

                        }
                    },
                    offset: offsetVal
                    // Integer or percent
                    // 500 means when element is 500px from the top of the page, the event triggers
                    // 50% means when element is 50% from the top of the page, the event triggers
                });
            }

            //Waypoint Instance - Add Class To Element
            //Template -> createWaypoint("id-name", ".class-name", "class-to-be-added", offset-value, null, true);
            //Example -> createWaypoint("section-2", ".section-2-orange-dot", "section-2-orange-dot-active", 500, null, true);

            //Waypoint Instance - Call Function
            //Template -> createWaypoint("id-name", null, null, null, function-name, true);
            //Example -> createWaypoint("section-2", null, null, null, test, true);





							createWaypoint("section_two", ".sticky_get_started_tab_wrapper", "active", "300px", null, true);
							
							createWaypoint("footer_trigger", ".sticky_get_started_tab_wrapper", "close", "500px", null, true);
							
							
							
							createWaypoint("section_two", ".second_sticky_menu", "active", "3%", null, true);
							






	
	



}); // Document Ready






 