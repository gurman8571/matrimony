
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

@if($errors->any())

<p class="text-red-500">please take care of the following errors</p>
<ul class="text-red-500">

 @foreach($errors->all() as $error )

 <li>{{$error}}</li>
 @endforeach
</ul>

@endif
