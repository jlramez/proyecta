<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Novotosdistrito;

class Novotosdistritos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $distritos_id, $distritos_desc, $partidos_id, $partidos_desc, $novotos;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.novotosdistritos.view', [
            'novotosdistritos' => Novotosdistrito::latest()
						->orWhere('distritos_id', 'LIKE', $keyWord)
						->orWhere('distritos_desc', 'LIKE', $keyWord)
						->orWhere('partidos_id', 'LIKE', $keyWord)
						->orWhere('partidos_desc', 'LIKE', $keyWord)
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
		$this->distritos_id = null;
		$this->distritos_desc = null;
		$this->partidos_id = null;
		$this->partidos_desc = null;
		$this->novotos = null;
    }

    public function store()
    {
        $this->validate([
		'partidos_desc' => 'required',
        ]);

        Novotosdistrito::create([ 
			'distritos_id' => $this-> distritos_id,
			'distritos_desc' => $this-> distritos_desc,
			'partidos_id' => $this-> partidos_id,
			'partidos_desc' => $this-> partidos_desc,
			'novotos' => $this-> novotos
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Novotosdistrito Successfully created.');
    }

    public function edit($id)
    {
        $record = Novotosdistrito::findOrFail($id);
        $this->selected_id = $id; 
		$this->distritos_id = $record-> distritos_id;
		$this->distritos_desc = $record-> distritos_desc;
		$this->partidos_id = $record-> partidos_id;
		$this->partidos_desc = $record-> partidos_desc;
		$this->novotos = $record-> novotos;
    }

    public function update()
    {
        $this->validate([
		'partidos_desc' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Novotosdistrito::find($this->selected_id);
            $record->update([ 
			'distritos_id' => $this-> distritos_id,
			'distritos_desc' => $this-> distritos_desc,
			'partidos_id' => $this-> partidos_id,
			'partidos_desc' => $this-> partidos_desc,
			'novotos' => $this-> novotos
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Novotosdistrito Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Novotosdistrito::where('id', $id)->delete();
        }
    }
}