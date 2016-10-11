// Remove first product

$(document).ready(function(){
	$("sales-list .row item:first").addClass("ng-hide");
});

// Top best seller

var currentIndex = 0,
  items = $('outerbox item.ng-scope'),
  itemAmt = items.length;

function cycleItems() {
  var item1 = $('outerbox item.ng-scope').eq(currentIndex);
  var item2 = $('outerbox item.ng-scope').eq(currentIndex+1);
  var item3 = $('outerbox item.ng-scope').eq(currentIndex+2);
  var item4 = $('outerbox item.ng-scope').eq(currentIndex+3);
  items.hide();
  item1.css('display','inline-block');
  item2.css('display','inline-block');
  item3.css('display','inline-block');
  item4.css('display','inline-block');
}

$('.glyphicon-menu-right').click(function() {
  currentIndex += 4;
  if (currentIndex > itemAmt - 4) {
    currentIndex = itemAmt - 4;
  }
  cycleItems();
});

$('.glyphicon-menu-left').click(function() {
  currentIndex -= 4;
  if (currentIndex < 0) {
	currentIndex = 0;
  }
  cycleItems();
});

/*
$(document).ready(function(){

var ul = $("outerbox innerbox");
var slide_count = ul.find("item").length;
var slide_width_pc = 100.0 / slide_count;
var slide_index = 0;

ul.find("item").each(function(indx) {
var left_percent = (slide_width_pc * indx) + "%";
$(this).css({"left":left_percent});
$(this).css({width:(100 / slide_count) + "%"});
});

// Listen for click of prev button
$("glyphicon-menu-left").click(function() {
console.log("glyphicon-menu-left");
slide(slide_index - 1);
});

// Listen for click of next button
$("glyphicon-menu-right").click(function() {
console.log("glyphicon-menu-right");
slide(slide_index + 1);
});

function slide(new_slide_index) {

if(new_slide_index < 0 || new_slide_index >= slide_count) return; 

var margin_left_pc = (new_slide_index * (-100)) + "%";

ul.animate({"margin-left": margin_left_pc}, 400, function() {

slide_index = new_slide_index

});

}

});
*/
// Product image slider

$(document).ready(function () {
	var action= false;
	$(".product-image-wrapper .imageSlide:first").removeClass("ng-hide");
	$(".product-image-wrapper .outer-wrapper li").hover(function(){
		var thumbnail_index= $(this).index();
		$(".product-image-wrapper .imageSlide").each(function(){
			var image_index= $(this).index();
			if(thumbnail_index==image_index){
				$(".product-image-wrapper .imageSlide").removeClass("ng-hide");
				$(".product-image-wrapper .imageSlide").addClass("ng-hide");
				$(this).removeClass("ng-hide");
			}
		});
	});
});

// Product image zoomer

$(document).ready(function(){
	$('.leflair_zoom').zoom();
});

// Product information

$(document).ready(function(){
	$(".panel-group .panel-default .panel-heading span.ng-scope:first").addClass("opened");
	$(".panel-group .panel-default .panel-heading span.ng-scope i:first").removeClass("i-leflair-plus");
	$(".panel-group .panel-default .panel-heading span.ng-scope i:first").addClass("i-leflair-minus");
	$(".panel-group .panel-default .panel-collapse:first").removeClass("collapse");
	$(".panel-group .panel-default .panel-collapse:first").addClass("in");
	
	$(".panel-group .panel-default .panel-heading").click(function(){
		if($("span.ng-scope", this).hasClass("opened")==false){
			$(".panel-group .panel-default").each(function(){
				if($("span.ng-scope", this).hasClass("opened")){
					$("span.ng-scope", this).removeClass("opened");
					$("span.ng-scope i", this).removeClass("i-leflair-minus");
					$("span.ng-scope i", this).addClass("i-leflair-plus");
					$(".panel-collapse", this).removeClass("in");
					$(".panel-collapse", this).addClass("collapse");
				}
			});
			
			$("span.ng-scope", this).addClass("opened");
			$("span.ng-scope i", this).removeClass("i-leflair-plus");
			$("span.ng-scope i", this).addClass("i-leflair-minus");
			$(this).parent().find(".panel-collapse").removeClass("collapse");
			$(this).parent().find(".panel-collapse").addClass("in");
			
		}
		
		else{
			$("span.ng-scope", this).removeClass("opened");
			$("span.ng-scope i", this).removeClass("i-leflair-minus");
			$("span.ng-scope i", this).addClass("i-leflair-plus");
			$(this).parent().find(".panel-collapse").removeClass("in");
			$(this).parent().find(".panel-collapse").addClass("collapse");
		}
	});
});



































