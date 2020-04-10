@extends('layouts/global_template')


@section('titre')
	Page de contact
@endsection

@section('section_principale')
    <div align="center">
        <h1 style="text-align: center;">LOCALISATION DE LA FACULTE DE GENIE INDUSTRIEL(FGI) </h1><br> 
       <br> 
       <!-- > <div class="row justify content-center"><br> <!-->
            <iframe  src="https://www.google.com/maps/d/u/0/embed?mid=1GbPvCjhaoxX2KaPqmJ-l2L6yb7Ub_Y_X" width="700" height="500">
            </iframe><br><br>
       <!-- > </div><!-->
        
    </div>
    <div>
        <h1 style="text-align: center;">COMMENT NOUS CONCTACTER</h1><br>
        <p class="kt-contact-description">Vous avez une question ? Besoin de renseignement ? Prenez contact avec la <strong>Faculté de Génie Industriel</strong> via le formulaire de contact ci-dessous, et nous vous donnerons une réponse dans un court délai.</p>
    </div>
    <div class="contact">
        <form method="POST" action="http://fgi-udo.cm/contact/send"><input type="hidden" >
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="name">Nom complet <span style="color: red;">*</span></label>
                    <input class="form-control" type="text" name="name" id="name" maxlength="191" required="">
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
                    <label for="phone">Téléphone <span style="color: red;">*</span></label>
                    <input class="form-control" type="text" name="phone" id="phone" maxlength="191">
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="form-group">
                    <label for="object">Objet</label>
                    <input class="form-control" type="text" name="object" id="object" maxlength="191">
                </div>
            </div>
        </div><!--row-->

        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="message">Message <span style="color: red;">*</span></label>

                    <textarea class="form-control" name="message" id="message" rows="5" required=""></textarea>
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
    </form>
</div>
                     
@endsection
