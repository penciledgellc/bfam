@extends('layouts.admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-9 col-lg-8">

                <div class="section3125 mt-50">
                    <h4 class="item_title">All Courses</h4>
                    <div class="la5lo1">
                        @livewire('admin-all-course-list')
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
