<html>
<head>
<style>
#main_loading{
    z-index: 9999;position: absolute;width: 100%;height: 100%;background-color: rgba(0,0,0,0.6);overflow: hidden;color: #fff;
}
#main_loading span
{
    position: fixed;top: 40%;font-size: 80px;left: 38%;

    text-shadow: 0 0 80px rgba(255, 255, 255, 0.5);
  /* Clip Background Image */
  background: url(../assets/images/mainloadanim.png) repeat-y;
  -webkit-background-clip: text;
  /* Animate Background Image */
  -webkit-text-fill-color: transparent;
  -webkit-animation: aitf 80s linear infinite;
  /* Activate hardware acceleration for smoother animations */
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;

}
/* Animate Background Image */
@-webkit-keyframes aitf {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}  
</style>

<!-- Page Load completely -->
<script>
  function log(text) { 
    console.log(text); 
    if( text == "windowonload" ){
        document.getElementById("main_loading").style.display = "none";
    }
  }
  /*1.*/
  log('initial readyState:' + document.readyState);
  /*2.*/
  document.addEventListener('readystatechange', () => log('readyState:' + document.readyState));
  /*3.*/
  document.addEventListener('DOMContentLoaded', () => log('DOMContentLoaded'));
  /*4.*/
  window.onload = () => log('windowonload');
</script>
<!--  -->

</head>
<body>
  <div id="main_loading">
    <span>Loading...</span>
  </div> 
  
  <h1>Hello, Dear</h1>
</body>
</html>
