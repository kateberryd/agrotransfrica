

@if(session()->has('message'))
    

<div class="alert alert-success ">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong>{{session()->get('message')}}.

</div>


@endif


@if(session()->has('error'))
    

<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> A <a href="#" class="alert-link">problem</a> {{session()->get('error')}}.
</div>


@endif



