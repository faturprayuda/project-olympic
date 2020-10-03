<?php

namespace App\Imports;

use App\Model\Users\Admin\PeringkatSekolah;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;

class PeringkatImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($row);
        $sisa_waktu = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToTimestamp($row[4]);
        // $waktu = gmdate("H:i:s", $sisa_waktu);

        $tanggal = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]);

        $data = [
            'nama_peserta'  => $row[1],
            'nama_sekolah'  => $row[2],
            'nilai'         => $row[3],
            'sisa_waktu'    => $sisa_waktu,
            'tanggal'       => Carbon::today('Asia/Jakarta')
        ];
        return new PeringkatSekolah($data);
    }
}
