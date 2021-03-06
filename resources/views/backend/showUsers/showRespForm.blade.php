
 <div class="row justify-content-center align-items-center">

        <div class="col-md-6 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Fiche d'utilisateur</h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nom :</td>
                                <td><p>  {{ $respForm->name }}</p></td>
                            </tr>
                            <tr>
                                <td>Prenom :</td>
                                <td><p>  {{ $respForm->prenom }}</p></td>
                            </tr>
                            <tr>
                                <td>Poste :</td>
                                <td><p>  {{ $respForm->poste }}</p></td>
                            </tr>
                            <tr>
                                <td>Autorisation de modification :</td>
                                <td><p>  {{ $respForm->auth }}</p></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><p>  {{ $respForm->email }}</p></td>
                            </tr>
                        </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary">
                <i class=" fas fa-chevron-circle-left"> Retour</i>
            </a>
            @if( session('role') == 'admin')
            {!! link_to_route('respForm.edit', 'Modifier', [$respForm->id], ['class' => 'btn btn-warning  float-right']) !!}

            @endif
            
        </div>
    </div>
