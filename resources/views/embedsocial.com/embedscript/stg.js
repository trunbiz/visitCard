!function(t,e){"use strict";var i="addEventListener",o="getElementsByClassName",n="createElement",s="classList",d="appendChild",l="dataset",a="embed-lightbox-iframe",h="embed-lightbox-is-loaded",r="embed-lightbox-is-opened",c="embed-lightbox-is-showing",m=function(t,i,n){var s=n||{};this.trigger=t,this.elemRef=i,this.rate=s.rate||500,this.el=e[o](a)[0]||"",this.body=this.el?this.el[o]("embed-lightbox-body")[0]:"",this.content=this.el?this.el[o]("embed-lightbox-content")[0]:"",this.href=t[l].src||"",this.paddingBottom=t[l].paddingBottom||"",this.onOpened=s.onOpened,this.onIframeLoaded=s.onIframeLoaded,this.onLoaded=s.onLoaded,this.onCreated=s.onCreated,this.init()};m.prototype.init=function(){var t=this;this.el||this.create();var e,o,n,s,d,l,a=(e=function(e){e.preventDefault(),t.open()},o=this.rate,function(){d=this,s=[].slice.call(arguments,0),l=new Date;var t=function(){var i=new Date-l;i<o?n=setTimeout(t,o-i):(n=null,e.apply(d,s))};n||(n=setTimeout(t,o))});this.trigger[i]("click",a)},m.prototype.create=function(){var t=this,o=e[n]("div");this.el=e[n]("div"),this.content=e[n]("div"),this.body=e[n]("div"),this.el[s].add(a),o[s].add("embed-lightbox-backdrop"),this.content[s].add("embed-lightbox-content"),this.body[s].add("embed-lightbox-body"),this.el[d](o),this.content[d](this.body),this.contentHolder=e[n]("div"),this.contentHolder[s].add("embed-lightbox-content-holder"),this.contentHolder[d](this.content),this.el[d](this.contentHolder),e.body[d](this.el),o[i]("click",function(){t.close()});var l=function(){t.isOpen()||(t.el[s].remove(c),t.body.innerHTML="")};this.el[i]("transitionend",l,!1),this.el[i]("webkitTransitionEnd",l,!1),this.el[i]("mozTransitionEnd",l,!1),this.el[i]("msTransitionEnd",l,!1),this.callCallback(this.onCreated,this)},m.prototype.loadIframe=function(){var t,i,o=this;this.iframeId=a+"-"+this.elemRef,this.body.innerHTML='<iframe src="'+this.href+'" name="'+this.iframeId+'" id="'+this.iframeId+'" onload="this.style.opacity=1;" style="opacity:0;border:none;" scrolling="no" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" height="166" frameborder="no"></iframe>',t=this.iframeId,i=this.body,e.getElementById(t).onload=function(){this.style.opacity=1,i[s].add(h),o.callCallback(o.onIframeLoaded,o),o.callCallback(o.onLoaded,o)}},m.prototype.open=function(){this.loadIframe(),this.paddingBottom?this.content.style.paddingBottom=this.paddingBottom:this.content.removeAttribute("style"),this.el[s].add(c),this.el[s].add(r),this.callCallback(this.onOpened,this)},m.prototype.close=function(){this.el[s].remove(r),this.body[s].remove(h)},m.prototype.isOpen=function(){return this.el[s].contains(r)},m.prototype.callCallback=function(t,e){"function"==typeof t&&t.bind(this)(e)},t.EmbedSocialIframeLightbox=m}("undefined"!=typeof window?window:this,document);if(!document.getElementById("EmbedSocialIFrame")){var jsEmbed=document.createElement("script");jsEmbed.id="EmbedSocialIFrame",jsEmbed.src="https://embedsocial.com/cdn/iframe.js",document.getElementsByTagName("body")[0].appendChild(jsEmbed)}if(!document.getElementById("EmbedSocialIFrameLightboxCSS")){var cssEmbed=document.createElement("link");cssEmbed.id="EmbedSocialIFrameLightboxCSS",cssEmbed.rel="stylesheet",cssEmbed.href="https://embedsocial.com/cdn/iframe-lightbox.min.css?v=2.0";document.getElementsByTagName("head")[0].appendChild(cssEmbed)}EMBEDSOCIALSTORYGALLERY={getEmbedData:function(galleryRef,galleryDiv){var iframes=galleryDiv.getElementsByTagName("iframe");if(iframes.length<=0){var ifrm=document.createElement("iframe");var iframeId="embedIFrame_"+galleryRef+Math.random().toString(36).substring(7);var srcIfrm="https://embedsocial.com/api/pro_story_gallery/"+galleryRef;ifrm.setAttribute("src",srcIfrm);ifrm.setAttribute("id",iframeId);ifrm.setAttribute("class","embedsocial-iframe-gallery");ifrm.setAttribute("title","EmbedStories widget with ID: "+iframeId);ifrm.style.width="100%";ifrm.style.height="100%";ifrm.style.border="0";ifrm.setAttribute("scrolling","no");galleryDiv.appendChild(ifrm);EMBEDSOCIALSTORYGALLERY.initResizeFrame(galleryRef);setTimeout(EMBEDSOCIALSTORYGALLERY.initResizeFrame(galleryRef),250)}setTimeout(function(){for(i=0;i<iframes.length;i++){iframes[i].parentElement.classList.remove("embedsocial-widget-loading")}},2e3)},initResizeFrame:function(galleryRef){if(document.getElementById("EmbedSocialIFrame")&&"function"===typeof iFrameResize){iFrameResize({messageCallback:function(messageData){if(messageData.message.action==="create"){EMBEDSOCIALSTORYGALLERY.createLightBox(messageData.message)}if(messageData.message.hasOwnProperty("navigationCode")){EMBEDSOCIALSTORYGALLERY.navigationLightBox(galleryRef,messageData.message.navigationCode)}if(messageData.message.action==="open_link_in_new_tab"){EMBEDSOCIALSTORYGALLERY.openLinkInNewTab(messageData.message.link)}},resizedCallback:function(messageData){if(messageData.type==="animationstart"||messageData.type==="init"){if("function"===typeof embedsocialStoryLoaded){embedsocialStoryLoaded(messageData.iframe)}}messageData.iframe.iFrameResizer.sendMessage({hasOpenLinkInNewTab:true});messageData.iframe.parentElement.classList.remove("embedsocial-widget-loading")}},".embedsocial-iframe-gallery");iFrameResize({messageCallback:function(messageData){if(messageData.message.action==="close"){EMBEDSOCIALSTORYGALLERY.closeLightBox(messageData.message.galleryRef)}if(messageData.message.action==="open_link_in_new_tab"){EMBEDSOCIALSTORYGALLERY.openLinkInNewTab(messageData.message.link)}},resizedCallback:function(messageData){messageData.iframe.iFrameResizer.sendMessage({hasOpenLinkInNewTab:true})},sizeHeight:false,sizeWidth:false},"#embed-lightbox-iframe-"+galleryRef)}else{setTimeout(function(){EMBEDSOCIALSTORYGALLERY.initResizeFrame(galleryRef)},200)}},createLightBox:function(data){if(!document.getElementById("embed-lightbox-"+data.galleryRef)){var divLightbox=document.createElement("a");divLightbox.setAttribute("class","embedsocail-iframe-lightbox-link");divLightbox.setAttribute("id","embed-lightbox-"+data.galleryRef);divLightbox.setAttribute("data-src","https://embedsocial.com/api/pro_story/"+data.galleryRef+"/"+data.index);document.body.appendChild(divLightbox)}else{divLightbox=document.getElementById("embed-lightbox-"+data.galleryRef);divLightbox.setAttribute("data-src","https://embedsocial.com/api/pro_story/"+data.galleryRef+"/"+data.index);divLightbox.innerHTML=""}[].forEach.call(document.getElementsByClassName("embedsocail-iframe-lightbox-link"),function(el){el.lightbox=new EmbedSocialIframeLightbox(el,data.galleryRef,{onLoaded:function(iframe){EMBEDSOCIALSTORYGALLERY.initResizeFrame(data.galleryRef);function lightBoxIframeResize(){var iframeEl=document.getElementById("embed-lightbox-iframe-"+data.galleryRef);if(iframeEl&&"object"===typeof iframeEl){var windowHeight=window.innerHeight||document.documentElement.clientHeight;var windowWidth=window.innerWidth||document.documentElement.clientWidth;if(windowHeight>1800){windowHeight=1800}if(windowWidth<768){iframeEl.style.height=parseInt(windowHeight)+"px"}else{iframeEl.style.height=parseInt(windowHeight*.95)+"px"}}else{setTimeout(lightBoxIframeResize,200)}}lightBoxIframeResize();window.addEventListener("resize",lightBoxIframeResize)}})});[].forEach.call(document.getElementsByClassName("embed-lightbox-backdrop"),function(el){el.className="embed-lightbox-backdrop embed-lightbox-"+data.layoutType});EMBEDSOCIALSTORYGALLERY.openLightBox(data.galleryRef)},openLightBox:function(galleryRef){document.getElementById("embed-lightbox-"+galleryRef).click();document.getElementsByClassName("embed-lightbox-body")[0].addEventListener("click",function(event){var targetElement=event.target||event.srcElement;if(targetElement.classList.contains("embed-lightbox-is-loaded")){EMBEDSOCIALSTORYGALLERY.closeLightBox(galleryRef)}});window.addEventListener("keydown",function(e){var e=window.event?window.event:e;if(document.getElementById("embed-lightbox-iframe-"+galleryRef)){var keys=[37,39,27];if(keys.indexOf(e.keyCode)>-1){EMBEDSOCIALSTORYGALLERY.navigationLightBox(galleryRef,e.keyCode)}}},true)},closeLightBox:function(galleryRef){document.getElementsByClassName("embed-lightbox-backdrop")[0].click();[].forEach.call(document.getElementsByClassName("embed-lightbox-backdrop"),function(el){el.className="embed-lightbox-backdrop"})},navigationLightBox:function(galleryRef,code){var iframe=document.getElementById("embed-lightbox-iframe-"+galleryRef);if(iframe){iframe.iFrameResizer.sendMessage({navigationCode:code})}},openLinkInNewTab:function(link){window.open(link)}};if("IntersectionObserver"in window){function callVisible(e,t){for(i in e)e[i].isIntersecting&&EMBEDSOCIALSTORYGALLERY.getEmbedData(e[i].target.getAttribute("data-ref"),e[i].target)}}function standardLoad(e){for(i=0;i<e.length;i++){var t=e[i],o=t.getAttribute("data-ref");t.classList.add("embedsocial-widget-loading");if("yes"===t.getAttribute("data-lazyload")&&"IntersectionObserver"in window)new IntersectionObserver(callVisible,{}).observe(t);else EMBEDSOCIALSTORYGALLERY.getEmbedData(o,t)}}var er=document.getElementsByClassName("embedsocial-story-gallery");er.length>0?standardLoad(er):window.addEventListener("load",function(){standardLoad(document.getElementsByClassName("embedsocial-story-gallery"))});
