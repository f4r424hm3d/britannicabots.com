@extends('admin.layouts.main')
@push('title')
<title>{{ $page_title }}</title>
@endpush
@section('main-section')
<style>
  .team-profile-pic {
    height: 100px;
    width: 100px;
    background-color: #fb892b;
    padding: 3px;
  }
</style>
<div class="page-content">
  <div class="container-fluid">

    <!-- start page title -->
    <div class="row">
      <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
          <h4 class="mb-sm-0 font-size-18">{{ $page_title }}</h4>

          <div class="page-title-right">
            <ol class="breadcrumb m-0">
              <li class="breadcrumb-item"><a href="{{ url('/admin/') }}"><i class="mdi mdi-home-outline"></i></a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $page_title }}</li>
            </ol>
          </div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-12">
        @if (session()->has('smsg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('smsg') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        @if (session()->has('emsg'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session()->get('emsg') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
      </div>
    </div>
    <!-- end page title -->
    <div class="row">
      <div class="col-xl-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">{{ $title }} Record</h4>
          </div>
          <div class="card-body">
            <form action="{{ $url }}" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
              @csrf
              <div class="row">
                <div class="col-md-4 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Select Designation</label>
                    <select name="designation" id="designation" class="form-control">
                      <option value="">Select</option>
                      @foreach ($designation as $ser)
                      <option value="{{ $ser->id }}" {{ $ft=='edit' && $sd->designation_id == $ser->id ? 'Selected' : ''
                        }}>{{
                        $ser->designation }}</option>
                      @endforeach
                    </select>
                    <span class="text-danger">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-8 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Enter Title</label>
                    <input name="title" type="text" class="form-control" placeholder="Enter Title"
                      value="{{ $ft == 'edit' ? $sd->title : old('title') }}">
                    <span class="text-danger">
                      @error('title')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-2 col-sm-12">
                  <div class="form-group mb-3">
                    <label>No of Position</label>
                    <input name="no_of_position" type="number" class="form-control" placeholder="No of Position"
                      value="{{ $ft == 'edit' ? $sd->no_of_position : old('no_of_position') }}">
                    <span class="text-danger">
                      @error('no_of_position')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Experience</label>
                    <input name="experience" type="text" class="form-control" placeholder="Experience"
                      value="{{ $ft == 'edit' ? $sd->experience : old('experience') }}">
                    <span class="text-danger">
                      @error('experience')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-6 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Location</label>
                    <input name="location" type="text" class="form-control" placeholder="Location"
                      value="{{ $ft == 'edit' ? $sd->location : old('location') }}">
                    <span class="text-danger">
                      @error('location')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Roles & Responsibilities</label>
                    <textarea name="roles" id="roles"
                      class="form-control">{{ $ft == 'edit' ? $sd->roles : old('roles') }}</textarea>
                    <span class="text-danger">
                      @error('roles')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Job Description</label>
                    <textarea name="job_description" id="job_description"
                      class="form-control">{{ $ft == 'edit' ? $sd->job_description : old('job_description') }}</textarea>
                    <span class="text-danger">
                      @error('job_description')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
              </div>
              @if ($ft == 'add')
              <button type="reset" class="btn btn-sm btn-warning  mr-1">
                <i class="ti-trash"></i> Reset
              </button>
              @endif
              @if ($ft == 'edit')
              <a href="{{ url('admin/levels') }}" class="btn btn-sm btn-info ">
                <i class="ti-trash"></i> Cancel
              </a>
              @endif
              <button class="btn btn-sm btn-primary" type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="datatable" class="table table-bordered dt-responsiv nowra w-100">
              <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Designation</th>
                  <th>Title</th>
                  <th>Info</th>
                  <th>Roles</th>
                  <th>description</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($rows as $row)
                <tr id="row{{ $row->id }}">
                  <td>{{ $i }}</td>
                  <td>{{ $row->getDesignation->designation }}</td>
                  <td>{{ $row->title }}</td>
                  <td>
                    <ul>
                      <li><b>No. of Position : </b>{{ $row->no_of_position }}</li>
                      <li><b>Experience : </b>{{ $row->experience }}</li>
                      <li><b>Location : </b>{{ $row->Location }}</li>
                    </ul>
                  </td>
                  <td>
                    <p style="text-align: justify">
                      {!! $row->roles !!}
                    </p>
                  </td>
                  <td>
                    <p style="text-align: justify">
                      {!! $row->job_description !!}
                    </p>
                  </td>
                  <td id="statustd{{ $row->id }}">
                    <span id="asts{{ $row->id }}" class="badge bg-success {{ $row->status == 1 ? '' : 'hide-this' }}"
                      onclick="changeStatus('{{ $row->id }}','0')">Active</span>
                    <span id="ists{{ $row->id }}" class="badge bg-danger {{ $row->status == 0 ? '' : 'hide-this' }}"
                      onclick="changeStatus('{{ $row->id }}','1')">Inactive</span>
                  </td>
                  <td>
                    <a href="javascript:void()" onclick="DeleteAjax('{{ $row->id }}')"
                      class="waves-effect waves-light btn btn-sm btn-outline btn-danger">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <a href="{{ url('admin/vacancy/update/' . $row->id) }}"
                      class="waves-effect waves-light btn btn-sm btn-outline btn-info">
                      <i class="fa fa-edit" aria-hidden="true"></i>
                    </a>
                  </td>
                </tr>
                @php
                $i++;
                @endphp
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  CKEDITOR.replace("roles");
  CKEDITOR.replace("job_description");
  function changeStatus(id, val) {
    //alert(id);
    var tbl = 'vacancies';
    $.ajax({
      url: "{{ url('common/change-status') }}",
      method: "GET",
      data: {
        id: id,
        tbl: tbl,
        val: val
      },
      success: function(data) {
        if (data == '1') {
          //alert('status changed of ' + id + ' to ' + val);
          if (val == '1') {
            $('#asts' + id).toggle();
            $('#ists' + id).toggle();
          }
          if (val == '0') {
            $('#asts' + id).toggle();
            $('#ists' + id).toggle();
          }
        }
      }
    });

  }

  function DeleteAjax(id) {
    //alert(id);
    var cd = confirm("Are you sure ?");
    if (cd == true) {
      $.ajax({
        url: "{{ url('admin/vacancy/delete') }}" + "/" + id,
        success: function(data) {
          if (data == '1') {
            $('#row' + id).remove();
            var h = 'Success';
            var msg = 'Record deleted successfully';
            var type = 'success';
            $('#toastMsg').text(msg);
            $('#liveToast').show();
          }
        }
      });
    }
  }
</script>
@endsection
