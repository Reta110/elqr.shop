<!-- Identifier Field -->
<div class="form-group">
    {!! Form::label('identifier', 'Identifier:') !!}
    <p>{{ $bank->identifier }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $bank->phone }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $bank->code }}</p>
</div>

<!-- Phone To Field -->
<div class="form-group">
    {!! Form::label('phone_to', 'Phone To:') !!}
    <p>{{ $bank->phone_to }}</p>
</div>

