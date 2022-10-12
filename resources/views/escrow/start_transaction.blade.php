@extends('layouts.escrow.app')

@section('content')

<div class="transaction-card container">
    <div class="card mt-4">
        <div class="container-app">
            <h3> Start Transaction </h3>
            <hr class="mb-3">
            <form>
                <div class="form-group">
                    <label> Transaction Title </label>
                    <input class="form-control" type="text" placeholder="transaction title">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col mt-3">
                            <Label>My role</label>
                            <select class="form-control">
                                <option value="buyer">Buyer</option>
                                <option value="seller">Seller</option>
                            </select>
                        </div>
                        <div class="col mt-3">
                            <Label>Currency</label>
                            <select class="form-control">
                                <option value="USD">USD</option>
                                <option value="EURO">EURO</option>
                                <option value="CAD">CAD</option>
                                <option value="NGN">NGN</option>
                            </select>
                        </div>
                        <div class="col mt-3">
                            <Label>Inspection period (Days)</label>
                            <input class="form-control" name="IP" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <p class="mt-3" style="font-weight: bold;">Seller Details</p>
                        <div class="col mt-2">
                            <Label>Email</label>
                            <input class="form-control" name="email" type="email" placeholder="email">
                        </div>
                        <div class="col mt-2">
                            <fieldset>
                                <Label>Phone number</label>
                                <div class="input-group" >
                                        <select class="form-control">
                                            <option>+234</option>
                                            <option>+21</option>
                                            <option>+4</option>
                                            <option>+12</option>
                                            <option>+23</option>
                                            <option>+223</option>
                                        </select>
                                    <div class="input-group-append">
                                        <input class="form-control" name="tel" placeholder="phone number" type="tel">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <hr class="mt-5"> 
                    </div>
                    <div class="policy text-center">
                        <input type="checkbox"><span style="color:grey;"> I have read and agreed to the following general Finapp Instructions and privacy policy</span>
                    </div>
                    <button class="btn btn-outline-primary btn-lg mt-3" style="margin-left: 800px;">Start transaction</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
