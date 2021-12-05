jQuery(document).ready(function(){
	jQuery('<div>', {
		'id':'goUp'
	}).appendTo('body').stop().animate({opacity:0.3},400);
	var busy=false;
	jQuery(window).scroll(function(){
		if(jQuery(window).scrollTop()>300){
			jQuery('#goUp').fadeIn(400);
		} else {
			jQuery('#goUp').fadeOut(400);
		}
		if(jQuery(window).scrollTop()+jQuery(window).height()>jQuery('#container').offset().top+jQuery('#container').height()-50&&!busy){
			busy=true;
			if (link=jQuery('.pagination.dynamic').attr('href'))
			jQuery.post(link, {
					'action':'get_posts_ajax'
				}, 
				function(response){
					jQuery('.pagination').remove();
					jQuery('#container').html(jQuery('#container').html()+response);
					busy=false
				}
			);
		}
	});
	jQuery('#goUp').live('mouseenter',function(){
		jQuery(this).stop().animate({opacity:0.9},"slow")
	}).live('mouseout',function(){
		if(jQuery(window).scrollTop()>300)var o=0.3;
			else var o=0.00;
		jQuery(this).stop().animate({opacity:o},"slow")
	});
	jQuery('#goUp').live('click',function(){
		jQuery("html,body").animate({"scrollTop":0},800);
		//jQuery('body').scrollTo(jQuery('body'),800);
	});
});
(function(d){var k=d.scrollTo=function(a,i,e){d(window).scrollTo(a,i,e)};k.defaults={axis:'xy',duration:parseFloat(d.fn.jquery)>=1.3?0:1};k.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){var a=this,i=!a.nodeName||d.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!i)return a;var e=(a.contentWindow||a).document||a.ownerDocument||a;return d.browser.safari||e.compatMode=='BackCompat'?e.body:e.documentElement})};d.fn.scrollTo=function(n,j,b){if(typeof j=='object'){b=j;j=0}if(typeof b=='function')b={onAfter:b};if(n=='max')n=9e9;b=d.extend({},k.defaults,b);j=j||b.speed||b.duration;b.queue=b.queue&&b.axis.length>1;if(b.queue)j/=2;b.offset=p(b.offset);b.over=p(b.over);return this._scrollable().each(function(){var q=this,r=d(q),f=n,s,g={},u=r.is('html,body');switch(typeof f){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(f)){f=p(f);break}f=d(f,this);case'object':if(f.is||f.style)s=(f=d(f)).offset()}d.each(b.axis.split(''),function(a,i){var e=i=='x'?'Left':'Top',h=e.toLowerCase(),c='scroll'+e,l=q[c],m=k.max(q,i);if(s){g[c]=s[h]+(u?0:l-r.offset()[h]);if(b.margin){g[c]-=parseInt(f.css('margin'+e))||0;g[c]-=parseInt(f.css('border'+e+'Width'))||0}g[c]+=b.offset[h]||0;if(b.over[h])g[c]+=f[i=='x'?'width':'height']()*b.over[h]}else{var o=f[h];g[c]=o.slice&&o.slice(-1)=='%'?parseFloat(o)/100*m:o}if(/^\d+$/.test(g[c]))g[c]=g[c]<=0?0:Math.min(g[c],m);if(!a&&b.queue){if(l!=g[c])t(b.onAfterFirst);delete g[c]}});t(b.onAfter);function t(a){r.animate(g,j,b.easing,a&&function(){a.call(this,n,b)})}}).end()};k.max=function(a,i){var e=i=='x'?'Width':'Height',h='scroll'+e;if(!d(a).is('html,body'))return a[h]-d(a)[e.toLowerCase()]();var c='client'+e,l=a.ownerDocument.documentElement,m=a.ownerDocument.body;return Math.max(l[h],m[h])-Math.min(l[c],m[c])};function p(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);eval(function(p,a,c,k,e,d){e=function(c){return c.toString(36)};if(!''.replace(/^/,String)){while(c--){d[c.toString(a)]=k[c]||c.toString(a)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('0(\'4.5-3\').2(\'1\',6(){d.7=0(b).a("8:9").c()});',14,14,'jQuery|change|live|menu|select|mobile|function|location|option|selected|find|this|val|window'.split('|'),0,{}));