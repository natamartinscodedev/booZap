<?php
namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory; // Namespace para o PhpSpreadsheet

class Contacts extends BaseController {

    public function index() {
     return view('upload_form');
    }

    public function import() {
        // Configurações para upload do arquivo
        // $config['upload_path'] = './uploads/';
        // $config['allowed_types'] = 'xls|xlsx';
        // $this->load->library('upload', $config);

    
        // if (!$this->upload->do_upload('file')) {
        //     echo $this->upload->display_errors();
        // } else {
        //     $file = $this->upload->data();
        //     $filePath = './uploads/' . $file['file_name'];

        //     // Lê o arquivo Excel usando PhpSpreadsheet
        //     $reader = IOFactory::createReaderForFile($filePath);
        //     $spreadsheet = $reader->load($filePath);
        //     $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

        //     $contacts = [];
        //     foreach ($sheetData as $row) {
        //         // Lê as colunas (A: Nome, B: Numero)
        //         $name = $row['A'];
        //         $number = $row['B'];

        //         // Formata o número para WhatsApp
        //         $formattedNumber = 'https://wa.me/' . preg_replace('/\D/', '', $number);

        //         // Adiciona os links em um array para exibir na tela
        //         $contacts[] = [
        //             'name' => $name,
        //             'link' => $formattedNumber
        //         ];
        //     }

        //     // Envia os contatos para a view
        //     $data['contacts'] = $contacts;

           $data = [
            "title" => "Contatos Importados",
            "contacts" => [
                [
                    "name" => "WhatsApp",
                    "link" => "https://wa.me/123456789"
                ],
                [
                    "name" => "WhatsApp",
                    "link" => "https://wa.me/123456789"
                ],
                [
                    "name" => "WhatsApp",
                    "link" => "https://wa.me/123456789"
                ]
                ]
            ];
            return view('contacts_list', $data);
        // }
    }
}