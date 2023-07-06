<div class="alert alert-{{ $type }} alert-dismissible">
    @if(!empty($title))
    <h6 class="alert-heading d-flex align-items-center fw-bold mb-1">{{ $title }}</h6>
    @endif
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>