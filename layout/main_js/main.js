function checkFlash(){
	var flashinstalled=false;
	if(navigator.plugins){
		if(navigator.plugins["Shockwave Flash"]){
			flashinstalled=true
		} else if(navigator.plugins["Shockwave Flash 2.0"]){
			flashinstalled=true
		}
	} else if(navigator.mimeTypes){
		var x=navigator.mimeTypes['application/x-shockwave-flash'];
		if(x&&x.enabledPlugin){
			flashinstalled=true
		}
	} else {
		flashinstalled=true
	} return flashinstalled
}
jQuery('.closeBtn').live('click', function() {
	jQuery('.modalWindow').hide().remove();
	jQuery('.modalShadow').hide().remove();
});
jQuery('.modalShadow').live('click', function() {
	jQuery('.modalWindow').hide().remove();
	jQuery(this).hide().remove();
});
jQuery('a.video').live('click', function() {
	if ( !checkFlash() ) return true;
	if ( jQuery(this).width() < 640 ) jQuery(this).addClass('popup');
	if ( jQuery(this).hasClass('popup') ) {
		var width='640px';
		var height='390px';
	} else {
		var width=jQuery(this).find('img').width()+'px';
		var height=jQuery(this).find('img').height()+'px';
	}
	var video;
	switch(jQuery(this).attr('src')) {
		case 'vimeo':
			video=jQuery('<iframe>', {
				'src':'http://player.vimeo.com/video/'+jQuery(this).attr('alt'),
				'width':width,
				'height':height,
				'frameborder':'0',
				'webkitAllowFullScreen':'true',
				'mozallowfullscreen':'true',
				'allowFullScreen':'true'
			});
		break;
		case 'youtube':
			video=jQuery('<object>',{
				'width':width,
				'height':height
			}).append(jQuery('<param>',{
				'name':'movie',
				'value':'http://www.youtube.com/v/'+jQuery(this).attr('alt')+'?version=3',
			})).append(jQuery('<param>',{
				'name':'allowFullScreen',
				'value':'true',
			})).append(jQuery('<param>',{
				'name':'allowscriptaccess',
				'value':'always',
			})).append(jQuery('<embed>',{
				'src':'http://www.youtube.com/v/'+jQuery(this).attr('alt')+'?version=3',
				'type':'application/x-shockwave-flash',
				'width':width,
				'height':height,
				'allowscriptaccess':'always',
				'allowfullscreen':'true'
			}));
		break;
	}
	if ( jQuery(this).hasClass('popup') ) {
		var dlgBox=jQuery('<div>', {'class':'modalWindow'}).append(jQuery('<div>', {'class':'inner'})).append(jQuery('<div>', {'class':'manage'}).append(jQuery('<span>', {'class':'closeBtn'}).text('Close'))).appendTo('body');
		dlgBox.find('.inner').append(video);
		dlgBox.css({
			left:(jQuery('body').width()-dlgBox.width())/2,
			top:(jQuery(window).height()-dlgBox.height())/2
		}).show();
		jQuery('<div>', {'class':'modalShadow'}).appendTo('body').animate({opacity:0.3});
	} else {
		jQuery(this).replaceWith(video);
	}
	return false;
	
});

function ltgglMap(id, address, mtype, mzoom) {
	var latlng;
	geocoder=new google.maps.Geocoder();
	geocoder.geocode({'address':address},function(results,status){
		if(status==google.maps.GeocoderStatus.OK){
			latlng=results[0].geometry.location;
			var mapOptions = {
				zoom: parseInt(mzoom),
				center: latlng,
				mapTypeId: mtype
			};
			var map = new google.maps.Map(document.getElementById(id), mapOptions);
			var marker = new google.maps.Marker({map:map,position:latlng,title:address})
		}
	})
}
jQuery(document).ready(function() {
	jQuery('#header .menu').each(function() {
		var menu;
		menu = jQuery('<select>', {
			'class':'mobile-menu'
		}).append(jQuery('<option>').text('Select page'));
		jQuery('li', this).each(function() {
			menu.append(
				jQuery('<option>', {
					'value':jQuery('a:first', this).attr('href')
				}).text(jQuery('a:first', this).text())
			);
		});
		jQuery('#logo').after(menu);
	});
	
});
jQuery('.mobile-menu').live('change', function() {
	location.href=jQuery(this).val();
});