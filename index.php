<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Pagseguro</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>

<section class="pagamento">
    <div class="container" style="margin-top: 25px;">
        <h2>Checkout Pagseguro</h2>
        <br>
        <form method="post">
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="numero_cartao">Número do cartão:</label>
                        <input type="text" name="numero_cartao" class="form-control" placeholder="Insira o número do seu cartão" maxlength="16" autocomplete="off" autofocus>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="mes_validade">Mês de validade:</label>
                        <input type="text" name="mes_validade" class="form-control" placeholder="Insira o mês de validade" maxlength="2" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="ano_validade">Ano de validade:</label>
                        <input type="text" name="ano_validade" class="form-control" placeholder="Insira o ano de validade" maxlength="4" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cvv">CVV:</label>
                        <input type="text" name="cvv" class="form-control" placeholder="Insira o código de segurança do cartão" maxlength="3" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bandeiras">Bandeira:</label>
                        <select name="bandeiras" class="form-control" disabled></select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="valor">Valor:</label>
                        <select class="form-control" name="valores" disabled></select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="nome">Nome completo:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Insira o seu nome" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cpf">CPF:</label>
                        <input type="text" name="cpf" class="form-control cpf" placeholder="Insira o seu cpf" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="data_nascimento">Data Nascimento:</label>
                        <input type="text" name="data_nascimento" class="form-control birthDate" placeholder="Insira a sua Data de Nascimento" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" placeholder="Insira o seu e-mail" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="ddd">DDD:</label>
                        <input type="text" name="ddd" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" class="form-control" placeholder="Insira o Telefone" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="endereco">Endereço:</label>
                        <input type="text" name="endereco" class="form-control" placeholder="Insira o Endereço" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label for="numero">Número:</label>
                        <input type="text" name="numero" class="form-control" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="complemento">Complemento:</label>
                        <input type="text" name="complemento" class="form-control" placeholder="Insira o Complemento" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="bairro">Bairro:</label>
                        <input type="text" name="bairro" class="form-control" placeholder="Insira o Bairro" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cidade">Cidade:</label>
                        <input type="text" name="cidade" class="form-control" placeholder="Insira a Cidade" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="estado">Estado:</label>
                        <input type="text" name="estado" class="form-control" placeholder="Insira o Estado" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="text" name="cep" class="form-control" placeholder="Insira o CEP" autocomplete="off">
                    </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" name="acao">Confirmar pagamento</button>
                </div>
            </div><!--row-->
        </form>
    </div><!--container-->
</section>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js"></script>

<script src="jquery.mask.js"></script>

