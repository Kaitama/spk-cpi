<?php

namespace App\Http\Livewire\Proses;

use App\Models\Alternatif;
use App\Models\Kriteria;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;

class Index extends Component
{
	public function render()
	{
		$alternatifs = $this->proses();
		return view('livewire.proses.index', compact('alternatifs'));
	}

	public function print()
	{
		// abaikan garis error di bawah 'Pdf' jika ada.
		$pdf = Pdf::loadView('laporan.cetak', ['data' => $this->proses()])->output();
		// return $pdf->download('Laporan.pdf');
		return response()->streamDownload(fn () => print($pdf), 'Laporan.pdf');
	}

	// proses metode CPI
	public function proses()
	{
		$alternatifs = Alternatif::whereHas('kriterias')->orderBy('kode')->get();
		$kriterias = Kriteria::orderBy('kode')->get();

        $nilai_minimum = [];

        foreach ($kriterias as $kk => $kriteria) {
            $nilai_minimum[$kriteria->kode] = $kriteria->alternatifs()->wherePivot('kriteria_id', $kriteria->id)->orderByPivot('nilai')->first()->pivot->nilai;
        }

        // hitung nilai transformasi tren positif dan negatif
        $nilai_transformasi = [];
        foreach ($alternatifs as $ka => $alternatif) {
            foreach ($alternatif->kriterias as $kk => $kriteria) {
                if ($kriteria->type) {
                    $nilai_transformasi[$alternatif->kode][] = ($kriteria->pivot->nilai / $nilai_minimum[$kriteria->kode]) * 100 ;
                } else {
                    $nilai_transformasi[$alternatif->kode][] = ($nilai_minimum[$kriteria->kode] / $kriteria->pivot->nilai) * 100 ;
                }
            }
        }

        // hitung nilai indeks alternatif
        $array_kriteria = $kriterias->toArray();
        $nilai_indeks = [];
        foreach ($nilai_transformasi as $knt => $transformasi) {
            foreach ($transformasi as $kt => $trans) {
                $nilai_indeks[$knt][] = $trans * $array_kriteria[$kt]['bobot'];
            }
        }

        // hitung nilai indeks gabungan
        $indeks_gabungan = [];
        foreach ($nilai_indeks as $kni => $indeks) {
            $indeks_gabungan[$kni] = floatval(number_format(array_sum($indeks), 2));
        }

        foreach($alternatifs as $key => $alternatif) {
            $alternatif->nilai = $indeks_gabungan[$alternatif->kode];
        }

		return $alternatifs;
	}
}
