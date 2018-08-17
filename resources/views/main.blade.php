
<!DOCTYPE html>
<html lang="en">

<head>

@include ('Partials._head')


</head>

<body>

@include ('Partials.top_bar')

@include ('Partials.nav')



    <div id="all">

        <div id="content">

        @yield ('content')
            


        </div>
        <!-- /#content -->

        @include ('Partials.footer')


        @include ('Partials.google_analytic')

        @include ('Partials.copyright')

        @include ('Partials.switcher')

    </div>
    <!-- /#all -->

    @include ('Partials.script')
    

    


</body>

</html>