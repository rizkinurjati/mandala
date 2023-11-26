@extends('layouts.backend')

@section('content')
<div class="container" style="padding-bottom: 20px;padding-top:20px">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Magang dan PKL</h1>
        <a class="btn btn-sm btn-create btn-primary" href="javascript:void(0)" id="createMagang"><i
            class="fa fa-plus text-white-50"></i> Data</a>
    </div>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Instansi / Sekolah</th>
                <th>Jurusan</th>
                <th>Tanggal Mulai</th>
                <th>Lama magang</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
                
                <div class="alert alert-danger print-error-msg" style="display:none">
                    <ul></ul>
                </div>
                <form action="{{ route('magang_crud.store')}}" id="MagangForm" name="MagangForm" class="form-horizontal" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_instansi" class="control-label">Nama Instansi/Sekolah</label>
                        <div class="col">
                            <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="Enter Intanstion Name..." value="" maxlength="50" required="">
                        </div>
                        <span id="field_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="jurusan" class="control-label">Jurusan</label>
                        <div class="col">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Enter Intanstion Name..." value="" maxlength="50" required="">
                        </div>
                        <span id="field_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="tgl_pelaksanaan" class="control-label">Tanggal Mulai Pelaksanaan</label>
                        <div class="col">
                            <input type="date" class="form-control" id="tgl_pelaksanaan" name="tgl_pelaksanaan" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                        <span id="field_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="lama_magang" class="control-label">Lama Magang</label>
                        <div class="col">
                            <input type="number" class="form-control" id="lama_magang" name="lama_magang" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                        <span id="field_error"></span>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <strong>Foto:</strong>
                            <input id="foto" type="file" name="foto">
                        </div>
                    </div>
                    <span id="field_error"></span>
                    <span id="field_error"></span>
                    <div class="form-group">
                        <label for="deskripsi_kegiatan" class="control-label">Deskripsi Kegiatan</label>
                        <div class="col">
                            <textarea  class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" placeholder="Enter Name" value="" maxlength="50" required=""></textarea>
                        </div>
                        <span id="field_error"></span>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-sm btn-submit btn-primary" id="saveBtn" value="create">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('after-script')
<script type="text/javascript">
    // $(function () {
  
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //   });
  
    //   var table = $('.data-table').DataTable({
    //     processing: true,
    //     serverSide: true,
    //     responsive: true,
    //     rowReorder: {
    //     selector: 'td:nth-child(2)'
    //     },
    //     columnDefs: [
    //             {
    //                 targets: [-5,-4,-3,-2,-1],
    //                 className: 'dt-body-center'
    //             },
    //             {
    //                 targets: [-5,-4,-3,-2,-1],
    //                 className: ['dt-head-center']
    //             }
    //     ],
    //       ajax: "",
    //       columns: [
    //           {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    //           {data: 'nama_instansi', name: 'nama_instansi'},
    //           {data: 'jurusan', name: 'jurusan'},
    //           {data: 'tgl_pelaksanaan', name: 'tgl_pelaksanaan'},
    //           {data: 'lama_magang', name: 'lama_magang'},
    //           {data: 'deskripsi_kegiatan', name: 'deskripsi_kegiatan'},
    //           {data: 'foto', name: 'foto'},
    //           {data: 'action', name: 'action', orderable: false, searchable: true},
    //       ]
    //   });
  
    //   $('#createMagang').click(function () {
    //       $('#saveBtn').val("create-Magang");
    //       $('#Magang_id').val('');
    //       $('#MagangForm').trigger("reset");
    //       $('#modelHeading').html("Input Data Magang/PKL");
    //       $('#ajaxModel').modal('show');
    //   });
  
    //   $('body').on('click', '.editBatas', function () {
    //     var Magang_id = $(this).data('id');
    //     $.get("{{route('magang_crud.index')}}" + '/' + Magang_id + '/' +'edit', function (data) {
    //         $('#modelHeading').html("Edit Magang");
    //         $('#saveBtn').val("edit-user");
    //         $('#ajaxModel').modal('show');
    //         $('#Magang_id').val(data.id);
    //         $('#nama_instansi').val(data.nama_instansi);
    //         $('#jurusan').val(data.jurusan);
    //         $('#tgl_pelaksanaan').val(data.tgl_pelaksanaan);
    //         $('#lama_magang').val(data.lama_magang);
    //         $('#foto').val(data.foto);
    //         $('#deskripsi').val(data.deskripsi);
    //     })
    //  });
  
    //   $('#saveBtn').click(function (e) {
    //       e.preventDefault();
    //       $(this).html('Sending..');
  
    //       $.ajax({
    //         data: $('#MagangForm').serialize(),
    //         url: "",
    //         type: "POST",
    //         dataType: 'json',
    //         success: function (data) {
    //             if($.isEmptyObject(data.error)){
    //                 $('#MagangForm').trigger("reset");
    //                 $('#ajaxModel').modal('hide');
    //                 table.draw();
    //             }else{
    //                 printErrorMsg(data.error);
    //                 $('#saveBtn').html('Save Changes');
    //             }
  
    //         },
    //     });

    //     function printErrorMsg (msg) {
    //         $(".print-error-msg").find("ul").html('');
    //         $(".print-error-msg").css('display','block');
    //         $.each( msg, function( key, value ) {
    //             $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    //         });
    //     }

    //   });
  
    //   $('body').on('click', '.deleteMagang', function () {
  
    //       var Magang_id = $(this).data("id");
    //       confirm("Are You sure want to delete !");
  
    //       $.ajax({
    //           type: "DELETE",
    //           url: "{{route('magang_crud.index')}}" + '/' + Magang_id,
    //           data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
    //           success: function (data) {
    //               table.draw();
    //           },
    //           error: function (data) {
    //               console.log('Error:', data);
    //           }
    //       });
    //   });
  
    // });

    $(function () {
  
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
});

