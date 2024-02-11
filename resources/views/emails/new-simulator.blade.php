<!DOCTYPE html>
<html>

<head>
    <title>Novo Orçamento</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div style="position: relative; z-index: 10;" aria-labelledby="modal-title" role="dialog" aria-modal="true">

        <!--
Background backdrop, show/hide based on modal state.

Entering: "ease-out duration-300"
  From: "opacity-0"
  To: "opacity-100"
Leaving: "ease-in duration-200"
  From: "opacity-100"
  To: "opacity-0"
-->
        <div style="position: fixed; inset: 0; background-color: rgba(127, 127, 127, 0.75); transition-property: opacity; transition-duration: 300ms; transition-timing-function: ease-out;"></div>

        <div style="position: fixed; inset: 0; z-index: 10; overflow-y: auto;">
            <div style="display: flex; min-height: 100vh; align-items: flex-end; justify-content: center; padding: 1rem; text-align: center;">

                <div style="position: relative; overflow: hidden; border-radius: 0.5rem; background-color: white; text-align: left; box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.15); transition-property: all; transition-duration: 0.3s;">
                    <div style="background-color: white; padding: 1rem 1.5rem 1rem 1.5rem;">
                        <div style="display: flex; flex-direction: column; align-items: flex-start;">

                            <img src="{{ asset('images/logo.png') }}" alt="Logo Neohubble" style="margin-right: 0.5rem; display: block; height: 3rem; width: auto; fill: currentColor; color: rgb(96, 96, 96);" />

                            <div style="margin-top: 0.75rem; text-align: center; margin-left: 0.5rem; margin-top: 0; margin-bottom: 0; text-align: left;">
                                <h1 style="font-weight: 700; color: rgb(51, 51, 51);">{{ $data['first-name'] }} Solicitou um Orçamento.</h1>
                                <br />
                                <h3 style="font-size: 1.25rem; font-weight: 600; line-height: 1.5; color: rgb(51, 51, 51);" id="modal-title">Informação Pessoal</h3>
                                <div style="margin-top: 0.5rem;">
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Primeiro Nome:</strong> {{ $data['first-name'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Sobrenome:</strong> {{ $data['last-name'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>E-mail:</strong> {{ $data['email'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Telefone:</strong> {{ $data['phone-number'] }}</p>
                                </div>
                                <br />
                                <h3 style="font-size: 1.25rem; font-weight: 600; line-height: 1.5; color: rgb(51, 51, 51);" id="modal-title">Informação da Empresa</h3>
                                <div style="margin-top: 0.5rem;">
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Nome:</strong> {{ $data['company-name'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Anos em Atividade:</strong> {{ $data['company-year'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Descrição da empresa:</strong> {{ $data['company-description'] }}</p>
                                </div>
                                <br />
                                <h3 style="font-size: 1.25rem; font-weight: 600; line-height: 1.5; color: rgb(51, 51, 51);" id="modal-title">Estratégia</h3>
                                <div style="margin-top: 0.5rem;">
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Por que você está criando esse site?</strong> {{ $data['strategy-quest1' ]}}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>O que você oferece ao seu público?</strong> {{ $data['strategy-quest2'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Quem é seu público-alvo?</strong> {{ $data['strategy-quest3'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>Quantas páginas deve ter? (estimativa)</strong> {{ $data['strategy-quest4'] }}</p>
                                    <p style="font-size: 0.875rem; color: rgb(107, 114, 128);"><strong>O que você quer que seus usuários façam em seu site?</strong> {{ $data['strategy-quest5'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background-color: rgb(247, 250, 252); padding: 0.75rem 1rem 0.75rem 1rem;">
                        <a href="https://neohubble.com" style="display: inline-flex; width: 100%; justify-content: center; border-radius: 0.375rem; background-color: rgb(59, 130, 246); padding: 0.5rem 0.75rem; font-size: 0.875rem; font-weight: 600; color: white; box-shadow: 0 0.125rem 0.25rem rgba(59, 130, 246, 0.5); transition-property: background-color; transition-duration: 150ms; transition-timing-function: ease-in-out; margin-left: 0.5rem; width: auto;">
                            Voltar para Neohubble
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>