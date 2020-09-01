@extends('layouts/global_template')


@section('titre')
	Bienvenue a {{ config('app.sigle') }} - Dossiers Partenaires
@endsection


@section('section_principale')
	<div><h1 style="text-align: center;">DOSSIERS EN CIRCULATION À {{ config('app.sigle') }}</h1></div><br><br>
    <div class="row">
        <div class="col-12">
	       <div class="card card-primary">
                 <table class="table">
                    <thead>
                        <tr>
                           <th class="text-primary">Dossier</th>
                            <th class="text-primary">BCA N</th>
                            <th class="text-primary">Introduit le</th>
                            <!--<th class="text-primary">Position actuelle</th> -->
                            <th class="text-primary">Etapes</th>
                            <th class="text-primary">Observations</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dossiersPartenaires as $dossierPartenaire)
                            <tr>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->nomDOC !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->numBCA !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->date_intr !!}</strong></td>
                                 <!--<td class="text-secondary"><strong>{!! $dossierPartenaire->infosActu !!}</strong></td>-->
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->etape !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->observations !!}</strong></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
        </div>
    </div>
@endsection