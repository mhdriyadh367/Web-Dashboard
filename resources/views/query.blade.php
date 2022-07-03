<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/datatables.min.css"/>

    {{-- firebase --}}
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-database.js"></script>
    {{-- akhir firebase --}}
 
    
 


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashboardFile/images/favicon.png') }}">

    <link rel="stylesheet" href="{{ asset('dashboardFile/plugins/pg-calendar/css/pignose.calendar.min.css') }}">
    <!-- Chartist -->
    {{-- <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('dashboardFile/plugins/chartist/css/chartist.min.css') }}">
    {{-- <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css"> --}}
    <link rel="stylesheet" href="{{ asset('dashboardFile/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('dashboardFile/css/style.css') }}" rel="stylesheet">


    <title>Query</title>
  </head>
  <body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
      <div class="loader">
          <svg class="circular" viewBox="25 25 50 50">
              <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
          </svg>
      </div>
  </div>
  <!--*******************
      Preloader end
  ********************-->

  
  <!--**********************************
      Main wrapper start
  ***********************************-->
  <div id="main-wrapper">

      <!--**********************************
          Nav header start
      ***********************************-->
      <div class="nav-header">
          <div class="brand-logo">
            <a href="#">
                <span class="logobc">
                    <img src="{{ asset('dashboardFile/images/logo/logodriving.png') }}" alt="">
                </span>
            </a>
          </div>
      </div>
      <!--**********************************
          Nav header end
      ***********************************-->

      <!--**********************************
          Header start
      ***********************************-->
      <div class="header">    
          <div class="header-content clearfix">
              
              <div class="nav-control">
                  <div class="hamburger">
                      <span class="toggle-icon"><i class="icon-menu"></i></span>
                  </div>
              </div>
              
              <div class="header-right">
                  <ul class="clearfix">
                      <li class="icons dropdown">
                          <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                              <span class="activity active"></span>
                              <img src="{{ asset('dashboardFile/images/user/mancartoon.png') }}" height="40" width="40" alt="">
                          </div>
                          <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                              <div class="dropdown-content-body">
                                  <ul>
                                      
                                      <li>
                                          <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                          <i class="icon-key">
                                          {{ __('logout') }}
                                              </i> 
                                              {{-- <span>Logout</span> --}}
                                          </a>
                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </li>
                                      {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                      </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form> --}}
                                  </ul>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <!--**********************************
          Header end ti-comment-alt
      ***********************************-->

      <!--**********************************
          Sidebar start
      ***********************************-->
      <div class="nk-sidebar">           
          <div class="nk-nav-scroll">
              <ul class="metismenu" id="menu">
                  
                  <li>
                      <a href="/home" >
                        <i class="fa fa-tachometer" aria-hidden="true"></i> <span class="nav-text">Dashboard</span>
                      </a>
                      
                  </li>
                  
                  <li>
                      {{-- <a class="has-arrow" href="#" aria-expanded="false">
                          <i class="icon-speedometer menu-icon"></i><span class="nav-text">Query</span>
                      </a> --}}
                      <a href="/query">
                          <i class="fa-solid fa-database"></i><span class="nav-text">Query</span>
                      </a>
                     
                  </li>
                  
                      
                 
              </ul>
              
              
          </div>
      </div>
      <!--**********************************
          Sidebar end
      ***********************************-->
       
      <!--**********************************
          Content body start
      ***********************************-->
      <div class="content-body">
        {{-- Tabel --}}
        <div class="container-fluid mt-3">

            <table class="table table-responsive-sm">
                <thead class=" text-center">
                    <th>No</th>
                    <th>Nama File</th>
                    <th>Subjek</th>
                    <th>Waktu</th>
                    <a href="Image">
                        <th>Image</th>

                    </a>
                </thead>
                <tbody id="tbody1" class=" text-center">
                   
                </tbody>
            </table>

          

        </div>
        {{-- Akhir Tabel --}}
          
  </div>
  <!--**********************************
      Main wrapper end
  ***********************************-->

    {{-- <script src="plugins/common/common.min.js"></script> --}}
    <script src="{{ asset('dashboardFile/plugins/common/common.min.js') }}"></script>
    {{-- <script src="js/custom.min.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/custom.min.js') }}"></script>
    {{-- <script src="js/settings.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/settings.js') }}"></script>
    {{-- <script src="js/gleek.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/gleek.js')}}"></script>
    {{-- <script src="js/styleSwitcher.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/styleSwitcher.js') }}"></script>

    {{-- <script src="./js/dashboard/dashboard-1.js"></script> --}}
    <script src="{{ asset('dashboardFile/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/r-2.2.9/sc-2.0.5/datatables.min.js"></script>


    
    <script id="MainScript">
            var firebaseConfig = {
            "apiKey": "AIzaSyAdfa5RT8PrioqSOBNHB7FbSTcCZIkbhWM",
            "authDomain": "dms-tugasakhir.firebaseapp.com",
            "databaseURL" : "https://dms-tugasakhir-default-rtdb.firebaseio.com/",
            "projectId": "dms-tugasakhir",
            "storageBucket": "dms-tugasakhir.appspot.com",
            "messagingSenderId": "851262891361",
            "appId": "1:851262891361:web:675128c61454872221d120"
        };
        
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        function SelectAllData(){
             firebase.database().ref('Riyadh').once('value', function(AllRecords){
                 AllRecords.forEach(
                     function(CurrentRecord) {
                         var subjek = CurrentRecord.val().Subjek;
                        //  console.log(subjek);
                         var Image = CurrentRecord.val().image;
                         var NamaFile = CurrentRecord.val().namafile;
                         var Waktu = CurrentRecord.val().waktu;
                         AddItemsToTable(subjek, Image, NamaFile, Waktu);
                         
                         
                     }
                 );
             });
            }
        window.onload = SelectAllData;
        

        var stdNo =0
        function AddItemsToTable(subjek, Image, NamaFile, Waktu){
            // console.log(subjek)
            var tbody = document.getElementById('tbody1');
            var trow = document.createElement('tr');
            var td1 = document.createElement('td');
            var td2 = document.createElement('td');
            var td3 = document.createElement('td');
            var td4 = document.createElement('td');
            var td5 = document.createElement("img");
            td5.src = Image;
            td5.setAttribute('width', '130px');

            td1.innerHTML = ++stdNo;
            td2.innerHTML = NamaFile;
            td3.innerHTML = subjek;
            td4.innerHTML = Waktu;
            td5.innerHTML = Image;
            trow.append(td1);
            trow.append(td2);
            trow.append(td3);
            trow.append(td4);
            trow.append(td5);
            tbody.append(trow);
        }
    </script>

  </body>
</html>