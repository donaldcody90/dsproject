if(!window.criteo_q||window.criteo_q instanceof Array){var oldQueue=window.criteo_q||[];window.criteo_q=function(){var e={bodyReady:!1,domReady:!1,queue:[],actions:[],disingScheduled:[],accounts:[],acid:null,axid:null,ccp:null},d={tagVersion:"4.0.0",handlerUrlPrefix:("https:"===document.location.protocol?"https://sslwidget.":"http://widget.")+"criteo.com/event",handlerResponseType:"single",responseType:"js",handlerParams:{v:"4.0.0"},extraData:[],customerInfo:[],manualDising:!1,manualFlush:!1,disOnce:!1,
partialDis:!1,eventMap:{applaunched:"al",viewitem:"vp",viewhome:"vh",viewlist:"vl",viewbasket:"vb",viewsearch:"vs",tracktransaction:"vc",calldising:"dis",setdata:"exd",setemail:"ce"},propMap:{event:"e",account:"a",currency:"c",product:"p",item:"p","item.id":"i","item.price":"pr","item.quantity":"q","product.id":"i","product.price":"pr","product.quantity":"q",data:"d",keywords:"kw",checkin_date:"din",checkout_date:"dout",deduplication:"dd",attribution:"at","attribution.channel":"ac","attribution.value":"v",
user_segment:"si",new_customer:"nc",customer_id:"ci",email:"m",hash_method:"h",transaction_value:"tv",responseType:"rt"},setters:{seturl:{cfg:"handlerUrlPrefix",evt:"url"},setaccount:{cfg:"account",evt:"account"},setcalltype:{cfg:"handlerResponseType",evt:"type"},setresponsetype:{cfg:"responseType",evt:"type"},oninitialized:{cfg:"onInitialized",evt:"callback"},ondomready:{cfg:"onDOMReady",evt:"callback"},beforeappend:{cfg:"beforeAppend",evt:"callback"},aftereval:{cfg:"afterEval",evt:"callback"},onflush:{cfg:"onFlush",
evt:"callback"}},flags:{disonce:"disOnce",manualdising:"manualDising",manualflush:"manualFlush",nopartialflush:"noPartialFlush",disonpartialflush:"partialDis"}},l=function(a){var b;return 0<document.cookie.length&&(b=document.cookie.indexOf(a+"="),-1!=b)?(b=b+a.length+1,a=document.cookie.indexOf(";",b),-1==a&&(a=document.cookie.length),unescape(document.cookie.substring(b,a))):null};(function(a){var b=l("criteo_acid"),c=l("cto_axid"),d=l("cto_optout");null===b&&null===c&&null===d?(b=new Date,b.setTime(b.getTime()+
1E4),b="expires="+b.toUTCString(),document.cookie=["criteo_write_test=ChUIBBINbXlHb29nbGVSdGJJZBgBIAE","path=/",b].join("; "),b=l("criteo_write_test"),a.canWriteCookie=null!==b,document.cookie="criteo_write_test=; path=/; expires=Thu, 01 Jan 1970 00:00:00 UTC"):(a.acid=b,a.axid=null!==d?"optout":c,a.canWriteCookie=!0)})(e);(function(a){var b=l("criteo_cookie_perm");null!==b&&(a.ccp=b)})(e);var s=function(){for(var a=0;a<arguments.length;++a)e.queue.push(arguments[a]);q()},q=function(){for(var a=[],
b=e.queue,c=0;c<b.length;++c){var k=b[c];if(k instanceof Array)b.splice.apply(b,[c+1,0].concat(k));else if(k instanceof Function)b.splice(c+1,0,k());else if(k&&"[object Object]"===k.toString())switch(m(k,c,b,a)){case 0:a.push(k);break;case -1:a=a.concat(b.slice(c)),c=b.length}}d.afterEval instanceof Function&&(a=d.afterEval(b,a,e,d));e.queue=a||[];!d.manualFlush&&(!d.noPartialFlush||0===e.queue.length)&&t(0!==e.queue.length)},m=function(a,b,c,k){if(!e.domReady&&a.requiresDOM&&"no"!==a.requiresDOM)return"blocking"===
a.requiresDOM?-1:0;delete a.requiresDOM;if(!a.event)return f(a),1;a.account&&r(a.account,e.accounts);a.event=a.event.toLowerCase();switch(a.event){case "setdata":return a=f(a),d.extraData.push(a),u(e.actions,f(a)),1;case "setparameter":for(var h in a)"event"!==h.toLowerCase()&&a.hasOwnProperty(h)&&(d.handlerParams[h]=a[h]);return 1;case "calldising":a.hasOwnProperty("account")||(a.account=e.accounts);b=d.handlerResponseType;a.hasOwnProperty("type")&&(b=a.type,delete a.type);r(a.account,e.disingScheduled);
"sequential"===b&&(a.dc=!0);break;case "setcustomerid":return a.event="setdata",a.customer_id=a.id,delete a.id,m(a);case "setemail":case "sethashedemail":case "ceh":return a.event="setemail",a.hasOwnProperty("email")&&(a.email&&!(a.email instanceof Array))&&(a.email=[a.email]),b=f(a),d.customerInfo.push(b),v(e.actions,f(a)),1;case "setsitetype":b="d";if("mobile"===a.type||"m"===a.type)b="m";if("tablet"===a.type||"t"===a.type)b="t";a.event="setdata";delete a.type;a.site_type=b;return m(a);case "appendtag":e.bodyReady&&
!d.container&&((b=document.body)?(c=document.createElement("div"),c.setAttribute("id","criteo-tags-div"),c.style.display="none",b.appendChild(c),b=c):b=void 0,d.container=b);a.url&&(a.isImgUrl?(b=document.createElement("img"),b.setAttribute("style","display:none;"),b.setAttribute("width","1"),b.setAttribute("height","1")):(b=document.createElement("script"),b.setAttribute("async","true"),b.setAttribute("type","text/javascript")),b.setAttribute("src",a.url),a.element=b);d.beforeAppend instanceof Function&&
(a.element=d.beforeAppend(a.element,e,d));f(a);if(a.element&&(a.element.tagName||a.isImgUrl))if(!d.container&&("script"===a.element.tagName.toLowerCase()||a.isImgUrl))b=document.getElementsByTagName("script")[0],a.element.setAttribute("data-owner","criteo-tag"),b.parentNode.insertBefore(a.element,b);else if(d.container)d.container.appendChild(a.element);else return 0;return 1;case "gettagstate":return a.callback instanceof Function?a.callback(e,d):1;case "flush":case "flushevents":return t(b!==c.length-
1||0!==k.length),1}if(b=d.setters[a.event])return d[b.cfg]=a[b.evt],1;if(b=d.flags[a.event])return d[b]=!0,1;e.actions.push(f(a));return 1},t=function(a){d.onFlush instanceof Function&&(e.actions=d.onFlush(e.actions,e,d));if(0!==e.actions.length){for(var b=0;b<d.extraData.length;++b)u(e.actions,d.extraData[b]);for(b=0;b<d.customerInfo.length;++b)v(e.actions,d.customerInfo[b]);if(!d.manualDising&&(!a||d.partialDis)){a=[];for(b=0;b<e.accounts.length;++b)p(e.disingScheduled,e.accounts[b])||a.push(e.accounts[b]);
0<a.length&&m({event:"callDising",account:a})}a=e.actions;b=[];1===e.accounts.length&&(d.account=e.accounts[0]);d.account&&b.push("a="+g(d.account,[]));"js"!==d.responseType&&b.push("rt="+g(d.responseType,[]));if(d.handlerParams){var c=decodeURIComponent(g(d.handlerParams,[]));c&&b.push(c)}for(c=0;c<a.length;++c)a[c].account&&n(d.account,a[c].account)&&delete a[c].account,b.push("p"+c+"="+g(a[c],[]));null!==e.acid&&b.push("acid="+e.acid);null!==e.axid&&b.push("axid="+e.axid);e.canWriteCookie&&b.push("adce=1");
null!==e.ccp&&b.push("ccp="+e.ccp);a=b.join("&");a={event:"appendTag",url:d.handlerUrlPrefix+"?"+a,isImgUrl:"gif"===d.responseType};e.actions=[];m(a);d.disOnce||(e.disingScheduled=[])}},u=function(a,b){for(var c=0;c<a.length;++c){var d=a[c];if(d.event===b.event&&n(b.account,d.account)){for(var e in b)b.hasOwnProperty(e)&&"account"!==e&&(d[e]=b[e]);return}}a.push(b)},v=function(a,b){for(var c=0;c<a.length;++c){var d=a[c];if(d.event===b.event&&n(b.account,d.account)&&("hash_method"in b?b.hash_method:
"")===("hash_method"in d?d.hash_method:"")){if(b.hasOwnProperty("email")){for(var c=d,d=d.email,e=b.email,f=[],g=0;g<e.length;++g)p(d,e[g])||f.push(e[g]);d=d.concat(f);c.email=d}return}}a.push(b)},f=function(a){var b=a;if(a instanceof Function)return b=a(),b instanceof Function?b:f(b);if(a instanceof Array)for(var b=[],c=0;c<a.length;++c)b[c]=f(a[c]);else if(a&&"[object Object]"===a.toString())for(c in b={},a)a.hasOwnProperty(c)&&(b[c]=f(a[c]));return b},y=function(a,b){var c=b.join(".");return d.propMap[c]?
d.propMap[c]:a},n=function(a,b){if(!(a instanceof Array))return n([a],b);if(!(b instanceof Array))return n(a,[b]);if(a.length!==b.length)return!1;for(var c=0;c<a.length;++c)if(!p(b,a[c]))return!1;return!0},g=function(a,b){var c="";if(a instanceof Function)c=g(a(),b);else if(a instanceof Array){for(var e=[],h=0;h<a.length;++h)e[h]=g(a[h],b);c+="["+e.join(",")+"]"}else if(a&&"[object Object]"===a.toString()){e=[];for(h in a)if(a.hasOwnProperty(h)){var f=b.concat([h]);e.push(y(h,f)+"="+g(a[h],f))}c+=
e.join("&")}else c=1===b.length&&"event"===b[0]?c+(d.eventMap[a.toLowerCase()]?d.eventMap[a.toLowerCase()]:a):c+a;return encodeURIComponent(c)},r=function(a,b){if(a instanceof Array)for(var c=0;c<a.length;++c)r(a[c],b);else p(b,a)||b.push(a)},p=function(a,b){for(var c=0;c<a.length;++c)if(a[c]===b)return!0;return!1},z=function(a){if(a){var b=a.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("src",a.location.protocol+"//static.criteo.net/js/ld/ld-tag-debug.4.0.0.js");
a=a.getElementsByTagName("script")[0];a.parentNode.insertBefore(b,a)}};(function(a){(function c(){document.body?setTimeout(a,0):setTimeout(c,10)})()})(function(){e.bodyReady=d.onInitialized instanceof Function?d.onInitialized(e,d):!0;q()});(function(a,b){if("complete"===a.readyState)b();else if(a.addEventListener)a.addEventListener("DOMContentLoaded",b,!1),window.addEventListener("load",b,!1);else{a.attachEvent("onreadystatechange",b);window.attachEvent("onload",b);var c=!1;try{c=null===window.frameElement&&
document.documentElement}catch(d){}if(c&&c.doScroll)(function A(){if(c){try{c.doScroll("left")}catch(a){return setTimeout(A,50)}b()}})();else{var e=!1,f=a.onload,g=a.onreadystatechange;a.onload=a.onreadystatechange=function(){g instanceof Function&&g();if(!e&&(!a.readyState||"loaded"===a.readyState||"complete"===a.readyState))f instanceof Function&&f(),e=!0,b()}}}})(document,function(){e.domReady=d.onDOMReady instanceof Function?d.onDOMReady(e,d):!0;q()});(function(a){try{if(a&&a.referrer){var b=
a.createElement("a");b.href=a.referrer;b.hostname!==a.location.hostname&&d.extraData.push({event:"setData",ref:b.protocol+"//"+b.hostname})}}catch(c){}})(document);(function(a,b){if(a&&b){var c=/^\#(enable|disable)-criteo-tag-debug-mode(\=(\d+))?$/.exec(b);if(c&&4==c.length){var d="enable"==c[1],e=c[3],c="criteoTagDebugMode=";d&&(e&&!isNaN(e))&&(c+=parseInt(e,10));d=d?(new Date).getTime()+864E5:0;d="expires="+(new Date(d)).toUTCString();document.cookie=[c,"path=/",d].join("; ");window.location.href=
window.location.href.substr(0,window.location.href.indexOf("#"))}}})(document,window.location.hash);var w;w=document?"function"!=typeof Array.prototype.indexOf?!1:-1!==document.cookie.indexOf("criteoTagDebugMode="):!1;if(w){var x={originalPush:s,stagedPushes:[],stagedErrors:[],push:function(){0<arguments.length&&this.stagedPushes.push(arguments)},pushError:function(a){this.stagedErrors.push(a)}};window.onerror=function(a){return function(b,c,d,e){x.pushError({message:b,url:c,lineNumber:d,column:e});
return a&&"function"===typeof a?a.apply(this,arguments):!1}}(window.onerror);z(document);return x}return{push:s}}();window.criteo_q.push.apply(window.criteo_q,oldQueue)};