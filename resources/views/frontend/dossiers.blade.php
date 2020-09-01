@extends('layouts/global_template')


@section('titre')
	{{ config('app.namemaj') }} : Le Laboratoire E3M
@endsection


@section('section_principale')
	<div><h1 style="text-align: center;">DOSSIERS EN CIRCULATION À {{ config('app.namemaj') }}</h1></div><br>
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
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['docPartenaires.destroy', $dossierPartenaire->id]]) !!}
                                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
@endsection