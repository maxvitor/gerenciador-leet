<?php

namespace App\Controllers;
use App\Libraries\MeuPDF;

class pdfLeet_controller extends BaseController{

    public function pdfLeet($pedidos){
        $mpdf = new MeuPDF();
        $data = [
            'pedido' => $this->pdfzinModel->carregaPedidos($pedidos)
        ];

        foreach($data['pedido'] as $pedido) {
            $pedido->produtos = $this->pdfzinModel->carregaProdutosPedidos($pedido->id_pedido);
            foreach($pedido->produtos as $produto) {
                $produto->acrescimos = $this->pdfzinModel->carregaAcrescimosProdutosPedidos($pedido->id_pedido, $produto->produtos_pedido);
            }
        }

		$html = view('pdforcamentoleet', $data);
		$this->response->setHeader('Content-Type', 'application/pdf');

        $config = [
            'mode' => 'utf-8',
            // 'format' => 'A4-L',
            // 'orientation' => 'L',
            'setAutoTopMargin' => false,
            'setAutoBottomMargin' => false,
            'autoMarginPadding' => 0,
            'bleedMargin' => 0,
            'crossMarkMargin' => 0,
            'cropMarkMargin' => 0,
            'nonPrintMargin' => 0,
            'margBuffer' => 0,
            'collapseBlockMargins' => false,
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 3,
            'margin_header' => 3,
            'margin_footer' => 3,
        ];

		$mpdf->GerarPDF($html, 'meudoc', $config);
    }
}