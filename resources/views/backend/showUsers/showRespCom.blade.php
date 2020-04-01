

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
                                <td><p>  {{ $respCom->name }}</p></td>
                            </tr>
                            <tr>
                                <td>Prenom :</td>
                                <td><p>  {{ $respCom->prenom }}</p></td>
                            </tr>
                            <tr>
                                <td>Poste :</td>
                                <td><p>  {{ $respCom->poste }}</p></td>
                            </tr>
                            <tr>
                                <td>Auth :</td>
                                <td><p>  {{ $respCom->auth }}</p></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><p>  {{ $respCom->email }}</p></td>
                            </tr>
                        </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary">
                <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
            </a>
            @if( session('role') == 'admin')
            {!! link_to_route('respCom.edit', 'Modifier', [$respCom->id], ['class' => 'btn btn-warning  float-right']) !!}

            @endif
        </div>
    </div>
