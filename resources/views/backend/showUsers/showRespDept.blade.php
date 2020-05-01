
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
                                <td>Autorisation de modification :</td>
                                <td><p>  {{ $respDept->auth }}</p></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><p>  {{ $respDept->email }}</p></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>              
           
            @if( session('role') === 'admin')
            {!! link_to_route('respDept.edit', 'Modifier', [$respDept->id], ['class' => 'btn btn-warning  float-right']) !!}
            @endif
            
            <?php /* ?>
            @else
            {!! link_to_route('respDept.edit', 'Modifier', [$respDept->id], ['class' => 'btn btn-warning  float-right','disabled','onclick' => 'prevent default']) !!}
            
            <?php */ ?>
             <a href="javascript:history.back()" class="btn btn-info float-left">
               <i class="fas fa-chevron-circle-left"> Retour</i>
             </a>

             

        </div>
    </div>
