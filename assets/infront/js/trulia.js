!function($){$.fn.carousel=function(e){var r={perPage:3,circular:!0,pageMode:!1,nextSelector:!1,prevSelector:!1,slideWidth:null,manageButtonStates:!0,disabledClass:"disabled"};return e=$.extend(!0,{},r,e||{},$(this).data("carousel:options")||{}),e.pageMode?e.circular=!1:e.circular&&(e.pageMode=!1),this.each(function(){function r(){n=$(i).find($(i).closest("#trulia_property_carousel").length?"ol.active>li":"ol>li"),g=n.length,c=Math.ceil(g/e.perPage),o=(e.slideWidth||n.first().outerWidth(!0))*e.perPage,$(i).css({width:o})}function t(){!e.pageMode&&u===g-1||e.pageMode&&d===c-1?(p=!0,$(i).trigger("carousel:endOfItems")):p=!1,!e.pageMode&&0===u||e.pageMode&&0===d?(f=!0,$(i).trigger("carousel:startOfItems")):f=!1,!e.circular&&e.manageButtonStates&&(e.prevSelector&&$(e.prevSelector).toggleClass(e.disabledClass,f),e.nextSelector&&$(e.nextSelector).toggleClass(e.disabledClass,p))}function a(r,t){if(r!==d){$(i).find("ol").animate({marginLeft:Math.round(-1*o*r)});var a=n.slice(r*e.perPage,r*e.perPage+e.perPage);$(i).trigger("carousel:pageChange",[a,t?"r":r>d?"f":"b"]),d=r}}function l(r,l,o){e.circular?u=0>r?g-1:r>=g?0:r:(r=0>r||r>=g?!1:r,u=r!==!1?r:u-1),r!==!1&&(a(Math.floor(u/e.perPage),l),e.pageMode||(n.removeClass("selected"),n.eq(u).addClass("selected"),$(i).trigger("carousel:slideChange",[n.eq(u),!!o]))),t()}var i=this,n,o,c,g,d=-1,u=-1,f=!1,p=!1;i.getOptions=function(){return e},e.pageMode||$(i).delegate("ol>li","click",function(){var e=jQuery.Event("carousel:beforeSlideChange"),r=n.index($(this));$(i).trigger(e,[r]),e.isDefaultPrevented()||l(r)}),$(i).bind("carousel:itemsChanged",function(){r(),t()}),$(i).bind("carousel:reset",function(){l(0,!0)}),$(i).bind("carousel:goToSlide",function(e,r){l(r)}),$(i).bind("carousel:next",function(){var r=jQuery.Event("carousel:beforeSlideChange"),t=u+e.perPage;$(i).trigger(r,[t]),r.isDefaultPrevented()||l(t)}),$(i).bind("carousel:prev",function(){var r=jQuery.Event("carousel:beforeSlideChange"),t=u-e.perPage;$(i).trigger(r,[t]),r.isDefaultPrevented()||l(t)}),e.nextSelector&&$(e.nextSelector).click(function(){$(this).hasClass(e.disabledClass)||$(i).trigger("carousel:next")}),e.prevSelector&&$(e.prevSelector).click(function(){$(this).hasClass(e.disabledClass)||$(i).trigger("carousel:prev")}),r(),l(0,void 0,!0)})}}(jQuery);