<?php

namespace App\Http\Livewire;

use App\Models\scheda as ModelsScheda;
use Livewire\Component;

class Scheda extends Component
{
    public $Forza = 0;
    public $Destrezza = 0;
    public $Costituzione = 0;
    public $Intelligenza = 0;
    public $Saggezza = 0;
    public $Carisma = 0;
    public $carattristiche = array('Forza', 'Destrezza', 'Costituzione', 'Intelligenza', 'Saggezza', 'Carisma');
    public $statsText = 0;
    public $stats;

    public $test = false;

    public function muont()
    {
        $this->selectStats();
    }

    public function render()
    {
        return view('livewire.scheda');
    }
    //////////////
    public function selectStats()
    {
        // $this->statsItem::orderBy('created_at', 'DESC')->get();
        $this->stats = ModelsScheda::all();
        // dd($this->stats[18]);

    }

    public function addStats()
    {
        $stats = new ModelsScheda();
        foreach ($this->carattristiche as $item) {

            $stats->$item = $this->$item;
        }
        $stats->save();

        // $this->statsText = '';
        $this->test = true;
        $this->selectStats();
    }
}
