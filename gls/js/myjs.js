// JavaScript Document
$(document).ready(function(e) {
    $(".klogin").click(function(){
		$("#popup").hide().removeClass('animated zoomOutDown');
		$("#popup").show().addClass('animated zoomInDown');
		});

$("#popup").click(function(e)
{
    e.stopPropagation(); 
})

$(".chintan").click(function(){
		$(".check").hide().removeClass('animated zoomInDown');
		$("#popup").show().addClass('animated zoomOutDown');
	});
});
			$(document).ready(function(e) {
                var controller = new ScrollMagic();
					var scene1 = new ScrollScene({triggerElement:"#parallax1",triggerHook:"onLeave",offset:0,duration:5300}).triggerHook("onLeave").setTween(TweenMax.to("#car",1,{top:"100%"})).addTo(controller);
            });

			$(document).ready(function(e) {
                $(".tree").fadeIn(2000);
            });
$(document).ready(function(e) {
 TweenMax.staggerTo(".box", 1, {rotation:360, y:10}, 0.5);   
});

			$(document).ready(function(e) {
                var controller = new ScrollMagic();
					var scene1 = new ScrollScene({triggerElement:"#parallax4"}).triggerHook("onLeave").setTween(TweenMax.to("#moon",2,{top:"5%"})).addTo(controller);
            });
			
						$(document).ready(function(e) {
                var controller = new ScrollMagic();
					var scene2 = new ScrollScene({triggerElement:"#parallax1"}).triggerHook("onLeave").setTween(TweenMax.to("#multi",1,{top:"33%"})).addTo(controller);
            });
			
			$(document).ready(function(e) {
                var controller = new ScrollMagic();
					var scene2 = new ScrollScene({triggerElement:"#parallax1"}).triggerHook("onLeave").setTween(TweenMax.to("#true_false",1.5,{top:"34%"})).addTo(controller);
            });
			
$(document).ready(function(e) {
					 var controller = new ScrollMagic({reverse:true});
						var scene3 = new ScrollScene({triggerElement:"#parallax2"}).triggerHook("center").setTween(TweenMax.to("#popup_drop",1,{top:"24%"})).addTo(controller);
						var scene4 = new ScrollScene({triggerElement:"#parallax2"}).triggerHook("center").setTween(TweenMax.to("#popup_drop1",1.5,{top:"26%"})).addTo(controller);
						var scene5 = new ScrollScene({triggerElement:"#parallax2"}).triggerHook("center").setTween(TweenMax.to("#popup_drop2",2,{top:"28%"})).addTo(controller);
                });
				
$(document).ready(function($) {
				// init controller
				var controller = new ScrollMagic({globalSceneOptions: {triggerHook: "onEnter", duration:$(window).height()*1}});

				// build scenes
				new ScrollScene({triggerElement: "#parallax1",offset:$(window).height()*1})
								.setTween(TweenMax.from("#parallax1 > div", 1, {top: "-30%", ease: Linear.easeNone}))
								.addTo(controller);
				new ScrollScene({triggerElement: "#parallax2",offset:$(window).height()*1})
								.setTween(TweenMax.from("#parallax2 > div", 1, {top: "-30%", ease: Linear.easeNone}))
								.addTo(controller);
				new ScrollScene({triggerxElement: "#parallax3" ,offset:$(window).height()*1})
								.setTween(TweenMax.from("#parallax3 > div", 1, {top: "-30%", ease: Linear.easeNone}))
								.addTo(controller);
				new scrollScence({triggerElement:"#parallax4" ,offset:$(window).height()*1})
								.setTween(TweenMax.from("#parallax4 > div", 1 ,{top: "-30%" , ease: Liner.easeNone}))	
								.addTo(controller);
			});
