
<style>
#loader {
    width           : 100%;
    height          : 100%;
    top:0;
    left:0;
    right:0;
    bottom:0;
    position        : fixed;

    display         : flex;
    flex-direction  : column;
    align-items     : center;
    justify-content : center;
    background-color: #ffff;
    z-index         : 9999999;
    overflow:hidden;
    width: 100%;
    height: 100vh;

}

#loader-img{
    width : 600px;
}
body {
  overflow: hidden; /* Hide scrollbars */
}

</style>





<div id="loader">
<img id="loader-img"src="{{asset('loader.gif')}}" alt="">
</div>



<script>
window.onload = ()=>{
document.getElementById('loader').style.display="none";
document.querySelector('body').style.overflow="visible";


}

</script>
