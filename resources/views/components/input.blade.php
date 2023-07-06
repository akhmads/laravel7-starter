
@if( $wrap == '' )
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name,$value) }}" {{ $attributes->merge(['class' => 'form-control']) }} />
@endif

@if( $wrap == 'h' )
    <div class="row mb-3">
        <label class="col-sm-4 col-md-3 col-lg-2 col-form-label">{{ $label }}</label>
        <div class="col-sm-8 col-md-9 col-lg-10">
            <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name,$value) }}" class="form-control @error($name) is-invalid @enderror {{ $class }}" {{ $attributes }} />
            @error($name)
            <div class="text-danger mt-1 mb-1" style="font-size:85%;">{{ $message }}</div>
            @enderror
        </div>
    </div>
@endif
<?php /*@error('title') is-invalid @enderror*/ ?>