
<!-- jQuery  -->
<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="{!! asset('js/app.js') !!}"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="{!! asset('js/sweetalert2.min.js') !!}"></script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<!-- App js -->


@yield('page_script_plugins')


<script>
    var host_url = "{{ Request::getHost()}}"
    if (host_url === '127.0.0.1') {
        host_url ='http://'+host_url+ ':8000'
    }
    function deleteData(routing){
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            var csrf_token = $('meta[name="_token"]').attr('content');
            
            $.ajax({
                type: "DELETE",
                headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
                url: routing,
                success: function (data) {
                //  Swal.fire('Deleted!', data, 'success')
                    window.location.reload();
                }
            });
        }
        })
    }
    @yield('raw_javascript')
    
    $(document).ready(function(){
        $('#myTable').DataTable();
		$('#sidebarCollapse').on('click',function(){
			$('#sidebar').toggleClass('active');
		})
        @yield('jquery')
	})
    
    // @if (Session::has('success'))
    //     swal({
    //         title: "Success!",
    //         text: "{!! Session::get('success') !!}",
    //         icon: "success",
    //         button: "Close",
    //     });
    // @endif
</script>
