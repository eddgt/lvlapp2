<div class="form-group">
            {!!Form::label('nombre','Nombre:')!!}
            {!!Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Ingresa el Nombre la Pelicula'])!!}
            {!!Form::label('cast','Cast:')!!}
            {!!Form::text('cast',null,['class'=>'form-control', 'placeholder'=>'Ingresa Cast'])!!}
            {!!Form::label('direction','Direccion:')!!}
            {!!Form::text('direction',null,['class'=>'form-control', 'placeholder'=>'Ingresa Direccion'])!!}
            {!!Form::label('duration','Duracion:')!!}
            {!!Form::text('duration',null,['class'=>'form-control', 'placeholder'=>'Ingresa Duracion'])!!}
            {!!Form::label('genre_id','ID_Genero:')!!}
            {!!Form::text('genre_id',1,['class'=>'form-control', 'placeholder'=>'Ingresa '])!!}
        </div>        