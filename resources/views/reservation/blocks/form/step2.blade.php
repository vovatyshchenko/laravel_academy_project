<div class="form-group">
    {!! Form::label('service', 'Выберите услугу') !!}
    <select name="service" class="form-control">
        @foreach($services as $service)
            <option value="{{ $service->name}} {{ $service->price }}">{{ $service->name}} {{ $service->price }} грн</option>
        @endforeach
    </select>
    @error('service')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    {!! Form::label('date', 'Выберите дату') !!}
    <select name="date" class="form-control">
       @foreach($master as $masterDate)
            <option value="{{ $masterDate->date }}">{{ $masterDate->date }}</option>
        @endforeach
    </select>
    @error('date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
