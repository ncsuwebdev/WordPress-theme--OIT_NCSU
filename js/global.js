// JavaScript Document
function clear_search(s) {if (s.defaultValue==s.value) s.value = ""}

jQuery(document).ready(function($) {
	
	adjustHeight();
			
});

function adjustHeight(group) {
    primHeight = jQuery('nav').height();
    contentHeight = jQuery('#content').height();
    if ( contentHeight > primHeight ) {
        jQuery('nav').height(contentHeight);
    }
}

