
<h1>Sentimeeter</h1>
<form name="cm">
    <label for="resenie">Sisesta </label>
    <input type="number" name="resenie" id="resenie">
    <label for="resenie">cm = </label>
    <select name="dlina" onchange="perevodsm(event)">

        <option value=""></option>
        <option value="kilo">Kilomeetr</option>
        <option value="metr">Meetr</option>
        <option value="deci">Decimeetr</option>
        <option value="canti">Santimeetr</option>
        <option value="mili">Milimeetr</option>
        <option value="mikron">Mikron</option>
        <option value="nano">Nanomeetr</option>
        <option value="ang">Angstrem</option>


    </select>
    <div id="otvet">Vastus</div>
</form>
<br>
<img src="img/nicego.png" alt="pilt" id="pilt">

<h1>Decimeter</h1>
<form name="dm">
    <label for="resenie3">Sisesta </label>
    <input type="number3" name="resenie3" id="resenie3">
    <label for="resenie3">dm = </label>
    <select name="dlina3" onchange="perevodeci(event)">

        <option value=""></option>
        <option value="kilo3">Kilomeetr</option>
        <option value="metr3">Meetr</option>
        <option value="deci3">Decimeetr</option>
        <option value="canti3">Santimeetr</option>
        <option value="mili3">Milimeetr</option>
        <option value="mikron3">Mikron</option>
        <option value="nano3">Nanomeetr</option>
        <option value="ang3">Angstrem</option>


    </select>
    <div id="otvet3">Vastus</div>
</form>


<h1>Meter</h1>
<form name="m">
    <label for="resenie2">Sisesta </label>
    <input type="number2" name="resenie2" id="resenie2">
    <label for="resenie2">m = </label>
    <select name="dlina2" onchange="perevodm(event)">

        <option value=""></option>
        <option value="kilo2">Kilomeetr</option>
        <option value="metr2">Meetr</option>
        <option value="deci2">Decimeetr</option>
        <option value="canti2">Santimeetr</option>
        <option value="mili2">Milimeetr</option>
        <option value="mikron2">Mikron</option>
        <option value="nano2">Nanomeetr</option>
        <option value="ang2">Angstrem</option>


    </select>
    <div id="otvet2">Vastus</div>
</form>

<h1>Kilometer</h1>
<form name="km">
    <label for="resenie4">Sisesta </label>
    <input type="number4" name="resenie4" id="resenie4">
    <label for="resenie4">km = </label>
    <select name="dlina4" onchange="perevodkm(event)">

        <option value=""></option>
        <option value="kilo4">Kilomeetr</option>
        <option value="metr4">Meetr</option>
        <option value="deci4">Decimeetr</option>
        <option value="canti4">Santimeetr</option>
        <option value="mili4">Milimeetr</option>
        <option value="mikron4">Mikron</option>
        <option value="nano4">Nanomeetr</option>
        <option value="ang4">Angstrem</option>


    </select>
    <div id="otvet4">Vastus</div>
</form>

<!--<h1>Kvadratnej koren</h1>
<form name="kvadrat">
    <label for="koren">Sisesta </label>
    <input type="cislo" name="koren" id="koren">
    <label for="koren"> = </label>
    <input type="button" onclick=" return kvadratnej()" value="arvutama">
    <div id="otvet5">Siia tuleb vastus...</div>

    </select>

</form>-->


<section>
    <br>
    <h3>GitHub:</h3>
    <a href="https://github.com/NikitaRimitsen/calculatorNikita">Calculator GitHub</a>

</section>

<script src="dlina2.js"></script>
