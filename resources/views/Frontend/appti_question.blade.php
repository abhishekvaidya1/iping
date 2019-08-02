@extends('layouts.app_apti')
@section('title', 'Home')
@section('content')
<style>
    .control-label{
        font-weight: bold;
    }
</style>
<?php 
$x = 1;
$limit = 1;
if (isset($_GET['pageno'])) {
            $pn = $_GET['pageno'];
} else {
    $pn = 1;
}
$start_from = ($pn-1) * $limit; 
//$questions = DB::select(DB::raw("SELECT * FROM tbl_questions LIMIT $start_from, $limit"));

$questions = \App\Question::where(['flag'=>0])->orderBy('marks','asc')->get();
$note = \App\Note::orderBy('id','desc')->first();
//echo "<pre>";print_r($questions);exit;
?>
<!--<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--> 
<main class="app-content" style="margin: 50px;">
    <div class="app-title" style="position: fixed;z-index: 1;width: 93%;">
        <div>
            <h1> Online Aptitude Test</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">
                <h1>
                <div id="startValuesAndTargetExample">
                    <div class="values"></div>
                    <!--<div class="progress_bar">.</div>-->
                </div>
                </h1>
                </li>
            <!--<li class="breadcrumb-item"><a href="#">Test</a></li>-->
        </ul>
    </div>
    <div class="row" style="margin-top: 60px;">
        <div class="col-md-12">
            <form id="apt_form" method="post" action="{{ url('test') }}" >
                {{ csrf_field() }}
                <div class="tile">
                    <div class="form-group row">
                        <div class="col-md-12" style="color:black">
                            <p style="white-space: pre-line;"><b>{{$note->note}}</b><p>
                                <hr>
                        </div>
                    </div>
                    
                    @foreach($questions as $q)
                    <div class="form-group">
                        <label class="control-label" style="white-space: pre-line;">Ques {{$x++}} : <?php echo htmlspecialchars_decode(stripslashes($q->question));  ?></label>
                        <?php if($q->problem_fig != ""){ ?>
                        <br/><img src="problem_fig/{{$q->problem_fig}}">    
                        <?php } ?>
                        <?php if($q->answer_fig != ""){ ?>
                        <br/><img src="answer_fig/{{$q->answer_fig}}">    
                        <?php } 
                        if($q->option1 == "" && $q->option2 == "" && $q->option3 == "" && $q->option4 == ""){ ?>
                        <div class="form-group row">
                            <div class="col-md-8">
                              <input class="form-control col-md-8 number" name="qts[{{$q->id}}]" type="text" >
                            </div>
                        </div>
                           
                       <?php }else{
                        ?>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="qts[{{$q->id}}]" value="{{$q->option1}}">(A) {{$q->option1}}
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="qts[{{$q->id}}]" value="{{$q->option2}}">(B) {{$q->option2}}
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="qts[{{$q->id}}]" value="{{$q->option3}}">(C) {{$q->option3}}
                          </label>
                        </div>
                        <div class="form-check">
                          <label class="form-check-label">
                              <input class="form-check-input" type="radio" name="qts[{{$q->id}}]" value="{{$q->option4}}">(D) {{$q->option4}}
                          </label>
                        </div>
                        <?php } ?>
                    </div>
                    @endforeach
                    <!--<ul class="pagination">--> 
                        <?php   
//                        $questions1 = \App\Question::where(['flag'=>0])->count(); 
//                          $total_pages = ceil($questions1 / $limit);   
//                          $pagLink = "";                         
//                          for ($i=1; $i<=$total_pages; $i++) { 
//                            if ($i==$pn) { 
//                                $pagLink .= "<li class='active'><a href='test?page="
//                                                                  .$i."'>".$i."</a></li>"; 
//                            }             
//                            else  { 
//                                $pagLink .= "<li><a href='test?page=".$i."'> 
//                                                                  ".$i."</a></li>";   
//                            } 
//                          };   
//                          echo $pagLink;   
                        ?> 
      <!--</ul>--> 
                    <div class="tile-footer">
                        <div class="row">
                            <input type="hidden" id="start" name="time" value="" />
                            <input type="hidden" id="end" name="end_time" value="" />
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="button" id="btnsubmit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Submit</button>&nbsp;&nbsp;&nbsp;
                                <a class="btn btn-secondary" href="{{url('thank_you')}}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
      
    </div>
</main>
<script src="js/jquery.min.js"></script>
<script src="js/easytimer.min.js"></script>
<script>
$(document).ready(function(){
    $("#btnsubmit").on("click",function(){
        $("#apt_form").submit();
    })
})
 $(document).ready(function() {
        window.history.pushState(null, "", window.location.href);        
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });
    window.onload = function () {
        document.onkeydown = function (e) {
            return (e.which || e.keyCode) != 116;
        };
    }


var timer = new Timer();
var now = new Date(Date.now());
var start_time = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
$("#start").val(start_time);
//1800 second = 30 minuts;
timer.start({precision: 'seconds', startValues: {seconds: 00}, target: {seconds: 2700}});
$('#startValuesAndTargetExample .values').html(timer.getTimeValues().toString());
timer.addEventListener('secondsUpdated', function (e) {
    $('#startValuesAndTargetExample .values').html(timer.getTimeValues().toString());
    $('#startValuesAndTargetExample .progress_bar').html($('#startValuesAndTargetExample .progress_bar').html() + '.');
});
timer.addEventListener('targetAchieved', function (e) {
    var now = new Date(Date.now());
    var end_time = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
    $("#end").val(end_time);
    $("#apt_form").submit();
    $('#startValuesAndTargetExample .progress_bar').html('COMPLETE!!');
});    


$('.number').keypress(function(event) {
    var $this = $(this);
    if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
       ((event.which < 48 || event.which > 57) &&
       (event.which != 0 && event.which != 8))) {
           event.preventDefault();
    }

    var text = $(this).val();
    if ((event.which == 46) && (text.indexOf('.') == -1)) {
        setTimeout(function() {
            if ($this.val().substring($this.val().indexOf('.')).length > 5) {
                $this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
            }
        }, 1);
    }

    if ((text.indexOf('.') != -1) &&
        (text.substring(text.indexOf('.')).length > 5) &&
        (event.which != 0 && event.which != 8) &&
        ($(this)[0].selectionStart >= text.length - 2)) {
            event.preventDefault();
    }      
});
//var timer = new Timer();
//window.onload=function(){ 
//   timer.start();
//   window.setTimeout(function() { alert(); }, 300,000);
//};
//timer.addEventListener('secondsUpdated', function (e) {
//    $('#basicUsage').html(timer.getTimeValues().toString());
//});


//1800000 = 30 minutes
//300,000  = 5 minutes

</script>
@endsection
