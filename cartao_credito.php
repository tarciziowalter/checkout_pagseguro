<?php 


ini_set('max_execution_time','0');

if(isset($_POST['gerar_sessao'])){
    
    include('config.php');

    $url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions?email='.EMAIL.'&token='.TOKEN;

    $curl = curl_init($url);
    
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);

    $retorno = curl_exec($curl);
    curl_close($curl);
    $session = simplexml_load_string($retorno);
    die(json_encode($session));


}

if(isset($_POST['fechar_pedido'])){

    include('config.php');

    $cod_plano = criarPlano();
    $cod_assinatura = assinaturaPlano($cod_plano,$_POST['senderData'],$_POST['hash'],$_POST['token']);

    $retorna = ['success' => 1,'assinatura' => $cod_assinatura];
    echo json_encode($retorna);
    die;

}

function criarPlano(){

    $data = [
        'preApprovalName' => 'Plano Assinatura Teste',
        'preApprovalReference' => '1',
        'preApprovalCharge' => 'AUTO',
        'preApprovalPeriod' => 'MONTHLY',
        'preApprovalFinalDate' => date('Y-m-d',strtotime('+22 months')) . 'T19:20:30.45+01:00',
        'preApprovalAmountPerPayment' => '297.00',
        'preApprovalCancelURL' => 'https://7824ec469e17713d48964ca67d86549c.m.pipedream.net',
        'preApprovalMembershipFee' => '0.00'
    ];

    $query = http_build_query($data);

    $url = 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals/request/?email='.EMAIL.'&token='.TOKEN;

    $curl = curl_init($url);
    curl_setopt($curl,CURLOPT_HTTPHEADER,array('Accept:application/vnd.pagseguro.com.br.v3+xml;charset=ISO-8859-1','Content-Type:application/x-www-form-urlencoded;charset=UTF-8'));
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $query);

    $retorno = curl_exec($curl);

    if(curl_errno($curl)){
        throw new Exception(curl_error($curl));
    }

    curl_close($curl);

    $json = json_encode(simplexml_load_string($retorno));
    $array = json_decode($json,TRUE);

    return $array['code'];

}

function assinaturaPlano($cod_plano,$senderData,$hash,$token){

    $cpf = str_replace('.', '', $senderData['cpf']);
    $cpf = str_replace('-','',$cpf);

    $data = [
        'plan' => $cod_plano,
        'reference' => '1',
        'sender' => [
            'name' => $senderData['nome'],
            'email' => $senderData['email'],
            'hash' => $hash,
            'phone' => [
                'areaCode' => $senderData['ddd'],
                'number' => $senderData['telefone']
            ],
            'address' => [
                'street' => $senderData['endereco'],
                'number' => $senderData['numero'],
                'complement' => $senderData['complemento'],
                'district' => $senderData['bairro'],
                'city' => $senderData['cidade'],
                'state' => $senderData['estado'],
                'country' => 'BRA',
                'postalCode' => $senderData['cep']
            ],
            'documents' => [[
                'type' => 'CPF',
                'value' => $cpf
            ]]

        ],
        'paymentMethod' => [
            'type' => 'CREDITCARD',
            'creditCard' => [
                'token' => $token,
                'holder' => [
                    'name' => $senderData['nome'],
                    'birthDate' => $senderData['data_nascimento'],
                    'documents' => [[
                        'type' => 'CPF',
                        'value' => $cpf
                    ]],
                    'phone' => [
                        'areaCode' => $senderData['ddd'],
                        'number' => $senderData['telefone']
                    ],
                    'billingAddress' => [
                        'street' => $senderData['endereco'],
                        'number' => $senderData['numero'],
                        'complement' => $senderData['complemento'],
                        'district' => $senderData['bairro'],
                        'city' => $senderData['cidade'],
                        'state' => $senderData['estado'],
                        'country' => 'BRA',
                        'postalCode' => $senderData['cep']

                    ]
                ]
            ]
        ]
    ];

    $url = 'https://ws.sandbox.pagseguro.uol.com.br/pre-approvals?email='.EMAIL.'&token='.TOKEN;       

    $curl = curl_init($url);
    curl_setopt($curl,CURLOPT_HTTPHEADER,array('Accept:application/vnd.pagseguro.com.br.v1+json;charset=ISO-8859-1','Content-Type:application/json'));
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data,JSON_UNESCAPED_SLASHES));

    $retorno = curl_exec($curl);

    if(curl_errno($curl)){
        throw new Exception(curl_error($curl));
    }

    curl_close($curl);

    $array = json_decode($retorno,TRUE);    
    var_dump($array);
    die;

    return $array['code'];

}

if(isset($_POST['retorno'])){

    verificarNotificacoes();

}


function verificarNotificacoes() {

    $retorno = json_decode($_POST['notificar'],TRUE);
    
    $url = "https://ws.sandbox.pagseguro.uol.com.br/v2/transactions/notifications/{$retorno["notificationCode"]}?email=".EMAIL."&token=".TOKEN;
    
    $ch = curl_init();
    $headers = array(
        "Content-Type: application/x-www-form-urlencoded; charset=ISO-8859-1"
    );

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $server_output = curl_exec($ch);

    if(curl_errno($ch)){
        throw new Exception(curl_error($curl));
    }

    $xml = simplexml_load_string($server_output);
    $json = json_encode($xml);

    curl_close($ch);


}

?>