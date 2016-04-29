			$(document).ready(function(e) {
                var controller = new ScrollMagic();
				var scene = new ScrollScene({triggerElement:"#title1"}).triggerHook("onEnter").setTween(TweenMax.to("#title1",2,{left:"0"})).addTo(controller);


                var controller = new ScrollMagic();
				var scene = new ScrollScene({triggerElement:"#vision,#mission,#located",offset:100,reverse:false}).triggerHook("onEnter").setTween(TweenMax.to("#vision,#mission,#located",2,{left:"0"})).addTo(controller);


                var controller = new ScrollMagic();
				var scene = new ScrollScene({triggerElement:".members",offset:180,reverse:false}).triggerHook("onEnter").setTween(TweenLite.from(".members", 1, {rotationY:90, scaleX:0.1, z:-100})).addTo(controller);


                var controller = new ScrollMagic();
				var scene = new ScrollScene({triggerElement:".members-again",offset:50,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".members-again", 1, {scale:1.5, rotationY:45, x:10, y:10, z:-100})).addTo(controller);
				var scene = new ScrollScene({triggerElement:".members-again1",offset:51,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".members-again1", 1, {scale:1.5, rotationY:45, x:10, y:10, z:-100})).addTo(controller);
				var scene = new ScrollScene({triggerElement:".members-again2",offset:52,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".members-again2", 1, {scale:1.5, rotationY:45, x:10, y:10, z:-100})).addTo(controller);


                var controller = new ScrollMagic();
				var scene = new ScrollScene({triggerElement:".rotateme1",offset:150,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".rotateme1", 1, {rotation:"-170_short", rotationX:"-=30_cw", rotationY:"1.5rad_ccw"})).addTo(controller);
				var scene = new ScrollScene({triggerElement:".rotateme2",offset:150,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".rotateme2", 1.2, {rotation:"-170_short", rotationX:"-=30_cw", rotationY:"1.5rad_ccw"})).addTo(controller);
				var scene = new ScrollScene({triggerElement:".rotateme3",offset:150,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".rotateme3", 1.4, {rotation:"-170_short", rotationX:"-=30_cw", rotationY:"1.5rad_ccw"})).addTo(controller);
				var scene = new ScrollScene({triggerElement:".rotateme4",offset:100,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".rotateme4", 1.6, {rotation:"-170_short", rotationX:"-=30_cw", rotationY:"1.5rad_ccw"})).addTo(controller);
				var scene = new ScrollScene({triggerElement:".rotateme5",offset:100,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".rotateme5", 1.8, {rotation:"-170_short", rotationX:"-=30_cw", rotationY:"1.5rad_ccw"})).addTo(controller);
				var scene = new ScrollScene({triggerElement:".rotateme6",offset:100,reverse:true}).triggerHook("onEnter").setTween(TweenLite.from(".rotateme6", 2.0, {rotation:"-170_short", rotationX:"-=30_cw", rotationY:"1.5rad_ccw"})).addTo(controller);
				
				});
