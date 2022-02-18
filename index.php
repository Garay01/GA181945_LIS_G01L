<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Mi Conversor GA181935</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Country-Selecter-with-Flags-flagstrap/dist/css/flags.css">
</head>

<body>
    <div class="contenedor">
        <h4>Conversor de divisas</h4>
        <form method="POST" action="./index.php">
            <div class="form_campos">
                <section>
                    <input type="number" id="value" name="value" class="control control_input_email" placeholder="Ej. 10.60" step="0.01" required>
                    <label for="value" class="control_label label_correo">Valor:</label>
                </section>
                <div class="d-flex justify-content-between">
                    <div class="form-group">
                        <label>Convertir de:</label><br>
                        <div class="select-country" data-input-name="from" data-selected-country="US">
                        </div>
                    </div>
                    <div class="form-group d-flex flex-direction-column justify-content-center m-0">
                        <i class="glyphicon glyphicon-arrow-left"></i>
                        <i class="glyphicon glyphicon-arrow-right"></i>
                    </div>
                    <div class="form-group">
                        <label>a:</label><br>
                        <div class="select-country2" data-input-name="to" data-selected-country="UE">
                        </div>
                    </div>
                </div>
                <button name="ingresar" type="submit">
                    Ingresar
                </button>
            </div>
        </form>
        
            <?php 
                if(isset($_POST['from'])){
                    echo '<div class="d-flex flex-direction-column align-items-center results">';
                    $to=$_POST['to']; 
                    $from=$_POST['from'];
                    $conversion = [
                        "US" => 1,
                        "UE" => 0.88,
                        "JP" => 115.9,
                        "GB" => 0.74,
                    ];
                    function getDescription($value) {
                        switch ($value) {
                            case 'US':
                                return'Dólares Americanos';
                            case 'UE':
                                return 'Euros';
                            case 'JP':
                                return 'Yen Japonés';
                            case 'GB':
                                return 'Libras Esterlinas'; 
                        }
                    }
                    $cant = round($_POST['value'], 2);
                    $monFrom = getDescription($from);
                    $monTo = getDescription($to);
                    $total = round($cant * $conversion[$to] / $conversion[$from], 2);
                    echo "<h4>$cant $monFrom</h4> <div> <strong>=</strong> </div>  <h4>$total $monTo</h4>";
                    echo '</div>';
                }

            ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/jQuery-Plugin-For-Country-Selecter-with-Flags-flagstrap/dist/js/jquery.flagstrap.js"></script>
    <script>
         $('#basic').flagStrap();

$('.select-country').flagStrap({
	countries: {
		"US": "USD",
		"UE": "EUR",
		"JP": "YEN",
		"GB": "LBE",
	},
	buttonSize: "btn-sm",
	buttonType: "btn-primary",
	labelMargin: "10px",
	scrollable: false,
	scrollableHeight: "350px"
});
$('.select-country2').flagStrap({
	countries: {
		"US": "USD",
		"UE": "EUR",
		"JP": "YEN",
		"GB": "LBE",
	},
	buttonSize: "btn-sm",
	buttonType: "btn-info",
	labelMargin: "10px",
	scrollable: false,
	scrollableHeight: "350px"
});

$('#advanced').flagStrap({
	buttonSize: "btn-lg",
	buttonType: "btn-primary",
	labelMargin: "20px",
	scrollable: false,
	scrollableHeight: "350px"
});
    </script>
</body>

</html>