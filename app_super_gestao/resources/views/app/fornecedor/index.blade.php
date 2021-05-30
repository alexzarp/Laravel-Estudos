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

{{-- @dd($fornecedores) Visualisa as informaçãoes--}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Exitem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Exitem vários fornecedores</h3>
@else 
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif
<br>
@isset($fornecedores)
{{-- invesão de resultado true - false --}}
    @unless ($fornecedores[0]['status'] == 'S')
        Fornecedor inativo 
    @endunless
@endisset   
<br>
{{-- @empty 
    ''
    0
    0.0
    '0'
    null
    false
    array[]
    $var
    --}}
@isset($fornecedores)
    CNPJ: {{$fornecedores[1]['CNPJ'] ?? "Dado vazio"}} <br>
    cnpj: {{$fornecedores[1]['cnpj'] ?? "Dado vazio"}}
@endisset

{{-- @switch($type)
    @case(1)
        
        @break
    @case(2)
        
        @break
    @default
        
@endswitch --}}

{{-- @for ($i = 0; $i < $count; $i++)
    
@endfor --}}

{{-- @foreach ($collection as $item)
    
@endforeach --}}

{{-- @forelse ($collection as $item)
    Iteração atual: {{ $loop->iteration }}
    @if($loop->first)
        true
    @endif

    @if($loop->last)
        true
        Total de registros: {{ $loop->count }}
    @endif
@empty
    
@endforelse --}}

{{-- @--> equivalência a \ --}}