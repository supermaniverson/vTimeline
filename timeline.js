$(function(){


function Arrow_Points() { 
	//事件箭头
	var s = $('#container').find('.item');
	$.each(s,function(i,obj){
		var posLeft = $(obj).css("left");
		$(obj).addClass('borderclass');
		if(posLeft == "0px") {
			html = "<span class='rightCorner'></span>";
			$(obj).prepend(html);			
		} else {
			html = "<span class='leftCorner'></span>";
			$(obj).prepend(html);
		}
	});
}

$('.timeline_container').mousemove(function(e) {
	var topdiv = $("#containertop").height();
	var pag= e.pageY - topdiv - 26;
	$('.plus').css({
		"top":pag +"px",
		"background":"url('images/plus.png')",
		"margin-left":"1px"
	});
}).
	
mouseout(function() {
	$('.plus').css({"background":"url('')"});
});
	
	
$("#update_button").live('click',function() {
	var x = $("#update").val();
	$("#container").prepend('<div class="item"><a href="#" class="deletebox">X</a><div>'+x+'</div></div>');

	//Reload masonry
	$('#container').masonry( 'reload' );

	$('.rightCorner').hide();
	$('.leftCorner').hide();
	Arrow_Points();
	
	$("#update").val('');
	$("#popup").hide();
	return false;
});

// Divs
$('#container').masonry({itemSelector : '.item',});
Arrow_Points();
  
//Mouseup textarea false
$("#popup").mouseup(function()  {
	return false
});
  
$(".timeline_container").click(function(e) {
	var topdiv = $("#containertop").height();
	$("#popup").css({'top':(e.pageY - topdiv - 50)+'px'});
	$("#popup").fadeIn();
	$("#update").focus();
});  


$(".deletebox").live('click',function() {
	if(confirm("Are your sure?")) {
		$(this).parent().fadeOut('slow');  
		
		//Remove item
		$('#container').masonry( 'remove', $(this).parent());
		//Reload masonry
		$('#container').masonry( 'reload' );
		$('.rightCorner').hide();
		$('.leftCorner').hide();
		Arrow_Points();
	}
	return false;
});

// $("#photo_button").click(function(e){
// 	var topdiv = $("#containertop").height();
// 	$("#photo_pop").css({'top':(e.pageY - topdiv - 50)+'px'});
// 	$("#photo_pop").fadeIn();
// 	$("#photo_submit").focus();
// })

//Textarea without editing.
$(document).mouseup(function() {
	$('#popup').hide();
});

$("#admin_button").live('click', function(){

})

// $(function(){
// 	new qq.FileUploader({
// 		element: $('#upload_button')[0],
// 		action: 'upload.php'
// 	});
// });


  
});


