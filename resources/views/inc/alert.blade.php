@if(session()->has('message'))
<div class="alert {{ session('alert') }}  w-100 alert-dismissible fade show" style="top:15px" role="alert">
    {{ session('message') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
