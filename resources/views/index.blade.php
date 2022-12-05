<!-- Stored in resources/views/index.blade.php -->
@extends('layouts.master')

@section('content')
    <form id="form">
        <label for="kick">Digite um número (0 - 10):</label>
        <input type="number" id="kick" min="0" max="10" placeholder="0">

        <button type="submit">Jogar!</button>
    </form>

    <section class="result-box" id="result">
        <h2 id="status">Adivinhe o número sorteado!</h2>
        <span id="attempt">Tentativas: 0</span>
    </section>

    <button id="btnRestart" onclick="restart()">Jogar de novo!</button>


    <footer>
        <p>GuessNumber, 2022 &copy;</p>
    </footer>
@endsection
