@extends('layouts.adminlayout')
@section('container')
    @include('admin.include.side-bar')

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        @include('admin.include.side-bar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->


            <div class="col-12">
                <div class="ml-2"> <a href="{{ route('blog.index') }}"><i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="card">

                    @if (session('success'))
                        <div class="alert alert-success ">{{ session('success') }}</div>
                    @endif
                    @if (session('Error'))
                        <div class="alert alert-danger ">{{ session('Error') }}</div>
                    @endif
                    <div class="card-header">
                        <h3 class="card-title">Create Blog</h3>
                    </div>
                    <div class="card-body">

                        <div class="basic-form">

                            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image"
                                                class=" border form-control @error('image') is-invalid @enderror"
                                                accept="image/*" onchange="loadFile(event)">
                                            <img id="output" width="80px" class="mt-1">
                                            @error('image')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{ old('title') }}"
                                                class="form-control @error('title') is-invalid @enderror"
                                                placeholder="name">
                                            @error('title')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="content" id="summernote" cols="30" rows="10"
                                                class="form-control @error('description') is-invalid @enderror"></textarea>
                                            @error('description')
                                                <p class="text-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div id="dynamic-content-container">
                                    <!-- Dynamic content will be added here -->
                                </div>
                                <div class="col-sm-10">
                                    <div class="flex">
                                        <button type="button" id="add-more-content" class="btn btn-outline-success">Add
                                            More
                                            Content</button>
                                    </div>
                                    {{-- <p>OR</p> --}}
                                    <input type="submit" name="submit" id="submit" value="Add Blog"
                                        class="btn btn-outline-success">
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
                <!-- /.card -->


            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->
@endsection


<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function() {
        let contentCounter = 1;

        // Function to add dynamic content
        function addDynamicContent() {
            const dynamicContent = `
            <div class="dynamic-content" data-content-id="${contentCounter}">
                <hr>
                <h5>Additional Content ${contentCounter} (Optional)</h5>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="sub_image[]" class="border form-control" accept="image/*">
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="sub_title[]" class="form-control" placeholder="Sub Title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" id="summernote" cols="30" rows="10"
                        class="form-control @error('description') is-invalid @enderror"></textarea>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <a class="btn btn-danger remove-content" data-content-id="${contentCounter}">Remove Content</a>

            </div>`;

            $('#dynamic-content-container').append(dynamicContent);
            contentCounter++;
        }

        // Function to remove dynamic content
        function removeDynamicContent(contentId) {
            $(`[data-content-id="${contentId}"]`).remove();
        }

        // Handle "Add More Content" button click
        $('#add-more-content').on('click', function() {
            addDynamicContent();
        });

        // Handle "Remove Content" button click
        $('#dynamic-content-container').on('click', '.remove-content', function() {
            const contentId = $(this).data('content-id');
            removeDynamicContent(contentId);
        });

        // Initial addition of dynamic content
        addDynamicContent();
    });
</script>
