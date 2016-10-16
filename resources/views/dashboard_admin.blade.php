<!DOCTYPE html>
<html>

<head>
    @include('common.header')
</head>

<body>
    <div id="wrapper">
        @include('common.leftnavigation_admin')
        <div id="page-wrapper" class="gray-bg dashbard-1">
            @include('common.topnavigation')
            <div class="wrapper wrapper-content animated fadeIn">


             
      

          
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content">
                <div class="row">

                </div>
            </div>
            @include('common.footer')
        </div>
    </div>

</div>
</div>

@include('common.js')
@if(Session::has('success'))
<script>
$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success("{{Session::get('success')}}");

    }, 1300);

});
</script>
@endif

@if(Session::has('failure'))
<script>
$(document).ready(function() {
    setTimeout(function() {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.error("{{Session::get('failure')}}");

    }, 1300);

});
</script>
@endif

<script src="js/plugins/footable/footable.all.min.js"></script>
<script>
$(document).ready(function() {

    $('.footable').footable();
    $('.footable2').footable();

});

</script>


</body>
</html>