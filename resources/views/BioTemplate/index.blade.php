<!DOCTYPE html>
<html lang="en">
<head>
    
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="/HRTemplat/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/HRTemplat/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/main.css" rel="stylesheet" type="text/css">
</head>
<body>


    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php // require '../fragmentation/side.php'; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php // require '../fragmentation/header.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container">
        <div class="main-body">
        
              <!-- /Breadcrumb -->
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4>ID est :<p id="ID_NIN">{{$detailemp[$nbr]->ID_NIN}}</p></h4>
                          <h4>{{$detailemp[$nbr]->NOM_P}} {{$detailemp[$nbr]->PRENOM_O}}</h4>
                          <p class="text-secondary mb-1">{{$detailemp[$nbr]->NOM_POST}}</p>
                          <p class="text-muted font-size-sm">Sous-Direction,{{$detailemp[$nbr]->NOM_D}}, Minister</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-3">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Email Professionnel</h6>
                        <span class="text-secondary">xx@xx.com</span>
                      </li>
                    
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nom</h6>
                        </div>
                        <input class="col-sm-9 text-secondary" id='Nom_P' value='{{$detailemp[0]->NOM_P}}' style="border: hidden;background-color: transparent;" disabled>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Prenom</h6>
                        </div>
                        <input class="col-sm-9 text-secondary" id='Prenom_O' value=' {{$detailemp[0]->PRENOM_O}}' style="border: hidden;background-color: transparent;" disabled>
                      </div>
                      <hr>  
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{$detailemp[0]->EMAIL}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Phone</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{$detailemp[0]->PHONE_PN}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Mobile</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          (+213) 00 00 00
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        {{$detailemp[0]->ADDRESS}}
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-12">
                          <button class="btn btn-info i" id="btn-ch">Edit</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper">  

                    <i id="left" class="fa-solid  fas fa-angle-left"></i> 

                  <div class="row gutters-sm carousel">
                    <div class="col-sm-6 mb-3">
                      <div class="card h-100">
                        <div class="card-body">
                          <small>Web Design</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Website Markup</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>One Page</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Mobile Template</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                          <small>Backend API</small>
                          <div class="progress mb-3" style="height: 5px">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @php
                    $count=1;
                    @endphp
                    @foreach($detailemp as $emp )
                   
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                          <div class="card-body">
                            <p>Departement : {{$emp->NOM_D}}</p>
                           <div class="card-info">
                              <p>
                                  Post Occuper : {{$emp->NOM_POST}}
                              </p>
                              <p>
                                  la Note : {{$emp->NOTATION}}
                              </p>
                           </div>
                           <p>Observation</p>
                            <div >
                              <p>Observation dit par sont directeur</p>
                            </div>
                            <p id="{{$emp->ID_NIN}}{{$count}}"></p>
                            <div class="card-info">
                              <p>Depuis : {{$emp->DATE_CHANG}}</p>
                            </div>
                            </div>
                          </div>
                      </div>
                      @php
                        $count++; 
                      @endphp
                      @endforeach
                  <i id="right" class="fa-solid fas fa-angle-right"></i>
                  </div>
               
                  </div>
                </div>
                </div>
              </div>
    
            </div>
        </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php // require ('../fragmentation/footer.php'); ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="/HRTemplat/vendor/jquery/jquery.min.js"></script>
    <script src="/HRTemplat/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/HRTemplat/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/HRTemplat/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/HRTemplat/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/HRTemplat/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <!--script src="js/carousel.js"></script>
    <script src="../js/printPD.js"></script>
    <script src="../js/sb-abd.js"></script-->

    <script >

