<?php if (isset($_GET['number'])) {
    $number = $_GET['number'];
} else {
    $number = 1;
}?>
@for($i=1;$i<=$number;$i++)
    <div class="ln_solid"></div>
    <h2 class="StepTitle">Bài {{$i}}</h2>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12"
               for="first-name">Bài số {{$i}}:
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="order[{{$i}}]" id="first-name"
                   required="required"
                   class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12"
               for="first-name">Tên bài {{$i}}:
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="title[{{$i}}]" id="first-name"
                   required="required"
                   class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    <div class="form-group">
        <label for="middle-name"
               class="control-label col-md-3 col-sm-3 col-xs-12">Thời lượng bài {{$i}}</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="middle-name" class="form-control col-md-7 col-xs-12"
                   type="text"
                   name="duration[{{$i}}]">
        </div>
        <input type="hidden" name="number" value="{{$i}}">
    </div>
@endfor