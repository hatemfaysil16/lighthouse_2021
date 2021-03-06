<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="{{route('dashboard')}}">
        <svg
          class="brand-icon"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid"
          width="30"
          height="33"
          viewBox="0 0 30 33"
        >
          <g fill="none" fill-rule="evenodd">
            <path
              class="logo-fill-blue"
              fill="#7DBCFF"
              d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
            />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
          </g>
        </svg>
        <span class="brand-name">{{__('dashboard/sidbar.AdminDashboard')}}</span>
      </a>
    </div>
    <!-- begin sidebar scrollbar -->
    <div class="sidebar-scrollbar">

      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        

        
<li  class="has-sub active expand" >
  <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
  aria-expanded="false" aria-controls="dashboard">
  <i class="mdi mdi-view-dashboard-outline"></i>
  <span class="nav-text">{{__('dashboard/sidbar.Home')}}</span> <b class="caret"></b>
  </a>
  <ul  class="collapse show"  id="dashboard"
  data-parent="#sidebar-menu">
  <div class="sub-menu">
                
                

      <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('home.slider') }}">
      <span class="nav-text">{{__('dashboard/sidbar.slider')}}</span>

      </a>
      </li> 
      <li  class="" >
      <a class="sidenav-item-link" href="{{ route('home.about') }}">
      <span class="nav-text">{{__('dashboard/sidbar.HomeAbout')}}</span>
      </a>
      </li> 


      <li  class="" >
        <a class="sidenav-item-link" href="{{ route('service_two') }}">
        <span class="nav-text">{{__('dashboard/sidbar.service_two')}}</span>
        </a>
        </li> 
        
        <li  class="" >
        <a class="sidenav-item-link" href="{{ route('block') }}">
        <span class="nav-text">{{__('dashboard/sidbar.BlockBrand')}}</span>
        </a>
        </li>  
        
        
        <li  class="" >
        <a class="sidenav-item-link" href="{{ route('multi.image') }}">
        <span class="nav-text">{{__('dashboard/sidbar.HomePortfolio')}} </span>
        
        </a>
        </li> 
        
        
        <li  class="" >
        <a class="sidenav-item-link" href="{{ route('video') }}">
        <span class="nav-text">{{__('dashboard/sidbar.video')}}</span>
        </a>
        </li>            
        
        <li  class="" >
        <a class="sidenav-item-link" href="{{ route('all.brand') }}">
        <span class="nav-text">{{__('dashboard/sidbar.HomeBrand')}}</span>
        </a>
      </li>  
  
                  
  </div>
  </ul>
</li>
        



                
<li  class="has-sub" >
      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-About"
      aria-expanded="false" aria-controls="ui-About">
      <i class="mdi mdi-folder-multiple-outline"></i>
      <span class="nav-text"> HomeAbout</span> <b class="caret"></b>
      </a>
      <ul  class="collapse"  id="ui-About"
      data-parent="#sidebar-menu">
    <div class="sub-menu">
    
 


    <li  class="" >
      <a class="sidenav-item-link" href="{{ route('home.about') }}">
      <span class="nav-text">Home About</span>
      </a>
      </li> 

      <li  class="" >
      <a class="sidenav-item-link" href="{{ route('team') }}">
      <span class="nav-text">team</span>
      </a>
      </li> 


      <li  class="" >
      <a class="sidenav-item-link" href="{{ route('AllAbout') }}">
      <span class="nav-text">Home About2</span>
      </a>
      </li> 




          
          
                  
  </div>
  </ul>
