@extends('layouts.admin')

@section('title', 'Détails de la Commande - AgriCarte')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 fw-bold text-dark">Commande #{{ $order->id }}</h1>
        <div>
            <a href="{{ Auth()->user()->role=='admin' ? route('admin.orders.edit',$order->id) : route('farmer.orders.edit',$order->id) }}" class="btn btn-primary me-2">
                <i class="bi bi-pencil-square me-1"></i> Modifier
            </a>
            <a href="{{ Auth()->user()->role=='admin' ? route('admin.orders.index') : route('farmer.orders.index') }}" class="btn btn-secondary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-arrow-left"></i>
                </span>
                <span class="text">Retour</span>
            </a>
        </div>
    </div>

    <div class="row g-4">
        <!-- Infos commande -->
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white fw-semibold fs-5">Informations de la commande</div>
                <div class="card-body row g-3">
                    <div class="col-md-6">
                        <small class="text-muted">Date de commande</small>
                        <p class="mb-0">{{ $order->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Statut</small>
                        <div>
                            @php
                                $statusClasses = [
                                    'pending' => 'bg-warning text-dark',
                                    'processing' => 'bg-primary',
                                    'shipped' => 'bg-info text-dark',
                                    'delivered' => 'bg-success',
                                    'cancelled' => 'bg-danger',
                                ];
                            @endphp
                            <span class="badge {{ $statusClasses[$order->status] ?? 'bg-secondary' }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Méthode de paiement</small>
                        <p class="mb-0">{{ ucfirst($order->payment_method) }}</p>
                    </div>
                    <div class="col-md-6">
                        <small class="text-muted">Montant total</small>
                        <p class="mb-0 fw-bold text-success fs-5">{{ number_format($order->total_amount, 2) }} FCFA</p>
                    </div>
                </div>
            </div>

            <!-- Produits -->
            <div class="card shadow-sm">
                <div class="card-header bg-white fw-semibold fs-5">Produits commandés</div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Produit</th>
                                <th>Prix unitaire</th>
                                <th>Quantité</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->products as $product)
                                <tr>
                                    <td>
                                        <div class="fw-semibold">{{ $product->name }}</div>
                                        <small class="text-muted">{{ $product->category->name }}</small>
                                    </td>
                                    <td>{{ number_format($product->pivot->price, 2) }} FCFA</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    <td class="fw-semibold">{{ number_format($product->pivot->price * $product->pivot->quantity, 2) }} FCFA</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Infos client -->
        <div class="col-md-4">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white fw-semibold fs-5">Client</div>
                <div class="card-body">
                    <p class="mb-2"><strong>Nom :</strong> {{ $order->user->name }}</p>
                    <p class="mb-2"><strong>Email :</strong> {{ $order->user->email }}</p>
                    <p class="mb-0"><strong>Téléphone :</strong> {{ $order->user->phone ?? 'Non renseigné' }}</p>
                </div>
            </div>

            <div class="card shadow-sm mb-4">
                <div class="card-header bg-white fw-semibold fs-5">Adresses</div>
                <div class="card-body">
                    <p class="mb-2"><strong>Livraison :</strong> {{ $order->shipping_address }}</p>
                    <p class="mb-0"><strong>Facturation :</strong> {{ $order->billing_address }}</p>
                </div>
            </div>

            @if($order->notes)
            <div class="card shadow-sm">
                <div class="card-header bg-white fw-semibold fs-5">Notes</div>
                <div class="card-body">
                    <p class="text-muted fst-italic">{{ $order->notes }}</p>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
