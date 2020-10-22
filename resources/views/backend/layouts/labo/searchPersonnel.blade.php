  <?php 
      $routeEdit = "personnel.edit";
      $routeShow = "personnel.show";
      $routeDelete = "personnel.delete";
      $routeIndex = "personnel.index";
      $routeAdd = "personnel.add";
   ?>
  
	<div class="row">
		<div class="card-body col-sm-offset-4 col-sm-12">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
          <div class="row">
            <div class="col-sm-12">
              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 166px;">#</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 219px;">Grade</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 204px;">Nom</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 139px;">Prenom</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 99px;">
                  </th>
                </tr>
                </thead>
                <tbody>
               
                  <?php $i = 0; ?>
                  @foreach ($personnels as $personnel)
                    @if($i = 0)
                    <tr  role="row" class="odd">
                    @else
                    <tr  role="row" class="even">
                    @endif
                        <td>{{ $personnel->id}}</td>
                        <td class="sorting_1"><strong>{{ $personnel->gradePers}}</strong></td>
                        <td class="text-secondary"><strong>{{ $personnel->nom}}</strong></td>
                        <td class="text-secondary"><strong>{{ $personnel->prenom}}</strong></td>

                        <td>{!! link_to_route($routeShow, 'Voir', [$personnel->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                        <td>
                          {!! Form::open(['method' => 'GET', 'route' => [$routeAdd,$choixM,$personnel->id]]) !!}
                            {!! Form::submit('Ajouter', ['class' => 'btn btn-warning btn-block']) !!}
                          {!! Form::close() !!}
                      </td>
                       
                    </tr>
                        <?php 
                          $i += 1;
                         if ($i == 2)
                          {
                           $i = 0;
                          } 
                        ?>
                       @endforeach 
                </tbody>
                <tfoot>
                <tr>
                  <th rowspan="1" colspan="1">#</th>
                  <th rowspan="1" colspan="1">Grade</th>
                  <th rowspan="1" colspan="1">Nom</th>
                  <th rowspan="1" colspan="1">Prénom</th>
                  <th rowspan="1" colspan="1"></th>
                  <th rowspan="1" colspan="1"></th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div> 
      
        @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
         
    
  	</div>
 
