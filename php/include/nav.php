


<ul class="navs clear">
    <li><a href="../main/main.php?S=0">HOME</a></li>
    <li> <a href="../sub/board.php?S=1">PORTFOLIO</a></li>
    <li> <a href="../sub/skill.php?S=2">SKILL</a></li>
    <li><a href="../sub/about.php?S=3">ABOUT ME</a></li>
</ul>

<script>
<?
$location = 0;
if(isset($_GET['S'])) $location = $_GET['S'];/*get방식으로 s 를 받아서 . location이라는 변수에 ..*/
echo "var loc =".$location.";"; 
?>
$(".navs li").css({"background-color":"#f8f8f8", "border-bottom" :"1px solid #999"});
$(".navs li").eq(loc).css({"background-color":"#fff","border-bottom":"1px solid #fff"});
</script>
