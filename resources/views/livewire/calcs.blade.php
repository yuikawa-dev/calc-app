<?php

use function Livewire\Volt\{state, mount};

state(['value1', 'word', 'value2']);

$addition = 'addition';
$subtraction = 'subtraction';
$multiplication = 'multiplication';
$division = 'division';

mount(function () use ($addition, $subtraction, $multiplication, $division) {
    if ($this->word == $addition) {
        $this->mark = '+';
        $this->answer = $this->value1 + $this->value2;
    } elseif ($this->word == $subtraction) {
        $this->mark = '-';
        $this->answer = $this->value1 - $this->value2;
    } elseif ($this->word == $multiplication) {
        $this->mark = '×';
        $this->answer = $this->value1 * $this->value2;
    } elseif ($this->word == $division) {
        $this->mark = '÷';
        $this->answer = $this->value1 / $this->value2;
    } else {
        $this->mark = '?';
        $this->answer = '無効な演算子です';
    }
});

?>

<div>
    <h1>計算結果</h1>
    <p>{{ $value1 }} {{ $this->mark }} {{ $value2 }} = {{ $this->answer }}</p>
</div>
