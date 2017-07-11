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
            <form action="#" method="post">
                <input type="text" name="title" placeholder="Nhập công việc" class="title-work"><br>
                <input type="text" name="describe" placeholder="Nhập miêu tả" class="describe-work"><br>
                <input type="submit" value="Add" class="btn btn-success submit-work ">
            </form>
            <div id="accordion" role="tablist" aria-multiselectable="true">
                <div class="card">
                    <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-block">
                            eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid singl.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </a>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-block">
                            AAeiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid singl.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Over my-work--}}
    </div>
</div>
{{--Over content--}}
<div class="footer">

</div>
{{--Over footer--}}
</body>
</html>