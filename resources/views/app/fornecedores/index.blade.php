<h3> fornecedores </h3>

{{--fica o comentario que será descartado pelo interpretador do blade


@if(count($fornecedores)> 0 && count($fornecedores) <10)
    <h3> Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3> Exisstem vários fornecedores cadastrados</h3>
@else
    <h3> Ainda não existem fornecedores cadastrados</h3>
@endif --}}

{{--@unless executa se o retorno for false--}}
{{--@isset Evita erro caso a variável não tenha sido enviada pelo controller.--}}

@isset($fornecedores)
    @php $i = 0 @endphp
        @while(isset($fornecedores[$i]))
            Fornecedores:{{$fornecedores[$i]['nome'] }}
            <br>
            Status:{{$fornecedores[$i]['status'] }}
            <br>
            CNPJ:{{$fornecedores[$i]['cnpj'] ?? '' }}
            <br>
            Telefone:({{$fornecedores[$i]['ddd'] ??'' }}) {{$fornecedores[$i]['telefone'] ?? ''}}                         
            <hr>
            @php $i++ @endphp
        @endwhile
@endisset