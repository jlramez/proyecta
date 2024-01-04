<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Municipiosdistrito;

class Municipiosdistritos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $municipios_id, $distritos_id;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.municipiosdistritos.view', [
            'municipiosdistritos' => Municipiosdistrito::latest()
						->orWhere('municipios_id', 'LIKE', $keyWord)
						->orWhere('distritos_id', 'LIKE', $keyWord)
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
		$this->distritos_id = null;
    }

    public function store()
    {
        $this->validate([
		'municipios_id' => 'required',
		'distritos_id' => 'required',
        ]);

        Municipiosdistrito::create([ 
			'municipios_id' => $this-> municipios_id,
			'distritos_id' => $this-> distritos_id
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Municipiosdistrito Successfully created.');
    }

    public function edit($id)
    {
        $record = Municipiosdistrito::findOrFail($id);
        $this->selected_id = $id; 
		$this->municipios_id = $record-> municipios_id;
		$this->distritos_id = $record-> distritos_id;
    }

    public function update()
    {
        $this->validate([
		'municipios_id' => 'required',
		'distritos_id' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Municipiosdistrito::find($this->selected_id);
            $record->update([ 
			'municipios_id' => $this-> municipios_id,
			'distritos_id' => $this-> distritos_id
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Municipiosdistrito Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Municipiosdistrito::where('id', $id)->delete();
        }
    }
}