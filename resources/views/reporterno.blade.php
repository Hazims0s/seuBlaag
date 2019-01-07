    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="align-content: center;text-align: center;">مرحبا بكم في صفحة البلاغات</div>

                        <div class="card-body"style="direction: rtl; text-align: center; align-content: center;" >
                            <H3  style="direction: rtl; text-align: center; align-content: center;" >  رقم البلاغ </H3>
                            <br/>
                            <H3  style="direction: rtl; text-align: center; align-content: center;" > @php {{echo  $op->id ;}} @endphp</H3>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
