@section('custom_scripts')
<script>
    let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function (html) {
        let switchery = new Switchery(html, {size: 'small'});
    });
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        $('.js-switch').change(function () {
            let status = $(this).prop('checked') === true ? 1 : 0;
            let courseId = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: '{{ route('courses.status') }}',
                data: {'status': status, 'course_id': courseId},
                success: function (data) {
                    Swal.fire({
                        position: 'top-end',
                        toast: true,
                        icon: data.icon,
                        title: data.message,
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            });
        });
    });
</script>
@endsection
