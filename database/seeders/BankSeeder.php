<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            [
                'code' => '0102',
                'name' => 'Banco de Venezuela',
                'logo' => 'banco-de-venezuela.png',
                'phone' => '2662'
            ],
            [
                'code' => '0104',
                'name' => 'Venezolano de Crédito',
                'logo' => 'venezolano-de-credito.png',
                'phone' => '2662'
            ],
            [
                'code' => '0105',
                'name' => 'Mercantil',
                'logo' => 'mercantil.png',
                'phone' => '2662'
            ],
            [
                'code' => '0108',
                'name' => 'Provincial',
                'logo' => 'provincial.png',
                'phone' => '2662'
            ],
            [
                'code' => '0114',
                'name' => 'Bancaribe',
                'logo' => 'bancaribe.png',
                'phone' => '2662'
            ],
            [
                'code' => '0115',
                'name' => 'Exterior',
                'logo' => 'exterior.png',
                'phone' => '2662'
            ],
            [
                'code' => '0116',
                'name' => 'Occidental de Descuento',
                'logo' => 'occidental-de-descuento.png',
                'phone' => '2662'
            ],
            [
                'code' => '0128',
                'name' => 'Banco Caroní',
                'logo' => 'banco-caroni.png',
                'phone' => '2662'
            ],
            [
                'code' => '0134',
                'name' => 'Banesco',
                'logo' => 'banesco.png',
                'phone' => '2662'
            ],
            [
                'code' => '0138',
                'name' => 'Banco Plaza',
                'logo' => 'banco-plaza.png',
                'phone' => '2662'
            ],
            [
                'code' => '0151',
                'name' => 'BFC Banco Fondo Común',
                'logo' => 'bfc-banco-fondo-comun.png',
                'phone' => '2662'
            ],
            [
                'code' => '0156',
                'name' => '100% Banco',
                'logo' => '100-banco.png',
                'phone' => '2662'
            ],
            [
                'code' => '0157',
                'name' => 'Del Sur',
                'logo' => 'del-sur.png',
                'phone' => '2662'
            ],
            [
                'code' => '0163',
                'name' => 'Banco del Tesoro',
                'logo' => 'banco-del-tesoro.png',
                'phone' => '2662'
            ],
            [
                'code' => '0166',
                'name' => 'Banco Agrícola de Venezuela',
                'logo' => 'banco-agricola-de-venezuela.png',
                'phone' => '2662'
            ],
            [
                'code' => '0168',
                'name' => 'Bancrecer',
                'logo' => 'bancrecer.png',
                'phone' => '2662'
            ],
            [
                'code' => '0169',
                'name' => 'Mi Banco',
                'logo' => 'mi-banco.png',
                'phone' => '2662'
            ],
            [
                'code' => '0172',
                'name' => 'Bancamiga',
                'logo' => 'bancamiga.png',
                'phone' => '2662'
            ],
            [
                'code' => '0174',
                'name' => 'Banplus',
                'logo' => 'banplus.png',
                'phone' => '2662'
            ],
            [
                'code' => '0175',
                'name' => 'Bicentenario del Pueblo',
                'logo' => 'bicentenario-del-pueblo.png',
                'phone' => '2662'
            ],
            [
                'code' => '0177',
                'name' => 'Banfanb',
                'logo' => 'banfanb.png',
                'phone' => '2662'
            ],
            [
                'code' => '0191',
                'name' => 'BNC Nacional de Crédito',
                'logo' => 'bnc-nacional-de-credito.png',
                'phone' => '2662'
            ],
        ];

        foreach ($banks as $bank) {
            Bank::create($bank);
        }
    }
}
