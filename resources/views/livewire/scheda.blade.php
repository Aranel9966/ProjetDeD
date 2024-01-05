


    

    <div class="container">
        <h1>Scheda del Personaggio</h1>

        <table>
            <tr>
                <th>Nome</th>
                <td>Nome del Personaggio</td>
            </tr>
            <tr>
                <th>Razza</th>
                <td>Razza del Personaggio</td>
            </tr>
            <tr>
                <th>Classe</th>
                <td>Classe del Personaggio</td>
            </tr>
            <tr>
                <th>Livello</th>
                <td>Livello del Personaggio</td>
            </tr>

        </table>

        <h2>Statistiche</h2>
       
        <div>
            {{-- <input type="number" wire:model="statsText">
            <button wire:click="addStats">
                prova
            </button>
            <h3>{{$statsText}}</h3> --}}

        </div>
        <table>
            @foreach ($carattristiche as $item)
            <tr>
                <th>{{$item}} <input type="number" wire:model="{{$item}}"></th>
                <td>{{$$item}}</td> 
            </tr>
            @endforeach
        </table>
        <button style="{{ $test ? 'display: none' : 'display: flex'}}"  wire:click="addStats">
            Salva
        </button> 


    </div>



<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    h1 {
        text-align: center;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }
</style>


