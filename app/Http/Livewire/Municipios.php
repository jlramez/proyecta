<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Municipio;

class Municipios extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $descripcion, $entidades_id;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.municipios.view', [
            'municipios' => Municipio::orderby('descripcion', 'ASC')->latest()
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('entidades_id', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
    }
	
    private function resetInput()
    {		
		$this->descripcion = null;
		$this->entidades_id = null;
    }

    public function store()
    {
        $this->validate([
		'descripcion' => 'required',
		'entidades_id' => 'required',
        ]);

        Municipio::create([ 
			'descripcion' => $this-> descripcion,
			'entidades_id' => $this-> entidades_id
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Municipio Successfully created.');
    }

    public function edit($id)
    {
        $record = Municipio::findOrFail($id);
        $this->selected_id = $id; 
		$this->descripcion = $record-> descripcion;
		$this->entidades_id = $record-> entidades_id;
    }

    public function update()
    {
        $this->validate([
		'descripcion' => 'required',
		'entidades_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Municipio::find($this->selected_id);
            $record->update([ 
			'descripcion' => $this-> descripcion,
			'entidades_id' => $this-> entidades_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Municipio Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Municipio::where('id', $id)->delete();
        }
    }

    
}