document.addEventListener("DOMContentLoaded", function() { 
    const carousel = document.querySelector(".carousel"); 
    const arrowBtns = document.querySelectorAll(".wrapper i"); 
    const wrapper = document.querySelector(".wrapper"); 
  
    const firstCard = carousel.querySelector(".card"); 
    const firstCardWidth = firstCard.offsetWidth; 
  
    let isDragging = false, 
        startX, 
        startScrollLeft, 
        timeoutId; 
  
    const dragStart = (e) => {  
        isDragging = true; 
        carousel.classList.add("dragging"); 
        startX = e.pageX; 
        startScrollLeft = carousel.scrollLeft; 
    }; 
  
    const dragging = (e) => { 
        if (!isDragging) return; 
      
        // Calculate the new scroll position 
        const newScrollLeft = startScrollLeft - (e.pageX - startX); 
      
        // Check if the new scroll position exceeds  
        // the carousel boundaries 
        if (newScrollLeft <= 0 || newScrollLeft >=  
            carousel.scrollWidth - carousel.offsetWidth) { 
              
            // If so, prevent further dragging 
            isDragging = false; 
            return; 
        } 
      
        // Otherwise, update the scroll position of the carousel 
        carousel.scrollLeft = newScrollLeft; 
    }; 
  
    const dragStop = () => { 
        isDragging = false;  
        carousel.classList.remove("dragging"); 
    }; 
  
    const autoPlay = () => { 
      
        // Return if window is smaller than 800 
        if (window.innerWidth < 800) return;  
          
        // Calculate the total width of all cards 
        const totalCardWidth = carousel.scrollWidth; 
          
        // Calculate the maximum scroll position 
        const maxScrollLeft = totalCardWidth - carousel.offsetWidth; 
          
        // If the carousel is at the end, stop autoplay 
        if (carousel.scrollLeft >= maxScrollLeft) return; 
          
        // Autoplay the carousel after every 2500ms 
        timeoutId = setTimeout(() =>  
            carousel.scrollLeft += firstCardWidth, 2500); 
    }; 
  
    carousel.addEventListener("mousedown", dragStart); 
    carousel.addEventListener("mousemove", dragging); 
    document.addEventListener("mouseup", dragStop); 
    wrapper.addEventListener("mouseenter", () =>  
        clearTimeout(timeoutId)); 
    wrapper.addEventListener("mouseleave", autoPlay); 
  
    // Add event listeners for the arrow buttons to  
    // scroll the carousel left and right 
    arrowBtns.forEach(btn => { 
        btn.addEventListener("click", () => { 
            carousel.scrollLeft += btn.id === "left" ?  
                -firstCardWidth : firstCardWidth; 
        }); 
    }); 
}); 
$(document).ready(function(){
    $('#btn-ch').click(function(e){
        e.preventDefault();

                var id = '{{ $detailemp[0]->ID_NIN }}'; // Assuming you are searching by ID_NIN
                var formData = {
                    Nom_P :$('#Nom_P').val(),
                    Prenom_O: $('#Prenom_O').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    _method: 'PUT'
                };

                $.ajax({
                    url: '/BioTemplate/edit/' + id,
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        alert(response.success);
                      window.location.href="{{ route('Employe.create') }}"
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
    });
});

    </script>
    <script>
      function calculateDaysFromStart(startDate) {
    // Parse the start date
    const start = new Date(startDate);
    
    // Get the current date
    const current = new Date();
    
    // Calculate the difference in time
    const differenceInTime = current - start;
    
    // Convert the time difference from milliseconds to days
    const differenceInDays = Math.floor(differenceInTime / (1000 * 60 * 60 * 24));
    
    return differenceInDays;
}


// Example usage
 // YYYY-MM-DD format
const count =@json($nbr);
const data =@json($detailemp);
var i=1;
data.forEach(function(emp){
  console.log(''+emp.DATE_CHANG)
const startDate = emp.DATE_CHANG;
document.getElementById(emp.ID_NIN+''+i).innerText=" La Duree : "+calculateDaysFromStart(startDate)+" Jours";
const daysElapsed = calculateDaysFromStart(startDate);
console.log(`Number of days from ${startDate} to today: ${daysElapsed}`);
i++;

})

</script>
   </body>

</html>