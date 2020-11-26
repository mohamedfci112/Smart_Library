<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smartlibrary</title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pretty-Footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pretty-Registration-Form.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
</head>

<body>
  <!-- start the header-->
    <header>
      <div class="cover">
          <nav class="navbar navbar-default navbar-fixed-top nav-pills flex-column flex-sm-row">
              <div class="container">
                  <div class="navbar-header"><a class="navbar-brand navbar-link" href="{{route('main_page')}}" style="font: normal 36px  'Pacifico', cursive;color: black"><span><img src="img/logo_faculty_fci.jpg"></span> <span style="color: #23527c">Smart</span> Library</a>
                          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                  </div>
                  <div class="collapse navbar-collapse" id="navcol-1">
                      <ul class="nav navbar-nav navbar-right">
                          <li class="active" role="presentation"><a href="{{route('main_page')}}">Home </a></li>
                          <li role="presentation"><a href="#cat">Categories </a></li>
                          <li role="presentation"><a href="#Contact">Contact us</a></li>
                      
                          @guest
                              <li role="presentation"><a href="{{ route('login') }}"   >Login </a></li>
                              <li role="presentation"><a href="{{ route('register') }}">Register </a></li>
                          @else
                              {{--  // student   --}}
                              @if(Auth::user()->approve == 0 ) 
                              
                                  <li role="presentation">
                                      <a href="{{ route('student_index') }}">
                                      Profile 
                                      </a><li role="presentation">
                                  </li>
                              @endif
                              {{--  // doctor    --}}
                              @if(Auth::user()->approve == 1 )
                                  <li role="presentation">
                                      <a href="{{ route('doctor_index') }}">
                                      Profile 
                                      </a><li role="presentation">
                                  </li>
                              @endif
                              {{--  normal admin    --}}
                              @if(Auth::user()->approve == 2 )
                                  <li role="presentation">
                                      <a href="{{ route('admin_index') }}">
                                      Admin 
                                      </a><li role="presentation">
                                  </li>
                              @endif
                              {{--  super admin ('manager')  --}}
                              @if(Auth::user()->approve == 3 )
                                  <li role="presentation">
                                      <a href="{{ route('admin_index') }}">
                                      Manager 
                                      </a><li role="presentation">
                                  </li>
                              @endif


                              <li role="presentation">
                                  <a href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                  Logout - {{ Auth::user()->name }} 
                                  </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          @endguest
                  
                      </ul>
                  </div>
              </div>
          </nav>
          <div class="row heading">
            <br>
            <br>
            <br>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <h1 class="head1"><span style="color: #23527c">Take</span> the world's best books,online. </h1></div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col32"><img src="img/logobig.png" class="img2"></div>
          </div>
          <div class="row search">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 search">
				  <form method="get" action="http://localhost:8080/sem/vendor/bordercloud/sparql/src/exam.php">
					<select name="type">
						<option value="name">Book Name</option>
						<option value="author">Author Name</option>
						<option value="isbn">ISBN</option>
					</select>
					  <input type="search" name="search" class="head" placeholder="Search books">
					  <button class="btn btn-danger" type="submit" name="ok"><i class="glyphicon glyphicon-search" id="cat"></i><span style="color: #23527c">Find</span> Your Dream Book</button>
				  </form>
			  </div>
          </div>
      </div>
    </header>
    <!-- end the header-->
      <!-- start annonc-->
      <br>
    <div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
            
                <div class="row">
                  <div class="container coverr">
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">announcement</h3>
                        <h4 data-animation="animated bounceInUp">Uniquely transform seamless customer service rather than value-added manufactured products. Energistically productize functionalized alignments with flexible quality vectors. Objectively.</h4>             
                    </div>
                  </div>
                </div>
            </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container coverr">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">announcement</h3>
                        <h4 data-animation="animated bounceInUp">Intrinsicly integrate excellent processes without worldwide materials. Uniquely generate magnetic value with sustainable imperatives. Continually expedite B2C systems without.</h4>
                    </div>
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container coverr">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">announcement</h3>
                        <h4 data-animation="animated bounceInUp">Completely synthesize business channels rather than collaborative processes. Globally matrix installed base methodologies before process-centric imperatives. Efficiently scale multifunctional.</h4>
                    </div>   
                </div></div>
            </div>
            <!-- Item 4 -->
            <div class="item slide4">
                <div class="row"><div class="container coverr">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">announcement</h3>
                        <h4 data-animation="animated bounceInUp">Completely synthesize business channels rather than collaborative processes. Globally matrix installed base methodologies before process-centric imperatives. Efficiently scale multifunctional.</h4>
                    </div>
                </div></div>
            </div>
            <!-- End Item 4 -->
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>
  <br>  
  <!-- end the annonc-->
    <!-- start the categories-->
    <div id="Categories">
      <h1>Categories</h1>
        <div role="tabpanel">
          <div class="row">
          <div class="col-md-3">
            <ul class="nav nav-tabs nav1 nav-pills nav-stack span3" role="tablist">
              
            <li class="active" role="presentation"><a href="#Programming" aria-controls="Programming" data-toggle="tab" role="tab">Programming </a></li>
            {{--  @foreach($categories as $cat )
            <li role="presentation"><a href="{{$cat->id}}" role="tab" aria-controls="Networks" data-toggle="tab">{{ $cat->name }} </a></li>
            @endforeach  --}}
              
            {{--  <li role="presentation"><a href="#WebDesign" role="tab" aria-controls="Web Design"  data-toggle="tab">Web Design </a></li>  --}}
            <li role="presentation"><a href="#ScientificBooks" role="tab" aria-controls="ScientificBooks" data-toggle="tab">Scientific Books </a></li>
            <li role="presentation"><a href="#ReligiousBooks" role="tab" aria-controls="ReligiousBooks" data-toggle="tab">Religious Books </a></li>
            <li role="presentation"><a href="#HistoricalBooks" role="tab" aria-controls="HistoricalBooks" data-toggle="tab">Historical Books </a></li>
            <li role="presentation"><a href="#Space" role="tab" aria-controls="Space" data-toggle="tab"> Space Books</a></li>
            <li role="presentation"><a href="#ScientificImagintaion" role="tab" aria-controls="ScientificImagintaion" data-toggle="tab">Scientific imagination</a></li>
            <li role="presentation"><a href="#Stories" role="tab" aria-controls="Stories" data-toggle="tab"> Stories Books </a></li>
            <li role="presentation"><a href="#CartoonsStories" role="tab" aria-controls="CartoonsStories" data-toggle="tab">Cartoons Stories </a></li>
            <li role="presentation"><a href="#HumanDevelopment" role="tab" aria-controls="HumanDevelopment" data-toggle="tab" >Human Development </a></li>  
            <br>
            </ul>
          </div>
          <div class="col-md-9">
            <div class="tab-content timg">
              <div role="tabpanel" class="tab-pane active pan" id="Programming">
                <div class="row ">
                <div class="col-md-3">
                      
                      <div class="m" style="width: 170px; height: 220px;" >
                      <div class="caption">
                    <h4>Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/14.jpeg" width="100%" height="100%">
                      </div>
                      
                    </div>
                <div class="col-md-3">
                        <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/12.jpeg" width="100%" height="100%">
                      </div>
                          </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/3.jpeg" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/22.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/25.jpg" width="100%" height="100%">
                      </div>
                    </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/7.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3"> 
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/26.jpg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                    <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/27.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
            <br>
               <div class="row ">
                <div class="col-md-3">
                      
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4>Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/14.jpeg" width="100%" height="100%">
                      </div>
                      
                    </div>
                <div class="col-md-3">
                        <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/12.jpeg" width="100%" height="100%">
                      </div>
                          </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/3.jpeg" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/22.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/25.jpg" width="100%" height="100%">
                      </div>
                    </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/7.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3"> 
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/26.jpg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                    <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/27.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
            <br>
             

             </div>
          <div role="tabpanel" class="tab-pane pan fade in" id="Networks">
                <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
                <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
                    <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
                <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
                  </div>
           <div role="tabpanel" class="tab-pane pan fade in " id="WebDesign">
                <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/1.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/2.jpeg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/3.png" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/4.jpg" width="100%" height="100%">
                      </div>
                </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/5.jpeg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/6.png" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/7.png" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/8.jpg" width="100%" height="100%">
                      </div>
                  </div>
            </div>
             <br>
                  <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/1.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/2.jpeg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/3.png" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/4.jpg" width="100%" height="100%">
                      </div>
                </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/5.jpeg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/6.png" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/7.png" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/8.jpg" width="100%" height="100%">
                      </div>
                  </div>
            </div>
             <br>
               </div>
          <div role="tabpanel" class="tab-pane  pan fade in" id="ScientificBooks">
              <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/1.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/2.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/3.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/4.jpg" width="100%" height="100%">
                      </div>
                      </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/5.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/6.jpg" width="100%" height="100%">
                      </div>
                        </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/8.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>   
                 <br>
               <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/1.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/2.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/3.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/4.jpg" width="100%" height="100%">
                      </div>
                      </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/5.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/6.jpg" width="100%" height="100%">
                      </div>
                        </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/8.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>   
                 <br>
                   </div>
           <div role="tabpanel" class="tab-pane  pan fade in" id="ReligiousBooks">
                <div class="row ">
                <div class="col-md-3">
                      
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4>Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/14.jpeg" width="100%" height="100%">
                      </div>
                      
                    </div>
                <div class="col-md-3">
                        <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/12.jpeg" width="100%" height="100%">
                      </div>
                          </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/3.jpeg" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/22.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/25.jpg" width="100%" height="100%">
                      </div>
                    </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/7.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3"> 
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/26.jpg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                    <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/27.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
            <br>
               <div class="row ">
                <div class="col-md-3">
                      
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4>Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/14.jpeg" width="100%" height="100%">
                      </div>
                      
                    </div>
                <div class="col-md-3">
                        <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/12.jpeg" width="100%" height="100%">
                      </div>
                          </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/3.jpeg" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/22.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/25.jpg" width="100%" height="100%">
                      </div>
                    </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/7.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3"> 
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/26.jpg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                    <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/27.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
            <br>
              </div>
          <div role="tabpanel" class="tab-pane  pan fade in" id="HistoricalBooks">
                 <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
                <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
                    <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
               </div>
           <div role="tabpanel" class="tab-pane pan fade in" id="Stories">
                 <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
                <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
                    <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
                <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
              </div>
           <div role="tabpanel" class="tab-pane pan fade in" id="CartoonsStories">
               <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/1.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/2.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/3.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/4.jpg" width="100%" height="100%">
                      </div>
                      </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/5.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/6.jpg" width="100%" height="100%">
                      </div>
                        </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/8.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>   
                 <br>
               <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/1.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/2.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/3.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/4.jpg" width="100%" height="100%">
                      </div>
                      </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/5.jpg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/6.jpg" width="100%" height="100%">
                      </div>
                        </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/ScientificBooks/8.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>   
                 <br>
                </div>
           <div role="tabpanel" class="tab-pane pan fade in" id="ScientificImagintaion">
               <div class="row ">
                <div class="col-md-3">
                      
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4>Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/14.jpeg" width="100%" height="100%">
                      </div>
                      
                    </div>
                <div class="col-md-3">
                        <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/12.jpeg" width="100%" height="100%">
                      </div>
                          </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/3.jpeg" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/22.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/25.jpg" width="100%" height="100%">
                      </div>
                    </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/7.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3"> 
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/26.jpg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                    <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/27.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
            <br>
               <div class="row ">
                <div class="col-md-3">
                      
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4>Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/14.jpeg" width="100%" height="100%">
                      </div>
                      
                    </div>
                <div class="col-md-3">
                        <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/12.jpeg" width="100%" height="100%">
                      </div>
                          </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/3.jpeg" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/22.jpg" width="100%" height="100%">
                      </div>
                   </div>
            </div>
            <br>
            <div class="row" >
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/25.jpg" width="100%" height="100%">
                      </div>
                    </div>
                <div class="col-md-3">
                   <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/7.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3"> 
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/26.jpg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                    <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/pro/27.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
            <br>
               
                   </div>
             <div role="tabpanel" class="tab-pane pan fade in" id="Space">
               <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
                <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
                    <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/3.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/6.jpeg" width="100%" height="100%">
                      </div>
                   </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/4.jpg" width="100%" height="100%">
                      </div>
                    </div>
            </div>
             <br>
                <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/1.jpg" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                     <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/2.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/7.jpg" width="100%" height="100%">
                      </div>
                  </div>
                
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/network/8.jpg" width="100%" height="100%">
                      </div>
                     </div>
            </div>
              <br>
           
             </div>
          <div role="tabpanel" class="tab-pane pan fade in" id="HumanDevelopment">
              <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/1.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/2.jpeg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/3.png" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/4.jpg" width="100%" height="100%">
                      </div>
                </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/5.jpeg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/6.png" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/7.png" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/8.jpg" width="100%" height="100%">
                      </div>
                  </div>
            </div>
             <br>
                  <div class="row ">
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/1.jpg" width="100%" height="100%">
                      </div>
                         </div>
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/2.jpeg" width="100%" height="100%">
                      </div>
                       </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/3.png" width="100%" height="100%">
                      </div>
                     </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/4.jpg" width="100%" height="100%">
                      </div>
                </div>
            </div>
             <br>
              <div class="row ">
                <div class="col-md-3">
                      <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/5.jpeg" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                       <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/6.png" width="100%" height="100%">
                      </div>
                      </div>
                <div class="col-md-3">
                  <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/7.png" width="100%" height="100%">
                      </div>
                </div>
                <div class="col-md-3">
                 <div class="m" style="width: 170px; height: 220px;" >
                       <div class="caption">
                    <h4> Headline</h4>
                    <p> description</p>
                    <p><a href="" class="label label-danger">read more!</a>
                </div>
                      <img  src="img/WebDesign/8.jpg" width="100%" height="100%">
                      </div>
                  </div>
            </div>
             <br>
          
            </div>
            </div>
        </div>
        </div>
      </div>
      <br>
    </div>
    <!-- end the categories-->
    
    
  
   
   <!--strat the rate-->
    <div class="Rate">
      <h1 class="lead" style="text-align: center;font-size: 35px; color: #23527c;font-weight: bolder;font-family: 'Berkshire Swash', cursive;">Rate of people that visited the website per years from 2015 to 2017.</h1>
      <hr>
      <div class="row">
                  <div class="container">
          <div class="row">
              <div class="col-md-3 col-sm-6 pc">
                <h1>2015</h1>
                  <div class="progress blue">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">60%</div>
                  </div>
                  <br>
                  <p>Enthusiastically actualize low-risk high-yield services for worldwide relationships. Authoritatively expedite holistic meta-services vis-a-vis impactful niches. Dynamically cultivate enterprise methods of empowerment before market-driven testing procedures. Compellingly disintermediate diverse methods of empowerment without quality technologies. Intrinsicly supply world-class architectures with prospective.</p>
              </div>
              <div class="col-md-3 col-sm-6 pc">
                <h1>2016</h1>
                  <div class="progress yellow">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">75%</div>
                  </div>
                  <br>
                  <p>Enthusiastically actualize low-risk high-yield services for worldwide relationships. Authoritatively expedite holistic meta-services vis-a-vis impactful niches. Dynamically cultivate enterprise methods of empowerment before market-driven testing procedures. Compellingly disintermediate diverse methods of empowerment without quality technologies. Intrinsicly supply world-class architectures with prospective.</p>
              </div>
              <div class="col-md-3 col-sm-6 pc">
                <h1>2017</h1>
                  <div class="progress pink">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">85%</div>
                  </div>
                  <br>
                  <p>Enthusiastically actualize low-risk high-yield services for worldwide relationships. Authoritatively expedite holistic meta-services vis-a-vis impactful niches. Dynamically cultivate enterprise methods of empowerment before market-driven testing procedures. Compellingly disintermediate diverse methods of empowerment without quality technologies. Intrinsicly supply world-class architectures with prospective.</p>
              </div>
              <div class="col-md-3 col-sm-6 pc">
                <h1>2018</h1>
                  <div class="progress green">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">95%</div>
                  </div>
                  <br>
                  <p>Enthusiastically actualize low-risk high-yield services for worldwide relationships. Authoritatively expedite holistic meta-services vis-a-vis impactful niches. Dynamically cultivate enterprise methods of empowerment before market-driven testing procedures. Compellingly disintermediate diverse methods of empowerment without quality technologies. Intrinsicly supply world-class architectures with prospective.</p>
              </div>
          </div>
          <h1></h1>
          <br>
      </div>
      </div>
    </div>    
    <!-- end the rate-->
    
    
    
    <!-- start the contact-->
    <div class="contact">
        <div class="container">
            <h1 class="head3"> <span style="color: #23527c">Tell Us</span> What You Fell </h1>
            <hr>
            <div class="row contcol">
                <div class="col-md-6 colleft">
                    <div class="row rowleft" style="font-size: 25px">
                        <div class="col-md-12 col1">
                            <input type="text" placeholder="USER NAME">
                        </div>
                        <div class="col-md-12 col2">
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="col-md-12 col3">
                            <input type="text" placeholder="Call Phone">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 colright">
                    <div class="row">
                        <div class="col-md-12 col4">
                            <textarea></textarea>
                        </div>
                        <div class="col-md-12 col5">
                            <button class="btn btn-default btn2" type="button"><span style="color: #23527c">Contact </span>-Us </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end the contact-->
    
    
    
    <!-- start the footer-->
    <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Smart <span>Libraray </span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Categories </a><strong> · </strong><a href="#">Books </a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">SmartlLibrary© 2018 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">21 Revolution Street</span> Assuit, EGYPTE</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> +1 555 123456</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@company.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> 
                
                    New Books in Home Page
                        <br>Books that are more reading in the world
                        <br>Register to recive the new events in Library
                        <br>You can pay by the credit card or in Library
                        
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>
    <!-- end the footer-->
    
    
    
    
    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>