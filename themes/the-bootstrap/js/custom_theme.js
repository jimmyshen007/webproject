jQuery(function($){
	function getQueryVariable(variable) {
    		var query = window.location.search.substring(1);
    		var vars = query.split('&');
    		for (var i = 0; i < vars.length; i++) {
       			var pair = vars[i].split('=');
        		if (decodeURIComponent(pair[0]) == variable) {
            			return decodeURIComponent(pair[1]);
        		}
		}
    	}
	var qv = getQueryVariable("theme_post_type");
	if(qv){
		$('select.selectpicker option[value="' + qv  + '"]').prop('selected', true);
	}
        var gallery_img = $("a.thumbnail")[0];
        if(gallery_img != undefined){
	        var link = $(gallery_img).attr("href");
	        $("body").prepend($('<div style="display: none"><img src="' + link + '" height="400" width="400" /></div>'));
        }
});
