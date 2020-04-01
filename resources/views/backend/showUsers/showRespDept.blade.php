
 <div class="row justify-content-center align-items-center">

        <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Fiche d'utilisateur</h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nom :</td>
                                <td><p>  {{ $respDept->name }}</p></td>
                            </tr>
                            <tr>
                                <td>Prenom :</td>
                                <td><p>  {{ $respDept->prenom }}</p></td>
                            </tr>
                            <tr>
                                <td>Poste :</td>
                                <td><p>  {{ $respDept->poste }}</p></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><p>  {{ $respDept->email }}</p></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left" ></span> Retour
            </a>
            @if( session('role') == 'admin')
            {!! link_to_route('respDept.edit', 'Modifier', [$respDept->id], ['class' => 'btn btn-warning  float-right']) !!}

            @endif

            <?php /*@else
            {!! link_to_route('respDept.edit', 'Modifier', [$respDept->id], ['class' => 'btn btn-warning  float-right','disabled' => true,'onclick' => 'prevent default']) !!}
          */; ?>

        </div>
    </div>
