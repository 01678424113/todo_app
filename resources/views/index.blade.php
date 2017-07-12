<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <base href="{{asset('')}}">
</head>
<body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<div class="top-1">
    <h1>This is my application!</h1>
</div>
{{--Over top-1--}}
<div class="content">
    <div class="row">
        <div class="col-sm-3 list-work">
            <ul>
                <li>
                    <a href="#">Study</a>
                </li>
                <li>
                    <a href="#">Work</a>
                </li>
                <li>
                    <a href="#">Love</a>
                </li>
            </ul>
        </div>
        {{--Over list-work--}}
        <div class="col-sm-3 list-day">
            <ul>
                <li>
                    <a href="#">Monday</a>
                </li>
                <li>
                    <a href="#">Tuesday</a>
                </li>
                <li>
                    <a href="#">Westerday</a>
                </li>
                <li>
                    <a href="#">Thirday</a>
                </li>
                <li>
                    <a href="#">Friday</a>
                </li>
                <li>
                    <a href="#">Sunday</a>
                </li>
            </ul>
        </div>
        {{--Over list-day--}}
        <div class="col-sm-6 my-work">
            <form action="/themcv" method="post" id="add_cv">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <input type="text" name="Title" placeholder="Nhập công việc" class="title-work"><br>
                    <input type="submit" value="Add" class="btn btn-success submit-work mt-2"><br>
                </div>
                <input type="text" name="Describes" placeholder="Nhập miêu tả" class="describe-work">
            </form>
        </div>
        {{--Over my-work--}}
    </div>
</div>
{{--Over content--}}
<div class="container mt-5">
    <h3>My Work</h3>
    <table class="table table-hover">
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Describes</td>
            <td>Done</td>
            <td>Delete</td>
        </tr>
        @foreach($mywork as $mw)
            <script>
                $(document).ready(function () {
                    $('#<?php echo ('work'.$mw->id); ?>').click(function () {
                        alert('Hello')
                    });
                })
            </script>
            <tr class="<?php
                if($mw->is_done == 1){
                    echo 'done';
                }
            ?>" id="{{ 'work'.$mw->id }}">
            <td>{{$mw->id}}</td>
            <td>{{$mw->Title}}</td>
            <td>{{$mw->Describes}}</td>
            <td><a href="/done/{{$mw->id}}" class="btn btn-success">Done</a></td>
            <td><p class="btn btn-danger" >Delete</p></td>
        </tr>
        @endforeach
    </table>
</div>
<div class="footer">

</div>
{{--Over footer--}}
</body>
</html>