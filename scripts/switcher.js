$(window).load(function(){
  
$('#open').click(

    function(){
        jQuery('#switcher').animate({ 'left': '0px' }, 200, 'linear');
        jQuery(this).css("z-index", "20002");
        jQuery('#close').css("z-index", "20003");
        return false;
        });

$('#close').click(

    function(){
        jQuery('#switcher').animate({ 'left': '-191px' }, 200, 'linear');
        jQuery(this).css("z-index", "20002");
        jQuery('#open').css("z-index", "20003");
        return false;
        });

if (window.addEventListener) {
window.addEventListener('unload', function() {}, false);
}

/* ADD TOOLTIPS */
$("#pattern1").tipTip({ delay: 0, content: 'pattern1.png' });
$("#pattern2").tipTip({ delay: 0, content: 'pattern2.png' });
$("#pattern3").tipTip({ delay: 0, content: 'pattern3.png' });
$("#pattern4").tipTip({ delay: 0, content: 'pattern4.png' });
$("#pattern5").tipTip({ delay: 0, content: 'pattern5.png' });
$("#pattern6").tipTip({ delay: 0, content: 'pattern6.png' });
$("#pattern7").tipTip({ delay: 0, content: 'pattern7.png' });
$("#pattern8").tipTip({ delay: 0, content: 'pattern8.png' });
$("#pattern9").tipTip({ delay: 0, content: 'pattern9.png' });
$("#pattern10").tipTip({ delay: 0, content: 'pattern10.png' });
$("#pattern11").tipTip({ delay: 0, content: 'pattern11.png' });
$("#no_pattern").tipTip({ delay: 0, content: 'No pattern' });


/* COLORPICKER */
$('#background_color').ColorPicker({

        color: '#F8F8F8',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('body, div.title h2 span').css('backgroundColor', '#' + hex);
		$('#background_color').css('backgroundColor', '#' + hex);
	}

});

$('#menu_color').ColorPicker({

        color: '#272727',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('ul.menu li a, div#hidden_menu ul li a').css('color', '#' + hex);
		$('#menu_color').css('backgroundColor', '#' + hex);
		Cufon.refresh();
	}

});

$('#heading_color').ColorPicker({

        color: '#333',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('h1, h2, h3, h4, h5, h6, #intro').css('color', '#' + hex);
		$('#heading_color').css('backgroundColor', '#' + hex);
		Cufon.refresh();
	}

});

$('#body_color').ColorPicker({

        color: '#666',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
                return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('body').css('color', '#' + hex);
		$('#body_color, #about p, .services_intro p').css('backgroundColor', '#' + hex);
	}

});


$('#menu_font_family select').change(function(){

     var menu_font = this.options[this.selectedIndex].value;
     Cufon.replace('ul.menu li a, div#hidden_items ul li a',{ hover: true, fontFamily: menu_font });
     Cufon.refresh();

});

$('#menu_font_size select').change(function(){

     var menu_font_size = this.options[this.selectedIndex].value;
     $('ul.menu li a').css("font-size", menu_font_size);
     Cufon.refresh();

});

$('#section_font_family select').change(function(){

     var section_font = this.options[this.selectedIndex].value;
     Cufon.replace('div.title h2',{ hover: true, fontFamily: section_font });
     Cufon.refresh();

});

$(window).resize(function() { Cufon.refresh(); });


$('#heading_font_family select').change(function(){

     var heading_font = this.options[this.selectedIndex].value;
     $('link#heading_font').attr('href', 'http://fonts.googleapis.com/css?family=' + heading_font);
     var heading_font_style = this.options[this.selectedIndex].label;
     $('h1, h2, h3, h4, h5, h6, h1 a, h2 a,  h3 a, h4 a, h5 a, h6 a, #intro').css("font-family", heading_font_style);

});


});
