<!-- 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <form action="">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" placeholder="enter title" class="form-control" name="">
                        </div>

                        <div class="form-group">
                            <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->