<h3>Fornecedor</h3>

{{-- Teste comentário --}}

@php
    // Teste de comentário nativo
    // if () 
    // elseif ( ) {
    //     # code...
    // }
    // else {
    //     # code...
    // }
@endphp

{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Exitem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Exitem vários fornecedores</h3>
@else 
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
<br>
@isset($fornecedores)
    @unless ($fornecedores[0]['status'] == 'S')
        Fornecedor inativo 
    @endunless
@endisset   
<br>