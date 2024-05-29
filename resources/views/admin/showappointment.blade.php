<!DOCTYPE html>
<html lang="en">

<head>
@include('admin.css')
<style>
  .navbar-vertical .navbar-nav>.nav-item .nav-link.active .icon {
    background-image: linear-gradient(310deg, #239447 0%, #239447 100%);

  }
  aside{
    background-image: linear-gradient(310deg, #239447 0%, #239447 100%);
  }
  .modal-content {
        background-color: #ffffff;
    }

    .modal-header {
        background-color: #ffffff;
        border-bottom: none;
    }

    .modal-title {
        color: #000000;
        font-weight: bold;
    }
</style>
<link rel="shortcut icon" href="assests/img/icon.png" type="image/x-icon"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


</head>

<body class="g-sidenav-show bg-gray-100">
  @include('admin.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-success active" aria-current="page">Rendez Vous</li>
          </ol>
          <h6   class="font-weight-bolder text-success mb-0">Liste Des Rendez Vous</h6>
        </nav>
        <div class=" navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav  justify-content-end">
            <x-app-layout>
    
            </x-app-layout>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Rendez - Vous</h6>
              <div class="mt-3">
                <label for="status-filter" class="form-label">Filtrer par STATU :</label>
                <select id="status-filter" class="form-select">
                  <option value="">Tous</option>
                  <option value="Approved">Approved</option>
                  <option value="Canceled">Canceled</option>
                  <option value="In progress">In progress</option>
                </select>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Patient</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tel</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Medecin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Message</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Statu</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Opérations</th>
                    </tr>
                  </thead>
                  <tbody>
  @foreach($data as $appoint)
  <tr class="data-row">
    <td class="align-middle text-center text-sm">
      <h6 class="mb-0 text-sm">{{$appoint->name}}</h6>
    </td>
    <td class="align-middle text-center text-sm">
      <h6 class="mb-0 text-sm">{{$appoint->email}}</h6>
    </td>
    <td class="align-middle text-center text-sm">
      <h6 class="mb-0 text-sm">{{$appoint->phone}}</h6>
    </td>
    <td class="align-middle text-center text-sm">
      <h6 class="mb-0 text-sm">{{$appoint->doctor}}</h6>
    </td>
    <td class="align-middle text-center text-sm">
      <h6 class="mb-0 text-sm">{{$appoint->date}}</h6>
      <div class="date-input-container">
        <input type="date" class="date-picker-input" style="display: none;">
        <button class="save-button" style="display: none;"><i class="fa fa-save"></i></button>
      </div>
      @if($appoint->status == 'In progress')
      <a class="" href="{{url('updateapp',$appoint->id)}}"><i class="fa fa-edit cursor-pointer"></i></a>
      @endif
    </td>
    <td class="align-middle text-center text-sm">
      <h6 class="mb-0 text-sm">{{$appoint->message}}</h6>
    </td>
    <td class="align-middle text-center text-sm status-cell">
      <h6 class="mb-0 text-sm">{{$appoint->status}}</h6>
    </td>
    <td class="align-middle text-center text-sm">
      @if($appoint->status == 'Approved')
      <!-- Hide the Approved button -->
      <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Annuler</a>
      <button class="btn btn-success" disabled>Approuver</button>
      @elseif($appoint->status == 'Canceled')
      <!-- Hide the Canceled button -->
      <!-- Show the Retablir button -->
      <a class="btn btn-warning" href="{{url('restored',$appoint->id)}}">Retablir</a>
      <button class="btn btn-danger" disabled>Annuler</button>
      @elseif($appoint->status == 'In progress')
      <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approuver</a>
      <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Annuler</a>
      @endif
    </td>
  </tr>
  @endforeach
</tbody>

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </main>
  



  <!-- Core JS Files -->
  @include('admin.script')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const statusFilter = document.getElementById('status-filter');
      const tableRows = document.querySelectorAll('.data-row');

      statusFilter.addEventListener('change', function() {
        const selectedStatus = this.value;

        tableRows.forEach(function(row) {
          const statusCell = row.querySelector('.status-cell');
          const status = statusCell.textContent.trim();

          if (selectedStatus === '' || status === selectedStatus) {
            row.style.display = 'table-row';
          } else {
            row.style.display = 'none';
          }
        });
      });
    });
  </script>
 

</body>

</html>
