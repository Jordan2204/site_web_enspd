
@section('formulaire')
 <div class="row justify-content-center align-items-center">
       
    <div class="col-md-6 col-lg-8">
        <div class="card card-primary">   
            <div class="card-header">
                <h3 class="card-title">@yield('titre')</h3>
            </div>
            <div class="card-body"> 
                <div class="col-sm-12">
                    @yield('formulaire')
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection