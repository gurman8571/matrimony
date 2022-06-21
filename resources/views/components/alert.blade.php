<head>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<style>

#alert-close{
    float:right;
    position:relative;
    top:4px;
    right:4px;
}
</style>
@if (session('message'))
    <div class=" animate__animated animate__fadeInLeft  p-4 mt-2 shadow-inner rounded-md capitalize bg-blue-600 mx-12 text-white" id="alert">
     <strong> {{ session('message') }} </strong>

        <i class="fa fa-times dark:text-dark" id="alert-close"></i>
    </div>
@endif


@if (session('insert'))
    <div class="animate__animated animate__fadeInLeft  p-4 mt-2 shadow-inner rounded-md capitalize bg-green-600 mx-12 text-white " id="alert">
        <strong>{{ session('insert') }}</strong>
        <i class="fa fa-times dark:text-dark" id="alert-close"></i>
    </div>

@endif

@if (session('delete'))
    <div class=" animate__animated animate__fadeInLeft  p-4 mt-2 shadow-inner rounded-md capitalize bg-red-600 mx-12 text-white "  id="alert">
     <strong>  {{ session('delete') }} </strong>
        <i class="fa fa-times dark:text-dark"  id="alert-close"></i>
    </div>

@endif
<script>
        document.getElementById('alert-close').addEventListener('click', () => {
        document.getElementById('alert').style.display = "none"


    })
  let alert= document.getElementById('alert')
 setTimeout(() => {
     alert.style.display="none";
 }, 3000);
</script>
