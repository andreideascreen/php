<?php

/*$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Início: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Início: Gerente de vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Fim: Gerente de vendas
				)
			),
			//Fim: Diretor Comercial
			//Início: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Início: Gerente de contas
					array(
						'nome_cargo'=>'Gerente de contas',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de contas'
							)
						)
					),
					//fim: Gerente de contas

					//Início: Gerente de compras
					array(
						'nome_cargo'=>'Gerente de compras',
						'subordinados'=>array(
							array(
								'nome_cargo'=>'Supervisor de compras'
							)
						)
					)
					//fim: Gerente de compras
				)
			)
			//Fim: Diretor Financeiro
		)
	)
);*/



$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		



'subordinados'=>array(
    // inicio: Diretor Comercial
    array(
        'nome_cargo'=>'Diretor Comercial',
        'subordinados'=>array(
            // inicio: Gerente de Vendas
            array(
                'nome_cargo'=>'Gerente de Vendas'
            )
        // fim: Gerente de Vendas
        )
    ),
    // fim: Diretor Comercial
    // inicio: Diretor Financeiro
    array(
    'nome_cargo'=>'Diretor Financeiro',
    'subordinados'=>array(
        // inicio: Gerente de Contas a Pagar
        array(
            'nome_cargo'=>'Gerente de Contas a Pagar', 
            'subordinados'=>array(
                // inicio: Supervisor de Pagamentos 
                array(
                    'nome_cargo'=>'Supervisor de Pagamentos'
                )
                // fim: Supervisor de Pagamentos
            )
        ), 
        // fim: Gerente de Contas a Pagar
        // inicio: Gerente de Compras
        array(
            'nome_cargo'=>'Gerente de Compras',
            'subordinados'=>array(
                //inicio: Supervisor de Suprimentos
                array(
                    'nome_cargo'=>'Supervisor de Suprimentos'
                )
                //fim: Supervisor de Suprimentos
            )
        )
        // fim: Gerente de Compras
    )
)
)
// fim: Diretor Financeiro
)
);






function exibe($cargos){

	$html = "<ul>";

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";

			$html .= $cargo['nome_cargo'];
			if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
				$html .= exibe($cargo['subordinados']);
				echo 'OK';
			}

		$html .= "</li>";
	}


	$html .= "</ul>";

	return $html;

}

echo exibe($hierarquia);


?>