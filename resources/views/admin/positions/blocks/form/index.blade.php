<div class="row">
    <div class="form-group">
        {!! Form::label('name', 'Специализация работника') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
