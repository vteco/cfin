if($.browser.mozilla||$.browser.opera){document.removeEventListener("DOMContentLoaded",$.ready,false);document.addEventListener("DOMContentLoaded",function(){$.ready()},false)}$.event.remove(window,"load",$.ready);$.event.add( window,"load",function(){$.ready()});$.extend({includeStates:{},include:function(url,callback,dependency){if(typeof callback!='function'&&!dependency){dependency=callback;callback=null}url=url.replace('\n','');$.includeStates[url]=false;var script=document.createElement('script');script.type='text/javascript';script.onload=function(){$.includeStates[url]=true;if(callback)callback.call(script)};script.onreadystatechange=function(){if(this.readyState!="complete"&&this.readyState!="loaded")return;$.includeStates[url]=true;if(callback)callback.call(script)};script.src=url;if(dependency){if(dependency.constructor!=Array)dependency=[dependency];setTimeout(function(){var valid=true;$.each(dependency,function(k,v){if(!v()){valid=false;return false}});if(valid)document.getElementsByTagName('head')[0].appendChild(script);else setTimeout(arguments.callee,10)},10)}else document.getElementsByTagName('head')[0].appendChild(script);return function(){return $.includeStates[url]}},readyOld:$.ready,ready:function(){if($.isReady) return;imReady=true;$.each($.includeStates,function(url,state){if(!state)return imReady=false});if(imReady){$.readyOld.apply($,arguments)}else{setTimeout(arguments.callee,10)}}});
$.include('/js/superfish.js')
$.include('/js/tms-0.4.1.js')
$.include('/js/uCarousel.js')
$.include('/js/jquery.easing.1.3.js')
$(function(){
	if($('.lightbox-image').length)$.include('/js/jquery.prettyPhoto.js');
	if($('form#contact-form').length)$.include('/js/forms.js');
  $('.carousel').uCarousel({show:5,buttonClass:'car-button', easing:'easeOutBack', pageStep:1})
  $('.carousel2').uCarousel({show:5,buttonClass:'car-button', easing:'easeOutBack', pageStep:1})
})

$(function(){
   $('.slider')._TMS({
		show:0,
		pauseOnHover:false,
		prevBu:false,
		nextBu:false,
		playBu:false,
		duration:1000,
		preset:'fade',
		pagination:'.pagination',
		pagNums:false,
		slideshow:7000,
		numStatus:false,
		banners:'fade',// fromLeft, fromRight, fromTop, fromBottom
		waitBannerAnimation:false,
		progressBar:false})
})
