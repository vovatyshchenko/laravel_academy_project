<div class="row">
        <div class="form-group">
            {!! Form::label('surname', 'Фамилия') !!}
            {!! Form::text('surname', null, ['class' => 'form-control']) !!}
            {!! Form::label('name', 'Имя') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            {!! Form::label('patronymic', 'Отчество') !!}
            {!! Form::text('patronymic', null, ['class' => 'form-control']) !!}
            {!! Form::label('b_day', 'Чило, месяц, год рождения') !!}
            {!! Form::date('b_day', null, ['class' => 'form-control']) !!}
            {!! Form::label('position_id', 'Сипециализация') !!}
            @foreach($positions as $position)
                {!! Form::radio('position_id', $loop->iteration) !!}
            @endforeach
        </div>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
</div>


