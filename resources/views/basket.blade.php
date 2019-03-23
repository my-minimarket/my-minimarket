@extends('layouts.page')

@section('headTitle')
    {{ $headTitle }}
@endsection

@section('content')
    <div>
        <h1>Votre Panier :</h1>
    </div>
    <div>
        <table class="table">
            <thead class="thead-white border">
            <tr>
                <th scope="col">Produit</th>
                <th scope="col">Description</th>
                <th scope="col">Ref</th>
                <th scope="col">Disponibilité</th>
                <th scope="col">Prix unitaire</th>
                <th scope="col">Qté</th>
                <th scope="col">Total</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="{{ asset('pictures/products/petit_melange-japonais.jpg')}}"
                                     alt="mélange japonais"
                                     width=80" height="100"></td>
                <td> Mélange japonais</td>
                <td> N°001</td>
                <td> Disponible</td>
                <td> 2€</td>
                <td>
                    <div class="form-group d-flex">
                        <button type="button" class="btn btn-primary">+</button>
                        <button type="button" class="btn btn-primary">-</button>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </td>
                <td> 2€</td>
                <td>
                    <div class="form-group ">
                        <button type="button" class="btn btn-link">Supprimer</button>
                    </div>
                </td>
            </tr>
            </tbody>

            <tbody>
            <tr>
                <th scope="row"><img src="{{ asset('pictures/products/petit_the-sencha.jpg')}}" alt="thé sencha"
                                     width=80"
                                     height="100"></th>
                <td> Thé Sencha</td>
                <td> N°002</td>
                <td> Disponible</td>
                <td> 3.2€</td>
                <td>
                    <div class="form-group d-flex">
                        <button type="button" class="btn btn-primary">+</button>
                        <button type="button" class="btn btn-primary">-</button>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </td>
                <td> 3.2€</td>
                <td>
                    <div class="form-group ">
                        <button type="button" class="btn btn-link">Supprimer</button>
                    </div>
                </td>
            </tr>
            </tbody>

            <tbody>
            <tr>
                <th scope="row"><img src="{{ asset('pictures/products/petit_soupe-miso.jpg')}}" alt="soupe miso"
                                     width=80"
                                     height="100"></th>
                <td> Soupe miso</td>
                <td> N°003</td>
                <td> Disponible</td>
                <td> 5€</td>
                <td>
                    <div class="form-group d-flex">
                        <button type="button" class="btn btn-primary">+</button>
                        <button type="button" class="btn btn-primary">-</button>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </td>
                <td> 5€</td>
                <td>
                    <div class="form-group ">
                        <button type="button" class="btn btn-link">Supprimer</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="border-top border-dark">
            <div class="d-flex justify-content-end">
                <p class="col-3">Total frais de port : </p>
                <p class="col-1"> 4€ </p>
            </div>
            <div class="d-flex justify-content-end">
                <p class="col-3">Total HT : </p>
                <p class="col-1"> 8.2€ </p>
            </div>

        </div>
        <div class="border-top border-bottom border-dark">
            <div class="d-flex justify-content-end">
                <p class="col-3">Total taxes : </p>
                <p class="col-1"> 2.20€ </p>
            </div>
            <div class="d-flex justify-content-end">
                <p class="col-3">Total TTC : </p>
                <p class="col-1"> 10.20€ </p>
            </div>
        </div>
    </div>

    <div>
        <div class="mt-3">
            <p>Bon de réduction</p>
            <div class="form-group d-flex">
                <input type="text" class="form-control w-25" placeholder="Code de réduction">
                <button type="submit" class="btn btn-primary">Valider</button>
            </div>
        </div>
    </div>
@stop

