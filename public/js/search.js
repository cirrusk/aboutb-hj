// 파라미터값
var param = location.href;
console.log("url"+param);

var loc = location.href;
console.log("loc"+loc);

$(function(){ //////////////////// jQB ////////////////////

	// chgTab();

	// list 페이지로 이동했을 때 물건종류 보이게 하기
	if(param == 'http://localhost:8080/www/codeigniter/index.php/search'){
		$(".mulgun").addClass('on');
		$(".mulgunBox").addClass('on');
	}

	// 검색하기 버튼
	$("#topSearchBtn").css({cursor:"pointer"});

	$(".input-PM").WanSpinner().css("border-color", "#2C3E50");

	// Select Box Plug-in
	$('select').prettyDropdown({
		// The default behavior is to move the selected item to the top. 
		// If you want the order of items to remain static, then set this to true.
		classic: false,

		// Custom class to customize the drop-down menu style.
		customClass: 'arrow',

		// Width
		width: 140,

		// Item height in pixels.
		height: 32,

		// The wait period (in milliseconds) before collapsing the drop-down menu after you hover off of it. 
		hoverIntent: 200,

		// The separator character to use for the list of selected items in a multi-select menu.
		multiDelimiter: '; ',

		// The maximum number of selected items to display in a multi-select menu before replacing it with a summary (e.g., "2/3 selected"). 
		// To display "0/3 selected" instead of "None selected", set this option to -1.
		multiVerbosity: 99,

		// The icon or symbol to mark that an item is selected. HTML is accepted
		selectedMarker: '&#10003;',

		// Callback
		afterLoad: function(){}
	});

	$(function() {
		
		$(".pips-slider")
		
		.slider({
			range: true,
			min: 0,
			max: 1000,
			values: [ 0, 1000 ],
			step: 100
			
		})
		
		.slider("pips", {
			first: "label",
			last: "label",
			rest: "pip",
			step: 1,
			labels: false,
			prefix: "",
			suffix: ""
			
		})
		.slider("float", {
			
			handle: true,
			pips: false,
			labels: false,
			prefix: "",
			suffix: ""
			
		});

	});

	var sViewsts = 0;

	$(".plusbtn").click(function(e) {
		e.preventDefault();
		// $(".etc").slideToggle(300);

		$(this).toggle(function(){
			$(this).text("－").stop();
		},function(){
			$(this).text("＋").stop();
		});// toggle //

		
	}); // click //

	$(function() {
		$("#show-background").toggle(function (){
			$("#content-area").animate({opacity: '0'}, 'slow')
			$("#show-background").text("Show Text")
			.stop();
		}, function(){
			$("#content-area").animate({opacity: '1'}, 'slow')
			$("#show-background").text("Show Background")
			.stop();
		});
	});

	$(".sangseView").click(function(e){
		e.preventDefault();
	// 	if(sViewsts = 0){
	// 		$("#searchContBox>div, .btnBox").fadeToggle(100);
	// 		$("#searchContBox>div").eq(idx).fadeToggle(100);	
	// 	}//if//
	// 	else if(sViewsts = 1){
	// 		$("#searchContBox>div, .btnBox").fadeToggle(100);
	// 		$("#searchContBox>div").eq(idx).fadeToggle(100);
	// 	}
		// chgTab();
	});// click //

	// 검색박스 메뉴 탭 클릭시 글자 변경
	$(".tabBox>ul>li").click(function(e){
		e.preventDefault();
		$(this).addClass('on').siblings().removeClass('on');
		
		// 탭 메뉴의 순번과 같은 컨텐츠 순번에 클래스 부여해서 보이게 하기
		var idx = $(this).index();
		$("#searchContBox>div").eq(idx).addClass('on').siblings().removeClass('on');

		chgTab();

	});// click //


	// 물건소재지 메뉴 탭 클릭시 글자 변경
	$(".sojaejiBtnBox>li").click(function(e){
		e.preventDefault();
		$(this).addClass('on').siblings().removeClass('on');

		// 탭 메뉴의 순번과 같은 컨텐츠 순번에 클래스 부여해서 보이게 하기
		var idx = $(this).index();
		$("#sojaejiContBox>ul").eq(idx).addClass('on').siblings().removeClass('on');

		chgTab();
	});// click //


	// 주거시설 체크박스
	$("#jugeo").change(function() {
		var chk = $(this).prop("checked");
		$(".jugeoChk").prop("checked",chk);
	});	// change //

	// 작은 체크박스 다 클릭시 큰 체크박스 체크 되게 하기 !
	$(".jugeoChk").change(function(){
		var chk = $(this).prop("checked");
		if(!chk){ // 체크박스가 false 일 때 !
			$(".jugeo>li.sangseChkBox input").prop("checked",false);
		} // if //
		else{
			var num = 0;
			$(".jugeoChk").each(function(idx,ele){
				var csts = $(this).prop("checked"); // true/false 여부 확인
				if(csts){num++;}
			}); // each //

			var chkNum = $(".jugeoChk").length;
			if(num === chkNum){
				$("#jugeo").prop('checked',true);
			}// if //
		} // else //
	});// change //

	// 상업/사무실 체크박스
	$("#sangup").change(function() {
		var chk = $(this).prop("checked");
		$(".sangupChk").prop("checked",chk);
	});	// chage //

	// 작은 체크박스 다 클릭시 큰 체크박스 체크 되게 하기 !
	$(".sangupChk").change(function(){
		var chk = $(this).prop("checked");
		if(!chk){ // 체크박스가 false 일 때 !
			$(".sangup>li.sangseChkBox input").prop("checked",false);
		} // if //
		else{
			var num = 0;
			$(".sangupChk").each(function(idx,ele){
				var csts = $(this).prop("checked"); // true/false 여부 확인
				if(csts){num++;}
			}); // each //

			var chkNum = $(".sangupChk").length;
			if(num === chkNum){
				$("#sangup").prop('checked',true);
			}// if //
		} // else //
	});// change //

	// 공장/창고 체크박스
	$("#gongchang").change(function() {
		var chk = $(this).prop("checked");
		$(".gongchangChk").prop("checked",chk);
	});	// chage //

	// 작은 체크박스 다 클릭시 큰 체크박스 체크 되게 하기 !
	$(".gongchangChk").change(function(){
		var chk = $(this).prop("checked");
		if(!chk){ // 체크박스가 false 일 때 !
			$(".gongjang>li.sangseChkBox input").prop("checked",false);
		} // if //
		else{
			var num = 0;
			$(".gongchangChk").each(function(idx,ele){
				var csts = $(this).prop("checked"); // true/false 여부 확인
				if(csts){num++;}
			}); // each //

			var chkNum = $(".gongchangChk").length;
			if(num === chkNum){
				$("#gongchang").prop('checked',true);
			}// if //
		} // else //
	});// change //

	// 토지 체크박스
	$("#toji").change(function() {
		var chk = $(this).prop("checked");
		$(".tojiChk").prop("checked",chk);
	});	// chage //

	// 작은 체크박스 다 클릭시 큰 체크박스 체크 되게 하기 !
	$(".tojiChk").change(function(){
		var chk = $(this).prop("checked");
		if(!chk){ // 체크박스가 false 일 때 !
			$(".toji>li.sangseChkBox input").prop("checked",false);
		} // if //
		else{
			var num = 0;
			$(".tojiChk").each(function(idx,ele){
				var csts = $(this).prop("checked"); // true/false 여부 확인
				if(csts){num++;}
			}); // each //

			var chkNum = $(".tojiChk").length;
			if(num === chkNum){
				$("#toji").prop('checked',true);
			}// if //
		} // else //
	});// change //

	// 토지 체크박스
	$("#etc").change(function() {
		var chk = $(this).prop("checked");
		$(".etcChk").prop("checked",chk);
	});	// chage //

	// 작은 체크박스 다 클릭시 큰 체크박스 체크 되게 하기 !
	$(".etcChk").change(function(){
		var chk = $(this).prop("checked");
		if(!chk){ // 체크박스가 false 일 때 !
			$(".etc>li.sangseChkBox input").prop("checked",false);
		} // if //
		else{
			var num = 0;
			$(".etcChk").each(function(idx,ele){
				var csts = $(this).prop("checked"); // true/false 여부 확인
				if(csts){num++;}
			}); // each //

			var chkNum = $(".etcChk").length;
			if(num === chkNum){
				$("#etc").prop('checked',true);
			}// if //
		} // else //
	});// change //

	// 특수물건 체크박스
	$("#allChk").change(function() {
		var chk = $(this).prop("checked");
		$(".specialmulChk").prop("checked",chk);
	});	// chage //

	// 작은 체크박스 다 클릭시 큰 체크박스 체크 되게 하기 !
	$(".etcChk").change(function(){
		var chk = $(this).prop("checked");
		if(!chk){ // 체크박스가 false 일 때 !
			$(".etc>li.sangseChkBox input").prop("checked",false);
		} // if //
		else{
			var num = 0;
			$(".etcChk").each(function(idx,ele){
				var csts = $(this).prop("checked"); // true/false 여부 확인
				if(csts){num++;}
			}); // each //

			var chkNum = $(".etcChk").length;
			if(num === chkNum){
				$("#etc").prop('checked',true);
			}// if //
		} // else //
	});// change //

	$(".date").datepicker();

	// 선택한 체크박스 submit
	// $("#topSearchBtn").click(function(e){
	// 	e.preventDefault();
	// 	$("input[name=jugeoChk]:checked,input[name=sangupChk]:checked,input[name=gongchangChk]:checked,input[name=tojiChk]:checked,input[name=etcChk]:checked").each(function(){
	// 		var test = $(this).val();
	// 		console.log(test);
	// 	}); // each //
	// }); // click //

	
}); //////////////////// jQB ////////////////////


