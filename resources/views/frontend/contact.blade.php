@extends('layouts/global_template')


@section('titre')
	Page de contact
@endsection

@section('section_principale')
    <div align="center">
        <h1 style="text-align: center;">LOCALISATION DE LA FACULTE DE GENIE INDUSTRIEL(FGI) </h1><br> 
    <div class="row justify-content-center">
            <iframe  src="https://www.google.com/maps/d/u/0/embed?mid=1GbPvCjhaoxX2KaPqmJ-l2L6yb7Ub_Y_X" width="950" height="500">
            </iframe><br><br>
    </div>
        
    </div>
    <div><br>
        <h1 style="text-align: center;">COMMENT NOUS CONCTACTER</h1><br>
        <p class="kt-contact-description">Vous avez une question ? Besoin de renseignement ? Prenez contact avec la <strong>Faculté de Génie Industriel</strong> via le formulaire de contact ci-dessous, et nous vous donnerons une réponse dans un court délai.</p>
    </div>
    <div class="contact">
        {!! Form::open(['route' => 'contactNA.store', 'class' => 'form-horizontal panel']) !!} 
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="nom">Nom complet <span style="color: red;">*</span></label>
                    <input class="form-control" type="text" name="nom" id="name" maxlength="191" required="">
                </div><!--form-group-->
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="email">Adresse email <span style="color: red;">*</span></label>
                    <input class="form-control" type="email" name="email" id="email" maxlength="191" required="">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="tel">Téléphone <span style="color: red;">*</span></label>
                    <input class="form-control" type="text" name="tel" id="phone" maxlength="191">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="objet">Objet</label>
                    <input class="form-control" type="text" name="objet" id="object" maxlength="191">
                </div>
            </div>
        </div><!--row-->

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="text">Message <span style="color: red;">*</span></label>

                    <textarea class="form-control" name="messageV" id="message" rows="5" required=""></textarea>
                </div><!--form-group-->
            </div><!--col-->
        </div><!--row-->

        <div class="row">
            <div class="col">
                <div class="form-group mb-0 clearfix">
                    <button class="btn btn-primary float-right" type="submit" >
                        Envoyer le message
                    </button>
                </div><!--form-group-->
            </div><!--col-->
        </div><!--row-->
    {!! Form::close() !!}
</div>
                     
@endsection
