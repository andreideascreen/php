<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			array(
				'nome_cargo'=>'Diretor comercial',
				'subordinados'=>array(
					array(
						'nome_cargo'=>'Gerente de vendas'
					)
				)
			),
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					array(
						'nome_cargo'=>'Gerente contas a pagar',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de pagamento'
							)
						)
					),
					array(
						'nome_cargo'=>'Gerente contas a frente',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de frente'
							)
						)
					)
				)
			)
		)
	)
);



function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		$html .= '<li>';
		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count($cargo['subordinados'])>0){
			$html .= exibe($cargo['subordinados']);
		}

		$html .= '</li>';
	}

	$html .= '</ul>';

	return $html;

}

echo exibe($hierarquia);
?>
