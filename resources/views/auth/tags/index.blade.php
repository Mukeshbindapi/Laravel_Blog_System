@extends('layouts.auth')

@section('title', 'Tags')

@section('styles')
<link href="{{ asset('assets/auth/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Card for Post List -->
    <div class="card card-default">
        <div class="card-header">
            <h2 class="card-title">Tags</h2>
        </div>

        @if(session('alert-success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Success!</strong> {{ session('alert-success') }}
            </div>
         @endif

        <div class="card-body">
            @if(count($tags) > 0 )
                <table class="table" id="posts">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th class="text-center" scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->id }}</td>
                                <td>{{ $tag->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-danger text-center" role="alert">
                    No Category Found.
                </div>
            @endif
        </div>
    </div>
</div>
@endsection


@section('scripts')
<script src="{{ asset('assets/auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#posts').DataTable({
            'bLengthChange' : false
        });
    })
</script>
@endsection
