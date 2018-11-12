



/* var x =prompt("원하는 수 입력");
pomulsun(x); */
var n=0;
function swap(){
$("#mains > li").css("z-index",9);
$("#mains > li").eq(n).css("z-index",10);
if(n==2)n=0;
else n++;
}



/* if(n==0){n=1;}
else if(n==1){n=2;}
else if(n==3){n=0;} */
setInterval(swap,2000);


$("#navs >:last-child").hover(function(){
// $(".more_cont").show();
$(".more_cont").stop().slideDown(200);
}, function(){
$(".more_cont").stop().slideUp(200);
// $(".more_cont").hide();
});
/*hover가 될 때 일어나는일, hover가 끝났을 때 일어나는일*/