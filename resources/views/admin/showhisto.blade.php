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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Rendez Vous</li>
          </ol>
          <h6 style="color: #239447;" class="font-weight-bolder mb-0">Liste Des Rendez Vous</h6>
        </nav>
        <div class=" navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav justify-content-end">
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
            <div class="card-header pb-0 ">
              <div class="d-flex align-items-center justify-content-between">
            <div class="p"><h6>Rendez - Vous</h6></div>
              <div>
                 <li class="nav-item px-3 d-flex align-items-end">
                <a href="{{ route('download.histo.pdf') }}" class="nav-link text-body p-0">
                    <i class="fa fa-download mr-2" aria-hidden="true"></i>Exporter Rendez Vous
                </a>
            </li>
              </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="filter-year">Année :</label>
                  <select id="filter-year" style="width: 200px;" class="form-select ml-1">
                    <option value="">Toutes les années</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <!-- Ajoutez d'autres années si nécessaire -->
                  </select>
                </div>
                <div class="col-md-6">
                  <label for="filter-doctor">Médecin :</label>
                  <select id="filter-doctor" style="width: 200px;" class="form-select ml-1">
                      <option value="">Tous les médecins</option>
                      @foreach($doctors as $doctor)
                      <option value="{{ $doctor }}">{{ $doctor }}</option>
                      @endforeach
                  </select>
                </div>
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
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Médecin</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
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
                      <td class="align-middle text-center text-sm data-doctor">
                        <h6 class="mb-0 text-sm">{{$appoint->doctor}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm data-year">
                        <h6 class="mb-0 text-sm">{{$appoint->date}}</h6>
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
  // Filtrage par année et par médecin
  const filterYearSelect = document.getElementById('filter-year');
  const filterDoctorSelect = document.getElementById('filter-doctor');
  const dataRows = document.getElementsByClassName('data-row');

  filterYearSelect.addEventListener('change', applyFilters);
  filterDoctorSelect.addEventListener('change', applyFilters);

  function applyFilters() {
    const year = filterYearSelect.value;
    const doctor = filterDoctorSelect.value;

    for (let i = 0; i < dataRows.length; i++) {
      const dataYear = dataRows[i].querySelector('.data-year').innerText;
      const dataDoctor = dataRows[i].querySelector('.data-doctor').innerText;

      if ((year === '' || dataYear.includes(year)) && (doctor === '' || dataDoctor === doctor)) {
        dataRows[i].style.display = 'table-row';
      } else {
        dataRows[i].style.display = 'none';
      }
    }
  }
</script>

</body>

</html>
