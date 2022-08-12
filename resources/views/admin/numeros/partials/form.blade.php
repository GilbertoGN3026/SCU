<div class="form-group">
         {!! Form::label('numero', 'Número') !!}
         {!! Form::text('numero', null, ['class' => 'form-control', 'placeholder'=>'Ingrese el número']) !!}
         @error('numero')
         <small class="text-danger">{{$message}}</small>
            
         @enderror

        </div>