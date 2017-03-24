<!DOCTYPE html>
<html lang="en">
@include('admin.layouts.header')
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        @include('admin.layouts.sidebar')

        <!-- top navigation -->
@include('admin.layouts.top_nav')
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<script src="{{url('vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{url('vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js')}} -->
<script src="{{url('vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js')}} -->
<script src="{{url('vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{url('vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{url('vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{url('vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{url('vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="{{url('vendors/Flot/jquery.flot.stack.js')}}"></script>
<script src="{{url('vendors/Flot/jquery.flot.resize.js')}}"></script>
<!-- Flot plugins -->
<script src="{{url('vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
<script src="{{url('vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
<script src="{{url('vendors/flot.curvedlines/curvedLines.js')}}"></script>
<!-- DateJS -->
<script src="{{url('vendors/DateJS/build/date.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
<script src="{{url('vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{url('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{url('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- jQuery Smart Wizard -->
<script src="{{url('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')}}"></script>
<script src="{{url('vendors/moment/min/moment.min.js')}}"></script>
<script src="{{url('vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{url('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{url('vendors/google-code-prettify/src/prettify.js')}}"></script>
<!-- jQuery Tags Input -->
<script src="{{url('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
<!-- Switchery -->
<script src="{{url('vendors/switchery/dist/switchery.min.js')}}"></script>
<!-- Select2 -->
<script src="{{url('vendors/select2/dist/js/select2.full.min.js')}}"></script>
<!-- Parsley -->
<script src="{{url('vendors/parsleyjs/dist/parsley.min.js')}}"></script>
<!-- Autosize -->
<script src="{{url('vendors/autosize/dist/autosize.min.js')}}"></script>
<!-- jQuery autocomplete -->
<script src="{{url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
<!-- starrr -->
<script src="{{url('vendors/starrr/dist/starrr.js')}}"></script>
<!-- Custom Theme Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.4/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 450,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>
<script>
    $(document).ready(function () {
//        chọn số bài viết để thêm
        $('#number1').on('change',function () {
            var number=$(this).val();
            $.ajax({
                url:'curriculum',
                type:'get',
                data:{number:number},
                success: function (data) {
                    $('.curriculum').html(data);
                }
            })
        });
//        lấy số lượng bài viết để thêm trong update subject
        $('#number2').on('change',function () {
            var number=$(this).val();
//            lấy tổng số bài giảng để cộng thêm vào i
            var curr= $('#countCurr').val();
            $.ajax({
                url:'../edit_curriculum',
                type:'get',
                data:{number:number,curr:curr},
                success: function (data) {
                    $('.curriculum').html(data);
                }
            })
        });
//        show detail subject
        $('.show_detail').on('click', function () {
            var id=$(this).attr('id');
            $.ajax({
                type:'get',
                url:'{{route('admin.subjects.detailSubject')}}',
                dataType:'html',
                data:{id:id},
                success: function (data) {
                    $('.modal-body').html(data);
                }
            })
        });
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#avatar").change(function(){
            readURL(this);
            $('#preview').css({'width':'200px','height':'200px'});
        });
    });
</script>
<!-- Custom Theme Scripts -->
<script src="{{url('build/js/custom.min.js')}}"></script>

</body>
</html>
