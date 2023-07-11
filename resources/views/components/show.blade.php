
@if( $wrap == '' )
    <p>{{ $value }}</p>
@endif

@if( $wrap == 'h' )
    <div class="row mb-3">
        <label class="col-sm-4 col-md-3 col-form-label">{{ $label }}</label>
        <div class="col-sm-8 col-md-9">
            <input type="text" readonly="" value="{{ $value }}" {{ $attributes->merge(['class' => 'form-control-plaintext']) }}>
        </div>
    </div>
@endif