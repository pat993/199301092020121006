<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekrutment extends CI_Controller
{

    public function index()
    {
        $json = file_get_contents("http://103.226.55.159/json/data_rekrutmen.json");
        $data = json_decode($json, TRUE);

        $json2 = file_get_contents("http://103.226.55.159/json/data_attribut.json");
        $data2 = json_decode($json2, TRUE);

        $data_rekrutment = array();

        if (isset($data['Form Responses 1']) && is_array($data['Form Responses 1'])) {
            // Loop through the array and print the 'nama' field for each entry
            foreach ($data['Form Responses 1'] as $entry) {
                $value['id'] = $entry['id'] . PHP_EOL;
                $value['timestamp'] = $entry['timestamp'] . PHP_EOL;
                $value['nama'] = $entry['nama'] . PHP_EOL;
                $value['nip'] = $entry['nip'] . PHP_EOL;
                $value['satuan_kerja'] = $entry['satuan_kerja'] . PHP_EOL;
                $value['posisi_yang_dipilih'] = $entry['posisi_yang_dipilih'] . PHP_EOL;
                $value['bahasa_pemrograman_yang_dikuasai'] = $entry['bahasa_pemrograman_yang_dikuasai'] . PHP_EOL;
                $value['framework'] = $entry['framework_bahasa_pemrograman_yang_dikuasai'] . PHP_EOL;
                $value['database_yang_dikuasai'] = $entry['database_yang_dikuasai'] . PHP_EOL;
                $value['tools_yang_dikuasai'] = $entry['tools_yang_dikuasai'] . PHP_EOL;
                $value['pernah_membuat_mobile_apps'] = $entry['pernah_membuat_mobile_apps'] . PHP_EOL;

                $jenis_atr = '';
                $value3 = '';
                foreach ($data2 as $entry2) {
                    if ($entry['id'] == $entry2['id_pendaftar']) {
                        $jenis_atr = $jenis_atr . ',' . $entry2['jenis_attr'] . PHP_EOL;
                        $value3 = $value3 . ',' . $entry2['value'] . PHP_EOL;
                    }
                }

                $value['jenis_attr'] = $jenis_atr;
                $value['value'] = $value3;

                array_push($data_rekrutment, $value);
            }
        }

        $data_print['data_rekrutment'] = $data_rekrutment;

        $this->load->view('v_data_rekrutment', $data_print);
    }
}
