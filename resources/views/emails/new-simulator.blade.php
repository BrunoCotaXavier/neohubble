<!-- <!DOCTYPE html>
<html>

<head>
    <title>Novo Orçamento</title>
</head>

<body>
    <h1>Novo Orçamento Solicitado</h1>

    <div style="background-color: #f4f4f4; padding: 10px; border-radius: 5px;">
        <h2 style="color: #333;">Informação Pessoal:</h2>
        <p><strong>Primeiro Nome:</strong> {{ $data['first-name'] }}</p>
        <p><strong>Sobrenome:</strong> {{ $data['last-name'] }}</p>
        <p><strong>E-mail:</strong> {{ $data['email'] }}</p>
        <p><strong>Telefone:</strong> {{ $data['phone-number'] }}</p>
    </div>
    <div style="background-color: #f4f4f4; padding: 10px; border-radius: 5px;">
        <h2 style="color: #333;">Informação da Empresa:</h2>
        <p><strong>Nome:</strong> {{ $data['company-name'] }}</p>
        <p><strong>Anos em Atividade:</strong> {{ $data['company-year'] }}</p>
        <p><strong>Descrição da empresa:</strong> {{ $data['company-description'] }}</p>
    </div>
    <div style="background-color: #f4f4f4; padding: 10px; border-radius: 5px;">
        <h2 style="color: #333;">Estratégia:</h2>
        <p><strong>Por que você está criando esse site?</strong> {{ $data['strategy-quest1' ]}}</p>
        <p><strong>O que você oferece ao seu público?</strong> {{ $data['strategy-quest2'] }}</p>
        <p><strong>Quem é seu público-alvo?</strong> {{ $data['strategy-quest3'] }}</p>
        <p><strong>Quantas páginas deve ter? (estimativa)</strong> {{ $data['strategy-quest4'] }}</p>
        <p><strong>O que você quer que seus usuários façam em seu site?</strong> {{ $data['strategy-quest5'] }}</p>
    </div>
</body>

</html> -->

<div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!--
    Background backdrop, show/hide based on modal state.

    Entering: "ease-out duration-300"
      From: "opacity-0"
      To: "opacity-100"
    Leaving: "ease-in duration-200"
      From: "opacity-100"
      To: "opacity-0"
  -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          To: "opacity-100 translate-y-0 sm:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 sm:scale-100"
          To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Neohubble" class="mr-5 block h-12 w-auto fill-current text-gray-600" />
                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                            <h1 class="font-bold text-gray-900">{{ $data['first-name'] }} Solicitou um Orçamento.</h1>
                            <br />
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Informação Pessoal</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500"><strong>Primeiro Nome:</strong> {{ $data['first-name'] }}</p>
                                <p class="text-sm text-gray-500"><strong>Sobrenome:</strong> {{ $data['last-name'] }}</p>
                                <p class="text-sm text-gray-500"><strong>E-mail:</strong> {{ $data['email'] }}</p>
                                <p class="text-sm text-gray-500"><strong>Telefone:</strong> {{ $data['phone-number'] }}</p>
                            </div>
                            <br />
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Informação da Empresa</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500"><strong>Nome:</strong> {{ $data['company-name'] }}</p>
                                <p class="text-sm text-gray-500"><strong>Anos em Atividade:</strong> {{ $data['company-year'] }}</p>
                                <p class="text-sm text-gray-500"><strong>Descrição da empresa:</strong> {{ $data['company-description'] }}</p>
                            </div>
                            <br />
                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Estratégia</h3>
                            <div class="mt-2">
                                <p class="text-sm text-gray-500"><strong>Por que você está criando esse site?</strong> {{ $data['strategy-quest1' ]}}</p>
                                <p class="text-sm text-gray-500"><strong>O que você oferece ao seu público?</strong> {{ $data['strategy-quest2'] }}</p>
                                <p class="text-sm text-gray-500"><strong>Quem é seu público-alvo?</strong> {{ $data['strategy-quest3'] }}</p>
                                <p class="text-sm text-gray-500"><strong>Quantas páginas deve ter? (estimativa)</strong> {{ $data['strategy-quest4'] }}</p>
                                <p class="text-sm text-gray-500"><strong>O que você quer que seus usuários façam em seu site?</strong> {{ $data['strategy-quest5'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                    <a href="https://neohubble.com" class="inline-flex w-full justify-center rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 sm:ml-3 sm:w-auto">Voltar para Nehubble</a>
                </div>
            </div>
        </div>
    </div>
</div>