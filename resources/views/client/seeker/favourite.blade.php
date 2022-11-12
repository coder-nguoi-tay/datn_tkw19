@extends('client.layout.seeker')
@section('seeker')
    <div class="dashboard-widg-bar d-block">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="data-responsive">
                    <!-- Single List -->
                    <user-favourite
                        :data="{{ json_encode([
                            'url' => 'http://127.0.0.1:8000/',
                        ]) }}">
                    </user-favourite>
                </div>
            </div>
        </div>
    </div>
@endsection
