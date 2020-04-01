@extends('admin/layouts/templateAdmin')

 @section('title')
    FGI Admin | Gestion des dossiers
  @endsection

  @section('dashboard')
    Gestion des Dossiers
  @endsection

  @section('apresHome')
    DossiersManage
  @endsection

@section('content')
	<div class="rows">
		<div class="card-body col-sm-offset-4 col-sm-12">
           
                   @if(session()->has('ok'))
                     <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
                  @endif
                <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Liste des Dossiers</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Dossier</th>
                            <th>BCA N</th>
                            <th>Introduit le</th>
                            <th>Position actuelle</th>
                            <th>Etapes</th>
                            <th>Observations</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dossiersPartenaires as $dossierPartenaire)
                            <tr>
                                <td>{!! $dossierPartenaire->id !!}</td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->nomDOC !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->numBCA !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->date_intr !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->infosActu !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->etape !!}</strong></td>
                                <td class="text-secondary"><strong>{!! $dossierPartenaire->observations !!}</strong></td>
                                <td>{!! link_to_route('docPartenaires.show', 'Consulter', [$dossierPartenaire->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                                <td>{!! link_to_route('docPartenaires.edit', 'Modifier', [$dossierPartenaire->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                                <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['docPartenaires.destroy', $dossierPartenaire->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
            {!! link_to_route('docPartenaires.create', 'Nouveau Dossier', [], ['class' => 'btn btn-info float-right']) !!}
   </div>
  </div> 
@endsection