<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testar Retorno</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <form class="container" style="margin-top:10px" method="post">
        
        <div class="row">
            <div class="col-md-6">
                <textarea class="form-control" name="retorno"></textarea>        
            </div>
        
            <div class="col-md-12">
                <button type="submit" class="btn btn-success btnVerificarRetorno" name="acao">Confirmar pagamento</button>
            </div>    
        </div>
        
    </form>
    
    
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(function(){

        $(".btnVerificarRetorno").click(function(e){

            e.preventDefault();

            var notificar = $("[name='retorno']").val();

            $.ajax({
                dataType:'html',
                method:'post',
                url:'cartao_credito.php',
                data:{'retorno':true,'notificar':notificar},
                success:function(data){
                    
                    console.log(data);
                    
                },
                error:function(data){
                    console.log(data);
                }
            });

        })
        
    })
</script>
</html>