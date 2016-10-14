// Remove first product

$(document).ready(function(){
	$("sales-list .row item:first").addClass("ng-hide");
});

// Top best seller
/*
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
*/

/*
$(document).ready(function(){

	// Set general variables
	// ====================================================================
	var totalWidth = 0;

	// Total width is calculated by looping through each gallery item and
	// adding up each width and storing that in `totalWidth`
	$("best-seller innerbox item").each(function(){
		totalWidth = totalWidth + $(this).outerWidth(true);
	});

	// The maxScrollPosition is the furthest point the items should
	// ever scroll to. We always want the viewport to be full of images.
	var maxScrollPosition = totalWidth - $("best-seller outerbox").outerWidth();

	// This is the core function that animates to the target item
	// ====================================================================
	function toGalleryItem($targetItem){
		// Make sure the target item exists, otherwise do nothing
		if($targetItem.length){

			// The new position is just to the left of the targetItem
			var newPosition = $targetItem.position().left;

			// If the new position isn't greater than the maximum width
			if(newPosition <= maxScrollPosition){

				// Add active class to the target item
				$targetItem.addClass("item__active");

				// Remove the Active class from all other items
				$targetItem.siblings().removeClass("item__active");

				// Animate 'innerbox' element to the correct left position.
				$("best-seller outerbox innerbox").animate({
					left : - newPosition
				});
			} else {
				// Animate 'innerbox' element to the correct left position.
				$("best-seller outerbox innerbox").animate({
					left : - maxScrollPosition
				});
			};
		};
	};
	// Basic HTML manipulation
	// ====================================================================
	// Set the gallery width to the totalWidth. This allows all items to
	// be on one line.
	$("best-seller outerbox innerbox").width(totalWidth);

	// Add active class to the first gallery item
	$("best-seller outerbox innerbox item:first").addClass("item__active");

	// When the prev button is clicked
	// ====================================================================
	$("best-seller arrow .controller .glyphicon-menu-left").click(function(){
		// Set target item to the item before the active item
		var $targetItem = $("best-seller innerbox .item__active").prev();
		toGalleryItem($targetItem);
	});

	// When the next button is clicked
	// ====================================================================
	$(".glyphicon-menu-right").click(function(){
		// Set target item to the item after the active item
		
		var $targetItem = $("best-seller innerbox .item__active").next();
		toGalleryItem($targetItem);
	});
});
*/

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

$(document).ready(function(){
	$('.bxslider').bxSlider({
		minSlides: 1,
		maxSlides: 4,
		slideWidth: 285,
		infiniteLoop: false,
		pager: false,
		nextText: '<span class="glyphicon glyphicon-menu-right"></span>',
		prevText: '<span class="glyphicon glyphicon-menu-left"></span>',
		responsive: true
	});
});

$(document).ready(function(){
	$(".product .panel-group .panel-default").each(function(){
		var item= $(this).find(".panel-collapse .panel-body div").hasClass("item");
		if(item==false){
			$(this).addClass("ng-hide");
		}
	});
});































