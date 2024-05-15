<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculatorRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CalculatorController extends Controller
{
    public function index(): View
    {
        return view('calculator');
    }

    public function calculate(CalculatorRequest $request): View|RedirectResponse
    {
        $number1 = (float) $request->input('number1');
        $number2 = (float) $request->input('number2');
        $operation = $request->input('operation');
        $result = null;

        try {
            $result = match ($operation) {
                'plus' => $number1 + $number2,
                'minus' => $number1 - $number2,
                'multiply' => $number1 * $number2,
                'divide' => $this->handleDivision($number1, $number2),
                default => throw new \InvalidArgumentException('Invalid operation'),
            };
        } catch (\InvalidArgumentException $e) {
            return redirect('/')->withErrors(['operation' => $e->getMessage()])->withInput();
        } catch (\DivisionByZeroError $e) { 
            return redirect('/')->withErrors(['number2' => 'Division by zero is not allowed'])->withInput();
        }

        return view('calculator', compact('number1', 'number2', 'operation', 'result'));
    }

    private function handleDivision(float $number1, float $number2): float
    {
        if ($number2 == 0) {
            throw new \DivisionByZeroError();
        }
        return $number1 / $number2;
    }

    public function jsIndex(): View
    {
        return view('jscalculator');
    }
}
