<!-- Small boxes (Stat box) -->
    <div class="row">
      <!-- ./col -->
      <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>

            <p>Unique Visitors</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
       <div class="col-lg-6 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            @if(session('auth'))
              <p>Temps qu'il vous reste pour effectuer la mise a jour</p>
              <h3>{{ $date_gestion->difference }}</h3>
          
            @else
                <h4>Vous n'avez pas l'autorisation</h4>
                <h4> Veuillez contacter votre administrateur</h4>
            @endif
        
          </div>
          <div class="icon">
            <i class="ion ion-clock"></i>
          </div>
         </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- right col (We are only adding the ID to make the widgets sortable)-->
     
          <!-- /.card-body-->
          <div class="card " hidden="">
            <div class="">
              <div class="col-4 text-center">
                <div id="sparkline-1"></div>
               </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-2"></div>
                </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <div id="sparkline-3"></div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
        <!-- /.card -->
      <section class="col-6 connectedSortable">

        <!-- Calendar -->
        <div class="card bg-gradient-success">
          <div class="card-header border-0">

            <h3 class="card-title">
              <i class="far fa-calendar-alt"></i>
              Calendar
            </h3>
            <!-- tools card -->
            <div class="card-tools">
              <!-- button with a dropdown -->
              <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-bars"></i></button>
                <div class="dropdown-menu float-right" role="menu">
                  <a href="#" class="dropdown-item">Add new event</a>
                  <a href="#" class="dropdown-item">Clear events</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">View calendar</a>
                </div>
              </div>
              <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
            <!-- /. tools -->
          </div>
          <!-- /.card-header -->
          <div class="card-body pt-0">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->