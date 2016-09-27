$(function() {
	
	// 	parallax	
/*	$(window).scroll(function() {
		var scrollTop = $(window).scrollTop(),
	    	star_scroll  = -scrollTop/40,
    		scrollAnim = -scrollTop*2,
    		scrollpickUp  = -scrollTop*4;

    	$(".anim").css({"margin-top": scrollAnim});
    	$("#pickUpServiceArea").css({"margin-top": scrollpickUp - 50});
    });*/
    	
//	$('.anim').each(function(){
	
/*	$('.animeEleMessage1').textillate({
	
		// ƒ‹[ƒv‚ÌƒIƒ“ƒIƒtAfalse‚Ìê‡Aout‚Í”­“®‚µ‚È‚¢
		loop: true,
 
		// ƒeƒLƒXƒg‚ª’u‚«Š·‚¦‚ç‚ê‚é‚Ü‚Å‚Ì•\Ž¦ŽžŠÔ
		minDisplayTime: 3500,
 
		// ’x‰„ŽžŠÔ
		initialDelay: 0,
 
		// ƒAƒjƒ[ƒVƒ‡ƒ“‚ªŽ©“®“I‚ÉƒXƒ^[ƒg‚·‚é‚©‚Ç‚¤‚©
		autoStart: true,
 
		// ƒtƒF[ƒhƒCƒ“‚ÌƒGƒtƒFƒNƒg‚ÌÚ×Ý’è
		in: {
			// ƒGƒtƒFƒNƒg‚Ì–¼‘Oianimate.css‚ð‚²ŽQÆ‰º‚³‚¢j
			effect: 'rollIn',
 
			// ’x‰„ŽžŠÔ‚ÌŽw”
			delayScale: 1.0,
 
			// •¶Žš‚²‚Æ‚Ì’x‰„ŽžŠÔ
			delay: 50,
 
			// true‚É‚·‚é‚±‚Æ‚ÅƒAƒjƒ[ƒVƒ‡ƒ“‚ð‚·‚×‚Ä‚Ì•¶Žš‚É“¯Žž‚É“K—p‚³‚ê‚é
			sync: false,
 
			// true‚É‚·‚é‚±‚Æ‚Å•¶Žš‚ð‡”Ô‚É‚Å‚Í‚È‚­Aƒ‰ƒ“ƒ_ƒ€‚É“ü‚Á‚Ä‚­‚é‚æ‚¤‚É‚·‚é
			// (’Fsync‚ªtrue‚Ìê‡‚Í–³Œø‚É‚È‚é)
			shuffle: true
		},

		// ƒtƒF[ƒhƒAƒEƒg‚ÌƒGƒtƒFƒNƒg‚ÌÚ×Ý’è(“¯ã)
		out: {
				effect: 'hinge',
				delayScale: 1.0,
				delay: 50,
				sync: false,
				shuffle: true,
			}
		});
		*/
		/*========================
	           DOM Elements
		========================*/
		var imgEleH1 = $('#animeEle'),
			imgEleTower = $('#animeTower'),
			imgEleTunder = $('#animeEleTunder'),
			imgEleDenchu = $('#animeDenchu'),
			imgEleMessage = $('#animeEleMessage'),
			imgNetH1 = $('#animeNet'),
			imgNetPc = $('#animePc'),
			imgNetMobile = $('#animeMobile'),
			imgNetCloud = $('#animeCloud'),
			imganimeNetMessage = $('#animeNetMessage'),
			imgHumH1 = $('#animeHum'),
			imgHumSolution = $('#animeSolution'),
			imgHumCom = $('#animeCom'),
			imganimeHumMessage = $('#animeHumMessage'),
			imgWebH1 = $('#animeWeb'),
			imganimeWebMessage = $('#animeWebMessage'),
			imgWebChrome = $('#animeChrome'),
			imgWebIE = $('#animeIE'),
			imgWebFirefox = $('#animeFirefox');
		/*var concept_2 = $('#anim_concept_2'),
		var text_1 = $('#anim_text_1'),
		var text_2 = $('#anim_text_2'),
		var text_3 = $('#anim_text_3'),
		var text_bg_1 = $('#text_bg_1'),
		var text_bg_2 = $('#text_bg_2');
		var text_bg_3 = $('#text_bg_3');*/
	 
	    /*========================
	          Main Function
	    ========================*/
	    function main_animation () {
	 
	        // ƒAƒjƒ[ƒVƒ‡ƒ“‚ð”z—ñ‚É‚·‚é
	        // animation... ƒAƒjƒ[ƒVƒ‡ƒ“‚ÌŠÖ”–¼
	        // interval...  ƒAƒjƒ[ƒVƒ‡ƒ“ŽÀs‚©‚çAŽŸ‚ÌƒAƒjƒ[ƒVƒ‡ƒ“‚ªŽÀs‚³‚ê‚é‚Ü‚Å‚ÌŽžŠÔ·iƒ~ƒŠ•bj
			var timeline = [
				{animation:imgEleAnimationStart, interval:2500},
				{animation:imgEleMessageAnimationStart, interval:4000},
				{animation:imgEleAnimationEnd, interval:500},
				{animation:imgNetAnimationStart, interval:2500},
				{animation:imganimeNetMessageStart, interval:4000},
				{animation:imgNetAnimationEnd, interval:500}, 
				{animation:imgHumAnimationStart, interval:2500},
				{animation:imganimeHumMessageStart, interval:4000},
				{animation:imgHumAnimationEnd, interval:500},
				{animation:imgWebAnimationStart, interval:2500},
				{animation:imganimeWebMessageStart, interval:4000},
				{animation:imgWebAnimationEnd, interval:500},
				{animation:imgInit, interval:500} /*,
				{animation:imgEleTowerAnimation, interval:500},
				{animation:imgEleTunderAnimation, interval:500},
				{animation:imgEleDenchuAnimation, interval:500},
	            {animation:show_bg_2, interval:1000},
	            {animation:show_text_2, interval:9000},
	            {animation:show_bg_3, interval:1000},
	            {animation:show_text_3, interval:5000}*/
			];
	 
			// Å‰‚ÌƒAƒjƒ[ƒVƒ‡ƒ“‚ªŽn‚Ü‚é‚Ü‚Å‚ÌŽžŠÔ
			var interval_sum = 100;
	 
			// ƒAƒjƒ[ƒVƒ‡ƒ“‚ðã‚©‚ç‡‚ÉŽÀs‚µ‚Ä‚¢‚­
			// interval‚Ì’l‚Í‚Ç‚ñ‚Ç‚ñ‰ÁŽZ‚³‚ê‚ÄA
			// setTimeout()ŠÖ”‚É‚æ‚èŽžŠÔ‚ð‚¸‚ç‚µ‚È‚ª‚çŽÀs‚³‚ê‚é
			var len = timeline.length;
			for(var i=0; i<len; i++){
			
				setTimeout(timeline[i].animation, interval_sum);
				interval_sum += timeline[i].interval;
			}
		}
		main_animation();
	 
	    /*========================
	       Animation Functions
	    ========================*/
	    // 電気通信事業 start
		function imgEleAnimationStart () {
			imgEleH1.animate({
				top: "+=200px",
				opacity: 100
			}, 1000);

			imgEleTower.animate({
				left: "+=220px",
				top: "-=50px",
				opacity: 100
			}, 1000);
			
			imgEleTunder.animate({
				top: "-=30px",
				opacity: 100
			}, 1000);
			
			imgEleDenchu.animate({
				left: "+=290px",
				opacity: 100
			}, 1000);
		}
		
		function imgEleMessageAnimationStart(){
			imgEleMessage.animate({
				top: "-=30px",
				opacity: 100
			}, 3000);
		}
		
		function imgEleAnimationEnd () {
			imgEleH1.animate({
				left: "+=220px",
				top: "+=50px",
				opacity: 0
			}, 1000);

			imgEleTower.animate({
				left: "+=220px",
				top: "+=50px",
				opacity: 0
			}, 1000);
			
			imgEleTunder.animate({
				left: "+=220px",
				opacity: 0
			}, 1000);
			
			imgEleDenchu.animate({
				left: "+=290px",
				opacity: 0
			}, 1000);
			imgEleMessage.animate({
				left: "+=220",
				opacity: 0
			}, 1000);
		}
	    // 電気通信事業 end
		
	    // ネットワークソリューション start
		function imgNetAnimationStart () {
			imgNetH1.animate({
				top: "+=200px",
				opacity: 130
			}, 1000);
			
			imgNetPc.animate({
				top: "-=200px",
				opacity: 130
			}, 1000);
			
			imgNetMobile.animate({
				top: "-=200px",
				opacity: 130
			}, 1000);
			
			imgNetCloud.animate({
				top: "+=50px",
				opacity: 130
			}, 1000);
		}
		
		function imganimeNetMessageStart(){
			imganimeNetMessage.animate({
				top: "-=30px",
				opacity: 100
			}, 3000);
		}
		
		function imgNetAnimationEnd () {
			imgNetH1.animate({
				left: "+=220px",
				top: "+=50px",
				opacity: 0
			}, 1000);

			imgNetPc.animate({
				left: "+=220px",
				top: "+=50px",
				opacity: 0
			}, 1000);
			
			imgNetMobile.animate({
				left: "+=220px",
				opacity: 0
			}, 1000);
			
			imgNetCloud.animate({
				left: "+=290px",
				opacity: 0
			}, 1000);
			imganimeNetMessage.animate({
				left: "+=220",
				opacity: 0
			}, 1000);
		}
	    // ネットワークソリューション end
	    
	    // 人材ソリューション start
		function imgHumAnimationStart () {
			imgHumH1.animate({
				top: "+=200px",
				opacity: 100
			}, 1000);
			
			imgHumSolution.animate({
				left: "+=380px",
				opacity: 100
			}, 1000);
			
			imgHumCom.animate({
				left: "+=150px",
				top: "-=50px",
				opacity: 100
			}, 1000);
		}
				
		function imganimeHumMessageStart(){
			imganimeHumMessage.animate({
				top: "-=30px",
				opacity: 100
			}, 3000);
		}
		
		function imgHumAnimationEnd () {
			imgHumH1.animate({
				left: "+=200px",
				top: "+=50px",
				opacity: 0
			}, 1000);
			
			
			imgHumSolution.animate({
				left: "+=200px",
				top: "+=50px",
				opacity: 0
			}, 1000);
			
			
			imgHumCom.animate({
				left: "+=200px",
				top: "+=50px",
				opacity: 0
			}, 1000);

			imganimeHumMessage.animate({
				left: "+=200px",
				top: "+=50px",
				opacity: 0
			}, 1000);
		}
		// 人材ソリューション end
	    // Webサイト作成 start
		function imgWebAnimationStart () {
			imgWebH1.animate({
				top: "+=200px",
				opacity: 100
			}, 1000);
			
			imgWebChrome.animate({
				top: "+=50px",
				opacity: 100
			}, 1000);
			
			imgWebIE.animate({
				top: "-=200px",
				opacity: 100
			}, 1000);
			
			imgWebFirefox.animate({
				top: "-=200px",
				opacity: 100
			}, 1000);
		}
		function imganimeWebMessageStart(){
			imganimeWebMessage.animate({
				top: "-=30px",
				opacity: 100
			}, 3000);
		}
		
		function imgWebAnimationEnd () {
			imgWebH1.animate({
				left: "+=220px",
				opacity: 0
			}, 1000);
			
			imgWebChrome.animate({
				left: "+=220px",
				opacity: 0
			}, 1000);
			
			imgWebIE.animate({
				left: "+=220px",
				opacity: 0
			}, 1000);
			
			imgWebFirefox.animate({
				left: "+=220px",
				opacity: 0
			}, 1000);
			imganimeWebMessage.animate({
				left: "+=220",
				opacity: 0
			}, 1000);
		}
	    // Webサイト作成 start
		
		function imgInit (){
			imgEleH1.animate({
				left: "-=220px",
				top: "-=250px"
			});
		
			imgEleTower.animate({
				left: "-=440px"
			});
			
			imgEleTunder.animate({
				top: "+=30px",
				left: "-=220px"
			});
		
			imgEleDenchu.animate({
				left: "-=580px"
  			});
  			
  			
			imgEleMessage.animate({
				top: "+=30px",
				left: "-=220px"
			});
			
			imgNetH1.animate({
				left: "-=220px",
				top: "-=250px"
  			});
  			
			imgNetPc.animate({
				left: "-=220px",
				top: "+=150px"
  			});
  			
			imgNetMobile.animate({
				left: "-=220px",
				top: "+=200px"
  			});
  			
			imgNetCloud.animate({
				left: "-=290px",
				top: "-=50px"
  			});
  			
			imganimeNetMessage.animate({
				left: "-=220",
				top: "+=30px"
			});
  			
			imgHumH1.animate({
				left: "-=200px",
				top: "-=250px"
			});
			
			
			imgHumSolution.animate({
				left: "-=580px",
				top: "-=50px"
			});
			
			imgHumCom.animate({
				left: "-=350px"
			});
				
			imganimeHumMessage.animate({
				left: "-=200px",
				top: "-=20px"
			});
  			
  			
			imgWebH1.animate({
				top: "-=200px",
				left: "-=220px"
			});
			
			imgWebChrome.animate({
				top: "-=50px",
				left: "-=220px"
			});
			
			imgWebIE.animate({
				top: "+=200px",
				left: "-=220px"
			});
  			
			imgWebFirefox.animate({
				top: "+=200px",
				left: "-=220px"
			});

			imganimeWebMessage.animate({
				left: "-=220",
				top: "+=30px"
			}, function() {
				main_animation();
  			});
		}
//	});
    // ƒqƒ…[ƒ}ƒ“ƒ\ƒŠƒ…[ƒVƒ‡ƒ“ƒGƒŠƒA end
    /* ’†—ª */
 
/*    function show_text_3(){
        text_2.fadeTo(1500, 0);
        text_3.fadeTo(3000,1);
        text_bg_2.fadeTo(1500, 0);
        text_bg_3.fadeTo(3000,.6);
    }*/

    $(window).scroll(function() {
	    var scrollTop = $(window).scrollTop();

    	if(scrollTop > 500){
    		$(".archives .tpickUpServiseH1").html(randomTextAnimation2("電気通信事業",500,33));
		}


		function randomTextAnimation2(targetText,duration,interval){
			var randomText = "";
			var randomFix=Math.floor(3*Math.random());
			var textCount = 1;
			var characterPool ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			var length = targetText.length;
			for(i=0;i<textCount+randomFix;i++){
				if(i>=Math.floor(textCount)){
				var r = Math.floor(26*Math.random());
				randomText += characterPool.charAt(r);
				}else{
					randomText += targetText.charAt(i);
				}
			}
			var step=duration/interval;
			textCount+=length/step;
			if(textCount>=length){
				textCount=length;
			}
				return randomText;  
		}
	});
});