</li>


            
<li  class="has-sub" >
    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-services"
    aria-expanded="false" aria-controls="ui-services">
    <i class="mdi mdi-folder-multiple-outline"></i>
    <span class="nav-text"> services</span> <b class="caret"></b>
    </a>
    <ul  class="collapse"  id="ui-services"
    data-parent="#sidebar-menu">
  <div class="sub-menu">


      <li  class="" >
      <a class="sidenav-item-link" href="{{ route('servicesAll') }}">
      <span class="nav-text">services</span>
      </a>
      </li>
      
      <li  class="" >
      <a class="sidenav-item-link" href="{{ route('feature') }}">
      <span class="nav-text">feature</span>
      </a>
      </li> 

      <li  class="" >
      <a class="sidenav-item-link" href="{{ route('servicesLogo') }}">
      <span class="nav-text">services Logo</span>
      </a>
      </li>  



                  
  </div>
  </ul>
</li>
        


<li  class="has-sub" >
    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-portfolio"
    aria-expanded="false" aria-controls="ui-portfolio">
    <i class="mdi mdi-folder-multiple-outline"></i>
    <span class="nav-text"> portfolio</span> <b class="caret"></b>
    </a>
    <ul  class="collapse"  id="ui-portfolio"
    data-parent="#sidebar-menu">
  <div class="sub-menu">

    <li  class="" >
      <a class="sidenav-item-link" href="{{ route('multi.image') }}">
      <span class="nav-text">multi image</span>
      </a>
      </li> 

      <li  class="" >
        <a class="sidenav-item-link" href="{{ route('video') }}">
        <span class="nav-text">video</span>
        </a>
        </li>   
          
          
                  
  </div>
  </ul>
</li>


        


<li  class="has-sub" >
    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-pricing"
    aria-expanded="false" aria-controls="ui-pricing">
    <i class="mdi mdi-folder-multiple-outline"></i>
    <span class="nav-text"> pricing</span> <b class="caret"></b>
    </a>
    <ul  class="collapse"  id="ui-pricing"
    data-parent="#sidebar-menu">
  <div class="sub-menu">
                

    <li  class="" >
    <a class="sidenav-item-link" href="{{ route('pricingAll') }}">
    <span class="nav-text">pricing</span>
    </a>
    </li>  

    <li  class="" >
    <a class="sidenav-item-link" href="{{ route('pricingBlog') }}">
    <span class="nav-text">pricingBlog</span>
    </a>
    </li>  


           
          
                  
  </div>
  </ul>
</li>









        
  <li  class="has-sub" >
      <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
      aria-expanded="false" aria-controls="ui-elements">
      <i class="mdi mdi-folder-multiple-outline"></i>
      <span class="nav-text">Contact Page</span> <b class="caret"></b>
      </a>
      <ul  class="collapse"  id="ui-elements"
      data-parent="#sidebar-menu">
    <div class="sub-menu">
                
      <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('admin.contact') }}">
      <span class="nav-text">Contact Profile</span>

      </a>
      </li> 
      <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('admin.message') }}">
      <span class="nav-text">Contact Message</span>

      </a>
      </li> 


      <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('admin.SocialMedia') }}">
      <span class="nav-text"> social media</span>
      </a>
      </li> 


      <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('info') }}">
      <span class="nav-text">info</span>
      </a>
      </li> 


      <li  class="active" >
      <a class="sidenav-item-link" href="{{ route('map') }}">
      <span class="nav-text">map</span>
      </a>
      </li> 

      

    </div>
    </ul>
  </li>


        

        
  <li  class="has-sub" >
    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
      aria-expanded="false" aria-controls="charts">
      <i class="mdi mdi-chart-pie"></i>
      <span class="nav-text">users</span> <b class="caret"></b>
    </a>
    <ul  class="collapse"  id="charts"
      data-parent="#sidebar-menu">
      <div class="sub-menu">
        
        
            
        <li  class="active" >
          <a class="sidenav-item-link" href="{{ url('/' . $page='users') }}">
          <span class="nav-text"> List user</span>                
          </a>

          <a class="sidenav-item-link" href="{{ url('/' . $page='roles') }}">
            <span class="nav-text">Role users </span>                
            </a>
          </li> 
          
        

        
      </div>
    </ul>
  </li>

          
        

        


        
      </ul>

    </div>

    <hr class="separator" />

    
  </div>
</aside>