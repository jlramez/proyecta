<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Alianza;

class Alianzas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $descripcion;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.alianzas.view', [
            'alianzas' => Alianza::latest()
						->orWhere('descripcion', 'LIKE', $keyWord)
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
    }

    public function store()
    {
        $this->validate([
            'descripcion' => 'required',
           
            ]);

        Alianza::create([ 
			'descripcion' => $this-> descripcion
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Alianza Successfully created.');
    }

    public function edit($id)
    {
        $record = Alianza::findOrFail($id);
        $this->selected_id = $id; 
		$this->descripcion = $record-> descripcion;
    }

    public function update()
    {
        $this->validate([
            'descripcion' => 'required',
           
            ]);

        if ($this->selected_id) {
			$record = Alianza::find($this->selected_id);
            $record->update([ 
			'descripcion' => $this-> descripcion
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Alianza Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Alianza::where('id', $id)->delete();
        }
    }
}