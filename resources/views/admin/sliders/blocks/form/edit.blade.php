<div class="row">
    <div class="form-group">
        <img class="img-fluid" width="80" src="{{ URL::to('/') }}/storage/{{ $slider->image }}" alt="photo">
        <br>
        {!! Form::label('image', 'Фото') !!}
        {!! Form::file('image', ['class' => 'form-control']) !!}
        <input type="hidden" name="hiddenImage" value="{{ $slider->image }}">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('title', 'Заголовок') !!}
        {!! Form::text('title', $slider->title, ['class' => 'form-control']) !!}
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('text', 'Описание') !!}
        {!! Form::text('text', $slider->text, ['class' => 'form-control']) !!}
        @error('text')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>


