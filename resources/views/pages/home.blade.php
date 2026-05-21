@extends('layouts.app')

@section('title', 'Início')

@section('content')
    <div class="max-w-4xl mx-auto bg-white/80 dark:bg-gray-900/80 backdrop-blur-sm rounded-2xl shadow-lg border border-sky-100 dark:border-gray-800 overflow-hidden">
        <div class="bg-sky-600 dark:bg-sky-700 text-white px-8 py-8 md:py-10 text-center shadow-md">
          <span class="inline-flex items-center gap-2 text-3xl font-bold tracking-tight">
            <svg xmlns='http://www.w3.org/2000/svg' class='inline w-8 h-8 text-white/80' fill='none' viewBox='0 0 24 24' stroke='currentColor'><circle cx='12' cy='12' r='10' stroke-width='2' /><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M8 12h8M12 8v8' /></svg>
            Balança Multiuso
          </span>
          <div class="text-sky-100 text-base mt-2 font-normal">Peso, pressão, batimentos, temperatura e oxigênio em um só gesto</div>
        </div>
        <div class="px-6 md:px-12 py-8">
        <p class="text-gray-700 dark:text-gray-300 mb-6">No mercado já existem balanças que vão além do peso. A nossa diferença está em como elas fazem isso: em vez de complicar, simplificamos. Você sobe na plataforma e, sem braçadeiras, sem botões extras e sem precisar alternar entre aparelhos, recebe de uma vez peso, pressão, batimentos, temperatura e saturação de oxigênio, com a mesma naturalidade de sempre se pesar. Entre tantas soluções, essa é a alternativa que escolheu focar na experiência real de quem quer monitorar a saúde sem perder tempo.</p>

        <div class="prose prose-sky dark:prose-invert max-w-none mb-8 text-lg">
          <ul>
            <li>
              <strong>Monitoramento completo em um só momento</strong><br>
              Enquanto você se pesa, a balança já captura automaticamente sua pressão arterial, batimentos cardíacos, temperatura corporal e oxigênio no sangue. Sem braçadeiras, sem cabos e sem precisar alternar entre aparelhos: tudo acontece ao mesmo tempo, em segundos.
            </li>
            <li>
              <strong>Pressão arterial medida de forma inovadora</strong><br>
              A leitura da pressão é feita por sensores integrados à plataforma, dispensando o aperto do manguito tradicional. Basta um toque sutil para que o sistema entregue os valores sistólico e diastólico com precisão, ideal para quem precisa monitorar a hipertensão sem complicar a rotina.
            </li>
            <li>
              <strong>Batimentos cardíacos que contam uma história</strong><br>
              A frequência cardíaca é registrada em cada pesagem e contextualizada com o seu histórico. Assim, você não vê apenas um número isolado, mas consegue perceber se o coração está respondendo bem ao repouso, à atividade física ou ao estresse do dia a dia.
            </li>
            <li>
              <strong>Temperatura e oxigenação como termômetro do bem-estar</strong><br>
              Pequenas variações na temperatura da pele e na saturação de oxigênio muitas vezes indicam como o corpo está reagindo antes mesmo de surgirem sintomas. A balança reúne esses dois indicadores para que você acompanhe sinais precoces de cansaço, inflamação ou queda de imunidade, tudo de forma não invasiva.
            </li>
          </ul>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-10">
            <a href="{{ route('redirect', ['section' => 'features']) }}" class="block p-4 bg-sky-50 dark:bg-sky-900/50 border border-sky-100 dark:border-sky-800 rounded-xl text-center text-sky-700 dark:text-sky-300 hover:bg-sky-100 dark:hover:bg-sky-900/80 transition-colors">Funcionalidades</a>
            <a href="{{ route('redirect', ['section' => 'gallery']) }}" class="block p-4 bg-sky-50 dark:bg-sky-900/50 border border-sky-100 dark:border-sky-800 rounded-xl text-center text-sky-700 dark:text-sky-300 hover:bg-sky-100 dark:hover:bg-sky-900/80 transition-colors">Galeria</a>
            <a href="{{ route('redirect', ['section' => 'about']) }}" class="block p-4 bg-sky-50 dark:bg-sky-900/50 border border-sky-100 dark:border-sky-800 rounded-xl text-center text-sky-700 dark:text-sky-300 hover:bg-sky-100 dark:hover:bg-sky-900/80 transition-colors">Sobre</a>
        </div>
    </div>
@endsection
