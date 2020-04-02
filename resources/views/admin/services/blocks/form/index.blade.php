<div class="row">
    <div class="form-group">
        {!! Form::label('name', 'Услуга') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('price', 'Стоимость') !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


