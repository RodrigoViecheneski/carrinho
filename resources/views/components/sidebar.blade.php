@php
    use App\Models\Produto;
    use App\Models\Marca;
    $ultimo_produto = Produto::latest('id')->first();
@endphp
<div class="side">
    <section class="busca">
        <h2>Buscar Item</h2>
        <form action="{{ url('/') }}" method="GET">
            <input type="search" name="Busca">
            <button>Buscar</button>
        </form>
    </section>
    <section class="menu-departamentos">
        <h2>Departamentos</h2>
        <nav>

            <ul class="list-group category_block">
                @foreach ($marcas as $marca)
                    <li class="list-group-item @if(Request()->id == $marca->id) active @endif"><!--If para marcar a posição selecionada do menu-->
                        <a href="../../marcas/{{ $marca->id }}">{{ $marca->nome }}</a>
                    </li>
                @endforeach

               <!-- <li><a href="#">Hortifrúti</a>
                    <ul>
                        <li><a href="#">Frutas</a></li>
                        <li><a href="#">Legumes</a></li>
                        <li><a href="#">Verduras</a></li>
                        <li><a href="#">Temperos Frescos</a></li>
                    </ul>
                </li>
                <li><a href="#">Açougue e Peixaria</a>
                    <ul>
                        <li><a href="#">Carnes Vermelha</a></li>
                        <li><a href="#">Aves</a></li>
                        <li><a href="#">Peixes</a></li>
                        <li><a href="#">Frutos do Mar</a></li>
                    </ul>
                </li>
                <li><a href="#">Padaria</a>
                    <ul>
                        <li><a href="#">Pães</a></li>
                        <li><a href="#">Bolos</a></li>
                        <li><a href="#">Salgados</a></li>
                        <li><a href="#">Doces</a></li>
                    </ul>
                </li>
                <li><a href="#">Frios e Laticínios</a>
                    <ul>
                        <li><a href="#">Queijo</a></li>
                        <li><a href="#">Presunto</a></li>
                        <li><a href="#">Iogurte</a></li>
                        <li><a href="#">Manteiga</a></li>
                        <li><a href="#">Leite</a></li>
                    </ul>
                </li>
            </ul>
            <h3>Setor de Despensa e Bebidas</h3>
            <ul>
                <li><a href="#">Mercearia</a>
                    <ul>
                        <li><a href="#">Arroz</a></li>
                        <li><a href="#">Feijão</a></li>
                        <li><a href="#">Massas</a></li>
                        <li><a href="#">Óleos</a></li>
                        <li><a href="#">Açucar</a></li>
                        <li><a href="#">Café</a></li>
                        <li><a href="#">Enlatados</a></li>
                    </ul>
                </li>
                <li><a href="#">Bebidas</a>
                    <ul>
                        <li><a href="#">Águas</a></li>
                        <li><a href="#">Sucos</a></li>
                        <li><a href="#">Refrigerantes</a></li>
                        <li><a href="#">Cervejas</a></li>
                        <li><a href="#">Vinhos</a></li>
                    </ul>
                </li>
                <li><a href="#">Congelados</a>
                    <ul>
                        <li><a href="#">Pratos prontos</a></li>
                        <li><a href="#">Pizzas</a></li>
                        <li><a href="#">Pão de queijo</a></li>
                        <li><a href="#">Vegetais</a></li>
                    </ul>
                </li>
            </ul>
            <h3>Setor de Uso Pessoal e da Casa</h3>
            <ul>
                <li><a href="#">Higiene e Perfumaria</a>
                    <ul>
                        <li><a href="#">Sabonetes</a></li>
                        <li><a href="#">Shampoos</a></li>
                        <li><a href="#">Cremes</a></li>
                        <li><a href="#">Desodorante</a></li>
                        <li><a href="#">Papel higiênico</a></li>
                    </ul>
                </li>
                <li><a href="#">Limpeza</a>
                    <ul>
                        <li><a href="#">Sabão em pó</a></li>
                        <li><a href="#">Desinfetante</a></li>
                        <li><a href="#">Amaciantes</a></li>
                        <li><a href="#">Esponjas</a></li>
                    </ul>
                </li>
                <li><a href="#">Utilidades e Pet Shop</a>
                    <ul>
                        <li><a href="#">Ração</a></li>
                        <li><a href="#">Saches</a></li>
                        <li><a href="#">Brinquedos</a></li>
                        <li><a href="#">Petiscos</a></li>
                        <li><a href="#">Sacos de lixo</a></li>
                    </ul>
                </li>
            </ul>-->
        </nav>
    </section>
    <div class="card bg-light mb-3">
            <div class="card-body">
                <h5 class="card-title">Último Produto Adicionado</h5>
                @if (isset($ultimo_produto) && $ultimo_produto)
                    <img src="../../imagens-produtos/{{ $ultimo_produto->imagem }}" alt="Imagem do último produto" class="img-fluid mb-2">
                    <p class="card-text">{{ $ultimo_produto->nome }}</p>
                    <p class="card-text">Preço: {{ $ultimo_produto->preco }}</p>
                    <a href="produto/{{ $ultimo_produto->id }}" class="btn btn-primary">Ver Produto</a>
                @else
                    <p class="card-text">Nenhum produto encontrado.</p>
                @endif
            </div>

        </div>
</div>

