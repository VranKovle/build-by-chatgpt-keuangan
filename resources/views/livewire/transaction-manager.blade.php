<div>

    <!-- Form untuk menambahkan transaksi -->
    <form wire:submit.prevent="saveTransaction">
        <input type="text" wire:model="name" placeholder="Nama Transaksi" class="form-control"> <br>
        <input type="number" wire:model="amount" placeholder="Jumlah" class="form-control"> <br>
        <input type="date" wire:model="date" placeholder="Tanggal" class="form-control">
        <button type="submit" class="btn btn-dark" style="margin-top: 10px;">Tambah</button>
    </form>

    <!-- Daftar transaksi yang ada -->
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transactions as $transaction)
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>{{ $transaction->name }}</td>
                    <td>{{ $transaction->amount }}</td>
                    <td>{{ $transaction->date }}</td>
                    <td>
                        <button wire:click="deleteTransaction({{ $transaction->id }})">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
