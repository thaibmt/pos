<hr>
<section class="mobile-app theme_background_color" id="feature">
      <div class="container">
            <div class="row text-center">
                <div class="app-heading">
                    <h1 class="sectionTitle" style="text-shadow: rgba(0,5,255,2) -3px -3px 1em;">TÍNH NĂNG CỦA AGRICHECK</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 featured-content">  
                    @foreach($About as $row)
                    @for($i=0;$i<3;$i++)
                    <div class="app-icon-box">
                        <div class="app-content-phone text-right">
                            <h4 style="text-shadow: rgba(0,255,255,2) -3px -3px 1em;">{{$row[$i]->h4}}</h4>

                            <p>
                               {{$row[$i]->p}}
                            </p>
                        </div>
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="{{$row[$i]->class}}"></i></span>
                        </div>
                        
                    </div>
                    @endfor
                    @endforeach
                </div>

                <!-- // -->
                <div class="col-md-4 col-sm-12">
                    <img src="images/iphone6-plus.png" class="iphone-image" alt="iPhpone" data-scroll-reveal="wait 0.45s, then enter top and move 80px over 1s">
                </div>
                <!-- // -->
                
                <div class="col-md-4 col-sm-12 featured-content">
                    @foreach($About as $row)
                    @for($i=3;$i<6;$i++)
                    <div class="app-icon-box">
                        <div class="app-icon">
                            <span class="themecolor text-center"><i class="{{$row[$i]->class}}"></i></span>
                        </div>
                        <div class="app-content">
                            <h4 style="text-shadow: rgba(0,255,255,2) -3px -3px 1em;">{{$row[$i]->h4}}</h4>

                            <p>
                               {{$row[$i]->p}}
                            </p>
                        </div>
                    </div>
                     @endfor
                    @endforeach
                </div>
            </div>
        </div>
  </section>