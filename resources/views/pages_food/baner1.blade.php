<div class="banner_top" id="home">
	<div data-vide-bg ="video/hoaqua.mp4">
		<div class="center-container">
			<div class="w3_agile_header">
						<div class="w3_agileits_logo">
								<h1><a href="{{route('home')}}"><img style="width: 38px;height: 38px;margin-top: -6PX;" src="images/logo.png">FOOD CHECK<span style="font-size: 13px;">Web & App</span></a>
									<!-- <span id="show" style="">Vì Một Cuộc Sống Xanh Hơn</span> -->
								</h1>
						</div>
						<!-- <div class="w3_menu"> -->
							<!-- <div class="agileits_w3layouts_banner_info">
				
								<form action="#" method="post"> 
									<input type="search" name="search" placeholder="Search here..." required="">
									<input type="submit" value="Search">
								</form>
							</div> -->
							<!-- 	<div class="mobile-nav-button">
									<div class="mobile-nav-button__line"></div>
									<div class="mobile-nav-button__line"></div>
									<div class="mobile-nav-button__line"></div>
								</div>
								<nav class="mobile-menu">
									<ul>
										@foreach($Menu as $row)
										<li><a href="{{$row->link}}" class="active" >{{$row->title}}</a></li>
										@endforeach
									</ul>
								</nav>
						</div> -->
					
						<nav>
					      <input type="checkbox" id="check">
					      <label for="check" class="checkbtn">
					        <i class="fas fa-bars"></i>
					      </label>
					      <ul id="myDIV">
					        @foreach($Menu as $row)
							    <li><a class="{{ $row->class }}" href="{{$row->link}}">{{$row->title}}</a></li>
							@endforeach
					      </ul>
					    </nav>

					<div class="clearfix"></div>
			    </div>
				<!-- banner-text -->
				<br><br><br><hr><br><br><br>
				 <div class="container1">
			        <input type="hidden" name="dnn$ctr490$ViewHome$ctl00$hdfLang"  id="dnn_ctr490_ViewHome_ctl00_hdfLang" value="vi-VN" />
			        <div class="col-md-12 text-center">
			            <h1 class="text-capitalize bigFont" >
			            Truy xuất nguồn gốc sản phẩm</h1>
			            <br><br><br><hr><br><br><br>
			            <p style="color: green;cursor: context-menu;" class="btn btn-success btn-lg" data-scroll-reveal="wait 0.45s, then enter left and move 80px over 1s">
			               <strong style="color: white;"> Nhập mã sản phẩm và kiểm tra.</strong></p>
			 				<br>
			        </div>
			        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
			            <div class="text-center top40">
			                <form action="" class="input-box">
			                <input class="input_checkcode" type="text" name="T1" placeholder="Nhập Code để Check!" size="20" id="searchText" required/> 
			                <!-- <a href="#" class="btn btn-info btn-lg" id="searchSubmit" onclick="Search();">Kiểm tra</a> -->
			                <p><br><!-- <hr style="border: 1px solid green;"> --><br></p>
			              	<button class="btn btn-info btn-lg" id="searchSubmit" onclick="">Kiểm tra </button>
			                </form>
			            </div>
			        </div>
			      </div>
			
			<!--banner Slider starts Here-->
			<!-- <div class="w3_agileits_social_media "> -->
			<!-- </div> -->
      </div>
   </div>
</div>
