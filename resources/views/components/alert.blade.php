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

    </div>
@endif


@if (session('insert'))
    <div class="animate__animated animate__fadeInLeft  p-4 mt-2 shadow-inner rounded-md capitalize bg-green-600 mx-12 text-white " id="alert">
        <strong>{{ session('insert') }}</strong>
    </div>

@endif

@if (session('delete'))
    <div class=" animate__animated animate__fadeInLeft  p-4 mt-2 shadow-inner rounded-md capitalize bg-red-600 mx-12 text-white "  id="alert">
     <strong>  {{ session('delete') }} </strong>
    </div>

@endif

<script>

  let alert= document.getElementById('alert')
if (alert) {
    setTimeout(() => {
     alert.style.display="none";
 }, 3000);
}
</script>
