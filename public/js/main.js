// 메인페이지 JS

/*///////////////////////////////////////////////////
	전역변수 구역
*////////////////////////////////////////////////////
	var autocall;

$(function(){ ///////////////// jQB ////////////////////


/////////////////////////////////////////////////////
	
	autocall = setInterval(rollImg,5000);
	banAction();
	

	
});///////////////// jQB ////////////////////

var bantxt = {
	"roll r0 active" : '<p class="bantxt bantxt1">진정한 성공의 의미를 아는 당신</p><p class="bantxt bantxt2">당신의 행복에 어바웃비가 함께 합니다</p>',
	"roll r1 active" : '<p class="bantxt bantxt1">남편의 마음으로, 아내의 마음으로</p><p class="bantxt bantxt2">어바웃비가 당신의 인생을 응원합니다</p>',
	"roll r2 active" : '<p class="bantxt bantxt1">나보다 남을 생각하는 당신에게</p><p class="bantxt bantxt2">기업정신을 배웁니다</p>'
};


/*///////////////////////////////////////////////////////////
	함수명: banAction
	기능: 해당 순서의 배너에 class를 부여한 후 텍스트 애니메이션
*///////////////////////////////////////////////////////////

function banAction(){
	$(".bantxt, .bantxt1, .bantxt2").remove();

	var banclass = $(".rollArea>div").eq(0).attr("class");
	// console.log("현재배너 class는?: "+banclass);
	// console.log("현재배너 text는?: "+bantxt[banclass]);

	$(".rollArea>div>div").eq(0).append(bantxt[banclass]);
	$(".bantxt1").animate({top: "35%",opacity:1},1000,"easeOutSine");//아래서 위로 등장!
	$(".bantxt2").delay(200).animate({top: "47%",opacity:1},1000,"easeOutSine");//아래서 위로 등장!

}// banAction 함수 ////////////////////
//////////////////////////////////////


/*/////////////////////////////////////////////////////
	함수명: rollImg
	기능: 이미지를 순서대로 넘겨서 fade효과를 준다.
*//////////////////////////////////////////////////////
	
function rollImg(){
	var froll = $(".rollArea>div").first();
	var nroll = froll.next();

	nroll.hide().addClass("active").fadeIn(1000,function(){
		$(".rollArea").append(froll);
		froll.removeClass("active");
		// 배너 글자 등장 함수 최초 호출
		banAction();
	});// fadeIn //
		
}// rollImg 함수 ////////////////////
////////////////////////////////////
	