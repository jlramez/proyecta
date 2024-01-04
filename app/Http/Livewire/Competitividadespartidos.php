<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Competitividadespartido;

class Competitividadespartidos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $municipios_id, $descripcionmunicipio, $votaciontotal, $vve, $competitividadpan, $competitividadpri, $competitividadprd, $competitividadpt, $competitividadpvem, $competitividadmorena, $competitividadpanal, $totalcoalicion1, $totalcoalicion2;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.competitividadespartidos.view', [
            'competitividadespartidos' => Competitividadespartido::latest()
						->orWhere('municipios_id', 'LIKE', $keyWord)
						->orWhere('descripcionmunicipio', 'LIKE', $keyWord)
						->orWhere('votaciontotal', 'LIKE', $keyWord)
						->orWhere('vve', 'LIKE', $keyWord)
						->orWhere('competitividadpan', 'LIKE', $keyWord)
						->orWhere('competitividadpri', 'LIKE', $keyWord)
						->orWhere('competitividadprd', 'LIKE', $keyWord)
						->orWhere('competitividadpt', 'LIKE', $keyWord)
						->orWhere('competitividadpvem', 'LIKE', $keyWord)
						->orWhere('competitividadmorena', 'LIKE', $keyWord)
						->orWhere('competitividadpanal', 'LIKE', $keyWord)
						->orWhere('totalcoalicion1', 'LIKE', $keyWord)
						->orWhere('totalcoalicion2', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->municipios_id = null;
		$this->descripcionmunicipio = null;
		$this->votaciontotal = null;
		$this->vve = null;
		$this->competitividadpan = null;
		$this->competitividadpri = null;
		$this->competitividadprd = null;
		$this->competitividadpt = null;
		$this->competitividadpvem = null;
		$this->competitividadmorena = null;
		$this->competitividadpanal = null;
		$this->totalcoalicion1 = null;
		$this->totalcoalicion2 = null;
    }

    public function store()
    {
        $this->validate([
        ]);

        Competitividadespartido::create([ 
			'municipios_id' => $this-> municipios_id,
			'descripcionmunicipio' => $this-> descripcionmunicipio,
			'votaciontotal' => $this-> votaciontotal,
			'vve' => $this-> vve,
			'competitividadpan' => $this-> competitividadpan,
			'competitividadpri' => $this-> competitividadpri,
			'competitividadprd' => $this-> competitividadprd,
			'competitividadpt' => $this-> competitividadpt,
			'competitividadpvem' => $this-> competitividadpvem,
			'competitividadmorena' => $this-> competitividadmorena,
			'competitividadpanal' => $this-> competitividadpanal,
			'totalcoalicion1' => $this-> totalcoalicion1,
			'totalcoalicion2' => $this-> totalcoalicion2
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Competitividadespartido Successfully created.');
    }

    public function edit($id)
    {
        $record = Competitividadespartido::findOrFail($id);
        $this->selected_id = $id; 
		$this->municipios_id = $record-> municipios_id;
		$this->descripcionmunicipio = $record-> descripcionmunicipio;
		$this->votaciontotal = $record-> votaciontotal;
		$this->vve = $record-> vve;
		$this->competitividadpan = $record-> competitividadpan;
		$this->competitividadpri = $record-> competitividadpri;
		$this->competitividadprd = $record-> competitividadprd;
		$this->competitividadpt = $record-> competitividadpt;
		$this->competitividadpvem = $record-> competitividadpvem;
		$this->competitividadmorena = $record-> competitividadmorena;
		$this->competitividadpanal = $record-> competitividadpanal;
		$this->totalcoalicion1 = $record-> totalcoalicion1;
		$this->totalcoalicion2 = $record-> totalcoalicion2;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = Competitividadespartido::find($this->selected_id);
            $record->update([ 
			'municipios_id' => $this-> municipios_id,
			'descripcionmunicipio' => $this-> descripcionmunicipio,
			'votaciontotal' => $this-> votaciontotal,
			'vve' => $this-> vve,
			'competitividadpan' => $this-> competitividadpan,
			'competitividadpri' => $this-> competitividadpri,
			'competitividadprd' => $this-> competitividadprd,
			'competitividadpt' => $this-> competitividadpt,
			'competitividadpvem' => $this-> competitividadpvem,
			'competitividadmorena' => $this-> competitividadmorena,
			'competitividadpanal' => $this-> competitividadpanal,
			'totalcoalicion1' => $this-> totalcoalicion1,
			'totalcoalicion2' => $this-> totalcoalicion2
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Competitividadespartido Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Competitividadespartido::where('id', $id)->delete();
        }
    }
}