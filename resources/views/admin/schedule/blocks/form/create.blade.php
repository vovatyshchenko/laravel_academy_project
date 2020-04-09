<div class="row">
    <div class="form-group">
        {!! Form::label('master_id', 'Имя работника') !!}
        <select name="master_id" class="form-control">
            @foreach($masterName as $name)
                <option value="{{ $name->id}} ">{{ $name->name }} {{ $name->surname }}</option>
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
