@extends('admin.layouts.main')
@push('title')
  <title>{{ $page_title }}</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush
@section('main-section')
  <div class="page-content">
    <div class="container-fluid">
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
          <!-- NOTIFICATION FIELD START -->
          <x-result-notification-field />
          <!-- NOTIFICATION FIELD END -->
        </div>
      </div>
      <div class="row">
        <div class="col-xl-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">
                {{ $title }} Record
                <span style="float:right;">
                  <button class="btn btn-xs btn-info tglBtn">+</button>
                  <button class="btn btn-xs btn-info tglBtn hide-this">-</button>
                </span>
              </h4>
            </div>
            <div class="card-body" id="tblCDiv">
              <form action="{{ $url }}" class="needs-validation" method="post" enctype="multipart/form-data"
                novalidate>
                @csrf
                <div class="row">
                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-select-field type="text" label="Select Category" name="category_id" id="category_id"
                      :ft="$ft" :sd="$sd" :list="$categories" showv="category_name" savev="id" />
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-input-field type="text" label="Sub Category Name" name="sub_category_name"
                      id="sub_category_name" :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-input-field type="text" label="Sub Category Slug" name="sub_category_slug"
                      id="sub_category_slug" :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-4 col-sm-12 mb-3">
                    <x-input-field type="text" label="Banner Title" name="banner_title" id="banner_title"
                      :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-12 col-sm-12 mb-3">
                    <x-textarea-field label="Banner Short Note" name="banner_shortnote" id="banner_shortnote"
                      :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-3 col-sm-12 mb-3">
                    <x-input-field type="text" label="Hourly Price" name="hourly_price" id="hourly_price"
                      :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-3 col-sm-12 mb-3">
                    <x-input-field type="text" label="Year of Experience" name="year_of_experience"
                      id="year_of_experience" :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-3 col-sm-12 mb-3">
                    <x-input-field type="text" label="Developers" name="developers" id="developers" :ft="$ft"
                      :sd="$sd" />
                  </div>

                  <div class="col-md-3 col-sm-12 mb-3">
                    <x-input-field type="text" label="Clients" name="clients" id="clients" :ft="$ft"
                      :sd="$sd" />
                  </div>

                  <div class="col-md-3 col-sm-12 mb-3 hide-this">
                    <x-input-field type="file" label="Banner Image" name="banner_image" id="banner_image"
                      :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-12 col-sm-12 mb-3">
                    <x-input-field type="text" label="Title" name="title" id="title" :ft="$ft"
                      :sd="$sd" />
                  </div>

                  <div class="col-md-12 col-sm-12 mb-3">
                    <x-textarea-field label="Description" name="description" id="description" :ft="$ft"
                      :sd="$sd" />
                  </div>

                  <div class="col-md-9 col-sm-12 mb-3">
                    <x-input-field type="text" label="Section 2 Title" name="section2_title" id="section2_title"
                      :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-3 col-sm-12 mb-3">
                    <x-input-field type="file" label="Section 2 Image" name="section2_image" id="section2_image"
                      :ft="$ft" :sd="$sd" />
                  </div>

                  <div class="col-md-12 col-sm-12 mb-3">
                    <x-textarea-field label="Section 2 Description" name="section2_description"
                      id="section2_description" :ft="$ft" :sd="$sd" />
                  </div>
                </div>
                <hr>
                <x-seo-field :ft="$ft" :sd="$sd" />

                @if ($ft == 'add')
                  <button type="reset" class="btn btn-sm btn-warning  mr-1"><i class="ti-trash"></i>
                    Reset</button>
                @endif
                @if ($ft == 'edit')
                  <a href="{{ aurl($page_route) }}" class="btn btn-sm btn-info "><i class="ti-trash"></i> Cancel</a>
                @endif
                <button class="btn btn-sm btn-primary" type="submit">Submit</button>
              </form>
            </div>
          </div>
          <!-- end card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body" id="trdata">
              <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>Sr. No.</th>
                    <th>Category Name</th>
                    <th>Images</th>
                    <th>Clients Logo</th>
                    <th>SEO</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($rows as $index => $row)
                    <tr id="row{{ $row->id }}">
                      <td>{{ $index + 1 }}</td>
                      <td><a
                          href="{{ route('hire.resources.subcategory', ['category_slug' => $row->category->category_slug, 'sub_category_slug' => $row->sub_category_slug]) }}"
                          target="_blank">{{ $row->sub_category_name }}</a></td>
                      <td>
                        @if ($row->section2_image)
                          <a href="{{ asset($row->section2_image) }}" target="_blank">View</a>
                        @else
                          N/A
                        @endif
                      </td>
                      <td>
                        <x-custom-button :url="url('admin/hire-resources-sub-category-clients/' . $row->id)" label="Clients Logo" btnSize="btn-sm"
                          btnColor="btn-outline-info" badgeClass="bg-danger" :count="$row->clientsLogo->count()" />
                      </td>
                      <td>
                        <x-seo-view-model :row="$row" />
                      </td>
                      <td>
                        <x-delete-button :id="$row->id" />
                        <x-edit-button :url="url('admin/' . $page_route . '/update/' . $row->id)" />
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6">
                        <center>No data found</center>
                      </td>
                    </tr>
                  @endforelse
                </tbody>
              </table>

              <div>
                {!! $rows->links('pagination::bootstrap-5') !!}
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    CKEDITOR.replace('description');
  </script>
  @include('admin.js.delete-data')
@endsection