/*////////////////////////////////////////////////////////////////////////////
	함수명 : chgTab
	기능 : searchBox의 각 메뉴를 클릭하면 순번에 있는 컨텐츠가 보이도록 class 변경
*/////////////////////////////////////////////////////////////////////////////
function chgTab(){
	// alert("탭메뉴"+seq);

	// 대상선정 : .tabBox>ul>li , #searchContBox>div
	// var tabTg = $(".tabBox>ul>li");
	var tabTg2 = $("#searchContBox>div");
	// var tgLength = tabTg2.length;
	var index = tabTg2.attr("class");
	console.log(" 순번 "+ index);
	// console.log("tabTg의 length값: "+tgLength);
	// console.log("tabTg2의 몇 번째 값?: "+index);

	// 상세뷰를 눌렀을 때 현재 보여지는 탭 메뉴의 순번을 구해야 함
	// 그리고 그 해당 순번에 컨텐츠를 열고 닫아야 함
	// 1. 상세뷰를 클릭하는 순간 class on 되어있는 탭 구하기!
	

	// // 변경내용 : 탭 메뉴와 내용을 초기화하고, 선택된 순번의 컨텐츠만 클래스 부여해서 보이게 하기
	// for(var i=0;i<tabTg.length;i++){
	// 	tabTg.eq(i).removeClass("");
	// 	tabTg2.eq(i).removeClass("");
	// } // for문 //

	// tabTg.eq(tgLength).addClass('on').siblings().removeClass('on');
	// tabTg2.eq(index).addClass('on').siblings().removeClass('on');
}///////////// chgTab 함수 ///////////////
