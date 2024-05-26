<?php

// Contrôleur Appointment
use App\Models\Appointment;

$appointmentsCount = Appointment::count();

// Contrôleur User
use App\Models\User;

$usersCount = User::count();

// Contrôleur Doctor
use App\Models\Doctor;

$doctorsCount = Doctor::count();
?>

<div class="container-fluid py-4">
<div class="row">
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Nombre de patients</p>
                            <h5 class="font-weight-bolder mb-0">
                                <?php echo $usersCount; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"
                            style=" background-image: linear-gradient(310deg, #239447 0%, #239447 100%);">
                            <i class="fas fa-hospital-user text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Nombre de rendez-vous</p>
                            <h5 class="font-weight-bolder mb-0">
                                <?php echo $appointmentsCount; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"
                            style=" background-image: linear-gradient(310deg, #239447 0%, #239447 100%);">
                            <i class="far fa-calendar text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-sm-6">
        <div class="card">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Nombre de médecins</p>
                            <h5 class="font-weight-bolder mb-0">
                                <?php echo $doctorsCount; ?>
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md"
                            style=" background-image: linear-gradient(310deg, #239447 0%, #239447 100%);">
                            <i class="fas fa-stethoscope text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

     
      <div class="row mt-4">
      <div class="col-lg-8 mb-lg-0 mb-4">
    <div class="card z-index-2">
      <div class="card-body p-3">
        <div id="calendar"></div>
      </div>
    </div>
  </div>
        
      </div>
  
     
    </div>