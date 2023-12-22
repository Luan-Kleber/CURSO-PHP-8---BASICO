<?php 

# DECLARAÇÕES/INTRUÇÕES CONDICIONAIS

# SWITCH - uma alternativa do IF

$nome = 'Joao';

switch($nome) {
    case "Luan":
        // codigo 1
        break;
    case "Joao":
        // codigo 2
    break;
    default:
        // codigo 3
        break;
}

# SINTAXE ALTERNATIVA

#normal
$valor = 5;
if($valor == 10) {
    // codigo 1
} else {
    // codigo 2
}

#alternativa
if($valor == 10):
    // codigo 1
else:
    // codigo 2
endif;

#switch
switch($valor):
    case 10:
        // codigo 1
        break;
    default:
        // codigo 2
        break;
endswitch;
?>

<?php if(true): ?>
    <div>Executar este código</div>
<?php else: ?>
    <div>Executar esse</div>
<?php endif; ?>