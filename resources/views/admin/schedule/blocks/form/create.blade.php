<div class="row">
    <div class="form-group">
        {!! Form::label('name', 'Имя работника') !!}
        <select name="name" class="form-control">
            @foreach($masterName as $name)
                <option value="{{ $name->name}} ">{{ $name->name }} {{ $name->surname }}</option>
            @endforeach
        </select>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        {!! Form::label('date', 'Дата') !!}
        {!! Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
        @error('date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
</div>
