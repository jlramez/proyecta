<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Seccione;
use App\Models\Distrito;
use App\Models\Tiposeccione;
use App\Models\Municipio;

class Secciones extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $distritos_id, $entidades_id, $seccion, $tiposecciones_id, $distritosfederales, $municipios_id;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.secciones.view', [
			'municipios' => Municipio::orderby('descripcion','ASC')->get(),
			'tiposecciones' => Tiposeccione::orderby('descripcion','ASC')->get(),
			'distritos' => Distrito::orderby('id','ASC')->get(),
            'secciones' => Seccione::latest()
						->orWhere('distritos_id', 'LIKE', $keyWord)
						->orWhere('seccion', 'LIKE', $keyWord)
						->orWhere('tiposecciones_id', 'LIKE', $keyWord)
						->orWhere('municipios_id', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->distritos_id = null;
		$this->entidades_id = null;
		$this->seccion = null;
		$this->tiposecciones_id = null;
		$this->distritosfederales = null;
		$this->municipios_id = null;
    }

    public function store()
    {
        $this->validate([
		'distritos_id' => 'required',
		//'entidades_id' => 'required',
		'seccion' => 'required',
		'tiposecciones_id' => 'required',
		'distritosfederales' => 'required',
		'municipios_id' => 'required',
        ]);

        Seccione::create([ 
			'distritos_id' => $this-> distritos_id,
			//'entidades_id' => $this-> entidades_id,
			'seccion' => $this-> seccion,
			'tiposecciones_id' => $this-> tiposecciones_id,
			'distritosfederales' => $this-> distritosfederales,
			'municipios_id' => $this-> municipios_id
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Seccione Successfully created.');
    }

    public function edit($id)
    {
        $record = Seccione::findOrFail($id);
        $this->selected_id = $id; 
		$this->distritos_id = $record-> distritos_id;
		//$this->entidades_id = $record-> entidades_id;
		$this->seccion = $record-> seccion;
		$this->tiposecciones_id = $record-> tiposecciones_id;
		$this->distritosfederales = $record-> distritosfederales;
		$this->municipios_id = $record-> municipios_id;
    }

    public function update()
    {
        $this->validate([
		'distritos_id' => 'required',
		//'entidades_id' => 'required',
		'seccion' => 'required',
		'tiposecciones_id' => 'required',
		'distritosfederales' => 'required',
		'municipios_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Seccione::find($this->selected_id);
            $record->update([ 
			'distritos_id' => $this-> distritos_id,
			//'entidades_id' => $this-> entidades_id,
			'seccion' => $this-> seccion,
			'tiposecciones_id' => $this-> tiposecciones_id,
			'distritosfederales_id' => $this-> distritosfederales,
			'municipios_id' => $this-> municipios_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Seccione Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Seccione::where('id', $id)->delete();
        }
    }
}