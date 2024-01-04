<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Partido;
use App\Models\Compmunicipioscoalicione;
use Illuminate\Support\Facades\DB;
class Partidos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $descripcion;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.partidos.view', [
            'partidos' => Partido::latest()
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

        Partido::create([ 
			'descripcion' => $this-> descripcion
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Partido Successfully created.');
    }

    public function edit($id)
    {
        $record = Partido::findOrFail($id);
        $this->selected_id = $id; 
		$this->descripcion = $record-> descripcion;
    }

    public function update()
    {
        $this->validate([
		'descripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Partido::find($this->selected_id);
            $record->update([ 
			'descripcion' => $this-> descripcion
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Partido Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Partido::where('id', $id)->delete();
        }
    }

    public function VVE($id)
    {
       $suma=0;
        $competitividad=Compmunicipioscoalicione::where('partidos_id', $id)->get();
        
       foreach($competitividad as $row)
       {
        $suma=$suma + intval($row->novotos);
        $array_vve[]= ['suma'=>$suma, 'mpio'=>$row->municipios_id];
       }
       dd($competitividad, $suma, $array_vve, $id);
    }
}