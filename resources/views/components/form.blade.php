<h1 class="m-4  font-light text-grey-200 text-center text-4xl  capitalize">Enter Basic Details</h1>
<br>
<div class="flex justify-center m-8 ">

<div class="w-90  bg-white shadow-md p-6 capitalize">

    <form action="" id="user-input" class="flex  flex-col justify center  items-center rounded-md" >




        <input type="text" class="  w-full p-4 border-2 border-blue  m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize " name="name " id="" placeholder="Enter Name">
        <br>


         <input type="number" name="phone " class="w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize border-blue "    placeholder="Enter Phone.no">







<br>
         <input type="number"class="w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize border-blue " name="height" id="" placeholder="enter height">
<br>

         <input type="number"class="w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize border-blue "name="weight" id="" placeholder="enter weight">
<br>

         <input type="number" class="w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize border-blue "name="age" id="" placeholder="enter age">

      <br>

         <input type="text" class="w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize border-blue " name="summary" id="" placeholder="enter summary">

      <br>



         <select class="dark:text-dark w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize border-blue " name="caste" id="">

           <option value="">select a caste</option>
           @foreach($data['caste'] as $key=>$item)

           <option value="{{$key}}">{{$item}}</option>
                 @endforeach
         </select>
<br>
         <select class="dark:text-dark w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md capitalize border-blue " name="religion" id="">
          <option value=""> select a religion</option>
          @foreach($data['religion'] as $key=>$item)

          <option value="{{$key}}">{{$item}}</option>
                @endforeach
        </select>

      <br>
      <select class="dark:text-dark w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
      focus:ring-1 focus:ring-pink rounded-md capitalize border-blue " name="country" id="country">
       <option value="">Country</option>
       @foreach($data['country'] as $key=>$item)

 <option value="{{$key}}">{{$item}}</option>
       @endforeach
     </select>

   <br>
   <select class="dark:text-dark w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
   focus:ring-1 focus:ring-pink rounded-md capitalize border-blue " name="state" id="states">
    <option value="">state</option>

  </select>

<br>


             <select  class="dark:text-dark w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
             focus:ring-1 focus:ring-pink rounded-md border-blue "name="occupation" id="">
     <option value="" >select a Occupation</option>
     @foreach($data['occupation'] as $key=>$item)

     <option value="{{$key}}">{{$item}}</option>
           @endforeach
         </select>
         <br>
         <select  class="dark:text-dark w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md border-blue "name="language" id="">
 <option value="" >select a Mother tongue</option>
 @foreach($data['language'] as $key=>$item)


 <option value="{{$key}}">{{$item}}</option>
       @endforeach
     </select>
      <br>   <select class="w-full p-4 border-2 m-2 hover:outline-none focus:outline-none
         focus:ring-1 focus:ring-pink rounded-md dark:text-dark " name="degree" id="">
          <option value=""> Highest Degree</option>
        </select>
        <br>


          <span >Making Profile for</span>
          <div class="mt-2">
            <label class="">
              <input
                type="radio"
                class="form-radio"
                name="gender"
                value="bride"
              />
              <span class="ml-2">bride</span>
            </label>
            <label class="inline-flex items-center ml-6">
              <input
                type="radio"
                class="form-radio"
                name="gender"
                value="groom"
              />
              <span class="ml-2">groom</span>
            </label>

    </div>
