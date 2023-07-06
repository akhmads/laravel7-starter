@push('scripts')
<script>
Swal.fire({
    title: '{{ $title }}',
    text: '{{ $text }}',
    icon: '{{ $icon }}',
    customClass: {
        confirmButton: 'btn btn-primary'
    },
    buttonsStyling: false
});
</script>
@endpush