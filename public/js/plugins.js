/*! jQuery Migrate v3.0.0 | (c) jQuery Foundation and other contributors | jquery.org/license */
"undefined"==typeof jQuery.migrateMute&&(jQuery.migrateMute=!0),function(a,b){"use strict";function c(c){var d=b.console;e[c]||(e[c]=!0,a.migrateWarnings.push(c),d&&d.warn&&!a.migrateMute&&(d.warn("JQMIGRATE: "+c),a.migrateTrace&&d.trace&&d.trace()))}function d(a,b,d,e){Object.defineProperty(a,b,{configurable:!0,enumerable:!0,get:function(){return c(e),d}})}a.migrateVersion="3.0.0",function(){var c=b.console&&b.console.log&&function(){b.console.log.apply(b.console,arguments)},d=/^[12]\./;c&&(a&&!d.test(a.fn.jquery)||c("JQMIGRATE: jQuery 3.0.0+ REQUIRED"),a.migrateWarnings&&c("JQMIGRATE: Migrate plugin loaded multiple times"),c("JQMIGRATE: Migrate is installed"+(a.migrateMute?"":" with logging active")+", version "+a.migrateVersion))}();var e={};a.migrateWarnings=[],void 0===a.migrateTrace&&(a.migrateTrace=!0),a.migrateReset=function(){e={},a.migrateWarnings.length=0},"BackCompat"===document.compatMode&&c("jQuery is not compatible with Quirks Mode");var f=a.fn.init,g=a.isNumeric,h=a.find,i=/\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/,j=/\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/g;a.fn.init=function(a){var b=Array.prototype.slice.call(arguments);return"string"==typeof a&&"#"===a&&(c("jQuery( '#' ) is not a valid selector"),b[0]=[]),f.apply(this,b)},a.fn.init.prototype=a.fn,a.find=function(a){var b=Array.prototype.slice.call(arguments);if("string"==typeof a&&i.test(a))try{document.querySelector(a)}catch(d){a=a.replace(j,function(a,b,c,d){return"["+b+c+'"'+d+'"]'});try{document.querySelector(a),c("Attribute selector with '#' must be quoted: "+b[0]),b[0]=a}catch(e){c("Attribute selector with '#' was not fixed: "+b[0])}}return h.apply(this,b)};var k;for(k in h)Object.prototype.hasOwnProperty.call(h,k)&&(a.find[k]=h[k]);a.fn.size=function(){return c("jQuery.fn.size() is deprecated; use the .length property"),this.length},a.parseJSON=function(){return c("jQuery.parseJSON is deprecated; use JSON.parse"),JSON.parse.apply(null,arguments)},a.isNumeric=function(b){function d(b){var c=b&&b.toString();return!a.isArray(b)&&c-parseFloat(c)+1>=0}var e=g(b),f=d(b);return e!==f&&c("jQuery.isNumeric() should not be called on constructed objects"),f},d(a,"unique",a.uniqueSort,"jQuery.unique is deprecated, use jQuery.uniqueSort"),d(a.expr,"filters",a.expr.pseudos,"jQuery.expr.filters is now jQuery.expr.pseudos"),d(a.expr,":",a.expr.pseudos,'jQuery.expr[":"] is now jQuery.expr.pseudos');var l=a.ajax;a.ajax=function(){var a=l.apply(this,arguments);return a.promise&&(d(a,"success",a.done,"jQXHR.success is deprecated and removed"),d(a,"error",a.fail,"jQXHR.error is deprecated and removed"),d(a,"complete",a.always,"jQXHR.complete is deprecated and removed")),a};var m=a.fn.removeAttr,n=a.fn.toggleClass,o=/\S+/g;a.fn.removeAttr=function(b){var d=this;return a.each(b.match(o),function(b,e){a.expr.match.bool.test(e)&&(c("jQuery.fn.removeAttr no longer sets boolean properties: "+e),d.prop(e,!1))}),m.apply(this,arguments)},a.fn.toggleClass=function(b){return void 0!==b&&"boolean"!=typeof b?n.apply(this,arguments):(c("jQuery.fn.toggleClass( boolean ) is deprecated"),this.each(function(){var c=this.getAttribute&&this.getAttribute("class")||"";c&&a.data(this,"__className__",c),this.setAttribute&&this.setAttribute("class",c||b===!1?"":a.data(this,"__className__")||"")}))};var p=!1;a.swap&&a.each(["height","width","reliableMarginRight"],function(b,c){var d=a.cssHooks[c]&&a.cssHooks[c].get;d&&(a.cssHooks[c].get=function(){var a;return p=!0,a=d.apply(this,arguments),p=!1,a})}),a.swap=function(a,b,d,e){var f,g,h={};p||c("jQuery.swap() is undocumented and deprecated");for(g in b)h[g]=a.style[g],a.style[g]=b[g];f=d.apply(a,e||[]);for(g in b)a.style[g]=h[g];return f};var q=a.data;a.data=function(b,d,e){var f;return d&&d!==a.camelCase(d)&&(f=a.hasData(b)&&q.call(this,b),f&&d in f)?(c("jQuery.data() always sets/gets camelCased names: "+d),arguments.length>2&&(f[d]=e),f[d]):q.apply(this,arguments)};var r=a.Tween.prototype.run;a.Tween.prototype.run=function(b){a.easing[this.easing].length>1&&(c('easing function "jQuery.easing.'+this.easing.toString()+'" should use only first argument'),a.easing[this.easing]=a.easing[this.easing].bind(a.easing,b,this.options.duration*b,0,1,this.options.duration)),r.apply(this,arguments)};var s=a.fn.load,t=a.event.fix;a.event.props=[],a.event.fixHooks={},a.event.fix=function(b){var d,e=b.type,f=this.fixHooks[e],g=a.event.props;if(g.length)for(c("jQuery.event.props are deprecated and removed: "+g.join());g.length;)a.event.addProp(g.pop());if(f&&!f._migrated_&&(f._migrated_=!0,c("jQuery.event.fixHooks are deprecated and removed: "+e),(g=f.props)&&g.length))for(;g.length;)a.event.addProp(g.pop());return d=t.call(this,b),f&&f.filter?f.filter(d,b):d},a.each(["load","unload","error"],function(b,d){a.fn[d]=function(){var a=Array.prototype.slice.call(arguments,0);return"load"===d&&"string"==typeof a[0]?s.apply(this,a):(c("jQuery.fn."+d+"() is deprecated"),a.splice(0,0,d),arguments.length?this.on.apply(this,a):(this.triggerHandler.apply(this,a),this))}}),a(function(){a(document).triggerHandler("ready")}),a.event.special.ready={setup:function(){this===document&&c("'ready' event is deprecated")}},a.fn.extend({bind:function(a,b,d){return c("jQuery.fn.bind() is deprecated"),this.on(a,null,b,d)},unbind:function(a,b){return c("jQuery.fn.unbind() is deprecated"),this.off(a,null,b)},delegate:function(a,b,d,e){return c("jQuery.fn.delegate() is deprecated"),this.on(b,a,d,e)},undelegate:function(a,b,d){return c("jQuery.fn.undelegate() is deprecated"),1===arguments.length?this.off(a,"**"):this.off(b,a||"**",d)}});var u=a.fn.offset;a.fn.offset=function(){var b,d=this[0],e={top:0,left:0};return d&&d.nodeType?(b=(d.ownerDocument||document).documentElement,a.contains(b,d)?u.apply(this,arguments):(c("jQuery.fn.offset() requires an element connected to a document"),e)):(c("jQuery.fn.offset() requires a valid DOM element"),e)};var v=a.param;a.param=function(b,d){var e=a.ajaxSettings&&a.ajaxSettings.traditional;return void 0===d&&e&&(c("jQuery.param() no longer uses jQuery.ajaxSettings.traditional"),d=e),v.call(this,b,d)};var w=a.fn.andSelf||a.fn.addBack;a.fn.andSelf=function(){return c("jQuery.fn.andSelf() replaced by jQuery.fn.addBack()"),w.apply(this,arguments)};var x=a.Deferred,y=[["resolve","done",a.Callbacks("once memory"),a.Callbacks("once memory"),"resolved"],["reject","fail",a.Callbacks("once memory"),a.Callbacks("once memory"),"rejected"],["notify","progress",a.Callbacks("memory"),a.Callbacks("memory")]];a.Deferred=function(b){var d=x(),e=d.promise();return d.pipe=e.pipe=function(){var b=arguments;return c("deferred.pipe() is deprecated"),a.Deferred(function(c){a.each(y,function(f,g){var h=a.isFunction(b[f])&&b[f];d[g[1]](function(){var b=h&&h.apply(this,arguments);b&&a.isFunction(b.promise)?b.promise().done(c.resolve).fail(c.reject).progress(c.notify):c[g[0]+"With"](this===e?c.promise():this,h?[b]:arguments)})}),b=null}).promise()},b&&b.call(d,d),d}}(jQuery,window);
/** HTML5 LightBox - jQuery Image and Video LightBox Plugin
 * Copyright 2014 Magic Hills Pty Ltd All Rights Reserved
 * Website: http://html5box.com
 * Version 4.8 
 */
(function() {
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i = 0; i < scripts.length; i++)
        if (scripts[i].src && scripts[i].src.match(/viedolightbox\.js/i)) jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    var loadjQuery = false;
    if (typeof jQuery == "undefined") loadjQuery = true;
    else {
        var jVersion = jQuery.fn.jquery.split(".");
        if (jVersion[0] < 1 || jVersion[0] == 1 && jVersion[1] < 6) loadjQuery = true
    }
    if (loadjQuery) {
        var head = document.getElementsByTagName("head")[0];
        var script = document.createElement("script");
        script.setAttribute("type", "text/javascript");
        if (script.readyState) script.onreadystatechange = function() {
            if (script.readyState == "loaded" || script.readyState == "complete") {
                script.onreadystatechange = null;
                loadHtml5LightBox(jsFolder)
            }
        };
        else script.onload = function() {
            loadHtml5LightBox(jsFolder)
        };
        script.setAttribute("src", jsFolder + "jquery.js");
        head.appendChild(script)
    } else loadHtml5LightBox(jsFolder)
})();

function loadHtml5LightBox(jsFolder) {
    (function($) {
        $.fn.html5lightbox = function(options) {
            var inst = this;
            inst.options = jQuery.extend({
                freelink: false,
                autoplay: true,
                html5player: true,
                responsive: true,
                nativehtml5controls: false,
                videohidecontrols: false,
                useflashonie9: true,
                useflashonie10: false,
                useflashonie11: false,
                googleanalyticsaccount: "",
                arrowloop: true,
                shownavigation: true,
                thumbwidth: 96,
                thumbheight: 72,
                thumbgap: 4,
                thumbtopmargin: 12,
                thumbbottommargin: 12,
                thumbborder: 1,
                thumbbordercolor: "transparent",
                thumbhighlightbordercolor: "#fff",
                thumbopacity: 1,
                navbuttonwidth: 32,
                overlaybgcolor: "#000",
                overlayopacity: 0.8,
                bgcolor: "#fff",
                bordersize: 8,
                borderradius: 0,
                bordermargin: 16,
                barautoheight: true,
                barheight: 48,
                loadingwidth: 64,
                loadingheight: 64,
                resizespeed: 400,
                fadespeed: 400,
                jsfolder: jsFolder,
                skinsfoldername: "skins/default/",
                loadingimage: "lightbox-loading.gif",
                nextimage: "lightbox-next.png",
                previmage: "lightbox-prev.png",
                closeimage: "lightbox-close.png",
                playvideoimage: "lightbox-playvideo.png",
                titlebgimage: "lightbox-titlebg.png",
                navarrowsprevimage: "nav-arrows-prev.png",
                navarrowsnextimage: "nav-arrows-next.png",
                showtitle: true,
                titlestyle: "bottom",
                titleinsidecss: "{color:#fff; font-size:14px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left;}",
                titlebottomcss: "{color:#333; font-size:14px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left;}",
                showdescription: true,
                descriptioninsidecss: "{color:#fff; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",
                descriptionbottomcss: "{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",
                errorwidth: 280,
                errorheight: 48,
                errorcss: "{text-align:center; color:#ff0000; font-size:14px; font-family:Arial, sans-serif;}",
                supportesckey: true,
                supportarrowkeys: true,
                version: "3.3",
                stamp: true,
                freemark: "",
                watermark: false,
                watermarklink: ""
            }, options);
            if (typeof html5lightbox_options !=
                "undefined" && html5lightbox_options) jQuery.extend(inst.options, html5lightbox_options);
            if ($("div#html5lightbox_options").length) $.each($("div#html5lightbox_options").data(), function(key, value) {
                inst.options[key.toLowerCase()] = value
            });
            inst.options.htmlfolder = window.location.href.substr(0, window.location.href.lastIndexOf("/") + 1);
            inst.options.skinsfolder = inst.options.skinsfoldername;
            if (inst.options.skinsfolder.length > 0 && inst.options.skinsfolder[inst.options.skinsfolder.length - 1] != "/") inst.options.skinsfolder +=
                "/";
            if (inst.options.skinsfolder.charAt(0) != "/" && inst.options.skinsfolder.substring(0, 5) != "http:" && inst.options.skinsfolder.substring(0, 6) != "https:") inst.options.skinsfolder = inst.options.jsfolder + inst.options.skinsfolder;
            var i;
            var l;
            var mark = "";
            var bytes = inst.options.freemark.split(",");
            for (i = 0; i < bytes.length; i++) mark += String.fromCharCode(bytes[i]);
            inst.options.freemark = mark;
            var d0 = "hmtamgli5cboxh.iclolms";
            for (i = 1; i <= 5; i++) d0 = d0.slice(0, i) + d0.slice(i + 1);
            l = d0.length;
            for (i = 0; i < 5; i++) d0 = d0.slice(0, l -
                9 + i) + d0.slice(l - 8 + i);
            if (inst.options.htmlfolder.indexOf(d0) != -1) inst.options.stamp = false;
            inst.options.navheight = 0;
            inst.options.thumbgap += 2 * inst.options.thumbborder;
            inst.options.types = ["IMAGE", "FLASH", "VIDEO", "YOUTUBE", "VIMEO", "PDF", "MP3", "WEB", "FLV", "DAILYMOTION"];
            inst.elemArray = new Array;
            inst.options.curElem = -1;
            inst.options.flashInstalled = false;
            try {
                if (new ActiveXObject("ShockwaveFlash.ShockwaveFlash")) inst.options.flashInstalled = true
            } catch (e) {
                if (navigator.mimeTypes["application/x-shockwave-flash"]) inst.options.flashInstalled =
                    true
            }
            inst.options.html5VideoSupported = !!document.createElement("video").canPlayType;
            inst.options.isChrome = navigator.userAgent.match(/Chrome/i) != null;
            inst.options.isFirefox = navigator.userAgent.match(/Firefox/i) != null;
            inst.options.isOpera = navigator.userAgent.match(/Opera/i) != null || navigator.userAgent.match(/OPR\//i) != null;
            inst.options.isSafari = navigator.userAgent.match(/Safari/i) != null;
            inst.options.isIE11 = navigator.userAgent.match(/Trident\/7/) != null && navigator.userAgent.match(/rv:11/) != null;
            inst.options.isIE =
                navigator.userAgent.match(/MSIE/i) != null && !inst.options.isOpera;
            inst.options.isIE10 = navigator.userAgent.match(/MSIE 10/i) != null && !this.options.isOpera;
            inst.options.isIE9 = navigator.userAgent.match(/MSIE 9/i) != null && !inst.options.isOpera;
            inst.options.isIE8 = navigator.userAgent.match(/MSIE 8/i) != null && !inst.options.isOpera;
            inst.options.isIE7 = navigator.userAgent.match(/MSIE 7/i) != null && !inst.options.isOpera;
            inst.options.isIE6 = navigator.userAgent.match(/MSIE 6/i) != null && !inst.options.isOpera;
            inst.options.isIE678 =
                inst.options.isIE6 || inst.options.isIE7 || inst.options.isIE8;
            inst.options.isIE6789 = inst.options.isIE6 || inst.options.isIE7 || inst.options.isIE8 || inst.options.isIE9;
            inst.options.isAndroid = navigator.userAgent.match(/Android/i) != null;
            inst.options.isIPad = navigator.userAgent.match(/iPad/i) != null;
            inst.options.isIPhone = navigator.userAgent.match(/iPod/i) != null || navigator.userAgent.match(/iPhone/i) != null;
            inst.options.isIOS = inst.options.isIPad || inst.options.isIPhone;
            inst.options.isMobile = inst.options.isAndroid ||
                inst.options.isIPad || inst.options.isIPhone;
            inst.options.isIOSLess5 = inst.options.isIPad && inst.options.isIPhone && (navigator.userAgent.match(/OS 4/i) != null || navigator.userAgent.match(/OS 3/i) != null);
            inst.options.supportCSSPositionFixed = !inst.options.isIE6 && !inst.options.isIOSLess5;
            inst.options.iequirksmode = inst.options.isIE6789 && !jQuery.support.boxModel;
            inst.options.resizeTimeout = -1;
            if (inst.options.isMobile) inst.options.autoplay = false;
            if (inst.options.googleanalyticsaccount && !window._gaq) {
                window._gaq =
                    window._gaq || [];
                window._gaq.push(["_setAccount", inst.options.googleanalyticsaccount]);
                window._gaq.push(["_trackPageview"]);
                $.getScript(("https:" == document.location.protocol ? "https://ssl" : "http://www") + ".google-analytics.com/ga.js")
            }
            inst.init = function() {
                inst.showing = false;
                inst.readData();
                inst.createMarkup();
                inst.supportKeyboard()
            };
            var ELEM_TYPE = 0,
                ELEM_HREF = 1,
                ELEM_TITLE = 2,
                ELEM_GROUP = 3,
                ELEM_WIDTH = 4,
                ELEM_HEIGHT = 5,
                ELEM_HREF_WEBM = 6,
                ELEM_HREF_OGG = 7,
                ELEM_THUMBNAIL = 8,
                ELEM_DESCRIPTION = 9;
            inst.readData = function() {
                inst.each(function() {
                    if (this.nodeName.toLowerCase() !=
                        "a" && this.nodeName.toLowerCase() != "area") return;
                    var $this = $(this);
                    var fileType = inst.checkType($this.attr("href"));
                    if (fileType < 0) return;
                    for (var i = 0; i < inst.elemArray.length; i++)
                        if ($this.attr("href") == inst.elemArray[i][ELEM_HREF]) return;
                    inst.elemArray.push(new Array(fileType, $this.attr("href"), $this.attr("title"), $this.data("group"), $this.data("width"), $this.data("height"), $this.data("webm"), $this.data("ogg"), $this.data("thumbnail"), $this.data("description")))
                })
            };
            inst.createMarkup = function() {
                if (inst.options.titlestyle ==
                    "inside") {
                    inst.options.titlecss = inst.options.titleinsidecss;
                    inst.options.descriptioncss = inst.options.descriptioninsidecss
                } else if (inst.options.titlestyle == "bottom") {
                    inst.options.titlecss = inst.options.titlebottomcss;
                    inst.options.descriptioncss = inst.options.descriptionbottomcss
                }
                var styleCss = "#html5-text " + inst.options.titlecss;
                styleCss += ".html5-description " + inst.options.descriptioncss;
                styleCss += ".html5-error " + inst.options.errorcss;
                $("head").append("<style type='text/css'>" + styleCss + "</style>");
                inst.$lightbox =
                    jQuery("<div id='html5-lightbox' style='display:none;top:0px;left:0px;width:100%;height:100%;z-index:9999998;text-align:center;'>" + "<div id='html5-lightbox-overlay' style='display:block;position:absolute;top:0px;left:0px;width:100%;min-height:100%;background-color:" + inst.options.overlaybgcolor + ";opacity:" + inst.options.overlayopacity + ";filter:alpha(opacity=" + Math.round(inst.options.overlayopacity * 100) + ");'></div>" + "<div id='html5-lightbox-box' style='display:block;position:relative;margin:0px auto;'>" +
                        "<div id='html5-elem-box' style='display:block;position:relative;margin:0px auto;text-align:center;overflow:hidden;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;'>" + "<div id='html5-elem-wrap' style='display:block;position:relative;margin:0px auto;text-align:center;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;background-color:" + inst.options.bgcolor + ";'>" + "<div id='html5-loading' style='display:none;position:absolute;top:0px;left:0px;text-align:center;width:100%;height:100%;background:url(\"" +
                        inst.options.skinsfolder + inst.options.loadingimage + "\") no-repeat center center;'></div>" + "<div id='html5-error' class='html5-error' style='display:none;position:absolute;padding:" + inst.options.bordersize + "px;text-align:center;width:" + inst.options.errorwidth + "px;height:" + inst.options.errorheight + "px;'>" + "The requested content cannot be loaded.<br />Please try again later." + "</div>" + "<div id='html5-image' style='display:none;position:absolute;top:0px;left:0px;" + (inst.options.iequirksmode ? "margin" :
                            "padding") + ":" + inst.options.bordersize + "px;text-align:center;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;'></div>" + "<div id='html5-next' style='display:none;cursor:pointer;position:absolute;right:" + inst.options.bordersize + "px;top:50%;margin-top:-16px;'><img src='" + inst.options.skinsfolder + inst.options.nextimage + "'></div>" + "<div id='html5-prev' style='display:none;cursor:pointer;position:absolute;left:" + inst.options.bordersize + "px;top:50%;margin-top:-16px;'><img src='" +
                        inst.options.skinsfolder + inst.options.previmage + "'></div>" + "</div>" + "</div>" + "<div id='html5-watermark' style='display:none;position:absolute;left:" + String(inst.options.bordersize + 2) + "px;top:" + String(inst.options.bordersize + 2) + "px;'></div>" + "</div>" + "</div>");
                inst.$lightbox.css({
                    position: inst.options.supportCSSPositionFixed && inst.options.responsive && !inst.options.iequirksmode ? "fixed" : "absolute"
                });
                inst.$lightbox.appendTo("body");
                inst.$lightboxBox = $("#html5-lightbox-box", inst.$lightbox);
                inst.$elem =
                    $("#html5-elem-box", inst.$lightbox);
                inst.$elemWrap = $("#html5-elem-wrap", inst.$lightbox);
                inst.$loading = $("#html5-loading", inst.$lightbox);
                inst.$error = $("#html5-error", inst.$lightbox);
                inst.$image = $("#html5-image", inst.$lightbox);
                inst.$next = $("#html5-next", inst.$lightbox);
                inst.$prev = $("#html5-prev", inst.$lightbox);
                var elemText = "<div id='html5-elem-data-box' style='display:none;'><div id='html5-text' style='display:block;overflow:hidden;'></div></div>";
                inst.$elem.append(elemText);
                inst.$elemData = $("#html5-elem-data-box",
                    inst.$lightbox);
                inst.$text = $("#html5-text", inst.$lightbox);
                if (inst.options.borderradius > 0) {
                    inst.$elem.css({
                        "border-radius": inst.options.borderradius + "px",
                        "-moz-border-radius": inst.options.borderradius + "px",
                        "-webkit-border-radius": inst.options.borderradius + "px"
                    });
                    if (inst.options.titlestyle == "inside") inst.$elemWrap.css({
                        "border-radius": inst.options.borderradius + "px",
                        "-moz-border-radius": inst.options.borderradius + "px",
                        "-webkit-border-radius": inst.options.borderradius + "px"
                    });
                    else {
                        inst.$elemWrap.css({
                            "border-top-left-radius": inst.options.borderradius +
                                "px",
                            "-moz-top-left-border-radius": inst.options.borderradius + "px",
                            "-webkit-top-left-border-radius": inst.options.borderradius + "px",
                            "border-top-right-radius": inst.options.borderradius + "px",
                            "-moz-top-right-border-radius": inst.options.borderradius + "px",
                            "-webkit-top-right-border-radius": inst.options.borderradius + "px"
                        });
                        inst.$elemData.css({
                            "border-bottom-left-radius": inst.options.borderradius + "px",
                            "-moz-top-bottom-border-radius": inst.options.borderradius + "px",
                            "-webkit-bottom-left-border-radius": inst.options.borderradius +
                                "px",
                            "border-bottom-right-radius": inst.options.borderradius + "px",
                            "-moz-bottom-right-border-radius": inst.options.borderradius + "px",
                            "-webkit-bottom-right-border-radius": inst.options.borderradius + "px"
                        })
                    }
                }
                if (inst.options.titlestyle == "inside") {
                    inst.$elemData.css({
                        position: "absolute",
                        margin: inst.options.bordersize + "px",
                        bottom: 0,
                        left: 0,
                        "background-color": "#333",
                        "background-color": "rgba(51, 51, 51, 0.6)"
                    });
                    inst.$text.css({
                        padding: inst.options.bordersize + "px " + 2 * inst.options.bordersize + "px"
                    })
                } else {
                    inst.$elemData.css({
                        position: "relative",
                        width: "100%",
                        height: inst.options.barautoheight ? "auto" : inst.options.barheight + "px",
                        "padding": "0 0 " + inst.options.bordersize + "px" + " 0",
                        "background-color": inst.options.bgcolor,
                        "text-align": "left"
                    });
                    inst.$text.css({
                        "margin": "0 " + inst.options.bordersize + "px"
                    })
                }
                inst.$lightboxBox.append("<div id='html5-close' style='display:none;cursor:pointer;position:absolute;top:0;right:0;margin-top:-16px;margin-right:-16px;'><img src='" + inst.options.skinsfolder + inst.options.closeimage + "'></div>");
                inst.$close = $("#html5-close",
                    inst.$lightbox);
                inst.$watermark = $("#html5-watermark", inst.$lightbox);
                if (inst.options.stamp) inst.$watermark.html("<a href='" + inst.options.freelink + "' style='text-decoration:none;' title='jQuery Lightbox'><div style='display:block;width:170px;height:20px;text-align:center;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;background-color:#fff;color:#333;font:12px Arial,sans-serif;'><div style='line-height:20px;'>" + inst.options.freemark + "</div></div></a>");
                else if (inst.options.watermark) {
                    var html =
                        "<img src='" + inst.options.watermark + "' style='border:none;' />";
                    if (inst.options.watermarklink) html = "<a href='" + inst.options.watermarklink + "' target='_blank'>" + html + "</a>";
                    inst.$watermark.html(html)
                }
                $("#html5-lightbox-overlay", inst.$lightbox).click(inst.finish);
                inst.$close.click(inst.finish);
                inst.$next.click(function() {
                    if (inst.options.nextElem <= inst.options.curElem)
                        if (inst.options.onlastarrowclicked && window[inst.options.onlastarrowclicked] && typeof window[inst.options.onlastarrowclicked] == "function") window[inst.options.onlastarrowclicked]();
                    inst.gotoSlide(-1)
                });
                inst.$prev.click(function() {
                    if (inst.options.prevElem >= inst.options.curElem)
                        if (inst.options.onfirstarrowclicked && window[inst.options.onfirstarrowclicked] && typeof window[inst.options.onfirstarrowclicked] == "function") window[inst.options.onfirstarrowclicked]();
                    inst.gotoSlide(-2)
                });
                $(window).resize(function() {
                    if (!inst.options.isMobile) {
                        clearTimeout(inst.options.resizeTimeout);
                        inst.options.resizeTimeout = setTimeout(function() {
                            inst.resizeWindow()
                        }, 500)
                    }
                });
                $(window).scroll(function() {
                    inst.scrollBox()
                });
                $(window).bind("orientationchange", function(e) {
                    if (inst.options.isMobile) inst.resizeWindow()
                });
                if (inst.options.isIPhone) {
                    inst.options.windowInnerHeight = window.innerHeight;
                    setInterval(function() {
                        if (inst.options.windowInnerHeight != window.innerHeight) {
                            inst.options.windowInnerHeight = window.innerHeight;
                            inst.resizeWindow()
                        }
                    }, 500)
                }
                inst.enableSwipe()
            };
            inst.calcNextPrevElem = function() {
                inst.options.nextElem = -1;
                inst.options.prevElem = -1;
                var j, curGroup = inst.elemArray[inst.options.curElem][ELEM_GROUP];
                if (curGroup !=
                    undefined && curGroup != null) {
                    for (j = inst.options.curElem + 1; j < inst.elemArray.length; j++)
                        if (inst.elemArray[j][ELEM_GROUP] == curGroup) {
                            inst.options.nextElem = j;
                            break
                        }
                    if (inst.options.nextElem < 0)
                        for (j = 0; j < inst.options.curElem; j++)
                            if (inst.elemArray[j][ELEM_GROUP] == curGroup) {
                                inst.options.nextElem = j;
                                break
                            }
                    if (inst.options.nextElem >= 0) {
                        for (j = inst.options.curElem - 1; j >= 0; j--)
                            if (inst.elemArray[j][ELEM_GROUP] == curGroup) {
                                inst.options.prevElem = j;
                                break
                            }
                        if (inst.options.prevElem < 0)
                            for (j = inst.elemArray.length - 1; j > inst.options.curElem; j--)
                                if (inst.elemArray[j][ELEM_GROUP] ==
                                    curGroup) {
                                    inst.options.prevElem = j;
                                    break
                                }
                    }
                }
            };
            inst.clickHandler = function() {
                if (inst.elemArray.length <= 0) return true;
                var $this = $(this);
                inst.hideObjects();
                for (var i = 0; i < inst.elemArray.length; i++)
                    if (inst.elemArray[i][ELEM_HREF] == $this.attr("href")) break;
                if (i == inst.elemArray.length) return true;
                inst.options.curElem = i;
                inst.options.nextElem = -1;
                inst.options.prevElem = -1;
                inst.calcNextPrevElem();
                inst.$next.hide();
                inst.$prev.hide();
                inst.reset();
                inst.$lightbox.show();
                if (!inst.options.supportCSSPositionFixed) inst.$lightbox.css("top",
                    $(window).scrollTop());
                var boxW = inst.options.loadingwidth + 2 * inst.options.bordersize;
                var boxH = inst.options.loadingheight + 2 * inst.options.bordersize;
                var winH = window.innerHeight ? window.innerHeight : $(window).height();
                var boxT = Math.round(winH / 2 - boxH / 2);
                if (inst.options.titlestyle != "inside") boxT -= Math.round(inst.options.barheight / 2);
                if (boxT < 16) boxT = 16;
                if (inst.options.iequirksmode) inst.$lightboxBox.css({
                    "top": boxT
                });
                else inst.$lightboxBox.css({
                    "margin-top": boxT
                });
                inst.$lightboxBox.css({
                    "width": boxW,
                    "height": boxH
                });
                inst.$elemWrap.css({
                    "width": boxW,
                    "height": boxH
                });
                inst.loadCurElem();
                return false
            };
            inst.loadThumbnail = function(src, index) {
                var imgLoader = new Image;
                $(imgLoader).load(function() {
                    var style;
                    if (this.width / this.height <= inst.options.thumbwidth / inst.options.thumbheight) style = "width:100%;";
                    else style = "height:100%;";
                    $(".html5-nav-thumb").eq(index).html("<img style='" + style + "' src='" + src + "' />")
                });
                imgLoader.src = src
            };
            inst.showNavigation = function() {
                if (!inst.options.shownavigation) return;
                if (!inst.currentElem || !inst.currentElem[ELEM_GROUP]) return;
                var i;
                var showNav = false;
                var group = inst.currentElem[ELEM_GROUP];
                for (i = 0; i < inst.elemArray.length; i++)
                    if (group == inst.elemArray[i][ELEM_GROUP])
                        if (inst.elemArray[i][ELEM_THUMBNAIL] && inst.elemArray[i][ELEM_THUMBNAIL].length > 0) {
                            showNav = true;
                            break
                        }
                if (!showNav) return;
                inst.options.navheight = inst.options.thumbheight + inst.options.thumbtopmargin + inst.options.thumbbottommargin;
                if ($(".html5-nav").length > 0) return;
                $("body").append("<div class='html5-nav' style='display:block;position:fixed;bottom:0;left:0;width:100%;height:" +
                    inst.options.navheight + "px;z-index:9999999;'>" + "<div class='html5-nav-container' style='position:relative;margin:" + inst.options.thumbtopmargin + "px auto " + inst.options.thumbbottommargin + "px;'>" + "<div class='html5-nav-prev' style='display:block;position:absolute;cursor:pointer;width:" + inst.options.navbuttonwidth + 'px;height:100%;left:0;top:0;background:url("' + inst.options.skinsfolder + inst.options.navarrowsprevimage + "\") no-repeat left center;'></div>" + "<div class='html5-nav-mask' style='display:block;position:relative;margin:0 auto;overflow:hidden;'>" +
                    "<div class='html5-nav-list'></div>" + "</div>" + "<div class='html5-nav-next' style='display:block;position:absolute;cursor:pointer;width:" + inst.options.navbuttonwidth + 'px;height:100%;right:0;top:0;background:url("' + inst.options.skinsfolder + inst.options.navarrowsnextimage + "\") no-repeat right center;'></div>" + "</div>" + "</div>");
                var index = 0;
                for (i = 0; i < inst.elemArray.length; i++)
                    if (group == inst.elemArray[i][ELEM_GROUP])
                        if (inst.elemArray[i][ELEM_THUMBNAIL] && inst.elemArray[i][ELEM_THUMBNAIL].length > 0) {
                            $(".html5-nav-list").append("<div class='html5-nav-thumb' data-arrayindex='" +
                                i + "' style='float:left;overflow:hidden;cursor:pointer;opacity:" + inst.options.thumbopacity + ";margin: 0 " + inst.options.thumbgap / 2 + "px;width:" + inst.options.thumbwidth + "px;height:" + inst.options.thumbheight + "px;border:" + inst.options.thumbborder + "px solid " + inst.options.thumbbordercolor + ";'></div>");
                            this.loadThumbnail(inst.elemArray[i][ELEM_THUMBNAIL], index);
                            index++
                        }
                $(".html5-nav-thumb").hover(function() {
                        $(this).css({
                            opacity: 1
                        });
                        $(this).css({
                            border: inst.options.thumbborder + "px solid " + inst.options.thumbhighlightbordercolor
                        })
                    },
                    function() {
                        $(this).css({
                            opacity: inst.options.thumbopacity
                        });
                        $(this).css({
                            border: inst.options.thumbborder + "px solid " + inst.options.thumbbordercolor
                        })
                    });
                $(".html5-nav-thumb").click(function() {
                    var index = $(this).data("arrayindex");
                    if (index >= 0) inst.gotoSlide(index)
                });
                inst.options.totalwidth = index * (inst.options.thumbgap + inst.options.thumbwidth + 2 * inst.options.thumbborder);
                $(".html5-nav-list").css({
                    display: "block",
                    position: "relative",
                    "margin-left": 0,
                    width: inst.options.totalwidth + "px"
                }).append("<div style='clear:both;'></div>");
                var $navMask = $(".html5-nav-mask");
                var $navPrev = $(".html5-nav-prev");
                var $navNext = $(".html5-nav-next");
                $navPrev.click(function() {
                    var $navList = $(".html5-nav-list");
                    var $navNext = $(".html5-nav-next");
                    var winWidth = inst.options.isMobile ? Math.max($(window).width(), $(document).width()) : $(window).width();
                    var maskWidth = winWidth - 2 * inst.options.navbuttonwidth;
                    var marginLeft = parseInt($navList.css("margin-left")) + maskWidth;
                    if (marginLeft >= 0) {
                        marginLeft = 0;
                        $(this).css({
                            "background-position": "center left"
                        })
                    } else $(this).css({
                        "background-position": "center right"
                    });
                    if (marginLeft <= maskWidth - inst.options.totalwidth) $navNext.css({
                        "background-position": "center left"
                    });
                    else $navNext.css({
                        "background-position": "center right"
                    });
                    $navList.animate({
                        "margin-left": marginLeft
                    })
                });
                $navNext.click(function() {
                    var $navList = $(".html5-nav-list");
                    var $navPrev = $(".html5-nav-prev");
                    var winWidth = inst.options.isMobile ? Math.max($(window).width(), $(document).width()) : $(window).width();
                    var maskWidth = winWidth - 2 * inst.options.navbuttonwidth;
                    var marginLeft = parseInt($navList.css("margin-left")) -
                        maskWidth;
                    if (marginLeft <= maskWidth - inst.options.totalwidth) {
                        marginLeft = maskWidth - inst.options.totalwidth;
                        $(this).css({
                            "background-position": "center left"
                        })
                    } else $(this).css({
                        "background-position": "center right"
                    });
                    if (marginLeft >= 0) $navPrev.css({
                        "background-position": "center left"
                    });
                    else $navPrev.css({
                        "background-position": "center right"
                    });
                    $navList.animate({
                        "margin-left": marginLeft
                    })
                });
                var winWidth = inst.options.isMobile ? Math.max($(window).width(), $(document).width()) : $(window).width();
                if (inst.options.totalwidth <=
                    winWidth) {
                    $navMask.css({
                        width: inst.options.totalwidth + "px"
                    });
                    $navPrev.hide();
                    $navNext.hide()
                } else {
                    $navMask.css({
                        width: winWidth - 2 * inst.options.navbuttonwidth + "px"
                    });
                    $navPrev.show();
                    $navNext.show()
                }
            };
            inst.loadElem = function(elem) {
                inst.currentElem = elem;
                inst.showing = true;
                inst.showNavigation();
                inst.$elem.unbind("mouseenter").unbind("mouseleave").unbind("mousemove");
                inst.$loading.show();
                if (inst.options.onshowitem && window[inst.options.onshowitem] && typeof window[inst.options.onshowitem] == "function") window[inst.options.onshowitem](elem);
                switch (elem[ELEM_TYPE]) {
                    case 0:
                        var imgLoader = new Image;
                        $(imgLoader).load(function() {
                            inst.showImage(elem, imgLoader.width, imgLoader.height)
                        });
                        $(imgLoader).error(function() {
                            inst.showError()
                        });
                        imgLoader.src = elem[ELEM_HREF];
                        break;
                    case 1:
                        inst.showSWF(elem);
                        break;
                    case 2:
                    case 8:
                        inst.showVideo(elem);
                        break;
                    case 3:
                    case 4:
                    case 9:
                        inst.showYoutubeVimeo(elem);
                        break;
                    case 5:
                        inst.showPDF(elem);
                        break;
                    case 6:
                        inst.showMP3(elem);
                        break;
                    case 7:
                        inst.showWeb(elem);
                        break
                }
                if (inst.options.googleanalyticsaccount && window._gaq) window._gaq.push(["_trackEvent",
                    "Lightbox", "Open", elem[ELEM_HREF]
                ])
            };
            inst.loadCurElem = function() {
                inst.loadElem(inst.elemArray[inst.options.curElem])
            };
            inst.showError = function() {
                inst.$loading.hide();
                inst.resizeLightbox(inst.options.errorwidth, inst.options.errorheight, true, function() {
                    inst.$error.show();
                    inst.$elem.fadeIn(inst.options.fadespeed, function() {
                        inst.showData()
                    })
                })
            };
            inst.calcTextWidth = function(objW) {
                return objW - 36
            };
            inst.showTitle = function(w, t, description) {
                if (inst.options.titlestyle == "inside") inst.$elemData.css({
                    width: w + "px"
                });
                var text = "";
                if (inst.options.showtitle && t && t.length > 0) text += t;
                if (inst.options.showdescription && description && description.length > 0) text += '<p class="html5-description">' + description + "</p>";
                inst.$text.html(text)
            }, inst.showImage = function(elem, imgW, imgH) {
                var elemW, elemH;
                if (elem[ELEM_WIDTH]) elemW = elem[ELEM_WIDTH];
                else {
                    elemW = imgW;
                    elem[ELEM_WIDTH] = imgW
                }
                if (elem[ELEM_HEIGHT]) elemH = elem[ELEM_HEIGHT];
                else {
                    elemH = imgH;
                    elem[ELEM_HEIGHT] = imgH
                }
                var sizeObj = inst.calcElemSize({
                    w: elemW,
                    h: elemH
                });
                inst.resizeLightbox(sizeObj.w,
                    sizeObj.h, true,
                    function() {
                        inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
                        inst.$image.css({
                            width: sizeObj.w,
                            height: sizeObj.h
                        }).show();
                        inst.$image.html("<img src='" + elem[ELEM_HREF] + "' width='100%' height='100%' />");
                        inst.$elem.fadeIn(inst.options.fadespeed, function() {
                            inst.showData()
                        })
                    })
            };
            inst.showSWF = function(elem) {
                var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : 960;
                var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : 540;
                var sizeObj = inst.calcElemSize({
                    w: dataW,
                    h: dataH
                });
                dataW = sizeObj.w;
                dataH =
                    sizeObj.h;
                inst.resizeLightbox(dataW, dataH, true, function() {
                    inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
                    inst.$image.css({
                        width: sizeObj.w,
                        height: sizeObj.h
                    }).html("<div id='html5lightbox-swf' style='display:block;width:100%;height:100%;'></div>").show();
                    inst.embedFlash($("#html5lightbox-swf"), elem[ELEM_HREF], "window", {
                        width: dataW,
                        height: dataH
                    });
                    inst.$elem.show();
                    inst.showData()
                })
            };
            inst.showVideo = function(elem) {
                var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : 960;
                var dataH = elem[ELEM_HEIGHT] ?
                    elem[ELEM_HEIGHT] : 540;
                var sizeObj = inst.calcElemSize({
                    w: dataW,
                    h: dataH
                });
                dataW = sizeObj.w;
                dataH = sizeObj.h;
                inst.resizeLightbox(dataW, dataH, true, function() {
                    inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
                    inst.$image.css({
                        width: sizeObj.w,
                        height: sizeObj.h
                    }).html("<div id='html5lightbox-video' style='display:block;width:100%;height:100%;background-color:#000;'></div>").show();
                    var isHTML5 = false;
                    if (inst.options.isIE678 || elem[ELEM_TYPE] == 8 || inst.options.isIE9 && inst.options.useflashonie9 || inst.options.isIE10 &&
                        inst.options.useflashonie10 || inst.options.isIE11 && inst.options.useflashonie11) isHTML5 = false;
                    else if (inst.options.isMobile) isHTML5 = true;
                    else if ((inst.options.html5player || !inst.options.flashInstalled) && inst.options.html5VideoSupported)
                        if (!inst.options.isFirefox && !inst.options.isOpera || (inst.options.isFirefox || inst.options.isOpera) && (elem[ELEM_HREF_OGG] || elem[ELEM_HREF_WEBM])) isHTML5 = true;
                    if (isHTML5) {
                        var videoSrc = elem[ELEM_HREF];
                        if (inst.options.isFirefox || inst.options.isOpera || !videoSrc) videoSrc = elem[ELEM_HREF_WEBM] ?
                            elem[ELEM_HREF_WEBM] : elem[ELEM_HREF_OGG];
                        inst.embedHTML5Video($("#html5lightbox-video"), videoSrc, inst.options.autoplay)
                    } else {
                        var videoFile = elem[ELEM_HREF];
                        if (videoFile.charAt(0) != "/" && videoFile.substring(0, 5) != "http:" && videoFile.substring(0, 6) != "https:") videoFile = inst.options.htmlfolder + videoFile;
                        inst.embedFlash($("#html5lightbox-video"), inst.options.jsfolder + "html5boxplayer.swf", "transparent", {
                            width: dataW,
                            height: dataH,
                            hidecontrols: inst.options.videohidecontrols ? "1" : "0",
                            hideplaybutton: "0",
                            videofile: videoFile,
                            hdfile: "",
                            ishd: "0",
                            autoplay: inst.options.autoplay ? "1" : "0",
                            errorcss: ".html5box-error" + inst.options.errorcss,
                            id: 0
                        })
                    }
                    inst.$elem.show();
                    inst.showData()
                })
            };
            inst.getYoutubeParams = function(href) {
                var result = {};
                if (href.indexOf("?") < 0) return result;
                var params = href.substring(href.indexOf("?") + 1).split("&");
                for (var i = 0; i < params.length; i++) {
                    var value = params[i].split("=");
                    if (value && value.length == 2 && value[0].toLowerCase() != "v") result[value[0].toLowerCase()] = value[1]
                }
                return result
            };
            inst.prepareYoutubeHref = function(href) {
                var youtubeId =
                    "";
                var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\??v?=?))([^#\&\?]*).*/;
                var match = href.match(regExp);
                if (match && match[7] && match[7].length == 11) youtubeId = match[7];
                var protocol = window.location.protocol == "https:" ? "https:" : "http:";
                var result = protocol + "//www.youtube.com/embed/" + youtubeId;
                var params = this.getYoutubeParams(href);
                var first = true;
                for (var key in params) {
                    if (first) {
                        result += "?";
                        first = false
                    } else result += "&";
                    result += key + "=" + params[key]
                }
                return result
            };
            inst.prepareDailymotionHref = function(href) {
                if (href.match(/\:\/\/.*(dai\.ly)/i)) {
                    var protocol =
                        window.location.protocol == "https:" ? "https:" : "http:";
                    var id = href.match(/(dai\.ly\/)([a-zA-Z0-9\-\_]+)/)[2];
                    href = protocol + "//www.dailymotion.com/embed/video/" + id
                }
                return href
            };
            inst.showYoutubeVimeo = function(elem) {
                var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : 960;
                var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : 540;
                var sizeObj = inst.calcElemSize({
                    w: dataW,
                    h: dataH
                });
                dataW = sizeObj.w;
                dataH = sizeObj.h;
                inst.resizeLightbox(dataW, dataH, true, function() {
                    inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
                    inst.$image.css({
                        width: sizeObj.w,
                        height: sizeObj.h
                    }).html("<div id='html5lightbox-video' style='display:block;width:100%;height:100%;'></div>").show();
                    var href = elem[ELEM_HREF];
                    if (elem[ELEM_TYPE] == 3) href = inst.prepareYoutubeHref(href);
                    if (elem[ELEM_TYPE] == 9) href = inst.prepareDailymotionHref(href);
                    if (inst.options.autoplay)
                        if (href.indexOf("?") < 0) href += "?autoplay=1";
                        else href += "&autoplay=1";
                    if (elem[ELEM_TYPE] == 3) {
                        if (href.indexOf("?") < 0) href += "?wmode=transparent&rel=0";
                        else href += "&wmode=transparent&rel=0";
                        if (inst.options.videohidecontrols) href += "&controls=0&showinfo=0"
                    }
                    $("#html5lightbox-video").html("<iframe width='100%' height='100%' src='" + href + "' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>");
                    inst.$elem.show();
                    inst.showData()
                })
            };
            inst.showPDF = function(elem) {};
            inst.showMP3 = function(elem) {};
            inst.showWeb = function(elem) {
                var winWidth = inst.options.isMobile ? Math.max($(window).width(), $(document).width()) : $(window).width();
                var winH = window.innerHeight ? window.innerHeight :
                    $(window).height();
                var dataW = elem[ELEM_WIDTH] ? elem[ELEM_WIDTH] : winWidth;
                var dataH = elem[ELEM_HEIGHT] ? elem[ELEM_HEIGHT] : winH - inst.options.navheight;
                var sizeObj = inst.calcElemSize({
                    w: dataW,
                    h: dataH
                });
                dataW = sizeObj.w;
                dataH = sizeObj.h;
                inst.resizeLightbox(dataW, dataH, true, function() {
                    inst.$loading.hide();
                    inst.showTitle(sizeObj.w, elem[ELEM_TITLE], elem[ELEM_DESCRIPTION]);
                    inst.$image.css({
                        width: sizeObj.w,
                        height: sizeObj.h
                    }).html("<div id='html5lightbox-web' style='display:block;width:100%;height:100%;'></div>").show();
                    $("#html5lightbox-web").html("<iframe width='100%' height='100%' src='" + elem[ELEM_HREF] + "' frameborder='0'></iframe>");
                    inst.$elem.show();
                    inst.showData()
                })
            };
            inst.scrollBox = function() {
                if (!inst.options.supportCSSPositionFixed) inst.$lightbox.css("top", $(window).scrollTop())
            };
            inst.resizeWindow = function() {
                if (!inst.currentElem) return;
                if (!inst.options.responsive) return;
                var elemW = inst.currentElem[ELEM_WIDTH] ? inst.currentElem[ELEM_WIDTH] : 960;
                var elemH = inst.currentElem[ELEM_HEIGHT] ? inst.currentElem[ELEM_HEIGHT] :
                    540;
                var sizeObj = inst.calcElemSize({
                    w: elemW,
                    h: elemH
                });
                var winH = window.innerHeight ? window.innerHeight : $(window).height();
                var boxW = sizeObj.w + 2 * inst.options.bordersize;
                var boxH = sizeObj.h + 2 * inst.options.bordersize;
                var boxT = Math.round((winH - inst.options.navheight) / 2 - boxH / 2);
                if (inst.options.titlestyle != "inside") boxT -= Math.round(inst.options.barheight / 2);
                if (boxT < 16) boxT = 16;
                inst.$lightboxBox.css({
                    "margin-top": boxT
                });
                inst.$lightboxBox.css({
                    "width": boxW,
                    "height": boxH
                });
                inst.$elemWrap.css({
                    width: boxW,
                    height: boxH
                });
                inst.$image.css({
                    width: sizeObj.w,
                    height: sizeObj.h
                });
                if ($(".html5-nav").length <= 0) return;
                $(".html5-nav-list").css({
                    "margin-left": 0
                });
                var $navMask = $(".html5-nav-mask");
                var $navPrev = $(".html5-nav-prev");
                var $navNext = $(".html5-nav-next");
                var winWidth = inst.options.isMobile ? Math.max($(window).width(), $(document).width()) : $(window).width();
                if (inst.options.totalwidth <= winWidth) {
                    $navMask.css({
                        width: inst.options.totalwidth + "px"
                    });
                    $navPrev.hide();
                    $navNext.hide()
                } else {
                    $navMask.css({
                        width: winWidth - 2 * inst.options.navbuttonwidth +
                            "px"
                    });
                    $navPrev.show();
                    $navNext.show()
                }
            };
            inst.calcElemSize = function(sizeObj) {
                if (!inst.options.responsive) return sizeObj;
                var winH = window.innerHeight ? window.innerHeight : $(window).height();
                winH = winH ? winH : $(document).height();
                var h0 = winH - inst.options.navheight - 2 * inst.options.bordersize - 2 * inst.options.bordermargin;
                if (inst.options.titlestyle != "inside") h0 -= inst.options.barheight;
                if (sizeObj.h > h0) {
                    sizeObj.w = Math.round(sizeObj.w * h0 / sizeObj.h);
                    sizeObj.h = h0
                }
                var winWidth = inst.options.isMobile ? Math.max($(window).width(),
                    $(document).width()) : $(window).width();
                winWidth = winWidth ? winWidth : $(document).width();
                var w0 = winWidth - 2 * inst.options.bordersize - 2 * inst.options.bordermargin;
                if (sizeObj.w > w0) {
                    sizeObj.h = Math.round(sizeObj.h * w0 / sizeObj.w);
                    sizeObj.w = w0
                }
                return sizeObj
            };
            inst.showData = function() {
                if (inst.$text.text().length > 0) inst.$elemData.show();
                if (inst.$text.text().length > 0 && inst.options.titlestyle != "inside") inst.$lightboxBox.css({
                    height: String(inst.$lightboxBox.height() + inst.options.barheight) + "px"
                });
                $("#html5-lightbox-overlay",
                    inst.$lightbox).css({
                    height: Math.max($(window).height(), $(document).height())
                })
            };
            inst.resizeLightbox = function(elemW, elemH, bAnimate, onFinish) {
                var winH = window.innerHeight ? window.innerHeight : $(window).height();
                var speed = bAnimate ? inst.options.resizespeed : 0;
                var boxW = elemW + 2 * inst.options.bordersize;
                var boxH = elemH + 2 * inst.options.bordersize;
                var boxT = Math.round((winH - inst.options.navheight) / 2 - boxH / 2);
                if (inst.options.titlestyle != "inside") boxT -= Math.round(inst.options.barheight / 2);
                if (boxT < 16) boxT = 16;
                if (boxW ==
                    inst.$elemWrap.width() && boxH == inst.$elemWrap.height()) speed = 0;
                inst.$loading.hide();
                inst.$watermark.hide();
                if (!inst.options.arrowloop) {
                    if (inst.options.prevElem >= inst.options.curElem) inst.$prev.hide();
                    if (inst.options.nextElem <= inst.options.curElem) inst.$next.hide()
                }
                if (inst.options.nextElem <= inst.options.curElem)
                    if (inst.options.onlastitem && window[inst.options.onlastitem] && typeof window[inst.options.onlastitem] == "function") window[inst.options.onlastitem](inst.currentElem);
                if (inst.options.prevElem >= inst.options.curElem)
                    if (inst.options.onfirstitem &&
                        window[inst.options.onfirstitem] && typeof window[inst.options.onfirstitem] == "function") window[inst.options.onfirstitem](inst.currentElem);
                inst.$elem.bind("mouseenter mousemove", function() {
                    if (inst.options.arrowloop && inst.options.prevElem >= 0 || !inst.options.arrowloop && inst.options.prevElem >= 0 && inst.options.prevElem < inst.options.curElem) inst.$prev.fadeIn();
                    if (inst.options.arrowloop && inst.options.nextElem >= 0 || !inst.options.arrowloop && inst.options.nextElem >= 0 && inst.options.nextElem > inst.options.curElem) inst.$next.fadeIn()
                });
                inst.$elem.bind("mouseleave", function() {
                    inst.$next.fadeOut();
                    inst.$prev.fadeOut()
                });
                inst.$lightboxBox.css({
                    "margin-top": boxT
                });
                inst.$lightboxBox.css({
                    "width": boxW,
                    "height": boxH
                });
                inst.$elemWrap.animate({
                    width: boxW
                }, speed).animate({
                    height: boxH
                }, speed, function() {
                    inst.$loading.show();
                    inst.$watermark.show();
                    inst.$close.show();
                    inst.$elem.css({
                        "background-color": inst.options.bgcolor
                    });
                    onFinish()
                })
            };
            inst.reset = function() {
                if (inst.options.stamp) inst.$watermark.hide();
                inst.showing = false;
                inst.$image.empty();
                inst.$text.empty();
                inst.$error.hide();
                inst.$loading.hide();
                inst.$image.hide();
                inst.$elemData.hide();
                inst.$close.hide();
                inst.$elem.css({
                    "background-color": ""
                })
            };
            inst.resetNavigation = function() {
                inst.options.navheight = 0;
                $(".html5-nav").remove()
            };
            inst.finish = function() {
                inst.reset();
                inst.resetNavigation();
                inst.$lightbox.hide();
                inst.showObjects();
                if (inst.options.oncloselightbox && window[inst.options.oncloselightbox] && typeof window[inst.options.oncloselightbox] == "function") window[inst.options.oncloselightbox](inst.currentElem)
            };
            inst.pauseSlide = function() {};
            inst.playSlide = function() {};
            inst.gotoSlide = function(slide) {
                if (slide == -1) {
                    if (inst.options.nextElem < 0) return;
                    inst.options.curElem = inst.options.nextElem
                } else if (slide == -2) {
                    if (inst.options.prevElem < 0) return;
                    inst.options.curElem = inst.options.prevElem
                } else if (slide >= 0) inst.options.curElem = slide;
                inst.calcNextPrevElem();
                inst.reset();
                inst.loadCurElem()
            };
            inst.supportKeyboard = function() {
                $(document).keyup(function(e) {
                    if (!inst.showing) return;
                    if (inst.options.supportesckey && e.keyCode ==
                        27) inst.finish();
                    else if (inst.options.supportarrowkeys)
                        if (e.keyCode == 39) inst.gotoSlide(-1);
                        else if (e.keyCode == 37) inst.gotoSlide(-2)
                })
            };
            inst.enableSwipe = function() {
                inst.$elem.touchSwipe({
                    preventWebBrowser: true,
                    swipeLeft: function() {
                        inst.gotoSlide(-1)
                    },
                    swipeRight: function() {
                        inst.gotoSlide(-2)
                    }
                })
            };
            inst.hideObjects = function() {
                $("select, embed, object").css({
                    "visibility": "hidden"
                })
            };
            inst.showObjects = function() {
                $("select, embed, object").css({
                    "visibility": "visible"
                })
            };
            inst.embedHTML5Video = function($container,
                src, autoplay) {
                $container.html("<div style='display:block;width:100%;height:100%;position:relative;'><video id='html5-lightbox-video' width='100%' height='100%'" + (autoplay ? " autoplay" : "") + (inst.options.nativehtml5controls && !inst.options.videohidecontrols ? " controls='controls'" : "") + " src='" + src + "'></div>");
                if (!inst.options.nativehtml5controls) {
                    $("video", $container).data("src", src);
                    $("video", $container).lightboxHTML5VideoControls(inst.options.skinsfolder, inst, inst.options.videohidecontrols, false)
                }
            };
            inst.embedFlash = function($container, src, wmode, flashVars) {
                if (inst.options.flashInstalled) {
                    var htmlOptions = {
                        pluginspage: "http://www.adobe.com/go/getflashplayer",
                        quality: "high",
                        allowFullScreen: "true",
                        allowScriptAccess: "always",
                        type: "application/x-shockwave-flash"
                    };
                    htmlOptions.width = "100%";
                    htmlOptions.height = "100%";
                    htmlOptions.src = src;
                    htmlOptions.flashVars = $.param(flashVars);
                    htmlOptions.wmode = wmode;
                    var htmlString = "";
                    for (var key in htmlOptions) htmlString += key + "=" + htmlOptions[key] + " ";
                    $container.html("<embed " +
                        htmlString + "/>")
                } else $container.html("<div class='html5lightbox-flash-error' style='display:block; position:relative;text-align:center; width:100%; left:0px; top:40%;'><div class='html5-error'><div>The required Adobe Flash Player plugin is not installed</div><br /><div style='display:block;position:relative;text-align:center;width:112px;height:33px;margin:0px auto;'><a href='http://www.adobe.com/go/getflashplayer'><img src='http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif' alt='Get Adobe Flash player' width='112' height='33'></img></a></div></div>")
            };
            inst.checkType = function(href) {
                if (!href) return -1;
                if (href.match(/\.(jpg|gif|png|bmp|jpeg)(.*)?$/i)) return 0;
                if (href.match(/[^\.]\.(swf)\s*$/i)) return 1;
                if (href.match(/\.(mp4|m4v|ogv|ogg|webm)(.*)?$/i)) return 2;
                if (href.match(/\:\/\/.*(youtube\.com)/i) || href.match(/\:\/\/.*(youtu\.be)/i)) return 3;
                if (href.match(/\:\/\/.*(vimeo\.com)/i)) return 4;
                if (href.match(/\:\/\/.*(dailymotion\.com)/i) || href.match(/\:\/\/.*(dai\.ly)/i)) return 9;
                if (href.match(/[^\.]\.(pdf)\s*$/i)) return 5;
                if (href.match(/[^\.]\.(mp3)\s*$/i)) return 6;
                if (href.match(/[^\.]\.(flv)\s*$/i)) return 8;
                return 7
            };
            inst.showLightbox = function(type, href, title, width, height, webm, ogg, thumbnail, description) {
                inst.$next.hide();
                inst.$prev.hide();
                inst.reset();
                inst.$lightbox.show();
                if (!inst.options.supportCSSPositionFixed) inst.$lightbox.css("top", $(window).scrollTop());
                var winH = window.innerHeight ? window.innerHeight : $(window).height();
                var boxW = inst.options.loadingwidth + 2 * inst.options.bordersize;
                var boxH = inst.options.loadingheight + 2 * inst.options.bordersize;
                var boxT = Math.round(winH /
                    2 - boxH / 2);
                if (inst.options.titlestyle != "inside") boxT -= Math.round(inst.options.barheight / 2);
                if (boxT < 16) boxT = 16;
                inst.$lightboxBox.css({
                    "margin-top": boxT,
                    "width": boxW,
                    "height": boxH
                });
                inst.$elemWrap.css({
                    "width": boxW,
                    "height": boxH
                });
                inst.loadElem(new Array(type, href, title, null, width, height, webm, ogg, thumbnail, description))
            };
            inst.addItem = function(href, title, group, width, height, webm, ogg, thumbnail, description) {
                type = inst.checkType(href);
                inst.elemArray.push(new Array(type, href, title, group, width, height, webm, ogg,
                    thumbnail, description))
            };
            inst.showItem = function(href) {
                if (inst.elemArray.length <= 0) return true;
                inst.hideObjects();
                for (var i = 0; i < inst.elemArray.length; i++)
                    if (inst.elemArray[i][ELEM_HREF] == href) break;
                if (i == inst.elemArray.length) return true;
                inst.options.curElem = i;
                inst.options.nextElem = -1;
                inst.options.prevElem = -1;
                inst.calcNextPrevElem();
                inst.$next.hide();
                inst.$prev.hide();
                inst.reset();
                inst.$lightbox.show();
                if (!inst.options.supportCSSPositionFixed) inst.$lightbox.css("top", $(window).scrollTop());
                var winH =
                    window.innerHeight ? window.innerHeight : $(window).height();
                var boxW = inst.options.loadingwidth + 2 * inst.options.bordersize;
                var boxH = inst.options.loadingheight + 2 * inst.options.bordersize;
                var boxT = Math.round(winH / 2 - boxH / 2);
                if (inst.options.titlestyle != "inside") boxT -= Math.round(inst.options.barheight / 2);
                if (boxT < 16) boxT = 16;
                inst.$lightboxBox.css({
                    "margin-top": boxT,
                    "width": boxW,
                    "height": boxH
                });
                inst.$elemWrap.css({
                    "width": boxW,
                    "height": boxH
                });
                inst.loadCurElem();
                return false
            };
            inst.init();
            return inst.unbind("click").click(inst.clickHandler)
        }
    })(jQuery);
    (function($) {
        $.fn.touchSwipe = function(options) {
            var defaults = {
                preventWebBrowser: false,
                swipeLeft: null,
                swipeRight: null,
                swipeTop: null,
                swipeBottom: null
            };
            if (options) $.extend(defaults, options);
            return this.each(function() {
                var startX = -1,
                    startY = -1;
                var curX = -1,
                    curY = -1;

                function touchStart(event) {
                    var e = event.originalEvent;
                    if (e.targetTouches.length >= 1) {
                        startX = e.targetTouches[0].pageX;
                        startY = e.targetTouches[0].pageY
                    } else touchCancel(event)
                }

                function touchMove(event) {
                    if (defaults.preventWebBrowser) event.preventDefault();
                    var e = event.originalEvent;
                    if (e.targetTouches.length >= 1) {
                        curX = e.targetTouches[0].pageX;
                        curY = e.targetTouches[0].pageY
                    } else touchCancel(event)
                }

                function touchEnd(event) {
                    if (curX > 0 || curY > 0) {
                        triggerHandler();
                        touchCancel(event)
                    } else touchCancel(event)
                }

                function touchCancel(event) {
                    startX = -1;
                    startY = -1;
                    curX = -1;
                    curY = -1
                }

                function triggerHandler() {
                    if (curX > startX) {
                        if (defaults.swipeRight) defaults.swipeRight.call()
                    } else if (defaults.swipeLeft) defaults.swipeLeft.call();
                    if (curY > startY) {
                        if (defaults.swipeBottom) defaults.swipeBottom.call()
                    } else if (defaults.swipeTop) defaults.swipeTop.call()
                }
                try {
                    $(this).bind("touchstart", touchStart);
                    $(this).bind("touchmove", touchMove);
                    $(this).bind("touchend", touchEnd);
                    $(this).bind("touchcancel", touchCancel)
                } catch (e) {}
            })
        }
    })(jQuery);
    (function($) {
        $.fn.lightboxHTML5VideoControls = function(skinFolder, parentInst, hidecontrols, hideplaybutton) {
            var isTouch = "ontouchstart" in window;
            var eStart = isTouch ? "touchstart" : "mousedown";
            var eMove = isTouch ? "touchmove" : "mousemove";
            var eCancel = isTouch ? "touchcancel" : "mouseup";
            var eClick = isTouch ? "touchstart" : "click";
            var BUTTON_SIZE =
                32;
            var BAR_HEIGHT = isTouch ? 48 : 36;
            var hideControlsTimerId = null;
            var hideVolumeBarTimeoutId = null;
            var sliderDragging = false;
            var isFullscreen = false;
            var userActive = true;
            var isIPhone = navigator.userAgent.match(/iPod/i) != null || navigator.userAgent.match(/iPhone/i) != null;
            var isHd = $(this).data("ishd");
            var hd = $(this).data("hd");
            var src = $(this).data("src");
            var $videoObj = $(this);
            $videoObj.get(0).removeAttribute("controls");
            if (isIPhone) {
                var h = $videoObj.height() - BAR_HEIGHT;
                $videoObj.css({
                    height: h
                })
            }
            var $videoPlay = $("<div class='html5boxVideoPlay'></div>");
            if (!isIPhone) {
                $videoObj.after($videoPlay);
                $videoPlay.css({
                    position: "absolute",
                    top: "50%",
                    left: "50%",
                    display: "block",
                    cursor: "pointer",
                    width: 64,
                    height: 64,
                    "margin-left": -32,
                    "margin-top": -32,
                    "background-image": "url('" + skinFolder + "html5boxplayer_playvideo.png" + "')",
                    "background-position": "center center",
                    "background-repeat": "no-repeat"
                }).bind(eClick, function() {
                    $videoObj.get(0).play()
                })
            }
            var $videoFullscreenBg = $("<div class='html5boxVideoFullscreenBg'></div>");
            var $videoControls = $("<div class='html5boxVideoControls'>" +
                "<div class='html5boxVideoControlsBg'></div>" + "<div class='html5boxPlayPause'>" + "<div class='html5boxPlay'></div>" + "<div class='html5boxPause'></div>" + "</div>" + "<div class='html5boxTimeCurrent'>--:--</div>" + "<div class='html5boxFullscreen'></div>" + "<div class='html5boxHD'></div>" + "<div class='html5boxVolume'>" + "<div class='html5boxVolumeButton'></div>" + "<div class='html5boxVolumeBar'>" + "<div class='html5boxVolumeBarBg'>" + "<div class='html5boxVolumeBarActive'></div>" + "</div>" + "</div>" + "</div>" + "<div class='html5boxTimeTotal'>--:--</div>" +
                "<div class='html5boxSeeker'>" + "<div class='html5boxSeekerBuffer'></div>" + "<div class='html5boxSeekerPlay'></div>" + "<div class='html5boxSeekerHandler'></div>" + "</div>" + "<div style='clear:both;'></div>" + "</div>");
            $videoObj.after($videoControls);
            $videoObj.after($videoFullscreenBg);
            $videoFullscreenBg.css({
                display: "none",
                position: "fixed",
                left: 0,
                top: 0,
                bottom: 0,
                right: 0,
                "z-index": 2147483647
            });
            $videoControls.css({
                display: "block",
                position: "absolute",
                width: "100%",
                height: BAR_HEIGHT,
                left: 0,
                bottom: 0,
                right: 0,
                "max-width": "640px",
                margin: "0 auto"
            });
            var userActivate = function() {
                userActive = true
            };
            $videoObj.bind(eClick, function() {
                userActive = true
            }).hover(function() {
                userActive = true
            }, function() {
                userActive = false
            });
            if (!hidecontrols) setInterval(function() {
                if (userActive) {
                    $videoControls.show();
                    userActive = false;
                    clearTimeout(hideControlsTimerId);
                    hideControlsTimerId = setTimeout(function() {
                        if (!$videoObj.get(0).paused) $videoControls.fadeOut()
                    }, 5E3)
                }
            }, 250);
            $(".html5boxVideoControlsBg", $videoControls).css({
                display: "block",
                position: "absolute",
                width: "100%",
                height: "100%",
                left: 0,
                top: 0,
                "background-color": "#000000",
                opacity: 0.7,
                filter: "alpha(opacity=70)"
            });
            $(".html5boxPlayPause", $videoControls).css({
                display: "block",
                position: "relative",
                width: BUTTON_SIZE + "px",
                height: BUTTON_SIZE + "px",
                margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2),
                "float": "left"
            });
            var $videoBtnPlay = $(".html5boxPlay", $videoControls);
            var $videoBtnPause = $(".html5boxPause", $videoControls);
            $videoBtnPlay.css({
                display: "block",
                position: "absolute",
                top: 0,
                left: 0,
                width: BUTTON_SIZE + "px",
                height: BUTTON_SIZE +
                    "px",
                cursor: "pointer",
                "background-image": "url('" + skinFolder + "html5boxplayer_playpause.png" + "')",
                "background-position": "top left"
            }).hover(function() {
                $(this).css({
                    "background-position": "bottom left"
                })
            }, function() {
                $(this).css({
                    "background-position": "top left"
                })
            }).bind(eClick, function() {
                $videoObj.get(0).play()
            });
            $videoBtnPause.css({
                display: "none",
                position: "absolute",
                top: 0,
                left: 0,
                width: BUTTON_SIZE + "px",
                height: BUTTON_SIZE + "px",
                cursor: "pointer",
                "background-image": "url('" + skinFolder + "html5boxplayer_playpause.png" +
                    "')",
                "background-position": "top right"
            }).hover(function() {
                $(this).css({
                    "background-position": "bottom right"
                })
            }, function() {
                $(this).css({
                    "background-position": "top right"
                })
            }).bind(eClick, function() {
                $videoObj.get(0).pause()
            });
            var $videoTimeCurrent = $(".html5boxTimeCurrent", $videoControls);
            var $videoTimeTotal = $(".html5boxTimeTotal", $videoControls);
            var $videoSeeker = $(".html5boxSeeker", $videoControls);
            var $videoSeekerPlay = $(".html5boxSeekerPlay", $videoControls);
            var $videoSeekerBuffer = $(".html5boxSeekerBuffer",
                $videoControls);
            var $videoSeekerHandler = $(".html5boxSeekerHandler", $videoControls);
            $videoTimeCurrent.css({
                display: "block",
                position: "relative",
                "float": "left",
                "line-height": BAR_HEIGHT + "px",
                "font-weight": "normal",
                "font-size": "12px",
                margin: "0 8px",
                "font-family": "Arial, Helvetica, sans-serif",
                color: "#fff"
            });
            $videoTimeTotal.css({
                display: "block",
                position: "relative",
                "float": "right",
                "line-height": BAR_HEIGHT + "px",
                "font-weight": "normal",
                "font-size": "12px",
                margin: "0 8px",
                "font-family": "Arial, Helvetica, sans-serif",
                color: "#fff"
            });
            $videoSeeker.css({
                display: "block",
                cursor: "pointer",
                overflow: "hidden",
                position: "relative",
                height: "10px",
                "background-color": "#222",
                margin: Math.floor((BAR_HEIGHT - 10) / 2) + "px 4px"
            }).bind(eStart, function(e) {
                var e0 = isTouch ? e.originalEvent.touches[0] : e;
                var pos = e0.pageX - $videoSeeker.offset().left;
                $videoSeekerPlay.css({
                    width: pos
                });
                $videoObj.get(0).currentTime = pos * $videoObj.get(0).duration / $videoSeeker.width();
                $videoSeeker.bind(eMove, function(e) {
                    var e0 = isTouch ? e.originalEvent.touches[0] : e;
                    var pos =
                        e0.pageX - $videoSeeker.offset().left;
                    $videoSeekerPlay.css({
                        width: pos
                    });
                    $videoObj.get(0).currentTime = pos * $videoObj.get(0).duration / $videoSeeker.width()
                })
            }).bind(eCancel, function() {
                $videoSeeker.unbind(eMove)
            });
            $videoSeekerBuffer.css({
                display: "block",
                position: "absolute",
                left: 0,
                top: 0,
                height: "100%",
                "background-color": "#444"
            });
            $videoSeekerPlay.css({
                display: "block",
                position: "absolute",
                left: 0,
                top: 0,
                height: "100%",
                "background-color": "#fcc500"
            });
            if (!isIPhone && ($videoObj.get(0).requestFullscreen || $videoObj.get(0).webkitRequestFullScreen ||
                    $videoObj.get(0).mozRequestFullScreen || $videoObj.get(0).webkitEnterFullScreen || $videoObj.get(0).msRequestFullscreen)) {
                var switchScreen = function(fullscreen) {
                    if (fullscreen) {
                        if ($videoObj.get(0).requestFullscreen) $videoObj.get(0).requestFullscreen();
                        else if ($videoObj.get(0).webkitRequestFullScreen) $videoObj.get(0).webkitRequestFullScreen();
                        else if ($videoObj.get(0).mozRequestFullScreen) $videoObj.get(0).mozRequestFullScreen();
                        else if ($videoObj.get(0).webkitEnterFullScreen) $videoObj.get(0).webkitEnterFullScreen();
                        if ($videoObj.get(0).msRequestFullscreen) $videoObj.get(0).msRequestFullscreen()
                    } else if (document.cancelFullScreen) document.cancelFullScreen();
                    else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
                    else if (document.webkitCancelFullScreen) document.webkitCancelFullScreen();
                    else if (document.webkitExitFullscreen) document.webkitExitFullscreen();
                    else if (document.msExitFullscreen) document.msExitFullscreen()
                };
                var switchScreenCSS = function(fullscreen) {
                    $videoControls.css({
                        position: fullscreen ? "fixed" : "absolute"
                    });
                    var backgroundPosY = $videoFullscreen.css("background-position") ? $videoFullscreen.css("background-position").split(" ")[1] : $videoFullscreen.css("background-position-y");
                    $videoFullscreen.css({
                        "background-position": (fullscreen ? "right" : "left") + " " + backgroundPosY
                    });
                    $videoFullscreenBg.css({
                        display: fullscreen ? "block" : "none"
                    });
                    if (fullscreen) {
                        $(document).bind("mousemove", userActivate);
                        $videoControls.css({
                            "z-index": 2147483647
                        })
                    } else {
                        $(document).unbind("mousemove", userActivate);
                        $videoControls.css({
                            "z-index": ""
                        })
                    }
                };
                document.addEventListener("fullscreenchange", function() {
                    isFullscreen = document.fullscreen;
                    switchScreenCSS(document.fullscreen)
                }, false);
                document.addEventListener("mozfullscreenchange", function() {
                    isFullscreen = document.mozFullScreen;
                    switchScreenCSS(document.mozFullScreen)
                }, false);
                document.addEventListener("webkitfullscreenchange", function() {
                    isFullscreen = document.webkitIsFullScreen;
                    switchScreenCSS(document.webkitIsFullScreen)
                }, false);
                $videoObj.get(0).addEventListener("webkitbeginfullscreen", function() {
                    isFullscreen =
                        true
                }, false);
                $videoObj.get(0).addEventListener("webkitendfullscreen", function() {
                    isFullscreen = false
                }, false);
                $("head").append("<style type='text/css'>video::-webkit-media-controls { display:none !important; }</style>");
                var $videoFullscreen = $(".html5boxFullscreen", $videoControls);
                $videoFullscreen.css({
                    display: "block",
                    position: "relative",
                    "float": "right",
                    width: BUTTON_SIZE + "px",
                    height: BUTTON_SIZE + "px",
                    margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2),
                    cursor: "pointer",
                    "background-image": "url('" + skinFolder + "html5boxplayer_fullscreen.png" +
                        "')",
                    "background-position": "left top"
                }).hover(function() {
                    var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
                    $(this).css({
                        "background-position": backgroundPosX + " bottom"
                    })
                }, function() {
                    var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
                    $(this).css({
                        "background-position": backgroundPosX + " top"
                    })
                }).bind(eClick, function() {
                    isFullscreen = !isFullscreen;
                    switchScreen(isFullscreen)
                })
            }
            if (hd) {
                var $videoHD = $(".html5boxHD", $videoControls);
                $videoHD.css({
                    display: "block",
                    position: "relative",
                    "float": "right",
                    width: BUTTON_SIZE + "px",
                    height: BUTTON_SIZE + "px",
                    margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2),
                    cursor: "pointer",
                    "background-image": "url('" + skinFolder + "html5boxplayer_hd.png" + "')",
                    "background-position": (isHd ? "right" : "left") + " center"
                }).bind(eClick, function() {
                    isHd = !isHd;
                    $(this).css({
                        "background-position": (isHd ? "right" : "left") + " center"
                    });
                    parentInst.isHd =
                        isHd;
                    var isPaused = $videoObj.get(0).isPaused;
                    $videoObj.get(0).setAttribute("src", (isHd ? hd : src) + "#t=" + $videoObj.get(0).currentTime);
                    if (!isPaused) $videoObj.get(0).play();
                    else if (!isIPhone) $videoObj.get(0).pause()
                })
            }
            var volume = $videoObj.get(0).volume;
            $videoObj.get(0).volume = volume / 2 + 0.1;
            if ($videoObj.get(0).volume === volume / 2 + 0.1) {
                $videoObj.get(0).volume = volume;
                var $videoVolume = $(".html5boxVolume", $videoControls);
                var $videoVolumeButton = $(".html5boxVolumeButton", $videoControls);
                var $videoVolumeBar = $(".html5boxVolumeBar",
                    $videoControls);
                var $videoVolumeBarBg = $(".html5boxVolumeBarBg", $videoControls);
                var $videoVolumeBarActive = $(".html5boxVolumeBarActive", $videoControls);
                $videoVolume.css({
                    display: "block",
                    position: "relative",
                    "float": "right",
                    width: BUTTON_SIZE + "px",
                    height: BUTTON_SIZE + "px",
                    margin: Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2)
                }).hover(function() {
                    clearTimeout(hideVolumeBarTimeoutId);
                    var volume = $videoObj.get(0).volume;
                    $videoVolumeBarActive.css({
                        height: Math.round(volume * 100) + "%"
                    });
                    $videoVolumeBar.show()
                }, function() {
                    clearTimeout(hideVolumeBarTimeoutId);
                    hideVolumeBarTimeoutId = setTimeout(function() {
                        $videoVolumeBar.hide()
                    }, 1E3)
                });
                $videoVolumeButton.css({
                    display: "block",
                    position: "absolute",
                    top: 0,
                    left: 0,
                    width: BUTTON_SIZE + "px",
                    height: BUTTON_SIZE + "px",
                    cursor: "pointer",
                    "background-image": "url('" + skinFolder + "html5boxplayer_volume.png" + "')",
                    "background-position": "top left"
                }).hover(function() {
                    var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
                    $(this).css({
                        "background-position": backgroundPosX +
                            " bottom"
                    })
                }, function() {
                    var backgroundPosX = $(this).css("background-position") ? $(this).css("background-position").split(" ")[0] : $(this).css("background-position-x");
                    $(this).css({
                        "background-position": backgroundPosX + " top"
                    })
                }).bind(eClick, function() {
                    var volume = $videoObj.get(0).volume;
                    if (volume > 0) {
                        volumeSaved = volume;
                        volume = 0
                    } else volume = volumeSaved;
                    var backgroundPosY = $(this).css("background-position") ? $(this).css("background-position").split(" ")[1] : $(this).css("background-position-y");
                    $videoVolumeButton.css({
                        "background-position": (volume >
                            0 ? "left" : "right") + " " + backgroundPosY
                    });
                    $videoObj.get(0).volume = volume;
                    $videoVolumeBarActive.css({
                        height: Math.round(volume * 100) + "%"
                    })
                });
                $videoVolumeBar.css({
                    display: "none",
                    position: "absolute",
                    left: 4,
                    bottom: "100%",
                    width: 24,
                    height: 80,
                    "margin-bottom": Math.floor((BAR_HEIGHT - BUTTON_SIZE) / 2),
                    "background-color": "#000000",
                    opacity: 0.7,
                    filter: "alpha(opacity=70)"
                });
                $videoVolumeBarBg.css({
                    display: "block",
                    position: "relative",
                    width: 10,
                    height: 68,
                    margin: 7,
                    cursor: "pointer",
                    "background-color": "#222"
                });
                $videoVolumeBarActive.css({
                    display: "block",
                    position: "absolute",
                    bottom: 0,
                    left: 0,
                    width: "100%",
                    height: "100%",
                    "background-color": "#fcc500"
                });
                $videoVolumeBarBg.bind(eStart, function(e) {
                    var e0 = isTouch ? e.originalEvent.touches[0] : e;
                    var vol = 1 - (e0.pageY - $videoVolumeBarBg.offset().top) / $videoVolumeBarBg.height();
                    vol = vol > 1 ? 1 : vol < 0 ? 0 : vol;
                    $videoVolumeBarActive.css({
                        height: Math.round(vol * 100) + "%"
                    });
                    $videoVolumeButton.css({
                        "background-position": "left " + (vol > 0 ? "top" : "bottom")
                    });
                    $videoObj.get(0).volume = vol;
                    $videoVolumeBarBg.bind(eMove, function(e) {
                        var e0 = isTouch ?
                            e.originalEvent.touches[0] : e;
                        var vol = 1 - (e0.pageY - $videoVolumeBarBg.offset().top) / $videoVolumeBarBg.height();
                        vol = vol > 1 ? 1 : vol < 0 ? 0 : vol;
                        $videoVolumeBarActive.css({
                            height: Math.round(vol * 100) + "%"
                        });
                        $videoVolumeButton.css({
                            "background-position": "left " + (vol > 0 ? "top" : "bottom")
                        });
                        $videoObj.get(0).volume = vol
                    })
                }).bind(eCancel, function() {
                    $videoVolumeBarBg.unbind(eMove)
                })
            }
            var calcTimeFormat = function(seconds) {
                var h0 = Math.floor(seconds / 3600);
                var h = h0 < 10 ? "0" + h0 : h0;
                var m0 = Math.floor((seconds - h0 * 60) / 60);
                var m = m0 < 10 ?
                    "0" + m0 : m0;
                var s0 = Math.floor(seconds - (h0 * 3600 + m0 * 60));
                var s = s0 < 10 ? "0" + s0 : s0;
                var r = m + ":" + s;
                if (h0 > 0) r = h + ":" + r;
                return r
            };
            if (hideplaybutton) $videoPlay.hide();
            if (hidecontrols) $videoControls.hide();
            var onVideoPlay = function() {
                if (!hideplaybutton) $videoPlay.hide();
                if (!hidecontrols) {
                    $videoBtnPlay.hide();
                    $videoBtnPause.show()
                }
            };
            var onVideoPause = function() {
                if (!hideplaybutton) $videoPlay.show();
                if (!hidecontrols) {
                    $videoControls.show();
                    clearTimeout(hideControlsTimerId);
                    $videoBtnPlay.show();
                    $videoBtnPause.hide()
                }
            };
            var onVideoEnded = function() {
                $(window).trigger("html5lightbox.videoended");
                if (!hideplaybutton) $videoPlay.show();
                if (!hidecontrols) {
                    $videoControls.show();
                    clearTimeout(hideControlsTimerId);
                    $videoBtnPlay.show();
                    $videoBtnPause.hide()
                }
            };
            var onVideoUpdate = function() {
                var curTime = $videoObj.get(0).currentTime;
                if (curTime) {
                    $videoTimeCurrent.text(calcTimeFormat(curTime));
                    var duration = $videoObj.get(0).duration;
                    if (duration) {
                        $videoTimeTotal.text(calcTimeFormat(duration));
                        if (!sliderDragging) {
                            var sliderW = $videoSeeker.width();
                            var pos = Math.round(sliderW * curTime / duration);
                            $videoSeekerPlay.css({
                                width: pos
                            });
                            $videoSeekerHandler.css({
                                left: pos
                            })
                        }
                    }
                }
            };
            var onVideoProgress = function() {
                if ($videoObj.get(0).buffered && $videoObj.get(0).buffered.length > 0 && !isNaN($videoObj.get(0).buffered.end(0)) && !isNaN($videoObj.get(0).duration)) {
                    var sliderW = $videoSeeker.width();
                    $videoSeekerBuffer.css({
                        width: Math.round(sliderW * $videoObj.get(0).buffered.end(0) / $videoObj.get(0).duration)
                    })
                }
            };
            try {
                $videoObj.bind("play", onVideoPlay);
                $videoObj.bind("pause",
                    onVideoPause);
                $videoObj.bind("ended", onVideoEnded);
                $videoObj.bind("timeupdate", onVideoUpdate);
                $videoObj.bind("progress", onVideoProgress)
            } catch (e) {}
        }
    })(jQuery);
    jQuery(document).ready(function() {
        if (typeof html5Lightbox === "undefined") html5Lightbox = jQuery(".html5lightbox").html5lightbox()
    })
};
/*!
Waypoints - 3.1.1
Copyright © 2011-2015 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/waypoints/blog/master/licenses.txt
*/
!function(){"use strict";function t(o){if(!o)throw new Error("No options passed to Waypoint constructor");if(!o.element)throw new Error("No element option passed to Waypoint constructor");if(!o.handler)throw new Error("No handler option passed to Waypoint constructor");this.key="waypoint-"+e,this.options=t.Adapter.extend({},t.defaults,o),this.element=this.options.element,this.adapter=new t.Adapter(this.element),this.callback=o.handler,this.axis=this.options.horizontal?"horizontal":"vertical",this.enabled=this.options.enabled,this.triggerPoint=null,this.group=t.Group.findOrCreate({name:this.options.group,axis:this.axis}),this.context=t.Context.findOrCreateByElement(this.options.context),t.offsetAliases[this.options.offset]&&(this.options.offset=t.offsetAliases[this.options.offset]),this.group.add(this),this.context.add(this),i[this.key]=this,e+=1}var e=0,i={};t.prototype.queueTrigger=function(t){this.group.queueTrigger(this,t)},t.prototype.trigger=function(t){this.enabled&&this.callback&&this.callback.apply(this,t)},t.prototype.destroy=function(){this.context.remove(this),this.group.remove(this),delete i[this.key]},t.prototype.disable=function(){return this.enabled=!1,this},t.prototype.enable=function(){return this.context.refresh(),this.enabled=!0,this},t.prototype.next=function(){return this.group.next(this)},t.prototype.previous=function(){return this.group.previous(this)},t.invokeAll=function(t){var e=[];for(var o in i)e.push(i[o]);for(var n=0,r=e.length;r>n;n++)e[n][t]()},t.destroyAll=function(){t.invokeAll("destroy")},t.disableAll=function(){t.invokeAll("disable")},t.enableAll=function(){t.invokeAll("enable")},t.refreshAll=function(){t.Context.refreshAll()},t.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight},t.viewportWidth=function(){return document.documentElement.clientWidth},t.adapters=[],t.defaults={context:window,continuous:!0,enabled:!0,group:"default",horizontal:!1,offset:0},t.offsetAliases={"bottom-in-view":function(){return this.context.innerHeight()-this.adapter.outerHeight()},"right-in-view":function(){return this.context.innerWidth()-this.adapter.outerWidth()}},window.Waypoint=t}(),function(){"use strict";function t(t){window.setTimeout(t,1e3/60)}function e(t){this.element=t,this.Adapter=n.Adapter,this.adapter=new this.Adapter(t),this.key="waypoint-context-"+i,this.didScroll=!1,this.didResize=!1,this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()},this.waypoints={vertical:{},horizontal:{}},t.waypointContextKey=this.key,o[t.waypointContextKey]=this,i+=1,this.createThrottledScrollHandler(),this.createThrottledResizeHandler()}var i=0,o={},n=window.Waypoint,r=window.onload;e.prototype.add=function(t){var e=t.options.horizontal?"horizontal":"vertical";this.waypoints[e][t.key]=t,this.refresh()},e.prototype.checkEmpty=function(){var t=this.Adapter.isEmptyObject(this.waypoints.horizontal),e=this.Adapter.isEmptyObject(this.waypoints.vertical);t&&e&&(this.adapter.off(".waypoints"),delete o[this.key])},e.prototype.createThrottledResizeHandler=function(){function t(){e.handleResize(),e.didResize=!1}var e=this;this.adapter.on("resize.waypoints",function(){e.didResize||(e.didResize=!0,n.requestAnimationFrame(t))})},e.prototype.createThrottledScrollHandler=function(){function t(){e.handleScroll(),e.didScroll=!1}var e=this;this.adapter.on("scroll.waypoints",function(){(!e.didScroll||n.isTouch)&&(e.didScroll=!0,n.requestAnimationFrame(t))})},e.prototype.handleResize=function(){n.Context.refreshAll()},e.prototype.handleScroll=function(){var t={},e={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:"right",backward:"left"},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:"down",backward:"up"}};for(var i in e){var o=e[i],n=o.newScroll>o.oldScroll,r=n?o.forward:o.backward;for(var s in this.waypoints[i]){var a=this.waypoints[i][s],l=o.oldScroll<a.triggerPoint,h=o.newScroll>=a.triggerPoint,p=l&&h,u=!l&&!h;(p||u)&&(a.queueTrigger(r),t[a.group.id]=a.group)}}for(var c in t)t[c].flushTriggers();this.oldScroll={x:e.horizontal.newScroll,y:e.vertical.newScroll}},e.prototype.innerHeight=function(){return this.element==this.element.window?n.viewportHeight():this.adapter.innerHeight()},e.prototype.remove=function(t){delete this.waypoints[t.axis][t.key],this.checkEmpty()},e.prototype.innerWidth=function(){return this.element==this.element.window?n.viewportWidth():this.adapter.innerWidth()},e.prototype.destroy=function(){var t=[];for(var e in this.waypoints)for(var i in this.waypoints[e])t.push(this.waypoints[e][i]);for(var o=0,n=t.length;n>o;o++)t[o].destroy()},e.prototype.refresh=function(){var t,e=this.element==this.element.window,i=this.adapter.offset(),o={};this.handleScroll(),t={horizontal:{contextOffset:e?0:i.left,contextScroll:e?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:"right",backward:"left",offsetProp:"left"},vertical:{contextOffset:e?0:i.top,contextScroll:e?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:"down",backward:"up",offsetProp:"top"}};for(var n in t){var r=t[n];for(var s in this.waypoints[n]){var a,l,h,p,u,c=this.waypoints[n][s],d=c.options.offset,f=c.triggerPoint,w=0,y=null==f;c.element!==c.element.window&&(w=c.adapter.offset()[r.offsetProp]),"function"==typeof d?d=d.apply(c):"string"==typeof d&&(d=parseFloat(d),c.options.offset.indexOf("%")>-1&&(d=Math.ceil(r.contextDimension*d/100))),a=r.contextScroll-r.contextOffset,c.triggerPoint=w+a-d,l=f<r.oldScroll,h=c.triggerPoint>=r.oldScroll,p=l&&h,u=!l&&!h,!y&&p?(c.queueTrigger(r.backward),o[c.group.id]=c.group):!y&&u?(c.queueTrigger(r.forward),o[c.group.id]=c.group):y&&r.oldScroll>=c.triggerPoint&&(c.queueTrigger(r.forward),o[c.group.id]=c.group)}}for(var g in o)o[g].flushTriggers();return this},e.findOrCreateByElement=function(t){return e.findByElement(t)||new e(t)},e.refreshAll=function(){for(var t in o)o[t].refresh()},e.findByElement=function(t){return o[t.waypointContextKey]},window.onload=function(){r&&r(),e.refreshAll()},n.requestAnimationFrame=function(e){var i=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||t;i.call(window,e)},n.Context=e}(),function(){"use strict";function t(t,e){return t.triggerPoint-e.triggerPoint}function e(t,e){return e.triggerPoint-t.triggerPoint}function i(t){this.name=t.name,this.axis=t.axis,this.id=this.name+"-"+this.axis,this.waypoints=[],this.clearTriggerQueues(),o[this.axis][this.name]=this}var o={vertical:{},horizontal:{}},n=window.Waypoint;i.prototype.add=function(t){this.waypoints.push(t)},i.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}},i.prototype.flushTriggers=function(){for(var i in this.triggerQueues){var o=this.triggerQueues[i],n="up"===i||"left"===i;o.sort(n?e:t);for(var r=0,s=o.length;s>r;r+=1){var a=o[r];(a.options.continuous||r===o.length-1)&&a.trigger([i])}}this.clearTriggerQueues()},i.prototype.next=function(e){this.waypoints.sort(t);var i=n.Adapter.inArray(e,this.waypoints),o=i===this.waypoints.length-1;return o?null:this.waypoints[i+1]},i.prototype.previous=function(e){this.waypoints.sort(t);var i=n.Adapter.inArray(e,this.waypoints);return i?this.waypoints[i-1]:null},i.prototype.queueTrigger=function(t,e){this.triggerQueues[e].push(t)},i.prototype.remove=function(t){var e=n.Adapter.inArray(t,this.waypoints);e>-1&&this.waypoints.splice(e,1)},i.prototype.first=function(){return this.waypoints[0]},i.prototype.last=function(){return this.waypoints[this.waypoints.length-1]},i.findOrCreate=function(t){return o[t.axis][t.name]||new i(t)},n.Group=i}(),function(){"use strict";function t(t){this.$element=e(t)}var e=window.jQuery,i=window.Waypoint;e.each(["innerHeight","innerWidth","off","offset","on","outerHeight","outerWidth","scrollLeft","scrollTop"],function(e,i){t.prototype[i]=function(){var t=Array.prototype.slice.call(arguments);return this.$element[i].apply(this.$element,t)}}),e.each(["extend","inArray","isEmptyObject"],function(i,o){t[o]=e[o]}),i.adapters.push({name:"jquery",Adapter:t}),i.Adapter=t}(),function(){"use strict";function t(t){return function(){var i=[],o=arguments[0];return t.isFunction(arguments[0])&&(o=t.extend({},arguments[1]),o.handler=arguments[0]),this.each(function(){var n=t.extend({},o,{element:this});"string"==typeof n.context&&(n.context=t(this).closest(n.context)[0]),i.push(new e(n))}),i}}var e=window.Waypoint;window.jQuery&&(window.jQuery.fn.waypoint=t(window.jQuery)),window.Zepto&&(window.Zepto.fn.waypoint=t(window.Zepto))}();
/*!
 * smooth-scroll v12.1.5: Animate scrolling to anchor links
 * (c) 2017 Chris Ferdinandi
 * MIT License
 * http://github.com/cferdinandi/smooth-scroll
 */

(function (root, factory) {
	if ( typeof define === 'function' && define.amd ) {
		define([], (function () {
			return factory(root);
		}));
	} else if ( typeof exports === 'object' ) {
		module.exports = factory(root);
	} else {
		root.SmoothScroll = factory(root);
	}
})(typeof global !== 'undefined' ? global : typeof window !== 'undefined' ? window : this, (function (window) {

	'use strict';

	//
	// Feature Test
	//

	var supports =
		'querySelector' in document &&
		'addEventListener' in window &&
		'requestAnimationFrame' in window &&
		'closest' in window.Element.prototype;


	//
	// Default settings
	//

	var defaults = {
		// Selectors
		ignore: '[data-scroll-ignore]',
		header: null,

		// Speed & Easing
		speed: 500,
		offset: 0,
		easing: 'easeInOutCubic',
		customEasing: null,

		// Callback API
		before: function () {},
		after: function () {}
	};


	//
	// Utility Methods
	//

	/**
	 * Merge two or more objects. Returns a new object.
	 * @param {Object}   objects  The objects to merge together
	 * @returns {Object}          Merged values of defaults and options
	 */
	var extend = function () {

		// Variables
		var extended = {};
		var deep = false;
		var i = 0;
		var length = arguments.length;

		// Merge the object into the extended object
		var merge = function (obj) {
			for (var prop in obj) {
				if (obj.hasOwnProperty(prop)) {
					extended[prop] = obj[prop];
				}
			}
		};

		// Loop through each object and conduct a merge
		for ( ; i < length; i++ ) {
			var obj = arguments[i];
			merge(obj);
		}

		return extended;

	};

	/**
	 * Get the height of an element.
	 * @param  {Node} elem The element to get the height of
	 * @return {Number}    The element's height in pixels
	 */
	var getHeight = function (elem) {
		return parseInt(window.getComputedStyle(elem).height, 10);
	};

	/**
	 * Escape special characters for use with querySelector
	 * @param {String} id The anchor ID to escape
	 * @author Mathias Bynens
	 * @link https://github.com/mathiasbynens/CSS.escape
	 */
	var escapeCharacters = function (id) {

		// Remove leading hash
		if (id.charAt(0) === '#') {
			id = id.substr(1);
		}

		var string = String(id);
		var length = string.length;
		var index = -1;
		var codeUnit;
		var result = '';
		var firstCodeUnit = string.charCodeAt(0);
		while (++index < length) {
			codeUnit = string.charCodeAt(index);
			// Note: there’s no need to special-case astral symbols, surrogate
			// pairs, or lone surrogates.

			// If the character is NULL (U+0000), then throw an
			// `InvalidCharacterError` exception and terminate these steps.
			if (codeUnit === 0x0000) {
				throw new InvalidCharacterError(
					'Invalid character: the input contains U+0000.'
				);
			}

			if (
				// If the character is in the range [\1-\1F] (U+0001 to U+001F) or is
				// U+007F, […]
				(codeUnit >= 0x0001 && codeUnit <= 0x001F) || codeUnit == 0x007F ||
				// If the character is the first character and is in the range [0-9]
				// (U+0030 to U+0039), […]
				(index === 0 && codeUnit >= 0x0030 && codeUnit <= 0x0039) ||
				// If the character is the second character and is in the range [0-9]
				// (U+0030 to U+0039) and the first character is a `-` (U+002D), […]
				(
					index === 1 &&
					codeUnit >= 0x0030 && codeUnit <= 0x0039 &&
					firstCodeUnit === 0x002D
				)
			) {
				// http://dev.w3.org/csswg/cssom/#escape-a-character-as-code-point
				result += '\\' + codeUnit.toString(16) + ' ';
				continue;
			}

			// If the character is not handled by one of the above rules and is
			// greater than or equal to U+0080, is `-` (U+002D) or `_` (U+005F), or
			// is in one of the ranges [0-9] (U+0030 to U+0039), [A-Z] (U+0041 to
			// U+005A), or [a-z] (U+0061 to U+007A), […]
			if (
				codeUnit >= 0x0080 ||
				codeUnit === 0x002D ||
				codeUnit === 0x005F ||
				codeUnit >= 0x0030 && codeUnit <= 0x0039 ||
				codeUnit >= 0x0041 && codeUnit <= 0x005A ||
				codeUnit >= 0x0061 && codeUnit <= 0x007A
			) {
				// the character itself
				result += string.charAt(index);
				continue;
			}

			// Otherwise, the escaped character.
			// http://dev.w3.org/csswg/cssom/#escape-a-character
			result += '\\' + string.charAt(index);

		}

		return '#' + result;

	};

	/**
	 * Calculate the easing pattern
	 * @link https://gist.github.com/gre/1650294
	 * @param {String} type Easing pattern
	 * @param {Number} time Time animation should take to complete
	 * @returns {Number}
	 */
	var easingPattern = function (settings, time) {
		var pattern;

		// Default Easing Patterns
		if (settings.easing === 'easeInQuad') pattern = time * time; // accelerating from zero velocity
		if (settings.easing === 'easeOutQuad') pattern = time * (2 - time); // decelerating to zero velocity
		if (settings.easing === 'easeInOutQuad') pattern = time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time; // acceleration until halfway, then deceleration
		if (settings.easing === 'easeInCubic') pattern = time * time * time; // accelerating from zero velocity
		if (settings.easing === 'easeOutCubic') pattern = (--time) * time * time + 1; // decelerating to zero velocity
		if (settings.easing === 'easeInOutCubic') pattern = time < 0.5 ? 4 * time * time * time : (time - 1) * (2 * time - 2) * (2 * time - 2) + 1; // acceleration until halfway, then deceleration
		if (settings.easing === 'easeInQuart') pattern = time * time * time * time; // accelerating from zero velocity
		if (settings.easing === 'easeOutQuart') pattern = 1 - (--time) * time * time * time; // decelerating to zero velocity
		if (settings.easing === 'easeInOutQuart') pattern = time < 0.5 ? 8 * time * time * time * time : 1 - 8 * (--time) * time * time * time; // acceleration until halfway, then deceleration
		if (settings.easing === 'easeInQuint') pattern = time * time * time * time * time; // accelerating from zero velocity
		if (settings.easing === 'easeOutQuint') pattern = 1 + (--time) * time * time * time * time; // decelerating to zero velocity
		if (settings.easing === 'easeInOutQuint') pattern = time < 0.5 ? 16 * time * time * time * time * time : 1 + 16 * (--time) * time * time * time * time; // acceleration until halfway, then deceleration

		// Custom Easing Patterns
		if (!!settings.customEasing) pattern = settings.customEasing(time);

		return pattern || time; // no easing, no acceleration
	};

	/**
	 * Determine the document's height
	 * @returns {Number}
	 */
	var getDocumentHeight = function () {
		return Math.max(
			document.body.scrollHeight, document.documentElement.scrollHeight,
			document.body.offsetHeight, document.documentElement.offsetHeight,
			document.body.clientHeight, document.documentElement.clientHeight
		);
	};

	/**
	 * Calculate how far to scroll
	 * @param {Element} anchor The anchor element to scroll to
	 * @param {Number} headerHeight Height of a fixed header, if any
	 * @param {Number} offset Number of pixels by which to offset scroll
	 * @returns {Number}
	 */
	var getEndLocation = function (anchor, headerHeight, offset) {
		var location = 0;
		if (anchor.offsetParent) {
			do {
				location += anchor.offsetTop;
				anchor = anchor.offsetParent;
			} while (anchor);
		}
		location = Math.max(location - headerHeight - offset, 0);
		return location;
	};

	/**
	 * Get the height of the fixed header
	 * @param  {Node}   header The header
	 * @return {Number}        The height of the header
	 */
	var getHeaderHeight = function (header) {
		return !header ? 0 : (getHeight(header) + header.offsetTop);
	};

	/**
	 * Bring the anchored element into focus
	 * @param {Node}     anchor      The anchor element
	 * @param {Number}   endLocation The end location to scroll to
	 * @param {Boolean}  isNum       If true, scroll is to a position rather than an element
	 */
	var adjustFocus = function (anchor, endLocation, isNum) {

		// Don't run if scrolling to a number on the page
		if (isNum) return;

		// Otherwise, bring anchor element into focus
		anchor.focus();
		if (document.activeElement.id !== anchor.id) {
			anchor.setAttribute('tabindex', '-1');
			anchor.focus();
			anchor.style.outline = 'none';
		}
		window.scrollTo(0 , endLocation);

	};

	/**
	 * Check to see if user prefers reduced motion
	 * @param  {Object} settings Script settings
	 */
	var reduceMotion = function (settings) {
		if ('matchMedia' in window && window.matchMedia('(prefers-reduced-motion)').matches) {
			return true;
		}
		return false;
	};


	//
	// SmoothScroll Constructor
	//

	var SmoothScroll = function (selector, options) {

		//
		// Variables
		//

		var smoothScroll = {}; // Object for public APIs
		var settings, anchor, toggle, fixedHeader, headerHeight, eventTimeout, animationInterval;


		//
		// Methods
		//

		/**
		 * Cancel a scroll-in-progress
		 */
		smoothScroll.cancelScroll = function () {
			// clearInterval(animationInterval);
			cancelAnimationFrame(animationInterval);
		};

		/**
		 * Start/stop the scrolling animation
		 * @param {Node|Number} anchor  The element or position to scroll to
		 * @param {Element}     toggle  The element that toggled the scroll event
		 * @param {Object}      options
		 */
		smoothScroll.animateScroll = function (anchor, toggle, options) {

			// Local settings
			var animateSettings = extend(settings || defaults, options || {}); // Merge user options with defaults

			// Selectors and variables
			var isNum = Object.prototype.toString.call(anchor) === '[object Number]' ? true : false;
			var anchorElem = isNum || !anchor.tagName ? null : anchor;
			if (!isNum && !anchorElem) return;
			var startLocation = window.pageYOffset; // Current location on the page
			if (animateSettings.header && !fixedHeader) {
				// Get the fixed header if not already set
				fixedHeader = document.querySelector( animateSettings.header );
			}
			if (!headerHeight) {
				// Get the height of a fixed header if one exists and not already set
				headerHeight = getHeaderHeight(fixedHeader);
			}
			var endLocation = isNum ? anchor : getEndLocation(anchorElem, headerHeight, parseInt((typeof animateSettings.offset === 'function' ? animateSettings.offset() : animateSettings.offset), 10)); // Location to scroll to
			var distance = endLocation - startLocation; // distance to travel
			var documentHeight = getDocumentHeight();
			var timeLapsed = 0;
			var start, percentage, position;

			/**
			 * Stop the scroll animation when it reaches its target (or the bottom/top of page)
			 * @param {Number} position Current position on the page
			 * @param {Number} endLocation Scroll to location
			 * @param {Number} animationInterval How much to scroll on this loop
			 */
			var stopAnimateScroll = function (position, endLocation) {

				// Get the current location
				var currentLocation = window.pageYOffset;

				// Check if the end location has been reached yet (or we've hit the end of the document)
				if ( position == endLocation || currentLocation == endLocation || ((startLocation < endLocation && window.innerHeight + currentLocation) >= documentHeight )) {

					// Clear the animation timer
					smoothScroll.cancelScroll();

					// Bring the anchored element into focus
					adjustFocus(anchor, endLocation, isNum);

					// Run callback after animation complete
					animateSettings.after(anchor, toggle);

					// Reset start
					start = null;

					return true;

				}
			};

			/**
			 * Loop scrolling animation
			 */
			var loopAnimateScroll = function (timestamp) {
				if (!start) { start = timestamp; }
				timeLapsed += timestamp - start;
				percentage = (timeLapsed / parseInt(animateSettings.speed, 10));
				percentage = (percentage > 1) ? 1 : percentage;
				position = startLocation + (distance * easingPattern(animateSettings, percentage));
				window.scrollTo(0, Math.floor(position));
				if (!stopAnimateScroll(position, endLocation)) {
					window.requestAnimationFrame(loopAnimateScroll);
					start = timestamp;
				}
			};

			/**
			 * Reset position to fix weird iOS bug
			 * @link https://github.com/cferdinandi/smooth-scroll/issues/45
			 */
			if (window.pageYOffset === 0) {
				window.scrollTo( 0, 0 );
			}

			// Run callback before animation starts
			animateSettings.before(anchor, toggle);

			// Start scrolling animation
			smoothScroll.cancelScroll();
			window.requestAnimationFrame(loopAnimateScroll);


		};

		/**
		 * Handle has change event
		 */
		var hashChangeHandler = function (event) {

			// Only run if there's an anchor element to scroll to
			if (!anchor) return;

			// Reset the anchor element's ID
			anchor.id = anchor.getAttribute('data-scroll-id');

			// Scroll to the anchored content
			smoothScroll.animateScroll(anchor, toggle);

			// Reset anchor and toggle
			anchor = null;
			toggle = null;

		};

		/**
		 * If smooth scroll element clicked, animate scroll
		 */
		var clickHandler = function (event) {

			// Don't run if the user prefers reduced motion
			if (reduceMotion(settings)) return;

			// Don't run if right-click or command/control + click
			if (event.button !== 0 || event.metaKey || event.ctrlKey) return;

			// Check if a smooth scroll link was clicked
			toggle = event.target.closest(selector);
			if (!toggle || toggle.tagName.toLowerCase() !== 'a' || event.target.closest(settings.ignore)) return;

			// Only run if link is an anchor and points to the current page
			if (toggle.hostname !== window.location.hostname || toggle.pathname !== window.location.pathname || !/#/.test(toggle.href)) return;

			// Get the sanitized hash
			var hash;
			try {
				hash = escapeCharacters(decodeURIComponent(toggle.hash));
			} catch(e) {
				hash = escapeCharacters(toggle.hash);
			}

			// If the hash is empty, scroll to the top of the page
			if (hash === '#') {

				// Prevent default link behavior
				event.preventDefault();

				// Set the anchored element
				anchor = document.body;

				// Save or create the ID as a data attribute and remove it (prevents scroll jump)
				var id = anchor.id ? anchor.id : 'smooth-scroll-top';
				anchor.setAttribute('data-scroll-id', id);
				anchor.id = '';

				// If no hash change event will happen, fire manually
				// Otherwise, update the hash
				if (window.location.hash.substring(1) === id) {
					hashChangeHandler();
				} else {
					window.location.hash = id;
				}

				return;

			}

			// Get the anchored element
			anchor = document.querySelector(hash);

			// If anchored element exists, save the ID as a data attribute and remove it (prevents scroll jump)
			if (!anchor) return;
			anchor.setAttribute('data-scroll-id', anchor.id);
			anchor.id = '';

			// If no hash change event will happen, fire manually
			if (toggle.hash === window.location.hash) {
				event.preventDefault();
				hashChangeHandler();
			}

		};

		/**
		 * On window scroll and resize, only run events at a rate of 15fps for better performance
		 */
		var resizeThrottler = function (event) {
			if (!eventTimeout) {
				eventTimeout = setTimeout((function() {
					eventTimeout = null; // Reset timeout
					headerHeight = getHeaderHeight(fixedHeader); // Get the height of a fixed header if one exists
				}), 66);
			}
		};

		/**
		 * Destroy the current initialization.
		 */
		smoothScroll.destroy = function () {

			// If plugin isn't already initialized, stop
			if (!settings) return;

			// Remove event listeners
			document.removeEventListener('click', clickHandler, false);
			window.removeEventListener('resize', resizeThrottler, false);

			// Cancel any scrolls-in-progress
			smoothScroll.cancelScroll();

			// Reset variables
			settings = null;
			anchor = null;
			toggle = null;
			fixedHeader = null;
			headerHeight = null;
			eventTimeout = null;
			animationInterval = null;
		};

		/**
		 * Initialize Smooth Scroll
		 * @param {Object} options User settings
		 */
		smoothScroll.init = function (options) {

			// feature test
			if (!supports) return;

			// Destroy any existing initializations
			smoothScroll.destroy();

			// Selectors and variables
			settings = extend(defaults, options || {}); // Merge user options with defaults
			fixedHeader = settings.header ? document.querySelector(settings.header) : null; // Get the fixed header
			headerHeight = getHeaderHeight(fixedHeader);

			// When a toggle is clicked, run the click handler
			document.addEventListener('click', clickHandler, false);

			// Listen for hash changes
			window.addEventListener('hashchange', hashChangeHandler, false);

			// If window is resized and there's a fixed header, recalculate its size
			if (fixedHeader) {
				window.addEventListener('resize', resizeThrottler, false);
			}

		};


		//
		// Initialize plugin
		//

		smoothScroll.init(options);


		//
		// Public APIs
		//

		return smoothScroll;

	};

	return SmoothScroll;

}));
/**
 * Swiper 4.3.3
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * http://www.idangero.us/swiper/
 *
 * Copyright 2014-2018 Vladimir Kharlampidi
 *
 * Released under the MIT License
 *
 * Released on: June 5, 2018
 */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.Swiper=t()}(this,function(){"use strict";var e="undefined"==typeof document?{body:{},addEventListener:function(){},removeEventListener:function(){},activeElement:{blur:function(){},nodeName:""},querySelector:function(){return null},querySelectorAll:function(){return[]},getElementById:function(){return null},createEvent:function(){return{initEvent:function(){}}},createElement:function(){return{children:[],childNodes:[],style:{},setAttribute:function(){},getElementsByTagName:function(){return[]}}},location:{hash:""}}:document,t="undefined"==typeof window?{document:e,navigator:{userAgent:""},location:{},history:{},CustomEvent:function(){return this},addEventListener:function(){},removeEventListener:function(){},getComputedStyle:function(){return{getPropertyValue:function(){return""}}},Image:function(){},Date:function(){},screen:{},setTimeout:function(){},clearTimeout:function(){}}:window,i=function(e){for(var t=0;t<e.length;t+=1)this[t]=e[t];return this.length=e.length,this};function s(s,a){var r=[],n=0;if(s&&!a&&s instanceof i)return s;if(s)if("string"==typeof s){var o,l,d=s.trim();if(d.indexOf("<")>=0&&d.indexOf(">")>=0){var h="div";for(0===d.indexOf("<li")&&(h="ul"),0===d.indexOf("<tr")&&(h="tbody"),0!==d.indexOf("<td")&&0!==d.indexOf("<th")||(h="tr"),0===d.indexOf("<tbody")&&(h="table"),0===d.indexOf("<option")&&(h="select"),(l=e.createElement(h)).innerHTML=d,n=0;n<l.childNodes.length;n+=1)r.push(l.childNodes[n])}else for(o=a||"#"!==s[0]||s.match(/[ .<>:~]/)?(a||e).querySelectorAll(s.trim()):[e.getElementById(s.trim().split("#")[1])],n=0;n<o.length;n+=1)o[n]&&r.push(o[n])}else if(s.nodeType||s===t||s===e)r.push(s);else if(s.length>0&&s[0].nodeType)for(n=0;n<s.length;n+=1)r.push(s[n]);return new i(r)}function a(e){for(var t=[],i=0;i<e.length;i+=1)-1===t.indexOf(e[i])&&t.push(e[i]);return t}s.fn=i.prototype,s.Class=i,s.Dom7=i;var r={addClass:function(e){if(void 0===e)return this;for(var t=e.split(" "),i=0;i<t.length;i+=1)for(var s=0;s<this.length;s+=1)void 0!==this[s].classList&&this[s].classList.add(t[i]);return this},removeClass:function(e){for(var t=e.split(" "),i=0;i<t.length;i+=1)for(var s=0;s<this.length;s+=1)void 0!==this[s].classList&&this[s].classList.remove(t[i]);return this},hasClass:function(e){return!!this[0]&&this[0].classList.contains(e)},toggleClass:function(e){for(var t=e.split(" "),i=0;i<t.length;i+=1)for(var s=0;s<this.length;s+=1)void 0!==this[s].classList&&this[s].classList.toggle(t[i]);return this},attr:function(e,t){var i=arguments;if(1===arguments.length&&"string"==typeof e)return this[0]?this[0].getAttribute(e):void 0;for(var s=0;s<this.length;s+=1)if(2===i.length)this[s].setAttribute(e,t);else for(var a in e)this[s][a]=e[a],this[s].setAttribute(a,e[a]);return this},removeAttr:function(e){for(var t=0;t<this.length;t+=1)this[t].removeAttribute(e);return this},data:function(e,t){var i;if(void 0!==t){for(var s=0;s<this.length;s+=1)(i=this[s]).dom7ElementDataStorage||(i.dom7ElementDataStorage={}),i.dom7ElementDataStorage[e]=t;return this}if(i=this[0]){if(i.dom7ElementDataStorage&&e in i.dom7ElementDataStorage)return i.dom7ElementDataStorage[e];var a=i.getAttribute("data-"+e);return a||void 0}},transform:function(e){for(var t=0;t<this.length;t+=1){var i=this[t].style;i.webkitTransform=e,i.transform=e}return this},transition:function(e){"string"!=typeof e&&(e+="ms");for(var t=0;t<this.length;t+=1){var i=this[t].style;i.webkitTransitionDuration=e,i.transitionDuration=e}return this},on:function(){for(var e,t=[],i=arguments.length;i--;)t[i]=arguments[i];var a=t[0],r=t[1],n=t[2],o=t[3];function l(e){var t=e.target;if(t){var i=e.target.dom7EventData||[];if(i.indexOf(e)<0&&i.unshift(e),s(t).is(r))n.apply(t,i);else for(var a=s(t).parents(),o=0;o<a.length;o+=1)s(a[o]).is(r)&&n.apply(a[o],i)}}function d(e){var t=e&&e.target?e.target.dom7EventData||[]:[];t.indexOf(e)<0&&t.unshift(e),n.apply(this,t)}"function"==typeof t[1]&&(a=(e=t)[0],n=e[1],o=e[2],r=void 0),o||(o=!1);for(var h,p=a.split(" "),c=0;c<this.length;c+=1){var u=this[c];if(r)for(h=0;h<p.length;h+=1){var v=p[h];u.dom7LiveListeners||(u.dom7LiveListeners={}),u.dom7LiveListeners[v]||(u.dom7LiveListeners[v]=[]),u.dom7LiveListeners[v].push({listener:n,proxyListener:l}),u.addEventListener(v,l,o)}else for(h=0;h<p.length;h+=1){var f=p[h];u.dom7Listeners||(u.dom7Listeners={}),u.dom7Listeners[f]||(u.dom7Listeners[f]=[]),u.dom7Listeners[f].push({listener:n,proxyListener:d}),u.addEventListener(f,d,o)}}return this},off:function(){for(var e,t=[],i=arguments.length;i--;)t[i]=arguments[i];var s=t[0],a=t[1],r=t[2],n=t[3];"function"==typeof t[1]&&(s=(e=t)[0],r=e[1],n=e[2],a=void 0),n||(n=!1);for(var o=s.split(" "),l=0;l<o.length;l+=1)for(var d=o[l],h=0;h<this.length;h+=1){var p=this[h],c=void 0;if(!a&&p.dom7Listeners?c=p.dom7Listeners[d]:a&&p.dom7LiveListeners&&(c=p.dom7LiveListeners[d]),c&&c.length)for(var u=c.length-1;u>=0;u-=1){var v=c[u];r&&v.listener===r?(p.removeEventListener(d,v.proxyListener,n),c.splice(u,1)):r||(p.removeEventListener(d,v.proxyListener,n),c.splice(u,1))}}return this},trigger:function(){for(var i=[],s=arguments.length;s--;)i[s]=arguments[s];for(var a=i[0].split(" "),r=i[1],n=0;n<a.length;n+=1)for(var o=a[n],l=0;l<this.length;l+=1){var d=this[l],h=void 0;try{h=new t.CustomEvent(o,{detail:r,bubbles:!0,cancelable:!0})}catch(t){(h=e.createEvent("Event")).initEvent(o,!0,!0),h.detail=r}d.dom7EventData=i.filter(function(e,t){return t>0}),d.dispatchEvent(h),d.dom7EventData=[],delete d.dom7EventData}return this},transitionEnd:function(e){var t,i=["webkitTransitionEnd","transitionend"],s=this;function a(r){if(r.target===this)for(e.call(this,r),t=0;t<i.length;t+=1)s.off(i[t],a)}if(e)for(t=0;t<i.length;t+=1)s.on(i[t],a);return this},outerWidth:function(e){if(this.length>0){if(e){var t=this.styles();return this[0].offsetWidth+parseFloat(t.getPropertyValue("margin-right"))+parseFloat(t.getPropertyValue("margin-left"))}return this[0].offsetWidth}return null},outerHeight:function(e){if(this.length>0){if(e){var t=this.styles();return this[0].offsetHeight+parseFloat(t.getPropertyValue("margin-top"))+parseFloat(t.getPropertyValue("margin-bottom"))}return this[0].offsetHeight}return null},offset:function(){if(this.length>0){var i=this[0],s=i.getBoundingClientRect(),a=e.body,r=i.clientTop||a.clientTop||0,n=i.clientLeft||a.clientLeft||0,o=i===t?t.scrollY:i.scrollTop,l=i===t?t.scrollX:i.scrollLeft;return{top:s.top+o-r,left:s.left+l-n}}return null},css:function(e,i){var s;if(1===arguments.length){if("string"!=typeof e){for(s=0;s<this.length;s+=1)for(var a in e)this[s].style[a]=e[a];return this}if(this[0])return t.getComputedStyle(this[0],null).getPropertyValue(e)}if(2===arguments.length&&"string"==typeof e){for(s=0;s<this.length;s+=1)this[s].style[e]=i;return this}return this},each:function(e){if(!e)return this;for(var t=0;t<this.length;t+=1)if(!1===e.call(this[t],t,this[t]))return this;return this},html:function(e){if(void 0===e)return this[0]?this[0].innerHTML:void 0;for(var t=0;t<this.length;t+=1)this[t].innerHTML=e;return this},text:function(e){if(void 0===e)return this[0]?this[0].textContent.trim():null;for(var t=0;t<this.length;t+=1)this[t].textContent=e;return this},is:function(a){var r,n,o=this[0];if(!o||void 0===a)return!1;if("string"==typeof a){if(o.matches)return o.matches(a);if(o.webkitMatchesSelector)return o.webkitMatchesSelector(a);if(o.msMatchesSelector)return o.msMatchesSelector(a);for(r=s(a),n=0;n<r.length;n+=1)if(r[n]===o)return!0;return!1}if(a===e)return o===e;if(a===t)return o===t;if(a.nodeType||a instanceof i){for(r=a.nodeType?[a]:a,n=0;n<r.length;n+=1)if(r[n]===o)return!0;return!1}return!1},index:function(){var e,t=this[0];if(t){for(e=0;null!==(t=t.previousSibling);)1===t.nodeType&&(e+=1);return e}},eq:function(e){if(void 0===e)return this;var t,s=this.length;return new i(e>s-1?[]:e<0?(t=s+e)<0?[]:[this[t]]:[this[e]])},append:function(){for(var t,s=[],a=arguments.length;a--;)s[a]=arguments[a];for(var r=0;r<s.length;r+=1){t=s[r];for(var n=0;n<this.length;n+=1)if("string"==typeof t){var o=e.createElement("div");for(o.innerHTML=t;o.firstChild;)this[n].appendChild(o.firstChild)}else if(t instanceof i)for(var l=0;l<t.length;l+=1)this[n].appendChild(t[l]);else this[n].appendChild(t)}return this},prepend:function(t){var s,a;for(s=0;s<this.length;s+=1)if("string"==typeof t){var r=e.createElement("div");for(r.innerHTML=t,a=r.childNodes.length-1;a>=0;a-=1)this[s].insertBefore(r.childNodes[a],this[s].childNodes[0])}else if(t instanceof i)for(a=0;a<t.length;a+=1)this[s].insertBefore(t[a],this[s].childNodes[0]);else this[s].insertBefore(t,this[s].childNodes[0]);return this},next:function(e){return this.length>0?e?this[0].nextElementSibling&&s(this[0].nextElementSibling).is(e)?new i([this[0].nextElementSibling]):new i([]):this[0].nextElementSibling?new i([this[0].nextElementSibling]):new i([]):new i([])},nextAll:function(e){var t=[],a=this[0];if(!a)return new i([]);for(;a.nextElementSibling;){var r=a.nextElementSibling;e?s(r).is(e)&&t.push(r):t.push(r),a=r}return new i(t)},prev:function(e){if(this.length>0){var t=this[0];return e?t.previousElementSibling&&s(t.previousElementSibling).is(e)?new i([t.previousElementSibling]):new i([]):t.previousElementSibling?new i([t.previousElementSibling]):new i([])}return new i([])},prevAll:function(e){var t=[],a=this[0];if(!a)return new i([]);for(;a.previousElementSibling;){var r=a.previousElementSibling;e?s(r).is(e)&&t.push(r):t.push(r),a=r}return new i(t)},parent:function(e){for(var t=[],i=0;i<this.length;i+=1)null!==this[i].parentNode&&(e?s(this[i].parentNode).is(e)&&t.push(this[i].parentNode):t.push(this[i].parentNode));return s(a(t))},parents:function(e){for(var t=[],i=0;i<this.length;i+=1)for(var r=this[i].parentNode;r;)e?s(r).is(e)&&t.push(r):t.push(r),r=r.parentNode;return s(a(t))},closest:function(e){var t=this;return void 0===e?new i([]):(t.is(e)||(t=t.parents(e).eq(0)),t)},find:function(e){for(var t=[],s=0;s<this.length;s+=1)for(var a=this[s].querySelectorAll(e),r=0;r<a.length;r+=1)t.push(a[r]);return new i(t)},children:function(e){for(var t=[],r=0;r<this.length;r+=1)for(var n=this[r].childNodes,o=0;o<n.length;o+=1)e?1===n[o].nodeType&&s(n[o]).is(e)&&t.push(n[o]):1===n[o].nodeType&&t.push(n[o]);return new i(a(t))},remove:function(){for(var e=0;e<this.length;e+=1)this[e].parentNode&&this[e].parentNode.removeChild(this[e]);return this},add:function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];var i,a;for(i=0;i<e.length;i+=1){var r=s(e[i]);for(a=0;a<r.length;a+=1)this[this.length]=r[a],this.length+=1}return this},styles:function(){return this[0]?t.getComputedStyle(this[0],null):{}}};Object.keys(r).forEach(function(e){s.fn[e]=r[e]});var n,o,l,d={deleteProps:function(e){var t=e;Object.keys(t).forEach(function(e){try{t[e]=null}catch(e){}try{delete t[e]}catch(e){}})},nextTick:function(e,t){return void 0===t&&(t=0),setTimeout(e,t)},now:function(){return Date.now()},getTranslate:function(e,i){var s,a,r;void 0===i&&(i="x");var n=t.getComputedStyle(e,null);return t.WebKitCSSMatrix?((a=n.transform||n.webkitTransform).split(",").length>6&&(a=a.split(", ").map(function(e){return e.replace(",",".")}).join(", ")),r=new t.WebKitCSSMatrix("none"===a?"":a)):s=(r=n.MozTransform||n.OTransform||n.MsTransform||n.msTransform||n.transform||n.getPropertyValue("transform").replace("translate(","matrix(1, 0, 0, 1,")).toString().split(","),"x"===i&&(a=t.WebKitCSSMatrix?r.m41:16===s.length?parseFloat(s[12]):parseFloat(s[4])),"y"===i&&(a=t.WebKitCSSMatrix?r.m42:16===s.length?parseFloat(s[13]):parseFloat(s[5])),a||0},parseUrlQuery:function(e){var i,s,a,r,n={},o=e||t.location.href;if("string"==typeof o&&o.length)for(r=(s=(o=o.indexOf("?")>-1?o.replace(/\S*\?/,""):"").split("&").filter(function(e){return""!==e})).length,i=0;i<r;i+=1)a=s[i].replace(/#\S+/g,"").split("="),n[decodeURIComponent(a[0])]=void 0===a[1]?void 0:decodeURIComponent(a[1])||"";return n},isObject:function(e){return"object"==typeof e&&null!==e&&e.constructor&&e.constructor===Object},extend:function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];for(var i=Object(e[0]),s=1;s<e.length;s+=1){var a=e[s];if(void 0!==a&&null!==a)for(var r=Object.keys(Object(a)),n=0,o=r.length;n<o;n+=1){var l=r[n],h=Object.getOwnPropertyDescriptor(a,l);void 0!==h&&h.enumerable&&(d.isObject(i[l])&&d.isObject(a[l])?d.extend(i[l],a[l]):!d.isObject(i[l])&&d.isObject(a[l])?(i[l]={},d.extend(i[l],a[l])):i[l]=a[l])}}return i}},h=(l=e.createElement("div"),{touch:t.Modernizr&&!0===t.Modernizr.touch||!!("ontouchstart"in t||t.DocumentTouch&&e instanceof t.DocumentTouch),pointerEvents:!(!t.navigator.pointerEnabled&&!t.PointerEvent),prefixedPointerEvents:!!t.navigator.msPointerEnabled,transition:(o=l.style,"transition"in o||"webkitTransition"in o||"MozTransition"in o),transforms3d:t.Modernizr&&!0===t.Modernizr.csstransforms3d||(n=l.style,"webkitPerspective"in n||"MozPerspective"in n||"OPerspective"in n||"MsPerspective"in n||"perspective"in n),flexbox:function(){for(var e=l.style,t="alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient".split(" "),i=0;i<t.length;i+=1)if(t[i]in e)return!0;return!1}(),observer:"MutationObserver"in t||"WebkitMutationObserver"in t,passiveListener:function(){var e=!1;try{var i=Object.defineProperty({},"passive",{get:function(){e=!0}});t.addEventListener("testPassiveListener",null,i)}catch(e){}return e}(),gestures:"ongesturestart"in t}),p=function(e){void 0===e&&(e={});var t=this;t.params=e,t.eventsListeners={},t.params&&t.params.on&&Object.keys(t.params.on).forEach(function(e){t.on(e,t.params.on[e])})},c={components:{configurable:!0}};p.prototype.on=function(e,t,i){var s=this;if("function"!=typeof t)return s;var a=i?"unshift":"push";return e.split(" ").forEach(function(e){s.eventsListeners[e]||(s.eventsListeners[e]=[]),s.eventsListeners[e][a](t)}),s},p.prototype.once=function(e,t,i){var s=this;if("function"!=typeof t)return s;return s.on(e,function i(){for(var a=[],r=arguments.length;r--;)a[r]=arguments[r];t.apply(s,a),s.off(e,i)},i)},p.prototype.off=function(e,t){var i=this;return i.eventsListeners?(e.split(" ").forEach(function(e){void 0===t?i.eventsListeners[e]=[]:i.eventsListeners[e].forEach(function(s,a){s===t&&i.eventsListeners[e].splice(a,1)})}),i):i},p.prototype.emit=function(){for(var e=[],t=arguments.length;t--;)e[t]=arguments[t];var i,s,a,r=this;return r.eventsListeners?("string"==typeof e[0]||Array.isArray(e[0])?(i=e[0],s=e.slice(1,e.length),a=r):(i=e[0].events,s=e[0].data,a=e[0].context||r),(Array.isArray(i)?i:i.split(" ")).forEach(function(e){if(r.eventsListeners&&r.eventsListeners[e]){var t=[];r.eventsListeners[e].forEach(function(e){t.push(e)}),t.forEach(function(e){e.apply(a,s)})}}),r):r},p.prototype.useModulesParams=function(e){var t=this;t.modules&&Object.keys(t.modules).forEach(function(i){var s=t.modules[i];s.params&&d.extend(e,s.params)})},p.prototype.useModules=function(e){void 0===e&&(e={});var t=this;t.modules&&Object.keys(t.modules).forEach(function(i){var s=t.modules[i],a=e[i]||{};s.instance&&Object.keys(s.instance).forEach(function(e){var i=s.instance[e];t[e]="function"==typeof i?i.bind(t):i}),s.on&&t.on&&Object.keys(s.on).forEach(function(e){t.on(e,s.on[e])}),s.create&&s.create.bind(t)(a)})},c.components.set=function(e){this.use&&this.use(e)},p.installModule=function(e){for(var t=[],i=arguments.length-1;i-- >0;)t[i]=arguments[i+1];var s=this;s.prototype.modules||(s.prototype.modules={});var a=e.name||Object.keys(s.prototype.modules).length+"_"+d.now();return s.prototype.modules[a]=e,e.proto&&Object.keys(e.proto).forEach(function(t){s.prototype[t]=e.proto[t]}),e.static&&Object.keys(e.static).forEach(function(t){s[t]=e.static[t]}),e.install&&e.install.apply(s,t),s},p.use=function(e){for(var t=[],i=arguments.length-1;i-- >0;)t[i]=arguments[i+1];var s=this;return Array.isArray(e)?(e.forEach(function(e){return s.installModule(e)}),s):s.installModule.apply(s,[e].concat(t))},Object.defineProperties(p,c);var u={updateSize:function(){var e,t,i=this.$el;e=void 0!==this.params.width?this.params.width:i[0].clientWidth,t=void 0!==this.params.height?this.params.height:i[0].clientHeight,0===e&&this.isHorizontal()||0===t&&this.isVertical()||(e=e-parseInt(i.css("padding-left"),10)-parseInt(i.css("padding-right"),10),t=t-parseInt(i.css("padding-top"),10)-parseInt(i.css("padding-bottom"),10),d.extend(this,{width:e,height:t,size:this.isHorizontal()?e:t}))},updateSlides:function(){var e=this.params,i=this.$wrapperEl,s=this.size,a=this.rtlTranslate,r=this.wrongRTL,n=this.virtual&&e.virtual.enabled,o=n?this.virtual.slides.length:this.slides.length,l=i.children("."+this.params.slideClass),p=n?this.virtual.slides.length:l.length,c=[],u=[],v=[],f=e.slidesOffsetBefore;"function"==typeof f&&(f=e.slidesOffsetBefore.call(this));var m=e.slidesOffsetAfter;"function"==typeof m&&(m=e.slidesOffsetAfter.call(this));var g=this.snapGrid.length,b=this.snapGrid.length,w=e.spaceBetween,y=-f,x=0,E=0;if(void 0!==s){var T,S;"string"==typeof w&&w.indexOf("%")>=0&&(w=parseFloat(w.replace("%",""))/100*s),this.virtualSize=-w,a?l.css({marginLeft:"",marginTop:""}):l.css({marginRight:"",marginBottom:""}),e.slidesPerColumn>1&&(T=Math.floor(p/e.slidesPerColumn)===p/this.params.slidesPerColumn?p:Math.ceil(p/e.slidesPerColumn)*e.slidesPerColumn,"auto"!==e.slidesPerView&&"row"===e.slidesPerColumnFill&&(T=Math.max(T,e.slidesPerView*e.slidesPerColumn)));for(var C,M=e.slidesPerColumn,z=T/M,k=z-(e.slidesPerColumn*z-p),P=0;P<p;P+=1){S=0;var $=l.eq(P);if(e.slidesPerColumn>1){var L=void 0,I=void 0,D=void 0;"column"===e.slidesPerColumnFill?(D=P-(I=Math.floor(P/M))*M,(I>k||I===k&&D===M-1)&&(D+=1)>=M&&(D=0,I+=1),L=I+D*T/M,$.css({"-webkit-box-ordinal-group":L,"-moz-box-ordinal-group":L,"-ms-flex-order":L,"-webkit-order":L,order:L})):I=P-(D=Math.floor(P/z))*z,$.css("margin-"+(this.isHorizontal()?"top":"left"),0!==D&&e.spaceBetween&&e.spaceBetween+"px").attr("data-swiper-column",I).attr("data-swiper-row",D)}if("none"!==$.css("display")){if("auto"===e.slidesPerView){var O=t.getComputedStyle($[0],null),A=$[0].style.transform,G=$[0].style.webkitTransform;A&&($[0].style.transform="none"),G&&($[0].style.webkitTransform="none"),S=this.isHorizontal()?$[0].getBoundingClientRect().width+parseFloat(O.getPropertyValue("margin-left"))+parseFloat(O.getPropertyValue("margin-right")):$[0].getBoundingClientRect().height+parseFloat(O.getPropertyValue("margin-top"))+parseFloat(O.getPropertyValue("margin-bottom")),A&&($[0].style.transform=A),G&&($[0].style.webkitTransform=G),e.roundLengths&&(S=Math.floor(S))}else S=(s-(e.slidesPerView-1)*w)/e.slidesPerView,e.roundLengths&&(S=Math.floor(S)),l[P]&&(this.isHorizontal()?l[P].style.width=S+"px":l[P].style.height=S+"px");l[P]&&(l[P].swiperSlideSize=S),v.push(S),e.centeredSlides?(y=y+S/2+x/2+w,0===x&&0!==P&&(y=y-s/2-w),0===P&&(y=y-s/2-w),Math.abs(y)<.001&&(y=0),e.roundLengths&&(y=Math.floor(y)),E%e.slidesPerGroup==0&&c.push(y),u.push(y)):(e.roundLengths&&(y=Math.floor(y)),E%e.slidesPerGroup==0&&c.push(y),u.push(y),y=y+S+w),this.virtualSize+=S+w,x=S,E+=1}}if(this.virtualSize=Math.max(this.virtualSize,s)+m,a&&r&&("slide"===e.effect||"coverflow"===e.effect)&&i.css({width:this.virtualSize+e.spaceBetween+"px"}),h.flexbox&&!e.setWrapperSize||(this.isHorizontal()?i.css({width:this.virtualSize+e.spaceBetween+"px"}):i.css({height:this.virtualSize+e.spaceBetween+"px"})),e.slidesPerColumn>1&&(this.virtualSize=(S+e.spaceBetween)*T,this.virtualSize=Math.ceil(this.virtualSize/e.slidesPerColumn)-e.spaceBetween,this.isHorizontal()?i.css({width:this.virtualSize+e.spaceBetween+"px"}):i.css({height:this.virtualSize+e.spaceBetween+"px"}),e.centeredSlides)){C=[];for(var H=0;H<c.length;H+=1){var N=c[H];e.roundLengths&&(N=Math.floor(N)),c[H]<this.virtualSize+c[0]&&C.push(N)}c=C}if(!e.centeredSlides){C=[];for(var B=0;B<c.length;B+=1){var X=c[B];e.roundLengths&&(X=Math.floor(X)),c[B]<=this.virtualSize-s&&C.push(X)}c=C,Math.floor(this.virtualSize-s)-Math.floor(c[c.length-1])>1&&c.push(this.virtualSize-s)}0===c.length&&(c=[0]),0!==e.spaceBetween&&(this.isHorizontal()?a?l.css({marginLeft:w+"px"}):l.css({marginRight:w+"px"}):l.css({marginBottom:w+"px"})),d.extend(this,{slides:l,snapGrid:c,slidesGrid:u,slidesSizesGrid:v}),p!==o&&this.emit("slidesLengthChange"),c.length!==g&&(this.params.watchOverflow&&this.checkOverflow(),this.emit("snapGridLengthChange")),u.length!==b&&this.emit("slidesGridLengthChange"),(e.watchSlidesProgress||e.watchSlidesVisibility)&&this.updateSlidesOffset()}},updateAutoHeight:function(e){var t,i=[],s=0;if("number"==typeof e?this.setTransition(e):!0===e&&this.setTransition(this.params.speed),"auto"!==this.params.slidesPerView&&this.params.slidesPerView>1)for(t=0;t<Math.ceil(this.params.slidesPerView);t+=1){var a=this.activeIndex+t;if(a>this.slides.length)break;i.push(this.slides.eq(a)[0])}else i.push(this.slides.eq(this.activeIndex)[0]);for(t=0;t<i.length;t+=1)if(void 0!==i[t]){var r=i[t].offsetHeight;s=r>s?r:s}s&&this.$wrapperEl.css("height",s+"px")},updateSlidesOffset:function(){for(var e=this.slides,t=0;t<e.length;t+=1)e[t].swiperSlideOffset=this.isHorizontal()?e[t].offsetLeft:e[t].offsetTop},updateSlidesProgress:function(e){void 0===e&&(e=this&&this.translate||0);var t=this.params,i=this.slides,s=this.rtlTranslate;if(0!==i.length){void 0===i[0].swiperSlideOffset&&this.updateSlidesOffset();var a=-e;s&&(a=e),i.removeClass(t.slideVisibleClass);for(var r=0;r<i.length;r+=1){var n=i[r],o=(a+(t.centeredSlides?this.minTranslate():0)-n.swiperSlideOffset)/(n.swiperSlideSize+t.spaceBetween);if(t.watchSlidesVisibility){var l=-(a-n.swiperSlideOffset),d=l+this.slidesSizesGrid[r];(l>=0&&l<this.size||d>0&&d<=this.size||l<=0&&d>=this.size)&&i.eq(r).addClass(t.slideVisibleClass)}n.progress=s?-o:o}}},updateProgress:function(e){void 0===e&&(e=this&&this.translate||0);var t=this.params,i=this.maxTranslate()-this.minTranslate(),s=this.progress,a=this.isBeginning,r=this.isEnd,n=a,o=r;0===i?(s=0,a=!0,r=!0):(a=(s=(e-this.minTranslate())/i)<=0,r=s>=1),d.extend(this,{progress:s,isBeginning:a,isEnd:r}),(t.watchSlidesProgress||t.watchSlidesVisibility)&&this.updateSlidesProgress(e),a&&!n&&this.emit("reachBeginning toEdge"),r&&!o&&this.emit("reachEnd toEdge"),(n&&!a||o&&!r)&&this.emit("fromEdge"),this.emit("progress",s)},updateSlidesClasses:function(){var e,t=this.slides,i=this.params,s=this.$wrapperEl,a=this.activeIndex,r=this.realIndex,n=this.virtual&&i.virtual.enabled;t.removeClass(i.slideActiveClass+" "+i.slideNextClass+" "+i.slidePrevClass+" "+i.slideDuplicateActiveClass+" "+i.slideDuplicateNextClass+" "+i.slideDuplicatePrevClass),(e=n?this.$wrapperEl.find("."+i.slideClass+'[data-swiper-slide-index="'+a+'"]'):t.eq(a)).addClass(i.slideActiveClass),i.loop&&(e.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+r+'"]').addClass(i.slideDuplicateActiveClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+r+'"]').addClass(i.slideDuplicateActiveClass));var o=e.nextAll("."+i.slideClass).eq(0).addClass(i.slideNextClass);i.loop&&0===o.length&&(o=t.eq(0)).addClass(i.slideNextClass);var l=e.prevAll("."+i.slideClass).eq(0).addClass(i.slidePrevClass);i.loop&&0===l.length&&(l=t.eq(-1)).addClass(i.slidePrevClass),i.loop&&(o.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+o.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+o.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicateNextClass),l.hasClass(i.slideDuplicateClass)?s.children("."+i.slideClass+":not(."+i.slideDuplicateClass+')[data-swiper-slide-index="'+l.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass):s.children("."+i.slideClass+"."+i.slideDuplicateClass+'[data-swiper-slide-index="'+l.attr("data-swiper-slide-index")+'"]').addClass(i.slideDuplicatePrevClass))},updateActiveIndex:function(e){var t,i=this.rtlTranslate?this.translate:-this.translate,s=this.slidesGrid,a=this.snapGrid,r=this.params,n=this.activeIndex,o=this.realIndex,l=this.snapIndex,h=e;if(void 0===h){for(var p=0;p<s.length;p+=1)void 0!==s[p+1]?i>=s[p]&&i<s[p+1]-(s[p+1]-s[p])/2?h=p:i>=s[p]&&i<s[p+1]&&(h=p+1):i>=s[p]&&(h=p);r.normalizeSlideIndex&&(h<0||void 0===h)&&(h=0)}if((t=a.indexOf(i)>=0?a.indexOf(i):Math.floor(h/r.slidesPerGroup))>=a.length&&(t=a.length-1),h!==n){var c=parseInt(this.slides.eq(h).attr("data-swiper-slide-index")||h,10);d.extend(this,{snapIndex:t,realIndex:c,previousIndex:n,activeIndex:h}),this.emit("activeIndexChange"),this.emit("snapIndexChange"),o!==c&&this.emit("realIndexChange"),this.emit("slideChange")}else t!==l&&(this.snapIndex=t,this.emit("snapIndexChange"))},updateClickedSlide:function(e){var t=this.params,i=s(e.target).closest("."+t.slideClass)[0],a=!1;if(i)for(var r=0;r<this.slides.length;r+=1)this.slides[r]===i&&(a=!0);if(!i||!a)return this.clickedSlide=void 0,void(this.clickedIndex=void 0);this.clickedSlide=i,this.virtual&&this.params.virtual.enabled?this.clickedIndex=parseInt(s(i).attr("data-swiper-slide-index"),10):this.clickedIndex=s(i).index(),t.slideToClickedSlide&&void 0!==this.clickedIndex&&this.clickedIndex!==this.activeIndex&&this.slideToClickedSlide()}};var v={getTranslate:function(e){void 0===e&&(e=this.isHorizontal()?"x":"y");var t=this.params,i=this.rtlTranslate,s=this.translate,a=this.$wrapperEl;if(t.virtualTranslate)return i?-s:s;var r=d.getTranslate(a[0],e);return i&&(r=-r),r||0},setTranslate:function(e,t){var i=this.rtlTranslate,s=this.params,a=this.$wrapperEl,r=this.progress,n=0,o=0;this.isHorizontal()?n=i?-e:e:o=e,s.roundLengths&&(n=Math.floor(n),o=Math.floor(o)),s.virtualTranslate||(h.transforms3d?a.transform("translate3d("+n+"px, "+o+"px, 0px)"):a.transform("translate("+n+"px, "+o+"px)")),this.previousTranslate=this.translate,this.translate=this.isHorizontal()?n:o;var l=this.maxTranslate()-this.minTranslate();(0===l?0:(e-this.minTranslate())/l)!==r&&this.updateProgress(e),this.emit("setTranslate",this.translate,t)},minTranslate:function(){return-this.snapGrid[0]},maxTranslate:function(){return-this.snapGrid[this.snapGrid.length-1]}};var f={setTransition:function(e,t){this.$wrapperEl.transition(e),this.emit("setTransition",e,t)},transitionStart:function(e,t){void 0===e&&(e=!0);var i=this.activeIndex,s=this.params,a=this.previousIndex;s.autoHeight&&this.updateAutoHeight();var r=t;if(r||(r=i>a?"next":i<a?"prev":"reset"),this.emit("transitionStart"),e&&i!==a){if("reset"===r)return void this.emit("slideResetTransitionStart");this.emit("slideChangeTransitionStart"),"next"===r?this.emit("slideNextTransitionStart"):this.emit("slidePrevTransitionStart")}},transitionEnd:function(e,t){void 0===e&&(e=!0);var i=this.activeIndex,s=this.previousIndex;this.animating=!1,this.setTransition(0);var a=t;if(a||(a=i>s?"next":i<s?"prev":"reset"),this.emit("transitionEnd"),e&&i!==s){if("reset"===a)return void this.emit("slideResetTransitionEnd");this.emit("slideChangeTransitionEnd"),"next"===a?this.emit("slideNextTransitionEnd"):this.emit("slidePrevTransitionEnd")}}};var m={slideTo:function(e,t,i,s){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===i&&(i=!0);var a=this,r=e;r<0&&(r=0);var n=a.params,o=a.snapGrid,l=a.slidesGrid,d=a.previousIndex,p=a.activeIndex,c=a.rtlTranslate;if(a.animating&&n.preventIntercationOnTransition)return!1;var u=Math.floor(r/n.slidesPerGroup);u>=o.length&&(u=o.length-1),(p||n.initialSlide||0)===(d||0)&&i&&a.emit("beforeSlideChangeStart");var v,f=-o[u];if(a.updateProgress(f),n.normalizeSlideIndex)for(var m=0;m<l.length;m+=1)-Math.floor(100*f)>=Math.floor(100*l[m])&&(r=m);if(a.initialized&&r!==p){if(!a.allowSlideNext&&f<a.translate&&f<a.minTranslate())return!1;if(!a.allowSlidePrev&&f>a.translate&&f>a.maxTranslate()&&(p||0)!==r)return!1}return v=r>p?"next":r<p?"prev":"reset",c&&-f===a.translate||!c&&f===a.translate?(a.updateActiveIndex(r),n.autoHeight&&a.updateAutoHeight(),a.updateSlidesClasses(),"slide"!==n.effect&&a.setTranslate(f),"reset"!==v&&(a.transitionStart(i,v),a.transitionEnd(i,v)),!1):(0!==t&&h.transition?(a.setTransition(t),a.setTranslate(f),a.updateActiveIndex(r),a.updateSlidesClasses(),a.emit("beforeTransitionStart",t,s),a.transitionStart(i,v),a.animating||(a.animating=!0,a.onSlideToWrapperTransitionEnd||(a.onSlideToWrapperTransitionEnd=function(e){a&&!a.destroyed&&e.target===this&&(a.$wrapperEl[0].removeEventListener("transitionend",a.onSlideToWrapperTransitionEnd),a.$wrapperEl[0].removeEventListener("webkitTransitionEnd",a.onSlideToWrapperTransitionEnd),a.transitionEnd(i,v))}),a.$wrapperEl[0].addEventListener("transitionend",a.onSlideToWrapperTransitionEnd),a.$wrapperEl[0].addEventListener("webkitTransitionEnd",a.onSlideToWrapperTransitionEnd))):(a.setTransition(0),a.setTranslate(f),a.updateActiveIndex(r),a.updateSlidesClasses(),a.emit("beforeTransitionStart",t,s),a.transitionStart(i,v),a.transitionEnd(i,v)),!0)},slideToLoop:function(e,t,i,s){void 0===e&&(e=0),void 0===t&&(t=this.params.speed),void 0===i&&(i=!0);var a=e;return this.params.loop&&(a+=this.loopedSlides),this.slideTo(a,t,i,s)},slideNext:function(e,t,i){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var s=this.params,a=this.animating;return s.loop?!a&&(this.loopFix(),this._clientLeft=this.$wrapperEl[0].clientLeft,this.slideTo(this.activeIndex+s.slidesPerGroup,e,t,i)):this.slideTo(this.activeIndex+s.slidesPerGroup,e,t,i)},slidePrev:function(e,t,i){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var s=this.params,a=this.animating,r=this.snapGrid,n=this.slidesGrid,o=this.rtlTranslate;if(s.loop){if(a)return!1;this.loopFix(),this._clientLeft=this.$wrapperEl[0].clientLeft}function l(e){return e<0?-Math.floor(Math.abs(e)):Math.floor(e)}var d,h=l(o?this.translate:-this.translate),p=r.map(function(e){return l(e)}),c=(n.map(function(e){return l(e)}),r[p.indexOf(h)],r[p.indexOf(h)-1]);return void 0!==c&&(d=n.indexOf(c))<0&&(d=this.activeIndex-1),this.slideTo(d,e,t,i)},slideReset:function(e,t,i){return void 0===e&&(e=this.params.speed),void 0===t&&(t=!0),this.slideTo(this.activeIndex,e,t,i)},slideToClosest:function(e,t,i){void 0===e&&(e=this.params.speed),void 0===t&&(t=!0);var s=this.activeIndex,a=Math.floor(s/this.params.slidesPerGroup);if(a<this.snapGrid.length-1){var r=this.rtlTranslate?this.translate:-this.translate,n=this.snapGrid[a];r-n>(this.snapGrid[a+1]-n)/2&&(s=this.params.slidesPerGroup)}return this.slideTo(s,e,t,i)},slideToClickedSlide:function(){var e,t=this,i=t.params,a=t.$wrapperEl,r="auto"===i.slidesPerView?t.slidesPerViewDynamic():i.slidesPerView,n=t.clickedIndex;if(i.loop){if(t.animating)return;e=parseInt(s(t.clickedSlide).attr("data-swiper-slide-index"),10),i.centeredSlides?n<t.loopedSlides-r/2||n>t.slides.length-t.loopedSlides+r/2?(t.loopFix(),n=a.children("."+i.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+i.slideDuplicateClass+")").eq(0).index(),d.nextTick(function(){t.slideTo(n)})):t.slideTo(n):n>t.slides.length-r?(t.loopFix(),n=a.children("."+i.slideClass+'[data-swiper-slide-index="'+e+'"]:not(.'+i.slideDuplicateClass+")").eq(0).index(),d.nextTick(function(){t.slideTo(n)})):t.slideTo(n)}else t.slideTo(n)}};var g={loopCreate:function(){var t=this,i=t.params,a=t.$wrapperEl;a.children("."+i.slideClass+"."+i.slideDuplicateClass).remove();var r=a.children("."+i.slideClass);if(i.loopFillGroupWithBlank){var n=i.slidesPerGroup-r.length%i.slidesPerGroup;if(n!==i.slidesPerGroup){for(var o=0;o<n;o+=1){var l=s(e.createElement("div")).addClass(i.slideClass+" "+i.slideBlankClass);a.append(l)}r=a.children("."+i.slideClass)}}"auto"!==i.slidesPerView||i.loopedSlides||(i.loopedSlides=r.length),t.loopedSlides=parseInt(i.loopedSlides||i.slidesPerView,10),t.loopedSlides+=i.loopAdditionalSlides,t.loopedSlides>r.length&&(t.loopedSlides=r.length);var d=[],h=[];r.each(function(e,i){var a=s(i);e<t.loopedSlides&&h.push(i),e<r.length&&e>=r.length-t.loopedSlides&&d.push(i),a.attr("data-swiper-slide-index",e)});for(var p=0;p<h.length;p+=1)a.append(s(h[p].cloneNode(!0)).addClass(i.slideDuplicateClass));for(var c=d.length-1;c>=0;c-=1)a.prepend(s(d[c].cloneNode(!0)).addClass(i.slideDuplicateClass))},loopFix:function(){var e,t=this.params,i=this.activeIndex,s=this.slides,a=this.loopedSlides,r=this.allowSlidePrev,n=this.allowSlideNext,o=this.snapGrid,l=this.rtlTranslate;this.allowSlidePrev=!0,this.allowSlideNext=!0;var d=-o[i]-this.getTranslate();i<a?(e=s.length-3*a+i,e+=a,this.slideTo(e,0,!1,!0)&&0!==d&&this.setTranslate((l?-this.translate:this.translate)-d)):("auto"===t.slidesPerView&&i>=2*a||i>=s.length-a)&&(e=-s.length+i+a,e+=a,this.slideTo(e,0,!1,!0)&&0!==d&&this.setTranslate((l?-this.translate:this.translate)-d));this.allowSlidePrev=r,this.allowSlideNext=n},loopDestroy:function(){var e=this.$wrapperEl,t=this.params,i=this.slides;e.children("."+t.slideClass+"."+t.slideDuplicateClass).remove(),i.removeAttr("data-swiper-slide-index")}};var b={setGrabCursor:function(e){if(!(h.touch||!this.params.simulateTouch||this.params.watchOverflow&&this.isLocked)){var t=this.el;t.style.cursor="move",t.style.cursor=e?"-webkit-grabbing":"-webkit-grab",t.style.cursor=e?"-moz-grabbin":"-moz-grab",t.style.cursor=e?"grabbing":"grab"}},unsetGrabCursor:function(){h.touch||this.params.watchOverflow&&this.isLocked||(this.el.style.cursor="")}};var w={appendSlide:function(e){var t=this.$wrapperEl,i=this.params;if(i.loop&&this.loopDestroy(),"object"==typeof e&&"length"in e)for(var s=0;s<e.length;s+=1)e[s]&&t.append(e[s]);else t.append(e);i.loop&&this.loopCreate(),i.observer&&h.observer||this.update()},prependSlide:function(e){var t=this.params,i=this.$wrapperEl,s=this.activeIndex;t.loop&&this.loopDestroy();var a=s+1;if("object"==typeof e&&"length"in e){for(var r=0;r<e.length;r+=1)e[r]&&i.prepend(e[r]);a=s+e.length}else i.prepend(e);t.loop&&this.loopCreate(),t.observer&&h.observer||this.update(),this.slideTo(a,0,!1)},addSlide:function(e,t){var i=this.$wrapperEl,s=this.params,a=this.activeIndex;s.loop&&(a-=this.loopedSlides,this.loopDestroy(),this.slides=i.children("."+s.slideClass));var r=this.slides.length;if(e<=0)this.prependSlide(t);else if(e>=r)this.appendSlide(t);else{for(var n=a>e?a+1:a,o=[],l=r-1;l>=e;l-=1){var d=this.slides.eq(l);d.remove(),o.unshift(d)}if("object"==typeof t&&"length"in t){for(var p=0;p<t.length;p+=1)t[p]&&i.append(t[p]);n=a>e?a+t.length:a}else i.append(t);for(var c=0;c<o.length;c+=1)i.append(o[c]);s.loop&&this.loopCreate(),s.observer&&h.observer||this.update(),s.loop?this.slideTo(n+this.loopedSlides,0,!1):this.slideTo(n,0,!1)}},removeSlide:function(e){var t=this.params,i=this.$wrapperEl,s=this.activeIndex;t.loop&&(s-=this.loopedSlides,this.loopDestroy(),this.slides=i.children("."+t.slideClass));var a,r=s;if("object"==typeof e&&"length"in e){for(var n=0;n<e.length;n+=1)a=e[n],this.slides[a]&&this.slides.eq(a).remove(),a<r&&(r-=1);r=Math.max(r,0)}else a=e,this.slides[a]&&this.slides.eq(a).remove(),a<r&&(r-=1),r=Math.max(r,0);t.loop&&this.loopCreate(),t.observer&&h.observer||this.update(),t.loop?this.slideTo(r+this.loopedSlides,0,!1):this.slideTo(r,0,!1)},removeAllSlides:function(){for(var e=[],t=0;t<this.slides.length;t+=1)e.push(t);this.removeSlide(e)}},y=function(){var i=t.navigator.userAgent,s={ios:!1,android:!1,androidChrome:!1,desktop:!1,windows:!1,iphone:!1,ipod:!1,ipad:!1,cordova:t.cordova||t.phonegap,phonegap:t.cordova||t.phonegap},a=i.match(/(Windows Phone);?[\s\/]+([\d.]+)?/),r=i.match(/(Android);?[\s\/]+([\d.]+)?/),n=i.match(/(iPad).*OS\s([\d_]+)/),o=i.match(/(iPod)(.*OS\s([\d_]+))?/),l=!n&&i.match(/(iPhone\sOS|iOS)\s([\d_]+)/);if(a&&(s.os="windows",s.osVersion=a[2],s.windows=!0),r&&!a&&(s.os="android",s.osVersion=r[2],s.android=!0,s.androidChrome=i.toLowerCase().indexOf("chrome")>=0),(n||l||o)&&(s.os="ios",s.ios=!0),l&&!o&&(s.osVersion=l[2].replace(/_/g,"."),s.iphone=!0),n&&(s.osVersion=n[2].replace(/_/g,"."),s.ipad=!0),o&&(s.osVersion=o[3]?o[3].replace(/_/g,"."):null,s.iphone=!0),s.ios&&s.osVersion&&i.indexOf("Version/")>=0&&"10"===s.osVersion.split(".")[0]&&(s.osVersion=i.toLowerCase().split("version/")[1].split(" ")[0]),s.desktop=!(s.os||s.android||s.webView),s.webView=(l||n||o)&&i.match(/.*AppleWebKit(?!.*Safari)/i),s.os&&"ios"===s.os){var d=s.osVersion.split("."),h=e.querySelector('meta[name="viewport"]');s.minimalUi=!s.webView&&(o||l)&&(1*d[0]==7?1*d[1]>=1:1*d[0]>7)&&h&&h.getAttribute("content").indexOf("minimal-ui")>=0}return s.pixelRatio=t.devicePixelRatio||1,s}();function x(){var e=this.params,t=this.el;if(!t||0!==t.offsetWidth){e.breakpoints&&this.setBreakpoint();var i=this.allowSlideNext,s=this.allowSlidePrev,a=this.snapGrid;if(this.allowSlideNext=!0,this.allowSlidePrev=!0,this.updateSize(),this.updateSlides(),e.freeMode){var r=Math.min(Math.max(this.translate,this.maxTranslate()),this.minTranslate());this.setTranslate(r),this.updateActiveIndex(),this.updateSlidesClasses(),e.autoHeight&&this.updateAutoHeight()}else this.updateSlidesClasses(),("auto"===e.slidesPerView||e.slidesPerView>1)&&this.isEnd&&!this.params.centeredSlides?this.slideTo(this.slides.length-1,0,!1,!0):this.slideTo(this.activeIndex,0,!1,!0);this.allowSlidePrev=s,this.allowSlideNext=i,this.params.watchOverflow&&a!==this.snapGrid&&this.checkOverflow()}}var E={attachEvents:function(){var i=this.params,a=this.touchEvents,r=this.el,n=this.wrapperEl;this.onTouchStart=function(i){var a=this.touchEventsData,r=this.params,n=this.touches;if(!this.animating||!r.preventIntercationOnTransition){var o=i;if(o.originalEvent&&(o=o.originalEvent),a.isTouchEvent="touchstart"===o.type,(a.isTouchEvent||!("which"in o)||3!==o.which)&&(!a.isTouched||!a.isMoved))if(r.noSwiping&&s(o.target).closest(r.noSwipingSelector?r.noSwipingSelector:"."+r.noSwipingClass)[0])this.allowClick=!0;else if(!r.swipeHandler||s(o).closest(r.swipeHandler)[0]){n.currentX="touchstart"===o.type?o.targetTouches[0].pageX:o.pageX,n.currentY="touchstart"===o.type?o.targetTouches[0].pageY:o.pageY;var l=n.currentX,h=n.currentY;if(!y.ios||y.cordova||!r.iOSEdgeSwipeDetection||!(l<=r.iOSEdgeSwipeThreshold||l>=t.screen.width-r.iOSEdgeSwipeThreshold)){if(d.extend(a,{isTouched:!0,isMoved:!1,allowTouchCallbacks:!0,isScrolling:void 0,startMoving:void 0}),n.startX=l,n.startY=h,a.touchStartTime=d.now(),this.allowClick=!0,this.updateSize(),this.swipeDirection=void 0,r.threshold>0&&(a.allowThresholdMove=!1),"touchstart"!==o.type){var p=!0;s(o.target).is(a.formElements)&&(p=!1),e.activeElement&&s(e.activeElement).is(a.formElements)&&e.activeElement!==o.target&&e.activeElement.blur(),p&&this.allowTouchMove&&o.preventDefault()}this.emit("touchStart",o)}}}}.bind(this),this.onTouchMove=function(t){var i=this.touchEventsData,a=this.params,r=this.touches,n=this.rtlTranslate,o=t;if(o.originalEvent&&(o=o.originalEvent),i.isTouched){if(!i.isTouchEvent||"mousemove"!==o.type){var l="touchmove"===o.type?o.targetTouches[0].pageX:o.pageX,h="touchmove"===o.type?o.targetTouches[0].pageY:o.pageY;if(o.preventedByNestedSwiper)return r.startX=l,void(r.startY=h);if(!this.allowTouchMove)return this.allowClick=!1,void(i.isTouched&&(d.extend(r,{startX:l,startY:h,currentX:l,currentY:h}),i.touchStartTime=d.now()));if(i.isTouchEvent&&a.touchReleaseOnEdges&&!a.loop)if(this.isVertical()){if(h<r.startY&&this.translate<=this.maxTranslate()||h>r.startY&&this.translate>=this.minTranslate())return i.isTouched=!1,void(i.isMoved=!1)}else if(l<r.startX&&this.translate<=this.maxTranslate()||l>r.startX&&this.translate>=this.minTranslate())return;if(i.isTouchEvent&&e.activeElement&&o.target===e.activeElement&&s(o.target).is(i.formElements))return i.isMoved=!0,void(this.allowClick=!1);if(i.allowTouchCallbacks&&this.emit("touchMove",o),!(o.targetTouches&&o.targetTouches.length>1)){r.currentX=l,r.currentY=h;var p,c=r.currentX-r.startX,u=r.currentY-r.startY;if(void 0===i.isScrolling&&(this.isHorizontal()&&r.currentY===r.startY||this.isVertical()&&r.currentX===r.startX?i.isScrolling=!1:c*c+u*u>=25&&(p=180*Math.atan2(Math.abs(u),Math.abs(c))/Math.PI,i.isScrolling=this.isHorizontal()?p>a.touchAngle:90-p>a.touchAngle)),i.isScrolling&&this.emit("touchMoveOpposite",o),"undefined"==typeof startMoving&&(r.currentX===r.startX&&r.currentY===r.startY||(i.startMoving=!0)),i.isScrolling)i.isTouched=!1;else if(i.startMoving){this.allowClick=!1,o.preventDefault(),a.touchMoveStopPropagation&&!a.nested&&o.stopPropagation(),i.isMoved||(a.loop&&this.loopFix(),i.startTranslate=this.getTranslate(),this.setTransition(0),this.animating&&this.$wrapperEl.trigger("webkitTransitionEnd transitionend"),i.allowMomentumBounce=!1,!a.grabCursor||!0!==this.allowSlideNext&&!0!==this.allowSlidePrev||this.setGrabCursor(!0),this.emit("sliderFirstMove",o)),this.emit("sliderMove",o),i.isMoved=!0;var v=this.isHorizontal()?c:u;r.diff=v,v*=a.touchRatio,n&&(v=-v),this.swipeDirection=v>0?"prev":"next",i.currentTranslate=v+i.startTranslate;var f=!0,m=a.resistanceRatio;if(a.touchReleaseOnEdges&&(m=0),v>0&&i.currentTranslate>this.minTranslate()?(f=!1,a.resistance&&(i.currentTranslate=this.minTranslate()-1+Math.pow(-this.minTranslate()+i.startTranslate+v,m))):v<0&&i.currentTranslate<this.maxTranslate()&&(f=!1,a.resistance&&(i.currentTranslate=this.maxTranslate()+1-Math.pow(this.maxTranslate()-i.startTranslate-v,m))),f&&(o.preventedByNestedSwiper=!0),!this.allowSlideNext&&"next"===this.swipeDirection&&i.currentTranslate<i.startTranslate&&(i.currentTranslate=i.startTranslate),!this.allowSlidePrev&&"prev"===this.swipeDirection&&i.currentTranslate>i.startTranslate&&(i.currentTranslate=i.startTranslate),a.threshold>0){if(!(Math.abs(v)>a.threshold||i.allowThresholdMove))return void(i.currentTranslate=i.startTranslate);if(!i.allowThresholdMove)return i.allowThresholdMove=!0,r.startX=r.currentX,r.startY=r.currentY,i.currentTranslate=i.startTranslate,void(r.diff=this.isHorizontal()?r.currentX-r.startX:r.currentY-r.startY)}a.followFinger&&((a.freeMode||a.watchSlidesProgress||a.watchSlidesVisibility)&&(this.updateActiveIndex(),this.updateSlidesClasses()),a.freeMode&&(0===i.velocities.length&&i.velocities.push({position:r[this.isHorizontal()?"startX":"startY"],time:i.touchStartTime}),i.velocities.push({position:r[this.isHorizontal()?"currentX":"currentY"],time:d.now()})),this.updateProgress(i.currentTranslate),this.setTranslate(i.currentTranslate))}}}}else i.startMoving&&i.isScrolling&&this.emit("touchMoveOpposite",o)}.bind(this),this.onTouchEnd=function(e){var t=this,i=t.touchEventsData,s=t.params,a=t.touches,r=t.rtlTranslate,n=t.$wrapperEl,o=t.slidesGrid,l=t.snapGrid,h=e;if(h.originalEvent&&(h=h.originalEvent),i.allowTouchCallbacks&&t.emit("touchEnd",h),i.allowTouchCallbacks=!1,!i.isTouched)return i.isMoved&&s.grabCursor&&t.setGrabCursor(!1),i.isMoved=!1,void(i.startMoving=!1);s.grabCursor&&i.isMoved&&i.isTouched&&(!0===t.allowSlideNext||!0===t.allowSlidePrev)&&t.setGrabCursor(!1);var p,c=d.now(),u=c-i.touchStartTime;if(t.allowClick&&(t.updateClickedSlide(h),t.emit("tap",h),u<300&&c-i.lastClickTime>300&&(i.clickTimeout&&clearTimeout(i.clickTimeout),i.clickTimeout=d.nextTick(function(){t&&!t.destroyed&&t.emit("click",h)},300)),u<300&&c-i.lastClickTime<300&&(i.clickTimeout&&clearTimeout(i.clickTimeout),t.emit("doubleTap",h))),i.lastClickTime=d.now(),d.nextTick(function(){t.destroyed||(t.allowClick=!0)}),!i.isTouched||!i.isMoved||!t.swipeDirection||0===a.diff||i.currentTranslate===i.startTranslate)return i.isTouched=!1,i.isMoved=!1,void(i.startMoving=!1);if(i.isTouched=!1,i.isMoved=!1,i.startMoving=!1,p=s.followFinger?r?t.translate:-t.translate:-i.currentTranslate,s.freeMode){if(p<-t.minTranslate())return void t.slideTo(t.activeIndex);if(p>-t.maxTranslate())return void(t.slides.length<l.length?t.slideTo(l.length-1):t.slideTo(t.slides.length-1));if(s.freeModeMomentum){if(i.velocities.length>1){var v=i.velocities.pop(),f=i.velocities.pop(),m=v.position-f.position,g=v.time-f.time;t.velocity=m/g,t.velocity/=2,Math.abs(t.velocity)<s.freeModeMinimumVelocity&&(t.velocity=0),(g>150||d.now()-v.time>300)&&(t.velocity=0)}else t.velocity=0;t.velocity*=s.freeModeMomentumVelocityRatio,i.velocities.length=0;var b=1e3*s.freeModeMomentumRatio,w=t.velocity*b,y=t.translate+w;r&&(y=-y);var x,E,T=!1,S=20*Math.abs(t.velocity)*s.freeModeMomentumBounceRatio;if(y<t.maxTranslate())s.freeModeMomentumBounce?(y+t.maxTranslate()<-S&&(y=t.maxTranslate()-S),x=t.maxTranslate(),T=!0,i.allowMomentumBounce=!0):y=t.maxTranslate(),s.loop&&s.centeredSlides&&(E=!0);else if(y>t.minTranslate())s.freeModeMomentumBounce?(y-t.minTranslate()>S&&(y=t.minTranslate()+S),x=t.minTranslate(),T=!0,i.allowMomentumBounce=!0):y=t.minTranslate(),s.loop&&s.centeredSlides&&(E=!0);else if(s.freeModeSticky){for(var C,M=0;M<l.length;M+=1)if(l[M]>-y){C=M;break}y=-(y=Math.abs(l[C]-y)<Math.abs(l[C-1]-y)||"next"===t.swipeDirection?l[C]:l[C-1])}if(E&&t.once("transitionEnd",function(){t.loopFix()}),0!==t.velocity)b=r?Math.abs((-y-t.translate)/t.velocity):Math.abs((y-t.translate)/t.velocity);else if(s.freeModeSticky)return void t.slideToClosest();s.freeModeMomentumBounce&&T?(t.updateProgress(x),t.setTransition(b),t.setTranslate(y),t.transitionStart(!0,t.swipeDirection),t.animating=!0,n.transitionEnd(function(){t&&!t.destroyed&&i.allowMomentumBounce&&(t.emit("momentumBounce"),t.setTransition(s.speed),t.setTranslate(x),n.transitionEnd(function(){t&&!t.destroyed&&t.transitionEnd()}))})):t.velocity?(t.updateProgress(y),t.setTransition(b),t.setTranslate(y),t.transitionStart(!0,t.swipeDirection),t.animating||(t.animating=!0,n.transitionEnd(function(){t&&!t.destroyed&&t.transitionEnd()}))):t.updateProgress(y),t.updateActiveIndex(),t.updateSlidesClasses()}else if(s.freeModeSticky)return void t.slideToClosest();(!s.freeModeMomentum||u>=s.longSwipesMs)&&(t.updateProgress(),t.updateActiveIndex(),t.updateSlidesClasses())}else{for(var z=0,k=t.slidesSizesGrid[0],P=0;P<o.length;P+=s.slidesPerGroup)void 0!==o[P+s.slidesPerGroup]?p>=o[P]&&p<o[P+s.slidesPerGroup]&&(z=P,k=o[P+s.slidesPerGroup]-o[P]):p>=o[P]&&(z=P,k=o[o.length-1]-o[o.length-2]);var $=(p-o[z])/k;if(u>s.longSwipesMs){if(!s.longSwipes)return void t.slideTo(t.activeIndex);"next"===t.swipeDirection&&($>=s.longSwipesRatio?t.slideTo(z+s.slidesPerGroup):t.slideTo(z)),"prev"===t.swipeDirection&&($>1-s.longSwipesRatio?t.slideTo(z+s.slidesPerGroup):t.slideTo(z))}else{if(!s.shortSwipes)return void t.slideTo(t.activeIndex);"next"===t.swipeDirection&&t.slideTo(z+s.slidesPerGroup),"prev"===t.swipeDirection&&t.slideTo(z)}}}.bind(this),this.onClick=function(e){this.allowClick||(this.params.preventClicks&&e.preventDefault(),this.params.preventClicksPropagation&&this.animating&&(e.stopPropagation(),e.stopImmediatePropagation()))}.bind(this);var o="container"===i.touchEventsTarget?r:n,l=!!i.nested;if(h.touch||!h.pointerEvents&&!h.prefixedPointerEvents){if(h.touch){var p=!("touchstart"!==a.start||!h.passiveListener||!i.passiveListeners)&&{passive:!0,capture:!1};o.addEventListener(a.start,this.onTouchStart,p),o.addEventListener(a.move,this.onTouchMove,h.passiveListener?{passive:!1,capture:l}:l),o.addEventListener(a.end,this.onTouchEnd,p)}(i.simulateTouch&&!y.ios&&!y.android||i.simulateTouch&&!h.touch&&y.ios)&&(o.addEventListener("mousedown",this.onTouchStart,!1),e.addEventListener("mousemove",this.onTouchMove,l),e.addEventListener("mouseup",this.onTouchEnd,!1))}else o.addEventListener(a.start,this.onTouchStart,!1),e.addEventListener(a.move,this.onTouchMove,l),e.addEventListener(a.end,this.onTouchEnd,!1);(i.preventClicks||i.preventClicksPropagation)&&o.addEventListener("click",this.onClick,!0),this.on(y.ios||y.android?"resize orientationchange observerUpdate":"resize observerUpdate",x,!0)},detachEvents:function(){var t=this.params,i=this.touchEvents,s=this.el,a=this.wrapperEl,r="container"===t.touchEventsTarget?s:a,n=!!t.nested;if(h.touch||!h.pointerEvents&&!h.prefixedPointerEvents){if(h.touch){var o=!("onTouchStart"!==i.start||!h.passiveListener||!t.passiveListeners)&&{passive:!0,capture:!1};r.removeEventListener(i.start,this.onTouchStart,o),r.removeEventListener(i.move,this.onTouchMove,n),r.removeEventListener(i.end,this.onTouchEnd,o)}(t.simulateTouch&&!y.ios&&!y.android||t.simulateTouch&&!h.touch&&y.ios)&&(r.removeEventListener("mousedown",this.onTouchStart,!1),e.removeEventListener("mousemove",this.onTouchMove,n),e.removeEventListener("mouseup",this.onTouchEnd,!1))}else r.removeEventListener(i.start,this.onTouchStart,!1),e.removeEventListener(i.move,this.onTouchMove,n),e.removeEventListener(i.end,this.onTouchEnd,!1);(t.preventClicks||t.preventClicksPropagation)&&r.removeEventListener("click",this.onClick,!0),this.off(y.ios||y.android?"resize orientationchange observerUpdate":"resize observerUpdate",x)}};var T={setBreakpoint:function(){var e=this.activeIndex,t=this.initialized,i=this.loopedSlides;void 0===i&&(i=0);var s=this.params,a=s.breakpoints;if(a&&(!a||0!==Object.keys(a).length)){var r=this.getBreakpoint(a);if(r&&this.currentBreakpoint!==r){var n=r in a?a[r]:this.originalParams,o=s.loop&&n.slidesPerView!==s.slidesPerView;d.extend(this.params,n),d.extend(this,{allowTouchMove:this.params.allowTouchMove,allowSlideNext:this.params.allowSlideNext,allowSlidePrev:this.params.allowSlidePrev}),this.currentBreakpoint=r,o&&t&&(this.loopDestroy(),this.loopCreate(),this.updateSlides(),this.slideTo(e-i+this.loopedSlides,0,!1)),this.emit("breakpoint",n)}}},getBreakpoint:function(e){if(e){var i=!1,s=[];Object.keys(e).forEach(function(e){s.push(e)}),s.sort(function(e,t){return parseInt(e,10)-parseInt(t,10)});for(var a=0;a<s.length;a+=1){var r=s[a];r>=t.innerWidth&&!i&&(i=r)}return i||"max"}}},S=function(){return{isIE:!!t.navigator.userAgent.match(/Trident/g)||!!t.navigator.userAgent.match(/MSIE/g),isSafari:(e=t.navigator.userAgent.toLowerCase(),e.indexOf("safari")>=0&&e.indexOf("chrome")<0&&e.indexOf("android")<0),isUiWebView:/(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(t.navigator.userAgent)};var e}();var C={init:!0,direction:"horizontal",touchEventsTarget:"container",initialSlide:0,speed:300,preventIntercationOnTransition:!1,iOSEdgeSwipeDetection:!1,iOSEdgeSwipeThreshold:20,freeMode:!1,freeModeMomentum:!0,freeModeMomentumRatio:1,freeModeMomentumBounce:!0,freeModeMomentumBounceRatio:1,freeModeMomentumVelocityRatio:1,freeModeSticky:!1,freeModeMinimumVelocity:.02,autoHeight:!1,setWrapperSize:!1,virtualTranslate:!1,effect:"slide",breakpoints:void 0,spaceBetween:0,slidesPerView:1,slidesPerColumn:1,slidesPerColumnFill:"column",slidesPerGroup:1,centeredSlides:!1,slidesOffsetBefore:0,slidesOffsetAfter:0,normalizeSlideIndex:!0,watchOverflow:!1,roundLengths:!1,touchRatio:1,touchAngle:45,simulateTouch:!0,shortSwipes:!0,longSwipes:!0,longSwipesRatio:.5,longSwipesMs:300,followFinger:!0,allowTouchMove:!0,threshold:0,touchMoveStopPropagation:!0,touchReleaseOnEdges:!1,uniqueNavElements:!0,resistance:!0,resistanceRatio:.85,watchSlidesProgress:!1,watchSlidesVisibility:!1,grabCursor:!1,preventClicks:!0,preventClicksPropagation:!0,slideToClickedSlide:!1,preloadImages:!0,updateOnImagesReady:!0,loop:!1,loopAdditionalSlides:0,loopedSlides:null,loopFillGroupWithBlank:!1,allowSlidePrev:!0,allowSlideNext:!0,swipeHandler:null,noSwiping:!0,noSwipingClass:"swiper-no-swiping",noSwipingSelector:null,passiveListeners:!0,containerModifierClass:"swiper-container-",slideClass:"swiper-slide",slideBlankClass:"swiper-slide-invisible-blank",slideActiveClass:"swiper-slide-active",slideDuplicateActiveClass:"swiper-slide-duplicate-active",slideVisibleClass:"swiper-slide-visible",slideDuplicateClass:"swiper-slide-duplicate",slideNextClass:"swiper-slide-next",slideDuplicateNextClass:"swiper-slide-duplicate-next",slidePrevClass:"swiper-slide-prev",slideDuplicatePrevClass:"swiper-slide-duplicate-prev",wrapperClass:"swiper-wrapper",runCallbacksOnInit:!0},M={update:u,translate:v,transition:f,slide:m,loop:g,grabCursor:b,manipulation:w,events:E,breakpoints:T,checkOverflow:{checkOverflow:function(){var e=this.isLocked;this.isLocked=1===this.snapGrid.length,this.allowSlideNext=!this.isLocked,this.allowSlidePrev=!this.isLocked,e!==this.isLocked&&this.emit(this.isLocked?"lock":"unlock"),e&&e!==this.isLocked&&(this.isEnd=!1,this.navigation.update())}},classes:{addClasses:function(){var e=this.classNames,t=this.params,i=this.rtl,s=this.$el,a=[];a.push(t.direction),t.freeMode&&a.push("free-mode"),h.flexbox||a.push("no-flexbox"),t.autoHeight&&a.push("autoheight"),i&&a.push("rtl"),t.slidesPerColumn>1&&a.push("multirow"),y.android&&a.push("android"),y.ios&&a.push("ios"),S.isIE&&(h.pointerEvents||h.prefixedPointerEvents)&&a.push("wp8-"+t.direction),a.forEach(function(i){e.push(t.containerModifierClass+i)}),s.addClass(e.join(" "))},removeClasses:function(){var e=this.$el,t=this.classNames;e.removeClass(t.join(" "))}},images:{loadImage:function(e,i,s,a,r,n){var o;function l(){n&&n()}e.complete&&r?l():i?((o=new t.Image).onload=l,o.onerror=l,a&&(o.sizes=a),s&&(o.srcset=s),i&&(o.src=i)):l()},preloadImages:function(){var e=this;function t(){void 0!==e&&null!==e&&e&&!e.destroyed&&(void 0!==e.imagesLoaded&&(e.imagesLoaded+=1),e.imagesLoaded===e.imagesToLoad.length&&(e.params.updateOnImagesReady&&e.update(),e.emit("imagesReady")))}e.imagesToLoad=e.$el.find("img");for(var i=0;i<e.imagesToLoad.length;i+=1){var s=e.imagesToLoad[i];e.loadImage(s,s.currentSrc||s.getAttribute("src"),s.srcset||s.getAttribute("srcset"),s.sizes||s.getAttribute("sizes"),!0,t)}}}},z={},k=function(e){function t(){for(var i,a,r,n=[],o=arguments.length;o--;)n[o]=arguments[o];1===n.length&&n[0].constructor&&n[0].constructor===Object?r=n[0]:(a=(i=n)[0],r=i[1]),r||(r={}),r=d.extend({},r),a&&!r.el&&(r.el=a),e.call(this,r),Object.keys(M).forEach(function(e){Object.keys(M[e]).forEach(function(i){t.prototype[i]||(t.prototype[i]=M[e][i])})});var l=this;void 0===l.modules&&(l.modules={}),Object.keys(l.modules).forEach(function(e){var t=l.modules[e];if(t.params){var i=Object.keys(t.params)[0],s=t.params[i];if("object"!=typeof s)return;if(!(i in r&&"enabled"in s))return;!0===r[i]&&(r[i]={enabled:!0}),"object"!=typeof r[i]||"enabled"in r[i]||(r[i].enabled=!0),r[i]||(r[i]={enabled:!1})}});var p=d.extend({},C);l.useModulesParams(p),l.params=d.extend({},p,z,r),l.originalParams=d.extend({},l.params),l.passedParams=d.extend({},r),l.$=s;var c=s(l.params.el);if(a=c[0]){if(c.length>1){var u=[];return c.each(function(e,i){var s=d.extend({},r,{el:i});u.push(new t(s))}),u}a.swiper=l,c.data("swiper",l);var v,f,m=c.children("."+l.params.wrapperClass);return d.extend(l,{$el:c,el:a,$wrapperEl:m,wrapperEl:m[0],classNames:[],slides:s(),slidesGrid:[],snapGrid:[],slidesSizesGrid:[],isHorizontal:function(){return"horizontal"===l.params.direction},isVertical:function(){return"vertical"===l.params.direction},rtl:"rtl"===a.dir.toLowerCase()||"rtl"===c.css("direction"),rtlTranslate:"horizontal"===l.params.direction&&("rtl"===a.dir.toLowerCase()||"rtl"===c.css("direction")),wrongRTL:"-webkit-box"===m.css("display"),activeIndex:0,realIndex:0,isBeginning:!0,isEnd:!1,translate:0,previousTranslate:0,progress:0,velocity:0,animating:!1,allowSlideNext:l.params.allowSlideNext,allowSlidePrev:l.params.allowSlidePrev,touchEvents:(v=["touchstart","touchmove","touchend"],f=["mousedown","mousemove","mouseup"],h.pointerEvents?f=["pointerdown","pointermove","pointerup"]:h.prefixedPointerEvents&&(f=["MSPointerDown","MSPointerMove","MSPointerUp"]),l.touchEventsTouch={start:v[0],move:v[1],end:v[2]},l.touchEventsDesktop={start:f[0],move:f[1],end:f[2]},h.touch||!l.params.simulateTouch?l.touchEventsTouch:l.touchEventsDesktop),touchEventsData:{isTouched:void 0,isMoved:void 0,allowTouchCallbacks:void 0,touchStartTime:void 0,isScrolling:void 0,currentTranslate:void 0,startTranslate:void 0,allowThresholdMove:void 0,formElements:"input, select, option, textarea, button, video",lastClickTime:d.now(),clickTimeout:void 0,velocities:[],allowMomentumBounce:void 0,isTouchEvent:void 0,startMoving:void 0},allowClick:!0,allowTouchMove:l.params.allowTouchMove,touches:{startX:0,startY:0,currentX:0,currentY:0,diff:0},imagesToLoad:[],imagesLoaded:0}),l.useModules(),l.params.init&&l.init(),l}}e&&(t.__proto__=e),t.prototype=Object.create(e&&e.prototype),t.prototype.constructor=t;var i={extendedDefaults:{configurable:!0},defaults:{configurable:!0},Class:{configurable:!0},$:{configurable:!0}};return t.prototype.slidesPerViewDynamic=function(){var e=this.params,t=this.slides,i=this.slidesGrid,s=this.size,a=this.activeIndex,r=1;if(e.centeredSlides){for(var n,o=t[a].swiperSlideSize,l=a+1;l<t.length;l+=1)t[l]&&!n&&(r+=1,(o+=t[l].swiperSlideSize)>s&&(n=!0));for(var d=a-1;d>=0;d-=1)t[d]&&!n&&(r+=1,(o+=t[d].swiperSlideSize)>s&&(n=!0))}else for(var h=a+1;h<t.length;h+=1)i[h]-i[a]<s&&(r+=1);return r},t.prototype.update=function(){var e=this;if(e&&!e.destroyed){var t=e.snapGrid,i=e.params;i.breakpoints&&e.setBreakpoint(),e.updateSize(),e.updateSlides(),e.updateProgress(),e.updateSlidesClasses(),e.params.freeMode?(s(),e.params.autoHeight&&e.updateAutoHeight()):(("auto"===e.params.slidesPerView||e.params.slidesPerView>1)&&e.isEnd&&!e.params.centeredSlides?e.slideTo(e.slides.length-1,0,!1,!0):e.slideTo(e.activeIndex,0,!1,!0))||s(),i.watchOverflow&&t!==e.snapGrid&&e.checkOverflow(),e.emit("update")}function s(){var t=e.rtlTranslate?-1*e.translate:e.translate,i=Math.min(Math.max(t,e.maxTranslate()),e.minTranslate());e.setTranslate(i),e.updateActiveIndex(),e.updateSlidesClasses()}},t.prototype.init=function(){this.initialized||(this.emit("beforeInit"),this.params.breakpoints&&this.setBreakpoint(),this.addClasses(),this.params.loop&&this.loopCreate(),this.updateSize(),this.updateSlides(),this.params.watchOverflow&&this.checkOverflow(),this.params.grabCursor&&this.setGrabCursor(),this.params.preloadImages&&this.preloadImages(),this.params.loop?this.slideTo(this.params.initialSlide+this.loopedSlides,0,this.params.runCallbacksOnInit):this.slideTo(this.params.initialSlide,0,this.params.runCallbacksOnInit),this.attachEvents(),this.initialized=!0,this.emit("init"))},t.prototype.destroy=function(e,t){void 0===e&&(e=!0),void 0===t&&(t=!0);var i=this,s=i.params,a=i.$el,r=i.$wrapperEl,n=i.slides;return void 0===i.params||i.destroyed?null:(i.emit("beforeDestroy"),i.initialized=!1,i.detachEvents(),s.loop&&i.loopDestroy(),t&&(i.removeClasses(),a.removeAttr("style"),r.removeAttr("style"),n&&n.length&&n.removeClass([s.slideVisibleClass,s.slideActiveClass,s.slideNextClass,s.slidePrevClass].join(" ")).removeAttr("style").removeAttr("data-swiper-slide-index").removeAttr("data-swiper-column").removeAttr("data-swiper-row")),i.emit("destroy"),Object.keys(i.eventsListeners).forEach(function(e){i.off(e)}),!1!==e&&(i.$el[0].swiper=null,i.$el.data("swiper",null),d.deleteProps(i)),i.destroyed=!0,null)},t.extendDefaults=function(e){d.extend(z,e)},i.extendedDefaults.get=function(){return z},i.defaults.get=function(){return C},i.Class.get=function(){return e},i.$.get=function(){return s},Object.defineProperties(t,i),t}(p),P={name:"device",proto:{device:y},static:{device:y}},$={name:"support",proto:{support:h},static:{support:h}},L={name:"browser",proto:{browser:S},static:{browser:S}},I={name:"resize",create:function(){var e=this;d.extend(e,{resize:{resizeHandler:function(){e&&!e.destroyed&&e.initialized&&(e.emit("beforeResize"),e.emit("resize"))},orientationChangeHandler:function(){e&&!e.destroyed&&e.initialized&&e.emit("orientationchange")}}})},on:{init:function(){t.addEventListener("resize",this.resize.resizeHandler),t.addEventListener("orientationchange",this.resize.orientationChangeHandler)},destroy:function(){t.removeEventListener("resize",this.resize.resizeHandler),t.removeEventListener("orientationchange",this.resize.orientationChangeHandler)}}},D={func:t.MutationObserver||t.WebkitMutationObserver,attach:function(e,t){void 0===t&&(t={});var i=this,s=new(0,D.func)(function(e){e.forEach(function(e){i.emit("observerUpdate",e)})});s.observe(e,{attributes:void 0===t.attributes||t.attributes,childList:void 0===t.childList||t.childList,characterData:void 0===t.characterData||t.characterData}),i.observer.observers.push(s)},init:function(){if(h.observer&&this.params.observer){if(this.params.observeParents)for(var e=this.$el.parents(),t=0;t<e.length;t+=1)this.observer.attach(e[t]);this.observer.attach(this.$el[0],{childList:!1}),this.observer.attach(this.$wrapperEl[0],{attributes:!1})}},destroy:function(){this.observer.observers.forEach(function(e){e.disconnect()}),this.observer.observers=[]}},O={name:"observer",params:{observer:!1,observeParents:!1},create:function(){d.extend(this,{observer:{init:D.init.bind(this),attach:D.attach.bind(this),destroy:D.destroy.bind(this),observers:[]}})},on:{init:function(){this.observer.init()},destroy:function(){this.observer.destroy()}}},A={update:function(e){var t=this,i=t.params,s=i.slidesPerView,a=i.slidesPerGroup,r=i.centeredSlides,n=t.virtual,o=n.from,l=n.to,h=n.slides,p=n.slidesGrid,c=n.renderSlide,u=n.offset;t.updateActiveIndex();var v,f,m,g=t.activeIndex||0;v=t.rtlTranslate?"right":t.isHorizontal()?"left":"top",r?(f=Math.floor(s/2)+a,m=Math.floor(s/2)+a):(f=s+(a-1),m=a);var b=Math.max((g||0)-m,0),w=Math.min((g||0)+f,h.length-1),y=(t.slidesGrid[b]||0)-(t.slidesGrid[0]||0);function x(){t.updateSlides(),t.updateProgress(),t.updateSlidesClasses(),t.lazy&&t.params.lazy.enabled&&t.lazy.load()}if(d.extend(t.virtual,{from:b,to:w,offset:y,slidesGrid:t.slidesGrid}),o===b&&l===w&&!e)return t.slidesGrid!==p&&y!==u&&t.slides.css(v,y+"px"),void t.updateProgress();if(t.params.virtual.renderExternal)return t.params.virtual.renderExternal.call(t,{offset:y,from:b,to:w,slides:function(){for(var e=[],t=b;t<=w;t+=1)e.push(h[t]);return e}()}),void x();var E=[],T=[];if(e)t.$wrapperEl.find("."+t.params.slideClass).remove();else for(var S=o;S<=l;S+=1)(S<b||S>w)&&t.$wrapperEl.find("."+t.params.slideClass+'[data-swiper-slide-index="'+S+'"]').remove();for(var C=0;C<h.length;C+=1)C>=b&&C<=w&&(void 0===l||e?T.push(C):(C>l&&T.push(C),C<o&&E.push(C)));T.forEach(function(e){t.$wrapperEl.append(c(h[e],e))}),E.sort(function(e,t){return e<t}).forEach(function(e){t.$wrapperEl.prepend(c(h[e],e))}),t.$wrapperEl.children(".swiper-slide").css(v,y+"px"),x()},renderSlide:function(e,t){var i=this.params.virtual;if(i.cache&&this.virtual.cache[t])return this.virtual.cache[t];var a=i.renderSlide?s(i.renderSlide.call(this,e,t)):s('<div class="'+this.params.slideClass+'" data-swiper-slide-index="'+t+'">'+e+"</div>");return a.attr("data-swiper-slide-index")||a.attr("data-swiper-slide-index",t),i.cache&&(this.virtual.cache[t]=a),a},appendSlide:function(e){this.virtual.slides.push(e),this.virtual.update(!0)},prependSlide:function(e){if(this.virtual.slides.unshift(e),this.params.virtual.cache){var t=this.virtual.cache,i={};Object.keys(t).forEach(function(e){i[e+1]=t[e]}),this.virtual.cache=i}this.virtual.update(!0),this.slideNext(0)}},G={name:"virtual",params:{virtual:{enabled:!1,slides:[],cache:!0,renderSlide:null,renderExternal:null}},create:function(){d.extend(this,{virtual:{update:A.update.bind(this),appendSlide:A.appendSlide.bind(this),prependSlide:A.prependSlide.bind(this),renderSlide:A.renderSlide.bind(this),slides:this.params.virtual.slides,cache:{}}})},on:{beforeInit:function(){if(this.params.virtual.enabled){this.classNames.push(this.params.containerModifierClass+"virtual");var e={watchSlidesProgress:!0};d.extend(this.params,e),d.extend(this.originalParams,e),this.virtual.update()}},setTranslate:function(){this.params.virtual.enabled&&this.virtual.update()}}},H={handle:function(i){var s=this.rtlTranslate,a=i;a.originalEvent&&(a=a.originalEvent);var r=a.keyCode||a.charCode;if(!this.allowSlideNext&&(this.isHorizontal()&&39===r||this.isVertical()&&40===r))return!1;if(!this.allowSlidePrev&&(this.isHorizontal()&&37===r||this.isVertical()&&38===r))return!1;if(!(a.shiftKey||a.altKey||a.ctrlKey||a.metaKey||e.activeElement&&e.activeElement.nodeName&&("input"===e.activeElement.nodeName.toLowerCase()||"textarea"===e.activeElement.nodeName.toLowerCase()))){if(this.params.keyboard.onlyInViewport&&(37===r||39===r||38===r||40===r)){var n=!1;if(this.$el.parents("."+this.params.slideClass).length>0&&0===this.$el.parents("."+this.params.slideActiveClass).length)return;var o=t.innerWidth,l=t.innerHeight,d=this.$el.offset();s&&(d.left-=this.$el[0].scrollLeft);for(var h=[[d.left,d.top],[d.left+this.width,d.top],[d.left,d.top+this.height],[d.left+this.width,d.top+this.height]],p=0;p<h.length;p+=1){var c=h[p];c[0]>=0&&c[0]<=o&&c[1]>=0&&c[1]<=l&&(n=!0)}if(!n)return}this.isHorizontal()?(37!==r&&39!==r||(a.preventDefault?a.preventDefault():a.returnValue=!1),(39===r&&!s||37===r&&s)&&this.slideNext(),(37===r&&!s||39===r&&s)&&this.slidePrev()):(38!==r&&40!==r||(a.preventDefault?a.preventDefault():a.returnValue=!1),40===r&&this.slideNext(),38===r&&this.slidePrev()),this.emit("keyPress",r)}},enable:function(){this.keyboard.enabled||(s(e).on("keydown",this.keyboard.handle),this.keyboard.enabled=!0)},disable:function(){this.keyboard.enabled&&(s(e).off("keydown",this.keyboard.handle),this.keyboard.enabled=!1)}},N={name:"keyboard",params:{keyboard:{enabled:!1,onlyInViewport:!0}},create:function(){d.extend(this,{keyboard:{enabled:!1,enable:H.enable.bind(this),disable:H.disable.bind(this),handle:H.handle.bind(this)}})},on:{init:function(){this.params.keyboard.enabled&&this.keyboard.enable()},destroy:function(){this.keyboard.enabled&&this.keyboard.disable()}}};var B={lastScrollTime:d.now(),event:t.navigator.userAgent.indexOf("firefox")>-1?"DOMMouseScroll":function(){var t="onwheel"in e;if(!t){var i=e.createElement("div");i.setAttribute("onwheel","return;"),t="function"==typeof i.onwheel}return!t&&e.implementation&&e.implementation.hasFeature&&!0!==e.implementation.hasFeature("","")&&(t=e.implementation.hasFeature("Events.wheel","3.0")),t}()?"wheel":"mousewheel",normalize:function(e){var t=0,i=0,s=0,a=0;return"detail"in e&&(i=e.detail),"wheelDelta"in e&&(i=-e.wheelDelta/120),"wheelDeltaY"in e&&(i=-e.wheelDeltaY/120),"wheelDeltaX"in e&&(t=-e.wheelDeltaX/120),"axis"in e&&e.axis===e.HORIZONTAL_AXIS&&(t=i,i=0),s=10*t,a=10*i,"deltaY"in e&&(a=e.deltaY),"deltaX"in e&&(s=e.deltaX),(s||a)&&e.deltaMode&&(1===e.deltaMode?(s*=40,a*=40):(s*=800,a*=800)),s&&!t&&(t=s<1?-1:1),a&&!i&&(i=a<1?-1:1),{spinX:t,spinY:i,pixelX:s,pixelY:a}},handleMouseEnter:function(){this.mouseEntered=!0},handleMouseLeave:function(){this.mouseEntered=!1},handle:function(e){var i=e,s=this,a=s.params.mousewheel;if(!s.mouseEntered&&!a.releaseOnEdges)return!0;i.originalEvent&&(i=i.originalEvent);var r=0,n=s.rtlTranslate?-1:1,o=B.normalize(i);if(a.forceToAxis)if(s.isHorizontal()){if(!(Math.abs(o.pixelX)>Math.abs(o.pixelY)))return!0;r=o.pixelX*n}else{if(!(Math.abs(o.pixelY)>Math.abs(o.pixelX)))return!0;r=o.pixelY}else r=Math.abs(o.pixelX)>Math.abs(o.pixelY)?-o.pixelX*n:-o.pixelY;if(0===r)return!0;if(a.invert&&(r=-r),s.params.freeMode){s.params.loop&&s.loopFix();var l=s.getTranslate()+r*a.sensitivity,h=s.isBeginning,p=s.isEnd;if(l>=s.minTranslate()&&(l=s.minTranslate()),l<=s.maxTranslate()&&(l=s.maxTranslate()),s.setTransition(0),s.setTranslate(l),s.updateProgress(),s.updateActiveIndex(),s.updateSlidesClasses(),(!h&&s.isBeginning||!p&&s.isEnd)&&s.updateSlidesClasses(),s.params.freeModeSticky&&(clearTimeout(s.mousewheel.timeout),s.mousewheel.timeout=d.nextTick(function(){s.slideToClosest()},300)),s.emit("scroll",i),s.params.autoplay&&s.params.autoplayDisableOnInteraction&&s.autoplay.stop(),l===s.minTranslate()||l===s.maxTranslate())return!0}else{if(d.now()-s.mousewheel.lastScrollTime>60)if(r<0)if(s.isEnd&&!s.params.loop||s.animating){if(a.releaseOnEdges)return!0}else s.slideNext(),s.emit("scroll",i);else if(s.isBeginning&&!s.params.loop||s.animating){if(a.releaseOnEdges)return!0}else s.slidePrev(),s.emit("scroll",i);s.mousewheel.lastScrollTime=(new t.Date).getTime()}return i.preventDefault?i.preventDefault():i.returnValue=!1,!1},enable:function(){if(!B.event)return!1;if(this.mousewheel.enabled)return!1;var e=this.$el;return"container"!==this.params.mousewheel.eventsTarged&&(e=s(this.params.mousewheel.eventsTarged)),e.on("mouseenter",this.mousewheel.handleMouseEnter),e.on("mouseleave",this.mousewheel.handleMouseLeave),e.on(B.event,this.mousewheel.handle),this.mousewheel.enabled=!0,!0},disable:function(){if(!B.event)return!1;if(!this.mousewheel.enabled)return!1;var e=this.$el;return"container"!==this.params.mousewheel.eventsTarged&&(e=s(this.params.mousewheel.eventsTarged)),e.off(B.event,this.mousewheel.handle),this.mousewheel.enabled=!1,!0}},X={update:function(){var e=this.params.navigation;if(!this.params.loop){var t=this.navigation,i=t.$nextEl,s=t.$prevEl;s&&s.length>0&&(this.isBeginning?s.addClass(e.disabledClass):s.removeClass(e.disabledClass),s[this.params.watchOverflow&&this.isLocked?"addClass":"removeClass"](e.lockClass)),i&&i.length>0&&(this.isEnd?i.addClass(e.disabledClass):i.removeClass(e.disabledClass),i[this.params.watchOverflow&&this.isLocked?"addClass":"removeClass"](e.lockClass))}},init:function(){var e,t,i=this,a=i.params.navigation;(a.nextEl||a.prevEl)&&(a.nextEl&&(e=s(a.nextEl),i.params.uniqueNavElements&&"string"==typeof a.nextEl&&e.length>1&&1===i.$el.find(a.nextEl).length&&(e=i.$el.find(a.nextEl))),a.prevEl&&(t=s(a.prevEl),i.params.uniqueNavElements&&"string"==typeof a.prevEl&&t.length>1&&1===i.$el.find(a.prevEl).length&&(t=i.$el.find(a.prevEl))),e&&e.length>0&&e.on("click",function(e){e.preventDefault(),i.isEnd&&!i.params.loop||i.slideNext()}),t&&t.length>0&&t.on("click",function(e){e.preventDefault(),i.isBeginning&&!i.params.loop||i.slidePrev()}),d.extend(i.navigation,{$nextEl:e,nextEl:e&&e[0],$prevEl:t,prevEl:t&&t[0]}))},destroy:function(){var e=this.navigation,t=e.$nextEl,i=e.$prevEl;t&&t.length&&(t.off("click"),t.removeClass(this.params.navigation.disabledClass)),i&&i.length&&(i.off("click"),i.removeClass(this.params.navigation.disabledClass))}},Y={update:function(){var e=this.rtl,t=this.params.pagination;if(t.el&&this.pagination.el&&this.pagination.$el&&0!==this.pagination.$el.length){var i,a=this.virtual&&this.params.virtual.enabled?this.virtual.slides.length:this.slides.length,r=this.pagination.$el,n=this.params.loop?Math.ceil((a-2*this.loopedSlides)/this.params.slidesPerGroup):this.snapGrid.length;if(this.params.loop?((i=Math.ceil((this.activeIndex-this.loopedSlides)/this.params.slidesPerGroup))>a-1-2*this.loopedSlides&&(i-=a-2*this.loopedSlides),i>n-1&&(i-=n),i<0&&"bullets"!==this.params.paginationType&&(i=n+i)):i=void 0!==this.snapIndex?this.snapIndex:this.activeIndex||0,"bullets"===t.type&&this.pagination.bullets&&this.pagination.bullets.length>0){var o,l,d,h=this.pagination.bullets;if(t.dynamicBullets&&(this.pagination.bulletSize=h.eq(0)[this.isHorizontal()?"outerWidth":"outerHeight"](!0),r.css(this.isHorizontal()?"width":"height",this.pagination.bulletSize*(t.dynamicMainBullets+4)+"px"),t.dynamicMainBullets>1&&void 0!==this.previousIndex&&(this.pagination.dynamicBulletIndex+=i-this.previousIndex,this.pagination.dynamicBulletIndex>t.dynamicMainBullets-1?this.pagination.dynamicBulletIndex=t.dynamicMainBullets-1:this.pagination.dynamicBulletIndex<0&&(this.pagination.dynamicBulletIndex=0)),o=i-this.pagination.dynamicBulletIndex,d=((l=o+(Math.min(h.length,t.dynamicMainBullets)-1))+o)/2),h.removeClass(t.bulletActiveClass+" "+t.bulletActiveClass+"-next "+t.bulletActiveClass+"-next-next "+t.bulletActiveClass+"-prev "+t.bulletActiveClass+"-prev-prev "+t.bulletActiveClass+"-main"),r.length>1)h.each(function(e,a){var r=s(a),n=r.index();n===i&&r.addClass(t.bulletActiveClass),t.dynamicBullets&&(n>=o&&n<=l&&r.addClass(t.bulletActiveClass+"-main"),n===o&&r.prev().addClass(t.bulletActiveClass+"-prev").prev().addClass(t.bulletActiveClass+"-prev-prev"),n===l&&r.next().addClass(t.bulletActiveClass+"-next").next().addClass(t.bulletActiveClass+"-next-next"))});else if(h.eq(i).addClass(t.bulletActiveClass),t.dynamicBullets){for(var p=h.eq(o),c=h.eq(l),u=o;u<=l;u+=1)h.eq(u).addClass(t.bulletActiveClass+"-main");p.prev().addClass(t.bulletActiveClass+"-prev").prev().addClass(t.bulletActiveClass+"-prev-prev"),c.next().addClass(t.bulletActiveClass+"-next").next().addClass(t.bulletActiveClass+"-next-next")}if(t.dynamicBullets){var v=Math.min(h.length,t.dynamicMainBullets+4),f=(this.pagination.bulletSize*v-this.pagination.bulletSize)/2-d*this.pagination.bulletSize,m=e?"right":"left";h.css(this.isHorizontal()?m:"top",f+"px")}}if("fraction"===t.type&&(r.find("."+t.currentClass).text(t.formatFractionCurrent(i+1)),r.find("."+t.totalClass).text(t.formatFractionTotal(n))),"progressbar"===t.type){var g;g=t.progressbarOpposite?this.isHorizontal()?"vertical":"horizontal":this.isHorizontal()?"horizontal":"vertical";var b=(i+1)/n,w=1,y=1;"horizontal"===g?w=b:y=b,r.find("."+t.progressbarFillClass).transform("translate3d(0,0,0) scaleX("+w+") scaleY("+y+")").transition(this.params.speed)}"custom"===t.type&&t.renderCustom?(r.html(t.renderCustom(this,i+1,n)),this.emit("paginationRender",this,r[0])):this.emit("paginationUpdate",this,r[0]),r[this.params.watchOverflow&&this.isLocked?"addClass":"removeClass"](t.lockClass)}},render:function(){var e=this.params.pagination;if(e.el&&this.pagination.el&&this.pagination.$el&&0!==this.pagination.$el.length){var t=this.virtual&&this.params.virtual.enabled?this.virtual.slides.length:this.slides.length,i=this.pagination.$el,s="";if("bullets"===e.type){for(var a=this.params.loop?Math.ceil((t-2*this.loopedSlides)/this.params.slidesPerGroup):this.snapGrid.length,r=0;r<a;r+=1)e.renderBullet?s+=e.renderBullet.call(this,r,e.bulletClass):s+="<"+e.bulletElement+' class="'+e.bulletClass+'"></'+e.bulletElement+">";i.html(s),this.pagination.bullets=i.find("."+e.bulletClass)}"fraction"===e.type&&(s=e.renderFraction?e.renderFraction.call(this,e.currentClass,e.totalClass):'<span class="'+e.currentClass+'"></span> / <span class="'+e.totalClass+'"></span>',i.html(s)),"progressbar"===e.type&&(s=e.renderProgressbar?e.renderProgressbar.call(this,e.progressbarFillClass):'<span class="'+e.progressbarFillClass+'"></span>',i.html(s)),"custom"!==e.type&&this.emit("paginationRender",this.pagination.$el[0])}},init:function(){var e=this,t=e.params.pagination;if(t.el){var i=s(t.el);0!==i.length&&(e.params.uniqueNavElements&&"string"==typeof t.el&&i.length>1&&1===e.$el.find(t.el).length&&(i=e.$el.find(t.el)),"bullets"===t.type&&t.clickable&&i.addClass(t.clickableClass),i.addClass(t.modifierClass+t.type),"bullets"===t.type&&t.dynamicBullets&&(i.addClass(""+t.modifierClass+t.type+"-dynamic"),e.pagination.dynamicBulletIndex=0,t.dynamicMainBullets<1&&(t.dynamicMainBullets=1)),"progressbar"===t.type&&t.progressbarOpposite&&i.addClass(t.progressbarOppositeClass),t.clickable&&i.on("click","."+t.bulletClass,function(t){t.preventDefault();var i=s(this).index()*e.params.slidesPerGroup;e.params.loop&&(i+=e.loopedSlides),e.slideTo(i)}),d.extend(e.pagination,{$el:i,el:i[0]}))}},destroy:function(){var e=this.params.pagination;if(e.el&&this.pagination.el&&this.pagination.$el&&0!==this.pagination.$el.length){var t=this.pagination.$el;t.removeClass(e.hiddenClass),t.removeClass(e.modifierClass+e.type),this.pagination.bullets&&this.pagination.bullets.removeClass(e.bulletActiveClass),e.clickable&&t.off("click","."+e.bulletClass)}}},V={setTranslate:function(){if(this.params.scrollbar.el&&this.scrollbar.el){var e=this.scrollbar,t=this.rtlTranslate,i=this.progress,s=e.dragSize,a=e.trackSize,r=e.$dragEl,n=e.$el,o=this.params.scrollbar,l=s,d=(a-s)*i;t?(d=-d)>0?(l=s-d,d=0):-d+s>a&&(l=a+d):d<0?(l=s+d,d=0):d+s>a&&(l=a-d),this.isHorizontal()?(h.transforms3d?r.transform("translate3d("+d+"px, 0, 0)"):r.transform("translateX("+d+"px)"),r[0].style.width=l+"px"):(h.transforms3d?r.transform("translate3d(0px, "+d+"px, 0)"):r.transform("translateY("+d+"px)"),r[0].style.height=l+"px"),o.hide&&(clearTimeout(this.scrollbar.timeout),n[0].style.opacity=1,this.scrollbar.timeout=setTimeout(function(){n[0].style.opacity=0,n.transition(400)},1e3))}},setTransition:function(e){this.params.scrollbar.el&&this.scrollbar.el&&this.scrollbar.$dragEl.transition(e)},updateSize:function(){if(this.params.scrollbar.el&&this.scrollbar.el){var e=this.scrollbar,t=e.$dragEl,i=e.$el;t[0].style.width="",t[0].style.height="";var s,a=this.isHorizontal()?i[0].offsetWidth:i[0].offsetHeight,r=this.size/this.virtualSize,n=r*(a/this.size);s="auto"===this.params.scrollbar.dragSize?a*r:parseInt(this.params.scrollbar.dragSize,10),this.isHorizontal()?t[0].style.width=s+"px":t[0].style.height=s+"px",i[0].style.display=r>=1?"none":"",this.params.scrollbarHide&&(i[0].style.opacity=0),d.extend(e,{trackSize:a,divider:r,moveDivider:n,dragSize:s}),e.$el[this.params.watchOverflow&&this.isLocked?"addClass":"removeClass"](this.params.scrollbar.lockClass)}},setDragPosition:function(e){var t,i=this.scrollbar,s=this.rtlTranslate,a=i.$el,r=i.dragSize,n=i.trackSize;t=((this.isHorizontal()?"touchstart"===e.type||"touchmove"===e.type?e.targetTouches[0].pageX:e.pageX||e.clientX:"touchstart"===e.type||"touchmove"===e.type?e.targetTouches[0].pageY:e.pageY||e.clientY)-a.offset()[this.isHorizontal()?"left":"top"]-r/2)/(n-r),t=Math.max(Math.min(t,1),0),s&&(t=1-t);var o=this.minTranslate()+(this.maxTranslate()-this.minTranslate())*t;this.updateProgress(o),this.setTranslate(o),this.updateActiveIndex(),this.updateSlidesClasses()},onDragStart:function(e){var t=this.params.scrollbar,i=this.scrollbar,s=this.$wrapperEl,a=i.$el,r=i.$dragEl;this.scrollbar.isTouched=!0,e.preventDefault(),e.stopPropagation(),s.transition(100),r.transition(100),i.setDragPosition(e),clearTimeout(this.scrollbar.dragTimeout),a.transition(0),t.hide&&a.css("opacity",1),this.emit("scrollbarDragStart",e)},onDragMove:function(e){var t=this.scrollbar,i=this.$wrapperEl,s=t.$el,a=t.$dragEl;this.scrollbar.isTouched&&(e.preventDefault?e.preventDefault():e.returnValue=!1,t.setDragPosition(e),i.transition(0),s.transition(0),a.transition(0),this.emit("scrollbarDragMove",e))},onDragEnd:function(e){var t=this.params.scrollbar,i=this.scrollbar.$el;this.scrollbar.isTouched&&(this.scrollbar.isTouched=!1,t.hide&&(clearTimeout(this.scrollbar.dragTimeout),this.scrollbar.dragTimeout=d.nextTick(function(){i.css("opacity",0),i.transition(400)},1e3)),this.emit("scrollbarDragEnd",e),t.snapOnRelease&&this.slideToClosest())},enableDraggable:function(){if(this.params.scrollbar.el){var t=this.scrollbar,i=this.touchEvents,s=this.touchEventsDesktop,a=this.params,r=t.$el[0],n=!(!h.passiveListener||!a.passiveListener)&&{passive:!1,capture:!1},o=!(!h.passiveListener||!a.passiveListener)&&{passive:!0,capture:!1};h.touch||!h.pointerEvents&&!h.prefixedPointerEvents?(h.touch&&(r.addEventListener(i.start,this.scrollbar.onDragStart,n),r.addEventListener(i.move,this.scrollbar.onDragMove,n),r.addEventListener(i.end,this.scrollbar.onDragEnd,o)),(a.simulateTouch&&!y.ios&&!y.android||a.simulateTouch&&!h.touch&&y.ios)&&(r.addEventListener("mousedown",this.scrollbar.onDragStart,n),e.addEventListener("mousemove",this.scrollbar.onDragMove,n),e.addEventListener("mouseup",this.scrollbar.onDragEnd,o))):(r.addEventListener(s.start,this.scrollbar.onDragStart,n),e.addEventListener(s.move,this.scrollbar.onDragMove,n),e.addEventListener(s.end,this.scrollbar.onDragEnd,o))}},disableDraggable:function(){if(this.params.scrollbar.el){var t=this.scrollbar,i=this.touchEvents,s=this.touchEventsDesktop,a=this.params,r=t.$el[0],n=!(!h.passiveListener||!a.passiveListener)&&{passive:!1,capture:!1},o=!(!h.passiveListener||!a.passiveListener)&&{passive:!0,capture:!1};h.touch||!h.pointerEvents&&!h.prefixedPointerEvents?(h.touch&&(r.removeEventListener(i.start,this.scrollbar.onDragStart,n),r.removeEventListener(i.move,this.scrollbar.onDragMove,n),r.removeEventListener(i.end,this.scrollbar.onDragEnd,o)),(a.simulateTouch&&!y.ios&&!y.android||a.simulateTouch&&!h.touch&&y.ios)&&(r.removeEventListener("mousedown",this.scrollbar.onDragStart,n),e.removeEventListener("mousemove",this.scrollbar.onDragMove,n),e.removeEventListener("mouseup",this.scrollbar.onDragEnd,o))):(r.removeEventListener(s.start,this.scrollbar.onDragStart,n),e.removeEventListener(s.move,this.scrollbar.onDragMove,n),e.removeEventListener(s.end,this.scrollbar.onDragEnd,o))}},init:function(){if(this.params.scrollbar.el){var e=this.scrollbar,t=this.$el,i=this.params.scrollbar,a=s(i.el);this.params.uniqueNavElements&&"string"==typeof i.el&&a.length>1&&1===t.find(i.el).length&&(a=t.find(i.el));var r=a.find("."+this.params.scrollbar.dragClass);0===r.length&&(r=s('<div class="'+this.params.scrollbar.dragClass+'"></div>'),a.append(r)),d.extend(e,{$el:a,el:a[0],$dragEl:r,dragEl:r[0]}),i.draggable&&e.enableDraggable()}},destroy:function(){this.scrollbar.disableDraggable()}},R={setTransform:function(e,t){var i=this.rtl,a=s(e),r=i?-1:1,n=a.attr("data-swiper-parallax")||"0",o=a.attr("data-swiper-parallax-x"),l=a.attr("data-swiper-parallax-y"),d=a.attr("data-swiper-parallax-scale"),h=a.attr("data-swiper-parallax-opacity");if(o||l?(o=o||"0",l=l||"0"):this.isHorizontal()?(o=n,l="0"):(l=n,o="0"),o=o.indexOf("%")>=0?parseInt(o,10)*t*r+"%":o*t*r+"px",l=l.indexOf("%")>=0?parseInt(l,10)*t+"%":l*t+"px",void 0!==h&&null!==h){var p=h-(h-1)*(1-Math.abs(t));a[0].style.opacity=p}if(void 0===d||null===d)a.transform("translate3d("+o+", "+l+", 0px)");else{var c=d-(d-1)*(1-Math.abs(t));a.transform("translate3d("+o+", "+l+", 0px) scale("+c+")")}},setTranslate:function(){var e=this,t=e.$el,i=e.slides,a=e.progress,r=e.snapGrid;t.children("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(t,i){e.parallax.setTransform(i,a)}),i.each(function(t,i){var n=i.progress;e.params.slidesPerGroup>1&&"auto"!==e.params.slidesPerView&&(n+=Math.ceil(t/2)-a*(r.length-1)),n=Math.min(Math.max(n,-1),1),s(i).find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(t,i){e.parallax.setTransform(i,n)})})},setTransition:function(e){void 0===e&&(e=this.params.speed);this.$el.find("[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]").each(function(t,i){var a=s(i),r=parseInt(a.attr("data-swiper-parallax-duration"),10)||e;0===e&&(r=0),a.transition(r)})}},F={getDistanceBetweenTouches:function(e){if(e.targetTouches.length<2)return 1;var t=e.targetTouches[0].pageX,i=e.targetTouches[0].pageY,s=e.targetTouches[1].pageX,a=e.targetTouches[1].pageY;return Math.sqrt(Math.pow(s-t,2)+Math.pow(a-i,2))},onGestureStart:function(e){var t=this.params.zoom,i=this.zoom,a=i.gesture;if(i.fakeGestureTouched=!1,i.fakeGestureMoved=!1,!h.gestures){if("touchstart"!==e.type||"touchstart"===e.type&&e.targetTouches.length<2)return;i.fakeGestureTouched=!0,a.scaleStart=F.getDistanceBetweenTouches(e)}a.$slideEl&&a.$slideEl.length||(a.$slideEl=s(e.target).closest(".swiper-slide"),0===a.$slideEl.length&&(a.$slideEl=this.slides.eq(this.activeIndex)),a.$imageEl=a.$slideEl.find("img, svg, canvas"),a.$imageWrapEl=a.$imageEl.parent("."+t.containerClass),a.maxRatio=a.$imageWrapEl.attr("data-swiper-zoom")||t.maxRatio,0!==a.$imageWrapEl.length)?(a.$imageEl.transition(0),this.zoom.isScaling=!0):a.$imageEl=void 0},onGestureChange:function(e){var t=this.params.zoom,i=this.zoom,s=i.gesture;if(!h.gestures){if("touchmove"!==e.type||"touchmove"===e.type&&e.targetTouches.length<2)return;i.fakeGestureMoved=!0,s.scaleMove=F.getDistanceBetweenTouches(e)}s.$imageEl&&0!==s.$imageEl.length&&(h.gestures?this.zoom.scale=e.scale*i.currentScale:i.scale=s.scaleMove/s.scaleStart*i.currentScale,i.scale>s.maxRatio&&(i.scale=s.maxRatio-1+Math.pow(i.scale-s.maxRatio+1,.5)),i.scale<t.minRatio&&(i.scale=t.minRatio+1-Math.pow(t.minRatio-i.scale+1,.5)),s.$imageEl.transform("translate3d(0,0,0) scale("+i.scale+")"))},onGestureEnd:function(e){var t=this.params.zoom,i=this.zoom,s=i.gesture;if(!h.gestures){if(!i.fakeGestureTouched||!i.fakeGestureMoved)return;if("touchend"!==e.type||"touchend"===e.type&&e.changedTouches.length<2&&!y.android)return;i.fakeGestureTouched=!1,i.fakeGestureMoved=!1}s.$imageEl&&0!==s.$imageEl.length&&(i.scale=Math.max(Math.min(i.scale,s.maxRatio),t.minRatio),s.$imageEl.transition(this.params.speed).transform("translate3d(0,0,0) scale("+i.scale+")"),i.currentScale=i.scale,i.isScaling=!1,1===i.scale&&(s.$slideEl=void 0))},onTouchStart:function(e){var t=this.zoom,i=t.gesture,s=t.image;i.$imageEl&&0!==i.$imageEl.length&&(s.isTouched||(y.android&&e.preventDefault(),s.isTouched=!0,s.touchesStart.x="touchstart"===e.type?e.targetTouches[0].pageX:e.pageX,s.touchesStart.y="touchstart"===e.type?e.targetTouches[0].pageY:e.pageY))},onTouchMove:function(e){var t=this.zoom,i=t.gesture,s=t.image,a=t.velocity;if(i.$imageEl&&0!==i.$imageEl.length&&(this.allowClick=!1,s.isTouched&&i.$slideEl)){s.isMoved||(s.width=i.$imageEl[0].offsetWidth,s.height=i.$imageEl[0].offsetHeight,s.startX=d.getTranslate(i.$imageWrapEl[0],"x")||0,s.startY=d.getTranslate(i.$imageWrapEl[0],"y")||0,i.slideWidth=i.$slideEl[0].offsetWidth,i.slideHeight=i.$slideEl[0].offsetHeight,i.$imageWrapEl.transition(0),this.rtl&&(s.startX=-s.startX,s.startY=-s.startY));var r=s.width*t.scale,n=s.height*t.scale;if(!(r<i.slideWidth&&n<i.slideHeight)){if(s.minX=Math.min(i.slideWidth/2-r/2,0),s.maxX=-s.minX,s.minY=Math.min(i.slideHeight/2-n/2,0),s.maxY=-s.minY,s.touchesCurrent.x="touchmove"===e.type?e.targetTouches[0].pageX:e.pageX,s.touchesCurrent.y="touchmove"===e.type?e.targetTouches[0].pageY:e.pageY,!s.isMoved&&!t.isScaling){if(this.isHorizontal()&&(Math.floor(s.minX)===Math.floor(s.startX)&&s.touchesCurrent.x<s.touchesStart.x||Math.floor(s.maxX)===Math.floor(s.startX)&&s.touchesCurrent.x>s.touchesStart.x))return void(s.isTouched=!1);if(!this.isHorizontal()&&(Math.floor(s.minY)===Math.floor(s.startY)&&s.touchesCurrent.y<s.touchesStart.y||Math.floor(s.maxY)===Math.floor(s.startY)&&s.touchesCurrent.y>s.touchesStart.y))return void(s.isTouched=!1)}e.preventDefault(),e.stopPropagation(),s.isMoved=!0,s.currentX=s.touchesCurrent.x-s.touchesStart.x+s.startX,s.currentY=s.touchesCurrent.y-s.touchesStart.y+s.startY,s.currentX<s.minX&&(s.currentX=s.minX+1-Math.pow(s.minX-s.currentX+1,.8)),s.currentX>s.maxX&&(s.currentX=s.maxX-1+Math.pow(s.currentX-s.maxX+1,.8)),s.currentY<s.minY&&(s.currentY=s.minY+1-Math.pow(s.minY-s.currentY+1,.8)),s.currentY>s.maxY&&(s.currentY=s.maxY-1+Math.pow(s.currentY-s.maxY+1,.8)),a.prevPositionX||(a.prevPositionX=s.touchesCurrent.x),a.prevPositionY||(a.prevPositionY=s.touchesCurrent.y),a.prevTime||(a.prevTime=Date.now()),a.x=(s.touchesCurrent.x-a.prevPositionX)/(Date.now()-a.prevTime)/2,a.y=(s.touchesCurrent.y-a.prevPositionY)/(Date.now()-a.prevTime)/2,Math.abs(s.touchesCurrent.x-a.prevPositionX)<2&&(a.x=0),Math.abs(s.touchesCurrent.y-a.prevPositionY)<2&&(a.y=0),a.prevPositionX=s.touchesCurrent.x,a.prevPositionY=s.touchesCurrent.y,a.prevTime=Date.now(),i.$imageWrapEl.transform("translate3d("+s.currentX+"px, "+s.currentY+"px,0)")}}},onTouchEnd:function(){var e=this.zoom,t=e.gesture,i=e.image,s=e.velocity;if(t.$imageEl&&0!==t.$imageEl.length){if(!i.isTouched||!i.isMoved)return i.isTouched=!1,void(i.isMoved=!1);i.isTouched=!1,i.isMoved=!1;var a=300,r=300,n=s.x*a,o=i.currentX+n,l=s.y*r,d=i.currentY+l;0!==s.x&&(a=Math.abs((o-i.currentX)/s.x)),0!==s.y&&(r=Math.abs((d-i.currentY)/s.y));var h=Math.max(a,r);i.currentX=o,i.currentY=d;var p=i.width*e.scale,c=i.height*e.scale;i.minX=Math.min(t.slideWidth/2-p/2,0),i.maxX=-i.minX,i.minY=Math.min(t.slideHeight/2-c/2,0),i.maxY=-i.minY,i.currentX=Math.max(Math.min(i.currentX,i.maxX),i.minX),i.currentY=Math.max(Math.min(i.currentY,i.maxY),i.minY),t.$imageWrapEl.transition(h).transform("translate3d("+i.currentX+"px, "+i.currentY+"px,0)")}},onTransitionEnd:function(){var e=this.zoom,t=e.gesture;t.$slideEl&&this.previousIndex!==this.activeIndex&&(t.$imageEl.transform("translate3d(0,0,0) scale(1)"),t.$imageWrapEl.transform("translate3d(0,0,0)"),t.$slideEl=void 0,t.$imageEl=void 0,t.$imageWrapEl=void 0,e.scale=1,e.currentScale=1)},toggle:function(e){var t=this.zoom;t.scale&&1!==t.scale?t.out():t.in(e)},in:function(e){var t,i,a,r,n,o,l,d,h,p,c,u,v,f,m,g,b=this.zoom,w=this.params.zoom,y=b.gesture,x=b.image;(y.$slideEl||(y.$slideEl=this.clickedSlide?s(this.clickedSlide):this.slides.eq(this.activeIndex),y.$imageEl=y.$slideEl.find("img, svg, canvas"),y.$imageWrapEl=y.$imageEl.parent("."+w.containerClass)),y.$imageEl&&0!==y.$imageEl.length)&&(y.$slideEl.addClass(""+w.zoomedSlideClass),void 0===x.touchesStart.x&&e?(t="touchend"===e.type?e.changedTouches[0].pageX:e.pageX,i="touchend"===e.type?e.changedTouches[0].pageY:e.pageY):(t=x.touchesStart.x,i=x.touchesStart.y),b.scale=y.$imageWrapEl.attr("data-swiper-zoom")||w.maxRatio,b.currentScale=y.$imageWrapEl.attr("data-swiper-zoom")||w.maxRatio,e?(m=y.$slideEl[0].offsetWidth,g=y.$slideEl[0].offsetHeight,a=y.$slideEl.offset().left+m/2-t,r=y.$slideEl.offset().top+g/2-i,l=y.$imageEl[0].offsetWidth,d=y.$imageEl[0].offsetHeight,h=l*b.scale,p=d*b.scale,v=-(c=Math.min(m/2-h/2,0)),f=-(u=Math.min(g/2-p/2,0)),n=a*b.scale,o=r*b.scale,n<c&&(n=c),n>v&&(n=v),o<u&&(o=u),o>f&&(o=f)):(n=0,o=0),y.$imageWrapEl.transition(300).transform("translate3d("+n+"px, "+o+"px,0)"),y.$imageEl.transition(300).transform("translate3d(0,0,0) scale("+b.scale+")"))},out:function(){var e=this.zoom,t=this.params.zoom,i=e.gesture;i.$slideEl||(i.$slideEl=this.clickedSlide?s(this.clickedSlide):this.slides.eq(this.activeIndex),i.$imageEl=i.$slideEl.find("img, svg, canvas"),i.$imageWrapEl=i.$imageEl.parent("."+t.containerClass)),i.$imageEl&&0!==i.$imageEl.length&&(e.scale=1,e.currentScale=1,i.$imageWrapEl.transition(300).transform("translate3d(0,0,0)"),i.$imageEl.transition(300).transform("translate3d(0,0,0) scale(1)"),i.$slideEl.removeClass(""+t.zoomedSlideClass),i.$slideEl=void 0)},enable:function(){var e=this.zoom;if(!e.enabled){e.enabled=!0;var t=!("touchstart"!==this.touchEvents.start||!h.passiveListener||!this.params.passiveListeners)&&{passive:!0,capture:!1};h.gestures?(this.$wrapperEl.on("gesturestart",".swiper-slide",e.onGestureStart,t),this.$wrapperEl.on("gesturechange",".swiper-slide",e.onGestureChange,t),this.$wrapperEl.on("gestureend",".swiper-slide",e.onGestureEnd,t)):"touchstart"===this.touchEvents.start&&(this.$wrapperEl.on(this.touchEvents.start,".swiper-slide",e.onGestureStart,t),this.$wrapperEl.on(this.touchEvents.move,".swiper-slide",e.onGestureChange,t),this.$wrapperEl.on(this.touchEvents.end,".swiper-slide",e.onGestureEnd,t)),this.$wrapperEl.on(this.touchEvents.move,"."+this.params.zoom.containerClass,e.onTouchMove)}},disable:function(){var e=this.zoom;if(e.enabled){this.zoom.enabled=!1;var t=!("touchstart"!==this.touchEvents.start||!h.passiveListener||!this.params.passiveListeners)&&{passive:!0,capture:!1};h.gestures?(this.$wrapperEl.off("gesturestart",".swiper-slide",e.onGestureStart,t),this.$wrapperEl.off("gesturechange",".swiper-slide",e.onGestureChange,t),this.$wrapperEl.off("gestureend",".swiper-slide",e.onGestureEnd,t)):"touchstart"===this.touchEvents.start&&(this.$wrapperEl.off(this.touchEvents.start,".swiper-slide",e.onGestureStart,t),this.$wrapperEl.off(this.touchEvents.move,".swiper-slide",e.onGestureChange,t),this.$wrapperEl.off(this.touchEvents.end,".swiper-slide",e.onGestureEnd,t)),this.$wrapperEl.off(this.touchEvents.move,"."+this.params.zoom.containerClass,e.onTouchMove)}}},W={loadInSlide:function(e,t){void 0===t&&(t=!0);var i=this,a=i.params.lazy;if(void 0!==e&&0!==i.slides.length){var r=i.virtual&&i.params.virtual.enabled?i.$wrapperEl.children("."+i.params.slideClass+'[data-swiper-slide-index="'+e+'"]'):i.slides.eq(e),n=r.find("."+a.elementClass+":not(."+a.loadedClass+"):not(."+a.loadingClass+")");!r.hasClass(a.elementClass)||r.hasClass(a.loadedClass)||r.hasClass(a.loadingClass)||(n=n.add(r[0])),0!==n.length&&n.each(function(e,n){var o=s(n);o.addClass(a.loadingClass);var l=o.attr("data-background"),d=o.attr("data-src"),h=o.attr("data-srcset"),p=o.attr("data-sizes");i.loadImage(o[0],d||l,h,p,!1,function(){if(void 0!==i&&null!==i&&i&&(!i||i.params)&&!i.destroyed){if(l?(o.css("background-image",'url("'+l+'")'),o.removeAttr("data-background")):(h&&(o.attr("srcset",h),o.removeAttr("data-srcset")),p&&(o.attr("sizes",p),o.removeAttr("data-sizes")),d&&(o.attr("src",d),o.removeAttr("data-src"))),o.addClass(a.loadedClass).removeClass(a.loadingClass),r.find("."+a.preloaderClass).remove(),i.params.loop&&t){var e=r.attr("data-swiper-slide-index");if(r.hasClass(i.params.slideDuplicateClass)){var s=i.$wrapperEl.children('[data-swiper-slide-index="'+e+'"]:not(.'+i.params.slideDuplicateClass+")");i.lazy.loadInSlide(s.index(),!1)}else{var n=i.$wrapperEl.children("."+i.params.slideDuplicateClass+'[data-swiper-slide-index="'+e+'"]');i.lazy.loadInSlide(n.index(),!1)}}i.emit("lazyImageReady",r[0],o[0])}}),i.emit("lazyImageLoad",r[0],o[0])})}},load:function(){var e=this,t=e.$wrapperEl,i=e.params,a=e.slides,r=e.activeIndex,n=e.virtual&&i.virtual.enabled,o=i.lazy,l=i.slidesPerView;function d(e){if(n){if(t.children("."+i.slideClass+'[data-swiper-slide-index="'+e+'"]').length)return!0}else if(a[e])return!0;return!1}function h(e){return n?s(e).attr("data-swiper-slide-index"):s(e).index()}if("auto"===l&&(l=0),e.lazy.initialImageLoaded||(e.lazy.initialImageLoaded=!0),e.params.watchSlidesVisibility)t.children("."+i.slideVisibleClass).each(function(t,i){var a=n?s(i).attr("data-swiper-slide-index"):s(i).index();e.lazy.loadInSlide(a)});else if(l>1)for(var p=r;p<r+l;p+=1)d(p)&&e.lazy.loadInSlide(p);else e.lazy.loadInSlide(r);if(o.loadPrevNext)if(l>1||o.loadPrevNextAmount&&o.loadPrevNextAmount>1){for(var c=o.loadPrevNextAmount,u=l,v=Math.min(r+u+Math.max(c,u),a.length),f=Math.max(r-Math.max(u,c),0),m=r+l;m<v;m+=1)d(m)&&e.lazy.loadInSlide(m);for(var g=f;g<r;g+=1)d(g)&&e.lazy.loadInSlide(g)}else{var b=t.children("."+i.slideNextClass);b.length>0&&e.lazy.loadInSlide(h(b));var w=t.children("."+i.slidePrevClass);w.length>0&&e.lazy.loadInSlide(h(w))}}},q={LinearSpline:function(e,t){var i,s,a,r,n,o=function(e,t){for(s=-1,i=e.length;i-s>1;)e[a=i+s>>1]<=t?s=a:i=a;return i};return this.x=e,this.y=t,this.lastIndex=e.length-1,this.interpolate=function(e){return e?(n=o(this.x,e),r=n-1,(e-this.x[r])*(this.y[n]-this.y[r])/(this.x[n]-this.x[r])+this.y[r]):0},this},getInterpolateFunction:function(e){this.controller.spline||(this.controller.spline=this.params.loop?new q.LinearSpline(this.slidesGrid,e.slidesGrid):new q.LinearSpline(this.snapGrid,e.snapGrid))},setTranslate:function(e,t){var i,s,a=this,r=a.controller.control;function n(e){var t=a.rtlTranslate?-a.translate:a.translate;"slide"===a.params.controller.by&&(a.controller.getInterpolateFunction(e),s=-a.controller.spline.interpolate(-t)),s&&"container"!==a.params.controller.by||(i=(e.maxTranslate()-e.minTranslate())/(a.maxTranslate()-a.minTranslate()),s=(t-a.minTranslate())*i+e.minTranslate()),a.params.controller.inverse&&(s=e.maxTranslate()-s),e.updateProgress(s),e.setTranslate(s,a),e.updateActiveIndex(),e.updateSlidesClasses()}if(Array.isArray(r))for(var o=0;o<r.length;o+=1)r[o]!==t&&r[o]instanceof k&&n(r[o]);else r instanceof k&&t!==r&&n(r)},setTransition:function(e,t){var i,s=this,a=s.controller.control;function r(t){t.setTransition(e,s),0!==e&&(t.transitionStart(),t.$wrapperEl.transitionEnd(function(){a&&(t.params.loop&&"slide"===s.params.controller.by&&t.loopFix(),t.transitionEnd())}))}if(Array.isArray(a))for(i=0;i<a.length;i+=1)a[i]!==t&&a[i]instanceof k&&r(a[i]);else a instanceof k&&t!==a&&r(a)}},j={makeElFocusable:function(e){return e.attr("tabIndex","0"),e},addElRole:function(e,t){return e.attr("role",t),e},addElLabel:function(e,t){return e.attr("aria-label",t),e},disableEl:function(e){return e.attr("aria-disabled",!0),e},enableEl:function(e){return e.attr("aria-disabled",!1),e},onEnterKey:function(e){var t=this.params.a11y;if(13===e.keyCode){var i=s(e.target);this.navigation&&this.navigation.$nextEl&&i.is(this.navigation.$nextEl)&&(this.isEnd&&!this.params.loop||this.slideNext(),this.isEnd?this.a11y.notify(t.lastSlideMessage):this.a11y.notify(t.nextSlideMessage)),this.navigation&&this.navigation.$prevEl&&i.is(this.navigation.$prevEl)&&(this.isBeginning&&!this.params.loop||this.slidePrev(),this.isBeginning?this.a11y.notify(t.firstSlideMessage):this.a11y.notify(t.prevSlideMessage)),this.pagination&&i.is("."+this.params.pagination.bulletClass)&&i[0].click()}},notify:function(e){var t=this.a11y.liveRegion;0!==t.length&&(t.html(""),t.html(e))},updateNavigation:function(){if(!this.params.loop){var e=this.navigation,t=e.$nextEl,i=e.$prevEl;i&&i.length>0&&(this.isBeginning?this.a11y.disableEl(i):this.a11y.enableEl(i)),t&&t.length>0&&(this.isEnd?this.a11y.disableEl(t):this.a11y.enableEl(t))}},updatePagination:function(){var e=this,t=e.params.a11y;e.pagination&&e.params.pagination.clickable&&e.pagination.bullets&&e.pagination.bullets.length&&e.pagination.bullets.each(function(i,a){var r=s(a);e.a11y.makeElFocusable(r),e.a11y.addElRole(r,"button"),e.a11y.addElLabel(r,t.paginationBulletMessage.replace(/{{index}}/,r.index()+1))})},init:function(){this.$el.append(this.a11y.liveRegion);var e,t,i=this.params.a11y;this.navigation&&this.navigation.$nextEl&&(e=this.navigation.$nextEl),this.navigation&&this.navigation.$prevEl&&(t=this.navigation.$prevEl),e&&(this.a11y.makeElFocusable(e),this.a11y.addElRole(e,"button"),this.a11y.addElLabel(e,i.nextSlideMessage),e.on("keydown",this.a11y.onEnterKey)),t&&(this.a11y.makeElFocusable(t),this.a11y.addElRole(t,"button"),this.a11y.addElLabel(t,i.prevSlideMessage),t.on("keydown",this.a11y.onEnterKey)),this.pagination&&this.params.pagination.clickable&&this.pagination.bullets&&this.pagination.bullets.length&&this.pagination.$el.on("keydown","."+this.params.pagination.bulletClass,this.a11y.onEnterKey)},destroy:function(){var e,t;this.a11y.liveRegion&&this.a11y.liveRegion.length>0&&this.a11y.liveRegion.remove(),this.navigation&&this.navigation.$nextEl&&(e=this.navigation.$nextEl),this.navigation&&this.navigation.$prevEl&&(t=this.navigation.$prevEl),e&&e.off("keydown",this.a11y.onEnterKey),t&&t.off("keydown",this.a11y.onEnterKey),this.pagination&&this.params.pagination.clickable&&this.pagination.bullets&&this.pagination.bullets.length&&this.pagination.$el.off("keydown","."+this.params.pagination.bulletClass,this.a11y.onEnterKey)}},K={init:function(){if(this.params.history){if(!t.history||!t.history.pushState)return this.params.history.enabled=!1,void(this.params.hashNavigation.enabled=!0);var e=this.history;e.initialized=!0,e.paths=K.getPathValues(),(e.paths.key||e.paths.value)&&(e.scrollToSlide(0,e.paths.value,this.params.runCallbacksOnInit),this.params.history.replaceState||t.addEventListener("popstate",this.history.setHistoryPopState))}},destroy:function(){this.params.history.replaceState||t.removeEventListener("popstate",this.history.setHistoryPopState)},setHistoryPopState:function(){this.history.paths=K.getPathValues(),this.history.scrollToSlide(this.params.speed,this.history.paths.value,!1)},getPathValues:function(){var e=t.location.pathname.slice(1).split("/").filter(function(e){return""!==e}),i=e.length;return{key:e[i-2],value:e[i-1]}},setHistory:function(e,i){if(this.history.initialized&&this.params.history.enabled){var s=this.slides.eq(i),a=K.slugify(s.attr("data-history"));t.location.pathname.includes(e)||(a=e+"/"+a);var r=t.history.state;r&&r.value===a||(this.params.history.replaceState?t.history.replaceState({value:a},null,a):t.history.pushState({value:a},null,a))}},slugify:function(e){return e.toString().toLowerCase().replace(/\s+/g,"-").replace(/[^\w-]+/g,"").replace(/--+/g,"-").replace(/^-+/,"").replace(/-+$/,"")},scrollToSlide:function(e,t,i){if(t)for(var s=0,a=this.slides.length;s<a;s+=1){var r=this.slides.eq(s);if(K.slugify(r.attr("data-history"))===t&&!r.hasClass(this.params.slideDuplicateClass)){var n=r.index();this.slideTo(n,e,i)}}else this.slideTo(0,e,i)}},U={onHashCange:function(){var t=e.location.hash.replace("#","");t!==this.slides.eq(this.activeIndex).attr("data-hash")&&this.slideTo(this.$wrapperEl.children("."+this.params.slideClass+'[data-hash="'+t+'"]').index())},setHash:function(){if(this.hashNavigation.initialized&&this.params.hashNavigation.enabled)if(this.params.hashNavigation.replaceState&&t.history&&t.history.replaceState)t.history.replaceState(null,null,"#"+this.slides.eq(this.activeIndex).attr("data-hash")||"");else{var i=this.slides.eq(this.activeIndex),s=i.attr("data-hash")||i.attr("data-history");e.location.hash=s||""}},init:function(){if(!(!this.params.hashNavigation.enabled||this.params.history&&this.params.history.enabled)){this.hashNavigation.initialized=!0;var i=e.location.hash.replace("#","");if(i)for(var a=0,r=this.slides.length;a<r;a+=1){var n=this.slides.eq(a);if((n.attr("data-hash")||n.attr("data-history"))===i&&!n.hasClass(this.params.slideDuplicateClass)){var o=n.index();this.slideTo(o,0,this.params.runCallbacksOnInit,!0)}}this.params.hashNavigation.watchState&&s(t).on("hashchange",this.hashNavigation.onHashCange)}},destroy:function(){this.params.hashNavigation.watchState&&s(t).off("hashchange",this.hashNavigation.onHashCange)}},_={run:function(){var e=this,t=e.slides.eq(e.activeIndex),i=e.params.autoplay.delay;t.attr("data-swiper-autoplay")&&(i=t.attr("data-swiper-autoplay")||e.params.autoplay.delay),e.autoplay.timeout=d.nextTick(function(){e.params.autoplay.reverseDirection?e.params.loop?(e.loopFix(),e.slidePrev(e.params.speed,!0,!0),e.emit("autoplay")):e.isBeginning?e.params.autoplay.stopOnLastSlide?e.autoplay.stop():(e.slideTo(e.slides.length-1,e.params.speed,!0,!0),e.emit("autoplay")):(e.slidePrev(e.params.speed,!0,!0),e.emit("autoplay")):e.params.loop?(e.loopFix(),e.slideNext(e.params.speed,!0,!0),e.emit("autoplay")):e.isEnd?e.params.autoplay.stopOnLastSlide?e.autoplay.stop():(e.slideTo(0,e.params.speed,!0,!0),e.emit("autoplay")):(e.slideNext(e.params.speed,!0,!0),e.emit("autoplay"))},i)},start:function(){return void 0===this.autoplay.timeout&&(!this.autoplay.running&&(this.autoplay.running=!0,this.emit("autoplayStart"),this.autoplay.run(),!0))},stop:function(){return!!this.autoplay.running&&(void 0!==this.autoplay.timeout&&(this.autoplay.timeout&&(clearTimeout(this.autoplay.timeout),this.autoplay.timeout=void 0),this.autoplay.running=!1,this.emit("autoplayStop"),!0))},pause:function(e){this.autoplay.running&&(this.autoplay.paused||(this.autoplay.timeout&&clearTimeout(this.autoplay.timeout),this.autoplay.paused=!0,0!==e&&this.params.autoplay.waitForTransition?(this.$wrapperEl[0].addEventListener("transitionend",this.autoplay.onTransitionEnd),this.$wrapperEl[0].addEventListener("webkitTransitionEnd",this.autoplay.onTransitionEnd)):(this.autoplay.paused=!1,this.autoplay.run())))}},Z={setTranslate:function(){for(var e=this.slides,t=0;t<e.length;t+=1){var i=this.slides.eq(t),s=-i[0].swiperSlideOffset;this.params.virtualTranslate||(s-=this.translate);var a=0;this.isHorizontal()||(a=s,s=0);var r=this.params.fadeEffect.crossFade?Math.max(1-Math.abs(i[0].progress),0):1+Math.min(Math.max(i[0].progress,-1),0);i.css({opacity:r}).transform("translate3d("+s+"px, "+a+"px, 0px)")}},setTransition:function(e){var t=this,i=t.slides,s=t.$wrapperEl;if(i.transition(e),t.params.virtualTranslate&&0!==e){var a=!1;i.transitionEnd(function(){if(!a&&t&&!t.destroyed){a=!0,t.animating=!1;for(var e=["webkitTransitionEnd","transitionend"],i=0;i<e.length;i+=1)s.trigger(e[i])}})}}},Q={setTranslate:function(){var e,t=this.$el,i=this.$wrapperEl,a=this.slides,r=this.width,n=this.height,o=this.rtlTranslate,l=this.size,d=this.params.cubeEffect,h=this.isHorizontal(),p=this.virtual&&this.params.virtual.enabled,c=0;d.shadow&&(h?(0===(e=i.find(".swiper-cube-shadow")).length&&(e=s('<div class="swiper-cube-shadow"></div>'),i.append(e)),e.css({height:r+"px"})):0===(e=t.find(".swiper-cube-shadow")).length&&(e=s('<div class="swiper-cube-shadow"></div>'),t.append(e)));for(var u=0;u<a.length;u+=1){var v=a.eq(u),f=u;p&&(f=parseInt(v.attr("data-swiper-slide-index"),10));var m=90*f,g=Math.floor(m/360);o&&(m=-m,g=Math.floor(-m/360));var b=Math.max(Math.min(v[0].progress,1),-1),w=0,y=0,x=0;f%4==0?(w=4*-g*l,x=0):(f-1)%4==0?(w=0,x=4*-g*l):(f-2)%4==0?(w=l+4*g*l,x=l):(f-3)%4==0&&(w=-l,x=3*l+4*l*g),o&&(w=-w),h||(y=w,w=0);var E="rotateX("+(h?0:-m)+"deg) rotateY("+(h?m:0)+"deg) translate3d("+w+"px, "+y+"px, "+x+"px)";if(b<=1&&b>-1&&(c=90*f+90*b,o&&(c=90*-f-90*b)),v.transform(E),d.slideShadows){var T=h?v.find(".swiper-slide-shadow-left"):v.find(".swiper-slide-shadow-top"),C=h?v.find(".swiper-slide-shadow-right"):v.find(".swiper-slide-shadow-bottom");0===T.length&&(T=s('<div class="swiper-slide-shadow-'+(h?"left":"top")+'"></div>'),v.append(T)),0===C.length&&(C=s('<div class="swiper-slide-shadow-'+(h?"right":"bottom")+'"></div>'),v.append(C)),T.length&&(T[0].style.opacity=Math.max(-b,0)),C.length&&(C[0].style.opacity=Math.max(b,0))}}if(i.css({"-webkit-transform-origin":"50% 50% -"+l/2+"px","-moz-transform-origin":"50% 50% -"+l/2+"px","-ms-transform-origin":"50% 50% -"+l/2+"px","transform-origin":"50% 50% -"+l/2+"px"}),d.shadow)if(h)e.transform("translate3d(0px, "+(r/2+d.shadowOffset)+"px, "+-r/2+"px) rotateX(90deg) rotateZ(0deg) scale("+d.shadowScale+")");else{var M=Math.abs(c)-90*Math.floor(Math.abs(c)/90),z=1.5-(Math.sin(2*M*Math.PI/360)/2+Math.cos(2*M*Math.PI/360)/2),k=d.shadowScale,P=d.shadowScale/z,$=d.shadowOffset;e.transform("scale3d("+k+", 1, "+P+") translate3d(0px, "+(n/2+$)+"px, "+-n/2/P+"px) rotateX(-90deg)")}var L=S.isSafari||S.isUiWebView?-l/2:0;i.transform("translate3d(0px,0,"+L+"px) rotateX("+(this.isHorizontal()?0:c)+"deg) rotateY("+(this.isHorizontal()?-c:0)+"deg)")},setTransition:function(e){var t=this.$el;this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e),this.params.cubeEffect.shadow&&!this.isHorizontal()&&t.find(".swiper-cube-shadow").transition(e)}},J={setTranslate:function(){for(var e=this.slides,t=this.rtlTranslate,i=0;i<e.length;i+=1){var a=e.eq(i),r=a[0].progress;this.params.flipEffect.limitRotation&&(r=Math.max(Math.min(a[0].progress,1),-1));var n=-180*r,o=0,l=-a[0].swiperSlideOffset,d=0;if(this.isHorizontal()?t&&(n=-n):(d=l,l=0,o=-n,n=0),a[0].style.zIndex=-Math.abs(Math.round(r))+e.length,this.params.flipEffect.slideShadows){var h=this.isHorizontal()?a.find(".swiper-slide-shadow-left"):a.find(".swiper-slide-shadow-top"),p=this.isHorizontal()?a.find(".swiper-slide-shadow-right"):a.find(".swiper-slide-shadow-bottom");0===h.length&&(h=s('<div class="swiper-slide-shadow-'+(this.isHorizontal()?"left":"top")+'"></div>'),a.append(h)),0===p.length&&(p=s('<div class="swiper-slide-shadow-'+(this.isHorizontal()?"right":"bottom")+'"></div>'),a.append(p)),h.length&&(h[0].style.opacity=Math.max(-r,0)),p.length&&(p[0].style.opacity=Math.max(r,0))}a.transform("translate3d("+l+"px, "+d+"px, 0px) rotateX("+o+"deg) rotateY("+n+"deg)")}},setTransition:function(e){var t=this,i=t.slides,s=t.activeIndex,a=t.$wrapperEl;if(i.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e),t.params.virtualTranslate&&0!==e){var r=!1;i.eq(s).transitionEnd(function(){if(!r&&t&&!t.destroyed){r=!0,t.animating=!1;for(var e=["webkitTransitionEnd","transitionend"],i=0;i<e.length;i+=1)a.trigger(e[i])}})}}},ee={setTranslate:function(){for(var e=this.width,t=this.height,i=this.slides,a=this.$wrapperEl,r=this.slidesSizesGrid,n=this.params.coverflowEffect,o=this.isHorizontal(),l=this.translate,d=o?e/2-l:t/2-l,p=o?n.rotate:-n.rotate,c=n.depth,u=0,v=i.length;u<v;u+=1){var f=i.eq(u),m=r[u],g=(d-f[0].swiperSlideOffset-m/2)/m*n.modifier,b=o?p*g:0,w=o?0:p*g,y=-c*Math.abs(g),x=o?0:n.stretch*g,E=o?n.stretch*g:0;Math.abs(E)<.001&&(E=0),Math.abs(x)<.001&&(x=0),Math.abs(y)<.001&&(y=0),Math.abs(b)<.001&&(b=0),Math.abs(w)<.001&&(w=0);var T="translate3d("+E+"px,"+x+"px,"+y+"px)  rotateX("+w+"deg) rotateY("+b+"deg)";if(f.transform(T),f[0].style.zIndex=1-Math.abs(Math.round(g)),n.slideShadows){var S=o?f.find(".swiper-slide-shadow-left"):f.find(".swiper-slide-shadow-top"),C=o?f.find(".swiper-slide-shadow-right"):f.find(".swiper-slide-shadow-bottom");0===S.length&&(S=s('<div class="swiper-slide-shadow-'+(o?"left":"top")+'"></div>'),f.append(S)),0===C.length&&(C=s('<div class="swiper-slide-shadow-'+(o?"right":"bottom")+'"></div>'),f.append(C)),S.length&&(S[0].style.opacity=g>0?g:0),C.length&&(C[0].style.opacity=-g>0?-g:0)}}(h.pointerEvents||h.prefixedPointerEvents)&&(a[0].style.perspectiveOrigin=d+"px 50%")},setTransition:function(e){this.slides.transition(e).find(".swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left").transition(e)}},te=[P,$,L,I,O,G,N,{name:"mousewheel",params:{mousewheel:{enabled:!1,releaseOnEdges:!1,invert:!1,forceToAxis:!1,sensitivity:1,eventsTarged:"container"}},create:function(){d.extend(this,{mousewheel:{enabled:!1,enable:B.enable.bind(this),disable:B.disable.bind(this),handle:B.handle.bind(this),handleMouseEnter:B.handleMouseEnter.bind(this),handleMouseLeave:B.handleMouseLeave.bind(this),lastScrollTime:d.now()}})},on:{init:function(){this.params.mousewheel.enabled&&this.mousewheel.enable()},destroy:function(){this.mousewheel.enabled&&this.mousewheel.disable()}}},{name:"navigation",params:{navigation:{nextEl:null,prevEl:null,hideOnClick:!1,disabledClass:"swiper-button-disabled",hiddenClass:"swiper-button-hidden",lockClass:"swiper-button-lock"}},create:function(){d.extend(this,{navigation:{init:X.init.bind(this),update:X.update.bind(this),destroy:X.destroy.bind(this)}})},on:{init:function(){this.navigation.init(),this.navigation.update()},toEdge:function(){this.navigation.update()},fromEdge:function(){this.navigation.update()},destroy:function(){this.navigation.destroy()},click:function(e){var t=this.navigation,i=t.$nextEl,a=t.$prevEl;!this.params.navigation.hideOnClick||s(e.target).is(a)||s(e.target).is(i)||(i&&i.toggleClass(this.params.navigation.hiddenClass),a&&a.toggleClass(this.params.navigation.hiddenClass))}}},{name:"pagination",params:{pagination:{el:null,bulletElement:"span",clickable:!1,hideOnClick:!1,renderBullet:null,renderProgressbar:null,renderFraction:null,renderCustom:null,progressbarOpposite:!1,type:"bullets",dynamicBullets:!1,dynamicMainBullets:1,formatFractionCurrent:function(e){return e},formatFractionTotal:function(e){return e},bulletClass:"swiper-pagination-bullet",bulletActiveClass:"swiper-pagination-bullet-active",modifierClass:"swiper-pagination-",currentClass:"swiper-pagination-current",totalClass:"swiper-pagination-total",hiddenClass:"swiper-pagination-hidden",progressbarFillClass:"swiper-pagination-progressbar-fill",progressbarOppositeClass:"swiper-pagination-progressbar-opposite",clickableClass:"swiper-pagination-clickable",lockClass:"swiper-pagination-lock"}},create:function(){d.extend(this,{pagination:{init:Y.init.bind(this),render:Y.render.bind(this),update:Y.update.bind(this),destroy:Y.destroy.bind(this),dynamicBulletIndex:0}})},on:{init:function(){this.pagination.init(),this.pagination.render(),this.pagination.update()},activeIndexChange:function(){this.params.loop?this.pagination.update():void 0===this.snapIndex&&this.pagination.update()},snapIndexChange:function(){this.params.loop||this.pagination.update()},slidesLengthChange:function(){this.params.loop&&(this.pagination.render(),this.pagination.update())},snapGridLengthChange:function(){this.params.loop||(this.pagination.render(),this.pagination.update())},destroy:function(){this.pagination.destroy()},click:function(e){this.params.pagination.el&&this.params.pagination.hideOnClick&&this.pagination.$el.length>0&&!s(e.target).hasClass(this.params.pagination.bulletClass)&&this.pagination.$el.toggleClass(this.params.pagination.hiddenClass)}}},{name:"scrollbar",params:{scrollbar:{el:null,dragSize:"auto",hide:!1,draggable:!1,snapOnRelease:!0,lockClass:"swiper-scrollbar-lock",dragClass:"swiper-scrollbar-drag"}},create:function(){d.extend(this,{scrollbar:{init:V.init.bind(this),destroy:V.destroy.bind(this),updateSize:V.updateSize.bind(this),setTranslate:V.setTranslate.bind(this),setTransition:V.setTransition.bind(this),enableDraggable:V.enableDraggable.bind(this),disableDraggable:V.disableDraggable.bind(this),setDragPosition:V.setDragPosition.bind(this),onDragStart:V.onDragStart.bind(this),onDragMove:V.onDragMove.bind(this),onDragEnd:V.onDragEnd.bind(this),isTouched:!1,timeout:null,dragTimeout:null}})},on:{init:function(){this.scrollbar.init(),this.scrollbar.updateSize(),this.scrollbar.setTranslate()},update:function(){this.scrollbar.updateSize()},resize:function(){this.scrollbar.updateSize()},observerUpdate:function(){this.scrollbar.updateSize()},setTranslate:function(){this.scrollbar.setTranslate()},setTransition:function(e){this.scrollbar.setTransition(e)},destroy:function(){this.scrollbar.destroy()}}},{name:"parallax",params:{parallax:{enabled:!1}},create:function(){d.extend(this,{parallax:{setTransform:R.setTransform.bind(this),setTranslate:R.setTranslate.bind(this),setTransition:R.setTransition.bind(this)}})},on:{beforeInit:function(){this.params.parallax.enabled&&(this.params.watchSlidesProgress=!0)},init:function(){this.params.parallax&&this.parallax.setTranslate()},setTranslate:function(){this.params.parallax&&this.parallax.setTranslate()},setTransition:function(e){this.params.parallax&&this.parallax.setTransition(e)}}},{name:"zoom",params:{zoom:{enabled:!1,maxRatio:3,minRatio:1,toggle:!0,containerClass:"swiper-zoom-container",zoomedSlideClass:"swiper-slide-zoomed"}},create:function(){var e=this,t={enabled:!1,scale:1,currentScale:1,isScaling:!1,gesture:{$slideEl:void 0,slideWidth:void 0,slideHeight:void 0,$imageEl:void 0,$imageWrapEl:void 0,maxRatio:3},image:{isTouched:void 0,isMoved:void 0,currentX:void 0,currentY:void 0,minX:void 0,minY:void 0,maxX:void 0,maxY:void 0,width:void 0,height:void 0,startX:void 0,startY:void 0,touchesStart:{},touchesCurrent:{}},velocity:{x:void 0,y:void 0,prevPositionX:void 0,prevPositionY:void 0,prevTime:void 0}};"onGestureStart onGestureChange onGestureEnd onTouchStart onTouchMove onTouchEnd onTransitionEnd toggle enable disable in out".split(" ").forEach(function(i){t[i]=F[i].bind(e)}),d.extend(e,{zoom:t})},on:{init:function(){this.params.zoom.enabled&&this.zoom.enable()},destroy:function(){this.zoom.disable()},touchStart:function(e){this.zoom.enabled&&this.zoom.onTouchStart(e)},touchEnd:function(e){this.zoom.enabled&&this.zoom.onTouchEnd(e)},doubleTap:function(e){this.params.zoom.enabled&&this.zoom.enabled&&this.params.zoom.toggle&&this.zoom.toggle(e)},transitionEnd:function(){this.zoom.enabled&&this.params.zoom.enabled&&this.zoom.onTransitionEnd()}}},{name:"lazy",params:{lazy:{enabled:!1,loadPrevNext:!1,loadPrevNextAmount:1,loadOnTransitionStart:!1,elementClass:"swiper-lazy",loadingClass:"swiper-lazy-loading",loadedClass:"swiper-lazy-loaded",preloaderClass:"swiper-lazy-preloader"}},create:function(){d.extend(this,{lazy:{initialImageLoaded:!1,load:W.load.bind(this),loadInSlide:W.loadInSlide.bind(this)}})},on:{beforeInit:function(){this.params.lazy.enabled&&this.params.preloadImages&&(this.params.preloadImages=!1)},init:function(){this.params.lazy.enabled&&!this.params.loop&&0===this.params.initialSlide&&this.lazy.load()},scroll:function(){this.params.freeMode&&!this.params.freeModeSticky&&this.lazy.load()},resize:function(){this.params.lazy.enabled&&this.lazy.load()},scrollbarDragMove:function(){this.params.lazy.enabled&&this.lazy.load()},transitionStart:function(){this.params.lazy.enabled&&(this.params.lazy.loadOnTransitionStart||!this.params.lazy.loadOnTransitionStart&&!this.lazy.initialImageLoaded)&&this.lazy.load()},transitionEnd:function(){this.params.lazy.enabled&&!this.params.lazy.loadOnTransitionStart&&this.lazy.load()}}},{name:"controller",params:{controller:{control:void 0,inverse:!1,by:"slide"}},create:function(){d.extend(this,{controller:{control:this.params.controller.control,getInterpolateFunction:q.getInterpolateFunction.bind(this),setTranslate:q.setTranslate.bind(this),setTransition:q.setTransition.bind(this)}})},on:{update:function(){this.controller.control&&this.controller.spline&&(this.controller.spline=void 0,delete this.controller.spline)},resize:function(){this.controller.control&&this.controller.spline&&(this.controller.spline=void 0,delete this.controller.spline)},observerUpdate:function(){this.controller.control&&this.controller.spline&&(this.controller.spline=void 0,delete this.controller.spline)},setTranslate:function(e,t){this.controller.control&&this.controller.setTranslate(e,t)},setTransition:function(e,t){this.controller.control&&this.controller.setTransition(e,t)}}},{name:"a11y",params:{a11y:{enabled:!0,notificationClass:"swiper-notification",prevSlideMessage:"Previous slide",nextSlideMessage:"Next slide",firstSlideMessage:"This is the first slide",lastSlideMessage:"This is the last slide",paginationBulletMessage:"Go to slide {{index}}"}},create:function(){var e=this;d.extend(e,{a11y:{liveRegion:s('<span class="'+e.params.a11y.notificationClass+'" aria-live="assertive" aria-atomic="true"></span>')}}),Object.keys(j).forEach(function(t){e.a11y[t]=j[t].bind(e)})},on:{init:function(){this.params.a11y.enabled&&(this.a11y.init(),this.a11y.updateNavigation())},toEdge:function(){this.params.a11y.enabled&&this.a11y.updateNavigation()},fromEdge:function(){this.params.a11y.enabled&&this.a11y.updateNavigation()},paginationUpdate:function(){this.params.a11y.enabled&&this.a11y.updatePagination()},destroy:function(){this.params.a11y.enabled&&this.a11y.destroy()}}},{name:"history",params:{history:{enabled:!1,replaceState:!1,key:"slides"}},create:function(){d.extend(this,{history:{init:K.init.bind(this),setHistory:K.setHistory.bind(this),setHistoryPopState:K.setHistoryPopState.bind(this),scrollToSlide:K.scrollToSlide.bind(this),destroy:K.destroy.bind(this)}})},on:{init:function(){this.params.history.enabled&&this.history.init()},destroy:function(){this.params.history.enabled&&this.history.destroy()},transitionEnd:function(){this.history.initialized&&this.history.setHistory(this.params.history.key,this.activeIndex)}}},{name:"hash-navigation",params:{hashNavigation:{enabled:!1,replaceState:!1,watchState:!1}},create:function(){d.extend(this,{hashNavigation:{initialized:!1,init:U.init.bind(this),destroy:U.destroy.bind(this),setHash:U.setHash.bind(this),onHashCange:U.onHashCange.bind(this)}})},on:{init:function(){this.params.hashNavigation.enabled&&this.hashNavigation.init()},destroy:function(){this.params.hashNavigation.enabled&&this.hashNavigation.destroy()},transitionEnd:function(){this.hashNavigation.initialized&&this.hashNavigation.setHash()}}},{name:"autoplay",params:{autoplay:{enabled:!1,delay:3e3,waitForTransition:!0,disableOnInteraction:!0,stopOnLastSlide:!1,reverseDirection:!1}},create:function(){var e=this;d.extend(e,{autoplay:{running:!1,paused:!1,run:_.run.bind(e),start:_.start.bind(e),stop:_.stop.bind(e),pause:_.pause.bind(e),onTransitionEnd:function(t){e&&!e.destroyed&&e.$wrapperEl&&t.target===this&&(e.$wrapperEl[0].removeEventListener("transitionend",e.autoplay.onTransitionEnd),e.$wrapperEl[0].removeEventListener("webkitTransitionEnd",e.autoplay.onTransitionEnd),e.autoplay.paused=!1,e.autoplay.running?e.autoplay.run():e.autoplay.stop())}}})},on:{init:function(){this.params.autoplay.enabled&&this.autoplay.start()},beforeTransitionStart:function(e,t){this.autoplay.running&&(t||!this.params.autoplay.disableOnInteraction?this.autoplay.pause(e):this.autoplay.stop())},sliderFirstMove:function(){this.autoplay.running&&(this.params.autoplay.disableOnInteraction?this.autoplay.stop():this.autoplay.pause())},destroy:function(){this.autoplay.running&&this.autoplay.stop()}}},{name:"effect-fade",params:{fadeEffect:{crossFade:!1}},create:function(){d.extend(this,{fadeEffect:{setTranslate:Z.setTranslate.bind(this),setTransition:Z.setTransition.bind(this)}})},on:{beforeInit:function(){if("fade"===this.params.effect){this.classNames.push(this.params.containerModifierClass+"fade");var e={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!0};d.extend(this.params,e),d.extend(this.originalParams,e)}},setTranslate:function(){"fade"===this.params.effect&&this.fadeEffect.setTranslate()},setTransition:function(e){"fade"===this.params.effect&&this.fadeEffect.setTransition(e)}}},{name:"effect-cube",params:{cubeEffect:{slideShadows:!0,shadow:!0,shadowOffset:20,shadowScale:.94}},create:function(){d.extend(this,{cubeEffect:{setTranslate:Q.setTranslate.bind(this),setTransition:Q.setTransition.bind(this)}})},on:{beforeInit:function(){if("cube"===this.params.effect){this.classNames.push(this.params.containerModifierClass+"cube"),this.classNames.push(this.params.containerModifierClass+"3d");var e={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,resistanceRatio:0,spaceBetween:0,centeredSlides:!1,virtualTranslate:!0};d.extend(this.params,e),d.extend(this.originalParams,e)}},setTranslate:function(){"cube"===this.params.effect&&this.cubeEffect.setTranslate()},setTransition:function(e){"cube"===this.params.effect&&this.cubeEffect.setTransition(e)}}},{name:"effect-flip",params:{flipEffect:{slideShadows:!0,limitRotation:!0}},create:function(){d.extend(this,{flipEffect:{setTranslate:J.setTranslate.bind(this),setTransition:J.setTransition.bind(this)}})},on:{beforeInit:function(){if("flip"===this.params.effect){this.classNames.push(this.params.containerModifierClass+"flip"),this.classNames.push(this.params.containerModifierClass+"3d");var e={slidesPerView:1,slidesPerColumn:1,slidesPerGroup:1,watchSlidesProgress:!0,spaceBetween:0,virtualTranslate:!0};d.extend(this.params,e),d.extend(this.originalParams,e)}},setTranslate:function(){"flip"===this.params.effect&&this.flipEffect.setTranslate()},setTransition:function(e){"flip"===this.params.effect&&this.flipEffect.setTransition(e)}}},{name:"effect-coverflow",params:{coverflowEffect:{rotate:50,stretch:0,depth:100,modifier:1,slideShadows:!0}},create:function(){d.extend(this,{coverflowEffect:{setTranslate:ee.setTranslate.bind(this),setTransition:ee.setTransition.bind(this)}})},on:{beforeInit:function(){"coverflow"===this.params.effect&&(this.classNames.push(this.params.containerModifierClass+"coverflow"),this.classNames.push(this.params.containerModifierClass+"3d"),this.params.watchSlidesProgress=!0,this.originalParams.watchSlidesProgress=!0)},setTranslate:function(){"coverflow"===this.params.effect&&this.coverflowEffect.setTranslate()},setTransition:function(e){"coverflow"===this.params.effect&&this.coverflowEffect.setTransition(e)}}}];return void 0===k.use&&(k.use=k.Class.use,k.installModule=k.Class.installModule),k.use(te),k});
//# sourceMappingURL=swiper.min.js.map

/*!
 * jQuery twitter bootstrap wizard plugin
 * Examples and documentation at: http://github.com/VinceG/twitter-bootstrap-wizard
 * version 1.0
 * Requires jQuery v1.3.2 or later
 * Supports Bootstrap 2.2.x, 2.3.x, 3.0
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Authors: Vadim Vincent Gabriel (http://vadimg.com), Jason Gill (www.gilluminate.com)
 */
;(function($) {
var bootstrapWizardCreate = function(element, options) {
	var element = $(element);
	var obj = this;
	
	// selector skips any 'li' elements that do not contain a child with a tab data-toggle
	var baseItemSelector = 'li:has([data-toggle="tab"])';
	var historyStack = [];

	// Merge options with defaults
	var $settings = $.extend({}, $.fn.bootstrapWizard.defaults, options);
	var $activeTab = null;
	var $navigation = null;
	
	this.rebindClick = function(selector, fn)
	{
		selector.unbind('click', fn).bind('click', fn);
	}

	this.fixNavigationButtons = function() {
		// Get the current active tab
		if(!$activeTab.length) {
			// Select first one
			$navigation.find('a:first').tab('show');
			$activeTab = $navigation.find(baseItemSelector + ':first');
		}

		// See if we're currently in the first/last then disable the previous and last buttons
		$($settings.previousSelector, element).toggleClass('disabled', (obj.firstIndex() >= obj.currentIndex()));
		$($settings.nextSelector, element).toggleClass('disabled', (obj.currentIndex() >= obj.navigationLength()));
		$($settings.nextSelector, element).toggleClass('hidden', (obj.currentIndex() >= obj.navigationLength() && $($settings.finishSelector, element).length > 0));
		$($settings.lastSelector, element).toggleClass('hidden', (obj.currentIndex() >= obj.navigationLength() && $($settings.finishSelector, element).length > 0));
		$($settings.finishSelector, element).toggleClass('hidden', (obj.currentIndex() < obj.navigationLength()));
		$($settings.backSelector, element).toggleClass('disabled', (historyStack.length == 0));
		$($settings.backSelector, element).toggleClass('hidden', (obj.currentIndex() >= obj.navigationLength() && $($settings.finishSelector, element).length > 0));

		// We are unbinding and rebinding to ensure single firing and no double-click errors
		obj.rebindClick($($settings.nextSelector, element), obj.next);
		obj.rebindClick($($settings.previousSelector, element), obj.previous);
		obj.rebindClick($($settings.lastSelector, element), obj.last);
		obj.rebindClick($($settings.firstSelector, element), obj.first);
		obj.rebindClick($($settings.finishSelector, element), obj.finish);
		obj.rebindClick($($settings.backSelector, element), obj.back);

		if($settings.onTabShow && typeof $settings.onTabShow === 'function' && $settings.onTabShow($activeTab, $navigation, obj.currentIndex())===false){
			return false;
		}
	};

	this.next = function(e) {
		// If we clicked the last then dont activate this
		if(element.hasClass('last')) {
			return false;
		}

		if($settings.onNext && typeof $settings.onNext === 'function' && $settings.onNext($activeTab, $navigation, obj.nextIndex())===false){
			return false;
		}

		var formerIndex = obj.currentIndex();
		$index = obj.nextIndex();

	  // Did we click the last button
		if($index > obj.navigationLength()) {
		} else {
		  historyStack.push(formerIndex);
		  $navigation.find(baseItemSelector + ':eq(' + $index + ') a').tab('show');
		}
	};

	this.previous = function(e) {
		// If we clicked the first then dont activate this
		if(element.hasClass('first')) {
			return false;
		}

		if($settings.onPrevious && typeof $settings.onPrevious === 'function' && $settings.onPrevious($activeTab, $navigation, obj.previousIndex())===false){
			return false;
		}

		var formerIndex = obj.currentIndex();
		$index = obj.previousIndex();

		if($index < 0) {
		} else {
		  historyStack.push(formerIndex);
		  $navigation.find(baseItemSelector + ':eq(' + $index + ') a').tab('show');
		}
	};

	this.first = function (e) {
		if($settings.onFirst && typeof $settings.onFirst === 'function' && $settings.onFirst($activeTab, $navigation, obj.firstIndex())===false){
			return false;
		}

		// If the element is disabled then we won't do anything
		if(element.hasClass('disabled')) {
			return false;
		}

		historyStack.push(obj.currentIndex());
		$navigation.find(baseItemSelector + ':eq(0) a').tab('show');
	};

	this.last = function(e) {
		if($settings.onLast && typeof $settings.onLast === 'function' && $settings.onLast($activeTab, $navigation, obj.lastIndex())===false){
			return false;
		}

		// If the element is disabled then we won't do anything
		if(element.hasClass('disabled')) {
			return false;
		}

		historyStack.push(obj.currentIndex());
		$navigation.find(baseItemSelector + ':eq(' + obj.navigationLength() + ') a').tab('show');
	};

	this.finish = function (e) {
	  if ($settings.onFinish && typeof $settings.onFinish === 'function') {
	    $settings.onFinish($activeTab, $navigation, obj.lastIndex());
	  }
	};

	this.back = function () {
	  if (historyStack.length == 0) {
	    return null;
	  }

	  var formerIndex = historyStack.pop();
	  if ($settings.onBack && typeof $settings.onBack === 'function' && $settings.onBack($activeTab, $navigation, formerIndex) === false) {
	    historyStack.push(formerIndex);
	    return false;
	  }

	  element.find(baseItemSelector + ':eq(' + formerIndex + ') a').tab('show');
	};

	this.currentIndex = function() {
		return $navigation.find(baseItemSelector).index($activeTab);
	};

	this.firstIndex = function() {
		return 0;
	};

	this.lastIndex = function() {
		return obj.navigationLength();
	};
	this.getIndex = function(e) {
		return $navigation.find(baseItemSelector).index(e);
	};
	this.nextIndex = function() {
		return $navigation.find(baseItemSelector).index($activeTab) + 1;
	};
	this.previousIndex = function() {
		return $navigation.find(baseItemSelector).index($activeTab) - 1;
	};
	this.navigationLength = function() {
		return $navigation.find(baseItemSelector).length - 1;
	};
	this.activeTab = function() {
		return $activeTab;
	};
	this.nextTab = function() {
		return $navigation.find(baseItemSelector + ':eq('+(obj.currentIndex()+1)+')').length ? $navigation.find(baseItemSelector + ':eq('+(obj.currentIndex()+1)+')') : null;
	};
	this.previousTab = function() {
		if(obj.currentIndex() <= 0) {
			return null;
		}
		return $navigation.find(baseItemSelector + ':eq('+parseInt(obj.currentIndex()-1)+')');
	};
	this.show = function(index) {
	  var tabToShow = isNaN(index) ? 
      element.find(baseItemSelector + ' a[href=#' + index + ']') : 
      element.find(baseItemSelector + ':eq(' + index + ') a');
	  if (tabToShow.length > 0) {
	    historyStack.push(obj.currentIndex());
	    tabToShow.tab('show');
	  }
	};
	this.disable = function (index) {
		$navigation.find(baseItemSelector + ':eq('+index+')').addClass('disabled');
	};
	this.enable = function(index) {
		$navigation.find(baseItemSelector + ':eq('+index+')').removeClass('disabled');
	};
	this.hide = function(index) {
		$navigation.find(baseItemSelector + ':eq('+index+')').hide();
	};
	this.display = function(index) {
		$navigation.find(baseItemSelector + ':eq('+index+')').show();
	};
	this.remove = function(args) {
		var $index = args[0];
		var $removeTabPane = typeof args[1] != 'undefined' ? args[1] : false;
		var $item = $navigation.find(baseItemSelector + ':eq('+$index+')');

		// Remove the tab pane first if needed
		if($removeTabPane) {
			var $href = $item.find('a').attr('href');
			$($href).remove();
		}

		// Remove menu item
		$item.remove();
	};
	
	var innerTabClick = function (e) {
		// Get the index of the clicked tab
		var $ul = $navigation.find(baseItemSelector);
		var clickedIndex = $ul.index($(e.currentTarget).parent(baseItemSelector));
		var $clickedTab = $( $ul[clickedIndex] );
		if($settings.onTabClick && typeof $settings.onTabClick === 'function' && $settings.onTabClick($activeTab, $navigation, obj.currentIndex(), clickedIndex, $clickedTab)===false){
		    return false;
		}
	};
	
	var innerTabShown = function (e) {  // use shown instead of show to help prevent double firing
		$element = $(e.target).parent();
		var nextTab = $navigation.find(baseItemSelector).index($element);

		// If it's disabled then do not change
		if($element.hasClass('disabled')) {
			return false;
		}

		if($settings.onTabChange && typeof $settings.onTabChange === 'function' && $settings.onTabChange($activeTab, $navigation, obj.currentIndex(), nextTab)===false){
				return false;
		}

		$activeTab = $element; // activated tab
		obj.fixNavigationButtons();
	};
	
	this.resetWizard = function() {
		
		// remove the existing handlers
		$('a[data-toggle="tab"]', $navigation).off('click', innerTabClick);
		$('a[data-toggle="tab"]', $navigation).off('shown shown.bs.tab', innerTabShown);
		
		// reset elements based on current state of the DOM
		$navigation = element.find('ul:first', element);
		$activeTab = $navigation.find(baseItemSelector + '.active', element);
		
		// re-add handlers
		$('a[data-toggle="tab"]', $navigation).on('click', innerTabClick);
		$('a[data-toggle="tab"]', $navigation).on('shown shown.bs.tab', innerTabShown);
		
		obj.fixNavigationButtons();
	};

	$navigation = element.find('ul:first', element);
	$activeTab = $navigation.find(baseItemSelector + '.active', element);

	if(!$navigation.hasClass($settings.tabClass)) {
		$navigation.addClass($settings.tabClass);
	}

	// Load onInit
	if($settings.onInit && typeof $settings.onInit === 'function'){
		$settings.onInit($activeTab, $navigation, 0);
	}

	// Load onShow
	if($settings.onShow && typeof $settings.onShow === 'function'){
		$settings.onShow($activeTab, $navigation, obj.nextIndex());
	}

	$('a[data-toggle="tab"]', $navigation).on('click', innerTabClick);

	// attach to both shown and shown.bs.tab to support Bootstrap versions 2.3.2 and 3.0.0
	$('a[data-toggle="tab"]', $navigation).on('shown shown.bs.tab', innerTabShown);
};
$.fn.bootstrapWizard = function(options) {
	//expose methods
	if (typeof options == 'string') {
		var args = Array.prototype.slice.call(arguments, 1)
		if(args.length === 1) {
			args.toString();
		}
		return this.data('bootstrapWizard')[options](args);
	}
	return this.each(function(index){
		var element = $(this);
		// Return early if this element already has a plugin instance
		if (element.data('bootstrapWizard')) return;
		// pass options to plugin constructor
		var wizard = new bootstrapWizardCreate(element, options);
		// Store plugin object in this element's data
		element.data('bootstrapWizard', wizard);
		// and then trigger initial change
		wizard.fixNavigationButtons();
	});
};

// expose options
$.fn.bootstrapWizard.defaults = {
	tabClass:         'nav nav-pills',
	nextSelector:     '.wizard li.next',
	previousSelector: '.wizard li.previous',
	firstSelector:    '.wizard li.first',
	lastSelector:     '.wizard li.last',
  finishSelector:   '.wizard li.finish',
	backSelector:     '.wizard li.back',
	onShow:           null,
	onInit:           null,
	onNext:           null,
	onPrevious:       null,
	onLast:           null,
	onFirst:          null,
  onFinish:         null,
  onBack:           null,
	onTabChange:      null, 
	onTabClick:       null,
	onTabShow:        null
};

})(jQuery);

// Array of country objects for the flag dropdown.

// Here is the criteria for the plugin to support a given country/territory
// - It has an iso2 code: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
// - It has it's own country calling code (it is not a sub-region of another country): https://en.wikipedia.org/wiki/List_of_country_calling_codes
// - It has a flag in the region-flags project: https://github.com/behdad/region-flags/tree/gh-pages/png
// - It is supported by libphonenumber (it must be listed on this page): https://github.com/googlei18n/libphonenumber/blob/master/resources/ShortNumberMetadata.xml

// Each country array has the following information:
// [
//    Country name,
//    iso2 code,
//    International dial code,
//    Order (if >1 country with same dial code),
//    Area codes
// ]
var allCountries = [
  [
    "Afghanistan (‫افغانستان‬‎)",
    "af",
    "93"
  ],
  [
    "Albania (Shqipëri)",
    "al",
    "355"
  ],
  [
    "Algeria (‫الجزائر‬‎)",
    "dz",
    "213"
  ],
  [
    "American Samoa",
    "as",
    "1684"
  ],
  [
    "Andorra",
    "ad",
    "376"
  ],
  [
    "Angola",
    "ao",
    "244"
  ],
  [
    "Anguilla",
    "ai",
    "1264"
  ],
  [
    "Antigua and Barbuda",
    "ag",
    "1268"
  ],
  [
    "Argentina",
    "ar",
    "54"
  ],
  [
    "Armenia (Հայաստան)",
    "am",
    "374"
  ],
  [
    "Aruba",
    "aw",
    "297"
  ],
  [
    "Australia",
    "au",
    "61",
    0
  ],
  [
    "Austria (Österreich)",
    "at",
    "43"
  ],
  [
    "Azerbaijan (Azərbaycan)",
    "az",
    "994"
  ],
  [
    "Bahamas",
    "bs",
    "1242"
  ],
  [
    "Bahrain (‫البحرين‬‎)",
    "bh",
    "973"
  ],
  [
    "Bangladesh (বাংলাদেশ)",
    "bd",
    "880"
  ],
  [
    "Barbados",
    "bb",
    "1246"
  ],
  [
    "Belarus (Беларусь)",
    "by",
    "375"
  ],
  [
    "Belgium (België)",
    "be",
    "32"
  ],
  [
    "Belize",
    "bz",
    "501"
  ],
  [
    "Benin (Bénin)",
    "bj",
    "229"
  ],
  [
    "Bermuda",
    "bm",
    "1441"
  ],
  [
    "Bhutan (འབྲུག)",
    "bt",
    "975"
  ],
  [
    "Bolivia",
    "bo",
    "591"
  ],
  [
    "Bosnia and Herzegovina (Босна и Херцеговина)",
    "ba",
    "387"
  ],
  [
    "Botswana",
    "bw",
    "267"
  ],
  [
    "Brazil (Brasil)",
    "br",
    "55"
  ],
  [
    "British Indian Ocean Territory",
    "io",
    "246"
  ],
  [
    "British Virgin Islands",
    "vg",
    "1284"
  ],
  [
    "Brunei",
    "bn",
    "673"
  ],
  [
    "Bulgaria (България)",
    "bg",
    "359"
  ],
  [
    "Burkina Faso",
    "bf",
    "226"
  ],
  [
    "Burundi (Uburundi)",
    "bi",
    "257"
  ],
  [
    "Cambodia (កម្ពុជា)",
    "kh",
    "855"
  ],
  [
    "Cameroon (Cameroun)",
    "cm",
    "237"
  ],
  [
    "Canada",
    "ca",
    "1",
    1,
    ["204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905"]
  ],
  [
    "Cape Verde (Kabu Verdi)",
    "cv",
    "238"
  ],
  [
    "Caribbean Netherlands",
    "bq",
    "599",
    1
  ],
  [
    "Cayman Islands",
    "ky",
    "1345"
  ],
  [
    "Central African Republic (République centrafricaine)",
    "cf",
    "236"
  ],
  [
    "Chad (Tchad)",
    "td",
    "235"
  ],
  [
    "Chile",
    "cl",
    "56"
  ],
  [
    "China (中国)",
    "cn",
    "86"
  ],
  [
    "Christmas Island",
    "cx",
    "61",
    2
  ],
  [
    "Cocos (Keeling) Islands",
    "cc",
    "61",
    1
  ],
  [
    "Colombia",
    "co",
    "57"
  ],
  [
    "Comoros (‫جزر القمر‬‎)",
    "km",
    "269"
  ],
  [
    "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)",
    "cd",
    "243"
  ],
  [
    "Congo (Republic) (Congo-Brazzaville)",
    "cg",
    "242"
  ],
  [
    "Cook Islands",
    "ck",
    "682"
  ],
  [
    "Costa Rica",
    "cr",
    "506"
  ],
  [
    "Côte d’Ivoire",
    "ci",
    "225"
  ],
  [
    "Croatia (Hrvatska)",
    "hr",
    "385"
  ],
  [
    "Cuba",
    "cu",
    "53"
  ],
  [
    "Curaçao",
    "cw",
    "599",
    0
  ],
  [
    "Cyprus (Κύπρος)",
    "cy",
    "357"
  ],
  [
    "Czech Republic (Česká republika)",
    "cz",
    "420"
  ],
  [
    "Denmark (Danmark)",
    "dk",
    "45"
  ],
  [
    "Djibouti",
    "dj",
    "253"
  ],
  [
    "Dominica",
    "dm",
    "1767"
  ],
  [
    "Dominican Republic (República Dominicana)",
    "do",
    "1",
    2,
    ["809", "829", "849"]
  ],
  [
    "Ecuador",
    "ec",
    "593"
  ],
  [
    "Egypt (‫مصر‬‎)",
    "eg",
    "20"
  ],
  [
    "El Salvador",
    "sv",
    "503"
  ],
  [
    "Equatorial Guinea (Guinea Ecuatorial)",
    "gq",
    "240"
  ],
  [
    "Eritrea",
    "er",
    "291"
  ],
  [
    "Estonia (Eesti)",
    "ee",
    "372"
  ],
  [
    "Ethiopia",
    "et",
    "251"
  ],
  [
    "Falkland Islands (Islas Malvinas)",
    "fk",
    "500"
  ],
  [
    "Faroe Islands (Føroyar)",
    "fo",
    "298"
  ],
  [
    "Fiji",
    "fj",
    "679"
  ],
  [
    "Finland (Suomi)",
    "fi",
    "358",
    0
  ],
  [
    "France",
    "fr",
    "33"
  ],
  [
    "French Guiana (Guyane française)",
    "gf",
    "594"
  ],
  [
    "French Polynesia (Polynésie française)",
    "pf",
    "689"
  ],
  [
    "Gabon",
    "ga",
    "241"
  ],
  [
    "Gambia",
    "gm",
    "220"
  ],
  [
    "Georgia (საქართველო)",
    "ge",
    "995"
  ],
  [
    "Germany (Deutschland)",
    "de",
    "49"
  ],
  [
    "Ghana (Gaana)",
    "gh",
    "233"
  ],
  [
    "Gibraltar",
    "gi",
    "350"
  ],
  [
    "Greece (Ελλάδα)",
    "gr",
    "30"
  ],
  [
    "Greenland (Kalaallit Nunaat)",
    "gl",
    "299"
  ],
  [
    "Grenada",
    "gd",
    "1473"
  ],
  [
    "Guadeloupe",
    "gp",
    "590",
    0
  ],
  [
    "Guam",
    "gu",
    "1671"
  ],
  [
    "Guatemala",
    "gt",
    "502"
  ],
  [
    "Guernsey",
    "gg",
    "44",
    1
  ],
  [
    "Guinea (Guinée)",
    "gn",
    "224"
  ],
  [
    "Guinea-Bissau (Guiné Bissau)",
    "gw",
    "245"
  ],
  [
    "Guyana",
    "gy",
    "592"
  ],
  [
    "Haiti",
    "ht",
    "509"
  ],
  [
    "Honduras",
    "hn",
    "504"
  ],
  [
    "Hong Kong (香港)",
    "hk",
    "852"
  ],
  [
    "Hungary (Magyarország)",
    "hu",
    "36"
  ],
  [
    "Iceland (Ísland)",
    "is",
    "354"
  ],
  [
    "India (भारत)",
    "in",
    "91"
  ],
  [
    "Indonesia",
    "id",
    "62"
  ],
  [
    "Iran (‫ایران‬‎)",
    "ir",
    "98"
  ],
  [
    "Iraq (‫العراق‬‎)",
    "iq",
    "964"
  ],
  [
    "Ireland",
    "ie",
    "353"
  ],
  [
    "Isle of Man",
    "im",
    "44",
    2
  ],
  [
    "Israel (‫ישראל‬‎)",
    "il",
    "972"
  ],
  [
    "Italy (Italia)",
    "it",
    "39",
    0
  ],
  [
    "Jamaica",
    "jm",
    "1",
    4,
    ["876", "658"]
  ],
  [
    "Japan (日本)",
    "jp",
    "81"
  ],
  [
    "Jersey",
    "je",
    "44",
    3
  ],
  [
    "Jordan (‫الأردن‬‎)",
    "jo",
    "962"
  ],
  [
    "Kazakhstan (Казахстан)",
    "kz",
    "7",
    1
  ],
  [
    "Kenya",
    "ke",
    "254"
  ],
  [
    "Kiribati",
    "ki",
    "686"
  ],
  [
    "Kosovo",
    "xk",
    "383"
  ],
  [
    "Kuwait (‫الكويت‬‎)",
    "kw",
    "965"
  ],
  [
    "Kyrgyzstan (Кыргызстан)",
    "kg",
    "996"
  ],
  [
    "Laos (ລາວ)",
    "la",
    "856"
  ],
  [
    "Latvia (Latvija)",
    "lv",
    "371"
  ],
  [
    "Lebanon (‫لبنان‬‎)",
    "lb",
    "961"
  ],
  [
    "Lesotho",
    "ls",
    "266"
  ],
  [
    "Liberia",
    "lr",
    "231"
  ],
  [
    "Libya (‫ليبيا‬‎)",
    "ly",
    "218"
  ],
  [
    "Liechtenstein",
    "li",
    "423"
  ],
  [
    "Lithuania (Lietuva)",
    "lt",
    "370"
  ],
  [
    "Luxembourg",
    "lu",
    "352"
  ],
  [
    "Macau (澳門)",
    "mo",
    "853"
  ],
  [
    "Macedonia (FYROM) (Македонија)",
    "mk",
    "389"
  ],
  [
    "Madagascar (Madagasikara)",
    "mg",
    "261"
  ],
  [
    "Malawi",
    "mw",
    "265"
  ],
  [
    "Malaysia",
    "my",
    "60"
  ],
  [
    "Maldives",
    "mv",
    "960"
  ],
  [
    "Mali",
    "ml",
    "223"
  ],
  [
    "Malta",
    "mt",
    "356"
  ],
  [
    "Marshall Islands",
    "mh",
    "692"
  ],
  [
    "Martinique",
    "mq",
    "596"
  ],
  [
    "Mauritania (‫موريتانيا‬‎)",
    "mr",
    "222"
  ],
  [
    "Mauritius (Moris)",
    "mu",
    "230"
  ],
  [
    "Mayotte",
    "yt",
    "262",
    1
  ],
  [
    "Mexico (México)",
    "mx",
    "52"
  ],
  [
    "Micronesia",
    "fm",
    "691"
  ],
  [
    "Moldova (Republica Moldova)",
    "md",
    "373"
  ],
  [
    "Monaco",
    "mc",
    "377"
  ],
  [
    "Mongolia (Монгол)",
    "mn",
    "976"
  ],
  [
    "Montenegro (Crna Gora)",
    "me",
    "382"
  ],
  [
    "Montserrat",
    "ms",
    "1664"
  ],
  [
    "Morocco (‫المغرب‬‎)",
    "ma",
    "212",
    0
  ],
  [
    "Mozambique (Moçambique)",
    "mz",
    "258"
  ],
  [
    "Myanmar (Burma) (မြန်မာ)",
    "mm",
    "95"
  ],
  [
    "Namibia (Namibië)",
    "na",
    "264"
  ],
  [
    "Nauru",
    "nr",
    "674"
  ],
  [
    "Nepal (नेपाल)",
    "np",
    "977"
  ],
  [
    "Netherlands (Nederland)",
    "nl",
    "31"
  ],
  [
    "New Caledonia (Nouvelle-Calédonie)",
    "nc",
    "687"
  ],
  [
    "New Zealand",
    "nz",
    "64"
  ],
  [
    "Nicaragua",
    "ni",
    "505"
  ],
  [
    "Niger (Nijar)",
    "ne",
    "227"
  ],
  [
    "Nigeria",
    "ng",
    "234"
  ],
  [
    "Niue",
    "nu",
    "683"
  ],
  [
    "Norfolk Island",
    "nf",
    "672"
  ],
  [
    "North Korea (조선 민주주의 인민 공화국)",
    "kp",
    "850"
  ],
  [
    "Northern Mariana Islands",
    "mp",
    "1670"
  ],
  [
    "Norway (Norge)",
    "no",
    "47",
    0
  ],
  [
    "Oman (‫عُمان‬‎)",
    "om",
    "968"
  ],
  [
    "Pakistan (‫پاکستان‬‎)",
    "pk",
    "92"
  ],
  [
    "Palau",
    "pw",
    "680"
  ],
  [
    "Palestine (‫فلسطين‬‎)",
    "ps",
    "970"
  ],
  [
    "Panama (Panamá)",
    "pa",
    "507"
  ],
  [
    "Papua New Guinea",
    "pg",
    "675"
  ],
  [
    "Paraguay",
    "py",
    "595"
  ],
  [
    "Peru (Perú)",
    "pe",
    "51"
  ],
  [
    "Philippines",
    "ph",
    "63"
  ],
  [
    "Poland (Polska)",
    "pl",
    "48"
  ],
  [
    "Portugal",
    "pt",
    "351"
  ],
  [
    "Puerto Rico",
    "pr",
    "1",
    3,
    ["787", "939"]
  ],
  [
    "Qatar (‫قطر‬‎)",
    "qa",
    "974"
  ],
  [
    "Réunion (La Réunion)",
    "re",
    "262",
    0
  ],
  [
    "Romania (România)",
    "ro",
    "40"
  ],
  [
    "Russia (Россия)",
    "ru",
    "7",
    0
  ],
  [
    "Rwanda",
    "rw",
    "250"
  ],
  [
    "Saint Barthélemy",
    "bl",
    "590",
    1
  ],
  [
    "Saint Helena",
    "sh",
    "290"
  ],
  [
    "Saint Kitts and Nevis",
    "kn",
    "1869"
  ],
  [
    "Saint Lucia",
    "lc",
    "1758"
  ],
  [
    "Saint Martin (Saint-Martin (partie française))",
    "mf",
    "590",
    2
  ],
  [
    "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)",
    "pm",
    "508"
  ],
  [
    "Saint Vincent and the Grenadines",
    "vc",
    "1784"
  ],
  [
    "Samoa",
    "ws",
    "685"
  ],
  [
    "San Marino",
    "sm",
    "378"
  ],
  [
    "São Tomé and Príncipe (São Tomé e Príncipe)",
    "st",
    "239"
  ],
  [
    "Saudi Arabia (‫المملكة العربية السعودية‬‎)",
    "sa",
    "966"
  ],
  [
    "Senegal (Sénégal)",
    "sn",
    "221"
  ],
  [
    "Serbia (Србија)",
    "rs",
    "381"
  ],
  [
    "Seychelles",
    "sc",
    "248"
  ],
  [
    "Sierra Leone",
    "sl",
    "232"
  ],
  [
    "Singapore",
    "sg",
    "65"
  ],
  [
    "Sint Maarten",
    "sx",
    "1721"
  ],
  [
    "Slovakia (Slovensko)",
    "sk",
    "421"
  ],
  [
    "Slovenia (Slovenija)",
    "si",
    "386"
  ],
  [
    "Solomon Islands",
    "sb",
    "677"
  ],
  [
    "Somalia (Soomaaliya)",
    "so",
    "252"
  ],
  [
    "South Africa",
    "za",
    "27"
  ],
  [
    "South Korea (대한민국)",
    "kr",
    "82"
  ],
  [
    "South Sudan (‫جنوب السودان‬‎)",
    "ss",
    "211"
  ],
  [
    "Spain (España)",
    "es",
    "34"
  ],
  [
    "Sri Lanka (ශ්‍රී ලංකාව)",
    "lk",
    "94"
  ],
  [
    "Sudan (‫السودان‬‎)",
    "sd",
    "249"
  ],
  [
    "Suriname",
    "sr",
    "597"
  ],
  [
    "Svalbard and Jan Mayen",
    "sj",
    "47",
    1
  ],
  [
    "Swaziland",
    "sz",
    "268"
  ],
  [
    "Sweden (Sverige)",
    "se",
    "46"
  ],
  [
    "Switzerland (Schweiz)",
    "ch",
    "41"
  ],
  [
    "Syria (‫سوريا‬‎)",
    "sy",
    "963"
  ],
  [
    "Taiwan (台灣)",
    "tw",
    "886"
  ],
  [
    "Tajikistan",
    "tj",
    "992"
  ],
  [
    "Tanzania",
    "tz",
    "255"
  ],
  [
    "Thailand (ไทย)",
    "th",
    "66"
  ],
  [
    "Timor-Leste",
    "tl",
    "670"
  ],
  [
    "Togo",
    "tg",
    "228"
  ],
  [
    "Tokelau",
    "tk",
    "690"
  ],
  [
    "Tonga",
    "to",
    "676"
  ],
  [
    "Trinidad and Tobago",
    "tt",
    "1868"
  ],
  [
    "Tunisia (‫تونس‬‎)",
    "tn",
    "216"
  ],
  [
    "Turkey (Türkiye)",
    "tr",
    "90"
  ],
  [
    "Turkmenistan",
    "tm",
    "993"
  ],
  [
    "Turks and Caicos Islands",
    "tc",
    "1649"
  ],
  [
    "Tuvalu",
    "tv",
    "688"
  ],
  [
    "U.S. Virgin Islands",
    "vi",
    "1340"
  ],
  [
    "Uganda",
    "ug",
    "256"
  ],
  [
    "Ukraine (Україна)",
    "ua",
    "380"
  ],
  [
    "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)",
    "ae",
    "971"
  ],
  [
    "United Kingdom",
    "gb",
    "44",
    0
  ],
  [
    "United States",
    "us",
    "1",
    0
  ],
  [
    "Uruguay",
    "uy",
    "598"
  ],
  [
    "Uzbekistan (Oʻzbekiston)",
    "uz",
    "998"
  ],
  [
    "Vanuatu",
    "vu",
    "678"
  ],
  [
    "Vatican City (Città del Vaticano)",
    "va",
    "39",
    1
  ],
  [
    "Venezuela",
    "ve",
    "58"
  ],
  [
    "Vietnam (Việt Nam)",
    "vn",
    "84"
  ],
  [
    "Wallis and Futuna (Wallis-et-Futuna)",
    "wf",
    "681"
  ],
  [
    "Western Sahara (‫الصحراء الغربية‬‎)",
    "eh",
    "212",
    1
  ],
  [
    "Yemen (‫اليمن‬‎)",
    "ye",
    "967"
  ],
  [
    "Zambia",
    "zm",
    "260"
  ],
  [
    "Zimbabwe",
    "zw",
    "263"
  ],
  [
    "Åland Islands",
    "ax",
    "358",
    1
  ]
];

// loop over all of the countries above
for (var i = 0; i < allCountries.length; i++) {
  var c = allCountries[i];
  allCountries[i] = {
    name: c[0],
    iso2: c[1],
    dialCode: c[2],
    priority: c[3] || 0,
    areaCodes: c[4] || null
  };
}

/*
 * International Telephone Input v13.0.2
 * https://github.com/jackocnr/intl-tel-input.git
 * Licensed under the MIT license
 */

// wrap in UMD - see https://github.com/umdjs/umd/blob/master/jqueryPluginCommonjs.js
(function(factory) {
    if (typeof define === "function" && define.amd) {
        define([ "jquery" ], function($) {
            factory($, window, document);
        });
    } else if (typeof module === "object" && module.exports) {
        module.exports = factory(require("jquery"), window, document);
    } else {
        factory(jQuery, window, document);
    }
})(function($, window, document, undefined) {
    "use strict";
    // these vars persist through all instances of the plugin
    var pluginName = "intlTelInput", id = 1, // give each instance it's own id for namespaced event handling
    defaults = {
        // whether or not to allow the dropdown
        allowDropdown: true,
        // if there is just a dial code in the input: remove it on blur, and re-add it on focus
        autoHideDialCode: true,
        // add a placeholder in the input with an example number for the selected country
        autoPlaceholder: "polite",
        // modify the auto placeholder
        customPlaceholder: null,
        // append menu to a specific element
        dropdownContainer: "",
        // don't display these countries
        excludeCountries: [],
        // format the input value during initialisation and on setNumber
        formatOnDisplay: true,
        // geoIp lookup function
        geoIpLookup: null,
        // inject a hidden input with this name, and on submit, populate it with the result of getNumber
        hiddenInput: "",
        // initial country
        initialCountry: "",
        // localized country names e.g. { 'de': 'Deutschland' }
        localizedCountries: null,
        // don't insert international dial codes
        nationalMode: true,
        // display only these countries
        onlyCountries: [],
        // number type to use for placeholders
        placeholderNumberType: "MOBILE",
        // the countries at the top of the list. defaults to united states and united kingdom
        preferredCountries: [ "us", "gb" ],
        // display the country dial code next to the selected flag so it's not part of the typed number
        separateDialCode: false,
        // specify the path to the libphonenumber script to enable validation/formatting
        utilsScript: ""
    }, keys = {
        UP: 38,
        DOWN: 40,
        ENTER: 13,
        ESC: 27,
        PLUS: 43,
        A: 65,
        Z: 90,
        SPACE: 32,
        TAB: 9
    }, // https://en.wikipedia.org/wiki/List_of_North_American_Numbering_Plan_area_codes#Non-geographic_area_codes
    regionlessNanpNumbers = [ "800", "822", "833", "844", "855", "866", "877", "880", "881", "882", "883", "884", "885", "886", "887", "888", "889" ];
    // keep track of if the window.load event has fired as impossible to check after the fact
    $(window).on("load", function() {
        // UPDATE: use a public static field so we can fudge it in the tests
        $.fn[pluginName].windowLoaded = true;
    });
    function Plugin(element, options) {
        this.telInput = $(element);
        this.options = $.extend({}, defaults, options);
        // event namespace
        this.ns = "." + pluginName + id++;
        // Chrome, FF, Safari, IE9+
        this.isGoodBrowser = Boolean(element.setSelectionRange);
        this.hadInitialPlaceholder = Boolean($(element).attr("placeholder"));
    }
    Plugin.prototype = {
        _init: function() {
            // if in nationalMode, disable options relating to dial codes
            if (this.options.nationalMode) {
                this.options.autoHideDialCode = false;
            }
            // if separateDialCode then doesn't make sense to A) insert dial code into input (autoHideDialCode), and B) display national numbers (because we're displaying the country dial code next to them)
            if (this.options.separateDialCode) {
                this.options.autoHideDialCode = this.options.nationalMode = false;
            }
            // we cannot just test screen size as some smartphones/website meta tags will report desktop resolutions
            // Note: for some reason jasmine breaks if you put this in the main Plugin function with the rest of these declarations
            // Note: to target Android Mobiles (and not Tablets), we must find "Android" and "Mobile"
            this.isMobile = /Android.+Mobile|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
            if (this.isMobile) {
                // trigger the mobile dropdown css
                $("body").addClass("iti-mobile");
                // on mobile, we want a full screen dropdown, so we must append it to the body
                if (!this.options.dropdownContainer) {
                    this.options.dropdownContainer = "body";
                }
            }
            // we return these deferred objects from the _init() call so they can be watched, and then we resolve them when each specific request returns
            // Note: again, jasmine breaks when I put these in the Plugin function
            this.autoCountryDeferred = new $.Deferred();
            this.utilsScriptDeferred = new $.Deferred();
            // in various situations there could be no country selected initially, but we need to be able to assume this variable exists
            this.selectedCountryData = {};
            // process all the data: onlyCountries, excludeCountries, preferredCountries etc
            this._processCountryData();
            // generate the markup
            this._generateMarkup();
            // set the initial state of the input value and the selected flag
            this._setInitialState();
            // start all of the event listeners: autoHideDialCode, input keydown, selectedFlag click
            this._initListeners();
            // utils script, and auto country
            this._initRequests();
            // return the deferreds
            return [ this.autoCountryDeferred, this.utilsScriptDeferred ];
        },
        /********************
   *  PRIVATE METHODS
   ********************/
        // prepare all of the country data, including onlyCountries, excludeCountries and preferredCountries options
        _processCountryData: function() {
            // process onlyCountries or excludeCountries array if present
            this._processAllCountries();
            // process the countryCodes map
            this._processCountryCodes();
            // process the preferredCountries
            this._processPreferredCountries();
            // translate countries according to localizedCountries option
            if (this.options.localizedCountries) {
                this._translateCountriesByLocale();
            }
            // sort countries by name
            if (this.options.onlyCountries.length || this.options.localizedCountries) {
                this.countries.sort(this._countryNameSort);
            }
        },
        // add a country code to this.countryCodes
        _addCountryCode: function(iso2, dialCode, priority) {
            if (!(dialCode in this.countryCodes)) {
                this.countryCodes[dialCode] = [];
            }
            var index = priority || 0;
            this.countryCodes[dialCode][index] = iso2;
        },
        // process onlyCountries or excludeCountries array if present
        _processAllCountries: function() {
            if (this.options.onlyCountries.length) {
                var lowerCaseOnlyCountries = this.options.onlyCountries.map(function(country) {
                    return country.toLowerCase();
                });
                this.countries = allCountries.filter(function(country) {
                    return lowerCaseOnlyCountries.indexOf(country.iso2) > -1;
                });
            } else if (this.options.excludeCountries.length) {
                var lowerCaseExcludeCountries = this.options.excludeCountries.map(function(country) {
                    return country.toLowerCase();
                });
                this.countries = allCountries.filter(function(country) {
                    return lowerCaseExcludeCountries.indexOf(country.iso2) === -1;
                });
            } else {
                this.countries = allCountries;
            }
        },
        // Translate Countries by object literal provided on config
        _translateCountriesByLocale: function() {
            for (var i = 0; i < this.countries.length; i++) {
                var iso = this.countries[i].iso2.toLowerCase();
                if (iso in this.options.localizedCountries) {
                    this.countries[i].name = this.options.localizedCountries[iso];
                }
            }
        },
        // sort by country name
        _countryNameSort: function(a, b) {
            return a.name.localeCompare(b.name);
        },
        // process the countryCodes map
        _processCountryCodes: function() {
            this.countryCodes = {};
            for (var i = 0; i < this.countries.length; i++) {
                var c = this.countries[i];
                this._addCountryCode(c.iso2, c.dialCode, c.priority);
                // area codes
                if (c.areaCodes) {
                    for (var j = 0; j < c.areaCodes.length; j++) {
                        // full dial code is country code + dial code
                        this._addCountryCode(c.iso2, c.dialCode + c.areaCodes[j]);
                    }
                }
            }
        },
        // process preferred countries - iterate through the preferences, fetching the country data for each one
        _processPreferredCountries: function() {
            this.preferredCountries = [];
            for (var i = 0; i < this.options.preferredCountries.length; i++) {
                var countryCode = this.options.preferredCountries[i].toLowerCase(), countryData = this._getCountryData(countryCode, false, true);
                if (countryData) {
                    this.preferredCountries.push(countryData);
                }
            }
        },
        // generate all of the markup for the plugin: the selected flag overlay, and the dropdown
        _generateMarkup: function() {
            // prevent autocomplete as there's no safe, cross-browser event we can react to, so it can easily put the plugin in an inconsistent state e.g. the wrong flag selected for the autocompleted number, which on submit could mean the wrong number is saved (esp in nationalMode)
            this.telInput.attr("autocomplete", "off");
            // containers (mostly for positioning)
            var parentClass = "intl-tel-input";
            if (this.options.allowDropdown) {
                parentClass += " allow-dropdown";
            }
            if (this.options.separateDialCode) {
                parentClass += " separate-dial-code";
            }
            this.telInput.wrap($("<div>", {
                "class": parentClass
            }));
            this.flagsContainer = $("<div>", {
                "class": "flag-container"
            }).insertBefore(this.telInput);
            // currently selected flag (displayed to left of input)
            var selectedFlag = $("<div>", {
                "class": "selected-flag",
                role: "combobox",
                "aria-owns": "country-listbox"
            });
            selectedFlag.appendTo(this.flagsContainer);
            this.selectedFlagInner = $("<div>", {
                "class": "iti-flag"
            }).appendTo(selectedFlag);
            if (this.options.separateDialCode) {
                this.selectedDialCode = $("<div>", {
                    "class": "selected-dial-code"
                }).appendTo(selectedFlag);
            }
            if (this.options.allowDropdown) {
                // make element focusable and tab naviagable
                selectedFlag.attr("tabindex", "0");
                // CSS triangle
                $("<div>", {
                    "class": "iti-arrow"
                }).appendTo(selectedFlag);
                // country dropdown: preferred countries, then divider, then all countries
                this.countryList = $("<ul>", {
                    "class": "country-list hide",
                    id: "country-listbox",
                    "aria-expanded": "false",
                    role: "listbox"
                });
                if (this.preferredCountries.length) {
                    this._appendListItems(this.preferredCountries, "preferred");
                    $("<li>", {
                        "class": "divider",
                        role: "separator",
                        "aria-disabled": "true"
                    }).appendTo(this.countryList);
                }
                this._appendListItems(this.countries, "");
                // this is useful in lots of places
                this.countryListItems = this.countryList.children(".country");
                // create dropdownContainer markup
                if (this.options.dropdownContainer) {
                    this.dropdown = $("<div>", {
                        "class": "intl-tel-input iti-container"
                    }).append(this.countryList);
                } else {
                    this.countryList.appendTo(this.flagsContainer);
                }
            } else {
                // a little hack so we don't break anything
                this.countryListItems = $();
            }
            if (this.options.hiddenInput) {
                var hiddenInputName = this.options.hiddenInput;
                var name = this.telInput.attr("name");
                if (name) {
                    var i = name.lastIndexOf("[");
                    // if input name contains square brackets, then give the hidden input the same name,
                    // replacing the contents of the last set of brackets with the given hiddenInput name
                    if (i !== -1) hiddenInputName = name.substr(0, i) + "[" + hiddenInputName + "]";
                }
                this.hiddenInput = $("<input>", {
                    type: "hidden",
                    name: hiddenInputName
                }).insertAfter(this.telInput);
            }
        },
        // add a country <li> to the countryList <ul> container
        _appendListItems: function(countries, className) {
            // we create so many DOM elements, it is faster to build a temp string
            // and then add everything to the DOM in one go at the end
            var tmp = "";
            // for each country
            for (var i = 0; i < countries.length; i++) {
                var c = countries[i];
                // open the list item
                tmp += "<li class='country " + className + "' id='iti-item-" + c.iso2 + "' role='option' data-dial-code='" + c.dialCode + "' data-country-code='" + c.iso2 + "'>";
                // add the flag
                tmp += "<div class='flag-box'><div class='iti-flag " + c.iso2 + "'></div></div>";
                // and the country name and dial code
                tmp += "<span class='country-name'>" + c.name + "</span>";
                tmp += "<span class='dial-code'>+" + c.dialCode + "</span>";
                // close the list item
                tmp += "</li>";
            }
            this.countryList.append(tmp);
        },
        // set the initial state of the input value and the selected flag by:
        // 1. extracting a dial code from the given number
        // 2. using explicit initialCountry
        // 3. picking the first preferred country
        // 4. picking the first country
        _setInitialState: function() {
            var val = this.telInput.val();
            var dialCode = this._getDialCode(val);
            var isRegionlessNanp = this._isRegionlessNanp(val);
            // if we already have a dial code, and it's not a regionlessNanp, we can go ahead and set the flag, else fall back to the default country
            if (dialCode && !isRegionlessNanp) {
                this._updateFlagFromNumber(val);
            } else if (this.options.initialCountry !== "auto") {
                // see if we should select a flag
                if (this.options.initialCountry) {
                    this._setFlag(this.options.initialCountry.toLowerCase());
                } else {
                    if (dialCode && isRegionlessNanp) {
                        // has intl dial code, is regionless nanp, and no initialCountry, so default to US
                        this._setFlag("us");
                    } else {
                        // no dial code and no initialCountry, so default to first in list
                        this.defaultCountry = this.preferredCountries.length ? this.preferredCountries[0].iso2 : this.countries[0].iso2;
                        if (!val) {
                            this._setFlag(this.defaultCountry);
                        }
                    }
                }
                // if empty and no nationalMode and no autoHideDialCode then insert the default dial code
                if (!val && !this.options.nationalMode && !this.options.autoHideDialCode && !this.options.separateDialCode) {
                    this.telInput.val("+" + this.selectedCountryData.dialCode);
                }
            }
            // NOTE: if initialCountry is set to auto, that will be handled separately
            // format
            if (val) {
                // this wont be run after _updateDialCode as that's only called if no val
                this._updateValFromNumber(val);
            }
        },
        // initialise the main event listeners: input keyup, and click selected flag
        _initListeners: function() {
            this._initKeyListeners();
            if (this.options.autoHideDialCode) {
                this._initFocusListeners();
            }
            if (this.options.allowDropdown) {
                this._initDropdownListeners();
            }
            if (this.hiddenInput) {
                this._initHiddenInputListener();
            }
        },
        // update hidden input on form submit
        _initHiddenInputListener: function() {
            var that = this;
            var form = this.telInput.closest("form");
            if (form.length) {
                form.submit(function() {
                    that.hiddenInput.val(that.getNumber());
                });
            }
        },
        // initialise the dropdown listeners
        _initDropdownListeners: function() {
            var that = this;
            // hack for input nested inside label: clicking the selected-flag to open the dropdown would then automatically trigger a 2nd click on the input which would close it again
            var label = this.telInput.closest("label");
            if (label.length) {
                label.on("click" + this.ns, function(e) {
                    // if the dropdown is closed, then focus the input, else ignore the click
                    if (that.countryList.hasClass("hide")) {
                        that.telInput.focus();
                    } else {
                        e.preventDefault();
                    }
                });
            }
            // toggle country dropdown on click
            var selectedFlag = this.selectedFlagInner.parent();
            selectedFlag.on("click" + this.ns, function(e) {
                // only intercept this event if we're opening the dropdown
                // else let it bubble up to the top ("click-off-to-close" listener)
                // we cannot just stopPropagation as it may be needed to close another instance
                if (that.countryList.hasClass("hide") && !that.telInput.prop("disabled") && !that.telInput.prop("readonly")) {
                    that._showDropdown();
                }
            });
            // open dropdown list if currently focused
            this.flagsContainer.on("keydown" + that.ns, function(e) {
                var isDropdownHidden = that.countryList.hasClass("hide");
                if (isDropdownHidden && (e.which == keys.UP || e.which == keys.DOWN || e.which == keys.SPACE || e.which == keys.ENTER)) {
                    // prevent form from being submitted if "ENTER" was pressed
                    e.preventDefault();
                    // prevent event from being handled again by document
                    e.stopPropagation();
                    that._showDropdown();
                }
                // allow navigation from dropdown to input on TAB
                if (e.which == keys.TAB) {
                    that._closeDropdown();
                }
            });
        },
        // init many requests: utils script / geo ip lookup
        _initRequests: function() {
            var that = this;
            // if the user has specified the path to the utils script, fetch it on window.load, else resolve
            if (this.options.utilsScript && !window.intlTelInputUtils) {
                // if the plugin is being initialised after the window.load event has already been fired
                if ($.fn[pluginName].windowLoaded) {
                    $.fn[pluginName].loadUtils(this.options.utilsScript);
                } else {
                    // wait until the load event so we don't block any other requests e.g. the flags image
                    $(window).on("load", function() {
                        $.fn[pluginName].loadUtils(that.options.utilsScript);
                    });
                }
            } else {
                this.utilsScriptDeferred.resolve();
            }
            if (this.options.initialCountry === "auto") {
                this._loadAutoCountry();
            } else {
                this.autoCountryDeferred.resolve();
            }
        },
        // perform the geo ip lookup
        _loadAutoCountry: function() {
            var that = this;
            // 3 options:
            // 1) already loaded (we're done)
            // 2) not already started loading (start)
            // 3) already started loading (do nothing - just wait for loading callback to fire)
            if ($.fn[pluginName].autoCountry) {
                this.handleAutoCountry();
            } else if (!$.fn[pluginName].startedLoadingAutoCountry) {
                // don't do this twice!
                $.fn[pluginName].startedLoadingAutoCountry = true;
                if (typeof this.options.geoIpLookup === "function") {
                    this.options.geoIpLookup(function(countryCode) {
                        $.fn[pluginName].autoCountry = countryCode.toLowerCase();
                        // tell all instances the auto country is ready
                        // TODO: this should just be the current instances
                        // UPDATE: use setTimeout in case their geoIpLookup function calls this callback straight away (e.g. if they have already done the geo ip lookup somewhere else). Using setTimeout means that the current thread of execution will finish before executing this, which allows the plugin to finish initialising.
                        setTimeout(function() {
                            $(".intl-tel-input input").intlTelInput("handleAutoCountry");
                        });
                    });
                }
            }
        },
        // initialize any key listeners
        _initKeyListeners: function() {
            var that = this;
            // update flag on keyup
            // (keep this listener separate otherwise the setTimeout breaks all the tests)
            this.telInput.on("keyup" + this.ns, function() {
                if (that._updateFlagFromNumber(that.telInput.val())) {
                    that._triggerCountryChange();
                }
            });
            // update flag on cut/paste events (now supported in all major browsers)
            this.telInput.on("cut" + this.ns + " paste" + this.ns, function() {
                // hack because "paste" event is fired before input is updated
                setTimeout(function() {
                    if (that._updateFlagFromNumber(that.telInput.val())) {
                        that._triggerCountryChange();
                    }
                });
            });
        },
        // adhere to the input's maxlength attr
        _cap: function(number) {
            var max = this.telInput.attr("maxlength");
            return max && number.length > max ? number.substr(0, max) : number;
        },
        // listen for mousedown, focus and blur
        _initFocusListeners: function() {
            var that = this;
            // mousedown decides where the cursor goes, so if we're focusing we must preventDefault as we'll be inserting the dial code, and we want the cursor to be at the end no matter where they click
            this.telInput.on("mousedown" + this.ns, function(e) {
                if (!that.telInput.is(":focus") && !that.telInput.val()) {
                    e.preventDefault();
                    // but this also cancels the focus, so we must trigger that manually
                    that.telInput.focus();
                }
            });
            // on focus: if empty, insert the dial code for the currently selected flag
            this.telInput.on("focus" + this.ns, function(e) {
                if (!that.telInput.val() && !that.telInput.prop("readonly") && that.selectedCountryData.dialCode) {
                    // insert the dial code
                    that.telInput.val("+" + that.selectedCountryData.dialCode);
                    // after auto-inserting a dial code, if the first key they hit is '+' then assume they are entering a new number, so remove the dial code. use keypress instead of keydown because keydown gets triggered for the shift key (required to hit the + key), and instead of keyup because that shows the new '+' before removing the old one
                    that.telInput.one("keypress.plus" + that.ns, function(e) {
                        if (e.which == keys.PLUS) {
                            that.telInput.val("");
                        }
                    });
                    // after tabbing in, make sure the cursor is at the end we must use setTimeout to get outside of the focus handler as it seems the selection happens after that
                    setTimeout(function() {
                        var input = that.telInput[0];
                        if (that.isGoodBrowser) {
                            var len = that.telInput.val().length;
                            input.setSelectionRange(len, len);
                        }
                    });
                }
            });
            // on blur or form submit: if just a dial code then remove it
            var form = this.telInput.prop("form");
            if (form) {
                $(form).on("submit" + this.ns, function() {
                    that._removeEmptyDialCode();
                });
            }
            this.telInput.on("blur" + this.ns, function() {
                that._removeEmptyDialCode();
            });
        },
        _removeEmptyDialCode: function() {
            var value = this.telInput.val(), startsPlus = value.charAt(0) == "+";
            if (startsPlus) {
                var numeric = this._getNumeric(value);
                // if just a plus, or if just a dial code
                if (!numeric || this.selectedCountryData.dialCode == numeric) {
                    this.telInput.val("");
                }
            }
            // remove the keypress listener we added on focus
            this.telInput.off("keypress.plus" + this.ns);
        },
        // extract the numeric digits from the given string
        _getNumeric: function(s) {
            return s.replace(/\D/g, "");
        },
        // show the dropdown
        _showDropdown: function() {
            this._setDropdownPosition();
            // update highlighting and scroll to active list item
            var activeListItem = this.countryList.children(".active");
            if (activeListItem.length) {
                this._highlightListItem(activeListItem);
                this._scrollTo(activeListItem);
            }
            // bind all the dropdown-related listeners: mouseover, click, click-off, keydown
            this._bindDropdownListeners();
            // update the arrow
            this.selectedFlagInner.children(".iti-arrow").addClass("up");
            this.telInput.trigger("open:countrydropdown");
        },
        // decide where to position dropdown (depends on position within viewport, and scroll)
        _setDropdownPosition: function() {
            var that = this;
            if (this.options.dropdownContainer) {
                this.dropdown.appendTo(this.options.dropdownContainer);
            }
            // show the menu and grab the dropdown height
            this.dropdownHeight = this.countryList.removeClass("hide").attr("aria-expanded", "true").outerHeight();
            if (!this.isMobile) {
                var pos = this.telInput.offset(), inputTop = pos.top, windowTop = $(window).scrollTop(), // dropdownFitsBelow = (dropdownBottom < windowBottom)
                dropdownFitsBelow = inputTop + this.telInput.outerHeight() + this.dropdownHeight < windowTop + $(window).height(), dropdownFitsAbove = inputTop - this.dropdownHeight > windowTop;
                // by default, the dropdown will be below the input. If we want to position it above the input, we add the dropup class.
                this.countryList.toggleClass("dropup", !dropdownFitsBelow && dropdownFitsAbove);
                // if dropdownContainer is enabled, calculate postion
                if (this.options.dropdownContainer) {
                    // by default the dropdown will be directly over the input because it's not in the flow. If we want to position it below, we need to add some extra top value.
                    var extraTop = !dropdownFitsBelow && dropdownFitsAbove ? 0 : this.telInput.innerHeight();
                    // calculate placement
                    this.dropdown.css({
                        top: inputTop + extraTop,
                        left: pos.left
                    });
                    // close menu on window scroll
                    $(window).on("scroll" + this.ns, function() {
                        that._closeDropdown();
                    });
                }
            }
        },
        // we only bind dropdown listeners when the dropdown is open
        _bindDropdownListeners: function() {
            var that = this;
            // when mouse over a list item, just highlight that one
            // we add the class "highlight", so if they hit "enter" we know which one to select
            this.countryList.on("mouseover" + this.ns, ".country", function(e) {
                that._highlightListItem($(this));
            });
            // listen for country selection
            this.countryList.on("click" + this.ns, ".country", function(e) {
                that._selectListItem($(this));
            });
            // click off to close
            // (except when this initial opening click is bubbling up)
            // we cannot just stopPropagation as it may be needed to close another instance
            var isOpening = true;
            $("html").on("click" + this.ns, function(e) {
                if (!isOpening) {
                    that._closeDropdown();
                }
                isOpening = false;
            });
            // listen for up/down scrolling, enter to select, or letters to jump to country name.
            // use keydown as keypress doesn't fire for non-char keys and we want to catch if they
            // just hit down and hold it to scroll down (no keyup event).
            // listen on the document because that's where key events are triggered if no input has focus
            var query = "", queryTimer = null;
            $(document).on("keydown" + this.ns, function(e) {
                // prevent down key from scrolling the whole page,
                // and enter key from submitting a form etc
                e.preventDefault();
                if (e.which == keys.UP || e.which == keys.DOWN) {
                    // up and down to navigate
                    that._handleUpDownKey(e.which);
                } else if (e.which == keys.ENTER) {
                    // enter to select
                    that._handleEnterKey();
                } else if (e.which == keys.ESC) {
                    // esc to close
                    that._closeDropdown();
                } else if (e.which >= keys.A && e.which <= keys.Z || e.which == keys.SPACE) {
                    // upper case letters (note: keyup/keydown only return upper case letters)
                    // jump to countries that start with the query string
                    if (queryTimer) {
                        clearTimeout(queryTimer);
                    }
                    query += String.fromCharCode(e.which);
                    that._searchForCountry(query);
                    // if the timer hits 1 second, reset the query
                    queryTimer = setTimeout(function() {
                        query = "";
                    }, 1e3);
                }
            });
        },
        // highlight the next/prev item in the list (and ensure it is visible)
        _handleUpDownKey: function(key) {
            var current = this.countryList.children(".highlight").first();
            var next = key == keys.UP ? current.prev() : current.next();
            if (next.length) {
                // skip the divider
                if (next.hasClass("divider")) {
                    next = key == keys.UP ? next.prev() : next.next();
                }
                this._highlightListItem(next);
                this._scrollTo(next);
            }
        },
        // select the currently highlighted item
        _handleEnterKey: function() {
            var currentCountry = this.countryList.children(".highlight").first();
            if (currentCountry.length) {
                this._selectListItem(currentCountry);
            }
        },
        // find the first list item whose name starts with the query string
        _searchForCountry: function(query) {
            for (var i = 0; i < this.countries.length; i++) {
                if (this._startsWith(this.countries[i].name, query)) {
                    var listItem = this.countryList.children("[data-country-code=" + this.countries[i].iso2 + "]").not(".preferred");
                    // update highlighting and scroll
                    this._highlightListItem(listItem);
                    this._scrollTo(listItem, true);
                    break;
                }
            }
        },
        // check if (uppercase) string a starts with string b
        _startsWith: function(a, b) {
            return a.substr(0, b.length).toUpperCase() == b;
        },
        // update the input's value to the given val (format first if possible)
        // NOTE: this is called from _setInitialState, handleUtils and setNumber
        _updateValFromNumber: function(number) {
            if (this.options.formatOnDisplay && window.intlTelInputUtils && this.selectedCountryData) {
                var format = !this.options.separateDialCode && (this.options.nationalMode || number.charAt(0) != "+") ? intlTelInputUtils.numberFormat.NATIONAL : intlTelInputUtils.numberFormat.INTERNATIONAL;
                number = intlTelInputUtils.formatNumber(number, this.selectedCountryData.iso2, format);
            }
            number = this._beforeSetNumber(number);
            this.telInput.val(number);
        },
        // check if need to select a new flag based on the given number
        // Note: called from _setInitialState, keyup handler, setNumber
        _updateFlagFromNumber: function(number) {
            // if we're in nationalMode and we already have US/Canada selected, make sure the number starts with a +1 so _getDialCode will be able to extract the area code
            // update: if we dont yet have selectedCountryData, but we're here (trying to update the flag from the number), that means we're initialising the plugin with a number that already has a dial code, so fine to ignore this bit
            if (number && this.options.nationalMode && this.selectedCountryData.dialCode == "1" && number.charAt(0) != "+") {
                if (number.charAt(0) != "1") {
                    number = "1" + number;
                }
                number = "+" + number;
            }
            // try and extract valid dial code from input
            var dialCode = this._getDialCode(number), countryCode = null, numeric = this._getNumeric(number);
            if (dialCode) {
                // check if one of the matching countries is already selected
                var countryCodes = this.countryCodes[this._getNumeric(dialCode)], alreadySelected = $.inArray(this.selectedCountryData.iso2, countryCodes) > -1, // check if the given number contains a NANP area code i.e. the only dialCode that could be extracted was +1 (instead of say +1204) and the actual number's length is >=4
                isNanpAreaCode = dialCode == "+1" && numeric.length >= 4, nanpSelected = this.selectedCountryData.dialCode == "1";
                // only update the flag if:
                // A) NOT (we currently have a NANP flag selected, and the number is a regionlessNanp)
                // AND
                // B) either a matching country is not already selected OR the number contains a NANP area code (ensure the flag is set to the first matching country)
                if (!(nanpSelected && this._isRegionlessNanp(numeric)) && (!alreadySelected || isNanpAreaCode)) {
                    // if using onlyCountries option, countryCodes[0] may be empty, so we must find the first non-empty index
                    for (var j = 0; j < countryCodes.length; j++) {
                        if (countryCodes[j]) {
                            countryCode = countryCodes[j];
                            break;
                        }
                    }
                }
            } else if (number.charAt(0) == "+" && numeric.length) {
                // invalid dial code, so empty
                // Note: use getNumeric here because the number has not been formatted yet, so could contain bad chars
                countryCode = "";
            } else if (!number || number == "+") {
                // empty, or just a plus, so default
                countryCode = this.defaultCountry;
            }
            if (countryCode !== null) {
                return this._setFlag(countryCode);
            }
            return false;
        },
        // check if the given number is a regionless NANP number (expects the number to contain an international dial code)
        _isRegionlessNanp: function(number) {
            var numeric = this._getNumeric(number);
            if (numeric.charAt(0) == "1") {
                var areaCode = numeric.substr(1, 3);
                return $.inArray(areaCode, regionlessNanpNumbers) > -1;
            }
            return false;
        },
        // remove highlighting from other list items and highlight the given item
        _highlightListItem: function(listItem) {
            this.countryListItems.removeClass("highlight");
            listItem.addClass("highlight");
        },
        // find the country data for the given country code
        // the ignoreOnlyCountriesOption is only used during init() while parsing the onlyCountries array
        _getCountryData: function(countryCode, ignoreOnlyCountriesOption, allowFail) {
            var countryList = ignoreOnlyCountriesOption ? allCountries : this.countries;
            for (var i = 0; i < countryList.length; i++) {
                if (countryList[i].iso2 == countryCode) {
                    return countryList[i];
                }
            }
            if (allowFail) {
                return null;
            } else {
                throw new Error("No country data for '" + countryCode + "'");
            }
        },
        // select the given flag, update the placeholder and the active list item
        // Note: called from _setInitialState, _updateFlagFromNumber, _selectListItem, setCountry
        _setFlag: function(countryCode) {
            var prevCountry = this.selectedCountryData.iso2 ? this.selectedCountryData : {};
            // do this first as it will throw an error and stop if countryCode is invalid
            this.selectedCountryData = countryCode ? this._getCountryData(countryCode, false, false) : {};
            // update the defaultCountry - we only need the iso2 from now on, so just store that
            if (this.selectedCountryData.iso2) {
                this.defaultCountry = this.selectedCountryData.iso2;
            }
            this.selectedFlagInner.attr("class", "iti-flag " + countryCode);
            // update the selected country's title attribute
            var title = countryCode ? this.selectedCountryData.name + ": +" + this.selectedCountryData.dialCode : "Unknown";
            this.selectedFlagInner.parent().attr("title", title);
            if (this.options.separateDialCode) {
                var dialCode = this.selectedCountryData.dialCode ? "+" + this.selectedCountryData.dialCode : "", parent = this.telInput.parent();
                if (prevCountry.dialCode) {
                    parent.removeClass("iti-sdc-" + (prevCountry.dialCode.length + 1));
                }
                if (dialCode) {
                    parent.addClass("iti-sdc-" + dialCode.length);
                }
                this.selectedDialCode.text(dialCode);
            }
            // and the input's placeholder
            this._updatePlaceholder();
            // update the active list item
            if (this.options.allowDropdown) {
                this.countryListItems.removeClass("active").attr("aria-selected", "false");
                if (countryCode) {
                    var listItem = this.countryListItems.find(".iti-flag." + countryCode).first().closest(".country");
                    listItem.addClass("active").attr("aria-selected", "true");
                    this.countryList.attr("aria-activedescendant", listItem.attr("id"));
                }
            }
            // return if the flag has changed or not
            return prevCountry.iso2 !== countryCode;
        },
        // update the input placeholder to an example number from the currently selected country
        _updatePlaceholder: function() {
            var shouldSetPlaceholder = this.options.autoPlaceholder === "aggressive" || !this.hadInitialPlaceholder && (this.options.autoPlaceholder === true || this.options.autoPlaceholder === "polite");
            if (window.intlTelInputUtils && shouldSetPlaceholder) {
                var numberType = intlTelInputUtils.numberType[this.options.placeholderNumberType], placeholder = this.selectedCountryData.iso2 ? intlTelInputUtils.getExampleNumber(this.selectedCountryData.iso2, this.options.nationalMode, numberType) : "";
                placeholder = this._beforeSetNumber(placeholder);
                if (typeof this.options.customPlaceholder === "function") {
                    placeholder = this.options.customPlaceholder(placeholder, this.selectedCountryData);
                }
                this.telInput.attr("placeholder", placeholder);
            }
        },
        // called when the user selects a list item from the dropdown
        _selectListItem: function(listItem) {
            // update selected flag and active list item
            var flagChanged = this._setFlag(listItem.attr("data-country-code"));
            this._closeDropdown();
            this._updateDialCode(listItem.attr("data-dial-code"), true);
            // focus the input
            this.telInput.focus();
            // put cursor at end - this fix is required for FF and IE11 (with nationalMode=false i.e. auto inserting dial code), who try to put the cursor at the beginning the first time
            if (this.isGoodBrowser) {
                var len = this.telInput.val().length;
                this.telInput[0].setSelectionRange(len, len);
            }
            if (flagChanged) {
                this._triggerCountryChange();
            }
        },
        // close the dropdown and unbind any listeners
        _closeDropdown: function() {
            this.countryList.addClass("hide");
            this.countryList.attr("aria-expanded", "false");
            // update the arrow
            this.selectedFlagInner.children(".iti-arrow").removeClass("up");
            // unbind key events
            $(document).off(this.ns);
            // unbind click-off-to-close
            $("html").off(this.ns);
            // unbind hover and click listeners
            this.countryList.off(this.ns);
            // remove menu from container
            if (this.options.dropdownContainer) {
                if (!this.isMobile) {
                    $(window).off("scroll" + this.ns);
                }
                this.dropdown.detach();
            }
            this.telInput.trigger("close:countrydropdown");
        },
        // check if an element is visible within it's container, else scroll until it is
        _scrollTo: function(element, middle) {
            var container = this.countryList, containerHeight = container.height(), containerTop = container.offset().top, containerBottom = containerTop + containerHeight, elementHeight = element.outerHeight(), elementTop = element.offset().top, elementBottom = elementTop + elementHeight, newScrollTop = elementTop - containerTop + container.scrollTop(), middleOffset = containerHeight / 2 - elementHeight / 2;
            if (elementTop < containerTop) {
                // scroll up
                if (middle) {
                    newScrollTop -= middleOffset;
                }
                container.scrollTop(newScrollTop);
            } else if (elementBottom > containerBottom) {
                // scroll down
                if (middle) {
                    newScrollTop += middleOffset;
                }
                var heightDifference = containerHeight - elementHeight;
                container.scrollTop(newScrollTop - heightDifference);
            }
        },
        // replace any existing dial code with the new one
        // Note: called from _selectListItem and setCountry
        _updateDialCode: function(newDialCode, hasSelectedListItem) {
            var inputVal = this.telInput.val(), newNumber;
            // save having to pass this every time
            newDialCode = "+" + newDialCode;
            if (inputVal.charAt(0) == "+") {
                // there's a plus so we're dealing with a replacement (doesn't matter if nationalMode or not)
                var prevDialCode = this._getDialCode(inputVal);
                if (prevDialCode) {
                    // current number contains a valid dial code, so replace it
                    newNumber = inputVal.replace(prevDialCode, newDialCode);
                } else {
                    // current number contains an invalid dial code, so ditch it
                    // (no way to determine where the invalid dial code ends and the rest of the number begins)
                    newNumber = newDialCode;
                }
            } else if (this.options.nationalMode || this.options.separateDialCode) {
                // don't do anything
                return;
            } else {
                // nationalMode is disabled
                if (inputVal) {
                    // there is an existing value with no dial code: prefix the new dial code
                    newNumber = newDialCode + inputVal;
                } else if (hasSelectedListItem || !this.options.autoHideDialCode) {
                    // no existing value and either they've just selected a list item, or autoHideDialCode is disabled: insert new dial code
                    newNumber = newDialCode;
                } else {
                    return;
                }
            }
            this.telInput.val(newNumber);
        },
        // try and extract a valid international dial code from a full telephone number
        // Note: returns the raw string inc plus character and any whitespace/dots etc
        _getDialCode: function(number) {
            var dialCode = "";
            // only interested in international numbers (starting with a plus)
            if (number.charAt(0) == "+") {
                var numericChars = "";
                // iterate over chars
                for (var i = 0; i < number.length; i++) {
                    var c = number.charAt(i);
                    // if char is number
                    if ($.isNumeric(c)) {
                        numericChars += c;
                        // if current numericChars make a valid dial code
                        if (this.countryCodes[numericChars]) {
                            // store the actual raw string (useful for matching later)
                            dialCode = number.substr(0, i + 1);
                        }
                        // longest dial code is 4 chars
                        if (numericChars.length == 4) {
                            break;
                        }
                    }
                }
            }
            return dialCode;
        },
        // get the input val, adding the dial code if separateDialCode is enabled
        _getFullNumber: function() {
            var val = $.trim(this.telInput.val()), dialCode = this.selectedCountryData.dialCode, prefix, numericVal = this._getNumeric(val), // normalized means ensure starts with a 1, so we can match against the full dial code
            normalizedVal = numericVal.charAt(0) == "1" ? numericVal : "1" + numericVal;
            if (this.options.separateDialCode) {
                // when using separateDialCode, it is visible so is effectively part of the typed number
                prefix = "+" + dialCode;
            } else if (val && val.charAt(0) != "+" && val.charAt(0) != "1" && dialCode && dialCode.charAt(0) == "1" && dialCode.length == 4 && dialCode != normalizedVal.substr(0, 4)) {
                // ensure national NANP numbers contain the area code
                prefix = dialCode.substr(1);
            } else {
                prefix = "";
            }
            return prefix + val;
        },
        // remove the dial code if separateDialCode is enabled
        _beforeSetNumber: function(number) {
            if (this.options.separateDialCode) {
                var dialCode = this._getDialCode(number);
                if (dialCode) {
                    // US dialCode is "+1", which is what we want
                    // CA dialCode is "+1 123", which is wrong - should be "+1" (as it has multiple area codes)
                    // AS dialCode is "+1 684", which is what we want
                    // Solution: if the country has area codes, then revert to just the dial code
                    if (this.selectedCountryData.areaCodes !== null) {
                        dialCode = "+" + this.selectedCountryData.dialCode;
                    }
                    // a lot of numbers will have a space separating the dial code and the main number, and some NANP numbers will have a hyphen e.g. +1 684-733-1234 - in both cases we want to get rid of it
                    // NOTE: don't just trim all non-numerics as may want to preserve an open parenthesis etc
                    var start = number[dialCode.length] === " " || number[dialCode.length] === "-" ? dialCode.length + 1 : dialCode.length;
                    number = number.substr(start);
                }
            }
            return this._cap(number);
        },
        // trigger the 'countrychange' event
        _triggerCountryChange: function() {
            this.telInput.trigger("countrychange", this.selectedCountryData);
        },
        /**************************
   *  SECRET PUBLIC METHODS
   **************************/
        // this is called when the geoip call returns
        handleAutoCountry: function() {
            if (this.options.initialCountry === "auto") {
                // we must set this even if there is an initial val in the input: in case the initial val is invalid and they delete it - they should see their auto country
                this.defaultCountry = $.fn[pluginName].autoCountry;
                // if there's no initial value in the input, then update the flag
                if (!this.telInput.val()) {
                    this.setCountry(this.defaultCountry);
                }
                this.autoCountryDeferred.resolve();
            }
        },
        // this is called when the utils request completes
        handleUtils: function() {
            // if the request was successful
            if (window.intlTelInputUtils) {
                // if there's an initial value in the input, then format it
                if (this.telInput.val()) {
                    this._updateValFromNumber(this.telInput.val());
                }
                this._updatePlaceholder();
            }
            this.utilsScriptDeferred.resolve();
        },
        /********************
   *  PUBLIC METHODS
   ********************/
        // remove plugin
        destroy: function() {
            if (this.options.allowDropdown) {
                // make sure the dropdown is closed (and unbind listeners)
                this._closeDropdown();
                // click event to open dropdown
                this.selectedFlagInner.parent().off(this.ns);
                // label click hack
                this.telInput.closest("label").off(this.ns);
            }
            // unbind submit event handler on form
            if (this.options.autoHideDialCode) {
                var form = this.telInput.prop("form");
                if (form) {
                    $(form).off(this.ns);
                }
            }
            // unbind all events: key events, and focus/blur events if autoHideDialCode=true
            this.telInput.off(this.ns);
            // remove markup (but leave the original input)
            var container = this.telInput.parent();
            container.before(this.telInput).remove();
        },
        // get the extension from the current number
        getExtension: function() {
            if (window.intlTelInputUtils) {
                return intlTelInputUtils.getExtension(this._getFullNumber(), this.selectedCountryData.iso2);
            }
            return "";
        },
        // format the number to the given format
        getNumber: function(format) {
            if (window.intlTelInputUtils) {
                return intlTelInputUtils.formatNumber(this._getFullNumber(), this.selectedCountryData.iso2, format);
            }
            return "";
        },
        // get the type of the entered number e.g. landline/mobile
        getNumberType: function() {
            if (window.intlTelInputUtils) {
                return intlTelInputUtils.getNumberType(this._getFullNumber(), this.selectedCountryData.iso2);
            }
            return -99;
        },
        // get the country data for the currently selected flag
        getSelectedCountryData: function() {
            return this.selectedCountryData;
        },
        // get the validation error
        getValidationError: function() {
            if (window.intlTelInputUtils) {
                return intlTelInputUtils.getValidationError(this._getFullNumber(), this.selectedCountryData.iso2);
            }
            return -99;
        },
        // validate the input val - assumes the global function isValidNumber (from utilsScript)
        isValidNumber: function() {
            var val = $.trim(this._getFullNumber()), countryCode = this.options.nationalMode ? this.selectedCountryData.iso2 : "";
            return window.intlTelInputUtils ? intlTelInputUtils.isValidNumber(val, countryCode) : null;
        },
        // update the selected flag, and update the input val accordingly
        setCountry: function(countryCode) {
            countryCode = countryCode.toLowerCase();
            // check if already selected
            if (!this.selectedFlagInner.hasClass(countryCode)) {
                this._setFlag(countryCode);
                this._updateDialCode(this.selectedCountryData.dialCode, false);
                this._triggerCountryChange();
            }
        },
        // set the input value and update the flag
        setNumber: function(number) {
            // we must update the flag first, which updates this.selectedCountryData, which is used for formatting the number before displaying it
            var flagChanged = this._updateFlagFromNumber(number);
            this._updateValFromNumber(number);
            if (flagChanged) {
                this._triggerCountryChange();
            }
        },
        // set the placeholder number typ
        setPlaceholderNumberType: function(type) {
            this.options.placeholderNumberType = type;
            this._updatePlaceholder();
        }
    };
    // using https://github.com/jquery-boilerplate/jquery-boilerplate/wiki/Extending-jQuery-Boilerplate
    // (adapted to allow public functions)
    $.fn[pluginName] = function(options) {
        var args = arguments;
        // Is the first parameter an object (options), or was omitted,
        // instantiate a new instance of the plugin.
        if (options === undefined || typeof options === "object") {
            // collect all of the deferred objects for all instances created with this selector
            var deferreds = [];
            this.each(function() {
                if (!$.data(this, "plugin_" + pluginName)) {
                    var instance = new Plugin(this, options);
                    var instanceDeferreds = instance._init();
                    // we now have 2 deffereds: 1 for auto country, 1 for utils script
                    deferreds.push(instanceDeferreds[0]);
                    deferreds.push(instanceDeferreds[1]);
                    $.data(this, "plugin_" + pluginName, instance);
                }
            });
            // return the promise from the "master" deferred object that tracks all the others
            return $.when.apply(null, deferreds);
        } else if (typeof options === "string" && options[0] !== "_") {
            // If the first parameter is a string and it doesn't start
            // with an underscore or "contains" the `init`-function,
            // treat this as a call to a public method.
            // Cache the method call to make it possible to return a value
            var returns;
            this.each(function() {
                var instance = $.data(this, "plugin_" + pluginName);
                // Tests that there's already a plugin-instance
                // and checks that the requested public method exists
                if (instance instanceof Plugin && typeof instance[options] === "function") {
                    // Call the method of our plugin instance,
                    // and pass it the supplied arguments.
                    returns = instance[options].apply(instance, Array.prototype.slice.call(args, 1));
                }
                // Allow instances to be destroyed via the 'destroy' method
                if (options === "destroy") {
                    $.data(this, "plugin_" + pluginName, null);
                }
            });
            // If the earlier cached method gives a value back return the value,
            // otherwise return this to preserve chainability.
            return returns !== undefined ? returns : this;
        }
    };
    /********************
 *  STATIC METHODS
 ********************/
    // get the country data object
    $.fn[pluginName].getCountryData = function() {
        return allCountries;
    };
    // load the utils script
    // (assumes it has not already loaded - we check this before calling this internally)
    // (also assumes that if it is called manually, it will only be once per page)
    $.fn[pluginName].loadUtils = function(path) {
        // 2 options:
        // 1) not already started loading (start)
        // 2) already started loading (do nothing - just wait for loading callback to fire, which will trigger handleUtils on all instances, resolving each of their utilsScriptDeferred objects)
        if (!$.fn[pluginName].startedLoadingUtilsScript) {
            // don't do this twice!
            $.fn[pluginName].startedLoadingUtilsScript = true;
            // dont use $.getScript as it prevents caching
            // return the ajax Deferred object, so manual calls can be chained with .then(callback)
            return $.ajax({
                type: "GET",
                url: path,
                complete: function() {
                    // tell all instances that the utils request is complete
                    $(".intl-tel-input input").intlTelInput("handleUtils");
                },
                dataType: "script",
                cache: true
            });
        }
        return null;
    };
    // default options
    $.fn[pluginName].defaults = defaults;
    // version
    $.fn[pluginName].version = "13.0.2";
    // Array of country objects for the flag dropdown.
    // Here is the criteria for the plugin to support a given country/territory
    // - It has an iso2 code: https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2
    // - It has it's own country calling code (it is not a sub-region of another country): https://en.wikipedia.org/wiki/List_of_country_calling_codes
    // - It has a flag in the region-flags project: https://github.com/behdad/region-flags/tree/gh-pages/png
    // - It is supported by libphonenumber (it must be listed on this page): https://github.com/googlei18n/libphonenumber/blob/master/resources/ShortNumberMetadata.xml
    // Each country array has the following information:
    // [
    //    Country name,
    //    iso2 code,
    //    International dial code,
    //    Order (if >1 country with same dial code),
    //    Area codes
    // ]
    var allCountries = [ [ "Afghanistan (‫افغانستان‬‎)", "af", "93" ], [ "Albania (Shqipëri)", "al", "355" ], [ "Algeria (‫الجزائر‬‎)", "dz", "213" ], [ "American Samoa", "as", "1684" ], [ "Andorra", "ad", "376" ], [ "Angola", "ao", "244" ], [ "Anguilla", "ai", "1264" ], [ "Antigua and Barbuda", "ag", "1268" ], [ "Argentina", "ar", "54" ], [ "Armenia (Հայաստան)", "am", "374" ], [ "Aruba", "aw", "297" ], [ "Australia", "au", "61", 0 ], [ "Austria (Österreich)", "at", "43" ], [ "Azerbaijan (Azərbaycan)", "az", "994" ], [ "Bahamas", "bs", "1242" ], [ "Bahrain (‫البحرين‬‎)", "bh", "973" ], [ "Bangladesh (বাংলাদেশ)", "bd", "880" ], [ "Barbados", "bb", "1246" ], [ "Belarus (Беларусь)", "by", "375" ], [ "Belgium (België)", "be", "32" ], [ "Belize", "bz", "501" ], [ "Benin (Bénin)", "bj", "229" ], [ "Bermuda", "bm", "1441" ], [ "Bhutan (འབྲུག)", "bt", "975" ], [ "Bolivia", "bo", "591" ], [ "Bosnia and Herzegovina (Босна и Херцеговина)", "ba", "387" ], [ "Botswana", "bw", "267" ], [ "Brazil (Brasil)", "br", "55" ], [ "British Indian Ocean Territory", "io", "246" ], [ "British Virgin Islands", "vg", "1284" ], [ "Brunei", "bn", "673" ], [ "Bulgaria (България)", "bg", "359" ], [ "Burkina Faso", "bf", "226" ], [ "Burundi (Uburundi)", "bi", "257" ], [ "Cambodia (កម្ពុជា)", "kh", "855" ], [ "Cameroon (Cameroun)", "cm", "237" ], [ "Canada", "ca", "1", 1, [ "204", "226", "236", "249", "250", "289", "306", "343", "365", "387", "403", "416", "418", "431", "437", "438", "450", "506", "514", "519", "548", "579", "581", "587", "604", "613", "639", "647", "672", "705", "709", "742", "778", "780", "782", "807", "819", "825", "867", "873", "902", "905" ] ], [ "Cape Verde (Kabu Verdi)", "cv", "238" ], [ "Caribbean Netherlands", "bq", "599", 1 ], [ "Cayman Islands", "ky", "1345" ], [ "Central African Republic (République centrafricaine)", "cf", "236" ], [ "Chad (Tchad)", "td", "235" ], [ "Chile", "cl", "56" ], [ "China (中国)", "cn", "86" ], [ "Christmas Island", "cx", "61", 2 ], [ "Cocos (Keeling) Islands", "cc", "61", 1 ], [ "Colombia", "co", "57" ], [ "Comoros (‫جزر القمر‬‎)", "km", "269" ], [ "Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)", "cd", "243" ], [ "Congo (Republic) (Congo-Brazzaville)", "cg", "242" ], [ "Cook Islands", "ck", "682" ], [ "Costa Rica", "cr", "506" ], [ "Côte d’Ivoire", "ci", "225" ], [ "Croatia (Hrvatska)", "hr", "385" ], [ "Cuba", "cu", "53" ], [ "Curaçao", "cw", "599", 0 ], [ "Cyprus (Κύπρος)", "cy", "357" ], [ "Czech Republic (Česká republika)", "cz", "420" ], [ "Denmark (Danmark)", "dk", "45" ], [ "Djibouti", "dj", "253" ], [ "Dominica", "dm", "1767" ], [ "Dominican Republic (República Dominicana)", "do", "1", 2, [ "809", "829", "849" ] ], [ "Ecuador", "ec", "593" ], [ "Egypt (‫مصر‬‎)", "eg", "20" ], [ "El Salvador", "sv", "503" ], [ "Equatorial Guinea (Guinea Ecuatorial)", "gq", "240" ], [ "Eritrea", "er", "291" ], [ "Estonia (Eesti)", "ee", "372" ], [ "Ethiopia", "et", "251" ], [ "Falkland Islands (Islas Malvinas)", "fk", "500" ], [ "Faroe Islands (Føroyar)", "fo", "298" ], [ "Fiji", "fj", "679" ], [ "Finland (Suomi)", "fi", "358", 0 ], [ "France", "fr", "33" ], [ "French Guiana (Guyane française)", "gf", "594" ], [ "French Polynesia (Polynésie française)", "pf", "689" ], [ "Gabon", "ga", "241" ], [ "Gambia", "gm", "220" ], [ "Georgia (საქართველო)", "ge", "995" ], [ "Germany (Deutschland)", "de", "49" ], [ "Ghana (Gaana)", "gh", "233" ], [ "Gibraltar", "gi", "350" ], [ "Greece (Ελλάδα)", "gr", "30" ], [ "Greenland (Kalaallit Nunaat)", "gl", "299" ], [ "Grenada", "gd", "1473" ], [ "Guadeloupe", "gp", "590", 0 ], [ "Guam", "gu", "1671" ], [ "Guatemala", "gt", "502" ], [ "Guernsey", "gg", "44", 1 ], [ "Guinea (Guinée)", "gn", "224" ], [ "Guinea-Bissau (Guiné Bissau)", "gw", "245" ], [ "Guyana", "gy", "592" ], [ "Haiti", "ht", "509" ], [ "Honduras", "hn", "504" ], [ "Hong Kong (香港)", "hk", "852" ], [ "Hungary (Magyarország)", "hu", "36" ], [ "Iceland (Ísland)", "is", "354" ], [ "India (भारत)", "in", "91" ], [ "Indonesia", "id", "62" ], [ "Iran (‫ایران‬‎)", "ir", "98" ], [ "Iraq (‫العراق‬‎)", "iq", "964" ], [ "Ireland", "ie", "353" ], [ "Isle of Man", "im", "44", 2 ], [ "Israel (‫ישראל‬‎)", "il", "972" ], [ "Italy (Italia)", "it", "39", 0 ], [ "Jamaica", "jm", "1", 4, [ "876", "658" ] ], [ "Japan (日本)", "jp", "81" ], [ "Jersey", "je", "44", 3 ], [ "Jordan (‫الأردن‬‎)", "jo", "962" ], [ "Kazakhstan (Казахстан)", "kz", "7", 1 ], [ "Kenya", "ke", "254" ], [ "Kiribati", "ki", "686" ], [ "Kosovo", "xk", "383" ], [ "Kuwait (‫الكويت‬‎)", "kw", "965" ], [ "Kyrgyzstan (Кыргызстан)", "kg", "996" ], [ "Laos (ລາວ)", "la", "856" ], [ "Latvia (Latvija)", "lv", "371" ], [ "Lebanon (‫لبنان‬‎)", "lb", "961" ], [ "Lesotho", "ls", "266" ], [ "Liberia", "lr", "231" ], [ "Libya (‫ليبيا‬‎)", "ly", "218" ], [ "Liechtenstein", "li", "423" ], [ "Lithuania (Lietuva)", "lt", "370" ], [ "Luxembourg", "lu", "352" ], [ "Macau (澳門)", "mo", "853" ], [ "Macedonia (FYROM) (Македонија)", "mk", "389" ], [ "Madagascar (Madagasikara)", "mg", "261" ], [ "Malawi", "mw", "265" ], [ "Malaysia", "my", "60" ], [ "Maldives", "mv", "960" ], [ "Mali", "ml", "223" ], [ "Malta", "mt", "356" ], [ "Marshall Islands", "mh", "692" ], [ "Martinique", "mq", "596" ], [ "Mauritania (‫موريتانيا‬‎)", "mr", "222" ], [ "Mauritius (Moris)", "mu", "230" ], [ "Mayotte", "yt", "262", 1 ], [ "Mexico (México)", "mx", "52" ], [ "Micronesia", "fm", "691" ], [ "Moldova (Republica Moldova)", "md", "373" ], [ "Monaco", "mc", "377" ], [ "Mongolia (Монгол)", "mn", "976" ], [ "Montenegro (Crna Gora)", "me", "382" ], [ "Montserrat", "ms", "1664" ], [ "Morocco (‫المغرب‬‎)", "ma", "212", 0 ], [ "Mozambique (Moçambique)", "mz", "258" ], [ "Myanmar (Burma) (မြန်မာ)", "mm", "95" ], [ "Namibia (Namibië)", "na", "264" ], [ "Nauru", "nr", "674" ], [ "Nepal (नेपाल)", "np", "977" ], [ "Netherlands (Nederland)", "nl", "31" ], [ "New Caledonia (Nouvelle-Calédonie)", "nc", "687" ], [ "New Zealand", "nz", "64" ], [ "Nicaragua", "ni", "505" ], [ "Niger (Nijar)", "ne", "227" ], [ "Nigeria", "ng", "234" ], [ "Niue", "nu", "683" ], [ "Norfolk Island", "nf", "672" ], [ "North Korea (조선 민주주의 인민 공화국)", "kp", "850" ], [ "Northern Mariana Islands", "mp", "1670" ], [ "Norway (Norge)", "no", "47", 0 ], [ "Oman (‫عُمان‬‎)", "om", "968" ], [ "Pakistan (‫پاکستان‬‎)", "pk", "92" ], [ "Palau", "pw", "680" ], [ "Palestine (‫فلسطين‬‎)", "ps", "970" ], [ "Panama (Panamá)", "pa", "507" ], [ "Papua New Guinea", "pg", "675" ], [ "Paraguay", "py", "595" ], [ "Peru (Perú)", "pe", "51" ], [ "Philippines", "ph", "63" ], [ "Poland (Polska)", "pl", "48" ], [ "Portugal", "pt", "351" ], [ "Puerto Rico", "pr", "1", 3, [ "787", "939" ] ], [ "Qatar (‫قطر‬‎)", "qa", "974" ], [ "Réunion (La Réunion)", "re", "262", 0 ], [ "Romania (România)", "ro", "40" ], [ "Russia (Россия)", "ru", "7", 0 ], [ "Rwanda", "rw", "250" ], [ "Saint Barthélemy", "bl", "590", 1 ], [ "Saint Helena", "sh", "290" ], [ "Saint Kitts and Nevis", "kn", "1869" ], [ "Saint Lucia", "lc", "1758" ], [ "Saint Martin (Saint-Martin (partie française))", "mf", "590", 2 ], [ "Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)", "pm", "508" ], [ "Saint Vincent and the Grenadines", "vc", "1784" ], [ "Samoa", "ws", "685" ], [ "San Marino", "sm", "378" ], [ "São Tomé and Príncipe (São Tomé e Príncipe)", "st", "239" ], [ "Saudi Arabia (‫المملكة العربية السعودية‬‎)", "sa", "966" ], [ "Senegal (Sénégal)", "sn", "221" ], [ "Serbia (Србија)", "rs", "381" ], [ "Seychelles", "sc", "248" ], [ "Sierra Leone", "sl", "232" ], [ "Singapore", "sg", "65" ], [ "Sint Maarten", "sx", "1721" ], [ "Slovakia (Slovensko)", "sk", "421" ], [ "Slovenia (Slovenija)", "si", "386" ], [ "Solomon Islands", "sb", "677" ], [ "Somalia (Soomaaliya)", "so", "252" ], [ "South Africa", "za", "27" ], [ "South Korea (대한민국)", "kr", "82" ], [ "South Sudan (‫جنوب السودان‬‎)", "ss", "211" ], [ "Spain (España)", "es", "34" ], [ "Sri Lanka (ශ්‍රී ලංකාව)", "lk", "94" ], [ "Sudan (‫السودان‬‎)", "sd", "249" ], [ "Suriname", "sr", "597" ], [ "Svalbard and Jan Mayen", "sj", "47", 1 ], [ "Swaziland", "sz", "268" ], [ "Sweden (Sverige)", "se", "46" ], [ "Switzerland (Schweiz)", "ch", "41" ], [ "Syria (‫سوريا‬‎)", "sy", "963" ], [ "Taiwan (台灣)", "tw", "886" ], [ "Tajikistan", "tj", "992" ], [ "Tanzania", "tz", "255" ], [ "Thailand (ไทย)", "th", "66" ], [ "Timor-Leste", "tl", "670" ], [ "Togo", "tg", "228" ], [ "Tokelau", "tk", "690" ], [ "Tonga", "to", "676" ], [ "Trinidad and Tobago", "tt", "1868" ], [ "Tunisia (‫تونس‬‎)", "tn", "216" ], [ "Turkey (Türkiye)", "tr", "90" ], [ "Turkmenistan", "tm", "993" ], [ "Turks and Caicos Islands", "tc", "1649" ], [ "Tuvalu", "tv", "688" ], [ "U.S. Virgin Islands", "vi", "1340" ], [ "Uganda", "ug", "256" ], [ "Ukraine (Україна)", "ua", "380" ], [ "United Arab Emirates (‫الإمارات العربية المتحدة‬‎)", "ae", "971" ], [ "United Kingdom", "gb", "44", 0 ], [ "United States", "us", "1", 0 ], [ "Uruguay", "uy", "598" ], [ "Uzbekistan (Oʻzbekiston)", "uz", "998" ], [ "Vanuatu", "vu", "678" ], [ "Vatican City (Città del Vaticano)", "va", "39", 1 ], [ "Venezuela", "ve", "58" ], [ "Vietnam (Việt Nam)", "vn", "84" ], [ "Wallis and Futuna (Wallis-et-Futuna)", "wf", "681" ], [ "Western Sahara (‫الصحراء الغربية‬‎)", "eh", "212", 1 ], [ "Yemen (‫اليمن‬‎)", "ye", "967" ], [ "Zambia", "zm", "260" ], [ "Zimbabwe", "zw", "263" ], [ "Åland Islands", "ax", "358", 1 ] ];
    // loop over all of the countries above
    for (var i = 0; i < allCountries.length; i++) {
        var c = allCountries[i];
        allCountries[i] = {
            name: c[0],
            iso2: c[1],
            dialCode: c[2],
            priority: c[3] || 0,
            areaCodes: c[4] || null
        };
    }
});
(function(){var aa=this;function k(a){return"string"==typeof a}function m(a,b){a=a.split(".");var c=aa;a[0]in c||!c.execScript||c.execScript("var "+a[0]);for(var d;a.length&&(d=a.shift());)a.length||void 0===b?c[d]&&c[d]!==Object.prototype[d]?c=c[d]:c=c[d]={}:c[d]=b}
function n(a,b){function c(){}c.prototype=b.prototype;a.o=b.prototype;a.prototype=new c;a.prototype.constructor=a;a.aa=function(a,c,f){for(var d=Array(arguments.length-2),e=2;e<arguments.length;e++)d[e-2]=arguments[e];return b.prototype[c].apply(a,d)}};var p=Array.prototype.indexOf?function(a,b,c){return Array.prototype.indexOf.call(a,b,c)}:function(a,b,c){c=null==c?0:0>c?Math.max(0,a.length+c):c;if(k(a))return k(b)&&1==b.length?a.indexOf(b,c):-1;for(;c<a.length;c++)if(c in a&&a[c]===b)return c;return-1};function q(a,b){a.sort(b||ba)}function ba(a,b){return a>b?1:a<b?-1:0};function ca(a){var b=[],c=0,d;for(d in a)b[c++]=a[d];return b};function da(a,b){this.a=a;this.h=!!b.i;this.c=b.b;this.m=b.type;this.l=!1;switch(this.c){case ea:case fa:case ha:case ia:case ja:case ka:case la:this.l=!0}this.g=b.defaultValue}var la=1,ka=2,ea=3,fa=4,ha=6,ia=16,ja=18;function ma(a,b){this.c=a;this.a={};for(a=0;a<b.length;a++){var c=b[a];this.a[c.a]=c}}function na(a){a=ca(a.a);q(a,function(a,c){return a.a-c.a});return a};function r(){this.a={};this.g=this.f().a;this.c=this.h=null}r.prototype.has=function(a){return null!=this.a[a.a]};r.prototype.get=function(a,b){return t(this,a.a,b)};r.prototype.set=function(a,b){u(this,a.a,b)};r.prototype.add=function(a,b){v(this,a.a,b)};
function oa(a,b){for(var c=na(a.f()),d=0;d<c.length;d++){var e=c[d],f=e.a;if(null!=b.a[f]){a.c&&delete a.c[e.a];var g=11==e.c||10==e.c;if(e.h){e=w(b,f);for(var h=0;h<e.length;h++)v(a,f,g?e[h].clone():e[h])}else e=x(b,f),g?(g=x(a,f))?oa(g,e):u(a,f,e.clone()):u(a,f,e)}}}r.prototype.clone=function(){var a=new this.constructor;a!=this&&(a.a={},a.c&&(a.c={}),oa(a,this));return a};
function x(a,b){var c=a.a[b];if(null==c)return null;if(a.h){if(!(b in a.c)){var d=a.h,e=a.g[b];if(null!=c)if(e.h){for(var f=[],g=0;g<c.length;g++)f[g]=d.c(e,c[g]);c=f}else c=d.c(e,c);return a.c[b]=c}return a.c[b]}return c}function t(a,b,c){var d=x(a,b);return a.g[b].h?d[c||0]:d}function y(a,b){if(null!=a.a[b])a=t(a,b,void 0);else a:{a=a.g[b];if(void 0===a.g)if(b=a.m,b===Boolean)a.g=!1;else if(b===Number)a.g=0;else if(b===String)a.g=a.l?"0":"";else{a=new b;break a}a=a.g}return a}
function w(a,b){return x(a,b)||[]}function A(a,b){return a.g[b].h?null!=a.a[b]?a.a[b].length:0:null!=a.a[b]?1:0}function u(a,b,c){a.a[b]=c;a.c&&(a.c[b]=c)}function v(a,b,c){a.a[b]||(a.a[b]=[]);a.a[b].push(c);a.c&&delete a.c[b]}function B(a,b){var c=[],d;for(d in b)0!=d&&c.push(new da(d,b[d]));return new ma(a,c)};function C(){}C.prototype.a=function(a){new a.c;throw Error("Unimplemented");};C.prototype.c=function(a,b){if(11==a.c||10==a.c)return b instanceof r?b:this.a(a.m.prototype.f(),b);if(14==a.c)return k(b)&&pa.test(b)&&(a=Number(b),0<a)?a:b;if(!a.l)return b;a=a.m;if(a===String){if("number"==typeof b)return String(b)}else if(a===Number&&k(b)&&("Infinity"===b||"-Infinity"===b||"NaN"===b||pa.test(b)))return Number(b);return b};var pa=/^-?[0-9]+$/;function D(){}n(D,C);D.prototype.a=function(a,b){a=new a.c;a.h=this;a.a=b;a.c={};return a};function E(){}n(E,D);E.prototype.c=function(a,b){return 8==a.c?!!b:C.prototype.c.apply(this,arguments)};E.prototype.a=function(a,b){return E.o.a.call(this,a,b)};function F(a,b){null!=a&&this.a.apply(this,arguments)}F.prototype.c="";F.prototype.set=function(a){this.c=""+a};F.prototype.a=function(a,b,c){this.c+=String(a);if(null!=b)for(var d=1;d<arguments.length;d++)this.c+=arguments[d];return this};F.prototype.toString=function(){return this.c};/*

 Protocol Buffer 2 Copyright 2008 Google Inc.
 All other code copyright its respective owners.
 Copyright (C) 2010 The Libphonenumber Authors

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/
function G(){r.call(this)}n(G,r);var qa=null;function H(){r.call(this)}n(H,r);var ra=null;function I(){r.call(this)}n(I,r);var sa=null;
G.prototype.f=function(){var a=qa;a||(qa=a=B(G,{0:{name:"NumberFormat",j:"i18n.phonenumbers.NumberFormat"},1:{name:"pattern",required:!0,b:9,type:String},2:{name:"format",required:!0,b:9,type:String},3:{name:"leading_digits_pattern",i:!0,b:9,type:String},4:{name:"national_prefix_formatting_rule",b:9,type:String},6:{name:"national_prefix_optional_when_formatting",b:8,defaultValue:!1,type:Boolean},5:{name:"domestic_carrier_code_formatting_rule",b:9,type:String}}));return a};G.f=G.prototype.f;
H.prototype.f=function(){var a=ra;a||(ra=a=B(H,{0:{name:"PhoneNumberDesc",j:"i18n.phonenumbers.PhoneNumberDesc"},2:{name:"national_number_pattern",b:9,type:String},9:{name:"possible_length",i:!0,b:5,type:Number},10:{name:"possible_length_local_only",i:!0,b:5,type:Number},6:{name:"example_number",b:9,type:String}}));return a};H.f=H.prototype.f;
I.prototype.f=function(){var a=sa;a||(sa=a=B(I,{0:{name:"PhoneMetadata",j:"i18n.phonenumbers.PhoneMetadata"},1:{name:"general_desc",b:11,type:H},2:{name:"fixed_line",b:11,type:H},3:{name:"mobile",b:11,type:H},4:{name:"toll_free",b:11,type:H},5:{name:"premium_rate",b:11,type:H},6:{name:"shared_cost",b:11,type:H},7:{name:"personal_number",b:11,type:H},8:{name:"voip",b:11,type:H},21:{name:"pager",b:11,type:H},25:{name:"uan",b:11,type:H},27:{name:"emergency",b:11,type:H},28:{name:"voicemail",b:11,type:H},
29:{name:"short_code",b:11,type:H},30:{name:"standard_rate",b:11,type:H},31:{name:"carrier_specific",b:11,type:H},33:{name:"sms_services",b:11,type:H},24:{name:"no_international_dialling",b:11,type:H},9:{name:"id",required:!0,b:9,type:String},10:{name:"country_code",b:5,type:Number},11:{name:"international_prefix",b:9,type:String},17:{name:"preferred_international_prefix",b:9,type:String},12:{name:"national_prefix",b:9,type:String},13:{name:"preferred_extn_prefix",b:9,type:String},15:{name:"national_prefix_for_parsing",
b:9,type:String},16:{name:"national_prefix_transform_rule",b:9,type:String},18:{name:"same_mobile_and_fixed_line_pattern",b:8,defaultValue:!1,type:Boolean},19:{name:"number_format",i:!0,b:11,type:G},20:{name:"intl_number_format",i:!0,b:11,type:G},22:{name:"main_country_for_code",b:8,defaultValue:!1,type:Boolean},23:{name:"leading_digits",b:9,type:String},26:{name:"leading_zero_possible",b:8,defaultValue:!1,type:Boolean}}));return a};I.f=I.prototype.f;function J(){r.call(this)}n(J,r);var ta=null,ua={$:0,w:1,v:5,u:10,s:20};
J.prototype.f=function(){var a=ta;a||(ta=a=B(J,{0:{name:"PhoneNumber",j:"i18n.phonenumbers.PhoneNumber"},1:{name:"country_code",required:!0,b:5,type:Number},2:{name:"national_number",required:!0,b:4,type:Number},3:{name:"extension",b:9,type:String},4:{name:"italian_leading_zero",b:8,type:Boolean},8:{name:"number_of_leading_zeros",b:5,defaultValue:1,type:Number},5:{name:"raw_input",b:9,type:String},6:{name:"country_code_source",b:14,defaultValue:0,type:ua},7:{name:"preferred_domestic_carrier_code",
b:9,type:String}}));return a};J.ctor=J;J.ctor.f=J.prototype.f;/*

 Copyright (C) 2010 The Libphonenumber Authors

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/
var K={1:"US AG AI AS BB BM BS CA DM DO GD GU JM KN KY LC MP MS PR SX TC TT VC VG VI".split(" "),7:["RU","KZ"],20:["EG"],27:["ZA"],30:["GR"],31:["NL"],32:["BE"],33:["FR"],34:["ES"],36:["HU"],39:["IT","VA"],40:["RO"],41:["CH"],43:["AT"],44:["GB","GG","IM","JE"],45:["DK"],46:["SE"],47:["NO","SJ"],48:["PL"],49:["DE"],51:["PE"],52:["MX"],53:["CU"],54:["AR"],55:["BR"],56:["CL"],57:["CO"],58:["VE"],60:["MY"],61:["AU","CC","CX"],62:["ID"],63:["PH"],64:["NZ"],65:["SG"],66:["TH"],81:["JP"],82:["KR"],84:["VN"],
86:["CN"],90:["TR"],91:["IN"],92:["PK"],93:["AF"],94:["LK"],95:["MM"],98:["IR"],211:["SS"],212:["MA","EH"],213:["DZ"],216:["TN"],218:["LY"],220:["GM"],221:["SN"],222:["MR"],223:["ML"],224:["GN"],225:["CI"],226:["BF"],227:["NE"],228:["TG"],229:["BJ"],230:["MU"],231:["LR"],232:["SL"],233:["GH"],234:["NG"],235:["TD"],236:["CF"],237:["CM"],238:["CV"],239:["ST"],240:["GQ"],241:["GA"],242:["CG"],243:["CD"],244:["AO"],245:["GW"],246:["IO"],247:["AC"],248:["SC"],249:["SD"],250:["RW"],251:["ET"],252:["SO"],
253:["DJ"],254:["KE"],255:["TZ"],256:["UG"],257:["BI"],258:["MZ"],260:["ZM"],261:["MG"],262:["RE","YT"],263:["ZW"],264:["NA"],265:["MW"],266:["LS"],267:["BW"],268:["SZ"],269:["KM"],290:["SH","TA"],291:["ER"],297:["AW"],298:["FO"],299:["GL"],350:["GI"],351:["PT"],352:["LU"],353:["IE"],354:["IS"],355:["AL"],356:["MT"],357:["CY"],358:["FI","AX"],359:["BG"],370:["LT"],371:["LV"],372:["EE"],373:["MD"],374:["AM"],375:["BY"],376:["AD"],377:["MC"],378:["SM"],380:["UA"],381:["RS"],382:["ME"],383:["XK"],385:["HR"],
386:["SI"],387:["BA"],389:["MK"],420:["CZ"],421:["SK"],423:["LI"],500:["FK"],501:["BZ"],502:["GT"],503:["SV"],504:["HN"],505:["NI"],506:["CR"],507:["PA"],508:["PM"],509:["HT"],590:["GP","BL","MF"],591:["BO"],592:["GY"],593:["EC"],594:["GF"],595:["PY"],596:["MQ"],597:["SR"],598:["UY"],599:["CW","BQ"],670:["TL"],672:["NF"],673:["BN"],674:["NR"],675:["PG"],676:["TO"],677:["SB"],678:["VU"],679:["FJ"],680:["PW"],681:["WF"],682:["CK"],683:["NU"],685:["WS"],686:["KI"],687:["NC"],688:["TV"],689:["PF"],690:["TK"],
691:["FM"],692:["MH"],800:["001"],808:["001"],850:["KP"],852:["HK"],853:["MO"],855:["KH"],856:["LA"],870:["001"],878:["001"],880:["BD"],881:["001"],882:["001"],883:["001"],886:["TW"],888:["001"],960:["MV"],961:["LB"],962:["JO"],963:["SY"],964:["IQ"],965:["KW"],966:["SA"],967:["YE"],968:["OM"],970:["PS"],971:["AE"],972:["IL"],973:["BH"],974:["QA"],975:["BT"],976:["MN"],977:["NP"],979:["001"],992:["TJ"],993:["TM"],994:["AZ"],995:["GE"],996:["KG"],998:["UZ"]},wa={AC:[,[,,"(?:[01589]\\d|[46])\\d{4}",
,,,,,,[5,6]],[,,"6[2-467]\\d{3}",,,,"62889",,,[5]],[,,"4\\d{4}",,,,"40123",,,[5]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"AC",247,"00",,,,,,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"[01589]\\d{5}",,,,"542011",,,[6]],,,[,,,,,,,,,[-1]]],AD:[,[,,"(?:1|6\\d)\\d{7}|[136-9]\\d{5}",,,,,,,[6,8,9]],[,,"[78]\\d{5}",,,,"712345",,,[6]],[,,"(?:3\\d|6(?:[0-8]|9(?:0\\d{2})?))\\d{4}",,,,"312345",,,[6,9]],[,,"180[02]\\d{4}",,,,"18001234",,,[8]],[,,"[19]\\d{5}",,,,"912345",
,,[6]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"AD",376,"00",,,,,,,,[[,"(\\d{3})(\\d{3})","$1 $2",["[136-9]"]],[,"(\\d{4})(\\d{4})","$1 $2",["180","180[02]"]],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["690"]]],,[,,,,,,,,,[-1]],,,[,,"1800\\d{4}",,,,,,,[8]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AE:[,[,,"(?:[4-7]\\d|9[0-689])\\d{7}|800\\d{2,9}|[2-4679]\\d{7}",,,,,,,[5,6,7,8,9,10,11,12]],[,,"[2-4679][2-8]\\d{6}",,,,"22345678",,,[8],[7]],[,,"5[024-68]\\d{7}",,,,"501234567",,,[9]],[,,"400\\d{6}|800\\d{2,9}",
,,,"800123456"],[,,"900[02]\\d{5}",,,,"900234567",,,[9]],[,,"700[05]\\d{5}",,,,"700012345",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"AE",971,"00","0",,,"0",,,,[[,"([2-4679])(\\d{3})(\\d{4})","$1 $2 $3",["[2-4679][2-8]"],"0$1"],[,"(5\\d)(\\d{3})(\\d{4})","$1 $2 $3",["5"],"0$1"],[,"([479]00)(\\d)(\\d{5})","$1 $2 $3",["[479]00"],"$1"],[,"([68]00)(\\d{2,9})","$1 $2",["[68]00"],"$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"600[25]\\d{5}",,,,"600212345",,,[9]],,,[,,,,,,,,,[-1]]],AF:[,[,,"[2-7]\\d{8}",,,,
,,,[9],[7]],[,,"(?:[25][0-8]|[34][0-4]|6[0-5])[2-9]\\d{6}",,,,"234567890",,,,[7]],[,,"7(?:[014-9]\\d|2[89]|3[01])\\d{6}",,,,"701234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"AF",93,"00","0",,,"0",,,,[[,"([2-7]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["[2-7]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AG:[,[,,"(?:268|[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"268(?:4(?:6[0-38]|84)|56[0-2])\\d{4}",,,,"2684601234",,,,[7]],[,,"268(?:464|7(?:1[3-9]|2\\d|3[246]|64|[78][0-689]))\\d{4}",
,,,"2684641234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,"26848[01]\\d{4}",,,,"2684801234",,,,[7]],"AG",1,"011","1",,,"1",,,,,,[,,"26840[69]\\d{4}",,,,"2684061234",,,,[7]],,"268",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AI:[,[,,"(?:264|[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"2644(?:6[12]|9[78])\\d{4}",,,,"2644612345",,,,[7]],[,,"264(?:235|476|5(?:3[6-9]|8[1-4])|7(?:29|72))\\d{4}",
,,,"2642351234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"AI",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"264",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AL:[,[,,"(?:(?:[2-58]|6\\d)\\d\\d|700)\\d{5}|(?:8\\d{2,3}|900)\\d{3}",,,,,,,[6,7,8,9],[5]],[,,"(?:[2358](?:[16-9]\\d[2-9]|[2-5][2-9]\\d)|4(?:[2-57-9][2-9]\\d|6\\d{2}))\\d{4}",,,,"22345678",
,,[8],[5,6,7]],[,,"6(?:[689][2-9]|7[2-6])\\d{6}",,,,"662123456",,,[9]],[,,"800\\d{4}",,,,"8001234",,,[7]],[,,"900[1-9]\\d{2}",,,,"900123",,,[6]],[,,"808[1-9]\\d{2}",,,,"808123",,,[6]],[,,"700[2-9]\\d{4}",,,,"70021234",,,[8]],[,,,,,,,,,[-1]],"AL",355,"00","0",,,"0",,,,[[,"(4)(\\d{3})(\\d{4})","$1 $2 $3",["4[0-6]"],"0$1"],[,"(6\\d)(\\d{3})(\\d{4})","$1 $2 $3",["6"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["[2358][2-5]|4[7-9]"],"0$1"],[,"(\\d{3})(\\d{3,5})","$1 $2",["[235][16-9]|[79]|8[016-9]"],
"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AM:[,[,,"(?:[1-489]\\d|55|60|77)\\d{6}",,,,,,,[8],[5,6]],[,,"(?:1[0-2]\\d|2(?:2[2-46]|3[1-8]|4[2-69]|5[2-7]|6[1-9]|8[1-7])|3[12]2|47\\d)\\d{5}",,,,"10123456",,,,[5,6]],[,,"(?:4[1349]|55|77|88|9[13-9])\\d{6}",,,,"77123456"],[,,"800\\d{5}",,,,"80012345"],[,,"90[016]\\d{5}",,,,"90012345"],[,,"80[1-4]\\d{5}",,,,"80112345"],[,,,,,,,,,[-1]],[,,"60(?:2[78]|3[5-9]|4[02-9]|5[0-46-9]|[6-8]\\d|90)\\d{4}",,,,"60271234"],"AM",374,"00",
"0",,,"0",,,,[[,"(\\d{2})(\\d{6})","$1 $2",["1|47"],"(0$1)"],[,"(\\d{2})(\\d{6})","$1 $2",["4[1349]|[5-7]|88|9[1-9]"],"0$1"],[,"(\\d{3})(\\d{5})","$1 $2",["[23]"],"(0$1)"],[,"(\\d{3})(\\d{2})(\\d{3})","$1 $2 $3",["8|90"],"0 $1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AO:[,[,,"[29]\\d{8}",,,,,,,[9]],[,,"2\\d(?:[26-9]\\d|\\d[26-9])\\d{5}",,,,"222123456"],[,,"9[1-49]\\d{7}",,,,"923123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],
"AO",244,"00",,,,,,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AR:[,[,,"(?:11|(?:[2368]|9\\d)\\d)\\d{8}",,,,,,,[10,11],[6,7,8]],[,,"11\\d{8}|(?:2(?:2(?:[013]\\d|2[13-79]|4[1-6]|5[2457]|6[124-8]|7[1-4]|8[13-6]|9[1267])|3(?:[07]\\d|1[467]|2[03-6]|3[13-8]|[49][2-6]|5[2-8]|6[013-9])|4(?:7[3-8]|9\\d)|6(?:[01346]\\d|2[24-6]|5[15-8])|80\\d|9(?:[012789]\\d|3[1-6]|4[02-9]|5[234]|6[2-46]))|3(?:3(?:2[79]|6\\d|8[2578])|4(?:0[0124-9]|[1-357]\\d|4[24-7]|6[02-9]|8[0-79]|9[1236-8])|5(?:[138]\\d|2[1245]|4[1-9]|6[2-4]|7[1-6])|6[24]\\d|7(?:[069]\\d|1[1568]|2[013-9]|3[145]|4[0-35-9]|5[14-8]|7[2-57]|8[0-24-9])|8(?:[01578]\\d|2[15-7]|3[0-24-9]|4[13-6]|6[1-357-9]|9[124]))|670\\d)\\d{6}",
,,,"1123456789",,,[10],[6,7,8]],[,,"675\\d{7}|9(?:11[2-9]\\d{7}|(?:2(?:2[013]|3[067]|49|6[01346]|80|9[147-9])|3(?:36|4[12358]|5[138]|6[24]|7[069]|8[013578]))[2-9]\\d{6}|\\d{4}[2-9]\\d{5})",,,,"91123456789",,,,[6,7,8]],[,,"800\\d{7}",,,,"8001234567",,,[10]],[,,"60[04579]\\d{7}",,,,"6001234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"AR",54,"00","0",,,"0?(?:(11|2(?:2(?:02?|[13]|2[13-79]|4[1-6]|5[2457]|6[124-8]|7[1-4]|8[13-6]|9[1267])|3(?:02?|1[467]|2[03-6]|3[13-8]|[49][2-6]|5[2-8]|[67])|4(?:7[3-578]|9)|6(?:[0136]|2[24-6]|4[6-8]?|5[15-8])|80|9(?:0[1-3]|[19]|2\\d|3[1-6]|4[02568]?|5[2-4]|6[2-46]|72?|8[23]?))|3(?:3(?:2[79]|6|8[2578])|4(?:0[0-24-9]|[12]|3[5-8]?|4[24-7]|5[4-68]?|6[02-9]|7[126]|8[2379]?|9[1-36-8])|5(?:1|2[1245]|3[237]?|4[1-46-9]|6[2-4]|7[1-6]|8[2-5]?)|6[24]|7(?:[069]|1[1568]|2[15]|3[145]|4[13]|5[14-8]|7[2-57]|8[126])|8(?:[01]|2[15-7]|3[2578]?|4[13-6]|5[4-8]?|6[1-357-9]|7[36-8]?|8[5-8]?|9[124])))?15)?",
"9$1",,,[[,"([68]\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["[68]"],"0$1"],[,"(\\d{2})(\\d{4})","$1-$2",["[2-9]"],"$1"],[,"(\\d{3})(\\d{4})","$1-$2",["[2-9]"],"$1"],[,"(\\d{4})(\\d{4})","$1-$2",["[2-9]"],"$1"],[,"(9)(11)(\\d{4})(\\d{4})","$2 15-$3-$4",["911"],"0$1"],[,"(9)(\\d{3})(\\d{3})(\\d{4})","$2 15-$3-$4",["9(?:2[2-4689]|3[3-8])","9(?:2(?:2[013]|3[067]|49|6[01346]|8|9[147-9])|3(?:36|4[1-358]|5[138]|6|7[069]|8[013578]))","9(?:2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3[4-6]|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45])))",
"9(?:2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3(?:4|5[014]|6[1-39])|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45])))"],"0$1"],[,"(9)(\\d{4})(\\d{2})(\\d{4})","$2 15-$3-$4",["9[23]"],"0$1"],[,"(11)(\\d{4})(\\d{4})","$1 $2-$3",["11"],"0$1",,1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2-$3",["2(?:2[013]|3[067]|49|6[01346]|8|9[147-9])|3(?:36|4[1-358]|5[138]|6|7[069]|8[013578])","2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3[4-6]|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45]))",
"2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3(?:4|5[014]|6[1-39])|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45]))"],"0$1",,1],[,"(\\d{4})(\\d{2})(\\d{4})","$1 $2-$3",["[23]"],"0$1",,1],[,"(\\d{3})","$1",["1[0-2]|911"],"$1"]],[[,"([68]\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["[68]"],"0$1"],[,"(9)(11)(\\d{4})(\\d{4})","$1 $2 $3-$4",["911"]],[,"(9)(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3-$4",["9(?:2[2-4689]|3[3-8])","9(?:2(?:2[013]|3[067]|49|6[01346]|8|9[147-9])|3(?:36|4[1-358]|5[138]|6|7[069]|8[013578]))",
"9(?:2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3[4-6]|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45])))","9(?:2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3(?:4|5[014]|6[1-39])|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45])))"]],[,"(9)(\\d{4})(\\d{2})(\\d{4})","$1 $2 $3-$4",["9[23]"]],[,"(11)(\\d{4})(\\d{4})","$1 $2-$3",["11"],"0$1",
,1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2-$3",["2(?:2[013]|3[067]|49|6[01346]|8|9[147-9])|3(?:36|4[1-358]|5[138]|6|7[069]|8[013578])","2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3[4-6]|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45]))","2(?:2(?:0[013-9]|[13])|3(?:0[013-9]|[67])|49|6(?:[0136]|4[0-59])|8|9(?:[19]|44|7[013-9]|8[14]))|3(?:36|4(?:[12]|3(?:4|5[014]|6[1-39])|[58]4)|5(?:1|3[0-24-689]|8[46])|6|7[069]|8(?:[01]|34|[578][45]))"],
"0$1",,1],[,"(\\d{4})(\\d{2})(\\d{4})","$1 $2-$3",["[23]"],"0$1",,1]],[,,,,,,,,,[-1]],,,[,,"810\\d{7}",,,,,,,[10]],[,,"810\\d{7}",,,,"8101234567",,,[10]],,,[,,,,,,,,,[-1]]],AS:[,[,,"(?:[58]\\d\\d|684|900)\\d{7}",,,,,,,[10],[7]],[,,"6846(?:22|33|44|55|77|88|9[19])\\d{4}",,,,"6846221234",,,,[7]],[,,"684(?:2(?:5[2468]|72)|7(?:3[13]|70))\\d{4}",,,,"6847331234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",
,,,"5002345678"],[,,,,,,,,,[-1]],"AS",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"684",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AT:[,[,,"[1-35-9]\\d{8,12}|4(?:[0-24-9]\\d{4,11}|3(?:[05]\\d{3,10}|[2-467]\\d{3,4}|8\\d{3,6}|9\\d{3,7}))|[1-35-8]\\d{7}|[1-35-7]\\d{5,6}|[15]\\d{4}|1\\d{3}",,,,,,,[4,5,6,7,8,9,10,11,12,13],[3]],[,,"1\\d{3,12}|(?:2(?:1[467]|2[13-8]|5[2357]|6[1-46-8]|7[1-8]|8[124-7]|9[1458])|3(?:1[1-8]|3[23568]|4[5-7]|5[1378]|6[1-38]|8[3-68])|4(?:2[1-8]|35|63|7[1368]|8[2457])|5(?:12|2[1-8]|3[357]|4[147]|5[12578]|6[37])|6(?:13|2[1-47]|4[1-35-8]|5[468]|62)|7(?:2[1-8]|3[25]|4[13478]|5[68]|6[16-8]|7[1-6]|9[45]))\\d{3,10}",
,,,"1234567890",,,,[3]],[,,"6(?:5[0-3579]|6[013-9]|[7-9]\\d)\\d{4,10}",,,,"664123456",,,[7,8,9,10,11,12,13]],[,,"800\\d{6,10}",,,,"800123456",,,[9,10,11,12,13]],[,,"9(?:0[01]|3[019])\\d{6,10}",,,,"900123456",,,[9,10,11,12,13]],[,,"8(?:10\\d|2(?:[01]\\d|8\\d?))\\d{5,9}",,,,"810123456",,,[8,9,10,11,12,13]],[,,,,,,,,,[-1]],[,,"5(?:(?:0[1-9]|17)\\d{2,10}|[79]\\d{3,11})|7[28]0\\d{6,10}",,,,"780123456",,,[5,6,7,8,9,10,11,12,13]],"AT",43,"00","0",,,"0",,,,[[,"(116\\d{3})","$1",["116"],"$1"],[,"(1)(\\d{3,12})",
"$1 $2",["1"],"0$1"],[,"(5\\d)(\\d{3,5})","$1 $2",["5[079]"],"0$1"],[,"(5\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["5[079]"],"0$1"],[,"(5\\d)(\\d{4})(\\d{4,7})","$1 $2 $3",["5[079]"],"0$1"],[,"(\\d{3})(\\d{3,10})","$1 $2",["(?:31|4)6|51|6(?:5[0-3579]|[6-9])|7(?:[28]0|32)|[89]"],"0$1"],[,"(\\d{3})(\\d{2})","$1 $2",["517"],"0$1"],[,"(\\d{4})(\\d{3,9})","$1 $2",["2|3(?:1[1-578]|[3-8])|4[2378]|5[2-6]|6(?:[12]|4[1-9]|5[468])|7(?:[24][1-8]|35|[5-79])"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],
,,[,,,,,,,,,[-1]]],AU:[,[,,"1\\d{4,9}|[2-578]\\d{8}",,,,,,,[5,6,7,8,9,10]],[,,"[237]\\d{8}|8(?:51(?:0(?:0[03-9]|[1247]\\d|3[2-9]|5[0-8]|6[1-9]|8[0-6])|1(?:1[69]|[23]\\d|4[0-4]))|[6-8]\\d{4}|9(?:[02-9]\\d{3}|1(?:[0-57-9]\\d{2}|6[0135-9]\\d)))\\d{3}",,,,"212345678",,,[9],[8]],[,,"14(?:5\\d|71)\\d{5}|4(?:[0-3]\\d|4[047-9]|5[0-25-9]|6[6-9]|7[02-9]|8[0-2457-9]|9[017-9])\\d{6}",,,,"412345678",,,[9]],[,,"180(?:0\\d{3}|2)\\d{3}",,,,"1800123456",,,[7,10]],[,,"19(?:0[0126]\\d|[679])\\d{5}",,,,"1900123456",
,,[8,10]],[,,"13(?:00\\d{3}|45[0-4]|\\d)\\d{3}",,,,"1300123456",,,[6,8,10]],[,,"500\\d{6}",,,,"500123456",,,[9]],[,,"550\\d{6}",,,,"550123456",,,[9]],"AU",61,"(?:14(?:1[14]|34|4[17]|[56]6|7[47]|88)0011)|001[14-689]","0",,,"0",,"0011",,[[,"([2378])(\\d{4})(\\d{4})","$1 $2 $3",["[2378]"],"(0$1)"],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["14|[45]"],"0$1"],[,"(16)(\\d{3,4})","$1 $2",["16"],"0$1"],[,"(16)(\\d{3})(\\d{2,4})","$1 $2 $3",["16"],"0$1"],[,"(1[389]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["1[389]0",
"1(?:[38]0|9)0"]],[,"(180)(2\\d{3})","$1 $2",["180","1802"]],[,"(19\\d)(\\d{3})","$1 $2",["19[13]"]],[,"(19\\d{2})(\\d{4})","$1 $2",["19[679]"]],[,"(13)(\\d{2})(\\d{2})","$1 $2 $3",["13[1-9]"]]],,[,,"16\\d{3,7}",,,,"1612345",,,[5,6,7,8,9]],1,,[,,"1(?:3(?:00\\d{3}|45[0-4]|\\d)\\d{3}|80(?:0\\d{6}|2\\d{3}))",,,,,,,[6,7,8,10]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AW:[,[,,"(?:[25-79]\\d\\d|800)\\d{4}",,,,,,,[7]],[,,"5(?:2\\d|8[1-9])\\d{4}",,,,"5212345"],[,,"(?:290|5[69]\\d|6(?:[03]0|22|4[0-2]|[69]\\d)|7(?:[34]\\d|7[07])|9(?:6[45]|9[4-8]))\\d{4}",
,,,"5601234"],[,,"800\\d{4}",,,,"8001234"],[,,"900\\d{4}",,,,"9001234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"28\\d{5}|501\\d{4}",,,,"5011234"],"AW",297,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],AX:[,[,,"1\\d{5,11}|(?:[27]|4\\d)\\d{4,9}|[356]0\\d{6,8}|800\\d{4,7}|[35]0\\d{4,5}",,,,,,,[5,6,7,8,9,10,11,12]],[,,"18[1-8]\\d{3,9}",,,,"181234567",,,[6,7,8,9,10,11,12]],[,,"4\\d{5,10}|50\\d{4,8}",,,,"412345678",,,[6,7,8,9,10,11]],[,,"800\\d{4,7}",
,,,"8001234567",,,[7,8,9,10]],[,,"[67]00\\d{5,6}",,,,"600123456",,,[8,9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"AX",358,"00|99(?:[01469]|5(?:11|3[23]|41|5[59]|77|88|9[09]))","0",,,"0",,"00",,,,[,,,,,,,,,[-1]],,,[,,"[13]00\\d{3,7}|2(?:0(?:0\\d{3,7}|2[023]\\d{1,6}|9[89]\\d{1,6}))|60(?:[12]\\d{5,6}|6\\d{7})|7(?:1\\d{7}|3\\d{8}|5[03-9]\\d{3,7})",,,,,,,[5,6,7,8,9,10]],[,,"[13]0\\d{4,8}|2(?:0(?:[016-8]\\d{3,7}|[2-59]\\d{2,7})|9\\d{4,8})|60(?:[12]\\d{5,6}|6\\d{7})|7(?:1\\d{7}|3\\d{8}|5[03-9]\\d{2,7})",
,,,"10112345",,,[5,6,7,8,9,10]],,,[,,,,,,,,,[-1]]],AZ:[,[,,"(?:(?:(?:[12457]\\d|60|88)\\d|365)\\d{3}|900200)\\d{3}",,,,,,,[9],[7]],[,,"(?:1[28]\\d{3}|2(?:02|1[24]|2[2-4]|33|[45]2|6[23])\\d{2}|365(?:[0-46-9]\\d|5[0-35-9]))\\d{4}",,,,"123123456",,,,[7]],[,,"(?:36554|(?:4[04]|5[015]|60|7[07])\\d{3})\\d{4}",,,,"401234567"],[,,"88\\d{7}",,,,"881234567"],[,,"900200\\d{3}",,,,"900200123"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"AZ",994,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",
["1[28]|2(?:[0-36]|[45]2)|365"],"(0$1)"],[,"(\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[4-8]"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["9"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BA:[,[,,"(?:[3589]\\d|49|6\\d\\d?|70)\\d{6}",,,,,,,[8,9],[6]],[,,"(?:3(?:[05679][2-9]|1[4579]|[23][24-9]|4[2-4689]|8[2457-9])|49[2-579]|5(?:0[2-49]|[13][2-9]|[268][2-4679]|4[4689]|5[2-79]|7[2-69]|9[2-4689]))\\d{5}",,,,"30212345",,,[8],[6]],[,,"6(?:0(?:3\\d|40)|[1-356]\\d|44[0-6]|71[137])\\d{5}",
,,,"61123456"],[,,"8[08]\\d{6}",,,,"80123456",,,[8]],[,,"9[0246]\\d{6}",,,,"90123456",,,[8]],[,,"8[12]\\d{6}",,,,"82123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BA",387,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2-$3",["[3-5]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["6[1-356]|[7-9]"],"0$1"],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3 $4",["6[047]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"70(?:3[0146]|[56]0)\\d{4}",,,,"70341234",,,[8]],,,[,,,,,,,,,[-1]]],BB:[,[,,"(?:246|[58]\\d\\d|900)\\d{7}",
,,,,,,[10],[7]],[,,"246(?:2(?:2[78]|7[0-4])|4(?:1[024-6]|2\\d|3[2-9])|5(?:20|[34]\\d|54|7[1-3])|6(?:2\\d|38)|7(?:37|57)|9(?:1[89]|63))\\d{4}",,,,"2464123456",,,,[7]],[,,"246(?:2(?:[356]\\d|4[0-57-9]|8[0-79])|45\\d|69[5-7]|8(?:[2-5]\\d|83))\\d{4}",,,,"2462501234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}|246976\\d{4}",,,,"9002123456",,,,[7]],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,"24631\\d{5}",,,,"2463101234",,,,
[7]],"BB",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"246",[,,,,,,,,,[-1]],[,,"246(?:292|367|4(?:1[7-9]|3[01]|44|67)|736)\\d{4}",,,,"2464301234",,,,[7]],,,[,,,,,,,,,[-1]]],BD:[,[,,"[13469]\\d{9}|8[0-79]\\d{7,8}|[2-7]\\d{8}|[2-9]\\d{7}|[3-689]\\d{6}|[57-9]\\d{5}",,,,,,,[6,7,8,9,10]],[,,"2(?:[45]\\d{3}|7(?:1[0-267]|2[0-289]|3[0-29]|4[01]|5[1-3]|6[013]|7[0178]|91)|8(?:0[125]|[139][1-6]|2[0157-9]|41|6[1-35]|7[1-5]|8[1-8]|90)|9(?:0[0-2]|1[0-4]|2[568]|3[3-6]|5[5-7]|6[0167]|7[15]|8[0146-9]))\\d{4}|3(?:12?[5-7]\\d{2}|0(?:2(?:[025-79]\\d|[348]\\d{1,2})|3(?:[2-4]\\d|[56]\\d?))|2(?:1\\d{2}|2(?:[12]\\d|[35]\\d{1,2}|4\\d?))|3(?:1\\d{2}|2(?:[2356]\\d|4\\d{1,2}))|4(?:1\\d{2}|2(?:2\\d{1,2}|[47]|5\\d{2}))|5(?:1\\d{2}|29)|[67]1\\d{2}|8(?:1\\d{2}|2(?:2\\d{2}|3|4\\d)))\\d{3}|4(?:0(?:2(?:[09]\\d|7)|33\\d{2})|1\\d{3}|2(?:1\\d{2}|2(?:[25]\\d?|[348]\\d|[67]\\d{1,2}))|3(?:1\\d{2}(?:\\d{2})?|2(?:[045]\\d|[236-9]\\d{1,2})|32\\d{2})|4(?:[18]\\d{2}|2(?:[2-46]\\d{2}|3)|5[25]\\d{2})|5(?:1\\d{2}|2(?:3\\d|5))|6(?:[18]\\d{2}|2(?:3(?:\\d{2})?|[46]\\d{1,2}|5\\d{2}|7\\d)|5(?:3\\d?|4\\d|[57]\\d{1,2}|6\\d{2}|8))|71\\d{2}|8(?:[18]\\d{2}|23\\d{2}|54\\d{2})|9(?:[18]\\d{2}|2[2-5]\\d{2}|53\\d{1,2}))\\d{3}|5(?:02[03489]\\d{2}|1\\d{2}|2(?:1\\d{2}|2(?:2(?:\\d{2})?|[457]\\d{2}))|3(?:1\\d{2}|2(?:[37](?:\\d{2})?|[569]\\d{2}))|4(?:1\\d{2}|2[46]\\d{2})|5(?:1\\d{2}|26\\d{1,2})|6(?:[18]\\d{2}|2|53\\d{2})|7(?:1|24)\\d{2}|8(?:1|26)\\d{2}|91\\d{2})\\d{3}|6(?:0(?:1\\d{2}|2(?:3\\d{2}|4\\d{1,2}))|2(?:2[2-5]\\d{2}|5(?:[3-5]\\d{2}|7)|8\\d{2})|3(?:1|2[3478])\\d{2}|4(?:1|2[34])\\d{2}|5(?:1|2[47])\\d{2}|6(?:[18]\\d{2}|6(?:2(?:2\\d|[34]\\d{2})|5(?:[24]\\d{2}|3\\d|5\\d{1,2})))|72[2-5]\\d{2}|8(?:1\\d{2}|2[2-5]\\d{2})|9(?:1\\d{2}|2[2-6]\\d{2}))\\d{3}|7(?:(?:02|[3-589]1|6[12]|72[24])\\d{2}|21\\d{3}|32)\\d{3}|8(?:(?:4[12]|[5-7]2|1\\d?)|(?:0|3[12]|[5-7]1|217)\\d)\\d{4}|9(?:[35]1|(?:[024]2|81)\\d|(?:1|[24]1)\\d{2})\\d{3}",
,,,"27111234",,,[6,7,8,9]],[,,"(?:1[13-9]\\d|(?:3[78]|44)[02-9]|6(?:44|6[02-9]))\\d{7}",,,,"1812345678",,,[10]],[,,"80[03]\\d{7}",,,,"8001234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"96(?:0[469]|1[0-4]|3[389]|6[69]|7[78])\\d{6}",,,,"9604123456",,,[10]],"BD",880,"00","0",,,"0",,,,[[,"(2)(\\d{7,8})","$1-$2",["2"],"0$1"],[,"(\\d{2})(\\d{4,6})","$1-$2",["[3-79]1"],"0$1"],[,"(\\d{4})(\\d{3,6})","$1-$2",["1|3(?:0|[2-58]2)|4(?:0|[25]2|3[23]|[4689][25])|5(?:[02-578]2|6[25])|6(?:[0347-9]2|[26][25])|7[02-9]2|8(?:[023][23]|[4-7]2)|9(?:[02][23]|[458]2|6[01367])"],
"0$1"],[,"(\\d{3})(\\d{3,7})","$1-$2",["[3-79][2-9]|8"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BE:[,[,,"4\\d{8}|[1-9]\\d{7}",,,,,,,[8,9]],[,,"(?:1[0-69]|[23][2-8]|4[23]|5\\d|6[013-57-9]|71|8[1-79]|9[2-4])\\d{6}|80[2-8]\\d{5}",,,,"12345678",,,[8]],[,,"4(?:56|6[0135-8]|[79]\\d|8[3-9])\\d{6}",,,,"470123456",,,[9]],[,,"800[1-9]\\d{4}",,,,"80012345",,,[8]],[,,"(?:70(?:2[0-57]|3[0457]|44|69|7[0579])|90(?:0[0-35-8]|1[36]|2[0-3568]|3[0135689]|4[2-68]|5[1-68]|6[0-378]|7[23568]|9[34679]))\\d{4}",
,,,"90012345",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BE",32,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["4[5-9]"],"0$1"],[,"(\\d)(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[23]|4[23]|9[2-4]"],"0$1"],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[156]|7[018]|8(?:0[1-9]|[1-79])"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{3})","$1 $2 $3",["(?:80|9)0"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"78[0-7]\\d{5}",,,,"78102345",,,[8]],,,[,,,,,,,,,[-1]]],BF:[,[,,"[25-7]\\d{7}",
,,,,,,[8]],[,,"2(?:0(?:49|5[23]|6[56]|9[016-9])|4(?:4[569]|5[4-6]|6[56]|7[0179])|5(?:[34]\\d|50|6[5-7]))\\d{4}",,,,"20491234"],[,,"(?:5[124-8]|[67]\\d)\\d{6}",,,,"70123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BF",226,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BG:[,[,,"[2-7]\\d{6,7}|[89]\\d{6,8}|2\\d{5}",,,,,,,[6,7,8,9],[4,5]],[,,"2\\d{5,7}|(?:[36]\\d|5[1-9]|8[1-6]|9[1-7])\\d{5,6}|(?:4(?:[124-7]\\d|3[1-6])|7(?:0[1-9]|[1-9]\\d))\\d{4,5}",
,,,"2123456",,,[6,7,8],[4,5]],[,,"(?:8[7-9]\\d|9(?:8\\d|9[69]))\\d{6}|4(?:3[0789]|8\\d)\\d{5}",,,,"48123456",,,[8,9]],[,,"800\\d{5}",,,,"80012345",,,[8]],[,,"90\\d{6}",,,,"90123456",,,[8]],[,,,,,,,,,[-1]],[,,"700\\d{5}",,,,"70012345",,,[8]],[,,,,,,,,,[-1]],"BG",359,"00","0",,,"0",,,,[[,"(2)(\\d)(\\d{2})(\\d{2})","$1 $2 $3 $4",["2"],"0$1"],[,"(2)(\\d{3})(\\d{3,4})","$1 $2 $3",["2"],"0$1"],[,"(\\d{3})(\\d{4})","$1 $2",["43[124-7]|70[1-9]"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{2})","$1 $2 $3",["43[124-7]|70[1-9]"],
"0$1"],[,"(\\d{3})(\\d{2})(\\d{3})","$1 $2 $3",["[78]00"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["99[69]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{2,3})","$1 $2 $3",["[356]|4[124-7]|7[1-9]|8[1-6]|9[1-7]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["48|8[7-9]|9[08]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BH:[,[,,"[136-9]\\d{7}",,,,,,,[8]],[,,"(?:1(?:3[1356]|6[0156]|7\\d)\\d|6(?:1[16]\\d|500|6(?:0\\d|3[12]|44|7[7-9])|9[69][69])|7(?:1(?:11|78)|7\\d{2}))\\d{4}",
,,,"17001234"],[,,"(?:3(?:[1-4679]\\d|5[013-69]|8[0-47-9])\\d|6(?:3(?:00|33|6[16])|6(?:[69]\\d|3[03-9]|7[0-6])))\\d{4}",,,,"36001234"],[,,"80\\d{6}",,,,"80123456"],[,,"(?:87|9[014578])\\d{6}",,,,"90123456"],[,,"84\\d{6}",,,,"84123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BH",973,"00",,,,,,,,[[,"(\\d{4})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BI:[,[,,"(?:[267]\\d|31)\\d{6}",,,,,,,[8]],[,,"22\\d{6}",,,,"22201234"],[,,"(?:29|31|6[189]|7[125-9])\\d{6}",,
,,"79561234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BI",257,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BJ:[,[,,"[2689]\\d{7}",,,,,,,[8]],[,,"2(?:02|1[037]|2[45]|3[68])\\d{5}",,,,"20211234"],[,,"(?:6\\d|9[03-9])\\d{6}",,,,"90011234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"857[58]\\d{4}",,,,"85751234"],"BJ",229,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})",
"$1 $2 $3 $4",["[2689]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"81\\d{6}",,,,"81123456"],,,[,,,,,,,,,[-1]]],BL:[,[,,"(?:590|69\\d)\\d{6}",,,,,,,[9]],[,,"590(?:2[7-9]|5[12]|87)\\d{4}",,,,"590271234"],[,,"69(?:0\\d{2}|1(?:2[29]|3[0-5]))\\d{4}",,,,"690001234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BL",590,"00","0",,,"0",,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BM:[,[,,"(?:441|[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"441(?:2(?:02|23|61|[3479]\\d)|[46]\\d{2}|5(?:4\\d|60|89)|824)\\d{4}",
,,,"4412345678",,,,[7]],[,,"441(?:[37]\\d|5[0-39])\\d{5}",,,,"4413701234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"BM",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"441",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BN:[,[,,"[2-578]\\d{6}",,,,,,,[7]],[,,"2(?:[013-9]\\d|2[0-7])\\d{4}|[3-5]\\d{6}",,,,"2345678"],[,,"22[89]\\d{4}|[78]\\d{6}",,,,
"7123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BN",673,"00",,,,,,,,[[,"([2-578]\\d{2})(\\d{4})","$1 $2",["[2-578]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BO:[,[,,"(?:[2-467]\\d{3}|80017)\\d{4}",,,,,,,[8,9],[7]],[,,"(?:2(?:2\\d{2}|5(?:11|[258]\\d|9[67])|6(?:12|2\\d|9[34])|8(?:2[34]|39|62))|3(?:3\\d{2}|4(?:6\\d|8[24])|8(?:25|42|5[257]|86|9[25])|9(?:2\\d|3[234]|4[248]|5[24]|6[2-6]|7\\d))|4(?:4\\d{2}|6(?:11|[24689]\\d|72)))\\d{4}",
,,,"22123456",,,[8],[7]],[,,"[67]\\d{7}",,,,"71234567",,,[8]],[,,"80017\\d{4}",,,,"800171234",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BO",591,"00(1\\d)?","0",,,"0(1\\d)?",,,,[[,"([234])(\\d{7})","$1 $2",["[2-4]"],,"0$CC $1"],[,"([67]\\d{7})","$1",["[67]"],,"0$CC $1"],[,"(800)(\\d{2})(\\d{4})","$1 $2 $3",["800"],,"0$CC $1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BQ:[,[,,"(?:[34]1|7\\d)\\d{5}",,,,,,,[7]],[,,"(?:318[023]|41(?:6[023]|70)|7(?:1[578]|50)\\d)\\d{3}",
,,,"7151234"],[,,"(?:31(?:8[14-8]|9[14578])|416[145-9]|7(?:0[01]|7[07]|8\\d|9[056])\\d)\\d{3}",,,,"3181234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BQ",599,"00",,,,,,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BR:[,[,,"(?:[1-46-9]\\d\\d|5(?:[0-46-9]\\d|5[0-24679]))\\d{8}|[1-9]\\d{9}|[3589]\\d{8}|[34]\\d{7}",,,,,,,[8,9,10,11]],[,,"(?:[14689][1-9]|2[12478]|3[1-578]|5[13-5]|7[13-579])[2-5]\\d{7}",,,,"1123456789",,,[10],[8]],[,,"(?:[189][1-9]|2[12478])(?:7|9\\d)\\d{7}|(?:3[1-578]|[46][1-9]|5[13-5]|7[13-579])(?:[6-9]|9\\d)\\d{7}",
,,,"11961234567",,,[10,11],[8]],[,,"800\\d{6,7}",,,,"800123456",,,[9,10]],[,,"(?:300|[59]00\\d?)\\d{6}",,,,"300123456",,,[9,10]],[,,"(?:300\\d(?:\\d{2})?|4(?:0(?:0\\d|20)|370))\\d{4}",,,,"40041234",,,[8,10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BR",55,"00(?:1[245]|2[1-35]|31|4[13]|[56]5|99)","0",,,"0(?:(1[245]|2[1-35]|31|4[13]|[56]5|99)(\\d{10,11}))?","$2",,,[[,"(\\d{4})(\\d{4})","$1-$2",["300|4(?:0[02]|37)","300|4(?:0(?:0|20)|370)"]],[,"([3589]00)(\\d{2,3})(\\d{4})","$1 $2 $3",["[3589]00"],"0$1"],[,
"(\\d{3,5})","$1",["1[125689]"]],[,"(\\d{4})(\\d{4})","$1-$2",["[2-9](?:0[1-9]|[1-9])"]],[,"(\\d{5})(\\d{4})","$1-$2",["9(?:0[1-9]|[1-9])"]],[,"(\\d{2})(\\d{4})(\\d{4})","$1 $2-$3",["[1-9][1-9]"],"($1)","0 $CC ($1)"],[,"(\\d{2})(\\d{5})(\\d{4})","$1 $2-$3",["[1-9][1-9]9"],"($1)","0 $CC ($1)"]],[[,"(\\d{4})(\\d{4})","$1-$2",["300|4(?:0[02]|37)","300|4(?:0(?:0|20)|370)"]],[,"([3589]00)(\\d{2,3})(\\d{4})","$1 $2 $3",["[3589]00"],"0$1"],[,"(\\d{2})(\\d{4})(\\d{4})","$1 $2-$3",["[1-9][1-9]"],"($1)","0 $CC ($1)"],
[,"(\\d{2})(\\d{5})(\\d{4})","$1 $2-$3",["[1-9][1-9]9"],"($1)","0 $CC ($1)"]],[,,,,,,,,,[-1]],,,[,,"(?:300\\d|40(?:0\\d|20))\\d{4}",,,,,,,[8]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BS:[,[,,"(?:242|[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"242(?:3(?:02|[236][1-9]|4[0-24-9]|5[0-68]|7[347]|8[0-4]|9[2-467])|461|502|6(?:0[1-4]|12|2[013]|[45]0|7[67]|8[78]|9[89])|7(?:02|88))\\d{4}",,,,"2423456789",,,,[7]],[,,"242(?:3(?:5[79]|7[56]|95)|4(?:[23][1-9]|4[1-35-9]|5[1-8]|6[2-8]|7\\d|81)|5(?:2[45]|3[35]|44|5[1-46-9]|65|77)|6[34]6|7(?:27|38)|8(?:0[1-9]|1[02-9]|2\\d|[89]9))\\d{4}",
,,,"2423591234",,,,[7]],[,,"242300\\d{4}|8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456",,,,[7]],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"BS",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"242",[,,,,,,,,,[-1]],[,,"242225[0-46-9]\\d{3}",,,,"2422250123"],,,[,,,,,,,,,[-1]]],BT:[,[,,"[17]\\d{7}|[2-8]\\d{6}",,,,,,,[7,8],[6]],[,,"(?:2[3-6]|[34][5-7]|5[236]|6[2-46]|7[246]|8[2-4])\\d{5}",,,,"2345678",,,[7],[6]],[,,
"(?:1[67]|77)\\d{6}",,,,"17123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BT",975,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["1|77"]],[,"([2-8])(\\d{3})(\\d{3})","$1 $2 $3",["[2-68]|7[246]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BW:[,[,,"(?:(?:[2-6]|7\\d)\\d|90)\\d{5}",,,,,,,[7,8]],[,,"(?:2(?:4[0-48]|6[0-24]|9[0578])|3(?:1[0-35-9]|55|[69]\\d|7[01])|4(?:6[03]|7[1267]|9[0-5])|5(?:3[0389]|4[0489]|7[1-47]|88|9[0-49])|6(?:2[1-35]|5[149]|8[067]))\\d{4}",
,,,"2401234",,,[7]],[,,"7(?:[1-6]\\d|7[014-8])\\d{5}",,,,"71123456",,,[8]],[,,,,,,,,,[-1]],[,,"90\\d{5}",,,,"9012345",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"79[12][01]\\d{4}",,,,"79101234",,,[8]],"BW",267,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2",["[2-6]"]],[,"(7\\d)(\\d{3})(\\d{3})","$1 $2 $3",["7"]],[,"(90)(\\d{5})","$1 $2",["90"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BY:[,[,,"(?:[12]\\d|33|44|902)\\d{7}|8(?:0[0-79]\\d{5,7}|[1-7]\\d{9})|8(?:1[0-489]|[5-79]\\d)\\d{7}|8[1-79]\\d{6,7}|8[0-79]\\d{5}|8\\d{5}",
,,,,,,[6,7,8,9,10,11],[5]],[,,"(?:1(?:5(?:1[1-5]|[24]\\d|6[2-4]|9[1-7])|6(?:[235]\\d|4[1-7])|7\\d{2})|2(?:1(?:[246]\\d|3[0-35-9]|5[1-9])|2(?:[235]\\d|4[0-8])|3(?:[26]\\d|3[02-79]|4[024-7]|5[03-7])))\\d{5}",,,,"152450911",,,[9],[5,6,7]],[,,"(?:2(?:5[5679]|9[1-9])|33\\d|44\\d)\\d{6}",,,,"294911911",,,[9]],[,,"8(?:0[13]|20\\d)\\d{7}|800\\d{3,7}",,,,"8011234567"],[,,"(?:810|902)\\d{7}",,,,"9021234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"249\\d{6}",,,,"249123456",,,[9]],"BY",375,"810","8",,,"8?0?",
,"8~10",,[[,"(\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2-$3-$4",["17[0-3589]|2[4-9]|[34]","17(?:[02358]|1[0-2]|9[0189])|2[4-9]|[34]"],"8 0$1"],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2-$3-$4",["1(?:5[24]|6[235]|7[467])|2(?:1[246]|2[25]|3[26])","1(?:5[24]|6(?:2|3[04-9]|5[0346-9])|7(?:[46]|7[37-9]))|2(?:1[246]|2[25]|3[26])"],"8 0$1"],[,"(\\d{4})(\\d{2})(\\d{3})","$1 $2-$3",["1(?:5[169]|6[3-5]|7[179])|2(?:1[35]|2[34]|3[3-5])","1(?:5[169]|6(?:3[1-3]|4|5[125])|7(?:1[3-9]|7[0-24-6]|9[2-7]))|2(?:1[35]|2[34]|3[3-5])"],
"8 0$1"],[,"([89]\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["8[01]|9"],"8 $1"],[,"(82\\d)(\\d{4})(\\d{4})","$1 $2 $3",["82"],"8 $1"],[,"(800)(\\d{3})","$1 $2",["800"],"8 $1"],[,"(800)(\\d{2})(\\d{2,4})","$1 $2 $3",["800"],"8 $1"]],,[,,,,,,,,,[-1]],,,[,,"8(?:0[13]|10|20\\d)\\d{7}|800\\d{3,7}|902\\d{7}"],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],BZ:[,[,,"(?:0800\\d|[2-8])\\d{6}",,,,,,,[7,11]],[,,"(?:2(?:[02]\\d|36)|[3-58][02]\\d|7(?:[02]\\d|32))\\d{4}",,,,"2221234",,,[7]],[,,"6[0-35-7]\\d{5}",,,,"6221234",,,[7]],
[,,"0800\\d{7}",,,,"08001234123",,,[11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"BZ",501,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1-$2",["[2-8]"]],[,"(0)(800)(\\d{4})(\\d{3})","$1-$2-$3-$4",["080","0800"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CA:[,[,,"(?:[2-8]\\d|90)\\d{8}",,,,,,,[10],[7]],[,,"(?:2(?:04|[23]6|[48]9|50)|3(?:06|43|65)|4(?:03|1[68]|3[178]|50)|5(?:06|1[49]|48|79|8[17])|6(?:04|13|39|47)|7(?:0[59]|78|8[02])|8(?:[06]7|19|25|73)|90[25])[2-9]\\d{6}",
,,,"5062345678",,,,[7]],[,,"(?:2(?:04|[23]6|[48]9|50)|3(?:06|43|65)|4(?:03|1[68]|3[178]|50)|5(?:06|1[49]|48|79|8[17])|6(?:04|13|39|47)|7(?:0[59]|78|8[02])|8(?:[06]7|19|25|73)|90[25])[2-9]\\d{6}",,,,"2042345678",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"(?:5(?:00|2[12]|33|44|66|77|88)|622)[2-9]\\d{6}",,,,"5002345678"],[,,"600[2-9]\\d{6}",,,,"6002012345"],"CA",1,"011","1",,,"1",,,1,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CC:[,[,,"1\\d{5,9}|[458]\\d{8}",,,,,,,[6,7,8,9,10]],[,,"8(?:51(?:0(?:02|31|60)|118)|91(?:0(?:1[0-2]|29)|1(?:[28]2|50|79)|2(?:10|64)|3(?:08|22|68)|4[29]8|62\\d|70[23]|959))\\d{3}",,,,"891621234",,,[9],[8]],[,,"14(?:5\\d|71)\\d{5}|4(?:[0-3]\\d|4[047-9]|5[0-25-9]|6[6-9]|7[02-9]|8[0-2547-9]|9[017-9])\\d{6}",,,,"412345678",,,[9]],[,,"180(?:0\\d{3}|2)\\d{3}",,,,"1800123456",,,[7,10]],[,,"19(?:0[0126]\\d|[679])\\d{5}",,,,"1900123456",,,[8,10]],[,,"13(?:00\\d{2})?\\d{4}",
,,,"1300123456",,,[6,10]],[,,"500\\d{6}",,,,"500123456",,,[9]],[,,"550\\d{6}",,,,"550123456",,,[9]],"CC",61,"(?:14(?:1[14]|34|4[17]|[56]6|7[47]|88))?001[14-689]","0",,,"0",,"0011",,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CD:[,[,,"[189]\\d{8}|[1-68]\\d{6}",,,,,,,[7,9]],[,,"1(?:2\\d{7}|\\d{6})|[2-6]\\d{6}",,,,"1234567"],[,,"8(?:[0-2459]\\d{2}|8)\\d{5}|9[017-9]\\d{7}",,,,"991234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CD",243,
"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["12"],"0$1"],[,"([89]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["8[0-2459]|9"],"0$1"],[,"(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3",["88"],"0$1"],[,"(\\d{2})(\\d{5})","$1 $2",["[1-6]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CF:[,[,,"(?:[27]\\d{3}|8776)\\d{4}",,,,,,,[8]],[,,"2[12]\\d{6}",,,,"21612345"],[,,"7[0257]\\d{6}",,,,"70012345"],[,,,,,,,,,[-1]],[,,"8776\\d{4}",,,,"87761234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],"CF",236,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CG:[,[,,"(?:(?:0\\d|80)\\d|222)\\d{6}",,,,,,,[9]],[,,"222[1-589]\\d{5}",,,,"222123456"],[,,"0[14-6]\\d{7}",,,,"061234567"],[,,,,,,,,,[-1]],[,,"80(?:0\\d{2}|11[0-4])\\d{4}",,,,"800123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CG",242,"00",,,,,,,,[[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["801"]],[,"(\\d{2})(\\d{3})(\\d{4})",
"$1 $2 $3",["[02]"]],[,"(\\d)(\\d{4})(\\d{4})","$1 $2 $3",["800"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CH:[,[,,"8\\d{11}|[2-9]\\d{8}",,,,,,,[9,12]],[,,"(?:2[12467]|3[1-4]|4[134]|5[256]|6[12]|[7-9]1)\\d{7}",,,,"212345678",,,[9]],[,,"7[5-9]\\d{7}",,,,"781234567",,,[9]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,"90[016]\\d{6}",,,,"900123456",,,[9]],[,,"84[0248]\\d{6}",,,,"840123456",,,[9]],[,,"878\\d{6}",,,,"878123456",,,[9]],[,,,,,,,,,[-1]],"CH",41,"00","0",,,"0",,,
,[[,"([2-9]\\d)(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[2-7]|[89]1"],"0$1"],[,"([89]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["8[047]|90"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4 $5",["860"],"0$1"]],,[,,"74[0248]\\d{6}",,,,"740123456",,,[9]],,,[,,,,,,,,,[-1]],[,,"5[18]\\d{7}",,,,"581234567",,,[9]],,,[,,"860\\d{9}",,,,"860123456789",,,[12]]],CI:[,[,,"[02-8]\\d{7}",,,,,,,[8]],[,,"(?:2(?:0[023]|1[02357]|[23][045]|4[03-5])|3(?:0[06]|1[069]|[2-4][07]|5[09]|6[08]))\\d{5}",,,,"21234567"],
[,,"(?:[07][1-9]|[45]\\d|6[014-9]|8[4-9])\\d{6}",,,,"01234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CI",225,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CK:[,[,,"[2-8]\\d{4}",,,,,,,[5]],[,,"(?:2\\d|3[13-7]|4[1-5])\\d{3}",,,,"21234"],[,,"[5-8]\\d{4}",,,,"71234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CK",682,"00",,,,,,,,[[,
"(\\d{2})(\\d{3})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CL:[,[,,"(?:1230|[2-57-9]\\d|6\\d{1,3})\\d{7}",,,,,,,[9,10,11]],[,,"2(?:1962\\d{4}|2\\d{7}|32[0-467]\\d{5})|(?:3[2-5]\\d|[47][1-35]\\d|5[1-3578]\\d|6[13-57]\\d|8(?:0[1-9]|[1-9]\\d)|9[3-9]\\d)\\d{6}",,,,"221234567",,,[9]],[,,"2(?:1962\\d{4}|2\\d{7}|32[0-467]\\d{5})|(?:3[2-5]\\d|[47][1-35]\\d|5[1-3578]\\d|6[13-57]\\d|8(?:0[1-9]|[1-9]\\d)|9[3-9]\\d)\\d{6}",,,,"961234567",,,[9]],[,,"800\\d{6}|1230\\d{7}",
,,,"800123456",,,[9,11]],[,,,,,,,,,[-1]],[,,"600\\d{7,8}",,,,"6001234567",,,[10,11]],[,,,,,,,,,[-1]],[,,"44\\d{7}",,,,"441234567",,,[9]],"CL",56,"(?:0|1(?:1[0-69]|2[0-57]|5[13-58]|69|7[0167]|8[018]))0",,,,,,,1,[[,"(\\d)(\\d{4})(\\d{4})","$1 $2 $3",["2[23]"],"($1)"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["[357]|4[1-35]|6[13-57]|8(?:0[1-9]|[1-9])"],"($1)"],[,"(9)(\\d{4})(\\d{4})","$1 $2 $3",["9"]],[,"(44)(\\d{3})(\\d{4})","$1 $2 $3",["44"]],[,"([68]00)(\\d{3})(\\d{3,4})","$1 $2 $3",["[68]00"]],[,
"(600)(\\d{3})(\\d{2})(\\d{3})","$1 $2 $3 $4",["600"]],[,"(1230)(\\d{3})(\\d{4})","$1 $2 $3",["123","1230"]],[,"(\\d{5})(\\d{4})","$1 $2",["219"],"($1)"],[,"(\\d{4,5})","$1",["[1-9]"],"$1"]],[[,"(\\d)(\\d{4})(\\d{4})","$1 $2 $3",["2[23]"],"($1)"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["[357]|4[1-35]|6[13-57]|8(?:0[1-9]|[1-9])"],"($1)"],[,"(9)(\\d{4})(\\d{4})","$1 $2 $3",["9"]],[,"(44)(\\d{3})(\\d{4})","$1 $2 $3",["44"]],[,"([68]00)(\\d{3})(\\d{3,4})","$1 $2 $3",["[68]00"]],[,"(600)(\\d{3})(\\d{2})(\\d{3})",
"$1 $2 $3 $4",["600"]],[,"(1230)(\\d{3})(\\d{4})","$1 $2 $3",["123","1230"]],[,"(\\d{5})(\\d{4})","$1 $2",["219"],"($1)"]],[,,,,,,,,,[-1]],,,[,,"600\\d{7,8}",,,,,,,[10,11]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CM:[,[,,"(?:[26]\\d\\d|88)\\d{6}",,,,,,,[8,9]],[,,"2(?:22|33|4[23])\\d{6}",,,,"222123456",,,[9]],[,,"6[5-9]\\d{7}",,,,"671234567",,,[9]],[,,"88\\d{6}",,,,"88012345",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CM",237,"00",,,,,,,,[[,"([26])(\\d{2})(\\d{2})(\\d{2})(\\d{2})",
"$1 $2 $3 $4 $5",["[26]"]],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[23]|88"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CN:[,[,,"(?:(?:(?:1[03-68]|2\\d)\\d\\d|[3-79])\\d|8[0-57-9])\\d{7}|[1-579]\\d{10}|8[0-57-9]\\d{8,9}|[1-79]\\d{9}|[1-9]\\d{7}|[12]\\d{6}",,,,,,,[7,8,9,10,11,12],[5,6]],[,,"21(?:100\\d{2}|95\\d{3,4}|\\d{8,10})|(?:10|2[02-57-9]|3(?:11|7[179])|4(?:[15]1|3[1-35])|5(?:1\\d|2[37]|3[12]|51|7[13-79]|9[15])|7(?:31|5[457]|6[09]|91)|8(?:[57]1|98))(?:100\\d{2}|95\\d{3,4}|\\d{8})|(?:3(?:1[02-9]|35|49|5\\d|7[02-68]|9[1-68])|4(?:1[02-9]|2[179]|3[3-9]|5[2-9]|6[4789]|7\\d|8[23])|5(?:3[03-9]|4[36]|5[02-9]|6[1-46]|7[028]|80|9[2-46-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[17]\\d|2[248]|3[04-9]|4[3-6]|5[0-4689]|6[2368]|9[02-9])|8(?:078|1[236-8]|2[5-7]|3\\d|5[1-9]|7[02-9]|8[3678]|9[1-7])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))(?:100\\d{2}|95\\d{3,4}|\\d{7})",
,,,"1012345678",,,,[5,6]],[,,"1(?:[38]\\d{3}|4[57]\\d{2}|5[0-35-9]\\d{2}|66\\d{2}|7(?:[0-35-8]\\d{2}|40[0-5])|9[89]\\d{2})\\d{6}",,,,"13123456789",,,[11]],[,,"(?:10)?800\\d{7}",,,,"8001234567",,,[10,12]],[,,"16[08]\\d{5}",,,,"16812345",,,[8]],[,,"400\\d{7}|950\\d{7,8}|(?:10|2[0-57-9]|3(?:[157]\\d|35|49|9[1-68])|4(?:[17]\\d|2[179]|[35][1-9]|6[4789]|8[23])|5(?:[1357]\\d|2[37]|4[36]|6[1-46]|80|9[1-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]\\d|2[248]|3[014-9]|4[3-6]|6[023689])|8(?:1[236-8]|2[5-7]|[37]\\d|5[14-9]|8[3678]|9[1-8])|9(?:0[1-3689]|1[1-79]|[379]\\d|4[13]|5[1-5]))96\\d{3,4}",
,,,"4001234567",,,[7,8,9,10,11],[5,6]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CN",86,"(?:1(?:[12]\\d{3}|79\\d{2}|9[0-7]\\d{2}))?00","0",,,"(1(?:[12]\\d{3}|79\\d{2}|9[0-7]\\d{2}))|0",,"00",,[[,"([48]00)(\\d{3})(\\d{4})","$1 $2 $3",["[48]00"]],[,"(\\d{5,6})","$1",["100|95"]],[,"(\\d{2})(\\d{5,6})","$1 $2",["(?:10|2\\d)[19]","(?:10|2\\d)(?:10|9[56])","(?:10|2\\d)(?:100|9[56])"],"0$1","$CC $1"],[,"(\\d{3})(\\d{5,6})","$1 $2",["[3-9]","[3-9]\\d\\d[19]","[3-9]\\d\\d(?:10|9[56])"],"0$1","$CC $1"],[,"(\\d{3,4})(\\d{4})",
"$1 $2",["[2-9]"]],[,"(21)(\\d{4})(\\d{4,6})","$1 $2 $3",["21"],"0$1","$CC $1",1],[,"([12]\\d)(\\d{4})(\\d{4})","$1 $2 $3",["10[1-9]|2[02-9]","10[1-9]|2[02-9]","10(?:[1-79]|8(?:0[1-9]|[1-9]))|2[02-9]"],"0$1","$CC $1",1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["3(?:1[02-9]|35|49|5|7[02-68]|9[1-68])|4(?:1[02-9]|2[179]|[35][2-9]|6[47-9]|7|8[23])|5(?:3[03-9]|4[36]|5[02-9]|6[1-46]|7[028]|80|9[2-46-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]|2[248]|3[04-9]|4[3-6]|6[2368])|8(?:1[236-8]|2[5-7]|3|5[1-9]|7[02-9]|8[36-8]|9[1-7])|9(?:0[1-3689]|1[1-79]|[379]|4[13]|5[1-5])"],
"0$1","$CC $1",1],[,"(\\d{3})(\\d{4})(\\d{4})","$1 $2 $3",["3(?:11|7[179])|4(?:[15]1|3[1-35])|5(?:1|2[37]|3[12]|51|7[13-79]|9[15])|7(?:[39]1|5[457]|6[09])|8(?:[57]1|98)"],"0$1","$CC $1",1],[,"(\\d{4})(\\d{3})(\\d{4})","$1 $2 $3",["807","8078"],"0$1","$CC $1",1],[,"(\\d{3})(\\d{4})(\\d{4})","$1 $2 $3",["1(?:[3-57-9]|66)"],,"$CC $1"],[,"(10800)(\\d{3})(\\d{4})","$1 $2 $3",["108","1080","10800"]],[,"(\\d{3})(\\d{7,8})","$1 $2",["950"]]],[[,"([48]00)(\\d{3})(\\d{4})","$1 $2 $3",["[48]00"]],[,"(\\d{2})(\\d{5,6})",
"$1 $2",["(?:10|2\\d)[19]","(?:10|2\\d)(?:10|9[56])","(?:10|2\\d)(?:100|9[56])"],"0$1","$CC $1"],[,"(\\d{3})(\\d{5,6})","$1 $2",["[3-9]","[3-9]\\d\\d[19]","[3-9]\\d\\d(?:10|9[56])"],"0$1","$CC $1"],[,"(21)(\\d{4})(\\d{4,6})","$1 $2 $3",["21"],"0$1","$CC $1",1],[,"([12]\\d)(\\d{4})(\\d{4})","$1 $2 $3",["10[1-9]|2[02-9]","10[1-9]|2[02-9]","10(?:[1-79]|8(?:0[1-9]|[1-9]))|2[02-9]"],"0$1","$CC $1",1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["3(?:1[02-9]|35|49|5|7[02-68]|9[1-68])|4(?:1[02-9]|2[179]|[35][2-9]|6[47-9]|7|8[23])|5(?:3[03-9]|4[36]|5[02-9]|6[1-46]|7[028]|80|9[2-46-9])|6(?:3[1-5]|6[0238]|9[12])|7(?:01|[1579]|2[248]|3[04-9]|4[3-6]|6[2368])|8(?:1[236-8]|2[5-7]|3|5[1-9]|7[02-9]|8[36-8]|9[1-7])|9(?:0[1-3689]|1[1-79]|[379]|4[13]|5[1-5])"],
"0$1","$CC $1",1],[,"(\\d{3})(\\d{4})(\\d{4})","$1 $2 $3",["3(?:11|7[179])|4(?:[15]1|3[1-35])|5(?:1|2[37]|3[12]|51|7[13-79]|9[15])|7(?:[39]1|5[457]|6[09])|8(?:[57]1|98)"],"0$1","$CC $1",1],[,"(\\d{4})(\\d{3})(\\d{4})","$1 $2 $3",["807","8078"],"0$1","$CC $1",1],[,"(\\d{3})(\\d{4})(\\d{4})","$1 $2 $3",["1(?:[3-57-9]|66)"],,"$CC $1"],[,"(10800)(\\d{3})(\\d{4})","$1 $2 $3",["108","1080","10800"]],[,"(\\d{3})(\\d{7,8})","$1 $2",["950"]]],[,,,,,,,,,[-1]],,,[,,"(?:4|(?:10)?8)00\\d{7}|950\\d{7,8}",,,,,,
,[10,11,12]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CO:[,[,,"(?:1\\d|3)\\d{9}|[124-8]\\d{7}",,,,,,,[8,10,11],[7]],[,,"[124-8][2-9]\\d{6}",,,,"12345678",,,[8],[7]],[,,"3(?:0[0-5]|1\\d|2[0-3]|5[01])\\d{7}",,,,"3211234567",,,[10]],[,,"1800\\d{7}",,,,"18001234567",,,[11]],[,,"19(?:0[01]|4[78])\\d{7}",,,,"19001234567",,,[11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CO",57,"00(?:4(?:[14]4|56)|[579])","0",,,"0([3579]|4(?:44|56))?",,,,[[,"(\\d)(\\d{7})","$1 $2",["1(?:[2-7]|8[2-9]|9[0-3])|[24-8]","1(?:[2-7]|8[2-9]|9(?:09|[1-3]))|[24-8]"],
"($1)","0$CC $1"],[,"(\\d{3})(\\d{7})","$1 $2",["3"],,"0$CC $1"],[,"(1)(\\d{3})(\\d{7})","$1-$2-$3",["1(?:80|9[04])","1(?:800|9(?:0[01]|4[78]))"],"0$1"]],[[,"(\\d)(\\d{7})","$1 $2",["1(?:[2-7]|8[2-9]|9[0-3])|[24-8]","1(?:[2-7]|8[2-9]|9(?:09|[1-3]))|[24-8]"],"($1)","0$CC $1"],[,"(\\d{3})(\\d{7})","$1 $2",["3"],,"0$CC $1"],[,"(1)(\\d{3})(\\d{7})","$1 $2 $3",["1(?:80|9[04])","1(?:800|9(?:0[01]|4[78]))"]]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CR:[,[,,"(?:8\\d|90)\\d{8}|[24-8]\\d{7}",
,,,,,,[8,10]],[,,"2(?:[024-7]\\d{2}|1(?:0[7-9]|[1-9]\\d))\\d{4}",,,,"22123456",,,[8]],[,,"5(?:0[01]|7[0-3])\\d{5}|6(?:[0-4]\\d{3}|500[01])\\d{3}|(?:7[0-3]|8[3-9])\\d{6}",,,,"83123456",,,[8]],[,,"800\\d{7}",,,,"8001234567",,,[10]],[,,"90[059]\\d{7}",,,,"9001234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"210[0-6]\\d{4}|4\\d{7}|5100\\d{4}",,,,"40001234",,,[8]],"CR",506,"00",,,,"(19(?:0[012468]|1[09]|20|66|77|99))",,,,[[,"(\\d{4})(\\d{4})","$1 $2",["[24-7]|8[3-9]"],,"$CC $1"],[,"(\\d{3})(\\d{3})(\\d{4})",
"$1-$2-$3",["[89]0"],,"$CC $1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CU:[,[,,"[2-57]\\d{7}|[2-47]\\d{6}|[34]\\d{5}",,,,,,,[6,7,8],[4,5]],[,,"2[1-4]\\d{5,6}|3(?:1\\d{6}|[23]\\d{4,6})|4(?:[125]\\d{5,6}|[36]\\d{6}|[78]\\d{4,6})|7\\d{6,7}",,,,"71234567",,,,[4,5]],[,,"5\\d{7}",,,,"51234567",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CU",53,"119","0",,,"0",,,,[[,"(\\d)(\\d{6,7})","$1 $2",["7"],"(0$1)"],[,"(\\d{2})(\\d{4,6})",
"$1 $2",["[2-4]"],"(0$1)"],[,"(\\d)(\\d{7})","$1 $2",["5"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CV:[,[,,"[2-59]\\d{6}",,,,,,,[7]],[,,"2(?:2[1-7]|3[0-8]|4[12]|5[1256]|6\\d|7[1-3]|8[1-5])\\d{4}",,,,"2211234"],[,,"(?:[34][36]|5[1-389]|9\\d)\\d{5}",,,,"9911234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CV",238,"0",,,,,,,,[[,"(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,
,,,,,[-1]]],CW:[,[,,"(?:[34]1|60|(?:7|9\\d)\\d)\\d{5}",,,,,,,[7,8]],[,,"9(?:[48]\\d{2}|50\\d|7(?:2[0-24]|[34]\\d|6[35-7]|77|8[7-9]))\\d{4}",,,,"94151234",,,[8]],[,,"9(?:5(?:[12467]\\d|3[01])|6(?:[15-9]\\d|3[01]))\\d{4}",,,,"95181234",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"60[0-2]\\d{4}",,,,"6001234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"CW",599,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2",["[13-7]"]],[,"(9)(\\d{3})(\\d{4})","$1 $2 $3",["9"]]],,[,,"955\\d{5}",,,,"95581234",,,[8]],1,,[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CX:[,[,,"1\\d{5,9}|[458]\\d{8}",,,,,,,[6,7,8,9,10]],[,,"8(?:51(?:0(?:01|30|59)|117)|91(?:00[6-9]|1(?:21|49|78|81)|2(?:09|63)|3(?:12|26|75)|4(?:56|97)|64\\d|7(?:0[01]|1[0-2])|958))\\d{3}",,,,"891641234",,,[9],[8]],[,,"14(?:5\\d|71)\\d{5}|4(?:[0-3]\\d|4[047-9]|5[0-25-9]|6[6-9]|7[02-9]|8[0-2547-9]|9[017-9])\\d{6}",,,,"412345678",,,[9]],[,,"180(?:0\\d{3}|2)\\d{3}",,,,"1800123456",,,[7,10]],[,,"19(?:0[0126]\\d|[679])\\d{5}",,,,"1900123456",,,[8,10]],[,,"13(?:00\\d{2})?\\d{4}",
,,,"1300123456",,,[6,8,10]],[,,"500\\d{6}",,,,"500123456",,,[9]],[,,"550\\d{6}",,,,"550123456",,,[9]],"CX",61,"(?:14(?:1[14]|34|4[17]|[56]6|7[47]|88))?001[14-689]","0",,,"0",,"0011",,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],CY:[,[,,"(?:[279]\\d|[58]0)\\d{6}",,,,,,,[8]],[,,"2[2-6]\\d{6}",,,,"22345678"],[,,"9[4-79]\\d{6}",,,,"96123456"],[,,"800\\d{5}",,,,"80001234"],[,,"90[09]\\d{5}",,,,"90012345"],[,,"80[1-9]\\d{5}",,,,"80112345"],[,,"700\\d{5}",,,,"70012345"],[,,,,,,
,,,[-1]],"CY",357,"00",,,,,,,,[[,"(\\d{2})(\\d{6})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"(?:50|77)\\d{6}",,,,"77123456"],,,[,,,,,,,,,[-1]]],CZ:[,[,,"(?:[2-578]\\d|60|9\\d{1,4})\\d{7}",,,,,,,[9,10,11,12]],[,,"2\\d{8}|(?:3[1257-9]|4[16-9]|5[13-9])\\d{7}",,,,"212345678",,,[9]],[,,"(?:60[1-8]|7(?:0[2-5]|[2379]\\d))\\d{6}",,,,"601123456",,,[9]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,"9(?:0[05689]|76)\\d{6}",,,,"900123456",,,[9]],[,,"8[134]\\d{7}",,,,"811234567",,,[9]],[,,"70[01]\\d{6}",,,
,"700123456",,,[9]],[,,"9[17]0\\d{6}",,,,"910123456",,,[9]],"CZ",420,"00",,,,,,,,[[,"([2-9]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["[2-8]|9[015-7]"]],[,"(96\\d)(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3 $4",["96"]],[,"(9\\d)(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3 $4",["9[36]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"9(?:5\\d|7[234])\\d{6}",,,,"972123456",,,[9]],,,[,,"9(?:3\\d{9}|6\\d{7,10})",,,,"93123456789"]],DE:[,[,,"(?:1|[358]\\d{11})\\d{3}|[1-35689]\\d{13}|4(?:[0-8]\\d{5,12}|9(?:[05]\\d|44|6[1-8])\\d{9})|[1-35-9]\\d{6,12}|49(?:[0-357]\\d|[46][1-8])\\d{4,8}|49(?:[0-3579]\\d|4[1-9]|6[0-8])\\d{3}|[1-9]\\d{5}|[13-68]\\d{4}",
,,,,,,[4,5,6,7,8,9,10,11,12,13,14,15],[3]],[,,"2\\d{5,13}|3(?:0\\d{3,13}|2\\d{9}|[3-9]\\d{4,13})|4(?:0\\d{3,12}|[1-8]\\d{4,12}|9(?:[0-37]\\d|4(?:[1-35-8]|4\\d?)|5\\d{1,2}|6[1-8]\\d?)\\d{2,8})|5(?:0[2-8]|[1256]\\d|[38][0-8]|4\\d{0,2}|[79][0-7])\\d{3,11}|6(?:\\d{5,13}|9\\d{3,12})|7(?:0[2-8]|[1-9]\\d)\\d{3,10}|8(?:0[2-9]|[1-8]\\d|9\\d?)\\d{3,10}|9(?:0[6-9]\\d{3,10}|1\\d{4,12}|[2-9]\\d{4,11})",,,,"30123456",,,[5,6,7,8,9,10,11,12,13,14,15],[3,4]],[,,"1(?:5[0-25-9]\\d{8}|6[023]\\d{7,8}|7\\d{8,9})",,,,"15123456789",
,,[10,11]],[,,"800\\d{7,12}",,,,"8001234567890",,,[10,11,12,13,14,15]],[,,"137[7-9]\\d{6}|900(?:[135]\\d{6}|9\\d{7})",,,,"9001234567",,,[10,11]],[,,"1(?:3(?:7[1-6]\\d{6}|8\\d{4})|80\\d{5,11})",,,,"18012345",,,[7,8,9,10,11,12,13,14]],[,,"700\\d{8}",,,,"70012345678",,,[11]],[,,,,,,,,,[-1]],"DE",49,"00","0",,,"0",,,,[[,"(1\\d{2})(\\d{7,8})","$1 $2",["1[67]"],"0$1"],[,"(15\\d{3})(\\d{6})","$1 $2",["15[0568]"],"0$1"],[,"(1\\d{3})(\\d{7})","$1 $2",["15"],"0$1"],[,"(\\d{2})(\\d{3,11})","$1 $2",["3[02]|40|[68]9"],
"0$1"],[,"(\\d{3})(\\d{3,11})","$1 $2",["2(?:0[1-389]|1[124]|2[18]|3[14]|[4-9]1)|3(?:[35-9][15]|4[015])|[4-8][1-9]1|9(?:06|[1-9]1)","2(?:0[1-389]|1(?:[14]|2[0-8])|2[18]|3[14]|[4-9]1)|3(?:[35-9][15]|4[015])|[4-8][1-9]1|9(?:06|[1-9]1)"],"0$1"],[,"(\\d{4})(\\d{2,11})","$1 $2",["[24-6]|3(?:[3569][02-46-9]|4[2-4679]|7[2-467]|8[2-46-8])|[7-9](?:0[1-9]|[1-9])","[24-6]|3(?:3(?:0[1-467]|2[127-9]|3[124578]|[46][1246]|7[1257-9]|8[1256]|9[145])|4(?:2[135]|3[1357]|4[13578]|6[1246]|7[1356]|9[1346])|5(?:0[14]|2[1-3589]|3[1357]|[49][1246]|6[1-4]|7[13468]|8[13568])|6(?:0[1356]|2[1-489]|3[124-6]|4[1347]|6[13]|7[12579]|8[1-356]|9[135])|7(?:2[1-7]|3[1357]|4[145]|6[1-5]|7[1-4])|8(?:21|3[1468]|4[1347]|6[0135-9]|7[1467]|8[136])|9(?:0[12479]|2[1358]|3[1357]|4[134679]|6[1-9]|7[136]|8[147]|9[1468]))|[7-9](?:0[1-9]|[1-9])"],
"0$1"],[,"(3\\d{4})(\\d{1,10})","$1 $2",["3"],"0$1"],[,"(800)(\\d{7,12})","$1 $2",["800"],"0$1"],[,"(\\d{3})(\\d)(\\d{4,10})","$1 $2 $3",["1(?:37|80)|900","1(?:37|80)|900[1359]"],"0$1"],[,"(1\\d{2})(\\d{5,11})","$1 $2",["181"],"0$1"],[,"(18\\d{3})(\\d{6})","$1 $2",["185","1850","18500"],"0$1"],[,"(18\\d{2})(\\d{7})","$1 $2",["18[68]"],"0$1"],[,"(18\\d)(\\d{8})","$1 $2",["18[2-579]"],"0$1"],[,"(700)(\\d{4})(\\d{4})","$1 $2 $3",["700"],"0$1"],[,"(138)(\\d{4})","$1 $2",["138"],"0$1"],[,"(15[013-68])(\\d{2})(\\d{8})",
"$1 $2 $3",["15[013-68]"],"0$1"],[,"(15[279]\\d)(\\d{2})(\\d{7})","$1 $2 $3",["15[279]"],"0$1"],[,"(1[67]\\d)(\\d{2})(\\d{7,8})","$1 $2 $3",["1(?:6[023]|7)"],"0$1"]],,[,,"16(?:4\\d{1,10}|[89]\\d{1,11})",,,,"16412345",,,[4,5,6,7,8,9,10,11,12,13,14]],,,[,,,,,,,,,[-1]],[,,"18(?:1\\d{5,11}|[2-9]\\d{8})",,,,"18500123456",,,[8,9,10,11,12,13,14]],,,[,,"1(?:5(?:(?:2\\d55|7\\d99|9\\d33)\\d{7}|(?:[034568]00|113)\\d{8})|6(?:013|255|399)\\d{7,8}|7(?:[015]13|[234]55|[69]33|[78]99)\\d{7,8})",,,,"177991234567",
,,[12,13]]],DJ:[,[,,"(?:2\\d|77)\\d{6}",,,,,,,[8]],[,,"2(?:1[2-5]|7[45])\\d{5}",,,,"21360003"],[,,"77\\d{6}",,,,"77831001"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"DJ",253,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],DK:[,[,,"[2-9]\\d{7}",,,,,,,[8]],[,,"(?:[2-7]\\d|8[126-9]|9[1-36-9])\\d{6}",,,,"32123456"],[,,"(?:[2-7]\\d|8[126-9]|9[1-36-9])\\d{6}",,,,"20123456"],[,,
"80\\d{6}",,,,"80123456"],[,,"90\\d{6}",,,,"90123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"DK",45,"00",,,,,,,1,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],DM:[,[,,"(?:[58]\\d\\d|767|900)\\d{7}",,,,,,,[10],[7]],[,,"767(?:2(?:55|66)|4(?:2[01]|4[0-25-9])|50[0-4]|70[1-3])\\d{4}",,,,"7674201234",,,,[7]],[,,"767(?:2(?:[234689]5|7[5-7])|31[5-7]|61[1-7])\\d{4}",,,,"7672251234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",
,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"DM",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"767",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],DO:[,[,,"(?:[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"8(?:[04]9[2-9]\\d{6}|29(?:2(?:[0-59]\\d|6[04-9]|7[0-27]|8[0237-9])|3(?:[0-35-9]\\d|4[7-9])|[45]\\d{2}|6(?:[0-27-9]\\d|[3-5][1-9]|6[0135-8])|7(?:0[013-9]|[1-37]\\d|4[1-35689]|5[1-4689]|6[1-57-9]|8[1-79]|9[1-8])|8(?:0[146-9]|1[0-48]|[248]\\d|3[1-79]|5[01589]|6[013-68]|7[124-8]|9[0-8])|9(?:[0-24]\\d|3[02-46-9]|5[0-79]|60|7[0169]|8[57-9]|9[02-9]))\\d{4})",
,,,"8092345678",,,,[7]],[,,"8[024]9[2-9]\\d{6}",,,,"8092345678",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"DO",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"8[024]9",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],DZ:[,[,,"(?:[1-4]|[5-79]\\d|80)\\d{7}",,,,,,,[8,9]],[,,"(?:1\\d|2[013-79]|3[0-8]|4[0135689])\\d{6}|9619\\d{5}",,,,"12345678"],[,,"(?:5[4-6]|7[7-9])\\d{7}|6(?:[569]\\d|7[0-6])\\d{6}",
,,,"551234567",,,[9]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,"80[3-689]1\\d{5}",,,,"808123456",,,[9]],[,,"80[12]1\\d{5}",,,,"801123456",,,[9]],[,,,,,,,,,[-1]],[,,"98[23]\\d{6}",,,,"983123456",,,[9]],"DZ",213,"00","0",,,"0",,,,[[,"([1-4]\\d)(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[1-4]"],"0$1"],[,"([5-8]\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[5-8]"],"0$1"],[,"(9\\d)(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["9"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],
EC:[,[,,"1800\\d{6,7}|(?:[2-7]|9\\d)\\d{7}",,,,,,,[8,9,10,11],[7]],[,,"[2-7][2-7]\\d{6}",,,,"22123456",,,[8],[7]],[,,"9(?:(?:39|[57][89]|[89]\\d)\\d|6(?:[0-27-9]\\d|30))\\d{5}",,,,"991234567",,,[9]],[,,"1800\\d{6,7}",,,,"18001234567",,,[10,11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"[2-7]890\\d{4}",,,,"28901234",,,[8]],"EC",593,"00","0",,,"0",,,,[[,"(\\d)(\\d{3})(\\d{4})","$1 $2-$3",["[247]|[356][2-8]"],"(0$1)"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["9"],"0$1"],[,"(1800)(\\d{3})(\\d{3,4})",
"$1 $2 $3",["180","1800"],"$1"]],[[,"(\\d)(\\d{3})(\\d{4})","$1-$2-$3",["[247]|[356][2-8]"]],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["9"],"0$1"],[,"(1800)(\\d{3})(\\d{3,4})","$1 $2 $3",["180","1800"],"$1"]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],EE:[,[,,"8\\d{9}|[4578]\\d{7}|(?:[3-8]\\d\\d|900)\\d{4}",,,,,,,[7,8,10]],[,,"(?:3[23589]|4[3-8]|6\\d|7[1-9]|88)\\d{5}",,,,"3212345",,,[7]],[,,"(?:5\\d|8[1-5])\\d{6}|5(?:[02]\\d{2}|1(?:[0-8]\\d|95)|5[0-478]\\d|64[0-4]|65[1-589])\\d{3}",
,,,"51234567",,,[7,8]],[,,"800(?:0\\d{3}|1\\d|[2-9])\\d{3}",,,,"80012345"],[,,"(?:40\\d{2}|900)\\d{4}",,,,"9001234",,,[7,8]],[,,,,,,,,,[-1]],[,,"70[0-2]\\d{5}",,,,"70012345",,,[8]],[,,,,,,,,,[-1]],"EE",372,"00",,,,,,,,[[,"([3-79]\\d{2})(\\d{4})","$1 $2",["[369]|4[3-8]|5(?:[0-2]|5[0-478]|6[45])|7[1-9]","[369]|4[3-8]|5(?:[02]|1(?:[0-8]|95)|5[0-478]|6(?:4[0-4]|5[1-589]))|7[1-9]"]],[,"(70)(\\d{2})(\\d{4})","$1 $2 $3",["70"]],[,"(8000)(\\d{3})(\\d{3})","$1 $2 $3",["800","8000"]],[,"([458]\\d{3})(\\d{3,4})",
"$1 $2",["40|5|8(?:00|[1-5])","40|5|8(?:00[1-9]|[1-5])"]]],,[,,,,,,,,,[-1]],,,[,,"800[2-9]\\d{3}",,,,,,,[7]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],EG:[,[,,"(?:[189]\\d?|[24-6])\\d{8}|[13]\\d{7}",,,,,,,[8,9,10],[7]],[,,"(?:1(?:3[23]\\d|5(?:[23]|9\\d))|2[2-4]\\d{2}|3\\d{2}|4(?:0[2-5]|[578][23]|64)\\d|5(?:0[2-7]|5\\d|7[23])\\d|6[24-689]3\\d|8(?:2[2-57]|4[26]|6[237]|8[2-4])\\d|9(?:2[27]|3[24]|52|6[2356]|7[2-4])\\d)\\d{5}",,,,"234567890",,,[8,9],[7]],[,,"1[0125]\\d{8}",,,,"1001234567",,,[10]],[,,"800\\d{7}",
,,,"8001234567",,,[10]],[,,"900\\d{7}",,,,"9001234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"EG",20,"00","0",,,"0",,,,[[,"(\\d)(\\d{7,8})","$1 $2",["[23]"],"0$1"],[,"(\\d{2})(\\d{6,7})","$1 $2",["1(?:3|5[239])|[4-6]|[89][2-9]"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["1[0-25]|[89]00"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],EH:[,[,,"[5-8]\\d{8}",,,,,,,[9]],[,,"528[89]\\d{5}",,,,"528812345"],[,,"(?:6(?:[0-79]\\d|8[0-247-9])|7(?:0[067]|6[1267]|7[017]))\\d{6}",
,,,"650123456"],[,,"80\\d{7}",,,,"801234567"],[,,"89\\d{7}",,,,"891234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"5924[01]\\d{4}",,,,"592401234"],"EH",212,"00","0",,,"0",,,,,,[,,,,,,,,,[-1]],,"528[89]",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],ER:[,[,,"[178]\\d{6}",,,,,,,[7],[6]],[,,"1(?:1[12568]|20|40|55|6[146])\\d{4}|8\\d{6}",,,,"8370362",,,,[6]],[,,"17[1-3]\\d{4}|7\\d{6}",,,,"7123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"ER",291,"00","0",,,"0",
,,,[[,"(\\d)(\\d{3})(\\d{3})","$1 $2 $3",,"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],ES:[,[,,"(?:51|[6-9]\\d)\\d{7}",,,,,,,[9]],[,,"8(?:[1356]\\d|[28][0-8]|[47][1-9])\\d{6}|9(?:[135]\\d{7}|[28][0-8]\\d{6}|4[1-9]\\d{6}|6(?:[0-8]\\d{6}|9(?:0(?:[0-57-9]\\d{4}|6(?:0[0-8]|1[1-9]|[2-9]\\d)\\d{2})|[1-9]\\d{5}))|7(?:[124-9]\\d{2}|3(?:[0-8]\\d|9[1-9]))\\d{4})",,,,"810123456"],[,,"(?:6\\d{6}|7[1-48]\\d{5}|9(?:6906(?:09|10)|7390\\d{2}))\\d{2}",,,,"612345678"],[,,"[89]00\\d{6}",
,,,"800123456"],[,,"80[367]\\d{6}",,,,"803123456"],[,,"90[12]\\d{6}",,,,"901123456"],[,,"70\\d{7}",,,,"701234567"],[,,,,,,,,,[-1]],"ES",34,"00",,,,,,,,[[,"([89]00)(\\d{3})(\\d{3})","$1 $2 $3",["[89]00"]],[,"([5-9]\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[568]|[79][0-8]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"51\\d{7}",,,,"511234567"],,,[,,,,,,,,,[-1]]],ET:[,[,,"(?:11|[2-59]\\d)\\d{7}",,,,,,,[9],[7]],[,,"(?:11(?:1(?:1[124]|2[2-57]|3[1-5]|5[5-8]|8[6-8])|2(?:13|3[6-8]|5[89]|7[05-9]|8[2-6])|3(?:2[01]|3[0-289]|4[1289]|7[1-4]|87)|4(?:1[69]|3[2-49]|4[0-3]|6[5-8])|5(?:1[578]|44|5[0-4])|6(?:18|2[69]|39|4[5-7]|5[1-5]|6[0-59]|8[015-8]))|2(?:2(?:11[1-9]|22[0-7]|33\\d|44[1467]|66[1-68])|5(?:11[124-6]|33[2-8]|44[1467]|55[14]|66[1-3679]|77[124-79]|880))|3(?:3(?:11[0-46-8]|22[0-6]|33[0134689]|44[04]|55[0-6]|66[01467])|4(?:44[0-8]|55[0-69]|66[0-3]|77[1-5]))|4(?:6(?:22[0-24-7]|33[1-5]|44[13-69]|55[14-689]|660|88[1-4])|7(?:11[1-9]|22[1-9]|33[13-7]|44[13-6]|55[1-689]))|5(?:7(?:227|55[05]|(?:66|77)[14-8])|8(?:11[149]|22[013-79]|33[0-68]|44[013-8]|550|66[1-5]|77\\d)))\\d{4}",
,,,"111112345",,,,[7]],[,,"9\\d{8}",,,,"911234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"ET",251,"00","0",,,"0",,,,[[,"([1-59]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["[1-59]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],FI:[,[,,"(?:1\\d|[2-689])\\d{4,10}|7\\d{4,9}",,,,,,,[5,6,7,8,9,10,11,12]],[,,"1(?:[3569][1-8]\\d{3,9}|[47]\\d{5,10})|2[1-8]\\d{3,9}|3(?:[1-8]\\d{3,9}|9\\d{4,8})|[5689][1-8]\\d{3,9}",,,,"1312345678"],[,,"4(?:[0-8]\\d{4,9}|9\\d{3,8})|50\\d{4,8}",
,,,"412345678",,,[6,7,8,9,10,11]],[,,"800\\d{4,7}",,,,"8001234567",,,[7,8,9,10]],[,,"[67]00\\d{5,6}",,,,"600123456",,,[8,9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"FI",358,"00|99(?:[01469]|5(?:11|3[23]|41|5[59]|77|88|9[09]))","0",,,"0",,"00",,[[,"(\\d{3})(\\d{3,7})","$1 $2",["(?:[1-3]0|[6-8])0"],"0$1"],[,"(75\\d{3})","$1",["75[12]"],"0$1"],[,"(116\\d{3})","$1",["116"],"$1"],[,"(\\d{2})(\\d{4,10})","$1 $2",["[14]|2[09]|50|7[135]"],"0$1"],[,"(\\d)(\\d{4,11})","$1 $2",["[25689][1-8]|3"],"0$1"]],
,[,,,,,,,,,[-1]],1,,[,,"[13]00\\d{3,7}|2(?:0(?:0\\d{3,7}|2[023]\\d{1,6}|9[89]\\d{1,6}))|60(?:[12]\\d{5,6}|6\\d{7})|7(?:1\\d{7}|3\\d{8}|5[03-9]\\d{3,7})",,,,,,,[5,6,7,8,9,10]],[,,"[13]0\\d{4,8}|2(?:0(?:[016-8]\\d{3,7}|[2-59]\\d{2,7})|9\\d{4,8})|60(?:[12]\\d{5,6}|6\\d{7})|7(?:1\\d{7}|3\\d{8}|5[03-9]\\d{3,7})",,,,"10112345",,,[5,6,7,8,9,10]],,,[,,,,,,,,,[-1]]],FJ:[,[,,"(?:(?:0800\\d|[235-9])\\d|45)\\d{5}",,,,,,,[7,11]],[,,"(?:3[0-5]\\d|6(?:03|[25-7]\\d)|8[58]\\d)\\d{4}",,,,"3212345",,,[7]],[,,"(?:[279]\\d|45|5[01568]|8[034679])\\d{5}",
,,,"7012345",,,[7]],[,,"0800\\d{7}",,,,"08001234567",,,[11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"FJ",679,"0(?:0|52)",,,,,,"00",,[[,"(\\d{3})(\\d{4})","$1 $2",["[2-9]"]],[,"(\\d{4})(\\d{3})(\\d{4})","$1 $2 $3",["0"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],FK:[,[,,"[2-7]\\d{4}",,,,,,,[5]],[,,"[2-47]\\d{4}",,,,"31234"],[,,"[56]\\d{4}",,,,"51234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"FK",500,"00",
,,,,,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],FM:[,[,,"[39]\\d{6}",,,,,,,[7]],[,,"3[2357]0[1-9]\\d{3}|9[2-6]\\d{5}",,,,"3201234"],[,,"3[2357]0[1-9]\\d{3}|9[2-7]\\d{5}",,,,"3501234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"FM",691,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],FO:[,[,,"(?:[2-8]\\d|90)\\d{4}",,,,,,,[6]],[,,"(?:20|[3-4]\\d|8[19])\\d{4}",,,,"201234"],
[,,"(?:[27][1-9]|5\\d)\\d{4}",,,,"211234"],[,,"80[257-9]\\d{3}",,,,"802123"],[,,"90(?:[1345][15-7]|2[125-7]|99)\\d{2}",,,,"901123"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"(?:6[0-36]|88)\\d{4}",,,,"601234"],"FO",298,"00",,,,"(10(?:01|[12]0|88))",,,,[[,"(\\d{6})","$1",,,"$CC $1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],FR:[,[,,"[1-9]\\d{8}",,,,,,,[9]],[,,"[1-5]\\d{8}",,,,"123456789"],[,,"(?:6\\d|7[3-9])\\d{7}",,,,"612345678"],[,,"80[0-5]\\d{6}",,,,"801234567"],[,,"8[129]\\d{7}",
,,,"891123456"],[,,"884\\d{6}",,,,"884012345"],[,,,,,,,,,[-1]],[,,"9\\d{8}",,,,"912345678"],"FR",33,"00","0",,,"0",,,,[[,"([1-79])(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4 $5",["[1-79]"],"0$1"],[,"(1\\d{2})(\\d{3})","$1 $2",["11"],"$1"],[,"(8\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["8"],"0 $1"]],[[,"([1-79])(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4 $5",["[1-79]"],"0$1"],[,"(8\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["8"],"0 $1"]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"80[6-9]\\d{6}",
,,,"806123456"],,,[,,,,,,,,,[-1]]],GA:[,[,,"(?:0\\d|[2-7])\\d{6}",,,,,,,[7,8]],[,,"01\\d{6}",,,,"01441234",,,[8]],[,,"0?[2-7]\\d{6}",,,,"06031234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GA",241,"00",,,,,,,,[[,"(\\d)(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[2-7]"],"0$1"],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["0"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GB:[,[,,"[1-357-9]\\d{9}|[18]\\d{8}|8\\d{6}",,,,,,,[7,9,10],
[4,5,6,8]],[,,"2(?:0[01378]|3[0189]|4[017]|8[0-46-9]|9[0-2])\\d{7}|1(?:1(?:3[0-58]|4[0-5]|5[0-26-9]|6[0-4]|[78][0-49])|21[0-7]|31[0-8]|[4-69]1\\d)\\d{6}|1(?:2(?:0[024-9]|2[3-9]|3[3-79]|4[1-689]|[58][02-9]|6[0-47-9]|7[013-9]|9\\d)|3(?:0\\d|[25][02-9]|3[02-579]|[468][0-46-9]|7[1-35-79]|9[2-578])|4(?:0[03-9]|[28][02-57-9]|[37]\\d|4[02-69]|5[0-8]|[69][0-79])|5(?:0[1-35-9]|2[024-9]|3[015689]|4[02-9]|5[03-9]|6\\d|7[0-35-9]|8[0-468]|9[0-57-9])|6(?:0[034689]|2[0-35689]|[38][013-9]|4[1-467]|5[0-69]|6[13-9]|7[0-8]|9[0124578])|7(?:0[0246-9]|2\\d|3[0236-8]|4[03-9]|5[0-46-9]|6[013-9]|7[0-35-9]|8[024-9]|9[02-9])|8(?:0[35-9]|2[1-57-9]|3[02-578]|4[0-578]|5[124-9]|6[2-69]|7\\d|8[02-9]|9[02569])|9(?:0[02-589]|2[02-689]|3[1-57-9]|4[2-9]|5[0-579]|6[2-47-9]|7[0-24578]|8\\d|9[2-57]))\\d{6}|1(?:2(?:0(?:46[1-4]|87[2-9])|545[1-79]|76(?:2\\d|3[1-8]|6[1-6])|9(?:7(?:2[0-4]|3[2-5])|8(?:2[2-8]|7[0-47-9]|8[345])))|3(?:638[2-5]|647[23]|8(?:47[04-9]|64[0157-9]))|4(?:044[1-7]|20(?:2[23]|8\\d)|6(?:0(?:30|5[2-57]|6[1-8]|7[2-8])|140)|8(?:052|87[123]))|5(?:24(?:3[2-79]|6\\d)|276\\d|6(?:26[06-9]|686))|6(?:06(?:4\\d|7[4-79])|295[567]|35[34]\\d|47(?:24|61)|59(?:5[08]|6[67]|74)|955[0-4])|7(?:26(?:6[13-9]|7[0-7])|442\\d|50(?:2[0-3]|[3-68]2|76))|8(?:27[56]\\d|37(?:5[2-5]|8[239])|84(?:3[2-58]))|9(?:0(?:0(?:6[1-8]|85)|52\\d)|3583|4(?:66[1-8]|9(?:2[01]|81))|63(?:23|3[1-4])|9561))\\d{3}|176888[2-46-8]\\d{2}|16977[23]\\d{3}",
,,,"1212345678",,,[9,10],[4,5,6,7,8]],[,,"7(?:[1-3]\\d{3}|4(?:[0-46-9]\\d{2}|5(?:[0-689]\\d|7[0-57-9]))|5(?:0[0-8]|[13-9]\\d|2[0-35-9])\\d|7(?:0(?:0[01]|[1-9]\\d)|[1-7]\\d{2}|8[02-9]\\d|9[0-689]\\d)|8(?:[014-9]\\d|[23][0-8])\\d|9(?:[024-9]\\d{2}|1(?:[02-9]\\d|1[028])|3[0-689]\\d))\\d{5}",,,,"7400123456",,,[10]],[,,"80(?:0(?:1111|\\d{6,7})|8\\d{7})",,,,"8001234567"],[,,"(?:87[123]|9(?:[01]\\d|8[2349]))\\d{7}",,,,"9012345678",,,[10]],[,,"8(?:4(?:5464\\d|[2-5]\\d{7})|70\\d{7})",,,,"8431234567",,,[7,
10]],[,,"70\\d{8}",,,,"7012345678",,,[10]],[,,"56\\d{8}",,,,"5612345678",,,[10]],"GB",44,"00","0"," x",,"0",,,,[[,"(7\\d{3})(\\d{6})","$1 $2",["7(?:[1-57-9]|62)","7(?:[1-57-9]|624)"],"0$1"],[,"(\\d{2})(\\d{4})(\\d{4})","$1 $2 $3",["2|5[56]|7[06]"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["1(?:[02-9]1|1)|3|9[018]"],"0$1"],[,"(\\d{5})(\\d{4,5})","$1 $2",["1(?:38|5[23]|69|76|94)","1(?:(?:38|69)7|5(?:24|39)|768|946)","1(?:3873|5(?:242|39[4-6])|(?:697|768)[347]|9467)"],"0$1"],[,"(1\\d{3})(\\d{5,6})",
"$1 $2",["1"],"0$1"],[,"(800)(\\d{4})","$1 $2",["800","8001","80011","800111","8001111"],"0$1"],[,"(845)(46)(4\\d)","$1 $2 $3",["845","8454","84546","845464"],"0$1"],[,"(8\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["8(?:4[2-5]|7[0-3])"],"0$1"],[,"(80\\d)(\\d{3})(\\d{4})","$1 $2 $3",["80"],"0$1"],[,"(800)(\\d{6})","$1 $2",["800"],"0$1"]],,[,,"76(?:0[012]|2[356]|4[0134]|5[49]|6[0-369]|77|81|9[39])\\d{6}",,,,"7640123456",,,[10]],1,,[,,,,,,,,,[-1]],[,,"(?:3[0347]|55)\\d{8}",,,,"5512345678",,,[10]],,,[,,,,,,
,,,[-1]]],GD:[,[,,"(?:473|[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"473(?:2(?:3[0-2]|69)|3(?:2[89]|86)|4(?:[06]8|3[5-9]|4[0-49]|5[5-79]|68|73|90)|63[68]|7(?:58|84)|800|938)\\d{4}",,,,"4732691234",,,,[7]],[,,"473(?:4(?:0[2-79]|1[04-9]|2[0-5]|58)|5(?:2[01]|3[3-8])|901)\\d{4}",,,,"4734031234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"GD",1,"011",
"1",,,"1",,,,,,[,,,,,,,,,[-1]],,"473",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GE:[,[,,"(?:[3-57]\\d\\d|800)\\d{6}",,,,,,,[9],[6]],[,,"(?:3(?:[256]\\d|4[124-9]|7[0-4])|4(?:1\\d|2[2-7]|3[1-79]|4[2-8]|7[239]|9[1-7]))\\d{6}",,,,"322123456",,,,[6]],[,,"(?:5(?:[14]4|5[0157-9]|68|7[0147-9]|9[1-35-9])|790)\\d{6}",,,,"555123456"],[,,"800\\d{6}",,,,"800123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"706\\d{6}",,,,"706123456"],"GE",995,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})",
"$1 $2 $3 $4",["[348]"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["5|790"]],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["7"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,"706\\d{6}"],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GF:[,[,,"[56]94\\d{6}",,,,,,,[9]],[,,"594(?:[023]\\d|1[01]|4[03-9]|5[6-9]|6[0-3]|80|9[014])\\d{4}",,,,"594101234"],[,,"694(?:[0-249]\\d|3[0-48])\\d{4}",,,,"694201234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GF",594,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})",
"$1 $2 $3 $4",,"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GG:[,[,,"(?:1481|[357-9]\\d{3})\\d{6}|8\\d{6}(?:\\d{2})?",,,,,,,[7,9,10],[6]],[,,"1481[25-9]\\d{5}",,,,"1481256789",,,[10],[6]],[,,"7(?:781\\d|839\\d|911[17])\\d{5}",,,,"7781123456",,,[10]],[,,"80(?:0(?:1111|\\d{6,7})|8\\d{7})",,,,"8001234567"],[,,"(?:87[123]|9(?:[01]\\d|8[0-3]))\\d{7}",,,,"9012345678",,,[10]],[,,"8(?:4(?:5464\\d|[2-5]\\d{7})|70\\d{7})",,,,"8431234567",,,[7,10]],[,,"70\\d{8}",,,,"7012345678",
,,[10]],[,,"56\\d{8}",,,,"5612345678",,,[10]],"GG",44,"00","0",,,"0",,,,,,[,,"76(?:0[012]|2[356]|4[0134]|5[49]|6[0-369]|77|81|9[39])\\d{6}",,,,"7640123456",,,[10]],,,[,,,,,,,,,[-1]],[,,"(?:3[0347]|55)\\d{8}",,,,"5512345678",,,[10]],,,[,,,,,,,,,[-1]]],GH:[,[,,"(?:[235]\\d{3}|800)\\d{5}",,,,,,,[8,9],[7]],[,,"3(?:0(?:[237]\\d|80)|[167](?:2[0-6]|7\\d|80)|2(?:2[0-5]|7\\d|80)|3(?:2[0-3]|7\\d|80)|4(?:2[013-9]|3[01]|7\\d|80)|5(?:2[0-7]|7\\d|80)|8(?:2[0-2]|7\\d|80)|9(?:[28]0|7\\d))\\d{5}",,,,"302345678",,
,[9],[7]],[,,"(?:2[034678]\\d|5(?:[0457]\\d|6[01]))\\d{6}",,,,"231234567",,,[9]],[,,"800\\d{5}",,,,"80012345",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GH",233,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["[235]"],"0$1"],[,"(\\d{3})(\\d{5})","$1 $2",["8"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,"800\\d{5}",,,,,,,[8]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GI:[,[,,"(?:[25]\\d|62)\\d{6}",,,,,,,[8]],[,,"2(?:00\\d{2}|1(?:6[24-7]\\d|90[0-2])|2(?:2[2457]\\d|50[0-2]))\\d{3}",
,,,"20012345"],[,,"(?:5[46-8]|62)\\d{6}",,,,"57123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GI",350,"00",,,,,,,,[[,"(\\d{3})(\\d{5})","$1 $2",["2"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GL:[,[,,"(?:19|[2-689]\\d)\\d{4}",,,,,,,[6]],[,,"(?:19|3[1-7]|6[14689]|8[14-79]|9\\d)\\d{4}",,,,"321000"],[,,"(?:[25][1-9]|4[2-9])\\d{4}",,,,"221234"],[,,"80\\d{4}",,,,"801234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"3[89]\\d{4}",
,,,"381234"],"GL",299,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GM:[,[,,"[2-9]\\d{6}",,,,,,,[7]],[,,"(?:4(?:[23]\\d{2}|4(?:1[024679]|[6-9]\\d))|5(?:54[0-7]|6(?:[67]\\d)|7(?:1[04]|2[035]|3[58]|48))|8\\d{3})\\d{3}",,,,"5661234"],[,,"[23679]\\d{6}",,,,"3012345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GM",220,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,
,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GN:[,[,,"(?:30|6\\d\\d|722)\\d{6}",,,,,,,[8,9]],[,,"30(?:24|3[12]|4[1-35-7]|5[13]|6[189]|[78]1|9[1478])\\d{4}",,,,"30241234",,,[8]],[,,"6[02356]\\d{7}",,,,"601123456",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"722\\d{6}",,,,"722123456",,,[9]],"GN",224,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["3"]],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[67]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,
,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GP:[,[,,"(?:590|69\\d)\\d{6}",,,,,,,[9]],[,,"590(?:0[1-68]|1[0-2]|2[0-68]|3[1289]|4[0-24-9]|5[3-579]|6[0189]|7[08]|8[0-689]|9\\d)\\d{4}",,,,"590201234"],[,,"69(?:0\\d{2}|1(?:2[29]|3[0-5]))\\d{4}",,,,"690001234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GP",590,"00","0",,,"0",,,,[[,"([56]\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["590|69[01]"],"0$1"]],,[,,,,,,,,,[-1]],1,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GQ:[,
[,,"(?:222|(?:3\\d|55|[89]0)\\d)\\d{6}",,,,,,,[9]],[,,"3(?:3(?:3\\d[7-9]|[0-24-9]\\d[46])|5\\d{2}[7-9])\\d{4}",,,,"333091234"],[,,"(?:222|55[15])\\d{6}",,,,"222123456"],[,,"80\\d[1-9]\\d{5}",,,,"800123456"],[,,"90\\d[1-9]\\d{5}",,,,"900123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GQ",240,"00",,,,,,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["[235]"]],[,"(\\d{3})(\\d{6})","$1 $2",["[89]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GR:[,[,,"(?:[268]\\d|[79]0)\\d{8}",
,,,,,,[10]],[,,"2(?:1\\d{2}|2(?:2[1-46-9]|3[1-8]|4[1-7]|5[1-4]|6[1-8]|7[1-5]|[89][1-9])|3(?:1\\d|2[1-57]|[35][1-3]|4[13]|7[1-7]|8[124-6]|9[1-79])|4(?:1\\d|2[1-8]|3[1-4]|4[13-5]|6[1-578]|9[1-5])|5(?:1\\d|[29][1-4]|3[1-5]|4[124]|5[1-6])|6(?:1\\d|3[1245]|4[1-7]|5[13-9]|[269][1-6]|7[14]|8[1-5])|7(?:1\\d|2[1-5]|3[1-6]|4[1-7]|5[1-57]|6[135]|9[125-7])|8(?:1\\d|2[1-5]|[34][1-4]|9[1-57]))\\d{6}",,,,"2123456789"],[,,"6(?:8[57-9]|9\\d)\\d{7}",,,,"6912345678"],[,,"800\\d{7}",,,,"8001234567"],[,,"90[19]\\d{7}",
,,,"9091234567"],[,,"8(?:0[16]|12|25)\\d{7}",,,,"8011234567"],[,,"70\\d{8}",,,,"7012345678"],[,,,,,,,,,[-1]],"GR",30,"00",,,,,,,,[[,"([27]\\d)(\\d{4})(\\d{4})","$1 $2 $3",["21|7"]],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["2[2-9]1|[689]"]],[,"(2\\d{3})(\\d{6})","$1 $2",["2[2-9][02-9]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GT:[,[,,"(?:1\\d{3}|[2-7])\\d{7}",,,,,,,[8,11]],[,,"[267][2-9]\\d{6}",,,,"22456789",,,[8]],[,,"[345]\\d{7}",,,,"51234567",,,[8]],[,,"18[01]\\d{8}",
,,,"18001112222",,,[11]],[,,"19\\d{9}",,,,"19001112222",,,[11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GT",502,"00",,,,,,,,[[,"(\\d{4})(\\d{4})","$1 $2",["[2-7]"]],[,"(\\d{4})(\\d{3})(\\d{4})","$1 $2 $3",["1"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GU:[,[,,"(?:[58]\\d\\d|671|900)\\d{7}",,,,,,,[10],[7]],[,,"671(?:3(?:00|3[39]|4[349]|55|6[26])|4(?:00|56|7[1-9]|8[0236-9])|5(?:55|6[2-5]|88)|6(?:3[2-578]|4[24-9]|5[34]|78|8[235-9])|7(?:[079]7|2[0167]|3[45]|47|8[7-9])|8(?:[2-57-9]8|6[48])|9(?:2[29]|6[79]|7[1279]|8[7-9]|9[78]))\\d{4}",
,,,"6713001234",,,,[7]],[,,"671(?:3(?:00|3[39]|4[349]|55|6[26])|4(?:00|56|7[1-9]|8[0236-9])|5(?:55|6[2-5]|88)|6(?:3[2-578]|4[24-9]|5[34]|78|8[235-9])|7(?:[079]7|2[0167]|3[45]|47|8[7-9])|8(?:[2-57-9]8|6[48])|9(?:2[29]|6[79]|7[1279]|8[7-9]|9[78]))\\d{4}",,,,"6713001234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"GU",1,"011","1",,,"1",,,1,,,[,,,,
,,,,,[-1]],,"671",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GW:[,[,,"[49]\\d{8}|4\\d{6}",,,,,,,[7,9]],[,,"443\\d{6}",,,,"443201234",,,[9]],[,,"9(?:5\\d|6[569]|77)\\d{6}",,,,"955012345",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"40\\d{5}",,,,"4012345",,,[7]],"GW",245,"00",,,,,,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["44|9[5-7]"]],[,"(\\d{3})(\\d{4})","$1 $2",["40"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],GY:[,[,,"(?:(?:(?:[2-46]\\d|77)\\d|862)\\d|9008)\\d{3}",
,,,,,,[7]],[,,"(?:2(?:1[6-9]|2[0-35-9]|3[1-4]|5[3-9]|6\\d|7[0-24-79])|3(?:2[25-9]|3\\d)|4(?:4[0-24]|5[56])|77[1-57])\\d{4}",,,,"2201234"],[,,"6\\d{6}",,,,"6091234"],[,,"(?:289|862)\\d{4}",,,,"2891234"],[,,"9008\\d{3}",,,,"9008123"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"GY",592,"001",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],HK:[,[,,"8[0-46-9]\\d{6,7}|9\\d{4}(?:\\d(?:\\d(?:\\d{4})?)?)?|(?:[235-79]\\d|46)\\d{6}",,,,,,,[5,
6,7,8,9,11]],[,,"(?:2(?:[13-8]\\d|2[013-9]|9[0-24-9])\\d|3(?:[1569][0-24-9]\\d|4[0-246-9]\\d|7[0-24-69]\\d|8(?:4[04]|9\\d))|58(?:0[1-8]|1[2-9]))\\d{4}",,,,"21234567",,,[8]],[,,"(?:46(?:0[0-6]|10|4[0-57-9])|5(?:[1-59][0-46-9]\\d|6[0-4689]\\d|7(?:[0-2469]\\d|30))|6(?:0[1-9]\\d|[13-59]\\d{2}|2(?:[0-57-9]\\d|6[01])|[68][0-57-9]\\d|7[0-79]\\d)|707[1-5]|8480|9(?:0[1-9]\\d|1[02-9]\\d|2(?:[0-8]\\d|9[03-9])|[358][0-8]\\d|[467]\\d{2}))\\d{4}",,,,"51234567",,,[8]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,"900(?:[0-24-9]\\d{7}|3\\d{1,4})",
,,,"90012345678",,,[5,6,7,8,11]],[,,,,,,,,,[-1]],[,,"8(?:1[0-4679]\\d|2(?:[0-36]\\d|7[0-4])|3(?:[034]\\d|2[09]|70))\\d{4}",,,,"81123456",,,[8]],[,,,,,,,,,[-1]],"HK",852,"00(?:[126-9]|30|5[09])?",,,,,,"00",,[[,"(\\d{4})(\\d{4})","$1 $2",["[2-7]|[89](?:0[1-9]|[1-9])"]],[,"(800)(\\d{3})(\\d{3})","$1 $2 $3",["800"]],[,"(900)(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3 $4",["900"]],[,"(900)(\\d{2,5})","$1 $2",["900"]]],,[,,"7(?:1(?:0[0-38]|1[0-3679]|3[013]|69|9[136])|2(?:[02389]\\d|1[18]|7[27-9])|3(?:[0-38]\\d|7[0-369]|9[2357-9])|47\\d|5(?:[178]\\d|5[0-5])|6(?:0[0-7]|2[236-9]|[35]\\d)|7(?:[27]\\d|8[7-9])|8(?:[23689]\\d|7[1-9])|9(?:[025]\\d|6[0-246-8]|7[0-36-9]|8[238]))\\d{4}",
,,,"71123456",,,[8]],,,[,,,,,,,,,[-1]],[,,"30(?:0[1-9]|[15-7]\\d|2[047]|89)\\d{4}",,,,"30161234",,,[8]],,,[,,,,,,,,,[-1]]],HN:[,[,,"[237-9]\\d{7}",,,,,,,[8]],[,,"2(?:2(?:0[019]|1[1-36]|[23]\\d|4[04-6]|5[57]|7[013689]|8[0146-9]|9[012])|4(?:07|2[3-59]|3[13-689]|4[0-68]|5[1-35])|5(?:16|4[03-5]|5\\d|6[4-6]|74)|6(?:[056]\\d|17|3[04]|4[0-378]|[78][0-8]|9[01])|7(?:6[46-9]|7[02-9]|8[034])|8(?:79|8[0-35789]|9[1-57-9]))\\d{4}",,,,"22123456"],[,,"[37-9]\\d{7}",,,,"91234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"HN",504,"00",,,,,,,,[[,"(\\d{4})(\\d{4})","$1-$2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],HR:[,[,,"(?:[24-69]\\d|3[0-79])\\d{7}|80\\d{5,7}|[1-79]\\d{7}|6\\d{5,6}",,,,,,,[6,7,8,9]],[,,"1\\d{7}|(?:2[0-3]|3[1-5]|4[02-47-9]|5[1-3])\\d{6,7}",,,,"12345678",,,[8,9],[6,7]],[,,"9(?:01\\d|[1259]\\d{2}|7(?:[0679]\\d|51)|8\\d{1,2})\\d{5}",,,,"921234567",,,[8,9]],[,,"80[01]\\d{4,6}",,,,"800123456",,,[7,8,9]],[,,"6(?:[01]\\d{0,2}|[459]\\d{2})\\d{4}",
,,,"611234",,,[6,7,8]],[,,,,,,,,,[-1]],[,,"7[45]\\d{6}",,,,"74123456",,,[8]],[,,,,,,,,,[-1]],"HR",385,"00","0",,,"0",,,,[[,"(1)(\\d{4})(\\d{3})","$1 $2 $3",["1"],"0$1"],[,"([2-5]\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["[2-5]"],"0$1"],[,"(9\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["9"],"0$1"],[,"(6[01])(\\d{2})(\\d{2,3})","$1 $2 $3",["6[01]"],"0$1"],[,"([67]\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["[67]"],"0$1"],[,"(80[01])(\\d{2})(\\d{2,3})","$1 $2 $3",["80[01]"],"0$1"],[,"(80[01])(\\d{3})(\\d{3})","$1 $2 $3",["80[01]"],
"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"(?:62\\d?|72)\\d{6}",,,,"62123456",,,[8,9]],,,[,,,,,,,,,[-1]]],HT:[,[,,"[2-489]\\d{7}",,,,,,,[8]],[,,"2(?:2\\d|5[1-5]|81|9[149])\\d{5}",,,,"22453300"],[,,"[34]\\d{7}",,,,"34101234"],[,,"8\\d{7}",,,,"80012345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"(?:9(?:[67][0-4]|8[0-3589]|9\\d))\\d{5}",,,,"98901234"],"HT",509,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{4})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],HU:[,
[,,"[2357]\\d{8}|[1-9]\\d{7}",,,,,,,[8,9],[6]],[,,"(?:1\\d|2[2-9]|3[2-7]|4[24-9]|5[2-79]|6[23689]|7[2-9]|8[2-57-9]|9[2-69])\\d{6}",,,,"12345678",,,[8],[6]],[,,"(?:[257]0|3[01])\\d{7}",,,,"201234567",,,[9]],[,,"[48]0\\d{6}",,,,"80123456",,,[8]],[,,"9[01]\\d{6}",,,,"90123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"21\\d{7}",,,,"211234567",,,[9]],"HU",36,"00","06",,,"06",,,,[[,"(1)(\\d{3})(\\d{4})","$1 $2 $3",["1"],"($1)"],[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["[2-9]"],"($1)"]],,[,,,,,,,,,[-1]],
,,[,,"[48]0\\d{6}",,,,,,,[8]],[,,"38\\d{7}",,,,"381234567",,,[9]],,,[,,,,,,,,,[-1]]],ID:[,[,,"(?:[1-36]|8\\d{5})\\d{6}|[1-9]\\d{8,10}|[2-9]\\d{7}",,,,,,,[7,8,9,10,11,12],[5,6]],[,,"2(?:1(?:14\\d{3}|500\\d{3}|\\d{7,8})|2\\d{6,8}|4\\d{7,8})|(?:2(?:[35][1-4]|6[0-8]|7[1-6]|8\\d|9[1-8])|3(?:1|[25][1-8]|3[1-68]|4[1-3]|6[1-3568]|7[0-469]|8\\d)|4(?:0[1-589]|1[01347-9]|2[0-36-8]|3[0-24-68]|43|5[1-378]|6[1-5]|7[134]|8[1245])|5(?:1[1-35-9]|2[25-8]|3[124-9]|4[1-3589]|5[1-46]|6[1-8])|6(?:19?|[25]\\d|3[1-69]|4[1-6])|7(?:02|[125][1-9]|[36]\\d|4[1-8]|7[0-36-9])|9(?:0[12]|1[013-8]|2[0-479]|5[125-8]|6[23679]|7[159]|8[01346]))\\d{5,8}",
,,,"218350123",,,[7,8,9,10,11],[5,6]],[,,"(?:2(?:1(?:3[145]|4[01]|5[1-469]|60|8[0359])|2(?:88|9[1256])|3[1-4]9|4(?:36|91)|5(?:1[349]|[2-4]9)|6[0-7]9|7(?:[1-36]9|4[39])|8[1-5]9|9[1-48]9)|3(?:19[1-3]|2[12]9|3[13]9|4(?:1[69]|39)|5[14]9|6(?:1[69]|2[89])|709)|4[13]19|5(?:1(?:19|8[39])|4[129]9|6[12]9)|6(?:19[12]|2(?:[23]9|77))|7(?:1[13]9|2[15]9|419|5(?:1[89]|29)|6[15]9|7[178]9))\\d{5,6}|8[1-35-9]\\d{7,10}",,,,"812345678",,,[9,10,11,12]],[,,"177\\d{6,8}|800\\d{5,7}",,,,"8001234567",,,[8,9,10,11]],[,,"809\\d{7}",
,,,"8091234567",,,[10]],[,,"804\\d{7}",,,,"8041234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"ID",62,"0(?:0[1789]|10(?:00|1[67]))","0",,,"0",,,,[[,"(\\d{2})(\\d{5,8})","$1 $2",["2[124]|[36]1"],"(0$1)"],[,"(\\d{3})(\\d{5,8})","$1 $2",["2[035-9]|[36][02-9]|[4579]"],"(0$1)"],[,"(8\\d{2})(\\d{3,4})(\\d{3})","$1-$2-$3",["8[1-35-9]"],"0$1"],[,"(8\\d{2})(\\d{4})(\\d{4,5})","$1-$2-$3",["8[1-35-9]"],"0$1"],[,"(1)(500)(\\d{3})","$1 $2 $3",["150","1500"],"$1"],[,"(177)(\\d{6,8})","$1 $2",["177"],"0$1"],[,
"(800)(\\d{5,7})","$1 $2",["800"],"0$1"],[,"(804)(\\d{3})(\\d{4})","$1 $2 $3",["804"],"0$1"],[,"(80\\d)(\\d)(\\d{3})(\\d{3})","$1 $2 $3 $4",["80[79]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,"8071\\d{6}",,,,,,,[10]],[,,"1500\\d{3}|8071\\d{6}",,,,"8071123456",,,[7,10]],,,[,,,,,,,,,[-1]]],IE:[,[,,"[148]\\d{9}|[124-9]\\d{8}|[124-69]\\d{7}|[24-69]\\d{6}",,,,,,,[7,8,9,10],[5,6]],[,,"1\\d{7,8}|2(?:1\\d{6,7}|3\\d{7}|[24-9]\\d{5})|4(?:0[24]\\d{5}|[1-469]\\d{7}|5\\d{6}|7\\d{5}|8[0-46-9]\\d{7})|5(?:0[45]\\d{5}|1\\d{6}|[23679]\\d{7}|8\\d{5})|6(?:1\\d{6}|[237-9]\\d{5}|[4-6]\\d{7})|7[14]\\d{7}|9(?:1\\d{6}|[04]\\d{7}|[35-9]\\d{5})",
,,,"2212345",,,,[5,6]],[,,"8(?:22\\d{6}|[35-9]\\d{7})",,,,"850123456",,,[9]],[,,"1800\\d{6}",,,,"1800123456",,,[10]],[,,"15(?:1[2-8]|[2-8]0|9[089])\\d{6}",,,,"1520123456",,,[10]],[,,"18[59]0\\d{6}",,,,"1850123456",,,[10]],[,,"700\\d{6}",,,,"700123456",,,[9]],[,,"76\\d{7}",,,,"761234567",,,[9]],"IE",353,"00","0",,,"0",,,,[[,"(1)(\\d{3,4})(\\d{4})","$1 $2 $3",["1"],"(0$1)"],[,"(\\d{2})(\\d{5})","$1 $2",["2[24-9]|47|58|6[237-9]|9[35-9]"],"(0$1)"],[,"(\\d{3})(\\d{5})","$1 $2",["40[24]|50[45]"],"(0$1)"],
[,"(48)(\\d{4})(\\d{4})","$1 $2 $3",["48"],"(0$1)"],[,"(818)(\\d{3})(\\d{3})","$1 $2 $3",["818"],"(0$1)"],[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["[24-69]|7[14]"],"(0$1)"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["76|8[35-9]"],"0$1"],[,"(8\\d)(\\d)(\\d{3})(\\d{4})","$1 $2 $3 $4",["8[35-9]5"],"0$1"],[,"(700)(\\d{3})(\\d{3})","$1 $2 $3",["700"],"0$1"],[,"(\\d{4})(\\d{3})(\\d{3})","$1 $2 $3",["1(?:5|8[059])","1(?:5|8[059]0)"],"$1"]],,[,,,,,,,,,[-1]],,,[,,"18[59]0\\d{6}",,,,,,,[10]],[,,"818\\d{6}",
,,,"818123456",,,[9]],,,[,,"8[35-9]5\\d{7}",,,,"8551234567",,,[10]]],IL:[,[,,"1\\d{6}(?:\\d{3,5})?|[57]\\d{8}|[1-489]\\d{7}|[2-689]\\d{3}",,,,,,,[4,7,8,9,10,11,12]],[,,"(?:153\\d{1,2}|[2-489])\\d{7}",,,,"21234567",,,[8,11,12],[7]],[,,"5(?:[0-489][2-9]\\d|5(?:01|2[2-5]|3[23]|4[45]|5[015689]|6[6-8]|7[0-267]|8[7-9]|9[1-9])|6\\d{2})\\d{5}",,,,"502345678",,,[9]],[,,"1(?:80[019]\\d{3}|255)\\d{3}",,,,"1800123456",,,[7,10]],[,,"1(?:212|(?:9(?:0[01]|19)|200)\\d{2})\\d{4}",,,,"1919123456",,,[8,9,10]],[,,"1700\\d{6}",
,,,"1700123456",,,[10]],[,,,,,,,,,[-1]],[,,"7(?:18\\d|2[23]\\d|3[237]\\d|47\\d|6[58]\\d|7\\d{2}|8(?:2\\d|33|55|77|81)|9[2579]\\d)\\d{5}",,,,"771234567",,,[9]],"IL",972,"0(?:0|1[2-9])","0",,,"0",,,,[[,"([2-489])(\\d{3})(\\d{4})","$1-$2-$3",["[2-489]"],"0$1"],[,"([57]\\d)(\\d{3})(\\d{4})","$1-$2-$3",["[57]"],"0$1"],[,"(153)(\\d{1,2})(\\d{3})(\\d{4})","$1 $2 $3 $4",["153"]],[,"(1)([7-9]\\d{2})(\\d{3})(\\d{3})","$1-$2-$3-$4",["1[7-9]"]],[,"(1255)(\\d{3})","$1-$2",["125","1255"]],[,"(1200)(\\d{3})(\\d{3})",
"$1-$2-$3",["120","1200"]],[,"(1212)(\\d{2})(\\d{2})","$1-$2-$3",["121","1212"]],[,"(1599)(\\d{6})","$1-$2",["159","1599"]],[,"(151)(\\d{1,2})(\\d{3})(\\d{4})","$1-$2 $3-$4",["151"]],[,"(\\d{4})","*$1",["[2-689]"]]],,[,,,,,,,,,[-1]],,,[,,"1700\\d{6}|[2-689]\\d{3}",,,,,,,[4,10]],[,,"[2-689]\\d{3}|1599\\d{6}",,,,"1599123456",,,[4,10]],,,[,,"151\\d{8,9}",,,,"15112340000",,,[11,12]]],IM:[,[,,"(?:1624|(?:[3578]\\d|90)\\d\\d)\\d{6}",,,,,,,[10],[6]],[,,"1624[5-8]\\d{5}",,,,"1624756789",,,,[6]],[,,"7(?:4576|[59]24\\d|624[0-4689])\\d{5}",
,,,"7924123456"],[,,"808162\\d{4}",,,,"8081624567"],[,,"(?:872299|90[0167]624)\\d{4}",,,,"9016247890"],[,,"8(?:4(?:40[49]06|5624\\d)|70624\\d)\\d{3}",,,,"8456247890"],[,,"70\\d{8}",,,,"7012345678"],[,,"56\\d{8}",,,,"5612345678"],"IM",44,"00","0",,,"0",,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"3(?:08162\\d|3\\d{5}|4(?:40[49]06|5624\\d)|7(?:0624\\d|2299\\d))\\d{3}|55\\d{8}",,,,"5512345678"],,,[,,,,,,,,,[-1]]],IN:[,[,,"(?:00800|1\\d{0,5}|[2-9]\\d\\d)\\d{7}",,,,,,,[8,9,10,11,12,13],[6,7]],[,,"(?:11|2[02]|33|4[04]|79|80)[2-7]\\d{7}|(?:1(?:2[0-249]|3[0-25]|4[145]|[59][14]|6[014]|7[1257]|8[01346])|2(?:1[257]|3[013]|4[01]|5[0137]|6[0158]|78|8[1568]|9[14])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|3[15]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|[36][25]|22|4[28]|5[12]|[78]1|9[15])|6(?:12|[2345]1|57|6[13]|7[14]|80)|7(?:12|2[14]|3[134]|4[47]|5[15]|[67]1|88)|8(?:16|2[014]|3[126]|6[136]|7[078]|8[34]|91))[2-7]\\d{6}|(?:(?:1(?:2[35-8]|3[346-9]|4[236-9]|[59][0235-9]|6[235-9]|7[34689]|8[257-9])|2(?:1[134689]|3[24-8]|4[2-8]|5[25689]|6[2-4679]|7[13-79]|8[2-479]|9[235-9])|3(?:01|1[79]|2[1-5]|4[25-8]|5[125689]|6[235-7]|7[157-9]|8[2-46-8])|4(?:1[14578]|2[5689]|3[2-467]|5[4-7]|6[35]|73|8[2689]|9[2389])|5(?:[16][146-9]|2[14-8]|3[1346]|4[14-69]|5[46]|7[2-4]|8[2-8]|9[246])|6(?:1[1358]|2[2457]|3[2-4]|4[235-7]|[57][2-689]|6[24-578]|8[1-6])|8(?:1[1357-9]|2[235-8]|3[03-57-9]|4[0-24-9]|5\\d|6[2457-9]|7[1-6]|8[1256]|9[2-4]))\\d|7(?:(?:1[013-9]|2[0235-9]|3[2679]|4[1-35689]|5[2-46-9]|[67][02-9]|9\\d)\\d|8(?:2[0-6]|[013-8]\\d)))[2-7]\\d{5}",
,,,"7410410123",,,[10],[6,7,8]],[,,"(?:6(?:0(?:0[0-359]|26)\\d|1279|2(?:[06][0-59]|3[0589]|8[0-49]|9[0-6])\\d|3(?:0[0-39]\\d|5(?:0[0-6]|[1-9]\\d)|6[0-3]\\d|7[015-9]\\d|8\\d{2}|9[0-79]\\d)|90[019]\\d)|7(?:0\\d{3}|19[0-5]\\d|2(?:[0235679]\\d{2}|[14][017-9]\\d|8(?:[0-59]\\d|[678][089]))|3(?:[05-8]\\d{2}|1(?:[089]\\d|11|7[02-8])|2(?:[0-49][089]|[5-8]\\d)|3[017-9]\\d|4(?:[07-9]\\d|11)|9(?:[016-9]\\d|[2-5][089]))|4(?:0\\d{2}|1(?:[015-9]\\d|[23][089]|4[089])|2(?:0[089]|[1-7][089]|[89]\\d)|3(?:[0-8][089]|9\\d)|4(?:[089]\\d|11|7[02-8])|[56]\\d[089]|7(?:[089]\\d|11|7[02-8])|8(?:[0-24-7][089]|[389]\\d)|9(?:[0-6][089]|7[089]|[89]\\d))|5(?:[0346-8]\\d{2}|1(?:[07-9]\\d|11)|2(?:[04-9]\\d|[123][089])|5[017-9]\\d|9(?:[0-6][089]|[7-9]\\d))|6(?:0(?:[0-47]\\d|[5689][089])|(?:1[0-257-9]|[6-9]\\d)\\d|2(?:[0-4]\\d|[5-9][089])|3(?:[02-8][089]|[19]\\d)|4\\d[089]|5(?:[0-367][089]|[4589]\\d))|7(?:0(?:0[02-9]|[13-7][089]|[289]\\d)|[1-9]\\d{2})|8(?:[0-79]\\d{2}|8(?:[089]\\d|11|7[02-9]))|9(?:[089]\\d{2}|313|7(?:[02-8]\\d|9[07-9])))|8(?:0(?:[01589]\\d{2}|6[67]\\d|7(?:[02-8]\\d|9[04-9]))|1(?:[0-57-9]\\d{2}|6(?:[089]\\d|7[02-8]))|2(?:0(?:[089]\\d|7[02-8])|[14](?:[089]\\d|7[02-8])|[235-9]\\d{2})|3(?:[0357-9]\\d{2}|1(?:[089]\\d|7[02-8])|2(?:[089]\\d|7[02-8])|4\\d{2}|6(?:[089]\\d|7[02-8]))|[45]\\d{3}|6(?:[02457-9]\\d{2}|1(?:[089]\\d|7[02-8])|3(?:[089]\\d|7[02-8])|6(?:[08]\\d|7[02-8]|9\\d))|7(?:0[07-9]\\d|[1-69]\\d{2}|[78](?:[089]\\d|7[02-8]))|8(?:[0-25-9]\\d{2}|3(?:[089]\\d|7[02-8])|4(?:[0489]\\d|7[02-8]))|9(?:[02-9]\\d{2}|1(?:[0289]\\d|7[02-8])))|9\\d{4})\\d{5}",
,,,"8123456789",,,[10]],[,,"00800\\d{7}|1(?:600\\d{6}|80(?:0\\d{4,9}|3\\d{9}))",,,,"1800123456"],[,,"186[12]\\d{9}",,,,"1861123456789",,,[13]],[,,"1860\\d{7}",,,,"18603451234",,,[11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"IN",91,"00","0",,,"0",,,,[[,"(\\d{8})","$1",["561","5616","56161"],"$1",,1],[,"(\\d{5})(\\d{5})","$1 $2",["6(?:0[02]|12|2[03689]|3[05-9]|9[019])|7(?:[02-8]|19|9[037-9])|8(?:0[015-9]|[1-9])|9","6(?:0(?:0|26)|127|2(?:[06][0-59]|3[0589]|8[0-39]|9[0-46])|3(?:0[0-39]|5[0-46-9]|6[0-3]|7[015-9]|8|9[0-79])|9[019])|7(?:[07]|19[0-5]|2(?:[0235-9]|[14][017-9])|3(?:[025-9]|[134][017-9])|4(?:[0-35689]|[47][017-9])|5(?:[02-46-9]|[15][017-9])|6(?:[02-9]|1[0-257-9])|8(?:[0-79]|8[0189])|9(?:[089]|31|7[02-9]))|8(?:0(?:[01589]|6[67]|7[02-9])|1(?:[0-57-9]|6[07-9])|2(?:[014][07-9]|[235-9])|3(?:[03-57-9]|[126][07-9])|[45]|6(?:[02457-9]|[136][07-9])|7(?:[078][07-9]|[1-69])|8(?:[0-25-9]|3[07-9]|4[047-9])|9(?:[02-9]|1[027-9]))|9",
"6(?:0(?:0|26)|1279|2(?:[06][0-59]|3[0589]|8[0-39]|9[0-46])|3(?:0[0-39]|5[0-46-9]|6[0-3]|7[015-9]|8|9[0-79])|9[019])|7(?:0|19[0-5]|2(?:[0235-79]|[14][017-9]|8(?:[0-69]|[78][089]))|3(?:[05-8]|1(?:[0189]|7[02-9])|2(?:[0-49][089]|[5-8])|3[017-9]|4(?:[07-9]|11)|9(?:[01689]|[2-5][089]|7[0189]))|4(?:[056]|1(?:[0135-9]|[24][089])|[29](?:[0-7][089]|[89])|3(?:[0-8][089]|9)|[47](?:[089]|11|7[02-8])|8(?:[0-24-7][089]|[389]))|5(?:[0346-9]|[15][017-9]|2(?:[03-9]|[12][089]))|6(?:[0346-9]|1[0-257-9]|2(?:[0-4]|[5-9][089])|5(?:[0-367][089]|[4589]))|7(?:0(?:[02-9]|1[089])|[1-9])|8(?:[0-79]|8(?:0[0189]|11|8[013-9]|9))|9(?:[089]|313|7(?:[02-8]|9[07-9])))|8(?:0(?:[01589]|6[67]|7(?:[02-8]|9[04-9]))|1(?:[0-57-9]|6(?:[089]|7[02-8]))|2(?:[014](?:[089]|7[02-8])|[235-9])|3(?:[03-57-9]|[126](?:[089]|7[02-8]))|[45]|6(?:[02457-9]|[136](?:[089]|7[02-8]))|7(?:0[07-9]|[1-69]|[78](?:[089]|7[02-8]))|8(?:[0-25-9]|3(?:[089]|7[02-8])|4(?:[0489]|7[02-8]))|9(?:[02-9]|1(?:[0289]|7[02-8])))|9"],
"0$1",,1],[,"(\\d{2})(\\d{4})(\\d{4})","$1 $2 $3",["11|2[02]|33|4[04]|79[1-9]|80[2-46]"],"0$1",,1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["1(?:2[0-249]|3[0-25]|4[145]|[59][14]|[68][1-9]|7[1257])|2(?:1[257]|3[013]|4[01]|5[0137]|6[0158]|78|8[1568]|9[14])|3(?:26|4[1-3]|5[34]|6[01489]|7[02-46]|8[159])|4(?:1[36]|2[1-47]|3[15]|5[12]|6[0-26-9]|7[0-24-9]|8[013-57]|9[014-7])|5(?:1[025]|22|[36][25]|4[28]|5[12]|[78]1|9[15])|6(?:12|[2-4]1|5[17]|6[13]|7[14]|80)|7(?:12|2[14]|3[134]|4[47]|5[15]|[67]1|88)|8(?:16|2[014]|3[126]|6[136]|7[078]|8[34]|91)"],
"0$1",,1],[,"(\\d{4})(\\d{3})(\\d{3})","$1 $2 $3",["1(?:[23579]|[468][1-9])|[2-8]"],"0$1",,1],[,"(\\d{2})(\\d{3})(\\d{4})(\\d{3})","$1 $2 $3 $4",["008"],"0$1",,1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["140"],"$1",,1],[,"(\\d{4})(\\d{2})(\\d{4})","$1 $2 $3",["160","1600"],"$1",,1],[,"(\\d{4})(\\d{4,5})","$1 $2",["180","1800"],"$1",,1],[,"(\\d{4})(\\d{2,4})(\\d{4})","$1 $2 $3",["180","1800"],"$1",,1],[,"(\\d{4})(\\d{3,4})(\\d{4})","$1 $2 $3",["186","1860"],"$1",,1],[,"(\\d{4})(\\d{3})(\\d{3})(\\d{3})",
"$1 $2 $3 $4",["18[06]"],"$1",,1]],,[,,,,,,,,,[-1]],,,[,,"00800\\d{7}|1(?:600\\d{6}|8(?:0(?:0\\d{4,9}|3\\d{9})|6(?:0\\d{7}|[12]\\d{9})))"],[,,"140\\d{7}",,,,"1409305260",,,[10]],,,[,,,,,,,,,[-1]]],IO:[,[,,"3\\d{6}",,,,,,,[7]],[,,"37\\d{5}",,,,"3709100"],[,,"38\\d{5}",,,,"3801234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"IO",246,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],IQ:[,[,,"(?:1|[2-6]\\d?|7\\d\\d)\\d{7}",
,,,,,,[8,9,10],[6,7]],[,,"1\\d{7}|(?:2[13-5]|3[02367]|4[023]|5[03]|6[026])\\d{6,7}",,,,"12345678",,,[8,9],[6,7]],[,,"7[3-9]\\d{8}",,,,"7912345678",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"IQ",964,"00","0",,,"0",,,,[[,"(1)(\\d{3})(\\d{4})","$1 $2 $3",["1"],"0$1"],[,"([2-6]\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["[2-6]"],"0$1"],[,"(7\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["7"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],IR:[,
[,,"[1-9]\\d{9}|[1-8]\\d{5,6}",,,,,,,[6,7,10],[4,5,8]],[,,"(?:(?:1[137]|2[13-68]|3[1458]|4[145]|5[1468]|6[16]|7[1467]|8[13467])(?:\\d{8}|(?:[16]|[289]\\d?)\\d{3}))|94(?:000|11[0-7]|2\\d{2}|30[01]|4(?:11|40))\\d{5}",,,,"2123456789",,,,[4,5,8]],[,,"9(?:0(?:[1-35]\\d{2}|44\\d)|[13]\\d{3}|2[0-2]\\d{2}|9(?:[01]\\d{2}|44\\d|8(?:10|88)|9(?:0[013]|1[134]|21|9[89])))\\d{5}",,,,"9123456789",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"993\\d{7}",,,,"9932123456",,,[10]],"IR",98,
"00","0",,,"0",,,,[[,"(\\d{2})(\\d{4})(\\d{4})","$1 $2 $3",["[1-8]"],"0$1"],[,"(\\d{2})(\\d{4,5})","$1 $2",["[1-8]"],"0$1"],[,"(\\d{4,5})","$1",["96"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3,4})","$1 $2 $3",["9"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,"(?:9411[1-7]|94440)\\d{5}",,,,,,,[10]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],IS:[,[,,"(?:38\\d|[4-9])\\d{6}",,,,,,,[7,9]],[,,"(?:4(?:1[0-24-69]|2[0-7]|[37][0-8]|4[0-245]|5[0-68]|6\\d|8[0-36-8])|5(?:05|[156]\\d|2[02578]|3[0-579]|4[03-7]|7[0-2578]|8[0-35-9]|9[013-689])|87[23])\\d{4}",
,,,"4101234",,,[7]],[,,"38[589]\\d{6}|(?:6(?:1[1-8]|2[0-6]|3[027-9]|4[014679]|5[0159]|6[0-69]|70|8[06-8]|9\\d)|7(?:5[057]|[6-8]\\d|9[0-3])|8(?:2[0-59]|[3469]\\d|5[1-9]|8[28]))\\d{4}",,,,"6111234"],[,,"800\\d{4}",,,,"8001234",,,[7]],[,,"90\\d{5}",,,,"9011234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"49\\d{5}",,,,"4921234",,,[7]],"IS",354,"1(?:0(?:01|10|20)|100)|00",,,,,,"00",,[[,"(\\d{3})(\\d{4})","$1 $2",["[4-9]"]],[,"(3\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["3"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],
[,,"809\\d{4}",,,,"8091234",,,[7]],,,[,,"(?:689|8(?:7[0189]|80)|95[48])\\d{4}",,,,"6891234",,,[7]]],IT:[,[,,"0\\d{6}(?:\\d{4})?|3[0-8]\\d{9}|(?:[0138]\\d?|55)\\d{8}|[08]\\d{5}(?:\\d{2})?",,,,,,,[6,7,8,9,10,11]],[,,"0(?:2\\d{4,9}|(?:1(?:[0159]\\d|[27][1-5]|31|4[1-4]|6[1356]|8[2-57])\\d|3(?:[0159]\\d|2[1-4]|3[12]|[48][1-6]|6[2-59]|7[1-7])\\d|4(?:[0159]\\d|[23][1-9]|4[245]|6[1-5]|7[1-4]|81)\\d|5(?:[0159]\\d|2[1-5]|3[2-6]|4[1-79]|6[4-6]|7[1-578]|8[3-8])\\d|6(?:[0-57-9]\\d{2}|6(?:[0-8]\\d|9[0-79]))|7(?:[0159]\\d|2[12]|3[1-7]|4[2346]|6[13569]|7[13-6]|8[1-59])\\d|8(?:[0159]\\d|2[34578]|3[1-356]|[6-8][1-5])\\d|9(?:[0159]\\d|[238][1-5]|4[12]|6[1-8]|7[1-6])\\d)\\d{1,6})",
,,,"0212345678"],[,,"3(?:1\\d{8}|[245-9]\\d{7,8}|3\\d{7,9})",,,,"3123456789",,,[9,10,11]],[,,"80(?:0\\d{6}|3\\d{3})",,,,"800123456",,,[6,9]],[,,"0878\\d{5}|1(?:44|6[346])\\d{6}|89(?:2\\d{3}|4(?:[0-4]\\d{2}|[5-9]\\d{4})|5(?:[0-4]\\d{2}|[5-9]\\d{6})|9\\d{6})",,,,"899123456",,,[6,8,9,10]],[,,"84(?:[08]\\d{6}|[17]\\d{3})",,,,"848123456",,,[6,9]],[,,"1(?:78\\d|99)\\d{6}",,,,"1781234567",,,[9,10]],[,,"55\\d{8}",,,,"5512345678",,,[10]],"IT",39,"00",,,,,,,,[[,"(\\d{2})(\\d{3,4})(\\d{4})","$1 $2 $3",["0[26]|55"]],
[,"(0[26])(\\d{4})(\\d{5})","$1 $2 $3",["0[26]"]],[,"(0[26])(\\d{4,6})","$1 $2",["0[26]"]],[,"(0\\d{2})(\\d{3,4})(\\d{4})","$1 $2 $3",["0[13-57-9][0159]"]],[,"(\\d{3})(\\d{3,6})","$1 $2",["0[13-57-9][0159]|8(?:03|4[17]|9[245])","0[13-57-9][0159]|8(?:03|4[17]|9(?:2|[45][0-4]))"]],[,"(0\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["0[13-57-9][2-46-8]"]],[,"(0\\d{3})(\\d{2,6})","$1 $2",["0[13-57-9][2-46-8]"]],[,"(\\d{3})(\\d{3})(\\d{3,4})","$1 $2 $3",["[13]|8(?:00|4[08]|9[59])","[13]|8(?:00|4[08]|9(?:5[5-9]|9))"]],
[,"(\\d{4})(\\d{4})","$1 $2",["894","894[5-9]"]],[,"(\\d{3})(\\d{4})(\\d{4})","$1 $2 $3",["3"]]],,[,,,,,,,,,[-1]],1,,[,,"848\\d{6}",,,,,,,[9]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],JE:[,[,,"(?:1534|(?:[3578]\\d|90)\\d\\d)\\d{6}",,,,,,,[10],[6]],[,,"1534[0-24-8]\\d{5}",,,,"1534456789",,,,[6]],[,,"7(?:509\\d|7(?:00[378]|97[7-9])|829\\d|937\\d)\\d{5}",,,,"7797712345"],[,,"80(?:07(?:35|81)|8901)\\d{4}",,,,"8007354567"],[,,"(?:871206|90(?:066[59]|1810|71(?:07|55)))\\d{4}",,,,"9018105678"],[,,"8(?:4(?:4(?:4(?:05|42|69)|703)|5(?:041|800))|70002)\\d{4}",
,,,"8447034567"],[,,"701511\\d{4}",,,,"7015115678"],[,,"56\\d{8}",,,,"5612345678"],"JE",44,"00","0",,,"0",,,,,,[,,"76(?:0[012]|2[356]|4[0134]|5[49]|6[0-369]|77|81|9[39])\\d{6}",,,,"7640123456"],,,[,,,,,,,,,[-1]],[,,"3(?:0(?:07(?:35|81)|8901)|3\\d{4}|4(?:4(?:4(?:05|42|69)|703)|5(?:041|800))|7(?:0002|1206))\\d{4}|55\\d{8}",,,,"5512345678"],,,[,,,,,,,,,[-1]]],JM:[,[,,"(?:[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"876(?:5(?:0[12]|1[0-468]|2[35]|63)|6(?:0[1-3579]|1[0237-9]|[23]\\d|40|5[06]|6[2-589]|7[05]|8[04]|9[4-9])|7(?:0[2-689]|[1-6]\\d|8[056]|9[45])|9(?:0[1-8]|1[02378]|[2-8]\\d|9[2-468]))\\d{4}",
,,,"8765230123",,,,[7]],[,,"876(?:2[14-9]\\d|[348]\\d{2}|5(?:0[3-9]|[2-57-9]\\d|6[0-24-9])|7(?:0[07]|7\\d|8[1-47-9]|9[0-36-9])|9(?:[01]9|9[0579]))\\d{4}",,,,"8762101234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"JM",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"876",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],JO:[,[,,"(?:(?:(?:[268]|7\\d)\\d|32|53)\\d|900)\\d{5}",
,,,,,,[8,9]],[,,"(?:2(?:6(?:2[0-35-9]|3[0-57-8]|4[24-7]|5[0-24-8]|[6-8][023]|9[0-3])|7(?:0[1-79]|10|2[014-7]|3[0-689]|4[019]|5[0-3578]))|32(?:0[1-69]|1[1-35-7]|2[024-7]|3\\d|4[0-3]|[57][023]|6[03])|53(?:0[0-3]|[13][023]|2[0-59]|49|5[0-35-9]|6[15]|7[45]|8[1-6]|9[0-36-9])|6(?:2[50]0|3(?:00|33)|4(?:0[0125]|1[2-7]|2[0569]|[38][07-9]|4[025689]|6[0-589]|7\\d|9[0-2])|5(?:[01][056]|2[034]|3[0-57-9]|4[17-8]|5[0-69]|6[0-35-9]|7[1-379]|8[0-68]|9[02-39]))|87(?:[02]0|7[08]|90))\\d{4}",,,,"62001234",,,[8]],[,,
"7(?:55[0-49]|7[025-9]\\d|8[0-25-9]\\d|9[0-25-9]\\d)\\d{5}",,,,"790123456",,,[9]],[,,"80\\d{6}",,,,"80012345",,,[8]],[,,"900\\d{5}",,,,"90012345",,,[8]],[,,"85\\d{6}",,,,"85012345",,,[8]],[,,"70\\d{7}",,,,"700123456",,,[9]],[,,,,,,,,,[-1]],"JO",962,"00","0",,,"0",,,,[[,"(\\d)(\\d{3})(\\d{4})","$1 $2 $3",["[2356]|87"],"(0$1)"],[,"(7)(\\d{4})(\\d{4})","$1 $2 $3",["7[457-9]"],"0$1"],[,"(\\d{2})(\\d{7})","$1 $2",["70"],"0$1"],[,"(\\d{3})(\\d{5,6})","$1 $2",["8[0158]|9"],"0$1"]],,[,,"74(?:66|77)\\d{5}",
,,,"746612345",,,[9]],,,[,,,,,,,,,[-1]],[,,"8(?:10|8\\d)\\d{5}",,,,"88101234",,,[8]],,,[,,,,,,,,,[-1]]],JP:[,[,,"00[1-9]\\d{6,14}|[257-9]\\d{9}|(?:00|[1-9]\\d\\d)\\d{6}",,,,,,,[8,9,10,11,12,13,14,15,16,17]],[,,"(?:1(?:1[235-8]|2[3-6]|3[3-9]|4[2-6]|[58][2-8]|6[2-7]|7[2-9]|9[1-9])|2[2-9]\\d|[36][1-9]\\d|4(?:6[02-8]|[2-578]\\d|9[2-59])|5(?:6[1-9]|7[2-8]|[2-589]\\d)|7(?:3[4-9]|4[02-9]|[25-9]\\d)|8(?:3[2-9]|4[5-9]|5[1-9]|8[03-9]|[2679]\\d)|9(?:[679][1-9]|[2-58]\\d))\\d{6}",,,,"312345678",,,[9]],[,,"[7-9]0[1-9]\\d{7}",
,,,"9012345678",,,[10]],[,,"120\\d{6}|800\\d{7}|00(?:37\\d{6,13}|66\\d{6,13}|777(?:[01]\\d{2}|5\\d{3}|8\\d{4})|882[1245]\\d{4})",,,,"120123456"],[,,"990\\d{6}",,,,"990123456",,,[9]],[,,,,,,,,,[-1]],[,,"60\\d{7}",,,,"601234567",,,[9]],[,,"50[1-9]\\d{7}",,,,"5012345678",,,[10]],"JP",81,"010","0",,,"0",,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1-$2-$3",["(?:12|57|99)0"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{4})","$1-$2-$3",["800"],"0$1"],[,"(\\d{4})(\\d{4})","$1-$2",["007","0077"],"$1"],[,"(\\d{4})(\\d{2})(\\d{3,4})",
"$1-$2-$3",["007","0077"],"$1"],[,"(\\d{4})(\\d{2})(\\d{4})","$1-$2-$3",["008","0088"],"$1"],[,"(\\d{4})(\\d{3})(\\d{3,4})","$1-$2-$3",["00[36]","00(?:37|66)"],"$1"],[,"(\\d{4})(\\d{4})(\\d{4,5})","$1-$2-$3",["00[36]","00(?:37|66)"],"$1"],[,"(\\d{4})(\\d{5})(\\d{5,6})","$1-$2-$3",["00[36]","00(?:37|66)"],"$1"],[,"(\\d{4})(\\d{6})(\\d{6,7})","$1-$2-$3",["00[36]","00(?:37|66)"],"$1"],[,"(\\d{2})(\\d{4})(\\d{4})","$1-$2-$3",["[2579]0|80[1-9]"],"0$1"],[,"(\\d{4})(\\d)(\\d{4})","$1-$2-$3",["1(?:26|3[79]|4[56]|5[4-68]|6[3-5])|499|5(?:76|97)|746|8(?:3[89]|47|51|63)|9(?:49|80|9[16])",
"1(?:267|3(?:7[247]|9[278])|4(?:5[67]|66)|5(?:47|58|64|8[67])|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:76|97)9|7468|8(?:3(?:8[78]|96)|477|51[24]|636)|9(?:496|802|9(?:1[23]|69))","1(?:267|3(?:7[247]|9[278])|4(?:5[67]|66)|5(?:47|58|64|8[67])|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:769|979[2-69])|7468|8(?:3(?:8[78]|96[2457-9])|477|51[24]|636[2-57-9])|9(?:496|802|9(?:1[23]|69))"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{4})","$1-$2-$3",["1(?:2[3-6]|3[3-9]|4[2-6]|5[2-8]|[68][2-7]|7[2-689]|9[1-578])|2(?:2[03-689]|3[3-58]|4[0-468]|5[04-8]|6[013-8]|7[06-9]|8[02-57-9]|9[13])|4(?:2[28]|3[689]|6[035-7]|7[05689]|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9[4-9])|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9[014-9])|8(?:2[49]|3[3-8]|4[5-8]|5[2-9]|6[35-9]|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9[3-7])",
"1(?:2[3-6]|3[3-9]|4[2-6]|5(?:[236-8]|[45][2-69])|[68][2-7]|7[2-689]|9[1-578])|2(?:2(?:[04-689]|3[23])|3[3-58]|4[0-468]|5(?:[0468][2-9]|5[78]|7[2-4])|6(?:[0135-8]|4[2-5])|7(?:[0679]|8[2-7])|8(?:[024578]|3[25-9]|9[6-9])|9(?:11|3[2-4]))|4(?:2(?:2[2-9]|8[237-9])|3[689]|6[035-7]|7(?:[059][2-8]|[68])|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9(?:[4-7]|[89][2-8]))|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9(?:[017-9]|4[6-8]|5[2-478]|6[2-589]))|8(?:2(?:4[4-8]|9[2-8])|3(?:[3-6][2-9]|7[2-6]|8[2-5])|4[5-8]|5[2-9]|6(?:[37]|5[4-7]|6[2-9]|8[2-8]|9[236-9])|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9(?:3[34]|4[2-69]|[5-7]))",
"1(?:2[3-6]|3[3-9]|4[2-6]|5(?:[236-8]|[45][2-69])|[68][2-7]|7[2-689]|9[1-578])|2(?:2(?:[04-689]|3[23])|3[3-58]|4[0-468]|5(?:[0468][2-9]|5[78]|7[2-4])|6(?:[0135-8]|4[2-5])|7(?:[0679]|8[2-7])|8(?:[024578]|3[25-9]|9[6-9])|9(?:11|3[2-4]))|4(?:2(?:2[2-9]|8[237-9])|3[689]|6[035-7]|7(?:[059][2-8]|[68])|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9(?:[4-7]|[89][2-8]))|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9(?:[017-9]|4[6-8]|5[2-478]|6[2-589]))|8(?:2(?:4[4-8]|9(?:20|[3578]|4[04-9]|6[56]))|3(?:[3-6][2-9]|7(?:[2-5]|6[0-59])|8[2-5])|4[5-8]|5[2-9]|6(?:[37]|5(?:[467]|5[014-9])|6(?:[2-8]|9[02-69])|8[2-8]|9(?:[236-8]|9[23]))|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9(?:3(?:3[02-9]|4[0-24689])|4[2-69]|[5-7]))",
"1(?:2[3-6]|3[3-9]|4[2-6]|5(?:[236-8]|[45][2-69])|[68][2-7]|7[2-689]|9[1-578])|2(?:2(?:[04-689]|3[23])|3[3-58]|4[0-468]|5(?:[0468][2-9]|5[78]|7[2-4])|6(?:[0135-8]|4[2-5])|7(?:[0679]|8[2-7])|8(?:[024578]|3[25-9]|9[6-9])|9(?:11|3[2-4]))|4(?:2(?:2[2-9]|8[237-9])|3[689]|6[035-7]|7(?:[059][2-8]|[68])|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9(?:[4-7]|[89][2-8]))|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9(?:[017-9]|4[6-8]|5[2-478]|6[2-589]))|8(?:2(?:4[4-8]|9(?:20|[3578]|4[04-9]|6(?:5[25]|60)))|3(?:[3-6][2-9]|7(?:[2-5]|6[0-59])|8[2-5])|4[5-8]|5[2-9]|6(?:[37]|5(?:[467]|5[014-9])|6(?:[2-8]|9[02-69])|8[2-8]|9(?:[236-8]|9[23]))|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9(?:3(?:3[02-9]|4[0-24689])|4[2-69]|[5-7]))"],
"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["1|2(?:2[37]|5[5-9]|64|78|8[39]|91)|4(?:2[2689]|64|7[347])|5[2-589]|60|8(?:2[124589]|3[279]|[46-9])|9(?:[235-8]|93)","1|2(?:2[37]|5(?:[57]|[68]0|9[19])|64|78|8[39]|917)|4(?:2(?:20|[68]|9[178])|64|7[347])|5[2-589]|60|8(?:2[124589]|3[279]|[46-9])|9(?:[235-8]|93[34])","1|2(?:2[37]|5(?:[57]|[68]0|9(?:17|99))|64|78|8[39]|917)|4(?:2(?:20|[68]|9[178])|64|7[347])|5[2-589]|60|8(?:2[124589]|3[279]|[46-9])|9(?:[235-8]|93(?:31|4))"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{4})",
"$1-$2-$3",["2(?:[34]7|[56]9|74|9[14-79])|82|993"],"0$1"],[,"(\\d)(\\d{4})(\\d{4})","$1-$2-$3",["3|4(?:2[09]|7[01])|6[1-9]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["[2479][1-9]"],"0$1"]],[[,"(\\d{3})(\\d{3})(\\d{3})","$1-$2-$3",["(?:12|57|99)0"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{4})","$1-$2-$3",["800"],"0$1"],[,"(\\d{2})(\\d{4})(\\d{4})","$1-$2-$3",["[2579]0|80[1-9]"],"0$1"],[,"(\\d{4})(\\d)(\\d{4})","$1-$2-$3",["1(?:26|3[79]|4[56]|5[4-68]|6[3-5])|499|5(?:76|97)|746|8(?:3[89]|47|51|63)|9(?:49|80|9[16])",
"1(?:267|3(?:7[247]|9[278])|4(?:5[67]|66)|5(?:47|58|64|8[67])|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:76|97)9|7468|8(?:3(?:8[78]|96)|477|51[24]|636)|9(?:496|802|9(?:1[23]|69))","1(?:267|3(?:7[247]|9[278])|4(?:5[67]|66)|5(?:47|58|64|8[67])|6(?:3[245]|48|5[4-68]))|499[2468]|5(?:769|979[2-69])|7468|8(?:3(?:8[78]|96[2457-9])|477|51[24]|636[2-57-9])|9(?:496|802|9(?:1[23]|69))"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{4})","$1-$2-$3",["1(?:2[3-6]|3[3-9]|4[2-6]|5[2-8]|[68][2-7]|7[2-689]|9[1-578])|2(?:2[03-689]|3[3-58]|4[0-468]|5[04-8]|6[013-8]|7[06-9]|8[02-57-9]|9[13])|4(?:2[28]|3[689]|6[035-7]|7[05689]|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9[4-9])|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9[014-9])|8(?:2[49]|3[3-8]|4[5-8]|5[2-9]|6[35-9]|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9[3-7])",
"1(?:2[3-6]|3[3-9]|4[2-6]|5(?:[236-8]|[45][2-69])|[68][2-7]|7[2-689]|9[1-578])|2(?:2(?:[04-689]|3[23])|3[3-58]|4[0-468]|5(?:[0468][2-9]|5[78]|7[2-4])|6(?:[0135-8]|4[2-5])|7(?:[0679]|8[2-7])|8(?:[024578]|3[25-9]|9[6-9])|9(?:11|3[2-4]))|4(?:2(?:2[2-9]|8[237-9])|3[689]|6[035-7]|7(?:[059][2-8]|[68])|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9(?:[4-7]|[89][2-8]))|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9(?:[017-9]|4[6-8]|5[2-478]|6[2-589]))|8(?:2(?:4[4-8]|9[2-8])|3(?:[3-6][2-9]|7[2-6]|8[2-5])|4[5-8]|5[2-9]|6(?:[37]|5[4-7]|6[2-9]|8[2-8]|9[236-9])|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9(?:3[34]|4[2-69]|[5-7]))",
"1(?:2[3-6]|3[3-9]|4[2-6]|5(?:[236-8]|[45][2-69])|[68][2-7]|7[2-689]|9[1-578])|2(?:2(?:[04-689]|3[23])|3[3-58]|4[0-468]|5(?:[0468][2-9]|5[78]|7[2-4])|6(?:[0135-8]|4[2-5])|7(?:[0679]|8[2-7])|8(?:[024578]|3[25-9]|9[6-9])|9(?:11|3[2-4]))|4(?:2(?:2[2-9]|8[237-9])|3[689]|6[035-7]|7(?:[059][2-8]|[68])|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9(?:[4-7]|[89][2-8]))|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9(?:[017-9]|4[6-8]|5[2-478]|6[2-589]))|8(?:2(?:4[4-8]|9(?:20|[3578]|4[04-9]|6[56]))|3(?:[3-6][2-9]|7(?:[2-5]|6[0-59])|8[2-5])|4[5-8]|5[2-9]|6(?:[37]|5(?:[467]|5[014-9])|6(?:[2-8]|9[02-69])|8[2-8]|9(?:[236-8]|9[23]))|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9(?:3(?:3[02-9]|4[0-24689])|4[2-69]|[5-7]))",
"1(?:2[3-6]|3[3-9]|4[2-6]|5(?:[236-8]|[45][2-69])|[68][2-7]|7[2-689]|9[1-578])|2(?:2(?:[04-689]|3[23])|3[3-58]|4[0-468]|5(?:[0468][2-9]|5[78]|7[2-4])|6(?:[0135-8]|4[2-5])|7(?:[0679]|8[2-7])|8(?:[024578]|3[25-9]|9[6-9])|9(?:11|3[2-4]))|4(?:2(?:2[2-9]|8[237-9])|3[689]|6[035-7]|7(?:[059][2-8]|[68])|80|9[3-5])|5(?:3[1-36-9]|4[4578]|5[013-8]|6[1-9]|7[2-8]|8[14-7]|9(?:[4-7]|[89][2-8]))|7(?:2[15]|3[5-9]|4[02-9]|6[135-8]|7[0-4689]|9(?:[017-9]|4[6-8]|5[2-478]|6[2-589]))|8(?:2(?:4[4-8]|9(?:20|[3578]|4[04-9]|6(?:5[25]|60)))|3(?:[3-6][2-9]|7(?:[2-5]|6[0-59])|8[2-5])|4[5-8]|5[2-9]|6(?:[37]|5(?:[467]|5[014-9])|6(?:[2-8]|9[02-69])|8[2-8]|9(?:[236-8]|9[23]))|7[579]|8[03-579]|9[2-8])|9(?:[23]0|4[02-46-9]|5[024-79]|6[4-9]|7[2-47-9]|8[02-7]|9(?:3(?:3[02-9]|4[0-24689])|4[2-69]|[5-7]))"],
"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["1|2(?:2[37]|5[5-9]|64|78|8[39]|91)|4(?:2[2689]|64|7[347])|5[2-589]|60|8(?:2[124589]|3[279]|[46-9])|9(?:[235-8]|93)","1|2(?:2[37]|5(?:[57]|[68]0|9[19])|64|78|8[39]|917)|4(?:2(?:20|[68]|9[178])|64|7[347])|5[2-589]|60|8(?:2[124589]|3[279]|[46-9])|9(?:[235-8]|93[34])","1|2(?:2[37]|5(?:[57]|[68]0|9(?:17|99))|64|78|8[39]|917)|4(?:2(?:20|[68]|9[178])|64|7[347])|5[2-589]|60|8(?:2[124589]|3[279]|[46-9])|9(?:[235-8]|93(?:31|4))"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{4})",
"$1-$2-$3",["2(?:[34]7|[56]9|74|9[14-79])|82|993"],"0$1"],[,"(\\d)(\\d{4})(\\d{4})","$1-$2-$3",["3|4(?:2[09]|7[01])|6[1-9]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["[2479][1-9]"],"0$1"]],[,,"20\\d{8}",,,,"2012345678",,,[10]],,,[,,"00(?:37\\d{6,13}|66\\d{6,13}|777(?:[01]\\d{2}|5\\d{3}|8\\d{4})|882[1245]\\d{4})"],[,,"570\\d{6}",,,,"570123456",,,[9]],,,[,,,,,,,,,[-1]]],KE:[,[,,"(?:(?:2|80)0\\d?|[4-7]\\d\\d|900)\\d{6}|[4-6]\\d{6,7}",,,,,,,[7,8,9,10]],[,,"20\\d{6,7}|4(?:0\\d{6,7}|[136]\\d{7}|[245]\\d{5,7})|5(?:[08]\\d{7}|[1-79]\\d{5,7})|6(?:[01457-9]\\d{5,7}|2\\d{7}|6\\d{6,7})",
,,,"202012345",,,[7,8,9]],[,,"7\\d{8}",,,,"712123456",,,[9]],[,,"800[24-8]\\d{5,6}",,,,"800223456",,,[9,10]],[,,"900[02-9]\\d{5}",,,,"900223456",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"KE",254,"000","0",,,"005|0",,,,[[,"(\\d{2})(\\d{5,7})","$1 $2",["[24-6]"],"0$1"],[,"(\\d{3})(\\d{6})","$1 $2",["7"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3,4})","$1 $2 $3",["[89]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KG:[,[,,"(?:[235-7]\\d|99)\\d{7}|800\\d{6,7}",,,
,,,,[9,10],[5,6]],[,,"(?:3(?:1(?:[256]\\d|3[1-9]|47)|2(?:22|3[0-479]|6[0-7])|4(?:22|5[6-9]|6\\d)|5(?:22|3[4-7]|59|6\\d)|6(?:22|5[35-7]|6\\d)|7(?:22|3[468]|4[1-9]|59|[67]\\d)|9(?:22|4[1-8]|6\\d))|6(?:09|12|2[2-4])\\d)\\d{5}",,,,"312123456",,,[9],[5,6]],[,,"(?:2(?:0[0-35]|2\\d)|5[0-24-7]\\d|7(?:[07]\\d|55)|99[69])\\d{6}",,,,"700123456",,,[9]],[,,"800\\d{6,7}",,,,"800123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"KG",996,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",
["[25-79]|31[25]"],"0$1"],[,"(\\d{4})(\\d{5})","$1 $2",["3(?:1[36]|[2-9])"],"0$1"],[,"(\\d{3})(\\d{3})(\\d)(\\d{3})","$1 $2 $3 $4",["8"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KH:[,[,,"1\\d{9}|[1-9]\\d{7,8}",,,,,,,[8,9,10],[6,7]],[,,"(?:2[3-6]|3[2-6]|4[2-4]|[5-7][2-5])(?:[237-9]|4[56]|5\\d|6\\d?)\\d{5}|23(?:4[234]|8\\d{2})\\d{4}",,,,"23756789",,,[8,9],[6,7]],[,,"(?:1(?:[013-79]\\d|[28]\\d{1,2})|2[3-6]48|3(?:[18]\\d{2}|[2-6]48)|4[2-4]48|5[2-5]48|6(?:[016-9]\\d|[2-5]48)|7(?:[07-9]\\d|[16]\\d{2}|[2-5]48)|8(?:[013-79]\\d|8\\d{2})|9(?:6\\d{2}|7\\d{1,2}|[0-589]\\d))\\d{5}",
,,,"91234567",,,[8,9]],[,,"1800(?:1\\d|2[019])\\d{4}",,,,"1800123456",,,[10]],[,,"1900(?:1\\d|2[09])\\d{4}",,,,"1900123456",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"KH",855,"00[14-9]","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["1\\d[1-9]|[2-9]"],"0$1"],[,"(1[89]00)(\\d{3})(\\d{3})","$1 $2 $3",["1[89]0","1[89]00"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KI:[,[,,"(?:[37]\\d|6[0-79])\\d{6}|(?:[2-48]\\d|50)\\d{3}",,,,,,,[5,8]],[,,"(?:[24]\\d|3[1-9]|50|8[0-5])\\d{3}|(?:65(?:02[12]|12[56]|22[89]|[3-5]00)|7(?:27\\d{2}|3100|5(?:02[12]|12[56]|22[89]|[34](?:00|81)|500)))\\d{3}",
,,,"31234"],[,,"(?:6(?:200[01]|30[01]\\d)|7(?:200[01]|3(?:0[0-5]\\d|140)))\\d{3}",,,,"72001234",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"30(?:0[01]\\d{2}|12(?:11|20))\\d{2}",,,,"30010000",,,[8]],"KI",686,"00",,,,"0",,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KM:[,[,,"[3478]\\d{6}",,,,,,,[7]],[,,"7[4-7]\\d{5}",,,,"7712345"],[,,"[34]\\d{6}",,,,"3212345"],[,,,,,,,,,[-1]],[,,"8\\d{6}",,,,"8001234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,
,,,,[-1]],"KM",269,"00",,,,,,,,[[,"(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KN:[,[,,"(?:[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"869(?:2(?:29|36)|302|4(?:6[015-9]|70))\\d{4}",,,,"8692361234",,,,[7]],[,,"869(?:5(?:5[6-8]|6[5-7])|66\\d|76[02-7])\\d{4}",,,,"8697652917",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",
,,,"5002345678"],[,,,,,,,,,[-1]],"KN",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"869",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KP:[,[,,"(?:(?:19\\d|2)\\d|85)\\d{6}",,,,,,,[8,10],[6,7]],[,,"2\\d{7}|85\\d{6}",,,,"21234567",,,[8],[6,7]],[,,"19[123]\\d{7}",,,,"1921234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"KP",850,"00|99","0",,,"0",,,,[[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["1"],"0$1"],[,"(\\d)(\\d{3})(\\d{4})","$1 $2 $3",["2"],"0$1"],[,
"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["8"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,"2(?:[0-24-9]\\d{2}|3(?:[0-79]\\d|8[02-9]))\\d{4}",,,,,,,[8]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KR:[,[,,"(?:00(?:0\\d|[1-9]\\d{1,4})|(?:[13-6]\\d|2)\\d?|70\\d|80)\\d{7}|1\\d{7}|[3-6]\\d{4,5}",,,,,,,[5,6,8,9,10,11,12,13,14],[3,7]],[,,"2[1-9]\\d{6,7}|(?:3[1-3]|[46][1-4]|5[1-5])(?:1\\d{2,3}|[1-9]\\d{6,7})",,,,"22123456",,,[5,6,8,9,10],[3,7]],[,,"1[0-26-9]\\d{7,8}",,,,"1000000000",,,[9,10]],[,,"(?:00(?:3(?:08|68\\d)|798\\d{1,3})|80\\d)\\d{6}",
,,,"801234567",,,[9,11,12,13,14]],[,,"60[2-9]\\d{6}",,,,"602345678",,,[9]],[,,,,,,,,,[-1]],[,,"50\\d{8}",,,,"5012345678",,,[10]],[,,"70\\d{8}",,,,"7012345678",,,[10]],"KR",82,"00(?:[1259]|3(?:[46]5|91)|7(?:00|27|3|55|6[126]))","0",,,"0(8[1-46-8]|85\\d{2})?",,,,[[,"(\\d{2})(\\d{3,4})","$1-$2",["(?:3[1-3]|[46][1-4]|5[1-5])1"],"0$1","0$CC-$1"],[,"(\\d{4})(\\d{4})","$1-$2",["1(?:5[246-9]|6[046-8]|8[03579])","1(?:5(?:22|44|66|77|88|99)|6(?:[07]0|44|6[16]|88)|8(?:00|33|55|77|99))"],"$1","0$CC-$1"],[,"(\\d{5})",
"$1",["1[016-9]1","1[016-9]11","1[016-9]114"],"0$1","0$CC-$1"],[,"(\\d)(\\d{3,4})(\\d{4})","$1-$2-$3",["2[1-9]"],"0$1","0$CC-$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["60[2-9]|80"],"0$1","0$CC-$1"],[,"(\\d{2})(\\d{3,4})(\\d{4})","$1-$2-$3",["1[0-25-9]|(?:3[1-3]|[46][1-4]|5[1-5])[1-9]"],"0$1","0$CC-$1"],[,"(\\d{2})(\\d{4})(\\d{4})","$1-$2-$3",["[57]0"],"0$1","0$CC-$1"],[,"(\\d{5})(\\d{3})(\\d{3})","$1 $2 $3",["003","0030","00308"],"$1","0$CC-$1"],[,"(\\d{5})(\\d{3,4})(\\d{4})","$1 $2 $3",["00[37]",
"00(?:36|79)","00(?:36|79)8"],"$1","0$CC-$1"],[,"(\\d{5})(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3 $4",["007","0079","00798"],"$1","0$CC-$1"]],[[,"(\\d{2})(\\d{3,4})","$1-$2",["(?:3[1-3]|[46][1-4]|5[1-5])1"],"0$1","0$CC-$1"],[,"(\\d{4})(\\d{4})","$1-$2",["1(?:5[246-9]|6[046-8]|8[03579])","1(?:5(?:22|44|66|77|88|99)|6(?:[07]0|44|6[16]|88)|8(?:00|33|55|77|99))"],"$1","0$CC-$1"],[,"(\\d{5})","$1",["1[016-9]1","1[016-9]11","1[016-9]114"],"0$1","0$CC-$1"],[,"(\\d)(\\d{3,4})(\\d{4})","$1-$2-$3",["2[1-9]"],"0$1",
"0$CC-$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1-$2-$3",["60[2-9]|80"],"0$1","0$CC-$1"],[,"(\\d{2})(\\d{3,4})(\\d{4})","$1-$2-$3",["1[0-25-9]|(?:3[1-3]|[46][1-4]|5[1-5])[1-9]"],"0$1","0$CC-$1"],[,"(\\d{2})(\\d{4})(\\d{4})","$1-$2-$3",["[57]0"],"0$1","0$CC-$1"]],[,,"15\\d{7,8}",,,,"1523456789",,,[9,10]],,,[,,"00(?:3(?:08|68\\d)|798\\d{1,3})\\d{6}",,,,,,,[11,12,13,14]],[,,"1(?:5(?:22|44|66|77|88|99)|6(?:00|44|6[16]|70|88)|8(?:00|33|55|77|99))\\d{4}",,,,"15441234",,,[8]],,,[,,,,,,,,,[-1]]],KW:[,[,,"(?:18|[2569]\\d\\d)\\d{5}",
,,,,,,[7,8]],[,,"(?:2(?:[23]\\d{2}|4(?:[1-35-9]\\d|44)|5(?:0[034]|[2-46]\\d|5[1-3]|7[1-7])))\\d{4}",,,,"22345678",,,[8]],[,,"(?:5(?:[05]\\d{2}|1[0-7]\\d|2(?:22|5[25])|6[56]\\d)|6(?:0[034679]\\d|222|5[015-9]\\d|6\\d{2}|7(?:0[013-9]|[67]\\d)|9(?:[069]\\d|3[039]))|9(?:0[09]\\d|11[01]|22\\d|4[01479]\\d|55\\d|6[0679]\\d|7(?:02|[1-9]\\d)|8[057-9]\\d|9\\d{2}))\\d{4}",,,,"50012345",,,[8]],[,,"18\\d{5}",,,,"1801234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"KW",965,"00",,,,,,
,,[[,"(\\d{4})(\\d{3,4})","$1 $2",["[16]|2(?:[0-35-9]|4[0-35-9])|52[25]|9[0-24-9]"]],[,"(\\d{3})(\\d{5})","$1 $2",["244|5(?:[015]|6[56])"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KY:[,[,,"(?:345|[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"345(?:2(?:22|44)|444|6(?:23|38|40)|7(?:4[35-79]|6[6-9]|77)|8(?:00|1[45]|25|[48]8)|9(?:14|4[035-9]))\\d{4}",,,,"3452221234",,,,[7]],[,,"345(?:32[1-9]|5(?:1[67]|2[5-79]|4[6-9]|50|76)|649|9(?:1[67]|2[2-9]|3[689]))\\d{4}",,,,"3453231234",
,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],[,,"900[2-9]\\d{6}|345976\\d{4}",,,,"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"KY",1,"011","1",,,"1",,,,,,[,,"345849\\d{4}",,,,"3458491234"],,"345",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],KZ:[,[,,"(?:33622|(?:7\\d|80)\\d{3})\\d{5}",,,,,,,[10]],[,,"33622\\d{5}|7(?:1(?:0(?:[23]\\d|4[0-3]|59|63)|1(?:[23]\\d|4[0-79]|59)|2(?:[23]\\d|59)|3(?:2\\d|3[0-79]|4[0-35-9]|59)|4(?:[24]\\d|3[013-9]|5[1-9])|5(?:2\\d|3[1-9]|4[0-7]|59)|6(?:[234]\\d|5[19]|61)|72\\d|8(?:[27]\\d|3[1-46-9]|4[0-5]))|2(?:1(?:[23]\\d|4[46-9]|5[3469])|2(?:2\\d|3[0679]|46|5[12679])|3(?:[234]\\d|5[139])|4(?:2\\d|3[1235-9]|59)|5(?:[23]\\d|4[01246-8]|59|61)|6(?:2\\d|3[1-9]|4[0-4]|59)|7(?:[2379]\\d|40|5[279])|8(?:[23]\\d|4[0-3]|59)|9(?:2\\d|3[124578]|59)))\\d{5}",
,,,"7123456789"],[,,"7(?:0[012578]|47|6[02-4]|7[15-8]|85)\\d{7}",,,,"7710009998"],[,,"800\\d{7}",,,,"8001234567"],[,,"809\\d{7}",,,,"8091234567"],[,,,,,,,,,[-1]],[,,"808\\d{7}",,,,"8081234567"],[,,"751\\d{7}",,,,"7511234567"],"KZ",7,"810","8",,,"8",,"8~10",,,,[,,,,,,,,,[-1]],,,[,,"751\\d{7}"],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LA:[,[,,"(?:2\\d|3)\\d{8}|(?:[235-8]\\d|41)\\d{6}",,,,,,,[8,9,10],[6]],[,,"(?:2[13]|3(?:0\\d|[14])|[5-7][14]|41|8[1468])\\d{6}",,,,"21212862",,,[8,9],[6]],[,,"20(?:2[2389]|5[24-689]|7[6-8]|9[1-35-9])\\d{6}",
,,,"2023123456",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LA",856,"00","0",,,"0",,,,[[,"(20)(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3 $4",["20"],"0$1"],[,"([2-8]\\d)(\\d{3})(\\d{3})","$1 $2 $3",["2[13]|3[14]|[4-8]"],"0$1"],[,"(30)(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3 $4",["30"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LB:[,[,,"[7-9]\\d{7}|[13-9]\\d{6}",,,,,,,[7,8]],[,,"(?:[14-6]\\d{2}|7(?:[2-57]\\d|62|8[0-7]|9[04-9])|8[02-9]\\d|9\\d{2})\\d{4}",
,,,"1123456",,,[7]],[,,"(?:3\\d|7(?:[01]\\d|6[013-9]|8[89]|9[1-3])|81\\d)\\d{5}",,,,"71123456"],[,,,,,,,,,[-1]],[,,"9[01]\\d{6}",,,,"90123456",,,[8]],[,,"80\\d{6}",,,,"80123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LB",961,"00","0",,,"0",,,,[[,"(\\d)(\\d{3})(\\d{3})","$1 $2 $3",["[13-69]|7(?:[2-57]|62|8[0-7]|9[04-9])|8[02-9]"],"0$1"],[,"([7-9]\\d)(\\d{3})(\\d{3})","$1 $2 $3",["7(?:[01]|6[013-9]|8[89]|9[1-3])|[89][01]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LC:[,
[,,"(?:[58]\\d\\d|758|900)\\d{7}",,,,,,,[10],[7]],[,,"758(?:4(?:30|5[0-9]|6[2-9]|8[0-2])|57[0-2]|638)\\d{4}",,,,"7584305678",,,,[7]],[,,"758(?:28[4-7]|384|4(?:6[01]|8[4-9])|5(?:1[89]|20|84)|7(?:1[2-9]|2\\d|3[01]))\\d{4}",,,,"7582845678",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"LC",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"758",[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LI:[,[,,"(?:(?:[2378]|6\\d\\d)\\d|90)\\d{5}",,,,,,,[7,9]],[,,"(?:2(?:01|1[27]|3\\d|6[02-578]|96)|3(?:7[0135-7]|8[048]|9[0269]))\\d{4}",,,,"2345678",,,[7]],[,,"6(?:5(?:09|1\\d|20)|6(?:0[0-6]|10|2[06-9]|39))\\d{5}|7(?:[37-9]\\d|42|56)\\d{4}",,,,"660234567"],[,,"80(?:02[28]|9\\d{2})\\d{2}",,,,"8002222",,,[7]],[,,"90(?:02[258]|1(?:23|3[14])|66[136])\\d{2}",,,,"9002222",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LI",423,"00","0",,,"0|10(?:01|20|66)",,,,[[,
"(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3",["[237-9]"]],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["6[56]"]],[,"(69)(7\\d{2})(\\d{4})","$1 $2 $3",["697"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"870(?:28|87)\\d{2}",,,,"8702812",,,[7]],,,[,,"697(?:42|56|[78]\\d)\\d{4}",,,,"697861234",,,[9]]],LK:[,[,,"(?:[1-7]\\d|[89]1)\\d{7}",,,,,,,[9],[7]],[,,"1(?:1[2-57]\\d{6}|973\\d{5})|(?:2[13-7]|3[1-8]|4[157]|5[12457]|6[35-7]|[89]1)[2-57]\\d{6}",,,,"112345678",,,,[7]],[,,"7[0125-8]\\d{7}",,,,"712345678"],[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LK",94,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["[1-689]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["7"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LR:[,[,,"(?:[25]\\d|33|77|88)\\d{7}|(?:2\\d|[45])\\d{6}",,,,,,,[7,8,9]],[,,"(?:2\\d{3}|33333)\\d{4}",,,,"21234567",,,[8,9]],[,,"(?:20\\d{2}|330\\d|4[67]|5(?:55)?\\d|77\\d{2}|88\\d{2})\\d{5}",,,,"770123456",,,[7,9]],[,,,,,,,,,[-1]],
[,,"332(?:02|[2-5]\\d)\\d{4}",,,,"332021234",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LR",231,"00","0",,,"0",,,,[[,"(2\\d)(\\d{3})(\\d{3})","$1 $2 $3",["2"],"0$1"],[,"([4-5])(\\d{3})(\\d{3})","$1 $2 $3",["[45]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["[23578]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LS:[,[,,"(?:[256]\\d\\d|800)\\d{5}",,,,,,,[8]],[,,"2\\d{7}",,,,"22123456"],[,,"[56]\\d{7}",,,,"50123456"],[,,"800[256]\\d{4}",,,,"80021234"],
[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LS",266,"00",,,,,,,,[[,"(\\d{4})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LT:[,[,,"(?:[3469]\\d|52|[78]0)\\d{6}",,,,,,,[8]],[,,"(?:3[1478]|4[124-6]|52)\\d{6}",,,,"31234567"],[,,"6\\d{7}",,,,"61234567"],[,,"800\\d{5}",,,,"80012345"],[,,"9(?:0[0239]|10)\\d{5}",,,,"90012345"],[,,"808\\d{5}",,,,"80812345"],[,,"700\\d{5}",,,,"70012345"],[,,,,,,,,,[-1]],"LT",370,"00","8",,,"[08]",,,,[[,"([34]\\d)(\\d{6})",
"$1 $2",["37|4(?:1|5[45]|6[2-4])"],"(8-$1)",,1],[,"([3-6]\\d{2})(\\d{5})","$1 $2",["3[148]|4(?:[24]|6[09])|528|6"],"(8-$1)",,1],[,"([7-9]\\d{2})(\\d{2})(\\d{3})","$1 $2 $3",["[7-9]"],"8 $1",,1],[,"(5)(2\\d{2})(\\d{4})","$1 $2 $3",["52[0-79]"],"(8-$1)",,1]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"70[67]\\d{5}",,,,"70712345"],,,[,,,,,,,,,[-1]]],LU:[,[,,"[2457-9]\\d{3,10}|3(?:[0-46-9]\\d{2,9}|5(?:[013-9]\\d{1,8}|2\\d{1,3}))|6\\d{8}",,,,,,,[4,5,6,7,8,9,10,11]],[,,"2[2-9]\\d{2,9}|(?:3(?:[0-46-9]\\d|5[013-9])|[457]\\d{2}|8(?:0[2-9]|[13-9]\\d)|9(?:0[89]|[2-579]\\d))\\d{1,8}",
,,,"27123456"],[,,"6(?:[269][18]|5[158]|7[189]|81)\\d{6}",,,,"628123456",,,[9]],[,,"800\\d{5}",,,,"80012345",,,[8]],[,,"90[015]\\d{5}",,,,"90012345",,,[8]],[,,"801\\d{5}",,,,"80112345",,,[8]],[,,,,,,,,,[-1]],[,,"20(?:1\\d{5}|[2-689]\\d{1,7})",,,,"20201234",,,[4,5,6,7,8,9,10]],"LU",352,"00",,,,"(15(?:0[06]|1[12]|35|4[04]|55|6[26]|77|88|99)\\d)",,,,[[,"(\\d{2})(\\d{3})","$1 $2",["[2-5]|7[1-9]|[89](?:0[2-9]|[1-9])"],,"$CC $1"],[,"(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3",["[2-5]|7[1-9]|[89](?:0[2-9]|[1-9])"],
,"$CC $1"],[,"(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3",["20"],,"$CC $1"],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{1,2})","$1 $2 $3 $4",["2(?:[0367]|4[3-8])"],,"$CC $1"],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3 $4",["20"],,"$CC $1"],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{1,2})","$1 $2 $3 $4 $5",["2(?:[0367]|4[3-8])"],,"$CC $1"],[,"(\\d{2})(\\d{2})(\\d{2})(\\d{1,4})","$1 $2 $3 $4",["2(?:[12589]|4[12])|[3-5]|7[1-9]|8(?:0[2-9]|[1-9])|9(?:0[2-46-9]|[1-9])"],,"$CC $1"],[,"(\\d{3})(\\d{2})(\\d{3})","$1 $2 $3",
["70|80[01]|90[015]"],,"$CC $1"],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["6"],,"$CC $1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],LV:[,[,,"(?:[268]\\d|90)\\d{6}",,,,,,,[8]],[,,"6\\d{7}",,,,"63123456"],[,,"2\\d{7}",,,,"21234567"],[,,"80\\d{6}",,,,"80123456"],[,,"90\\d{6}",,,,"90123456"],[,,"81\\d{6}",,,,"81123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LV",371,"00",,,,,,,,[[,"([2689]\\d)(\\d{3})(\\d{3})","$1 $2 $3",["[2689]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,
,[-1]],,,[,,,,,,,,,[-1]]],LY:[,[,,"(?:[2569]\\d|71)\\d{7}",,,,,,,[9],[7]],[,,"(?:2[1345]|5[1347]|6[123479]|71)\\d{7}",,,,"212345678",,,,[7]],[,,"9[1-6]\\d{7}",,,,"912345678"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"LY",218,"00","0",,,"0",,,,[[,"([25-79]\\d)(\\d{7})","$1-$2",["[25-79]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MA:[,[,,"[5-8]\\d{8}",,,,,,,[9]],[,,"5(?:2(?:[015-79]\\d|2[02-9]|3[2-57]|4[2-8]|8[235-7])\\d|3(?:[0-48]\\d|[57][2-9]|6[2-8]|9[3-9])\\d|4[067]\\d{2}|5[03]\\d{2})\\d{4}",
,,,"520123456"],[,,"(?:6(?:[0-79]\\d|8[0-247-9])|7(?:0[067]|6[1267]|7[017]))\\d{6}",,,,"650123456"],[,,"80\\d{7}",,,,"801234567"],[,,"89\\d{7}",,,,"891234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"5924[01]\\d{4}",,,,"592401234"],"MA",212,"00","0",,,"0",,,,[[,"([5-7]\\d{2})(\\d{6})","$1-$2",["5(?:2[015-7]|3[0-4])|[67]"],"0$1"],[,"([58]\\d{3})(\\d{5})","$1-$2",["5(?:2[2-489]|3[5-9]|92)|892","5(?:2(?:[2-48]|9[0-7])|3(?:[5-79]|8[0-7])|924)|892"],"0$1"],[,"(5\\d{4})(\\d{4})","$1-$2",["5(?:29|38)","5(?:29|38)[89]"],
"0$1"],[,"([5]\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["5(?:4[067]|5[03])"],"0$1"],[,"(8[09])(\\d{7})","$1-$2",["8(?:0|9[013-9])"],"0$1"]],,[,,,,,,,,,[-1]],1,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MC:[,[,,"(?:(?:[349]|6\\d)\\d\\d|870)\\d{5}",,,,,,,[8,9]],[,,"870\\d{5}|9[2-47-9]\\d{6}",,,,"99123456",,,[8]],[,,"3\\d{7}|4(?:4\\d|5[1-9])\\d{5}|6\\d{8}",,,,"612345678"],[,,"90\\d{6}",,,,"90123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MC",377,"00","0",
,,"0",,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[39]"],"$1"],[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["4"],"0$1"],[,"(6)(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4 $5",["6"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{2})","$1 $2 $3",["8"],"$1"]],,[,,,,,,,,,[-1]],,,[,,"870\\d{5}",,,,,,,[8]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MD:[,[,,"(?:[235-7]\\d|[89]0)\\d{6}",,,,,,,[8]],[,,"(?:2[1-9]\\d|3[1-79]\\d|5(?:33|5[257]))\\d{5}",,,,"22212345"],[,,"(?:562|6\\d{2}|7(?:[189]\\d|6[07]|7[457-9]))\\d{5}",
,,,"62112345"],[,,"800\\d{5}",,,,"80012345"],[,,"90[056]\\d{5}",,,,"90012345"],[,,"808\\d{5}",,,,"80812345"],[,,,,,,,,,[-1]],[,,"3[08]\\d{6}",,,,"30123456"],"MD",373,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["22|3"],"0$1"],[,"([25-7]\\d{2})(\\d{2})(\\d{3})","$1 $2 $3",["2[13-9]|[5-7]"],"0$1"],[,"([89]\\d{2})(\\d{5})","$1 $2",["[89]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"803\\d{5}",,,,"80312345"],,,[,,,,,,,,,[-1]]],ME:[,[,,"(?:20|[3-79]\\d|80\\d?)\\d{6}",,,,,,,[8,9],[6]],
[,,"(?:20[2-8]|3(?:[0-2][2-7]|3[24-7])|4(?:0[2-467]|1[2467])|5(?:[01][2467]|2[2-467]))\\d{5}",,,,"30234567",,,[8],[6]],[,,"6(?:00\\d|3[024]\\d|6[0-25]\\d|[7-9]\\d{2})\\d{4}",,,,"67622901",,,[8]],[,,"80(?:[0-2578]|9\\d)\\d{5}",,,,"80080002"],[,,"(?:9(?:4[1568]|5[178]))\\d{5}",,,,"94515151",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"78[1-49]\\d{5}",,,,"78108780",,,[8]],"ME",382,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["[2-57-9]|6[036-9]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],
[,,"77[1-9]\\d{5}",,,,"77273012",,,[8]],,,[,,,,,,,,,[-1]]],MF:[,[,,"(?:590|69\\d)\\d{6}",,,,,,,[9]],[,,"590(?:0[079]|13|2[79]|30|43|5[0-268]|7[79]|87)\\d{4}",,,,"590271234"],[,,"69(?:0\\d{2}|1(?:2[29]|3[0-5]))\\d{4}",,,,"690001234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MF",590,"00","0",,,"0",,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MG:[,[,,"[23]\\d{8}",,,,,,,[9],[7]],[,,"20(?:2\\d{2}|4[47]\\d|5[3467]\\d|6[279]\\d|7(?:2[29]|[35]\\d)|8[268]\\d|9[245]\\d)\\d{4}",
,,,"202123456",,,,[7]],[,,"3[2-49]\\d{7}",,,,"321234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"22\\d{7}",,,,"221234567"],"MG",261,"00","0",,,"0",,,,[[,"([23]\\d)(\\d{2})(\\d{3})(\\d{2})","$1 $2 $3 $4",["[23]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MH:[,[,,"(?:(?:[256]\\d|45)\\d|329)\\d{4}",,,,,,,[7]],[,,"(?:247|528|625)\\d{4}",,,,"2471234"],[,,"(?:235|329|45[56]|545)\\d{4}",,,,"2351234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,
,,,[-1]],[,,,,,,,,,[-1]],[,,"635\\d{4}",,,,"6351234"],"MH",692,"011","1",,,"1",,,,[[,"(\\d{3})(\\d{4})","$1-$2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MK:[,[,,"[2-578]\\d{7}",,,,,,,[8],[6,7]],[,,"(?:2(?:[23]\\d|5[0-24578]|6[01]|82)|3(?:1[3-68]|[23][2-68]|4[23568])|4(?:[23][2-68]|4[3-68]|5[2568]|6[25-8]|7[24-68]|8[4-68]))\\d{5}",,,,"22012345",,,,[6,7]],[,,"7(?:[0-25-8]\\d{2}|3[2-4]\\d|421|9[23]\\d)\\d{4}",,,,"72345678"],[,,"800\\d{5}",,,,"80012345"],[,,"5[02-9]\\d{6}",
,,,"50012345"],[,,"8(?:0[1-9]|[1-9]\\d)\\d{5}",,,,"80123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MK",389,"00","0",,,"0",,,,[[,"(2)(\\d{3})(\\d{4})","$1 $2 $3",["2"],"0$1"],[,"([347]\\d)(\\d{3})(\\d{3})","$1 $2 $3",["[347]"],"0$1"],[,"([58]\\d{2})(\\d)(\\d{2})(\\d{2})","$1 $2 $3 $4",["[58]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],ML:[,[,,"(?:[246-9]\\d|50)\\d{6}",,,,,,,[8]],[,,"(?:2(?:0(?:2\\d|7[0-8])|1(?:2[67]|[4-689]\\d))|4(?:0[0-4]|4[1-39])\\d)\\d{4}",,,,"20212345"],
[,,"(?:2(?:079|17\\d)|50\\d{2}|[679]\\d{3}|8[239]\\d{2})\\d{4}",,,,"65012345"],[,,"80\\d{6}",,,,"80012345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"ML",223,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[24-9]"]],[,"(\\d{4})","$1",["67|74"]]],[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[24-9]"]]],[,,,,,,,,,[-1]],,,[,,"80\\d{6}"],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MM:[,[,,"(?:1|[24-7]\\d)\\d{5,7}|8\\d{6,9}|9(?:[0-46-9]\\d{6,8}|5\\d{6})|2\\d{5}",
,,,,,,[6,7,8,9,10],[5]],[,,"1(?:2\\d{1,2}|[35]\\d|4(?:\\d|2[2-469]|39|6[25]|70)|6\\d?|[89][0-6]\\d)\\d{4}|2(?:2(?:000\\d{3}|\\d{4})|3\\d{4}|4(?:0\\d{5}|2[246]\\d{4}|39\\d{4}|62\\d{4}|70\\d{4}|\\d{4})|5(?:1\\d{3,6}|[02-9]\\d{3,5})|[6-9]\\d{4})|4(?:2(?:[25-8]|4(?:80)?)|3(?:2(?:02)?|[36]|4(?:70)?|56?)|[46][2-6]|5(?:[35]|4(?:70)?))\\d{4}|5(?:2(?:2(?:\\d{1,2})?|[35-8]|4(?:70)?)|3[2-68]|4(?:21?|4(?:70)?|[5-8])|5[23]|6[2-4]|7(?:[235-8]|4(?:80)?)|8(?:[25-7]|4(?:70)?)|9(?:[235-7]|4(?:70)?))\\d{4}|6(?:0[23]|1(?:2(?:0|4\\d)?|[356])|2[2-6]|3(?:[25-6]|4(?:70)?)|4(?:2(?:4\\d)?|[3-6])|5[2-4]|6[2-8]|7(?:[2367]|4(?:\\d|39|[67]0)|5\\d?|8[145]\\d)|8[245]|9(?:20?|4))\\d{4}|7(?:[04](?:[25-8]|4(?:70)?)|1(?:20?|[35-7]|4(?:70)?)|22|3[2-4]|5(?:[235-7]|4(?:70)?))\\d{4}|8(?:1(?:2\\d{1,2}|[35689]\\d|4(?:70)?\\d)|2(?:2\\d|3(?:\\d|20)|[4-8]\\d)|3(?:2|4(?:70)?)\\d|4[24-7]\\d|5[245]\\d|6[23]\\d)\\d{3}",
,,,"1234567",,,[6,7,8,9],[5]],[,,"17[01]\\d{4}|9(?:2(?:[0-4]|5\\d{2}|6[0-5]\\d)|3(?:[0-36]|4[069])\\d|4(?:0[0-4]\\d|[1379]\\d|2\\d{2}|4[0-589]\\d|5\\d{2}|88)|5[0-6]|6(?:1\\d|9\\d{2}|\\d)|7(?:3|5[0-2]|[6-9]\\d)\\d|8(?:\\d|9\\d{2})|9(?:1\\d|[5-7]\\d{2}|[089]))\\d{5}",,,,"92123456",,,[7,8,9,10]],[,,"80080[01][1-9]\\d{3}",,,,"8008001234",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"(?:1(?:333|468)|2468)\\d{4}",,,,"13331234",,,[8]],"MM",95,"00","0",,,"0",,,,[[,"(\\d)(\\d{3})(\\d{3,4})",
"$1 $2 $3",["1|2[245]"],"0$1"],[,"(2)(\\d{4})(\\d{4})","$1 $2 $3",["251"],"0$1"],[,"(\\d)(\\d{2})(\\d{3})","$1 $2 $3",["16|2"],"0$1"],[,"(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3",["[4-8]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["[4-8]"],"0$1"],[,"(9)(\\d{3})(\\d{4,6})","$1 $2 $3",["9(?:2[0-4]|[35-9]|4[137-9])"],"0$1"],[,"(9)([34]\\d{4})(\\d{4})","$1 $2 $3",["9(?:3[0-36]|4[0-57-9])"],"0$1"],[,"(9)(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3 $4",["92[56]"],"0$1"],[,"(9)(\\d{3})(\\d{3})(\\d{2})","$1 $2 $3 $4",
["93"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MN:[,[,,"[12]\\d{8,9}|[1257-9]\\d{7}",,,,,,,[8,9,10],[6,7]],[,,"[12](?:1\\d|2(?:[1-3]\\d?|7\\d)|3[2-8]\\d{1,2}|4[2-68]\\d{1,2}|5[1-4689]\\d{1,2})\\d{5}|5[0568]\\d{6}",,,,"50123456",,,,[6,7]],[,,"(?:8(?:[05689]\\d|3[01])|9[013-9]\\d)\\d{5}",,,,"88123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"7[05-8]\\d{6}",,,,"75123456",,,[8]],"MN",976,"001","0",,,"0",,,,[[,"([12]\\d)(\\d{2})(\\d{4})",
"$1 $2 $3",["[12]1"],"0$1"],[,"([12]2\\d)(\\d{5,6})","$1 $2",["[12]2[1-3]"],"0$1"],[,"([12]\\d{3})(\\d{5})","$1 $2",["[12](?:27|[3-5])","[12](?:27|[3-5]\\d)2"],"0$1"],[,"(\\d{4})(\\d{4})","$1 $2",["[57-9]"],"$1"],[,"([12]\\d{4})(\\d{4,5})","$1 $2",["[12](?:27|[3-5])","[12](?:27|[3-5]\\d)[4-9]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MO:[,[,,"(?:28|[68]\\d)\\d{6}",,,,,,,[8]],[,,"(?:28[2-57-9]|8(?:11|[2-57-9]\\d))\\d{5}",,,,"28212345"],[,,"6(?:[2356]\\d{2}|8(?:[02][5-9]|[1478]\\d|[356][0-4]))\\d{4}",
,,,"66123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MO",853,"00",,,,,,,,[[,"([268]\\d{3})(\\d{4})","$1 $2",["[268]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MP:[,[,,"(?:[58]\\d\\d|(?:67|90)0)\\d{7}",,,,,,,[10],[7]],[,,"670(?:2(?:3[3-7]|56|8[5-8])|32[1238]|4(?:33|8[348])|5(?:32|55|88)|6(?:64|70|82)|78[3589]|8[3-9]8|989)\\d{4}",,,,"6702345678",,,,[7]],[,,"670(?:2(?:3[3-7]|56|8[5-8])|32[1238]|4(?:33|8[348])|5(?:32|55|88)|6(?:64|70|82)|78[3589]|8[3-9]8|989)\\d{4}",
,,,"6702345678",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"MP",1,"011","1",,,"1",,,1,,,[,,,,,,,,,[-1]],,"670",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MQ:[,[,,"(?:596|69\\d)\\d{6}",,,,,,,[9]],[,,"596(?:0[0-7]|10|2[7-9]|3[05-9]|4[0-46-8]|[5-7]\\d|8[09]|9[4-8])\\d{4}",,,,"596301234"],[,,"69(?:6(?:[0-47-9]\\d|5[0-6]|6[0-4])|727)\\d{4}",
,,,"696201234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MQ",596,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",,"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MR:[,[,,"(?:[2-4]\\d\\d|800)\\d{5}",,,,,,,[8]],[,,"25[08]\\d{5}|35\\d{6}|45[1-7]\\d{5}",,,,"35123456"],[,,"[234][0-46-9]\\d{6}",,,,"22123456"],[,,"800\\d{5}",,,,"80012345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MR",222,"00",
,,,,,,,[[,"([2-48]\\d)(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[2-48]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MS:[,[,,"(?:(?:[58]\\d\\d|900)\\d\\d|66449)\\d{5}",,,,,,,[10],[7]],[,,"664491\\d{4}",,,,"6644912345",,,,[7]],[,,"66449[2-6]\\d{4}",,,,"6644923456",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"MS",1,"011",
"1",,,"1",,,,,,[,,,,,,,,,[-1]],,"664",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MT:[,[,,"(?:(?:[2579]\\d\\d|800)\\d|3550)\\d{4}",,,,,,,[8]],[,,"2(?:0(?:[169]\\d|3[1-4])|[1-357]\\d{2})\\d{4}",,,,"21001234"],[,,"(?:7(?:210|[79]\\d{2})|9(?:2(?:1[01]|31)|69[67]|8(?:1[1-3]|89|97)|9\\d{2}))\\d{4}",,,,"96961234"],[,,"800[3467]\\d{4}",,,,"80071234"],[,,"5(?:0(?:0(?:37|43)|6\\d{2}|70\\d|9[0168]\\d)|[12]\\d0[1-5])\\d{3}",,,,"50037123"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"3550\\d{4}",,,,"35501234"],
"MT",356,"00",,,,,,,,[[,"(\\d{4})(\\d{4})","$1 $2"]],,[,,"7117\\d{4}",,,,"71171234"],,,[,,,,,,,,,[-1]],[,,"501\\d{5}",,,,"50112345"],,,[,,,,,,,,,[-1]]],MU:[,[,,"(?:[2-468]|5\\d)\\d{6}",,,,,,,[7,8]],[,,"(?:2(?:[03478]\\d|1[0-7]|6[1-69])|4(?:[013568]\\d|2[4-7])|5(?:44\\d|471)|6\\d{2}|8(?:14|3[129]))\\d{4}",,,,"54480123"],[,,"5(?:2[589]\\d|4(?:2[1-389]|[489]\\d|7[1-9])|7\\d{2}|8(?:[0-689]\\d|7[15-8])|9[0-8]\\d)\\d{4}",,,,"52512345",,,[8]],[,,"80[012]\\d{4}",,,,"8001234",,,[7]],[,,"30\\d{5}",,,,"3012345",
,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"3(?:20|9\\d)\\d{4}",,,,"3201234",,,[7]],"MU",230,"0(?:0|[2-7]0|33)",,,,,,"020",,[[,"([2-46-9]\\d{2})(\\d{4})","$1 $2",["[2-46-9]"]],[,"(5\\d{3})(\\d{4})","$1 $2",["5"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MV:[,[,,"(?:800|9[0-57-9]\\d)\\d{7}|[34679]\\d{6}",,,,,,,[7,10]],[,,"(?:3(?:0[0-3]|3[0-59])|6(?:[57][02468]|6[024568]|8[024689]))\\d{4}",,,,"6701234",,,[7]],[,,"(?:46[46]|7[2-9]\\d|9[14-9]\\d)\\d{4}",,,,"7712345",,,[7]],
[,,"800\\d{7}",,,,"8001234567",,,[10]],[,,"900\\d{7}",,,,"9001234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MV",960,"0(?:0|19)",,,,,,"00",,[[,"(\\d{3})(\\d{4})","$1-$2",["[3467]|9(?:0[1-9]|[1-9])"]],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["[89]00"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"4[05]0\\d{4}",,,,"4001234",,,[7]],,,[,,,,,,,,,[-1]]],MW:[,[,,"1\\d{6}(?:\\d{2})?|(?:[23]1|77|88|99)\\d{7}",,,,,,,[7,9]],[,,"(?:1[2-9]|21\\d{2})\\d{5}",,,,"1234567"],[,,"(?:111|77\\d|88\\d|99\\d)\\d{6}",
,,,"991234567",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"31\\d{7}",,,,"310123456",,,[9]],"MW",265,"00","0",,,"0",,,,[[,"(\\d)(\\d{3})(\\d{3})","$1 $2 $3",["1"],"0$1"],[,"(2\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["2"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[17-9]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["31"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MX:[,[,,"(?:1\\d|[2-9])\\d{9}",,,,,,,[10,11],[7,8]],[,
,"(?:33|55|81)\\d{8}|(?:2(?:0[01]|2[1-9]|3[1-35-8]|4[13-9]|7[1-689]|8[1-578]|9[467])|3(?:1[1-79]|[2458][1-9]|7[1-8]|9[1-5])|4(?:1[1-57-9]|[24-6][1-9]|[37][1-8]|8[1-35-9]|9[2-689])|5(?:88|9[1-79])|6(?:1[2-68]|[234][1-9]|5[1-3689]|6[12457-9]|7[1-7]|8[67]|9[4-8])|7(?:[13467][1-9]|2[1-9]|5[13-9]|8[1-69]|9[17])|8(?:2[13-689]|3[1-6]|4[124-6]|6[1246-9]|7[1-378]|9[12479])|9(?:1[346-9]|2[1-4]|3[2-46-8]|5[1348]|[69][1-9]|7[12]|8[1-8]))\\d{7}",,,,"2221234567",,,[10],[7,8]],[,,"1(?:(?:33|55|81)\\d{8}|(?:2(?:2[1-9]|3[1-35-8]|4[13-9]|7[1-689]|8[1-578]|9[467])|3(?:1[1-79]|[2458][1-9]|7[1-8]|9[1-5])|4(?:1[1-57-9]|[24-6][1-9]|[37][1-8]|8[1-35-9]|9[2-689])|5(?:88|9[1-79])|6(?:1[2-68]|[2-4][1-9]|5[1-3689]|6[12457-9]|7[1-7]|8[67]|9[4-8])|7(?:[13467][1-9]|2[1-9]|5[13-9]|8[1-69]|9[17])|8(?:2[13-689]|3[1-6]|4[124-6]|6[1246-9]|7[1-378]|9[12479])|9(?:1[346-9]|2[1-4]|3[2-46-8]|5[1348]|[69][1-9]|7[12]|8[1-8]))\\d{7})",
,,,"12221234567",,,[11]],[,,"8(?:00|88)\\d{7}",,,,"8001234567",,,[10]],[,,"900\\d{7}",,,,"9001234567",,,[10]],[,,"300\\d{7}",,,,"3001234567",,,[10]],[,,"500\\d{7}",,,,"5001234567",,,[10]],[,,,,,,,,,[-1]],"MX",52,"0[09]","01",,,"0[12]|04[45](\\d{10})","1$1",,,[[,"([358]\\d)(\\d{4})(\\d{4})","$1 $2 $3",["33|55|81"],"01 $1",,1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["[2467]|3[0-2457-9]|5[089]|8[02-9]|9[0-35-9]"],"01 $1",,1],[,"(1)([358]\\d)(\\d{4})(\\d{4})","044 $2 $3 $4",["1(?:33|55|81)"],"$1",,1],
[,"(1)(\\d{3})(\\d{3})(\\d{4})","044 $2 $3 $4",["1(?:[2467]|3[0-2457-9]|5[089]|8[2-9]|9[1-35-9])"],"$1",,1]],[[,"([358]\\d)(\\d{4})(\\d{4})","$1 $2 $3",["33|55|81"],"01 $1",,1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["[2467]|3[0-2457-9]|5[089]|8[02-9]|9[0-35-9]"],"01 $1",,1],[,"(1)([358]\\d)(\\d{4})(\\d{4})","$1 $2 $3 $4",["1(?:33|55|81)"]],[,"(1)(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3 $4",["1(?:[2467]|3[0-2457-9]|5[089]|8[2-9]|9[1-35-9])"]]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,
,,,,,[-1]]],MY:[,[,,"(?:1\\d\\d?|3\\d|[4-9])\\d{7}",,,,,,,[8,9,10],[6,7]],[,,"(?:3(?:2(?:0(?:11|2[0-8]|3[0-24-79]|[579]\\d|8[0-57-9])|1(?:0[6-9]|1[03-9]|[467]\\d|8[0-2]|9[13])|2(?:0[1-3]|2[2-4]|4[0-25-7]|6[0-8]|7[02-689]|8\\d|9[5-9])|3(?:0[0-3]|3[0-36]|8[0-35-9]|9[1-3])|6(?:0[0-5]|[139]\\d|8[15-8])|7(?:1\\d|2[0-7]|3[0-3]|42|7[0-356]|8[0-35-8])|8(?:00|4[78]|5[6-9])|93[58])|3(?:0(?:0[0-35-9]|10|5[01]|8[0-6]|9[39])|1(?:0[1-39]|10|2[02-469]|3[245]|4[0-3589]|6[0-35-9]|7[067]|8[0-57]|9[0-278])|2(?:1[3467]|2[45]|4[1-3]|5[0689]|6[04589]|7[0-3579]|8[0-489]|9[0-27])|3(?:1[7-9]|2[1-6]|4[1-689]|5[89]|6[1-3]|7\\d|8[125]|9[236])|6(?:[12]0|3[01]|5[0-256]|6[08]|8[45]))|4(?:0(?:09|[14]\\d|2[0-8]|3[12]|5[01]|65)|1(?:0[0-8]|31|4\\d|6[12])|2(?:17|5[0-35-9]|6[024-6]|7[0189]|8[057-9]|9\\d)|770|8(?:0[0-2]|1[0-3569]|2[01]))|5(?:0(?:2[0-2]|3[0-35-9])|1(?:0[1-3]|1[05]|2[0-6]|31|6[1-7]|9[1258])|270|48[0-5]|5(?:1\\d|2[0-6]|4[0-589]|6[125-9]|9[01])|6(?:1[1-4]|2[0-589]|3\\d|5[0-3])|7(?:21|40)|8(?:7[06-9]|8[025-9]|9[12]))|6(?:0(?:2[0-28]|3[24-9]|4[246-9]|5[57]|6[13-6]|7[358]|8[1247]|9[0-59])|1(?:[04][0-58]|15|2[02-8]|3[015-9]|5[016-8]|7[7-9]|8[14-9]|9[1-356])|2(?:[05]\\d|11|[46][1-3]|7[02-79]|8[015-7])|303|4(?:1[129]|2[01]|3[36]|6[0-2])|690|7(?:3\\d|89))|7(?:118|2(?:0[02]|6[01])|4(?:[59]\\d|8[01])|6(?:1[01]|2\\d|5[0-2]|6[0-69])|7(?:1[0-37-9]|[28]\\d|3[1-5]|7[0-3])|8(?:[04]\\d|3[129]|59|6[1-356]|7[02-79]|8[02-7]|90)|9(?:10|3[1-3]|4[016-9]|[56]\\d|7[12]|8\\d))|8(?:0(?:0[08]|11|2[0-7]|5[12]|6\\d|7[013-69]|8[0-24]|9[0-5])|100|21[0-36]|3(?:08|1\\d|2[0-589]|31)|408|5(?:2[0-35-79]|88)|6(?:0[0-259]|5[5-79]|6[01]|8[46-9]|9[019])|7(?:0[35-8]|2[3-7]|3\\d|4[0149]|5[0-2]|6[016-9]|7[5-9]|8[037]|90)|8(?:00|61|7[0-3]|8\\d|9[0-4])|9(?:1[1-3]|[2-5]\\d|6[1-4689]|8[89]|9[0-689]))|9(?:0(?:1[0-289]|2[15]|5[014-9]|7[04-68]|8[0-256])|1(?:0[0-3568]|3[0-49]|4[015]|7[0-59]|9[15])|2(?:0[0-25-7]|12|2[1-6]|3[1256]|7[14]|8\\d)|3[68]8|41[01]|5(?:14|2[01]|4[03-9]|6[5-79]|7[0-2569])))\\d|4(?:2(?:0[01]|1[07-9]|2[02-46-9]|38|4[0-28]|5[0-589]|6[0-47-9]|8[0-389]|9[0-38])\\d|3(?:0[5-9]|[12][034]|3[0-37]|47|5[168]|6[7-9]|7[0135-8]|8\\d|9[0-27-9])\\d|4(?:[02-9]\\d{2}|1(?:[02-9]\\d|10))|5(?:[07]\\d{2}|1[0-358]\\d|2[1246]\\d|3[06-9]\\d|4[0589]\\d|5[12457-9]\\d|6[0-689]\\d|8(?:[0-57-9]\\d|60)|9(?:[2-57-9]\\d|60))|6(?:0[79]|1[0-689]|2[0135-9]|[3-5]\\d|6[07-9]|7[23]|8[03-9]|99)\\d|7(?:0[0-59]\\d|1[04679]\\d|2(?:[02-9]\\d|10)|[37]\\d{2}|4(?:[0178]\\d|5[0-6])|5(?:[0-57-9]\\d|60)|6[024-689]\\d|8[0-79]\\d|9(?:[0479]\\d|3[01]))|8(?:1[0189]\\d|2[046-9]\\d|3[058]\\d|5[029]\\d|6(?:[0689]\\d|40)|8[14568]\\d|9[0-389]\\d)|9(?:0[1368]\\d|1[13-9]\\d|[27]\\d{2}|3(?:[0-368]\\d|7[0-3])|4[013-79]\\d|5[0-35689]\\d|6[0-46-9]\\d|8[0-24-9]\\d|97\\d))|5(?:2(?:0[13589]\\d|1[0-2]\\d|2[056]\\d|3(?:[067]\\d|2[01])|4[0-69]\\d|5[3-6]\\d|8[0-25-9]\\d|9[0-469]\\d)|3(?:[12][0-38]|3[0-37]|4[89]|5[01346-9]|[67]\\d|8[01589]|95)\\d|4(?:0[1346]\\d|1[02-35-9]\\d|2[1379]\\d|3[0-46-9]\\d|4[013689]\\d|[59]\\d{2}|6(?:[15-9]\\d|20)|7[036-9]\\d|8[015-8]\\d)|5(?:0[167]\\d|17\\d|2[025-9]\\d|3[035-7]\\d|4[0-35-9]\\d|8[13]\\d|9(?:[124-9]\\d|31))|6(?:0[89]\\d|1[02-46-8]\\d|2[0-69]\\d|3(?:[1-367]\\d|40)|4[0-689]\\d|5(?:[0-24-9]\\d|30)|6[1457-9]\\d|7\\d{2}|8[0-57-9]\\d|9[0-389]\\d)|7(?:1(?:[024679]\\d|80)|2[0-35-8]\\d|3[23]\\d|4[34]\\d|5[0-36-9]\\d|6[356-9]\\d|7\\d{2}|8(?:[23]\\d|[01]1)|9(?:[1-689]\\d|70))|8(?:0[145-9]\\d|1[0-2]\\d|2[09]\\d|3(?:[058]\\d|0[017])|4[016-9]\\d|5[02-9]\\d|7(?:10|2\\d)|8[013589]\\d|9[0-57-9]\\d)|9[23]0\\d)|6(?:2(?:2[1246-9]\\d|3[0-5]\\d|4[02]\\d|5[1-3]\\d|[68]\\d{2}|7(?:[04-8]\\d|10)|9[2-5]\\d)|3(?:1(?:[125-9]\\d|3[01])|3[0-7]\\d|5[0-478]\\d|79\\d|8[3-578]\\d|9[018]\\d)|4(?:1[015]|[2-689]\\d|7[1-79])\\d|5(?:09\\d|1(?:10|[2479]\\d)|2[1-579]\\d|3(?:[0-467]\\d|50)|4[0-24-9]\\d|5\\d{2}|60\\d)|6(?:0[13]\\d|1[0-57]\\d|2[03]\\d|3[0-478]\\d|4[0-8]\\d|5[013-689]\\d|6[0-467]\\d|[78]\\d{2}|9(?:[13-9]\\d|20))|7(?:01|2[06-9]|3[367]|5[7-9]|6\\d|7[0156]|8[12]|9[0-47-9])\\d|85[0-26]\\d|9(?:0[167]|10|[57]\\d|6[02-9]|8[013-9])\\d)|7(?:2(?:0[7-9]|1[016-9]|2[0-8]|[39]\\d|4[014]|5[0-79]|6[125-8]|7[1246-9]|8[37-9])\\d|3(?:0[0-5]|[35]\\d|40|5[0-478]|6[0-5]|8[0-26-8])\\d|4(?:0[07-9]|[1-35]\\d|6[7-9]|7[57]|8[1-68])\\d|5(?:0[04-9]|1[0-68]|2[0-378]|3[0-3]|5\\d|6[0-2]|7[018]|8[5-7]|9[05-9])\\d|6(?:5[0-24-9]|6[0-3568]|7[0457-9]|8[02-9]|9\\d)\\d|7(?:0[25-8]\\d|1(?:[01]\\d|20)|2[0-2]\\d|3[489]\\d|[457-9]\\d{2}|6(?:[0-8]\\d|90))|8(?:01[01]|10\\d|[289]\\d{2}|3(?:[028]\\d|10)|50\\d|6[0-357-9]\\d|7(?:[0235-9]\\d|[14]0))|9(?:0(?:[0246-8]\\d|10)|[1-4]\\d{2}|50\\d|6[014589]\\d|[7-9]0\\d))|8(?:2(?:2(?:[013-5]\\d|[28][0-8]|6[016]|7[0-589]|9[0-49])|3(?:[02][0-689]|1[1-59]|[3-7]\\d|8[0-389]|9[13])|4(?:0[1-3]|[1-8]\\d|9[1-359])|5(?:0[1-7]|[17]\\d|20|3[0-26-9]|4[1-9]|5[0-35]|8[0-689]|9[02367])|6(?:[147]\\d|2[0-25-9]|39|5[014-9]|6[1-9]|8[1-8]|9[089])|7(?:0[017-9]|1[1-356]|20|3[01457-9]|4[15]|5[0-25]|6[0-6]|70|8[0-2]|9[01378])|8(?:0[3-57-9]|[15]0|2[124-9]|3[01]|4[02-6]|6[02-578]|7\\d|8[25-8]|9[04-689]))|3(?:220|3(?:0[089]|10|2[0-7]|3[7-9]|4[0-48])|4(?:0[68]|1[0-478]|2[5-79]|3[024-9]|50|6\\d|7[0-57]|8[05]|96)|5(?:4[4578]|55|6[2-9]|70|8[459]|92))|4(?:2(?:[15]\\d|2[0-489]|3[124-9])|3(?:0[1-8]|[1-4]\\d|5[0-3]|6[1-7]|7[56]|8[0-4]|9[1-578])|4(?:05|80)|555|6(?:1[0-3]|20|3[1-4]|4[0-24-7]|5\\d|6[0-2]|71|8[0-47-9]|9[0-689])|7(02|1[79]|21|3[0-2468]|5[0-5]|6[0256]|7[0-8]|8[01589]|9[026-9])|8(?:0[1-9]|1[0-3568]|2[0138]|3[0-4]|4[046-9]|5[06]|6\\d|7[0-579]|80|9[0-8]))|5(?:2(?:0[0-26]|1\\d|2[0-5]|3[18]|4[0-2]|6[3-68]|70|8[025-9]|9[05-9])|3(?:10|2\\d|31|95)|4(?:0[1-7]|[1-4]\\d|5[02-6]|6[0-3]|7[0-245]|8[125]|9[1-6])|5(?:40|55)|6(?:0[1459]|1[0-8]|2[0-36-8]|3[0-35-8]|[45]\\d|6[0-8]|80)|7(?:1[07-9]|20|3[3-9]|4[02-4]|5[05689]|6[015-9]|7\\d|8[045]|9[0-6]))|6(?:2(?:01|3[12]|5[1-7]|60|8[1-6]|9[0-8])|3(?:0[0137]|[134]\\d|2[0-8]|[59][01]|60|[78]1)|4(?:2[2-4]|49|5[17]|6\\d|7[0-46-9]|8[0-689])|5(?:0[6-8]|55|8[0149]|90)|8(?:5\\d|[68]0)|9(?:5[12]|81))|7(?:2(?:0[189]|[12][1-9]|3[0-47]|50)|3(?:[01][1-9]|3\\d|4[0-245]|6[4-9]|7[237-9]|9[12])|4(?:[0-2]\\d|3[167-9]|[45][0-3]|6[0-8]|7[25-9]|8[0-6]|90)|5(?:0[1-9]|[89]\\d)|7(?:1[89]|[27]\\d|3[013-9]|4[0-8]|50|6[01568]|82)|8(?:[03][1-3]|1[0-28]|2[0-38]|48|5[0-4]|6[1-3]|7[124]|8[013-57-9]|9[07]))|8(?:2(?:0[13-7]|[1-9]\\d)|3(?:0[1-47-9]|[128]\\d|3[0-4]|4[1-9]|5[0-35-7]|6[0-46-9]|9[3-7])|4(?:0[1-58]|1[1-5]|[2-57-9]\\d|69)|5(?:1[1-35-9]|2\\d|3[2-8]|52)|6(?:0[2-9]|1[1-8]|[23]\\d|41|5[12367]|6[1-9]|7[14-9]|8[02-8]|9[05])|7(?:0[1-589]|[1-35-8]\\d|4[0-7]|9[0-46-9])|8(?:01|30|5[0-48]|6[13]|7\\d|8[013-689]|9[24-9])|9(?:0[2-4689]|1\\d|2[08]|3[18]|4[03]|59|6[0-36-9]|7[0-35-79]|8[1235]))|9(?:2(?:[057][1-9]|[1-3]\\d|4[0-8]|6[1-5]|8[015-9]|9[04-6])|300|4(?:01|36|6[1-6]|[89][12])|5(?:0[25689]|1\\d|2[0134]|3[1-8]|5[17]|6[0-35-9]|7[0-7]|91)|6(?:1[1-9]|2[23]|3[0-4]|6[03-9]|7[0-7])|7(?:0[1-68]|1[1-8]|2[25-9]|3[056]|4[4-9]|[5-8]\\d|9[0-46-9])|8(?:0[1-7]|[189]\\d|2[1-46]|4[1-689]|5[0-79]|6[1-9]|71)|9(?:0[1-3]|1\\d|2[0-35-7]|3[67]|4[12]|5[0-249]|6[5-9]|75|8[1-6])))|9(?:2(?:0[458]\\d|1[2-57]\\d|2[0-589]\\d|[39]\\d{2}|4(?:[02-9]\\d|10)|5(?:[024-6]\\d|[7-9]0)|6(?:[03-9]\\d|20)|7[0-26-9]\\d|8(?:[0-24-68]\\d|7[01]))|3(?:0[0-2689]\\d|1(?:[0235]\\d|1[0-2]|4[01])|2(?:0[01]|[1-57-9]\\d|6[0-2])|3(?:00|1[0-4]|2\\d)|4[05]\\d|5[0-3568]\\d|6(?:[1-357-9]\\d|60)|[78]0\\d)|4(?:0[24578]\\d|1[02-57-9]\\d|2\\d{2}|3(?:[0278]\\d|1[01]|60)|4[013579]\\d|5[0-8]\\d|6[0678]\\d|7[013-9]\\d|8[01569]\\d)|5(0(?:[589]\\d|7[01])|1\\d{2}|2[0159]\\d|3[14689]\\d|4[0-46-9]\\d|5[0-35-9]\\d|6[0156-8]\\d|7[0-35]\\d|8[0-7]\\d|9[0-3589]\\d)|6(?:0[269]\\d|[12]\\d{2}|3[0-57-9]\\d|44[0-2]|5[01379]\\d|6[02-9]\\d|7[69]\\d|8(?:[0-24-8]\\d|30)|9(?:[0-24-9]\\d|3[01]))|7(?:0[0136-8]|1[02-4]|2[156]|3[258]|[489]\\d|5[0-589]|6[024-9]|7[0-689])\\d|8(?:0(?:0[01]|1\\d)|1[3-9]\\d|[23]\\d{2}|4[0-24-689]\\d|5[0-689]\\d|6[02-9]\\d|7(?:[01]0|[2-4]\\d)|888)|9(?:00\\d|1[2-57-9]\\d|2(?:00|1[01]|[238]\\d)|3(?:[2-467]\\d|50)|4[4-9]\\d|5(?:[0-2457-9]\\d|60)|6[0156]\\d|7[04-9]\\d|8[01]\\d)))\\d{3}",
,,,"323856789",,,[8,9],[6,7]],[,,"1(?:0(?:[23568]\\d|4[0-6]|7[016-9]|9[0-8])\\d|1(?:[1-5]\\d{2}|6(?:0[5-9]|[1-9]\\d))\\d|[23679][2-9]\\d{2}|4(?:[235-9]\\d{2}|400)|59\\d{3}|8(?:1[23]\\d|[236]\\d{2}|4(?:[06]\\d|7[0-4])|5[7-9]\\d|7[016-9]\\d|8(?:[01]\\d|[27][0-4])|9[0-8]\\d))\\d{4}",,,,"123456789",,,[9,10]],[,,"1[378]00\\d{6}",,,,"1300123456",,,[10]],[,,"1600\\d{6}",,,,"1600123456",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"154(?:6(?:0\\d|1[0-3])|8(?:[25]1|4[0189]|7[0-4679]))\\d{4}",,,,"1546012345",
,,[10]],"MY",60,"00","0",,,"0",,,,[[,"([4-79])(\\d{3})(\\d{4})","$1-$2 $3",["[4-79]"],"0$1"],[,"(3)(\\d{4})(\\d{4})","$1-$2 $3",["3"],"0$1"],[,"([18]\\d)(\\d{3})(\\d{3,4})","$1-$2 $3",["1[02-46-9][1-9]|8"],"0$1"],[,"(1)([36-8]00)(\\d{2})(\\d{4})","$1-$2-$3-$4",["1[36-8]0","1[36-8]00"]],[,"(11)(\\d{4})(\\d{4})","$1-$2 $3",["11"],"0$1"],[,"(15[49])(\\d{3})(\\d{4})","$1-$2 $3",["15[49]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],MZ:[,[,,"(?:2|8\\d)\\d{7}",,,,,,,[8,
9]],[,,"2(?:[1346]\\d|5[0-2]|[78][12]|93)\\d{5}",,,,"21123456",,,[8]],[,,"8[2-7]\\d{7}",,,,"821234567",,,[9]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"MZ",258,"00",,,,,,,,[[,"([28]\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["2|8[2-7]"]],[,"(80\\d)(\\d{3})(\\d{3})","$1 $2 $3",["80"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NA:[,[,,"[68]\\d{7,8}",,,,,,,[8,9]],[,,"6(?:1(?:17|2(?:[0189]\\d|[2-6]|7\\d?)|3(?:[01378]|2\\d)|4(?:[024]|10?|3[15]?)|69|7[014])|2(?:17|5(?:[0-36-8]|4\\d?)|69|70)|3(?:17|2(?:[0237]\\d?|[14-689])|34|6[289]|7[01]|81)|4(?:17|2(?:[012]|7\\d?)|4(?:[06]|1\\d?)|5(?:[01357]|[25]\\d?)|69|7[01])|5(?:17|2(?:[0459]|[23678]\\d?)|69|7[01])|6(?:17|2(?:5|6\\d?)|38|42|69|7[01])|7(?:17|2(?:[569]|[234]\\d?)|3(?:0\\d?|[13])|6[89]|7[01]))\\d{4}",
,,,"61221234"],[,,"(?:60|8[125])\\d{7}",,,,"811234567",,,[9]],[,,,,,,,,,[-1]],[,,"8701\\d{5}",,,,"870123456",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"8(?:3\\d{2}|86)\\d{5}",,,,"88612345"],"NA",264,"00","0",,,"0",,,,[[,"(8\\d)(\\d{3})(\\d{4})","$1 $2 $3",["8[1-35]"],"0$1"],[,"(6\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["6"],"0$1"],[,"(88)(\\d{3})(\\d{3})","$1 $2 $3",["88"],"0$1"],[,"(870)(\\d{3})(\\d{3})","$1 $2 $3",["870"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],
NC:[,[,,"[2-57-9]\\d{5}",,,,,,,[6]],[,,"(?:2[03-9]|3[0-5]|4[1-7]|88)\\d{4}",,,,"201234"],[,,"(?:5[0-4]|[79]\\d|8[0-79])\\d{4}",,,,"751234"],[,,,,,,,,,[-1]],[,,"36\\d{4}",,,,"366711"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NC",687,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})","$1.$2.$3",["[2-46-9]|5[0-4]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NE:[,[,,"[0289]\\d{7}",,,,,,,[8]],[,,"2(?:0(?:20|3[1-7]|4[134]|5[14]|6[14578]|7[1-578])|1(?:4[145]|5[14]|6[14-68]|7[169]|88))\\d{4}",
,,,"20201234"],[,,"(?:8[04589]|9\\d)\\d{6}",,,,"93123456"],[,,"08\\d{6}",,,,"08123456"],[,,"09\\d{6}",,,,"09123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NE",227,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["09|[289]"]],[,"(08)(\\d{3})(\\d{3})","$1 $2 $3",["08"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NF:[,[,,"[13]\\d{5}",,,,,,,[6],[5]],[,,"(?:1(?:06|17|28|39)|3[012]\\d)\\d{3}",,,,"106609",,,,[5]],[,,"3[58]\\d{4}",,,,"381234",,,,[5]],
[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NF",672,"00",,,,,,,,[[,"(\\d{2})(\\d{4})","$1 $2",["1"]],[,"(\\d)(\\d{5})","$1 $2",["3"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NG:[,[,,"[78]\\d{10,13}|[7-9]\\d{9}|[1-9]\\d{7}|[124-7]\\d{6}",,,,,,,[7,8,10,11,12,13,14],[5,6]],[,,"[12]\\d{6,7}|9(?:0[3-9]|[1-9]\\d)\\d{5}|(?:3\\d|4[023568]|5[02368]|6[02-469]|7[4-69]|8[2-9])\\d{6}|(?:4[47]|5[14579]|6[1578]|7[0-357])\\d{5,6}|(?:78|41)\\d{5}",
,,,"18040123",,,[7,8],[5,6]],[,,"(?:1(?:7[34]\\d|8(?:04|[124579]\\d|8[0-3])|95\\d)|287[0-7]|3(?:18[1-8]|88[0-7]|9(?:8[5-9]|6[1-5]))|4(?:28[0-2]|6(?:7[1-9]|8[02-47])|88[0-2])|5(?:2(?:7[7-9]|8\\d)|38[1-79]|48[0-7]|68[4-7])|6(?:2(?:7[7-9]|8\\d)|4(?:3[7-9]|[68][129]|7[04-69]|9[1-8])|58[0-2]|98[7-9])|7(?:38[0-7]|69[1-8]|78[2-4])|8(?:28[3-9]|38[0-2]|4(?:2[12]|3[147-9]|5[346]|7[4-9]|8[014-689]|90)|58[1-8]|78[2-9]|88[5-7])|98[07]\\d)\\d{4}|(?:70(?:[1-689]\\d|7[0-3])|8(?:0(?:1[01]|[2-9]\\d)|1(?:[0-8]\\d|9[01]))|90[235-9]\\d)\\d{6}",
,,,"8021234567",,,[8,10]],[,,"800\\d{7,11}",,,,"80017591759",,,[10,11,12,13,14]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NG",234,"009","0",,,"0",,,,[[,"(\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["[12]|9(?:0[3-9]|[1-9])"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{2,3})","$1 $2 $3",["[3-6]|7(?:0[1-9]|[1-79])|8[2-9]"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3,4})","$1 $2 $3",["70|8[01]|90[235-9]"],"0$1"],[,"([78]00)(\\d{4})(\\d{4,5})","$1 $2 $3",["[78]00"],"0$1"],[,"([78]00)(\\d{5})(\\d{5,6})","$1 $2 $3",
["[78]00"],"0$1"],[,"(78)(\\d{2})(\\d{3})","$1 $2 $3",["78"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"700\\d{7,11}",,,,"7001234567",,,[10,11,12,13,14]],,,[,,,,,,,,,[-1]]],NI:[,[,,"(?:1800|[25-8]\\d{3})\\d{4}",,,,,,,[8]],[,,"2\\d{7}",,,,"21234567"],[,,"(?:5(?:5[0-7]|[78]\\d)|6(?:20|3[035]|4[045]|5[05]|77|8[1-9]|9[059])|7[5-8]\\d|8\\d{2})\\d{5}",,,,"81234567"],[,,"1800\\d{4}",,,,"18001234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NI",505,"00",,,,,,,,[[,"(\\d{4})(\\d{4})",
"$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NL:[,[,,"(?:[124-7]\\d\\d|3(?:[02-9]\\d|1[0-8]))\\d{6}|(?:8\\d|9[01])\\d{5,8}|1\\d{4,5}",,,,,,,[5,6,7,8,9,10]],[,,"(?:1(?:[035]\\d|1[13-578]|6[124-8]|7[24]|8[0-467])|2(?:[0346]\\d|2[2-46-9]|5[125]|9[479])|3(?:[03568]\\d|1[3-8]|2[01]|4[1-8])|4(?:[0356]\\d|1[1-368]|7[58]|8[15-8]|9[23579])|5(?:[0358]\\d|[19][1-9]|2[1-57-9]|4[13-8]|6[126]|7[0-3578])|7\\d{2})\\d{6}",,,,"101234567",,,[9]],[,,"6[1-58]\\d{7}",,,,"612345678",,
,[9]],[,,"800\\d{4,7}",,,,"8001234",,,[7,8,9,10]],[,,"90[069]\\d{4,7}",,,,"9061234",,,[7,8,9,10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"(?:6760|(?:85|91)\\d{2})\\d{5}",,,,"851234567",,,[9]],"NL",31,"00","0",,,"0",,,,[[,"([1-57-9]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["1[035]|2[0346]|3[03568]|4[0356]|5[0358]|7|8[4578]|91"],"0$1"],[,"([1-5]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["1[16-8]|2[259]|3[124]|4[17-9]|5[124679]"],"0$1"],[,"(6)(\\d{8})","$1 $2",["6[0-57-9]"],"0$1"],[,"(66)(\\d{7})","$1 $2",["66"],"0$1"],
[,"(14)(\\d{3,4})","$1 $2",["14"],"$1"],[,"([89]0\\d)(\\d{4,7})","$1 $2",["[89]0"],"0$1"]],,[,,"66\\d{7}",,,,"662345678",,,[9]],,,[,,"140(?:1(?:[035]|[16-8]\\d)|2(?:[0346]|[259]\\d)|3(?:[03568]|[124]\\d)|4(?:[0356]|[17-9]\\d)|5(?:[0358]|[124679]\\d)|7\\d|8[458])",,,,,,,[5,6]],[,,"140(?:1(?:[035]|[16-8]\\d)|2(?:[0346]|[259]\\d)|3(?:[03568]|[124]\\d)|4(?:[0356]|[17-9]\\d)|5(?:[0358]|[124679]\\d)|7\\d|8[458])|8[478]\\d{7}",,,,"14020",,,[5,6,9]],,,[,,,,,,,,,[-1]]],NO:[,[,,"(?:0|[2-9]\\d{3})\\d{4}",,,
,,,,[5,8]],[,,"(?:2[1-4]|3[1-3578]|5[1-35-7]|6[1-4679]|7[0-8])\\d{6}",,,,"21234567",,,[8]],[,,"(?:4[015-8]|5[89]|9\\d)\\d{6}",,,,"40612345",,,[8]],[,,"80[01]\\d{5}",,,,"80012345",,,[8]],[,,"82[09]\\d{5}",,,,"82012345",,,[8]],[,,"810(?:0[0-6]|[2-8]\\d)\\d{3}",,,,"81021234",,,[8]],[,,"880\\d{5}",,,,"88012345",,,[8]],[,,"85[0-5]\\d{5}",,,,"85012345",,,[8]],"NO",47,"00",,,,,,,,[[,"([489]\\d{2})(\\d{2})(\\d{3})","$1 $2 $3",["[489]"]],[,"([235-7]\\d)(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[235-7]"]]],
,[,,,,,,,,,[-1]],1,,[,,,,,,,,,[-1]],[,,"0\\d{4}|81(?:0(?:0[7-9]|1\\d)|5\\d{2})\\d{3}",,,,"01234"],,,[,,"81[23]\\d{5}",,,,"81212345",,,[8]]],NP:[,[,,"9\\d{9}|[1-9]\\d{7}",,,,,,,[8,10],[6,7]],[,,"(?:1[0-6]\\d|2[13-79][2-6]|3[135-8][2-6]|4[146-9][2-6]|5[135-7][2-6]|6[13-9][2-6]|7[15-9][2-6]|8[1-46-9][2-6]|9[1-79][2-6])\\d{5}",,,,"14567890",,,[8],[6,7]],[,,"9(?:6[0-3]|7[245]|8[0-24-68])\\d{7}",,,,"9841234567",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NP",
977,"00","0",,,"0",,,,[[,"(1)(\\d{7})","$1-$2",["1[2-6]"],"0$1"],[,"(\\d{2})(\\d{6})","$1-$2",["1[01]|[2-8]|9(?:[1-69]|7[15-9])"],"0$1"],[,"(9\\d{2})(\\d{7})","$1-$2",["9(?:6[013]|7[245]|8)"],"$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NR:[,[,,"(?:444|55\\d|888)\\d{4}",,,,,,,[7]],[,,"(?:444|888)\\d{4}",,,,"4441234"],[,,"55[4-9]\\d{4}",,,,"5551234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NR",674,"00",,,,,,,,[[,"(\\d{3})(\\d{4})",
"$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NU:[,[,,"(?:[47]|888\\d)\\d{3}",,,,,,,[4,7]],[,,"[47]\\d{3}",,,,"7012",,,[4]],[,,"888[4-9]\\d{3}",,,,"8884012",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"NU",683,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2",["888"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],NZ:[,[,,"[28]\\d{7,9}|[346]\\d{7}|(?:508|[79]\\d)\\d{6,7}",,,,,,,[8,9,10],[7]],[,,"(?:3[2-79]|[49][2-9]|6[235-9]|7[2-57-9])\\d{6}|24099\\d{3}",
,,,"32345678",,,[8],[7]],[,,"2(?:[028]\\d{7,8}|1\\d{6,8}|[79]\\d{7})",,,,"211234567"],[,,"508\\d{6,7}|80\\d{6,8}",,,,"800123456"],[,,"90\\d{6,7}",,,,"900123456",,,[8,9]],[,,,,,,,,,[-1]],[,,"70\\d{7}",,,,"701234567",,,[9]],[,,,,,,,,,[-1]],"NZ",64,"0(?:0|161)","0",,,"0",,"00",,[[,"(\\d)(\\d{3})(\\d{4})","$1-$2 $3",["240|[346]|7[2-57-9]|9[1-9]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["21"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{3,5})","$1 $2 $3",["2(?:1[1-9]|[69]|7[0-35-9])|70|86"],"0$1"],[,"(2\\d)(\\d{3,4})(\\d{4})",
"$1 $2 $3",["2[028]"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{3})","$1 $2 $3",["90"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3,4})","$1 $2 $3",["2(?:10|74)|5|[89]0"],"0$1"]],,[,,"[28]6\\d{6,7}",,,,"26123456",,,[8,9]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],OM:[,[,,"(?:[279]\\d{3}|500|8007\\d?)\\d{4}",,,,,,,[7,8,9]],[,,"2[2-6]\\d{6}",,,,"23123456",,,[8]],[,,"7[19]\\d{6}|9(?:0[1-9]|[1-9]\\d)\\d{5}",,,,"92123456",,,[8]],[,,"8007\\d{4,5}|500\\d{4}",,,,"80071234"],[,,"900\\d{5}",,,,"90012345",,,[8]],[,,,,,
,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"OM",968,"00",,,,,,,,[[,"(2\\d)(\\d{6})","$1 $2",["2"]],[,"([79]\\d{3})(\\d{4})","$1 $2",["[79]"]],[,"([58]00)(\\d{4,6})","$1 $2",["[58]00"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PA:[,[,,"(?:[1-57-9]|6\\d)\\d{6}",,,,,,,[7,8]],[,,"(?:1(?:0\\d|1[479]|2[37]|3[0137]|4[17]|5[05]|[68][58]|7[0167]|9[39])|2(?:[0235-79]\\d|1[0-7]|4[013-9]|8[026-9])|3(?:[089]\\d|1[014-7]|2[0-35]|33|4[0-579]|55|6[068]|7[06-8])|4(?:00|3[0-579]|4\\d|7[0-57-9])|5(?:[01]\\d|2[0-7]|[56]0|79)|7(?:0[09]|2[0-26-8]|3[03]|4[04]|5[05-9]|6[05]|7[0-24-9]|8[7-9]|90)|8(?:09|2[89]|3\\d|4[0-24-689]|5[014]|8[02])|9(?:0[5-9]|1[0135-8]|2[036-9]|3[35-79]|40|5[0457-9]|6[05-9]|7[04-9]|8[35-8]|9\\d))\\d{4}",
,,,"2001234",,,[7]],[,,"(?:1[16]1|21[89]|8(?:1[01]|7[23]))\\d{4}|6(?:[02-9]\\d|1[0-5])\\d{5}",,,,"61234567"],[,,"800\\d{4}",,,,"8001234",,,[7]],[,,"(?:8(?:22|55|60|7[78]|86)|9(?:00|81))\\d{4}",,,,"8601234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"PA",507,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1-$2",["[1-57-9]"]],[,"(\\d{4})(\\d{4})","$1-$2",["6"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PE:[,[,,"(?:[14-8]|9\\d)\\d{7}",,,,,,,[8,9],[6,7]],[,,"(?:1\\d|4[1-4]|5[1-46]|6[1-7]|7[2-46]|8[2-4])\\d{6}",
,,,"11234567",,,[8],[6,7]],[,,"9\\d{8}",,,,"912345678",,,[9]],[,,"800\\d{5}",,,,"80012345",,,[8]],[,,"805\\d{5}",,,,"80512345",,,[8]],[,,"801\\d{5}",,,,"80112345",,,[8]],[,,"80[24]\\d{5}",,,,"80212345",,,[8]],[,,,,,,,,,[-1]],"PE",51,"19(?:1[124]|77|90)00","0"," Anexo ",,"0",,,,[[,"(1)(\\d{7})","$1 $2",["1"],"(0$1)"],[,"([4-8]\\d)(\\d{6})","$1 $2",["[4-7]|8[2-4]"],"(0$1)"],[,"(\\d{3})(\\d{5})","$1 $2",["80"],"(0$1)"],[,"(9\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["9"],"$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,
,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PF:[,[,,"[48]\\d{7}|4\\d{5}",,,,,,,[6,8]],[,,"4(?:[09][45689]\\d|4)\\d{4}",,,,"40412345"],[,,"8[79]\\d{6}",,,,"87123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"PF",689,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["4[09]|8[79]"]],[,"(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3",["44"]]],,[,,,,,,,,,[-1]],,,[,,"44\\d{4}",,,,,,,[6]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PG:[,[,,"(?:180|(?:(?:[2-59]|7\\d)\\d|64|85)\\d)\\d{4}",
,,,,,,[7,8]],[,,"(?:3[0-2]\\d|4[257]\\d|5[34]\\d|64[1-9]|77(?:[0-24]\\d|30)|85[02-46-9]|9[78]\\d)\\d{4}",,,,"3123456",,,[7]],[,,"7(?:[0-689]\\d|75)\\d{5}",,,,"70123456",,,[8]],[,,"180\\d{4}",,,,"1801234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"2(?:0[0-47]|7[568])\\d{4}",,,,"2751234",,,[7]],"PG",675,"140[1-3]|00",,,,,,"00",,[[,"(\\d{3})(\\d{4})","$1 $2",["[13-689]|27"]],[,"(\\d{4})(\\d{4})","$1 $2",["20|7"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],
PH:[,[,,"(?:1800\\d{2,4}|2|[89]\\d{4})\\d{5}|[3-8]\\d{8}|[28]\\d{7}",,,,,,,[6,8,9,10,11,12,13],[5,7]],[,,"2\\d{5}(?:\\d{2})?|(?:3[2-68]|4[2-9]|5[2-6]|6[2-58]|7[24578]|8[2-8])\\d{7}|88(?:22\\d{6}|42\\d{4})",,,,"21234567",,,[6,8,9,10],[5,7]],[,,"(?:81[37]|9(?:0[5-9]|1[024-9]|2[0-35-9]|3[02-9]|4[235-9]|5[056]|6[5-7]|7[34-79]|89|9[4-9]))\\d{7}",,,,"9051234567",,,[10]],[,,"1800\\d{7,9}",,,,"180012345678",,,[11,12,13]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"PH",63,"00","0",,,"0",
,,,[[,"(2)(\\d{3})(\\d{4})","$1 $2 $3",["2"],"(0$1)"],[,"(2)(\\d{5})","$1 $2",["2"],"(0$1)"],[,"(\\d{4})(\\d{4,6})","$1 $2",["3(?:23|39|46)|4(?:2[3-6]|[35]9|4[26]|76)|5(?:22|44)|642|8(?:62|8[245])","3(?:230|397|461)|4(?:2(?:35|[46]4|51)|396|4(?:22|63)|59[347]|76[15])|5(?:221|446)|642[23]|8(?:622|8(?:[24]2|5[13]))"],"(0$1)"],[,"(\\d{5})(\\d{4})","$1 $2",["346|4(?:27|9[35])|883","3469|4(?:279|9(?:30|56))|8834"],"(0$1)"],[,"([3-8]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["[3-8]"],"(0$1)"],[,"(\\d{3})(\\d{3})(\\d{4})",
"$1 $2 $3",["81|9"],"0$1"],[,"(1800)(\\d{3})(\\d{4})","$1 $2 $3",["180","1800"]],[,"(1800)(\\d{1,2})(\\d{3})(\\d{4})","$1 $2 $3 $4",["180","1800"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PK:[,[,,"(?:122|[24-8]\\d{4,5}|9(?:[013-9]\\d{2,4}|2(?:[01]\\d\\d|2(?:[025-8]\\d|1[01]))\\d))\\d{6}|(?:[2-8]\\d{3}|92(?:[0-7]\\d|8[1-9]))\\d{6}|[24-9]\\d{8}|[89]\\d{7}",,,,,,,[8,9,10,11,12],[6,7]],[,,"(?:21|42)[2-9]\\d{7}|(?:2[25]|4[0146-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)[2-9]\\d{6}|(?:2(?:3[2358]|4[2-4]|9[2-8])|45[3479]|54[2-467]|60[468]|72[236]|8(?:2[2-689]|3[23578]|4[3478]|5[2356])|9(?:2[2-8]|3[27-9]|4[2-6]|6[3569]|9[25-8]))[2-9]\\d{5,6}|58[126]\\d{7}",
,,,"2123456789",,,[9,10],[6,7,8]],[,,"3(?:[014]\\d|2[0-5]|3[0-7]|55|64)\\d{7}",,,,"3012345678",,,[10]],[,,"800\\d{5}",,,,"80012345",,,[8]],[,,"900\\d{5}",,,,"90012345",,,[8]],[,,,,,,,,,[-1]],[,,"122\\d{6}",,,,"122044444",,,[9]],[,,,,,,,,,[-1]],"PK",92,"00","0",,,"0",,,,[[,"([89]00)(\\d{3})(\\d{2})","$1 $2 $3",["[89]00"],"0$1"],[,"(1\\d{3})(\\d{5})","$1 $2",["1"],"$1"],[,"(\\d{2})(\\d{7,8})","$1 $2",["(?:2[125]|4[0-246-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)[2-9]"],"(0$1)"],[,"(\\d{3})(\\d{6,7})","$1 $2",
["2[349]|45|54|60|72|8[2-5]|9[2-469]","(?:2[349]|45|54|60|72|8[2-5]|9[2-469])\\d[2-9]"],"(0$1)"],[,"(58\\d{3})(\\d{5})","$1 $2",["58[126]"],"(0$1)"],[,"(3\\d{2})(\\d{7})","$1 $2",["3"],"0$1"],[,"(\\d{2})(111)(\\d{3})(\\d{3})","$1 $2 $3 $4",["(?:2[125]|4[0-246-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)1","(?:2[125]|4[0-246-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)11","(?:2[125]|4[0-246-9]|5[1-35-7]|6[1-8]|7[14]|8[16]|91)111"],"(0$1)"],[,"(\\d{3})(111)(\\d{3})(\\d{3})","$1 $2 $3 $4",["2[349]|45|54|60|72|8[2-5]|9[2-9]",
"(?:2[349]|45|54|60|72|8[2-5]|9[2-9])\\d1","(?:2[349]|45|54|60|72|8[2-5]|9[2-9])\\d11","(?:2[349]|45|54|60|72|8[2-5]|9[2-9])\\d111"],"(0$1)"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"(?:2(?:[125]|3[2358]|4[2-4]|9[2-8])|4(?:[0-246-9]|5[3479])|5(?:[1-35-7]|4[2-467])|6(?:[1-8]|0[468])|7(?:[14]|2[236])|8(?:[16]|2[2-689]|3[23578]|4[3478]|5[2356])|9(?:1|22|3[27-9]|4[2-6]|6[3569]|9[2-7]))111\\d{6}",,,,"21111825888",,,[11,12]],,,[,,,,,,,,,[-1]]],PL:[,[,,"[1-9]\\d{6}(?:\\d{2})?|6\\d{5}(?:\\d{2})?",,,,,,,[6,
7,8,9]],[,,"(?:1[2-8]|2[2-69]|3[2-4]|4[1-468]|5[24-689]|6[1-3578]|7[14-7]|8[1-79]|9[145])(?:\\d{7}|19\\d{3})",,,,"123456789",,,[7,9]],[,,"(?:45|5[0137]|6[069]|7[2389]|88)\\d{7}",,,,"512345678",,,[9]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,"70[01346-8]\\d{6}",,,,"701234567",,,[9]],[,,"801\\d{6}",,,,"801234567",,,[9]],[,,,,,,,,,[-1]],[,,"39\\d{7}",,,,"391234567",,,[9]],"PL",48,"00",,,,,,,,[[,"(\\d{3})(\\d{3})","$1 $2",["11[68]|64"]],[,"(\\d{5})","$1",["19"]],[,"(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3",
["1[2-8]|2[2-69]|3[2-4]|4[1-468]|5[24-689]|6[1-3578]|7[14-7]|8[1-79]|9[145]"]],[,"(\\d{3})(\\d{2})(\\d{2,3})","$1 $2 $3",["64"]],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["26|39|45|5[0137]|6[0469]|7[02389]|8[08]"]],[,"(\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[14]|2[0-57-9]|3[2-4]|5[24-689]|6[1-3578]|7[14-7]|8[1-79]|9[145]"]]],,[,,"64\\d{4,7}",,,,"641234567"],,,[,,,,,,,,,[-1]],[,,"804\\d{6}",,,,"804123456",,,[9]],,,[,,,,,,,,,[-1]]],PM:[,[,,"[45]\\d{5}",,,,,,,[6]],[,,"(?:4[1-3]|50)\\d{4}",,
,,"430123"],[,,"(?:4[02-4]|5[05])\\d{4}",,,,"551234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"PM",508,"00","0",,,"0",,,,[[,"([45]\\d)(\\d{2})(\\d{2})","$1 $2 $3",["[45]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PR:[,[,,"(?:[589]\\d\\d|787)\\d{7}",,,,,,,[10],[7]],[,,"(?:787|939)[2-9]\\d{6}",,,,"7872345678",,,,[7]],[,,"(?:787|939)[2-9]\\d{6}",,,,"7872345678",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],
[,,"900[2-9]\\d{6}",,,,"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"PR",1,"011","1",,,"1",,,1,,,[,,,,,,,,,[-1]],,"787|939",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PS:[,[,,"(?:(?:1\\d|5)\\d\\d|[2489]2)\\d{6}",,,,,,,[8,9,10],[7]],[,,"(?:22[234789]|42[45]|82[01458]|92[369])\\d{5}",,,,"22234567",,,[8],[7]],[,,"5[69]\\d{7}",,,,"599123456",,,[9]],[,,"1800\\d{6}",,,,"1800123456",,,[10]],[,,,,,,,,,[-1]],[,,"1700\\d{6}",,,,"1700123456",
,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"PS",970,"00","0",,,"0",,,,[[,"([2489])(2\\d{2})(\\d{4})","$1 $2 $3",["[2489]2"],"0$1"],[,"(5[69]\\d)(\\d{3})(\\d{3})","$1 $2 $3",["5[69]"],"0$1"],[,"(1[78]00)(\\d{3})(\\d{3})","$1 $2 $3",["1[78]0","1[78]00"],"$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PT:[,[,,"(?:[26-9]\\d|30)\\d{7}",,,,,,,[9]],[,,"2(?:[12]\\d|[35][1-689]|4[1-59]|6[1-35689]|7[1-9]|8[1-69]|9[1256])\\d{6}",,,,"212345678"],[,,"9(?:[1236]\\d{2}|480)\\d{5}",,,,"912345678"],
[,,"80[02]\\d{6}",,,,"800123456"],[,,"6(?:0[178]|4[68])\\d{6}|76(?:0[1-57]|1[2-47]|2[237])\\d{5}",,,,"760123456"],[,,"80(?:8\\d|9[1579])\\d{5}",,,,"808123456"],[,,"884[0-4689]\\d{5}",,,,"884123456"],[,,"30\\d{7}",,,,"301234567"],"PT",351,"00",,,,,,,,[[,"(2\\d)(\\d{3})(\\d{4})","$1 $2 $3",["2[12]"]],[,"([2-46-9]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["2[3-9]|[346-9]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"7(?:0(?:7\\d|8[17]))\\d{5}",,,,"707123456"],,,[,,"600\\d{6}",,,,"600110000"]],PW:[,[,,"(?:[25-8]\\d\\d|345|488|900)\\d{4}",
,,,,,,[7]],[,,"(?:2(?:55|77)|345|488|5(?:35|44|87)|6(?:22|54|79)|7(?:33|47)|8(?:24|55|76)|900)\\d{4}",,,,"2771234"],[,,"(?:6[234689]0|77\\d|88[0-4])\\d{4}",,,,"6201234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"PW",680,"01[12]",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],PY:[,[,,"(?:[2-46-9]\\d|5[0-8])\\d{7}|[2-9]\\d{5,7}",,,,,,,[6,7,8,9],[5]],[,,"(?:[26]1|3[289]|4[124678]|7[123]|8[1236])\\d{5,7}|(?:2(?:2[4568]|7[15]|9[1-5])|3(?:18|3[167]|4[2357]|51)|4(?:18|2[45]|3[12]|5[13]|64|71|9[1-47])|5(?:[1-4]\\d|5[0234])|6(?:3[1-3]|44|7[1-4678])|7(?:17|4[0-4]|6[1-578]|75|8[0-8])|858)\\d{5,6}",
,,,"212345678",,,[7,8,9],[5,6]],[,,"9(?:51|6[129]|[78][1-6]|9[1-5])\\d{6}",,,,"961456789",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"8700[0-4]\\d{4}",,,,"870012345",,,[9]],"PY",595,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{5})","$1 $2",["[26]1|3[289]|4[1246-8]|7[1-3]|8[1-36]"],"(0$1)"],[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["[26]1|3[289]|4[1246-8]|7[1-3]|8[1-36]"],"(0$1)"],[,"(\\d{3})(\\d{3,6})","$1 $2",["[2-9]0"],"0$1"],[,"(\\d{3})(\\d{6})","$1 $2",["9[1-9]"],"0$1"],
[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["870","8700"]],[,"(\\d{3})(\\d{4,5})","$1 $2",["[2-8][1-9]"],"(0$1)"],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["[2-8][1-9]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"[2-9]0\\d{4,7}",,,,"201234567"],,,[,,,,,,,,,[-1]]],QA:[,[,,"(?:(?:2|[3-7]\\d)\\d\\d|800)\\d{4}",,,,,,,[7,8]],[,,"4[04]\\d{6}",,,,"44123456",,,[8]],[,,"[3567]\\d{7}",,,,"33123456",,,[8]],[,,"800\\d{4}",,,,"8001234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"QA",
974,"00",,,,,,,,[[,"([28]\\d{2})(\\d{4})","$1 $2",["[28]"]],[,"([3-7]\\d{3})(\\d{4})","$1 $2",["[3-7]"]]],,[,,"2(?:[12]\\d|61)\\d{4}",,,,"2123456",,,[7]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],RE:[,[,,"(?:26|[68]\\d)\\d{7}",,,,,,,[9]],[,,"262\\d{6}",,,,"262161234"],[,,"69(?:2\\d{2}|3(?:0[0-46]|1[013]|2[0-2]|3[0-39]|4\\d|5[05]|6[0-26]|7[0-27]|8[0-38]|9[0-479]))\\d{4}",,,,"692123456"],[,,"80\\d{7}",,,,"801234567"],[,,"89[1-37-9]\\d{6}",,,,"891123456"],[,,"8(?:1[019]|2[0156]|84|90)\\d{6}",
,,,"810123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"RE",262,"00","0",,,"0",,,,[[,"([268]\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[268]"],"0$1"]],,[,,,,,,,,,[-1]],1,"262|69|8",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],RO:[,[,,"(?:[237]\\d|[89]0)\\d{7}|[23]\\d{5}",,,,,,,[6,9]],[,,"2(?:1(?:\\d{7}|9\\d{3})|[3-6](?:\\d{7}|\\d9\\d{2}))|3(?:1\\d{4}(?:\\d{3})?|[3-6]\\d{7})",,,,"211234567"],[,,"7(?:[02-7]\\d{2}|1(?:[01]\\d|20)|8[03-8]\\d|99\\d)\\d{5}",,,,"712034567",,,[9]],[,,"800\\d{6}",,,,
"800123456",,,[9]],[,,"90[036]\\d{6}",,,,"900123456",,,[9]],[,,"801\\d{6}",,,,"801123456",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"RO",40,"00","0"," int ",,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["[23]1"],"0$1"],[,"(\\d{2})(\\d{4})","$1 $2",["[23]1"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["[23][3-7]|[7-9]"],"0$1"],[,"(2\\d{2})(\\d{3})","$1 $2",["2[3-6]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"37\\d{7}",,,,"372123456",,,[9]],,,[,,,,,,,,,[-1]]],RS:[,[,,"[127]\\d{6,11}|3(?:[0-79]\\d{5,10}|8(?:[02-9]\\d{4,9}|1\\d{4,5}))|6\\d{7,9}|800\\d{3,9}|90\\d{4,8}|7\\d{5}",
,,,,,,[6,7,8,9,10,11,12],[5]],[,,"(?:1(?:[02-9][2-9]|1[1-9])\\d|2(?:[0-24-7][2-9]\\d|[389](?:0[2-9]|[2-9]\\d))|3(?:[0-8][2-9]\\d|9(?:[2-9]\\d|0[2-9])))\\d{3,8}",,,,"10234567",,,[7,8,9,10,11,12],[5,6]],[,,"6(?:[0-689]|7\\d)\\d{6,7}",,,,"601234567",,,[8,9,10]],[,,"800\\d{3,9}",,,,"80012345"],[,,"(?:90[0169]|78\\d)\\d{3,7}",,,,"90012345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"RS",381,"00","0",,,"0",,,,[[,"([23]\\d{2})(\\d{4,9})","$1 $2",["(?:2[389]|39)0"],"0$1"],[,"([1-3]\\d)(\\d{5,10})",
"$1 $2",["1|2(?:[0-24-7]|[389][1-9])|3(?:[0-8]|9[1-9])"],"0$1"],[,"(6\\d)(\\d{6,8})","$1 $2",["6"],"0$1"],[,"([89]\\d{2})(\\d{3,9})","$1 $2",["[89]"],"0$1"],[,"(7[26])(\\d{4,9})","$1 $2",["7[26]"],"0$1"],[,"(7[08]\\d)(\\d{4,9})","$1 $2",["7[08]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"7[06]\\d{4,10}",,,,"700123456"],,,[,,,,,,,,,[-1]]],RU:[,[,,"[347-9]\\d{9}",,,,,,,[10]],[,,"(?:3(?:0[12]|4[1-35-79]|5[1-3]|65|8[1-58]|9[0145])|4(?:01|1[1356]|2[13467]|7[1-5]|8[1-7]|9[1-689])|8(?:1[1-8]|2[01]|3[13-6]|4[0-8]|5[15]|6[1-35-79]|7[1-37-9]))\\d{7}",
,,,"3011234567"],[,,"9\\d{9}",,,,"9123456789"],[,,"80[04]\\d{7}",,,,"8001234567"],[,,"80[39]\\d{7}",,,,"8091234567"],[,,,,,,,,,[-1]],[,,"808\\d{7}",,,,"8081234567"],[,,,,,,,,,[-1]],"RU",7,"810","8",,,"8",,"8~10",,[[,"(\\d{3})(\\d{2})(\\d{2})","$1-$2-$3",["[1-79]"],"$1",,1],[,"([3489]\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2-$3-$4",["[3489]"],"8 ($1)",,1],[,"(7\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["7"],"8 ($1)",,1]],[[,"([3489]\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2-$3-$4",["[3489]"],"8 ($1)",,1],[,"(7\\d{2})(\\d{3})(\\d{4})",
"$1 $2 $3",["7"],"8 ($1)",,1]],[,,,,,,,,,[-1]],1,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],RW:[,[,,"(?:06|[27]\\d\\d|[89]00)\\d{6}",,,,,,,[8,9]],[,,"2[258]\\d{7}|06\\d{6}",,,,"250123456"],[,,"7[238]\\d{7}",,,,"720123456",,,[9]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,"900\\d{6}",,,,"900123456",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"RW",250,"00","0",,,"0",,,,[[,"(2\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["2"]],[,"([7-9]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["[7-9]"],"0$1"],[,"(0\\d)(\\d{2})(\\d{2})(\\d{2})",
"$1 $2 $3 $4",["0"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SA:[,[,,"(?:(?:[15]|8\\d)\\d|92)\\d{7}",,,,,,,[9,10],[7]],[,,"1(?:1\\d|2[24-8]|3[35-8]|4[3-68]|6[2-5]|7[235-7])\\d{6}",,,,"112345678",,,[9],[7]],[,,"(?:5(?:[013-689]\\d|7[0-36-8])|811\\d)\\d{6}",,,,"512345678"],[,,"800\\d{7}",,,,"8001234567",,,[10]],[,,,,,,,,,[-1]],[,,"92[05]\\d{6}",,,,"920012345",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"SA",966,"00","0",,,"0",,,,[[,"(1\\d)(\\d{3})(\\d{4})","$1 $2 $3",["1[1-467]"],
"0$1"],[,"(5\\d)(\\d{3})(\\d{4})","$1 $2 $3",["5"],"0$1"],[,"(92\\d{2})(\\d{5})","$1 $2",["92"],"$1"],[,"(800)(\\d{3})(\\d{4})","$1 $2 $3",["800"],"$1"],[,"(811)(\\d{3})(\\d{3,4})","$1 $2 $3",["811"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SB:[,[,,"(?:[1-6]|[7-9]\\d\\d)\\d{4}",,,,,,,[5,7]],[,,"(?:1[4-79]|[23]\\d|4[0-2]|5[03]|6[0-37])\\d{3}",,,,"40123",,,[5]],[,,"48\\d{3}|7(?:30|[46-8]\\d|5[025-9]|9[0-5])\\d{4}|8[4-9]\\d{5}|9(?:1[2-9]|2[013-9]|3[0-2]|[46]\\d|5[0-46-9]|7[0-689]|8[0-79]|9[0-8])\\d{4}",
,,,"7421234"],[,,"1[38]\\d{3}",,,,"18123",,,[5]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"5[12]\\d{3}",,,,"51123",,,[5]],"SB",677,"0[01]",,,,,,,,[[,"(\\d{2})(\\d{5})","$1 $2",["[7-9]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SC:[,[,,"(?:(?:(?:[24]\\d|64)\\d|971)\\d|8000)\\d{3}",,,,,,,[7]],[,,"4[2-46]\\d{5}",,,,"4217123"],[,,"2[5-8]\\d{5}",,,,"2510123"],[,,"8000\\d{3}",,,,"8000000"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"(?:64\\d|971)\\d{4}",
,,,"6412345"],"SC",248,"0(?:[02]|10?)",,,,,,"00",,[[,"(\\d)(\\d{3})(\\d{3})","$1 $2 $3",["[246]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SD:[,[,,"[19]\\d{8}",,,,,,,[9]],[,,"1(?:5\\d|8[3567])\\d{6}",,,,"151231234"],[,,"(?:1[0-2]|9[0-3569])\\d{7}",,,,"911231234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"SD",249,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",,"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],
,,[,,,,,,,,,[-1]]],SE:[,[,,"(?:[26]\\d\\d|9)\\d{9}|[1-9]\\d{8}|[1-689]\\d{7}|[1-4689]\\d{6}|[27]\\d{5}",,,,,,,[6,7,8,9,10,12]],[,,"1(?:0[1-8]\\d{6}|[136]\\d{5,7}|(?:2[0-35]|4[0-4]|5[0-25-9]|7[13-6]|[89]\\d)\\d{5,6})|2(?:[136]\\d{5,7}|(?:2[0-7]|4[0136-8]|5[0138]|7[018]|8[01]|9[0-57])\\d{5,6})|3(?:[356]\\d{5,7}|(?:0[0-4]|1\\d|2[0-25]|4[056]|7[0-2]|8[0-3]|9[023])\\d{5,6})|4(?:[0246]\\d{5,7}|(?:1[013-8]|3[0135]|5[14-79]|7[0-246-9]|8[0156]|9[0-689])\\d{5,6})|5(?:0[0-6]|[15][0-5]|2[0-68]|3[0-4]|4\\d|6[03-5]|7[013]|8[0-79]|9[01])\\d{5,6}|6(?:[03]\\d{5,7}|(?:1[1-3]|2[0-4]|4[02-57]|5[0-37]|6[0-3]|7[0-2]|8[0247]|9[0-356])\\d{5,6})|8\\d{6,8}|9(?:0[1-9]\\d{4,6}|(?:1[0-68]|2\\d|3[02-5]|4[0-3]|5[0-4]|[68][01]|7[0135-8])\\d{5,6})",
,,,"8123456",,,[7,8,9]],[,,"7[02369]\\d{7}",,,,"701234567",,,[9]],[,,"20\\d{4,7}",,,,"20123456",,,[6,7,8,9]],[,,"649\\d{6}|9(?:00|39|44)[1-8]\\d{3,6}",,,,"9001234567",,,[7,8,9,10]],[,,"77(?:0\\d{3}(?:\\d{3})?|[1-7]\\d{6})",,,,"771234567",,,[6,9]],[,,"75[1-8]\\d{6}",,,,"751234567",,,[9]],[,,,,,,,,,[-1]],"SE",46,"00","0",,,"0",,,,[[,"([1-469]\\d)(\\d{3})(\\d{2})","$1-$2 $3",["[12][136]|3[356]|4[0246]|6[03]|90[1-9]"],"0$1"],[,"(9[034]\\d)(\\d{4})","$1-$2",["9(?:00|39|44)"],"0$1"],[,"(8)(\\d{2,3})(\\d{2,3})(\\d{2})",
"$1-$2 $3 $4",["8"],"0$1"],[,"([1-69]\\d)(\\d{2,3})(\\d{2})(\\d{2})","$1-$2 $3 $4",["1[013689]|2[0136]|3[1356]|4[0246]|54|6[03]|90"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1-$2 $3 $4",["1[2457]|2(?:[247-9]|5[0138])|3[0247-9]|4[1357-9]|5[0-35-9]|6(?:[124-689]|7[0-2])|9(?:[125-8]|3[0-5]|4[0-3])"],"0$1"],[,"(\\d{3})(\\d{2,3})(\\d{2})","$1-$2 $3",["1[2457]|2(?:[247-9]|5[0138])|3[0247-9]|4[1357-9]|5[0-35-9]|6(?:[124-689]|7[0-2])|9(?:[125-8]|3[0-5]|4[0-3])"],"0$1"],[,"(7\\d)(\\d{3})(\\d{2})(\\d{2})",
"$1-$2 $3 $4",["7"],"0$1"],[,"(77)(\\d{2})(\\d{2})","$1-$2$3",["77"],"0$1"],[,"(20)(\\d{2,3})(\\d{2})","$1-$2 $3",["20"],"0$1"],[,"(9[034]\\d)(\\d{2})(\\d{2})(\\d{3})","$1-$2 $3 $4",["9[034]"],"0$1"],[,"(\\d{3})(\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1-$2 $3 $4 $5",["25[245]|67[3-6]"],"0$1"]],[[,"([1-469]\\d)(\\d{3})(\\d{2})","$1 $2 $3",["[12][136]|3[356]|4[0246]|6[03]|90[1-9]"]],[,"(9[034]\\d)(\\d{4})","$1 $2",["9(?:00|39|44)"]],[,"(8)(\\d{2,3})(\\d{2,3})(\\d{2})","$1 $2 $3 $4",["8"]],[,"([1-69]\\d)(\\d{2,3})(\\d{2})(\\d{2})",
"$1 $2 $3 $4",["1[013689]|2[0136]|3[1356]|4[0246]|54|6[03]|90"]],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["1[2457]|2(?:[247-9]|5[0138])|3[0247-9]|4[1357-9]|5[0-35-9]|6(?:[124-689]|7[0-2])|9(?:[125-8]|3[0-5]|4[0-3])"]],[,"(\\d{3})(\\d{2,3})(\\d{2})","$1 $2 $3",["1[2457]|2(?:[247-9]|5[0138])|3[0247-9]|4[1357-9]|5[0-35-9]|6(?:[124-689]|7[0-2])|9(?:[125-8]|3[0-5]|4[0-3])"]],[,"(7\\d)(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["7"]],[,"(77)(\\d{2})(\\d{2})","$1 $2 $3",["77"]],[,"(20)(\\d{2,3})(\\d{2})",
"$1 $2 $3",["20"]],[,"(9[034]\\d)(\\d{2})(\\d{2})(\\d{3})","$1 $2 $3 $4",["9[034]"]],[,"(\\d{3})(\\d{2})(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4 $5",["25[245]|67[3-6]"]]],[,,"74[02-9]\\d{6}",,,,"740123456",,,[9]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,"(?:25[245]|67[3-6])\\d{9}",,,,"254123456789",,,[12]]],SG:[,[,,"(?:1\\d{3}|[369]|7000|8(?:\\d{2})?)\\d{7}",,,,,,,[8,10,11]],[,,"6[1-9]\\d{6}",,,,"61234567",,,[8]],[,,"(?:8[1-8]|9[0-8])\\d{6}",,,,"81234567",,,[8]],[,,"1?800\\d{7}",,,,"18001234567",,,[10,
11]],[,,"1900\\d{7}",,,,"19001234567",,,[11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"3[12]\\d{6}",,,,"31234567",,,[8]],"SG",65,"0[0-3]\\d",,,,,,,,[[,"([3689]\\d{3})(\\d{4})","$1 $2",["[369]|8[1-9]"]],[,"(1[89]00)(\\d{3})(\\d{4})","$1 $2 $3",["1[89]0","1[89]00"]],[,"(7000)(\\d{4})(\\d{3})","$1 $2 $3",["700","7000"]],[,"(800)(\\d{3})(\\d{4})","$1 $2 $3",["800"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"7000\\d{7}",,,,"70001234567",,,[11]],,,[,,,,,,,,,[-1]]],SH:[,[,,"(?:[256]\\d|8)\\d{3}",,,,,,,[4,5]],[,
,"2(?:[0-57-9]\\d|6[4-9])\\d{2}",,,,"22158"],[,,"[56]\\d{4}",,,,"51234",,,[5]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"262\\d{2}",,,,"26212",,,[5]],"SH",290,"00",,,,,,,,,,[,,,,,,,,,[-1]],1,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SI:[,[,,"[1-8]\\d{7}|90\\d{4,6}|8\\d{4,6}",,,,,,,[5,6,7,8]],[,,"(?:1\\d|[25][2-8]|3[24-8]|4[24-8]|7[3-8])\\d{6}",,,,"11234567",,,[8],[7]],[,,"(?:[37][01]\\d|4[0139]\\d|51\\d|6(?:[48]\\d|5[15-7]|9[69]))\\d{5}",,,,"31234567",,,[8]],[,
,"80\\d{4,6}",,,,"80123456",,,[6,7,8]],[,,"90\\d{4,6}|89[1-3]\\d{2,5}",,,,"90123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"(?:59|8[1-3])\\d{6}",,,,"59012345",,,[8]],"SI",386,"00","0",,,"0",,,,[[,"(\\d)(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[12]|[34][24-8]|5[2-8]|7[3-8]"],"(0$1)"],[,"([3-7]\\d)(\\d{3})(\\d{3})","$1 $2 $3",["[37][01]|4[0139]|51|6"],"0$1"],[,"([89][09])(\\d{3,6})","$1 $2",["[89][09]"],"0$1"],[,"([58]\\d{2})(\\d{5})","$1 $2",["59|8[1-3]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SJ:[,[,,"(?:0|(?:[4589]\\d|79)\\d\\d)\\d{4}",,,,,,,[5,8]],[,,"79\\d{6}",,,,"79123456",,,[8]],[,,"(?:4[015-8]|5[89]|9\\d)\\d{6}",,,,"41234567",,,[8]],[,,"80[01]\\d{5}",,,,"80012345",,,[8]],[,,"82[09]\\d{5}",,,,"82012345",,,[8]],[,,"810(?:0[0-6]|[2-8]\\d)\\d{3}",,,,"81021234",,,[8]],[,,"880\\d{5}",,,,"88012345",,,[8]],[,,"85[0-5]\\d{5}",,,,"85012345",,,[8]],"SJ",47,"00",,,,,,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"0\\d{4}|81(?:0(?:0[7-9]|1\\d)|5\\d{2})\\d{3}",,,
,"01234"],,,[,,"81[23]\\d{5}",,,,"81212345",,,[8]]],SK:[,[,,"[2-689]\\d{8}|[2-59]\\d{6}|[2-5]\\d{5}",,,,,,,[6,7,9]],[,,"2(?:1(?:6\\d{3,4}|7\\d{3})|[2-9]\\d{7})|[3-5][1-8](?:1(?:6\\d{2,3}|7\\d{3})|\\d{7})",,,,"221234567"],[,,"9(?:0(?:[1-8]\\d|9[1-9])|(?:1[0-24-9]|[45]\\d)\\d)\\d{5}",,,,"912123456",,,[9]],[,,"800\\d{6}",,,,"800123456",,,[9]],[,,"9(?:[78]\\d{7}|00\\d{6})",,,,"900123456",,,[9]],[,,"8[5-9]\\d{7}",,,,"850123456",,,[9]],[,,,,,,,,,[-1]],[,,"6(?:02|5[0-4]|9[0-6])\\d{6}",,,,"690123456",,,[9]],
"SK",421,"00","0",,,"0",,,,[[,"(2)(1[67])(\\d{3,4})","$1 $2 $3",["21[67]"],"0$1"],[,"([3-5]\\d)(\\d{2})(\\d{2,3})","$1 $2 $3",["[3-5]"],"0$1"],[,"(2)(\\d{3})(\\d{3})(\\d{2})","$1/$2 $3 $4",["2"],"0$1"],[,"([3-5]\\d)(\\d{3})(\\d{2})(\\d{2})","$1/$2 $3 $4",["[3-5]"],"0$1"],[,"([689]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["[689]"],"0$1"],[,"(9090)(\\d{3})","$1 $2",["909","9090"],"0$1"]],,[,,"9090\\d{3}",,,,"9090123",,,[7]],,,[,,"(?:602|8(?:00|[5-9]\\d)|9(?:00|[78]\\d))\\d{6}|9090\\d{3}",,,,,,,[7,9]],[,
,"96\\d{7}",,,,"961234567",,,[9]],,,[,,,,,,,,,[-1]]],SL:[,[,,"(?:[2-578]\\d|66|99)\\d{6}",,,,,,,[8],[6]],[,,"[235]2[2-4][2-9]\\d{4}",,,,"22221234",,,,[6]],[,,"(?:2[15]|3[013-5]|4[04]|5[05]|66|7[5-9]|8[08]|99)\\d{6}",,,,"25123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"SL",232,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{6})","$1 $2",,"(0$1)"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SM:[,[,,"(?:0549|[5-7]\\d)\\d{6}",,,,,,,[8,10],[6]],
[,,"0549(?:8[0157-9]|9\\d)\\d{4}",,,,"0549886377",,,[10],[6]],[,,"6[16]\\d{6}",,,,"66661212",,,[8]],[,,,,,,,,,[-1]],[,,"7[178]\\d{6}",,,,"71123456",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"5[158]\\d{6}",,,,"58001110",,,[8]],"SM",378,"00",,,,"([89]\\d{5})","0549$1",,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[5-7]"]],[,"(0549)(\\d{6})","$1 $2",["054","0549"]],[,"(\\d{6})","0549 $1",["[89]"]]],[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[5-7]"]],[,"(0549)(\\d{6})","($1) $2",
["054","0549"]],[,"(\\d{6})","(0549) $1",["[89]"]]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SN:[,[,,"(?:[378]\\d{4}|93330)\\d{4}",,,,,,,[9]],[,,"3(?:0(?:1[0-2]|80)|282|3(?:8[1-9]|9[3-9])|611)\\d{5}",,,,"301012345"],[,,"7(?:[06-8]\\d|21|90)\\d{6}",,,,"701234567"],[,,"800\\d{6}",,,,"800123456"],[,,"88[4689]\\d{6}",,,,"884123456"],[,,"81[02468]\\d{6}",,,,"810123456"],[,,,,,,,,,[-1]],[,,"39[01]\\d{6}|3392\\d{5}|93330\\d{4}",,,,"933301234"],"SN",221,"00",,,,,,,,[[,"(\\d{2})(\\d{3})(\\d{2})(\\d{2})",
"$1 $2 $3 $4",["[379]"]],[,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["8"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SO:[,[,,"[346-9]\\d{8}|[12679]\\d{7}|(?:[1-4]\\d|59)\\d{5}|[1348]\\d{5}",,,,,,,[6,7,8,9]],[,,"(?:1\\d{1,2}|2[0-79]\\d|3[0-46-8]?\\d|4[0-7]?\\d|59\\d|8[125])\\d{4}",,,,"4012345",,,[6,7]],[,,"(?:15\\d|2(?:4\\d|8)|3[59]\\d{2}|4[89]\\d{2}|6[1-9]?\\d{2}|7(?:[1-8]\\d|9\\d{1,2})|8[08]\\d{2}|9(?:0[67]|[2-9])\\d)\\d{5}",,,,"71123456",,,[7,8,9]],[,,,,,,,,
,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"SO",252,"00","0",,,"0",,,,[[,"(\\d{6})","$1",["[134]"]],[,"(\\d)(\\d{6})","$1 $2",["[13-5]|2[0-79]"]],[,"(\\d)(\\d{7})","$1 $2",["24|[67]"]],[,"(\\d{2})(\\d{4})","$1 $2",["8[125]"]],[,"(\\d{2})(\\d{5,7})","$1 $2",["15|28|6[1-35-9]|799|9[2-9]"]],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["3[59]|4[89]|6[24-6]|79|8[08]|90"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SR:[,[,,"(?:[2-5]|68|[78]\\d)\\d{5}",
,,,,,,[6,7]],[,,"(?:2[1-3]|3[0-7]|4\\d|5[2-58]|68\\d)\\d{4}",,,,"211234"],[,,"(?:7[124-7]|8[125-9])\\d{5}",,,,"7412345",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"56\\d{4}",,,,"561234",,,[6]],"SR",597,"00",,,,,,,,[[,"(\\d{3})(\\d{3})","$1-$2",["[2-4]|5[2-58]"]],[,"(\\d{2})(\\d{2})(\\d{2})","$1-$2-$3",["56"]],[,"(\\d{3})(\\d{4})","$1-$2",["[6-8]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SS:[,[,,"[19]\\d{8}",,,,,,,[9]],[,,"18\\d{7}",,,
,"181234567"],[,,"(?:12|9[1257])\\d{7}",,,,"977123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"SS",211,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",,"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],ST:[,[,,"(?:22|9\\d)\\d{5}",,,,,,,[7]],[,,"22\\d{5}",,,,"2221234"],[,,"9(?:0(?:0[5-9]|[1-9]\\d)|[89]\\d{2})\\d{3}",,,,"9812345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"ST",239,
"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SV:[,[,,"[267]\\d{7}|[89]00\\d{4}(?:\\d{4})?",,,,,,,[7,8,11]],[,,"2[1-6]\\d{6}",,,,"21234567",,,[8]],[,,"[67]\\d{7}",,,,"70123456",,,[8]],[,,"800\\d{4}(?:\\d{4})?",,,,"8001234",,,[7,11]],[,,"900\\d{4}(?:\\d{4})?",,,,"9001234",,,[7,11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"SV",503,"00",,,,,,,,[[,"(\\d{4})(\\d{4})","$1 $2",["[267]"]],[,"(\\d{3})(\\d{4})","$1 $2",["[89]"]],[,
"(\\d{3})(\\d{4})(\\d{4})","$1 $2 $3",["[89]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SX:[,[,,"(?:(?:[58]\\d\\d|900)\\d|7215)\\d{6}",,,,,,,[10],[7]],[,,"7215(?:4[2-8]|8[239]|9[056])\\d{4}",,,,"7215425678",,,,[7]],[,,"7215(?:1[02]|2\\d|5[034679]|8[014-8])\\d{4}",,,,"7215205678",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002123456"],[,,"900[2-9]\\d{6}",,,,"9002123456"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,
,,[-1]],"SX",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"721",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SY:[,[,,"[1-39]\\d{8}|[1-5]\\d{7}",,,,,,,[8,9],[6,7]],[,,"(?:1(?:1\\d?|4\\d|[2356])|2(?:1\\d?|[235])|3(?:[13]\\d|4)|4[13]|5[1-3])\\d{6}",,,,"112345678",,,,[6,7]],[,,"9(?:22|[3-589]\\d|6[024-9])\\d{6}",,,,"944567890",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"SY",963,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{3,4})","$1 $2 $3",["[1-5]"],"0$1",,1],
[,"(9\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["9"],"0$1",,1]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],SZ:[,[,,"(?:0800|(?:[237]\\d|900)\\d\\d)\\d{4}",,,,,,,[8,9]],[,,"[23][2-5]\\d{6}",,,,"22171234",,,[8]],[,,"7[6-9]\\d{6}",,,,"76123456",,,[8]],[,,"0800\\d{4}",,,,"08001234",,,[8]],[,,"900\\d{6}",,,,"900012345",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"70\\d{6}",,,,"70012345",,,[8]],"SZ",268,"00",,,,,,,,[[,"(\\d{4})(\\d{4})","$1 $2",["[0237]"]],[,"(\\d{5})(\\d{4})","$1 $2",
["900"]]],,[,,,,,,,,,[-1]],,,[,,"0800\\d{4}",,,,,,,[8]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TA:[,[,,"8\\d{3}",,,,,,,[4]],[,,"8\\d{3}",,,,"8999"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TA",290,"00",,,,,,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TC:[,[,,"(?:[58]\\d\\d|649|900)\\d{7}",,,,,,,[10],[7]],[,,"649(?:712|9(?:4\\d|50))\\d{4}",,,,"6497121234",,,,[7]],[,,"649(?:2(?:3[129]|4[1-7])|3(?:3[1-389]|4[1-8])|4[34][1-3])\\d{4}",
,,,"6492311234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],[,,"900[2-9]\\d{6}",,,,"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,"64971[01]\\d{4}",,,,"6497101234",,,,[7]],"TC",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"649",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TD:[,[,,"(?:22|[69]\\d|77)\\d{6}",,,,,,,[8]],[,,"22(?:[3789]0|5[0-5]|6[89])\\d{4}",,,,"22501234"],[,,"(?:6[023568]\\d|77\\d|9\\d{2})\\d{5}",,,,"63012345"],[,
,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TD",235,"00|16",,,,,,"00",,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TG:[,[,,"[279]\\d{7}",,,,,,,[8]],[,,"2(?:2[2-7]|3[23]|4[45]|55|6[67]|77)\\d{5}",,,,"22212345"],[,,"(?:7[09]|9[0-36-9])\\d{6}",,,,"90112345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TG",228,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})",
"$1 $2 $3 $4",["[279]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TH:[,[,,"(?:1\\d\\d?|[2-57]|[689]\\d)\\d{7}",,,,,,,[8,9,10]],[,,"(?:2\\d|3[2-9]|4[2-5]|5[2-6]|7[3-7])\\d{6}",,,,"21234567",,,[8]],[,,"(?:14|6[1-6]|[89]\\d)\\d{7}",,,,"812345678",,,[9]],[,,"1800\\d{6}",,,,"1800123456",,,[10]],[,,"1900\\d{6}",,,,"1900123456",,,[10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"6[08]\\d{7}",,,,"601234567",,,[9]],"TH",66,"00[1-9]","0",,,"0",,,,[[,"(2)(\\d{3})(\\d{4})","$1 $2 $3",["2"],
"0$1"],[,"([13-9]\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["14|[3-9]"],"0$1"],[,"(1[89]00)(\\d{3})(\\d{3})","$1 $2 $3",["1[89]0","1[89]00"],"$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TJ:[,[,,"(?:[3-59]\\d|77|88)\\d{7}",,,,,,,[9],[3,5,7]],[,,"(?:3(?:1[3-5]|2[245]|3[12]|4[24-7]|5[25]|72)|4(?:46|74|87))\\d{6}",,,,"372123456",,,,[3,5,7]],[,,"(?:41[18]|(?:5[05]|77|88|9[0-35-9])\\d)\\d{6}",,,,"917123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,
,,,,[-1]],"TJ",992,"810","8",,,"8",,"8~10",,[[,"([349]\\d{2})(\\d{2})(\\d{4})","$1 $2 $3",["[34]7|91[78]"],,,1],[,"([457-9]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["4[148]|[578]|9(?:[0235-9]|1[59])"],,,1],[,"(331700)(\\d)(\\d{2})","$1 $2 $3",["331","3317","33170","331700"],,,1],[,"(\\d{4})(\\d)(\\d{4})","$1 $2 $3",["3[1-5]","3(?:[1245]|3(?:[02-9]|1[0-589]))"],,,1]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TK:[,[,,"[2-47]\\d{3,6}",,,,,,,[4,5,6,7]],[,,"(?:2[2-4]|[34]\\d)\\d{2,5}",
,,,"3101"],[,,"7[2-4]\\d{2,5}",,,,"7290"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TK",690,"00",,,,,,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TL:[,[,,"(?:[2-4]\\d|7\\d\\d?|[89]0)\\d{5}",,,,,,,[7,8]],[,,"(?:2[1-5]|3[1-9]|4[1-4])\\d{5}",,,,"2112345",,,[7]],[,,"7[3-8]\\d{6}",,,,"77212345",,,[8]],[,,"80\\d{5}",,,,"8012345",,,[7]],[,,"90\\d{5}",,,,"9012345",,,[7]],[,,,,,,,,,[-1]],[,,"70\\d{5}",,,,"7012345",,,[7]],[,,,,,,,,,[-1]],"TL",
670,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2",["[2-489]|70"]],[,"(\\d{4})(\\d{4})","$1 $2",["7[3-8]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TM:[,[,,"[1-6]\\d{7}",,,,,,,[8]],[,,"(?:1(?:2\\d|3[1-9])|2(?:22|4[0-35-8])|3(?:22|4[03-9])|4(?:22|3[128]|4\\d|6[15])|5(?:22|5[7-9]|6[014-689]))\\d{5}",,,,"12345678"],[,,"6[1-9]\\d{6}",,,,"66123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TM",993,"810","8",,,"8",,"8~10",,[[,"(\\d{2})(\\d{2})(\\d{2})(\\d{2})",
"$1 $2-$3-$4",["12"],"(8 $1)"],[,"(\\d{2})(\\d{6})","$1 $2",["6"],"8 $1"],[,"(\\d{3})(\\d)(\\d{2})(\\d{2})","$1 $2-$3-$4",["13|[2-5]"],"(8 $1)"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TN:[,[,,"[2-57-9]\\d{7}",,,,,,,[8]],[,,"(?:3[0-2]\\d{3}|7\\d{4}|81200)\\d{3}",,,,"30010123"],[,,"(?:[259]\\d{3}|3(?:001|1(?:[1-35]\\d|40)|240|6[0-4]\\d|91\\d)|4[0-6]\\d{2})\\d{4}",,,,"20123456"],[,,"8010\\d{4}",,,,"80101234"],[,,"88\\d{6}",,,,"88123456"],[,,"8[12]10\\d{4}",,,,"81101234"],
[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TN",216,"00",,,,,,,,[[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TO:[,[,,"(?:(?:080|[56])0|[2-4]\\d|[78]\\d(?:\\d{2})?)\\d{3}",,,,,,,[5,7]],[,,"(?:2\\d|3[1-8]|4[1-4]|[56]0|7[0149]|8[05])\\d{3}",,,,"20123",,,[5]],[,,"(?:7[578]|8[46-9])\\d{5}",,,,"7715123",,,[7]],[,,"0800\\d{3}",,,,"0800222",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TO",676,"00",,,,,,,,[[,"(\\d{2})(\\d{3})",
"$1-$2",["[1-6]|7[0-4]|8[05]"]],[,"(\\d{3})(\\d{4})","$1 $2",["7[5-9]|8[46-9]"]],[,"(\\d{4})(\\d{3})","$1 $2",["0"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TR:[,[,,"(?:[2-58]\\d\\d|900)\\d{7}|4\\d{6}",,,,,,,[7,10]],[,,"(?:2(?:[13][26]|[28][2468]|[45][268]|[67][246])|3(?:[13][28]|[24-6][2468]|[78][02468]|92)|4(?:[16][246]|[23578][2468]|4[26]))\\d{7}",,,,"2123456789",,,[10]],[,,"5(?:(?:0[15-7]|1[06]|24|[34]\\d|5[1-59]|9[46])\\d{2}|6161)\\d{5}",,,,"5012345678",,,[10]],
[,,"800\\d{7}",,,,"8001234567",,,[10]],[,,"(?:8[89]8|900)\\d{7}",,,,"9001234567",,,[10]],[,,,,,,,,,[-1]],[,,"592(?:21[12]|461)\\d{4}",,,,"5922121234",,,[10]],[,,,,,,,,,[-1]],"TR",90,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[23]|4(?:[0-35-9]|4[0-35-9])"],"(0$1)",,1],[,"(\\d{3})(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["5(?:[02-69]|1[06])"],"0$1",,1],[,"(\\d{3})(\\d{3})(\\d{4})","$1 $2 $3",["51|[89]"],"0$1",,1],[,"(444)(\\d{1})(\\d{3})","$1 $2 $3",["444"],,,1]],,[,,"512\\d{7}",
,,,"5123456789",,,[10]],,,[,,"444\\d{4}",,,,,,,[7]],[,,"444\\d{4}|850\\d{7}",,,,"4441444"],,,[,,,,,,,,,[-1]]],TT:[,[,,"(?:[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"868(?:2(?:01|[23]\\d)|6(?:0[7-9]|1[02-8]|2[1-9]|[3-69]\\d|7[0-79])|82[124])\\d{4}",,,,"8682211234",,,,[7]],[,,"868(?:2(?:6[6-9]|[789]\\d)|3(?:0[1-9]|1[02-9]|[2-9]\\d)|4[6-9]\\d|6(?:20|78|8\\d)|7(?:0[1-9]|1[02-9]|[2-9]\\d))\\d{4}",,,,"8682911234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],[,,"900[2-9]\\d{6}",,,,
"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"TT",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"868",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,"868619\\d{4}",,,,"8686191234",,,,[7]]],TV:[,[,,"(?:2|7\\d\\d|90)\\d{4}",,,,,,,[5,6,7]],[,,"2[02-9]\\d{3}",,,,"20123",,,[5]],[,,"(?:7[01]\\d|90)\\d{4}",,,,"901234",,,[6,7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"TV",688,"00",,,,,,,,,,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],
[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],TW:[,[,,"(?:[24589]|7\\d)\\d{8}|[2-8]\\d{7}|2\\d{6}",,,,,,,[7,8,9,10]],[,,"(?:2(?:[235-8]\\d{3}|4\\d{2,3})|3[2-9]\\d{2}|4(?:[239]\\d|[78])\\d{2}|5[2-8]\\d{2}|6[235-79]\\d{2}|7[1-9]\\d{2}|8(?:2(?:3\\d|66)|[7-9]\\d{2}))\\d{4}",,,,"221234567",,,[8,9]],[,,"9[0-8]\\d{7}",,,,"912345678",,,[9]],[,,"80[0-79]\\d{6}",,,,"800123456",,,[9]],[,,"20(?:2|[013-9]\\d{2})\\d{4}",,,,"203123456",,,[7,9]],[,,,,,,,,,[-1]],[,,"99\\d{7}",,,,"990123456",,,[9]],[,,"70\\d{8}",,,,"7012345678",
,,[10]],"TW",886,"0(?:0[25679]|19)","0","#",,"0",,,,[[,"(20)(\\d)(\\d{4})","$1 $2 $3",["202"],"0$1"],[,"([258]0)(\\d{3})(\\d{4})","$1 $2 $3",["20[013-9]|50[0-46-9]|80[0-79]"],"0$1"],[,"([2-8])(\\d{3,4})(\\d{4})","$1 $2 $3",["[25][2-8]|[346]|[78][1-9]"],"0$1"],[,"(9\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["9"],"0$1"],[,"(70)(\\d{4})(\\d{4})","$1 $2 $3",["70"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"50[0-46-9]\\d{6}",,,,"500123456",,,[9]],,,[,,,,,,,,,[-1]]],TZ:[,[,,"(?:[26-8]\\d|41|90)\\d{7}",,,
,,,,[9]],[,,"2[2-8]\\d{7}",,,,"222345678"],[,,"(?:6[2-9]|7[13-9])\\d{7}",,,,"621234567"],[,,"80[08]\\d{6}",,,,"800123456"],[,,"90\\d{7}",,,,"900123456"],[,,"8(?:40|6[01])\\d{6}",,,,"840123456"],[,,,,,,,,,[-1]],[,,"41\\d{7}",,,,"412345678"],"TZ",255,"00[056]","0",,,"0",,,,[[,"([24]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["[24]"],"0$1"],[,"([67]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["[67]"],"0$1"],[,"([89]\\d{2})(\\d{2})(\\d{4})","$1 $2 $3",["[89]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,"(?:8(?:[04]0|6[01])|90\\d)\\d{6}"],
[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],UA:[,[,,"[3-9]\\d{8}",,,,,,,[9],[5,6,7]],[,,"(?:3[1-8]|4[13-8]|5[1-7]|6[12459])\\d{7}",,,,"311234567",,,,[5,6,7]],[,,"(?:39|50|6[36-8]|7[1-3]|9[1-9])\\d{7}",,,,"391234567"],[,,"800\\d{6}",,,,"800123456"],[,,"900[2-49]\\d{5}",,,,"900212345"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"89[1-579]\\d{6}",,,,"891234567"],"UA",380,"00","0",,,"0",,"0~0",,[[,"([3-9]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["[38]9|4(?:[45][0-5]|87)|5(?:0|[67][37])|6[36-8]|7|9[1-9]","[38]9|4(?:[45][0-5]|87)|5(?:0|6(?:3[14-7]|7)|7[37])|6[36-8]|7|9[1-9]"],
"0$1"],[,"([3-689]\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["(?:3[1-8]|4[136-8])2|5(?:[12457]2|6[24])|6(?:[12][29]|[49]2|5[24])|8[0-8]|90","3(?:[1-46-8]2[013-9]|52)|4(?:[1378]2|62[013-9])|5(?:[12457]2|6[24])|6(?:[12][29]|[49]2|5[24])|8[0-8]|90"],"0$1"],[,"([3-6]\\d{3})(\\d{5})","$1 $2",["3(?:[1-46-8]|5[013-9])|4(?:[137][013-9]|[45][6-9]|6|8[4-6])|5(?:[1245][013-9]|3|6[0135689]|7[4-6])|6(?:[12][13-8]|[49][013-9]|5[0135-9])","3(?:[1-46-8](?:[013-9]|22)|5[013-9])|4(?:[137][013-9]|[45][6-9]|6(?:[013-9]|22)|8[4-6])|5(?:[1245][013-9]|3|6(?:[015689]|3[02389])|7[4-6])|6(?:[12][13-8]|[49][013-9]|5[0135-9])"],
"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],UG:[,[,,"(?:(?:[29]0|[347]\\d)\\d|800)\\d{6}",,,,,,,[9],[5,6,7]],[,,"20(?:[0147]\\d{3}|2(?:40|[5-9]\\d)\\d|3(?:0[0-4]|[2367]\\d)\\d|5[0-4]\\d{2}|6(?:00[0-2]|30[0-4]|[5-9]\\d{2})|8[0-2]\\d{2})\\d{3}|[34]\\d{8}",,,,"312345678",,,,[5,6,7]],[,,"7(?:[09][0-7]\\d|[1578]\\d{2}|2(?:[03]\\d|60)|30\\d|4[0-4]\\d)\\d{5}",,,,"712345678"],[,,"800[123]\\d{5}",,,,"800123456"],[,,"90[123]\\d{6}",,,,"901123456"],[,,,,,,,,,[-1]],[,,,,,,,,
,[-1]],[,,,,,,,,,[-1]],"UG",256,"00[057]","0",,,"0",,,,[[,"(\\d{3})(\\d{6})","$1 $2",["20[0-8]|4(?:6[45]|[7-9])|[7-9]","20(?:[013-8]|2[5-9])|4(?:6[45]|[7-9])|[7-9]"],"0$1"],[,"(\\d{2})(\\d{7})","$1 $2",["3|4(?:[1-5]|6[0-36-9])"],"0$1"],[,"(2024)(\\d{5})","$1 $2",["202","2024"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],US:[,[,,"[2-9]\\d{9}",,,,,,,[10],[7]],[,,"(?:2(?:0[1-35-9]|1[02-9]|2[03-589]|3[149]|4[08]|5[1-46]|6[0279]|7[0269]|8[13])|3(?:0[1-57-9]|1[02-9]|2[0135]|3[0-24679]|4[67]|5[12]|6[014]|8[056])|4(?:0[124-9]|1[02-579]|2[3-5]|3[0245]|4[0235]|58|6[39]|7[0589]|8[04])|5(?:0[1-57-9]|1[0235-8]|20|3[0149]|4[01]|5[19]|6[1-47]|7[013-5]|8[056])|6(?:0[1-35-9]|1[024-9]|2[03689]|3[016]|4[16]|5[017]|6[0-279]|78|8[012])|7(?:0[1-46-8]|1[2-9]|2[04-7]|3[1247]|4[037]|5[47]|6[02359]|7[02-59]|8[156])|8(?:0[1-68]|1[02-8]|2[08]|3[0-258]|4[3578]|5[046-9]|6[02-5]|7[028])|9(?:0[1346-9]|1[02-9]|2[0589]|3[014678]|4[0179]|5[12469]|7[0-3589]|8[04-69]))[2-9]\\d{6}",
,,,"2015550123",,,,[7]],[,,"(?:2(?:0[1-35-9]|1[02-9]|2[03-589]|3[149]|4[08]|5[1-46]|6[0279]|7[0269]|8[13])|3(?:0[1-57-9]|1[02-9]|2[0135]|3[0-24679]|4[67]|5[12]|6[014]|8[056])|4(?:0[124-9]|1[02-579]|2[3-5]|3[0245]|4[0235]|58|6[39]|7[0589]|8[04])|5(?:0[1-57-9]|1[0235-8]|20|3[0149]|4[01]|5[19]|6[1-47]|7[013-5]|8[056])|6(?:0[1-35-9]|1[024-9]|2[03689]|3[016]|4[16]|5[017]|6[0-279]|78|8[012])|7(?:0[1-46-8]|1[2-9]|2[04-7]|3[1247]|4[037]|5[47]|6[02359]|7[02-59]|8[156])|8(?:0[1-68]|1[02-8]|2[08]|3[0-258]|4[3578]|5[046-9]|6[02-5]|7[028])|9(?:0[1346-9]|1[02-9]|2[0589]|3[014678]|4[0179]|5[12469]|7[0-3589]|8[04-69]))[2-9]\\d{6}",
,,,"2015550123",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],[,,"900[2-9]\\d{6}",,,,"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"US",1,"011","1",,,"1",,,1,[[,"(\\d{3})(\\d{4})","$1-$2",,,,1],[,"(\\d{3})(\\d{3})(\\d{4})","($1) $2-$3",,,,1]],[[,"(\\d{3})(\\d{3})(\\d{4})","$1-$2-$3"]],[,,,,,,,,,[-1]],1,,[,,,,,,,,,[-1]],[,,"710[2-9]\\d{6}",,,,"7102123456"],,,[,,,,,,,,,[-1]]],UY:[,[,,"(?:[249]\\d\\d|80)\\d{5}|9\\d{6}",
,,,,,,[7,8]],[,,"2\\d{7}|4[2-7]\\d{6}",,,,"21231234",,,[8],[7]],[,,"9[1-9]\\d{6}",,,,"94231234",,,[8]],[,,"80[05]\\d{4}",,,,"8001234",,,[7]],[,,"90[0-8]\\d{4}",,,,"9001234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"UY",598,"0(?:1[3-9]\\d|0)","0"," int. ",,"0",,"00",,[[,"(\\d{4})(\\d{4})","$1 $2",["[24]"]],[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["9[1-9]"],"0$1"],[,"(\\d{3})(\\d{4})","$1 $2",["[89]0"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],UZ:[,
[,,"[679]\\d{8}",,,,,,,[9],[7]],[,,"(?:6(?:1(?:22|3[124]|4[1-4]|5[123578]|64)|2(?:22|3[0-57-9]|41)|5(?:22|3[3-7]|5[024-8])|6\\d{2}|7(?:[23]\\d|7[69])|9(?:22|4[1-8]|6[135]))|7(?:0(?:5[4-9]|6[0146]|7[12456]|9[135-8])|1[12]\\d|2(?:22|3[1345789]|4[123579]|5[14])|3(?:2\\d|3[1578]|4[1-35-7]|5[1-57]|61)|4(?:2\\d|3[1-579]|7[1-79])|5(?:22|5[1-9]|6[1457])|6(?:22|3[12457]|4[13-8])|9(?:22|5[1-9])))\\d{5}",,,,"669050123",,,,[7]],[,,"6(?:1(?:2(?:98|2[01])|35[0-4]|50\\d|61[23]|7(?:[01][017]|4\\d|55|9[5-9]))|2(?:11\\d|2(?:[12]1|9[01379])|5(?:[126]\\d|3[0-4])|7\\d{2})|5(?:19[01]|2(?:27|9[26])|30\\d|59\\d|7\\d{2})|6(?:2(?:1[5-9]|2[0367]|38|41|52|60)|3[79]\\d|4(?:56|83)|7(?:[07]\\d|1[017]|3[07]|4[047]|5[057]|67|8[0178]|9[79])|9[0-3]\\d)|7(?:2(?:24|3[237]|4[5-9]|7[15-8])|5(?:7[12]|8[0589])|7(?:0\\d|[39][07])|9(?:0\\d|7[079]))|9(?:2(?:1[1267]|5\\d|3[01]|7[0-4])|5[67]\\d|6(?:2[0-26]|8\\d)|7\\d{2}))\\d{4}|7(?:0\\d{3}|1(?:13[01]|6(?:0[47]|1[67]|66)|71[3-69]|98\\d)|2(?:2(?:2[79]|95)|3(?:2[5-9]|6[0-6])|57\\d|7(?:0\\d|1[17]|2[27]|3[37]|44|5[057]|66|88))|3(?:2(?:1[0-6]|21|3[469]|7[159])|33\\d|5(?:0[0-4]|5[579]|9\\d)|7(?:[0-3579]\\d|4[0467]|6[67]|8[078])|9[4-6]\\d)|4(?:2(?:29|5[0257]|6[0-7]|7[1-57])|5(?:1[0-4]|8\\d|9[5-9])|7(?:0\\d|1[024589]|2[0127]|3[0137]|[46][07]|5[01]|7[5-9]|9[079])|9(?:7[015-9]|[89]\\d))|5(?:112|2(?:0\\d|2[29]|[49]4)|3[1568]\\d|52[6-9]|7(?:0[01578]|1[017]|[23]7|4[047]|[5-7]\\d|8[78]|9[079]))|6(?:2(?:2[1245]|4[2-4])|39\\d|41[179]|5(?:[349]\\d|5[0-2])|7(?:0[017]|[13]\\d|22|44|55|67|88))|9(?:22[128]|3(?:2[0-4]|7\\d)|57[05629]|7(?:2[05-9]|3[37]|4\\d|60|7[2579]|87|9[07])))\\d{4}|9[0-57-9]\\d{7}",
,,,"912345678"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"UZ",998,"810","8",,,"8",,"8~10",,[[,"([679]\\d)(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[679]"],"8 $1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],VA:[,[,,"0\\d{6}(?:\\d{4})?|3[0-8]\\d{9}|(?:[0138]\\d?|55)\\d{8}|[08]\\d{5}(?:\\d{2})?",,,,,,,[6,7,8,9,10,11]],[,,"06698\\d{1,6}",,,,"0669812345"],[,,"3(?:1\\d{8}|[245-9]\\d{7,8}|3\\d{7,9})",,,,"3123456789",,,[9,10,11]],[,,"80(?:0\\d{6}|3\\d{3})",
,,,"800123456",,,[6,9]],[,,"0878\\d{5}|1(?:44|6[346])\\d{6}|89(?:2\\d{3}|4(?:[0-4]\\d{2}|[5-9]\\d{4})|5(?:[0-4]\\d{2}|[5-9]\\d{6})|9\\d{6})",,,,"899123456",,,[6,8,9,10]],[,,"84(?:[08]\\d{6}|[17]\\d{3})",,,,"848123456",,,[6,9]],[,,"1(?:78\\d|99)\\d{6}",,,,"1781234567",,,[9,10]],[,,"55\\d{8}",,,,"5512345678",,,[10]],"VA",39,"00",,,,,,,,,,[,,,,,,,,,[-1]],,,[,,"848\\d{6}",,,,,,,[9]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],VC:[,[,,"(?:[58]\\d\\d|784|900)\\d{7}",,,,,,,[10],[7]],[,,"784(?:266|3(?:6[6-9]|7\\d|8[0-24-6])|4(?:38|5[0-36-8]|8[0-8])|5(?:55|7[0-2]|93)|638|784)\\d{4}",
,,,"7842661234",,,,[7]],[,,"784(?:4(?:3[0-5]|5[45]|89|9[0-8])|5(?:2[6-9]|3[0-4]))\\d{4}",,,,"7844301234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],[,,"900[2-9]\\d{6}",,,,"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"VC",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"784",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],VE:[,[,,"(?:(?:[24]\\d|50)\\d|[89]00)\\d{7}",,,,,,,[10],[7]],[,,"(?:2(?:12|3[457-9]|[58][1-9]|[467]\\d|9[1-6])|50[01])\\d{7}",
,,,"2121234567",,,,[7]],[,,"4(?:1[24-8]|2[46])\\d{7}",,,,"4121234567"],[,,"800\\d{7}",,,,"8001234567"],[,,"900\\d{7}",,,,"9001234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"VE",58,"00","0",,,"0",,,,[[,"(\\d{3})(\\d{7})","$1-$2",,"0$1","$CC $1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],VG:[,[,,"(?:284|[58]\\d\\d|900)\\d{7}",,,,,,,[10],[7]],[,,"284(?:(?:229|4(?:22|9[45])|774|8(?:52|6[459]))\\d{4}|496[0-5]\\d{3})",,,,"2842291234",,,,[7]],[,,"284(?:(?:3(?:0[0-3]|4[0-7]|68|9[34])|4(?:4[0-6]|68|99)|54[0-57])\\d{4}|496[6-9]\\d{3})",
,,,"2843001234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],[,,"900[2-9]\\d{6}",,,,"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"VG",1,"011","1",,,"1",,,,,,[,,,,,,,,,[-1]],,"284",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],VI:[,[,,"(?:(?:34|90)0|[58]\\d\\d)\\d{7}",,,,,,,[10],[7]],[,,"340(?:2(?:01|2[0678]|44|77)|3(?:32|44)|4(?:22|7[34])|5(?:1[34]|55)|6(?:26|4[23]|77|9[023])|7(?:1[2-57-9]|27|7\\d)|884|998)\\d{4}",
,,,"3406421234",,,,[7]],[,,"340(?:2(?:01|2[0678]|44|77)|3(?:32|44)|4(?:22|7[34])|5(?:1[34]|55)|6(?:26|4[23]|77|9[023])|7(?:1[2-57-9]|27|7\\d)|884|998)\\d{4}",,,,"3406421234",,,,[7]],[,,"8(?:00|33|44|55|66|77|88)[2-9]\\d{6}",,,,"8002345678"],[,,"900[2-9]\\d{6}",,,,"9002345678"],[,,,,,,,,,[-1]],[,,"5(?:00|2[12]|33|44|66|77|88)[2-9]\\d{6}",,,,"5002345678"],[,,,,,,,,,[-1]],"VI",1,"011","1",,,"1",,,1,,,[,,,,,,,,,[-1]],,"340",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],VN:[,[,,"[12]\\d{9}|(?:[19]\\d|8[0-35-9])\\d{7}|1\\d{7}|69\\d{5,6}|(?:[18]\\d\\d|799)\\d{4}",
,,,,,,[7,8,9,10]],[,,"2(?:0[3-9]|1[0-689]|2[0-25-9]|3[2-9]|4[2-8]|5[124-9]|6[0-39]|7[0-7]|8[2-7]|9[0-4679])\\d{7}",,,,"2101234567",,,[9,10]],[,,"(?:1(?:2\\d|6[2-9]|8[68]|99)\\d|8(?:6[689]|8\\d|9[89])|9(?:[0-8]\\d|9[013-9]))\\d{6}",,,,"912345678",,,[9,10]],[,,"1800\\d{4,6}",,,,"1800123456",,,[8,9,10]],[,,"1900\\d{4,6}",,,,"1900123456",,,[8,9,10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"992\\d{6}",,,,"992012345",,,[9]],"VN",84,"00","0",,,"0",,,,[[,"([17]99)(\\d{4})","$1 $2",["[17]99"],"0$1",,1],[,"(\\d{2})(\\d{4})(\\d{4})",
"$1 $2 $3",["2[48]"],"0$1",,1],[,"(80)(\\d{5})","$1 $2",["80"],"0$1",,1],[,"(69\\d)(\\d{4,5})","$1 $2",["69"],"0$1",,1],[,"(\\d{3})(\\d{4})(\\d{3})","$1 $2 $3",["2[0-35-79]"],"0$1",,1],[,"([89]\\d)(\\d{3})(\\d{2})(\\d{2})","$1 $2 $3 $4",["8(?:8|9[89])|9"],"0$1",,1],[,"(1[2689]\\d)(\\d{3})(\\d{4})","$1 $2 $3",["1(?:[26]|8[68]|99)"],"0$1",,1],[,"(86[689])(\\d{3})(\\d{3})","$1 $2 $3",["86[689]"],"0$1",,1],[,"(1[89]00)(\\d{4,6})","$1 $2",["1[89]0","1[89]00"],"$1",,1]],,[,,,,,,,,,[-1]],,,[,,"[17]99\\d{4}|69\\d{5,6}",
,,,,,,[7,8]],[,,"[17]99\\d{4}|69\\d{5,6}|80\\d{5}",,,,"1992000",,,[7,8]],,,[,,,,,,,,,[-1]]],VU:[,[,,"(?:(?:[23]|[57]\\d\\d|900)\\d|[48]8)\\d{3}",,,,,,,[5,7]],[,,"(?:2[02-9]\\d|3(?:[5-7]\\d|8[0-8])|48[4-9]|88\\d)\\d{2}",,,,"22123",,,[5]],[,,"(?:5(?:7[2-5]|[0-689]\\d)|7[013-7]\\d)\\d{4}",,,,"5912345",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"VU",678,"00",,,,,,,,[[,"(\\d{3})(\\d{4})","$1 $2",["[579]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"3[03]\\d{3}|900\\d{4}",
,,,"30123"],,,[,,,,,,,,,[-1]]],WF:[,[,,"(?:[45]0|68|72|8\\d)\\d{4}",,,,,,,[6]],[,,"(?:50|68|72)\\d{4}",,,,"501234"],[,,"(?:50|68|72|8[23])\\d{4}",,,,"501234"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"WF",681,"00",,,,,,,,[[,"(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,"[48]0\\d{4}",,,,"401234"]],WS:[,[,,"(?:[2-6]|8\\d(?:\\d{4})?)\\d{4}|[78]\\d{6}",,,,,,,[5,6,7,10]],[,,"(?:[2-5]\\d|6[1-9])\\d{3}",,,,"22123",,
,[5]],[,,"(?:7[25-7]|8(?:[3-7]|9\\d{3}))\\d{5}",,,,"7212345",,,[7,10]],[,,"800\\d{3}",,,,"800123",,,[6]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"WS",685,"0",,,,,,,,[[,"(8\\d{2})(\\d{3,7})","$1 $2",["8"]],[,"(7\\d)(\\d{5})","$1 $2",["7"]],[,"(\\d{5})","$1",["[2-6]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],XK:[,[,,"(?:[23]\\d{2,3}|4\\d\\d|[89]00)\\d{5}",,,,,,,[8,9]],[,,"(?:2[89]0?|3(?:8|90?))\\d{6}",,,,"28012345"],[,,"4[3-79]\\d{6}",,,,"43201234",
,,[8]],[,,"800\\d{5}",,,,"80001234",,,[8]],[,,"900\\d{5}",,,,"90001234",,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"XK",383,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["[23][89]|4[3-79]"],"0$1"],[,"(\\d{3})(\\d{5})","$1 $2",["[89]00"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",,"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],YE:[,[,,"(?:1|7\\d)\\d{7}|[1-7]\\d{6}",,,,,,,[7,8,9],[6]],[,,"(?:1(?:7\\d|[2-68])|2[2-68]|3[2358]|4[2-58]|5[2-6]|6[3-58]|7[24-68])\\d{5}",
,,,"1234567",,,[7,8],[6]],[,,"7[0137]\\d{7}",,,,"712345678",,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"YE",967,"00","0",,,"0",,,,[[,"([1-7])(\\d{3})(\\d{3,4})","$1 $2 $3",["[1-6]|7[24-68]"],"0$1"],[,"(7\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["7[0137]"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],YT:[,[,,"(?:(?:26|63)9|80\\d)\\d{6}",,,,,,,[9]],[,,"269(?:0[67]|5[01]|6\\d|[78]0)\\d{4}",,,,"269601234"],[,,"639(?:0[0-79]|1[019]|[267]\\d|3[09]|[45]0|9[04-79])\\d{4}",
,,,"639012345"],[,,"80\\d{7}",,,,"801234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"YT",262,"00","0",,,"0",,,,,,[,,,,,,,,,[-1]],,"269|63",[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],ZA:[,[,,"[1-9]\\d{8}|8\\d{4,7}",,,,,,,[5,6,7,8,9]],[,,"(?:1[0-8]|2[1-378]|3[1-69]|4\\d|5[1346-8])\\d{7}",,,,"101234567",,,[9]],[,,"(?:6\\d|7[0-46-9])\\d{7}|8(?:[1-4]\\d{1,5}|5\\d{5})\\d{2}",,,,"711234567"],[,,"80\\d{7}",,,,"801234567",,,[9]],[,,"86[2-9]\\d{6}|9[0-2]\\d{7}",,,,"862345678",
,,[9]],[,,"860\\d{6}",,,,"860123456",,,[9]],[,,,,,,,,,[-1]],[,,"87\\d{7}",,,,"871234567",,,[9]],"ZA",27,"00","0",,,"0",,,,[[,"(860)(\\d{3})(\\d{3})","$1 $2 $3",["860"],"0$1"],[,"(\\d{2})(\\d{3,4})","$1 $2",["8[1-4]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{2,3})","$1 $2 $3",["8[1-4]"],"0$1"],[,"(\\d{2})(\\d{3})(\\d{4})","$1 $2 $3",["[1-79]|8(?:[0-57]|6[1-9])"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,"861\\d{6}",,,,"861123456",,,[9]],,,[,,,,,,,,,[-1]]],ZM:[,[,,"(?:(?:21|9\\d)\\d|800)\\d{6}",,,,,,,[9],
[6,7]],[,,"21[1-8]\\d{6}",,,,"211234567",,,,[6,7]],[,,"9[4-9]\\d{7}",,,,"955123456"],[,,"800\\d{6}",,,,"800123456"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"ZM",260,"00","0",,,"0",,,,[[,"(\\d{2})(\\d{4})","$1 $2",,"$1"],[,"([1-8])(\\d{2})(\\d{4})","$1 $2 $3",["[1-8]"],"$1"],[,"([29]\\d)(\\d{7})","$1 $2",["[29]"],"0$1"],[,"(800)(\\d{3})(\\d{3})","$1 $2 $3",["800"],"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],ZW:[,[,,"2(?:[0-57-9]\\d{6,8}|6[0-24-9]\\d{7})|(?:[38]\\d|7)\\d{8}|[3-6]\\d{7}|[1-689]\\d{6}|[1-3569]\\d{5}|[1356]\\d{4}",
,,,,,,[5,6,7,8,9,10],[3,4]],[,,"(?:2(?:0(?:4\\d|5\\d{2})|2[278]\\d|48\\d|7(?:[1-7]\\d|[089]\\d{2})|8(?:[2-57-9]|[146]\\d{2})|98)|3(?:08|17|3[78]|7(?:[19]|[56]\\d)|8[37]|98)|5[15][78]|6(?:28\\d{2}|37|6[78]|75\\d|98|8(?:7\\d|8)))\\d{3}|(?:2(?:1[39]|2[0157]|31|[56][14]|7[35]|84)|329)\\d{7}|(?:1(?:3\\d{2}|[4-8]|9\\d)|2(?:0\\d{2}|12|292|[569]\\d)|3(?:[26]|[013459]\\d)|5(?:0|1[2-4]|26|[37]2|5\\d{2}|[689]\\d)|6(?:[39]|[01246]\\d|[78]\\d{2}))\\d{3}|(?:29\\d|39|54)\\d{6}|(?:(?:25|54)83\\d|2582\\d{2}|65[2-8])\\d{2}|(?:4\\d{6,7}|9[2-9]\\d{4,5})",
,,,"1312345",,,,[3,4]],[,,"(?:7(?:1\\d|3[2-9]|7[1-9]|8[2-5])|8644)\\d{6}",,,,"712345678",,,[9,10]],[,,"80(?:[01]\\d|20|8[0-8])\\d{3}",,,,"8001234",,,[7]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"86(?:1[12]|30|55|77|8[368])\\d{6}",,,,"8686123456",,,[10]],"ZW",263,"00","0",,,"0",,,,[[,"([49])(\\d{3})(\\d{2,4})","$1 $2 $3",["4|9[2-9]"],"0$1"],[,"(7\\d)(\\d{3})(\\d{4})","$1 $2 $3",["7"],"0$1"],[,"(86\\d{2})(\\d{3})(\\d{3})","$1 $2 $3",["86[24]"],"0$1"],[,"([2356]\\d{2})(\\d{3,5})","$1 $2",
["2(?:0[45]|2[278]|[49]8|[78])|3(?:[09]8|17|3[78]|7[1569]|8[37])|5[15][78]|6(?:[29]8|37|[68][78]|75)"],"0$1"],[,"(\\d{3})(\\d{3})(\\d{3,4})","$1 $2 $3",["2(?:1[39]|2[0157]|31|[56][14]|7[35]|84)|329"],"0$1"],[,"([1-356]\\d)(\\d{3,5})","$1 $2",["1[3-9]|2[02569]|3[0-69]|5[05689]|6"],"0$1"],[,"([235]\\d)(\\d{3})(\\d{3,4})","$1 $2 $3",["[23]9|54"],"0$1"],[,"([25]\\d{3})(\\d{3,5})","$1 $2",["(?:25|54)8","258[23]|5483"],"0$1"],[,"(8\\d{3})(\\d{6})","$1 $2",["86"],"0$1"],[,"(80\\d)(\\d{4})","$1 $2",["80"],
"0$1"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],800:[,[,,"\\d{8}",,,,,,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"\\d{8}",,,,"12345678"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"001",800,,,,,,,,1,[[,"(\\d{4})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],808:[,[,,"\\d{8}",,,,,,,[8]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"\\d{8}",,,,"12345678"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],
"001",808,,,,,,,,1,[[,"(\\d{4})(\\d{4})","$1 $2"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],870:[,[,,"[35-7]\\d{8}",,,,,,,[9]],[,,,,,,,,,[-1]],[,,"(?:[356]\\d|7[6-8])\\d{7}",,,,"301234567"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"001",870,,,,,,,,,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],878:[,[,,"10\\d{10}",,,,,,,[12]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,
,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"10\\d{10}",,,,"101234567890"],"001",878,,,,,,,,1,[[,"(\\d{2})(\\d{5})(\\d{5})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],881:[,[,,"[67]\\d{8}",,,,,,,[9]],[,,,,,,,,,[-1]],[,,"[67]\\d{8}",,,,"612345678"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"001",881,,,,,,,,,[[,"(\\d)(\\d{3})(\\d{5})","$1 $2 $3",["[67]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],
,,[,,,,,,,,,[-1]]],882:[,[,,"[13]\\d{6}(?:\\d{2,5})?|1\\d{7}",,,,,,,[7,8,9,10,11,12]],[,,,,,,,,,[-1]],[,,"3(?:2\\d{3}|37\\d{2}|4(?:2|7\\d{3}))\\d{4}",,,,"3421234",,,[7,9,10]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"1(?:3(?:0[0347]|[13][0139]|2[035]|4[013568]|6[0459]|7[06]|8[15678]|9[0689])\\d{4}|6\\d{5,10})|3(?:45|9\\d{3})\\d{7}",,,,"390123456789"],"001",882,,,,,,,,,[[,"(\\d{2})(\\d{4})(\\d{3})","$1 $2 $3",["3[23]"]],[,"(\\d{2})(\\d{5})","$1 $2",["16|342"]],[,"(\\d{2})(\\d{4})(\\d{4})",
"$1 $2 $3",["34[57]"]],[,"(\\d{3})(\\d{4})(\\d{4})","$1 $2 $3",["348"]],[,"(\\d{2})(\\d{2})(\\d{4})","$1 $2 $3",["1"]],[,"(\\d{2})(\\d{3,4})(\\d{4})","$1 $2 $3",["16"]],[,"(\\d{2})(\\d{4,5})(\\d{5})","$1 $2 $3",["16|39"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,"348[57]\\d{7}",,,,"34851234567",,,[11]]],883:[,[,,"51\\d{7}(?:\\d{3})?",,,,,,,[9,12]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"51(?:00\\d{5}(?:\\d{3})?|[13]0\\d{8})",
,,,"510012345"],"001",883,,,,,,,,1,[[,"(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3",["510"]],[,"(\\d{3})(\\d{3})(\\d{3})(\\d{3})","$1 $2 $3 $4",["510"]],[,"(\\d{4})(\\d{4})(\\d{4})","$1 $2 $3",["51[13]"]]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]],888:[,[,,"\\d{11}",,,,,,,[11]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"001",888,,,,,,,,1,[[,"(\\d{3})(\\d{3})(\\d{5})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,
,[-1]],[,,"\\d{11}",,,,"12345678901"],,,[,,,,,,,,,[-1]]],979:[,[,,"\\d{9}",,,,,,,[9]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,"\\d{9}",,,,"123456789"],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],"001",979,,,,,,,,1,[[,"(\\d)(\\d{4})(\\d{4})","$1 $2 $3"]],,[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]],[,,,,,,,,,[-1]],,,[,,,,,,,,,[-1]]]};/*

 Copyright (C) 2010 The Libphonenumber Authors.

 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
*/
function M(){this.a={}}M.c=void 0;M.a=function(){return M.c?M.c:M.c=new M};
var xa={0:"0",1:"1",2:"2",3:"3",4:"4",5:"5",6:"6",7:"7",8:"8",9:"9","\uff10":"0","\uff11":"1","\uff12":"2","\uff13":"3","\uff14":"4","\uff15":"5","\uff16":"6","\uff17":"7","\uff18":"8","\uff19":"9","\u0660":"0","\u0661":"1","\u0662":"2","\u0663":"3","\u0664":"4","\u0665":"5","\u0666":"6","\u0667":"7","\u0668":"8","\u0669":"9","\u06f0":"0","\u06f1":"1","\u06f2":"2","\u06f3":"3","\u06f4":"4","\u06f5":"5","\u06f6":"6","\u06f7":"7","\u06f8":"8","\u06f9":"9"},ya={0:"0",1:"1",2:"2",3:"3",4:"4",5:"5",6:"6",
7:"7",8:"8",9:"9","\uff10":"0","\uff11":"1","\uff12":"2","\uff13":"3","\uff14":"4","\uff15":"5","\uff16":"6","\uff17":"7","\uff18":"8","\uff19":"9","\u0660":"0","\u0661":"1","\u0662":"2","\u0663":"3","\u0664":"4","\u0665":"5","\u0666":"6","\u0667":"7","\u0668":"8","\u0669":"9","\u06f0":"0","\u06f1":"1","\u06f2":"2","\u06f3":"3","\u06f4":"4","\u06f5":"5","\u06f6":"6","\u06f7":"7","\u06f8":"8","\u06f9":"9",A:"2",B:"2",C:"2",D:"3",E:"3",F:"3",G:"4",H:"4",I:"4",J:"5",K:"5",L:"5",M:"6",N:"6",O:"6",P:"7",
Q:"7",R:"7",S:"7",T:"8",U:"8",V:"8",W:"9",X:"9",Y:"9",Z:"9"},N=/^[+\uff0b]+/,za=/([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9])/,Aa=/[+\uff0b0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]/,Ba=/[\\\/] *x/,Ca=/[^0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9A-Za-z#]+$/,Da=/(?:.*?[A-Za-z]){3}.*/,Ea=/(?:;ext=([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})|[ \u00a0\t,]*(?:e?xt(?:ensi(?:o\u0301?|\u00f3))?n?|\uff45?\uff58\uff54\uff4e?|[;,x\uff58#\uff03~\uff5e]|int|anexo|\uff49\uff4e\uff54)[:\.\uff0e]?[ \u00a0\t,-]*([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})#?|[- ]+([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,5})#)$/i,
Fa=/^[0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{2}$|^[+\uff0b]*(?:[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e*]*[0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]){3,}[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e*A-Za-z0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]*(?:;ext=([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})|[ \u00a0\t,]*(?:e?xt(?:ensi(?:o\u0301?|\u00f3))?n?|\uff45?\uff58\uff54\uff4e?|[;,x\uff58#\uff03~\uff5e]|int|anexo|\uff49\uff4e\uff54)[:\.\uff0e]?[ \u00a0\t,-]*([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,7})#?|[- ]+([0-9\uff10-\uff19\u0660-\u0669\u06f0-\u06f9]{1,5})#)?$/i,
Ga=/(\$\d)/;function Ha(a){var b=a.search(Aa);0<=b?(a=a.substring(b),a=a.replace(Ca,""),b=a.search(Ba),0<=b&&(a=a.substring(0,b))):a="";return a}function Ia(a){return 2>a.length?!1:O(Fa,a)}function Ja(a){return O(Da,a)?P(a,ya):P(a,xa)}function Ka(a){var b=Ja(a.toString());a.c="";a.a(b)}function La(a){return null!=a&&(1!=A(a,9)||-1!=w(a,9)[0])}function P(a,b){for(var c=new F,d,e=a.length,f=0;f<e;++f)d=a.charAt(f),d=b[d.toUpperCase()],null!=d&&c.a(d);return c.toString()}
function Q(a){return null!=a&&isNaN(a)&&a.toUpperCase()in wa}
function Ma(a,b,c){if(0==t(b,2)&&null!=b.a[5]){var d=y(b,5);if(0<d.length)return d}d=y(b,1);var e=R(b);if(0==c)return Na(d,0,e,"");if(!(d in K))return e;a=S(a,d,T(d));b=null!=b.a[3]&&0!=t(b,3).length?3==c?";ext="+t(b,3):null!=a.a[13]?t(a,13)+y(b,3):" ext. "+y(b,3):"";a:{a=0==w(a,20).length||2==c?w(a,19):w(a,20);for(var f,g=a.length,h=0;h<g;++h){f=a[h];var l=A(f,3);if(0==l||0==e.search(t(f,3,l-1)))if(l=new RegExp(t(f,1)),O(l,e)){a=f;break a}}a=null}null!=a&&(g=a,a=y(g,2),f=new RegExp(t(g,1)),y(g,5),
g=y(g,4),e=2==c&&null!=g&&0<g.length?e.replace(f,a.replace(Ga,g)):e.replace(f,a),3==c&&(e=e.replace(/^[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e]+/,""),e=e.replace(/[-x\u2010-\u2015\u2212\u30fc\uff0d-\uff0f \u00a0\u00ad\u200b\u2060\u3000()\uff08\uff09\uff3b\uff3d.\[\]/~\u2053\u223c\uff5e]+/g,"-")));return Na(d,c,e,b)}function S(a,b,c){return"001"==c?U(a,""+b):U(a,c)}
function R(a){if(null==a.a[2])return"";var b=""+t(a,2);return null!=a.a[4]&&t(a,4)&&0<y(a,8)?Array(y(a,8)+1).join("0")+b:b}function Na(a,b,c,d){switch(b){case 0:return"+"+a+c+d;case 1:return"+"+a+" "+c+d;case 3:return"tel:+"+a+"-"+c+d;default:return c+d}}
function V(a,b){switch(b){case 4:return t(a,5);case 3:return t(a,4);case 1:return t(a,3);case 0:case 2:return t(a,2);case 5:return t(a,6);case 6:return t(a,8);case 7:return t(a,7);case 8:return t(a,21);case 9:return t(a,25);case 10:return t(a,28);default:return t(a,1)}}function W(a,b){return X(a,t(b,1))?X(a,t(b,5))?4:X(a,t(b,4))?3:X(a,t(b,6))?5:X(a,t(b,8))?6:X(a,t(b,7))?7:X(a,t(b,21))?8:X(a,t(b,25))?9:X(a,t(b,28))?10:X(a,t(b,2))?t(b,18)||X(a,t(b,3))?2:0:!t(b,18)&&X(a,t(b,3))?1:-1:-1}
function U(a,b){if(null==b)return null;b=b.toUpperCase();var c=a.a[b];if(null==c){c=wa[b];if(null==c)return null;c=(new E).a(I.f(),c);a.a[b]=c}return c}function X(a,b){var c=a.length;return 0<A(b,9)&&-1==p(w(b,9),c)?!1:O(y(b,2),a)}
function Oa(a,b){if(null==b)return null;var c=y(b,1);c=K[c];if(null==c)a=null;else if(1==c.length)a=c[0];else a:{b=R(b);for(var d,e=c.length,f=0;f<e;f++){d=c[f];var g=U(a,d);if(null!=g.a[23]){if(0==b.search(t(g,23))){a=d;break a}}else if(-1!=W(b,g)){a=d;break a}}a=null}return a}function T(a){a=K[a];return null==a?"ZZ":a[0]}
function Y(a,b,c,d){var e=V(c,d),f=0==A(e,9)?w(t(c,1),9):w(e,9);e=w(e,10);if(2==d)if(La(V(c,0)))a=V(c,1),La(a)&&(f=f.concat(0==A(a,9)?w(t(c,1),9):w(a,9)),q(f),0==e.length?e=w(a,10):(e=e.concat(w(a,10)),q(e)));else return Y(a,b,c,1);if(-1==f[0])return 5;b=b.length;if(-1<p(e,b))return 4;c=f[0];return c==b?0:c>b?2:f[f.length-1]<b?3:-1<p(f,b,1)?0:5}function Pa(a,b){var c=R(b);b=y(b,1);if(!(b in K))return 1;b=S(a,b,T(b));return Y(a,c,b,-1)}
function Qa(a,b,c,d,e,f){if(0==b.length)return 0;b=new F(b);var g;null!=c&&(g=t(c,11));null==g&&(g="NonMatch");var h=b.toString();if(0==h.length)g=20;else if(N.test(h))h=h.replace(N,""),b.c="",b.a(Ja(h)),g=1;else{h=new RegExp(g);Ka(b);g=b.toString();if(0==g.search(h)){h=g.match(h)[0].length;var l=g.substring(h).match(za);l&&null!=l[1]&&0<l[1].length&&"0"==P(l[1],xa)?g=!1:(b.c="",b.a(g.substring(h)),g=!0)}else g=!1;g=g?5:20}e&&u(f,6,g);if(20!=g){if(2>=b.c.length)throw Error("Phone number too short after IDD");
a:{a=b.toString();if(0!=a.length&&"0"!=a.charAt(0))for(e=a.length,b=1;3>=b&&b<=e;++b)if(c=parseInt(a.substring(0,b),10),c in K){d.a(a.substring(b));d=c;break a}d=0}if(0!=d)return u(f,1,d),d;throw Error("Invalid country calling code");}if(null!=c&&(g=y(c,10),h=""+g,l=b.toString(),0==l.lastIndexOf(h,0)&&(h=new F(l.substring(h.length)),l=t(c,1),l=new RegExp(y(l,2)),Ra(h,c,null),h=h.toString(),!O(l,b.toString())&&O(l,h)||3==Y(a,b.toString(),c,-1))))return d.a(h),e&&u(f,6,10),u(f,1,g),g;u(f,1,0);return 0}
function Ra(a,b,c){var d=a.toString(),e=d.length,f=t(b,15);if(0!=e&&null!=f&&0!=f.length){var g=new RegExp("^(?:"+f+")");if(e=g.exec(d)){f=new RegExp(y(t(b,1),2));var h=O(f,d),l=e.length-1;b=t(b,16);if(null==b||0==b.length||null==e[l]||0==e[l].length){if(!h||O(f,d.substring(e[0].length)))null!=c&&0<l&&null!=e[l]&&c.a(e[1]),a.set(d.substring(e[0].length))}else if(d=d.replace(g,b),!h||O(f,d))null!=c&&0<l&&c.a(e[1]),a.set(d)}}}
function Z(a,b,c){if(!Q(c)&&0<b.length&&"+"!=b.charAt(0))throw Error("Invalid country calling code");return Sa(a,b,c,!0)}
function Sa(a,b,c,d){if(null==b)throw Error("The string supplied did not seem to be a phone number");if(250<b.length)throw Error("The string supplied is too long to be a phone number");var e=new F,f=b.indexOf(";phone-context=");if(0<=f){var g=f+15;if("+"==b.charAt(g)){var h=b.indexOf(";",g);0<h?e.a(b.substring(g,h)):e.a(b.substring(g))}g=b.indexOf("tel:");e.a(b.substring(0<=g?g+4:0,f))}else e.a(Ha(b));f=e.toString();g=f.indexOf(";isub=");0<g&&(e.c="",e.a(f.substring(0,g)));if(!Ia(e.toString()))throw Error("The string supplied did not seem to be a phone number");
f=e.toString();if(!(Q(c)||null!=f&&0<f.length&&N.test(f)))throw Error("Invalid country calling code");f=new J;d&&u(f,5,b);a:{b=e.toString();g=b.search(Ea);if(0<=g&&Ia(b.substring(0,g))){h=b.match(Ea);for(var l=h.length,z=1;z<l;++z)if(null!=h[z]&&0<h[z].length){e.c="";e.a(b.substring(0,g));b=h[z];break a}}b=""}0<b.length&&u(f,3,b);g=U(a,c);b=new F;h=0;l=e.toString();try{h=Qa(a,l,g,b,d,f)}catch(L){if("Invalid country calling code"==L.message&&N.test(l)){if(l=l.replace(N,""),h=Qa(a,l,g,b,d,f),0==h)throw L;
}else throw L;}0!=h?(e=T(h),e!=c&&(g=S(a,h,e))):(Ka(e),b.a(e.toString()),null!=c?(h=y(g,10),u(f,1,h)):d&&(delete f.a[6],f.c&&delete f.c[6]));if(2>b.c.length)throw Error("The string supplied is too short to be a phone number");null!=g&&(c=new F,e=new F(b.toString()),Ra(e,g,c),a=Y(a,e.toString(),g,-1),2!=a&&4!=a&&5!=a&&(b=e,d&&0<c.toString().length&&u(f,7,c.toString())));d=b.toString();a=d.length;if(2>a)throw Error("The string supplied is too short to be a phone number");if(17<a)throw Error("The string supplied is too long to be a phone number");
if(1<d.length&&"0"==d.charAt(0)){u(f,4,!0);for(a=1;a<d.length-1&&"0"==d.charAt(a);)a++;1!=a&&u(f,8,a)}u(f,2,parseInt(d,10));return f}function O(a,b){return(a="string"==typeof a?b.match("^(?:"+a+")$"):b.match(a))&&a[0].length==b.length?!0:!1};m("intlTelInputUtils",{});m("intlTelInputUtils.formatNumber",function(a,b,c){try{var d=M.a(),e=Z(d,a,b),f=Pa(d,e);return 0==f||4==f?Ma(d,e,"undefined"==typeof c?0:c):a}catch(g){return a}});m("intlTelInputUtils.getExampleNumber",function(a,b,c){try{var d=M.a();a:{if(Q(a)){var e=V(U(d,a),c);try{if(null!=e.a[6]){var f=t(e,6);var g=Sa(d,f,a,!1);break a}}catch(h){}}g=null}return Ma(d,g,b?2:1)}catch(h){return""}});m("intlTelInputUtils.getExtension",function(a,b){try{return t(Z(M.a(),a,b),3)}catch(c){return""}});
m("intlTelInputUtils.getNumberType",function(a,b){try{var c=M.a();var d=Z(c,a,b),e=Oa(c,d),f=S(c,y(d,1),e);if(null==f)var g=-1;else{var h=R(d);g=W(h,f)}return g}catch(l){return-99}});
m("intlTelInputUtils.getValidationError",function(a,b){try{var c=M.a(),d=Z(c,a,b);return Pa(c,d)}catch(e){return"Invalid country calling code"==e.message?1:"The string supplied did not seem to be a phone number"==e.message?4:"Phone number too short after IDD"==e.message||"The string supplied is too short to be a phone number"==e?2:"The string supplied is too long to be a phone number"==e.message?3:-99}});
m("intlTelInputUtils.isValidNumber",function(a,b){try{var c=M.a(),d=Z(c,a,b);var e=Oa(c,d),f=y(d,1),g=S(c,f,e),h;if(!(h=null==g)){var l;if(l="001"!=e){var z=U(c,e);if(null==z)throw Error("Invalid region code: "+e);var L=y(z,10);l=f!=L}h=l}if(h)var va=!1;else{var Ta=R(d);va=-1!=W(Ta,g)}return va}catch(Ua){return!1}});m("intlTelInputUtils.numberFormat",{E164:0,INTERNATIONAL:1,NATIONAL:2,RFC3966:3});
m("intlTelInputUtils.numberType",{FIXED_LINE:0,MOBILE:1,FIXED_LINE_OR_MOBILE:2,TOLL_FREE:3,PREMIUM_RATE:4,SHARED_COST:5,VOIP:6,PERSONAL_NUMBER:7,PAGER:8,UAN:9,VOICEMAIL:10,UNKNOWN:-1});m("intlTelInputUtils.validationError",{IS_POSSIBLE:0,INVALID_COUNTRY_CODE:1,TOO_SHORT:2,TOO_LONG:3,NOT_A_NUMBER:4});})();

/**
 * Owl Carousel v2.3.4
 * Copyright 2013-2018 David Deutsch
 * Licensed under: SEE LICENSE IN https://github.com/OwlCarousel2/OwlCarousel2/blob/master/LICENSE
 */
!function(a,b,c,d){function e(b,c){this.settings=null,this.options=a.extend({},e.Defaults,c),this.$element=a(b),this._handlers={},this._plugins={},this._supress={},this._current=null,this._speed=null,this._coordinates=[],this._breakpoint=null,this._width=null,this._items=[],this._clones=[],this._mergers=[],this._widths=[],this._invalidated={},this._pipe=[],this._drag={time:null,target:null,pointer:null,stage:{start:null,current:null},direction:null},this._states={current:{},tags:{initializing:["busy"],animating:["busy"],dragging:["interacting"]}},a.each(["onResize","onThrottledResize"],a.proxy(function(b,c){this._handlers[c]=a.proxy(this[c],this)},this)),a.each(e.Plugins,a.proxy(function(a,b){this._plugins[a.charAt(0).toLowerCase()+a.slice(1)]=new b(this)},this)),a.each(e.Workers,a.proxy(function(b,c){this._pipe.push({filter:c.filter,run:a.proxy(c.run,this)})},this)),this.setup(),this.initialize()}e.Defaults={items:3,loop:!1,center:!1,rewind:!1,checkVisibility:!0,mouseDrag:!0,touchDrag:!0,pullDrag:!0,freeDrag:!1,margin:0,stagePadding:0,merge:!1,mergeFit:!0,autoWidth:!1,startPosition:0,rtl:!1,smartSpeed:250,fluidSpeed:!1,dragEndSpeed:!1,responsive:{},responsiveRefreshRate:200,responsiveBaseElement:b,fallbackEasing:"swing",slideTransition:"",info:!1,nestedItemSelector:!1,itemElement:"div",stageElement:"div",refreshClass:"owl-refresh",loadedClass:"owl-loaded",loadingClass:"owl-loading",rtlClass:"owl-rtl",responsiveClass:"owl-responsive",dragClass:"owl-drag",itemClass:"owl-item",stageClass:"owl-stage",stageOuterClass:"owl-stage-outer",grabClass:"owl-grab"},e.Width={Default:"default",Inner:"inner",Outer:"outer"},e.Type={Event:"event",State:"state"},e.Plugins={},e.Workers=[{filter:["width","settings"],run:function(){this._width=this.$element.width()}},{filter:["width","items","settings"],run:function(a){a.current=this._items&&this._items[this.relative(this._current)]}},{filter:["items","settings"],run:function(){this.$stage.children(".cloned").remove()}},{filter:["width","items","settings"],run:function(a){var b=this.settings.margin||"",c=!this.settings.autoWidth,d=this.settings.rtl,e={width:"auto","margin-left":d?b:"","margin-right":d?"":b};!c&&this.$stage.children().css(e),a.css=e}},{filter:["width","items","settings"],run:function(a){var b=(this.width()/this.settings.items).toFixed(3)-this.settings.margin,c=null,d=this._items.length,e=!this.settings.autoWidth,f=[];for(a.items={merge:!1,width:b};d--;)c=this._mergers[d],c=this.settings.mergeFit&&Math.min(c,this.settings.items)||c,a.items.merge=c>1||a.items.merge,f[d]=e?b*c:this._items[d].width();this._widths=f}},{filter:["items","settings"],run:function(){var b=[],c=this._items,d=this.settings,e=Math.max(2*d.items,4),f=2*Math.ceil(c.length/2),g=d.loop&&c.length?d.rewind?e:Math.max(e,f):0,h="",i="";for(g/=2;g>0;)b.push(this.normalize(b.length/2,!0)),h+=c[b[b.length-1]][0].outerHTML,b.push(this.normalize(c.length-1-(b.length-1)/2,!0)),i=c[b[b.length-1]][0].outerHTML+i,g-=1;this._clones=b,a(h).addClass("cloned").appendTo(this.$stage),a(i).addClass("cloned").prependTo(this.$stage)}},{filter:["width","items","settings"],run:function(){for(var a=this.settings.rtl?1:-1,b=this._clones.length+this._items.length,c=-1,d=0,e=0,f=[];++c<b;)d=f[c-1]||0,e=this._widths[this.relative(c)]+this.settings.margin,f.push(d+e*a);this._coordinates=f}},{filter:["width","items","settings"],run:function(){var a=this.settings.stagePadding,b=this._coordinates,c={width:Math.ceil(Math.abs(b[b.length-1]))+2*a,"padding-left":a||"","padding-right":a||""};this.$stage.css(c)}},{filter:["width","items","settings"],run:function(a){var b=this._coordinates.length,c=!this.settings.autoWidth,d=this.$stage.children();if(c&&a.items.merge)for(;b--;)a.css.width=this._widths[this.relative(b)],d.eq(b).css(a.css);else c&&(a.css.width=a.items.width,d.css(a.css))}},{filter:["items"],run:function(){this._coordinates.length<1&&this.$stage.removeAttr("style")}},{filter:["width","items","settings"],run:function(a){a.current=a.current?this.$stage.children().index(a.current):0,a.current=Math.max(this.minimum(),Math.min(this.maximum(),a.current)),this.reset(a.current)}},{filter:["position"],run:function(){this.animate(this.coordinates(this._current))}},{filter:["width","position","items","settings"],run:function(){var a,b,c,d,e=this.settings.rtl?1:-1,f=2*this.settings.stagePadding,g=this.coordinates(this.current())+f,h=g+this.width()*e,i=[];for(c=0,d=this._coordinates.length;c<d;c++)a=this._coordinates[c-1]||0,b=Math.abs(this._coordinates[c])+f*e,(this.op(a,"<=",g)&&this.op(a,">",h)||this.op(b,"<",g)&&this.op(b,">",h))&&i.push(c);this.$stage.children(".active").removeClass("active"),this.$stage.children(":eq("+i.join("), :eq(")+")").addClass("active"),this.$stage.children(".center").removeClass("center"),this.settings.center&&this.$stage.children().eq(this.current()).addClass("center")}}],e.prototype.initializeStage=function(){this.$stage=this.$element.find("."+this.settings.stageClass),this.$stage.length||(this.$element.addClass(this.options.loadingClass),this.$stage=a("<"+this.settings.stageElement+">",{class:this.settings.stageClass}).wrap(a("<div/>",{class:this.settings.stageOuterClass})),this.$element.append(this.$stage.parent()))},e.prototype.initializeItems=function(){var b=this.$element.find(".owl-item");if(b.length)return this._items=b.get().map(function(b){return a(b)}),this._mergers=this._items.map(function(){return 1}),void this.refresh();this.replace(this.$element.children().not(this.$stage.parent())),this.isVisible()?this.refresh():this.invalidate("width"),this.$element.removeClass(this.options.loadingClass).addClass(this.options.loadedClass)},e.prototype.initialize=function(){if(this.enter("initializing"),this.trigger("initialize"),this.$element.toggleClass(this.settings.rtlClass,this.settings.rtl),this.settings.autoWidth&&!this.is("pre-loading")){var a,b,c;a=this.$element.find("img"),b=this.settings.nestedItemSelector?"."+this.settings.nestedItemSelector:d,c=this.$element.children(b).width(),a.length&&c<=0&&this.preloadAutoWidthImages(a)}this.initializeStage(),this.initializeItems(),this.registerEventHandlers(),this.leave("initializing"),this.trigger("initialized")},e.prototype.isVisible=function(){return!this.settings.checkVisibility||this.$element.is(":visible")},e.prototype.setup=function(){var b=this.viewport(),c=this.options.responsive,d=-1,e=null;c?(a.each(c,function(a){a<=b&&a>d&&(d=Number(a))}),e=a.extend({},this.options,c[d]),"function"==typeof e.stagePadding&&(e.stagePadding=e.stagePadding()),delete e.responsive,e.responsiveClass&&this.$element.attr("class",this.$element.attr("class").replace(new RegExp("("+this.options.responsiveClass+"-)\\S+\\s","g"),"$1"+d))):e=a.extend({},this.options),this.trigger("change",{property:{name:"settings",value:e}}),this._breakpoint=d,this.settings=e,this.invalidate("settings"),this.trigger("changed",{property:{name:"settings",value:this.settings}})},e.prototype.optionsLogic=function(){this.settings.autoWidth&&(this.settings.stagePadding=!1,this.settings.merge=!1)},e.prototype.prepare=function(b){var c=this.trigger("prepare",{content:b});return c.data||(c.data=a("<"+this.settings.itemElement+"/>").addClass(this.options.itemClass).append(b)),this.trigger("prepared",{content:c.data}),c.data},e.prototype.update=function(){for(var b=0,c=this._pipe.length,d=a.proxy(function(a){return this[a]},this._invalidated),e={};b<c;)(this._invalidated.all||a.grep(this._pipe[b].filter,d).length>0)&&this._pipe[b].run(e),b++;this._invalidated={},!this.is("valid")&&this.enter("valid")},e.prototype.width=function(a){switch(a=a||e.Width.Default){case e.Width.Inner:case e.Width.Outer:return this._width;default:return this._width-2*this.settings.stagePadding+this.settings.margin}},e.prototype.refresh=function(){this.enter("refreshing"),this.trigger("refresh"),this.setup(),this.optionsLogic(),this.$element.addClass(this.options.refreshClass),this.update(),this.$element.removeClass(this.options.refreshClass),this.leave("refreshing"),this.trigger("refreshed")},e.prototype.onThrottledResize=function(){b.clearTimeout(this.resizeTimer),this.resizeTimer=b.setTimeout(this._handlers.onResize,this.settings.responsiveRefreshRate)},e.prototype.onResize=function(){return!!this._items.length&&(this._width!==this.$element.width()&&(!!this.isVisible()&&(this.enter("resizing"),this.trigger("resize").isDefaultPrevented()?(this.leave("resizing"),!1):(this.invalidate("width"),this.refresh(),this.leave("resizing"),void this.trigger("resized")))))},e.prototype.registerEventHandlers=function(){a.support.transition&&this.$stage.on(a.support.transition.end+".owl.core",a.proxy(this.onTransitionEnd,this)),!1!==this.settings.responsive&&this.on(b,"resize",this._handlers.onThrottledResize),this.settings.mouseDrag&&(this.$element.addClass(this.options.dragClass),this.$stage.on("mousedown.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("dragstart.owl.core selectstart.owl.core",function(){return!1})),this.settings.touchDrag&&(this.$stage.on("touchstart.owl.core",a.proxy(this.onDragStart,this)),this.$stage.on("touchcancel.owl.core",a.proxy(this.onDragEnd,this)))},e.prototype.onDragStart=function(b){var d=null;3!==b.which&&(a.support.transform?(d=this.$stage.css("transform").replace(/.*\(|\)| /g,"").split(","),d={x:d[16===d.length?12:4],y:d[16===d.length?13:5]}):(d=this.$stage.position(),d={x:this.settings.rtl?d.left+this.$stage.width()-this.width()+this.settings.margin:d.left,y:d.top}),this.is("animating")&&(a.support.transform?this.animate(d.x):this.$stage.stop(),this.invalidate("position")),this.$element.toggleClass(this.options.grabClass,"mousedown"===b.type),this.speed(0),this._drag.time=(new Date).getTime(),this._drag.target=a(b.target),this._drag.stage.start=d,this._drag.stage.current=d,this._drag.pointer=this.pointer(b),a(c).on("mouseup.owl.core touchend.owl.core",a.proxy(this.onDragEnd,this)),a(c).one("mousemove.owl.core touchmove.owl.core",a.proxy(function(b){var d=this.difference(this._drag.pointer,this.pointer(b));a(c).on("mousemove.owl.core touchmove.owl.core",a.proxy(this.onDragMove,this)),Math.abs(d.x)<Math.abs(d.y)&&this.is("valid")||(b.preventDefault(),this.enter("dragging"),this.trigger("drag"))},this)))},e.prototype.onDragMove=function(a){var b=null,c=null,d=null,e=this.difference(this._drag.pointer,this.pointer(a)),f=this.difference(this._drag.stage.start,e);this.is("dragging")&&(a.preventDefault(),this.settings.loop?(b=this.coordinates(this.minimum()),c=this.coordinates(this.maximum()+1)-b,f.x=((f.x-b)%c+c)%c+b):(b=this.settings.rtl?this.coordinates(this.maximum()):this.coordinates(this.minimum()),c=this.settings.rtl?this.coordinates(this.minimum()):this.coordinates(this.maximum()),d=this.settings.pullDrag?-1*e.x/5:0,f.x=Math.max(Math.min(f.x,b+d),c+d)),this._drag.stage.current=f,this.animate(f.x))},e.prototype.onDragEnd=function(b){var d=this.difference(this._drag.pointer,this.pointer(b)),e=this._drag.stage.current,f=d.x>0^this.settings.rtl?"left":"right";a(c).off(".owl.core"),this.$element.removeClass(this.options.grabClass),(0!==d.x&&this.is("dragging")||!this.is("valid"))&&(this.speed(this.settings.dragEndSpeed||this.settings.smartSpeed),this.current(this.closest(e.x,0!==d.x?f:this._drag.direction)),this.invalidate("position"),this.update(),this._drag.direction=f,(Math.abs(d.x)>3||(new Date).getTime()-this._drag.time>300)&&this._drag.target.one("click.owl.core",function(){return!1})),this.is("dragging")&&(this.leave("dragging"),this.trigger("dragged"))},e.prototype.closest=function(b,c){var e=-1,f=30,g=this.width(),h=this.coordinates();return this.settings.freeDrag||a.each(h,a.proxy(function(a,i){return"left"===c&&b>i-f&&b<i+f?e=a:"right"===c&&b>i-g-f&&b<i-g+f?e=a+1:this.op(b,"<",i)&&this.op(b,">",h[a+1]!==d?h[a+1]:i-g)&&(e="left"===c?a+1:a),-1===e},this)),this.settings.loop||(this.op(b,">",h[this.minimum()])?e=b=this.minimum():this.op(b,"<",h[this.maximum()])&&(e=b=this.maximum())),e},e.prototype.animate=function(b){var c=this.speed()>0;this.is("animating")&&this.onTransitionEnd(),c&&(this.enter("animating"),this.trigger("translate")),a.support.transform3d&&a.support.transition?this.$stage.css({transform:"translate3d("+b+"px,0px,0px)",transition:this.speed()/1e3+"s"+(this.settings.slideTransition?" "+this.settings.slideTransition:"")}):c?this.$stage.animate({left:b+"px"},this.speed(),this.settings.fallbackEasing,a.proxy(this.onTransitionEnd,this)):this.$stage.css({left:b+"px"})},e.prototype.is=function(a){return this._states.current[a]&&this._states.current[a]>0},e.prototype.current=function(a){if(a===d)return this._current;if(0===this._items.length)return d;if(a=this.normalize(a),this._current!==a){var b=this.trigger("change",{property:{name:"position",value:a}});b.data!==d&&(a=this.normalize(b.data)),this._current=a,this.invalidate("position"),this.trigger("changed",{property:{name:"position",value:this._current}})}return this._current},e.prototype.invalidate=function(b){return"string"===a.type(b)&&(this._invalidated[b]=!0,this.is("valid")&&this.leave("valid")),a.map(this._invalidated,function(a,b){return b})},e.prototype.reset=function(a){(a=this.normalize(a))!==d&&(this._speed=0,this._current=a,this.suppress(["translate","translated"]),this.animate(this.coordinates(a)),this.release(["translate","translated"]))},e.prototype.normalize=function(a,b){var c=this._items.length,e=b?0:this._clones.length;return!this.isNumeric(a)||c<1?a=d:(a<0||a>=c+e)&&(a=((a-e/2)%c+c)%c+e/2),a},e.prototype.relative=function(a){return a-=this._clones.length/2,this.normalize(a,!0)},e.prototype.maximum=function(a){var b,c,d,e=this.settings,f=this._coordinates.length;if(e.loop)f=this._clones.length/2+this._items.length-1;else if(e.autoWidth||e.merge){if(b=this._items.length)for(c=this._items[--b].width(),d=this.$element.width();b--&&!((c+=this._items[b].width()+this.settings.margin)>d););f=b+1}else f=e.center?this._items.length-1:this._items.length-e.items;return a&&(f-=this._clones.length/2),Math.max(f,0)},e.prototype.minimum=function(a){return a?0:this._clones.length/2},e.prototype.items=function(a){return a===d?this._items.slice():(a=this.normalize(a,!0),this._items[a])},e.prototype.mergers=function(a){return a===d?this._mergers.slice():(a=this.normalize(a,!0),this._mergers[a])},e.prototype.clones=function(b){var c=this._clones.length/2,e=c+this._items.length,f=function(a){return a%2==0?e+a/2:c-(a+1)/2};return b===d?a.map(this._clones,function(a,b){return f(b)}):a.map(this._clones,function(a,c){return a===b?f(c):null})},e.prototype.speed=function(a){return a!==d&&(this._speed=a),this._speed},e.prototype.coordinates=function(b){var c,e=1,f=b-1;return b===d?a.map(this._coordinates,a.proxy(function(a,b){return this.coordinates(b)},this)):(this.settings.center?(this.settings.rtl&&(e=-1,f=b+1),c=this._coordinates[b],c+=(this.width()-c+(this._coordinates[f]||0))/2*e):c=this._coordinates[f]||0,c=Math.ceil(c))},e.prototype.duration=function(a,b,c){return 0===c?0:Math.min(Math.max(Math.abs(b-a),1),6)*Math.abs(c||this.settings.smartSpeed)},e.prototype.to=function(a,b){var c=this.current(),d=null,e=a-this.relative(c),f=(e>0)-(e<0),g=this._items.length,h=this.minimum(),i=this.maximum();this.settings.loop?(!this.settings.rewind&&Math.abs(e)>g/2&&(e+=-1*f*g),a=c+e,(d=((a-h)%g+g)%g+h)!==a&&d-e<=i&&d-e>0&&(c=d-e,a=d,this.reset(c))):this.settings.rewind?(i+=1,a=(a%i+i)%i):a=Math.max(h,Math.min(i,a)),this.speed(this.duration(c,a,b)),this.current(a),this.isVisible()&&this.update()},e.prototype.next=function(a){a=a||!1,this.to(this.relative(this.current())+1,a)},e.prototype.prev=function(a){a=a||!1,this.to(this.relative(this.current())-1,a)},e.prototype.onTransitionEnd=function(a){if(a!==d&&(a.stopPropagation(),(a.target||a.srcElement||a.originalTarget)!==this.$stage.get(0)))return!1;this.leave("animating"),this.trigger("translated")},e.prototype.viewport=function(){var d;return this.options.responsiveBaseElement!==b?d=a(this.options.responsiveBaseElement).width():b.innerWidth?d=b.innerWidth:c.documentElement&&c.documentElement.clientWidth?d=c.documentElement.clientWidth:console.warn("Can not detect viewport width."),d},e.prototype.replace=function(b){this.$stage.empty(),this._items=[],b&&(b=b instanceof jQuery?b:a(b)),this.settings.nestedItemSelector&&(b=b.find("."+this.settings.nestedItemSelector)),b.filter(function(){return 1===this.nodeType}).each(a.proxy(function(a,b){b=this.prepare(b),this.$stage.append(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)},this)),this.reset(this.isNumeric(this.settings.startPosition)?this.settings.startPosition:0),this.invalidate("items")},e.prototype.add=function(b,c){var e=this.relative(this._current);c=c===d?this._items.length:this.normalize(c,!0),b=b instanceof jQuery?b:a(b),this.trigger("add",{content:b,position:c}),b=this.prepare(b),0===this._items.length||c===this._items.length?(0===this._items.length&&this.$stage.append(b),0!==this._items.length&&this._items[c-1].after(b),this._items.push(b),this._mergers.push(1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)):(this._items[c].before(b),this._items.splice(c,0,b),this._mergers.splice(c,0,1*b.find("[data-merge]").addBack("[data-merge]").attr("data-merge")||1)),this._items[e]&&this.reset(this._items[e].index()),this.invalidate("items"),this.trigger("added",{content:b,position:c})},e.prototype.remove=function(a){(a=this.normalize(a,!0))!==d&&(this.trigger("remove",{content:this._items[a],position:a}),this._items[a].remove(),this._items.splice(a,1),this._mergers.splice(a,1),this.invalidate("items"),this.trigger("removed",{content:null,position:a}))},e.prototype.preloadAutoWidthImages=function(b){b.each(a.proxy(function(b,c){this.enter("pre-loading"),c=a(c),a(new Image).one("load",a.proxy(function(a){c.attr("src",a.target.src),c.css("opacity",1),this.leave("pre-loading"),!this.is("pre-loading")&&!this.is("initializing")&&this.refresh()},this)).attr("src",c.attr("src")||c.attr("data-src")||c.attr("data-src-retina"))},this))},e.prototype.destroy=function(){this.$element.off(".owl.core"),this.$stage.off(".owl.core"),a(c).off(".owl.core"),!1!==this.settings.responsive&&(b.clearTimeout(this.resizeTimer),this.off(b,"resize",this._handlers.onThrottledResize));for(var d in this._plugins)this._plugins[d].destroy();this.$stage.children(".cloned").remove(),this.$stage.unwrap(),this.$stage.children().contents().unwrap(),this.$stage.children().unwrap(),this.$stage.remove(),this.$element.removeClass(this.options.refreshClass).removeClass(this.options.loadingClass).removeClass(this.options.loadedClass).removeClass(this.options.rtlClass).removeClass(this.options.dragClass).removeClass(this.options.grabClass).attr("class",this.$element.attr("class").replace(new RegExp(this.options.responsiveClass+"-\\S+\\s","g"),"")).removeData("owl.carousel")},e.prototype.op=function(a,b,c){var d=this.settings.rtl;switch(b){case"<":return d?a>c:a<c;case">":return d?a<c:a>c;case">=":return d?a<=c:a>=c;case"<=":return d?a>=c:a<=c}},e.prototype.on=function(a,b,c,d){a.addEventListener?a.addEventListener(b,c,d):a.attachEvent&&a.attachEvent("on"+b,c)},e.prototype.off=function(a,b,c,d){a.removeEventListener?a.removeEventListener(b,c,d):a.detachEvent&&a.detachEvent("on"+b,c)},e.prototype.trigger=function(b,c,d,f,g){var h={item:{count:this._items.length,index:this.current()}},i=a.camelCase(a.grep(["on",b,d],function(a){return a}).join("-").toLowerCase()),j=a.Event([b,"owl",d||"carousel"].join(".").toLowerCase(),a.extend({relatedTarget:this},h,c));return this._supress[b]||(a.each(this._plugins,function(a,b){b.onTrigger&&b.onTrigger(j)}),this.register({type:e.Type.Event,name:b}),this.$element.trigger(j),this.settings&&"function"==typeof this.settings[i]&&this.settings[i].call(this,j)),j},e.prototype.enter=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]===d&&(this._states.current[b]=0),this._states.current[b]++},this))},e.prototype.leave=function(b){a.each([b].concat(this._states.tags[b]||[]),a.proxy(function(a,b){this._states.current[b]--},this))},e.prototype.register=function(b){if(b.type===e.Type.Event){if(a.event.special[b.name]||(a.event.special[b.name]={}),!a.event.special[b.name].owl){var c=a.event.special[b.name]._default;a.event.special[b.name]._default=function(a){return!c||!c.apply||a.namespace&&-1!==a.namespace.indexOf("owl")?a.namespace&&a.namespace.indexOf("owl")>-1:c.apply(this,arguments)},a.event.special[b.name].owl=!0}}else b.type===e.Type.State&&(this._states.tags[b.name]?this._states.tags[b.name]=this._states.tags[b.name].concat(b.tags):this._states.tags[b.name]=b.tags,this._states.tags[b.name]=a.grep(this._states.tags[b.name],a.proxy(function(c,d){return a.inArray(c,this._states.tags[b.name])===d},this)))},e.prototype.suppress=function(b){a.each(b,a.proxy(function(a,b){this._supress[b]=!0},this))},e.prototype.release=function(b){a.each(b,a.proxy(function(a,b){delete this._supress[b]},this))},e.prototype.pointer=function(a){var c={x:null,y:null};return a=a.originalEvent||a||b.event,a=a.touches&&a.touches.length?a.touches[0]:a.changedTouches&&a.changedTouches.length?a.changedTouches[0]:a,a.pageX?(c.x=a.pageX,c.y=a.pageY):(c.x=a.clientX,c.y=a.clientY),c},e.prototype.isNumeric=function(a){return!isNaN(parseFloat(a))},e.prototype.difference=function(a,b){return{x:a.x-b.x,y:a.y-b.y}},a.fn.owlCarousel=function(b){var c=Array.prototype.slice.call(arguments,1);return this.each(function(){var d=a(this),f=d.data("owl.carousel");f||(f=new e(this,"object"==typeof b&&b),d.data("owl.carousel",f),a.each(["next","prev","to","destroy","refresh","replace","add","remove"],function(b,c){f.register({type:e.Type.Event,name:c}),f.$element.on(c+".owl.carousel.core",a.proxy(function(a){a.namespace&&a.relatedTarget!==this&&(this.suppress([c]),f[c].apply(this,[].slice.call(arguments,1)),this.release([c]))},f))})),"string"==typeof b&&"_"!==b.charAt(0)&&f[b].apply(f,c)})},a.fn.owlCarousel.Constructor=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._interval=null,this._visible=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoRefresh&&this.watch()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={autoRefresh:!0,autoRefreshInterval:500},e.prototype.watch=function(){this._interval||(this._visible=this._core.isVisible(),this._interval=b.setInterval(a.proxy(this.refresh,this),this._core.settings.autoRefreshInterval))},e.prototype.refresh=function(){this._core.isVisible()!==this._visible&&(this._visible=!this._visible,this._core.$element.toggleClass("owl-hidden",!this._visible),this._visible&&this._core.invalidate("width")&&this._core.refresh())},e.prototype.destroy=function(){var a,c;b.clearInterval(this._interval);for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoRefresh=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._loaded=[],this._handlers={"initialized.owl.carousel change.owl.carousel resized.owl.carousel":a.proxy(function(b){if(b.namespace&&this._core.settings&&this._core.settings.lazyLoad&&(b.property&&"position"==b.property.name||"initialized"==b.type)){var c=this._core.settings,e=c.center&&Math.ceil(c.items/2)||c.items,f=c.center&&-1*e||0,g=(b.property&&b.property.value!==d?b.property.value:this._core.current())+f,h=this._core.clones().length,i=a.proxy(function(a,b){this.load(b)},this);for(c.lazyLoadEager>0&&(e+=c.lazyLoadEager,c.loop&&(g-=c.lazyLoadEager,e++));f++<e;)this.load(h/2+this._core.relative(g)),h&&a.each(this._core.clones(this._core.relative(g)),i),g++}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers)};e.Defaults={lazyLoad:!1,lazyLoadEager:0},e.prototype.load=function(c){var d=this._core.$stage.children().eq(c),e=d&&d.find(".owl-lazy");!e||a.inArray(d.get(0),this._loaded)>-1||(e.each(a.proxy(function(c,d){var e,f=a(d),g=b.devicePixelRatio>1&&f.attr("data-src-retina")||f.attr("data-src")||f.attr("data-srcset");this._core.trigger("load",{element:f,url:g},"lazy"),f.is("img")?f.one("load.owl.lazy",a.proxy(function(){f.css("opacity",1),this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("src",g):f.is("source")?f.one("load.owl.lazy",a.proxy(function(){this._core.trigger("loaded",{element:f,url:g},"lazy")},this)).attr("srcset",g):(e=new Image,e.onload=a.proxy(function(){f.css({"background-image":'url("'+g+'")',opacity:"1"}),this._core.trigger("loaded",{element:f,url:g},"lazy")},this),e.src=g)},this)),this._loaded.push(d.get(0)))},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this._core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Lazy=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(c){this._core=c,this._previousHeight=null,this._handlers={"initialized.owl.carousel refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&this.update()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&"position"===a.property.name&&this.update()},this),"loaded.owl.lazy":a.proxy(function(a){a.namespace&&this._core.settings.autoHeight&&a.element.closest("."+this._core.settings.itemClass).index()===this._core.current()&&this.update()},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._intervalId=null;var d=this;a(b).on("load",function(){d._core.settings.autoHeight&&d.update()}),a(b).resize(function(){d._core.settings.autoHeight&&(null!=d._intervalId&&clearTimeout(d._intervalId),d._intervalId=setTimeout(function(){d.update()},250))})};e.Defaults={autoHeight:!1,autoHeightClass:"owl-height"},e.prototype.update=function(){var b=this._core._current,c=b+this._core.settings.items,d=this._core.settings.lazyLoad,e=this._core.$stage.children().toArray().slice(b,c),f=[],g=0;a.each(e,function(b,c){f.push(a(c).height())}),g=Math.max.apply(null,f),g<=1&&d&&this._previousHeight&&(g=this._previousHeight),this._previousHeight=g,this._core.$stage.parent().height(g).addClass(this._core.settings.autoHeightClass)},e.prototype.destroy=function(){var a,b;for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.AutoHeight=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._videos={},this._playing=null,this._handlers={"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.register({type:"state",name:"playing",tags:["interacting"]})},this),"resize.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.video&&this.isInFullScreen()&&a.preventDefault()},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._core.is("resizing")&&this._core.$stage.find(".cloned .owl-video-frame").remove()},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"===a.property.name&&this._playing&&this.stop()},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find(".owl-video");c.length&&(c.css("display","none"),this.fetch(c,a(b.content)))}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this._core.$element.on(this._handlers),this._core.$element.on("click.owl.video",".owl-video-play-icon",a.proxy(function(a){this.play(a)},this))};e.Defaults={video:!1,videoHeight:!1,videoWidth:!1},e.prototype.fetch=function(a,b){var c=function(){return a.attr("data-vimeo-id")?"vimeo":a.attr("data-vzaar-id")?"vzaar":"youtube"}(),d=a.attr("data-vimeo-id")||a.attr("data-youtube-id")||a.attr("data-vzaar-id"),e=a.attr("data-width")||this._core.settings.videoWidth,f=a.attr("data-height")||this._core.settings.videoHeight,g=a.attr("href");if(!g)throw new Error("Missing video URL.");if(d=g.match(/(http:|https:|)\/\/(player.|www.|app.)?(vimeo\.com|youtu(be\.com|\.be|be\.googleapis\.com|be\-nocookie\.com)|vzaar\.com)\/(video\/|videos\/|embed\/|channels\/.+\/|groups\/.+\/|watch\?v=|v\/)?([A-Za-z0-9._%-]*)(\&\S+)?/),d[3].indexOf("youtu")>-1)c="youtube";else if(d[3].indexOf("vimeo")>-1)c="vimeo";else{if(!(d[3].indexOf("vzaar")>-1))throw new Error("Video URL not supported.");c="vzaar"}d=d[6],this._videos[g]={type:c,id:d,width:e,height:f},b.attr("data-video",g),this.thumbnail(a,this._videos[g])},e.prototype.thumbnail=function(b,c){var d,e,f,g=c.width&&c.height?"width:"+c.width+"px;height:"+c.height+"px;":"",h=b.find("img"),i="src",j="",k=this._core.settings,l=function(c){e='<div class="owl-video-play-icon"></div>',d=k.lazyLoad?a("<div/>",{class:"owl-video-tn "+j,srcType:c}):a("<div/>",{class:"owl-video-tn",style:"opacity:1;background-image:url("+c+")"}),b.after(d),b.after(e)};if(b.wrap(a("<div/>",{class:"owl-video-wrapper",style:g})),this._core.settings.lazyLoad&&(i="data-src",j="owl-lazy"),h.length)return l(h.attr(i)),h.remove(),!1;"youtube"===c.type?(f="//img.youtube.com/vi/"+c.id+"/hqdefault.jpg",l(f)):"vimeo"===c.type?a.ajax({type:"GET",url:"//vimeo.com/api/v2/video/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a[0].thumbnail_large,l(f)}}):"vzaar"===c.type&&a.ajax({type:"GET",url:"//vzaar.com/api/videos/"+c.id+".json",jsonp:"callback",dataType:"jsonp",success:function(a){f=a.framegrab_url,l(f)}})},e.prototype.stop=function(){this._core.trigger("stop",null,"video"),this._playing.find(".owl-video-frame").remove(),this._playing.removeClass("owl-video-playing"),this._playing=null,this._core.leave("playing"),this._core.trigger("stopped",null,"video")},e.prototype.play=function(b){var c,d=a(b.target),e=d.closest("."+this._core.settings.itemClass),f=this._videos[e.attr("data-video")],g=f.width||"100%",h=f.height||this._core.$stage.height();this._playing||(this._core.enter("playing"),this._core.trigger("play",null,"video"),e=this._core.items(this._core.relative(e.index())),this._core.reset(e.index()),c=a('<iframe frameborder="0" allowfullscreen mozallowfullscreen webkitAllowFullScreen ></iframe>'),c.attr("height",h),c.attr("width",g),"youtube"===f.type?c.attr("src","//www.youtube.com/embed/"+f.id+"?autoplay=1&rel=0&v="+f.id):"vimeo"===f.type?c.attr("src","//player.vimeo.com/video/"+f.id+"?autoplay=1"):"vzaar"===f.type&&c.attr("src","//view.vzaar.com/"+f.id+"/player?autoplay=true"),a(c).wrap('<div class="owl-video-frame" />').insertAfter(e.find(".owl-video")),this._playing=e.addClass("owl-video-playing"))},e.prototype.isInFullScreen=function(){var b=c.fullscreenElement||c.mozFullScreenElement||c.webkitFullscreenElement;return b&&a(b).parent().hasClass("owl-video-frame")},e.prototype.destroy=function(){var a,b;this._core.$element.off("click.owl.video");for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Video=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this.core=b,this.core.options=a.extend({},e.Defaults,this.core.options),this.swapping=!0,this.previous=d,this.next=d,this.handlers={"change.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&(this.previous=this.core.current(),this.next=a.property.value)},this),"drag.owl.carousel dragged.owl.carousel translated.owl.carousel":a.proxy(function(a){a.namespace&&(this.swapping="translated"==a.type)},this),"translate.owl.carousel":a.proxy(function(a){a.namespace&&this.swapping&&(this.core.options.animateOut||this.core.options.animateIn)&&this.swap()},this)},this.core.$element.on(this.handlers)};e.Defaults={animateOut:!1,
animateIn:!1},e.prototype.swap=function(){if(1===this.core.settings.items&&a.support.animation&&a.support.transition){this.core.speed(0);var b,c=a.proxy(this.clear,this),d=this.core.$stage.children().eq(this.previous),e=this.core.$stage.children().eq(this.next),f=this.core.settings.animateIn,g=this.core.settings.animateOut;this.core.current()!==this.previous&&(g&&(b=this.core.coordinates(this.previous)-this.core.coordinates(this.next),d.one(a.support.animation.end,c).css({left:b+"px"}).addClass("animated owl-animated-out").addClass(g)),f&&e.one(a.support.animation.end,c).addClass("animated owl-animated-in").addClass(f))}},e.prototype.clear=function(b){a(b.target).css({left:""}).removeClass("animated owl-animated-out owl-animated-in").removeClass(this.core.settings.animateIn).removeClass(this.core.settings.animateOut),this.core.onTransitionEnd()},e.prototype.destroy=function(){var a,b;for(a in this.handlers)this.core.$element.off(a,this.handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.Animate=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){var e=function(b){this._core=b,this._call=null,this._time=0,this._timeout=0,this._paused=!0,this._handlers={"changed.owl.carousel":a.proxy(function(a){a.namespace&&"settings"===a.property.name?this._core.settings.autoplay?this.play():this.stop():a.namespace&&"position"===a.property.name&&this._paused&&(this._time=0)},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.autoplay&&this.play()},this),"play.owl.autoplay":a.proxy(function(a,b,c){a.namespace&&this.play(b,c)},this),"stop.owl.autoplay":a.proxy(function(a){a.namespace&&this.stop()},this),"mouseover.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"mouseleave.owl.autoplay":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.play()},this),"touchstart.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this._core.is("rotating")&&this.pause()},this),"touchend.owl.core":a.proxy(function(){this._core.settings.autoplayHoverPause&&this.play()},this)},this._core.$element.on(this._handlers),this._core.options=a.extend({},e.Defaults,this._core.options)};e.Defaults={autoplay:!1,autoplayTimeout:5e3,autoplayHoverPause:!1,autoplaySpeed:!1},e.prototype._next=function(d){this._call=b.setTimeout(a.proxy(this._next,this,d),this._timeout*(Math.round(this.read()/this._timeout)+1)-this.read()),this._core.is("interacting")||c.hidden||this._core.next(d||this._core.settings.autoplaySpeed)},e.prototype.read=function(){return(new Date).getTime()-this._time},e.prototype.play=function(c,d){var e;this._core.is("rotating")||this._core.enter("rotating"),c=c||this._core.settings.autoplayTimeout,e=Math.min(this._time%(this._timeout||c),c),this._paused?(this._time=this.read(),this._paused=!1):b.clearTimeout(this._call),this._time+=this.read()%c-e,this._timeout=c,this._call=b.setTimeout(a.proxy(this._next,this,d),c-e)},e.prototype.stop=function(){this._core.is("rotating")&&(this._time=0,this._paused=!0,b.clearTimeout(this._call),this._core.leave("rotating"))},e.prototype.pause=function(){this._core.is("rotating")&&!this._paused&&(this._time=this.read(),this._paused=!0,b.clearTimeout(this._call))},e.prototype.destroy=function(){var a,b;this.stop();for(a in this._handlers)this._core.$element.off(a,this._handlers[a]);for(b in Object.getOwnPropertyNames(this))"function"!=typeof this[b]&&(this[b]=null)},a.fn.owlCarousel.Constructor.Plugins.autoplay=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(b){this._core=b,this._initialized=!1,this._pages=[],this._controls={},this._templates=[],this.$element=this._core.$element,this._overrides={next:this._core.next,prev:this._core.prev,to:this._core.to},this._handlers={"prepared.owl.carousel":a.proxy(function(b){b.namespace&&this._core.settings.dotsData&&this._templates.push('<div class="'+this._core.settings.dotClass+'">'+a(b.content).find("[data-dot]").addBack("[data-dot]").attr("data-dot")+"</div>")},this),"added.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,0,this._templates.pop())},this),"remove.owl.carousel":a.proxy(function(a){a.namespace&&this._core.settings.dotsData&&this._templates.splice(a.position,1)},this),"changed.owl.carousel":a.proxy(function(a){a.namespace&&"position"==a.property.name&&this.draw()},this),"initialized.owl.carousel":a.proxy(function(a){a.namespace&&!this._initialized&&(this._core.trigger("initialize",null,"navigation"),this.initialize(),this.update(),this.draw(),this._initialized=!0,this._core.trigger("initialized",null,"navigation"))},this),"refreshed.owl.carousel":a.proxy(function(a){a.namespace&&this._initialized&&(this._core.trigger("refresh",null,"navigation"),this.update(),this.draw(),this._core.trigger("refreshed",null,"navigation"))},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers)};e.Defaults={nav:!1,navText:['<span aria-label="Previous">&#x2039;</span>','<span aria-label="Next">&#x203a;</span>'],navSpeed:!1,navElement:'button type="button" role="presentation"',navContainer:!1,navContainerClass:"owl-nav",navClass:["owl-prev","owl-next"],slideBy:1,dotClass:"owl-dot",dotsClass:"owl-dots",dots:!0,dotsEach:!1,dotsData:!1,dotsSpeed:!1,dotsContainer:!1},e.prototype.initialize=function(){var b,c=this._core.settings;this._controls.$relative=(c.navContainer?a(c.navContainer):a("<div>").addClass(c.navContainerClass).appendTo(this.$element)).addClass("disabled"),this._controls.$previous=a("<"+c.navElement+">").addClass(c.navClass[0]).html(c.navText[0]).prependTo(this._controls.$relative).on("click",a.proxy(function(a){this.prev(c.navSpeed)},this)),this._controls.$next=a("<"+c.navElement+">").addClass(c.navClass[1]).html(c.navText[1]).appendTo(this._controls.$relative).on("click",a.proxy(function(a){this.next(c.navSpeed)},this)),c.dotsData||(this._templates=[a('<button role="button">').addClass(c.dotClass).append(a("<span>")).prop("outerHTML")]),this._controls.$absolute=(c.dotsContainer?a(c.dotsContainer):a("<div>").addClass(c.dotsClass).appendTo(this.$element)).addClass("disabled"),this._controls.$absolute.on("click","button",a.proxy(function(b){var d=a(b.target).parent().is(this._controls.$absolute)?a(b.target).index():a(b.target).parent().index();b.preventDefault(),this.to(d,c.dotsSpeed)},this));for(b in this._overrides)this._core[b]=a.proxy(this[b],this)},e.prototype.destroy=function(){var a,b,c,d,e;e=this._core.settings;for(a in this._handlers)this.$element.off(a,this._handlers[a]);for(b in this._controls)"$relative"===b&&e.navContainer?this._controls[b].html(""):this._controls[b].remove();for(d in this.overides)this._core[d]=this._overrides[d];for(c in Object.getOwnPropertyNames(this))"function"!=typeof this[c]&&(this[c]=null)},e.prototype.update=function(){var a,b,c,d=this._core.clones().length/2,e=d+this._core.items().length,f=this._core.maximum(!0),g=this._core.settings,h=g.center||g.autoWidth||g.dotsData?1:g.dotsEach||g.items;if("page"!==g.slideBy&&(g.slideBy=Math.min(g.slideBy,g.items)),g.dots||"page"==g.slideBy)for(this._pages=[],a=d,b=0,c=0;a<e;a++){if(b>=h||0===b){if(this._pages.push({start:Math.min(f,a-d),end:a-d+h-1}),Math.min(f,a-d)===f)break;b=0,++c}b+=this._core.mergers(this._core.relative(a))}},e.prototype.draw=function(){var b,c=this._core.settings,d=this._core.items().length<=c.items,e=this._core.relative(this._core.current()),f=c.loop||c.rewind;this._controls.$relative.toggleClass("disabled",!c.nav||d),c.nav&&(this._controls.$previous.toggleClass("disabled",!f&&e<=this._core.minimum(!0)),this._controls.$next.toggleClass("disabled",!f&&e>=this._core.maximum(!0))),this._controls.$absolute.toggleClass("disabled",!c.dots||d),c.dots&&(b=this._pages.length-this._controls.$absolute.children().length,c.dotsData&&0!==b?this._controls.$absolute.html(this._templates.join("")):b>0?this._controls.$absolute.append(new Array(b+1).join(this._templates[0])):b<0&&this._controls.$absolute.children().slice(b).remove(),this._controls.$absolute.find(".active").removeClass("active"),this._controls.$absolute.children().eq(a.inArray(this.current(),this._pages)).addClass("active"))},e.prototype.onTrigger=function(b){var c=this._core.settings;b.page={index:a.inArray(this.current(),this._pages),count:this._pages.length,size:c&&(c.center||c.autoWidth||c.dotsData?1:c.dotsEach||c.items)}},e.prototype.current=function(){var b=this._core.relative(this._core.current());return a.grep(this._pages,a.proxy(function(a,c){return a.start<=b&&a.end>=b},this)).pop()},e.prototype.getPosition=function(b){var c,d,e=this._core.settings;return"page"==e.slideBy?(c=a.inArray(this.current(),this._pages),d=this._pages.length,b?++c:--c,c=this._pages[(c%d+d)%d].start):(c=this._core.relative(this._core.current()),d=this._core.items().length,b?c+=e.slideBy:c-=e.slideBy),c},e.prototype.next=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!0),b)},e.prototype.prev=function(b){a.proxy(this._overrides.to,this._core)(this.getPosition(!1),b)},e.prototype.to=function(b,c,d){var e;!d&&this._pages.length?(e=this._pages.length,a.proxy(this._overrides.to,this._core)(this._pages[(b%e+e)%e].start,c)):a.proxy(this._overrides.to,this._core)(b,c)},a.fn.owlCarousel.Constructor.Plugins.Navigation=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){"use strict";var e=function(c){this._core=c,this._hashes={},this.$element=this._core.$element,this._handlers={"initialized.owl.carousel":a.proxy(function(c){c.namespace&&"URLHash"===this._core.settings.startPosition&&a(b).trigger("hashchange.owl.navigation")},this),"prepared.owl.carousel":a.proxy(function(b){if(b.namespace){var c=a(b.content).find("[data-hash]").addBack("[data-hash]").attr("data-hash");if(!c)return;this._hashes[c]=b.content}},this),"changed.owl.carousel":a.proxy(function(c){if(c.namespace&&"position"===c.property.name){var d=this._core.items(this._core.relative(this._core.current())),e=a.map(this._hashes,function(a,b){return a===d?b:null}).join();if(!e||b.location.hash.slice(1)===e)return;b.location.hash=e}},this)},this._core.options=a.extend({},e.Defaults,this._core.options),this.$element.on(this._handlers),a(b).on("hashchange.owl.navigation",a.proxy(function(a){var c=b.location.hash.substring(1),e=this._core.$stage.children(),f=this._hashes[c]&&e.index(this._hashes[c]);f!==d&&f!==this._core.current()&&this._core.to(this._core.relative(f),!1,!0)},this))};e.Defaults={URLhashListener:!1},e.prototype.destroy=function(){var c,d;a(b).off("hashchange.owl.navigation");for(c in this._handlers)this._core.$element.off(c,this._handlers[c]);for(d in Object.getOwnPropertyNames(this))"function"!=typeof this[d]&&(this[d]=null)},a.fn.owlCarousel.Constructor.Plugins.Hash=e}(window.Zepto||window.jQuery,window,document),function(a,b,c,d){function e(b,c){var e=!1,f=b.charAt(0).toUpperCase()+b.slice(1);return a.each((b+" "+h.join(f+" ")+f).split(" "),function(a,b){if(g[b]!==d)return e=!c||b,!1}),e}function f(a){return e(a,!0)}var g=a("<support>").get(0).style,h="Webkit Moz O ms".split(" "),i={transition:{end:{WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd",transition:"transitionend"}},animation:{end:{WebkitAnimation:"webkitAnimationEnd",MozAnimation:"animationend",OAnimation:"oAnimationEnd",animation:"animationend"}}},j={csstransforms:function(){return!!e("transform")},csstransforms3d:function(){return!!e("perspective")},csstransitions:function(){return!!e("transition")},cssanimations:function(){return!!e("animation")}};j.csstransitions()&&(a.support.transition=new String(f("transition")),a.support.transition.end=i.transition.end[a.support.transition]),j.cssanimations()&&(a.support.animation=new String(f("animation")),a.support.animation.end=i.animation.end[a.support.animation]),j.csstransforms()&&(a.support.transform=new String(f("transform")),a.support.transform3d=j.csstransforms3d())}(window.Zepto||window.jQuery,window,document);
/**
 * Created by hidal on 12/06/2017.
 */

"use strict";
/*-----------------------------------
 FUNFACTSs
 -----------------------------------*/
$('.count').waypoint(function() {
    // start all the timers
    $('.count').each(count);

    function count(options) {

        var $this = $(this);
        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
        $this.countTo(options);
    }
}, {
    offset: '70%',  // middle of the page
    triggerOnce: true
});

/*-----------------------------------
 ANIMATIONS
 -----------------------------------*/

function onScrollInit( items, trigger ) {
    items.each( function() {
        var osElement = $(this),
            osAnimationClass = osElement.attr('data-os-animation'),
            osAnimationDelay = osElement.attr('data-os-animation-delay');

        osElement.css({
            '-webkit-animation-delay':  osAnimationDelay,
            '-moz-animation-delay':     osAnimationDelay,
            'animation-delay':          osAnimationDelay
        });

        var osTrigger = ( trigger ) ? trigger : osElement;

        osTrigger.waypoint(function() {
            osElement.addClass('animated').addClass(osAnimationClass);
        },{
            triggerOnce: true,
            offset: '70%'
        });
    });
}

onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );

//analityc
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-57960909-1', 'auto');
ga('send', 'pageview');

//addroll
adroll_adv_id = "4NTIYRSA65FPXG2PPH27B2";
adroll_pix_id = "DHIYUTVXPFAMHEH6G2GNLB";
/* OPTIONAL: provide email to improve user identification */
/* adroll_email = "username@example.com"; */
(function () {
    var _onload = function(){
        if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
        if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
        var scr = document.createElement("script");
        var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
        scr.setAttribute('async', 'true');
        scr.type = "text/javascript";
        scr.src = host + "/j/roundtrip.js";
        ((document.getElementsByTagName('head') || [null])[0] ||
            document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
    };
    if (window.addEventListener) {window.addEventListener('load', _onload, false);}
    else {window.attachEvent('onload', _onload)}
}());

//olark
/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
    f[z]=function(){
        (a.s=a.s||[]).push(arguments)};var a=f[z]._={
    },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
        f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
        0:+new Date};a.P=function(u){
        a.p[u]=new Date-a.p[0]};function s(){
        a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
        hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
        return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
        b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
        b.contentWindow[g].open()}catch(w){
        c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
        var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
        b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
    loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8407-174-10-8084');/*]]>*/
function startOlark() {
    olark('api.box.expand');
}

function CrearEnlace(url) {
    location.href=url;
}



$('#carouselExample').on('slide.bs.carousel', function (e) {


    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


$('#carouselExample').carousel({
    interval: 2000
});
