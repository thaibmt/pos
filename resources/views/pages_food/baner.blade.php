<div class="banner_top" id="home">
	<div data-vide-bg ="video/hoaqua.mp4">
		<div class="center-container">
			<div class="w3_agile_header">
						<div class="w3_agileits_logo">
								<h1><a href="{{route('trangchu')}}"><img style="width: 38px;height: 38px;margin-top: -6PX;" src="images/logo.png">FOOD CHECK<span>Web & App</span></a>
								</h1>
							</div>
						<!-- nav -->
								<nav>
							      <input type="checkbox" id="check">
							      <label for="check" class="checkbtn">
							        <i class="fas fa-bars"></i>
							      </label>
							      <ul class ="myDIV">
							      	@foreach($Menu as $row)
							        <li><a class="{{$row->class}}" href="{{$row->link}}">{{$row->title}}</a></li>
							        @endforeach
							        <!-- <li><a href="#">About</a></li>
							        <li><a href="#">Services</a></li>
							        <li><a href="#">Contact</a></li>
							        <li><a href="#">Feedback</a></li> -->
							      </ul>
					    		</nav>
						<!-- nav-->
					<div class="clearfix"></div>
			    </div>
				<!-- banner-text -->
				<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								@foreach($Slide as $row)
								<li>
									<div class="agileits-banner-info">
										<h4>TRUY XUẤT NGUỒN GỐC</h4>
										<h3>{{$row->h3}}</h3>
										<p style="font-size: 14px;">"Sống Sạch,Sống Xanh"</p>
									</div>	
								</li>
								@endforeach
								<!-- <li>
									<div class="agileits-banner-info">
										<h4>TRUY XUẤT NGUỒN GỐC</h4>
										<h3>NGUỒN GỐC THỰC PHẨM</h3>
										<p style="font-size: 14px;">"Sống Sạch,Sống Xanh"</p>
									</div>	
								</li> -->
							</ul>
							<br>
							<hr>
							<!-- /// -->
								<div>
								    <div class="text-center top40">
								        <a href="#" target="_blank" class="btn btn-primary btn-lg">App Store <i class="fab fa-app-store-ios"></i></a>
								        <a href="#" target="_blank" class="btn btn-success btn-lg">Google Play <i class="fab fa-google-play"></i></a>
								        <a href="check" class="btn btn-info btn-lg">Check Now <i class="fas fa-search"></i></a>
								    </div>
								</div>

							<!-- /// -->
						</div>
				</div>
			<!--banner Slider starts Here-->
			<!-- <div class="w3_agileits_social_media "> -->
				<ul style="float: right;" class="social-icons3">
					<li class="agileinfo_share">Share On</li>
					<li><a href="#" class="wthree_facebook"> <i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#" class="wthree_twitter"><i class="fab fa-twitter-square"></i></a></li>
					<li><a href="#" class="wthree_dribbble"><i class="fab fa-google-plus-square"></i></a></li>
					<li><a href="#" class="wthree_behance"><i class="fab fa-instagram"></i></a></li>
				</ul>
			<!-- </div> -->
      </div>
   </div>
</div>