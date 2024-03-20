

@if (Session::has('success'))
    <div id="status-message" class="alert alert-success solid alert-dismissible fade show text-center">
        {{Session::get('success')}}
    </div>
@endif

@if (Session::has('danger'))
    <div class="text text-light text-center bg-danger">
        {{Session::get('danger')}}
    </div>
@endif

@if (Session::has('warning'))
    <div class="text text-light text-center bg-warning">
        {{Session::get('warning')}}
    </div>
@endif

@if (Session::has('errorConnection'))
    <div class="alert alert-dark solid alert-alt fade show text-center">
        {{Session::get('errorConnection')}}
    </div>
@endif

@if (Session::has('password'))
    <div class="text text-light text-center bg-danger">
        {{Session::get('password')}}
    </div>
@endif 

@if (Session::has('confirm_password'))
    <div class="text text-light text-center bg-danger">
        {{Session::get('confirm_password')}}
    </div>
@endif

@if (Session::has('updateProfil'))
    <div class="alert alert-secondary solid alert-dismissible fade show text-center">
        {{Session::get('updateProfil')}}
    </div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#status-message').delay(3000).fadeOut('slow');
    });
</script>
