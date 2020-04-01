     {{ csrf_field() }}  
          <div class="input-group mb-3{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
            </div>
             @if ($errors->has('email'))
                <span class="help-block">
                    <strong style="color: red ;">{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="input-group mb-3{{ $errors->has('password') ? ' has-error' : '' }}">
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @if ($errors->has('password'))
            <span class="help-block">
                <strong style="color: red;">{{ $errors->first('password') }}</strong>
            </span>
        @endif
        </div>
        <div class="row">
         <!-- /.col -->
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fa fa-lock"></i>
              Connexion
            </button>
          <!-- /.col -->
        </div>