var table = $('.data-table').DataTable({
    processing: true,
    serverSide: true,
    ajax: "",
    columns: [
        {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        {data: 'nama_instansi', name: 'nama_instansi'},
        {data: 'jurusan', name: 'jurusan'},
        {data: 'tgl_pelaksanaan', name: 'tgl_pelaksanaan'},
        {data: 'lama_magang', name: 'lama_magang'},
        {data: 'deskripsi_kegiatan', name: 'deskripsi_kegiatan'},
        {data: 'foto', name: 'foto'},
        {data: 'action', name: 'action', orderable: false, searchable: true},
    ],
  //   createdRow: function ( row, data, index ) {
  //             if (data['due_amount'] > 0) {
  //                 $('td', row).eq(4).css('background-color', '#f4511e','color','#ffffff');
  //                 $('td', row).eq(4).css('color','#ffffff');
  //             } else {

  //             }
  //             $('td', row).eq(1).addClass('text-right');
  //             $('td', row).eq(2).addClass('text-right');
  //             $('td', row).eq(3).addClass('text-right');
  //             $('td', row).eq(4).addClass('text-right');
  //             $('td', row).eq(5).addClass('text-right');
  //             $('td', row).eq(6).addClass('text-right');
  //         }
});

$('#createMagang').click(function () {
    $('#saveBtn').val("create-batas");
    $('#Magang_id').val('');
    $('#ModelForm').trigger("reset");
    $('#modelHeading').html("Input Model");
    $('#ajaxModel').modal('show');
});

      $('body').on('click', '.editMagang', function () {
        var Magang_id = $(this).data('id');
        $.get("{{route('magang_crud.index')}}" + '/' + Magang_id + '/' +'edit', function (data) {
            $('#modelHeading').html("Edit Magang");
            $('#saveBtn').val("edit-user");
            $('#ajaxModel').modal('show');
            $('#Magang_id').val(data.id);
            $('#nama_instansi').val(data.nama_instansi);
            $('#jurusan').val(data.jurusan);
            $('#tgl_pelaksanaan').val(data.tgl_pelaksanaan);
            $('#lama_magang').val(data.lama_magang);
            $('#foto').val(data.foto);
            $('#deskripsi').val(data.deskripsi);
        })
     });

$('body').on('click', '.deleteMagang', function () {
  var Magang_id = $(this).data("id");
  confirm("Are You sure want to delete !");

          $.ajax({
              type: "DELETE",
              url: "{{ route('magang_crud.index') }}" + '/' + Magang_id,
              data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
              success: function (data) {
                  table.draw();
              },
              error: function (data) {
                  console.log('Error:', data);
              }
          });
          });
});
  </script>
@endpush