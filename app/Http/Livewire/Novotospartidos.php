<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Novotospartido;

class Novotospartidos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $municipios_id, $mun_descripcion, $partidos_id, $partido_descripcion, $novotos;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.novotospartidos.view', [
            'novotospartidos' => Novotospartido::latest()
						->orWhere('municipios_id', 'LIKE', $keyWord)
						->orWhere('mun_descripcion', 'LIKE', $keyWord)
						->orWhere('partidos_id', 'LIKE', $keyWord)
						->orWhere('partido_descripcion', 'LIKE', $keyWord)
						->orWhere('novotos', 'LIKE', $keyWord)
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
		$this->mun_descripcion = null;
		$this->partidos_id = null;
		$this->partido_descripcion = null;
		$this->novotos = null;
    }

    public function store()
    {
        $this->validate([
        ]);

        Novotospartido::create([ 
			'municipios_id' => $this-> municipios_id,
			'mun_descripcion' => $this-> mun_descripcion,
			'partidos_id' => $this-> partidos_id,
			'partido_descripcion' => $this-> partido_descripcion,
			'novotos' => $this-> novotos
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Novotospartido Successfully created.');
    }

    public function edit($id)
    {
        $record = Novotospartido::findOrFail($id);
        $this->selected_id = $id; 
		$this->municipios_id = $record-> municipios_id;
		$this->mun_descripcion = $record-> mun_descripcion;
		$this->partidos_id = $record-> partidos_id;
		$this->partido_descripcion = $record-> partido_descripcion;
		$this->novotos = $record-> novotos;
    }

    public function update()
    {
        $this->validate([
        ]);

        if ($this->selected_id) {
			$record = Novotospartido::find($this->selected_id);
            $record->update([ 
			'municipios_id' => $this-> municipios_id,
			'mun_descripcion' => $this-> mun_descripcion,
			'partidos_id' => $this-> partidos_id,
			'partido_descripcion' => $this-> partido_descripcion,
			'novotos' => $this-> novotos
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Novotospartido Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Novotospartido::where('id', $id)->delete();
        }
    }
}