<script type="text/javascript">

    $(function(){
        
        var valor = 297;
        var imagens = [];

        listarBandeiras();

        $('.cpf').mask('000.000.000-00', {reverse: true});
        $('.birthDate').mask('00/00/0000', {reverse: true});

        //Detectando a bandeira do cartão

        $('input[name="numero_cartao"]').on('keyup',function(e){

            e.preventDefault();

            if($(this).val().length >= 6){
                
                PagSeguroDirectPayment.getBrand({
                    cardBin:$(this).val().substring(0,6),
                    success:function(result){
                        
                        var cartao = result.brand.name;
                        
                        PagSeguroDirectPayment.getInstallments({
                            amount:valor,
                            maxInstallmentNoInterest:4,
                            brand:cartao,
                            success:function(data){

                                $('select[name="bandeiras"]').find('option[value='+cartao+']').prop('selected','selected');
                                $('select[name=valores').html("");

                                $.each(data.installments[cartao],function(index,value){
                                    var htmlAtual = $('select[name=valores').html();
                                    var valorParcela = value.installmentAmount;
                                    var valorFormatado = valorParcela.toLocaleString("pt-BR", { style: "currency" , currency:"BRL"});
                                    var juros = value.interestFree == true ? ' sem juros' : ' com juros';
                                    var parcela = index + 1;
                                    $('select[name=valores]').html(htmlAtual+'<option value="'+parcela+':'+valorParcela+'">'+valorFormatado+' - '+parcela+'x '+juros+'</option>');
                                })

                                //$('select[name=valores]').attr('disabled',false);
                            }
                        })
                    }
                });

            }
        })

        $('select[name=bandeiras').change(function(e){

            e.preventDefault();

            var cartao = $(this).val();

            PagSeguroDirectPayment.getInstallments({
                amount:valor,
                maxInstallmentNoInterest:4,
                brand:cartao,
                success:function(data){

                    $('select[name=valores').html("");

                    $.each(data.installments[cartao],function(index,value){
                        var htmlAtual = $('select[name=valores').html();
                        var valorParcela = value.installmentAmount;
                        var juros = value.interestFree == true ? ' sem juros' : ' com juros';
                        $('select[name=valores]').html(htmlAtual+'<option value="'+(index+1)+':'+valorParcela+'">'+valorParcela+juros+'</option>');
                    })
                }
            })


        })


        //Formulario principal

        $('form').submit(function(e){

            e.preventDefault();
            desabilitarFormulario();

            var numero_cartao = $('[name="numero_cartao"]').val();
            var cvv = $('[name="cvv"]').val();
            var bandeira = $('[name="bandeiras"]').val();
            var parcela = $('[name="valores"]').val();
            var mes = $('[name="mes_validade"]').val();
            var ano = $('[name="ano_validade"]').val();
            var nome = $('[name="nome"]').val();
            var cpf = $('[name="cpf"]').val();
            var data_nascimento = $('[name="data_nascimento"]').val();
            var email = $('[name="email"]').val();
            var ddd = $('[name="ddd"]').val();
            var telefone = $('[name="telefone"]').val();
            var endereco = $('[name="endereco"]').val();
            var numero = $('[name="numero"]').val();
            var complemento = $('[name="complemento"]').val();
            var bairro = $('[name="bairro"]').val();
            var cidade = $('[name="cidade"]').val();
            var estado = $('[name="estado"]').val();
            var cep = $('[name="cep"]').val();
            var hash = PagSeguroDirectPayment.getSenderHash();

            const senderData = {
                'nome':nome,
                'cpf':cpf,
                'data_nascimento':data_nascimento,
                'email':email,
                'ddd':ddd,
                'telefone':telefone,
                'endereco':endereco,
                'numero':numero,
                'complemento':complemento,
                'bairro':bairro,
                'cidade':cidade,
                'estado':estado,
                'cep':cep
            };

            PagSeguroDirectPayment.createCardToken({
                cardNumber:numero_cartao,
                brand:bandeira,
                cvv:cvv,
                expirationMonth:mes,
                expirationYear:ano,
                success:function(data){
                    
                    var token = data.card.token;
                    var splitParcelas = parcela.split(':');
                    var valorParcela = splitParcelas[1];
                    var numeroParcela = splitParcelas[0];

                    $.ajax({
                        dataType:'json',
                        method:'post',
                        url:'cartao_credito.php',
                        data:{'fechar_pedido':true,'token':token,'cartao':bandeira,'parcelas':numeroParcela,'valorParcela':valorParcela,'hash':hash,'amount':valor,'senderData':senderData},
                        success:function(data){
                            
                            habilitarFormulario();
                            $('form')[0].reset();
                            $("[name='nome']").focus();
                            listarBandeiras();
                            $("[name='bandeiras']").prop('disabled',true);
                            $("[name='valores']").html("");
                            $("[name='valores']").prop('disabled',true);
                            alert('Pagamento foi efetuado com sucesso!');

                        },
                        error:function(data){
                            console.log(data);
                        }
                    });

                },
                error:function(data){
                    habilitarFormulario();
                    $("[name='numero_cartao']").focus();
                    alert('Ocorreu algum erro ao validar o cartão!');
                }
            })

        })

        function desabilitarFormulario(){
            $('form').animate({'opacity':'0.4'});
            $('form').find('input,button,select').attr('disabled','disabled');
        }

         function habilitarFormulario(){
            $('form').animate({'opacity':'1'});
            $('form').find('input,button,select').removeAttr('disabled');
        }

        function listarBandeiras(){

            $.ajax({
                dataType:'json',
                url:'cartao_credito.php',
                method:'post',
                data:{'gerar_sessao':'true'},
                success:function(data){
                    
                    PagSeguroDirectPayment.setSessionId(data.id);
                    PagSeguroDirectPayment.getPaymentMethods({

                        success:function(response){

                            var bancos = '';
                            var bandeiras = '<option value="0">Insira o número do seu cartão</option>';

                            $.each(response.paymentMethods.CREDIT_CARD.options,function(key,value){
                                imagens[value.name.toLowerCase()] = 'https://stc.pagseguro.uol.com.br' + value.images.MEDIUM.path;
                                bandeiras+= '<option value="'+value.name.toLowerCase()+'">'+value.name+'</option>';
                            });

                            $('select[name="bandeiras"]').html(bandeiras);

                        }

                    })


                }
            });

        }

    })
    
</script>


</body>
</html>