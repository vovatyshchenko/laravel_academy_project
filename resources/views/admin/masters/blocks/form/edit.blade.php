<div class="row">
    <div class="form-group">
        {!! Form::label('surname', 'Фамилия') !!}
        {!! Form::text('surname', $master->surname, ['class' => 'form-control']) !!}
        @error('surname')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('name', 'Имя') !!}
        {!! Form::text('name', $master->name, ['class' => 'form-control']) !!}
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('patronymic', 'Отчество') !!}
        {!! Form::text('patronymic', $master->patronymic, ['class' => 'form-control']) !!}
        @error('patronymic')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('b_day', 'Дата рождения') !!}
        {!! Form::date('b_day', $master->b_day, ['class' => 'form-control']) !!}
        @error('b_day')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('position_id', 'Сипециализация') !!}
        @foreach($positions as $position)
            {!! Form::radio('position_id', $master->position->name) !!}
        @endforeach
        @error('position_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


