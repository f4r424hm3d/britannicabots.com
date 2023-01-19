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
                    <label>Enter Name</label>
                    <input name="name" type="text" class="form-control" placeholder="Enter Name"
                      value="{{ $ft == 'edit' ? $sd->name : old('name') }}">
                    <span class="text-danger">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-8 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Meta Title</label>
                    <input name="meta_title" type="text" class="form-control" placeholder="Enter Meta Title"
                      value="{{ $ft == 'edit' ? $sd->meta_title : old('meta_title') }}">
                    <span class="text-danger">
                      @error('meta_title')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Meta Keyword</label>
                    <input name="meta_keyword" type="text" class="form-control" placeholder="Meta Keyword"
                      value="{{ $ft == 'edit' ? $sd->meta_keyword : old('meta_keyword') }}">
                    <span class="text-danger">
                      @error('meta_keyword')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" id="meta_description" class="form-control" cols="30" rows="5">{{ $ft == 'edit' ? $sd->meta_description : old('meta_description') }}</textarea>
                    <span class="text-danger">
                      @error('meta_description')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Page Content</label>
                    <input name="page_content" type="text" class="form-control" placeholder="Page Content"
                      value="{{ $ft == 'edit' ? $sd->page_content : old('page_content') }}">
                    <span class="text-danger">
                      @error('page_content')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>
                <div class="col-md-4 col-sm-12">
                  <div class="form-group mb-3">
                    <label>Seo Rating</label>
                    <input name="seo_rating" type="text" class="form-control" placeholder="Seo Rating"
                      value="{{ $ft == 'edit' ? $sd->seo_rating : old('seo_rating') }}">
                    <span class="text-danger">
                      @error('seo_rating')
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
                  <th>Name</th>
                  <th>SEO</th>
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
                  <td>{{ $row->name }}</td>
                  <td>
                    @if ($row->meta_title != null)
                    <button type="button" class="btn btn-xs btn-outline-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#SeoModalScrollable{{ $row->id }}">View</button>
                    <div class="modal fade" id="SeoModalScrollable{{ $row->id }}" tabindex="-1" role="dialog"
                      aria-labelledby="SeoModalScrollableTitle{{ $row->id }}" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="SeoModalScrollableTitle{{ $row->id }}">
                              SEO
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            {!! $row->meta_title !!} <br>
                            {!! $row->meta_keyword !!} <br>
                            {!! $row->meta_description !!} <br>
                            {!! $row->page_content !!} <br>
                            {!! $row->seo_rating !!}
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    @else
                    Null
                    @endif
                  </td>
                  <td>
                    <a href="javascript:void()" onclick="DeleteAjax('{{ $row->id }}')"
                      class="waves-effect waves-light btn btn-sm btn-outline btn-danger">
                      <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                    <a href="{{ url('admin/blog-category/update/' . $row->id) }}"
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
  function changeStatus(id, val) {
    //alert(id);
    var tbl = 'blog_categories';
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
        url: "{{ url('admin/blog-category/delete') }}" + "/" + id,
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
