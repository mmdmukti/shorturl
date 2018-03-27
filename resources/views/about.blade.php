@extends('layouts.base')

@section('css')
<link rel='stylesheet' href='/css/about.css' />
<link rel='stylesheet' href='/css/effects.css' />
@endsection

@section('content')
<div class='well logo-well'>
    <img class='logo-img' src='/img/logo.png' />
</div>

<div class='about-contents'>
    <dl>
        <p>We optimize the links and make it short.</p>
        <p><h3>Contact Us</h3>
        <table>
            <tr>
                <td><dt>Address: &nbsp;</dt></td>
                <td>Menara Palma 12th Floor, Jl. H.R Rasuna Said Blok X2</td>
            </tr>
            <tr>
                <td></td>
                <td>Kuningan Barat, Jakarta 12950 Indonesia</td>
            </tr>
            <tr>
                <td><dt>Phone:</dt></td>
                <td>+62 856 4299 0808</td>
            </tr>
            <tr>
                <td><dt>Email:</dt></td>
                <td>info@whaapps.com</td>
            </tr>
        </table>
        </p>
    </dl>
</div>

@endsection

@section('js')
<script src='/js/about.js'></script>
@endsection
