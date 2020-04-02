<div class="row">
    <div class="form-group">
        @foreach($masterName as $name)
            {!! Form::radio('name', $name->name, ['class' => 'form-control'])  !!}
        @endforeach
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('date', 'Дата') !!}
        {!! Form::date('date', null, ['class' => 'form-control']) !!}
        @error('date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
