@extends('layouts.page')

@section('content')
    <div>
        <h1>Votre Panier :</h1>
    </div>
    <div>
        <table class="table">
            <thead class="thead-white">
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
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check1">
                        <label class="form-check-label" for="Check1">Supprimer</label>
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
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                        <label class="form-check-label" for="Check2">Supprimer</label>
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
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="Check3">
                        <label class="form-check-label" for="Check3">Supprimer</label>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div>
        <div class="border-top border-dark d-flex align-items-end flex-column">
            <p class="">Total produits TTC : </p>
        </div>
    </div>
    <div>
        <div class="border-top border-dark d-flex align-items-end flex-column">
            <div><p class="d-flex align-content-end">Total frais de port : </p></div>
            <p class="d-flex align-content-end">Total HT : </p>
        </div>
        <div class="border-top border-dark d-flex align-items-end flex-column">
            <p class="">Total taxes : </p>
            <p class="">Total TTC : </p>
        </div>
    </div>
@stop

