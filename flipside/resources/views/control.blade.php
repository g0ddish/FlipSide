@extends('layouts.main')

@section('content')
    <script>
        function update(jscolor) {
            // 'jscolor' instance can be used as a string
            console.log("update");
            document.body.style.backgroundColor = '#' + jscolor
        }
    </script>

    <div class="">

        <div class="col-md-12 text-center">
            <p>Control</p>
            <div class="panel panel-default">
                <div class="panel-body">
                    Color: <input class="jscolor" onchange="update(this.jscolor)" value="{{ $settings->background_color }}">
                </div>
            </div>
            <?php $settings = \App\Setting::find(1);

            ?>
        </div>


    </div>

@endsection
