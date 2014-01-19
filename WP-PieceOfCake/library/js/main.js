$(window).ready(function () {
	$('body').hide();
	$('body').fadeIn(300);

	//LAZY LOAD SCRIPTS
	$('table').exists(function() {
		$.loadScript('assets/js/stackable-tables.js', true);
	});

    $('nav.applePie').easyPie();
    
    //Remove default wrapping div from menu
    $('nav ul').unwrap();

});
