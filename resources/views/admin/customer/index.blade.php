@extends('layouts.admin')
@section('content')
<style type="text/css">
  th{
   background-color: #875A7B;
   color: white;
 }
 .box-body{
   background-color: white;
 }
 .box-title{
  color: white;
}
.box-header{
  /*background-color:#105e7d;*/
}
</style>

<form class="form-horizontal form_submit" method="POST" autocomplete="off">
  {{ csrf_field() }}
  <section class="content">
    <div class="col-xs-12 no-padding">
      <div class="box-header">
        <h3 class="box-title" style="color: grey;"><i class="fa fa-user"></i>&nbsp;&nbsp; All Customer Information</h3>
        <a href="#"><button data-toggle="modal" data-target="#customer" data-backdrop="static" data-keyboard="false" class="pull-right" type="button"><i class="glyphicon glyphicon-plus-sign"></i></button></a>
      </div>
      <div class="box-body table-responsive">
        <table id="customer_datatable" class="table table-bordered text-center" width="100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Image</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </section>
</form>
@include('admin.customer.modal')
@endsection

@section('extra_script')
<script type="text/javascript">
  "use strict";
  var KTDatatablesDataSourceAjaxServer = function() {
    var initTable1 = function() {
      var base_url = '{!! url('admin/customer-datatable-ajax') !!}';

      $('#customer_datatable').DataTable({
        "responsive": true,
        "searchDelay": 500,
        "processing": true,
        "serverSide": true,
        "ajax": {
          "url" : base_url,
          "dataType" : 'json',

        },
        columns: [
        {"data": 'customer_name'},
        {"data": 'image'},
        {"data": 'address'},
        {"data": 'phone'},
        {"data": 'email'},
        {"data": 'actions'},
        ]

      });
    };
    return {
      init: function() {
        initTable1();
      },
    };
  }();
  jQuery(document).ready(function() {
    KTDatatablesDataSourceAjaxServer.init();
  });
</script>
<script type="text/javascript">
  // For image preview
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#uploaded_image')
        .attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#customer_form').submit(function(e){
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        type:'POST',
        url: "{{ url('admin/customer')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (response) => {
          console.log(response)
          if(response.status_code == 422){
            var err_msg = '';
            $.each(response.errors,(i,error) => {
              err_msg += error + '\n';
            });
            swal({
              title: response.message,
              text: err_msg,
              closeOnClickOutside: false,
              button: 'OK'
            }).then(() => {
            });
          }else if(response.status_code == 200){
            $('#customer').modal('hide');
            swal({
              title: response.message,
              button: 'OK'
            }).then(() => {
              $('#customer_datatable').DataTable().ajax.reload();
              $('#customer_form')[0].reset();
            });
          }else{
            swal({
              title: 'You are not authorized!',
              button: 'OK'
            }).then(() => {
              window.location.href = document.referrer;
            });
          }
        },
        error: function(data){
         console.log(data);
       }
     });
    })
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#customer_datatable').on('click','#show',function(){
      var customer_id = $(this).attr('data-id');
      $.ajax({
        type:'GET',
        url: 'customer/'+customer_id,
        data: {},
        cache:false,
        contentType: false,
        processData: false,
        success: (response) => {
          // console.log(response['data'])

          $('#customer_name').html('');
          $('.phone').html('');
          $('.email').html('');
          $('.address').html('');

          $('#customer_name').html(response['data'].customer_name);
          $('.phone').html(response['data'].phone);
          $('.email').html(response['data'].email);
          $('.address').html(response['data'].address);

          if(response['data'].image){
            $('#customer_image').attr('src','');
            var BasePath = 'assets/images/';
            var Path = BasePath.concat(response['data'].image);
            var urr = '{{ asset(':id') }}';
            urr = urr.replace(':id',Path);
            $('#customer_image').attr('src',urr);
          }else{
            $('#customer_image').attr('src','{{ asset('assets/images/avatar.png') }}');
          }
        },
        error: function(data){
         console.log(data);
       }
     });
    })
  })
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.nationality').hide();
    $('.reg_no').hide();
    $('.passport').hide();
    $('.purpose').hide();
    $('.nationality_check').on('click',function(){
      if($(this).val() == 'F'){
        $('.nationality').show();
        $('.reg_no').show();
        $('.passport').show();
        $('.purpose').show();
      }else{
        $('.nationality').hide();
        $('.reg_no').hide();
        $('.passport').hide();
        $('.purpose').hide();
      }
    })
  })
</script>
@endsection