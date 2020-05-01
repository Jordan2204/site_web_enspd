 <div class="row justify-content-center align-items-center">

        <div class="col-md-4 col-sm-6 col-xm-8">
            <div class="card card-primary">   
                <div class="card-header">
                    <h3 class="card-title">Fiche Partenaire</h3>
                </div>
                <div class="card-body"> 
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Raison sociale:</td>
                                <td><p>  {{ $partenaire->raison_socialePLabo }}</p></td>
                            </tr>
                            <tr>
                                <td>Ville :</td>
                                <td><p>  {{ $partenaire->villePLabo }}</p></td>
                            </tr>
                         </tbody>
                        
                    </table>

                </div>
            </div>              
            <a href="javascript:history.back()" class="btn btn-primary float-left"><i class="fas fa-chevron-circle-left"> </i> Retour
            </a>
             @if(session('role') === 'admin')
                 {!! link_to_route('partenairelaboAdmin.edit', 'Modifier', [$partenaire->id], ['class' => 'btn btn-warning  float-right']) !!}
             @elseif(session('role') === 'respecoledoct')
                {!! link_to_route('partenairelabo.edit', 'Modifier', [$partenaire->id], ['class' => 'btn btn-warning  float-right']) !!}
            @endif
           
        </div>
    </div>
