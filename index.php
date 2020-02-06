<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css?ver=2">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Revalia&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <title>Site1</title>
</head>
<body>
   <div id="top" class = "first-screen" >
       <button class = "ok">НАПИСАТЬ МНЕ</button>
       <img class = "look" src="img/Frame.png">
       <div class = "title_text">Дизайн и верстка</div>
       <span class = "simple_text">Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века.</span>
        <div class="logo">WD</div>
        <div class="menu">
           <a class="link_menu" href="#top">ГЛАВНАЯ</a> 
           <a class="link_menu" href="#top1">ОБ АВТОРЕ</a>
           <a class="link_menu" href="#top2">РАБОТЫ</a>
           <a class="link_menu" href="#top3">ПРОЦЕСС</a>
           <a class="link_menu" href="#top4">КОНТАКТЫ</a>  
        </div>
    </div> 
<div id="top1" class="about_me"></div>
<div id="top2" class="work"></div>
<div id="top3" class="process"></div>
<div id="top4" class="contact"></div>
<div id="back-top">
<a href="#" onclick="return up()">ВВЕРХ</a>  
</div>  
<script type="text/javascript">
 $(document).ready(function(){
    $("#top").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});
</script>
<script>
    function up() {  
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);  
if(top > 0) {  
  window.scrollBy(0,((top+100)/-10));  
  t = setTimeout('up()',20);  
} else clearTimeout(t);  
return false;  
} 
</script>
</body>
</html>















<!-- <?php
 phpinfo();
?> -->