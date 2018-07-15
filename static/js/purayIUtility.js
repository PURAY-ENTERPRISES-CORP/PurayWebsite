silverInStock = true;
goldInStock = false;

$("#silverModel").on("click",function(){
    $("#goldModel").removeClass("modelSelected");
    $("#silverModel").addClass("modelSelected");
  if(!silverInStock){
    //change gold images
    $("#outOfStockReminder").css("visibility","visible");
    $("#product-component-53d90f8cb42").css("margin-top","0px");
  }else{
    $("#outOfStockReminder").css("visibility","hidden");
    $("#product-component-53d90f8cb42").css("margin-top","-80px");
  }
})


$("#goldModel").on("click",function(){
  $("#silverModel").removeClass("modelSelected");
  $("#goldModel").addClass("modelSelected");
  if(!goldInStock){
    //change gold images
    $("#outOfStockReminder").css("visibility","visible");
    $("#product-component-53d90f8cb42").css("margin-top","0px");
  }else{
    $("#outOfStockReminder").css("visibility","hidden");
    $("#product-component-53d90f8cb42").css("margin-top","-80px");
  }
})

$("#purayIPreview1").on("click",function(){
  $("#productImg").css('width',"150px");
   $("#productImg").attr('src','static/image/product/purayI/detail/1.jpg');
   $("#productImg").css('margin-left',"-150px");
   $("#productImg").css('margin-top',"0px");
})
$("#purayIPreview2").on("click",function(){
  $("#productImg").css('width',"220px");
   $("#productImg").attr('src','static/image/product/purayI/detail/2.jpg');
   $("#productImg").css('margin-left',"-150px");
   $("#productImg").css('margin-top',"0px");
})

$("#purayIPreview3").on("click",function(){
  $("#productImg").css('width',"300px");
   $("#productImg").attr('src','static/image/product/purayI/detail/3.jpg');
   $("#productImg").css('margin-left',"-200px");
   $("#productImg").css('margin-top',"-50px");
})

$("#purayIPreview4").on("click",function(){
  $("#productImg").css('width',"200px");
   $("#productImg").attr('src','static/image/product/purayI/detail/4.jpg');
   $("#productImg").css('margin-left',"-150px");
   $("#productImg").css('margin-top',"0px");
})

$("#productImg").elevateZoom({
  zoomType				: "lens",
  lensShape : "round",
  lensSize    : 100,
});


$("#productDescription").on("click",function(){
var hiddenHtml = document.getElementById("detailInfopriceInfoHidden").innerHTML;
$("#productDescription").css("font-weight","bolder");
document.getElementById("detailInfopriceInfo").innerHTML = hiddenHtml;



})
