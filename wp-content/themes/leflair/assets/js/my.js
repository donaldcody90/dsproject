// Remove first product

$(document).ready(function(){
	$("sales-list .row item:first").addClass("vf-hide");
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
	$(".product-image-wrapper .imageSlide:first").removeClass("vf-hide");
	$(".product-image-wrapper .outer-wrapper li").hover(function(){
		var thumbnail_index= $(this).index();
		$(".product-image-wrapper .imageSlide").each(function(){
			var image_index= $(this).index();
			if(thumbnail_index==image_index){
				$(".product-image-wrapper .imageSlide").removeClass("vf-hide");
				$(".product-image-wrapper .imageSlide").addClass("vf-hide");
				$(this).removeClass("vf-hide");
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
	$(".product .panel-group .panel-default").each(function(){
		var item= $(this).find(".panel-collapse .panel-body div").hasClass("item");
		if(item==false){
			$(this).addClass("vf-hide");
		}
	});
});

$(document).ready(function(){
	$('.panel-group .panel-default:not(".vf-hide"):first').find(".product-property").addClass("opened");
	$('.panel-group .panel-default:not(".vf-hide"):first').find(".product-property i:first").removeClass("glyphicon glyphicon-plus");
	$('.panel-group .panel-default:not(".vf-hide"):first').find(".product-property i:first").addClass("glyphicon glyphicon-minus");
	$('.panel-group .panel-default:not(".vf-hide"):first').find(".panel-collapse").removeClass("collapse");
	$('.panel-group .panel-default:not(".vf-hide"):first').find(".panel-collapse").addClass("in");
	
	$(".panel-group .panel-default .panel-heading").click(function(){
		if($(".product-property", this).hasClass("opened")==false){
			$(".panel-group .panel-default").each(function(){
				if($(".product-property", this).hasClass("opened")){
					$(".product-property", this).removeClass("opened");
					$(".product-property i", this).removeClass("glyphicon glyphicon-minus");
					$(".product-property i", this).addClass("glyphicon glyphicon-plus");
					$(".product-property span", this).removeClass("vf-hide");
					$(".product-property img", this).addClass("vf-hide");
					$(".panel-collapse", this).removeClass("in");
					$(".panel-collapse", this).addClass("collapse");
				}
			});
			
			$(".product-property", this).addClass("opened");
			$(".product-property i", this).removeClass("glyphicon glyphicon-plus");
			$(".product-property i", this).addClass("glyphicon glyphicon-minus");
			$(".product-property span", this).addClass("vf-hide");
			$(".product-property img", this).removeClass("vf-hide");
			$(this).parent().find(".panel-collapse").removeClass("collapse");
			$(this).parent().find(".panel-collapse").addClass("in");
			
		}
		
		else{
			$(".product-property", this).removeClass("opened");
			$(".product-property i", this).removeClass("glyphicon glyphicon-minus");
			$(".product-property i", this).addClass("glyphicon glyphicon-plus");
			$(".product-property span", this).removeClass("vf-hide");
			$(".product-property img", this).addClass("vf-hide");
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
	$("#nav_cart").click(function(){
		var minicart= $("div.shopping-cart").hasClass("uncover");
		$(".dropdown").removeClass("open");
		if(!minicart){
			$("div.shopping-cart").addClass("uncover visible");
			$("body .pusher").addClass("dimmed");
			$('body div.pusher').attr('id', 'click');
		}else{
			$("div.shopping-cart").removeClass("uncover visible");
			$("body .pusher").removeClass("dimmed");
		}
	});
	
});
$(document).ready(function(){
	$("body #click").click(function(){
		$("div.shopping-cart").removeClass("uncover visible");
		$("body .pusher").removeClass("dimmed");
	});
	
});


$(document).ready(function(){
	$(".i-leflair-bag").click(function(){
		var minicart= $("div.shopping-cart").hasClass("uncover");
		if(!minicart){
			$("div.shopping-cart").addClass("uncover visible");
			$("body .pusher").addClass("dimmed");
		}else{
			$("div.shopping-cart").removeClass("uncover visible");
			$("body .pusher").removeClass("dimmed");
		}
	});
});

$(document).ready(function(){
	$(".i-leflair-menu").click(function(){
		var minicart= $("div.sidebar.menu.left").hasClass("uncover");
		if(!minicart){
			$("div.sidebar.menu.left").addClass("uncover visible");
			$("body .pusher").addClass("dimmed");
		}else{
			$("div.sidebar.menu.left").removeClass("uncover visible");
			$("body .pusher").removeClass("dimmed");
		}
	});
});

$(document).ready(function(){
	$(".mini-cart-cancel").click(function(){
		$(".shopping-cart").removeClass("uncover visible");
		$("body .pusher").removeClass("dimmed");
	});
	/*if($(".shopping-cart").hasClass("uncover visible")){
		$(document).click(function(e){
			var target = e.target;
			if(!$(target).is('.sidebar.uncover') && !$(target).parents().is('.sidebar.uncover')){
				alert("success");
			}
		});
	}*/
});

$(document).ready(function(){
	$(".dropdown").each(function(){
		$(".dropdown").click(function(){
			if($(this).hasClass("open")==false){
				$(".dropdown").removeClass("open");
				$(this).addClass("open");
				$(this).find(".dropdown-menu").show();
			}
			else{
				$(this).removeClass("open");
			}
		});
		
	});
	$(document).click(function(e){
		var target = e.target;
		if(!$(target).is('.dropdown') && !$(target).parents().is('.dropdown')){
			$(".dropdown").removeClass("open");
		}
	});
});

// Edit account info

$(document).ready(function(){
	if($("section").hasClass("account")){
		$(".content.row").addClass("gray-bg");
	}
});

$(document).ready(function(){
	$(".edit-account-info a").click(function(){
		$(".account-info-content").children("div").addClass("vf-hide");
		$(".form-account-info").removeClass("vf-hide");
	});
	$(".account-info-back").click(function(){
		$(".account-info-content").children("div").removeClass("vf-hide");
		$(".form-account-info").addClass("vf-hide");
	});
});

$(document).ready(function(){
	$(".address-details .underline-link").click(function(){
		$(".account-info-content").children("h4").addClass("vf-hide");
		$(".account-info-content").children("div").addClass("vf-hide");
		$(".change-address-form").find(".company-name").addClass("vf-hide");
		$(".change-address-form").find(".taxcode").addClass("vf-hide");
		$(".change-address-form").find(".checkbox").addClass("vf-hide");
		$(".change-address-form").removeClass("vf-hide");
		if($(this).hasClass("edit-billing-address")){
			$(".change-address-form").find(".change-address-form-title").html("Điền địa chỉ giao hàng");
			$(".change-address-form").find(".checkbox").removeClass("vf-hide");
			var abckey= "billing";
		}
		if($(this).hasClass("edit-shipping-address")){
			$(".change-address-form").find(".change-address-form-title").html("Điền địa chỉ trên hoá đơn");
			$(".change-address-form").find(".company-name").removeClass("vf-hide");
			$(".change-address-form").find(".taxcode").removeClass("vf-hide");
			var abckey="shipping";
		}
	});
	$(".change-address-form-back").click(function(){
		$(".account-info-content").children("h4").removeClass("vf-hide");
		$(".account-info-content").children("div").removeClass("vf-hide");
		$(".form-account-info").addClass("vf-hide");
		$(".change-address-form").addClass("vf-hide");
	});
});

$(document).ready(function(){
	$(".change-password").click(function(){
		$(this).parent().addClass("vf-hide");
		$(".form-change-password").removeClass("vf-hide");
	});
	$(".form-change-password-back").click(function(){
		$(".change-password").parent().removeClass("vf-hide");
		$(".form-change-password").addClass("vf-hide");
	});
	$(".leflair-gift-code").click(function(){
		$(".account-balance").addClass("vf-hide");
		$(".form-gift-code").removeClass("vf-hide");
	});
});

$(document).ready(function(){
	$(".nav-orders li").click(function(){
		$(".nav-orders li").removeClass("active");
		$(this).addClass("active");
		if($(".new-orders-button").hasClass("active")){
			$(".account-inner .order-list").addClass("vf-hide");
			$(".new-orders").removeClass("vf-hide");
		}
		if($(".old-orders-button").hasClass("active")){
			$(".account-inner .order-list").addClass("vf-hide");
			$(".old-orders").removeClass("vf-hide");
		}
	});
});

$(document).ready(function(){
	$(".order-detail-button").click(function(){
		$(".modal-backdrop").show(1000);
		$(".modal").show(1000);
		$("body").addClass("modal-open");
	});
});

/*------------login-register--------------*/

$(document).ready(function(){
	$(".open_resgister_form").click(function(){
		$(".form-login").addClass("vf-hide");
		$(".form-register").removeClass("vf-hide");
	});
	$(".open_login_form").click(function(){
		$(".form-login").removeClass("vf-hide");
		$(".form-register").addClass("vf-hide");
	});
});




    
































