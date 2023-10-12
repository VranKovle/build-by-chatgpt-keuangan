<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\transaction; // Import the Transaction model with correct capitalization


class TransactionManager extends Component
{
    public $transactions;
    public $name;
    public $amount;
    public $date;

    public function render()
    {
        $this->transactions = transaction::all(); // Fetch all transactions from the model

        return view('livewire.transaction-manager');
    }

    public function saveTransaction()
    {
        $this->validate([
            'name' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        transaction::create([
            'name' => $this->name,
            'amount' => $this->amount,
            'date' => $this->date,
        ]);

        $this->resetForm();
    }

    public function resetForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->date = '';
    }

    public function deleteTransaction($id)
    {
        transaction::find($id)->delete();
    }
}
