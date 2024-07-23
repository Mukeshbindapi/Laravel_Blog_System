@extends('layouts.auth')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endsection @section('content')
<!-- ====================================
    ——— CONTENT WRAPPER
    ===================================== -->
    <div class="content">
        <!-- Top Statistics -->
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 140px">
                    <div class="card-header">
                        <h2>{{ $postsCount }}</h2>

                        <div class="sub-title">
                            <span class="mr-1">Post</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 140px">
                    <div class="card-header">
                        <h2>{{ $tagsCount }}</h2>

                        <div class="sub-title">
                            <span class="mr-1">Tags</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 140px">
                    <div class="card-header">
                        <h2>{{ $categoriesCount }}</h2>

                        <div class="sub-title">
                            <span class="mr-1">Categories</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card card-default card" style="height: 140px">
                    <div class="card-header">
                        <h2>{{ $usersCount }}</h2>

                        <div class="sub-title">
                            <span class="mr-1">Users</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div> @endsection @section('scripts') <script src="{{ asset('assets/auth/plugins/apexcharts/apexcharts.js')}}"></script>
<script src="{{ asset('assets/auth/js/chart.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#logout_btn').click(function(){
            $('#logout_form').submit();
        })
    });
</script> @endsection
