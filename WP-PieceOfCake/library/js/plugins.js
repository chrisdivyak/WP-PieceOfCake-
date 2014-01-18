//SUCKERFISH MENU
startList=function(){if(document.all&&document.getElementById){navRoot=document.getElementById("nav");for(i=0;i<navRoot.childNodes.length;i++){node=navRoot.childNodes[i];if(node.nodeName=="LI"){node.onmouseover=function(){this.className+=" over"};node.onmouseout=function(){this.className=this.className.replace(" over","")}}}}};window.onload=startList


/*
 * jQuery Superfish Menu Plugin - v1.7.4
 * Copyright (c) 2013 Joel Birch
 *
 * Dual licensed under the MIT and GPL licenses:
 *	http://www.opensource.org/licenses/mit-license.php
 *	http://www.gnu.org/licenses/gpl.html
 */

;(function(e){"use strict";var s=function(){var s={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",menuArrowClass:"sf-arrows"},o=function(){var s=/iPhone|iPad|iPod/i.test(navigator.userAgent);return s&&e(window).load(function(){e("body").children().on("click",e.noop)}),s}(),n=function(){var e=document.documentElement.style;return"behavior"in e&&"fill"in e&&/iemobile/i.test(navigator.userAgent)}(),t=function(e,o){var n=s.menuClass;o.cssArrows&&(n+=" "+s.menuArrowClass),e.toggleClass(n)},i=function(o,n){return o.find("li."+n.pathClass).slice(0,n.pathLevels).addClass(n.hoverClass+" "+s.bcClass).filter(function(){return e(this).children(n.popUpSelector).hide().show().length}).removeClass(n.pathClass)},r=function(e){e.children("a").toggleClass(s.anchorClass)},a=function(e){var s=e.css("ms-touch-action");s="pan-y"===s?"auto":"pan-y",e.css("ms-touch-action",s)},l=function(s,t){var i="li:has("+t.popUpSelector+")";e.fn.hoverIntent&&!t.disableHI?s.hoverIntent(u,p,i):s.on("mouseenter.superfish",i,u).on("mouseleave.superfish",i,p);var r="MSPointerDown.superfish";o||(r+=" touchend.superfish"),n&&(r+=" mousedown.superfish"),s.on("focusin.superfish","li",u).on("focusout.superfish","li",p).on(r,"a",t,h)},h=function(s){var o=e(this),n=o.siblings(s.data.popUpSelector);n.length>0&&n.is(":hidden")&&(o.one("click.superfish",!1),"MSPointerDown"===s.type?o.trigger("focus"):e.proxy(u,o.parent("li"))())},u=function(){var s=e(this),o=d(s);clearTimeout(o.sfTimer),s.siblings().superfish("hide").end().superfish("show")},p=function(){var s=e(this),n=d(s);o?e.proxy(f,s,n)():(clearTimeout(n.sfTimer),n.sfTimer=setTimeout(e.proxy(f,s,n),n.delay))},f=function(s){s.retainPath=e.inArray(this[0],s.$path)>-1,this.superfish("hide"),this.parents("."+s.hoverClass).length||(s.onIdle.call(c(this)),s.$path.length&&e.proxy(u,s.$path)())},c=function(e){return e.closest("."+s.menuClass)},d=function(e){return c(e).data("sf-options")};return{hide:function(s){if(this.length){var o=this,n=d(o);if(!n)return this;var t=n.retainPath===!0?n.$path:"",i=o.find("li."+n.hoverClass).add(this).not(t).removeClass(n.hoverClass).children(n.popUpSelector),r=n.speedOut;s&&(i.show(),r=0),n.retainPath=!1,n.onBeforeHide.call(i),i.stop(!0,!0).animate(n.animationOut,r,function(){var s=e(this);n.onHide.call(s)})}return this},show:function(){var e=d(this);if(!e)return this;var s=this.addClass(e.hoverClass),o=s.children(e.popUpSelector);return e.onBeforeShow.call(o),o.stop(!0,!0).animate(e.animation,e.speed,function(){e.onShow.call(o)}),this},destroy:function(){return this.each(function(){var o,n=e(this),i=n.data("sf-options");return i?(o=n.find(i.popUpSelector).parent("li"),clearTimeout(i.sfTimer),t(n,i),r(o),a(n),n.off(".superfish").off(".hoverIntent"),o.children(i.popUpSelector).attr("style",function(e,s){return s.replace(/display[^;]+;?/g,"")}),i.$path.removeClass(i.hoverClass+" "+s.bcClass).addClass(i.pathClass),n.find("."+i.hoverClass).removeClass(i.hoverClass),i.onDestroy.call(n),n.removeData("sf-options"),void 0):!1})},init:function(o){return this.each(function(){var n=e(this);if(n.data("sf-options"))return!1;var h=e.extend({},e.fn.superfish.defaults,o),u=n.find(h.popUpSelector).parent("li");h.$path=i(n,h),n.data("sf-options",h),t(n,h),r(u),a(n),l(n,h),u.not("."+s.bcClass).superfish("hide",!0),h.onInit.call(this)})}}}();e.fn.superfish=function(o){return s[o]?s[o].apply(this,Array.prototype.slice.call(arguments,1)):"object"!=typeof o&&o?e.error("Method "+o+" does not exist on jQuery.fn.superfish"):s.init.apply(this,arguments)},e.fn.superfish.defaults={popUpSelector:"ul,.sf-mega",hoverClass:"sfHover",pathClass:"overrideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",cssArrows:!0,disableHI:!1,onInit:e.noop,onBeforeShow:e.noop,onShow:e.noop,onBeforeHide:e.noop,onHide:e.noop,onIdle:e.noop,onDestroy:e.noop},e.fn.extend({hideSuperfishUl:s.hide,showSuperfishUl:s.show})})(jQuery);

/**
 * hoverIntent is similar to jQuery's built-in "hover" method except that
 * instead of firing the handlerIn function immediately, hoverIntent checks
 * to see if the user's mouse has slowed down (beneath the sensitivity
 * threshold) before firing the event. The handlerOut function is only
 * called after a matching handlerIn.
 *
 * hoverIntent r7 // 2013.03.11 // jQuery 1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 * **/
(function(e){e.fn.hoverIntent=function(t,n,r){var i={interval:100,sensitivity:7,timeout:0};if(typeof t==="object"){i=e.extend(i,t)}else if(e.isFunction(n)){i=e.extend(i,{over:t,out:n,selector:r})}else{i=e.extend(i,{over:t,out:t,selector:n})}var s,o,u,a;var f=function(e){s=e.pageX;o=e.pageY};var l=function(t,n){n.hoverIntent_t=clearTimeout(n.hoverIntent_t);if(Math.abs(u-s)+Math.abs(a-o)<i.sensitivity){e(n).off("mousemove.hoverIntent",f);n.hoverIntent_s=1;return i.over.apply(n,[t])}else{u=s;a=o;n.hoverIntent_t=setTimeout(function(){l(t,n)},i.interval)}};var c=function(e,t){t.hoverIntent_t=clearTimeout(t.hoverIntent_t);t.hoverIntent_s=0;return i.out.apply(t,[e])};var h=function(t){var n=jQuery.extend({},t);var r=this;if(r.hoverIntent_t){r.hoverIntent_t=clearTimeout(r.hoverIntent_t)}if(t.type=="mouseenter"){u=n.pageX;a=n.pageY;e(r).on("mousemove.hoverIntent",f);if(r.hoverIntent_s!=1){r.hoverIntent_t=setTimeout(function(){l(n,r)},i.interval)}}else{e(r).off("mousemove.hoverIntent",f);if(r.hoverIntent_s==1){r.hoverIntent_t=setTimeout(function(){c(n,r)},i.timeout)}}};return this.on({"mouseenter.hoverIntent":h,"mouseleave.hoverIntent":h},i.selector)}})(jQuery)



/** Easy As Pie Responsive Navigation Plugin - Version 1.1

 https://github.com/chrisdivyak/EasyAsPie/
 
 The MIT License (MIT)

 * Copyright (c) 2013 Chris Divyak

 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:

 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.

 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
*/
;(function(e){e.fn.extend({easyPie:function(t){var n={icon:"+",navClass:"applePie",collapseClass:"pieCollapse",slideTop:true};var t=e.extend(n,t);return this.each(function(){function r(t){e("html,body").delay(500).animate({scrollTop:e(t).offset().top-48},"fast")}var n=t;if(e(window).width()>800){e("."+n.navClass).superfish({delay:0,speed:"fast"})}if(e(window).width()<800){e("li").find("ul").addClass(n.collapseClass);e("span").remove();e("ul."+n.collapseClass).before("<span>"+n.icon+"</span>")}e(window).on("resize",function(){if(e(window).width()<800){e("."+n.navClass+" li span").unbind("click").click(function(t){t.preventDefault();e(this).next().slideToggle(function(){e(this).parent().toggleClass("menuOpen")});if(n.slideTop==true){r(e(this));return false}else{return false}});e("."+n.navClass).superfish("destroy");if(e("."+n.navClass+" li span").length<1){e("."+n.navClass+" li > ul").before("<span>"+n.icon+"</span>")}if(e("."+n.navClass+" ul").is(":visible")){e("."+n.navClass+" ul:first").hide()}if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){e("."+n.navClass+" ul:first").show()}}if(e(window).width()>800){e("."+n.navClass+" ul:first").show();e("."+n.navClass).superfish({delay:0,speed:"fast"})}});e("."+n.navClass+" li span, .menubtn").unbind("click").click(function(t){t.preventDefault();e(this).next("ul").slideToggle(function(t){e(this).parent().toggleClass("menuOpen")});if(e("."+n.navClass+"ul:first").is(":visible")){e(".menubtn").addClass("menuOpen")}if(e("."+n.navClass+"ul:first").is(":hidden")){e(".menubtn").removeClass("menuOpen")}if(n.slideTop==true){r(e(this));return false}else{return false}})})}})})(jQuery)


// Tiny jQuery Plugin
// by Chris Goodchild - http://css-tricks.com/snippets/jquery/check-if-element-exists/
$.fn.exists=function(e){var t=[].slice.call(arguments,1);if(this.length){e.call(this,t)}return this}

//LOAD SCRIPT
//http://themergency.com/an-alternative-to-jquerys-getscript-function/
jQuery.loadScript=function(e,t,n){var r=false,i=null;if($.isFunction(t)){i=t;r=n||r}else{r=t||r;i=n||i}var s=true;jQuery('script[type="text/javascript"]').each(function(){return s=e!=$(this).attr("src")});if(s){jQuery.ajax({type:"GET",url:e,success:i,dataType:"script",cache:r})}else{if(jQuery.isFunction(i)){i.call(this)}}}


//*******STACKABLE TABLES**************//
// Run on window load in case images or other scripts affect element widths
$(window).on("load",function(){$("table").each(function(){var e=$(this);var t=$("<div />",{"class":"scrollable",html:"<div />"}).insertBefore(e);e.data("scrollWrapper",t);e.appendTo(t.find("div"));if(e.outerWidth()>e.parent().outerWidth()){e.data("scrollWrapper").addClass("has-scroll")}$(window).on("resize orientationchange",function(){if(e.outerWidth()>e.parent().outerWidth()){e.data("scrollWrapper").addClass("has-scroll")}else{e.data("scrollWrapper").removeClass("has-scroll")}})})})
