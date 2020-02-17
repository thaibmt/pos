<form action="{{route('postForm1')}}" class="input-box" method="POST"> 
        {{ csrf_field() }}
        <input class="input_checkcode" type="text" name="Code" placeholder="Nhập Code để Check!" size="20" id="searchText" required/> 
        <p><br><!-- <hr style="border: 1px solid green;"> --><br></p>
      	<button class="btn btn-info btn-lg" id="searchSubmit" type="submit">Kiểm tra</button>
  </form>