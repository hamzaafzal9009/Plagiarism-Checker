@php
ob_start("output_callback");
function output_callback($buffer) {
$buffer = str_replace("\t",'', $buffer);                      //Remove Html Tabs,
return trim(preg_replace(
array(
'/<!--(.|\s)*?-->/',                                      //Remove any HTML comments,
'/^[ \t]*[\r\n]+/m',                                      //Remove White Space,
'%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%',           //Remove Type attribute,
'/(\s+)(\w++(?<!\baction|\balt|\bcontent|\bsrc)="")/',    //Remove empty attribute,
'/ {3,}/'                                                 //Htnl code Pull left,
),
array(
'',
'',
'',
'',
''
) , $buffer  )
);
}

@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>SEO TOOLS - @yield('title')</title>
        <meta content="SEO TOOLS" name="description" />
        <meta content="hamzaafzal" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        @include('layouts.style')
    </head>

    <body>

    <div id="wrapper">
        <div>
            <div class="container-fluid">
              @include('layouts.navbar')
              <div class="row justify-content-end">
                <div class="col-sm-3">
                  @include('layouts.flash-message')
                </div>
              </div>
              @yield('content')
            </div>
        </div>
        @include('layouts.footer')
    </div>
    @include('layouts.scripts')
</body>
</html>
