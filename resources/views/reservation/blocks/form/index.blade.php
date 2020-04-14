<div class="form-group col-12">
    {!! Form::label('name', 'Ваше имя') !!}
    {!! Form::text('name', Auth::user()->name, ['class' => 'form-control']) !!}
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {!! Form::label('tel', 'Номер телефона') !!}
    {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'xxx xxx xx xx']) !!}
    @error('tel')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {!! Form::label('master', 'Выберите мастера') !!}
    <select name="master" class="form-control">
         @foreach($masters as $name)
             <option value="{{ $name->id}}">{{ $name->name }} {{ $name->surname }}</option>
         @endforeach
    </select>
    @error('master')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
