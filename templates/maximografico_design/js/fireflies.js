/* Copyright 2016    MAXIMOGRAFICO graphic and web design    (http://maximografico.com) */

!function(t){function i(){n.clearRect(0,0,s,r);for(var t=0;t<d.length;t++)d[t].fade(),d[t].move(),d[t].draw()}function h(){this.s={ttl:8e3,xmax:5,ymax:2,rmax:10,rt:1,xdef:960,ydef:540,xdrift:4,ydrift:4,random:!0,blink:!0},this.reset=function(){this.x=this.s.random?s*Math.random():this.s.xdef,this.y=this.s.random?r*Math.random():this.s.ydef,this.r=(this.s.rmax-1)*Math.random()+1,this.dx=Math.random()*this.s.xmax*(Math.random()<.5?-1:1),this.dy=Math.random()*this.s.ymax*(Math.random()<.5?-1:1),this.hl=this.s.ttl/l*(this.r/this.s.rmax),this.rt=Math.random()*this.hl,this.s.rt=Math.random()+1,this.stop=.2*Math.random()+.4,this.s.xdrift*=Math.random()*(Math.random()<.5?-1:1),this.s.ydrift*=Math.random()*(Math.random()<.5?-1:1)},this.fade=function(){this.rt+=this.s.rt},this.draw=function(){this.s.blink&&(this.rt<=0||this.rt>=this.hl)?this.s.rt=-1*this.s.rt:this.rt>=this.hl&&this.reset();var t=1-this.rt/this.hl;n.beginPath(),n.arc(this.x,this.y,this.r,0,2*Math.PI,!0),n.closePath();var i=this.r*t;e=n.createRadialGradient(this.x,this.y,0,this.x,this.y,0>=i?1:i),e.addColorStop(0,"rgba(255,255,255,"+t+")"),e.addColorStop(this.stop,"rgba(238,180,28,"+.2*t+")"),e.addColorStop(1,"rgba(238,180,28,0)"),n.fillStyle=e,n.fill()},this.move=function(){this.x+=this.rt/this.hl*this.dx,this.y+=this.rt/this.hl*this.dy,(this.x>s||this.x<0)&&(this.dx*=-1),(this.y>r||this.y<0)&&(this.dy*=-1)},this.getX=function(){return this.x},this.getY=function(){return this.y}}var s,r,a,n,e,o,d=[],l=50,a=document.createElement("canvas"),n=a.getContext("2d");a.style.position="absolute",a.style.top="15%",a.style.left="25%",t(function(){o=t("body>.uk-block:first"),o.length||(o=t("body")),o.prepend(a),s=Math.ceil(window.innerWidth/2),r=Math.ceil(window.innerHeight/2),t(a).attr({width:s,height:r}).css({width:s,height:r});for(var n=0;50>n;n++)d[n]=new h,d[n].reset();setInterval(i,l),setInterval(i,rint2)})}(jQuery);