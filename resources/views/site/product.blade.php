@extends('layout.site')

@section('content')
<section class="mt-3 mb-3 bg-light" id="features">
    <div class="container">
        <div class="row p-2">
            <div class="col-lg-6 offset-lg-3">
                <div class="text-center">   
                    <h1 class="font-weight-medium text-center">Nossos <span class="text-warning">Produtos</span></h1>
                    <p class="font-weight-light text-center">Nossos serviços buscam transformar clientes em vendedores, criando uma relação de duradoura de parceria entre ele e a sua empresa</p>
                </div>
            </div>
        </div>
        <!--Vídeo Responsivo Start-->
        <div class="title text-center mb-5">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/AEanvB42KrY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Banner COVID -->
        <div class="alert alert-danger text-center">
            <h3>COVID-19: Os aplicativos e a vitrine estão <span class="red">gratuitos</span></h3>
            <p>Tem alguma dúvida? <a href="/contato">Entre em contato</a></p>
        </div>
        <!--Vídeo Responsivo End-->
        <div class="row align-items-center" id="whatsapp-link">
            <div class="col-md-5" style="background: url(images/features/features-bg.png) center center">
                <div class="features-img">
                    <form action="{{ route('site.zapzap') }}" method="post">
                            <div class="form-group app-label">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" required="required" name="email" id="email" placeholder="O email da sua empresa">
                            </div>
                            <div class="form-group app-label">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Seu nome e sobrenome" maxlength="100">
                            </div>
                            <div class="form-group app-label">
                                <label for="phone">Celular</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Ex:61988887766" maxlength="15">
                            </div>
                            <div class="form-group app-label">
                                <label for="greeting">Mensagem inicial</label>
                                <input type="text" class="form-control" name="greeting" id="greeting" placeholder="No máximo 30 letras" maxlength="30">
                            </div>
                            <div class="text-center mt-5 mb-2">
                                <button type="submit" class="btn btn-warning ml-2">Enviar</button>
                            </div>
                            @csrf
                        </form>
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="features-box mt-5 mt-sm-0 mb-4">
                    <div class="features-icon my-4">
                        <i class="mdi mdi-credit-card"></i>
                    </div>
                    <h5 class="text-warning font-weight-medium mb-3 pt-3">Whatsapp Link</h5>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Problema</h6>
                    <p class="text-muted mb-3 f-15">
                        Não sabe como criar o seu link para atendimento com Whatsapp?
                    </p>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Oportunidade</h6>
                    <p class="text-muted mb-3 f-15">
                        Basta preencher o formulário ao lado e receber no seu email o seu Whatsapp Link gratuitamente agora mesmo
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center" id="cartao-fidelidade">
            <div class="col-md-5" style="background: url(images/features/features-bg.png) center center">
                <div class="features-img">
                    <img width="300em" src="images/features/cartaofidelidade.jpeg" alt="Imagem do Cartão Fidelidade" class="img-fluid d-block mx-auto">
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="features-box mt-5 mt-sm-0 mb-4">
                    <div class="features-icon my-4">
                        <i class="mdi mdi-credit-card"></i>
                    </div>
                    <h5 class="text-warning font-weight-medium mb-3 pt-3">Cartão Fidelidade</h5>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Problema</h6>
                    <p class="text-muted mb-3 f-15">
                        Faz tempo que seu cliente não compra? Ele não vê diferença entre o seu produto ou serviço e do seu concorrente?.
                    </p>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Oportunidade</h6>
                    <p class="text-muted mb-3 f-15">
                        Você pode se diferenciar da sua concorrência muito além do bom atendimento, mostre ao seu cliente que a fidelidade tem valor. Ofereça um produto, um serviço e como em um jogo, ajude-o a completar o desafio do cartão fidelidade
                    </p>
                    <div class="text-center">
                        <a href="https://app.fidelix.com.br" class="btn btn-warning"> Quero Conhecer <span class="right-icon ml-2">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" id="voucher">
            <div class="col-md-5" style="background: url(images/features/features-bg.png) center center">
                <div class="features-img">
                    <img width="300em" src="images/features/voucher.png" alt="Imagem do Voucher" class="img-fluid d-block mx-auto">
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="features-box mt-5 mt-sm-0 mb-4">
                    <div class="features-icon my-4">
                        <i class="mdi mdi-credit-card"></i>
                    </div>
                    <h5 class="text-warning font-weight-medium mb-3 pt-3">Voucher</h5>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Problema</h6>
                    <p class="text-muted mb-3 f-15">
                        Anda precisando de uma força nas vendas? Que tal vender seus produtos de forma antecipada?
                    </p>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Oportunidade</h6>
                    <p class="text-muted mb-3 f-15">
                        Use o nosso voucher e ofereça pacotes de produtos ou serviços com desconto para o seus clientes, melhore o seu caixa e venda mais aogra mesmo.
                    </p>
                    <div class="text-center">
                        <a href="https://voucher.fidelix.com.br" class="btn btn-warning"> Quero Conhecer <span class="right-icon ml-2">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center" id="vitrine">
            <div class="col-md-5" style="background: url(images/features/features-bg.png) center center">
                <div class="features-img">
                    <img width="500em" src="images/features/vitrine.png" alt="Imagem da Vitrine" class="img-fluid d-block mx-auto">
                </div>
            </div>
            <div class="col-md-6 offset-md-1">
                <div class="features-box mt-5 mt-sm-0 mb-4">
                    <div class="features-icon my-4">
                        <i class="mdi mdi-credit-card"></i>
                    </div>
                    <h5 class="text-warning font-weight-medium mb-3 pt-3">Vitrine</h5>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Problema</h6>
                    <p class="text-muted mb-3 f-15">
                        Seus concorrentes estão vendendo na Internet e vc não? Não tem muito tempo para criar um site e manter seus produtos?
                    </p>
                    <h6 class="text-dark font-weight-normal mb-3 pt-3">Oportunidade</h6>
                    <p class="text-muted mb-3 f-15">
                        Que tal expor seus produtos na nossa vitrine, permitir que eles seja vistos por clientes de outras empresas e ainda tem menos trabalho?
                    </p>
                    <div class="text-center">
                        <a href="https://vitrine.fidelix.com.br" class="btn btn-warning"> Quero Conhecer <span class="right-icon ml-2">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
        <section class="section" id="planos-vitrine">
            <div class="container">
                <div class="row justify-content-center contentTop">
                    <div class="col-lg-6 col-md-8">
                        <div class="title text-center mb-5">
                            <h3 class="font-weight-medium text-dark">
                                <span class="text-warning">Planos</span>
                            </h3>
                        </div> 
                    </div>
                </div>
                <!-- Banner COVID -->
                <div class="alert alert-danger text-center">
                    <h3>COVID-19: Os aplicativos e a vitrine estão <span class="red">gratuitos</span></h3>
                    <p>Tem alguma dúvida? <a href="/contato">Entre em contato</a></p>
                </div>
                <!--
                <div class="row text-center">
                    <div class="text-center col-lg-4 col-md-6">
                        <div class="text-center service-box service-warning">
                            <div class="text-center mb-5">
                                <i class="pe-7s-gift service-icon"></i>
                            </div>
                            <h5 class="text-center service-title text-dark font-weight-normal pt-1 mb-4">COVID-19</h5>
                            <p class="text-center text-muted service-subtitle mb-4">Gratuito</p>
                            <h5 class="text-center service-title text-dark font-weight-normal pt-1 mb-4">R$ 0,00</h5>
                            <a href="#" class="btn btn-warning"> Eu Quero <span class="right-icon ml-2">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="text-center service-box service-warning bg-fidelixProduct">
                            <div class="mb-5">
                                <i class="pe-7s-drop service-icon"></i>
                            </div>
                            <h5 class="service-title text-dark font-weight-normal pt-1 mb-4">Plano Infiel</h5>
                            <p class="text-center text-muted service-subtitle mb-4">Gratuito por 90 dias</p>
                            <h5 class="text-center service-title text-dark font-weight-normal pt-1 mb-4">R$ 37,00</h5>
                            <a href="#" class="btn btn-warning"> Eu Quero <span class="right-icon ml-2">&#8594;</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="text-center service-box service-warning bg-fidelixProduct">
                            <div class="mb-5">
                                <i class="pe-7s-like service-icon"></i>
                            </div>
                            <h5 class="service-title text-dark font-weight-normal pt-1 mb-4">Plano Fiel</h5>
                            <p class="text-muted service-subtitle mb-4">Gratuito por 30 dias</p>
                            <h5 class="text-center service-title text-dark font-weight-normal pt-1 mb-4">R$ 17,00</h5>
                            <div class="text-center">
                                <a href="#" class="btn btn-warning"> Eu Quero <span class="right-icon ml-2">&#8594;</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                -->
            </div>
        </section>
    </div>
</section> 
@endsection
