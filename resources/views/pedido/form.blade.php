<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cliente_id" class="form-label">{{ __('Cliente') }}</label>
            <select name="cliente_id" class="form-control @error('cliente_id') is-invalid @enderror" id="cliente_id">
                <option value="">{{ __('Seleccione un cliente') }}</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ old('cliente_id', $pedido?->cliente_id) == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->name }} ({{ $cliente->email }})
                    </option>
                @endforeach
            </select>
            {!! $errors->first('cliente_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>