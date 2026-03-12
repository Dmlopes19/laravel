<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super gestão - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel= "stylesheet" href="{{asset("css/estilo_basico.css")}}">  
    </head>

    <body>
        @include('site.layout._partials.topo') {{--inclusão do conteudo do topo da pagina para view--}}
        @yield('conteudo') {{--definindo o espaço onde ficará o conteudo da view--}}
    </body>
</html>