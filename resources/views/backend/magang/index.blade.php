@extends('layouts.backend')

@section('content')
<div class="container" style="padding-bottom: 20px;padding-top:20px">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Magang dan PKL</h1>
        <a class="btn btn-sm btn-create btn-primary" href="javascript:void(0)" id="createMagang"><i
            class="fa fa-plus text-white-50"></i> Data</a>
    </div>
    <table class="table table-bordered data-table display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>No</th>
                <th>Instansi / Sekolah</th>
                <th>Jurusan</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Berakhir</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div class="modal fade" id="ajax-magang-modal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-nama_instansi" id="magangcrudModal"></h4>
            </div>
            <div class="modal-body">
            <div class="alert alert-danger print-error-msg" style="display:none">
                <ul></ul>
            </div>
            <form id="magangForm" name="magangForm" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="magang_id" id="magang_id">
                <div class="form-group">
                    <label for="nama_instansi" class="col-sm-2 control-label">Nama Instansi/Sekolah</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" placeholder="Enter Tilte" value="" maxlength="50" required="">
                    </div>
                    <span id="field_error"></span>
                </div>
                <div class="form-group">
                    <label for="jurusan" class="col-sm-2 control-label">Jurusan</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Enter Tilte" value="" maxlength="50" required="">
                    </div>
                    <span id="field_error"></span>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Mulai</label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai" placeholder="Enter tgl_mulai" value="" required="">
                    </div>
                    <span id="field_error"></span>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tanggal Berakhir</label>
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="tgl_berakhir" name="tgl_berakhir" placeholder="Enter tgl_mulai" value="" required="">
                    </div>
                    <span id="field_error"></span>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Deskripsi </label>
                    <div class="col-sm-12">
                        <textarea class="form-control" id="deskripsi_kegiatan" name="deskripsi_kegiatan" value="" required=""></textarea>
                    </div>
                    <span id="field_error"></span>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">foto</label>
                    <div class="col-sm-12">
                        <input id="foto" type="file" name="foto" accept="foto/*" onchange="readURL(this);">
                        <input type="hidden" name="hidden_foto" id="hidden_foto">
                    </div>
                    <span id="field_error"></span>
                </div>
                <img id="modal-preview" src="https://via.placeholder.com/150" alt="Preview" class="form-group hidden" width="100" height="100">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" id="btn-save" value="create">Save changes
                    </button>
                </div>
            </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
    
@endsection
@push('after-script')
<script type="text/javascript">
var SITEURL = '{{URL::to('')}}';
$(document).ready( function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        columnDefs: [
                {
                    targets: [-5,-4,-3,-2,-1],
                    className: 'dt-body-center'
                },
                {
                    targets: [-5,-4,-3,-2,-1],
                    className: ['dt-head-center']
                }
        ],
        ajax: {
            url: "{{route('magang_backend.index')}}",
            type: 'GET',
        },

        columns: [
                    {data: 'id', name: 'id', 'visible': false},
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false},
                    {data: 'nama_instansi', name: 'nama_instansi'},
                    {data: 'jurusan', name: 'jurusan'},
                    {data: 'tgl_mulai', name: 'tgl_mulai', render: DataTable.render.date()},
                    {data: 'tgl_berakhir',   name: 'tgl_berakhir', render: DataTable.render.date()},
                    {data: 'deskripsi_kegiatan', name: 'deskripsi_kegiatan'},
                    {data: 'foto', name: 'foto'},
                    {data: 'action', name: 'action', orderable: false, searchable: true},
               ],

        order: [[0, 'desc']]
    });

    /*  When user click add user button */
    $('#createMagang').click(function () {
        $('#btn-save').val("create-magang");
        $('#magang_id').val('');
        $('#magangForm').trigger("reset");
        $('#magangcrudModal').html("Add New Magang");
        $('#ajax-magang-modal').modal('show');
        $('#modal-preview').attr('src', 'https://via.placeholder.com/150');
    });

   /* When click edit user */
    $('body').on('click', '.edit-magang', function () {
        var magang_id = $(this).data('id');
            $.get("{{route('magang_backend.index')}}" + '/' + magang_id + '/' +'edit', function (data)  {
                $('#nama_instansi-error').hide();
                $('#jurusan-error').hide();
                $('#tgl_mulai-error').hide();
                $('#magangcrudModal').html("Edit magang");
                $('#btn-save').val("edit-magang");
                $('#ajax-magang-modal').modal('show');
                $('#magang_id').val(data.id);
                $('#nama_instansi').val(data.nama_instansi);
                $('#jurusan').val(data.jurusan);
                $('#tgl_mulai').val(data.tgl_mulai);
                $('#tgl_berakhir').val(data.tgl_berakhir);
                $('#deskripsi_kegiatan').val(data.deskripsi_kegiatan);
                $('#modal-preview').attr('alt', 'No foto available');

            if(data.foto){
                $('#modal-preview').attr('src', 'public/magang/'+data.foto);
                $('#hidden_foto').attr('src', 'public/magang/'+data.foto);
            }
        })
    });

    $('body').on('click', '#delete-magang', function () {
        var magang_id = $(this).data("id");
        if(confirm("Are You sure want to delete !")){
            $.ajax({
              type: "DELETE",
              url: "{{route('magang_backend.index')}}" + '/' + magang_id,
              data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
              success: function (data) {
              var oTable = $('.data-table').dataTable();
              oTable.fnDraw(false);
              },
                error: function (data) {
                    console.log('Error:', data);
                }
            });
        }
    }); 
});

$('body').on('submit', '#magangForm', function (e) {
      e.preventDefault();
      var actionType = $('#btn-save').val();
      $('#btn-save').html('Sending..');
      var formData = new FormData(this);
      $.ajax({
          type:'POST',
          url:"{{ route('magang_backend.store')}}",
          data: formData,
          cache:false,
          contentType: false,
          processData: false,
          success: (data) => {

              $('#magangForm').trigger("reset");
              $('#ajax-magang-modal').modal('hide');
              $('#btn-save').html('Save Changes');
              var oTable = $('.data-table').dataTable();
              oTable.fnDraw(false);
          },
          error: function(data){
              console.log('Error:', data);
              $('#btn-save').html('Save Changes');
          }
      });

      function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
  });

function readURL(input, id) {
  id = id || '#modal-preview';
  if (input.files && input.files[0]) {

      var reader = new FileReader();
      reader.onload = function (e) {
          $(id).attr('src', e.target.result);
      };

      reader.readAsDataURL(input.files[0]);
      $('#modal-preview').removeClass('hidden');
      $('#start').hide();

  }
}

</script>
@endpush