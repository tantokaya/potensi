/** vim: et:ts=4:sw=4:sts=4
 * @license RequireJS 2.1.15 Copyright (c) 2010-2014, The Dojo Foundation All Rights Reserved.
 * Available via the MIT or new BSD license.
 * see: http://github.com/jrburke/requirejs for details
 */

//     Underscore.js 1.4.4
//     http://underscorejs.org
//     (c) 2009-2013 Jeremy Ashkenas, DocumentCloud Inc.
//     Underscore may be freely distributed under the MIT license.

var requirejs,require,define;(function(global){function isFunction(e){return ostring.call(e)==="[object Function]"}function isArray(e){return ostring.call(e)==="[object Array]"}function each(e,t){if(e){var n;for(n=0;n<e.length;n+=1)if(e[n]&&t(e[n],n,e))break}}function eachReverse(e,t){if(e){var n;for(n=e.length-1;n>-1;n-=1)if(e[n]&&t(e[n],n,e))break}}function hasProp(e,t){return hasOwn.call(e,t)}function getOwn(e,t){return hasProp(e,t)&&e[t]}function eachProp(e,t){var n;for(n in e)if(hasProp(e,n)&&t(e[n],n))break}function mixin(e,t,n,r){return t&&eachProp(t,function(t,i){if(n||!hasProp(e,i))r&&typeof t=="object"&&t&&!isArray(t)&&!isFunction(t)&&!(t instanceof RegExp)?(e[i]||(e[i]={}),mixin(e[i],t,n,r)):e[i]=t}),e}function bind(e,t){return function(){return t.apply(e,arguments)}}function scripts(){return document.getElementsByTagName("script")}function defaultOnError(e){throw e}function getGlobal(e){if(!e)return e;var t=global;return each(e.split("."),function(e){t=t[e]}),t}function makeError(e,t,n,r){var i=new Error(t+"\nhttp://requirejs.org/docs/errors.html#"+e);return i.requireType=e,i.requireModules=r,n&&(i.originalError=n),i}function newContext(e){function m(e){var t,n;for(t=0;t<e.length;t++){n=e[t];if(n===".")e.splice(t,1),t-=1;else if(n===".."){if(t===0||t==1&&e[2]===".."||e[t-1]==="..")continue;t>0&&(e.splice(t-1,2),t-=2)}}}function g(e,t,n){var r,i,s,u,a,f,l,c,h,p,d,v,g=t&&t.split("/"),y=o.map,b=y&&y["*"];e&&(e=e.split("/"),l=e.length-1,o.nodeIdCompat&&jsSuffixRegExp.test(e[l])&&(e[l]=e[l].replace(jsSuffixRegExp,"")),e[0].charAt(0)==="."&&g&&(v=g.slice(0,g.length-1),e=v.concat(e)),m(e),e=e.join("/"));if(n&&y&&(g||b)){s=e.split("/");e:for(u=s.length;u>0;u-=1){f=s.slice(0,u).join("/");if(g)for(a=g.length;a>0;a-=1){i=getOwn(y,g.slice(0,a).join("/"));if(i){i=getOwn(i,f);if(i){c=i,h=u;break e}}}!p&&b&&getOwn(b,f)&&(p=getOwn(b,f),d=u)}!c&&p&&(c=p,h=d),c&&(s.splice(0,h,c),e=s.join("/"))}return r=getOwn(o.pkgs,e),r?r:e}function y(e){isBrowser&&each(scripts(),function(t){if(t.getAttribute("data-requiremodule")===e&&t.getAttribute("data-requirecontext")===r.contextName)return t.parentNode.removeChild(t),!0})}function b(e){var t=getOwn(o.paths,e);if(t&&isArray(t)&&t.length>1)return t.shift(),r.require.undef(e),r.makeRequire(null,{skipMap:!0})([e]),!0}function w(e){var t,n=e?e.indexOf("!"):-1;return n>-1&&(t=e.substring(0,n),e=e.substring(n+1,e.length)),[t,e]}function E(e,t,n,i){var s,o,u,a,f=null,l=t?t.name:null,h=e,p=!0,m="";return e||(p=!1,e="_@r"+(d+=1)),a=w(e),f=a[0],e=a[1],f&&(f=g(f,l,i),o=getOwn(c,f)),e&&(f?o&&o.normalize?m=o.normalize(e,function(e){return g(e,l,i)}):m=e.indexOf("!")===-1?g(e,l,i):e:(m=g(e,l,i),a=w(m),f=a[0],m=a[1],n=!0,s=r.nameToUrl(m))),u=f&&!o&&!n?"_unnormalized"+(v+=1):"",{prefix:f,name:m,parentMap:t,unnormalized:!!u,url:s,originalName:h,isDefine:p,id:(f?f+"!"+m:m)+u}}function S(e){var t=e.id,n=getOwn(u,t);return n||(n=u[t]=new r.Module(e)),n}function x(e,t,n){var r=e.id,i=getOwn(u,r);hasProp(c,r)&&(!i||i.defineEmitComplete)?t==="defined"&&n(c[r]):(i=S(e),i.error&&t==="error"?n(i.error):i.on(t,n))}function T(e,t){var n=e.requireModules,r=!1;t?t(e):(each(n,function(t){var n=getOwn(u,t);n&&(n.error=e,n.events.error&&(r=!0,n.emit("error",e)))}),r||req.onError(e))}function N(){globalDefQueue.length&&(apsp.apply(l,[l.length,0].concat(globalDefQueue)),globalDefQueue=[])}function C(e){delete u[e],delete a[e]}function k(e,t,n){var r=e.map.id;e.error?e.emit("error",e.error):(t[r]=!0,each(e.depMaps,function(r,i){var s=r.id,o=getOwn(u,s);o&&!e.depMatched[i]&&!n[s]&&(getOwn(t,s)?(e.defineDep(i,c[s]),e.check()):k(o,t,n))}),n[r]=!0)}function L(){var e,n,i=o.waitSeconds*1e3,u=i&&r.startTime+i<(new Date).getTime(),f=[],l=[],c=!1,h=!0;if(t)return;t=!0,eachProp(a,function(e){var t=e.map,r=t.id;if(!e.enabled)return;t.isDefine||l.push(e);if(!e.error)if(!e.inited&&u)b(r)?(n=!0,c=!0):(f.push(r),y(r));else if(!e.inited&&e.fetched&&t.isDefine){c=!0;if(!t.prefix)return h=!1}});if(u&&f.length)return e=makeError("timeout","Load timeout for modules: "+f,null,f),e.contextName=r.contextName,T(e);h&&each(l,function(e){k(e,{},{})}),(!u||n)&&c&&(isBrowser||isWebWorker)&&!s&&(s=setTimeout(function(){s=0,L()},50)),t=!1}function A(e){hasProp(c,e[0])||S(E(e[0],null,!0)).init(e[1],e[2])}function O(e,t,n,r){e.detachEvent&&!isOpera?r&&e.detachEvent(r,t):e.removeEventListener(n,t,!1)}function M(e){var t=e.currentTarget||e.srcElement;return O(t,r.onScriptLoad,"load","onreadystatechange"),O(t,r.onScriptError,"error"),{node:t,id:t&&t.getAttribute("data-requiremodule")}}function _(){var e;N();while(l.length){e=l.shift();if(e[0]===null)return T(makeError("mismatch","Mismatched anonymous define() module: "+e[e.length-1]));A(e)}}var t,n,r,i,s,o={waitSeconds:7,baseUrl:"./",paths:{},bundles:{},pkgs:{},shim:{},config:{}},u={},a={},f={},l=[],c={},h={},p={},d=1,v=1;return i={require:function(e){return e.require?e.require:e.require=r.makeRequire(e.map)},exports:function(e){e.usingExports=!0;if(e.map.isDefine)return e.exports?c[e.map.id]=e.exports:e.exports=c[e.map.id]={}},module:function(e){return e.module?e.module:e.module={id:e.map.id,uri:e.map.url,config:function(){return getOwn(o.config,e.map.id)||{}},exports:e.exports||(e.exports={})}}},n=function(e){this.events=getOwn(f,e.id)||{},this.map=e,this.shim=getOwn(o.shim,e.id),this.depExports=[],this.depMaps=[],this.depMatched=[],this.pluginMaps={},this.depCount=0},n.prototype={init:function(e,t,n,r){r=r||{};if(this.inited)return;this.factory=t,n?this.on("error",n):this.events.error&&(n=bind(this,function(e){this.emit("error",e)})),this.depMaps=e&&e.slice(0),this.errback=n,this.inited=!0,this.ignore=r.ignore,r.enabled||this.enabled?this.enable():this.check()},defineDep:function(e,t){this.depMatched[e]||(this.depMatched[e]=!0,this.depCount-=1,this.depExports[e]=t)},fetch:function(){if(this.fetched)return;this.fetched=!0,r.startTime=(new Date).getTime();var e=this.map;if(!this.shim)return e.prefix?this.callPlugin():this.load();r.makeRequire(this.map,{enableBuildCallback:!0})(this.shim.deps||[],bind(this,function(){return e.prefix?this.callPlugin():this.load()}))},load:function(){var e=this.map.url;h[e]||(h[e]=!0,r.load(this.map.id,e))},check:function(){if(!this.enabled||this.enabling)return;var e,t,n=this.map.id,i=this.depExports,s=this.exports,o=this.factory;if(!this.inited)this.fetch();else if(this.error)this.emit("error",this.error);else if(!this.defining){this.defining=!0;if(this.depCount<1&&!this.defined){if(isFunction(o)){if(this.events.error&&this.map.isDefine||req.onError!==defaultOnError)try{s=r.execCb(n,o,i,s)}catch(u){e=u}else s=r.execCb(n,o,i,s);this.map.isDefine&&s===undefined&&(t=this.module,t?s=t.exports:this.usingExports&&(s=this.exports));if(e)return e.requireMap=this.map,e.requireModules=this.map.isDefine?[this.map.id]:null,e.requireType=this.map.isDefine?"define":"require",T(this.error=e)}else s=o;this.exports=s,this.map.isDefine&&!this.ignore&&(c[n]=s,req.onResourceLoad&&req.onResourceLoad(r,this.map,this.depMaps)),C(n),this.defined=!0}this.defining=!1,this.defined&&!this.defineEmitted&&(this.defineEmitted=!0,this.emit("defined",this.exports),this.defineEmitComplete=!0)}},callPlugin:function(){var e=this.map,t=e.id,n=E(e.prefix);this.depMaps.push(n),x(n,"defined",bind(this,function(n){var i,s,a,f=getOwn(p,this.map.id),l=this.map.name,c=this.map.parentMap?this.map.parentMap.name:null,h=r.makeRequire(e.parentMap,{enableBuildCallback:!0});if(this.map.unnormalized){n.normalize&&(l=n.normalize(l,function(e){return g(e,c,!0)})||""),s=E(e.prefix+"!"+l,this.map.parentMap),x(s,"defined",bind(this,function(e){this.init([],function(){return e},null,{enabled:!0,ignore:!0})})),a=getOwn(u,s.id),a&&(this.depMaps.push(s),this.events.error&&a.on("error",bind(this,function(e){this.emit("error",e)})),a.enable());return}if(f){this.map.url=r.nameToUrl(f),this.load();return}i=bind(this,function(e){this.init([],function(){return e},null,{enabled:!0})}),i.error=bind(this,function(e){this.inited=!0,this.error=e,e.requireModules=[t],eachProp(u,function(e){e.map.id.indexOf(t+"_unnormalized")===0&&C(e.map.id)}),T(e)}),i.fromText=bind(this,function(n,s){var u=e.name,a=E(u),f=useInteractive;s&&(n=s),f&&(useInteractive=!1),S(a),hasProp(o.config,t)&&(o.config[u]=o.config[t]);try{req.exec(n)}catch(l){return T(makeError("fromtexteval","fromText eval for "+t+" failed: "+l,l,[t]))}f&&(useInteractive=!0),this.depMaps.push(a),r.completeLoad(u),h([u],i)}),n.load(e.name,h,i,o)})),r.enable(n,this),this.pluginMaps[n.id]=n},enable:function(){a[this.map.id]=this,this.enabled=!0,this.enabling=!0,each(this.depMaps,bind(this,function(e,t){var n,s,o;if(typeof e=="string"){e=E(e,this.map.isDefine?this.map:this.map.parentMap,!1,!this.skipMap),this.depMaps[t]=e,o=getOwn(i,e.id);if(o){this.depExports[t]=o(this);return}this.depCount+=1,x(e,"defined",bind(this,function(e){this.defineDep(t,e),this.check()})),this.errback&&x(e,"error",bind(this,this.errback))}n=e.id,s=u[n],!hasProp(i,n)&&s&&!s.enabled&&r.enable(e,this)})),eachProp(this.pluginMaps,bind(this,function(e){var t=getOwn(u,e.id);t&&!t.enabled&&r.enable(e,this)})),this.enabling=!1,this.check()},on:function(e,t){var n=this.events[e];n||(n=this.events[e]=[]),n.push(t)},emit:function(e,t){each(this.events[e],function(e){e(t)}),e==="error"&&delete this.events[e]}},r={config:o,contextName:e,registry:u,defined:c,urlFetched:h,defQueue:l,Module:n,makeModuleMap:E,nextTick:req.nextTick,onError:T,configure:function(e){e.baseUrl&&e.baseUrl.charAt(e.baseUrl.length-1)!=="/"&&(e.baseUrl+="/");var t=o.shim,n={paths:!0,bundles:!0,config:!0,map:!0};eachProp(e,function(e,t){n[t]?(o[t]||(o[t]={}),mixin(o[t],e,!0,!0)):o[t]=e}),e.bundles&&eachProp(e.bundles,function(e,t){each(e,function(e){e!==t&&(p[e]=t)})}),e.shim&&(eachProp(e.shim,function(e,n){isArray(e)&&(e={deps:e}),(e.exports||e.init)&&!e.exportsFn&&(e.exportsFn=r.makeShimExports(e)),t[n]=e}),o.shim=t),e.packages&&each(e.packages,function(e){var t,n;e=typeof e=="string"?{name:e}:e,n=e.name,t=e.location,t&&(o.paths[n]=e.location),o.pkgs[n]=e.name+"/"+(e.main||"main").replace(currDirRegExp,"").replace(jsSuffixRegExp,"")}),eachProp(u,function(e,t){!e.inited&&!e.map.unnormalized&&(e.map=E(t))}),(e.deps||e.callback)&&r.require(e.deps||[],e.callback)},makeShimExports:function(e){function t(){var t;return e.init&&(t=e.init.apply(global,arguments)),t||e.exports&&getGlobal(e.exports)}return t},makeRequire:function(t,n){function s(o,a,f){var l,h,p;return n.enableBuildCallback&&a&&isFunction(a)&&(a.__requireJsBuild=!0),typeof o=="string"?isFunction(a)?T(makeError("requireargs","Invalid require call"),f):t&&hasProp(i,o)?i[o](u[t.id]):req.get?req.get(r,o,t,s):(h=E(o,t,!1,!0),l=h.id,hasProp(c,l)?c[l]:T(makeError("notloaded",'Module name "'+l+'" has not been loaded yet for context: '+e+(t?"":". Use require([])")))):(_(),r.nextTick(function(){_(),p=S(E(null,t)),p.skipMap=n.skipMap,p.init(o,a,f,{enabled:!0}),L()}),s)}return n=n||{},mixin(s,{isBrowser:isBrowser,toUrl:function(e){var n,i=e.lastIndexOf("."),s=e.split("/")[0],o=s==="."||s==="..";return i!==-1&&(!o||i>1)&&(n=e.substring(i,e.length),e=e.substring(0,i)),r.nameToUrl(g(e,t&&t.id,!0),n,!0)},defined:function(e){return hasProp(c,E(e,t,!1,!0).id)},specified:function(e){return e=E(e,t,!1,!0).id,hasProp(c,e)||hasProp(u,e)}}),t||(s.undef=function(e){N();var n=E(e,t,!0),r=getOwn(u,e);y(e),delete c[e],delete h[n.url],delete f[e],eachReverse(l,function(t,n){t[0]===e&&l.splice(n,1)}),r&&(r.events.defined&&(f[e]=r.events),C(e))}),s},enable:function(e){var t=getOwn(u,e.id);t&&S(e).enable()},completeLoad:function(e){var t,n,r,i=getOwn(o.shim,e)||{},s=i.exports;N();while(l.length){n=l.shift();if(n[0]===null){n[0]=e;if(t)break;t=!0}else n[0]===e&&(t=!0);A(n)}r=getOwn(u,e);if(!t&&!hasProp(c,e)&&r&&!r.inited){if(o.enforceDefine&&(!s||!getGlobal(s))){if(b(e))return;return T(makeError("nodefine","No define call for "+e,null,[e]))}A([e,i.deps||[],i.exportsFn])}L()},nameToUrl:function(e,t,n){var i,s,u,a,f,l,c,h=getOwn(o.pkgs,e);h&&(e=h),c=getOwn(p,e);if(c)return r.nameToUrl(c,t,n);if(req.jsExtRegExp.test(e))f=e+(t||"");else{i=o.paths,s=e.split("/");for(u=s.length;u>0;u-=1){a=s.slice(0,u).join("/"),l=getOwn(i,a);if(l){isArray(l)&&(l=l[0]),s.splice(0,u,l);break}}f=s.join("/"),f+=t||(/^data\:|\?/.test(f)||n?"":".js"),f=(f.charAt(0)==="/"||f.match(/^[\w\+\.\-]+:/)?"":o.baseUrl)+f}return o.urlArgs?f+((f.indexOf("?")===-1?"?":"&")+o.urlArgs):f},load:function(e,t){req.load(r,e,t)},execCb:function(e,t,n,r){return t.apply(r,n)},onScriptLoad:function(e){if(e.type==="load"||readyRegExp.test((e.currentTarget||e.srcElement).readyState)){interactiveScript=null;var t=M(e);r.completeLoad(t.id)}},onScriptError:function(e){var t=M(e);if(!b(t.id))return T(makeError("scripterror","Script error for: "+t.id,e,[t.id]))}},r.require=r.makeRequire(),r}function getInteractiveScript(){return interactiveScript&&interactiveScript.readyState==="interactive"?interactiveScript:(eachReverse(scripts(),function(e){if(e.readyState==="interactive")return interactiveScript=e}),interactiveScript)}var req,s,head,baseElement,dataMain,src,interactiveScript,currentlyAddingScript,mainScript,subPath,version="2.1.15",commentRegExp=/(\/\*([\s\S]*?)\*\/|([^:]|^)\/\/(.*)$)/mg,cjsRequireRegExp=/[^.]\s*require\s*\(\s*["']([^'"\s]+)["']\s*\)/g,jsSuffixRegExp=/\.js$/,currDirRegExp=/^\.\//,op=Object.prototype,ostring=op.toString,hasOwn=op.hasOwnProperty,ap=Array.prototype,apsp=ap.splice,isBrowser=typeof window!="undefined"&&typeof navigator!="undefined"&&!!window.document,isWebWorker=!isBrowser&&typeof importScripts!="undefined",readyRegExp=isBrowser&&navigator.platform==="PLAYSTATION 3"?/^complete$/:/^(complete|loaded)$/,defContextName="_",isOpera=typeof opera!="undefined"&&opera.toString()==="[object Opera]",contexts={},cfg={},globalDefQueue=[],useInteractive=!1;if(typeof define!="undefined")return;if(typeof requirejs!="undefined"){if(isFunction(requirejs))return;cfg=requirejs,requirejs=undefined}typeof require!="undefined"&&!isFunction(require)&&(cfg=require,require=undefined),req=requirejs=function(e,t,n,r){var i,s,o=defContextName;return!isArray(e)&&typeof e!="string"&&(s=e,isArray(t)?(e=t,t=n,n=r):e=[]),s&&s.context&&(o=s.context),i=getOwn(contexts,o),i||(i=contexts[o]=req.s.newContext(o)),s&&i.configure(s),i.require(e,t,n)},req.config=function(e){return req(e)},req.nextTick=typeof setTimeout!="undefined"?function(e){setTimeout(e,4)}:function(e){e()},require||(require=req),req.version=version,req.jsExtRegExp=/^\/|:|\?|\.js$/,req.isBrowser=isBrowser,s=req.s={contexts:contexts,newContext:newContext},req({}),each(["toUrl","undef","defined","specified"],function(e){req[e]=function(){var t=contexts[defContextName];return t.require[e].apply(t,arguments)}}),isBrowser&&(head=s.head=document.getElementsByTagName("head")[0],baseElement=document.getElementsByTagName("base")[0],baseElement&&(head=s.head=baseElement.parentNode)),req.onError=defaultOnError,req.createNode=function(e,t,n){var r=e.xhtml?document.createElementNS("http://www.w3.org/1999/xhtml","html:script"):document.createElement("script");return r.type=e.scriptType||"text/javascript",r.charset="utf-8",r.async=!0,r},req.load=function(e,t,n){var r=e&&e.config||{},i;if(isBrowser)return i=req.createNode(r,t,n),i.setAttribute("data-requirecontext",e.contextName),i.setAttribute("data-requiremodule",t),i.attachEvent&&!(i.attachEvent.toString&&i.attachEvent.toString().indexOf("[native code")<0)&&!isOpera?(useInteractive=!0,i.attachEvent("onreadystatechange",e.onScriptLoad)):(i.addEventListener("load",e.onScriptLoad,!1),i.addEventListener("error",e.onScriptError,!1)),i.src=n,currentlyAddingScript=i,baseElement?head.insertBefore(i,baseElement):head.appendChild(i),currentlyAddingScript=null,i;if(isWebWorker)try{importScripts(n),e.completeLoad(t)}catch(s){e.onError(makeError("importscripts","importScripts failed for "+t+" at "+n,s,[t]))}},isBrowser&&!cfg.skipDataMain&&eachReverse(scripts(),function(e){head||(head=e.parentNode),dataMain=e.getAttribute("data-main");if(dataMain)return mainScript=dataMain,cfg.baseUrl||(src=mainScript.split("/"),mainScript=src.pop(),subPath=src.length?src.join("/")+"/":"./",cfg.baseUrl=subPath),mainScript=mainScript.replace(jsSuffixRegExp,""),req.jsExtRegExp.test(mainScript)&&(mainScript=dataMain),cfg.deps=cfg.deps?cfg.deps.concat(mainScript):[mainScript],!0}),define=function(e,t,n){var r,i;typeof e!="string"&&(n=t,t=e,e=null),isArray(t)||(n=t,t=null),!t&&isFunction(n)&&(t=[],n.length&&(n.toString().replace(commentRegExp,"").replace(cjsRequireRegExp,function(e,n){t.push(n)}),t=(n.length===1?["require"]:["require","exports","module"]).concat(t))),useInteractive&&(r=currentlyAddingScript||getInteractiveScript(),r&&(e||(e=r.getAttribute("data-requiremodule")),i=contexts[r.getAttribute("data-requirecontext")])),(i?i.defQueue:globalDefQueue).push([e,t,n])},define.amd={jQuery:!0},req.exec=function(text){return eval(text)},req(cfg)})(this),define("requirejs",function(){}),require.config({shim:{underscore:{exports:"_"},jquery:{exports:"$"},backbone:{exports:"Backbone",deps:["underscore"]},chart:{deps:["underscore"],exports:"Chart"}},paths:{underscore:"library/3rd_party/underscore/underscore-1.4.4",jquery:"library/3rd_party/jquery/jquery-1.7.2.min",backbone:"library/3rd_party/backbone/backbone-1.0.0",requirejs:"library/3rd_party/require/require",chart:"library/3rd_party/chart.js/chart",creditcard:"CreditCardForm",srp:"application/srp",pdp:"application/pdp",local:"application/local",local_info:"application/local_info",home_prices:"application/home_prices",reporting:"application/reporting",lead_inbox:"application/lead_inbox",collab:"application/collab",global_nav:"application/global_nav",lead_inbox_v1:"application/lead_inbox_v1",trulia_one_view:"application/trulia_one_view",trulia_pro:"application/trulia_pro",lenders:"application/lenders",mortgage_shortform:"application/mortgage/shortform",waitlist:"application/waitlist",rent_vs_buy:"application/rent_vs_buy",text:"library/3rd_party/require/plugins/text",tpl:"library/3rd_party/require/plugins/underscore-tpl",async:"library/3rd_party/require/plugins/async"}}),typeof jQuery=="function"&&define("jquery",function(){return jQuery}),typeof Backbone=="object"&&define("backbone",function(){return Backbone}),define("common",function(){}),function(){var e=this,t=e._,n={},r=Array.prototype,i=Object.prototype,s=Function.prototype,o=r.push,u=r.slice,a=r.concat,f=i.toString,l=i.hasOwnProperty,c=r.forEach,h=r.map,p=r.reduce,d=r.reduceRight,v=r.filter,m=r.every,g=r.some,y=r.indexOf,b=r.lastIndexOf,w=Array.isArray,E=Object.keys,S=s.bind,x=function(e){if(e instanceof x)return e;if(!(this instanceof x))return new x(e);this._wrapped=e};typeof exports!="undefined"?(typeof module!="undefined"&&module.exports&&(exports=module.exports=x),exports._=x):e._=x,x.VERSION="1.4.4";var T=x.each=x.forEach=function(e,t,r){if(e==null)return;if(c&&e.forEach===c)e.forEach(t,r);else if(e.length===+e.length){for(var i=0,s=e.length;i<s;i++)if(t.call(r,e[i],i,e)===n)return}else for(var o in e)if(x.has(e,o)&&t.call(r,e[o],o,e)===n)return};x.map=x.collect=function(e,t,n){var r=[];return e==null?r:h&&e.map===h?e.map(t,n):(T(e,function(e,i,s){r[r.length]=t.call(n,e,i,s)}),r)};var N="Reduce of empty array with no initial value";x.reduce=x.foldl=x.inject=function(e,t,n,r){var i=arguments.length>2;e==null&&(e=[]);if(p&&e.reduce===p)return r&&(t=x.bind(t,r)),i?e.reduce(t,n):e.reduce(t);T(e,function(e,s,o){i?n=t.call(r,n,e,s,o):(n=e,i=!0)});if(!i)throw new TypeError(N);return n},x.reduceRight=x.foldr=function(e,t,n,r){var i=arguments.length>2;e==null&&(e=[]);if(d&&e.reduceRight===d)return r&&(t=x.bind(t,r)),i?e.reduceRight(t,n):e.reduceRight(t);var s=e.length;if(s!==+s){var o=x.keys(e);s=o.length}T(e,function(u,a,f){a=o?o[--s]:--s,i?n=t.call(r,n,e[a],a,f):(n=e[a],i=!0)});if(!i)throw new TypeError(N);return n},x.find=x.detect=function(e,t,n){var r;return C(e,function(e,i,s){if(t.call(n,e,i,s))return r=e,!0}),r},x.filter=x.select=function(e,t,n){var r=[];return e==null?r:v&&e.filter===v?e.filter(t,n):(T(e,function(e,i,s){t.call(n,e,i,s)&&(r[r.length]=e)}),r)},x.reject=function(e,t,n){return x.filter(e,function(e,r,i){return!t.call(n,e,r,i)},n)},x.every=x.all=function(e,t,r){t||(t=x.identity);var i=!0;return e==null?i:m&&e.every===m?e.every(t,r):(T(e,function(e,s,o){if(!(i=i&&t.call(r,e,s,o)))return n}),!!i)};var C=x.some=x.any=function(e,t,r){t||(t=x.identity);var i=!1;return e==null?i:g&&e.some===g?e.some(t,r):(T(e,function(e,s,o){if(i||(i=t.call(r,e,s,o)))return n}),!!i)};x.contains=x.include=function(e,t){return e==null?!1:y&&e.indexOf===y?e.indexOf(t)!=-1:C(e,function(e){return e===t})},x.invoke=function(e,t){var n=u.call(arguments,2),r=x.isFunction(t);return x.map(e,function(e){return(r?t:e[t]).apply(e,n)})},x.pluck=function(e,t){return x.map(e,function(e){return e[t]})},x.where=function(e,t,n){return x.isEmpty(t)?n?null:[]:x[n?"find":"filter"](e,function(e){for(var n in t)if(t[n]!==e[n])return!1;return!0})},x.findWhere=function(e,t){return x.where(e,t,!0)},x.max=function(e,t,n){if(!t&&x.isArray(e)&&e[0]===+e[0]&&e.length<65535)return Math.max.apply(Math,e);if(!t&&x.isEmpty(e))return-Infinity;var r={computed:-Infinity,value:-Infinity};return T(e,function(e,i,s){var o=t?t.call(n,e,i,s):e;o>=r.computed&&(r={value:e,computed:o})}),r.value},x.min=function(e,t,n){if(!t&&x.isArray(e)&&e[0]===+e[0]&&e.length<65535)return Math.min.apply(Math,e);if(!t&&x.isEmpty(e))return Infinity;var r={computed:Infinity,value:Infinity};return T(e,function(e,i,s){var o=t?t.call(n,e,i,s):e;o<r.computed&&(r={value:e,computed:o})}),r.value},x.shuffle=function(e){var t,n=0,r=[];return T(e,function(e){t=x.random(n++),r[n-1]=r[t],r[t]=e}),r};var k=function(e){return x.isFunction(e)?e:function(t){return t[e]}};x.sortBy=function(e,t,n){var r=k(t);return x.pluck(x.map(e,function(e,t,i){return{value:e,index:t,criteria:r.call(n,e,t,i)}}).sort(function(e,t){var n=e.criteria,r=t.criteria;if(n!==r){if(n>r||n===void 0)return 1;if(n<r||r===void 0)return-1}return e.index<t.index?-1:1}),"value")};var L=function(e,t,n,r){var i={},s=k(t||x.identity);return T(e,function(t,o){var u=s.call(n,t,o,e);r(i,u,t)}),i};x.groupBy=function(e,t,n){return L(e,t,n,function(e,t,n){(x.has(e,t)?e[t]:e[t]=[]).push(n)})},x.countBy=function(e,t,n){return L(e,t,n,function(e,t){x.has(e,t)||(e[t]=0),e[t]++})},x.sortedIndex=function(e,t,n,r){n=n==null?x.identity:k(n);var i=n.call(r,t),s=0,o=e.length;while(s<o){var u=s+o>>>1;n.call(r,e[u])<i?s=u+1:o=u}return s},x.toArray=function(e){return e?x.isArray(e)?u.call(e):e.length===+e.length?x.map(e,x.identity):x.values(e):[]},x.size=function(e){return e==null?0:e.length===+e.length?e.length:x.keys(e).length},x.first=x.head=x.take=function(e,t,n){return e==null?void 0:t!=null&&!n?u.call(e,0,t):e[0]},x.initial=function(e,t,n){return u.call(e,0,e.length-(t==null||n?1:t))},x.last=function(e,t,n){return e==null?void 0:t!=null&&!n?u.call(e,Math.max(e.length-t,0)):e[e.length-1]},x.rest=x.tail=x.drop=function(e,t,n){return u.call(e,t==null||n?1:t)},x.compact=function(e){return x.filter(e,x.identity)};var A=function(e,t,n){return T(e,function(e){x.isArray(e)?t?o.apply(n,e):A(e,t,n):n.push(e)}),n};x.flatten=function(e,t){return A(e,t,[])},x.without=function(e){return x.difference(e,u.call(arguments,1))},x.uniq=x.unique=function(e,t,n,r){x.isFunction(t)&&(r=n,n=t,t=!1);var i=n?x.map(e,n,r):e,s=[],o=[];return T(i,function(n,r){if(t?!r||o[o.length-1]!==n:!x.contains(o,n))o.push(n),s.push(e[r])}),s},x.union=function(){return x.uniq(a.apply(r,arguments))},x.intersection=function(e){var t=u.call(arguments,1);return x.filter(x.uniq(e),function(e){return x.every(t,function(t){return x.indexOf(t,e)>=0})})},x.difference=function(e){var t=a.apply(r,u.call(arguments,1));return x.filter(e,function(e){return!x.contains(t,e)})},x.zip=function(){var e=u.call(arguments),t=x.max(x.pluck(e,"length")),n=new Array(t);for(var r=0;r<t;r++)n[r]=x.pluck(e,""+r);return n},x.object=function(e,t){if(e==null)return{};var n={};for(var r=0,i=e.length;r<i;r++)t?n[e[r]]=t[r]:n[e[r][0]]=e[r][1];return n},x.indexOf=function(e,t,n){if(e==null)return-1;var r=0,i=e.length;if(n){if(typeof n!="number")return r=x.sortedIndex(e,t),e[r]===t?r:-1;r=n<0?Math.max(0,i+n):n}if(y&&e.indexOf===y)return e.indexOf(t,n);for(;r<i;r++)if(e[r]===t)return r;return-1},x.lastIndexOf=function(e,t,n){if(e==null)return-1;var r=n!=null;if(b&&e.lastIndexOf===b)return r?e.lastIndexOf(t,n):e.lastIndexOf(t);var i=r?n:e.length;while(i--)if(e[i]===t)return i;return-1},x.range=function(e,t,n){arguments.length<=1&&(t=e||0,e=0),n=arguments[2]||1;var r=Math.max(Math.ceil((t-e)/n),0),i=0,s=new Array(r);while(i<r)s[i++]=e,e+=n;return s},x.bind=function(e,t){if(e.bind===S&&S)return S.apply(e,u.call(arguments,1));var n=u.call(arguments,2);return function(){return e.apply(t,n.concat(u.call(arguments)))}},x.partial=function(e){var t=u.call(arguments,1);return function(){return e.apply(this,t.concat(u.call(arguments)))}},x.bindAll=function(e){var t=u.call(arguments,1);return t.length===0&&(t=x.functions(e)),T(t,function(t){e[t]=x.bind(e[t],e)}),e},x.memoize=function(e,t){var n={};return t||(t=x.identity),function(){var r=t.apply(this,arguments);return x.has(n,r)?n[r]:n[r]=e.apply(this,arguments)}},x.delay=function(e,t){var n=u.call(arguments,2);return setTimeout(function(){return e.apply(null,n)},t)},x.defer=function(e){return x.delay.apply(x,[e,1].concat(u.call(arguments,1)))},x.throttle=function(e,t){var n,r,i,s,o=0,u=function(){o=new Date,i=null,s=e.apply(n,r)};return function(){var a=new Date,f=t-(a-o);return n=this,r=arguments,f<=0?(clearTimeout(i),i=null,o=a,s=e.apply(n,r)):i||(i=setTimeout(u,f)),s}},x.debounce=function(e,t,n){var r,i;return function(){var s=this,o=arguments,u=function(){r=null,n||(i=e.apply(s,o))},a=n&&!r;return clearTimeout(r),r=setTimeout(u,t),a&&(i=e.apply(s,o)),i}},x.once=function(e){var t=!1,n;return function(){return t?n:(t=!0,n=e.apply(this,arguments),e=null,n)}},x.wrap=function(e,t){return function(){var n=[e];return o.apply(n,arguments),t.apply(this,n)}},x.compose=function(){var e=arguments;return function(){var t=arguments;for(var n=e.length-1;n>=0;n--)t=[e[n].apply(this,t)];return t[0]}},x.after=function(e,t){return e<=0?t():function(){if(--e<1)return t.apply(this,arguments)}},x.keys=E||function(e){if(e!==Object(e))throw new TypeError("Invalid object");var t=[];for(var n in e)x.has(e,n)&&(t[t.length]=n);return t},x.values=function(e){var t=[];for(var n in e)x.has(e,n)&&t.push(e[n]);return t},x.pairs=function(e){var t=[];for(var n in e)x.has(e,n)&&t.push([n,e[n]]);return t},x.invert=function(e){var t={};for(var n in e)x.has(e,n)&&(t[e[n]]=n);return t},x.functions=x.methods=function(e){var t=[];for(var n in e)x.isFunction(e[n])&&t.push(n);return t.sort()},x.extend=function(e){return T(u.call(arguments,1),function(t){if(t)for(var n in t)e[n]=t[n]}),e},x.pick=function(e){var t={},n=a.apply(r,u.call(arguments,1));return T(n,function(n){n in e&&(t[n]=e[n])}),t},x.omit=function(e){var t={},n=a.apply(r,u.call(arguments,1));for(var i in e)x.contains(n,i)||(t[i]=e[i]);return t},x.defaults=function(e){return T(u.call(arguments,1),function(t){if(t)for(var n in t)e[n]==null&&(e[n]=t[n])}),e},x.clone=function(e){return x.isObject(e)?x.isArray(e)?e.slice():x.extend({},e):e},x.tap=function(e,t){return t(e),e};var O=function(e,t,n,r){if(e===t)return e!==0||1/e==1/t;if(e==null||t==null)return e===t;e instanceof x&&(e=e._wrapped),t instanceof x&&(t=t._wrapped);var i=f.call(e);if(i!=f.call(t))return!1;switch(i){case"[object String]":return e==String(t);case"[object Number]":return e!=+e?t!=+t:e==0?1/e==1/t:e==+t;case"[object Date]":case"[object Boolean]":return+e==+t;case"[object RegExp]":return e.source==t.source&&e.global==t.global&&e.multiline==t.multiline&&e.ignoreCase==t.ignoreCase}if(typeof e!="object"||typeof t!="object")return!1;var s=n.length;while(s--)if(n[s]==e)return r[s]==t;n.push(e),r.push(t);var o=0,u=!0;if(i=="[object Array]"){o=e.length,u=o==t.length;if(u)while(o--)if(!(u=O(e[o],t[o],n,r)))break}else{var a=e.constructor,l=t.constructor;if(a!==l&&!(x.isFunction(a)&&a instanceof a&&x.isFunction(l)&&l instanceof l))return!1;for(var c in e)if(x.has(e,c)){o++;if(!(u=x.has(t,c)&&O(e[c],t[c],n,r)))break}if(u){for(c in t)if(x.has(t,c)&&!(o--))break;u=!o}}return n.pop(),r.pop(),u};x.isEqual=function(e,t){return O(e,t,[],[])},x.isEmpty=function(e){if(e==null)return!0;if(x.isArray(e)||x.isString(e))return e.length===0;for(var t in e)if(x.has(e,t))return!1;return!0},x.isElement=function(e){return!!e&&e.nodeType===1},x.isArray=w||function(e){return f.call(e)=="[object Array]"},x.isObject=function(e){return e===Object(e)},T(["Arguments","Function","String","Number","Date","RegExp"],function(e){x["is"+e]=function(t){return f.call(t)=="[object "+e+"]"}}),x.isArguments(arguments)||(x.isArguments=function(e){return!!e&&!!x.has(e,"callee")}),typeof /./!="function"&&(x.isFunction=function(e){return typeof e=="function"}),x.isFinite=function(e){return isFinite(e)&&!isNaN(parseFloat(e))},x.isNaN=function(e){return x.isNumber(e)&&e!=+e},x.isBoolean=function(e){return e===!0||e===!1||f.call(e)=="[object Boolean]"},x.isNull=function(e){return e===null},x.isUndefined=function(e){return e===void 0},x.has=function(e,t){return l.call(e,t)},x.noConflict=function(){return e._=t,this},x.identity=function(e){return e},x.times=function(e,t,n){var r=Array(e);for(var i=0;i<e;i++)r[i]=t.call(n,i);return r},x.random=function(e,t){return t==null&&(t=e,e=0),e+Math.floor(Math.random()*(t-e+1))};var M={escape:{"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#x27;","/":"&#x2F;"}};M.unescape=x.invert(M.escape);var _={escape:new RegExp("["+x.keys(M.escape).join("")+"]","g"),unescape:new RegExp("("+x.keys(M.unescape).join("|")+")","g")};x.each(["escape","unescape"],function(e){x[e]=function(t){return t==null?"":(""+t).replace(_[e],function(t){return M[e][t]})}}),x.result=function(e,t){if(e==null)return null;var n=e[t];return x.isFunction(n)?n.call(e):n},x.mixin=function(e){T(x.functions(e),function(t){var n=x[t]=e[t];x.prototype[t]=function(){var e=[this._wrapped];return o.apply(e,arguments),j.call(this,n.apply(x,e))}})};var D=0;x.uniqueId=function(e){var t=++D+"";return e?e+t:t},x.templateSettings={evaluate:/<%([\s\S]+?)%>/g,interpolate:/<%=([\s\S]+?)%>/g,escape:/<%-([\s\S]+?)%>/g};var P=/(.)^/,H={"'":"'","\\":"\\","\r":"r","\n":"n","	":"t","\u2028":"u2028","\u2029":"u2029"},B=/\\|'|\r|\n|\t|\u2028|\u2029/g;x.template=function(e,t,n){var r;n=x.defaults({},n,x.templateSettings);var i=new RegExp([(n.escape||P).source,(n.interpolate||P).source,(n.evaluate||P).source].join("|")+"|$","g"),s=0,o="__p+='";e.replace(i,function(t,n,r,i,u){return o+=e.slice(s,u).replace(B,function(e){return"\\"+H[e]}),n&&(o+="'+\n((__t=("+n+"))==null?'':_.escape(__t))+\n'"),r&&(o+="'+\n((__t=("+r+"))==null?'':__t)+\n'"),i&&(o+="';\n"+i+"\n__p+='"),s=u+t.length,t}),o+="';\n",n.variable||(o="with(obj||{}){\n"+o+"}\n"),o="var __t,__p='',__j=Array.prototype.join,print=function(){__p+=__j.call(arguments,'');};\n"+o+"return __p;\n";try{r=new Function(n.variable||"obj","_",o)}catch(u){throw u.source=o,u}if(t)return r(t,x);var a=function(e){return r.call(this,e,x)};return a.source="function("+(n.variable||"obj")+"){\n"+o+"}",a},x.chain=function(e){return x(e).chain()};var j=function(e){return this._chain?x(e).chain():e};x.mixin(x),T(["pop","push","reverse","shift","sort","splice","unshift"],function(e){var t=r[e];x.prototype[e]=function(){var n=this._wrapped;return t.apply(n,arguments),(e=="shift"||e=="splice")&&n.length===0&&delete n[0],j.call(this,n)}}),T(["concat","join","slice"],function(e){var t=r[e];x.prototype[e]=function(){return j.call(this,t.apply(this._wrapped,arguments))}}),x.extend(x.prototype,{chain:function(){return this._chain=!0,this},value:function(){return this._wrapped}})}.call(this),define("underscore",function(e){return function(){var t,n;return t||e._}}(this)),define("text",{}),define("tpl",{});