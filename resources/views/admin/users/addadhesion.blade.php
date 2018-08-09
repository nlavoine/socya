@extends('layouts.app')

@section('content')

    <h1 class="container mt-5 pt-5 text-center">{{ $user->firstname}} {{ $user->lastname}}</h1>

    <form method="POST" action="{{route('admin.users.validadhesion', ['userid' => $user->id])}}"
          aria-label="{{ __('Addadhesion') }}">
        @csrf
        <div class="form-group row">
            <label for="subscription_type"
                   class="col-md-4 col-form-label text-md-right">{{ __('subscription_type') }}</label>
            <div class="col-md-6">
                <select id="subscription_type" name="subscription_type" class="custom-select">
                    <option selected disabled>Type</option>
                    <option value=1>Chômeur</option>
                    <option value=2>Famille</option>
                    <option value=3>Individuel</option>
                    <option value=4>Etudiant</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="amount"
                   class="col-md-4 col-form-label text-md-right">{{ __('amount') }}</label>
            <div class="col-md-6">
                <input id="amount" type="text"
                       class="form-control{{ $errors->has('amount') ? 'is-invalid' : '' }}"
                       name="amount" value="{{ old('amount') ? '' : '0'}}" required autofocus>
            </div>
        </div>

        <div class="form-group row">
            <label for="payment_methods"
                   class="col-md-4 col-form-label text-md-right">{{ __('payment_methods') }}</label>
            <div class="col-md-6">
                <select id="payment_methods" name="payment_methods" class="custom-select">
                    <option selected disabled>Type</option>
                    <option value=1>Chèque</option>
                    <option value=2>Espèces</option>
                    <option value=3>Carte Bancaire</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="datepicker"
                   class="col-md-4 col-form-label text-md-right">{{ __('subscription_date') }}</label>
            <div class="col-md-6">
                <input id="datepicker" type="date"
                       class="form-control{{ $errors->has('subscription_date') ? ' is-invalid' : '' }}"
                       name="datepicker" value="{{  old('subscription_date') ? '' : date('Y-m-d')}}" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Validate') }}
                </button>
            </div>
        </div>


    </form>


@endsection