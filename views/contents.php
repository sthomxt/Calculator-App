
<?php // calculator front end display; ?>
<body>
<div class="calculator">
    <div id="disp"></div>
    <button type="button" onclick="numClick(this)" value="7">7</button>
    <button type="button" onclick="numClick(this)" value="8">8</button>
    <button type="button" onclick="numClick(this)" value="9">9</button>
    <button type="button" onclick="funcClick(this)" value="div">÷</button>
    <button type="button" onclick="numClick(this)" value="4">4</button>
    <button type="button" onclick="numClick(this)" value="5">5</button>
    <button type="button" onclick="numClick(this)" value="6">6</button>
    <button type="button" onclick="funcClick(this)" value="mult">×</button>
    <button type="button" onclick="numClick(this)" value="1">1</button>
    <button type="button" onclick="numClick(this)" value="2">2</button>
    <button type="button" onclick="numClick(this)" value="3">3</button>
    <button type="button" onclick="funcClick(this)" value="sub">-</button>
    <button type="button" onclick="numClick(this)" value="0">0</button>
    <button type="button" onclick="numClick(this)" value=".">.</button>
    <button type="button" onclick="funcClick(this)" value="ce">CE</button>
    <button type="button" onclick="funcClick(this)" value="add">+</button>
    <div class="label">Calc</div>
    <button type="button" onclick="funcClick(this)" value="ac">AC</button>
    <button type="button" onclick="funcClick(this)" value="calculate">=</button>
</div>
<input id="digits" type="hidden" name="digits" value="">
<input id="opers" type="hidden" name="opers" value="">
</body>