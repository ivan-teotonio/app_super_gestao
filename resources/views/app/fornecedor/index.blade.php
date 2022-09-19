<h3>Fornecedor</h3>


@if(count($f) > 0 && count($f) < 10)
   <h3>Existe</h3>
@elseif(count($f) > 10)
    <h3>Existe vários<h3>
@else 
    <h3>Não existe</h3>
@endif

<!--executa se for falso-->
@unless($f[0]['status'] == 'S')
    Fornecedor inativo
@endunless

@isset($records)
    // $records is defined and is not null...
@endisset
 
@empty($records)
    // $records is "empty"...
@endempty

<!--ternario-->
CNPJ: {{ $f[0]['cnpj'] ?? 'Dado não preenchido'}}

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor
 
@foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach
 
@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse
 
@while (true)
    <p>I'm looping forever.</p>
@endwhile


proxima aula melhorando a visualização da aplicação
