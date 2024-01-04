<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Distrito;
use App\Models\Municipio;
use App\Models\MunicipiosDistrito;

class Distritos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $descripcion, $municipios=[];

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.distritos.view', [
            'mpios' => Municipio::all(),
            'distritos' => Distrito::latest()
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

        Distrito::create([ 
			'descripcion' => $this-> descripcion
        ]);
        
        $this->resetInput();
		$this->dispatchBrowserEvent('closeModal');
		session()->flash('message', 'Distrito Successfully created.');
    }

    public function edit($id)
    {
        $record = Distrito::findOrFail($id);
        $this->selected_id = $id; 
		$this->descripcion = $record-> descripcion;
    }

    public function update()
    {
        $this->validate([
		'descripcion' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Distrito::find($this->selected_id);
            $record->update([ 
			'descripcion' => $this-> descripcion
            ]);

            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');
			session()->flash('message', 'Distrito Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            Distrito::where('id', $id)->delete();
        }
    }

    public function addmpio($id)
    {
        $this->selected_id = $id;
    }
    public function storempiodistrito() 
    {
        $this->validate([
            'municipios' => 'required',
            
            ]);
            foreach ($this->municipios as $row=>$valor)
    		{
              
                $record= new MunicipiosDistrito;
                $record->municipios_id= $valor;
                $record->distritos_id= $this->selected_id;
                $record->save();
            }
            $this->resetInput();
            $this->dispatchBrowserEvent('closeModal');           
            session()->flash('message', 'Municipios asignados correctamente.');
    }
}