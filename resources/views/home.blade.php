@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Transaksi Keuangan</h1>
                    <tbody>
                        @livewire('transaction-manager') {{-- Menampilkan komponen Livewire --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
