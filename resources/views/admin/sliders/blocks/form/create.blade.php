<div class="row">
    <div class="form-group">
        {!! Form::label('image', 'Фото') !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('title', 'Заголовок') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('text', 'Описание') !!}
        {!! Form::text('text', null, ['class' => 'form-control']) !!}
        @error('text')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


