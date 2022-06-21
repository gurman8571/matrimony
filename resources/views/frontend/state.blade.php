<style>


.regis-col1 {
      float: left;
      width: 195px;
      font-size: 18px;
      color: #999;
      padding-right: 20px;
      text-align: right;
  }

  .regis-col2 {
      float: left;
      width: 300px;
  }

  .paddt7 {
      padding-top: 7px;
  }

  .paddt10 {
      padding-top: 10px;
  }
  .padd15 {
      padding-top: 10px;
  }

  .regis-select select {
      border: 0;
      font-size: 16px;
      border-bottom: 1px solid #ddd !important;
      padding: 2px 0px 2px 12px !important;
      width: 100%;



      outline: none;
      background-size: 12px;
      background-position: 97% 12px;
      font-family: 'Poppins', sans-serif;
  }
  .clear {
      clear: both;
  }
</style>


<div class="paddt10 h50">
    <div class="regis-col1 paddt7">State* </div>
    <div class="regis-col2 regis-select">
       <select name="state" id="state" value="{{old('state')}}" size="1" class="paddl5" style="color:#000;">
                                                                 <option value="0">---Select---</option>



                                                                 @foreach($states as $key=>$value)
                                                                 <option value="{{$key}}" > {{$value}} </option>
                                                                @endforeach




                                     </select>
    </div>

    <div class="clear"></div>
                 </div>
