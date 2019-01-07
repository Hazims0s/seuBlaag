    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="align-content: center;text-align: center;">مرحبا بكم في صفحة تعقب البلاغات</div>

                        <div class="card-body align-middle res " style="align-items: center; padding: 25px " >


                            <form action="\track\get" style="text-align: right; float:right; "  method="post" >
                                {{csrf_field()}}


                          <div class="form-group">
                              <label style="text-align: right;  float:right;"  for="reporter_email">البريد الالكتروني </label>
                              <label style="text-align: right;  float:left;"  for="reporter_email">Email</label><br/>
                              <input  id="reporter_email"  style="text-align: right;  float:right;" type="email" class="form-control" name="reporter_email" placeholder="example@exapmle.com">
                          </div>
                          <br/>
                          <br/>

                          <div class="form-group">
                              <label style="text-align: right;  float:right;"  for="repoid">رقم البلاغ </label>
                              <label style="text-align: right;  float:left;"  for="repoid">Report No.</label>
                              <input id="repoid" style="text-align: right;  float:right;" type="text" class="form-control" name="repoid" placeholder="0123456">
                          </div>
                          <br/>

                          <br/>
                          <br/>
                          <input style="text-align: center;  float:left;" type="submit" class="btn btn-primary" name="submit" value="ارسال" >


                      </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


     <!--   <script  type="text/javascript">

            $("#carefresh").click(function() {
                $.ajax({
                    type: 'GET',
                    url: 'refresh_captcha',
                    success: function(data) {
                        $(".captcha span").html(data.captcha);
                    }
                })
            });

        </script> -->
    @endsection
