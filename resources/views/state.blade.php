

    <select class="dark:text-dark w-123 p-3 border-2 m-2 hover:outline-none focus:outline-none
    focus:ring-1 focus:ring-pink rounded-md capitalize border-primary shadow-md" name="state" id="states">
     <option value="">state</option>
     @foreach($states as $key=>$value)
     <option value="{{$key}}" > {{$value}} </option>
 @endforeach
   </select>
